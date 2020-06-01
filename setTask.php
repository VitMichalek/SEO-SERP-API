<?php

include "seoserpapi.php";

//each keyword must be in UTF-8 --> mb_convert_encoding("albert einstein", "UTF-8");
//pingback_url -> this url send notification when task is ready for download. 
//result ->  raw or JSON. JSON is parsed RAW structure

$postArray = array(
	"language"=>"English",
	"location"=>"United States",
	"keywords"=>array(
		"auto",
		"skoda fabia",
		"audi a4"
	),
	"result"=>"json",
	"pingback_url"=>"https://www.pingbackurl.com/task.php"
	

);

SEOSERPAPI::$apiToken = "XXX";
$result = SEOSERPAPI::send("v3/setTask/",$postArray);
if(is_array($result)){
	if($result["status"] == 200){
		$uuid = $result["uuid"];//uuid for getResults
	}else{
		echo $result["error"];
	}
}else{
	
}





?>