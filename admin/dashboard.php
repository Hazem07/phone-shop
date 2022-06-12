<?php



// if(!isset($_SESSION['admin_email'])){

// echo "<script>window.open('login.php','_self')</script>";

// }

// else {




include("index.php");
//  include("includes/sidebar.php");

?>
<div> <?php require ("includes/nav.php") ?> </div>

</br>


</br>
</br>
</br>
<div class="row" style="margin-top: -12em;"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<h1 class="page-header" style="padding-left:1.25em;">Dashboard</h1>

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

</div><!-- 1 row Ends -->


<div class="row" style="padding-left:23em;"><!-- 2 row Starts -->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-primary"><!-- panel panel-primary Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-tasks fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_products; ?> </div>

<div>Products</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?view_products">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-green"><!-- panel panel-green Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-comments fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_customers; ?> </div>

<div>Customers</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?view_customers">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-green Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->




<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-red"><!-- panel panel-red Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-support fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_pending_orders; ?> </div>

<div>Orders</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?view_orders">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-red Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


</div><!-- 2 row Ends -->

<div class="row" style="padding-left:23em;" ><!-- 3 row Starts -->

<div class="col-lg-8" ><!-- col-lg-8 Starts -->

<div class="panel panel-primary" ><!-- panel panel-primary Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> New Orders

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>
<th>Order No:</th>
<th>Customer Email:</th>
<th>Customer No:</th>
<th>Product ID:</th>
<th>Product Qty:</th>
<th>Product Size:</th>
<th>Status:</th>


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


$i++;

?>

<tr>

<td><?php echo $order_id; ?></td>

<td>
<?php 

$get_customer = "select * from users where id='$c_id'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_email = $row_customer['email'];
$customer_contact = $row_customer['contact'];

echo $customer_email;

 ?>
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

<!-- <td>$<?php echo $due_amount; ?></td> -->

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

<div class="text-right" ><!-- text-right Starts -->

<a href="index.php?view_orders" >

View All Orders <i class="fa fa-arrow-circle-right" ></i>

</a>

</div><!-- text-right Ends -->


</div><!-- panel-body Ends -->

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-8 Ends -->

<div class="col-md-4"><!-- col-md-4 Starts -->

<div class="panel"><!-- panel Starts -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="thumb-info mb-md"><!-- thumb-info mb-md Starts -->

<!-- <img src="admin_images/<?php echo $admin_image; ?>" class="rounded img-responsive"> -->

<div class="thumb-info-title"><!-- thumb-info-title Starts -->

<span class="thumb-info-inner"> <?php echo $admin_id; ?> </span>

<!-- <span class="thumb-info-type"> <?php echo $admin_job; ?> </span> -->

</div><!-- thumb-info-title Ends -->

</div><!-- thumb-info mb-md Ends -->

<div class="mb-md"><!-- mb-md Starts -->

<div class="widget-content-expanded"><!-- widget-content-expanded Starts -->

<i class="fa fa-user"></i> <span>Email: </span> <?php echo $admin_email; ?>  <br>


</div><!-- widget-content-expanded Ends -->

<hr class="dotted short">


<p>
<!-- <?php echo $admin_about; ?> -->
</p>

</div><!-- mb-md Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel Ends -->

</div><!-- col-md-4 Ends -->

</div><!-- 3 row Ends -->

<?php  ?>