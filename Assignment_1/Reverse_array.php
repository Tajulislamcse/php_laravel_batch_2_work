 
<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $n);

$items=array();
for($i=0;$i<$n;$i++)
fscanf(STDIN, "%d\n", $items[$i]);

for($i=0;$i<$n/2;$i++)
{
  $items[$i]=$items[$i]+$items[$n-1-$i];
  $items[$n-1-$i]=$items[$i]-$items[$n-1-$i];
  $items[$i]= $items[$i]- $items[$n-1-$i];
}
var_dump($items);