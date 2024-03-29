<?php

//////////////////////////////////////////////////////////////
//===========================================================
// restore_lang.php
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

$l['restoreerror'] = 'There was some error while unzipping the backup files';
$l['restoredatadir'] = 'Unable to restore data directory';
$l['restorewww'] = 'Unable to restore Web directory';
$l['res_err_selectmy'] = 'Could not select the database to restore';
$l['err_myconn'] = 'Could not connect to the database';
$l['err_db_create'] = 'Error occured while creating Database';

//Theme Strings
$l['<title>'] = APP.' - Restore';
$l['restorefile'] = 'Restore from Backup';
$l['restore_dir'] = 'Restore Directory';
$l['restore_dir_exp'] = 'If you check this the entire folder will be restored';
$l['restore_datadir'] = 'Restore Data Directory';
$l['restore_datadir_exp'] = 'If checked the Data directory will be restored';
$l['restore_db'] = 'Restore Database';
$l['restore_db_exp'] = 'If checked the database will also be restored';
$l['restore_ins'] = 'Restore Installation';
$l['restore'] = 'Your Backup has been restored successfully';
$l['confirm_restore'] = 'Are you sure you want to restore the installation ?';
$l['return'] = 'Return to Overview';
$l['restore_wwwdir'] = 'Restore Web Directory';
$l['restore_wwwdir_exp'] = 'If checked the Web directory will be restored';
$l['checking_data'] = 'Checking the submitted data';
$l['res_db'] = 'Restoring the Database';
$l['res_dir'] = 'Restoring the Directory';
$l['res_datadir'] = 'Restoring the Data Directory';
$l['finishing_process'] = 'Backup Restored';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. Please do not leave this page until the progress bar reaches 100%';
$l['restoring'] = 'Your backup is being restored in background. You will be notified by email once its completed.';
$l['prog_restoring'] = 'Restoring '; // Dont remove the trailing space
$l['prog_restore_complete'] = 'Restore Completed.';

?>