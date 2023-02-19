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
   <form>
                <div class="input-name">
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Your Name" class="name">

                </div>
                <div class="input-name">
                    <i class="fa fa-envelope email"></i>
                    <input type="text" placeholder="Email" class="name">
                </div>

                <div class="input-name">
                    <i class="fa fa-phone-square" aria-hidden="true"></i>

                    <input type="text" placeholder="Phone Number(self)" class="name">
                </div>

                
                <div class="input-name">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>

                    <input type="text" placeholder="Previous School Name" class="name">
                </div>
                <div class="input-name">
                    <i class="fa fa-calendar" aria-hidden="true"></i>

                    <input type="text" placeholder="Date Of Birth" class="name">
                </div>
                <div class="input-name">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                    <input type="text" placeholder="Address" class="name">
                </div>
                <div class="upload">
                    <i class="fa fa-file-image-o" aria-hidden="true"></i>

                    <input name="file1" type="file" accept="application/pdf">
                    
                    <!--our custom file upload button-->
                    <label for="Photo ">Upload Your CV pdf </label>
                </div>

               
                <div class="input-name">
                    <select class="Province">
                        <option>Shift</option>
                        <option>Part Time</option>
                        <option>Full Time</option>
                    </select>
                </div>



                <div class="input-name">
                    <select class="Province">
                        <option>Select a Province</option>
                        <option>Province 1</option>
                        <option>Madhesh</option>
                        <option>Bagmati</option>
                        <option>Gandaki</option>
                        <option>Lumbini</option>
                        <option>Karnali</option>
                        <option>Sudurpashchim</option>
                    </select>
                    <div class="arrow"></div>
                </div>

                <div class="input-name">
                    <input type="Checkbox" class="check-button">
                    <label>I accept all terms and conditions</label>
                </div>

                <div class="Register">
                    <button type="submit" class="Register">Register</button>

                </div>
            </form>
            <?php if(!empty($msg)){echo $msg; }?> 
  <input type="submit" class="btn btn-primary" value="Update">
      </form>


</body>
</html>