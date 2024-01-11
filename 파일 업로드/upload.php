<?php

print_r($_FILES);

//echo "파일명은 ".$_FILES['ufile']['name'];
//echo "이고 파일 용량은".$_FILES['ufile']['size']."입니다";

$tfile = "./upload/abc.png";

move_uploaded_file($_FILES['ufile']['tmp_name'],$tfile);

/*
    phpinfo()로 ini 확인수정, post, file_upload 등등 검색 확인 가능
*/

?>