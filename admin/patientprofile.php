<?Php include "include/database.php"; ?>
<?php ob_start(); ?>

<?Php include "include/header.php"; ?>

<?Php include "include/nav.php"; ?>



<h1>Patient</h1>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Phone Number</th>
                <th>Short Biography</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

         
             <?php 

                       
                          $query =   "SELECT * FROM patientregistration";
                      $select_posts = mysqli_query($connection,$query);  

                    while($row=mysqli_fetch_assoc($select_posts)) {
                        $id = $row['id'];
                        $first_name = $row['first_name'];
                        $last_name = $row['last_name'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $bio = $row['bio'];
                        $gender = $row['gender'];
                        $age = $row['age'];
                        $address = $row['address'];

                        
                        


                        echo "<tr>";
                        echo "<td>$id</td>";
                        echo "<td>$first_name  $last_name </td>";
                        echo "<td>$email</td>";

                        echo "<td>$age</td>";
                        
                        echo "<td>$phone</td>";
                        echo "<td>$bio</td>";
                        echo "<td>$gender</td>";
                        echo "<td>$address</td>";
                        

                         echo "<td><a href='patientprofile.php?edit={$id}' >Edit</a></td>";
                        
                        echo "<td><a onClick=\"javascript: return confirm('Are u sure u want to delete'); \" href='patientprofile.php?delete={$id}' >Delete</a></td>";
                        
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
   $query = "DELETE FROM patientregistration WHERE id = {$id_delete}";
   $delete_query = mysqli_query($connection,$query);
   header("Location: patientprofile.php");

}





?>

 <?Php include "include/modal.php"; ?>


     <?Php include "include/footer.php"; ?>
