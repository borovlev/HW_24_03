<?php

function myfunc ($n) //in number $n
{
for($x=2; $x <= sqrt($n); $x++) {
if($n % $x == 0) {
return false;
}
}
return true;
}
$i = 2;

while($i <= 100) {
if (myfunc($i)) {
echo $i . ' -  easy<br/>';
} else {
echo $i . ' - not easy<br/>';
}
$i++;
}
?>   