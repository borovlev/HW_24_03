<?php
$n = [0-9];
for ( $i = 1; $i <= 100; $i++ ) {
	if ( $i % $i == 0 && $i / 1 == $i) {
	if ( $i % ($n-1) == 0) {
		break;
	} else {
		echo $i . "<br>" ;
	}
}
}	
?>