<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trail</title>
</head>
<body>
<form action="" id="submit" name="submit" method="post">
        Name: <input type="text" name="Name">
        <br>
        Place: <input type="text" name="Place">
        <br>
        Number : <input type="number" name="Number">
        <br>
        Amount : <input type="number" name="Amount">
        <br>
        <input type="submit" name="submit" id="submit">
        <br>
    </form>
</body>
</html>

<?php 
    $host_name = "localhost";
    $host_user = "root";
    $host_pass = "";
    $host_db ="counting";

    $connect = mysqli_connect($host_name,$host_user,$host_pass);
                $db = mysqli_select_db($connect,$host_db);

                
                if(isset($_POST['submit'])){
                    $Name = $_POST['Name'];
                    $Place = $_POST['location'];
                    $Number = $_POST['Number'];
                    $Amount = $_POST['Amount'];

                    //insert query
                    $sql = "insert into money (`name`,`location`,`amount`,`number`)values ('$Name','$Place','$Amount','$Number')";
                    $query = mysqli_query($connect,  $sql) or die(mysqli_error());

                    //select query
                    $sql = "SELECT * FROM demo_state";
                    $query = mysqli_query($connect, $sql);
                }
    ?>