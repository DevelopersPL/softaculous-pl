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
// Spolszczenie: Developers.pl
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

$l['remote_licence_t'] = 'Nieprawidłowa licencja';
$l['remote_licence'] = 'Używana licencja jest nieprawidłowa. Prosimy zgłosić ten fakt administracji.';

$l['enterprise_licence_t'] = 'Nieprawidłowa licencja';
$l['enterprise_licence'] = 'Używana licencja jest nieprawidłowa. Prosimy zgłosić ten fakt administracji.';

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
$l['no_soft_found'] = 'Nie znaleziono oprogramowania......Potrzebna aktualizacja';
$l['ver_not_match'] = 'Niezgodność wersji......Potrzebna aktualizacja';
$l['ver_match'] = 'Obecna wersja jest aktualna......Kontynuacja';
$l['del_prev_files'] = 'Usuwanie poprzednich plików......Wykonane';
$l['fetch_latest'] = 'Pobieranie aktualnych plików......';
$l['error_fetch_latest'] = 'Nie można pobrać aktualnego pliku......Kontynuacja';
$l['error_save_latest'] = 'Nie można ZAPISAĆ aktualnego pliku......Kontynuacja';
$l['got_latest'] = 'Zapisano aktualny plik';
$l['unzip_latest'] = 'Rozpakowywanie plików......';
$l['error_unzip_latest'] = 'Błąd rozpakowywania......Kontynuacja';
$l['unzipped_latest'] = 'Rozpakowywanie ukończone pomyślnie';

//Update Softaculous
$l['getting_info'] = 'Pobieranie informacji......';
$l['error_getting_latest'] = 'Nie można pobrać informacji......Przerywanie';
$l['got_info'] = 'Otrzymano informację';
$l['manual_mode'] = 'Nowa wersja '.APP.' wymaga uwagi użytkownika......Przerywanie';
$l['no_updates'] = 'Obecna wersja jest aktualna......Kontynuacja';
$l['fetch_upgrade'] = 'Pobieranie plików aktualizacji......';
$l['error_fetch_upgrade'] = 'Nie można pobrać pliku aktualizacji......Przerywanie';
$l['error_save_upgrade'] = 'Nie można ZAPISAĆ pliku aktualizacji......Przerywanie';
$l['got_upgrade'] = 'Zapisany plik aktualizacji';
$l['unzip_upgrade'] = 'Rozpakowywanie plików......';
$l['error_unzip_upgrade'] = 'Błąd rozpakowywania......Przerywanie';
$l['unzipped_upgrade'] = 'Rozpakowywanie ukończone pomyślnie';
$l['md5_check'] = 'Sprawdzanie sum kontrolnych MD5 ukończone pomyślnie';
$l['err_md5_check'] = 'Sprawdzanie sum kontrolnych MD5 nie powiodło się';
$l['err_md5_file'] = ' nie istnieje';

//MySQL Errors
$l['err_selectmy'] = 'Baza danych MySQL nie może zostać wybrana.';
$l['err_myconn'] = 'Nie można nawiązać połączenia MySQL.';
$l['err_makequery'] = 'Nie można wykonać zapytania nr';
$l['err_mynum'] = 'Błąd MySQL nr';
$l['err_myerr'] = 'Błąd MySQL';

//Importing Errors
$l['imp_wrong_softdomain'] = 'Nie można odnaleźć ścieżki domeny &soft-1;.';
$l['imp_softpath_wrong'] = 'Ścieżka &soft-1; jest błędna lub nie istnieje.';
$l['imp_ins_exists'] = '&soft-1; jest aktualnie zainstalowany na &soft-2; i utrzymywany przez nas!';
$l['imp_no_func'] = 'Funkcje importu dla &soft-1; nie mogły zostać załadowane.';
$l['imp_err'] = 'Wystąpiły błędy podczas importu oprogramowania zainstalowanego na &soft-1;';

