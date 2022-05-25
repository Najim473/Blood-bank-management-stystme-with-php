<?php
include'../conn.php';
include'./includes/sidebar.php';
?>
    
    <div class="card shadow mb-4 container mt-5">
        <div class="card-header py-3">
            <h4 class="m-2 font-weight-bold text-primary">Donate Blood</h4>
        </div>

        <div class="card-body">
            <form action="./backend/process-blood-donation.php" method="POST">
                <div class="row">
                    <input name="id" type="text" value="<?php echo $_SESSION['id']; ?>" autofocus hidden>
                    <input name="name" type="text" value="<?php echo $_SESSION['name']; ?>" autofocus hidden>

                    <div class="form-group col-4">
                        <input class="form-control form-control-user" placeholder="Unit" name="unit" type="text" autofocus required>
                    </div>


                    <div class="form-group col-4">
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

                    


                    <div class="form-group col-4">
                        <input class="form-control form-control-user" placeholder="Date" name="date" type="date" autofocus required>
                    </div>


                    <div class="form-group col-12">
                        <label for="Disease">Disease</label>
                        <textarea name="disease" class="form-control" id="Disease" rows="3"></textarea>
                    </div>

                    <button class="btn btn-primary btn-user btn-block mx-2" type="submit" name="submit">Submit</button>
                    <hr>

                    
                </div>
                
            </form>
        </div>
    </div>
    

    

<?php
    include'./includes/footer.php';
?>