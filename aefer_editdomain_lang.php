<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdomain_lang.php
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

$l['no_domain'] = 'No domain name was specified';
$l['alreay_exists'] = 'The submitted domain already exists in your account.';
$l['no_ftp_user'] = 'No FTP user was specified';
$l['no_ftp_pass'] = 'No FTP password was specified';
$l['no_ftp_path'] = 'No FTP PATH was specified';
$l['no_data_dir'] = 'No Data Directory was specified';
$l['wrong_ftp_path'] = 'The FTP path submitted is incorrect and does not point to the given domain.';
$l['no_id'] = 'No ID Found !';
$l['no_backup_path'] = 'No Backup PATH was specified';
$l['ftp_error-1'] = 'Could not Resolve Domain Name';
$l['ftp_error-2'] = 'Could not login with specified FTP details';
$l['ftp_error-3'] = 'Specified FTP Path does not exist';

//Theme Strings
$l['<title>'] = 'Edit a Domain';
$l['edit_domain'] = 'Edit Domain';
$l['domain'] = 'Domain Name';
$l['domain_exp'] = 'Enter a valid domain name (without http://) e.g. mydomain.com';
$l['ftp_user'] = 'FTP User';
$l['ftp_user_exp'] = 'The username of your FTP Account';
$l['ftp_pass'] = 'FTP Password';
$l['ftp_pass_exp'] = 'The Password of your FTP account';
$l['ftp_path'] = 'FTP Path';
$l['ftp_path_exp'] = 'Relative path to web accessible directory of user. e.g. /public_html';
$l['backup_path'] = 'Backup Path';
$l['backup_path_exp'] = 'Relative path from Home directory of user. e.g. /backups';
$l['data_dir'] = 'Data Directory';
$l['data_dir_exp'] = 'Full Path to Data Directory e.g. /home/USER/datadir<br/>Some scripts like Elgg, Moodle, etc need a non web accessible folder.<br/>This will be used for that purpose.';
$l['ins_email_exp'] = 'Send an email containing setup details when you install a new software';
$l['submit_edit'] = 'Save & Update';
$l['settings_saved'] = 'Your Domain was saved successfully';
$l['show_all_dom'] = 'Show all domains';

?>