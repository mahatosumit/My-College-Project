
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre Registration Form </title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <style>
        body{
            font-size: 18px;
    background-color: green;
        }
        .container
{
    background: white;
    width: 500px;
    padding: 25px;
    margin: 50px auto 0;
    box-shadow: 0 0 7px 5px rgba(0, 0, 0, 0.5);

}
.container h1, h2 {
    font-size: 24px;
    line-height: 24px;
    text-align: center;
    color: blue;
}

.Register
{
    align-items: center;
    color: blue;
    font-size: 20px;
    margin-left: 180px;
    

}

    </style>
    <div class="container">
        <h1>Registration Form </h1>
        <h2>Who are you??</h2>
    <div class="input-who">
        <div class="Register">
            <button type="submit"onclick="window.location.href='teacher_form.php';">TEACHER</button>
            <button type="submit" onclick="window.location.href='student_form.php';">STUDENT</button>
          </div>
    </div>
</div>

</body>

</html>