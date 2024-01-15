<?php

class Car{
    private $count = 0;
    private $name;

    function __construct($name){
        $this->name = $name;
        $this->count = $this->count+1;
    }

    function message(){
        echo "<p>".$this->name."가 생산되었습니다.</p>";
        echo "<p>번호:".$this->count."</p>";
    }
}

$p1 = new Car("볼보");
$p1->message(); //count 1

$p2 = new Car("아우디");
$p2->message();  //count 1


//count를 증가 시키고 싶다면 $count변수에 static을 써주고 self::$count로 주면 된다
class Car2{
    private static $count = 0;
    private $name;

    function __construct($name){
        $this->name = $name;
        self::$count = self::$count+1;
    }

    function message(){
        echo "<p>".$this->name."가 생산되었습니다.</p>";
        echo "<p>번호:".self::$count."</p>";
    }
}

$p3 = new Car2("볼보");
$p3->message(); //count 1

$p4 = new Car2("아우디");
$p4->message();  //count 2

?>