<?php
$conn=new mysqli("localhost", "root", "", "fileUploadDb");

if($conn->connect_error){
  die("Connection failed" .$conn->connect_error);
}
else {
  if (isset($_POST["submit"])) {
    // code...
    $targetDir="";
    $allowTypes=array('jpg', 'png', 'jpeg', 'gif');

    $statusMsg=$errorMsg=$insertValuesSQL=$errorUpload=$errorUploadType='';
    $fileNames=$_FILES['files']['name'];
    if(!empty($fileNames)){
      foreach ($fileNames as $key => $value) {
        // code...
        // File upload path
        $fileName=basename($_FILES['files']['name'][$key]);
        $targetFilePath=$targetDir.$fileName;

        // Check if file type is valid
        $fileType=pathinfo($targetFilePath, PATHINFO_EXTENSION);
        if (in_array($fileType, $allowTypes)) {
          // Upload file to mysqlnd_ms_dump_servers
          if (move_uploaded_file($_FILES['files']['tmp_name'][$key], $targetFilePath)) {
            // code...
            $insertValuesSQL.="('".$fileName."', NOW())'";
          }else {
            $errorUpload.=$_FILES['files']['name'][$key].' | ';

          }
        }else {
            $errorUploadType.=$_FILES['files']['name'][$key].' | ';
        }
      }
      // Error messages
       $errorUpload=!empty($errorUpload)?'Upload Error:' .trim($errorUpload, '|'):'';
       $errorUploadType=!empty($errorUploadType)?'File Type Error:' .trim($errorUploadType, '|'):'';
       $errorMsg=!empty($errorUpload)?'<br>'.$errorUpload.'<br>'.$errorUploadType:'<br>'.$errorUploadType;
       if (!empty($insertValuesSQL)) {
         $insertValuesSQL=trim($insertValuesSQL, ',');
         $insert=$conn->query("INSERT INTO images (file_name, uploaded_on) VALUES $insertValuesSQL");
         if ($insert) {
          $statusMsg="Files uploaded successfully".$errorMsg;
         }
         else {
           $statusMsg="Error uploading files".$errorMsg;
         }
       }else {
         $statusMsg="Upload failed".$errorMsg;
       }
    }
    else {
    $statusMsg="Please select a file to upload.";
    }


  }
}


// include 'connection.php';
// session_start();
// $_SESSION["user"]="Raymond";
// $_SESSION["usertype"]="";
// $_SESSION["use"]="Raymnd";
// $_SESSION["r"]="Ramond";
// print_r($_SESSION);
 ?>
