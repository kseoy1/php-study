<?php

include 'db.php';

print_r($_POST);

$subject = $_POST['subject'];
$content = $_POST['content'];

try{
    $sql = "INSERT INTO board(subject,content,rdate) VALUES('{$subject}','{$content}',NOW());";
    $conn->exec($sql);
    echo "등록 성공";

    $last_id = $conn->lastInsertId();
    echo "게시물번호 {$last_id}";

    echo "
    <script>
        self.location.href='view.php?idx=".$last_id."';
    </script>
    ";

}catch(PDOException $e){
    echo $e->getMessage();
}


?>