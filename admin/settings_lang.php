<?php

//////////////////////////////////////////////////////////////
//===========================================================
// settings_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 1.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

$l['no_path'] = 'No path was posted';
$l['wrong_path'] = 'Could not locate universal.php at the path you specified';
$l['no_softscripts'] = 'No path of the script/software location was given';
$l['wrong_softscripts'] = 'The script/software path is wrong as it does not exist';
$l['no_sn'] = 'No site name was specified.';
$l['no_cookie_name'] = 'No cookie name was specified';
$l['no_soft_email'] = 'No email address was provided';
$l['wrong_soft_email'] = 'The Admin email address you submitted is invalid';
$l['wrong_from_email'] = 'The From email address you submitted is invalid';
$l['no_license'] = 'No license key was submitted';
$l['no_lang'] = 'No language was selected';
$l['wrong_lang'] = 'The selected language is invalid';
$l['no_theme_folder'] = 'No theme was selected';
$l['wrong_theme_folder'] = 'The selected theme is invalid';
$l['no_timezone'] = 'No timezone was selected';
$l['wrong_timezone'] = 'The selected timezone is invalid';
$l['no_cron_time'] = 'No cron job time was specified';
$l['no_off_message'] = 'No switch off subject was specified';
$l['no_off_subject'] = 'No switch off message was specified';
$l['saving_error'] = 'There were some errors while saving the settings';
$l['no_update'] = 'No update preference was submitted';
$l['invalid_update'] = 'An invalid update preference was submitted';
$l['no_protocol'] = 'No protocol was selected';
$l['wrong_protocol'] = 'The selected protocol is invalid';
$l['wrong_network_interface'] = 'The network interface you specified is not valid';
$l['err_bandwidth_limit'] = 'The bandwidth limit you specified is not valid';

