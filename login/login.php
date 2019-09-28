<?php
  require_once('asset/config.php');
  require_once('asset/database.php');
  require_once('asset/log_backend.php');
  $phone = $_POST['mobile1'];
  $password = $_POST['password1'];

  // here we do the validation
  if($log->validate_mobile($phone)){
      // if it is validated then check the database
     $result=$connection->query("SELECT * FROM user WHERE phone='$phone' AND password='$password'");
     $data = mysqli_num_rows($result);
     if($data){
       echo "Successfully Logged in...";
     }else{
       echo "Mobile or Password wrong";
     }

  }else{
    echo "Enter Proper Phone Number";
  }
?>


