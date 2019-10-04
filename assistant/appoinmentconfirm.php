 <?Php include "include/database.php"; ?>
<?php ob_start(); ?>
     <?Php include "include/header.php"; ?>
     <?Php include "include/nav.php"; ?>

		        <h1 class="h3 mb-0 text-gray-800 " style="     margin-left: 30px;">Appoinment Confirmation</h1>
		      <br><br>

		       <?php   
     $query =   "SELECT * FROM patientregistration INNER JOIN patient ON patientregistration.id = patient.prb_id ";
                            $result = mysqli_query($connection, $query);

                             ?>
			       <div class="row">

			        <div class="container">
			        	<div class="col-sm-6">
	                      <table id="example" class="table table-striped table-bordered" style="width:100%">
	          <thead>
	              <tr>
                    
	                  <th>Name</th>
	                  <th>Apponited</th>
	                  <th>Serial No</th>
	           
	              </tr>
	          </thead>
	          <tbody>

                          <?php 

                       
                          $query =   "SELECT * FROM patientregistration";
                      $select_posts = mysqli_query($connection,$query);  

                    while($row=mysqli_fetch_assoc($select_posts)) {
                       
                        $first_name = $row['first_name'];
                        $last_name = $row['last_name'];
                        $appoinment = $row['appoinment'];
                    

                        
                        


                        echo "<tr>";
                       
                        echo "<td>$first_name  $last_name </td>";
                        echo "<td>$appoinment</td>";
                        
                         echo "<td><button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal'>Serial No.</button></td>";
                        
                        
                        
                        echo "</tr>";

                        }
                  ?>






  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="margin-top: 105px; ">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
        	<h3 class="modal-title" style="margin-left: 320px;color: green;">Serial Entry</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
        	<?php
                        if (isset($_POST['serial_no'])) {

                        
                          $serial = $_POST['serial'];
                
                          
                      
                        $query = "INSERT INTO  serial (serial_id)";

                        $query .= " VALUES ('{$serial}')"; 

                          $create_post_query = mysqli_query($connection,$query);
                             
                            confirm($create_post_query);

                        }

                     ?>




        	 <form class="form-horizontal" role="form" action="" method="post">
               
                <div class="form-group">
                	<div class="row">
                	<div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <input type="text" name="serial" id="firstName" class="form-control" autofocus>
                        
                    </div>
                    <div class="col-sm-4"></div>
                    </div>
                </div>

                   <div class="form-group">
                   <div class="row">
                	<div class="col-sm-4"></div>
                    <div class="col-sm-4">
                  <input type="submit" name="serial_no" class="btn btn-primary form-control btn-block" value="Submit Serial">
                 </div>
                	<div class="col-sm-4"></div>

                 </div>
                                     
                    </div> 
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

	            
	          </tbody>
	      </table>

	                    </div>
			      


		              <br><br><br>
		        </div> 
		        </div>

		            </div>
		          </div>

		        </div>
		  


		 <?Php include "include/modal.php"; ?>



     <?Php include "include/footer.php"; ?>
