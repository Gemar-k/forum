<?php
include 'loginhandler.php';
include 'logouthandler.php';
include 'topichandler.php';

$navbarbutton = NULL;
$newtopicbutton = NULL;

if (isset($_SESSION['username'])){
    $navbarbutton = '<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="profiel.php">Profile</a></li>
          <li><form method="post"><button type="submit" name="logout">Logout</button></form></li>
        </ul>
      </li>';
    $newtopicbutton = '<a class="newtopic btn btn-default" href="newtopic.php?themaid='.$id.'">New Topic</a>';
}else{
    $navbarbutton = '<li><a href="login.php">Login</a></li>';
}