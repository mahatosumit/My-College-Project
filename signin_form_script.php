<?php 
if(isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])){
    $username = legalinput($_POST['username']);
    $email = legalinput($_POST['email']);
    $password = legalinput($_POST['password']);
    $conformpassword = legalinput($_POST['conformpassword']);
    



//check if username and email already exists
    $sql = "SELECT * FROM `users` WHERE `username` = '$username' OR `email` = '$email'";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
      
        echo "<script>alert('Username or Email already exists')</script>";
       
    }
    else{
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['conformpassword'] = $conformpassword;
        $username = $_SESSION['username'];

        header("Location: info-form.php");
     

}}



function legalinput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>