<?php

echo date("Y"); // 2024
echo "<br>";
echo date("y"); // 22
echo "<br>";
echo date("M"); // Jan ~ Dec
echo "<br>";
echo date("m"); // 01 ~ 12
echo "<br>";
echo date("n"); // 1 ~ 12

echo date("Y-m-d H:i:s"); // 2024-01-11 00:14:03
echo "<br>";

echo date('D'); // Mon ~ Sun
echo "<br>";
echo date('d'); // 01 ~31
echo "<br>";
echo date('j'); // 1 ~31

echo "<br>";
echo date("N"); // 요일 1월 ~ 7일요일

switch(date("N")){
    case 1: $yoil = "월요일"; break;
    case 2: $yoil = "화요일"; break;
    case 3: $yoil = "수요일"; break;
    case 4: $yoil = "목요일"; break;
    case 5: $yoil = "금요일"; break;
    case 6: $yoil = "토요일"; break;
    case 7: $yoil = "일요일"; break;
}

echo "오늘은 $yoil 입니다";

?>