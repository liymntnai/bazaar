<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bakoz-category.css">
<link rel="stylesheet" href="bootstrap-4.6.2-dist/css/bootstrap.min.css">
</head>
<body>

    <!-- header section starts here -->
<section class="container">
<section class="header">
    <div id="logo">Bazaar</div>
     <div class="buy-sell-box">
         <div class="box">
           <img src="images/salary.png" alt="" class="logo-images">
           <h4>Buy</h4>
         </div>

         <div class="box">
           <img src="images/profits.png" alt=""class="logo-images">
           <h4>Sell</h4>
         </div>

         <div class="box">
           <img src="images/exchange (1).png" alt="" class="logo-images">
           <h4>Exchange</h4>
         </div>

    </div>
<!-- Button to open modal -->
    <div>
      <a class="sell-box" href="login.php">Advertise</a>
    </div>

</section>
    <!-- header section ends here -->

    <!-- menu section starts here -->

    <section class="menu">

           <!-- <div class="looking-for-box">What are you looking for?:  <input  id="looking-for" type="text" name="what"></div> -->

           <form class="filter-search-box" method="post" action="search_post.php" >
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
    </section>

       <!-- menu section ends here -->

    <!-- content section starts here -->

    <div class="category-list">
          <div class="box">
              <h2 class="description">
                  <a href="bakoz-pc.php" class="title">PC</a><br>
              </h2>
              <div class="image">
                 <a href=""> <img src="images/laptop (1).png" alt="laptop-image"></a>
              </div>
          </div>

          <div class="box">
              <div class="description">
                  <a href="bakoz-smartphone.php" class="title">Smartphone</a><br>

              </div>
              <div class="image">
                <a href=""> <img src="images/smartphone.png" alt="phone-image"></a>
              </div>

            </div>

              <div class="box">
                <div class="description">
                  <a href="bakoz-electrical.php" class="title">Electrical</a><br>
                </div>
               <div class="image">
               <a href=""> <img src="images/classroom-pc.png" alt="Laptop-image"></a>
               </div>

              </div>

              <div class="box">
                <div class="description">
                  <a href="bakoz-car.php" class="title">cars</a><br>
                </div>

               <div class="image">
               <a href="bakoz-car.php"> <img src="images/car.png" alt="car-image"></a>
               </div>

              </div>

              <div class="box">
                <div class="description">
                  <a href="bakoz-clothing.php" class="title">clothing</a><br>
                </div>
               <div class="image">
               <a href=""> <img src="images/polo-shirt.png" alt="Laptop Omen"></a>
               </div>
              </div>

              <div class="box">
                <div class="description">
                  <a href="bakoz-housing-renting.php" class="title">housing/renting</a><br>
                </div>
               <div class="image">
               <a href=""> <img src="images/home.png" alt="Laptop Omen"></a>
               </div>

              </div>

    </div>
        <!-- content section ends here -->
</section>
 </body>

</html>
