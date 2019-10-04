   <?Php include "include/database.php"; ?>
   <?php ob_start(); ?>
   <?Php include "include/header.php"; ?>
     <?Php include "include/nav.php"; ?>
     <?Php include "include/function.php"; ?>


<?php 


 if (isset($_POST['add_assis'])) {
                                              
   header("Location: allassistant.php");

                                           }



 ?>


 <?php
                        if (isset($_POST['add_assis'])) {

                          // $id = $_POST['id'];
                          $name = $_POST['name'];
                          $assis_id = $_POST['assis_id'];
                          $email = $_POST['email'];
                          $password = $_POST['password'];
                          $degree = $_POST['degree'];
                          $phone = $_POST['phone'];
                          $bio = $_POST['bio'];
                          $gender = $_POST['gender'];
                          $age = $_POST['age'];
                          $address = $_POST['address'];
                          

                          $img = $_FILES['image']['name'];
                          $image_temp = $_FILES['image']['tmp_name'];

                          
                        move_uploaded_file($image_temp,  "img/$img");
                        $query = "INSERT INTO  assistant(name,assis_id,email,password,degree,phone,bio,gender,age,address,img)";
                        $query .= " VALUES ('{$name}','{$assis_id}','{$email}','{$password}','{$degree}','{$phone}','{$bio}','{$gender}','{$age}','{$address}','{$img}')"; 

                          $create_post_query = mysqli_query($connection,$query);
                             
                            confirm($create_post_query);

                        }

                     ?>


        <div class="row">
          <div class="container">
          <form class="form-horizontal" role="form" action=" " method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">Full Name</label>
                        <div class="col-sm-6">
                            <input type="text" name="name" id="lastName" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Assistant ID </label>
                        <div class="col-sm-6">
                            <input type="text" name="assis_id" id="assistant_id" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-6">
                            <input type="email" name="email" id="email"class="form-control">
                        </div>
                    </div>
                      <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-6">
                            <input type="password" name="password" id="password"class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birthDate" class="col-sm-3 control-label">Last Degree </label>
                        <div class="col-sm-6">
                            <input type="text" name="degree" id="birthDate" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birthDate" class="col-sm-3 control-label">Age </label>
                        <div class="col-sm-6">
                            <input type="number" name="age" id="birthDate" class="form-control">
                        </div>
                    </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Contact Number </label>
                    <div class="col-sm-6">
                        <input type="number" name="phone" id="birthDate" class="form-control">
                    </div>
                </div>
               <!--  <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Short Biography </label>
                    <div class="col-sm-6">
                        <input type="text" name="bio" id="birthDate" class="form-control">
                    </div>
                </div> -->
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Address </label>
                    <div class="col-sm-6">
                        <input type="text" name="address" id="birthDate" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-6">Gender</label>
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
                        <label for="image" class="col-sm-3 control-label">Photo* </label>
                    <div class="col-sm-9">
                        <input type="file" name="image">
                    </div>
                </div>
                  <div class="col-sm-6">
                    <div class="form-group">

                  <input type="submit" name="add_assis" class="btn btn-primary form-control btn-block" value="Submit">
                                     
                    </div> 
                </div> 
          </form>
        </div>
      </div>

              <br><br><br>
        </div> 
        </div>

            </div>
          </div>

        </div>
  

<?Php include "include/modal.php"; ?>



     <?Php include "include/footer.php"; ?>