<?php

echo "curl sample <br>";

//http 통신
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://cbtti.or.kr');
//https 통신
//curl_setopt($ch, CURLOPT_URL, 'https://www.daum.net');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);



echo $response;

?>