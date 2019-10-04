   <?Php include "include/database.php"; ?>
   <?php ob_start(); ?>
   <?Php include "include/header.php"; ?>
     <?Php include "include/nav.php"; ?>
     <?Php include "include/function.php"; ?>


   


<?php 


                                              if (isset($_POST['edit_assis'])) {
                                              
                                              header("Location: allassistant.php");

                                           }



 ?>


 <?php

                         if (isset($_GET['p_id'])) {
                          
                          $the_post = $_GET['p_id'];


                      }


            



                        $query =   "SELECT * FROM assistant WHERE id = $the_post";
                         $select_users_query = mysqli_query($connection,$query);  


                       while($row=mysqli_fetch_assoc($select_users_query)) {
                         $id = $row['id'];
                         $name = $row['name']; 
                         $password = $row['password'];
                         $assis_id = $row['assis_id'];                 
                         $email = $row['email'];
                         $degree = $row['degree'];
                         $age = $row['age'];
                         $phone = $row['phone'];
                         $bio = $row['bio'];
                         $address = $row['address'];
                         $gender = $row['gender'];
                         $img = $row['img'];
                                            


                       

                       
                      }





                        if (isset($_POST['edit_assis'])) {

                          // $id = $_POST['id'];
                          $name = $_POST['name'];
                          $password = $_POST['password'];
                          $assis_id = $_POST['assis_id'];
                          $email = $_POST['email'];
                          $degree = $_POST['degree'];
                          $age = $_POST['age'];
                          $phone = $_POST['phone'];
                          $bio = $_POST['bio'];
                          $address = $_POST['address'];
                          $gender = $_POST['gender'];
                          

                          $img = $_FILES['image']['name'];
                          $image_temp = $_FILES['image']['tmp_name'];

                          
                        move_uploaded_file($image_temp,  "img/$img");


                           if (empty($img)) {
    
                            $query = "SELECT * FROM assistant WHERE id = $the_post ";
                            $select_img = mysqli_query($connection,$query);

                            while ($row= mysqli_fetch_assoc($select_img))
                             {
                                $img = $row['img'];
                            }

                        }

                        $query = "UPDATE  assistant SET ";
                        $query .= "name = '{$name}', ";
                        $query .= "password = '{$password}', ";

                        $query .= "assis_id = '{$assis_id}', ";
                       // $query .= "user_role = '{$user_role}', ";
                        $query .= "email = '{$email}', ";
                        $query .= "degree = '{$degree}', ";
                        $query .= "age = '{$age}', ";

                        $query .= "phone = '{$phone}', ";
                        $query .= "bio = '{$bio}', ";
                        $query .= "address = '{$address}', ";

                        $query .= "gender = '{$gender}', ";
                        $query .= "img = '{$img}' ";
                        $query .= "WHERE id = {$the_post} ";



                          $edit_user_query = mysqli_query($connection,$query);
                           confirm($edit_user_query); 

            

                        }

                     ?>


        <div class="row">
          <div class="container">
          <form class="form-horizontal" role="form" action=" " method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <h1>Update Information </h1>
                        

                    </div>
                      <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">Full Name</label>
                        <div class="col-sm-6">
                            <input type="text" value="<?php echo $name; ?>" name="name" id="lastName" class="form-control" autofocus>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Assistant ID </label>
                        <div class="col-sm-6">
                            <input type="text" value="<?php echo $assis_id; ?>" name="assis_id" id="assistant_id" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-6">
                            <input type="email" value="<?php echo $email; ?>" name="email" id="email"class="form-control">
                        </div>
                    </div>
                      <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-6">
                            <input type="password" value="<?php echo $password; ?>" name="password" id="password"class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birthDate" class="col-sm-3 control-label">Last Degree </label>
                        <div class="col-sm-6">
                            <input type="text" value="<?php echo $degree; ?>" name="degree" id="degree" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birthDate" class="col-sm-3 control-label">Age </label>
                        <div class="col-sm-6">
                            <input type="number" value="<?php echo $age; ?>" name="age" id="birthDate" class="form-control">
                        </div>
                    </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Contact Number </label>
                    <div class="col-sm-6">
                        <input type="Number" value="<?php echo $phone; ?>" name="phone" id="phone" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Short Biography </label>
                    <div class="col-sm-6">
                        <input type="text" value="<?php echo $bio; ?> " name="bio" id="birthDate" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Address </label>
                    <div class="col-sm-6">
                        <input type="text" value="<?php echo $address; ?>" name="address" id="birthDate" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-6">Gender</label>
                  <div class="form-group">
                    <select  name="gender" value="<?php echo $gender; ?>" style="margin-left: 15px;border: 1px solid #ccc;border-radius: 4px;padding: 6px 12px;">
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
                      <img width="150" src="img/<?php echo $img; ?>" >
                      <br>
                        <input type="file" name="image">
                    </div>
                </div>
                  <div class="col-sm-6">
                    <div class="form-group">

                  <input type="submit" name="edit_assis" class="btn btn-primary form-control btn-block" value="Submit">
                                     
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