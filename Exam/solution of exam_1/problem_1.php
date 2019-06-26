<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

//fscanf(STDIN,"%d",$t);
$even_sum=0;
$odd_product=1;

while(1)
{
//fscanf(STDIN,"%s\n",$numbers);
$numbers=readline();

  if(strcmp($numbers,"0")==0)
     break;
//echo $numbers."\n";

   // for($i=0;$i<strlen($numbers);$i++)

     
          if(($numbers)%2==0)
             $even_sum+=$numbers;
             else
                $odd_product *=$numbers;
     
     
}
echo "even sum:".$even_sum."\n";
echo "odd product:".$odd_product."\n";
      