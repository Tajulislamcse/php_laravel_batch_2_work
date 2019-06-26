<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

//fscanf(STDIN,"%d",$t);


while(1)
{
fscanf(STDIN,"%s\n",$str);
$str2="end";
if(strcmp($str,$str2)==0)
break;
  
$org_str="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
$count=0;
for($i=0;$i<strlen($org_str);$i++)
{
   for($j=0;$j<strlen($str);$j++)
   {
      if($org_str[$i]==$str[$j])
        $count++;
   }
        if($count==0)
             continue;
             else echo "$org_str[$i] $count"."\n";
   
             $count=0;//
         
}


}    