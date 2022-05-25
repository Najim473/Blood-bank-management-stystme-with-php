<?php
    // connect database
    include '../../conn.php';

    // check id is posted or not
    if(isset($_POST['id'])){

        $id = $_POST['id'];

        $type = $_POST['type'];


        // sql command for select data
        $query1 = "SELECT * FROM ".$type." WHERE id='$id'";

        // query for this user's role
        $result1 = mysqli_query($con, $query1) or die (mysqli_error($con));

        // fetch donor donation info
        $user = mysqli_fetch_assoc($result1);

        $bloodGroup = $user['bloodGroup'];
        $unit = $user['unit'];

        
        // make the unit negetive if it is blood request
        if($type == "blood_request"){
            // check if blood is available
            $checkAvalabilityQuery = "SELECT unit FROM blood_stock WHERE bloodGroup='$bloodGroup'";

            $result = mysqli_query($con, $checkAvalabilityQuery) or die (mysqli_error($con));

            while($row = mysqli_fetch_assoc($result)) {
                $availableUnit = $row['unit'];
            }
            if($availableUnit <= 0){
                exit("Blood Not Available");
            }
            $unit *=-1;
        }


        // sql command for inserting into user table 
        $query="UPDATE ".$type." SET status='Approved' WHERE id='$id'";

        // insert this user into users table 
        if(mysqli_query($con, $query)){
            
            // update blood stock
            $updateSql = "UPDATE blood_stock SET unit = unit + $unit WHERE bloodGroup='$bloodGroup'";

            if(mysqli_query($con, $updateSql)){
                // response about blood stock updae
                echo "Request Approved";
            }
            else{
                // response about error
                // echo "not inserted " .mysqli_error($con);
                echo "Internal Server Error.";
            }
        }
        else{
            echo "Internal Server Error, please try again latter.";
        }
	}
    else{
        echo "Please provide a valid Blood Donation ID";
    }
	


  
 
?>