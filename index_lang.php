<?php

//////////////////////////////////////////////////////////////
//===========================================================
// index_lang.php
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

$l['user_data_error_t'] = 'Błąd danych użytkownika';
$l['user_data_error'] = APP.' nie mógł załadować Twoich danych użytkownika. Prosimy zgłosić ten fakt administracji!';

$l['no_license'] = 'Nie odnaleziono pliku LICENCYJNEGO! Prosimy zgłosić ten fakt administracji.';

$l['today'] = '<b>Dzisiaj</b> o ';//The today string for showing todays post time

$l['init_theme_error_t'] = 'Błąd szablonu';//Title
$l['init_theme_error'] = 'Nie udało się załadować pliku szablonu - &soft-1;.';

$l['init_theme_func_error_t'] = 'Błąd funkcji szablonu';//Title
$l['init_theme_func_error'] = 'Nie udało się załadować funkcji szablonu &soft-1;.';

$l['disable_softaculous_t'] = 'Softaculous jest wyłączony';
$l['disable_softaculous'] = 'Softaculous jest wyłączony dla tego użytkownika. Prosimy skontaktować się z administracją.';

$l['load_theme_settings_error'] = 'Nie udało się załadować pliku z ustawieniami szablonu.';


//Error Handle Function
$l['following_errors_occured'] = 'Następujące błędy zostały znalezione';

//Success Message Function
$l['following_message'] = 'Następująca wiadomość została zwrócona';

//Major Error Function
$l['fatal_error'] = 'Błąd krytyczny';
$l['following_fatal_error'] = 'Wystąpił następujący błąd';

//Message Function
$l['soft_message'] = APP.' Wiadomość';
$l['following_soft_message'] = 'Następująca wiadomość została zwrócona';

//Update Softwares
$l['no_soft_found'] = 'Software not found.....Needs Update';
$l['ver_not_match'] = 'Versions dont match.....Needs Update';
$l['ver_match'] = 'Current Version is Latest Version......Continuing';
$l['del_prev_files'] = 'Deleting previous files......Done';
$l['fetch_latest'] = 'Fetching Latest File......';
$l['error_fetch_latest'] = 'Could not fetch latest file......Continuing';
$l['error_save_latest'] = 'Could not SAVE latest file......Continuing';
$l['got_latest'] = 'Saved the Latest File';
$l['unzip_latest'] = 'Unzipping the files......';
$l['error_unzip_latest'] = 'Error unzipping......Continuing';
$l['unzipped_latest'] = 'Unzipped Successfully';

//Update Softaculous
$l['getting_info'] = 'Requesting Information......';
$l['error_getting_latest'] = 'Could not get information......Abandoning';
$l['got_info'] = 'Got information';
$l['manual_mode'] = 'The new version of '.APP.' requires manual attention......Abandoning';
$l['no_updates'] = 'Current Version is Latest Version......Continuing';
$l['fetch_upgrade'] = 'Fetching Upgrade......';
$l['error_fetch_upgrade'] = 'Could not fetch upgrade file......Abandoning';
$l['error_save_upgrade'] = 'Could not SAVE upgrade file......Abandoning';
$l['got_upgrade'] = 'Saved the Upgrade File';
$l['unzip_upgrade'] = 'Unzipping the files......';
$l['error_unzip_upgrade'] = 'Error unzipping......Abandoning';
$l['unzipped_upgrade'] = 'Unzipped Successfully';
$l['md5_check'] = 'MD5 Check Successful';
$l['err_md5_check'] = 'MD5 Check for these files were not Successful';
$l['err_md5_file'] = ' does not exist';

//MySQL Errors
$l['err_selectmy'] = 'The MySQL Database could not be selected.';
$l['err_myconn'] = 'The MySQL Connection could not be established.';
$l['err_makequery'] = 'Could not make the query numbered';
$l['err_mynum'] = 'MySQL Error No';
$l['err_myerr'] = 'MySQL Error';

