<?php
include'../conn.php';
include'./includes/sidebar.php';
?>
    
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <div class="row">
        <?php
            $query = "SELECT * FROM blood_request where user_id='".$_SESSION['id']."'";
            // query for preusers data
            $result = mysqli_query($con, $query) or die (mysqli_error($con));

            $totalRequest = mysqli_num_rows($result);
        ?>

        <!-- Total Requests Card -->
        <div class="col-12 col-md-3 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                Total Blood Request
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php  echo $totalRequest; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tint fa-2x text-primary-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <?php
            $query1 = "SELECT * FROM blood_request where user_id='".$_SESSION['id']."' and status='Pending'";
            // query for preusers data
            $result1 = mysqli_query($con, $query1) or die (mysqli_error($con));

            $totalPendingRequest = mysqli_num_rows($result1);
        ?>

        <!-- Total pending Requests Card -->
        <div class="col-12 col-md-3 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Total Pending Request
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php  echo $totalPendingRequest; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tint fa-2x text-primary-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
            $query2 = "SELECT * FROM blood_request where user_id='".$_SESSION['id']."' and status='Approved'";
            // query for preusers data
            $result2 = mysqli_query($con, $query2) or die (mysqli_error($con));

            $totalApprovedRequest = mysqli_num_rows($result2);
        ?>


        <!-- Total Approved Requests Card -->
        <div class="col-12 col-md-3 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Approved Request
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php  echo $totalApprovedRequest; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tint fa-2x text-primary-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <?php
            $query2 = "SELECT * FROM blood_request where user_id='".$_SESSION['id']."' and status='Rejected'";
            // query for preusers data
            $result2 = mysqli_query($con, $query2) or die (mysqli_error($con));

            $totalRejectedRequest = mysqli_num_rows($result2);
        ?>


        <!-- Total Rejected Requests Card -->
        <div class="col-12 col-md-3 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Total Rejected Request
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php  echo $totalRejectedRequest; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tint fa-2x text-primary-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    

    

<?php
    include'./includes/footer.php';
?>