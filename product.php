<?php
    require_once('database_njit.php');

    // sql statement
    $query = 'SELECT SmarterHomesTechCategoryID, SmarterHomesTechCode, SmarterHomesTechName, description, SmarterHomesTechColor, price
            FROM SmarterHomesTech';
    $statement = $db->prepare($query);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    

    
?>

<html>
    <head>
        <title>Smarter Homes || Products</title>
        <link rel="stylesheet" href="smart_home.css"/>
        <link rel="shortcut icon" href="images/homeicon.png">
    </head>
    <body>
        <?php include('header.php');?>
        <main>
            <h2>Products</h2>

            <!-- table of the products-->
            <table>
                <tr>
                    <th>Category</th>
                    <th>Code</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Color</th>
                    <th>Price</th>
                </tr>
                <?php foreach($products as $product) : ?>
                <tr>
                    <td></td>
                    <td><?php echo $product['SmarterHomesTechCode'];?></td>
                    <td><?php echo $product['SmarterHomesTechName'];?></td>
                    <td><?php echo $product['description'];?></td>
                    <td><?php echo $product['SmarterHomesTechColor'];?></td>
                    <td><?php echo $product['price'];?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </main>
        <?php include('footer.php');?>
    </body>
</html>