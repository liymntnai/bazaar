<?php
include 'header.php';
// include 'connection.php';

?>

<?php include 'content.php';
function getname(){
  $c_name='Smartphone';
  return $c_name;
}?>

  <?php
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
      $post_image=$row['post_image1'];
      $post_description=$row['post_description'];
      $post_date=$row['post_date'];
      $time=$row['time'];

?>
<a class="single-post" href="singlepost.php?post_id=<?php echo $post_id?>">
     <div class="image-box">
       <div class="primary-column">
         <img src="images/<?php echo $post_image;?>" alt="phone-1">
         <div style="background-color: aliceblue; float: left;">

           <div class="listed-time">
             <?php
             // $p_date=date_timestamp_get($post_date);
             $today=time();
             $h=($today-$time)/3600;
             $m=($today-$time)/60;
             $s=$today-$time;
             if ($h>23) {
               echo '['.date("d-m-Y",$time).'] ';
             }
             if ($h<1) {
               if ($m>59) {
                 echo (int)$m.'mins ago';
               }
               else {
                 echo (int)$s.'sec ago';
               }
             }else {
               echo (int)$h."hrs ago";
             }
          ?>
           </div>
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
