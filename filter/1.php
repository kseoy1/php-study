<?php

/*
    필터를 사용하는 이유 
    외부로부터 들어오는 데이터에 잘못된 내용이 있으면 보안 문제가 발생하고 웹페이지가
    손상될 수 있기 때문에 항상 외부로 들어오는 데이터레 대해서 검증을 해야 한다.
*/

//정수 필터 : FILTER_VALIDATE_INT
//실수 필터 : FILTER_VALIDATE_FLOAT
//IP 필터 : FILTER_VALIDATE_IP
//이메일 필터 : FILTER_VALIDATE_EMAIL
//URL 필터 : FILTER_VALIDATE_URL

$i = 100;

$j = filter_var($i, FILTER_VALIDATE_INT);

if($j){
    echo $i."는 제대로 된 정수입니다.";
}else{
    echo $i."는 제대로 된 정수가 아닙니다.";
}
echo $j;

?>