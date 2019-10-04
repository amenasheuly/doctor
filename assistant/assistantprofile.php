 <?Php include "include/database.php"; ?>
<?php //ob_start(); ?>
     <?Php include "include/header.php"; ?>
     <?Php include "include/nav.php"; ?>

     <?php 

                      $query =   "SELECT * FROM assistant";
                      $select_posts = mysqli_query($connection,$query);  

                    while($row=mysqli_fetch_assoc($select_posts)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $assis_id = $row['assis_id'];
                        $email = $row['email'];
                        $degree = $row['degree'];
                        $age = $row['age'];
                        $phone = $row['phone'];
                        // $bio = $row['bio'];
                        $address = $row['address'];
                        $gender = $row['gender'];
                        $img = $row['img'];

                        }
                  ?>

          <h1 class="h3 mb-0 text-gray-800 " style=" text-align: center;"><b>Profile</b></h1>

          <br><br><br>
          <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            
                      <table class="table" style="border: 1px solid #ccc">
                            <thead>
                               <tr>
                                <th style="    text-align: center;"> <?php echo "$assis_id"; ?></th>

                              </tr>
                              <tr>
                                <th style="    text-align: center;"> <?php echo "$name"; ?></th>

                              </tr>
                            </thead>
                           <tbody>
                                        <tr>
                                          <td style="    text-align: center;">Degree : <?php echo "$degree"; ?> </td>
                                       
                                          
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
                </div>
              </div>
              <div class="information">
                <table class="table" style="border: 1px solid #ccc">
      <h3>Details Information</h3>
      <hr>
      <tbody>
        <tr>
          <td>Date of Birth:  </td>
          <td> <?php echo "$age"; ?> </td>
       
          
        </tr>
        <tr>
          <td>Gender</td>
          <td><?php echo "$gender"; ?></td>
         
          
        </tr>
        <tr>
          <td>Contact Number </td>
          <td ><?php echo "$phone"; ?> </td>
          
        </tr>
        <!-- <tr>
          <td>Short Biography</td>
          <td><?php echo "$bio"; ?></td>
          
        </tr> -->
         <tr>
          <td>Address</td>
          <td><?php echo "$address"; ?></td>
          
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
