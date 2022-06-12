<?php

require("../includes/common.php");

// if(!isset($_SESSION['admin_email'])){

// echo "<script>window.open('login.php','_self')</script>";

// }

// else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body style="margin-right: 10em;">
  

<div class="row" style="margin-top: -3em;"><!--  1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

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
</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> View Products

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th>Product ID</th>
<th>Product Title</th>

<th>Product Price</th>
<th>Product sold</th>
<th>Product stock</th>
<th>Product Delete</th>
<th>Product Edit</th>



</tr>

</thead>

<tbody>

<?php

$i = 0;

$get_pro = "select * from items";

$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

$pro_id = $row_pro['id'];

$pro_title = $row_pro['name'];



$pro_price = $row_pro['price'];



$i++;

?>

<tr>

<td><?php echo $pro_id; ?></td>

<td><?php echo $pro_title; ?></td>

<td>$ <?php echo $pro_price; ?></td>

<td>
<?php

$get_sold = "select * from user_item where item_id='$pro_id'";
$run_sold = mysqli_query($con,$get_sold);
$count = mysqli_num_rows($run_sold);
echo $count;
?>
</td>

<td>
<?php

$get_stock = "select * from stock where item_id='$pro_id'";
$run_stock = mysqli_query($con,$get_stock);
$row_stock = mysqli_fetch_array($run_stock);
$quantity = $row_stock['quantity'];
echo $quantity;
?>
</td>
<td>

<a href="index.php?delete_product=<?php echo $pro_id; ?>">


<i class="fa fa-trash-o"> </i> Delete

</a>

</td>

<td>

<a href="index.php?edit_product=<?php echo $pro_id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>

</tr>

<?php } ?>


</tbody>


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->


</body>
</html>

<?php  ?>