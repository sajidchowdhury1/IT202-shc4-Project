<?php

    require_once('manager_db_function.php');

    session_start();
    // email and password
    $email = filter_input(INPUT_POST, "email");
    $password = filter_input(INPUT_POST, "password");

    if(is_valid_admin_login($email, $password)) {

        $_SESSION['is_valid_admin'] = true;

        $query = 'SELECT * FROM SmarterHomesTechManagers WHERE emailAddress = :email';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $info = $statement->fetch();
        $statement->closeCursor();

        $_SESSION['welcome'] = "Welcome " . $info['firstName'] . " " . $info['lastName'] . " (" . $info['emailAddress'] . ") ";
        
        include('home_page.php');

    } else {

        if ($email == NULL || $password == NULL){
            $login_message = "You need to type in the valid fields to login";
        } else {
            $login_message = "Either email or password was incorrect";
        }

        include('login.php');

    }

?>