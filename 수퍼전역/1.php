<?php

//GLOBALS 지역변수 밖에서도 사용가능(수퍼전역) 

$GLOBALS['aaa'] = "안녕";

function aabb(){
    //echo $aaa;  접근x
    echo $GLOBALS['aaa']; //접근 가능
}

aabb();

//$_SERVER -> 배열형태로 보여줌(정보 들어가있음)
print_r($_SERVER);

//ex
$ag = $_SERVER['HTTP_USER_AGENT'];

if(strpos($ag,'Chrome')){
    echo '크롬유저';
}else{
    echo '크롬유저 아님';
}

// $_SERVER['REMOTE_ADDR'] 방문한 사람의 IP정보

echo "당신의 IP는 ".$_SERVER['REMOTE_ADDR']." 입니다.";

?>