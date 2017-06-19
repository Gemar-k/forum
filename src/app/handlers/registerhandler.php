<?php
include 'connectionhandler.php';

$passwordmessage = NULL;

if (isset($_POST['register'], $_POST['email'], $_POST['name'], $_POST['new_username'], $_POST['new_password'], $_POST['check_new_password'], $_POST['sex'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $username = $_POST['new_username'];
    $password = sha1($_POST['new_password']);
    $checkpassword = sha1($_POST['check_new_password']);
    $sex = $_POST['sex'];


    if ($password == $checkpassword){
        $insert_query = $conn->prepare('INSERT INTO users (name, username, password, email, sex) VALUES (:name, :username, :password, :email, :sex)');
        $insert_query->execute([
            ':email' => $email,
            ':name' => $name,
            ':username' => $username,
            ':password' => $password,
            ':sex' => $sex
        ]);
        header('location: index.php');
    }else{
        $passwordmessage = '<div class="alert alert-danger">Passwords are not the same</div>';
    }

    echo $email . $name . $username . $password . $sex;
}