 <?Php include "include/database.php"; ?>
<?php ob_start(); ?>
<?Php include "include/function.php"; ?>

     <?Php include "include/header.php"; ?>
     <?Php include "include/nav.php"; ?>



        <h1 class="h3 mb-0 text-gray-800 " style="margin-left: 7px;margin-top: 25px;">Insert Assistive Information </h1>
      <br><br>


<!-- <?php 
 // if (isset($_POST['prescription_form'])) {

  
// }

?> -->
   <?php


              if (isset($_POST['prescription_form'])) {

                          // $id = $_POST['id'];
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
                         
                          
                          
                      
  $query = "INSERT INTO  assistive_data(patient_id,first_name,last_name,email,phone,gender,age,address,blood,systolic,diastolic,problem,disease,body,weight,date)";

  $query .= "VALUES ('{$patient_id}','{$first_name}','{$last_name}','{$email}','{$phone}','{$gender}','{$age}','{$address}','{$blood}','{$systolic}','{$diastolic}','{$problem}','{$disease}','{$body}','{$weight}','{$date}')"; 

    $create_post_query = mysqli_query($connection,$query);
                             
    confirm($create_post_query);

   }
 ?>
 <?php 

                       
      $query =   "SELECT * FROM patientregistration where patient_id='".$_GET['id']."'";
      $select_posts = mysqli_query($connection,$query);  

     while($row=mysqli_fetch_assoc($select_posts)) {
                        $id = $row['patient_id'];
                        $first_name = $row['first_name'];
                        $last_name = $row['last_name'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                       
                        $gender = $row['gender'];
                        $age = $row['age'];
                        $address = $row['address'];

                        
                        
               
                        }
                     
                  ?>


                  
 <div class="row"> 
  <div class="container">
            <form class="form-horizontal" role="form" action="" method="post"> 
                <div class='form-group'>
                    <label for='patient_id' class='col-sm-3 control-label'>Patient ID</label>
                    <div class='col-sm-6'>
                        <input type="text" name="patient_id" class="form-control" value="<?php echo $id; ?>" readonly>                          
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
                      <input type="text" name="blood" id="email" class="form-control">
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
                        <input type="text" name="systolic" id="password" class="form-control" style="margin-left: 11px;">
                        
                    </div>

                    <div class="col-sm-3">
                       <label for="password" class="col-sm-3 control-label">Diastolic</label>
                        <input type="text" name="diastolic" id="password"class="form-control">
                    </div>
                    </div>
                </div>
              
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Problem Description</label>
                    <div class="col-sm-6">
                        <input type="text" name="problem" id="birthDate" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Concomitant Disease</label>
                    <div class="col-sm-6">
                        <input type="text" name="disease" id="phoneNumber" class="form-control">
                    
                    </div>
                </div>
                <div class="form-group">
                        <label for="Height" class="col-sm-3 control-label">Body Temperature </label>
                    <div class="col-sm-6">
                        <input type="text" name="body" id="height" class="form-control">
                    </div>
                </div>
                 <div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">Weight* </label>
                    <div class="col-sm-6">
                        <input type="text" name="weight" id="weight" placeholder="Please write your weight in kilograms" class="form-control">

                    </div>
                </div>
                 <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">date* </label>
                    <div class="col-sm-6">
                        <input type="date" name="date" id="date" class="form-control">

                    </div>
                </div>
                <!-- /.form-group -->
              <!--   <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div> -->
                <div class="col-sm-6">
                    <div class="form-group">

                  <input type="submit" name="prescription_form" class="btn btn-primary form-control btn-block" value="Submit">
                                     
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