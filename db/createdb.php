<?php

$servername = "localhost";
$username = "root";
$password = "";

try{
    $conn = new PDO("mysql:localhost=$servername",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //에러보여주는 구문

    echo "<p>database에 연결</p>";
}catch(PDOException $e){
    echo $e->getMessage();
    exit;
}

try{
    $sql = "CREATE DATABASE firstdb";
    $conn->exec($sql); //exec -> sql구문 실행
    echo "<p>firstdb 생성 완료</p>";
}catch(PDOException $e){
    echo $e->getMessage();
    exit;
}

$conn = null;

?>