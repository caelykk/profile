<?php

require_once __DIR__ . '/validator.php';
require_once __DIR__ . '/../helpers/arrHelp.php';


$err = [];

// if($_SERVER['REQUEST_METHOD'] !== 'POST') {
//     header('Location: /');
//     // http_response_code(405);
//     exit;
// }



// $csrf = trim($_POST['csrf'] ?? null);
// $email = trim($_POST['email'] ?? '');
// $primaryPhone = trim($_POST['primaryPhone'] ?? null);
// $secondaryPhone = trim($_POST['secondaryPhone'] ?? null);
// $name = trim($_POST[''] ?? '');
// $lastName = trim($_POST['lastName'] ?? '');
// $secondName = trim($_POST['secondName'] ?? '');
// $birthDay = trim($_POST['birthDay'] ?? null);
// $birthMonth = trim($_POST['birthMonth'] ?? null);
// $birthYear = trim($_POST['birthYear'] ?? null);
// $gender = trim($_POST['gender'] ?? '');
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json; charset=utf-8');
    $fieldNames = [
        'csrf',
        'email',
        'phone',
        'secondPhone',
        'name',
        'lastName',
        'secondName',
        'birthDay',
        'birthMonth',
        'birthYear',
        'gender',
    ];
    $fields = extractFields($_POST, $fieldNames);
    $ruPattern = '/^(?:\+7|7|8)\d{10,15}$/';

    // print_r($fields);

    print_r(validateEmail($fields['email'], true));






    // $collected = [];

    // foreach($fields as $field) {
    //     $collected[$field] = $_POST[$field] ?? '';
    // }

    echo json_encode([
        'success' => 'true',
        'errors' => $err,
        'data' => $fields,
    ]);
exit;
}
