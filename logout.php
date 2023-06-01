 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <script type="text/javascript">
       alert('successfully logout')
     </script>


   </head>
   <body>

     <?php session_start(); ?>

     <?php

     $_SESSION['user'] = null;
     session_destroy();
     header("Location: index.php" );

      ?>

   </body>
 </html>
