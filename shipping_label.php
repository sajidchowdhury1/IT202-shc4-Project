<?php
    //print_r($_POST);
    //initialization
    $first_name = filter_input(INPUT_POST, "first_name");
    $last_name = filter_input(INPUT_POST,"last_name");
    $street_address = filter_input(INPUT_POST,"street_address");
    $city = filter_input(INPUT_POST,"city");
    $state = filter_input(INPUT_POST,"state");
    $zip = filter_input(INPUT_POST,"zip", FILTER_VALIDATE_INT);
    $ship_date = filter_input(INPUT_POST,"ship_date");
    $order_number = filter_input(INPUT_POST,"order_number", FILTER_VALIDATE_INT);
    $length = filter_input(INPUT_POST,"", FILTER_VALIDATE_FLOAT);
    $width = filter_input(INPUT_POST,"width", FILTER_VALIDATE_FLOAT);
    $height = filter_input(INPUT_POST,"height", FILTER_VALIDATE_FLOAT);
    $total = filter_input(INPUT_POST,"total", FILTER_VALIDATE_FLOAT);

    // format
    
    // validate

?>

<html>
    <head>
        <title>Shipping Label</title>
    </head>
    <?php include("header.php")?>    
    
    <main>
    <h2>Shipping Label</h2>

    
    </main>

    <?php include("footer.php")?>  
</html>