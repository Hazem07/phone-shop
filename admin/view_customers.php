<?php

// if(!isset($_SESSION['admin_email'])){

// echo "<script>window.open('login.php','_self')</script>";

// }

// else {

require("../includes/common.php");
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
</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"></i> View Customers

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->


<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>Customer No:</th>
<th>Customer Name:</th>
<th>Customer Email:</th>

<th>Customer Country:</th>
<th>Customer City:</th>
<th>Customer Phone Number:</th>
<th>Customer Delete:</th>


</tr>

</thead><!-- thead Ends -->


<tbody><!-- tbody Starts -->

<?php

$i=0;

$get_c = "select * from users";

$run_c = mysqli_query($con,$get_c);

while($row_c=mysqli_fetch_array($run_c)){

$c_id = $row_c['id'];

$c_name = $row_c['name'];

$c_email = $row_c['email'];



$c_country = $row_c['address'];

$c_city = $row_c['city'];

$c_contact = $row_c['contact'];

$i++;




?>

<tr>

<td><?php echo $c_id; ?></td>

<td><?php echo $c_name; ?></td>

<td><?php echo $c_email; ?></td>



<td><?php echo $c_country; ?></td>

<td><?php echo $c_city; ?></td>

<td><?php echo $c_contact; ?></td>

<td>

<a href="index.php?customer_delete=<?php echo $c_id; ?>" >

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