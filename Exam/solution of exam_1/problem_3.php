<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

//fscanf(STDIN,"%d",$t);

$arr=array();

while(1)

{
    $str=readline();
    if($str=="end")
     break;

     
    if(array_key_exists($str,$arr))
        
      $arr[$str]+=1;
      
      else
         $arr[$str]=1;
}
      foreach($arr as $key=>$value)
          echo "$key $value\n";
         