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
		$result = $result["result"];
	}else{
		echo $result["error"];
	}
}else{
	
}
/*
{
  "status": 200,
  "result": [
    {
      "keyword": "adsense blank ads how long",
      "competition": 0.047619047619047616,
      "cpc": 0,
      "search_volume": 10,
      "monthly_searches": [
        {
          "year": 2019,
          "month": 10,
          "search_volume": 10
        },
        {
          "year": 2019,
          "month": 9,
          "search_volume": 0
        },
        {
          "year": 2019,
          "month": 8,
          "search_volume": 10
        },
        {
          "year": 2019,
          "month": 7,
          "search_volume": 0
        },
        {
          "year": 2019,
          "month": 6,
          "search_volume": 0
        },
        {
          "year": 2019,
          "month": 5,
          "search_volume": 0
        },
        {
          "year": 2019,
          "month": 4,
          "search_volume": 10
        },
        {
          "year": 2019,
          "month": 3,
          "search_volume": 10
        },
        {
          "year": 2019,
          "month": 2,
          "search_volume": 10
        },
        {
          "year": 2019,
          "month": 1,
          "search_volume": 10
        },
        {
          "year": 2018,
          "month": 12,
          "search_volume": 10
        },
        {
          "year": 2018,
          "month": 11,
          "search_volume": 10
        }
      ]
    }
  ]
}
*/
?>