<?php
    // Sajid Chowdhury Mar 18, 2024 IT202-006 Phase 3 shc4@njit.edu
    //print_r($_POST);
    require_once('database_njit.php');

    $category_id = filter_input(INPUT_POST, 'category_id');
    $product_code = filter_input(INPUT_POST, 'product_code');
    $product_name = filter_input(INPUT_POST, 'product_name');
    $description = filter_input(INPUT_POST, 'description');
    $product_color = filter_input(INPUT_POST, 'product_color');
    $product_price = filter_input(INPUT_POST, 'product_price', FILTER_VALIDATE_FLOAT);

    // query for checking codes
    $query = 'SELECT SmarterHomesTechCode
            FROM SmarterHomesTech';
    $statement = $db->prepare($query);
    $statement->execute();
    $codes = $statement->fetchAll();
    $statement->closeCursor();

    // initializting error message variable and succuess message variable
    $error_message = '';
    $success_message = '';

    // validating inputs
    if (strlen($product_code) > 10 || strlen($product_code) <= 0) {
        $error_message .= 'The code length needs to be greater than 0 and less than or equal to 10.<br>';
    }
    foreach ($codes as $code) :
        if ($product_code === $code['SmarterHomesTechCode']){
            $error_message .= 'This code is already in the database, try something else.<br>';
        }
    endforeach;

    if($product_name === '') {
        $error_message .= 'You need to type in a name.<br>';
    }

    if ($description === '') {
        $error_message .= 'There needs to be a description for the product.<br>';
    }

    if (strlen($product_color) <= 0) {
        $error_message .= 'You need to type in a color.<br>';
    }

    if($product_price === FALSE) {
        $error_message .= 'You have not typed in a price.<br>';
    } else if ($product_price > 1000.00) {
        $error_message .= 'The price cannot be above $1000.<br>';
    } else if ($product_price < 0 ) {
        $error_message .= 'The price cannot be a negative number.<br>';
    }

    // error message handling
    if($error_message != ''){
        include("create_form.php");
        exit();
    }

    // sql query
    $insertQuery = 'INSERT INTO SmarterHomesTech (SmarterHomesTechCategoryID, SmarterHomesTechCode, SmarterHomesTechName, description, SmarterHomesTechColor, price, dateCreated)
                    VALUES (:category_id, :product_code, :product_name, :description, :product_color, :product_price, NOW())';
    $statement2 = $db->prepare($insertQuery);
    $statement2->bindValue(':category_id',$category_id);
    $statement2->bindValue(':product_code',$product_code);
    $statement2->bindValue(':product_name',$product_name);
    $statement2->bindValue(':description',$description);
    $statement2->bindValue(':product_color',$product_color);
    $statement2->bindValue(':product_price',$product_price);
    $statement2->execute();
    $statement2->closeCursor();

    $success_message .= 'Item has been added in succuessfully.<br>';

    if ($success_message != ''){
        include("create_form.php");
        exit();
    }

?>