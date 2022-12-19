<?php
//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-==-=-
//
// File name: 	    define.inc.php
//
// File purpose: 	This is the place to define useful global constants
//
//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-==-=-
// Set Time Zone
//
putenv("TZ=US/Eastern");

// Include files containing parts of each website page
//
define("INC_FOOTER", "includes/footer.inc.php");
define("INC_HEADER", "includes/header.inc.php");

// General defines
//
define("WEBSITE_NAME", "PHP Class Exercise");
define("WEBSITE_URL", "localhost/E19_CARLSON"); // TODO: modify to be your project name
define("DEV_COMPANY_NAME", "Toys R Us");  				// TODO: modify to add the development company name
define("DEV_COMPANY_URL", "");					// TODO: add absolute URL to the development company website
define("WEBSITE_FROMEMAIL", "");				// TODO: add generic info@ url for the website contact form
define("WEBSITE_TOEMAIL", "");					// TODO: add generic sales@ url for the website contact form

// Page titles
//
define("T_BASESTEM", WEBSITE_NAME . " | ");
// TODO: add a define for T_PAGENAME_HOME and set it to "Home" 
define("T_PAGENAME_HOME", "Home");


// Error messages
//
define("T_400", T_BASESTEM . "Error 400");
define("T_401", T_BASESTEM . "Error 401");
define("T_402", T_BASESTEM . "Error 402");
define("T_403", T_BASESTEM . "Error 403");
define("T_404", T_BASESTEM . "Error 404");
define("T_500", T_BASESTEM . "Error 500");
?>