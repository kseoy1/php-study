<?php
/*
    Query 구문 분석을 1회만 수행
    매개변수만 전달하기 때문에 서버 대역폭 최소화
    SQL Injection 공격을 막아줌 -> 인젝션은 공격자가 신뢰할 수 없는 입력을 프로그램에 주입하도록 하는 공격
*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "first";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    echo "db연결 성공";
}catch(PDOException $e){
    echo $e->getMessage();
}

$stmt =$conn->prepare("INSERT INTO myguests(firstname,lastname,email)
    VALUES(:firstname,:lastname,:email)");

$stmt->bindParam(':firstname',$firstname);
$stmt->bindParam(':lastname',$lastname);
$stmt->bindParam(':email',$email);

$firstname = "Hoho";
$lastname = "Doe";
$email = "jajaja@naver.com";
$stmt->execute();

$firstname = "Hoho2";
$lastname = "Doe2";
$email = "jajaja2@naver.com";
$stmt->execute();

?>