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
<body style="margin-right: 11em;">
  

<div class="row" style="margin-top: -3em;"><!-- 1 row Starts -->

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
</ol><!-- breadcrumb Ends  --->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"></i> View Orders

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>Order No:</th>
<th>Customer Email:</th>
<th>Customer No:</th>
<th>Product Title:</th>

<th>Order Date:</th>

<th>Order Status:</th>
<th>Delete Order:</th>


</tr>

</thead><!-- thead Ends -->


<tbody><!-- tbody Starts -->

<?php

$i = 0;

$get_orders = "select * from user_item";

$run_orders = mysqli_query($con,$get_orders);

while ($row_orders = mysqli_fetch_array($run_orders)) {

$order_id = $row_orders['id'];

$c_id = $row_orders['user_id'];



$product_id = $row_orders['item_id'];





$order_status = $row_orders['status'];

$get_products = "select * from items where id='$product_id'";

$run_products = mysqli_query($con,$get_products);

$row_products = mysqli_fetch_array($run_products);

$product_title = $row_products['name'];


$get_customer = "select * from users where id='$c_id'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_email = $row_customer['email'];

$customer_contact = $row_customer['contact'];

$i++;

?>

<tr>

<td><?php echo $order_id; ?></td>

<td>
    <?php echo $customer_email; ?>

 </td>

<td bgcolor="yellow" ><?php echo $customer_contact; ?></td>

<td><?php echo $product_title; ?></td>





<td>
<?php

$get_customer_order = "select * from user_item where id='$order_id'";

$run_customer_order = mysqli_query($con,$get_customer_order);

$row_customer_order = mysqli_fetch_array($run_customer_order);

$order_date = $row_customer_order['date_time'];



echo $order_date;

?>
</td>



<td>
<?php

if($order_status=='Added to cart'){

echo $order_status='Added to cart';

}
else{

echo $order_status='Confirmed';

}


?>
</td>

<td>

<a href="index.php?order_delete=<?php echo $order_id; ?>" >

<i class="fa fa-trash-o" ></i> Delete

</a>

</td>


</tr>

<?php } ?>

</tbody><!-- tbody Ends -->

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

</body>
</html>
<?php  ?>