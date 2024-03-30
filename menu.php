<p><b>
    <?php 
        session_start();
        if (isset($_SESSION['is_valid_admin'])) { 
    ?>
        <a href="logout.php">Logout</a>
        <?php 
            if (isset($_SESSION['welcome'])) { 
                echo $_SESSION['welcome'];
            }
        ?>

    <?php } else { ?>
        <a href="login.php">Login</a>
    <?php } ?>
</b></p>