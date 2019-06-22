<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
//while((($str=(fgets(STDIN))!=end));
/*
do
{
    $line=fgets(STDIN);
}
while($line!=end);
echo $line;

/*



for($i=0;$i<strlen($line);$i++)
{
  
     if($line==end)
     break;
 }
echo $line;
*/

//$line=fgets(STDIN);
fscanf(STDIN,"%s",$str);
//echo $line;
$sum=0;
for($i=0;$i<strlen($str);$i++)
 {
  $sum+=ord($str[$i]);
  //$line[$i];
 }
 echo $sum;
