<?php

require_once __DIR__ . '/validator.php';
require_once __DIR__ . '/../helpers/arrHelp.php';


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

    $success = empty(array_filter($errors));

    $response = [
        'success' => $success,
        'errors' => $errors,
    ];



    if($success)
        $result = mail('caelykkaty.m@gmail.com', '', json_encode($response, JSON_UNESCAPED_UNICODE));
        var_dump($result);

    echo json_encode($response, JSON_UNESCAPED_UNICODE);

    exit;
}
