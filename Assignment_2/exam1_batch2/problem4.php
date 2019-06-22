<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
//fscanf(STDIN,"%d",$tc);//input testcase
//for($t=1;$t<=$tc;$t++)
//{
        fscanf(STDIN,"%s\n",$input_str);
         //fprintf(STDOUT,"Case %d:\n",$t);
         $count=0;
         //fscanf(STDIN,"%s\n",$input_str);
         $org_str="abcdefghijklmnopqrstuvwxyz";
         
         
         
         for($i=0;$i<strlen($org_str);$i++)//it looping for all letter as like as a-z;
           {
            for($j=0;$j<strlen($input_str);$j++)//compare only input letter length . if $or_str=abc and $input_str=abcd
            // it does match org_str=a for all input_str.
           {
               if($org_str[$i]==$input_str[$j])//if matches 
               {
                   $count++;//count is increments 1 for each time.
               }
           }
           if($count==0)//if count==0 than continue. because no need to print 0 for no occurence.
             continue;
             else echo "$org_str[$i] $count"."\n";//just print org_str[0] for this case a and count value.
             $count=0;//finally count=0 because each test starts from count=0 .else it start from previous count value.
         }
         
}