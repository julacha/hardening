<?php
$post = $_POST;

$name = $post['fname'];
$surname = $post['lname'];

if ($name) {

    $users = [
        [
            'name' => 'John',
            'lname' => 'Doe'
        ],
        [
            'name' => 'Carl',
            'lname' => 'Doe'
        ]
    ];

    $found = false;

    $variable = [2 . "-hello"];

    if ($variable) {
    }

    foreach ($users as $user) {
        if ($name == $user['name'] && $surname == $user['lname']) {
            $found = true;
            break;
        }
    }

    if ($found) {
        echo "Sveiks " . $name . '  ' . $surname;
    } else {
        echo "Nepareizi dati";
    }
}
