<?php
    $count = 0 ;
    $number = 2;
    $primes = array();
    $input = 10;
	
	$results = array();
    $passed = 0;
    $failed = 0;
	
	while ($count < $input )
	{
		$div_count=0;
		
		for ( $i=1;$i<=$number;$i++)
		{
			if (($number%$i)==0)
			{
			$div_count++;
			}
		}
		
		if ($div_count<3)
		{
            $primes[] = $number;
			$count=$count+1;
		}
		$number=$number+1;
	}
    function printPrimaNumberTable($number)
    {
        //$primes = primeNumbers($number);
        echo "<table border =\"1\" style='border-collapse: collapse'>";
        for($i = 0; $i < $number + 1; $i++) {
            echo "<tr>";
            for($j = 0; $j < $number + 1; $j++) {
                if ($j == 0 && $i == 0) {
                    echo "<td></td>";
                } else {
                    $p = print_value($i, $j);
                    echo "<td>$p</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    }	

function print_value($i, $j, $primes = NULL)
    {
    global $primes;
        if ($j < $i) {
            return print_value($j, $i,$primes);
        } else {
            if ($i == 0) {
                return $j == 0 ? null : $primes[$j - 1];
            } else {
                return $primes[$i - 1] * $primes[$j - 1];
            }
        }
    }
printPrimaNumberTable(10);

function is_prime($number){
	$number = (int) $number;
	if ($number < 2) return false;
	if ($number === 2 || $number === 3) return true;
	if ($number % 2 === 0) return false;
	return true;
}
	function primeTest() 
    {
		global $primes;
		foreach($primes as $prime){
			assertion(is_prime($prime), __METHOD__, "Number ".$prime." is a prime");
		}
        
    }
	function assertion($bool, $name, $desc = "")
    {
        if ($bool) {
            pass($name, $desc);
        } else {
            fail($name, $desc);
        }
    }

    function pass($method, $append = "") 
    {
		global $results, $passed;
        $results[$method][] = "Green Pass: $append no color";
        $passed++;
    }

    function fail($method, $append = "") 
    {	
		global $results, $passed;
        $results[$method][] = "Red Fail: $append" . 'No color';
        $failed++;
    }
	function print_test_results() 
    {
		global $results;

        //$qty = 0;

        foreach($results as $name => $result) {
            $label = explode("::", $name);
            $label = isset($label[1]) ? ucwords(str_replace("_", " ", $label[1])) : $label[0];
//echo '<pre>'; print_r($result);die();
            echo 'Method:' .$label;echo '<br/>';
            foreach($result as $i => $line) {
                echo $i+1 ."\t" . $line; echo '<br/>';
                //printf("\t%d: %s\n", $qty + 1, $line); echo '<br/>';
                //$qty++;
            }
        }        
    }
    echo '<br>';
	primeTest();
	print_test_results();
?>
