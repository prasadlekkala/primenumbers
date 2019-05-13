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

Output:

   	2	3	5	7	11	13	17	19	23	29
2	4	6	10	14	22	26	34	38	46	58
3	6	9	15	21	33	39	51	57	69	87
5	10	15	25	35	55	65	85	95	115	145
7	14	21	35	49	77	91	119	133	161	203
11	22	33	55	77	121	143	187	209	253	319
13	26	39	65	91	143	169	221	247	299	377
17	34	51	85	119	187	221	289	323	391	493
19	38	57	95	133	209	247	323	361	437	551
23	46	69	115	161	253	299	391	437	529	667
29	58	87	145	203	319	377	493	551	667	841
	
?>
