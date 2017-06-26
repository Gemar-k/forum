<?php
include 'connectionhandler.php';
include 'profielhandler.php';
include 'topichandler.php';

$userid = $userprofiel_data[0][0];
$newtopicmessage = NULL;
$themaid = $_GET['themaid'];

if (isset($_POST['topicpost'])){
    $subject = $_POST['subject'];
    $description = $_POST['description'];

    if (empty($subject) || empty($description)){
        $newtopicmessage = '<div class="alert alert-danger">Please fill in all the fields.</div>';
    }else{
        $newtopic = $conn->prepare("INSERT INTO topics (subject, description, theme_id, user_id) VALUES (:subject, :description, :themaid, :userid)");
        $newtopic->execute([
            'subject' => $subject,
            'description' => $description,
            'themaid' => $themaid,
            'userid' => $userid
        ]);

        $newtopicmessage = '<div class="alert alert-success">Topic created. Click <a href="topic.php?themaid='.$themaid.'">here</a> to view your topic</div>';
    }
}