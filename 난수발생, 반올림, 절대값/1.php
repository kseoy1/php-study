<?php

//abs() 절대값
//sqrt() 루트
//round() 반올림
//rand() 난수

$a = -3.75;
$aa = rand(1,5);

$b = round($a);
echo $b;

//define() 상수 -> 값을 한번 대입하고 나면 못바꿈
define("GREETING","안녕하세요");

echo GREETING;
?>