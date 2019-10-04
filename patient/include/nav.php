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

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            
<?php 
session_start();

  $query = "SELECT * FROM patientregistration where email ='".$_SESSION['email']."'";

                     
                  $select_posts = mysqli_query($connection,$query);  

                    while($row=mysqli_fetch_assoc($select_posts)) {
                        $id = $row['patient_id'];
                        $first_name = $row['first_name'];
                        $last_name = $row['last_name'];
                        $t_img = $row['t_img'];
                      

                        }
                            
                  ?>
      

            <!-- <div class="topbar-divider d-none d-sm-block"></div> -->

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo  "$first_name". "  "  . "$last_name"; ?></span>
                
                <?php echo "<img class='img-profile rounded-circle img-responsive'  src='../img/$t_img' alt='image'>"; ?>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="index.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->