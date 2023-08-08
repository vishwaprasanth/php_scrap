<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $host_name = "localhost";
    $host_user = "root";
    $host_pass = "";
    $host_db = "moneycounting";
                  $connect = mysqli_connect($host_name,$host_user,$host_pass);
                  $db = mysqli_select_db($connect,$host_db);

                  $id  = $_GET['id'];
                  $sql = "select * from moimoney where id=$id";
                  $query = mysqli_query($connect,$sql); 
                  $row = $query->fetch_assoc();

    if(isset($_POST['submit'])){
        $Name = $_POST['Name'];
        $Place = $_POST['Place'];
        $Number = $_POST['Number'];
        $Amount = $_POST['Amount'];

        $sql="update moimoney set `name` = '$Name', `location` = '$Place', `number` = '$Number', `amount` = '$Amount' WHERE id=$id";
                    $query = mysqli_query($connect,$sql);
                    header("Location: checkbox.php?edit=success");
                    exit;

    }

?>
    <form action="" id="submit" name="submit" method="post">
        Name: <input type="text" name="Name" value="<?php echo $row['name']; ?>">
        <br>
        Place: <input type="text" name="Place" value="<?php echo $row['location']; ?>">
        <br>
        Number : <input type="number" name="Number" value="<?php echo $row['number']; ?>">
        <br>
        Amount : <input type="number" name="Amount" value="<?php echo $row['amount']; ?>">
        <br>
        <input type="submit" name="submit" id="submit">
        <br>
    </form>
</body>
</html>

