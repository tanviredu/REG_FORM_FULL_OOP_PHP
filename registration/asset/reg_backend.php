<?php 
    require_once('config.php');
    require_once('database.php');
    require_once('function.php');

    class Registration{

        //this is for mobile validation
        public function validate_mobile($mobile){
            return preg_match('/^[0-9]{11}+$/', $mobile);
        }

        public function filter_email($email){
            // sanitaize the email
            $email =  filter_var($email,FILTER_SANITIZE_EMAIL);
            // now validate
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                return false;
            }else{
                return true;
            }

        }
        // check if the user is already registered
        public function get_user_by_mobile_and_pass($phone){
            global $connection;
            $res=$connection->query("SELECT user_name from user WHERE phone={$phone}");
            //$connection->get_all_info($res);
            return $res;
        }

        public function make_registration($name,$email,$mobile,$address,$password){
            // make the sql
            global $connection;
            $sql = "INSERT INTO user(user_name,email,phone,password,address) values ('$name', '$email','$mobile','$password','$address')";
            $result = $connection->query($sql);
            // confirm it
            if($connection->confirm_query($result)){
                return true;
            }else{
                return false;
            }


        }
    }
    $reg = new Registration;
    //$log->get_user_by_mobile_and_pass('1234','1234');

    

?>