
<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN,"%d\n",$number);
//another way to do this program
//$str="";
/*
while($number>0)
{
  //$str.=($number%2);
  
  
$number=(int)($number/2);
}
echo strrev($str);
var_dump($var);
*/

$items=array();
   $i=0;
while($number>0)
  { 
      $items[$i]=$number%2;
      $number=(int)($number/2);
  $i++;
  }
  var_dump($items);

  for($j=count($items)-1;$j>=0;$j--)
  {
      echo ($items[$j]);
  }
  
