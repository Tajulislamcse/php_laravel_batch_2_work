<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
echo "Enter size:";
fscanf(STDIN,"%d\n",$size);
//echo $size;
for($i=0;$i<$size+2;$i++)
 for($j=0;$j<$size+2;$j++)
 
   $items[$i][$j]=0;
   //echo "\n";
 
fprintf(STDOUT,"Enter number of  %d value:\n",pow($size,2));
 
 for($i=1;$i<=$size;$i++)
  for($j=1;$j<=$size;$j++)
  {
     fscanf(STDIN,"%d\n",$items[$i][$j]);

    
  }  
  
 


for($i=0;$i<$size+2;$i++)
{
  for($j=0;$j<$size+2;$j++)
  {
     fprintf(STDOUT,"%d ",$items[$i][$j]);
     
    
  } 
  echo "\n";
}

echo "\n";

$sum=0;$max=0;$x=0;$y=0;
for($i=1;$i<=$size;$i++)
{
  for($j=1;$j<=$size;$j++)
  {
    // fscanf(STDIN,"%d\n",$items[$i][$j]);
    $sum=$items[$i][$j]+$items[$i-1][$j]+$items[$i][$j-1]+$items[$i][$j+1]+$items[$i+1][$j];
    
    if($sum>$max)
    {
        $max=$sum;
        $x=$i-1;
        $y=$j-1;
    }
  }  
}
echo "index:$x $y sum:$max";