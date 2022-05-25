<?php
include'../conn.php';
include'./includes/sidebar.php';
?>
    
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-2 font-weight-bold text-primary">Blood Stock</h4>
        </div>

        <div class="card-body">
            <div class="row">

                <?php
                    $query = "SELECT * FROM blood_stock";

                    // query for preusers data
                    $result = mysqli_query($con, $query) or die (mysqli_error($con));
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="col-6 col-md-3 my-5">
                                <div class="card p-3">
                                    <div class="row">
                                        <div class="col-6 d-flex justify-content-start">
                                            <h3 class="justify-content-start">
                                                <?php  echo $row["bloodGroup"]; ?>
                                            </h3>
                                        </div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <h3 class="justify-content-end">
                                                <?php  echo $row['unit']; ?>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }

                ?>
                        

                
            </div>
        </div>
    </div>
    

    

<?php
    include'./includes/footer.php';
?>