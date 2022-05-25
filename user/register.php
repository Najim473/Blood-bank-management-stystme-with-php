
<?php 
    // require('session.php');
    // if(logged_in())
    // { 
        ?>
             <script type="text/javascript">
    //             window.location = "index.php";
    //         </script>
         <?php
    // } 
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Online Blood Bank</title>

  <!-- Custom fonts for this template-->
  <link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="./css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary d-flex align-items-center justify-content-center">

  <div class="container d-flex align-items-center justify-content-center p-0 my-2">

    <!-- Outer Row -->
    <div class="row d-flex justify-content-center p-0">

      <div class="col-md-12">

        <div class="card o-hidden border-0 shadow-lg">
          <div class="card-body p-5 shadow">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-12">
                <div class="py-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Register To Online Blood Bank</h1>
                  </div>
                  <form class="user" role="form" action="process-registration.php" method="post">

                    <div class="form-group">
                        <input class="form-control form-control-user" placeholder="Full Name" name="name" type="text" autofocus required>
                    </div>

                    <div class="form-group">
                        <input class="form-control form-control-user" placeholder="Email" name="email" type="text" autofocus required>
                    </div>

                    <div class="row">
                        <div class="col-6">
                          <div class="form-group">
                              <input class="form-control" placeholder="Contact" name="contact" type="text" autofocus required>
                          </div>
                        </div>
                        <div class="form-group col-6">
                          <select name="gender" class="form-control" required>
                              <option value="">Select Gender</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                          </select>
                      </div>
                    </div>
                    

                    <div class = "row">
                      <div class="form-group col-6">
                          <select name="bloodGroup" class="form-control" required>
                              <option value="">Select Blood Group</option>
                              <option value="A+" >A+</option>
                              <option value="A-">A-</option>
                              <option value="B+">B+</option>
                              <option value="B-">B-</option>
                              <option value="O+">O+</option>
                              <option value="O-">O-</option>
                              <option value="AB+">AB+</option>
                              <option value="AB-">AB-</option>
                          </select>
                      </div>

                      <div class="form-group col-6">
                          <select name="registerAs" class="form-control" required>
                              <option value="">Register As</option>
                              <option value="donor" >Blood Donor</option>
                              <option value="patient">Patient</option>
                          </select>
                      </div>
                    </div>

                    

                    <div class="row">
                      <div class="form-group col-6 ">
                          <input class="form-control" placeholder="Age*" name="age" type="text" autofocus required>
                      </div>

                      <div class="form-group col-6">
                        <input class="form-control" placeholder="Last Donated" name="lastDoneted" type="date" autofocus>
                      </div>
                    </div>
                    

                    <div class="form-group">
                        <input class="form-control form-control-user" placeholder="Disease(if any)" name="disease" type="text" value="">
                    </div>


                    <div class="form-group">
                        <input class="form-control form-control-user" placeholder="Address" name="address" type="text" value="" required>
                    </div>


                    <div class="form-group">
                        <input class="form-control form-control-user" placeholder="Password" name="password" type="password" value="" required>
                    </div>

                    <div class="form-group">
                        <input class="form-control form-control-user" placeholder="Confirm Password" name="confirmPassword" type="password" value="" required>
                    </div>

                    <button class="btn btn-primary btn-user btn-block" type="submit" name="submit">Register</button>
                    <hr>
                    <p>Already have account? <a href="./login.php">Login now</a></p>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="./vendor/jquery/jquery.min.js"></script>
  <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="./vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="./js/sb-admin-2.min.js"></script>

</body>

</html>