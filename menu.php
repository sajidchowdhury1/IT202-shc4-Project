<p><b>
    <?php 
        // Sajid Chowdhury Mar 27, 2024 IT202-006 Phase 4 shc4@njit.edu
        session_start();
        if (isset($_SESSION['is_valid_admin'])) { 
    ?>
        <?php 
            if (isset($_SESSION['welcome'])) { 
                echo $_SESSION['welcome'];
            }
        ?>
        <a href="logout.php">Logout</a>
    <?php } else { ?>
        <a href="login.php">Login</a>
    <?php } ?>
</b></p>