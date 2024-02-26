<!-- Sajid Chowdhury Feb 26, 2024 IT202-006 Phase 1 shc4@njit.edu-->
<?php
    $dsn = 'mysql:host=sql1.njit.edu;port=3306;dbname=shc4';
    $username = 'shc4';
    $password = 'Password123456!';

    try {
        $db = new PDO($dsn, $username, $password);
        //echo '<p>Successfully connected to NJIT database</p>';
    } catch (PDOException $ex) {
        $error_message = $ex->getMessage();
        include('database_error.php');
        exit();
    }
?>