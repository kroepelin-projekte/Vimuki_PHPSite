<?php

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
ini_set("session.cache_limiter", "must-revalidate"); // Avoid Document not found when click on back button in browser
ini_set("soap.wsdl_cache_enabled", 0); // prevent WSDL cache

date_default_timezone_set('Europe/Berlin');
session_start();
define( 'ROOT_PATH', dirname( __DIR__ ) . '/' );
define( 'BASIC_PATH', dirname( __DIR__ ) );

// BBBSERVER
const BBB_SECRET = 'xxxxxxxxxx';
const BBB_SERVER = 'https://bbbserver.de';
const BBB_SERVER_BASE_URL = 'https://bbbserver/bigbluebutton/';
const ILIAS_DOMAIN_NAME = 'iliasdomainname.de';


// ILIAS INSTALLATION
const ILIAS_BASE_URL = 'https://iliasdomaninname/iliasdirectory';
const ILIAS_CLIENT = "iliascient"; // the client ID (see ILIAS setup) of your ILIAS client
const NIC_ID = "nicid";
const ILIAS_SOAP_USERNAME = "soapuser"; // the name of the soap user you created in the ILIAS administration
const ILIAS_SOAP_PASSWORD = "sopapassword"; // password of the soap user

require_once('../src/Soap/nusoap.php'); // path der nusoap.php
require_once ROOT_PATH. 'Autoloader.php';

