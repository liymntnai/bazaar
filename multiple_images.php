<?php
include 'upload.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/master.css">
  </head>
  <body>
    <div class="container">
      <div class="upfrm">
        <?php
        if (!empty($statusMsg)) {
          echo "<p class='status-msg'>".$statusMsg."</p>";
        } ?>
        <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
          <label for="">Select images to upload</label>
          <input type="file" name="files[]" value="" multiple>
          <input type="submit" name="submit" value="upload">
        </form>
      </div>
    </div>
    <?php
    // echo '<pre>';
    // var_dump($_FILES);
    //   echo '</pre>';?>
  </body>
</html>
