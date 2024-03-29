<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backup_lang.php
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

$l['no_ins'] = 'No installation was submitted';
$l['wrong_ins_title'] = 'Wrong Istallation ID';
$l['wrong_ins'] = 'The installation ID you submitted does not exist';
$l['backup_ftp_error'] = 'Could not create Backup Directory <b>&soft-1;</b>. Please create manually and try again.';
$l['err_backup'] = 'Could not create Backup.';
$l['no_space_backup'] = 'You do not have sufficient space to backup this installation!';
$l['err_notelength'] = 'Backup note must be less than 255 characters';

$l['cant_backup_dir'] = 'The backup utility could not back up the files.';
$l['could_not_read'] = 'Oops Softaculous could not read the following file/directory <b>&soft-1;</b> Please make it readable to continue using the backup utility.';
$l['cant_datadir_dir'] = 'There were errors while adding the data directory.';
$l['cant_wwwdir'] = 'There were errors while adding the Web directory.';
$l['cant_backup_db'] = 'There were errors while adding the Database to the backup.';
$l['err_perm_file'] = 'There were errors while trying to make a file of permissions';
$l['err_dataperm_file'] = 'There were errors while trying to make a file of permissions of the data directory';
$l['err_wwwperm_file'] = 'There were errors while trying to make a file of permissions of the WEB directory';
$l['save_dir_perms'] = 'Could not save the file permissions';
$l['save_datadir_perms'] = 'Could not save the permissions of the data directory';
$l['save_www_perms'] = 'Could not save the permissions of the Web directory';
$l['cant_connect_mysql'] = 'Could not connect to database, please check the Username/Password of your database. If changed, please update the details in Softaculous installations using Edit Details.';

//Theme Strings
$l['<title>'] = APP.' - Backup';
$l['info'] = 'Info';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Installation Number';
$l['ins_ver'] = 'Wersja';
$l['ins_time'] = 'Data instalacji';
$l['ins_path'] = 'Ścieżka';
$l['ins_wwwdir'] = 'Web Directory Path';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Nazwa bazy danych';
$l['ins_dbuser'] = 'Database User';
$l['ins_dbpass'] = 'Database Password';
$l['ins_dbhost'] = 'Database Host';
$l['backup_ins'] = 'Backup a Installation';
$l['backup_dir'] = 'Backup Directory';
$l['backup_dir_exp'] = 'If you check this the entire folder will be backed up';
$l['backup_db'] = 'Backup Database';
$l['backup_db_exp'] = 'If checked the database will also be backed up';
$l['backup_conf'] = 'The backup may take some time depending on the data. Please do not close the webpage nor navigate to another page.';
$l['backedup'] = 'The backup was created successfully. You can download it from the <a href="'.$globals['index'].'act=backups">Backups</a> page.<br /> Your installation URL : <a href="&soft-1;" target="_blank">&soft-1;</a>';
$l['backup_ins'] = 'Backup Installation';
$l['backup_datadir'] = 'Backup Data Directory';
$l['backup_datadir_exp'] = 'If checked the Data directory will be saved.';
$l['ins_datadir'] = 'Data Directory';
$l['return'] = 'Return to Overview';
$l['ins_cron_command'] = 'Cron Command';
$l['backup_wwwdir'] = 'Backup Web Directory';
$l['backup_wwwdir_exp'] = 'If checked the Web directory will be saved.';
$l['checking_data'] = 'Checking the submitted data';
$l['backingup_db'] = 'Backing up the Database';
$l['backingup_dir'] = 'Backing up the Directory';
$l['backingup_datadir'] = 'Backing up the Data Directory';
$l['finishing_process'] = 'Finishing Backup';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. You can leave this page if you wish !';
$l['backingup'] = 'The backup is being created in the background. You will be notified by email once its completed.<br /> After the backup is completed, you can download it from the <a href="'.$globals['index'].'act=backups">Backups</a> page.<br /> Your installation URL : <a href="&soft-1;" target="_blank">&soft-1;</a>';
$l['check_email'] = 'Please check your email for the status of the backup';
$l['prog_backingup'] = 'Backing Up '; // Dont remove the trailing space
$l['prog_backup_complete'] = 'Backup Completed.';
$l['backup_note'] = 'Backup Note';
$l['backup_note_exp'] = 'You can save a note for your reference';


?>