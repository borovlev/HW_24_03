<?php

function test($x, $y)
{
	if ($y == 0) {
		die ( "на 0 делить нельзя" );
	}

	return $x / $y;

}

echo test(1, 0) 

?>