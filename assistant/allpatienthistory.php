 <?Php include "include/database.php"; ?>
<?php ob_start(); ?>
     <?Php include "include/header.php"; ?>
     <?Php include "include/nav.php"; ?>


        <h1 class="h3 mb-0 text-gray-800 " style="margin-left: 7px;margin-top: 25px;">All Patient History</h1>
	      <br>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
	          <thead>
	              <tr> 
                   <th>Date</th> 
                   
                    <th>Patient ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Phone Number</th>                   
                    <th>Gender</th>
                    <th>Address</th>                   
                                   
                    <th>Blood</th>
	                  <th>Systolic</th>
	                  <th>Diastolic</th>
                    <th>Problem </th>
                    <th>Disease</th>
                    <th>Body</th>
	                  <th>Weight</th>
                    <th>Previous Test Report</th>
                    <th>Delete</th>
	                  
	              </tr>
	          </thead>
	          <tbody>

<?php 

                       
 $query =   "SELECT * FROM assistive_data";
 $select_posts = mysqli_query($connection,$query);  

 while($row=mysqli_fetch_assoc($select_posts)) {
                  $assistive_id = $row['assistive_id'];
                  $patient_id = $row['patient_id'];
                  $first_name = $row['first_name'];
                  $last_name = $row['last_name'];
                  $email = $row['email'];
                  $phone = $row['phone'];                  
                  $gender = $row['gender'];
                  $age = $row['age'];
                  $address = $row['address'];
                  $blood = $row['blood'];
                  $systolic = $row['systolic'];
                  $diastolic = $row['diastolic'];
                  $problem = $row['problem'];
                  $disease = $row['disease'];
                  $body = $row['body'];
                  $weight = $row['weight'];
                  $date = $row['date'];
                  $file = $row['file'];

                        
                        


                  echo "<tr>";
                  echo "<td>$date</td>";
                 
                  echo "<td>$patient_id</td>";
                  echo "<td>$first_name  $last_name </td>";
                  echo "<td>$email</td>";

                  echo "<td>$age</td>";
                        
                  echo "<td>$phone</td>";
              
                  echo "<td>$gender</td>";
                  echo "<td>$address</td>";
                       
                  echo "<td>$blood</td>";
                  echo "<td>$systolic</td>";

                  echo "<td>$diastolic</td>";
                        
                  echo "<td>$problem</td>";
                  echo "<td>$disease</td>";
                  echo "<td>$body</td>";
                  echo "<td>$weight</td>";

                  echo "<td><a href='$file'>$file</a></td>";
                        
                  echo "<td><a onClick=\"javascript: return confirm('Are u sure u want to delete'); \" href='allpatienthistory.php?delete={$assistive_id}' >Delete</a></td>";
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


<?Php include "include/modal.php"; ?>



     <?Php include "include/footer.php"; ?>

 <?php 
if (isset($_GET['delete'])) {
    
   $id_delete = $_GET['delete'];
   $query = "DELETE FROM assistive_data WHERE assistive_id = {$id_delete}";
   $delete_query = mysqli_query($connection,$query);
   header("Location: allpatienthistory.php");

}





?>