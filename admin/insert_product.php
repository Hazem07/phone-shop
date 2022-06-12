<?php

require("../includes/common.php");
// require("index.php");
// if(!isset($_SESSION['admin_email'])){

// echo "<script>window.open('admin.php','_self')</script>";

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
<body style="margin-right: 21em;">
  

<div class="row" style="margin-top: -2em;" ><!-- 1  row Starts -->

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



</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1  row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" style="padding-bottom: 6em;"><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" >

<i class="fa fa-money fa-fw" ></i> Insert Product

</h3>


</div><!-- panel-heading Ends -->




<form  action="insert_p_script.php" method="POST">
  
<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label">Name: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->


<input type="text" class="form-control"  name="name" required = "true">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->
</br>
</br></br>
<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Price: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->


<input type="text" class="form-control"  name="price" required = "true">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->
</br>
</br></br>
<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">quantity: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->


<input type="number" class="form-control"  name="quantity" required = "true">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6"><!-- col-md-6 Starts -->
</br>
<!-- <input type="submit" name="submit" value="Insert User" class="btn btn-primary form-control"> -->
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->


</div><!-- 2 row Ends -->


</body>
</html>

<?php   ?>



