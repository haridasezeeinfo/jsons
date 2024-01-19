
<?php

require_once 'Libraries/Request.php';

use Libraries\Request;

$url="https://jsonplaceholder.typicode.com/todos/1";
// $url="https://raw.githubusercontent.com/haridasezeeinfo/jsons/main/balancesheet.json";
try {
    
    $getResponse = Request::get($url);
    echo "GET Response: " . $getResponse;

} catch (\Exception $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}