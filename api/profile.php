<?php

require_once __DIR__ . '/validator.php';

$success = false;

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    header('Content-Type: application/json; charset=utf-8');

    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $secondPhone = trim($_POST['secondPhone'] ?? '');
    $name = trim($_POST['name'] ?? '');
    $lastName = trim($_POST['lastName'] ?? '');
    $secondName = trim($_POST['secondName'] ?? '');
    $birthDay = trim($_POST['birthDay'] ?? '');
    $birthMonth = trim($_POST['birthMonth'] ?? '');
    $birthYear = trim($_POST['birthYear'] ?? '');
    $gender = trim($_POST['gender'] ?? '');

    $errors = [
        'email' => isValidEmail($email, true),
        'phone' => isValidPhone($phone, true),
        'secondPhone' => isValidPhone($secondPhone),
        'name' => isValidName($name, true),
        'lastName' => isValidName($lastName, true),
        'secondName' => isValidName($secondName),
        'birthdate' => isValidDate($birthDay, $birthMonth, $birthYear),
        'gender' => isValidGender($gender),
    ];

    $errors = array_filter($errors);
    $success = empty($errors);

    $response = [
        'success' => $success,
        'errors' => $errors,
    ];

    if($success)
        mail('caelykkaty.m@gmail.com', '', json_encode($response, JSON_UNESCAPED_UNICODE));
        // print_r($errors);


    echo json_encode($response, JSON_UNESCAPED_UNICODE);

    exit;
}
