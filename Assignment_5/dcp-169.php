<?php

// your code goes here





$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
 // $count=0;
  //$text1="No";
  //$text2="Yes";
  fscanf(STDIN, "%d\n", $testcases);
//$number=array();
//$graph=array();
for($t=1;$t<=$testcases;$t++)

{
fscanf(STDIN, "%d %d\n", $row,$col);
//for($i=0;$i<$row;$i++)
//$graph[$i]=array();
  for($i=0;$i<$row;$i++)
  
    { $line=fgets(STDIN);
     // var_dump($line);

      for($j=0;$j<$col;$j++)
          {
             $graph[$i][$j]=$line[$j];
          }
       
    }
    
    fprintf(STDOUT, "Case %d:\n", $t);
    $count=0;
    for($i=0;$i<$row;$i++)
    {
       for($j=0;$j<$col;$j++)
       {
          if($graph[$i][$j]=='$'){

          
          fprintf(STDOUT, "%d,%d\n", $i+1,$j+1);
          $count++;
          }
       }
    }
    if($count==0)
    echo"No Gold Found\n";
   }