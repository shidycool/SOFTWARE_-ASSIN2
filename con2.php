<?php
$username =$_POST['username'];
$pass =$_POST['passwrd'];


$con =mysqli_connect("localhost","root","","order_processing");
if(mysqli_connect_error()){
  echo "failed ".mysqli_connect_error();

}
$sql ="select * from clients where username='$username' && pass='$pass'";

$result = mysqli_query($con,$sql);
  $row =mysqli_fetch_array($result,MYSQLI_ASSOC);
  $id =$row['id'];
  $username =$row['username'];
  $phone_number =$row['phone_number'];
  $email =$row['email'];
  $pass =$row['pass'];

  $count =mysqli_num_rows($result);
  if($count ==1){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['pass'] = $pass;
    $_SESSION['id'] = $id;
    $_SESSION['email'] = $email;
    $_SESSION['phone_number'] = $phone_number;
    header('location:home.php');
  }
  else{
    header('location:login.php');
  }

  
  



?>