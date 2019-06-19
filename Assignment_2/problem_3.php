<?php
//$n = readline(); //array size (n*n)
fscanf(STDIN,"%d\n",$size);

$array= array();
$array = array_fill(0, $size+2, array());

for($i=0; $i<=$size+1; $i++)
    $arrray[$i] = array_fill(0, $size+2, 0);

for($i=0; $i<$size; $i++)
{
    $temp = explode(" ", readline());
    for($j=1; $j<=$size; $j++)
        $array[$i+1][$j] = $temp[$j-1];
}
$max = 0;$index1 = 0;$index2 = 0;

for($i = 1; $i <= $size; $i++)
{
    for($j = 1; $j <= $size; $j++)
    {
        $temp = $array[$i][$j] + $array[$i+1][$j] + $array[$i-1][$j]
         + $array[$i][$j+1] + $array[$i][$j-1];
        if($temp>$max)
        {
            $max = $temp;
            $index1 = $i-1; $index2 = $j-1;
        }
    }
        //echo $ara[$i][$j]." ";
    //echo "\n";
}
echo "Sum = $max\nIndex(0 base) = ($index1 , $index2)\n";