//Importing Errors
$l['imp_wrong_softdomain'] = 'The path of the domain &soft-1; could not be found.';
$l['imp_softpath_wrong'] = 'The path of &soft-1; is wrong and does not exist.';
$l['imp_ins_exists'] = '&soft-1; is already installed at &soft-2; as per our records and is being maintained by us!';
$l['imp_no_func'] = 'The import function for &soft-1; could not be loaded.';
$l['imp_err'] = 'There were some errors while importing the software installed at &soft-1;';

//hf_theme.php
$l['welcome'] = 'Witaj';
$l['logout'] = 'Wyloguj';
$l['page_time'] = 'Strona wygenerowana w';
$l['times_are'] = 'Wszystkie czasy w strefie GMT';
$l['time_is'] = 'Obecny czas to';

//The Category Language Variables
$l['forums'] = 'Fora';
$l['blogs'] = 'Blogi';
$l['cms'] = 'Portale/CMS';
$l['galleries'] = 'Galerie zdjęć';
$l['wikis'] = 'Wiki';
$l['admanager'] = 'Zarządzanie reklamami';
$l['calendars'] = 'Kalendarze';
$l['games'] = 'Gry';
$l['mail'] = 'Maile';
$l['polls'] = 'Ankiety i sondy';
$l['projectman'] = 'Zarządzanie projektami';
$l['ecommerce'] = 'E-Commerce';
$l['guestbooks'] = 'Księgi gości';
$l['customersupport'] = 'Obsługa klientów';
$l['others'] = 'Inne';
$l['music'] = 'Muzyka';
$l['video'] = 'Video';
$l['files'] = 'Menadżer plików';
$l['go_cpanel'] = 'Przejdź do panelu kontrolnego';
$l['go_home'] = APP.' Strona główna';
$l['go_demos'] = 'Dema skryptów';
$l['go_ratings'] = 'Oceny skryptów';
$l['go_settings'] = 'Edycja ustawień';
$l['go_email_settings'] = 'Ustawienia e-mail';
$l['go_installations'] = 'Wszystkie instalacje';
$l['go_support'] = 'Pomoc i wsparcie';
$l['go_sync'] = 'Synchronizuj z innymi auto-instalatorami';
$l['go_backups'] = 'Kopie zapasowe i przywracanie';

$l['type_php'] = 'PHP';
$l['type_perl'] = 'Perl';
$l['type_js'] = 'JavaScript';
$l['type_java'] = 'Java';
$l['search'] = 'Szukaj';
$l['back_to_top'] = 'Przejdź na górę';

// Categories
$l['cat_php_forums'] = 'Fora';
$l['cat_php_blogs'] = 'Blogi';
$l['cat_php_cms'] = 'Portale/CMS';
$l['cat_php_galleries'] = 'Galerie zdjęć';
$l['cat_php_wikis'] = 'Wiki';
$l['cat_php_admanager'] = 'Zarządzanie reklamami';
$l['cat_php_calendars'] = 'Kalendarze';
$l['cat_php_games'] = 'Gry';
$l['cat_php_mail'] = 'Maile';
$l['cat_php_polls'] = 'Ankiety i sondy';
$l['cat_php_projectman'] = 'Zarządzanie projektami';
$l['cat_php_ecommerce'] = 'E-Commerce';
$l['cat_php_guestbooks'] = 'Księgi gości';
$l['cat_php_customersupport'] = 'Obsługa klientów';
$l['cat_php_others'] = 'Inne';
$l['cat_php_music'] = 'Muzyka';
$l['cat_php_video'] = 'Video';
$l['cat_php_rss'] = 'RSS';
$l['cat_php_socialnetworking'] = 'Społeczność';
$l['cat_php_microblogs'] = 'Mikroblogi';
$l['cat_php_frameworks'] = 'Frameworki';
$l['cat_php_educational'] = 'Edukacja';
$l['cat_php_erp'] = 'ERP';
$l['cat_php_dbtools'] = 'Bazy danych';
$l['cat_php_files'] = 'Menadżery plików';
$l['cat_js_libraries'] = 'Biblioteki';
$l['cat_js_widgets'] = 'Widżety';
$l['cat_perl_blogs'] = 'Blogi';
$l['cat_perl_ecommerce'] = 'E-Commerce';
$l['cat_perl_wikis'] = 'Wiki';
$l['cat_perl_forums'] = 'Fora';
$l['cat_java_cms'] = 'CMS';
$l['cat_java_forums'] = 'Fora';
$l['cat_java_projectman'] = 'Zarządzanie projektami';
$l['cat_java_erp'] = 'ERP';
$l['cat_java_blogs'] = 'Blogi';
$l['cat_java_wikis'] = 'Wiki';

