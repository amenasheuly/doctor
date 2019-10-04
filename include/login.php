<?php session_start(); ?>
<?php include 'include/database.php'; ?>
<?php
	
	

	if(isset($_POST['login'])){
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM admin WHERE user_name = '$user_name'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = 'Cannot find account with the user name';
		}
		else{
			$row = $query->fetch_assoc();
			if(password_verify($password, $row['password'])){
				$_SESSION['admin'] = $row['id'];
			}
			else{
				$_SESSION['error'] = 'Incorrect password';
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Input admin credentials first';
	}

	header('location: index.php');

?>


  
<?php 




if (isset($_POST['loginpa'])) {


	$email = $_POST['email'];
	$password = $_POST['password'];
	  

    $email = mysqli_real_escape_string($connection,$email);
    $password = mysqli_real_escape_string($connection,$password);
    

  $query = "SELECT id FROM user WHERE patientregistration = '{$email}' AND password = '{$password}' ";
  


  
  $select_user_query = mysqli_query($connection,$query);

  if (!$select_user_query) {

  	die("QUERY FAILED". mysqli_error($connection));
  	
  }


while ($row = mysqli_fetch_array($select_user_query)) {
	

	$db_id = $row['id'];
	$db_email = $row['email'];
	$db_password = $row['password'];
	$db_firstname = $row['first_name'];
	$db_lastname = $row['last_name'];
// 	$db_role = $row['user_role'];
}

// $password = crypt($password, $db_password);
$row = mysqli_num_rows($select_user_query);

   
// if ($username === $db_username && $password === $db_password)
if($row > 0)
 {
    $data = mysqli_fetch_array($run);
      $id = $data['id'];

  $_SESSION['id'] = $db_id;
  $_SESSION['email'] = $db_email;
  $_SESSION['first_name'] = $db_firstname;
  $_SESSION['last_name'] = $db_lastname;
//   $_SESSION['user_role'] = $db_role;

    header("Location: ../patient");
	 

} else {
    
    header("Location: ../index.php");

    }

  

}

 // if ($username == 'saber' && $password == '12345') {

 //      header("Location: ../admin/index.php");
 //    }




 ?>

 <?php

	if(isset($_POST['login2'])){
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM admin WHERE user_name = '$user_name'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = 'Cannot find account with the user name';
		}
		else{
			$row = $query->fetch_assoc();
			if(password_verify($password, $row['password'])){
				$_SESSION['admin'] = $row['id'];
			}
			else{
				$_SESSION['error'] = 'Incorrect password';
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Input admin credentials first';
	}

	header('location: index.php');

?>
