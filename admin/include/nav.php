
 <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->


      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-user-md"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Doctors</div>
      </a>

      <!-- Divider -->
     


      <!-- Nav Item - Pages Collapse Menu -->


       <li class="nav-item">
          <div class="search" style="margin-left: 15px;">
          <i style="color:white;" class="fas fa-search"></i>
      
          <span style="color: white;"> Search Patient's previous record</span>
                <form action="search.php" method="post">
                    <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit" style = "margin-top: 8px;">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
            </form>
            </div>


      </li>
      


      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapsePagesss" aria-expanded="true" aria-controls="collapsePages">
        
          <i class="fas fa-user-plus"></i>
          <span>Assistant</span>
        </a>
        <div id="collapsePagesss" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="addassistant.php">Add Assistant</a>
            <a class="collapse-item" href="allassistant.php">All Assistant</a>
            
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-database"></i>
          <span>Patient Data</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="allpatienthistory.php">All Assistive data</a>
             <a class="collapse-item" href="allprescriptiondata.php">All patient's Previous history</a>
           
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
   <!--    <li class="nav-item">
        <a class="nav-link" href="prescriptionform.php">
          <i class="fas fa-capsules"></i>
          <span>Prescription</span></a>
      </li> -->
       <!-- <a class="collapse-item" href="">Today's Serial Patient Data</a> -->
       <li class="nav-item">
        <a class="nav-link" href="todays_patient_data.php">
          <i class="fas fa-capsules"></i>
          <span>Today's Serial Patient Data</span></a>
      </li>


      <hr class="sidebar-divider d-none d-md-block">
           <li class="nav-item">
          <div class="search" style="margin-left: 15px;">
          <i style="color:white;" class="fas fa-search"></i>
      
          <span style="color: white;">Search By Test Name</span>
                <form action="searchtest.php" method="post">
                    <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit" style = "margin-top: 8px;">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
            </form>
            </div>


      </li>

      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
  
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 " style="margin-left: 7px;margin-top: 25px;">Electronic Health Record System</h1>
            
          </div>
          <ul class="navbar-nav ml-auto">


            <div class="topbar-divider d-none d-sm-block"></div>

               <?php 

                      $query =   "SELECT * FROM a_dmin";
                      $select_posts = mysqli_query($connection,$query);  

                    while($row=mysqli_fetch_assoc($select_posts)) {
                      $user_name = $row['user_name'];
                        $img = $row['img'];

                        }
                  ?>

           
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo "$user_name"; ?></span>
                
                 <?php echo "<img class='img-profile rounded-circle' src='../img/$img' alt='image'>"; ?>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="doctorprofileedit.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Edit Profile
                </a>
        
                <a class="dropdown-item" href="logout.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

      