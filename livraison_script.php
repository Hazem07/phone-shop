<?php
require("includes/common.php");

// $user_id = $_SESSION['user_id'];
// $item_ids_string = $_GET['itemsid'];


  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);
 
  $lname = $_POST['lname'];
  $lname = mysqli_real_escape_string($con, $lname);

  $email = $_POST['e-mail'];
  $email = mysqli_real_escape_string($con, $email);


  $number = $_POST['number'];
  $number = mysqli_real_escape_string($con, $number);
  
  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address);

  $city = $_POST['city'];
  $city = mysqli_real_escape_string($con, $city);

  $country = $_POST['country'];
  $country = mysqli_real_escape_string($con, $country);
  
  $details = $_POST['details'];
  $details = mysqli_real_escape_string($con, $details);

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[259][0-8]{7}$/";

//Checking whether email id already used for registration
  // $query = "SELECT * FROM users";
  // $result = mysqli_query($con, $query)or die($mysqli_error($con));
  // $num = mysqli_num_rows($result);
  
  // if ($num != 0) {
  //   $m = "<span class='red'>Email Already Exists</span>";
  //   header('location: livraison.php?m1=' . $m);
  // } else if (!preg_match($regex_email, $email)) {
  //   $m = "<span class='red'>Not a valid Email Id</span>";
  //   header('location: livraison.php?m1=' . $m);
  // } else if (!preg_match($regex_num, $number) {
  //   $m = "<span class='red'>Not a valid phone number</span>";
  //   header('location: livraison.php?m2=' . $m);
  // } else {
    
    $query = "INSERT INTO livraison(name, lname, email, number, address, city, country, details)VALUES('" . $name . "','" . $lname . "','" . $email . "','" . $number . "','" . $address . "','" . $city . "','" . $country . "','" . $details . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $livraison_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;

    
                        

                              
                        
                        
                    
    header('location: success.php');
    
    // header('location: success.php?itemsid=".  $livraison_id ."');
?>