<?php

include "API/seoserpapi.php";

// this query get last 100 backlinks between 2020-06-01 and 2020-06-11 to semor.cz domain
// mode - domain - links for all urls off domain, url - links only for this url


$postArray = array(
	"url"=>"https://www.semor.cz",
	"limit"=>100,
	"mode"=>"domain",
	"date_from"=>"2020-06-01",
	"date_to"=>"2020-06-11"

);

SEOSERPAPI::$apiToken = "XXXX";
SEOSERPAPI::$sandbox = true;
$result = SEOSERPAPI::get("v3/getLastLink/",$postArray);
print_r($result);
if(is_array($result)){
	if($result["status"] == 200){
		// array 
		$backlinks = $result["backlinks"];
	}else{
		echo $result["error"];
	}
}else{
	
}





?>