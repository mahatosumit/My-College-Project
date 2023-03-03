
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre Registration/Scholarship Form (Grade XI)</title>
    <link rel="stylesheet" href="student_form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php 
    include('connection_db.php');
    include('signin_form_script.php');
    ?>
    <div class="container">
        <h2>Student's Registration Form</h2>
        <div class="form-container">
            <form method="post" >
                <div class="input-name">
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Your Name" class="name" required name="name">

                </div>
                <div class="input-name">
                    <i class="fa fa-envelope email"></i>
                    <input type="text" placeholder="Email" class="name" required name="email" >
                </div>

                <div class="input-name">
                    <i class="fa fa-phone-square" aria-hidden="true"></i>

                    <input type="text" placeholder="Phone Number(self)" class="name" required  name="phone" >
                </div>

                
                <div class="input-name">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>

                    <input type="text" placeholder="Previous School Name" class="name" required name="previousschoolname" >
                </div>
                <div class="input-name">
                    <i class="fa fa-calendar" aria-hidden="true"></i>

                    <input type="text" placeholder="Date Of Birth" class="name" required  name="dateofbirth">
                </div>
                <div class="input-name">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                    <input type="text" placeholder="Address" class="name" required  name="address">
                </div>
                <div class="upload">
                    <i class="fa fa-file-image-o" aria-hidden="true"></i>

                    <input name="file1" type="file" accept="png/pdf" required name="photo">
                    <!--our custom file upload button-->
                    <label for="Photo ">Upload Your photo</label>
                </div>

               
                <div class="input-name">
                    <select class="Province" required name="shift" >
                        <option>Shift</option>
                        <option>Part Time</option>
                        <option>Full Time</option>
                    </select>
                </div>



                <div class="input-name">
                    <select class="Province" required name="province" >
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
                    <button type="submit" name="submit" class="Register" onclick="window.location.href='college.html';">Register</button>

                </div>
            </form>
        </div>
    </div>
    <?PHP
       
       $conn =mysqli_connect('localhost','root','','collage');
       if(isset($_POST['submit']) )
       {
       
           $name=$_POST['name'];
           $photo=$_POST['photo'];
           $stream=$_POST['stream'];
           $phone=$_POST['phone'];
           $previousschool=$_POST['previousschool'];
           $shift=$_POST['shift'];
           $dateofbirth=$_POST['dateofbirth'];
           $address=$_POST['address'];
           $shift=$_POST['shift'];
           $province=$_POST['province'];
           $query="INSERT INTO `student` (`STD_ID`, `STUDENT_NAME`, `STUDENT_PHOTO`, `STREAM`, `PHONE`, `PREVIOUSSCHOOL`, `SHIFT`, `DATE_OF_BIRTH`, `ADDRESS`, `ACADEMIC_YEAR`, `DESCRIPTION`)
            VALUES ('', '$name', '$photo', '$stream', '$phone', ' $previousschool', '$shift', '$dateofbirth', '$address', '','',)";
           $run=mysqli_query($conn,$query);
      }
        ?>
</body>
</html>