<?

include "seoserpapi.php";



SEOSERPAPI::$apiToken = "XXX";
$uuid = $_GET["uuid"];

$postArray = array(
	"uuid"=>$uuid;
);


$data = SEOSERPAPI::get("v3/getResults/",$postArray);
$result = json_decode($data,true);
if($result["status"] == "200"){
	if($uuid == $result["uuid"]){
		foreach($result["results"] as $i => $keywordData){
			//
		}
	}else{
		//mistake on sepserpapi //
	}
}else{
	//error on seoserpapi
}



?>