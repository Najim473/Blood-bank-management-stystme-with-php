<?php
include'../conn.php';
include'./includes/sidebar.php';
?>

    <div class="container mt-5">


                  <form class="user" role="form" action="../process-registration.php" method="post">

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
                              <option selected value="patient" >Patient</option>
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
                        <input class="form-control form-control-user" placeholder="Disease(if any)" name="disease" type="password" value="">
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
                </form>
</div>

<?php
include'./includes/footer.php';
?>