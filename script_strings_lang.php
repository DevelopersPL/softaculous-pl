<?php

//////////////////////////////////////////////////////////////
//===========================================================
// script_strings_lang.php
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

$l['ss'] = array();

// 'ss'stands for script strings
$l['ss']['err_php'] = 'The PHP version is less than the required 5.2.0 version!';
$l['ss']['db_set'] = 'Database Settings';
$l['ss']['db_pre'] = 'Table Prefix';
$l['ss']['ad_act'] = 'Admin Account';
$l['ss']['ad_name'] = 'Admin Username';
$l['ss']['ad_pass'] = 'Admin Password';
$l['ss']['ad_email'] = 'Admin Email';
$l['ss']['err_no_token'] = 'The token functions are not available!';
$l['ss']['err_mb'] = 'The MultiByte String functions are not available!';
$l['ss']['err_openconfig'] = 'Could not open the Configuration File';
$l['ss']['err_writeconfig'] = 'Could not write the Configuration File';
$l['ss']['err_selectmy'] = 'The MySQL Database could not be selected.';
$l['ss']['err_myconn'] = 'The MySQL Connection could not be established.';
$l['ss']['err_wrongemail'] = 'The email address is not valid.';
$l['ss']['err_ademail'] = 'The email address is not valid.';
$l['ss']['settings'] = 'Board Settings';
$l['ss']['name'] = 'Board Name';
$l['ss']['name_exp'] = 'The name of the forum';
$l['ss']['email'] = 'Board Email';
$l['ss']['email_exp'] = 'The forums email address';
$l['ss']['mysql_pre'] = 'MySQL Database Prefix';
$l['ss']['utf8'] = 'Use UTF-8 Character Set';
$l['ss']['utf8_exp'] = 'Use if you are going to work with multiple languages';
$l['ss']['err_openmy'] = 'Could not open the MySQL Data File';
$l['ss']['err_makequery'] = 'Could not make the query numbered';
$l['ss']['err_mynum'] = 'MySQL Error No';
$l['ss']['err_myerr'] = 'MySQL Error';
$l['ss']['err_boardemail'] = 'The Board Email Address is not valid';
$l['ss']['site_con'] = 'Site config';
$l['ss']['wiki_name'] = 'Wiki name';
$l['ss']['wiki_mail'] = 'Wiki Email';
$l['ss']['err_myfile'] = 'The MySQL file could not be opened.';
$l['ss']['err_ad_name'] = 'is invalid due to empty, IP, slash, length, or lowercase.';
$l['ss']['site_set'] = 'Site Settings';
$l['ss']['site_name'] = 'Site Name';
$l['ss']['site_desc'] = 'Site Description';
$l['ss']['ad_lang'] = 'Choose Language';
$l['ss']['select_lang'] = 'Select Language';
$l['ss']['site_desc_exp'] = 'A little description of the gallery';
$l['ss']['err_admin_userpass'] = 'Admin username and password must only contain alphanumeric characters';
$l['ss']['acl_policy'] = 'ACL Policy';
$l['ss']['acl_0'] = 'Open Wiki';
$l['ss']['acl_1'] = 'Public Wiki';
$l['ss']['acl_2'] = 'Closed Wiki';
$l['ss']['acl_0_exp'] = 'Open Wiki - (read, write, upload for everyone)';
$l['ss']['acl_1_exp'] = 'Public Wiki - (read for everyone, write and upload for registered users)';
$l['ss']['acl_2_exp'] = 'Closed Wiki - (read, write, upload for registered users only)';
$l['ss']['real_name'] = 'Real Name';
$l['ss']['err_realname'] = 'The Real Name cannot contain - ":"';
$l['ss']['err_adname'] = 'The Admin Name must only contain Alpha Numeric Characters';
$l['ss']['comp_name'] = 'Company Name';
$l['ss']['err_username'] = 'Username cannot be admin';
$l['ss']['f_name'] = 'First Name';
$l['ss']['l_name'] = 'Last Name';
$l['ss']['sample_data'] = 'Import Sample Data';
$l['ss']['data_dir'] = 'Geeklog Data Directory';
$l['ss']['data_dir_exp'] = 'It will be in the root home directory of your account. Should not be accessible via the WEB!';
$l['ss']['noreply_email'] = 'No-Reply Email';
$l['ss']['err_data_dir'] = 'The Data Directory already exists.';
$l['ss']['err_data_dir_ext'] = 'The Data Directory could not be extracted.';
$l['ss']['err_data_dir_not'] = 'The Data Directory could not be FOUND.';
$l['ss']['site_shortname'] = 'Site Short Name';
$l['ss']['sitename'] = 'Site Name';
$l['ss']['mail_name'] = 'Mailing List Name';
$l['ss']['imap'] = 'IMAP Settings';
$l['ss']['imap_ser'] = 'Server Address';
$l['ss']['imap_port'] = 'IMAP Port';
$l['ss']['imap_tls'] = 'TLS/SSL';
$l['ss']['smtp'] = 'SMTP Settings';
$l['ss']['smtp_ser'] = 'Server Address';
$l['ss']['smtp_port'] = 'SMTP Port';
$l['ss']['smtp_tls'] = 'TLS/SSL';
$l['ss']['store_set'] = 'Store Settings';
$l['ss']['store_name'] = 'Store Name';
$l['ss']['ad_dir'] = 'Old Admin Folder';
$l['ss']['ad_dir_upg'] = 'The admin folder name of your installation';
$l['ss']['store_owner'] = 'Store Owner';
$l['ss']['store_address'] = 'Store Address';
$l['ss']['err_admin_folder'] = 'The Admin folder name cannot be "admin" !';
$l['ss']['err_folder_not_exist'] = 'The Admin folder -'.optPOST('admin_folder').'- does not exist. Please Enter the correct Admin folder !';
$l['ss']['err_admin_dir_upg'] = 'The Admin folder name you gave was not found !';
$l['ss']['store_desc'] = 'Store Description';
$l['ss']['err_pass'] = 'The Password must be of 8 Characters.';
$l['ss']['opening'] = 'Opening Message';
$l['ss']['err_no_short'] = 'PHP short tags need to be enabled!.';
$l['ss']['err_pdo'] = 'The pdo_mysql extension is not loaded!';
$l['ss']['err_curl'] = 'The CURL extension is not loaded!';
$l['ss']['err_gd'] = 'The GD functions are not there';
$l['ss']['err_zlib'] = 'The ZLib functions are not there';
$l['ss']['err_safe_mode'] = 'Safe Mode needs to be OFF for installation to continue';
$l['ss']['err_no_iconv'] = 'The iconv functions are not available.';
$l['ss']['site_subtitle'] = 'Podcast Subtitle';
$l['ss']['campus'] = 'Campus Name';
$l['ss']['err_mysql'] = 'The MySQL version is less than the required 4.0.0 version';
$l['ss']['err_xml'] = 'The XML Functions were not found.';
$l['ss']['site_email'] = 'Site Email';
$l['ss']['license_key'] = 'Valid License Key';
$l['ss']['license_key_exp'] = 'You can obtain a Trial License from here';
$l['ss']['err_license_invalid'] = 'The license you entered is not a valid one. Please enter a Valid License';
$l['ss']['admin_name'] = 'Real Name';
$l['ss']['err_passlen'] = 'The password length should be 6 or more characters.';
$l['ss']['err_passlen5'] = 'The password length should be 5 or more characters.';
$l['ss']['passnote'] = 'Minimum 6 characters';
$l['ss']['Sample_Data'] = 'Sample Data';
$l['ss']['first_forum'] = 'First Forum Name';
$l['ss']['select_type'] = 'Type of Site';
$l['ss']['realname'] = 'First Name';
$l['ss']['first_name'] = 'First Name';
$l['ss']['last_name'] = 'Last Name';
$l['ss']['company_name'] = 'Company Name';
$l['ss']['ad_keyword'] = 'Keyword(Needed when resetting your pasword)';
$l['ss']['nick_name'] = 'Nickname';
$l['ss']['multisite'] = 'Enable Multisite (WPMU)';
$l['ss']['exp_multisite'] = 'This feature will Enable Multisite option for your WordPress blog. <br />Your server must support Apache mod_rewrite to use this feature.';
$l['ss']['cookie_domain'] = 'Cookie Domain Name';
$l['ss']['exp_cookie_domain'] = 'The domain of the cookie that will be used by the forum. If your forum is at http://www.mysite.com/forum, your cookie domain should be .mysite.com';
$l['ss']['select_adm_lang'] = 'Select Admin Language';
$l['ss']['select_end_lang'] = 'Select Site Language';
$l['ss']['err_php53'] = 'The PHP Version is less than the required 5.3+';
$l['ss']['err_php531'] = 'The PHP Version is less than the required 5.3.1';
$l['ss']['err_php532'] = 'The PHP Version is less than the required 5.3.2';
$l['ss']['err_php533'] = 'The PHP Version is less than the required 5.3.3';
$l['ss']['err_php537'] = 'The PHP Version is less than the required 5.3.7';
$l['ss']['err_php53_com'] = ' is not compatible with PHP version 5.3+';
$l['ss']['fancyurls'] = 'Enable Fancy URLs';
$l['ss']['exp_fancyurls'] = 'This feature will Enable Fancy URLs option for your StatusNet installation.';
$l['ss']['conn_type'] = 'Connection Type';
$l['ss']['exp_imap_ser'] = 'Please provide the Server Address you wish to use. <br /> If you want to Enter it after installation Leave this feild <b>blank</b>.';
$l['ss']['site_dom'] = 'Site Domain';
$l['ss']['exp_site_dom'] = 'This is the domain name of your site which you want to track.';
$l['ss']['in_set'] = 'Incoming Mail Settings';
$l['ss']['out_set'] = 'Outgoing Mail Settings';
$l['ss']['conn_protocol'] = 'Connection Protocol';
$l['ss']['ssl_protocol'] = 'Use SSL';
$l['ss']['host_ser'] = 'Server Address';
$l['ss']['m_port'] = 'Port';
$l['ss']['exp_in_host_ser'] = 'Please provide the Incoming Mail Server Address you wish to use.<br />You can change this later from the WebMail Admin Panel.';
$l['ss']['exp_out_host_ser'] = 'Please provide the Outgoing Mail Server Address you wish to use.<br />You can change this later from the WebMail Admin Panel.';
$l['ss']['shell_cmd'] = 'Shell Commands details';
$l['ss']['svn_location'] = 'Subversion Locations';
$l['ss']['htpassword_cmd'] = 'htpassword Command';
$l['ss']['exp_htpassword_cmd'] = 'Path to the htpassword file.';
$l['ss']['svn_cmd'] = 'SVN Command';
$l['ss']['exp_svn_cmd'] = 'Path to the SVN file.';
$l['ss']['svnadmin_cmd'] = 'Svnadmin Command';
$l['ss']['exp_svnadmin_cmd'] = 'Path to the svnadmin file.';
$l['ss']['svn_repos_loc'] = 'SVN Repository Location';
$l['ss']['exp_svn_repos_loc'] = 'Path to the svn repository directory (without the trailing slash).';
$l['ss']['err_htpassword'] = 'The htpassword file does not exist.';
$l['ss']['err_svn_cmd'] = 'The SVN file does not exist.';
$l['ss']['err_svnadmin_cmd'] = 'The svnadmin file does not exist.';
$l['ss']['err_svn_config_dir'] = 'The SVN config directory does not exist.';
$l['ss']['err_svn_repos_loc'] = 'The SVN repository directory does not exist.';
$l['ss']['err_svn_passwd_file'] = 'The SVN password file does not exist.';
$l['ss']['err_svn_access_file'] = 'The SVN access file does not exist.';
$l['ss']['err_auto_upgrade'] = 'The Auto Upgrade process could not run the script upgrade utility.';

