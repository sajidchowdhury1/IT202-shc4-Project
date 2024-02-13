<?php 
    // default values
    if(!isset($first_name)){ $first_name = ''; }
    if(!isset($last_name)){ $last_name = ''; }
    if(!isset($street_address)){ $street_address = '';}
    if(!isset($city)){ $city = ''; }
    if(!isset($state)){ $state = ''; }
    if(!isset($zip)){ $zip = ''; }
    if(!isset($ship_date)){ $ship_date = ''; }
    if(!isset($order_number)){ $order_number = '';}
    if(!isset($length)){ $length = '';}
    if(!isset($width)){ $width = ''; }
    if(!isset($height)){ $height = '';}
    if(!isset($total)){ $total = ''; }

?>

<html>
    <head>
        <title>Smarter Homes || Shipping</title>
        <link href="smart_home.css" rel="stylesheet">
    </head>
    <body>
        <?php include("header.php");?>
        
        <main>
            <h2>Smarter Homes Shipping</h2>
            <?php 
                // this is to print the error message
                echo "<p>" . $error_message . "</p>";
            ?>
            <form action="shipping_label.php" method="post">

                <!--error message -->

                <!-- info for the to address -->
                <label>First Name:</label>
                <input type="text" name="first_name" required value="<?php echo htmlspecialchars($first_name);?>"/>
                <br />

                <label>Last Name:</label>
                <input type="text" name="last_name" required value="<?php echo htmlspecialchars($last_name);?>"/>
                <br />

                <label>Street Address:</label>
                <input type="text" name="street_address" required placeholder="Ex. 123 Maple Ave" value="<?php echo htmlspecialchars($street_address);?>"/>
                <br />

                <label>City:</label>
                <input type="text" name="city" required placeholder="Ex. Newark" value="<?php echo htmlspecialchars($city);?>"/>
                <br />

                <label>State (Initial):</label>
                <input type="text" name="state" required maxlength="2" placeholder="Ex. NJ" value="<?php echo htmlspecialchars($state);?>"/>
                <br />

                <label>Zip Code:</label>
                <input type="text" min="0" name="zip" required maxlength="5" placeholder="Ex. 12345" value="<?php echo htmlspecialchars($zip);?>"/>
                <br />

                <label>Ship Date:</label>
                <input type="date" name="ship_date" value="<?php echo htmlspecialchars($ship_date);?>"/>
                <br />

                <label>Order Number:</label>
                <input type="number" name="order_number" placeholder="2313455345" value="<?php echo htmlspecialchars($order_number);?>"/>
                <br />

                <label>Dimension:<br />Length:</label>
                <input type="number" name="length" min="0" step="0.01" placeholder="20" value="<?php echo htmlspecialchars($length);?>"/>
                <br />

                <label>Width:</label>
                <input type="number" name="width" min="0" step="0.01" placeholder="20" value="<?php echo htmlspecialchars($width);?>"/>
                <br />

                <label>Height</label>
                <input type="number" name="height" min="0" step="0,01" placeholder="20" value="<?php echo htmlspecialchars($height);?>"/>
                <br />

                <label>Total Value: $</label>
                <input type="number" name="total" min="0" step="0.01" placeholder="350" value="<?php echo htmlspecialchars($total);?>">
                <br />

                <input type="submit" value="Create">

            </form>
        </main>

        <?php include("footer.php");?>
    </body>

</html>