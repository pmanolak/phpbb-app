<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

namespace phpbb\console\command\user;

use phpbb\exception\runtime_exception;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class add extends \phpbb\console\command\command
{
	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\passwords\manager */
	protected $password_manager;

	/**
	* phpBB root path
	* @var string
	*/
	protected $phpbb_root_path;

	/**
	* PHP extension.
	*
	* @var string
	*/
	protected $php_ext;

	/**
	* Construct method
	*
	* @param \phpbb\user $user The user object used for language information
	* @param \phpbb\db\driver\driver_interface $db The database in wich will be inserted the user
	* @param \phpbb\config\config $config The config object used to get default language and timezone
	* @param \phpbb\passwords\manager $password_manager The password manager used to store the user's password
	* @param string $phpbb_root_path Root path
	* @param string $php_ext PHP extension
	*/
	public function __construct(\phpbb\user $user, \phpbb\db\driver\driver_interface $db, \phpbb\config\config $config, \phpbb\passwords\manager $password_manager, $phpbb_root_path, $php_ext)
	{
		$this->db = $db;
		$this->config = $config;
		$this->password_manager = $password_manager;
		$this->phpbb_root_path = $phpbb_root_path;
		$this->php_ext = $php_ext;

		$user->add_lang('ucp');
		parent::__construct($user);
	}

	/**
	* Sets the command name and description
	*
	* @return null
	*/
	protected function configure()
	{
		$this
			->setName('user:add')
			->setDescription($this->user->lang('CLI_DESCRIPTION_USER_ADD'))
			->addOption('username', null, InputOption::VALUE_REQUIRED, $this->user->lang('CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'))
			->addOption('password', null, InputOption::VALUE_REQUIRED, $this->user->lang('CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'))
			->addOption('email', null, InputOption::VALUE_REQUIRED, $this->user->lang('CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'))
			->addOption('send-email', null, InputOption::VALUE_NONE, $this->user->lang('CLI_CONFIG_PRINT_WITHOUT_NEWLINE'))
		;
	}

	/**
	* Executes the command user:add
	*
	* If not given in option, asks the username, password and email.
	* Then a new user is added in the database, with language and timezone found in the $config passed to the constructor, and the group_id found in the database.
	*
	* @param InputInterface $input The input stream used to get the options
	* @param OutputInterface $output The output stream, used to print messages
	*
	* @return int 0 if all is well, 1 if a database error occured while trying to get the group_id
	*/
	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$io = new SymfonyStyle($input, $output);

		$dialog = $this->getHelperSet()->get('dialog');

		$username = $input->getOption('username');
		if (!$username) {
			$username = $dialog->ask(
				$output,
				$this->user->lang('USERNAME') . $this->user->lang('COLON') . ' ',
				null
			);
		}

		$password = $input->getOption('password');
		if (!$password)
		{
			$password = $this->get_password($output, $dialog);
		}

		$email = $input->getOption('email');
		if (!$email)
		{
			$email = $dialog->ask(
				$output,
				$this->user->lang('EMAIL_ADDRESS') . $this->user->lang('COLON') . ' ',
				null
			);
		}

		$data = array(
			'username'		=> $username,
			'new_password'	=> $password,
			'email'			=> $email,
		);

		try
		{
			$this->validate_user_data($data);
		}
		catch (runtime_exception $e)
		{
			$io->error($e->getMessage());
			return 1;
		}

		try
		{
			$group_id = $this->get_group_id();
		}
		catch (runtime_exception $e)
		{
			$io->error($e->getMessage());
			return 1;
		}

		$user_row = array(
			'username'				=> $username,
			'user_password'			=> $this->password_manager->hash($password),
			'user_email'			=> $email,
			'group_id'				=> $group_id,
			'user_timezone'			=> $this->config['board_timezone'],
			'user_lang'				=> $this->config['default_lang'],
			'user_type'				=> USER_NORMAL,
			'user_regdate'			=> time(),
		);

		if (!function_exists('user_add'))
		{
			require($this->phpbb_root_path . 'includes/functions_user.' . $this->php_ext);
		}

		$user_id = user_add($user_row);

		if ($input->getOption('send-email') && $this->config['email_enable'])
		{
			$this->send_activation_email($user_id, $data);
		}

		$io->success($this->user->lang('SUCCESS_ADD_USER', $username));

		return 0;
	}

	/**
	* Get the password
	*
	* Asks a password to the user and asks for confirmation.
	* This is repeated until the password match is confirmed.
	*
	* @param OutputInterface $output The output stream, where messages are printed
	* @param \Symfony\Component\Console\Helper\DialogHelper $dialog The dialog helper used to get answers to questions asked to the user
	*
	* @return null
	*/
	protected function get_password($output, $dialog)
	{
		$current_user = $this->user;
		return $dialog->askHiddenResponseAndValidate(
			$output,
			$current_user->lang('PASSWORD') . $current_user->lang('COLON') . ' ',
			function ($answer) use ($dialog, $output, $current_user)
			{
				$confirm = $dialog->askHiddenResponse(
					$output,
					$current_user->lang('CONFIRM_PASSWORD') . $current_user->lang('COLON') . ' ',
					null
				);
				if ($confirm != $answer)
				{
					throw new runtime_exception($current_user->lang('NEW_PASSWORD_ERROR'));
				}
				return $answer;
			},
			false,
			null
		);
	}

	/**
	* Validate the submitted user data
	*
	* @param array $data The user data array
	* @throws runtime_exception if any data fails validation
	* @return null
	*/
	protected function validate_user_data($data)
	{
		if (!function_exists('validate_data'))
		{
			require($this->phpbb_root_path . 'includes/functions_user.' . $this->php_ext);
		}

		$error = validate_data($data, array(
			'username'		=> array(
				array('string', false, $this->config['min_name_chars'], $this->config['max_name_chars']),
				array('username', '')),
			'new_password'		=> array(
				array('string', false, $this->config['min_pass_chars'], $this->config['max_pass_chars']),
				array('password')),
			'email'			=> array(
				array('string', false, 6, 60),
				array('user_email')),
		));

		if ($error)
		{
			throw new runtime_exception(implode("\n", array_map(array($this->user, 'lang'), $error)));
		}
	}

	/**
	* Get the group id
	*
	* Go and find in the database the group_id corresponding to 'REGISTERED'
	*
	* @throws runtime_exception if the group id does not exist in database.
	* @return null
	*/
	protected function get_group_id()
	{
		$sql = 'SELECT group_id
			FROM ' . GROUPS_TABLE . "
			WHERE group_name = '" . $this->db->sql_escape('REGISTERED') . "'
				AND group_type = " . GROUP_SPECIAL;
		$result = $this->db->sql_query($sql);
		$row = $this->db->sql_fetchrow($result);
		$this->db->sql_freeresult($result);

		if (!$row || !$row['group_id'])
		{
			throw new runtime_exception($this->user->lang('NO_GROUP'));
		}

		return $row['group_id'];
	}

	/**
	* Send account activation email
	*
	* @param int $user_id The new user's id
	* @param array $data  The user data array
	* @return null
	*/
	protected function send_activation_email($user_id, $data)
	{
		if ($this->config['require_activation'] == USER_ACTIVATION_SELF)
		{
			$email_template = 'user_welcome_inactive';
			$user_actkey = gen_rand_string(mt_rand(6, 10));
		}
		else if ($this->config['require_activation'] == USER_ACTIVATION_ADMIN)
		{
			$email_template = 'admin_welcome_inactive';
			$user_actkey = gen_rand_string(mt_rand(6, 10));
		}
		else
		{
			$email_template = 'user_welcome';
			$user_actkey = '';
		}

		if (!class_exists('messenger'))
		{
			require($this->phpbb_root_path . 'includes/functions_messenger.' . $this->php_ext);
		}

		$messenger = new \messenger(false);

		$messenger->template($email_template, $this->user->lang_name);

		$messenger->to($data['email'], $data['username']);

		$messenger->anti_abuse_headers($this->config, $this->user);

		$messenger->assign_vars(array(
			'WELCOME_MSG'	=> htmlspecialchars_decode($this->user->lang('WELCOME_SUBJECT', $this->config['sitename'])),
			'USERNAME'		=> htmlspecialchars_decode($data['username']),
			'PASSWORD'		=> htmlspecialchars_decode($data['new_password']),
			'U_ACTIVATE'	=> generate_board_url() . "/ucp.{$this->php_ext}?mode=activate&u=$user_id&k=$user_actkey")
		);

		$messenger->send(NOTIFY_EMAIL);
	}
}
