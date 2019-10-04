
<?Php include "include/database.php"; ?>
<?Php include "include/function.php"; ?>
<?Php include "include/header.php"; ?>
<?Php include "include/nav1.php"; ?>
<?Php include "include/nav.php"; ?>

<?php
  error_reporting(0);
  if (isset($_SESSION['email'])) {
                          
  $the_post = $_SESSION['email'];

  }
  $query = "SELECT * FROM patientregistration where email ='{$the_post}'";
  $select_posts = mysqli_query($connection,$query);  

  while($row=mysqli_fetch_assoc($select_posts)) {
                        $patient_id = $row['patient_id'];
                      }
?>





<?php 
      if (isset($_POST['submit'])) {         
        $date = date('Y-m-d');                       
        $email = $_SESSION['email'];
    
      $query_for_check = "SELECT serial_id FROM `serial` where date ='{$date}'";
      $s_post = mysqli_query($connection,$query_for_check);
      $rows=mysqli_num_rows($s_post);
     if($rows>15)
         {
           echo "<h5 style='color: red;'>Sorry! Serial is not available </h5>";
         }
     else{

    $check = "SELECT * FROM `serial` where email ='{$_SESSION['email']}' and date ='{$date}'";
    $post = mysqli_query($connection,$check);
    $checkrows=mysqli_num_rows($post);
    if($checkrows>0) {
      echo "<h5>You have already taken the Serial</h5>";
     }else{      
        $query = "INSERT INTO `serial`(`serial_id`,`patient_id`,`date`,`email`) VALUES ('','{$patient_id}','{$date}','{$email}')";            
        $create_post_query = mysqli_query($connection,$query);                
        confirm($create_post_query);    
              }
            }
          }
 ?>
<table id="example" class="table table-striped table-bordered" style="width:100%">
  <?php  
      if (isset($_SESSION['email'])) {                          
        $the_post = $_SESSION['email'];
        if (isset($_POST['submit'])) {         
        $date = date('Y-m-d');                       
     } 
    }                   
    $query = "SELECT serial_id FROM `serial` where email ='{$the_post}' and date ='{$date}'";
              $select_posts = mysqli_query($connection,$query);  
               while($row = mysqli_fetch_array($select_posts)){            
                                 $serial_id = $row['serial_id'];
                              
                             }
                          ?>  
            
<div class="container">
  <div class="row">
 <h5 style=" color: blue;text-align: center;">Your Serial Number is : <?php echo $serial_id; ?> Your Patient ID is : <?php echo $patient_id; ?></h5>
              <form class="form-horizontal" role="form" action=" " method="post" enctype="multipart/form-data">
                 
                  <div class="form-group">

                  <button type="submit" style='margin-left: 422px;margin-right: 400px; border-radius: 16%;font-size: 20px;' name="submit" class="btn btn-primary" >Make An Appoinment</button>
                                     
                    </div> 
                </div> 
          </form>
        </div>
  </div>
</table>                
<br>
<br><br><br>
<br>
<br>
<br>


<br><br><br>
   

 
<?Php include "include/footer.php"; ?>
