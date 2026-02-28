<?php

function extractFields(array $target, array $fields): array {
    $res = [];

    foreach($fields as $field)
        $res[$field] = trim($targetArr[$field] ?? '');

    return $res;
}