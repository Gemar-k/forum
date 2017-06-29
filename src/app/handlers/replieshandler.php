<?php
include 'connectionhandler.php';

$topic_id = $_GET['topicid'];

$replies = $conn->prepare('SELECT * FROM replies 
INNER JOIN users ON replies.user_id = users.id 
INNER JOIN topics ON topics.id = replies.topic_id 
WHERE replies.topic_id = :id');

$replies->execute([
    'id' =>$topic_id
]);