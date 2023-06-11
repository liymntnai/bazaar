<?php include 'connection.php';?>
<!-- menu section ends here -->
<!-- Pagination section starts here -->
<section class="pagination-box">
  <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php"> Home</a></li>
    <li class="breadcrumb-item active"><a href=""><?php echo getname(); ?></a></li>

  </ul>
</section>

<!-- Pagination section ends here -->
<!-- content section starts here -->

<section class="container-fluid" style="display: flex;">
<div class="other-category">
    <h1 class="kategori">Category</h1>
    <a href="">VW</a>
    <a href="">BMW</a>
    <a href="">Mercedez Benz</a>
    <a href="">Volvo</a>
    <a href="">Toyota</a>
    <a href="">Lexus</a>
    <a href="">Hyundai</a>

</div>
<div class="description">
  <div class="heading">
       <div class="primary-column">
            <img src="images/filter.png" alt="" class="filter-image">
       <span>filter</span>
       </div>
      <div class="columns">price</div>
      <div class="columns">town</div>
      <div class="columns">address</div>
   </div>
