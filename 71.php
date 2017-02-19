<?php
 $arr = array(1, 2, 3, 4);

	
	
	function myprint (Array $a, $i = 0)
	{
				$b = count($a);
				 if ($i < $b) {
				 echo $a[$i]."<br>";
				 
				 myprint ($a, ++$i);
				 } 
				
		} 		
	myprint ($arr);
	
	
	
?>   