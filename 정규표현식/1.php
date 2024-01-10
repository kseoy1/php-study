<style>
    span{color:#fff; background: red;}
    *{line-height: 1; margin:0;}
    h3{color:lightgray;}
</style>
<?php

/*
$string = "hello, world";
$pattern = '/hello/';

$cnt = preg_match($pattern,$string,$result);

//var_dump($result);
echo $cnt; // 1나옴 없으면 0

*/

$string = "who is who";

// ^A A로 시작하는 문자열 찾기
// A$ A로 끝나는 문자열 찾기

$pattern = '/^who/'; // 앞에 who
//$patter = '/who$/'; -> 뒤에 who 

//만약 $string = "$12$ \-\ $23$"; 일때 찾는 $를 알려주기 위해  $patter = '/^\$/';
/*
    any . 
  
    $string = "Reqular expressions";
    $pattern = "/...../";
    -> 맨앞에서부터 5개가 !!로 바뀜, 공백도 포함 따라서 ===ions
*/

/*
    []
    $string = "How do you do?";
    $pattern = '/[oyu]/';
    -> 안에 들어간 하나씩 찾는다 H=w d= === d=?
*/

echo $string;
echo "<p>&nbsp;</p>";
echo "<h3>after:</h3>";

$replacement = "=";

echo preg_replace($pattern,$replacement,$string);
?>