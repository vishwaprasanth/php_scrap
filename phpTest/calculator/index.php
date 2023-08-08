<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);
    ?>" method="get">
        <input type="number" name="num01" placeholder="enter the first number">
        <section name="operator" id="operator">
            <option value="add">+</option>
            <option value="subract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </section>
        <input type="number" name="num02" placeholder="enter the second number">
        <br>
        <button>Calculate</button>
    
    </form>
</body>
</html>