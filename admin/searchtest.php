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
                    <th>Prescription ID</th>
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
                    <th>Previous test</th>
                    <th>Test report</th>
                    <th>Prescribe medicine</th>
                    <th>Advice</th>
                    <th>count daily</th>
                    <th>Reference Doctor</th> 
                    
                </tr>
            </thead>
            <tbody>


                 <?php

    if (isset($_POST['search'])) {
       
       $search = $_POST['search'];
    
    $query = " SELECT * FROM prescription_new WHERE p_test LIKE '%$search%' ";
    $search_query = mysqli_query($connection,$query);

    if (!$search_query) {
        die("QUERY FAILED". mysqli_error($connection));
    }
    $count = mysqli_num_rows($search_query);
     if ($count == 0 ) {
         echo "<h1> NO RESULT </h1>";
     }else {

                      while($row=mysqli_fetch_assoc($search_query)) {

                        $pres_id = $row['pres_id'];
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
                         $p_test = $row['p_test'];
                       $t_report = $row['t_report'];
                       $prescribe = $row['prescribe'];
                        $advice = $row['advice'];
                          $daily = $row['daily'];
                          $refer = $row['refer'];

                        
                        


                        echo "<tr>";
                       echo "<td>$date</td>";
                 echo "<td>$pres_id</td>";
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
                   echo "<td>$p_test</td>";
                    echo "<td>$t_report</td>";
                     echo "<td>$prescribe</td>";
                      echo "<td>$advice</td>";
                       echo "<td>$daily</td>";
                        echo "<td>$refer</td>";
                        
                        echo "</tr>";


                        ?>

                         

                <?php } 




     }
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
