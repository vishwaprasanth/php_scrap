<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <main>
    <form action="phpTest/formhandler .php" method="POST">
      <label for="firstname">Firstname</label>
      <input type="text" id="firstname" name="firstname" placeholder="enter your Firstname">
      <br>

      <label for="lastname">Lastname</label>
      <input type="text" id="lastname" name="lastname" placeholder="enter your Lastname">
      <br>

      <label for="fav_pet">Favourite Pet</label>
      <select name="fav_pet" id="fav_pet">
        <option value="None">None</option>
        <option value="Dog">Dog</option>
        <option value="Cat">Cat</option>
        <option value="Bird">Bird</option>
        <br>    
      </select>
        <br>

      <button type="submit">submit</button>
      
    </form>
  </main>
  
</body>
</html>