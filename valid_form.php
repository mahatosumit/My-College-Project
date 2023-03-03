<?php
// define variablesand to input values
$name = $email = $password = $conformPass = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);
    $conform_password = test_input($_POST['conformPass']);
}

function test_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// define variables and set to empty string
$nameErr = $emailErr = "";
$name = $email = "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty($_POST['name'])) {
        $nameErr = "Please enter vaild name";

    }
    else{
        $name = test_input($_POST['name']);
        if(!preg_match("/^[a-zA-Z0-9]+()", $name)){
            $nameErr = "Only letters and whitespaces allowed";
        }
    }

}

if(empty($_POST['email'])) {
    $nameErr = "Please enter vaild email address";

}
else{
    $name = test_input($_POST['email']);
    if(!filter_var( $email;, FILTER_VALIDATE_EMAIL)){
        $emailErr = "The email address is incorrect";
    }
}
?>