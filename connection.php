<?php
  $username = $_POST['username'];
  $email = $_POST['email'];
  $pass = $_POST['passwrd'];
  $conf_pass = $_POST['conf_passwrd'];
  $phone_number = $_POST['phone_number'];


  $con = mysqli_connect("localhost","root","","order_processing");

  if(mysqli_connect_error()){
    echo"Error: ".mysqli_connect_error();
    exit();
  }
        if($pass == $conf_pass){
          $sql = "INSERT INTO clients (username, phone_number, email, pass, reg_time )
            VALUES('$username','$phone_number','$email','$pass',now())";

            if(mysqli_query($con, $sql)){
              echo"Account Created";
              header('location:login.php');
            }
            else{
              echo"Unable to connect, please try again!";
              ?>
              <meta http-equiv="refresh" content="5, signup.php">
              <?php
            }
          }
          else{
            echo" Password not the same, please check and try again";
            ?>
            <meta http-equiv="refresh" content="5, signup.php"><?php
          }

    mysqli_close($con);

?>