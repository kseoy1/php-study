<?php

//파일의 확장자 구하는 함수 만들기
//D:\xampp\htdocs\file_gallery

//explode()함수
//지정된 문자로 문자열을 잘라서 배열을 만들게 도와줌

$str = "a,b,c,d";

$arr = explode(',',$str);

//count()함수
//배열의 크기를 구하는 함수
echo count($arr);

//end()함수
//배열의 마지막 값을 리턴
echo end($arr); // d출력


function getFileExt($file_name){
    $arr2 = explode(".",$file_name);
    $ext = end($arr2);
    return $ext;
}

$file_name = "aaa.jpg";
$ext = getFileExt($file_name);

echo $ext;

?>