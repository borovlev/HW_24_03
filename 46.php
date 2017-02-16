<?php

$a = 3;
$b = 3;

switch ($a) {
case 0:
case 1:
case 2:
    echo 'a < b';
    break;
case 3:
    echo "a равно b";
	break;
default: echo "a > b";
}
?>