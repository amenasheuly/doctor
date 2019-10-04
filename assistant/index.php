  <?Php include "include/database.php"; ?>
     <?Php include "include/header.php"; ?>
     <?Php include "include/nav.php"; ?>


        <h1 class="h3 mb-0 text-gray-800 " style=" text-align: center; ;margin-top: 25px;"><b>Dashboard</b></h1>
      <br><br><br>
      <div class="container-fluid">

          <!-- Page Heading -->
          

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-6">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Patient</div>
                        <?php 

                           $query = "SELECT * FROM patientregistration";
                           $select_all_patient = mysqli_query($connection,$query);
                           $patient_count = mysqli_num_rows($select_all_patient);

                          echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>$patient_count</div>";

                         ?>
                    </div>
                    <div class="col-auto">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-6">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Submitted Problem </div>
                        <?php 

                          //  $query = "SELECT * FROM patient";
                          //  $select_all_prblm = mysqli_query($connection,$query);
                          //  $problem_count = mysqli_num_rows($select_all_prblm);

                          // echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>$problem_count</div>";

                         ?>
                    </div>
                    <div class="col-auto">
                      
                    </div>
                  </div>
                </div>
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
