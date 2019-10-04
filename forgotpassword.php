<?Php include "include/header.php"; ?>
<?php  ob_start() ?>
<?php include "include/database.php"; ?>

 <style type="text/css">
    .login-form {
        width: 340px;
        margin: 50px auto;
    }
    .login-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
<?Php include "include/nav.php"; ?> 


    <section class="hero-banner">
        <div class="container">
            <div class="col-md-auto">
            <h2>Recover Password</h2>
            <nav aria-label="breadcrumb" class="banner-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Forgot Password</li>
                </ol>
            </nav>
        </div>
    </section>
    <!--================Hero Banner Area End =================-->

<div class="container">
    
        <div class="login-form">
            <?php
            session_start();
              if (@$_GET['action'] == "cp"){
             echo "<form action='forgotpassword.php?action=cp' method='post'><center>";
               echo "<h2 class='text-center'>Forgot Password</h2>";      
               echo "<div class='form-group'>
                    <input type='password' class='form-control' name='new_pass' placeholder='Enter new password'>
                </div>
                <div class='form-group'>
                    <input type='password' class='form-control' name='re_pass' placeholder='Re-type password'>
                </div>
                <div class='form-group'>
                    <button type='submit' name ='change_pass'class='btn btn-primary btn-block'>Submit</button>
                </div>"; 
        $new_pass = @$_POST['new_pass'];
        $re_pass = @$_POST['re_pass'];
        if (isset($_POST['change_pass'])) {

            $check = mysqli_query($connection, "SELECT * FROM `a_dmin`");
            $rows = mysqli_num_rows($check);
            while ($row = mysqli_fetch_assoc($check)) {

                $get_pass = $row['password'];
            }
            
                if ($re_pass == $new_pass) {

                   if($query = mysqli_query($connection, "UPDATE `a_dmin` SET password ='".$new_pass."'" )){
                        echo '<h5 style="color:blue">password changed</h5>';
                      }
                  }else {
                    echo 'new password do not match';
                  } 
                  } 

            echo "</form>";
        }
             ?>
           
        </div>
</div>   


        
        

   
       <?php 
    
    //     echo "
    //          Current Password: <input type='text' name='curr_pass'><br/>
    //          New Password: <input type='password' name='new_pass'><br/>
    //          Re-type Password: <input type='password' name='re_pass'><br/>
    //         <input type='submit' name='change_pass' value='change'><br/>";

    //     $curr_pass = @$_POST['curr_pass'];
    //     $new_pass = @$_POST['new_pass'];
    //     $re_pass = @$_POST['re_pass'];
    //     if (isset($_POST['change_pass'])) {

    //         $check = mysqli_query($link, "SELECT * FROM `forum_users` where `user` = '".$_SESSION['user']."'");
    //         $rows = mysqli_num_rows($check);
    //         while ($row = mysqli_fetch_assoc($check)) {

    //             $get_pass = $row['pass'];
    //         }
    //         if ($curr_pass == $get_pass) {
    //             if ($re_pass == $new_pass) {

    //                if($query = mysqli_query($link, "UPDATE forum_users SET pass ='".$new_pass."' WHERE user='".$_SESSION['user']."'" )){
    //                     echo 'password change';
    //                   }
    //               }else {
    //                 echo 'new password do not match';
    //               }
    //             } else {
    //                 echo 'Current password do not match with real password';
    //             }
    //         }
    //     echo "</center></form>";
    // }


       ?>

         <?Php include "include/footer.php"; ?>
       