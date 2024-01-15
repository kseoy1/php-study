<?php

class Fruit{

    public $name;
    public $color;

    //생성자 constructor -> 객체 만들어질 때 무조건 수행해야하는 기초 작업, 인스턴스가 생성될때 자동으로 호출되는 메소드
    function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;
    }

    function get_name(){
        return $this->name;
    }

    function get_color(){
        return $this->color;
    }
}

$apple = new Fruit("사과","빨강");
$banana = new Fruit("바나나","노랑");

echo $apple->get_name();
echo $apple->get_color();

echo $banana->get_name();
echo $banana->get_color();

?>