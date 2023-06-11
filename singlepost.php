<?php
include 'connection.php';

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/singlepost.css">
        <link rel="stylesheet" href="css/bakoz-category.css">
        <link type="text/css"rel="stylesheet" href="bootstrap-4.6.2-dist/css/bootstrap.min.css">

  </head>
  <style media="screen">

    </style>
  </style>
  <body>

    <!-- header section starts here -->

    <section class="h">
        <div>
            <div id="s-logo">Bazaar</div>
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
        <a href="Advertise.php" class="sell-box">advertise</a></div>

   </section>
   <!-- <section class="menu"> -->

           <!-- <div class="looking-for-box">What are you looking for?:  <input  id="looking-for" type="text" name="what"></div> -->

           <!-- <form class="filter-search-box" method="post" action="" >
            <fieldset>
                <legend>Filter</legend>category
             <select name="category" id="" aria-placeholder="Category">
               <option value="Bus">PC</option>
               <option value="Car">Smartphone</option>
               <option value="Motorcycle">Electrical</option>
               <option value="Computers">clothing</option>
               <option value="Electrical">housing and renting</option>
             </select>
            <div class="search-box">Town<input type="text" name="town"placeholder="Town"></div>
            <div class="search-box">Address<input type="text" name="address"placeholder="Address"></div>
            <div class="search-box">Price From<input type="number" name="start_price"placeholder=""></div>
            <div class="search-box">-to<input type="number" name="end_price"placeholder=""></div>
            <input type="submit" value="Submit" id="submit">
        </fieldset>

            </form>
    </section>  -->

<!-- content section starts here -->
    <section class="container-fluid" style="display: flex; margin-top: 15px;">
      <div class="other-category">
          <h1 class="kategori">Category</h1>
          <a href="children-cloths.html" class="children">children</a>
          <a href="women-cloths.html" class="samsung">women</a>
          <a href="men-cloths.html" class="tecno">men</a>
          <a href="luxury-cloths.html" class="itel">luxury</a>
          <a href="second-hand.html" class="htc">second-hand</a>
      </div>

      <div class="" style="box-shadow:0 0.5rem 0.5rem #999;">
        <?php if (isset($_GET['post_id'])) {
          $id=$_GET['post_id'];
          $sql="select * from post where post_id='$id'";
          $result=$conn->query($sql);

          if (!$result) {
            die("Connection failed". $conn->connect_error);
          }
          else {
            if ($result->num_rows>0) {
              while ($row=$result->fetch_assoc()) {
                $title=$row['post_title'];
                $address=$row['post_address'];
                $town=$row['post_town'];
                $image1=$row['post_image1'];
                    $image2=$row['post_image2'];
                    $image3=$row['post_image3'];
                $price=$row['post_price'];
                }

            }
          }


          // code...
        }?>
        <?php
if (isset($_GET['dl_post_id'])) {
$dl_post_id = $_GET['dl_post_id'];

$dl_qry = "DELETE FROM post WHERE post_id = $dl_post_id ";
$dl_qry_rslt = mysqli_query($connection,$dl_qry);
if ($dl_qry_rslt) {
 header("Location:post_an_ad.php");
}
}


 ?>

        <h1 style="margin:10px 0 0 10px"><?php echo $title; ?></h1>
        <div class="" style="width:100%; display:flex; justify-content:space-around; margin-bottom:20px" >

       <ul>
          <li><span style="font-weight:bold;">Price:</span><?php echo $price ?></li>
          <li><span style="font-weight:bold;">Phone:</span>1453322</li>
          <li><span style="font-weight:bold;">Town: </span><?php echo $town?></li>
          <li><span style="font-weight:bold;">Address: </span><<?php echo $address ?></li>
        </ul>
        <button class="notify-seller">Notify seller!</button>
          </div>
        <div class="slideshow-container">

        <div class="mySlides">
          <div class="numbertext">1 / 3</div>
          <button onclick="openModal()"id="open-btn"><i class="fa-solid fa-up-right-and-down-left-from-center"> </i></button>
          <img style="width:400px" src="images/<?php echo $image1?>" >
        </div>

        <div class="mySlides">
          <div class="numbertext">2 / 3</div>
          <?php
          if ($image2==null) {
          echo "<div style='width:100%;height:300px; background:lightgrey; font-size:2rem'>No Image</div>";
          }else {?>
              <button onclick="openModal()"id="open-btn"><i class="fa-solid fa-up-right-and-down-left-from-center"> </i></button>
              <img style="width:400px;" src='images/<?php echo $image2;?>
              ' >
          <?php }
        ?>
          <!-- <img class="slideImage" src="images/
          " style="width:100%"> -->
        </div>

        <div class="mySlides">
          <div class="numbertext">3 / 3</div>
          <?php
          if ($image3==null) {
          echo "<div style='width:100%;height:300px; background:lightgrey; font-size:2rem'>No Image</div>";
        }else {?>

          <button onclick="openModal()"id="open-btn"><i class="fa-solid fa-up-right-and-down-left-from-center"> </i></button>
          <img style="width:400px;max-width:400px" src='images/<?php echo $image3;?>
              ' >
          <?php }?>
          <!-- <img class="slideImage" src="images/" style="width:100%"> -->
        </div>


        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

        </div>
        <br>

        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <h2 style="margin-left:20px;">Description</h2>
        <p style="margin-left:10px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint occaecat cupidatat non proident,
           sunt in culpa qui officia deserunt mollit anim id est laborum.
         </p>
      </div>

      </section>
      <div id="modal-container">

         <div class="modal mySlides1">
           <img class="modal-image" src="images/<?php echo $image1?>" >
          <a onclick="closeModal()"id="close-btn">&times;</a>
          <a class="prev" onclick="plusSlides1(-1)">❮</a>
          <a class="next" onclick="plusSlides1(1)">❯</a>
         </div>

         <div class="modal mySlides1">
           <img class="modal-image" src="images/<?php echo $image2?>" >
          <a onclick="closeModal()"id="close-btn">&times;</a>
          <a class="prev" onclick="plusSlides1(-1)">❮</a>
          <a class="next" onclick="plusSlides1(1)">❯</a>
         </div>
         <div class="modal mySlides1">
           <img class="modal-image"  src="images/<?php echo $image3?>" >
          <a onclick="closeModal()"id="close-btn">&times;</a>
          <a class="prev" onclick="plusSlides1(-1)">❮</a>
          <a class="next" onclick="plusSlides1(1)">❯</a>
         </div>

     </div>
      <!-- content section ends here -->
        <script type="text/javascript">
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          let j;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
        }
        let slideIndex1 = 1;
        showSlides1(slideIndex1);

        function plusSlides1(n) {
          showSlides1(slideIndex1 += n);
        }

        function currentSlide1(n) {
          showSlides1(slideIndex1 = n);
        }

        function showSlides1(n) {
          let j;
          let slides = document.getElementsByClassName("mySlides1");
          let dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex1 = 1}
          if (n < 1) {slideIndex1 = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex1-1].style.display = "block";
          dots[slideIndex1-1].className += " active";
        }
       function closeModal(){
         var modalContainer=document.querySelector('#modal-container')
         modalContainer.style.display='none'
       }
       function openModal(){
         var modalContainer=document.querySelector('#modal-container')
         modalContainer.style.display='block'
       }
      </script>
  </body>
</html>
