<?php
    // connect database
    include("./conn.php");
    
    // check if form is submited 
    if(isset($_POST['submit'])){

        // take input data from post request
        $email=$_POST['email'];
        $password=$_POST['password'];


        // fetch user data from users table
        $sql_u = "SELECT * FROM users WHERE email='$email'";
        $res_u = mysqli_query($con, $sql_u);

        // convert mysql object to array
        $userData = mysqli_fetch_array($res_u);

        // check if user not exist
        if (mysqli_num_rows($res_u) <= 0) {
            echo '<script type="text/javascript">alert("Sorry... User not found!");history.go(-1);</script>';
        }
        else if(sha1($password) != $userData['password']){
            echo '<script type="text/javascript">alert("Wrong passwordm, please try again!");history.go(-1);</script>';
        }
        else if(sha1($password) == $userData['password']){
            // save user data to session
            session_start();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $userData['name'];
            $_SESSION['role'] = $userData['role'];
            $_SESSION['gender'] = $userData['gender'];
            $_SESSION['id'] = $userData['id'];
            // echo $_SESSION['role'];

            // redirect user based on role
            if($userData['role'] == "Admin"){
                header("Location: ./admin");
            }else if($userData['role'] == "donor"){
                header("Location: ./donor");
            }else if($userData['role'] == "patient"){
                header("Location: ./patient");
            }
        }
        else{
            echo '<script type="text/javascript">alert("Internal Server Error, please try again latter!");history.go(-1);</script>';
        }

     }
     else{
        //  redirect back if user don't submit form's data
        echo '<script type="text/javascript">alert("Please submit form first!");history.go(-1);</script>';
     }
 
?>