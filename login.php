<html>
    <head>
        <title>Smarter Homes || Login</title>
        <link rel="stylesheet" href="smart_home.css"/>
        <link rel="shortcut icon" href="images/homeicon.png">
    </head>
    <body>
        <?php include('header.php');?>
        <main id="loginpage">
            <h2>Login</h2>
            <form id="login" action="authentication.php" method="post">
                <label>Email:</label>
                <input type="text" name="email" />
                <br />

                <label>Password:</label>
                <input type="password" name="password" />
                <br />
                <br />
    
                <input type="submit" value="Login" />
            </form>
            <?php
                if(isset($login_message)){
                    echo '<p style="color: red; font-weight: bold; font-size: 15px; text-align: center;">' . $login_message . '</p>';
                }
            ?>
        </main>
        <?php include('footer.php');?>
    </body>
</html>