<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    include 'header.php';
    ?>
    <section class="container-fluid" style="display: flex; margin-top: 15px;">
    <div class="other-category">
        <h1 class="kategori">Category</h1>
        <a href="C://Users/EUROPEONLINE/Desktop/bakoz/smartphone/apple.html" class="apple">iphone</a>
        <a href="C://Users/EUROPEONLINE/Desktop/bakoz/smartphone/samsung.html" class="samsung">samsung</a>
        <a href="C://Users/EUROPEONLINE/Desktop/bakoz/smartphone/tecno.html" class="tecno">tecno</a>
        <a href="C://Users/EUROPEONLINE/Desktop/bakoz/smartphone/itel.html" class="itel">itel</a>
        <a href="C://Users/EUROPEONLINE/Desktop/bakoz/smartphone/htc.html" class="htc">htc</a>
        <a href="C://Users/EUROPEONLINE/Desktop/bakoz/smartphone/xiaomi.html" class="xiaomi">Xiaomi</a>
        <a href="C://Users/EUROPEONLINE/Desktop/bakoz/smartphone/infinix.html" class="infinix">infinix</a>
        <a href="C://Users/EUROPEONLINE/Desktop/bakoz/smartphone/lg.html" class="lg">LG</a>
        <a href="C://Users/EUROPEONLINE/Desktop/bakoz/smartphone/lenovo.html" class="lenovo">lenovo</a>
        <a href="C://Users/EUROPEONLINE/Desktop/bakoz/smartphone/other-marks.html" class="other-marks">other marks</a>

    </div>
    <div class="description">
      <div class="heading">
           <div class="primary-column">
                <img src="C://Users/EUROPEONLINE/Desktop/bakoz/images/filter.png" alt="" class="filter-image">
           <span>filter</span>
           </div>
          <div class="columns">price</div>
          <div class="columns">town</div>
          <div class="columns">address</div>
      </div>


<?php
$cat_name=$_POST['category'];
$town=$_POST['town'];
$address=$_POST['address'];
$sp=$_POST['start_price'];
$ep=$_POST['end_price'];
// $sql1;

if (isset($_POST['submit'])) {
  if (!empty($town) && !empty($address)&&!empty($sp)&&!empty($ep)) {
  // code... 1111
  $option=15;
  $sql1="select * from post WHERE cat_name='$cat_name' AND post_town like '%$town%' AND  post_address like '%$address%' AND post_price BETWEEN $sp and $ep ";
  }
  elseif (!empty($town) && !empty($address)&& !empty($sp)&& empty($ep)) {
    // code... 1110
    $option=14;

    $sql1="SELECT * FROM post WHERE cat_name='$cat_name' AND post_town like '%$town%' AND post_address like '%$address%' AND price>=$sp";
  }
  elseif (!empty($town) && !empty($address)&& empty($sp)&& !empty($ep)) {
    // code... 1101
    $option=13;
    $sql1="SELECT * FROM post WHERE cat_name='$cat_name' AND post_town like '%$town%' AND post_address like '%$address%' AND price<=$ep";
  }
  elseif (!empty($town) && !empty($address)&& empty($sp)&& empty($ep)) {
    // code... 1100
    $option=12;
    $sql1="SELECT * FROM post WHERE cat_name='$cat_name' AND post_town like '%$town%' AND post_address like '%$address%'";
  }
  elseif (!empty($town) && empty($address)&& !empty($sp)&& !empty($ep)) {
    // code...1011
    $option=11;
    $sql1="SELECT * FROM post WHERE cat_name='$cat_name' AND post_town like '%$town%' AND price BETWEEN $sp and $ep" ;
  }
  elseif (!empty($town) && empty($address)&& !empty($sp)&& empty($ep)) {
    // code...1010
    $option=10;
    $sql1="SELECT * FROM post WHERE cat_name='$cat_name' AND post_town like '%$town%' AND price>=$sp" ;
  }
  elseif (!empty($town) && empty($address)&& empty($sp)&& !empty($ep)) {
    // code...1001
    $option=9;
    $sql1="SELECT * FROM post WHERE cat_name='$cat_name' AND post_town like '%$town%'  AND price<=$ep" ;
  }
  elseif (!empty($town) && empty($address)&& empty($sp)&& empty($ep)) {
    // code... 1000
    $option=8;
    $sql1="SELECT * FROM post WHERE cat_name='$cat_name' AND post_town like '%$town%'" ;
  }
  elseif (empty($town) && !empty($address)&& !empty($sp)&& !empty($ep)) {
    // code...0111
    $option=7;
    $sql1="SELECT * FROM post WHERE cat_name='$cat_name' AND price>=$sp AND post_address like '%$address%'" ;
  }
  elseif (empty($town) && !empty($address)&& !empty($sp)&& empty($ep)) {
    // code... 0110
    $option=6;
    $sql1="SELECT * FROM post WHERE cat_name='$cat_name' AND price>=$sp AND post_address like '%$address%'"    ;
  }
  elseif (empty($town) && !empty($address)&& empty($sp)&& !empty($ep)) {
    // code... 0101
    $option=5;
    $sql1="SELECT * FROM post WHERE cat_name='$cat_name' AND price<=$ep AND post_address like '%$address%'";

  }
  elseif (empty($town) && !empty($address)&& empty($sp)&& empty($ep)) {
    // code...0100
    $option=4;
    $sql1="SELECT * FROM post WHERE cat_name='$cat_name' AND post_address like '%$address%'";
  }
  elseif (empty($town) && empty($address)&& !empty($sp)&& !empty($ep)) {
    // code...0011
    $option=3;
    $sql1="SELECT * FROM post WHERE cat_name='$cat_name' AND price BETWEEN $sp and $ep" ;
  }
  elseif (empty($town) && empty($address)&& !empty($sp)&& empty($ep)) {
    // code... 0010
    $option=2;
    $sql1="SELECT * FROM post WHERE cat_name='$cat_name' AND price>=$sp";
  }
  elseif (empty($town) && empty($address)&& empty($sp)&& !empty($ep)) {
    // code...0001
    $option=1;
    $sql1="SELECT * FROM post WHERE cat_name='$cat_name' AND price<=$ep" ;
  }
  else {
     if (!empty($cat_name)) {
           $sql1="SELECT * FROM post WHERE cat_name='$cat_name'" ;
     }

  }







  $result=$conn->query($sql1);
    if (!$result) {
      die("Unable to query data" .$conn->connect_error);
      // code...
    }
    else {
      if ($result->num_rows>0) {

        for ($i=0; $i<$result->num_rows; $i++) {
              $row=$result->fetch_assoc();
              $cat_name=$row['cat_name'];
              $post_title=$row['post_title'];
              $post_price=$row['post_price'];
              $post_town=$row['post_town'];
              $post_address=$row['post_address'];
              $post_image=$row['post_image'];
              $post_description=$row['post_description'];


            ?>

            <div class="image-box">
                <div class="primary-column">
                        <img src="images/<?php echo $post_image;?>" alt="phone-1">
                       <div style="background-color: aliceblue; float: left;">
                        <h2 class="title"><?php echo $post_title; ?></h2>
                          <p class="item-info"><?php echo $post_description; ?></p></div>
                </div>
                <div class="columns item-price"><?php echo $post_price; ?><span class="fcfa"></span></div>
                <div class="columns item-town"><?php echo $post_town; ?></div>
                <div class="columns item-address"><?php echo $post_address; ?></div>
            </div>
                      <?php
                }

        }
        else {
                echo "<p style='color:red;font-size:40px;'>No ads found</p>";
              }
      }
    }?>


</div>
</section>
</body>
</html>
