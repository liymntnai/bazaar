<?php
include 'header.php';
// include 'connection.php';

?>

    <!-- menu section ends here -->
<!-- Pagination section starts here -->
<section class="pagination-box">
  <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="bakoz-home.php"> Home</a></li>
    <li class="breadcrumb-item active"><a href="">Smartphone</a></li>

  </ul>
</section>

<!-- Pagination section ends here -->

<!-- content section starts here -->

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
  // if (isset($_POST["title"])){
  //   $post_title=$_POST["title"];
  // $array = array();
  // $query_cat_name="SELECT cat_name FROM category";
  // $result1=$conn->query($query_cat_name);
  // if (!$result1) {
  //   // code...
  //   die("Unable to find cat_name in category". $conn->connect_error);
  //
  // }
  // else {
  //   for ($i=0; $i<$result1->num_rows; $i++) {
  //     $row=$result1->fetch_assoc();
  //     $array[$i]=$row['cat_name'];
  //
  //   }
  // }
    $sql="SELECT * FROM post where cat_name='Smartphone'";
    $result=$conn->query($sql);
    if (!$result) {
      die("Error querying posts from server".$conn->connect_error);
    }else {
    $count=$result->num_rows;
    if ($count>0) {


    for ($a=0; $a<$result->num_rows; $a++) {
      $row=$result->fetch_assoc();
      $post_id=$row['post_id'];
      $post_title=$row['post_title'];
      $post_price=$row['post_price'];
      $post_town=$row['post_town'];
      $post_address=$row['post_address'];
      $post_condition=$row['post_condition'];
      $post_user_email=$row['post_user_email'];
      $post_image=$row['post_image'];
      $post_description=$row['post_description'];

?>
<a class="single-post" href="singlepost.php">
     <div class="image-box">
       <div class="primary-column">
         <img src="images/<?php echo $post_image;?>" alt="phone-1">
         <div style="background-color: aliceblue; float: left;">
            <h2 class="title"><?php echo $post_title; ?></h2>
            <p class="item-info"><?php echo $post_description; ?></p>
         </div>
       </div>
          <div class="columns item-price"><?php echo $post_price; ?><span class="fcfa"></span></div>
          <div class="columns item-town"><?php echo $post_town; ?></div>
          <div class="columns item-address"><?php echo $post_address; ?></div>
    </div>
</a>
          <?php
        }
        }else {
            echo "<p style='color:red;font-size:40px;'>No ads found</p>";
          }}?>
    <!-- </div>
       <div class="image-box">
        <div class="primary-column">
         <img src="images/iphonexs2.jpg" alt="iphone xs">
        <div style="background-color: aliceblue; float: left;">
          <h2 class="title">iphone xs</h2>
           <p class="item-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Qui, dolorum facere, illo adipisci perferendis quia inventore modi vero dicta itaque porro id dolor voluptas sequi quibusdam temporibus,
               excepturi repellendus blanditiis?</p></div>
         </div>
         <div class="columns item-price">300000<span class="fcfa"></span></div>
         <div class="columns item-town">douala</div>
         <div class="columns item-address">mbopi</div>
    </div>
    <div class="image-box">
        <div class="primary-column">
         <img src="images/s21.jpg" alt="samsung s21">
        <div style="background-color: aliceblue; float: left;">
          <h2 class="title">Samsung s21</h2>
           <p class="item-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Qui, dolorum facere, illo adipisci perferendis quia inventore modi vero dicta itaque porro id dolor voluptas sequi quibusdam temporibus,
               excepturi repellendus blanditiis?</p></div>
         </div>
         <div class="columns item-price">152000<span class="fcfa"></span></div>
         <div class="columns item-town">douala</div>
         <div class="columns item-address">mbopi</div>
    </div>
   <a href="" style="text-decoration: none; color: black;"> <div class="image-box">
        <div class="primary-column">
         <img src="images/iphone11pro.jpg" alt="samsung s21">
        <div style="background-color: aliceblue; float: left;">
          <h2 class="title">iphone 11pro</h2>
           <p class="item-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Qui, dolorum facere, illo adipisci perferendis quia inventore modi vero dicta itaque porro id dolor voluptas sequi quibusdam temporibus,
               excepturi repellendus blanditiis?</p></div>
         </div>
         <div class="columns item-price">380000<span class="fcfa"></span></div>
         <div class="columns item-town">douala</div>
         <div class="columns item-address">bonamoussadi</div>
    </div>
  </a>
       <p class="pg-next" style="text-align: center; margin: 5px auto;"><ul>
        <li style="display: inline;">Page: </li>
        <a href=""><li style="display: inline;">1</li></a>
        <a href="bakoz-smartphone2.html"><li style="display: inline;">2</li></a>
        <a href="bakoz-smartphone3.html"><li style="display: inline;">3</li></a>
        <a href=""><li style="display: inline;"style="">Next</li></a>
      </ul>
      </p>
</div> -->

</section>
<!-- content section ends here -->
<section class="footer">
  <h3>Designed and implemented by <span style="font-family:Sacramento-Regular">Liym-ntai Ray Langdji</span></h3>
  <p>2023, CITEC-HITM, Software Engineering, Degree</p>
</section>
</body>

</html>
