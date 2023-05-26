<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
</head>
<body>
    <h3>Order processing system</h3>
    <form action="connection.php" method="POST">
      <fieldset>
        <label for="username">Username: </label><br>
        <input type="text" name="username" required>
      </fieldset>

      <fieldset>
        <label for="email">Email: </label><br>
        <input type="email"placeholder="email@gmail.com" name="email" required>
      </fieldset>

      <fieldset>
        <label for="passwrd">Password: </label><br>
        <input type="password"placeholder="username" name="passwrd" required>
      </fieldset>
      
      <fieldset>
        <label for="conf_passwrd">Confirm password: </label><br>
        <input type="password" name="conf_passwrd" required>
      </fieldset>

      <button type="submit">SUBMIT</button>
    </form>
</body>
</html>