<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADMINISTRATION PAGE</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      border: 2px solid blue;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: aquamarine;
    }
    h1{
      text-align: center;
      color: lightseagreen;
      font-style: italic;
    }
  </style>
</head>
<body>
  <h1>ADMIN PANNEL</h1>
  <table>
    <tr>
      <th>TCR_ID</th>
      <th>TEACHER_NAME</th>
      <th>TEACHER_PHOTO</th>
      <th>QUALIFICATIONS</th>
      <th>SUBJECT</th>
      <th>PHONE</th>
      <th>SHIFT</th>
      <th>DATE_OF_BIRTH</th>
      <th>ADDRESS</th>
      <th>EDIT</th>
      <th>DELETE</th>
    </tr>
    <?php
    // Connection to the database
    $conn = mysqli_connect("localhost", "root", "", "school");

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // Get User data from the users table
    $sql = "SELECT * FROM userdetails";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["teacher_name"] . "</td>";
        echo "<td>" . $row["teacher_photo"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["qualifications"] . "</td>";
        echo "<td>" . $row["subject"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "<td>" . $row["shift"] . "</td>";
        echo "<td>" . $row["date_of_birth"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        
        

        echo "<td>";
        echo "<a href='modify.php?id=" . $row["id"] . "'>Edit</a> | ";
        echo "</td>";
        echo "<td>";
        echo "<a href='delete-script.php?id=" . $row["id"] . "'>Delete</a>";
        echo "</td>";
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='9'>No records found</td></tr>";
    }

    mysqli_close($conn);
    ?>
    </table>
</body>
</html>

