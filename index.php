<?php
//echo 'start index.php ! '."\n";

//print_r ($_SERVER);


$rootDir = (str_replace( "\\", '/',dirname(__FILE__)).'/') ;

define('__ROOT__', $rootDir);

include_once $rootDir.'/common/autoloader.php';

/**
echo "<br />".$rootDir;
echo '  server url:'.CommonFuns::getServerURL();
echo "<br />";
**/

$rootPage = new RootPage();

$rootPage->dispatcher();
