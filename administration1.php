<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADMINISTRATION PAGE</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  .navbar {
   width: 100%;
   float: center;
  text-align: center;
  padding: 14px 40px;
  text-decoration: none;
  font-size: 17px;
}
.edit{
  border: none;
  color: whitesmoke;
  background-color: green;
  border-radius: 4px;
  padding: 10px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
      }
  .delete{
    border: none;
  color: whitesmoke;
  background-color: red;
  border-radius: 4px;
  padding: 10px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  }
    table {
      width: 100%;
      border-collapse: collapse;
    }

    th,
    td {
      border: 2px solid blue;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: aquamarine;
    }

    h1 {
      text-align: center;
      color: lightseagreen;
      font-style: italic;
    }
  </style>
</head>

<body>
  <h1>ADMIN PANNEL</h1>
  <div class="navbar">
  <input type="Search" placeholder="Search..." name="search">
  <i class="fa fa-search" aria-hidden="true"></i>
  <a  href='modify1_db_form.php?id=" . $row["id"] . "' class="edit">EDIT</a>
  <a href='delete_db_form.php?id=" . $row["id"] . "' class="delete">DELETE</a>
  </div>
  <table>
    <tr>
      <th>STD_ID</th>
      <th>STUDENT_NAME</th>
      <th>STUDENT_PHOTO</th>
      <th>STREAM</th>
      <th>PHONE</th>
      <th>PREVIOUSSCHOOLNAME</th>
      <th>SHIFT</th>
      <th>DATE_OF_BIRTH</th>
      <th>ADDRESS</th>
      <th>ACADEMIC_YEAR</th>
      <th>DESCRIPTION</th>
    </tr>
  </table>
  <?php
  //Connection to the database
  $connection = mysqli_connect("localhost", "root", "", "collage");

  if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Get data from the users table
  $sql = "SELECT * FROM student";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row["std_id"] . "</td>";
      echo "<td>" . $row["student_name"] . "</td>";
      echo "<td>" . $row["student_photo"] . "</td>";
      echo "<td>" . $row["stream"] . "</td>";
      echo "<td>" . $row["phone"] . "</td>";
      echo "<td>" . $row["previous school name"] . "</td>";
      echo "<td>" . $row["shift"] . "</td>";
      echo "<td>" . $row["date_of_birth"] . "</td>";
      echo "<td>" . $row["address"] . "</td>";
      echo "<td>" . $row["academic_year"] . "</td>";
      echo "<td>" . $row["description"] . "</td>";
    }
  } else {
    echo "<tr><td colspan='9'>No records found</td></tr>";
  }

  mysqli_close($conn);
  
  ?>

</body>

</html>