<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MySite</title>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left: 70%;
  float: left;
}

input[type=reset] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left: 10%;
  float: left;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 10%;
  margin-top: 6px;
}

.col-20 {
  float: left;
  width: 10%;
  margin-top: 6px;
}
.col-70 {
  float: left;
  width: 35%;
  margin-top: 6px;
  margin-right: 5%;
}

.col-75 {
  float: left;
  width: 85%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

#button{
  margin-top: 20px;
}


</style>
</head>
<body>

<div class="container">
  <form action="action_page.php" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-20">
        <label for="fname">First Name</label>
      </div>
      <div class="col-70">
        <input type="text" id="fname" name="firstname" placeholder="Your first name..">
      </div>
      <div class="col-20">
        <label for="lname" >Last Name</label>
      </div>
      <div class="col-70">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email" placeholder="Your email address..">
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <label for="address">Address</label>
      </div>
      <div class="col-75">
        <textarea id="address" name="address" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="photo">Photo</label>
      </div>
      <div class="col-75">
        <input type="file" accept="image/jpeg, image/png, image/jpg" id="photo" name="image" >
      </div>
    </div>

    
    <div class="row" id="button">
      <input type="reset" value="cancel">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</body>
</html>
