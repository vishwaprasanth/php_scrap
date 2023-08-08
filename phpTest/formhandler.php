<?php
   if($_SERVER["REQUEST_METHOD"] == "POST"){

    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $fav_pet = htmlspecialchars($_POST["fav_pet"]);

    if(empty($firstname)) {
        exit();
        header("Location: ../index.php");
    }

    echo"these are the data get from the user";
    echo"<br>";
    echo $firstname;
    echo"<br>";
    echo$lastname;
    echo"<br>";
    echo$fav_pet;

    header("Location: ../index.php"); 
   }
   else{
    header("Location: ../index.php");
   }
?>