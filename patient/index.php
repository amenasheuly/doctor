<?php ob_start(); ?>
<?Php include "include/database.php"; ?>
<?Php include "include/header.php"; ?>
<?Php include "include/nav1.php"; ?>
<?Php include "include/nav.php"; ?>


<?php 
      if (isset($_SESSION['email'])) {
                          
        $the_post = $_SESSION['email'];


    }
  $query = "SELECT * FROM patientregistration where email ='{$the_post}'";
  $select_posts = mysqli_query($connection,$query);  

  while($row=mysqli_fetch_assoc($select_posts)) {
                        $id = $row['patient_id'];
                        $first_name = $row['first_name'];
                        $last_name = $row['last_name'];
                        $email = $row['email'];
                        $password = $row['password'];
                        $phone = $row['phone'];
                        $gender = $row['gender'];
                        $age = $row['age'];
                        $address = $row['address'];
                        $t_img = $row['t_img'];

                        }
                  ?>

        <!-- Begin Page Content -->
      <div class="container-fluid">
            <div class="row">
                    <div class="col-md-8">
                              <table class="table" style="border: 1px solid #ccc">
                                  <thead>
                                    <tr>
                                      <th style="    text-align: center;"><?php echo  "$first_name"."  ". "$last_name" ; ?></th>

                                    </tr>
                                  </thead>
                                    <tbody>
                                      <tr>
                                        <td style="    text-align: center;">Presant Age: <?php echo  "$age"; ?> </td>
                                     
                                        
                                      </tr>
                                      <tr>
                                        <td style="    text-align: center;">Email: <?php echo  "$email"; ?></td>
                                       
                                        
                                      </tr>
                                      <tr>
                                        <td style="    text-align: center;">Registered Patient in Bangladesh </td>
                                        
                                      </tr>
                                    </tbody>
                              </table>

                      </div>
                      <div class="col-md-4">
                        <?php echo "<img class='img-responsive' style ='width: 79%;height: 200px;' src='../img/$t_img' alt='image'>"; ?>
                      </div>
          </div>
              <div class="information">
                      <table class="table" style="border: 1px solid #ccc">
                        <h3>Details Information</h3>
                        <hr>
                        <tbody>
                          <tr>
                            <td>Presant Age:  </td>
                            <td> <?php echo  "$age"; ?> </td>
                         
                            
                          </tr>
                          <tr>
                            <td>Gender</td>
                            <td><?php echo  "$gender"; ?></td>
                           
                            
                          </tr>
                          <tr>
                            <td>Contact Number </td>
                            <td ><?php echo  "$phone"; ?> </td>
                            
                          </tr>
                          <!--  <tr>
                            <td>Short Biography </td>
                            <td ><?php echo  "$bio"; ?>  </td>
                            
                          </tr> -->
                          <tr>
                            <td>Address</td>
                            <td ><?php echo  "$address"; ?> </td>
                            
                          </tr>
                        </tbody>
                     </table>

         </div>





     
<?Php include "include/footer.php"; ?>