<?Php include "include/database.php"; ?>
<?php ob_start(); ?>
<?Php include "include/function.php"; ?>
<?Php include "include/header.php"; ?>
 <?Php include "include/nav.php"; ?>





 <br><br><br>
  <div class="row">
    <div class="col-md-12" style="margin-top: -92px; margin-left: 480px;">
   <input style="border-radius: 40%;padding-left: 30px;padding-right: 30px;" type="button" class="btn btn-primary" onclick="printDiv('printTable')" value="print" />
                    
   </div>
  </div>
  <div id="printTable">
               
  <div class="row">
  <div class="col-md-12">
<?php 
$query="SELECT* FROM a_dmin";
$result = mysqli_query($connection, $query);
while($row = mysqli_fetch_array($result)){
  $name= $row['name'];
                                 $degree = $row['degree'];
                                 $phone = $row['phone'];
                                 $email = $row['email'];
                                 $p_status = $row['p_status'];
                                 $address = $row['address'];

}

 ?>

                   <h1 style=" margin-left: 8px;" >EHRS </h1>
                   <p style="  margin-left: 10px;    margin-top: -20px;">Improve the Quality of Treatment</p>
                   <h3 style="text-align: right;     margin-top: -70px;     margin-right: 5px;"><?php echo $name;?></h3>
                   
                   <p style="text-align: right;    margin-top: -15px;margin-right: 5px;"><?php echo $degree;?></p>
                    <p style="text-align: right;    margin-top: -15px;margin-right: 5px;">Phone: <?php echo $phone;?></p>
                   <p style="text-align: right;    margin-top: -15px;margin-right: 5px;">Email: <?php echo $email;?></p>
                   <p style="text-align: right;    margin-top: -15px;margin-right: 5px;">  <?php echo $p_status;?></p>
                   <p style="text-align: right;    margin-top: -15px;margin-right: 5px;"> <?php echo $address;?></p>
                  
                </div>
 </div>
  <hr style="margin-top: -10px;">

 <?php  
    

      if (isset($_GET['pres_id'])) {
                          
      $the_press_id = $_GET['pres_id'];
  
   ?>
<?php
$query ="SELECT * FROM prescription_new WHERE pres_id = $the_press_id";
      $result = mysqli_query($connection, $query);

    ?>
    <div class="row">
    <?php  

      while($row = mysqli_fetch_assoc($result))  
      {  
                                 
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
          $p_test = $row['p_test'];
          $t_report = $row['t_report'];
          $prescribe = $row['prescribe'];
          $advice = $row['advice'];
          $daily = $row['daily'];
          $refer = $row['refer'];     
 } 

?> 

               <div class="col-md-6">
               <h5 ><b>Patient Parsonal Information</b></h5> 
               <p style="margin-top: -15px;">Name: <?php echo $first_name;?> <?php echo $last_name?></p>
               <p style="margin-top: -15px;">Gender: <?php echo $gender;?> </p>
               <p style="margin-top: -15px;">Age: <?php echo $age;?></p>
               <p style="margin-top: -15px;">Blood Group: <?php echo $blood;?></p>
               <p style="margin-top: -15px;">Weight: <?php echo "$weight";?></p>
               <p style="margin-top: -15px;">Blood Pressure:   Systolic -> <?php echo "$systolic";?> <br> diastolic -> <?php echo "$diastolic";?> </p>
               <p style="margin-top: -15px;">COncomitant Disease: <?php echo "$disease";?></p>
               </div>
                         
               <div class="col-md-6">
                <h5><b>Problem</b></h5>
                <p><?php echo "$disease";?></p>

                </div>
                
              </div>
              <hr style="    margin-top: -10px;">
              <div class="row">
                  
                <div class="col-md-6">
                  <h5>Previous Test Report</h5>
                  <p>
                    <?php echo $p_test;?>
                  </p>
               <!--    <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Test Name</th>
        <th scope="col">Remarks</th>
        <th scope="col">Diagnostic Centre</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Canboplatin</td>
        <td>450g</td>
        <td>CSCR</td>
      </tr>
       <tr>
        <th scope="row">1</th>
        <td>Canboplatin</td>
        <td>450g</td>
        <td>CSCR</td>
      </tr>
       <tr>
        <th scope="row">1</th>
        <td>Canboplatin</td>
        <td>450g</td>
        <td>CSCR</td>
      </tr>
       <tr>
        <th scope="row">1</th>
        <td>Canboplatin</td>
        <td>450g</td>
        <td>CSCR</td>
      </tr>
    </tbody>
  </table>
 -->
                </div>
                <div class="col-md-6">
                  <h5>Adviced Test</h5>
                  <p>
                    <?php echo "$t_report";?>
                    
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <h5>Medicine & Advice</h5>
                <p>Medicine: <?php echo "$prescribe";?> <br> <br>Advice: <?php echo "$advice";?></p>
                  <p>Drug COntinue <?php echo "$daily";?> weeks</p>


                </div>
              
              <hr style="    margin-top: -10px;">
                <div class="col-md-6">
                <h4>Reference Doctor</h4>
                <p><?php echo "$refer";?></p>
              </div>
             
              </div>
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <p>Visiting Hours:5.00 PM & 9.00-10.00 PM</p>

                </div>
                <div class="col-md-6">
                  
                  <p style="text-align: right;" >EHRS HOTLINE: +880123456</p>
                </div>
              </div>
              <hr style="    margin-top: -10px;">
                    <br>
          <br><br>
          </div>
              </div> 
              </div>

                  </div>
                </div>

              </div>
            <?php }?>
        
<script type="text/javascript">
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

  
    <?Php include "include/modal.php"; ?>



     <?Php include "include/footer.php"; ?>
