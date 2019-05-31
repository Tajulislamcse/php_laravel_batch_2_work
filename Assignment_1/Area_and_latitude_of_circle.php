<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN,"%d\n", $radius);

$area=3.1416*pow($radius,2);

fprintf(STDOUT,"Area=%f\n",$area);

$Latitude=2*3.1416*$radius;

fprintf(STDOUT,"Latitude=%f",$Latitude);
