<?php

// if(!isset($_SESSION['admin_email'])){

// echo "<script>window.open('login.php','_self')</script>";

// }

// else {
require("../includes/common.php");
?>

<?php

if(isset($_GET['edit_product'])){

$edit_id = $_GET['edit_product'];

$get_p = "select * from items where id='$edit_id'";

$run_edit = mysqli_query($con,$get_p);

$row_edit = mysqli_fetch_array($run_edit);

$p_id = $row_edit['id'];

$p_title = $row_edit['name'];

$p_price = $row_edit['price'];

$get_s = "select * from stock where item_id='$edit_id'";

$run_edits = mysqli_query($con,$get_s);

$row_edits = mysqli_fetch_array($run_edits);

$p_qty = $row_edits['quantity'];


}


?>


<!DOCTYPE html>

<html>

<head>

<title> Edit Products </title>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#product_desc,#product_features' });</script>

</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->
<ol class="breadcrumb"><!-- breadcrumb Starts -->
  <li class="active">
    <a href="dashboard.php">
    <i class="fa fa-dashboard" style="padding-left:3em; margin-top:2em; margin-bottom:2em;"></i> Dashboard 
    </a>
  </li> 
  <li class="active">
    <a href="logout.php">
    <i class="fa fa-fw fa-power-off"> </i> Log Out
    </a>
  </li>
    <li>
    <a href="view_users.php">
    <i class="fa fa-fw fa-briefcase"></i> 
    Admins </a>
  </li>
  <li class="active">
    <a href="insert_user.php">
    <i class="fa fa-fw fa-edit"> </i> Add admin  
    </a>
  </li>
  <li class="active"><!-- about us li Starts -->
    <a href="index.php?user_profile=<?php echo $admin_id; ?>">
    <i class="fa fa-fw fa-edit"></i> Edit 
    </a>
  </li>

  <li>
    <a href="index.php?insert_product">
    <i class="fa fa-fw fa-table"></i> 
    Insert Products </a>
  </li>
</ol>
<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / Edit Products

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Edit Products

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Title </label>

<div class="col-md-6" >

<input type="text" name="product_title" class="form-control" required value="<?php echo $p_title; ?>">

</div>

</div><!-- form-group Ends -->


<!--  -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Price </label>

<div class="col-md-6" >

<input type="text" name="product_price" class="form-control" required value="<?php echo $p_price; ?>" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Quantity </label>

<div class="col-md-6" >

<input type="number" name="product_quantity" class="form-control" required value="<?php echo $p_qty; ?>" >

</div>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="update" value="Update Product" class="btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends --> 




</body>

</html>

<?php

if(isset($_POST['update'])){

$product_title = $_POST['product_title'];

$product_price = $_POST['product_price'];



// $status = "product";
$product_quantity= $_POST['product_quantity'];


$update_product = "update items set name='$product_title', price='$product_price' WHERE id='$edit_id'";

$run_product = mysqli_query($con,$update_product);
$updat_product = "update stock set name='$product_title', quantity='$product_quantity' WHERE item_id='$edit_id'";

$run_product = mysqli_query($con,$updat_product);

if($run_product){

echo "<script> alert('Product has been updated successfully') </script>";

echo "<script>window.open('index.php?view_products','_self')</script>";

}

}

?>

<?php  ?>
