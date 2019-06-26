<?php

$limit = "end";
while(true)
{
    $tmp = readline();
    if($tmp == $limit)
        break;
      
       // echo $tmp."\n";


$sum = 0;
        
    for($i=0; $i<strlen($tmp); $i++)
        $sum += ord($tmp[$i]);
    echo "$sum\n";



}