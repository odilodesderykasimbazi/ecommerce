<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$active_group = 'default';
$query_builder = TRUE;

// $db['default'] = array(
// 	'dsn'	=> '',
// 	'hostname' => 'localhost',
// 	'username' => 'root',
// 	'password' => 'root',
// 	'database' => 'production_db',
// 	'dbdriver' => 'mysqli',
// 	'dbprefix' => '',
// 	'pconnect' => FALSE,
// 	'db_debug' => (ENVIRONMENT !== 'production'),
// 	'cache_on' => FALSE,
// 	'cachedir' => '',
// 	'char_set' => 'utf8',
// 	'dbcollat' => 'utf8_general_ci',
// 	'swap_pre' => '',
// 	'encrypt' => FALSE,
// 	'compress' => FALSE,
// 	'stricton' => FALSE,
// 	'failover' => array(),
// 	'save_queries' => TRUE
// );

 $db['default']['hostname'] = "localhost";
 $db['default']['username'] = "root";
 $db['default']['password'] = "root";
$db['default']['database'] = "production_db";
$db['default']['dbdriver'] = "mysqli";
$db['default']['dbprefix'] = "";
$db['default']['pconnect'] = FALSE;
$db['default']['db_debug'] = FALSE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = "";
$db['default']['char_set'] = "utf8";
$db['default']['dbcollat'] = "utf8_general_ci";
$db['default']['swap_pre'] = "";
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;
$db['default']['db_debug'] = FALSE;

$db['otherdb']['hostname'] = "localhost";
 $db['otherdb']['username'] = "root";
 $db['otherdb']['password'] = "root";
$db['otherdb']['database'] = "postadsbd";
$db['otherdb']['dbdriver'] = "mysqli";
$db['otherdb']['dbprefix'] = "";
$db['otherdb']['pconnect'] = FALSE;
$db['otherdb']['db_debug'] = FALSE;
$db['otherdb']['cache_on'] = FALSE;
$db['otherdb']['cachedir'] = "";
$db['otherdb']['char_set'] = "utf8";
$db['otherdb']['dbcollat'] = "utf8_general_ci";
$db['otherdb']['swap_pre'] = "";
$db['otherdb']['autoinit'] = TRUE;
$db['otherdb']['stricton'] = FALSE;
$db['otherdb']['db_debug'] = FALSE;

