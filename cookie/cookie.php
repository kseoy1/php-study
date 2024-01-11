<?php

if(isset($_COOKIE['ck_name'])){
    echo "이름은 ".$_COOKIE['ck_name']."입니다";
}else{
    echo "이름을 모르겠습니다.";
}

?>

<a href="delete.php">쿠키 지우기</a>