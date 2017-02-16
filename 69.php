<?php

function test( array & $a)
{
	echo "<pre>";
	count(array $a) ;
	echo "</pre>";
}

$a = array ( "Artem" , "Borovlev", 23 );
test( $a);
$value = count($a) ;
echo count($a);
$myArray [] = $value;

?>