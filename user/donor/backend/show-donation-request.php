<?php
    // Connect to database
    include '../../conn.php';

    // check if id is posted or not
    if (isset($_POST["id"])) {
        $output = '';
        // sql command 
        $query  = "SELECT * FROM ".$_POST["type"]." WHERE id = '" . $_POST["id"] . "'";


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
                        <td width="30%"><label>Blood Group</label></td>  
                        <td width="70%">' . $row["bloodGroup"] . '</td>  
                    </tr>  
                    <tr>  
                        <td width="30%"><label>Unit</label></td>  
                        <td width="70%">' . $row["unit"] . '</td>  
                    </tr>  
                    <tr>  
                        <td width="30%"><label>Status</label></td>  
                        <td width="70%">' . $row["status"] . '</td>  
                    </tr>  
                    
                    <tr>  
                        <td width="30%"><label>Date</label></td>  
                        <td width="70%">' . $row["date"] . '</td>  
                    </tr>  
                    <tr>  
                        <td width="30%"><label>Disease</label></td>  
                        <td width="70%">' . $row["disease"] . '</td>  
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