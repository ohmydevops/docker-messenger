<?php

$data = [
    "APP_ID" => getenv('APP_ID') === false ? 'None' : getenv('APP_ID'), 
    "SECRET" => getenv('SECRET') === false ? 'None' : getenv('SECRET'), 
];

$response = json_encode($data, JSON_PRETTY_PRINT);

header('Content-type: application/json');
echo($response);