// Classes Categories
$l['classes_ajax'] = 'Ajax';
$l['classes_cryptography'] = 'Cryptography';
$l['classes_algorithms'] = 'Algorithms';
$l['classes_artificialintelligence'] = 'Artificial Intelligence';
$l['classes_email'] = 'Email';
$l['classes_finances'] = 'Finances';
$l['classes_searching'] = 'Searching';
$l['classes_user_management'] = 'User Management';
$l['classes_utilitiesandtools'] = 'Utilities and Tools';
$l['classes_validation'] = 'Validation';
$l['classes_security'] = 'Security';
$l['classes_console'] = 'Console';
$l['classes_codegeneration'] = 'Code Generation';
$l['classes_chat'] = 'Chat';
$l['classes_astrology'] = 'Astrology';
$l['classes_audio'] = 'Audio';
$l['classes_biology'] = 'Biology';
$l['classes_blogs'] = 'Blogs';
$l['classes_cache'] = 'Cache';
$l['classes_compression'] = 'Compression';
$l['classes_configuration'] = 'Configuration';
$l['classes_contentmanagement'] = 'Content Management';
$l['classes_conversion'] = 'Conversion';
$l['classes_datatypes'] = 'Datatypes';
$l['classes_databases'] = 'Databases';
$l['classes_debug'] = 'Debug';
$l['classes_designpatterns'] = 'Design Patterns';
$l['classes_ecommerce'] = 'E-Commerce';
$l['classes_elearning'] = 'E-Learning';
$l['classes_emulators'] = 'Emulators';
$l['classes_filesandfolders'] = 'Files and Folders';
$l['classes_flash'] = 'Flash';
$l['classes_forums'] = 'Forums';
$l['classes_games'] = 'Games';
$l['classes_geography'] = 'Geography';
$l['classes_graphics'] = 'Graphics';
$l['classes_gui'] = 'GUI';
$l['classes_hosting'] = 'Hosting';
$l['classes_html'] = 'HTML';
$l['classes_http'] = 'HTTP';
$l['classes_language'] = 'Language';
$l['classes_projectmanagement'] = 'Project Management';

// Webuzo Strings
$l['webuzo'] = 'Webuzo';
$l['go_domain'] = 'Manage Domains';
$l['webuzo_license_exp'] = 'Your license is not active or it has expired. If your license has expired, please renew it to continue using Webuzo';
$l['webuzo_license_exp_t'] = 'License Inactive';

// Ampps Strings
$l['ampps'] = 'AMPPS';
$l['go_domain'] = 'Manage Domains';
$l['ampps_license_exp'] = 'Your license is not active or it has expired. If your license has expired, please renew it to continue using Ampps';
$l['ampps_license_exp_t'] = 'License Inactive';


/////////////////////////////////////////////////////////////
/////  Following Variables are used for Email Templates /////
/////////////////////////////////////////////////////////////

// Install Template Vaiable
$l['mail_install_php_sub'] = 'New Installation of $scriptname';
$l['mail_install_php'] = 'A new installation of $scriptname $version has been completed. The details of the installation are shown below:
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $admin_username>Admin Username : $admin_username</if>
<if $admin_pass>Admin Password : $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $time>Time of Installation : $time</if>
';

// Install Template Vaiable
$l['mail_install_js_sub'] = 'New Installation of $scriptname';
$l['mail_install_js'] = 'A new installation of $scriptname $version has been completed. The details of the installation are shown below:
Path : $path
URL : $url
<if $time>Time of Installation : $time</if>
';

