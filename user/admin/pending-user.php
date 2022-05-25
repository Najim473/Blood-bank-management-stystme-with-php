<?php
include'../conn.php';
include'./includes/sidebar.php';
?>
    <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h4 class="m-2 font-weight-bold text-primary">Pending User&nbsp;</h4>
    </div>
    
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">        
          <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Blood Group</th>
                <th>Action</th>
              </tr>
          </thead>
          <tbody>
            <?php                  
                // construct sql command for fatching all pending user list from preuser table
                $query = "SELECT * FROM preusers";

                // query for preusers data
                $result = mysqli_query($con, $query) or die (mysqli_error($con));
                if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $row["name"]  ?></td>
                                    <td><?php echo $row["email"];  ?></td>
                                    <td><?php echo $row["bloodGroup"];  ?></td>
                                    
                                    <td class="text-center">
                                        <input type="image" src="https://i.ibb.co/GTDGd2G/view.png" alt="view" border="0" width="30" height="30"   id="<?php echo $row["id"]; ?>" class=" view_data" />
                                        <input type="image" src="https://i.ibb.co/cwCZGh9/approve.png" alt="approve" border="0" width="30" height="30"  id="<?php echo $row["id"]; ?>" class=" approve" />
                                        <input type="image" src="https://i.ibb.co/s5MCkyz/delete.png" alt="delete" border="0" width="30" height="30"  name="delete"  value="delete" id="<?php echo $row["id"]; ?>" class=" delete" />
                                    </td> 
                                </tr>
                            <?php
                        }
                    }
                    else{
                        echo "No Application Today";
                    }
                ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>





<!-- Applicants Details -->
<div id="dataModal" class="modal fade" >  
      <div class="modal-dialog modal-lg">  
           <div class="modal-content">  
                <div class="modal-header">  
                <h4 class="modal-title">Pending User's Details</h4>  
              <button type="button" class="close" data-dismiss="modal">&times;</button>  
                 </div>  
                <div class="modal-body" id="preUsers-details">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="#">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <!-- /Applicants Details -->





 <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
 <script>

     $(document).ready(function() {

        // create function to view data button click event, this function take the id of pending user then post it to backend and show response to modal
        $(document).on('click', '.view_data', function() {
            var id = $(this).attr("id");
            if (id != '') {
                $.ajax({
                    url: "./backend/show-pending-user.php",
                    method: "POST",
                    data: {
                        id: id
                    },
                    
                    success: function(data) {
                        $('#preUsers-details').html(data);
                        $('#dataModal').modal('show');
                        $(this).remove();
                    }
                });
            }
        });


        // create function to approve a pending user to user
        $(document).on('click', '.approve', function() {
            var id = $(this).attr("id");
            if (id != '') {
                $(this).closest('tr').remove();
                
                $.ajax({
                    url: "./backend/approve-pending-user.php",
                    method: "POST",
                    data: {
                        id: id
                    },
                    
                    success: function(data) {
                        
                        $('#preUsers-details').html(data);
                        $('#dataModal').modal('show');
                    }
                });
            }
        });


        // Delete 
        $('.delete').click(function(){
        var el = this;
        
        // Delete id
        var deleteid = $(this).attr("id");
        
        var confirmalert = confirm("Are you sure?");
        if (confirmalert == true) {
            // AJAX Request
            $.ajax({
                url: './backend/delete-pending-user.php',
                type: 'POST',
                data: { id:deleteid },
                success: function(response){

                if(response == 1){
                    // Remove row from HTML Table
                    $(el).closest('tr').css('background','tomato');
                    $(el).closest('tr').fadeOut(800,function(){
                        $(this).remove();
                    });
                }else{
                    alert('Invalid ID.');
                }

                }
            });
        }

        });

    });
 </script>




<?php
    include'./includes/footer.php';
?>