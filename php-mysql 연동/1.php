<?php

//mysql oop
$servername = "localhost";
$username = "root";
$password = "";

//$conn = new mysqli($servername,$username,$password);

if($conn->connect_errno){
    echo "db연결에 실패";
    exit;
}

//$conn = mysqli_connect($servername,$username,$password);

if(!$conn){
    die("db연결 실패");
}


try{
    $conn = new PDO("mysql:host=$servername",$username,$password);
    echo "db연결 성공";
}catch(PDOException $e){
    echo "db연결 실패";
}

echo "db연결 성공";

?>