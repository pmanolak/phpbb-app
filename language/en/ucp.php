<?php
// -------------------------------------------------------------
//
// $Id$
//
// FILENAME  : ucp.php [ English ]
// STARTED   : Sat Dec 16, 2000
// COPYRIGHT : � 2001, 2003 phpBB Group
// WWW       : http://www.phpbb.com/
// LICENCE   : GPL vs2.0 [ see /docs/COPYING ]
//
// -------------------------------------------------------------

// DO NOT CHANGE
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
$lang += array(
	'ACCOUNT_ACTIVE'			=> 'Your account has now been activated. Thank you for registering',
	'ACCOUNT_ACTIVE_ADMIN'		=> 'The account has now been activated',
	'ACCOUNT_ADDED'				=> 'Thank you for registering, your account has been created. You may now login with your username and password',
	'ACCOUNT_COPPA'				=> 'Your account has been created but has to be approved, please check your email for details.',
	'ACCOUNT_INACTIVE'			=> 'Your account has been created. However, this forum requires account activation, an activation key has been sent to the email address you provided. Please check your email for further information',
	'ACCOUNT_INACTIVE_ADMIN'	=> 'Your account has been created. However, this forum requires account activation by the administrator. An email has been sent to them and you will be informed when your account has been activated',
	'ADD'						=> 'Add',
	'ADD_BCC'					=> 'Add [Bcc]',
	'ADD_FOES'					=> 'Add new foes',
	'ADD_FOES_EXPLAIN'			=> 'You may enter several usernames each on a different line',
	'ADD_FOLDER'				=> 'Add folder',
	'ADD_FRIENDS'				=> 'Add new friends',
	'ADD_FRIENDS_EXPLAIN'		=> 'You may enter several usernames each on a different line',
	'ADD_NEW_RULE'				=> 'Add new Rule',
	'ADD_RULE'					=> 'Add Rule',
	'ADD_TO'					=> 'Add [To]',
	'ADMIN_EMAIL'				=> 'Administrators can email me information',
	'AGREE'						=> 'I agree to these terms',
	'ALLOW_PM'					=> 'Allow users to send you private messages',
	'ALLOW_PM_EXPLAIN'			=> 'Note that admins and moderators will always be able to send you messages.',
	'ALREADY_ACTIVATED'			=> 'You have already activated your account',
	'ATTACHMENTS_DELETED'		=> 'Attachments successfully deleted',
	'ATTACHMENT_DELETED'		=> 'Attachment successfully deleted',
	'AVATAR_CATEGORY'			=> 'Category',
	'AVATAR_EXPLAIN'			=> 'Maximum dimensions; width %1$d pixels, height %2$d pixels, filesize %3$dkB.',
	'AVATAR_GALLERY'			=> 'Local gallery',
	'AVATAR_PAGE'				=> 'Page',

	'BACK_TO_DRAFTS'			=> 'Back to saved drafts',
	'BIRTHDAY'					=> 'Birthday',
	'BIRTHDAY_EXPLAIN'			=> 'Setting a year will list your age when it is your birthday.',
	'BOARD_DATE_FORMAT'			=> 'My date format',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'The syntax used is identical to the PHP <a href="http://www.php.net/date" target="_other">date()</a> function',
	'BOARD_DST'					=> 'Daylight Saving Time is in effect',
	'BOARD_LANGUAGE'			=> 'My language',
	'BOARD_STYLE'				=> 'My board style',
	'BOARD_TIMEZONE'			=> 'My timezone',
	'BOOKMARKS'					=> 'Bookmarks',
	'BOOKMARKS_DISABLED'		=> 'Bookmarks are disabled on this board',
	'BOOKMARKS_REMOVED'			=> 'Bookmarks removed successfully',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'You can no longer edit or delete that message',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'Messages can not be moved to the folder which will be removed.',
	'CANNOT_RENAME_FOLDER'		=> 'This folder can not be renamed.',
	'CANNOT_REMOVE_FOLDER'		=> 'This folder can not be removed.',
	'CHANGE_PASSWORD'			=> 'Change password',
	'CHANGE_PASSWORD_EXPLAIN'	=> 'Must be between %1$d and %2$d characters.',
	'CLICK_RETURN_FOLDER'		=> 'Click %1$sHere%2$s to return to your "%3$s" Folder',
	'CONFIRMATION'				=> 'Confirmation of registration',
	'CONFIRM_CODE'				=> 'Confirmation code',
	'CONFIRM_CODE_EXPLAIN'		=> 'Enter the code exactly as you see it in the image, it is case sensitive, zero has a diagonal line through it.',
	'CONFIRM_CODE_WRONG'		=> 'The confirmation code you entered was incorrect.',
	'CONFIRM_EMAIL'				=> 'Confirm email address',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'You only need to specify this if you are changing your email address.',
	'CONFIRM_EXPLAIN'			=> 'To prevent automated registrations the board administrator requires you to enter a confirmation code. The code is displayed in the image you should see below. If you are visually impaired or cannot otherwise read this code please contact the %sBoard Administrator%s.',
	'CONFIRM_PASSWORD'			=> 'Confirm password',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'You only need to confirm your password if you changed it above',
	'COPPA_BIRTHDAY'			=> 'To continue with the registration procedure please tell us when you were born.',
	'COPPA_COMPLIANCE'			=> 'COPPA Compliance',
	'COPPA_EXPLAIN'				=> 'Please note that clicking submit will create your account. However it cannot be activated until a parent or guardian approves your registration. You will be emailed a copy of the necessary form with details of where to send it.',
	'CREATE_FOLDER'				=> 'Add Folder...',
	'CURRENT_IMAGE'				=> 'Current Image',
	'CURRENT_PASSWORD'			=> 'Current password',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'You must confirm your current password if you wish to change it, alter your email address or username.',
	'CUR_PASSWORD_ERROR'		=> 'The current password you entered is incorrect.',

	'DEFAULT_ACTION'			=> 'Default Action',
	'DEFAULT_ACTION_EXPLAIN'	=> 'This Action will be triggered if none of the above is applicable',
	'DEFAULT_ADD_SIG'			=> 'Attach my signature by default',
	'DEFAULT_BBCODE'			=> 'Enable BBCode by default',
	'DEFAULT_HTML'				=> 'Enable HTML by default',
	'DEFAULT_NOTIFY'			=> 'Notify me upon replies by default',
	'DEFAULT_SMILIES'			=> 'Enable smilies by default',
	'DEFINED_RULES'				=> 'Defined Rules',
	'DELETE_ALL'				=> 'Delete all',
	'DELETE_ATTACHMENT'			=> 'Delete Attachment',
	'DELETE_ATTACHMENTS'		=> 'Delete Attachments',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Are you sure you want to delete this attachment?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Are you sure you want to delete these attachments?',
	'DELETE_AVATAR'				=> 'Delete Image',
	'DELETE_COOKIES_CONFIRM'	=> 'Are you sure you want to delete all cookies set by this board?',
	'DELETE_MARKED_PM'			=> 'Delete Marked Messages',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Are you sure you want to delete all marked messages?',
	'DELETE_OLDEST_MESSAGES'	=> 'Delete Oldest Messages',
	'DELETE_MESSAGE'			=> 'Delete Message',
	'DELETE_MESSAGE_CONFIRM'	=> 'Are you sure you want to delete this private message?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Delete all messages within removed folder',
	'DELETE_RULE'				=> 'Delete Rule',
	'DELETE_RULE_CONFIRM'		=> 'Are you sure you want to delete this rule?',
	'DISABLE_CENSORS'			=> 'Enable Word censoring',
	'DISPLAY_GALLERY'			=> 'Display gallery',
	'DOWNLOADS'					=> 'Downloads',
	'DRAFTS_DELETED'			=> 'All selected drafts were successfully deleted.',
	'DRAFTS_EXPLAIN'			=> 'Here you can view, edit and delete your saved drafts.',
	'DRAFT_UPDATED'				=> 'Draft successfully updated.',

	'EDIT_DRAFT_EXPLAIN'		=> 'Here you are able to edit your draft. Drafts do not contain attachment and poll informations.',
	'EMAIL_INVALID_EMAIL'		=> 'The email address you entered is invalid.',
	'EMAIL_REMIND'				=> 'This must be the email address you supplied when registering.',
	'EMAIL_PM'					=> 'Email PM',
	'EMAIL_TAKEN_EMAIL'			=> 'The entered email address is already in use',
	'EMPTY_DRAFT'				=> 'You must enter a message to submit your changes',
	'EMPTY_DRAFT_TITLE'			=> 'You must enter a draft title',
	'EXPORT_AS_XML'				=> 'Export as XML',
	'EXPORT_AS_CSV'				=> 'Export as CSV',
	'EXPORT_AS_TXT'				=> 'Export as TXT',
	'EXPORT_AS_MSG'				=> 'Export as MSG',

	'FIELD_REQUIRED'			=> 'The field "%s" must be completed.',
	'FIELD_TOO_SHORT'			=> 'The field "%1$s" is too short, a minimum of %2$d characters is required.',
	'FIELD_TOO_LONG'			=> 'The field "%1$s" is too long, a maximum of %2$d characters is allowed.',
	'FIELD_TOO_SMALL'			=> 'The value of "%1$s" is too small, a minimum value of %2$d is required.',
	'FIELD_TOO_LARGE'			=> 'The value of "%1$s" is too large, a maximum value of %2$d is allowed.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'The field "%s" has invalid characters, only numbers are allowed.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'The field "%s" has invalid characters, only alphanumeric characters are allowed.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'The field "%s" has invalid characters, only alphanumeric, space or -+_[] characters are allowed.',
	'FIELD_INVALID_DATE'		=> 'The field "%s" has an invalid date.',

	'FOE_MESSAGE'				=> 'Message from foe',
	'FOES_EXPLAIN'				=> 'Foes are users which will be ignored by default. Posts by these users will not be fully visible and personal messages will not be permitted. Please note that you cannot ignore moderators or administrators.',
	'FOES_UPDATED'				=> 'Your foes list has been updated successfully',
	'FOLDER_ADDED'				=> 'Folder successfully added',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d from %2$d messages stored',
	'FOLDER_NAME_EXIST'			=> 'Folder <b>%s</b> already exist',
	'FOLDER_OPTIONS'			=> 'Folder Options',
	'FOLDER_RENAMED'			=> 'Folder successfully renamed',
	'FOLDER_REMOVED'			=> 'Folder successfully removed',
	'FOLDER_STATUS_MSG'			=> 'Folder is %1$d%% full (%2$d from %3$d messages stored)',
	'FORWARD_PM'				=> 'Forward PM',
	'FRIEND_MESSAGE'			=> 'Message from friend',
	'FRIENDS'					=> 'Friends',
	'FRIENDS_EXPLAIN'			=> 'Friends enable you quick access to members you communicate with frequently. If the template has relevant support any posts made by a friend may be highlighted.',
	'FRIENDS_OFFLINE'			=> 'Offline',
	'FRIENDS_ONLINE'			=> 'Online',
	'FRIENDS_UPDATED'			=> 'Your friends list has been updated successfully',
	'FULL_FOLDER_OPTION_CHANGED'=> 'Full Folder Option changed successfully',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Original Message --------',
	'FWD_SUBJECT'				=> 'Subject: %s',
	'FWD_DATE'					=> 'Date: %s',
	'FWD_FROM'					=> 'From: %s',
	'FWD_TO'					=> 'To: %s',

	'HIDE_ONLINE'				=> 'Hide my online status',
	'HOLD_NEW_MESSAGES'			=> 'Do not accept new messages (New messages will be held back until enough space is available)',

	'IF_FOLDER_FULL'			=> 'If Folder Full',
	'IMPORTANT_NEWS'			=> 'Important announcements',

	'LANGUAGE'					=> 'Language',
	'LINK_REMOTE_AVATAR'		=> 'Link off-site',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Enter the URL of the location containing the Avatar image you wish to link to.',
	'LINK_REMOTE_SIZE'			=> 'Avatar dimensions',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Specify the width and height of the avatar, leave blank to attempt automatic verification.',
	'LOGIN_EXPLAIN_UCP'			=> 'Please Login in order to access the User Control Panel',
	'LOGIN_REDIRECT'			=> 'You have been successfully logged in.',
	'LOGOUT_REDIRECT'			=> 'You have been successfully logged out.',

	'MARK_IMPORTANT'			=> 'Mark as Important',
	'MARKED_MESSAGE'			=> 'Marked Message',
	'MAX_FOLDER_REACHED'		=> 'Maximum number of allowed user defined folder reached',
	'MESSAGE_COLOURS'			=> 'Message Colours',
	'MESSAGE_HISTORY'			=> 'Message History',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'This message has been removed by it\'s author before it was delivered',
	'MESSAGE_REPORTED'			=> 'Click to view reports',
	'MESSAGE_REPORTED_MESSAGE'	=> 'Reported Message',
	'MESSAGE_STORED'			=> 'The message has been send successfully',
	'MOVE_DELETED_MESSAGES_TO'	=> 'Move messages from removed folder to',
	'MOVE_DOWN'					=> 'Move down',
	'MOVE_PM_ERROR'				=> 'An error occurred while moving the messages to the new folder, only %1d from %2d messages were moved.',
	'MOVE_TO_FOLDER'			=> 'Move to Folder',
	'MOVE_UP'					=> 'Move up',

	'NEW_EMAIL_ERROR'			=> 'The email addresses you entered do not match.',
	'NEW_FOLDER_NAME'			=> 'New folder name',
	'NEW_PASSWORD'				=> 'Password',
	'NEW_PASSWORD_ERROR'		=> 'The passwords you entered do not match.',
	'NEW_PASSWORD_EXPLAIN'		=> 'Must be between %1$d and %2$d characters.',
	'NOTIFY_METHOD'				=> 'Notification method',
	'NOTIFY_METHOD_BOTH'		=> 'Both',
	'NOTIFY_METHOD_EMAIL'		=> 'Email only',
	'NOTIFY_METHOD_EXPLAIN'		=> 'Method for sending messages sent via this board.',
	'NOTIFY_METHOD_IM'			=> 'Jabber only',
	'NOTIFY_ON_PM'				=> 'Email me on new private messages',
	'NOT_ADDED_FOES'			=> 'Usernames not added to foes list because of administrator/moderator status.',
	'NOT_AGREE'					=> 'I do not agree to these terms',
	'NOT_ENOUGH_SPACE_FOLDER'	=> 'The Destination Folder "%s" seems to be full. The requested action has not been taken.',
	'NOT_MOVED_MESSAGE'			=> 'You have 1 private message currently on hold because of full folder.',
	'NOT_MOVED_MESSAGES'		=> 'You have %d private messages currently on hold because of full folder.',
	'NO_ACTION_MODE'			=> 'No message action specified',
	'NO_AUTHOR'					=> 'No author defined for this message',

	'NO_AUTH_DELETE_MESSAGE'	=> 'You are not authorized to delete private messages.',
	'NO_AUTH_EDIT_MESSAGE'		=> 'You are not authorized to edit private messages.',
	'NO_AUTH_FORWARD_MESSAGE'	=> 'You are not authorized to forward private messages.',
	'NO_AUTH_GROUP_MESSAGE'		=> 'You are not authorized to send private messages to groups.',
	'NO_AUTH_READ_MESSAGE'		=> 'You are not authorized to read private messages.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'You are not able to read this message because it was removed by the author.',
	'NO_AUTH_SEND_MESSAGE'		=> 'You are not authorized sending private messages.',
	'NO_AUTH_SIGNATURE'			=> 'You are not authorized to define a signature',

	'NO_BOOKMARKS'				=> 'You have no bookmarks',
	'NO_BOOKMARKS_SELECTED'		=> 'You have selected no bookmarks',
	'NO_EMAIL_USER'				=> 'The email/username information submitted could not be found',
	'NO_FOES'					=> 'No foes currently defined',
	'NO_FRIENDS'				=> 'No friends currently defined',
	'NO_FRIENDS_OFFLINE'		=> 'No friends offline',
	'NO_FRIENDS_ONLINE'			=> 'No friends online',
	'NO_IMPORTANT_NEWS'			=> 'No important announcements present',
	'NO_MESSAGE'				=> 'Private Message could not be found',
	'NO_NEW_FOLDER_NAME'		=> 'You have to specify a new folder name',
	'NO_NEWER_PM'				=> 'No newer messages',
	'NO_OLDER_PM'				=> 'No older messages',
	'NO_RECIPIENT'				=> 'No recipient defined',
	'NO_RULES_DEFINED'			=> 'No rules defined',
	'NO_SAVED_DRAFTS'			=> 'No drafts saved',
	'NO_WATCHED_FORUMS'			=> 'You are not watching any forums.',
	'NO_WATCHED_TOPICS'			=> 'You are not watching any topics.',

	'PASSWORD_ACTIVATED'		=> 'Your new password has been activated',
	'PASSWORD_UPDATED'			=> 'Your password has been sent successfully to your original email address.',
	'PM_DISABLED'				=> 'Private messaging has been disabled on this board',
	'PM_FROM'					=> 'From',
	'PM_ICON'					=> 'PM Icon',
	'PM_INBOX'					=> 'Inbox',
	'PM_OUTBOX'					=> 'Outbox',
	'PM_SENTBOX'				=> 'Sentbox',
	'PM_SUBJECT'				=> 'Message Subject',
	'PM_TO'						=> 'Send To',
	'POPUP_ON_PM'				=> 'Pop up window on new private message',
	'POST_EDIT_PM'				=> 'Edit message',
	'POST_FORWARD_PM'			=> 'Forward message',
	'POST_NEW_PM'				=> 'Post message',
	'POST_PM_LOCKED'			=> 'Private Messaging is locked',
	'POST_QUOTE_PM'				=> 'Quote message',
	'POST_REPLY_PM'				=> 'Reply to message',
	'PRINT_PM'					=> 'Print View',
	'PREFERENCES_UPDATED'		=> 'Your preferences have been updated.',
	'PROFILE_INFO_NOTICE'		=> 'Please note that this information will be viewable to other members. Be careful when including any personal details. Any fields marked with a * must be completed.',
	'PROFILE_UPDATED'			=> 'Your profile has been updated.',

	'RECIPIENT'					=> 'Recipient',
	'RECIPIENTS'				=> 'Recipients',
	'REGISTRATION'				=> 'Registration',
	'RELEASE_MESSAGES'			=> 'Click %sHere%s to release the on-hold messages, they will be re-sorted into the appropiate folder if enough space is made available.',
	'REMOVE_ADDRESS'			=> 'Remove address',
	'REMOVE_SELECTED_BOOKMARKS'	=> 'Remove selected bookmarks',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM' => 'Are you sure you want to delete all selected bookmarks?',
	'REMOVE_BOOKMARK_MARKED'	=> 'Remove marked bookmarks',
	'REMOVE_FOLDER'				=> 'Remove folder',
	'REMOVE_FOLDER_CONFIRM'		=> 'Are you sure you want to remove this folder?',
	'RENAME'					=> 'Rename',
	'RENAME_FOLDER'				=> 'Rename folder',
	'REPLIED_MESSAGE'			=> 'Replied to Message',
	'REPORT_PM'					=> 'Report PM',
	'REPORT_PM_NOTIFY'			=> 'Send report notifications as PM',
	'REPORT_PM_NOTIFY_EXPLAIN'	=> 'If enabled, notifications and status updates to new reports get send as PM instead of emailing them.',
	'RETURN_FOLDER'				=> 'Click %1$sHere%2$s to return to folder',
	'RETURN_UCP'				=> 'Click %sHere%s to return to the User Control Panel',
	'RULE_ADDED'				=> 'Rule successfully added',
	'RULE_ALREADY_DEFINED'		=> 'This rule was defined previously',
	'RULE_DELETED'				=> 'Rule successfully removed',
	'RULE_NOT_DEFINED'			=> 'Rule not correctly specified',

	'SEARCH_YOUR_POSTS'			=> 'Show your posts',
	'SEND_PASSWORD'				=> 'Send password',
	'SENT_AT'					=> 'Sent At',
	'SHOW_EMAIL'				=> 'Users can contact me by email',
	'SIGNATURE_EXPLAIN'			=> 'This is a block of text that can be added to posts you make. There is a %d character limit',
	'SIGNATURE_PREVIEW'			=> 'Your signature will appear like this in posts',
	'SIGNATURE_TOO_LONG'		=> 'Your signature is too long.',
	'SORT'						=> 'Sort',
	'SORT_COMMENT'				=> 'File Comment',
	'SORT_DOWNLOADS'			=> 'Downloads',
	'SORT_EXTENSION'			=> 'Extension',
	'SORT_FILENAME'				=> 'Filename',
	'SORT_POST_TIME'			=> 'Post Time',
	'SORT_SIZE'					=> 'Filesize',

	'TIMEZONE'					=> 'Timezone',
	'TO'						=> 'To',
	'TOO_MANY_RECIPIENTS'		=> 'Too many recipients',
	'TOO_MANY_REGISTERS'		=> 'You have exceeded the maximum number of registration attempts for this session. Please try again later.',

	'UCP'						=> 'User Control Panel',
	'UCP_ADMIN_ACTIVATE'		=> 'Please note that you will need to enter a valid email address before your account is activated. The administrator will review your account and if approved you will an email at the address you specified.',
	'UCP_AGREEMENT'				=> 'While the administrators and moderators of this forum will attempt to remove or edit any generally objectionable material as quickly as possible, it is impossible to review every message. Therefore you acknowledge that all posts made to these forums express the views and opinions of the author and not the administrators, moderators or webmaster (except for posts by these people) and hence will not be held liable.<br /><br />You agree not to post any abusive, obscene, vulgar, slanderous, hateful, threatening, sexually-orientated or any other material that may violate any applicable laws. Doing so may lead to you being immediately and permanently banned (and your service provider being informed). The IP address of all posts is recorded to aid in enforcing these conditions. You agree that the webmaster, administrator and moderators of this forum have the right to remove, edit, move or close any topic at any time should they see fit. As a user you agree to any information you	have entered above being stored in a database. While this information will not be disclosed to any third party without your consent the webmaster, administrator and moderators cannot be held responsible for any hacking attempt that may lead to the data being compromised.<br /><br />This forum system uses cookies to store information on your local computer. These cookies do not contain any of the information you have entered above, they serve only to improve your viewing pleasure. The email address is used only for confirming your registration details and password (and for sending new passwords should you forget your current one).<br /><br />By clicking Register below you agree to be bound by these conditions.',
	'UCP_AIM'					=> 'AOL Instant Messenger',
	'UCP_ATTACHMENTS'			=> 'Attachments',
	'UCP_COPPA_BEFORE'			=> 'Before %s',
	'UCP_COPPA_ON_AFTER'		=> 'On or After %s',
	'UCP_EMAIL_ACTIVATE'		=> 'Please note that you will need to enter a valid email address before your account is activated. You will recieve an email at the address you provide that contains an account activation link.',
	'UCP_ICQ'					=> 'ICQ Number',
	'UCP_JABBER'				=> 'Jabber Address',

	'UCP_MAIN'					=> 'Overview',
	'UCP_MAIN_BOOKMARKS'		=> 'Bookmarks',
	'UCP_MAIN_DRAFTS'			=> 'Saved drafts',
	'UCP_MAIN_FRONT'			=> 'Front page',
	'UCP_MAIN_SUBSCRIBED'		=> 'Subscribed',

	'UCP_MSNM'					=> 'MSN Messenger',
	'UCP_NO_ATTACHMENTS'		=> 'You have posted no files',

	'UCP_PREFS'					=> 'Preferences',
	'UCP_PREFS_PERSONAL'		=> 'Personal Settings',
	'UCP_PREFS_POST'			=> 'Posting Messages',
	'UCP_PREFS_VIEW'			=> 'Viewing Posts',
	
	'UCP_PM'					=> 'Private Messages',
	'UCP_PM_COMPOSE'			=> 'Compose Message',
	'UCP_PM_DRAFTS'				=> 'PM Drafts',
	'UCP_PM_OPTIONS'			=> 'Options',
	'UCP_PM_UNREAD'				=> 'Unread Messages',
	'UCP_PM_VIEW_MESSAGES'		=> 'View Messages',

	'UCP_PROFILE'				=> 'Profile',
	'UCP_PROFILE_AVATAR'		=> 'Your avatar',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Your Profile',
	'UCP_PROFILE_REG_DETAILS'	=> 'Registration details',
	'UCP_PROFILE_SIGNATURE'		=> 'Your signature',

	'UCP_REGISTER_DISABLE'		=> 'Creating a new account is currently not possible.',
	'UCP_REMIND'				=> 'Send password',
	'UCP_WATCHED'				=> 'Watched items',
	'UCP_WELCOME'				=> 'Welcome to the User Control Panel. From here you can monitor, view and update your profile, preferences, subscribed forums and topics. You can also send messages to other users (if permitted). Please ensure you read any announcements before continuing.',
	'UCP_YIM'					=> 'Yahoo Messenger',
	'UCP_ZEBRA'					=> 'Friends and Foes',
	'UCP_ZEBRA_FOES'			=> 'Foes',
	'UCP_ZEBRA_FRIENDS'			=> 'Friends',
	'UNKNOWN_FOLDER'			=> 'Unknown Folder',
	'UNREAD_MESSAGES'			=> 'Unread Messages',
	'UNWATCH_MARKED'			=> 'Unwatch marked',
	'UPLOAD_AVATAR_FILE'		=> 'Upload from your machine',
	'UPLOAD_AVATAR_URL'			=> 'Upload from a URL',
	'UPLOAD_AVATAR_URL_EXPLAIN'	=> 'Enter the URL of the location containing the image, it will be copied to this site.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'Username must be between %1$d and %2$d chars long and use only alphanumeric characters',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'Username must be between %1$d and %2$d chars long and use alphanumeric, space or -+_[] characters.',
	'USERNAME_CHARS_ANY_EXPLAIN'=> 'Length must be between %1$d and %2$d characters.',
	'USERNAME_TAKEN_USERNAME'	=> 'The username you entered is already in use, please select an alternative.',
	'USER_NOT_FOUND'			=> 'The usernames you specified could not be found.',

	'VIEW_AVATARS'				=> 'Display Avatars',
	'VIEW_EDIT'					=> 'View/Edit',
	'VIEW_FLASH'				=> 'Display Flash animations',
	'VIEW_IMAGES'				=> 'Display Images within posts',
	'VIEW_NEXT_HISTORY'			=> 'Next PM in history',
	'VIEW_NEXT_PM'				=> 'Next PM',
	'VIEW_PM'					=> 'View Message',
	'VIEW_PM_INFO'				=> 'Message Details',
	'VIEW_PM_MESSAGE'			=> '1 Message',
	'VIEW_PM_MESSAGES'			=> '%d Messages',
	'VIEW_PREVIOUS_HISTORY'		=> 'Previous PM in history',
	'VIEW_PREVIOUS_PM'			=> 'Previous PM',
	'VIEW_SIGS'					=> 'Display Signatures',
	'VIEW_SMILIES'				=> 'Display Smileys as images',
	'VIEW_TOPICS_DAYS'			=> 'Display topics from previous days',
	'VIEW_TOPICS_DIR'			=> 'Display topic order direction',
	'VIEW_TOPICS_KEY'			=> 'Display topics ordering by',
	'VIEW_POSTS_DAYS'			=> 'Display posts from previous days',
	'VIEW_POSTS_DIR'			=> 'Display post order direction',
	'VIEW_POSTS_KEY'			=> 'Display posts ordering by',

	'WATCHED_FORUMS'			=> 'Watched Forums',
	'WATCHED_TOPICS'			=> 'Watched Topics',
	'WRONG_ACTIVATION'			=> 'The activation key you supplied does not match any in the database',

	'YOUR_DETAILS'				=> 'Your activity',
	'YOUR_FOES'					=> 'Your foes',
	'YOUR_FOES_EXPLAIN'			=> 'To remove usernames select them and click submit',
	'YOUR_FRIENDS'				=> 'Your friends',
	'YOUR_FRIENDS_EXPLAIN'		=> 'To remove usernames select them and click submit',
	'YOUR_KARMA'				=> 'Your Karma level',
	'YOUR_WARNINGS'				=> 'Your Warning level',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Place into folder',
		'MARK_AS_READ'		=> 'Mark as read',
		'MARK_AS_IMPORTANT'	=> 'Mark Message',
		'DELETE_MESSAGE'	=> 'Delete Message'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Subject',
		'SENDER'	=> 'Sender',
		'MESSAGE'	=> 'Message',
		'STATUS'	=> 'Message Status',
		'TO'		=> 'Sent To'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'Is Like',
		'IS_NOT_LIKE'	=> 'Is Not Like',
		'IS'			=> 'Is',
		'IS_NOT'		=> 'Is Not',
		'BEGINS_WITH'	=> 'Begins with',
		'ENDS_WITH'		=> 'Ends with',
		'IS_FRIEND'		=> 'Is Friend',
		'IS_FOE'		=> 'Is Foe',
		'IS_USER'		=> 'Is User',
		'IS_GROUP'		=> 'Is In Usergroup',
		'ANSWERED'		=> 'Answered',
		'FORWARDED'		=> 'Forwarded',
		'REPORTED'		=> 'Reported',
		'TO_GROUP'		=> 'Usergroup',
		'TO_ME'			=> 'Me'
	),


	'UCP_GROUPS_MEMBERSHIP'	=> 'Memberships',
	'UCP_GROUPS_MANAGE'		=> 'Manage groups',
	'GROUPS_EXPLAIN'		=> 'Usergroups enable board admins to better administer users. By default you will be placed in a specific group, this is your default group. This group defines how you may appear to other users, for example your username colouration, avatar, rank, etc. Depending on whether the administrator allows it you may be allowed to change your default group. You may also be placed in or allowed to join other groups. Some groups may give you extra rights to view content or increase your capabilities in other areas.',
	'GROUP_LEADER'		=> 'Leaderships',
	'GROUP_MEMBER'		=> 'Memberships',
	'GROUP_PENDING'		=> 'Pending memberships',
	'GROUP_NONMEMBER'	=> 'Non-memberships',
	'GROUP_DETAILS'		=> 'Group details',

	'NO_LEADER'		=> 'No group leaderships',
	'NO_MEMBER'		=> 'No group memberships',
	'NO_PENDING'	=> 'No pending memberships',
	'NO_NONMEMBER'	=> 'No non-member groups',

	'QUIT_ALL'		=> 'Quit all',
	'QUIT_MARKED'	=> 'Quit marked',
	'JOIN_ALL'		=> 'Join all',
	'JOIN_MARKED'	=> 'Join marked',
);

?>
