<?php
    require_once('signup_script.php');

    print_r($_POST);

    $first_name = filter_input(INPUT_POST, 'first_name');
    $last_name = filter_input(INPUT_POST, 'last_name');
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');

    $success_message = '';

    addSmarterHomesTechmanager($email, $password, $first_name, $last_name);

    $success_message .= "Added $first_name $last_name !!!";

    if ($success_message != ''){
        include("signup_form.php");
        exit();
    }
?>