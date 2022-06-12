<?php


require("../includes/common.php");

  

  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $price = $_POST['price'];
  $price = mysqli_real_escape_string($con, $price);

  $quantity = $_POST['quantity'];
  $qty = mysqli_real_escape_string($con, $quantity);
    
    $query = "INSERT INTO items( name, price)VALUES('" . $name . "','" . $price . "')";
    
    $item_id = mysqli_insert_id($con);
    
    mysqli_query($con, $query) or die(mysqli_error($con));
    $items_id = mysqli_insert_id($con);
    $_SESSION['id'] = $id;
    $_SESSION['items_id'] = $items_id;
    $queryy = "INSERT INTO stock( item_id,name, quantity)VALUES('" . $items_id . "','" . $name . "','" . $qty . "')";
    mysqli_query($con, $queryy) or die(mysqli_error($con));
    header('location: index.php?view_products');
  
?>