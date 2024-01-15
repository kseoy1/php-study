<?php

/*
    public: 어디서든 접근 가능
    protected: 외부에서 접근은 차단, 내부에서 접근가능, 파생된 클래스에서 가능
    private: 오로지 자체 클래스에서만 접근 가능
*/

class Fruit{

    public $name;
    protected $color;
    private $weight;

}

$mango = new Fruit();

$mango->name = "Mango";
//$mango->color = "노랑색";
//$mango->weight = '300';

?>