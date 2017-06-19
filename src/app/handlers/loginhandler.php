<?php
session_start();
include 'connectionhandler.php';

$loginmessage = NULL;

if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = sha1($_POST['password']);

    $query = $conn->prepare("SELECT COUNT(`id`) FROM `users` WHERE `username` = :username AND `password` = :password");
    $query->execute([
        ':password' => $password,
        ':username' => $username
    ]);

    $users = $query->fetchColumn();

    if ($users == "1"){
        $_SESSION['username'] = $username;
        header('location: index.php');
    }else{
        $loginmessage = '<div class="alert alert-danger">Wrong password or username</div>';
    }
}