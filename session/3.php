<?php

//세션삭제

session_start();
session_unset(); // 만약 부분만 삭제하고 싶으면 unset($_SESSION['ss_age']); 이렇게 써줌
session_destroy();

?>

<a href="2.php">세션확인</a>