<?php ?>

<html>
    <head>
        <title>Smarter Homes || Shipping</title>
        <link href="smarthome.css" rel="stylesheet">
    </head>
    <?php include("header.php");?>
    
    <main>
        <h2>Smarter Homes Shipping</h2>
        <form action="shipping_label.php" method="post">

            <!--error message -->

            <!-- info for the to address -->
            <label>First Name:</label>
            <input type="text" name="first_name" />
            <br />

            <label>Last Name:</label>
            <input type="text" name="last_name" />
            <br />

            <label>Street Address:</label>
            <input type="text" name="street_address_line1" placeholder="Ex. 123 Maple Ave"/>
            <br />

            <label>City:</label>
            <input type="text" name="city" placeholder="Ex. Newark"/>
            <br />

            <label>State (Initial):</label>
            <input type="text" name="state" maxlength="2" placeholder="Ex. NJ"/>
            <br />

            <label>Zip Code:</label>
            <input type="number" min="0" name="zip" maxlength="5" placeholder="Ex. 12345" />
            <br />

            <label>Ship Date:</label>
            <input type="date" name="shipdate" />
            <br />

            <label>Order Number:</label>
            <input type="number" name="order_number" placeholder="2313455345"/>
            <br />

            <label>Dimension:<br />Length:</label>
            <input type="number" name="length" min="0" placeholder="20"/>
            <br />

            <label>Width:</label>
            <input type="number" name="width" min="0" placeholder="20"/>
            <br />

            <label>Height</label>
            <input type="number" name="height" min="0" placeholder="20"/>
            <br />

            <label>Total Value: $</label>
            <input type="number" name="total" min="0" placeholder="350">
            <br />

            <input type="submit" value="Create">

        </form>
    </main>

    <?php include("footer.php");?>

</html>