<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');


fscanf(STDIN,"%s",$str);
//$str=fgets(STDIN);

$sum=0;
$str2="end";
 
   // while()
for($i=0;$i<strlen($str);$i++)
{  if(strcmp($str,$str2)==0)
    break;
  $sum+=ord($str[$i]);

 }
 echo $sum;
 