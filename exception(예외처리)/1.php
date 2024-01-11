<?php

function divide($dividend, $divisor){
    if($divisor == 0){
        throw new Exception(message:"Divison by Zero");
    }
    return $dividend / $divisor;
}

try{
    echo divide(5,0);
}catch(Exception $e){
    echo "Unable to divide";
}finally{ // 무조건 실행
    echo "프로그램 종료";
}

?>