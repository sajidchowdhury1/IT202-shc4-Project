<!-- Sajid Chowdhury Feb 26, 2024 IT202-006 Phase 1 shc4@njit.edu-->
<html>
    <head>
        <title>Smarter Homes || Database Error</title>
        <link rel="stylesheet" href="smart_home.css"/>
        <link rel="shortcut icon" href="images/homeicon.png">
    </head>
    <body>
        <?php include('header.php'); ?>
        <main class="error">
            <h2>Database Error</h2>
            <p>Error Message: <?php echo $error_message;?></p>
        </main>
        <?php include('footer.php'); ?>
    </body>
</html>