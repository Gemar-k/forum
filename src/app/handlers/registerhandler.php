<?php
include 'connectionhandler.php';

$registermessage = NULL;

if (isset($_POST['register'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $username = $_POST['new_username'];
    $password = sha1($_POST['new_password']);
    $checkpassword = sha1($_POST['check_new_password']);
    $sex = $_POST['sex'];

    if (empty($email) || empty($name) || empty($username) || empty($password) || empty($checkpassword) || empty($sex)){
        $registermessage = '<div class="alert alert-danger">Not all fields are filled in</div>';
    }else{
        if ($password == $checkpassword){
            $insert_query = $conn->prepare('INSERT INTO users (name, username, password, email, sex) VALUES (:name, :username, :password, :email, :sex)');
            $insert_query->execute([
                ':email' => $email,
                ':name' => $name,
                ':username' => $username,
                ':password' => $password,
                ':sex' => $sex
            ]);
            $registermessage = '<div class="alert alert-success">Account registered</div>';
        }else{
            $registermessage = '<div class="alert alert-danger">Passwords are not the same</div>';
        }
    }
}