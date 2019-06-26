<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

//fscanf(STDIN,"%d",$t);


while(1)
{
fscanf(STDIN,"%s",$str);

if(strcmp($str,"end")==0)
break;

$sum=0;
for($i=0;$i<strlen($str);$i++)
 {
  $sum+=ord($str[$i]);
 }
 echo $sum."\n";

}