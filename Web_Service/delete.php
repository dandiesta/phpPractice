<?php
 
$authorId = 'ktatroe';
$bookId = 'ProgrammingPHP';
$url = "http://example.com/api/authors/{authorId}/books/{bookId}";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE'); //custom string for request

$result = curl_exec($ch);
$resultInfo = curl_getinfo($ch);

curl_close($ch);

?>