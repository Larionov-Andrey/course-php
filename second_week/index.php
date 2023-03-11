<?php
require_once ('src/functions.php');

// task 1
$data = generateUsers(50, 18, 45, 'Olga', 'Georgiy', 'Misha', 'Mariya', 'Susanna');

file_put_contents('data/users.json', json_encode($data));

$jsonData = file_get_contents('data/users.json', true);

$dataAfterJsonDecode = json_decode($jsonData);

