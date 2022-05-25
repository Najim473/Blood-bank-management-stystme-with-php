<?php
    // Connect to database
    include '../../conn.php';

    // check if id is posted or not
    if (isset($_POST["id"])) {
        $output = '';
        // sql command 
        $query  = "SELECT * FROM users WHERE id = '" . $_POST["id"] . "'";

        $id = "";
        $name = "";
        $email = "";
        $role = "";
        $gender = "";

        // query data from database
        $result = mysqli_query($con, $query);
        $output .= '  
        <div class="table-responsive">  
            <table class="table table-striped">';
        while ($row = mysqli_fetch_array($result)) {

            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $role = $row['role'];
            $gender = $row['gender'];
        }


        if($role == "donor"){
            $query1 = "SELECT * FROM donors WHERE user_id='$id'";
            
        }else{
            $query1 = "SELECT * FROM patients WHERE user_id='$id'";

        }

        // echo $query1;
        // query data from database
        $result1 = mysqli_query($con, $query1);
        while ($row1 = mysqli_fetch_array($result1)) {


        $output .= '  
                <tr>  
                    <td width="30%"><label>Name</label></td>  
                    <td width="70%">' . $name.'</td>  
                </tr>  
                <tr>  
                    <td width="30%"><label>Email</label></td>  
                    <td width="70%">' . $email . '</td>  
                </tr>  
                <tr>  
                    <td width="30%"><label>Contact</label></td>  
                    <td width="70%">' . $row1["contact"] . '</td>  
                </tr>  
                <tr>  
                    <td width="30%"><label>Gender</label></td>  
                    <td width="70%">' . $gender . '</td>  
                </tr>  
                
                <tr>  
                    <td width="30%"><label>Blood Group</label></td>  
                    <td width="70%">' . $row1["bloodGroup"] . '</td>  
                </tr>  
                <tr>  
                    <td width="30%"><label>Applied To Become</label></td>  
                    <td width="70%">' . $role . '</td>  
                </tr>  
                <tr>  
                    <td width="30%"><label>Age</label></td>  
                    <td width="70%">' . $row1["age"] . '</td>  
                </tr>  
                <tr>  
                    <td width="30%"><label>Disease</label></td>  
                    <td width="70%">' . $row1["disease"] . '</td>  
                </tr>  
                <tr>  
                    <td width="30%"><label>Address</label></td>  
                    <td width="70%">' . $row1["address"] . '</td>  
                </tr>  
                
                <tr>  
                    <td width="30%"><label>Last Donation Date</label></td>  
                    <td width="70%">' . $row1["lastDonation"] . '</td>  
                </tr>  
        ';
            }
            
        $output .= '  
            </table>  
        </div>  
        ';
        echo $output;
            
            
    }
?>