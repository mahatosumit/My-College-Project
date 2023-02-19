<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edit Your Detail</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    
</head>
<body>


<div class="">

    <div class="form-title">
    <h2>Create Form</h2>
    
    
    </div>
 
    <p style="color:black">
     <?php
  $con = mysqli_connect("localhost", "root", "", "collage");

  if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }

  if (isset($_GET['id']) or isset($_GET['username'])) {
    $id = $_GET['id'];
 
    $sql = "SELECT * FROM userdetails WHERE id=$id";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    }
  }
  ?>
<form method="post">
        <div class="input-name">
          <i class="fa fa-user"></i>
          <input type="text" placeholder="Your Name" class="name" name="name">

        </div>
        <div class="input-name">
          <i class="fa fa-envelope email"></i>
          <input type="text" placeholder="Email" class="name"  name="Email">
        </div>

        <div class="input-name">
          <i class="fa fa-lock" aria-hidden="true"></i>


          <input type="text" placeholder="Password" class="name"  name="Password">
        </div>

        <div class="input-name">
          <i class="fa fa-lock" aria-hidden="true"></i>

          <input type="text" placeholder="Conform Password" class="name"  name="conformPass">
        </div>
        <div class="gender">
        <i class="fa fa-venus-mars" aria-hidden="true"></i>

        <label for="male" class="radio-line"><input type="radio" name="gender" > Male </label>
        <label for="male" class="radio-line"><input type="radio" name="gender" > Female </label>
        <label for="male" class="radio-line"><input type="radio" name="gender" > Others </label>
      </div>
       
        </div>
        <div class="input-Province">
          <select class="Province">
            <option name="Province">Select a Province</option>
            <option value="1" name=" Province">Province 1</option>
            <option value="2" name=" Province">Madhesh</option>
            <option value="3" name=" Province">Bagmati</option>
            <option value="4" name=" Province">Gandaki</option>
            <option value="5" name=" Province">Lumbini</option>
            <option value="6" name=" Province">Karnali</option>
            <option value="7" name=" Province">Sudurpashchim</option>
          </select>
          <div class="arrow"></div>
        </div>

        <div class="input-name">
          <input type="Checkbox" class="check-button" name="check">
          <label>I accept all terms and conditions</label>
        </div>

        <div class="Register">
          <button type="submit" class="Register" name="sb">Register</button>
        </div>
        <h5>If you have registed then Login</h5>
        <div class="Register">
          
          <button type="submit" class="Register"  name="sb" onclick="window.location.href='signin_form.php';">Login</button>
        </div>
        <?php if(!empty($msg)){echo $msg; }?> 
  <input type="submit" class="btn btn-primary" value="Update">
      </form>


</body>
</html>