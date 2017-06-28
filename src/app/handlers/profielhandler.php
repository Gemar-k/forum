<?php
include 'connectionhandler.php';

if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];

    $userprofiel = $conn->prepare('SELECT * FROM `users` WHERE username = :username');
    $userprofiel->execute([
        ':username' => $username
    ]);

    $userprofiel_data = $userprofiel->fetchAll();

    $userid = $userprofiel_data[0][0];
    $profiel_name = $userprofiel_data[0][1];
    $profiel_username = $userprofiel_data[0][2];
    $profiel_email = $userprofiel_data[0][4];
    $profiel_sex = $userprofiel_data[0][5];
    $profiel_created_at = $userprofiel_data[0][6];
    $profiel_role = $userprofiel_data[0][7];
}
