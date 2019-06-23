<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN,"%d",$t);


while($t--)
{
fscanf(STDIN,"%s",$str);
if(strcmp($str,"end")==0)
break;
/*
$str2="end";

for($i=0,$j=0;$i<strlen($str),$j<strlen($str2);$i++,$j++)
{
if($str[$i]==$str2[$j])
   break;

}
*/
$sum=0;
for($i=0;$i<strlen($str);$i++)
 {
  $sum+=ord($str[$i]);
 }
 echo $sum."\n";

}