<?php

echo "<p>날씨 출력</p>";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'http://echo.jsontest.com/temerature/-9.3/humidity/0.40/wind/3');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

$arr = json_decode($response); //json데이터 배열로 바꾸기

foreach($arr AS $key => $var){
    echo $key.":".$var;
    echo "<br>";
}

?>