//Uncommon things

if($GLOBALS['soft'] == 8){
$l['ss']['err_ademail'] = 'The Admin Email Address is not valid';
}

if($GLOBALS['soft'] == 25){
$l['ss']['err_makequery'] = 'Could not make a MySQL query!';
}

if($GLOBALS['soft'] == 27){
$l['ss']['err_ademail'] = 'The Admin Email Address is not valid';
$l['ss']['settings'] = 'Gallery Settings';
$l['ss']['site_name'] = 'Gallery Name';
$l['ss']['site_desc'] = 'Gallery Description';
$l['ss']['name_exp'] = 'The name of the gallery';
}

if($GLOBALS['soft'] == 28){
$l['ss']['err_ademail'] = 'The Admin Email Address is not valid';
}

if($GLOBALS['soft'] == 20){
$l['ss']['err_ademail'] = 'The Admin Email Address is not valid';
$l['ss']['wiki_settings'] = 'Wiki Settings';
$l['ss']['wiki_name'] = 'Wiki Name';
$l['ss']['wiki_name_exp'] = 'The name of the wiki';
}

if($GLOBALS['soft'] == 34){
$l['ss']['err_php'] = 'The PHP version is less than the required 5.0 version!';
}

if($GLOBALS['soft'] == 2){
$l['ss']['err_boardemail'] = 'The board email address is not valid.';
}

