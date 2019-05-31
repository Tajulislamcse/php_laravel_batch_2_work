<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN,"%d\n",$number);
//echo $number;
$result=0;
$i=0;
while($number)
{
    $last_digit=$number%10;
    $result+=$last_digit*pow(2,$i);
    $number=(int)($number/10);
    $i++;
}
echo $result;