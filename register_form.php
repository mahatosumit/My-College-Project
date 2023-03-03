<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="register_form.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="vaild.js"></script>
</head>

<body>
  <div class="container">
    <h2>Registration Form </h2>
    <div class="form-container">
      <form method="post" action="">
        <div class="input-name">
          <i class="fa fa-user"></i>
          <input type="text" placeholder="Your Name" id="name" class="name" name="name" required>

        </div>
        <div class="input-name">
          <i class="fa fa-envelope email"></i>
          <input type="text" placeholder="Email" id="email" class="name"  name="email" required >
        </div>

        <div class="input-name">
          <i class="fa fa-lock" aria-hidden="true"></i>


          <input type="text" placeholder="Password" id="password" class="name"  name="password" required >
        </div>

        <div class="input-name">
          <i class="fa fa-lock" aria-hidden="true"></i>

          <input type="text" placeholder="Conform Password" id="conformPass" class="name"  name="conformPass" required >
        </div>
        <div class="gender" id="gender" required>
        <i class="fa fa-venus-mars" aria-hidden="true"></i>

        <label for="male" class="radio-line"><input type="radio" name="gender" value="male" required> Male </label>
        <label for="male" class="radio-line"><input type="radio" name="gender" value="female" required> Female </label>
        <label for="male" class="radio-line"><input type="radio" name="gender" value="other" required> Prefer not to say </label>
      </div>
       
        </div>
        <div class="input-province" required>
          <select class="Province" id="province" name="province"  required>
            <option name="province">Select a province</option>
            <option value="1">province 1</option>
            <option value="2">Madhesh</option>
            <option value="3">Bagmati</option>
            <option value="4">Gandaki</option>
            <option value="5">Lumbini</option>
            <option value="6">Karnali</option>
            <option value="7">Sudurpashchim</option>
          </select>
          <div class="arrow"></div>
        </div>

        <div class="input-name" required>
          <input type="Checkbox" class="check-button" name="check">
          <label>I accept all terms and conditions</label>
        </div>

        <div class="Register">
          <button type="submit" class="Register" name="submit" onclick="window.location.href='signin_form.php';">Register</button>
        </div>
        <h5>If you have registed then Login</h5>
        <div class="Register">
          
          <button type="submit" id="register"class="Register"  name="submit" onclick="window.location.href='signin_form.php';" value="login">Login</button>
        </div>

      </form>
    </div>
  </div>
   <?PHP
          include 'connection_db.php'; 
          $con =mysqli_connect('localhost','root','','collage');
       if(isset($_POST['submit']) );
       {
       
           $name=$_POST['name'];
           $email=$_POST['email'];
           $password=$_POST['password'];
           $conformpass=$_POST['conformPass'];
           $gender=$_POST['gender'];
           $province=$_POST['province'];
           $sql ="INSERT INTO `register` (`SN`, `name`, `email`, `password`, `conformpass`, `gender`, `province`, `usertype`,)
           VALUES ('', '$name', '$email', '$password', '$conformpass', '$gender', '$province','',)";
           $result= mysqli_query($con,$sql);
           if($result){
            echo "Data inserted successfully.";
           }
           else{
            die(mysqli_error($con));
          }
         }
    ?> 
</body>
</html>