<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="stylesheet" href="signup.css">
</head>
<body>
  <div class="container">
  <h3>Log In</h3>

  <form action="con2.php" method="POST">
  
<fieldset>
      <label for="username">Username: </label><br>
      <input type="text" name="username">
    </fieldset>

    <fieldset>
      <label for="passwrd">Password: </label><br>
      <input type="password" name="passwrd">
    </fieldset>

    <button type="submit">SUBMIT</button>

  </form>
  </div>
</body>
</html>
