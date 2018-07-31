<?php
//SETTINGS
error_reporting(E_ALL ^ E_NOTICE);
ini_set("memory_limit","32M");
ini_set("max_execution_time", 30);

//HTTP
define("HTTP_DEV","127.0.0.1");
define("HTTP_LIVE","http://test.conf.co/");
define("HTTP_NAME","test.conf.co");
define("HTTP_TITLE","Conff | Home");

if ($_SERVER['HTTP_HOST']==HTTP_DEV){ 
	define("HTTP_SERVER", "http://".HTTP_DEV."/".HTTP_NAME."/");
	define("HTTP_LIB","../_lib/");
	define("HTTP_COM","../com/");
} else {
	define("HTTP_SERVER", HTTP_LIVE);
	define("HTTP_LIB","_lib/");
	define("HTTP_COM","com/");
}


//META
define("META_TITLE",HTTP_TITLE);
define("META_DESCRIPTION","");
define("META_KEYWORDS","");
define("META_OG_IMAGE","");
define("META_OG_TITLE","");
define("META_OG_DESCRIPTION","");
define("META_LANGUAGE","Turkish");
define("META_EMAIL","");
define("META_CREATION","");
define("META_ABSTRACT","");


//DATABASE
if ($_SERVER['HTTP_HOST']==HTTP_DEV){ 
    define("DB_NAME", "conffco1_test");
    define("DB_USERNAME", "root");
    define("DB_PASSWORD", "root");
} else {
    define("DB_NAME", "conffco1_test");
    define("DB_USERNAME", "root");
    define("DB_PASSWORD", "root");
}

//EMAIL
define("EMAIL_PROTOCOL","smtp");
define("EMAIL_HOST",""); //smtp host
define("EMAIL_PORT",""); //smtp port
define("EMAIL_USER",""); //smtp user name
define("EMAIL_PASSWORD",""); //smtp user password

//SECURITY
define("SECURE_BOTFILE","files/antibot.png");
define("SECURE_BOTFONT","ui/eurof35.ttf");


?>
