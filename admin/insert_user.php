<?php

require("../includes/common.php");
require("index.php");
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
<body style="margin-left: 20em;margin-right: 20em;">
  

<div class="row" style="margin-top: -4em;" ><!-- 1  row Starts -->

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

<i class="fa fa-money fa-fw" ></i> Insert User

</h3>


</div><!-- panel-heading Ends -->




<form  action="insert_script.php" method="POST">
<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label">User Email: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<!-- <input type="text" name="email" class="form-control" required> -->
<input type="email" class="form-control"  placeholder=" Enter a valid Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true"><?php if(isset($_GET['m1'])) echo $_GET['m1']; ?>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->
</br>
</br></br>
<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">User Password: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->


<input type="password" class="form-control" placeholder="Password" title="Password must be 8 characters including 1 uppercase letter, 1 lowercase letter and numeric characters"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password" required = "true">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->




<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6"><!-- col-md-6 Starts -->

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

<!-- <?php

if(isset($_POST['submit'])){

// $admin_name = $_POST['admin_name'];

$admin_email = $_POST['email'];

$admin_password = $_POST['password'];



$insert_admin = "insert into admin (id,email,password) values ('$admin_email','$admin_password')";

$run_admin = mysqli_query($con,$insert_admin);


if($run_admin){

echo "<script>alert('One User Has Been Inserted successfully')</script>";

echo "<script>window.open('index.php?view_users','_self')</script>";

}


}


?> -->


</body>
</html>
<?php   ?>