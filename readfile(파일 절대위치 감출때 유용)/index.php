<?php

/*
    readfile 
    소스안에 있는것을 해석하지 않고 그대로 읽어서 내보냄
    file다운로드할때 가장 많이 사용

    readfile("a.txt"); 
    readfile("some.php"); // 소스보기로 보임

    include("some.php"); //333 결과 출력

*/


$filepath = 'a.txt';
$filesize = filesize($filepath); // 파일사이즈 구하기
$filename = 'bb.txt';

//헤더 설정
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=$filename"); //다운로드 되는 파일의 이름을 지정
header("Content-Transfer-Encoding: binary");
header("Content-Length: $filesize"); //파일 사이즈 명시

ob_clean();
flush(); //버퍼 비우기
readfile($filepath); //파일 읽어서 출력하기


?>