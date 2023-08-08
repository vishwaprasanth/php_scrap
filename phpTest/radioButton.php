<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>radio button acrivities</title>
</head>
<body>
    <h1>hello</h1>
    <form action="newIndex.php" method="post">
        <input type="radio" name="Credit_Card" value="Visa">
        Visa<br>
        <input type="radio" name="Credit_Card" value="MasterCard">
        MasterCard<br>
        <input type="radio" name="Credit_Card" value="American express">
        American express<br>
        <input type="submit"  name="confirm" value="confirm">

    </form>
</body>
</html>
    
<?php
if(isset($_POST["confirm"])){

    $Credit_Card = null;
    
    if(isset($_POST["Credit_Card"])){
        $Credit_Card = $_POST["Credit_Card"];
        
    }
    switch($Credit_Card){
        case "Visa":
            echo"You selected visa";
            break;
        case "MasterCard":
            echo"You selected MasterCard";
            break;
        case "Visa":
            echo"You selected American express";
            break;
        default:
        echo"please select any one";
    }
    // if($Credit_Card == "Visa")
    // {
    //     echo"You selected visa";
    // }
    // elseif($Credit_Card == "MasterCard"){
    //     echo"You selected MasterCard";
    // }
    // elseif($Credit_Card == "American express"){
    //     echo"You selected American express";
    // }
    // else{
    //     echo"please select any one";
    // }
};
    
?>