//hf_theme.php
$l['welcome'] = 'Witaj';
$l['logout'] = 'Wyloguj';
$l['page_time'] = 'Strona wygenerowana w';
$l['times_are'] = 'Wszystkie czasy w strefie GMT';
$l['time_is'] = 'Obecny czas to';
$l['no_script_found'] = 'Nie znaleziono takiego skryptu!';

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
$l['go_tasklist'] = 'Lista zadań';
$l['go_apps_installations'] = 'Wszystkie zainstlowane aplikacje';

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
$l['cat_perl_mail'] = 'Maile';
$l['cat_java_cms'] = 'CMS';
$l['cat_java_forums'] = 'Fora';
$l['cat_java_projectman'] = 'Zarządzanie projektami';
$l['cat_java_erp'] = 'ERP';
$l['cat_java_blogs'] = 'Blogi';
$l['cat_java_wikis'] = 'Wiki';
$l['cat_apps_server_side_scripting'] = 'Skrypty po stronie serwera';
$l['cat_apps_web_servers'] = 'Serwery WEB';
$l['cat_apps_utilities'] = 'Użytkowe';
$l['cat_apps_libraries'] = 'Biblioteki';
$l['cat_apps_databases'] = 'Bazy danych';
$l['cat_apps_stacks'] = 'Stosy';
$l['cat_apps_security'] = 'Bezpieczeństwo';
$l['cat_apps_statistics'] = 'Statystyki';
$l['cat_apps_java_tools'] = 'Narzędzia JAVA';
$l['cat_apps_java_containers'] ='Kontenery JAVA';
$l['cat_apps_version_control'] ='Kontorola wersji';
$l['cat_apps_modules'] ='Moduły';

// Classes Categories
$l['classes_ajax'] = 'Ajax';
$l['classes_cryptography'] = 'Kryptografia';
$l['classes_algorithms'] = 'Algorytmy';
$l['classes_artificialintelligence'] = 'Szutczna inteligencja';
$l['classes_email'] = 'Email';
$l['classes_finances'] = 'Finanse';
$l['classes_searching'] = 'Wyszukiwanie';
$l['classes_user_management'] = 'Zarządzanie użytkownikami';
$l['classes_utilitiesandtools'] = 'Narzędzia użytkowe';
$l['classes_validation'] = 'Walidacja';
$l['classes_security'] = 'Bezpieczeństwo';
$l['classes_console'] = 'Konsola';
$l['classes_codegeneration'] = 'Generowanie kodu';
$l['classes_chat'] = 'Chat';
$l['classes_astrology'] = 'Astrologia';
$l['classes_audio'] = 'Dźwięk';
$l['classes_biology'] = 'Biologia';
$l['classes_blogs'] = 'Blogi';
$l['classes_cache'] = 'Pamięć podręczna';
$l['classes_compression'] = 'Kompresja';
$l['classes_configuration'] = 'Konfiguracja';
$l['classes_contentmanagement'] = 'Zarządzanie treścią';
$l['classes_conversion'] = 'Konwersje';
$l['classes_datatypes'] = 'Typy danych';
$l['classes_databases'] = 'Bazy danych';
$l['classes_debug'] = 'Debugowanie';
$l['classes_designpatterns'] = 'Wzorce projektowe';
$l['classes_ecommerce'] = 'E-Commerce';
$l['classes_elearning'] = 'E-Learning';
$l['classes_emulators'] = 'Emulatory';
$l['classes_filesandfolders'] = 'Pliki i foldery';
$l['classes_flash'] = 'Flash';
$l['classes_forums'] = 'Fora';
$l['classes_games'] = 'Gry';
$l['classes_geography'] = 'Geografia';
$l['classes_graphics'] = 'Grafika';
$l['classes_gui'] = 'GUI';
$l['classes_hosting'] = 'Hosting';
$l['classes_html'] = 'HTML';
$l['classes_http'] = 'HTTP';
$l['classes_language'] = 'Język';
$l['classes_projectmanagement'] = 'Zarządzanie projektami';

// Webuzo Strings
$l['webuzo'] = 'Webuzo';
$l['go_domain'] = 'Zarządzaj domenami';
$l['webuzo_license_exp'] = 'Licencja nie jest aktywna lub wygasła. Jeżeli licencja wygasła, prosimy o odnowienie, aby móc korzystać z Webuzo';
$l['webuzo_license_exp_t'] = 'Licencja nieaktywna';

// Ampps Strings
$l['ampps'] = 'AMPPS';
$l['go_domain'] = 'Zarządzaj domenami';
$l['ampps_license_exp'] = 'Licencja nie jest aktywna lub wygasła. Jeżeli licencja wygasła, prosimy o odnowienie, aby móc korzystać z Ampps';
$l['ampps_license_exp_t'] = 'Licencja nieaktywna';


/////////////////////////////////////////////////////////////
/////  Following Variables are used for Email Templates /////
/////////////////////////////////////////////////////////////

$l['notify_enable'] = 'Włączone';
$l['notify_disable'] = 'Wyłączone';

$l['autoupgrade_enable'] = 'Włączone';
$l['autoupgrade_disable'] = 'Wyłączone';

