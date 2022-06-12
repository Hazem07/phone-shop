<!--establish the connection to database, and start the session-->
<?php

$con = mysqli_connect("localhost", "root", "", "store")or die($mysqli_error($con));
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
//connexion avec PDO

//     $host = 'localhost';
//     $dbname = 'store';
//     $username = 'root';
//     $password = '';
 
//   try {
  
//     $con = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
//     echo "Connecté à $dbname sur $host avec succès.";
    
//   } catch (PDOException $e) {
  
//     die("Impossible de se connecter à la base de données $dbname :" . $e->getMessage());
    
//   }
?>