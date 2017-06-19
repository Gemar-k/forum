<?php
include 'loginhandler.php';
include 'logouthandler.php';

$navbarbutton = NULL;

if (isset($_SESSION['username'])){
    $navbarbutton = '<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="profiel.php">Profile</a></li>
          <li><form method="post"><button type="submit" name="logout">Logout</button></form></li>
        </ul>
      </li>';
}else{
    $navbarbutton = '<li><a href="login.php">Login</a></li>';
}