<?php 

//require_once 'PrimeMultiplication.php';
//require_once 'Test.php';

require_once __DIR__ . '/autoload.php';

$multiCount = 10;
$multiObj = new PrimeMultiplication($multiCount);
$testObj = new TestPrime($multiCount);

//To check test result call below method_exists
echo '<br/>';
$testObj->print_test_results();
die();


?>
