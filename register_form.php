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
  <div class="container">
    <h2>Registration Form </h2>
    <div class="form-container">
      <form method="post" action="connect.php">
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

        <label for="male" class="radio-line"><input type="radio" name="gender" value="m"> Male </label>
        <label for="male" class="radio-line"><input type="radio" name="gender" value="f"> Female </label>
        <label for="male" class="radio-line"><input type="radio" name="gender" value="o"> Others </label>
      </div>
        <div class="input-who">
          <select class="who">
            <option name="who">Who Are You</option>
            <option name="Student">Student</option>
            <option name="Teacher">Teacher</option>
          </select>
        </div>
        <div class="input-Province">
          <select class="Province">
            <option name="Select a Province">Select a Province</option>
            <option value="1" name="Select a Province">Province 1</option>
            <option value="2" name="Select a Province">Madhesh</option>
            <option value="3" name="Select a Province">Bagmati</option>
            <option value="4" name="Select a Province">Gandaki</option>
            <option value="5" name="Select a Province">Lumbini</option>
            <option value="6" name="Select a Province">Karnali</option>
            <option value="7" name="Select a Province">Sudurpashchim</option>
          </select>
          <div class="arrow"></div>
        </div>

        <div class="input-name">
          <input type="Checkbox" class="check-button" name="check">
          <label>I accept all terms and conditions</label>
        </div>

        <div class="Register">
          <button type="submit" class="Register" name="register">Register</button>
        </div>
        <h5>If you have registed then Login</h5>
        <div class="Register">
          
          <button type="submit" class="Register" name="register">Login</button>
        </div>

      </form>
    </div>
  </div>
</body>

</html>