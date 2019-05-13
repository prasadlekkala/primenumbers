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

        for($i = 0; $i < 11; $i++) {

            paint_border($padding);
            print("\n");
            for($j = 0; $j < 11; $j++) {
                /* base case: blank will be converted to zero */
                if ($j == 0 && $i == 0) {
                    print(sprintf("%' " . $padding . "s", ""));
                } else {
                    print(sprintf("%' " . $padding . "d", get_value($i, $j)));
                }
            }
            print("\n");
        }
        paint_border($padding);
    }	

    function paint_border($padding)
    {
        for($j = 0; $j < 11; $j++) {
            print(sprintf("%'_" . $padding . "s", "_"));
        }
        print(sprintf("%'_" . $padding . "s", "_"));
        print("\n");
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
function dump_primes()
    {
    $primes = primeNumbers(10);
        foreach($primes as $prime) {
            print(sprintf("%s\t", $prime));
        }
        print("\n");
    }
dump_primes();
paint();
?>