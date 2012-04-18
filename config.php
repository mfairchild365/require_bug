<?php
//Turn error reporting on.
error_reporting(E_ALL);
ini_set('display_errors', true);

echo "//Config File loaded. <br />";

//Set up a very basic config file.
$config = new stdClass();
$config->path = dirname(__FILE__);