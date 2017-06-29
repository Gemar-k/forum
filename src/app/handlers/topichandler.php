<?php
include 'connectionhandler.php';

if (isset($_GET['themaid'])){
    $id = $_GET['themaid'];

    $topics = $conn->prepare('SELECT * FROM `topics` 
INNER JOIN users ON topics.user_id = users.id 
INNER JOIN themes ON themes.id = topics.theme_id 
WHERE topics.theme_id = :id');

    $topics->execute([
        'id' => $id
    ]);

}