//Theme Strings
$l['<title>'] = APP.' - Settings Center';
$l['settings_saved'] = 'The settings were saved successfully';
$l['pathhead'] = 'Software Paths';
$l['softpath'] = APP.' Path';
$l['softpath_exp'] = 'This is the path where all files excluding the various scripts are located';
$l['softscripts'] = 'Scripts Path';
$l['softscripts_exp'] = 'This is the path where all software/scripts are located';
$l['gen_set'] = 'General Settings';
$l['sitename'] = 'Site Name';
$l['sitename_exp'] = 'The name of the server or company using '.APP.'. It will appear in many pages of the '.APP.' installer';
$l['cook_name'] = 'Cookie Name';
$l['cook_name_exp'] = 'The name of the cookie that will be stored on browsers.';
$l['comp_output'] = 'Compress Output';
$l['comp_output_exp'] = 'This will compress output and it saves a lot of bandwidth.';
$l['soft_email'] = 'Admin Email Address';
$l['soft_email_exp'] = 'The email address to which the CRON activities and other admin related emails are sent to.';
$l['from_email'] = 'From Email Address';
$l['from_email_exp'] = 'The email address for the FROM headers.';
$l['license'] = 'license Key';
$l['license_exp'] = 'Please put the correct license key issued by '.APP;
$l['choose_lang'] = 'Choose Language';
$l['choose_lang_exp'] = 'Choose your preferred language';
$l['choose_theme'] = 'Choose Theme';
$l['choose_theme_exp'] = 'The selected theme will be the default theme throughout '.APP;
$l['timezone'] = 'Timezone';
$l['update_settings'] = 'Update Settings';
$l['auto_upd_softac'] = 'Auto Update '.APP;
$l['auto_upd_softac_exp'] = 'If enabled '.APP.' will automatically update itself to the latest version. <br />The <b>Stable</b> branch is launched after the Release Candidate has been thorughly tested. <br />The <b>Release Candidate</b> branch contains the latest version and features.';
$l['never_update'] = 'Never Update';
$l['stable'] = 'Stable (Recommended)';
$l['release_cand'] = 'Release Candidate (Experimental!)';
$l['auto_upd_soft'] = 'Auto Update Scripts';
$l['auto_upd_soft_exp'] = 'If enabled, the various scripts or software will be automatically updated to their latest versions';
$l['auto_add_soft'] = 'Auto Add New Scripts';
$l['auto_add_soft_exp'] = 'If enabled, new scripts or software will be added during the maintenance cron job. RECOMMENDED';
$l['email_upd_soft'] = 'Notify Updates';
$l['email_upd_soft_exp'] = 'Will send emails when '.APP.' upgrades are available or Auto Upgrade is performed';
$l['email_upd_softs'] = 'Notify Script Updates';
$l['email_upd_softs_exp'] = 'Will send emails when scripts or software updates are available or auto update of scripts or software is performed';
$l['cron_time'] = 'Updates Cron Job';
$l['cron_time_exp'] = 'The cron job time to check for available updates. Don\'t change this if you are unaware of what cron jobs are';
$l['disable_soft'] = 'Disable '.APP;
$l['soft_off'] = 'Turn '.APP.' Off';
$l['soft_off_exp'] = 'This will disable '.APP.' and users will not be able to use it!';
$l['off_sub'] = 'Switch Off Subject';
$l['off_message'] = 'Switch Off Message';
$l['edit_settings'] = 'Edit Settings';
$l['chmod_files'] = 'CHMOD Files';
$l['chmod_files_exp'] = 'This is useful if you have suPHP installed and '.APP.' is unable to detect it. Leave blank if unsure.';
$l['chmod_dir'] = 'CHMOD Directories';
$l['chmod_dir_exp'] = 'This is useful if you have suPHP installed and '.APP.' is unable to detect it. Leave blank if unsure.';
$l['is_vps'] = 'Is VPS';
$l['is_vps_exp'] = 'If this server is a VPS then please check this box.';
$l['eu_news_off'] = 'Disable End User News';
$l['eu_news_off_exp'] = 'If checked this will disable the enduser news of various scripts. This news is for users. It gives latest development news on various scripts, their updates etc.';
$l['logo_url'] = 'Logo URL';
$l['logo_url_exp'] = 'If empty the '.APP.' logo will be shown.';
$l['php_bin'] = 'PHP Binary';
$l['php_bin_exp'] = 'This is the binary that will be used for the CRON Job and also other purposes. If empty then <b>/usr/bin/php</b> will be used.';
$l['end_user_set'] = 'End User Panel Settings';
$l['off_sync_link'] = 'Turn Off Sync Link';
$l['off_sync_link_exp'] = 'This will turn off the Synchronize Link for the endusers.';
$l['off_panel_link'] = 'Turn Off Control Panel Link';
$l['off_panel_link_exp'] = 'This will turn off the Control Panel Link in the Dock for the endusers.';
$l['chmod_conf_file'] = 'CHMOD Config files';
$l['chmod_conf_file_exp'] = 'Config files of scripts will be CHMOD to this value. The default is 0644. (Dont edit / leave blank if you dont know!)';
$l['suphp_detected'] = 'suPHP Detected';
$l['no_prefill'] = 'Don\'t Prefill Directory Name';
$l['no_prefill_exp'] = 'Don\'t prefill the directory name with the scripts name by default.';
$l['footer_link'] = 'Footer Link';
$l['footer_link_exp'] = 'When someone installs a Script, this link / text will be inserted in the footer of that installation';
$l['eu_email_off'] = 'Disable End User Update E-Mails';
$l['eu_email_off_exp'] = 'If checked no emails will be sent to the enduser when there is a Update available.';
$l['random_username'] = 'Generate Random Username for users';
$l['random_username_exp'] = 'If checked then randomly generated admin usernames will be made during an installation.';
$l['random_pass'] = 'Generate Random Password for users';
$l['random_pass_exp'] = 'If checked then randomly generated admin passwords will be made during an installation.';
$l['off_demo_link'] = 'Turn Off Script Demos';
$l['off_demo_link_exp'] = 'This will turn off the Demos for the endusers.';
$l['off_rating_link'] = 'Turn Off Script Ratings';
$l['off_rating_link_exp'] = 'This will turn off the Ratings for the endusers.';
$l['off_review_link'] = 'Turn Off Script Reviews';
$l['off_review_link_exp'] = 'This will turn off the Reviews for the endusers.';
$l['off_screenshot_link'] = 'Turn Off Script Screenshots';
$l['off_screenshot_link_exp'] = 'This will turn off the Screenshots for the endusers.';
$l['random_dbprefix'] = 'Generate Random Database Prefix for users';
$l['random_dbprefix_exp'] = 'If checked then a randomly generated Database Prefix will be made during an installation.';
$l['remote_mysql'] = 'Remote Mysql Hostname';
$l['remote_mysql_exp'] = 'If you wish to use remote mysql, specify the Remote Mysql Hostname or IP';
$l['perl_scripts'] = 'Disable PERL Scripts';
$l['perl_scripts_exp'] = 'This will turn off the PERL Scripts for the endusers';
$l['show_top_scripts'] = 'Show Top Scripts Group';
$l['show_top_scripts_exp'] = 'This will display the Top Scripts Group to the endusers for easy access to the scripts installation pages. To disable this feature, leave this field <b>blank</b>.';
$l['err_change_app_name'] = 'Error occured while changing the name of the Group';
$l['hide_dbprefix'] = 'Hide th Databse Prefix for the script';
$l['hide_dbprefix_exp'] = 'If checked, then no Database Prefix will be available for the Script.';
$l['user_mod_dir'] = 'Use USER MOD DIR';
$l['user_mod_dir_exp'] = 'Users can install scripts on http://IP/~user';
$l['off_email_link'] = 'Turn Off all Email to Endusers';
$l['off_email_link_exp'] = 'This will turn off the Email Link for the endusers and ALSO disable emails that are sent during installation, removal, etc.';
$l['disable_classes'] = 'Disable PHP Classes';
$l['disable_classes_exp'] = 'This will disable PHP Classes from the enduser.';
$l['panel_hf'] = 'Show Softaculous in cPanel\'s Native UI.';
$l['panel_hf_exp'] = 'If this is enabled than Softaculous will be shown in cPanel\'s Native UI.';
$l['disable_backup_restore'] = 'Disable Backup/Restore Function for Endusers';
$l['disable_backup_restore_exp'] = 'This will turn off the backup and restore function for endusers.';
$l['nolabels'] = 'Disable ALL Scripts Category.';
$l['nolabels_exp'] = 'If enabled than no category will be displayed in enduser panel. i.e. PHP, Jvascripts, PERL, Classes these all category will be disabled.';
$l['settings'] = APP.' Settings';
$l['disable_reseller_panel'] = 'Disable Reseller Panel';
$l['disable_reseller_panel_exp'] = 'If enabled than the resellers will not be able to access reseller panel.';
$l['choose_protocol'] = 'Choose Protocol';
$l['choose_protocol_exp'] = 'Choose your preferred protocol. It will be selected by default for enduser.';
$l['network_interface'] = 'Network Interface';
$l['network_interface_exp'] = 'The public network interface of the server. Leave blank if you dont know';
$l['bandwidth_limit'] = 'Bandwidth Limit (in MB)';
$l['bandwidth_limit_exp'] = 'If bandwidth limit exceeds the threshold you will receive an email';

?>