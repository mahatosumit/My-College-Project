<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pre Registration/Scholarship Form (Grade XI)</title>
  <link rel="stylesheet" href="register_form.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <form method="post" action="valid_form.php">
  <div class="container">
    <h2>Registration Form </h2>
    <div class="form-container">
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

      </form>
    </div>
  </div>
  <?php
$con =mysqli_connect('localhost','root','','collage');
if(isset($_POST['sb']) )
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conform_password=$_POST['conformpass'];
    $gender=$_POST['gender'];
    $province=$_POST['province'];
    $query="INSERT INTO `register` (`SN`, `name`, `email`, `password`, `conformpass`, `gender`, `province`) 
    VALUES ('', '$name', '$email', '$password', '$conform_password', 'gender', 'province')";
    $run=mysqli_query($con,$query);

}


?>
</body>

</html>