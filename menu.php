<p><b>
    <?php 
        session_start();
        if (isset($_SESSION['is_valid_admin'])) { 
    ?>
    <?php echo $_SESSION['welcome']; ?>
        <a href="logout.php">Logout</a>

    <?php } else { ?>
        <a href="login.php">Login</a>
    <?php } ?>
</b></p>