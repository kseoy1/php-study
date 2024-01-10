<?php

echo "1";
print "2";

echo("3");
print("4");

echo "<h2>php는 재밌다</h2>";

$txt1 = "learn php";
$x = 5;
$y = 4;

echo "<h2>".$txt1."</h2>";
echo $x + $y."<br>";

//무슨형인지
$a = 3333;
var_dump($a);

//문자열 길이(한글은 한자당 3으로) strlen() 문자열 bytes반환
$x_len = strlen("한글");
echo $x_len;

//str_word_count() 단어수 세기 (한글은 안됨)
//strrev 문자열 뒤집기 함수
//$q = strpos("hello world","world"); strpos 있는지 없는지 확인

$email = "qer@gmail.com";

if(strpos($email,"@")){
    echo "이메일 형식 맞음";
}else{
    echo "이메일 형식 아님";
}

?>