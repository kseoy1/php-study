<?php
//xml문서 읽어서 활용하기 ex)지디넷 기사 불러오기

$myxml = file_get_contents('https://feeds.feedburner.com/zdkorea');

//echo $myxml;

$xmldom = simplexml_load_string($myxml);

//print_r($xmldom);

echo "<h1>".$xmldom->channel->title."</h1>";
echo "<h2>".$xmldom->channel->description."</h2>";

foreach($xmldom->channel->item AS $row){
    echo $row->title."<br>";
}

?>