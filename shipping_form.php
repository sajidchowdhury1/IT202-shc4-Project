<?php 
    // Sajid Chowdhury Feb 14, 2024 IT202-006 Phase 1 shc4@njit.edu

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
        <link rel="shortcut icon" href="images/homeicon.png">
    </head>
    <body>
        <?php include("header.php");?>
        
        <main id="form">
            <h2>Smarter Homes Shipping</h2>
            <?php 
                // this is to print the error message
                if(!empty($error_message)){
                    echo '<p style="color: red; font-weight: bold; font-size: 15px; text-align: center;">' . $error_message . "</p>";
                }
            ?>
            <div id="shipform">
                <form id="shippingform" action="shipping_label.php" method="post">

                    <!--error message -->

                    <!-- info for the to address -->
                    <label>First Name:</label> <br />
                    <input type="text" name="first_name" required placeholder="Ex. John" value="<?php echo htmlspecialchars($first_name);?>"/>
                    <br />

                    <label>Last Name:</label> <br />
                    <input type="text" name="last_name" required placeholder="Ex. Doe" value="<?php echo htmlspecialchars($last_name);?>"/>
                    <br />

                    <label>Street Address:</label> <br />
                    <input type="text" name="street_address" required placeholder="Ex. 123 Maple Ave" value="<?php echo htmlspecialchars($street_address);?>"/>
                    <br />

                    <label>City:</label> <br />
                    <input type="text" name="city" required placeholder="Ex. Newark" value="<?php echo htmlspecialchars($city);?>"/>
                    <br />

                    <label>State (Initial):</label> <br />
                    <input type="text" name="state" placeholder="Ex. NJ" value="<?php echo htmlspecialchars($state);?>"/>
                    <br />

                    <label>Zip Code:</label> <br />
                    <input type="text" min="0" name="zip" placeholder="Ex. 12345" value="<?php echo htmlspecialchars($zip);?>"/>
                    <br />

                    <label>Ship Date:</label> <br />
                    <input type="date" name="ship_date" required value="<?php echo htmlspecialchars($ship_date);?>"/>
                    <br />

                    <label>Order Number:</label> <br />
                    <input type="number" name="order_number" min="0" placeholder="231343" value="<?php echo htmlspecialchars($order_number);?>"/>
                    <br />

                    <label>Length: (inches)</label> <br />
                    <input type="number" name="length" step="0.01" placeholder="20.00" value="<?php echo htmlspecialchars($length);?>"/>
                    <br />

                    <label>Width: (inches)</label> <br />
                    <input type="number" name="width" step="0.01" placeholder="20.00" value="<?php echo htmlspecialchars($width);?>"/>
                    <br />

                    <label>Height: (inches)</label> <br />
                    <input type="number" name="height" step="0.01" placeholder="20.00" value="<?php echo htmlspecialchars($height);?>"/>
                    <br />

                    <label>Total Value: $</label> <br />
                    <input type="number" name="total" step="0.01" placeholder="350.00" value="<?php echo htmlspecialchars($total);?>">
                    <br />
                    <br />

                    <input type="submit" value="Create">

                </form>
            </div>
        </main>

        <?php include("footer.php");?>
    </body>

</html>