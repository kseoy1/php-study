<?php

//break문,continue문->하위문 실행안하고 루프돈다.

for($i=0;$i<10;$i++){

    if($i==4){
        //break;
        continue;
    }

    echo "이 숫자는 $i입니다.<br>";
}

?>