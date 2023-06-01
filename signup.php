<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="signup.css">
  <title>Signup</title>
</head>
<body>
<div class="container">
    <h3>Sign Up</h3>
    <form action="connection.php" method="POST">
      <fieldset>
        
        <div class="main- user-info">
          <div class="user-input-box">
        <label for="username">Username: </label><br>
        <input type="text"placeholder="Full name" name="username" required>
      </div>
      </div>
      </fieldset>

      <fieldset>
        <label for="email">Email: </label><br>
        <input type="email"placeholder="email@gmail.com" name="email" required>
      </fieldset>

      <fieldset>
        <label for="phone_number">Phone number </label><br>
        <input type="tel"placeholder="+25471234567" name="phone_number" required>
      </fieldset>

      <fieldset>
        <label for="passwrd">Password: </label><br>
        <input type="password"placeholder="password" name="passwrd" required>
      </fieldset>
      
      <fieldset>
        <label for="conf_passwrd">Confirm password: </label><br>
        <input type="password"placeholder="password" name="conf_passwrd" required>
      </fieldset>

      <button type="submit">SUBMIT</button>
    </form>
</div>
</body>
</html>