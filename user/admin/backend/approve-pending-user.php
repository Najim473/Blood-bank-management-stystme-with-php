<?php
    // connect database
    include '../../conn.php';

    // check id is posted or not
    if(isset($_POST['id'])){

        $id = $_POST['id'];


        // sql command for inserting into user table 
        $query="insert into users( name, email, password, role, gender) SELECT name, email, password, role, gender FROM preusers WHERE id='$id'";

        // insert this user into users table 
        if(mysqli_query($con, $query)){
            // find last inserted user id 
            $last_id = mysqli_insert_id($con);

            
            // sql command for checking the users role
            $query1 = "SELECT * FROM preusers WHERE id='$id'";

            // query for this user's role
            $result1 = mysqli_query($con, $query1) or die (mysqli_error($con));

            // fetch users role
            $preuser = mysqli_fetch_assoc($result1);

            $contact = $preuser['contact'];
            $age = $preuser['age'];
            $bloodGroup = $preuser['bloodGroup'];
            $disease = $preuser['disease'];
            $lastDonation = $preuser['lastDonation'];
            $address = $preuser['address'];
            
            if($preuser['role'] == "donor"){
                $query2 = "insert into donors(user_id, contact, age, bloodGroup, disease, lastDonation, address) values('$last_id', '$contact', '$age', '$bloodGroup', '$disease', '$lastDonation', '$address')";
            }
            else{
                $query2 = "insert into patients(user_id, contact, age, bloodGroup, disease, lastDonation, address) values('$last_id', '$contact', '$age', '$bloodGroup', '$disease', '$lastDonation', '$address')";
            }

            if(mysqli_query($con, $query2)){
                // echo "Data inserted";
                $sql = "delete from preusers where id='$id'"; 
                if(mysqli_query($con, $sql)){
                    echo "Account has been accepted.";
                } else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
                }
            }
            else{
                echo "not inserted " .mysqli_error($con);
            }
        }
        else{
            echo "Internal Server Error, please try again latter.";
        }
	}
	


  
 
?>