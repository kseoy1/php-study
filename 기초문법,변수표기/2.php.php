<?php

$str = "나는 자랑스러운 미국인이다.";

$str1 = str_replace("미국인","한국인",$str);

echo $str1;

$x = 33443;

//is_int(); 정수 판별 , is_float
if(is_int($x)){
    echo "x는 정수";
}else{
    echo "x는 정수 아님";
}

//is_numeric();
$a = "334";

if(is_numeric($a)){
    echo "숫자";
}else{
    echo "숫자 아님";
}
?>