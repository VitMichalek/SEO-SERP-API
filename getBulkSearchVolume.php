<?php

include "API/seoserpapi.php";

// id is your ID (number,int(11), not required
//pingback_url -> this url send notification when task is ready for download. send  uuid in get $_GET["uuid"]
//each task get 2500 credit (1 - 500 keywords),the price for 1 or 500 keywords will be the same
//max 500 keywods in array
//location : http://seoserpapi.com/api/v3/getCountry/?token=<YOUR TOKEN>


$postArray = array(
	"keywords"=>array(
		"key",
		"anotherkey"
	),
	"location"=>97, //united states
	"pingback_url"=>"https://www.pingbackurl.com/task.php"
	

);

SEOSERPAPI::$apiToken = "XXXX";
$result = SEOSERPAPI::send("v3/getBulkSearchVolume/",$postArray);
print_r($result);
if(is_array($result)){
	if($result["status"] == 200){
		$uuid = $result["uuid"];//uuid for getResults
	}else{
		echo $result["error"];
	}
}else{
	
}
echo $uuid;




?>