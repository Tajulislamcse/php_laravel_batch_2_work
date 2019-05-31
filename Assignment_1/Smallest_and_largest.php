<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
while(true)
{
    

fscanf(STDIN, "%d\n", $n);

if($n==0)
break;


$items=array();


for($i=0;$i<$n;$i++)

fscanf(STDIN, "%d\n", $items[$i]);


$max=$items[0];
$min=$items[0];

for($i=1;$i<$n;$i++)
{

if($items[$i]>$max)
{
$max=$items[$i];
}


if($items[$i]<$min)
{
    $min=$items[$i];
}

}

echo "Maximum=$max\n";

echo "Minimum=$min\n";
}