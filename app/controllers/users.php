<?php
include __DIR__ . '/../database/db.php';

$errMsg = '';
$regStatus = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $pass1 = trim($_POST['pass1']);
    $pass2 = trim($_POST['pass2']);
    $admin = 0;

    if ($login === '' || $email === '' || $pass1 === '') {
        $errMsg = "Не все поля заполнены!";
    } elseif (mb_strlen($login, 'UTF8') < 6) {
        $errMsg = "Укажите полное ФИО";
    } elseif ($pass1 !== $pass2) {
        $errMsg = "Пароли не совпадают :(";
    } else {
        $pass = password_hash($pass1, PASSWORD_DEFAULT);
        $post = [
            'admin' => $admin,
            'username' => $login,
            'email' => $email,
            'password' => $pass
        ];
        $id = insert('users', $post);
        echo $id;
    }
} else {
    $login = '';
    $email = '';
}



