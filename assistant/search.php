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
                    <th>Blood</th>
                    <th>Systolic</th>
                    <th>Diastolic</th>
                    <th>Problem </th>
                    <th>Disease</th>
                    <th>Body</th>
                    <th>Weight</th>
                    
                </tr>
            </thead>
            <tbody>


                 <?php

    if (isset($_POST['search'])) {
       
       $search = $_POST['search'];
    
    $query = " SELECT * FROM patientregistration WHERE patient_id LIKE '%$search%'";
    $search_query = mysqli_query($connection,$query);

    if (!$search_query) {
        die("QUERY FAILED". mysqli_error($connection));
    }
    $count = mysqli_num_rows($search_query);
     if ($count == 0 ) {
         echo "<h1> NO RESULT </h1>";
     }else {

               while($row=mysqli_fetch_assoc($search_query)) {
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



                         

                <?php } 




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
