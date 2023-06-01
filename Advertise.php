<?php
include 'header.php';
include 'auth_session.php';

// $foo='bar';

// var_dump($foo);
// date_default_timezone_set('Paris/France');
$today = date('Y-m-d h:i:s');
$later= date('2023/05/22 10:41:16');

if(isset($_POST["post_ad"])) {
  $email=$_SESSION["user"];
  $title=$_POST["title"];
  $price=$_POST["price"];
  $mobile=$_POST["mobile"];
  $cat_name=$_POST["category"];
  $condition=$_POST["condition"];
  $town=$_POST["town"];
  $address=$_POST["address"];
  $description=$_POST["post_content"];

$a= array("BMW", "Volvo", "Mercedez");
  $filename = $_FILES['post_img']['name'];
        $destination = "images/" . $filename;
        $file = $_FILES['post_img']['tmp_name'];
        move_uploaded_file($file, $destination);


  $sql="insert into post(post_title,post_price,post_town,post_address,	post_condition,	cat_name,	post_user_email,	post_image	,post_description,post_date
) VALUES('$title','$price', '$town', '$address','$condition','$cat_name','$email','$filename', '$description','$today')";
   $result1=$conn->query($sql);
   if($result1){
     // echo "<h4 style='color:green;'>Post has been uploaded succesfully</h4>";
     ?><script type="text/javascript">
       alert('Post has been uploaded succesfully')
     </script><<?php
   }
   else {
     echo "<h4 style='color:red;'>Error uploading post</h4>";
   }
}

?>
  <section class="body">
    <div id="logo"style="margin:5px 5px 0px 100px;">
      Bazaar
    </div>
    <h1 class="advertise-heading">Advertise item</h1>
    <div style="float:right; width:100px; ">
      <?php echo $today ?>
    </div>
    <div class="con">

<div class="" style="margin-left:20px">


    <div class="user-info">
      <table>
        <tr>
          <td><img src="20210728_143801.jpg" alt="user image" style=" border-radius:50px;" width="50px" height="50px"></td>
          <td><p style="margin-left:5px">doalex4668@gmail.com</p></td>
        </tr>
      </table>
    </div>

    <div class="account-info">
      <ul>
        <li class="headingAcc">ACCOUNT</li>
        <a href="myAdds.php"> <li>My Adds</li></a>
        <a href="notifications.php"> <li>Notifications</li></a>
        <a href="logout.php"> <li>Logout</li></a>
      </ul>
    </div>
</div>


    <div class="Advertise-box">

  				<form action="" method="post" enctype="multipart/form-data">
  						<label for="title">Post Title<span style="color:red">*</span></label><br>
  						<input type="text" name="title" class="form-control ad-input" required>

  						<label for="price">Price<span style="color:red">*</span></label><br>
  						<input type="text" name="price" class="form-control ad-input" required>

  						<label for="">Contact No<span style="color:red">*</span></label><br>
  						<input type="text" name="mobile" class="form-control ad-input" required><br>

  						<label for="">Condition Type<span style="color:red">*</span></label>
  						<select name="condition" id="" required>
  							<option value="Used">Used</option>
  							<option value="New">New</option>
  						</select><br><br>


  						<label for="">Category<span style="color:red">*</span></label>
              <select name="category" id="" aria-placeholder="Category" required>
       <?php
       $sql="select cat_name from category;";
       $result=$conn->query($sql);
       if ($result->num_rows>0) {

           for ($i=0; $i <$result->num_rows; $i++) {
             $row=$result->fetch_assoc();
             $cat_name=$row['cat_name'];

       ?>

      <option value=<?php echo $cat_name; ?> ><?php echo $cat_name; ?></option>
   <?php }
  } ?>
    </select><br><br>

  						<label for="">Town<span style="color:red">*</span></label><br> <input type="text" name="town" class="form-control ad-input" required>

              <label for="">Adress<span style="color:red">*</span><br>  <input type="text" name="address" class="form-control ad-input" required>

              <label for=""style="font-weight:bold; font-size:20px;">Select Image<span style="color:red">*</span></label></br> 	<input type="file" value="upload image" name="post_img" required><br>
  						<label for="post_content">description<span style="color:red">*</span></label><br> <textarea class="form-control" name="post_content" id="" cols="56" rows="5"style="text-transform:none;" required></textarea>

  						<input type='submit' value='post' name='post_ad' class='btn btn-primary' style="margin:20px auto; width:110px;">
  				</form>
    </div>

  </div>
  </section>
  </body>
</body>
</html>
