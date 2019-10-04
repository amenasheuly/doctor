  <?Php include "include/database.php"; ?>
   <?php ob_start(); ?>
   <?Php include "include/header.php"; ?>
     <?Php include "include/nav.php"; ?>
     <?Php include "include/function.php"; ?>




     <?php 


          if (isset($_POST['edit_doctr'])) {
                                              
            header("Location: doctorprofile.php");

            }



 ?>


 <?php

                       //   if (isset($_GET['p_id'])) {
                          
                       //    $the_post = $_GET['p_id'];


                       // WHERE id = $the_post} 


       $query =   "SELECT * FROM a_dmin ";
      $select_posts = mysqli_query($connection,$query) or die( mysqli_error($connection));
;  

        while($row=mysqli_fetch_assoc($select_posts)) {
                        $id = $row['id'];
                        $email = $row['email'];
                        $date = $row['date'];
                        $user_name = $row['user_name'];
                        $degree = $row['degree'];
                        $govt_reg = $row['govt_reg'];
                        $gender = $row['gender'];
                        $phone = $row['phone'];
                        $p_status = $row['p_status'];
                        $address = $row['address'];
                        $attached_h = $row['attached_h'];
                        $bio = $row['bio'];
                        $spaciality = $row['spaciality'];
                        $img = $row['img'];

                        }



                        


                        if (isset($_POST['edit_doctr'])) {

                          // $id = $_POST['id'];
                          $email = $_POST['email'];
                          $date = $_POST['date'];
                          $user_name = $_POST['user_name'];
                          $degree = $_POST['degree'];
                          $govt_reg = $_POST['govt_reg'];
                          $gender = $_POST['gender'];
                          $phone = $_POST['phone'];
                          $p_status = $_POST['p_status'];
                          $address = $_POST['address'];
                          $attached_h = $_POST['attached_h'];
                          $bio = $_POST['bio'];
                          $spaciality = $_POST['spaciality'];
                          $img = $_FILES['image']['name'];
                          $image_temp = $_FILES['image']['tmp_name'];

                          
                        move_uploaded_file($image_temp,  "img/$img");


                           if (empty($img)) {
    
                            $query = "SELECT * FROM a_dmin ";
                            $select_img = mysqli_query($connection,$query);

                            while ($row= mysqli_fetch_assoc($select_img))
                             {
                                $img = $row['img'];
                            }

                        }

                        $query = "UPDATE  a_dmin SET ";
                        $query .= "email = '{$email}', ";
                        $query .= "date = '{$date}', ";
                        $query .= "user_name = '{$user_name}', ";
                        $query .= "degree = '{$degree}', ";
                        $query .= "govt_reg = '{$govt_reg}', ";
                        $query .= "gender = '{$gender}', ";
                        $query .= "phone = '{$phone}', ";
                        $query .= "p_status = '{$p_status}', ";
                        $query .= "address = '{$address}', ";
                        $query .= "attached_h = '{$attached_h}', ";
                        $query .= "bio = '{$bio}', ";
                        $query .= "spaciality = '{$spaciality}', ";
                        $query .= "img = '{$img}' ";
                       // $query .= "WHERE id = {$the_post} ";


                          $edit_user_query = mysqli_query($connection,$query);
                           confirm($edit_user_query); 

            

                        }

                     ?>





                    <div class="container-fluid">
                          
                <form class="form-horizontal" role="form" action=" " method="Post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label for="firstName" class="col-sm-3 control-label">My Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="<?php echo $user_name; ?>" name="user_name" id="firstName" class="form-control" autofocus>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email* </label>
                        <div class="col-sm-9">
                            <input type="email" value="<?php echo $email; ?>" name="email" id="email" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Password*</label>
                        <div class="col-sm-9">
                            <input type="password" value="<?php echo $password; ?>" name="password" id="password"  class="form-control">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-sm-3">Gender</label>
                      <div class="form-group">
                        <select value="<?php echo $gender; ?>" name ="gender" style="    margin-left: 15px;border: 1px solid #ccc;border-radius: 4px;padding: 6px 12px;">
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
                        <label for="password" class="col-sm-3 control-label">Govt.Reg.No</label>
                        <div class="col-sm-9">
                            <input type="text" value="<?php echo $govt_reg; ?>" name="govt_reg" id="password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                        <div class="col-sm-9">
                            <input type="date" value="<?php echo $date; ?>" name="date" id="birthDate" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                        <div class="col-sm-9">
                            <input type="phoneNumber" value="<?php echo $phone; ?>" name="phone" id="phoneNumber"  class="form-control">
                          
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="Height" class="col-sm-3 control-label">Academic Status</label>
                        <div class="col-sm-9">
                            <input type="text" value="<?php echo $degree; ?>" name="degree" id="height" class="form-control">
                        </div>
                    </div>
                     <div class="form-group">
                            <label for="weight" class="col-sm-3 control-label">Professional Status</label>
                        <div class="col-sm-9">
                            <input type="text" value="<?php echo $p_status; ?>" name="p_status" id="weight" class="form-control">
                        </div>
                    </div>
                     <div class="form-group">
                            <label for="weight" class="col-sm-3 control-label">Attached Hospital</label>
                        <div class="col-sm-9">
                            <input type="text" value="<?php echo $attached_h; ?>" name="attached_h" id="weight" class="form-control">
                        </div>
                    </div>
                     <div class="form-group">
                            <label for="weight" class="col-sm-3 control-label">Speciality</label>
                        <div class="col-sm-9">
                            <input type="text" value="<?php echo $spaciality; ?>" name="spaciality" id="weight" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="weight" class="col-sm-3 control-label">Short Biography </label>
                        <div class="col-sm-9">
                            <input type="text" value="<?php echo $bio; ?>" name="bio" id="weight" class="form-control">
                        </div>
                    </div>
                     <div class="form-group">
                            <label for="weight" class="col-sm-3 control-label">Chamber Address</label>
                        <div class="col-sm-9">
                            <input type="text" value="<?php echo $address; ?>" name="address"  id="weight" class="form-control">
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="image" class="col-sm-3 control-label">Change Photo </label>
                    <div class="col-sm-9">
                      <img width="150" src="img/<?php echo $img; ?>" >
                      <br>
                        <input type="file" name="image">
                    </div>
                </div>
                    <!-- /.form-group -->
                  <!--   <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <span class="help-block">*Required fields</span>
                        </div>
                    </div> -->
                     <div class="form-group">
                        <div class="col-sm-9">
                  <input type="submit" name="edit_doctr" class="btn btn-primary form-control btn-block" value="Submit">

                        </div>
                    </div>
                </form> <!-- /form -->
            </div> <!-- ./container -->


                  <br><br><br>
            </div> 
            </div>

                </div>
              </div>

            </div>
      

         

      <?Php include "include/modal.php"; ?>



     <?Php include "include/footer.php"; ?>
