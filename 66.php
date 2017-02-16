<?php

function Test(Array $a)
{
	echo "<pre>";
	print_r ($a) ;
	echo "</pre>";
}

$myArray = array ( "Artem" , "Borovlev", 23 );


Test( $myArray);
?>