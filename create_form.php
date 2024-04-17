<?php
    // Sajid Chowdhury Mar 18, 2024 IT202-006 Phase 3 shc4@njit.edu
    // Sajid Chowdhury Updated: Mar 27, 2024 IT202-006 Phase 4 shc4@njit.edu
    // Sajid Chowdhury Updated: Apr 17, 2024 IT202-006 Phase 5 shc4@njit.edu 
    require_once("database_njit.php");

    // will get the ids and names from each of the category
    $query = 'SELECT * 
            FROM SmarterHomesTechCategories
            ORDER BY SmarterHomesTechCategoryID';
    $statement = $db->prepare($query);
    $statement->execute();
    $categories = $statement->fetchAll();
    $statement->closeCursor();

    // setting variables for code, name, description, and price
    if(!isset($product_code)){ $product_code = '';}
    if(!isset($product_name)){ $product_name = '';}
    if(!isset($description)){ $description = '';}
    if(!isset($product_color)){ $product_color = '';}
    if(!isset($product_price)){ $product_price = '';}

    session_start();
    if($_SESSION['is_valid_admin'] != true){
        include('logout_error.php');
        exit();
    }
?>

<html>
    <head>
        <title>Smarter Homes || Create</title>
        <link rel="stylesheet" href="smart_home.css"/>
        <link rel="shortcut icon" href="images/homeicon.png">
    </head>
    <body>
        <?php include('header.php');?>
        <main id="createpage">
            <noscript>
                <h2>You need JavaScript enabled to make full use of this website/page</h2>
            </noscript>
            <h2>Create Product</h2>
            <?php 
                if(isset($error_message)){
                    echo '<p style="color: red; font-weight: bold; font-size: 15px; text-align: center;">' . $error_message . '</p>';
                }
                if(isset($success_message)){
                    echo '<p style="color: green; font-weight: bold; font-size: 15px; text-align: center;">' . $success_message . '</p>';
                }
            ?>

            <form id="createform" action="create_process.php" method="post">
                <label>Category:</label>
                <select name="category_id">
                    <?php foreach ($categories as $category) : ?>
                        <option value="<?php echo $category['SmarterHomesTechCategoryID'];?>">
                            <?php echo $category['SmarterHomesTechCategoryName'];?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <br />

                <label>Product Code:</label>
                <span id="code">*</span>
                <input type="text" id="product_code" name="product_code" placeholder="Ex. light21" value="<?php echo htmlspecialchars($product_code);?>" />
                <br />

                <label>Product Name:</label>
                <span id="name">*</span>
                <input type="text" id="product_name" name="product_name" placeholder="Ex. smart light" value="<?php echo htmlspecialchars($product_name);?>" />
                <br />

                <label for="description">Description:</label>
                <span id="text">*</span>
                <br />
                <textarea id="description" name="description" placeholder="this product has..." value="<?php echo htmlspecialchars($description);?>"></textarea>
                <br />

                <label>Product Color:</label>
                <span id="color">*</span>
                <input type="text" id="product_color" name="product_color" placeholder="Ex. red" value="<?php echo htmlspecialchars($product_color);?>" />
                <br />

                <label>Price:</label>
                <span id="price">*</span>
                <input type="number" step="0.01" id="product_price" name="product_price" placeholder="100.00" value="<?php echo htmlspecialchars($product_price);?>">
                <br />
                <br />

                <input id="submit" type="submit" value="Submit">

                <input id="reset_button" type="reset" value="Clear">

            </form>

            
            <!--<form id="clear" action="create_form.php" method="post">
                <label>Clear Form:</label>
                <br />
                <input type="submit" value="Clear">
            </form>-->

        </main>
        <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
        <script>
            $(document).ready ( () => {
                $("#createform").submit ( (event) => {
                    // code
                    if($("#product_code").val() == '') {
                        event.preventDefault();
                        $("#code").text("Code cannot be blank");
                    } else if ($("#product_code").val().length < 4 || $("#product_code").val().length > 10){
                        event.preventDefault();
                        $("#code").text("Code has to be >= 4 or <= 10 characters");
                    } else {
                        $("#code").text("*");
                    }
                    // name
                    if($("#product_name").val() == '') {
                        event.preventDefault();
                        $("#name").text("Name cannot be blank");
                    } else if ($("#product_name").val().length < 10 || $("#product_name").val().length > 100){
                        event.preventDefault();
                        $("#name").text("Name has to be >= 10 or <= 100 characters");
                    } else {
                        $("#name").text("*");
                    }
                    // description
                    if($("#description").val() == '') {
                        event.preventDefault();
                        $("#text").text("Description cannot be blank");
                    } else if ($("#description").val().length < 10 || $("#description").val().length > 255){
                        event.preventDefault();
                        $("#text").text("Description has to be >= 10 or <= 255 characters");
                    } else {
                        $("#text").text("*");
                    }
                    // color
                    if($("#product_color").val() == '') {
                        event.preventDefault();
                        $("#color").text("Color cannot be blank");
                    } else if ($("#product_color").val().length < 1 || $("#product_color").val().length > 20){
                        event.preventDefault();
                        $("#color").text("Color has to be >= 10 or <= 20 characters");
                    } else {
                        $("#color").text("*");
                    }
                    // price
                    if($("#product_price").val() == '') {
                        event.preventDefault();
                        $("#price").text("Price cannot be blank");
                    } else if ($("#product_price").val() <= 0 || $("#product_price").val() > 100000){
                        event.preventDefault();
                        $("#price").text("Price should not be <= $0 or > $100,000");
                    } else {
                        $("#price").text("*");
                    }
                });

                $("#reset_button").click( () => {
                    $("#product_code").val("");
                    $("#code").text("*");

                    $("#product_name").val("");
                    $("#name").text("*");

                    $("#description").val("");
                    $("#text").text("*");

                    $("#product_color").val("");
                    $("#color").text("*");

                    $("#product_price").val("");
                    $("#price").text("*");
                }); 
            });            
        </script>
        <?php include('footer.php');?>
    </body>
</html>