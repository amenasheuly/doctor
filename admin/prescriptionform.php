<?Php include "include/database.php"; ?>
<?php ob_start(); ?>
<?Php include "include/function.php"; ?>
<?Php include "include/header.php"; ?>
 <?Php include "include/nav.php"; ?>




  <?php


              if (isset($_POST['prescription_form'])) {

                 
                  $patient_id = $_POST['patient_id'];
                  $first_name = $_POST['first_name'];
                  $last_name = $_POST['last_name'];
                  $email = $_POST['email'];
                  $phone = $_POST['phone'];              
                  $gender = $_POST['gender'];
                  $age = $_POST['age'];
                  $address = $_POST['address'];                     
                  $blood = $_POST['blood'];
                  $systolic = $_POST['systolic'];
                  $diastolic = $_POST['diastolic'];
                  $problem = $_POST['problem'];
                  $disease = $_POST['disease'];
                  $body = $_POST['body'];
                  $weight = $_POST['weight'];
                  $date = $_POST['date'];
                  $p_test = $_POST['p_test'];
                  $t_report = $_POST['t_report'];
                  $prescribe = $_POST['prescribe'];
                  $advice = $_POST['advice'];
                  $daily = $_POST['daily'];
                  $refer = $_POST['refer'];

                         
                          
                          
                      
  $query = "INSERT INTO  prescription_new(patient_id,first_name,last_name,email,phone,gender,age,address,blood,systolic,diastolic,problem,disease,body,weight,date,p_test,t_report,prescribe,advice,daily,refer)";

  $query .= "VALUES ('{$patient_id}','{$first_name}','{$last_name}','{$email}','{$phone}','{$gender}','{$age}','{$address}','{$blood}','{$systolic}','{$diastolic}','{$problem}','{$disease}','{$body}','{$weight}','{$date}','{$p_test}','{$t_report}','{$prescribe}','{$advice}','{$daily}','{$refer}')"; 

    $create_post_query = mysqli_query($connection,$query);
                             
    confirm($create_post_query);
    header("Location: allprescriptiondata.php");

 
   }
 ?>
 


 <?php

      if (isset($_GET['assistive_id'])) {
                          
      $the_post = $_GET['assistive_id'];
      


  }

    $query = "SELECT * FROM assistive_data WHERE assistive_id =$the_post";
    $select_users_query = mysqli_query($connection,$query);
                  
   while($row=mysqli_fetch_assoc($select_users_query)) {

    
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



}
?>




        <div class="row">
          
            <div class="container">
            <form class="form-horizontal" role="form" action="" method="post">
              <div class="form-group">
                    <label for="date" class="col-sm-3 control-label">date* </label>
                    <div class="col-sm-6">
                    <input type="" name="date" value="<?php echo $date;?> " class="form-control" readonly>

                    </div>
                </div>
               <div class='form-group'>
                    <label for='patient_id' class='col-sm-3 control-label'>Patient ID</label>
                    <div class='col-sm-6'>
                        <input type="text" name="patient_id" class="form-control" value="<?php echo $patient_id; ?>" readonly>                          
                    </div>
                </div>
                  
                 <div class='form-group'>
                    <label for='first_name' class='col-sm-3 control-label'>First_name</label>
                    <div class='col-sm-6'>
                       <input type="text" name="first_name" class="form-control" value="<?php echo $first_name;?>" readonly>
                                          
                    </div>
                </div>
                <div class='form-group'>
                    <label for='last_name' class='col-sm-3 control-label'>last_name</label>
                    <div class='col-sm-6'>
                       <input type="text" name="last_name" class="form-control" value="<?php echo $last_name;?>" readonly>
                                            
                    </div>
                </div>
                <div class='form-group'>
                    <label for='email' class='col-sm-3 control-label'>Patient Email</label>
                    <div class='col-sm-6'>
                       <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" readonly>
                                               
                    </div>
                </div>
                <div class='form-group'>
                    <label for='age' class='col-sm-3 control-label'>Patient Age</label>
                    <div class='col-sm-6'>
                       <input type="text" name="age" class="form-control" value="<?php echo $age; ?>" readonly>
                                              
                    </div>
                  </div>

                  <div class='form-group'>
                    <label for='phone' class='col-sm-3 control-label'>Patient Phone</label>
                    <div class='col-sm-6'>
                       <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>" readonly>
                                                 
                    </div>
                </div>
                        
                 <div class='form-group'>
                    <label for='gender' class='col-sm-3 control-label'>Patient gender</label>
                    <div class='col-sm-6'>
                       <input type="text" name="gender" class="form-control" value="<?php echo $gender; ?>" readonly>
                                               
                    </div>
                </div>
                <div class='form-group' >
                    <label for='address' class='col-sm-3 control-label'>Patient address</label>
                    <div class='col-sm-6'>
                       <input type="text" name="address" class="form-control" value=" <?php echo $address; ?>  " readonly>
                                              
                    </div>
                </div>
                                
                <div class="form-group">
                    <label for="blood" class="col-sm-3 control-label">Blood Group </label>
                    <div class="col-sm-6">
                      <input type="text" name="blood" value="<?php echo $blood; ?> " class="form-control" readonly>
                    </div>
                </div>
               <!--  <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Blood Pressure</label>
                </div> -->
                <h5 style="font-size: 16px;margin-left: 14px;">Blood Pressure</h5>
                <div class="form-group">
                  
                    <div class="row">
                    <div class="col-sm-3">
                      <label for="password" class="col-sm-3 control-label">Systolic</label>
                        <input type="text" name="systolic" value="<?php echo $systolic; ?> " class="form-control" style="margin-left: 11px;" readonly>
                        
                    </div>

                    <div class="col-sm-3">
                       <label for="password" class="col-sm-3 control-label">Diastolic</label>
                        <input type="text" name="diastolic" value="<?php echo $diastolic;?> "class="form-control" readonly> 
                    </div>
                    </div>
                </div>
              
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Problem Description</label>
                    <div class="col-sm-6">
                        <input type="text" name="problem" value="<?php echo $problem; ?> " class="form-control" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Concomitant Disease</label>
                    <div class="col-sm-6">
                        <input type="text" name="disease" value="<?php echo $disease; ?> " class="form-control" readonly>
                    
                    </div>
                </div>
                <div class="form-group">
                        <label for="Height" class="col-sm-3 control-label">Body Temperature </label>
                    <div class="col-sm-6">
                        <input type="text" name="body" value="<?php echo $body; ?> " class="form-control" readonly>
                    </div>
                </div>
                 <div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">Weight* </label>
                    <div class="col-sm-6">
                        <input type="text" name="weight" value="<?php echo $weight; ?> "  class="form-control" readonly>

                    </div>
                </div>
                 
                <div class="form-group">
                        <label for="test" class="col-sm-3 control-label">Prescribe Test </label>
                    <div class="col-sm-6">
                        <input type="text" name="p_test" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                        <label for="t_report" class="col-sm-3 control-label">Diagnosis/Test Report </label>
                    <div class="col-sm-6">
                        <input type="text" name="t_report" id="weight" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                        <label for="prescribe" class="col-sm-3 control-label">Prescribed Medicine </label>
                    <div class="col-sm-6">
                        <input type="text" name="prescribe" id="weight" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                        <label for="advice" class="col-sm-3 control-label">Advice </label>
                    <div class="col-sm-6">
                        <input type="text" name="advice" id="weight" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3">Daily Count</label>
                  <div class="form-group">
                    <select name="daily" style="    margin-left: 15px;border: 1px solid #ccc;border-radius: 4px;padding: 6px 12px;">
                      <option>
                        1
                      </option>
                      <option>
                        2
                      </option>
                      <option>
                        3
                      </option>
                      <option>
                        4
                      </option>
                      <option>
                        5
                      </option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                        <label for="refer" class="col-sm-3 control-label">Reference Doctor</label>
                    <div class="col-sm-6">
                        <input type="text" name="refer" id="weight" class="form-control">
                    </div>
                </div>

               
                <div class="col-sm-6">
                    <div class="form-group">

                  <input type="submit"  name="prescription_form" class="btn btn-primary form-control btn-block" value="Submit">
                                     
                    </div> 
                </div> 

            </form> <!-- /form -->

              <br>
    <br><br>
        </div> 
        </div>

            </div>
          </div>

        </div>
  


    <?Php include "include/modal.php"; ?>



     <?Php include "include/footer.php"; ?>
