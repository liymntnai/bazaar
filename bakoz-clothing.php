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
    $sql="SELECT * FROM post where cat_name='Clothing'";
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
        }else {
            echo "<p style='color:red;font-size:40px;'>No ads found</p>";
          }}?>


</section>
<!-- content section ends here -->
<section class="footer">
  <h3>Designed and implemented by <span style="font-family:Sacramento-Regular">Liym-ntai Ray Langdji</span></h3>
  <p>2023, CITEC-HITM, Software Engineering, Degree</p>
</section>
</body>

</html>
