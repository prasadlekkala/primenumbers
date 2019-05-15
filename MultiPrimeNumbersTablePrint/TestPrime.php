<?php
//require_once 'Prime.php';

class TestPrime extends Prime{
	
	private $primes = null;
    private $results = array();
    private $passed = 0;
    private $failed = 0;
	
	function __construct($n) 
    {
		
		//$primeObj = new Prime();
		$this->primes = $this->get_primes($n);
		foreach($this->primes as $prime){
			$this->assertion($this->is_prime($prime), __METHOD__, "Number ".$prime." is a prime");
		}
        
    }
	function assertion($bool, $name, $desc = "")
    {
        if ($bool) {
            $this->pass($name, $desc);
        } else {
            $this->fail($name, $desc);
        }
    }

    function pass($method, $append = "") 
    {		
        $this->results[$method][] = "Green Pass: $append no color";
        $this->passed++;
    }

    function fail($method, $append = "") 
    {		
        $this->results[$method][] = "Red Fail: $append" . 'No color';
        $this->failed++;
    }
	function print_test_results() 
    {
		//$qty = 0;
        foreach($this->results as $name => $result) {
            $label = explode("::", $name);
            $label = isset($label[1]) ? ucwords(str_replace("_", " ", $label[1])) : $label[0];
			//echo '<pre>'; print_r($result);die();
			echo 'Test cases executed.'; echo '<br/>';
            echo 'TestPrime Class:' .$label. ' Method'; echo '<br/>';
            foreach($result as $i => $line) {
                echo $i+1 ."\t" . $line; echo '<br/>';
                //printf("\t%d: %s\n", $qty + 1, $line); echo '<br/>';
                //$qty++;
            }
        }        
    }
}
?>