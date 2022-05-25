<?php
    // connect database
    include '../../conn.php';

    // check id is posted or not
    if(isset($_POST['id'])){

        $id = $_POST['id'];

        $type = $_POST['type'];


        // sql command for updating status
        $query="UPDATE ".$type." SET status='Rejected' WHERE id='$id'";

        // Update
        if(mysqli_query($con, $query)){

            // response about rejection
            echo "Request Rejected";
        }
        else{
            echo "Internal Server Error, please try again latter.";
        }
	}
    else{
        echo "Please provide a valid Blood ID";
    }
	
?>