<?php

include 'db.php';

$idx = $_GET['idx'];

$sql = "SELECT * FROM board WHERE idx={$idx}";
$stmt = $conn->prepare($sql);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC); //ASSOC ->필드로 보여줌

/*
echo "<pre>"; //pre -> 나와있는 형태 그대로 출력

print_r($row);

echo "</pre>";
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['subject'];?></title>
</head>
<body>
    <p>제목: <?php echo $row['subject']; ?></p>
    <p><?php echo nl2br($row['content']); ?></p> <!--nl2br -> br -->
</body>
</html>