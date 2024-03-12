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

            <form action="create_page.php" method="post">
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
                <input type="text" name="product_code" placeholder="Ex. light21" value="" />
                <br />

                <label>Product Name:</label>
                <input type="text" name="product_name" placeholder="Ex. smart light" value="" />
                <br />

                <label for="description">Description:</label>
                <br />
                <textarea name="description" placeholder="this product has..." value=""></textarea>
                <br />

                <label>Price:</label>
                <input type="number" step="0.01" name="product_price" placeholder="100.00" value="">
                <br />

                <input type="submit" value="Submit">

            </form>

        </main>
        <?php include('footer.php');?>
    </body>
</html>