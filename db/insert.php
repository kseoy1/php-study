<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "member";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO myguests(firstname,lastname,email)
    VALUES('John','Doe','john@example.com)";

    $conn->exec($sql);

}catch(PDOException $e){
    echo $e->getMessage();
}

$conn = null;

?>