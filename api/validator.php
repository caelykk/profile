<?php


function showReqMessage($field) {
    $translateRules = [
        'email' => 'Email',
        'phone' => 'Телефон',
        'lastName' => 'Фамилия',
        'name' => 'Имя',
    ];

    return [
        'required' => "$translateRules[$field] не может быть пустым",
        'invalid' => "Неверный " . strtolower($translateRules[$field]),
    ];

}

function validateEmail($email, $required = false) {


    if ($email === '') {
        return $required ? showReqMessage('email')['required'] : '';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return showReqMessage('email')['invalid'];
    }

}

// function validatePhone($phone, $pattern = '', $required = false) {

//     if ($phone === '')
//         return $required ? 'Телефон обязателен для заполнения' : '';

//     if(!preg_match($pattern, $phone))
//         return "Неверный формат телефона";
// }