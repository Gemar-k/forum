<?php
include 'connectionhandler.php';

$theme = NULL;

$themes = $conn->prepare('SELECT * FROM `themes` INNER JOIN users ON themes.user_id = users.id ORDER BY themes.subject ASC');
$themes->execute();



