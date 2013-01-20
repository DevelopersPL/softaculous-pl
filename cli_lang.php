<?php

//////////////////////////////////////////////////////////////
//===========================================================
// cli_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 4.1.7
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

$l['err_cannot_autoupgrade'] = "Auto upgrade can not be performed for this control panel.\n";
$l['err_invalid_param'] = "Invalid parameter &soft-1;\nPlease read the documetation for more details :\nhttp://www.softaculous.com/docs/Upgrade_Script_from_CLI\n";
$l['err_no_input'] = "Please provide some inputs.\n";
$l['err_no_insid'] = "Installation Id is not provided.\n";
$l['err_no_username'] = "Username is not provided.\n";
$l['err_no_such_user'] = "No such user found.\n";
$l['err_dont_provide_username'] = "Username is not required.\n";
$l['err_no_softdir'] = "Softdir not found for user &soft-1;\n";
$l['err_no_installation'] = "No installation found for Installation ID : &soft-1;\n";
$l['err_cant_upgrade'] = "This installation is already at latest version OR This script can not be Auto Upgraded.\n";
$l['err_backup_fail'] = "Backup was not successful so aborting the upgrade process...\n";
$l['err_upgrade_restore_failed'] = APP." had created a backup while upgrading, but the restore process also failed!!";
$l['err_upgrade_restore_success'] = "But ".APP." had created a backup before upgrading, and installation has been restored successfully!!";
$l['err_could_not_posix'] = 'Could not switch to user so aborting process...';
$l['err_cant_upgrade_for_this_server'] = "Auto upgrade can not be performed. \n Because external URL is not accessible. This might be due to allow_url_fopen() disabled on your server or CURL failed to access the URL.";

?>
