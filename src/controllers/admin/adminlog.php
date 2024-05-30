<?php

    session_start();
    require_once '../../src/models/admin/adminlog.php';   

    function loginUser($email, $password){
        
        $user = userLogin($email, $password);

        if(mysqli_num_rows($user) == 1){

            $userData = mysqli_fetch_assoc($user);

            $_SESSION['userId'] = $userData['user_id'];
            $_SESSION['userName'] = $userData['name'];  
            $_SESSION['userAddress'] = $userData['address'];   
            $_SESSION['userPhoneNo'] = $userData['phone_no'];   
            $_SESSION['userEmail'] = $userData['email'];      

            if($userData['user_type'] == 'client'){
                
                echo "<script>window.location.href='/public/client/home.php';</script>";
            }
            elseif($userData['user_type'] == 'admin'){

                echo "<script>window.location.href='/public/admin/adminPage.php';</script>";
            }
            else{
                echo "<script>alert('Invalid email or password');";
                echo "window.location.href='/public/client/Login.php';</script>";
                exit;     
            }
        }
        else {           
            
            echo "<script>alert('Invalid email or password');";
            echo "window.location.href='/public/admin/adminlog.php';</script>";
            exit;
        }
    }

?>