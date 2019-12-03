<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d\n", $number);
$items=array();
//for($i=0;$i<$number;$i++)
//fscanf(STDIN, "%d\n", $items[$i]);
$items=readline();
//for($i=0;$i<$number;$i++)
for($i=0;$i<$number;$i++)
{
    //for($j=0;$j<$number-1;$j++)
    for($j=0;$j<$number-1;$j++)
       {
        // if($items[$j]>$items[$j+1])
        if($items[$i]>$items[$j])
         {
           //$items[$j]=$items[$j]+$items[$j+1];
           $items[$i]=$items[$i]+$items[$j];
           //$items[$j+1]=$items[$j]-$items[$j+1];
           $items[$j]=$items[$i]-$items[$j];
           //$items[$j]=$items[$j]-$items[$j+1];
           $items[$i]=$items[$i]-$items[$j];
         }
       }
}
//var_dump($items);
echo "after sorting\n";
for($i=0;$i<$number;$i++)
 echo "$items[$i]\n";