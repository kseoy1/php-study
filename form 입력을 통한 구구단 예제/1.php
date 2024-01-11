<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="">출력하고자 하는 단을 입력하세요.</label>
        <input type="text" name="dan">
        <button>구구단 출력</button>
    </form>

    <?php
    
        if(isset($_GET['dan']) and $_GET['dan'] != ''){
            if(is_numeric($_GET['dan'])){
                for($i=1;$i<=9;$i++){
                    echo $_GET['dan'].'x'.$i.'='.$_GET['dan']*$i.'<br>';
                }
            }else{
                echo "숫자를 입력하세요";
            }
        }

    ?>
</body>
</html>