// Auto backup strings
$l['auto_backup_enable'] = 'Włączone';
$l['auto_backup_disable'] = 'Wyłączone';

// Install Template Vaiable
$l['mail_install_php_sub'] = 'Nowa instalacja $scriptname';
$l['mail_install_php'] = 'Nowa instalacja skryptu $scriptname $version została ukończona pomyślnie. Szczegóły instalacji znajdują się poniżej:
Ścieżka : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Katalog z danymi: $datadirectory</if>
<if $admin_username>Login administratora: $admin_username</if>
<if $admin_pass>Hasło administratora: $admin_pass</if>
<if $admin_email>Email administratora: $admin_email</if>
<if $dbhost>Host MySQL: $dbhost</if>
<if $dbname>Baza danych MySQL: $dbname</if>
<if $dbuser>Użytkownik MySQL: $dbuser</if>
<if $dbpass>Hasło użytkownika MySQL: $dbpass</if>
<if $cron>Zaplanowane zadania: $cron</if>
<if $disable_notify_update>Powiadomienia o aktualizacji: $disable_notify_update</if>
<if $eu_auto_upgrade>Automatyczna aktualizacja : $eu_auto_upgrade</if>
<if $auto_backup>Automatyczne kopie zapasowe: $auto_backup</if>
<if $auto_backup_rotation>Rotacji kopii zapasowej: $auto_backup_rotation</if>
<if $time>Czas instalacji: $time</if>

Jeśli chcesz wyłączyć otrzymywanie takich wiadomości przejdź do panelu administracyjnego -> '.APP.' -> Ustawienia Email
';

// Clone Template Vaiable
$l['mail_clone_sub'] = 'Klonowanie instalacji $scriptname';
$l['mail_clone'] = 'Twoja instalacja $scriptname $version została sklonowana pomyślnie.

Szczegóły oryginalnej instalacji:
Oryginalna ścieżka : $old_path
Oryginalny URL : $old_url

Szczegóły sklonowanej instalacji:
Ścieżka : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Katalog z danymi: $datadirectory</if>
<if $dbhost>Host MySQL: $dbhost</if>
<if $dbname>Baza danych MySQL: $dbname</if>
<if $dbuser>Użytkownik MySQL: $dbuser</if>
<if $dbpass>Hasło użytkownika MySQL: $dbpass</if>
<if $cron>Zaplanowane zadania: $cron</if>
<if $time>Czas instalacji: $time</if>

Jeśli chcesz wyłączyć otrzymywanie takich wiadomości przejdź do panelu administracyjnego -> '.APP.' -> Ustawienia Email
';

// Install Template Vaiable
$l['mail_install_js_sub'] = 'Nowa instalacja $scriptname';
$l['mail_install_js'] = 'Nowa instalacja skryptu $scriptname $version została ukończona pomyślnie. Szczegóły instalacji znajdują się poniżej:
Ścieżka : $path
URL : $url
<if $disable_notify_update>Powiadomienia o aktualizacji: $disable_notify_update</if>
<if $auto_backup>Automatyczne kopie zapasowe: $auto_backup</if>
<if $auto_backup_rotation>Rotacji kopii zapasowej: $auto_backup_rotation</if>
<if $time>Czas instalacji: $time</if>

Jeśli chcesz wyłączyć otrzymywanie takich wiadomości przejdź do panelu administracyjnego -> '.APP.' -> Ustawienia Email
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
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $time>Time of Installation : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
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
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $time>Time of Installation : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Update template Variable (From ADMIN)
$l['mail_update_sub'] = 'Dostępne aktualizacje skryptów!';
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

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Cron Template Variable
$l['mail_cron_sub'] = 'Script Updates Available';
$l['mail_cron'] = 'The following script updates are available:

$installation

To upgrade these scripts go to your Control Panel -> '.APP.' -> Installations.
There you will be able to update the scripts.

From '.APP.' Cron Jobs $serverip

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings

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
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $eu_auto_upgrade>Auto Upgrade : $eu_auto_upgrade</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
Time of Installation : $time
Time of Modification : $edit_time

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Backup Language Strings
$l['mail_backup_sub'] = 'Backup of your $scriptname installation';
$l['mail_backup'] = 'The backup of your $scriptname installation was completed successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url
Backup Path : $backup_file
<if $backup_note>Backup Note : $backup_note</if>

You can download the backup from the Backups Section in '.APP.'.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
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

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';


// Restore Language Strings
$l['mail_restore_sub'] = 'Restore of your $scriptname';
$l['mail_restore'] = 'The restore of your $scriptname backup was completed successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_restore_fail_sub'] = 'Failed : Restore of your $scriptname';
$l['mail_restore_fail'] = 'The restore of your $scriptname did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

