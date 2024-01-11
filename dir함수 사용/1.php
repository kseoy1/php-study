<?php

//특정 디렉토리에서 파일 목록 가져오기

$dir_name = "./upload";
$d = dir($dir_name); //인스턴스 만들어줌

while($file_name = $d->read()){   
    if($file_name == "." or $file_name == '..'){  //처음 .은 자기자신 두번째 ..은 상위폴더
        continue; //밑에 부분 수행하지 않고 돌아감
    }
    echo $file_name ."<br>";
    //echo "<img src='upload/{$file_name}' width='100>";
}

$d->close();

?>