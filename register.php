
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Register</title>

<!-- <link rel="stylesheet" href="assests/css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
<!-- <link rel="stylesheet" href="css/bakoz-category.css"> -->
<link rel="stylesheet" href="bootstrap-4.6.2-dist/css/bootstrap.min.css">

</head>
<body>
  <?php
include 'connection.php';

  if(isset($_POST['save'])){
    $fname=$_REQUEST["fname"];
    $lname=$_REQUEST["lname"];
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"];

    $fileName=$_FILES['user-image']['name'];
    $destination='images/user/'.$fileName;
    $file=$_FILES['user-image']['tmp_name'];
    move_uploaded_file($file, $destination);


    $sql1="SELECT * FROM `users`where email='$email' and password='$password'";
    $result1=$conn->query($sql1);
        if($result1->num_rows>0)
          {
         echo "Email Id Already Exists";
    	   exit();
          }
          else {
            // code...


    $sql="INSERT INTO `users` VALUES ('$fname','$lname','$email', '$password')";

    $result=$conn->query($sql);
    if($result){
      $_SESSION["user"]=$email;
    echo "<h2>Registration successful</h2>";
      header("Location: Advertise.php");
    }
    else{
      echo "<h2>Registration unsuccessful</h2>";
    }


}
}
   ?>
<div class="container signup-form"style="margin:10px auto;">
    <form action="" method="post" enctype="multipart/form-data">
		<h2>Register</h2>
		<p class="hint-text">Create your account</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="fname" placeholder="First Name" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="lname" placeholder="Last Name" required="required"></div>
			</div>
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
        <div class="form-group">
          <input type="number" class="form-control" name="phone" placeholder="Phone" required="required">
        </div>
        <div class="form-group">
          <input type="file" class="form-control" name="user_image" placeholder="" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="required">
        </div>

		<div class="form-group">
            <button type="submit" name="save" class="btn btn-lg btn-block btn-success">Register Now</button>
        </div>
        <div class="text-center">Already have an account? <a href="login.php">Login</a></div>
    </form>

</div>
</body>
</html>
