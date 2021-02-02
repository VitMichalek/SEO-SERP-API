<?php

include "seoserpapi.php";

// id is your ID (number,int(11), not required
//pingback_url -> this url send notification when task is ready for download. send  uuid in get $_GET["uuid"]


$postArray = array(
	"urls"=>array(
		array(
			"url"=>"seoserpapi.com",//domain
			"id"=>"1234"//own id,not required
		),
		array(
			"url"=>"semor.cz",
			"id"=>"487988"
		)
	),
	"pingback_url"=>"https://www.pingbackurl.com/task.php"
	

);

SEOSERPAPI::$apiToken = "XXXX";
$result = SEOSERPAPI::send("v3/bulkBacklink/",$postArray);
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