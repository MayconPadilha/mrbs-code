<?php
namespace MRBS;

use IntlDateFormatter;
require_once 'lib/autoload.inc';

$dbsys = "mysql";
$db_host = "db";
$db_database = "mrbs";
$db_login = "mrbs";
$db_password = "mrbs";
$db_tbl_prefix = "mrbs_";
$db_persist = FALSE;

/**************************************************************************
 *   MRBS Configuration File
 *   Configure this file for your site.
 *   You shouldn't have to modify anything outside this file.
 *
 *   This file has already been populated with the minimum set of configuration
 *   variables that you will need to change to get your system up and running.
 *   If you want to change any of the other settings in systemdefaults.inc.php
 *   or areadefaults.inc.php, then copy the relevant lines into this file
 *   and edit them here.   This file will override the default settings and
 *   when you upgrade to a new version of MRBS the config file is preserved.
 *
 *   NOTE: if you include or require other files from this file, for example
 *   to store your database details in a separate location, then you should
 *   use an absolute and not a relative pathname.
 **************************************************************************/

/**********
 * Timezone
 **********/
$timezone = "America/Sao_Paulo";

/*********************************
* Site identification information
*********************************/

$mrbs_company = "Instituto Federal do Rio Grande do Sul Campus Restinga";

/*********************************
* TIMES SETTINGS
*********************************/

$morningstarts         = 7;
$morningstarts_minutes = 30;

$eveningends           = 22;
$eveningends_minutes   = 30; 
