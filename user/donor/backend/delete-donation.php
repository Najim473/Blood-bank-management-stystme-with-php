<?php
    // connect database
    include '../../conn.php';

    // check id is posted or not
    if(isset($_POST['id'])){

        $id = $_POST['id'];


        // sql command for updating status
        $query="DELETE FROM blood_donation WHERE id='$id'";

        // Update
        if(mysqli_query($con, $query)){

            // response about rejection
            echo "Request Deleted";
        }
        else{
            echo "Internal Server Error, please try again latter.";
        }
	}
    else{
        echo "Internal server error";
    }
	
?>