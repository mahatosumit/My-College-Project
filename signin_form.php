<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Page</title>
  <link rel="stylesheet" href="signin_form.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container">
    <h2>Signin Form </h2>
    <div class="form-container">
      <form method="post" action="valid_form.php">
        <div class="input-name">
          <i class="fa fa-user"></i>
          <input type="text" placeholder="Your Name" class="name" name="name" required>

        </div>
        <div class="input-name">
          <i class="fa fa-envelope email"></i>
          <input type="text" placeholder="Email" class="name"  name="Email" required>
        </div>

        <div class="input-name">
          <i class="fa fa-lock" aria-hidden="true"></i>


          <input type="text" placeholder="Password" class="name"  name="Password" required>
        </div>

        <div class="input-name">
          <i class="fa fa-lock" aria-hidden="true"></i>

          <input type="text" placeholder="Conform Password" class="name"  name="conformPass" required>
        </div>

      
        <div class="input-name">
          <input type="Checkbox" class="check-button" name="check">
          <label>I accept all terms and conditions</label>
        </div>
        

        <div class="Signin">
          <button type="submit" class="Register" name="register" onclick="window.location.href='who.php';" required>Signin</button>
        </div>

      </form>
    </div>
  </div>
    <?php
$con=mysqli_connect('localhost','root','','collage');
if(isset($_GET['register']) )
{
    $name=$_POST['name'];
    $email=$_POST['Email'];
    $password=$_POST['password'];
    $conform_password=$_POST['password'];
    $query="INSERT INTO `register` (`SN`, `name`, `email`, `password`, `conformpass`) 
    VALUES ('', '$name', '$email', '$password', '$conform_password')";
    $run=mysqli_query($con,$query);

}


?>
</body>

</html>