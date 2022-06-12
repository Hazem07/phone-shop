<?php



// if(!isset($_SESSION['admin_email'])){

// echo "<script>window.open('login.php','_self')</script>";

// }

// else {

?>

<?php


if(isset($_GET['user_profile'])){

$edit_id = $_GET['user_profile'];

$get_admin = "select * from admin where id='$edit_id'";

$run_admin = mysqli_query($con,$get_admin);

$row_admin = mysqli_fetch_array($run_admin);

$admin_id = $row_admin['id'];



$admin_email = $row_admin['email'];

$admin_pass = $row_admin['password'];





}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="margin-right: 15em;">
    

<div class="row" style="margin-top: -2.5em;"><!-- 1  row Starts -->

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

</div><!-- 1  row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" >

<i class="fa fa-money fa-fw" ></i> Edit Profile

</h3>


</div><!-- panel-heading Ends -->




<form action="user_p_script.php" method="POST">



<div class="form-group">
                            <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required = "true">
                        </div>
<div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password" required = "true">
                        </div>
<div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
                        </div>
 <button type="submit" class="btn btn-primary">Change</button>
                       <?php if(isset($_GET['error'])) echo $_GET['error']; ?>
                    

</form></body>
</html>