<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bakoz-category.css">
    <link type="text/css"rel="stylesheet" href="bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js"></script>
    <title></title>
</head>
<body>
<?php
include 'connection.php';
session_start();
 ?>
  <!-- header section starts here -->
    <div class="header">
      <div class="one">
           <div id="logo">Bazaar</div>
           <div class="buy-sell-box">
               <div class="box">
                 <img src="images/salary.png" alt="" class="logo-images">
                 <h6>Buy</h6>
               </div>

               <div class="box">
                 <img src="images/profits.png" alt=""class="logo-images">
                 <h6>Sell</h6>
               </div>

               <div class="box">
                 <img src="images/exchange (1).png" alt="" class="logo-images">
                 <h6>Exchange</h6>
               </div>
          </div>
      </div>
          <div id="navbar" class="two">
              <ul>
                  <li><a href="index.php">Home</a></li>
                  <li> <a href="bakoz-smartphone.php">Smartphone</a> </li>
                  <li> <a href="bakoz-pc.php">PC</a> </li>
                  <li> <a href="bakoz-clothing.php">Clothing</a> </li>
                  <li> <a href="bakoz-car.php">Cars</a> </li>
                  <li> <a href="bakoz-housing-renting.php">Housing/Renting</a> </li>
              </ul>
          </div>
            <div class="three">

              <?php
              // $imageName="";
              if(!empty($_SESSION['user'])){
                  $userEmail=$_SESSION['user'];
                  echo $userEmail;
                  $q="select user_image from users where user_email='$userEmail'";
                  $result=$conn->query($q);

                    if ($result->num_rows>0) {
                      $row=$result->fetch_assoc();
                        $imageName=$row['user_image'];
                        // echo '<br>'.substr($image,0,20);
                       // $imageName='images/user/' .$image;

                    }else {

                    $imageName="user-img.png";
                  }


              ?>
                <p> </p>
                 <img src="<?php echo 'images/user/'.$imageName?>" alt="usr-img" height="30" width="30" style="border-radius:50%;">
                 <a href="logout.php">Logout</a>
               <?php }
               // else {?>

                <a href="Advertise.php" class="sell-box">advertise</a>
            </div>

        </div>
  <!-- header section ends here -->

  <!-- menu section starts here -->
  <section class="menu">

          <!-- <div class="looking-for-box">What are you looking for?:  <input  id="looking-for" type="text" name="what"></div> -->

          <form class="filter-search-box" method="post" action="search_post.php" >
           <fieldset>
               <legend>Filter</legend>category
                      <select name="category" id="" placeholder="Category" required>
  <option value="">--Category--</option>
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
            </select>



           <div class="search-box">Town<input class="text-input" type="text" name="town"placeholder="Town"></div>
           <div class="search-box">Address<input class="text-input"type="text" name="address"placeholder="Address"></div>
           <div class="search-box">Price From<input class="number-input" type="number" name="start_price"placeholder=""></div>
           <div class="search-box">-to<input class="number-input" type="number" name="end_price"placeholder=""></div>
           <input type="submit" value="Submit" id="submit" name="submit">
       </fieldset>

           </form>
   </section>
      <!-- menu section ends here -->
