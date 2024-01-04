
<?php

require_once 'Libraries/Request.php';

use Libraries\Request;

$url="https://jsonplaceholder.typicode.com/todos/1";
try {
    $getResponse = Request::get($url);
    echo $getResponse;
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}