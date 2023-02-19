<?php
$email=$_POST['email'];

if (filter_var($email, FILTER_VALIDATE_EMAIL) ==false );{
    exit('invalid email');
}
// echo 'Email address is valid';
$api_key = "891a77b919cb4135b54d11e25de6f4bc";
$ch = curl_int();
curl_setopt_array($ch) {
    CURL0PT_URL => "https://emailvalidation.abstractapi.com/v1/?api_key$email=$email",
    CURLOPT_RETURNTRANSFER => true,
    CULROPT_FOLLOWLOCATION => true

};
$response = curl_exec($ch);
curl_close($ch);
$data = json_decode($response, true);

// var_dump($data);
// exit;
if ($data['deliverability'] === "UNDELIVERABLE") {
    exit("Undeliverable");

}
if ($data["is_disposable_email"]["value"] === true){
    exit("Disposable");
}
?>