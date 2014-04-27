<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdetail_lang.php
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

$l['no_ins'] = 'No installation was submitted';
$l['wrong_ins_title'] = 'Wrong Istallation ID';
$l['wrong_ins'] = 'The installation ID you submitted does not exist';
$l['cant_remove_dir'] = 'The directory cannot be removed as it is the home directory. Please uncheck the <b>Remove Directory</b> option to continue without removing the directory.';
$l['no_dir'] = 'The installation directory does not exists !';
$l['no_datadir'] = 'The data directory does not exists !';
$l['no_wwwdir'] = 'The Web directory does not exists !';
$l['wrong_url'] = 'The URL and DIRECTORY name do not match';
$l['wrong_wwwurl'] = 'The WEB URL and WEB DIRECTORY name do not match';
$l['err_mysql_user'] = 'The MySQL Username or Password or Database host is wrong as a connection could not be established.';
$l['err_mysql_db'] = 'The MySQL database name is incorrect as the database could not be selected.';
$l['mail_path'] = 'Path';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'MySQL Database';
$l['mail_dbuser'] = 'MySQL DB User';
$l['mail_dbhost'] = 'MySQL DB Host';
$l['mail_dbpass'] = 'MySQL DB Password';
$l['mail_time'] = 'Time of Installation';
$l['mail_editdetail_time'] = 'Time of Modification';
$l['mail_subject'] = 'Modified Installation Details of &soft-1;';
$l['mail_cron_command'] = 'CRON Job';
$l['mail_datadir'] = 'Data Directory';
$l['mail_wwwdir'] = 'Web Directory';
$l['mail_wwwurl'] = 'Web Directory URL';

//Theme Strings
$l['<title>'] = APP.' - Edit Detail';
$l['info'] = 'Info';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Installation Number';
$l['ins_ver'] = 'Version';
$l['ins_time'] = 'Installation Time';
$l['ins_path'] = 'Path';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = 'Admin URL';
$l['ins_db'] = 'Database Name';
$l['ins_dbuser'] = 'Database User';
$l['ins_dbpass'] = 'Database Password';
$l['ins_dbhost'] = 'Database Host';
$l['ins_datadir'] = 'Data Directory';
$l['ins_wwwdir'] = 'Web Directory';
$l['ins_wwwurl'] = 'Web Directory URL';
$l['ins_cron_command'] = 'Cron Command';
$l['details_edited'] = 'The installation details were edited successfully';
$l['version_edited'] = 'The version has been updated in our records.';
$l['return'] = 'Return to Overview';

$l['edit_ins'] = 'Edit Installation Details';
$l['edit_dir'] = 'Directory';
$l['edit_datadir'] = 'Data Directory';
$l['edit_db'] = 'Database Name';
$l['edit_dbuser'] = 'Database User';
$l['edit_dbpass'] = 'Database Password';
$l['edit_dbhost'] = 'Database Host';
$l['edit_url'] = 'URL';
$l['editins'] = 'Edit Installation Details';
$l['mail_editdetail_ins'] = 'The installation details of &soft-1; has been modified. Following are the modified details of the installation : ';
$l['edit_wwwdir'] = 'Web Directory';
$l['edit_wwwurl'] = 'Web Directory URL';
$l['disable_notify_update'] = 'Disable Update Notifications';
$l['exp_disable_notify_update'] = 'If checked you will not receive an email notification for updates available for this installation.';
$l['alreadyupdated'] = 'Hmm ... it looks like the actual version of the installation is <b>&soft-1;</b> and not <b>&soft-2;</b>. <br />Click here to update '.APP.' records.';
$l['edit_acc_detail'] = 'Edit Admin Account Details';
$l['eu_auto_upgrade'] = 'Auto Upgrade';
$l['exp_eu_auto_upgrade'] = 'If checked, this installation will be automatically upgraded to the latest version when a new version is available.';
$l['auto_backup'] = 'Automated backups';
$l['exp_auto_backup'] = APP.' will take automated backups via CRON as per the frequency you select';
$l['auto_backup_rotation'] = 'Backup Rotation';
$l['exp_auto_backup_rotation'] = 'If the backup rotation limit is reached '.APP.' will delete the oldest backup for this installation and create a new backup. The backups will utilize your space so choose the backup rotation as per the space available on your server';
$l['no_backup'] = 'Don\'t backup';
$l['daily'] = 'Once a day';
$l['weekly'] = 'Once a week';
$l['monthly'] = 'Once a month';
$l['unlimited'] = 'Unlimited';

$l['no_edit'] = 'The EDIT.XML file could not be found! Please report this to the server administrator.';
$l['no_functions'] = 'The EDIT FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_field'] = 'The field <b>&soft-1;</b> is required and must be filled out.';

?>