<?php

$servername = "localhost";
$username = "root";
$password = "";

try{
    $conn = new PDO("mysql:localhost=$servername;dbname=abc",$username,$password); //db명 적어줘야함
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 

    echo "<p>db 연결</p>";
}catch(PDOException $e){
    echo $e->getMessage();
    exit;
}

try{
    $sql = "CREATE TABLE MyGuests(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

    $conn->exec($sql); //exec -> 구문 실행해준다~
    echo "<p>테이블 생성 완료</p>";
}catch(PDOException $e){
    echo $e->getMessage();
    exit;
}

$conn = null; //DB끊어줌


?>