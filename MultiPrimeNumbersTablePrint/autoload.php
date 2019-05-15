<?php

function __autoload( $class ) 
{
    $file = str_replace("\\", "/", trim($class, "\\"));
//echo __DIR__ . "/$file.php";DIE();
    if (is_file(__DIR__ . "/$file.php" )) {
		//echo $file;die();
        require_once(__DIR__ . "/$file.php");
    }
}
