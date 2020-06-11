<?php

include "seoserpapi.php";

// this query get 100 keywords ordered by position, search volume on Google ADS
// limit - max number on results
// google - Google.cz , Gooogle.de, etc. 



$postArray = array(
	"url"=>"https://www.semor.cz",
	"google"=>"CZ",
	"limit"=>100
);

SEOSERPAPI::$apiToken = "XXXX";
SEOSERPAPI::$sandbox = true;
$result = SEOSERPAPI::get("v3/getPPCForDomain/",$postArray);
print_r($result);
if(is_array($result)){
	if($result["status"] == 200){
		// array 
		$keywords = $result["keywords"];
	}else{
		echo $result["error"];
	}
}else{
	
}





?>