if($GLOBALS['soft'] == 13){
$l['ss']['real_name'] = 'Admin Real Name';
}

if($GLOBALS['soft'] == 36){
$l['ss']['err_ademail'] = 'The admin email address is not valid.';
}

if($GLOBALS['soft'] == 41){
$l['ss']['real_name'] = 'Admin Real Name';
}

if($GLOBALS['soft'] == 42){
$l['ss']['err_ademail'] = 'The Admin Email Address is not valid';
}

if($GLOBALS['soft'] == 43){
$l['ss']['wiki_settings'] = 'Wiki Settings';
$l['ss']['wiki_name'] = 'Wiki Name';
$l['ss']['wiki_name_exp'] = 'The name of the wiki';
}

if($GLOBALS['soft'] == 44){
$l['ss']['err_ademail'] = 'The Admin Email Address is not valid';
}

if($GLOBALS['soft'] == 45){
$l['ss']['err_php'] = 'The PHP version is less than the required 5.1.4 version!';
}

if($GLOBALS['soft'] == 46){
$l['ss']['err_php'] = 'The PHP version is less than the required 5.1.4 version!';
}

if($GLOBALS['soft'] == 47){
$l['ss']['err_ademail'] = 'The Admin Email Address is not valid';
}

if($GLOBALS['soft'] == 54){
$l['ss']['err_php'] = 'The PHP version is less than the required 5.0.2 version!';
}

