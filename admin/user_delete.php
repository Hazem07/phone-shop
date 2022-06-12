<?php

// if(!isset($_SESSION['admin_email'])){

// echo "<script>window.open('admin.php','_self')</script>";

// }

// else {


?>

<?php

if(isset($_GET['user_delete'])){

$delete_id = $_GET['user_delete'];

$delete_user = "delete from admin where id='$delete_id'";

$run_delete = mysqli_query($con,$delete_user);

if($run_delete){

echo "<script>alert('One User Has Been Deleted')</script>";

echo "<script>window.open('dashboard.php','_self')</script>";

}


}


?>

<?php  ?>