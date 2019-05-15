<?php

require_once "Prime.php";

class PrimeMultiplication 
{
    /* @var <number> $length and height of multiplication table */
    private $length = 0;

    /* @var <array> $primes collection of N primes */
    private $primes = array();

    public function __construct($n) 
    {
		$primeObj = new Prime();
		/* increment for display of primes */
        $this->length = $n + 1;
        $this->primes = $primeObj->get_primes($n);
		$this->printPrimaNumberTable();
    }


	function print_value($i, $j)
	{
		if ($j < $i) {
			return $this->print_value($j, $i);
		} else {
			if ($i == 0) {
				return $j == 0 ? null : $this->primes[$j - 1];
			} else {
				return $this->primes[$i - 1] * $this->primes[$j - 1];
			}
		}
	}
	function printPrimaNumberTable()
	{
		echo "<table border =\"1\" style='border-collapse: collapse'>";
		for($i = 0; $i < $this->length; $i++) {
			echo "<tr>";
			for($j = 0; $j < $this->length; $j++) {
				if ($j == 0 && $i == 0) {
					echo "<td></td>";
				} else {
					$p = $this->print_value($i, $j);
					echo "<td>$p</td>";
				}
			}
			echo "</tr>";
		}
		echo "</table>";
	}
}
