<?php
include 'connection.php';
session_start();
include 'auth_session.php';
?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>My Adds</title>
     <link type="text/css"rel="stylesheet" href="bootstrap-4.6.2-dist/css/bootstrap.min.css">
     <style>

   div{
     margin: 10px auto;
     width: 80%;
   }
   table{
     width: 100%;
   }
   table,th,tr,td{
     border:1px solid black;
     border-collapse:collapse;

   }
   .t-heading th{
     background:rgb(150, 56, 21);
     color:antiquewhite;
     padding:10px;
   }
   img{
     text-align: center;
     margin:5px auto;
   height: 100px;
   /* width: 200px; */
   /* min-width: 200px; */
   }
   .t-items{
   font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
   background-color:rgba(200, 200, 200, 0.5);
   padding: 0 10px;

 }
   .t-items td{
     padding: 10px auto;
     text-align: center;
   }
   .t-items #title{
     font-weight: 600;
   }
     </style>
   </head>
   <body>

   <div class="add-info" style="margin:auto; width:70%">
     <h1 style="margin-left:30px">My Adds</h1>
     <table>
       <tr class="t-heading">
         <th>No</th>
         <th>Image</th>
         <th>Title</th>
         <th>Date</th>
         <th>View</th>
         <th>Delete</th>
       </tr>
       <?php
       $email=$_SESSION['user'];
       $counter=1;
       $sql="select * from post where post_user_email='$email' order by post_date";

       $result=$conn->query($sql);

         if ($result->num_rows>0) {
           for ($i=0; $i<$result->num_rows; $i++) {
             $row=$result->fetch_assoc();
             $name=$row['post_image'];
             $title=$row['post_title'];
             $date=$row['post_date'];
                ?>
       <tr class="t-items">

                <td><?php echo $counter; $counter++; ?></td>
                <td> <img src="<?php echo "images/".$name; ?>" alt=""> </td>
                <td><p id="title"><?php echo $title ?></p></td>
                <td><?php echo $date ?></td>
                <td><button class="btn-success">View</button></td>
                <td><button class="btn-danger">Delete</button></td>

       </tr>
       <?php }
     }
   ?>
     </table>
   </div>

 </body>
</html>
