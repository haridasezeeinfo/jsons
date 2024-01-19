
<?php

require_once 'Libraries/Request.php';

use Libraries\Request;
$result=[];
$url="https://raw.githubusercontent.com/haridasezeeinfo/jsons/main/sample.json";
try {
    $getResponse = Request::get($url);
    $result=$getResponse;
} catch (\Exception $e) {
    // echo "Error: " . $e->getMessage() . PHP_EOL;
    $result=array(
        'status' => 0,
        'dataRowCount'=>0,
        'datetime'=>null,
        'data'=>array('error'=>$e->getMessage())
    );
}
print_r($result);