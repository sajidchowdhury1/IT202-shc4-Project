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
    
    // validate
    $error_message = '';

    if($total === FALSE){
        $error_message .= "Need to type a valid money number value.<br>";
    } else if ($total < 0){
        $error_message .= "Total needs to be greater than $0.<br>";
    } else if ($total > 1000){
        $error_message .= "Total cannot be greater $1000.<br>";
    }

    if($length === FALSE){
        $error_message .= "Need to type a valid length.<br>";
    } else if ($length < 0){
        $error_message .= "Length needs to be greater than 0 inches.<br>";
    } else if ($total > 36){
        $error_message .= "Length cannot be greater 36 inches.<br>";
    }

    if($width === FALSE){
        $error_message .= "Need to type a valid width.<br>";
    } else if ($width < 0){
        $error_message .= "Width needs to be greater than 0 inches.<br>";
    } else if ($width > 36){
        $error_message .= "Width cannot be greater 36 inches.<br>";
    }

    if($height === FALSE){
        $error_message .= "Need to type a valid height.<br>";
    } else if ($height < 0){
        $error_message .= "Height needs to be greater than 0 inches.<br>";
    } else if ($height > 36){
        $error_message .= "Height cannot be greater 36 inches.<br>";
    }

    /*if($zip === FALSE){
        $error_message .= "Need to type in a valid zip code";
    } else if ($zip < 0){
        $error_message .= "";
    }*/


    if($error_message != ''){
        include("shipping_form.php");
        exit();
    }

?>

<html>
    <head>
        <title>Shipping Label</title>
    </head>
    <?php include("header.php")?>    
    
    <main>
    <h2>Shipping Label</h2>

    <!-- label -->
    <div>
        <p>Smarter Homes Technology<br>555 Mountain St.<br>Newark, NJ 07101</p>
    </div>    
    
    </main>

    <?php include("footer.php")?>  
</html>