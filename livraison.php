<?php
// require("common.php");
require("includes/common.php");





if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

// change the status of the items  by the user to 'Confirmed'
$query = "UPDATE user_item SET status=2 WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status= 1 ";
mysqli_query($con, $query) or die($mysqli_error($con));
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>shipping Info | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php 
        // include 'header.php';
require("includes/header.php");
        ?>
        <div class="container-fluid decor_bg" id="content">
            <div class="col-lg-4 col-md-6">
                <img src="img/images.png" style="margin-top: 8em; margin-left:15em;" >
            </div>
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-3 col-md-6">
                        <h2>shipping Info </h2>
                    <form  action="livraison_script.php" method="POST">
                           <!-- <form  action="livraison_script.php?itemsid=' . $item_ids_string . '" method="POST"> -->
                            <div class="form-group">
                            <input class="form-control" placeholder="Name" autofocus="on" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Last Name" autofocus="on" name="lname"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder=" Enter a valid Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true"><?php if(isset($_GET['m1'])) echo $_GET['m1']; ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Number" maxlength="8" size="8" name="number" required = "true"><?php if(isset($_GET['m2'])) echo $_GET['m2']; ?>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Country" name="country" required = "true">
                            </div>
                    <div class="form-group">
                            
                                <!--show table only if there are items added in the cart-->
                                <?php
                                    $sum = 0;$id='';
                                    $user_id = $_SESSION['user_id'];
                                    $query = "SELECT items.price AS Price, items.id As id, items.name AS Name 
                                    FROM user_item
                                    JOIN items ON user_item.item_id = items.id 
                                    WHERE user_item.user_id='$user_id' 
                                    AND 
                        
                        
                                    and `status`=1";
                                     //  $query = "SELECT items.price AS Price, items.id As id, items.name AS Name FROM user_item JOIN items ON user_item.item_id = items.id WHERE user_item.user_id='$user_id' and `status`=1";
                                    $result = mysqli_query($con, $query)or die($mysqli_error($con));
                                    if (mysqli_num_rows($result) >= 1) {
                                ?>
                                
                            <input  type="text" class="form-control"  value="
                                <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id .= $row["id"] . ", ";
                                    
                                    echo "" . "#" . $row["id"] . "" . $row["Name"] . "DT " . $row["Price"] . "";
                                   }
                                   $id = rtrim($id, ", ");
                                   echo "Total  " . $sum . "DT";
                                   
                                
                                ?>
                            " name="details" required = "true">
                                    <?php
                                        } 
                                    ?>
                        
                                        <?php
                                        ?>
                            
                    </div>
                    <!-- <?php        
                        // echo "<button type="submit" name="submit" class="btn btn-primary"><a href='livraison.php?itemsid=" . $id . "' class='btn btn-primary'>Submit</a></button>";
                        echo "<button type='submit' name='submit' class='btn btn-primary'><a href='success.php?itemsid=" . $item_ids_string . "' class='btn btn-primary'>Confirm Order</a></button>";
                    ?>       -->
                    <!-- <div class="form-group">
                    <input  type="text" class="form-control"  value="
                                <?php                                    
                                    // echo "". $row["item_ids_string"] ."";
                                    echo "  " . $item_ids_string . ""
                                ?>" name="details" required = "true">
                    </div>  -->
                             <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        
                     </form>
                                       
                    </div>
                </div>
            </div>
        </div>
        
        <?php include "includes/footer.php"; ?>
    </body>
</html>