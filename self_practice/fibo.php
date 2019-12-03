<?php
$first = 0; $second = 1;
echo "Fib1. $first\n";
echo "Fib2. $second\n";
fscanf(STDIN,"%d",$n);

$next=$first+$second;

while($next<$n)
{
	fprintf(STDOUT,"%d,",$next);
	$first=$second;
	$second=$next;
	$next=$first+$second;
}