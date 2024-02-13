<html>
    <head>
        <title>Smarter Homes Technology</title>
        <link rel="stylesheet" href="smart_home.css"/>
        <link rel="shortcut icon" href="images/homeicon.png">
    </head>
    
    <body>
        <!-- php page for the header-->
        <?php include("header.php"); ?>

        <main id="main_page">
            <h2>Welcome to Smarter Homes</h2>
        
            <!-- the body of text that is shown once entered in this page -->
            <p id="main_text">
                Smarter Homes was found in 2022 after the owner Sajid Chowdhury found interest with smart devices and IoT hardware.
                Ever since he found a great fascination with the advancement of this new technology, he wanted to make it avaliable for all.
                The purpose of this store is for people have easier access find the latest and greatest smart home devices for their needs.
                We have smart paroducts ranging from light bulbs, doorbells, plugs, window blinds, and security cameras.
            </p>

            <!-- these are the images that will be shown on the page-->
            <div class="home">
                <img class="homeimg" src="images/smart_camera.jpeg" alt="Smart Security Cameras" height="150"/>
                <img class="homeimg" src="images/smart_doorbell.jpeg" alt="Smart Doorbells" height="150"/>
                <img class="homeimg" src="images/smart_lightbulb.jpg" alt="Smart Lightbulb" height="150"/>
                <img class="homeimg" src="images/smart_windowblinds.jpeg" alt="Smart Window Blinds" height="150"/>
            </div>
        </main>

        <!-- php page for the footer -->
        <?php include("footer.php"); ?>
    </body>
</html>