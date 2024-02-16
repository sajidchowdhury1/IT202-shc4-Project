<!-- Sajid Chowdhury Feb 14, 2024 IT202-006 Phase 1 shc4@njit.edu -->
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
                Smarter Homes was founded in 2022 after the owner Sajid Chowdhury had interest with smart devices and IoT hardware.
                Ever since he found a great fascination with the advancement of this new technology, he wanted to make it available for all.
                The purpose of this store is for people to have easier access to find the latest and greatest smart home devices for their needs.
                We have smart products ranging from light bulbs, doorbells, plugs, window blinds, and security cameras.
            </p>

            <!-- these are the images that will be shown on the page-->
            <div class="home">
                <div id="imggroup1">
                    <figure>
                        <img class="homeimg" src="images/smart_camera.jpeg" alt="Smart Security Cameras"/>
                        <figcaption>Fig 1: Smart Security Camera</figcaption>
                    <figure>
                </div >
                <div id="imggroup2">
                    <figure>
                        <img class="homeimg" src="images/smart_doorbell.jpeg" alt="Smart Doorbells"/>
                        <figcaption>Fig 2: Smart Doorbells</figcaption>
                    </figure>
                </div>
                <div id="imggroup3">
                    <figure>
                        <img class="homeimg" src="images/smart_lightbulb.jpg" alt="Smart Lightbulb"/>
                        <figcaption>Fig 3: Smart Lightbulbs</figcaption>
                    </figure>
                </div>
                <div id="imggroup4">
                    <figure>
                        <img class="homeimg" src="images/smart_windowblinds.jpeg" alt="Smart Window Blinds"/>
                        <figcaption>Fig 4: Smart Window Blinds</figcaption>
                    </figure>
                </div>

            </div>
        </main>

        <!-- php page for the footer -->
        <?php include("footer.php"); ?>
    </body>
</html>