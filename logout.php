<?php
    session_start();
    $_SESSION = []; 
    session_destroy(); 
    $login_message = 'You have logged out of Smarter Homes Technology, Goodbye';
    include('login.php');
?>