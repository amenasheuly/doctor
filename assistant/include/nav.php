  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-hands-helping"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Assistant</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
         <li class="nav-item">
          <div class="search" style="margin-left: 15px;">
          <i style="color:white;" class="fas fa-search"></i>
      
          <span style="color: white;"> Search</span>
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

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="registeredpatient.php">
          <i class="fas fa-capsules"></i>
          <span>Registered Patient List
          </span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="allpatienthistory.php">
          <i class="fas fa-capsules"></i>
          <span>All Assistive Information</span></a>
      </li>
      <!--  <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-capsules"></i>
          <span>All Patient History</span></a>
      </li> -->
     
      </li>
    <!--   <li class="nav-item">
        <a class="nav-link" href="appoinmentconfirm.php">
          <i class="fas fa-capsules"></i>
          <span>Appoinment Confirmation </span></a>
      </li> -->
     <li class="nav-item">
        <a class="nav-link" href="serial.php">
          <i class="fas fa-capsules"></i>
          <span>Today's serial</span></a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">

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
           
            
          </div>
          <ul class="navbar-nav ml-auto">



               <?php 

                      $query =   "SELECT * FROM assistant";
                      $select_posts = mysqli_query($connection,$query);  

                    while($row=mysqli_fetch_assoc($select_posts)) {
                        $name = $row['name'];
                        
                        $img = $row['img'];

                        }
                  ?>





            <div class="topbar-divider d-none d-sm-block"></div>

           
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo "$name"; ?></span>
                <?php echo "<img class='img-profile rounded-circle' src='../img/$img' alt='image'>"; ?>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               
         <a class="dropdown-item" href="assistantprofile.php" >
          <i class="fas fa-user-circle"></i>
          <span>Profile</span>
        </a>
                <a class="dropdown-item" href="logout.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>
        </nav>