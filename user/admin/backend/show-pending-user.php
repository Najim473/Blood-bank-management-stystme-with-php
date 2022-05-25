<?php
    // Connect to database
    include '../../conn.php';

    // check if id is posted or not
    if (isset($_POST["id"])) {
        $output = '';
        // sql command 
        $query  = "SELECT * FROM preusers WHERE id = '" . $_POST["id"] . "'";

        // query data from database
        $result = mysqli_query($con, $query);
        $output .= '  
        <div class="table-responsive">  
            <table class="table table-striped">';
        while ($row = mysqli_fetch_array($result)) {
            $output .= '  
                    <tr>  
                        <td width="30%"><label>Name</label></td>  
                        <td width="70%">' . $row["name"].'</td>  
                    </tr>  
                    <tr>  
                        <td width="30%"><label>Email</label></td>  
                        <td width="70%">' . $row["email"] . '</td>  
                    </tr>  
                    <tr>  
                        <td width="30%"><label>Contact</label></td>  
                        <td width="70%">' . $row["contact"] . '</td>  
                    </tr>  
                    <tr>  
                        <td width="30%"><label>Gender</label></td>  
                        <td width="70%">' . $row["gender"] . '</td>  
                    </tr>  
                    
                    <tr>  
                        <td width="30%"><label>Blood Group</label></td>  
                        <td width="70%">' . $row["bloodGroup"] . '</td>  
                    </tr>  
                    <tr>  
                        <td width="30%"><label>Applied To Become</label></td>  
                        <td width="70%">' . $row["role"] . '</td>  
                    </tr>  
                    <tr>  
                        <td width="30%"><label>Age</label></td>  
                        <td width="70%">' . $row["age"] . '</td>  
                    </tr>  
                    <tr>  
                        <td width="30%"><label>Disease</label></td>  
                        <td width="70%">' . $row["disease"] . '</td>  
                    </tr>  
                    <tr>  
                        <td width="30%"><label>Address</label></td>  
                        <td width="70%">' . $row["address"] . '</td>  
                    </tr>  
                    
                    <tr>  
                        <td width="30%"><label>Last Donation Date</label></td>  
                        <td width="70%">' . $row["lastDonation"] . '</td>  
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