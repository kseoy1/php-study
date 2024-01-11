<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php include 'menu.php'; ?>
    <!-- 
        require도 똑같이 나오지만 존재하지 않는 파일일경우
        include는 warning이 뜨고 프로그램이 멈추지 않지만
        require는 fatal error가 뜨고 프로그램이 멈춘다.
        꼭 필요한 경우에만 require

        include_once 한번만 포함시키기
    -->
    인덱스 페이지입니다.
</body>
</html>