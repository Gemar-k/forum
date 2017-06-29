<?php
include 'connectionhandler.php';

$recenttopic = $conn->prepare('SELECT * FROM `topics` ORDER BY created_at DESC LIMIT 3');
$recenttopic->execute();