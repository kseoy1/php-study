<?php

class Car{

    public $name; 
    public $color;

    function __construct($name,$color){
        
        $this->name = $name;
        $this->color = $color;

        echo "<p>자동차가 생산되었습니다.</p>";
        echo "<p>이름: $this->name";
        echo "색상: $this->color </p>";
        
    }

    function __destruct(){ //소멸자
        echo "<p>자동차 폐차가 되었습니다.";
    }
}

$volvo = new Car("볼보","빨강");

//unset($volvo);

echo "<p>프로그램 실행중</p>";

//소멸자는 스크립트 끝나는 부분에 실행된다. 여기부분! 위에 문장 전에 실행하고싶다면 26번라인 처럼 unset해준다.

?>