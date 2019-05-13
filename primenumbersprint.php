<?php
function primeNumbers($input){
    $count = 0 ;
    $number = 2;
    $primes = array();
	
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
			//echo $number." , ";
			$count=$count+1;
		}
		$number=$number+1;
	}
    return $primes;
}
    function paint()
    {
        /* Add some padding for readability */
        $padding = strlen(get_value(11 - 1, 11 - 1)) + 4;
        echo "<table>";
        for($i = 0; $i < 11; $i++) {
            //paint_border($padding);
            echo "<tr>";
            for($j = 0; $j < 11; $j++) {
                /* base case: blank will be converted to zero */
                if ($j == 0 && $i == 0) {
                    echo "<td></td>";
                } else {
                    $p = get_value($i, $j);
                    echo "<td>$p</td>";
                    //print(sprintf("%' " . $padding . "d", get_value($i, $j)));
                }
            }
            echo "</tr>";
        }
        echo "</table>";
        //paint_border($padding);
    }	
    function paint_border($padding)
    {
        for($j = 0; $j < 11; $j++) {
            print(sprintf("%'_" . $padding . "s", "_"));
        }
        print(sprintf("%'_" . $padding . "s", "_"));
        echo '<br>';
    }
function get_value($i, $j)
    {
    $primes = primeNumbers(10);
        if ($j < $i) {
            return get_value($j, $i);
        } else {
            if ($i == 0) {
                return $j == 0 ? null : $primes[$j - 1];
            } else {
                return $primes[$i - 1] * $primes[$j - 1];
            }
        }
    }
paint();
?>
