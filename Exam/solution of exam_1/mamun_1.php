<?php

$odd = 1; $even = 0; $num = 0;

while(true)
{
    $num = readline();
    if($num == 0)
        break;
    if($num%2==0)
        $even += $num;
    else
        $odd *= $num;
}
echo "Odd sum : $odd\n";
echo "Even sum: $even\n";