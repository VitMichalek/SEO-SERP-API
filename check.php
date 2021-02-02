<?
/*
Check your task status
*/

include "API/seoserpapi.php";


$postArray = array(
	"uuid"=>"???"
);
SEOSERPAPI::$apiToken = "XXX";
$result = SEOSERPAPI::get("v3/check/",$postArray);

print_r(json_decode($result,true));

/*

Array
(
    [status] => 200
    [results] => Array
        (
            [0] => Array
                (
                    [uuid] => 33080916-0EC8-43DD-BDC6-42442DCDD939
                    [status] => C  //H is ready for download
                )

        )

)
*/

?>