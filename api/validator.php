<?php

function validateEmail($email, $required = false) {
    $error = '';
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        $error = "Неверный email";
    return $error;
}

function validatePhone($phone, $required = false, $pattern = '') {

    if ($phone === '')
        return $required ? 'Телефон обязателен для заполнения' : '';

    if(!preg_match($pattern, $phone))
        return "Неверный формат телефона";
}