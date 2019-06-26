<?php

$limit = 'end';
while(true)
{
    $tmp = readline();
    if($tmp == $limit)
        break;
	$mark = array();
	$mark = array_fill(0, 125, 0);
	for($i=0; $i<strlen($tmp); $i++)
		$mark[ord($tmp[$i])]++;
	for($i=65; $i<=122; $i++)
		if($mark[$i] != 0)
		{
			$tmp2 = chr($i);
			echo "$tmp2 $mark[$i]\n";
		}
}