The following error occured :
$error

Please try to restore the backup again after some time.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';


// Install Template Vaiable CLASSES
$l['mail_install_classes_sub'] = 'New Installation of $classesname';
$l['mail_install_classes'] = 'A new installation of $classesname $version has been completed. The details of the installation are shown below:
Path : $path
<if $time>Time of Installation : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

////////////////////////
// ADMIN UPGRADE - 6
////////////////////////

// Auto Upgrade Email For Admin (successful)
$l['mail_adminupgrade_success_admin_sub'] = '$scriptname installation of user $user has been upgraded successfully';
$l['mail_adminupgrade_success_admin'] = '$scriptname installation of user $user has been upgraded successfully to the latest version.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion
';

// Auto Upgrade Email For Admin (Failed) but restored successfully.
$l['mail_adminupgrade_fail_admin_sub'] = 'Upgrade process for $scriptname installation failed and was restored from the backup';
$l['mail_adminupgrade_fail_admin'] = 'Upgrade process of $scriptname installation for user $user failed.
'.APP.' had created a backup before upgrading, and the backup was restored successfully.
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
The Upgrade error details are as follows :
Error : $upgrade_error
';

// Auto Upgrade Email for user (successful)
$l['mail_adminupgrade_success_user_sub'] = '$scriptname installation has been successfully upgraded by System Admin';
$l['mail_adminupgrade_success_user'] = 'Your $scriptname installation has been successfully upgraded to the latest version by the System Admin.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Auto Upgrade Email for user (fail) but restored successfully
$l['mail_adminupgrade_fail_user_sub'] = 'Upgrade of your $scriptname installation by System Admin was unsuccessful';
$l['mail_adminupgrade_fail_user'] = 'The System Admin had tried to upgrade your $scriptname installation, but the upgrade process had failed.
A backup had been created before upgrading your installation, and your installation has been successfully restored from this backup.
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
The Upgrade error details are as follows :
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR ADMIN)
$l['mail_adminupgrade_restore_fail_admin_sub'] = 'Upgrade process of $scriptname installation of user $user has failed';
$l['mail_adminupgrade_restore_fail_admin'] = 'Upgrade process of $scriptname installation of user $user has failed.
A backup had created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

Following are the installation and backup details which you might require to restore your $scriptname installation :
PATH_TO_YOUR_BACKUP_FILE : $backup_path
PATH_OF_INSTALLATION : $softpath
<if $dbname>DATABASE_NAME : $dbname</if>
<if $dbuser>DATABSE_USER : $dbuser</if>
<if $dbpass>DATABASE_PASS : $dbpass</if>
<if $dbhost>DATABASE_HOST : $dbhost</if>

Installation URL : $url
Current Version : $oldversion
Latest Version : $version
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
$l['mail_adminupgrade_restore_fail_user_sub'] = 'Upgrade of your $scriptname installation by System Admin failed';
$l['mail_adminupgrade_restore_fail_user'] = 'The System Admin had tried to upgrade your $scriptname installation, but the upgrade failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

Following are the installation and backup details which you might require to restore your $scriptname installation :
PATH_TO_YOUR_BACKUP_FILE : $backup_path
PATH_OF_INSTALLATION : $softpath
<if $dbname>DATABASE_NAME : $dbname</if>
<if $dbuser>DATABSE_USER : $dbuser</if>
<if $dbpass>DATABASE_PASS : $dbpass</if>
<if $dbhost>DATABASE_HOST : $dbhost</if>

Installation URL : $url
Current Version : $oldversion
Latest Version : $version
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

////////////////////////
// USER UPGRADE - 3
////////////////////////

// When upgraded by user successfully (By user)
$l['mail_userupgrade_success_user_sub'] = '$scriptname installation upgraded successfully';
$l['mail_userupgrade_success_user'] = 'Your $scriptname installation has been successfully upgraded to the latest version.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If any error occured while upgrading, (By user)
$l['mail_userupgrade_fail_user_sub'] = 'Upgrade of your $scriptname installation failed';
$l['mail_userupgrade_fail_user'] = 'The upgrade of your $scriptname installation has failed.
The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If UPGRADE and RESTORE failed while upgrading, (By user)
$l['mail_userupgrade_restore_fail_user_sub'] = 'Upgrade of your $scriptname installation failed';
$l['mail_userupgrade_restore_fail_user'] = 'The upgrade of your $scriptname installation has failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

