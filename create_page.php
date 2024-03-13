<?php
    require_once('database_njit.php');

    $category_id = filter_input(INPUT_POST, 'category_id');
    $product_code = filter_input(INPUT_POST, 'product_code');
    $product_name = filter_input(INPUT_POST, '$product_name');
    $description = filter_input(INPUT_POST, 'description');
    $product_price = filter_input(INPUT_POST, 'product_price', FILTER_VALIDATE_FLOAT);

    // initializting error message variable and succuess message variable

    // validating inputs
    if($product_code === NULL || $product_code === FALSE) {
        $error_message .= 'You have not typed in a code in the appropriate section.<br>';
    } else if (strlen($product_code) > 10 || strlen($product_code) < 0) {
        $error_message .= 'The code length needs to be greater than 0 and less than or equal to 10.<br>';
    }

    if($product_name === NULL || $product_name === FALSE) {
        $error_message .= 'You have not typed in a name in the appropriate section.<br>';
    }

    if($description === NULL || $description === FALSE) {
        $error_message .= 'You have not typed in a description in the appropriate section.<br>';
    }

    if($product_price === NULL || $product_price === FALSE) {
        $error_message .= 'You have not typed in a price in the appropriate section.<br>';
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
    $query = '';

?>