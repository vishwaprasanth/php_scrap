<?php 
$host_name = "localhost";
$host_user = "root";
$host_pass = "";
$host_db = "moneycounting";


              $connect = mysqli_connect($host_name,$host_user,$host_pass)or die("Could not connect: ".mysqli_error());
              $db = mysqli_select_db($connect,$host_db);
   

  $id       = $_GET['id'];    
  echo $id;              
  
  $sql      = "DELETE FROM moimoney WHERE id =$id";
  $query    = mysqli_query($connect,$sql);

  // Redirect browser
  header("Location: checkbox.php?delete=success");
  exit;

 
?>