<?php
    
    require_once '../../src/models/admin/adminreg.php';     

    function registerUser($username, $address, $phoneNO, $email, $password, $usertype ){  

        $check_Email = checkEmail($email);

        if($check_Email){
            echo "<script>alert('Email is already in use. Please choose a different email.');";
            echo "window.location.href='/public/client/register.php';</script>";
            exit;     
        }
        else {
            $result = insertUser($username, $address, $phoneNO, $email, $password, $usertype);    

            if($result){
                ob_start();
                sleep(2);
                echo "<script>window.location.href='/public/admin/adminlog.php';</script>";
                exit;        
            }
            else{
                echo "<script>alert('Register Fail Try Again Later...');";
                echo "window.location.href='/public/client/register.php';</script>";
                exit;     
            }    
        }  
    }

?>