if($GLOBALS['soft'] == 55){
$l['ss']['err_php'] = 'The PHP version is less than the required 5.0.2 version!';
}

if($GLOBALS['soft'] == 56){
$l['ss']['err_php'] = 'The PHP version is less than the required 5.0.2 version!';
}

if($GLOBALS['soft'] == 57){
$l['ss']['err_php'] = 'The PHP version is less than the required 5.0.2 version!';
}

if($GLOBALS['soft'] == 59){
$l['ss']['err_php'] = 'The PHP version is less than the required 5.0.2 version!';
}

if($GLOBALS['soft'] == 70){
$l['ss']['err_php'] = 'The PHP version is less than the required 5.0 version!';
}

if($GLOBALS['soft'] == 72){
$l['ss']['err_php'] = 'The PHP version is less than the required 5.0 version!';
}

if($GLOBALS['soft'] == 79){
$l['ss']['err_boardemail'] = 'The board email address is not valid.';
}

if($GLOBALS['soft'] == 74){
$l['ss']['site_desc'] = 'Guestbook Description';
}

if($GLOBALS['soft'] == 75){
$l['ss']['site_desc'] = 'Guest Book Title';
}

if($GLOBALS['soft'] == 76){
$l['ss']['site_name'] = 'Guestbook Name';
}

if($GLOBALS['soft'] == 77){
$l['ss']['site_desc'] = 'Guestbook Title';
}

