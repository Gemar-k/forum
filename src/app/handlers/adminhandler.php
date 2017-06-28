<?php
include 'profielhandler.php';

$newthemebutton = NULL;

if (isset($profiel_role)){
    if ($profiel_role == 1){
        $newthemebutton = '<a class="btn btn-default" href="newtheme.php">New Theme</a>';
    }
}