<?php

//인덱스 배열
$cars = array("자동차", "비행기","요트");
//$cars = ["자동차", "비행기","요트"];

$cars2 = $car;

$cars2[0] = "비행선";

print_r($cars2);
print_r($cars1);

//연관 배열 -> key,value
$age = array(
    "아빠" => "40",
    "엄마" => "38",
    "나" => "12",
    "동생" => "8"
);

//echo "엄마는".$age["엄마"]."살입니다.";

foreach($age AS $key => $val){
    echo "<h2>".$key."=".$val."</h2>";    //아빠 = 40 엄마 = 38...
}

$fruits["사과"] = "한국산";
$fruits["배"] = "브라질산";
$fruits["포도"] = "칠레산";

print_r($fruits);

//다차원 배열
//2차원 배열

$cars2 = array(
    array("볼보",22,10),
    array("산타페",25,4),
    array("아우디",12,11)
);

//echo  $cars2[1][0]."재고는 ".$cars2[1][1];

for($row=0;$row<3;$row++){
    echo "<ul>";
    for($col=0;$col<3;$col++){
        echo "<li>".$cars2[$row][$col],"</li>";
    }
    echo "</ul>";
}

?>