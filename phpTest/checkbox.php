<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
    $host_name = "localhost";
    $host_user = "root";
    $host_pass = "";
    $host_db = "moneycounting";
                  $connect = mysqli_connect($host_name,$host_user,$host_pass);
                  $db = mysqli_select_db($connect,$host_db);

    if(isset($_POST['submit'])){
        $Name = $_POST['Name'];
        $Place = $_POST['Place'];
        $Number = $_POST['Number'];
        $Amount = $_POST['Amount'];

        //insert query
        $sql = "insert into moimoney (`name`,`location`,`number`,`amount`) values ('$Name','$Place','$Amount','$Number')";
        $query = mysqli_query($connect, $sql) or die(mysqli_error());

        //select query
        
              

    }
    $sql = "SELECT * FROM moimoney";
              $query = mysqli_query($connect, $sql);

?>
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
    
<table border=1 style="width:100%;">
    <thead>
        <tr>
            <th style="padding:10px;">Name</th>        
            <th style="padding:5px;">location</th>
            <th style="padding:5px;">Number</th>
            <th style="padding:5px;">Amount</th>
            <th style="padding: 5px;">Update</th>
            <th style="padding: 5px;">Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php
while($row = mysqli_fetch_assoc($query))
{
?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['location']; ?></td>
            <td><?php echo $row['number']; ?></td>
            <td><?php echo $row['amount']; ?></td>
            <td><a href="update.php?id=<?php echo $row['id']; ?>">Edit</a></td>
            <td><a href="checkdelete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
        </tr>

    <?php
}
?>
</tbody>
</table>
</body>
</html>

