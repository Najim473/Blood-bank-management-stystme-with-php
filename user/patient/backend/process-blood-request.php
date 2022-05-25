<?php
    
    // connect database
    include "../../conn.php";
    
    // check if form is submited or not
    if(isset($_POST['submit'])){

        // take inputed data form the post request
        $name=$_POST['name'];
        $id=$_POST['id'];
        $unit=$_POST['unit'];
        $bloodGroup=$_POST['bloodGroup'];
        $disease=$_POST['disease'];
        $date=$_POST['date'];



        // declare blood request insertaion sql command
        $query="insert into blood_request(user_id, name, bloodGroup, unit, date, disease) values('$id', '$name', '$bloodGroup', '$unit', '$date', '$disease')";

        // check if user data is inserted
        if(mysqli_query($con, $query) )
        {
            // return success message
            echo '<script type="text/javascript">alert("Blood Request Form submited, please wait for account approval!!");history.go(-1);</script>';
        }
        else{
            // if data not inserted to the database then return server error
            // echo mysqli_error($con); 
            echo '<script type="text/javascript">alert("Internal Server Error, Please Try Again Latter!!");history.go(-1);</script>';
            // echo "ERROR: Could not able to execute . " . mysqli_error($con);
        }

    }
    else{
        echo '<script type="text/javascript">alert("You are not allowed to this page!!");history.go(-1);</script>';
    }
?>