<style>
    span{color:#fff; background: red;}
    *{line-height: 1; margin:0;}
    h3{color:lightgray;}
</style>
<?php
//Not [^문자] 문자가 아닌
//서브 패턴 (|) 버티컬 바

$string = "Monday Tuesday Friday";
$patter = '/(on|use|rida)/';

echo "<h3>before:</h3>";
echo $string;
echo "<p>&nbsp;</p>";
echo "<h3>after:</h3>";

$replacement = "<span>@</span>";

echo preg_replace($pattern,$replacement,$string);

?>