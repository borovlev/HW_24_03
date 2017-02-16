<?php

function Test(Array $a , $c = print_r)
{
	echo "<pre>";
	$c ($a) ;
	echo "</pre>";
}

$myArray = array ( "Artem" , "Borovlev", 23 );


Test( $myArray);
?>