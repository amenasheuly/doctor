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
                    <th>Serial No</th>
                    <th>Patient ID</th>
                    <th>email</th>                  
                    <th>Patient Data</th>
                    
                </tr>
            </thead>
            <tbody>


<?php
     $date = date('Y-m-d');
  
      $query_for_check = "SELECT * FROM `serial` where date ='{$date}'";
      $s_post = mysqli_query($connection,$query_for_check);
      
       while($row=mysqli_fetch_assoc($s_post)) {
                        $date = $row['date'];
                        $serial_id = $row['serial_id'];
                        $patient_id = $row['patient_id'];                
                        $email = $row['email'];

                  echo "<tr>";
                  echo "<td>$date</td>";
                  echo "<td>$serial_id</td>";
                  echo "<td>$patient_id</td>";
                   echo "<td>$email</td>";
                  echo "<td><a href='patientdetails.php?id={$patient_id}'>Patient Details</a></td>";
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


