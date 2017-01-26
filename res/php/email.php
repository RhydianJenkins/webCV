<?php

if($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //send email
    mail("rhydz@msn.com", "Comment from CV website: " . $email, $message);
}