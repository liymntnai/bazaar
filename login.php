<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bakoz-category.css">
    <link rel="stylesheet" href="bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
  </head>
  <body>

<?php
include 'connection.php';
session_start();
$_SESSION["user"]="";
if(isset($_POST["submit"])){
  $email=test_input($_POST["email"]);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     echo "<p style='color:red; font-size:20px;text-align:center;text-transform:none;'>Invalid Email Format</p>";
   }
  $password=test_input($_POST["password"]);

  $sql="SELECT * FROM users WHERE user_pass='$password' AND user_email='$email'";
  $result=$conn->query($sql);
  if ($result->num_rows==1) {
    // code...
    $_SESSION["user"]=$email;
    header('Location: Advertise.php');
  }else {
    $emailErr="Incorrect email or password";
    echo "<p style='color:red; font-size:20px;text-align:center; text-transform:none;'>Incorrect email or password</p>";
  }
}
 function test_input($data){
  $data=htmlspecialchars($data);
  $data=trim($data);
  $data=stripslashes($data);

  return $data;
}
?>

<div class="container signup-form" style="margin:10px auto; ">
    <form action="" method="post" enctype="multipart/form-data">
		      <h2>Login</h2>
		      <p class="hint-text">or <a href="register.php">Register</a></p>
          <div class="form-group">
        	   <input type="email" class="form-control" name="email" placeholder="Email" required="required">
          </div>
		      <div class="form-group">
             <input type="password" class="form-control" name="password" placeholder="Password" required="required">
          </div>

		     <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Login</button>
         </div>

    </form>
  </div>
</body>
</html>
