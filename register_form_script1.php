<?php 
$connect = mysqli_connect("localhost", "root" , "","collage") or die("Connection failed");
if(!empty($_POST['save']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conform_password=$_POST['conformPass'];
    $gender= "male";
    $province= "Madhesh";
   
//check if username and email already exists
$sql = "SELECT * FROM `users` WHERE `name` = '$name' OR `email` = '$email'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);}
if($num == 1){
  
    echo "<script>alert('Username or Email already exists')</script>";
   
}
else{
    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $name = $_SESSION['name'];

    header("Location: info-form.php");
 

}

//check if username and email already exists
$sql = "SELECT * FROM `users` WHERE `name` = '$name' OR `email` = '$email'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if($num == 1){
  
    echo "<script>alert('Username or Email already exists')</script>";
   
}
else{
    session_start();
    $_SESSION['username'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $name = $_SESSION['name'];

    header("Location: info1.php");
 

}
function legalinput($data){
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>