 <?Php include "include/database.php"; ?>
 <?php ob_start(); ?>
 <?Php include "include/header.php"; ?>
     <?Php include "include/nav.php"; ?>

       <div class="container">
        <div class="row">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Degree</th>
                <th>Gender</th>
                <th>Address</th>
                <!-- <th>Short Biography</th> -->
                <th>Contact Number</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>


             <?php 
                          

                       
                      $query =   "SELECT * FROM assistant";
                      $select_posts = mysqli_query($connection,$query);  

                    while($row=mysqli_fetch_assoc($select_posts)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        // $assis_id = $row['assis_id'];
                        $email = $row['email'];
                        // $password = $row['password'];
                        $degree = $row['degree'];
                        $phone = $row['phone'];
                        // $bio = $row['bio'];
                        $gender = $row['gender'];
                        $age = $row['age'];
                        $address = $row['address'];

                        
                        


                        echo "<tr>";
                        echo "<td>$id</td>";
                        echo "<td>$name </td>";
                        echo "<td>$email</td>";
                        echo "<td>$age</td>";
                        echo "<td>$degree</td>";
                        echo "<td>$gender</td>";
                        echo "<td>$address</td>";
                        // echo "<td>$bio</td>";
                        echo "<td>$phone</td>";
                        
                        
                        
                        

          
                        echo "<td><a href='editassistant.php?source=edit_post&p_id={$id}'>Edit</a></td>";
                        
                        echo "<td><a onClick=\"javascript: return confirm('Are u sure u want to delete'); \" href='allassistant.php?delete={$id}' >Delete</a></td>";
                        
                        echo "</tr>";

                        }
                  ?>









          
        </tbody>
    </table>
  </div>
</div>


    <?php 
if (isset($_GET['delete'])) {
    
   $id_delete = $_GET['delete'];
   $query = "DELETE FROM assistant WHERE id = {$id_delete}";
   $delete_query = mysqli_query($connection,$query);
   header("Location: allassistant.php");

}





?>

              <br><br><br>
        </div> 
        </div>

            </div>
          </div>

        </div>
  


     <?Php include "include/modal.php"; ?>

<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
        } );
  </script>

     <?Php include "include/footer.php"; ?>