<?php

//////////////////////////////////////////////////////////////
//===========================================================
// adddomain_lang.php
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
$l['no_backup_path'] = 'No Backup PATH was specified';
$l['wrong_ftp_path'] = 'The FTP path submitted is incorrect and does not point to the given domain.';
$l['ftp_error-1'] = 'Could not Resolve Domain Name';
$l['ftp_error-2'] = 'Could not login with specified FTP details';
$l['ftp_error-3'] = 'Specified FTP Path does not exist';


//Theme Strings
$l['<title>'] = 'Add a Domain';
$l['add_domain'] = 'Add Domain';
$l['domain'] = 'Domain Name';
$l['domain_exp'] = 'Enter a valid domain name (without http://) e.g. mydomain.com';
$l['ftp_user'] = 'FTP User';
$l['ftp_user_exp'] = 'The username of your FTP Account';
$l['ftp_pass'] = 'FTP Password';
$l['ftp_pass_exp'] = 'The Password of your FTP account';
$l['ftp_path'] = 'FTP Path';
$l['ftp_path_exp'] = 'The FTP Path to your domain e.g. /public_html';
$l['backup_path'] = 'Backup Path';
$l['backup_path_exp'] = 'The Backup Path for your Backups made by Softaculous e.g. /backups';
$l['ins_email_exp'] = 'Send an email containing setup details when you install a new software';
$l['submit_add'] = 'Test and Save Domain';
$l['settings_saved'] = 'Your Domain was saved successfully';
$l['show_all_dom'] = 'Show all domains';

?>