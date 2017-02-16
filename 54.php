<?php

$f = fopen('test.txt', 'w');
fwrite($f, '1' . PHP_EOL . '22');
fclose($f);

$f = fopen('test.txt', 'a');
fwrite($f, PHP_EOL . '333' . PHP_EOL . '4444' . PHP_EOL . '55555' . PHP_EOL . '666666'. PHP_EOL . 
'7777777'. PHP_EOL . '88888888'. PHP_EOL . '999999999'. PHP_EOL . '10101010101010101010');
fclose($f);
?>