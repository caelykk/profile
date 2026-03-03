<?php


function isValidEmail($email, $required = false) {
    if($email === '')
        return $required ? 'Это поле обязательно для заполнения': '';
    return !filter_var($email, FILTER_VALIDATE_EMAIL) ? 'Некорректный e-mail' : '';
}

function isValidPhone($phone, $required = false) {
    $phone = str_replace(' ', '', $phone);
    $pattern = '/^(?:\+7|7|8)\d{10}$/';

    if($phone === '')
        return $required ? 'Это поле обязательно для заполнения' : '';

    return !preg_match($pattern, $phone) ?
        'Некорректный номер телефона'                      :
        '';
}

function isValidName($name, $required = false) {
    $pattern = $required ? '/^[a-zA-Zа-яА-ЯЁё\-\s\']{2,20}$/u' : '/^[a-zA-Zа-яА-ЯЁё\-\s\']*$/u';

    if($name === '')
        return $required ? 'Это поле обязательно для заполнения' : '';
    return !preg_match($pattern, $name)         ?
        'Поле должно содержать не менее 2-х и не более 20 символов' :
        '';
}

function isValidDate($day, $month, $year, $required = false) {
    $isFullDate = count(array_filter([$day, $month, $year]));

    if($isFullDate === 0)
        return $required ? 'Это поле обязательно для заполнения' : '';

    if($isFullDate === 2 || $isFullDate === 1)
        return $required ? 'Это поле обязательно для заполнения' : 'Введите полную дату';

    return !checkdate((int)$month, (int) $day, (int)$year) ?
        'Некорректная дата' :
        ''
    ;
}

function isValidGender($gender, $required = false) {
    $l = ['M', 'F'];
    if($gender === '')
        return $required ? 'Это поле обязательно для заполнения' : '';

    return in_array($gender, $l, true) ? '' : 'Некорректное значение';
}
