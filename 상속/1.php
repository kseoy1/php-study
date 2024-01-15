<?php

class Fruit{

    public $color;
    public $name;

    public function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;
    }

    public function intro(){
        echo "이 과일 이름은 {$this->name}이고 색깔은 {$this->color}입니다.";
    }
}

class Mango extends Fruit{
    public function message(){
        echo "나는 망고";
    }
}

$mango = new Mango("망고","노랑색");
$mango->message();
$mango->intro();

?>