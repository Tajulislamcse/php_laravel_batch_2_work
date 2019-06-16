
<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
echo "Enter testcase number:"."\n";
fscanf(STDIN,"%d",$t);
while($t--)
{
echo "Enter matrix size:"."\n";
fscanf(STDIN,"%d",$size);
fprintf(STDOUT,"Enter number of  %d value:\n",pow($size,2));
//$sum=0;
for($i=0;$i<$size;$i++)
{
    for($j=0;$j<$size;$j++)
    {
       fscanf(STDIN,"%d\n",$array[$i][$j]);
       
    } 
}
echo "displayed given matrix\n";

for($i=0;$i<$size;$i++)
{
  
    for($j=0;$j<$size;$j++)
    {
//fscanf(STDIN,"%d\n",$array[$i][$j]);
       fprintf(STDOUT,"%d  ",$array[$i][$j]);

      //  if($i==$j)
       //  $sum+=$array[$i][$j];
    } 
    echo"\n\n";

}

$sum=0;
for($i=0,$j=0;$i<$size,$j<$size;$i++,$j++)
      $sum+=$array[$i][$j];

echo"\nsummation of 1st diagonal value:$sum"."\n";
$count=0;
for($i=0,$j=($size-1);$j>=0,$i<$size;$i++,$j--)

 $count=$count+$array[$i][$j];

echo "summation of 2nd diagonal value:$count"."\n";
}


