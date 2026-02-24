<?php

if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit;
}


header('Content-Type: application/json; charset=utf-8');

$fields = [
    'csrf',
    'email',
    'primaryPhone',
    'secondaryPhone',
    'name',
    'lastName',
    'secondName',
    'birthDay',
    'birthMonth',
    'birthYear',
    'gender',
];

$collected = [];

foreach($fields as $field) {
    $collected[$field] = $_POST[$field] ?? '';
}

echo json_encode([
    'success' => 'true',
    'errors' => (object) [],
    'data' => $collected,
]);

exit;