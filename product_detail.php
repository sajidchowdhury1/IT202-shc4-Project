<?php 
    require_once('database_njit.php');

    $errorCheck = 'SELECT SmarterHomesTechID FROM SmarterHomesTech';
    $statementError = $db->prepare($errorCheck);
    $statementError->execute();
    $error = $statementError->fetchAll();
    $statementError->closeCursor();

    $product_id = filter_input(INPUT_GET, 'product_id', FILTER_VALIDATE_INT);

    if ($product_id === NULL) {
        include("detail_error.php");
        exit();
    }

    $is_valid = true; 

    foreach ($error as $id) {
        if ($id['SmarterHomesTechID'] === $product_id){
            $is_valid = true; 

            $query = "SELECT * FROM SmarterHomesTech WHERE SmarterHomesTechID = :product_id";
            $statement = $db->prepare($query);
            $statement->bindValue(':product_id', $product_id);
            $statement->execute();
            $detail = $statement->fetch();
            $statement->closeCursor();

            $categoryNameQuery = "SELECT * FROM SmarterHomesTechCategories WHERE SmarterHomesTechCategoryID = " 
                            . $detail['SmarterHomesTechCategoryID'];
            $statement2 = $db->prepare($categoryNameQuery);
            $statement2->execute();
            $category = $statement2->fetch();
            $statement2->closeCursor();

            break;
        } else {
            $is_valid = false;
        }
    }

    if ($is_valid === false){
        include("detail_error.php");
        exit();
    }
    
?>

<html>
    <head>
        <title><?php echo $detail['SmarterHomesTechName'];?></title>
        <link rel="stylesheet" href="smart_home.css"/>
        <link rel="shortcut icon" href="images/homeicon.png">
    </head>
    <body>
        <?php include('header.php');?>
        <main id="prodetail">
            <noscript>
                <h2>You need JavaScript enabled to make full use of this website/page</h2>
            </noscript>
            <h2>Details</h2>
            <div id="details">
                <img height="450px" src="<?php echo 'images/'. $product_id . '-modified.jpg'?>" alt="<?php echo $detail['SmarterHomesTechName'] . " product";?>" />
            </div>
            <div id="detail_info">
                <h3><?php echo $detail['SmarterHomesTechName'];?></h3>
                <p>Category: <?php echo $category['SmarterHomesTechCategoryName'];?><p>
                <p>Code: <?php echo $detail['SmarterHomesTechCode'];?><p>
                <p>Price: <?php echo $detail['price'];?><p>
                <p>Color: <?php echo $detail['SmarterHomesTechColor'];?><p>
                <p>Description: <?php echo $detail['description'];?><p>
            </div>
            
        </main>
        <?php include('footer.php');?>
    </body>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script>
        $(document).ready( () => {

            $("img").mouseover( function() {
                const image = $(this).attr('src');
                const new_image = image.replace('-modified.jpg', '.jpg');
                $(this).attr('src', new_image);
            })

            $("img").mouseout( function() {
                const image = $(this).attr('src');
                const new_image = image.replace('.jpg', '-modified.jpg');
                $(this).attr('src', new_image);
            })
        });
    </script>

</html>