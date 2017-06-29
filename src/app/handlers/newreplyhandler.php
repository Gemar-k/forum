<?php
include 'connectionhandler.php';
include 'profielhandler.php';

$newreplymessage = NULL;

if (isset($_POST['replypost'])){
    $content = $_POST['reply'];
    $topicid = $_GET['topicid'];

    if (empty($content)){
        $newreplymessage = '<div class="alert alert-danger">Please fill in all the fields</div>';
    }else{
        $newreply = $conn->prepare('INSERT INTO replies (content, topic_id, user_id) VALUES (:content, :topicid, :userid)');
        $newreply->execute([
            'content' => $content,
            'topicid' => $topicid,
            'userid' => $userid
        ]);

        $newreplymessage = '<div class="alert alert-success">Reply created. Click <a href="replies.php?topicid='.$topicid.'">Here</a>To view your reply</div>';
    }
}
