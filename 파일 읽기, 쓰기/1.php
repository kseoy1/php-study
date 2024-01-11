<?php

$file = 'imsi.txt';

if(file_exists($file)){ //파일이 존재하느냐

    $pf = fopen($file,'r'); //r 읽기모드로 열었다   
    
    if($pf){
        $fz = filesize($file); //파일사이즈
        $fr = fread($pf,$fz); //파일 읽기
        
        if($fr){
            echo $fr;
            fclose($pf); //닫기 꼭 해줘야함
        }else{
            echo "파일 읽기에 실패했습니다.";
        }
    }else{
        echo "파일 열기에 실패했습니다.";
    }
}else{
    echo "존재하지 않는 파일입니다.";
}

?>