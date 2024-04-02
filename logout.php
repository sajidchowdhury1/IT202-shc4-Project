<?php
    // Sajid Chowdhury Mar 27, 2024 IT202-006 Phase 4 shc4@njit.edu
    session_start();
    $_SESSION = []; 
    session_destroy(); 
    $login_message = 'You have logged out of Smarter Homes Technology, Goodbye';
    include('login.php');
?>