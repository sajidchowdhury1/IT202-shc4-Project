<!-- Sajid Chowdhury Feb 26, 2024 IT202-006 Phase 1 shc4@njit.edu-->
<?php
    require_once('database_njit.php');

    // sql statement from SmarterHomesTech
    $query = 'SELECT SmarterHomesTechCategoryID, SmarterHomesTechCode, SmarterHomesTechName, description, SmarterHomesTechColor, price
            FROM SmarterHomesTech';
    $statement = $db->prepare($query);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    
    // sql statement from SmarterHomesTechCategories
    $queryCategories = 'SELECT SmarterHomesTechCategoryID, SmarterHomesTechCategoryName
                        FROM SmarterHomesTechCategories';
    $statement2 = $db->prepare($queryCategories);
    $statement2->execute();
    $categoryName = $statement2->fetchAll();
    $statement2->closeCursor();
    
?>

<html>
    <head>
        <title>Smarter Homes || Products</title>
        <link rel="stylesheet" href="smart_home.css"/>
        <link rel="shortcut icon" href="images/homeicon.png">
    </head>
    <body>
        <?php include('header.php');?>
        <main class="product">
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
                    <td>
                        <?php 
                            foreach($categoryName as $name) :
                            if($product['SmarterHomesTechCategoryID'] === $name['SmarterHomesTechCategoryID']){
                                echo $name['SmarterHomesTechCategoryName'];
                            }
                            endforeach;    
                        ?>
                    </td>
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