<?php
include 'connectionhandler.php';
include 'profielhandler.php';

$newthememessage = NULL;

if (isset($_POST['themepost'])){
    $subject = $_POST['theme_subject'];
    $description = $_POST['theme_description'];

    if (empty($subject) || empty($description)){
        $newthememessage = '<div class="alert alert-danger">Please fill in all the fields.</div>';
    }else{
        $newtheme = $conn->prepare('INSERT INTO themes(subject, description, user_id) VALUES (:subject, :description, :userid)');

        $newtheme->execute([
            'subject' => $subject,
            'description' => $description,
            'userid' => $userid
        ]);

        $newthememessage = '<div class="alert alert-success">Theme created. Click <a href="index.php">Here</a> To view all themes.</div>';
    }
}