<!-- Sajid Chowdhury Mar 27, 2024 IT202-006 Phase 4 shc4@njit.edu -->
<html>
    <body>
        <?php
            // password and hash testing
            if(password_verify('$shtm$123', '$2y$10$Vb3yob7poRqQ/mLgAGBPcuUjjXU25tGHa54uXJfLWzvP3qRtTfThW')){
                echo "<p> karen's password match </p>";
            } else {
                echo "<p> passwords does not match </p>";
            }
        ?>
    </body>
</html>