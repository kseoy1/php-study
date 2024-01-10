<?php
//배열 정렬 내장 함수
/*
    sort() 배열 오름차순 정렬
    rsort() 배열 내림차순 정렬
    asort() 값에 따라 연관 배열 오름차순 정렬
    ksort() 키에 따라 연관 배열 오름차순 정렬
    arsort() 값에 따라 연관 배열 내림차순 정렬
    krsort() 키에 따라 연관 배열 내림차순 정렬
*/

$fruits = array("사과","배","귤","수박","토마토");

sort($fruits); // 가나다 순 rsort 가나다 역순

print_r($fruits);

$age = array(
    "김길수" => 25,
    "홍길동" => 30,
    "박영수" => 15,
    "이창원" => 35,
);

krsort($age);

print_r($age);

?>