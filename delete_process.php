<?php
    // Sajid Chowdhury Mar 27, 2024 IT202-006 Phase 4 shc4@njit.edu
    require_once('database_njit.php');
    
    $sh_id = filter_input(INPUT_POST, "sh_id");
    $sh_category_id = filter_input(INPUT_POST, "sh_category_id");

    if($sh_id != FALSE && $sh_category_id != FALSE) {
        $query = 'DELETE FROM SmarterHomesTech WHERE SmarterHomesTechID = :sh_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':sh_id', $sh_id);
        $success = $statement->execute();
        $statement->closeCursor();
        $product_message = "You have deleted an item from the product table";
    }
    include('product.php');
?>