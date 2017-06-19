<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=forum_witcher3', 'root', '');
} catch (PDOException $e){
    echo "error with connection" . $e->getMessage();
    die();
}