<?php

//while문
while($a < 10){
    echo "<h2>$a 출력</h2>";
    $a++;
}

//do while 무조건 한번은 실행
$b =2;
do{
    echo "<h2>$b 출력</h2>";
    $b++;
}while($b < 10);

//for문 
for($i=1;$i<10;$i++){
    echo "<h2>$i출력</h2>";
}

//foreach문 배열
//for of, for in
//$arr = array('사과','바나나','딸기');
//$arr =['사과','바나나','딸기'];
$arr = array(
    1 => "사과",
    2 => "바나나",
    3 => "딸기"
);

foreach($arr AS $key => $val){
    //echo "<h2>$val</h2>";

    echo "<h2>$arr[$key]</h2>";
}


?>
