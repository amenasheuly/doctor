<?Php include "include/header.php"; ?>


<section class="navi">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">EHRS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="doctor.php">Doctor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
    </ul>
    <div class="dropdown">
  <button class="dropbtn">Log In</button>
  <div class="dropdown-content">
    <a href="doctorlogin.php">Admin Login</a>
    <a href="assistantlogin.php">Assistant Login</a>
    <a href="patientlogin.php">Patient Login</a>
  </div>
</div>
    <form class="form-inline my-2 my-lg-0" style="padding-left: 541px;">

      <button class="btn btn-success" type="submit;" ><a style='color: #ffeb3b; text-decoration: none;' href='patientlogin.php'>Make an Appoinment</a></button>
    </form>
  </div>
</nav>
</section>


<div class="container" style="    margin-top: -19px;">  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/s3.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/s4.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img/s1.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<br>
<br>
<br>
<br>

<section class="contact">
  <div class="row" style=" width: 100%">
    <div class="col-md-1"></div>
    <div class="col-md-3" style="    border: 2px solid black;">

      <h3 style="text-align: center;" ><i class="fas fa-street-view" style=""></i> <br>Our Location</h3>
      <p style="text-align: center;">Female Academic Campus,IIUC,Kumira,Chittagong-4000</p>

    </div>
    <div class="col-md-1"></div>

    <div class="col-md-3" style="    border: 2px solid black;">
      <h3 style="text-align: center;"><i class="fas fa-phone-square"></i> <br>Phone,Fax,Email</h3>
      <p style="text-align: center;">Phone: 0102030406</p>
      <p style="text-align: center;">Fax: 02351266</p>
      <p style="text-align: center;">Email: ehrs@gmail.com</p>

    </div>
    <div class="col-md-1"></div>

    <div class="col-md-3" style="    border: 2px solid black;">
      <h3 style="text-align: center;"><i class="fas fa-user-clock"></i> <br>Opening Hours</h3>
      <p style="text-align: center;">Saturday-Thursday: 06.00PM-10.00PM</p>
      <p style="text-align: center;">Frifay:Closed</p>


    </div>

  </div>

</section>
<br>
<br>
<br>
<br>


<section class="footerarea">
  <div class="row" style=" background-color: black;" >
    <div class="col-md-4" >
     <h3 style="text-align: center; color: white;">Dr Christophe Gaudeul </h3>
      <ul style="list-style: none; ">
        <li><a href="" style="text-decoration: none;">Facebook</a></li>
   
        <li><a href=""style="text-decoration: none;">Twitter</a></li>
        <li><a href=""style="text-decoration: none;">Linkdin</a></li>
      
      </ul>
    </div>
    
    <div class="col-md-4">
      <h3 style="text-align: center; color: white;">Quik Link</h3>
      <a href="about.php" style="    margin-left: 110px;">About Us</a> <br>
      <a href="doctor.php" style="    margin-left: 110px;">Doctors</a> <br>
      <a href="contact.php" style="    margin-left: 110px;">Contact US</a>
    </div>
    <div class="col-md-4">
      <h3 style="color: white;">Newsletter</h3>
      <p style="color: blue;">Signup for our Latest Service & News</p>
      <div class="form-group">
          <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />

     </div>
     <a href="">Subscribe Now</a>
    </div>

  </div>

</section>
<section class="footer">
	<p style="background-color: black; color: white; text-align: center;">@Copyright 2019 EHRS Bangladesh Design By: </p>
</section>
</body>

<script type="text/javascript" src="js/bootstrap.min.js"></script>

</html>