
   <?Php include "include/database.php"; ?> 
   <?Php include "include/function.php"; ?> 
   <?Php include "include/header.php"; ?> 
   
  <style type="text/css">
    body {
     background: url('https://static-communitytable.parade.com/wp-content/uploads/2014/03/rethink-target-heart-rate-number-ftr.jpg') fixed;
    background-size: cover;
    }

*[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: #f2f2f2;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}

  </style>
 
	
   <?Php include "include/nav.php"; ?> 


<?php 


//   if (isset($_POST['registration'])) {
                                              
// header("Location: index.php");

//         }



 ?>


 <?php
         if (isset($_POST['registration'])) {

                          $patient_id = $_POST['patient_id'];
                          $first_name = $_POST['first_name'];
                          $last_name = $_POST['last_name'];
                          $email = $_POST['email'];
                          $password = $_POST['password'];
                          $phone = $_POST['phone'];
                          // $bio = $_POST['bio'];
                          $gender = $_POST['gender'];
                          $age = $_POST['age'];
                          $address = $_POST['address'];
                          

                          $t_img   =$_FILES['images']['name'];
                          $t_image_temp = $_FILES['images']['tmp_name'];

                          
                        move_uploaded_file($t_image_temp,  "img/$t_img");


 //creating Patientid
    $letters = '';
    $numbers = '';
    foreach (range('A', 'Z') as $char) {
        $letters .= $char;
    }
    for($i = 0; $i < 10; $i++){
      $numbers .= $i;
    }
    $patient_id = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);
    //

        $query = "SELECT * FROM `patientregistration` WHERE `email` ='$email' LIMIT 1 ";
            $sth = mysqli_query($connection, $query);
            $singleData =mysqli_fetch_assoc($sth);
            if ($singleData) {
                
                if ($singleData['email'] === $email) {
                    echo "email already exists";
                }
            }
            else {

           $query = "INSERT INTO  patientregistration (patient_id,first_name,last_name,email,password,phone,gender,age,address,t_img)";
           $query .= " VALUES ('{$patient_id}','{$first_name}','{$last_name}','{$email}','{$password}','{$phone}','{$gender}','{$age}','{$address}','{$t_img}')"; 

            $create_post_query = mysqli_query($connection,$query);
                             
              confirm($create_post_query);

                  
      }
                      }
                     ?>







<div class="container">
            <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                <h2>Registration</h2>

                 <!--  <div class="form-group">                
                    <label for="firstName" class="col-sm-3 control-label">Patient ID</label>
                    <div class="col-sm-9">
                       
                    </div>
                </div> -->
                    
                <div class="form-group">                
                    <label for="firstName" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                      <input type="hidden" id="patient_id" name="patient_id" class="form-control" autofocus>
                       <input type="text" id="firstName" name="first_name" placeholder="First Name" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="lastName" name="last_name" placeholder="Last Name" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control" name= "email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                    </div>
                </div>
               <!--  <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" name="conf_pass" placeholder="Password" class="form-control">
                    </div>
                </div> -->
               <!--  <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                    <div class="col-sm-9">
                        <input type="date" name="date" id="birthDate" class="form-control">
                    </div>
                </div> -->
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input type="number" id="phoneNumber" name="phone" placeholder="Phone number" class="form-control">
                        <span class="help-block">Your phone number won't be disclosed anywhere </span>
                    </div>
                </div>
               <!--  <div class="form-group">
                        <label for="Height" class="col-sm-3 control-label">Height* </label>
                    <div class="col-sm-9">
                        <input type="number" id="height" name="heigth" placeholder="Please write your height in centimetres" class="form-control">
                    </div>
                </div>
                 <div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">Weight* </label>
                    <div class="col-sm-9">
                        <input type="number" id="weight" name="weight" placeholder="Please write your weight in kilograms" class="form-control">
                    </div>
                </div> -->
              <!--   <div class="form-group">
                        <label for="bio" class="col-sm-3 control-label">Short Biography </label>
                    <div class="col-sm-9">
                        <input type="text" id="weight" name="bio" placeholder="Please write Biography" class="form-control">
                    </div>
                </div> -->
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                  <div class="form-group">
                  	<select name="gender" style="    margin-left: 15px;border: 1px solid #ccc;border-radius: 4px;padding: 6px 12px;">
                  		<option>
                  			Male
                  		</option>
                  		<option>
                  			Female
                  		</option>
                  	</select>
                  </div>
                </div> 
                <div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">Age* </label>
                    <div class="col-sm-9">
                        <input type="number" id="age" name="age" placeholder="Please write your age" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">Address* </label>
                    <div class="col-sm-9">
                        <input type="text" id="address" name="address" placeholder="Please write your Address" class="form-control">
                    </div>
                </div>
                  <div class="form-group">
                        <label for="image" class="col-sm-3 control-label">Photo* </label>
                    <div class="col-sm-9">
                        <input type="file" name="images">
                    </div>
                </div>
                <!-- /.form-group -->
              <!--   <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div> -->
                  <div class="form-group">

              <input type="submit" name="registration" class="btn btn-primary form-control btn-block" value="Register">
                                     
                    </div>  
                  </form>
                               <!-- /form -->
        </div> <!-- ./container -->


<br>
<br>
<br>

   <?Php include "include/footer.php"; ?> 



<!-- 
<script type="text/javascript">
  $(function(){
  $.validator.setDefaults({
    highlight: function(element){
      $(element)
      .closest('.form-group')
      .addClass('has-error')
    },
    unhighlight: function(element){
      $(element)
      .closest('.form-group')
      .removeClass('has-error')
    }
  });
  
  $.validate({
    rules:
    { 
        password: "required",
      birthDate: "required",
      weight: {
          required:true,
          number:true
      },
      height:  {
          required:true,
          number:true
      },
      email: {
        required: true,
        email: true
      }
    },
      messages:{      
        email: {
        required: true,
        email: true
      }
    },
        password: {
          required: " Please enter password"
        },
        birthDate: {
          required: " Please enter birthdate"
        },
        email: {
          required: ' Please enter email',
          email: ' Please enter valid email'
        },
        weight: {
          required: " Please enter your weight",
          number: " Only numbers allowed"
        },
        height: {
          required: " Please enter your height",
          number: " Only numbers allowed"
        },
      }
      
  });


</script> -->