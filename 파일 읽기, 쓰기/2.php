<?php

$file = "imsi1.txt";

$pf = fopen($file,'w'); //w 쓰기, 덮어써진다
//$pf = fopen($file,'a') 추가하고 싶으면 a 
//뒤에 추가하고 싶으면 $fwrite($pf, PHP_EOL."aaaaa");

fwrite($pf, "HAHAHA");
fclose($pf);

?>