<!-- Sajid Chowdhury Feb 26, 2024 IT202-006 Phase 2 shc4@njit.edu-->
<?php
    require_once('database_njit.php');

    // sql statement from SmarterHomesTech
    $query = 'SELECT SmarterHomesTechID, SmarterHomesTechCategoryID, SmarterHomesTechCode, SmarterHomesTechName, description, SmarterHomesTechColor, price
            FROM SmarterHomesTech
            ORDER BY SmarterHomesTechCategoryID';
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
            <?php 
                if(isset($product_message)){
                    echo '<p style="color: red; font-weight: bold; font-size: 15px; text-align: center;">' . $product_message . '</p>';
                }
            ?>
            <!-- table of the products-->
            <div class="products">
                <table>
                    <tr>
                        <th>Category</th>
                        <th>Code</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <?php if($_SESSION['is_valid_admin']) {?>
                        <th>Delete</th>
                        <?php } ?>
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
                        <td><?php echo $product['price'];?></td>
                        <?php if($_SESSION['is_valid_admin']) {?>
                        <td>
                            <form action="delete_process.php" method="post">
                                <input type="hidden" name="sh_id" value="<?php echo $product['SmarterHomesTechID']; ?>">
                                <input type="hidden" name="sh_category_id" value="<?php echo $product['SmarterHomesTechCategoryID']; ?>">
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </main>
        <?php include('footer.php');?>
    </body>
</html>