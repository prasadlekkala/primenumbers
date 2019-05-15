<?php

/**
 * Prime.php
 */
class Prime {
	
	private $result = array();

    public function __construct()
    { 
    }

    /**
     * get_primes returns n amount of primes
     *
     * @param <integer> quantity of requested prime numbers
     * @return <array> returns an array of size $n with consecutive primes
     */
    final public function get_primes($quaPrimeNum) 
    {	
		$count  = 0;
		$number = 2;
        while ($count < $quaPrimeNum )
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
				$this->result[] = $number;
				$count=$count+1;
			}
			$number=$number+1;
		}
		return $this->result;
    }

    /**
     * Verifies if number is a prime.
     *
     * @param $number <integer>
     * @return boolean
     */
    final public function is_prime($number) 
    {
        $number = (int) $number;
	if ($number < 2) return false;
	if ($number === 2 || $number === 3) return true;
	if ($number % 2 === 0) return false;
	return true;
    }
}

