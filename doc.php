use Libraries\Request;

$data = [
  'samplekey' => 'value',
  'otherkey' => 'othervalue'
];

$headers = [
  'Content-Type' => 'application/json',
  'Content-Length' => sizeof($data)
];

$response = Request::post('https://example.com', $data, $headers);
// the $response variable contains response from the request