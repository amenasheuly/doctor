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
    
    $query = " SELECT * FROM prescription WHERE pres_id LIKE '%$search%' ";
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
                        $blood = $row['blood'];
                        $systolic = $row['systolic'];
                        $diastolic = $row['diastolic'];
                        $problem = $row['problem'];
                        $disease = $row['disease'];
                        $body = $row['body'];
                        $weight = $row['weight'];
                        $date = $row['date'];


                         echo "<tr>";
                        echo "<td>$date</td>";
                        echo "<td>$pres_id</td>";
                        echo "<td>$blood</td>";
                        echo "<td>$systolic</td>";

                        echo "<td>$diastolic</td>";
                        
                        echo "<td>$problem</td>";
                        echo "<td>$disease</td>";
                        echo "<td>$body</td>";
                        echo "<td>$weight</td>";
                        
                        
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




