<?php // -*-mode: PHP; coding:utf-8;-*-
namespace MRBS;

use IntlDateFormatter;

require_once 'lib/autoload.inc';

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

// The timezone your meeting rooms run in. It is especially important
// to set this if you're using PHP 5 on Linux. In this configuration
// if you don't, meetings in a different DST than you are currently
// in are offset by the DST offset incorrectly.
//
// Note that timezones can be set on a per-area basis, so strictly speaking this
// setting should be in areadefaults.inc.php, but as it is so important to set
// the right timezone it is included here.
//
// When upgrading an existing installation, this should be set to the
// timezone the web server runs in.  See the INSTALL document for more information.
//
// A list of valid timezones can be found at http://php.net/manual/timezones.php
// The following line must be uncommented by removing the '//' at the beginning
// FBM: Linia original (comentada): //$timezone = "Europe/London";
$timezone = "Europe/Madrid";
//


/*******************
 * Database settings
 ******************/
// Which database system: "pgsql"=PostgreSQL, "mysql"=MySQL
$dbsys = "mysql";
// Hostname of database server. For pgsql, can use "" instead of localhost
// to use Unix Domain Sockets instead of TCP/IP. For mysql "localhost"
// tells the system to use Unix Domain Sockets, and $db_port will be ignored;
// if you want to force TCP connection you can use "127.0.0.1".
$db_host = "localhost";
// If you need to use a non standard port for the database connection you
// can uncomment the following line and specify the port number
// $db_port = 1234;
// Database name:
//FBM: Linia original: $db_database = "mrbs";
$db_database = "etsit";
// Schema name.  This only applies to PostgreSQL and is only necessary if you have more
// than one schema in your database and also you are using the same MRBS table names in
// multiple schemas.
//$db_schema = "public";
// Database login user name:
$db_login = "etsit";
// Database login password:
//FBM: Linia original: $db_password = 'mrbs-password';
$db_password = 'etsitEpdreD123#@!';
// Prefix for table names.  This will allow multiple installations where only
// one database is available
$db_tbl_prefix = "mrbs_";
// Set $db_persist to TRUE to use PHP persistent (pooled) database connections.  Note
// that persistent connections are not recommended unless your system suffers significant
// performance problems without them.   They can cause problems with transactions and
// locks (see http://php.net/manual/en/features.persistent-connections.php) and although
// MRBS tries to avoid those problems, it is generally better not to use persistent
// connections if you can.
$db_persist = false;


/* Add lines from systemdefaults.inc.php and areadefaults.inc.php below here
   to change the default configuration. Do _NOT_ modify systemdefaults.inc.php
   or areadefaults.inc.php.  */

///////////////////////////////////////////////////////////////////////////////
//FBM: systemdefaults.inc.php
///////////////////////////////////////////////////////////////////////////////

//FBM: Linia original: $mrbs_admin = "Your Administrator";
//$mrbs_admin = "ETSIT";
$mrbs_admin = "ETSIT";
//////

//FBM: Per poder administrar en cas d'emergència [Encara no funciona]
//unset($auth["admin"]);              // Include this when copying to config.inc.php
//unset($auth["user"]);              // Include this when copying to config.inc.php
//$auth["user"]["fburrull"] = "ann1996";
//$auth["admin"][] = "fburrull"; // A username from the user list. Useful
//////                                    // with most other session schemes.

//FBM: Linia original: $mrbs_admin_email = "admin_email@your.org";
$mrbs_admin_email = "direccion@etsit.upct.es";
//////

//FBM: linia original: $mrbs_company = "Your Company";   // This line must always be uncommented ($mrbs_company is used in various places)
$mrbs_company = "Universidad Politécnica de Cartagena (UPCT)";   // This line must always be uncommented ($mrbs_company is used in various places)
/////

// Uncomment this next line to use a logo instead of text for your organisation in the header
//$mrbs_company_logo = "your_logo.gif";    // name of your logo file.   This example assumes it is in the MRBS directory
//FBM: we will see...
$mrbs_company_logo = "logo-bicolor-tech.png";

// Uncomment this next line for supplementary information after your company name or logo.
// This can contain HTML, for example if you want to include a link.
//$mrbs_company_more_info = "You can put additional information here";  // e.g. "XYZ Department"
//FBM: we will see...
//$mrbs_company_more_info = "&#x1F3E2; &#x1F3E2; &#x1F3E2; 𝓔𝓭𝓲𝓯𝓲𝓬𝓲𝓸 𝓐𝓷𝓽𝓲𝓰𝓸𝓷𝓮𝓼 - 𝓔𝓣𝓢𝓘𝓣  &#127970; &#x1F3E2; &#x1F3E2;";  // e.g. "XYZ Department"
//$mrbs_company_more_info = "🅴🅳🅸🅵🅸🅲🅸🅾 🅰🅽🆃🅸🅶🅾🅽🅴🆂 - 🅴🆃🆂🅸🆃 ";  // e.g. "XYZ Department"
//$mrbs_company_more_info = " 🅔🅓🅘🅕🅘🅒🅘🅞 🅐🅝🅣🅘🅖🅞🅝🅔🅢 - 🅔🅣🅢🅘🅣";  // e.g. "XYZ Department"
//$mrbs_company_more_info = "🄴🄳🄸🄵🄸🄲🄸🄾 🄰🄽🅃🄸🄶🄾🄽🄴🅂 - 🄴🅃🅂🄸🅃";  // e.g. "XYZ Department"
$mrbs_company_more_info = "🅴🅳🅸🅵🅸🅲🅸🅾 🅰🅽🆃🅸🅶🅾🅽🅴🆂 - 🅴🆃🆂🅸🆃 ";  // e.g. "XYZ Department"

// Uncomment this next line to have a link to your organisation in the header
//$mrbs_company_url = "http://www.your_organisation.com/";
//FBM: we will see...
$mrbs_company_url = "https://www.upct.es/";


//FBM: Linia original: $min_booking_date = "2012-04-23";  // Must be a string in the format "yyyy-mm-dd"
$min_booking_date = "2024-09-11";  // Must be a string in the format "yyyy-mm-dd"
//////

// Start of week: 0 for Sunday, 1 for Monday, etc.
//FBM: Linia original: $weekstarts = 0;
$weekstarts = 1;
//////

$vocab_override['en']['mrbs'] = "Sistema de Reserva de Aulas";

///////////////////////////////////////////////////////////////////////////////
////FBM: areadefaults.inc.php
///////////////////////////////////////////////////////////////////////////////


