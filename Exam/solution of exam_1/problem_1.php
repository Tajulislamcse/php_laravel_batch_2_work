<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN,"%d",$t);


while($t--)
{
  fscanf(STDIN,"%s\n",$numbers);

  if(strcmp($numbers,"0")==0)
     break;
//echo $numbers."\n";
        $even_sum=0;
        $odd_sum=0;
    for($i=0;$i<strlen($numbers);$i++)

     {
          if($numbers[$i]%2==0)
             $even_sum+=$numbers[$i];
             else
                $odd_sum+=$numbers[$i];
     }
     
     echo "even sum:".$even_sum."\n";
     echo "odd product:".$odd_sum."\n";
      
   
}   