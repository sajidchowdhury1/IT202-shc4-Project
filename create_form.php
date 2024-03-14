<?php
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
?>

<html>
    <head>
        <title>Smarter Homes || Create</title>
        <link rel="stylesheet" href="smart_home.css"/>
        <link rel="shortcut icon" href="images/homeicon.png">
    </head>
    <body>
        <?php include('header.php');?>
        <main>
            <h2>Create Product</h2>

            <?php 
                if(isset($error_message)){
                    echo '<p>' . $error_message . '</p>';
                }
            ?>

            <form action="create_process.php" method="post">
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
                <input type="text" name="product_code" placeholder="Ex. light21" value="<?php echo htmlspecialchars($product_code)?>" />
                <br />

                <label>Product Name:</label>
                <input type="text" name="product_name" placeholder="Ex. smart light" value="<?php echo htmlspecialchars($product_name)?>" />
                <br />

                <label for="description">Description:</label>
                <br />
                <textarea name="description" placeholder="this product has..." value="<?php echo htmlspecialchars($description)?>"></textarea>
                <br />

                <label>Product Color:</label>
                <input type="text" name="product_color" placeholder="Ex. red" value="<?php echo htmlspecialchars($product_color)?>" />
                <br />

                <label>Price:</label>
                <input type="number" step="0.01" name="product_price" placeholder="100.00" value="<?php echo htmlspecialchars($product_price)?>">
                <br />

                <input type="submit" value="Submit">

            </form>

            <div>
                <form action="create_form.php">
                    <label>Clear Form:</label>
                    <br />
                    <input type="submit" value="Restart">
                </form>
            </div>

        </main>
        <?php include('footer.php');?>
    </body>
</html>