////////////////////////
// AUTO UPGRADE - 3
////////////////////////

// When AUTOUPGRADED successfully
$l['mail_autoupgrade_success_user_sub'] = '$scriptname Installation Auto Upgraded Successfully';
$l['mail_autoupgrade_success_user'] = 'Your $scriptname installation has been successfully auto upgraded to the latest version.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// When AUTOUPGRADE FAILED
$l['mail_autoupgrade_fail_user_sub'] = 'Auto Upgrade of your $scriptname installation failed';
$l['mail_autoupgrade_fail_user'] = 'The auto upgradation of your $scriptname installation has failed.
The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If UPGRADE and RESTORE failed while AUTOUPGRADING
$l['mail_autoupgrade_restore_fail_user_sub'] = 'Auto Upgrade of your $scriptname installation failed';
$l['mail_autoupgrade_restore_fail_user'] = 'The auto upgradation of your $scriptname installation has failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

////////////////////////
// PRE UPGRADE CHECK 
////////////////////////

// If pre upgradation check fails while AUTOUPGRADE (FOR USER)
$l['mail_autoupgrade_precheck_fail_sub'] = 'Pre Upgrade Check failed';
$l['mail_autoupgrade_precheck_fail'] = 'Auto upgrade process for the following installation cannot be completed, because it does not meet the upgrade requirements :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
<if $upgrade_error>
Error : $upgrade_error
</if>
<if $error>
Error : $error
</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

/////////////////////////////////
// Backup Failed CLI UPGRADE
/////////////////////////////////

// If a backup fails before AUTO UPGRADING an installation (FOR USER)
$l['mail_autoupgrade_backup_fail_sub'] = 'Backup process failed before auto upgrading $scriptname installation';
$l['mail_autoupgrade_backup_fail'] = 'The backup of $scriptname installation has failed. So the auto upgrade process was aborted.
The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
Error : $error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
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

// Add User Language Strings
$l['mail_add_user_sub'] = 'Welcome to Softaculous Remote Installer';
$l['mail_add_user'] = 'You can now successfully login into Softaculous Remote Installer.
The details are as follows :
User 					: $username
API Key 				: $api_key
API Password 			: $api_pass
Number of Users allowed	: $number_of_users';

// Requirement parser languages
$l['req_ver_nf'] = 'Required &soft-1; version &soft-2; &soft-3; AND found version is : ';
$l['req_ext_nf'] = 'Required &soft-1; extension not found :';
$l['req_func_nf'] = 'Required &soft-1; function not found';
$l['req_ext_ver'] = 'Required &soft-1; &soft-2; extension version &soft-3; &soft-4; BUT found &soft-5;';
$l['gt'] = 'greater than';
$l['lt'] = 'less than';
$l['ge'] = 'greater than equal to';
$l['le'] = 'less than equal to';
$l['eq'] = 'is';

// Automated Backup Language Strings
$l['mail_auto_backup_sub'] = 'Automatic Backup of your $scriptname installation';
$l['mail_auto_backup'] = 'The automatic backup of your $scriptname installation was completed successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url
Backup Path : $backup_file

You can download the backup from the Backups Section in '.APP.'.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_auto_backup_fail_sub'] = 'Failed : Automatic Backup of your $scriptname installation';
$l['mail_auto_backup_fail'] = 'The automatic backup of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url
Backup Path : $backup_file

The following error occured :
$error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Email for sending the list of scripts which does not meet the requirements.
$l['mail_script_requirement_sub'] = 'Scripts requirements failed log';
$l['mail_script_requirement'] = 'The following list of script(s) do not meet the minumum requirements on your server and might not work.
The details are as follows :

$failed_req

Note : If you are changing the PHP version on runtime (i.e. using CageFS, hive, .htaccess etc.) than you can ignore the above PHP version failure warnings.
';

// Softpanel Language Strings
$l['no_www_domain'] = 'Proszę zamknąć wszystkie strony '.APP.' i wylogować się z panelu kontrolnego przez przycisk wylogowywania.
Po wykonaniu tych czynności będzie można zalogować się ponownie i używać '.APP.'.';

$l['install_tweet'] = 'Właśnie zainstalowałem #[[SCRIPTNAME]] przez #[[APP]] #[[TYPE]]';
$l['upgrade_tweet'] = 'Właśnie zaktualizowałem #[[SCRIPTNAME]] przez #[[APP]] #[[TYPE]]';
$l['clone_tweet'] = 'Właśnie sklonowałem #[[SCRIPTNAME]] przez #[[APP]] #[[TYPE]]';

?>