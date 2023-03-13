<?php

if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_FILES['image'])) {
//get all value from form
  $firstname =  $_POST["firstname"];
  $lastname =  $_POST["lastname"];
  $email =  $_POST["email"];
  $address =  $_POST["address"];


  //image store
  if(isset($_FILES['image'])){
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    
    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

    if ($file_ext == 'jpg' || $file_ext == 'jpeg' || $file_ext == 'png') {
      $upload_path = 'uploads/' . $file_name;
      move_uploaded_file($file_tmp, $upload_path);
    } else {
      echo "Error: Only JPG, JPEG, and PNG files are allowed.";
    }
  }



  echo
  "<!DOCTYPE html>
  <html lang='en'>
  <head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>MySite</title>
    <style>
      html,body{
        height: 100%;
      }

      .text{
        height: 100%;
        width: 49%;
        float: left;
        margin-top: 10%
      }

      .image{
        height: 100%;
        width: 49%;
        float: left;
      }

      img{
        height:50%;
        width: 50%;
        margin: 25%;
        border-radius: 100%;
      }
    </style>
  </head>
  <body>
  <div class='row'>
        <div class='text'>
          <pre>
          Name:           $firstname $lastname<br><br>
          Email:          $email<br><br>
          Address:        $address</pre>
        </div>
        <div class='image'>
        
          <img src='$upload_path'>;
        </div>
        
    </div>
  </body>
  </html>";
}
else{
  echo "You must fill up all field";
}

?>