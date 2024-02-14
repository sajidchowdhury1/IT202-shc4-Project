<?php
    //print_r($_POST);
    //initialization
    $first_name = filter_input(INPUT_POST, "first_name");
    $last_name = filter_input(INPUT_POST,"last_name");
    $street_address = filter_input(INPUT_POST,"street_address");
    $city = filter_input(INPUT_POST,"city");
    $state = filter_input(INPUT_POST,"state");
    $zip = filter_input(INPUT_POST,"zip");
    $ship_date = filter_input(INPUT_POST,"ship_date");
    $order_number = filter_input(INPUT_POST,"order_number", FILTER_VALIDATE_INT);
    $length = filter_input(INPUT_POST,"length", FILTER_VALIDATE_FLOAT);
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
    } else if ($length > 36){
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

    if($zip === FALSE){
        $error_message .= "Need to type in a valid zip code.<br>";
    } else if (strlen($zip) <= 0){
        $error_message .= "Zip code format is not valid.<br>";
    } else if (strlen($zip) > 5){
        $error_message .= "Zip code format is not valid.<br>";
    } else if (strlen($zip) < 5){
        $error_message .= "Zip code format is not valid.<br>";
    }

    if($state === FALSE){
        $error_message .= "Need to type a valid state.<br>";
    } else if (strlen($state) <= 0) {
        $error_message .= "Input a valid state.<br>";
    } else if (strlen($state) > 2){
        $error_message .= "A valid state is required for the input.<br>";
    } else if (strlen($state) == 1){
        $error_message .= "A valid state is required for the input.<br>";
    }


    if($error_message != ''){
        include("shipping_form.php");
        exit();
    }

    // format
    $length_f = number_format($length,2);
    $width_f = number_format($width,2);
    $height_f = number_format($height,2);
    $total_f = number_format($total,2);

?>

<html>
    <head>
        <title>Shipping Label</title>
        <link rel="stylesheet" href="smart_home.css"/>
        <link rel="shortcut icon" href="images/homeicon.png">
    </head>
    <body>
        <?php include("header.php")?>    
            <main id="slabel">
                <h2>Shipping Label</h2>

                <!-- label -->
                <div id="shipping_label">
                    
                    <div id="labeltop">
                        <p id="usps">P</span>

                        <p id="paid">PRIORITY MAIL<br/> U.S. POSTAGE PAID <br /> </span>

                    </div>
                    
                    
                    <p id="priority">USPS PRIORITY MAIL</p>

                    <div id="labelmid">

                        <p id="company">Smarter Homes Technology<br>555 Mountain St.<br>Newark, NJ 07101</p>

                        <p id="info"><?php echo htmlspecialchars("Shipping Date: $ship_date");?><br />Mailed from 07101<br />2 lbs <br/>
                        <?php echo htmlspecialchars("L: $length_f" . '" x' . " W: $width_f" . '" x' . " H: $height_f" . '"');?><br/>
                        <?php echo htmlspecialchars("Value: $total_f");?>
                        </p>

                        <p id="mailing_to"><?php echo htmlspecialchars("$first_name $last_name");?> <br/>
                            <?php echo htmlspecialchars($street_address);?> <br/> <?php echo htmlspecialchars("$city, $state $zip");?>
                        </p>
                    </div>

                    <hr id="line"/>

                    <div id="labeldown">
                        <p id="ordernum"><?php echo htmlspecialchars("Order Number: $order_number")?></p>

                        <!-- image of barcode and tracking-->
                        <img id="barcode" src="images/barcode.png" alt="barcode" id="tracking"/>
                        <p id="tracking" class="trackingnum">Tracking Number: 3242 3424 7436 8564 3217 53</p>
                    </div>
                    
                    <hr id="line" />
                </div>    
            
            </main>

        <?php include("footer.php")?>  
    </body>
</html>