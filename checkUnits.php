<?

include "API/seoserpapi.php";


$postArray = array(
	);
SEOSERPAPI::$apiToken = "XXX";
$result = SEOSERPAPI::get("v3/checkUnits/",$postArray);

print_r(json_decode($result,true));

/*

Array
(
    [status] => 200
    [results] => Array
        (            
			[units] => 1250000     

        )
)
*/

?>