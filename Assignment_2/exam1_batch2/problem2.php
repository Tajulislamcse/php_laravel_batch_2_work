<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');


fscanf(STDIN,"%s",$str);

$sum=0;
for($i=0;$i<strlen($str);$i++)
 {
  $sum+=ord($str[$i]);

 }
 echo $sum;
