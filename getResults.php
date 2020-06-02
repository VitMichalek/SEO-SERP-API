<?

include "seoserpapi.php";

//$uuid is id createt and returned on setTask/setLinkMetrics!
//where in setTask define pingback_url  send $uuid in $_GET["uuid"];

$postArray = array(
	"uuid"=>""
);

SEOSERPAPI::$apiToken = "SSS";
$result = SEOSERPAPI::get("v3/getResults/",$postArray);

echo $result;
?>