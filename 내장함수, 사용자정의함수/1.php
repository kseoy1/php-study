<?php

//내장함수
$money = 3000;

echo number_format($money);

//사용자 정의함수
function getString(){   
    echo "구문";
}
getString();

function addNumber($a,$b){
    return $a+$b;
}

echo "<h2>".addNumber(1,4)."</h2>";
echo "<h2>".addNumber(5,11)."</h2>"

?>
