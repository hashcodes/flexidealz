<?php 
//File Location: /config.php
 
define("NAMESPACE_DIR",'import'); 
 
function __autoload($class) {     
$parts = explode("\\", $class);     
$filepath = implode(DIRECTORY_SEPARATOR,$parts);     
$filepath = strtolower(NAMESPACE_DIR.DIRECTORY_SEPARATOR.$filepath.'.php');     
require $filepath; 
} 
 
$DB_SETTINGS = array( 
 /* 'host' => 'localhost',
 'database' => 'flexi2xl_flexi',
 'username' => 'flexi2xl_fdz',
 'password' => 'flexiD' */ 
 'host' => 'localhost',
 'database' => 'hashcode',
 'username' => 'root',
 'password' => ''	
);

global $DB_SETTINGS;

?>