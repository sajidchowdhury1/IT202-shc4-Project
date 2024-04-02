<!-- Sajid Chowdhury Mar 27, 2024 IT202-006 Phase 4 shc4@njit.edu -->
<html>
    <head>
        <title>Sign Up</title>
    </head>
    <body>
        <form action="signup_process.php" method="post">
            <label>First Name:</label>
            <input type="text" name="first_name" required/>
            <br />

            <label>Last Name:</label>
            <input type="text" name="last_name" required/>
            <br />

            <label>Email:</label>
            <input type="text" name="email" required/>
            <br />

            <label>Password</label>
            <input type="text" name="password" required/>
            <br />

            <input type="submit" value="SignUp">
        </form>
        <?php 
            if(isset($success_message)){
                echo "<p>" . $success_message . "</p>";
            }
        ?>
    </body>
</html>