// Install Template Vaiable
$l['mail_install_perl_sub'] = 'New Installation of $scriptname';
$l['mail_install_perl'] = 'A new installation of $scriptname $version has been completed. The details of the installation are shown below:
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $admin_username>Admin Username : $admin_username</if>
<if $admin_pass>Admin Password : $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $time>Time of Installation : $time</if>
';

// Install Template Vaiable
$l['mail_install_java_sub'] = 'New Installation of $scriptname';
$l['mail_install_java'] = 'A new installation of $scriptname $version has been completed. The details of the installation are shown below:
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $admin_username>Admin Username : $admin_username</if>
<if $admin_pass>Admin Password : $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $time>Time of Installation : $time</if>
';

// Update template Variable (From ADMIN)
$l['mail_update_sub'] = 'Dostępne Aktualizacje Skryptów';
$l['mail_update'] = 'This email is regarding the outdated installation of certain PHP scripts you have installed. For security reasons you must update these outdated installations as soon as possible.
The following script updates are available:

$installation

To upgrade these scripts go to your Control Panel -> '.APP.' -> Installations.
There you will be able to update the scripts.

From System Administrator $serverip
';

// Remove Template Variable
$l['mail_remove_sub'] = 'Removed Installation of $scriptname';
$l['mail_remove'] = 'An installation of $scriptname has been removed. Following were the details of the installation :
Path : $path
<if $url>URL : $url</if>
<if $datadirectory>Data Directory : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>
Time of Installation : $time
Time of Removal : $rem_time
';

// Cron Template Variable
$l['mail_cron_sub'] = 'Script Updates Available';
$l['mail_cron'] = 'The following script updates are available:

$installation

To upgrade these scripts go to your Control Panel -> '.APP.' -> Installations.
There you will be able to update the scripts.

From '.APP.' Cron Jobs $serverip

';

// Editdetail Template Variable
$l['mail_editdetail_sub'] = 'Modified Installation Details of $scriptname';
$l['mail_editdetail'] = 'The installation details of $scriptname has been modified. Following are the modified details of the installation :
Path : $path
URL : $url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $wwwurl>Web URL : $wwwurl</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>
Time of Installation : $time
Time of Modification : $edit_time
';

// Backup Language Strings
$l['mail_backup_sub'] = 'Backup of your $scriptname installation';
$l['mail_backup'] = 'The backup of your $scriptname installation was completed successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url
Backup Path : $backup_file

You can download the backup from the Backups Section in '.APP.'.
';

$l['mail_backup_fail_sub'] = 'Failed : Backup of your $scriptname installation';
$l['mail_backup_fail'] = 'The backup of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url
Backup Path : $backup_file

The following error occured :
$error

Please try to create a backup again after some time.
';


// Restore Language Strings
$l['mail_restore_sub'] = 'Restore of your $scriptname';
$l['mail_restore'] = 'The restore of your $scriptname backup was completed successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url
';

$l['mail_restore_fail_sub'] = 'Failed : Restore of your $scriptname';
$l['mail_restore_fail'] = 'The restore of your $scriptname did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

The following error occured :
$error

Please try to restore the backup again after some time.
';


// Install Template Vaiable CLASSES
$l['mail_install_classes_sub'] = 'New Installation of $classesname';
$l['mail_install_classes'] = 'A new installation of $classesname $version has been completed. The details of the installation are shown below:
Path : $path
<if $time>Time of Installation : $time</if>
';

// Auto Upgrade Email For Admin (successful)
$l['mail_autoupgrade_admin_sub'] = '$scriptname installation of user $user has been upgraded successfully.';
$l['mail_autoupgrade_admin'] = '$scriptname installation of user $user has been upgraded successfully to the latest version.
The details are as follows :
Installation URL : $url
Latest Version : $version
';

// Auto Upgrade Email For Admin (Failed) but restored successfully.
$l['mail_autoupgrade_fail_admin_sub'] = 'Upgrade process for $scriptname installation failed and has been restored from the backup.';
$l['mail_autoupgrade_fail_admin'] = 'Upgrade process of $scriptname installation for user $user failed.
'.APP.' had created a backup before upgrading, and the backup was restored successfully.
Installation URL : $url
The Upgrade error details are as follows :
Error : $upgrade_error
';

