<?php
// Connect to the database
$con = mysqli_connect("localhost", "root", "", "collage");

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the updated data from the form
$id = $_POST["STD_ID"];
$username = $_POST["STUDENT_NAME"];
$photo = $_POST["STUDENT_PHOTO"];
$stream = $_POST["STREAM"];
$shift = $_POST["SHIFT"];
$phone = $_POST["PHONE"];
$previousschool = $_POST["PREVIOUSSCHOOL"];
$address = $_POST["ADDRESS"];
$academic_year = $_POST["ACADEMIC_YEAR"];
$description = $_POST["DESCRIPTION"];


// Update the data in the database
$sql = "UPDATE userdetails SET STUDENT_NAME='$username', STUDENT_PHOTO='$photo', STREAM='$stream', SHIFT='$shift', PHONE='$phone', 
PREVIOUSSCHOOL='$previousschool', ADDRESS='$address'  DESCRIPTION='description', WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($con);
}

mysqli_close($conn);

// Redirect to the admin panel page
header("Location: administration1.php");
exit;
?>
