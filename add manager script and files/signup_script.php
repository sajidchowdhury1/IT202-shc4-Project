<?php 
    // Sajid Chowdhury Mar 27, 2024 IT202-006 Phase 4 shc4@njit.edu
    require_once('database_njit.php');
    function addSmarterHomesTechmanager($email, $password, $firstName, $lastName) {
        $db = getDB();
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $query = 'INSERT INTO SmarterHomesTechManagers (emailAddress, password, firstName, lastName, dateCreated)
                VALUES (:email, :password, :firstName, :lastName, NOW())';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $hash);
        $statement->bindValue(':firstName', $firstName);
        $statement->bindValue(':lastName', $lastName);
        $statement->execute();
        $statement->closeCursor();
    }
    // password: $shtm$123 (every manager has this password)
    
?>