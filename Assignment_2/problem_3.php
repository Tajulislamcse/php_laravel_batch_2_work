<?php
$n = readline(); //array size (n*n)

$ara = array();
$ara = array_fill(0, $n+2, array());

for($i=0; $i<=$n+1; $i++)
    $ara[$i] = array_fill(0, $n+2, 0);

for($i=0; $i<$n; $i++)
{
    $tmp = explode(" ", readline());
    for($j=1; $j<=$n; $j++)
        $ara[$i+1][$j] = $tmp[$j-1];
}
$mx = 0; $indX = 0; $indY = 0;

for($i = 1; $i <= $n; $i++)
{
    for($j = 1; $j <= $n; $j++)
    {
        $tmp = $ara[$i][$j] + $ara[$i+1][$j] + $ara[$i-1][$j]
         + $ara[$i][$j+1] + $ara[$i][$j-1];
        if($tmp>$mx)
        {
            $mx = $tmp;
            $indX = $i-1; $indY = $j-1;
        }
    }
        //echo $ara[$i][$j]." ";
    //echo "\n";
}
echo "Sum = $mx\n = ($indX , $indY)\n";
