<?php

//////////////////////////////////////////////////////////////
//===========================================================
// software_lang.php
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

$l['no_info_file'] = 'The INFO.XML file could not be found! Please report this to the server administrator.';
$l['incompatible'] = 'The software requires a higher version of '.APP.'! Please report this to the server administrator.';
$l['no_install'] = 'The INSTALL.XML file could not be found! Please report this to the server administrator.';
$l['no_functions'] = 'The INSTALL FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_remove_functions'] = 'The REMOVE FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_softdomain'] = 'You did not choose the domain to install the software.';
$l['wrong_softdomain'] = 'The path of the domain you selected could not be found.';
$l['softdirectory_exists'] = 'The directory you typed already exists! Please type in another directory name.';
$l['no_space'] = 'You do not have sufficient space to install this software!';
$l['no_softdb'] = 'The database was not posted.';
$l['database_exists'] = 'The database already exists. Please choose a different name.';
$l['databaseuser_exists'] = 'The database user already exists. Please choose a different database name.';
$l['db_name_long'] = 'The database name cannot be greater than 7 letters. Please choose a shorter database name.';
$l['db_limit_crossed'] = 'The maximum number of databases you can create has been reached, so installation cannot proceed.';
$l['no_field'] = 'The field <b>&soft-1;</b> is required and must be filled out.';
$l['error_adddb'] = 'The database could not be created';
$l['error_adduser'] = 'There was an error in adding a user to the new database';
$l['no_package'] = 'The installation package could not be found!';
$l['no_decompress'] = 'There were some errors in decompressing the package files.';
$l['mail_new_ins'] = 'A new installation of &soft-1; has been completed. The details of the installation are shown below:';
$l['mail_path'] = 'Path';
$l['mail_url'] = 'URL';
$l['mail_admin_url'] = 'Admin URL';
$l['mail_admin'] = 'Admin Username';
$l['mail_pass'] = 'Admin Pass';
$l['mail_db'] = 'MySQL Database';
$l['mail_dbuser'] = 'MySQL DB User';
$l['mail_dbhost'] = 'MySQL DB Host';
$l['mail_dbpass'] = 'MySQL DB Password';
$l['mail_time'] = 'Time of Installation';
$l['mail_subject'] = 'New Installation of &soft-1;';
$l['no_cron_min'] = 'No Cron minute was specified';
$l['no_cron_hour'] = 'No Cron hour was specified';
$l['no_cron_day'] = 'No Cron day was specified';
$l['no_cron_month'] = 'No Cron month was specified';
$l['no_cron_weekday'] = 'No Cron weekday was specified';
$l['wrong_cron_min'] = 'Cron minute is wrong. Valid values are 0-59 or a <b>*</b>';
$l['wrong_cron_hour'] = 'Cron hour is wrong. Valid values are 0-23 or a <b>*</b>';
$l['wrong_cron_day'] = 'Cron day is wrong. Valid values are 1-31 or a <b>*</b>';
$l['wrong_cron_month'] = 'Cron month is wrong. Valid values are 1-12 or a <b>*</b>';
$l['wrong_cron_weekday'] = 'Cron weekday is wrong. Valid values are 0-7 or a <b>*</b>';
$l['mail_cron'] = 'Cron Job';
$l['no_datadir'] = 'No Data directory was specified';
$l['datadir_exists'] = 'The data directory you submitted exists. Please specify another one.';
$l['no_decompress_data'] = 'There were some errors in decompressing the DATA files.';
$l['mail_datadir'] = 'Data Directory';
$l['some_files_exist'] = 'Installation cannot proceed because the following files already exist in the target folder : ';
$l['delete_files'] = 'Please delete these files or choose another folder.';
$l['overwrite_exist'] = '<b>OR</b> <br />Select the checkbox to overwrite all files and continue';
$l['checking_data'] = 'Checking the submitted data';
$l['unzipping_files'] = 'Copying files and folders';
$l['unzipping_datadir'] = 'Unzipping data files';
$l['prop_db'] = 'Propagating the database';
$l['finishing_process'] = 'Finishing Installation';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. Please do not leave this page until the progress bar reaches 100%';
$l['no_hostname'] = 'Please enter your Database Hostname';
$l['no_dbusername'] = 'Please enter your Database Username';
$l['no_dbuserpass'] = 'Please enter your Database Password';
$l['softdirectory_invalid'] = 'The directory you typed is invalid.';
$l['softdatadir_invalid'] = 'The data directory you typed is invalid.';
$l['err_domain'] = 'No Domain';
$l['err_domain_admin'] = 'This User does not have any Domain. Please contact Administrator.';
$l['err_pass_strength'] = 'Password strength must be greater than ';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['err_dbprefix'] = 'Table Prefix is invalid. Valid values are a-z or A-Z or 0-9 or _';
$l['no_php_install'] = 'PHP is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=1">here</a>';
$l['no_mysql_install'] = 'MySQL is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=16">here</a>';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Instaluj';
$l['overview'] = 'Przegląd';
$l['features'] = 'Funkcje';
$l['demo'] = 'Demo';
$l['ratings'] = 'Oceny';
$l['import'] = 'Import';
$l['software_ver'] = 'Wersja';
$l['space_req'] = 'Miejsce na dysku';
$l['available_space'] = 'Dostępna przestrzeń dysku';
$l['req_space'] = 'Wymagana przestrzeń dysku';
$l['mb'] = 'MB';
$l['software_support'] = 'Wsparcie';
$l['support_link'] = 'Odwiedź stronę wsparcia';
$l['support_note'] = 'Uwaga: Softaculous nie udziela wsparcia dla żadnego skryptu/oprogramowania.';
$l['setup'] = 'Instalacja oprogramowania';
$l['choose_domain'] = 'Wybierz domenę';
$l['choose_domain_exp'] = 'Proszę wybrać domenę do instalacji oprogramowania.';
$l['in_directory'] = 'W katalogu';
$l['in_directory_exp'] = 'The directory is relative to your domain and <b>should not exist</b>. e.g. To install at http://mydomain/dir/ just type <b>dir</b>. To install only in http://mydomain/ leave this empty.';
$l['database_name'] = 'Nazwa bazy danych';
$l['database_name_exp'] = 'Type the name of the database to be created for the installation';
$l['softcopy_note'] = '<b>NOTE</b>: This software requires that it be installed using its own installation utility. Please visit the URL that will be shown once the files have been copied to complete the installation process.';
$l['softsubmit'] = 'Instaluj';
$l['congrats'] = 'Congratulations, the software was installed successfully';
$l['succesful'] = 'has been successfully installed at';
$l['admin_url'] = 'Administrative URL';
$l['setup_continue'] = 'However, setup will be completed by the software itself. To complete setup, please visit the following URL';
$l['enjoy'] = 'We hope the installation process was easy.';
$l['install_notes'] = 'The following are some important notes. It is hightly recommended that you read them ';
$l['please_note'] = '<b>NOTE</b>: Softaculous is just an automatic software installer and does not provide any support for the individual software packages. Please visit the software vendor\'s web site for support!';
$l['regards'] = 'Regards';
$l['softinstaller'] = 'Softaculous Auto Installer';
$l['return'] = 'Wróć do przeglądu';
$l['current_ins'] = 'Current Installations';
$l['link'] = 'Link';
$l['ins_time'] = 'Czas instalacji';
$l['version'] = 'Wersja';
$l['upd_to'] = 'Upgrade to Version';
$l['remove'] = 'Usuń';
$l['no_info'] = 'Brak informacji';
$l['randpass'] = 'Wygeneruj losowe hasło';
$l['ratesoft'] = 'Oceń ten skrypt';
$l['reviews'] = 'Reviews';
$l['reviewsoft'] = 'Write a Review';
$l['readreviews'] = 'Read Reviews';
$l['reviews_exp'] = 'Read reviews written by other users and';
$l['cron_job'] = 'CRON Job';
$l['cron_job_exp'] = 'This script requires a CRON to work. Please specify the CRON timings. If you are unaware of it, leave it as it is!';
$l['cron_min'] = 'Minuta';
$l['cron_hour'] = 'Godzina';
$l['cron_day'] = 'Dzień';
$l['cron_month'] = 'Miesiąc';
$l['cron_weekday'] = 'Dzień tygodnia';
$l['datadir'] = 'Katalog z danymi';
$l['datadir_exp'] = 'This script requires to store its data in a folder not accessible via the web. It will be created in your home folder. i.e. if you specify <b>datadir</b> the following will be created - /home/username/<b>datadir</b>';
$l['db_alpha_num'] = 'Only alpha numeric characters are allowed for the Database name.';
$l['overwrite'] = 'Overwrite Files';
$l['ins_emailto'] = 'Email installation details to';
$l['choose_protocol'] = 'Choose Protocol';
$l['choose_protocol_exp'] = 'If your site has SSL, then please choose the HTTPS protocol.';
$l['clone'] = 'Klonuj';
$l['backup'] = 'Kopia zapasowa';
$l['options'] = 'Opcja';
$l['admin'] = 'Administrator';
$l['notify_ver'] = 'Powiadom '.$globals['sn'].' o nowszej wersji';
$l['notifyversion'] = 'Dziękujemy za poinformowanie o nowej wersji. Sprawdzimy to tak szybko jak to tylko możliwe';
$l['del_insid'] = 'Are you sure you wish to remove the selected installations ? The action will be irreversible. \nNo further confirmations will be asked.';
$l['rem_inst_id'] = 'Kasowanie instalacji - ';
$l['no_sel_inst'] = 'No installation(s) selected to remove.';
$l['inst_remvd'] = 'The selected installation(s) have been removed. The page will now be reloaded !';
$l['remove'] = 'Usuń';
$l['go'] = 'Idź';
$l['screenshots'] = 'Zrzuty ekranu';
$l['downloading'] = 'Strona pobierania';
$l['installing'] = 'Instalowanie skryptu';
$l['editdetail'] = 'Edit Details';
$l['publish'] = 'Publish on the Web';
$l['hostname'] = 'Database Hostname';
$l['hostname_exp'] = 'The MySQL hostname (mainly <b>localhost</b>)';
$l['dbusername'] = 'Database Username';
$l['dbusername_exp'] = 'The MySQL username';
$l['dbuserpass'] = 'Database Password';
$l['dbuserpass_exp'] = 'The password of the MySQL user';
$l['database_name_exp_aefer'] = 'Type the name of the database to be used for the installation';
$l['sel_version'] = 'Wybór wersji';
$l['choose_version_exp'] = 'Proszę zaznaczyć wersję do instalacji';
$l['choose_version'] = 'Wybierz wersję, którą chcesz zainstalować';
$l['select'] = 'Zaznacz';
$l['release_date'] = 'Data wydania';
$l['adv_option'] = 'Opcje zaawansowane';
$l['disable_notify_update'] = 'Wyłącz powiadomienia o aktualizacji';
$l['exp_disable_notify_update'] = 'If checked you will not receive an email notification for updates available for this installation.';
$l['prog_installing'] = 'Instalowanie '; // Dont remove trailing space
$l['prog_install_complete'] = 'Instalacja zakończona';
$l['eu_auto_upgrade'] = 'Automatyczna aktualizacja';
$l['exp_eu_auto_upgrade'] = 'Jeśli zaznaczone - ta instalacja będzie automatycznie aktualizowana do najnowszej wersji kiedy ta się pojawi.';
$l['auto_upgrade_enabled'] = 'Automatyczna aktualizacja włączona';
$l['bad'] = 'Słabe';
$l['good'] = 'Dobre';
$l['strong'] = 'Mocne';
$l['short'] = 'Krótkie';
$l['strength_indicator'] = 'Wskaźnik siły hasła';
$l['auto_backup'] = 'Automatyczne kopie zapasowe';
$l['exp_auto_backup'] = APP.' will take automated backups via CRON as per the frequency you select';
$l['auto_backup_rotation'] = 'Rotacja kopii zapasowych';
$l['exp_auto_backup_rotation'] = 'Jeśli limit rotacji zostanie osiągnięty, '.APP.' automatycznie usunie najstarsze kopie zapasowe dla tej instalacji i stworzy nowe. Kopie zapasowe zajmują przestrzeń na dysku, więc wybierz rotację odpowiednią dla ilości wolnego miejsca na serwerze';
$l['no_backup'] = 'Bez kopii zapasowej';
$l['daily'] = 'Raz dziennie';
$l['weekly'] = 'Raz na tydzień';
$l['monthly'] = 'Raz na miesiąc';
$l['unlimited'] = 'Bez limitu';
$l['changelog'] = 'Lista zmian';
$l['act_upgrade'] = 'Ostatnio zaktualizowane';
$l['act_clone'] = 'Ostatnio sklonowane';
$l['act_backup'] = 'Ostatnio objęte kopią zapasową';
$l['act_install'] = 'Ostatnio zainstalowane';
$l['act_edit'] = 'Ostatnio edytowane';
$l['act_import'] = 'Ostatnio zaimportowane';
$l['act_restore'] = 'Ostatnio przywrócone';
$l['ampps_download'] = 'You can develop <b>&soft-1;</b> on your <b>desktop</b> using our Free developer tool Softaculous AMPPS. Click <a href="http://www.ampps.com/download?give=latest" target="_blank"><b>here</b></a> to download <a href="http://www.ampps.com/download?give=latest" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>';

$l['install_tweet_sub'] = 'Powiedz znajomym o swoich nowych stronach';

?>