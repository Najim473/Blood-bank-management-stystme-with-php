<?php 
include "../../conn.php";

$id = 0;
if(isset($_POST['id'])){
   $id = mysqli_real_escape_string($con,$_POST['id']);
}
if($id > 0){

  // Check record exists
  $checkRecord = mysqli_query($con,"SELECT * FROM users WHERE id=".$id);
  $totalrows = mysqli_num_rows($checkRecord);

  while ($row = mysqli_fetch_array($checkRecord)) {
        $role = $row['role'];
    }

  if($totalrows > 0){
    // Delete record
    $query = "DELETE FROM users WHERE id=".$id;

    if($role == "donor"){
        $query1 = "DELETE FROM donors WHERE user_id=".$id;
        
    }else{
        $query1 = "DELETE FROM patients WHERE user_id='$id'";
    }

    mysqli_query($con,$query);
    mysqli_query($con,$query1);
    echo 1;
    exit;
  }else{
    echo 0;
    exit;
  }
}

echo 0;
exit;