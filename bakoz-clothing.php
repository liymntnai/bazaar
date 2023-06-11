<?php
include 'header.php';
// include 'connection.php';

?>

<?php include 'content.php';
function getname(){
  $c_name='Clothing';
  return $c_name;
}?>


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
