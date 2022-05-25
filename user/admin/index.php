<?php
include'../conn.php';
include'./includes/sidebar.php';
?>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- User Summery Row -->
    <div class="row">
        <!-- User query form the database -->
        <?php
            $query = "SELECT * FROM users";
            // query for preusers data
            $result = mysqli_query($con, $query) or die (mysqli_error($con));

            $totalUser = mysqli_num_rows($result);
            $totalUser -= 1;
        ?>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total User</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php  echo $totalUser; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-primary-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Find total pending user from the preUser database -->
        <?php
            $query = "SELECT * FROM preusers";
            // query for preusers data
            $result = mysqli_query($con, $query) or die (mysqli_error($con));

            $totalPreUser = mysqli_num_rows($result);
        ?>

        <!-- Pending User Requests Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Users</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php  echo $totalPreUser; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-success-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Find total donor from the database -->
        <?php
            $query = "SELECT * FROM donors";
            // query for preusers data
            $result = mysqli_query($con, $query) or die (mysqli_error($con));

            $totalDonor = mysqli_num_rows($result);
        ?>

        <!-- Total donor card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Donor
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php  echo $totalDonor; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-success-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Find total patient from the database -->
        <?php
            $query = "SELECT * FROM patients";
            // query for preusers data
            $result = mysqli_query($con, $query) or die (mysqli_error($con));

            $totalPatient = mysqli_num_rows($result);
        ?>

        <!-- Total patient card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Patient
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php  echo $totalPatient; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-success-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Blood Request and Donation Summery Row -->
    <div class="row">
        <!-- Find total approved Donation from the database -->
        <?php
            $query = "SELECT * FROM blood_donation WHERE status='Approved'";
            // query for preusers data
            $result = mysqli_query($con, $query) or die (mysqli_error($con));

            $totalApprovedDonation = mysqli_num_rows($result);


            // find total approved donation blood unit
            $totalApprovedBloodUnit = 0;
            while($bloodDonation = mysqli_fetch_assoc($result)) {
                $totalApprovedBloodUnit += $bloodDonation['unit'];
            }
        ?>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Approved Blood Donation
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php  echo $totalApprovedDonation; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tint fa-2x text-primary-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Find Total pending donation from the donation table -->
        <?php
            $query = "SELECT * FROM blood_donation WHERE status='Pending'";
            // query for preusers data
            $result = mysqli_query($con, $query) or die (mysqli_error($con));

            $totalPendingDonation = mysqli_num_rows($result);
        ?>

        <!-- Pending User Requests Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Total Pending Blood Donation
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php  echo $totalPendingDonation; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tint fa-2x text-primary-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Find total Approved Blood Request from the database -->
        <?php
            $query = "SELECT * FROM blood_request WHERE status='Approved'";
            // query for preusers data
            $result = mysqli_query($con, $query) or die (mysqli_error($con));

            $totalApprovedRequest = mysqli_num_rows($result);


            // find total approved request blood unit
            $totalApprovedBloodRequestUnit = 0;
            while($bloodDonation = mysqli_fetch_assoc($result)) {
                $totalApprovedBloodRequestUnit += $bloodDonation['unit'];
            }
        ?>

        <!-- Total donor card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Approved Blood Request
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


        <!-- Find Pending Blood Request From the database -->
        <?php
            $query = "SELECT * FROM blood_request WHERE status='Pending'";
            // query for preusers data
            $result = mysqli_query($con, $query) or die (mysqli_error($con));

            $totalPendingRequest = mysqli_num_rows($result);
        ?>

        <!-- Total patient card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Pending Blood Request
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
    </div>



    <!-- Blood Stock Section -->
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

        // find total unit of rejected donation
        $query = "SELECT * FROM blood_donation WHERE status='Rejected'";
        $result = mysqli_query($con, $query) or die (mysqli_error($con));
        $totalRejectedDonationUnit = 0;
        while($bloodDonation = mysqli_fetch_assoc($result)) {
            $totalRejectedDonationUnit += $bloodDonation['unit'];
        }

        // find number of rejected Request
        $query1 = "SELECT * FROM blood_request WHERE status='Rejected'";
        $result1 = mysqli_query($con, $query1) or die (mysqli_error($con));
        $totalRejectedBloodRequestUnit = 0;
        while($bloodDonation = mysqli_fetch_assoc($result1)) {
            $totalRejectedBloodRequestUnit += $bloodDonation['unit'];
        }


        // find the number of blood unit requested
        $requestBloodSQL = "SELECT * FROM blood_request WHERE status='Pending'";
        $requestBloodResult = mysqli_query($con, $requestBloodSQL) or die (mysqli_error($con));
        $numberOfUnitNeeded = 0;
        while($bloodRequest = mysqli_fetch_assoc($requestBloodResult)) {
            $numberOfUnitNeeded += $bloodRequest['unit'];
        }

        // find the number of blood unit available
        $donationBloodSQL = "SELECT * FROM blood_donation WHERE status='Pending'";
        $donationBloodResult = mysqli_query($con, $donationBloodSQL) or die (mysqli_error($con));
        $numberOfUnitAvailable = 0;
        while($bloodDonation = mysqli_fetch_assoc($donationBloodResult)) {
            $numberOfUnitAvailable += $bloodDonation['unit'];
        }
    ?>


    <!-- Pi chart row -->
    <div class="row">

        <!-- Blood request vs Blood donation pi chart -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card shadow mb-4">
                <!-- Card Header -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Blood Stock Status</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="stockPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Pending Donation Blood Unit - <?php echo $numberOfUnitAvailable ?>
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-warning"></i> Pending Requested Blood Unit - <?php echo $numberOfUnitNeeded ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Rejected Donation Request vs Accepted Donation Request PI chart -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card shadow mb-4">
                <!-- Card Header -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Blood Donation</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="bloodDonationPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Approved Unit - <?php echo $totalApprovedBloodUnit ?>
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-danger"></i> Rejected Unit - <?php echo $totalRejectedDonationUnit ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Rejected Blood Request vs Accepted Blood Request PI chart -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card shadow mb-4">
                <!-- Card Header -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Blood Request</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="bloodRequestPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Accepted - <?php echo $totalApprovedBloodRequestUnit ?>
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-danger"></i> Rejected - <?php echo $totalRejectedBloodRequestUnit ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <!-- <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-2 font-weight-bold text-primary">Dashboard</h4>
        </div>

        <div class="card-body">

        </div>
    </div> -->
    





        

    <?php
        include'./includes/footer.php';
    ?>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script> -->



    <script>
        // Set new default font family and font color to mimic Bootstrap's default styling
        // Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        // Chart.defaults.global.defaultFontColor = '#858796';

        // function to runder a pi chart
        // this function take chart html id, lavels and data
        const showPiChart = (chartId, labels, data, backgroundColor, hoverBackgroundColor, ) =>{
            // alert("Called")

            let ctx = document.getElementById(chartId);

            const pieChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: labels,
                datasets: [{
                data: data,
                backgroundColor: backgroundColor,
                hoverBackgroundColor: hoverBackgroundColor,
                hoverBorderColor: "rgba(234, 236, 244, 1)",
                }],
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                },
                legend: {
                    display: false
                },
                cutoutPercentage: 60,
            },
            });

        };

        
        // Blood stock data
        const stockData = [
             <?php echo $numberOfUnitAvailable;?>,
             <?php echo $numberOfUnitNeeded;?>
        ];


        // calll function to show request vs donation pi chart
        showPiChart("stockPieChart", ["Pending Donation Blood Unit", "Pending Requested Blood Unit"],  stockData, ["#4e73df", "#e0dc6d"], ["#4e73df", "#e5dc6d"]);

        // Blood donation data
        const donData = [
            <?php echo $totalApprovedBloodUnit;?>,
            <?php echo $totalRejectedDonationUnit;?>
        ];
        // call function to show blood donation pi chart
        showPiChart("bloodDonationPieChart", ["Accepted", "Rejected"],  donData, ["#4e73df", "#d33b3b"], ["#4e73df", "#d33b3b"]);
        
        // Blood Request data
        const reqData = [
            <?php echo $totalApprovedBloodRequestUnit;?>,
            <?php echo $totalRejectedBloodRequestUnit;?>
        ];

        // call function to blood request pi chart
        showPiChart("bloodRequestPieChart", ["Accepted", "Rejected"],  reqData, ["#4e73df", "#d33b3b"], ["#4e73df", "#d33b3b"]);

</script>