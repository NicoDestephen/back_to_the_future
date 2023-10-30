<?php

$destinationTime = new DateTime;

$destinationTime->setDate(2015, 10, 21);
$destinationTime->setTime(16, 29);

echo $destinationTime->format("M/d/Y A H\hi");

echo nl2br("\n");

$presentTime = new DateTime;

$presentTime->setDate(2015, 10, 21);
$presentTime->setTime(16, 06);

echo $presentTime->format("M/d/Y A H\hi");

echo nl2br("\n");


$origin =  new DateTimeImmutable('2015-10-21 16:29');
$target = new DateTimeImmutable('2015-10-21 16:06');
$interval = $origin->diff($target);

echo $interval->format("%y year %m month %d jour %h hour %i minutes");