if($GLOBALS['soft'] == 82){
$l['ss']['site_desc'] = 'HESK Title';
}

if($GLOBALS['soft'] == 97){
$l['ss']['site_name'] = 'Company Name';
}

if($GLOBALS['soft'] == 98){
$l['ss']['data_dir'] = 'Moodle Data Directory';
}

if($GLOBALS['soft'] == 101){
$l['ss']['site_desc'] = 'Podcast Description';
}

if($GLOBALS['soft'] == 113){
$l['ss']['err_php'] = 'The PHP version is less than the required 5.2 version!';
}

if($GLOBALS['soft'] == 114){
$l['ss']['err_php'] = 'The PHP version is less than the required 4.0.6 version!';
}

if($GLOBALS['soft'] == 104){
$l['ss']['site_name'] = 'Game Name';
}

if($GLOBALS['soft'] == 117){
$l['ss']['err_php'] = 'The PHP version is less than the required 5.1.0 version!';
}

if($GLOBALS['soft'] == 138){
$l['ss']['data_dir'] = 'Elgg Data Directory';
}

if($GLOBALS['soft'] == 144){
$l['ss']['data_dir_exp'] = 'It will be in the home directory of your account and will not be accessible via the WEB for security reasons!';
$l['ss']['site_name'] = 'Company Name';
$l['ss']['site_email'] = 'Company Email';
}

if($GLOBALS['soft'] == 133){
$l['ss']['real_name'] = 'Admin Real Name';
}

if($GLOBALS['soft'] == 148){
$l['ss']['data_dir_exp'] = 'It will be in the home directory of your account and will not be accessible via the WEB for security reasons!';
$l['ss']['site_name'] = 'Company Name';
}

if($GLOBALS['soft'] == 108){
$l['ss']['data_dir'] = 'phpgedview Data Directory';
}

if($GLOBALS['soft'] == 174){
$l['ss']['data_dir'] = 'Moodle Data Directory';
}

if($GLOBALS['soft'] == 176){
$l['ss']['err_ademail'] = 'The Admin Email Address is not valid';
}

if($GLOBALS['soft'] == 177){
$l['ss']['err_boardemail'] = 'The board email address is not valid.';
}

if($GLOBALS['soft'] == 181){
$l['ss']['err_boardemail'] = 'The board email address is not valid.';
}

if($GLOBALS['soft'] == 202){
$l['ss']['data_dir'] = 'Dolibarr Data Directory';
}

if($GLOBALS['soft'] == 227){
$l['ss']['err_php'] = 'The PHP version is less than the required 5.1.0 version!';
}

if($GLOBALS['soft'] == 238){
$l['ss']['data_dir'] = 'LetoDMS Data Directory';
}

if($GLOBALS['soft'] == 256){
$l['ss']['data_dir'] = 'BlueERP Data Directory';
}

if($GLOBALS['soft'] == 267){
$l['ss']['real_name'] = 'Admin Real Name';
}

if($GLOBALS['soft'] == 268){
$l['ss']['real_name'] = 'Admin Real Name';
}

if($GLOBALS['soft'] == 275){
$l['ss']['site_name'] = 'Guestbook Name';
}

if($GLOBALS['soft'] == 296){
$l['ss']['ad_name'] = 'Username';
}

if($GLOBALS['soft'] == 295){
$l['ss']['ad_name'] = 'Username';
}

if($GLOBALS['soft'] == 294){
$l['ss']['ad_name'] = 'Username';
}

if($GLOBALS['soft'] == 289){
$l['ss']['ad_name'] = 'Username';
}

if($GLOBALS['soft'] == 314){
$l['ss']['data_dir'] = 'Dolibarr Data Directory';
}

if($GLOBALS['soft'] == 321){
$l['ss']['err_php'] = 'The PHP version is less than the required 5.0 version!';
}

if($GLOBALS['soft'] == 333){
$l['ss']['real_name'] = 'Admin Real Name';
}

if($GLOBALS['soft'] == 343){
$l['ss']['data_dir'] = 'Moodle Data Directory';
}

?>