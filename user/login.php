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
                    <h1 class="h4 text-gray-900 mb-4">Login to Online Blood Bank</h1>
                  </div>
                  <form class="user" role="form" action="processlogin.php" method="post">
                    <div class="form-group">
                        <input class="form-control form-control-user" placeholder="Email" name="email" type="text" autofocus required>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-user" placeholder="Password" name="password" type="password" value="" required>
                    </div>

                    <button class="btn btn-primary btn-user btn-block" type="submit" name="submit">Login</button>
                    <hr>
                    <p>Don't have account? <a href="./register.php">Register now</a></p>
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