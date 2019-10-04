<?php ob_start(); ?>
<?Php include "include/database.php"; ?>
<?Php include "include/header.php"; ?>
<?Php include "include/nav1.php"; ?>
<?Php include "include/nav.php"; ?>


<div class="container">

  <div class="row">
 
  <h1 class="h3 mb-0 text-gray-800" style="margin-left: 7px;margin-top: 25px;">All My Previous Records</h1>
  <table id="example" class="table table-bordered" style="width:100%">
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
  
if (isset($_SESSION['email'])) {
                          
    $the_post = $_SESSION['email'];


}
$query = "SELECT * FROM prescription_new where email ='{$the_post}'";
// if(isset($_GET['email']))
// {

// }
//            $query =   "SELECT * FROM prescription_new WHERE email=";
$result = mysqli_query($connection, $query);

?>

             
<?php  
if(mysqli_num_rows($result) > 0)  
{  
while($row = mysqli_fetch_array($result))  
// {
// while($row=mysqli_fetch_assoc($select_posts)) {
                       {
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

                        }

                                
  }else{
      echo "<h4 style='text-align:center; color: Blue;'>You Have NO Previous Record.</h4>";
       }
  ?>
               




              
            </tbody>
        </table>
</div>
     </div>
 </div>




              <br><br><br>
       

          

       
                                

             

     
<?Php include "include/footer.php"; ?>