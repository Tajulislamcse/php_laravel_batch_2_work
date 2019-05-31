<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

while(true){

    fscanf(STDIN,"%d\n",$n);

    if($n==0)
       break;
   $items=array();
    for($i=0;$i<$n;$i++)
    {
        fscanf(STDIN,"%d\n",$items[$i]);
    }
    echo"\n\n";
    for($i=0;$i<$n;$i++)

    { 
        fprintf(STDOUT,"item[$i]:%d\n",$items[$i]*2);
    }
    

}