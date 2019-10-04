<?Php include "include/database.php"; ?>
 <?php ob_start(); ?>

<?Php include "include/header.php"; ?>
     <?Php include "include/nav.php"; ?>

     <?php 

                      $query =   "SELECT * FROM a_dmin";
                      $select_posts = mysqli_query($connection,$query);  

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
                        // $bio = $row['bio'];
                        $spaciality = $row['spaciality'];
                        $img = $row['img'];

                        }
                  ?>

     
                <div class="container-fluid">
            <div class="row">
              <div class="col-md-8">
                <table class="table" style="border: 1px solid #ccc">
    <thead>
      <tr>
        <th style="    text-align: center;"> <?php echo "$user_name"; ?></th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="    text-align: center;">Degree:  <?php echo "$degree"; ?> </td>
     
        
      </tr>
       <tr>
        <td style="    text-align: center;">Goverment Reg. No: <?php echo "$govt_reg"; ?></td>
     
        
      </tr>
      <tr>
        <td style="    text-align: center;">Email: <?php echo "$email"; ?></td>
      </tr>
      <tr>
        <td style="    text-align: center;">Electronic Health Record System Bangladesh </td>
        
      </tr>
    </tbody>
  </table>

               </div>
              <div class="col-md-4">
                <?php echo "<img class='img-responsive' style ='width: 79%;height: 200px;' src='../img/$img' alt='image'>"; ?>
                <br>
                <br>
                <!-- <a style="text-decoration: none; color: red; font-size: 20px;margin-left: 100px;" href="doctorprofileedit.php?source=edit_post&p_id=  <?php //$id?>">Edit Profile</a> -->
                <a style="text-decoration: none; color: red; font-size: 20px;margin-left: 100px;" href="doctorprofileedit.php">Edit Profile</a>
              </div>
            </div>
            <div class="information">
              <table class="table" style="border: 1px solid #ccc">
    <h3>Details Information</h3>
    <hr>
    <tbody>
      <tr>
        <td>Date of Birth:  </td>
        <td> <?php echo "$date"; ?> </td>
     
        
      </tr>
      <tr>
        <td>Gender</td>
        <td><?php echo "$gender"; ?></td>
       
        
      </tr>
      <tr>
        <td>Contact Number </td>
        <td ><?php echo "$phone"; ?> </td>
        
      </tr>
       <tr>
        <td>Academic Status </td>
        <td > Degree:  <?php echo "$degree"; ?></td>
        
      </tr>
      <tr>
        <td>Professional Status</td>
        <td ><?php echo "$p_status"; ?></td>
        
      </tr>
      <tr>
        <td>Attached Hospital</td>
        <td ><?php echo "$attached_h"; ?></td>
        
      </tr>
      <!-- <tr>
        <td>Short Biography</td>
        <td ><?php echo "$bio"; ?></td>
        
      </tr> -->
      <tr>
        <td>Speciality</td>
        <td ><?php echo "$spaciality"; ?></td>
        
      </tr>
      <tr>
        <td>Chamber Address</td>
        <td ><?php echo "$address"; ?></td>
        
      </tr>
    </tbody>
  </table>

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