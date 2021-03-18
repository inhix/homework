<?php
session_start();

$correctCredential = [
    'login' => 'inhix',
    'password' => 'RandomPass1'
];

if ($_POST['submit']) {
    if (mb_strlen($_POST['login']) < 4 || mb_strlen($_POST['login']) > 10) {
        $_SESSION['loginForm']['errors'][] = 'Login length is incorrect';
    }
    if (mb_strlen($_POST['pass']) < 6 || mb_strlen($_POST['pass']) > 12) {
        $_SESSION['loginForm']['errors'][] = 'Password length is incorrect';
    }
    if (mb_strlen($_POST['login']) == 0 || empty($_POST['login'])) {
        $_SESSION['loginForm']['errors'][] = 'Input your login';
    }
    if (mb_strlen($_POST['pass']) == 0 || empty($_POST['pass'])) {
        $_SESSION['loginForm']['errors'][] = 'Input your password';
    } else {
        if ($correctCredential['login'] === $_POST['login']
            && $correctCredential['password'] === $_POST['pass']) {
            $_SESSION['loginForm']['notification'][] = 'Login successful';
            $_SESSION['auth'] = true;
            $_SESSION['user_id'] = 2;
            $_SESSION['user_name'] = 'Vadim';
        } else {
            $_SESSION['loginForm']['errors'][] = 'Incorrect login or password';
            /**
             * Сдесь по аналогии можно и дальше расширять валидацию
             */
        }
    }
}


header("Location: index.php");
exit;