// Auto Upgrade Email for user (successful)
$l['mail_autoupgrade_user_sub'] = '$scriptname installation has been successfully upgraded by System Admin.';
$l['mail_autoupgrade_user'] = 'Your $scriptname installation has been successfully upgraded to the latest version by the System Admin.
The details are as follows :
Installation URL : $url
Latest Version : $version
';

// Auto Upgrade Email for user (fail) but restored successfully
$l['mail_autoupgrade_fail_user_sub'] = 'Upgrade of your $scriptname installation by System Admin Failed.';
$l['mail_autoupgrade_fail_user'] = 'The System Admin had tried to upgrade your $scriptname installation, but the upgrade process had failed.
A backup had been created before upgrading your installation, and your installation has been successfully restored from this backup.
Installation URL : $url
The Upgrade error details are as follows :
Error : $upgrade_error
';

// When upgraded by user successfully (By user)
$l['mail_upgradeby_user_sub'] = '$scriptname installation upgraded successfully.';
$l['mail_upgradeby_user'] = 'Your $scriptname installation has been successfully upgraded to the latest version.
The details are as follows :
Installation URL : $url
Latest Version : $version
';

// If any error occured while upgrading, (By user)
$l['mail_upgradeby_user_fail_sub'] = 'Upgrade of your $scriptname installation failed.';
$l['mail_upgradeby_user_fail'] = 'The upgrade of your $scriptname installation has failed.
The details are as follows :
Installation URL : $url
Error : $error
';

// If a backup is fail before upgrading an installation. (FOR ADMIN)
$l['mail_upgrade_backup_fail_sub'] = 'Backup process failed before auto upgrading $scriptname installation.';
$l['mail_upgrade_backup_fail'] = 'The backup of $scriptname installation of user $user has failed. So the auto upgrade process was aborted.
The details are as follows :
Installation URL : $url
Error : $error
';


// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR ADMIN)
$l['mail_autoupgrade_restore_fail_admin_sub'] = 'Upgrade process of $scriptname installation of user $user failed.';
$l['mail_autoupgrade_restore_fail_admin'] = 'Upgrade process of $scriptname installation of user $user has failed.
A backup had created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

Following are the installation and backup details which you might require to restore your $scriptname installation :
PATH_TO_YOUR_BACKUP_FILE : $backup_path
PATH_OF_INSTALLATION : $softpath
<if $database_name>DATABASE_NAME : $database_name</if>
<if $database_user>DATABSE_USER : $database_user</if>
<if $database_pass>DATABASE_PASS : $database_pass</if>
<if $database_host>DATABASE_HOST : $database_host</if>

Installation URL : $url
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR USER)
$l['mail_autoupgrade_restore_fail_user_sub'] = 'Auto upgrade of your $scriptname installation by System Admin failed.';
$l['mail_autoupgrade_restore_fail_user'] = 'The System Admin had tried to upgrade your $scriptname installation, but the upgrade failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

Following are the installation and backup details which you might require to restore your $scriptname installation :
PATH_TO_YOUR_BACKUP_FILE : $backup_path
PATH_OF_INSTALLATION : $softpath
<if $database_name>DATABASE_NAME : $database_name</if>
<if $database_user>DATABSE_USER : $database_user</if>
<if $database_pass>DATABASE_PASS : $database_pass</if>
<if $database_host>DATABASE_HOST : $database_host</if>

Installation URL : $url
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.
';

$l['err_openconfig'] = 'Could not open the Configuration File';
$l['err_writeconfig'] = 'Could not write the Configuration File';

$l['classes_con_failed'] = 'Error : Failed to Connect to Server .';
$l['cl_ratings'] = 'Ratings';
$l['cl_author'] = 'Author';
$l['cl_license'] = 'License';
$l['cl_version'] = 'Version';
$l['cl_show_files'] = 'Show Files';
$l['cl_install_but'] = 'Install';
$l['expand_view'] = 'Click here for full view';
$l['collapse_view'] = 'Click here for embedded view';

$l['email_off_notice'] = '<b>NOTE : Notification emails are disabled so you will not receive any email.</b>';

?>