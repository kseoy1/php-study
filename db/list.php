<?php

include 'db.php';

$sql = "SELECT * FROM myguests";
$stmt = $conn->prepare($sql);
$stmt->execute();
$rs = $stmt->fetchAll(PDO::FETCH_ASSOC);

//print_r($rs);

echo "<table border='1'>
    <tr>
        <td>FirstName</td>
        <td>LastName</td>
        <td>Email</td>
    </tr>
";

foreach($rs AS $row){
    echo "<tr>
        <td>".$row['firstname']."</td>
        <td>".$row['lastname']."</td>
        <td>".$row['email']."</td>
    </tr>";
}

echo "</table>";

?>