 <?Php include "include/database.php"; ?>
<?php ob_start(); ?>
     <?Php include "include/header.php"; ?>
     <?Php include "include/nav.php"; ?>


        <h1 class="h3 mb-0 text-gray-800 " style="margin-left: 7px;margin-top: 25px;">Regestered Patient</h1>
	      <br><br><br>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
	          <thead>
	              <tr>
                    <th>ID</th>
	                  <th>Name</th>
	                  <th>Email</th>
	                  <th>Age</th>
                    <th>Phone Number</th>
                   
                    <th>Gender</th>
	                  <th>Address</th>
                    <th>Enter Patient's Data</th>
	               
	                  <th>Delete</th>
	              </tr>
	          </thead>
	          <tbody>

                          <?php 

                          $p_id = $_GET['id'];
                          $query =   "SELECT * FROM patientregistration WHERE patient_id=$p_id";
                      $select_posts = mysqli_query($connection,$query);  

                    while($row=mysqli_fetch_assoc($select_posts)) {
                        $id = $row['patient_id'];
                        $first_name = $row['first_name'];
                        $last_name = $row['last_name'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                       
                        $gender = $row['gender'];
                        $age = $row['age'];
                        $address = $row['address'];

                        
                        


                  echo "<tr>";
                  echo "<td>$id</td>";
                  echo "<td>$first_name  $last_name </td>";
                  echo "<td>$email</td>";

                  echo "<td>$age</td>";
                        
                  echo "<td>$phone</td>";
              
                  echo "<td>$gender</td>";
                  echo "<td>$address</td>";
                        
                  echo "<td><a href='patienthistoryentry.php?id=".$id."'>Enter Data</a></td>";
                  // echo "<td><a href='registeredpatient.php?edit={$id}' >Edit</a></td>";
                        
                        echo "<td><a onClick=\"javascript: return confirm('Are u sure u want to delete'); \" href='registeredpatient.php?delete={$id}' >Delete</a></td>";
                        
                        echo "</tr>";

                        }
                  ?>




	            
	          </tbody>
	      </table>

      


              <br><br><br>
        </div> 
        </div>

            </div>
          </div>

        </div>
  <?php 
if (isset($_GET['delete'])) {
    
   $id_delete = $_GET['delete'];
   $query = "DELETE FROM patientregistration WHERE patient_id = {$id_delete}";
   $delete_query = mysqli_query($connection,$query);
   header("Location: registeredpatient.php");

}





?>



<?Php include "include/modal.php"; ?>



     <?Php include "include/footer.php"; ?>
