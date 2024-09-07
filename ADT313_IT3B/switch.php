<?php 
$role ="student";
switch($role){
    case "student";
    echo "you are student, you are not allowed to access...";
    break;

    case "instructor";
    echo "instructor, you have limited access to...";
    break;

    case "admin";
    echo "admin, you have full access to...";
    break;

    default;
    echo "who tf are you";
    //code
    break;
}
?>