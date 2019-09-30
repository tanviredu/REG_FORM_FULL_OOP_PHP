<?php   
  
  require_once('asset/config.php');
  require_once('asset/database.php');
  require_once('asset/reg_backend.php');

  // take the input
  $name = $_POST['name1'];
  $email = $_POST['email1'];
  $mobile = $_POST['mobile1'];
  $address = $_POST['address1'];
  $password = $_POST['password1'];

  // validate the email first
    if($reg->filter_email($email)){
        
        //validate the mobile number
        if($reg->validate_mobile($mobile)){
            
            // now find if the user is existed
            
            $result=$reg->get_user_by_mobile_and_pass($mobile);
            // one mobile one connection
            $data = mysqli_num_rows($result);
            //echo $data;
            if(!$data){
                // add the user here
                $reg->make_registration($name,$email,$mobile,$address,$password);
                echo "Registration complete";
                echo "Welcome ".$name;
            }else{
                echo "User is already exists";
            }
        }else{
            echo "invalid mobile";
        }

    }else{
        echo "Invalid Email";
    }




  ?>