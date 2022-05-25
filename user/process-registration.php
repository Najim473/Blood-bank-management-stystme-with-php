<?php
    
    // connect database
    include("./conn.php");
    
    // check if form is submited or not
    if(isset($_POST['submit'])){

        // take inputed data form the post request
        $name=$_POST['name'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $gender=$_POST['gender'];
        $bloodGroup=$_POST['bloodGroup'];
        $registerAs=$_POST['registerAs'];
        $age=$_POST['age'];
        $lastDonation=$_POST['lastDoneted'];
        $disease=$_POST['disease'];
        $address=$_POST['address'];
        $password=$_POST['password'];
        $confirmPassword=$_POST['confirmPassword'];


        // check if user already registered by this email address
        $sql_u = "SELECT * FROM users WHERE email='$email'";
        $res_u = mysqli_query($con, $sql_u);
        if (mysqli_num_rows($res_u) > 0) {
            echo '<script type="text/javascript">alert("Sorry... email already registered");history.go(-1);</script>';
        }
        else if($password != $confirmPassword){
            // check and return back if password and confirm password not matched
            echo '<script type="text/javascript">alert("Password and confirm password not matched...");history.go(-1);</script>';
        }
        else{
                // encript password to make secured
                $hashedPass = sha1($password);

                // declare registration data insertaion sql command
                $query="insert into preusers(name, email, contact, gender, bloodGroup, role, age, lastDonation, disease, address, password) values('$name', '$email', '$contact', '$gender', '$bloodGroup', '$registerAs', '$age', '$lastDonation', '$disease', '$address', '$hashedPass')";

                // check if user data is inserted
                if(mysqli_query($con, $query) )
                {
                    // return success message
                    echo '<script type="text/javascript">alert("Registration data submited, please wait for account approval!!");history.go(-2);</script>';
                }
                else{
                    // if data not inserted to the database then return server error
                    echo '<script type="text/javascript">alert("Internal Server Error, Please Try Again Latter!!");history.go(-1);</script>';
                    // echo "ERROR: Could not able to execute . " . mysqli_error($con);
                }

            }

     }
 
?>