<?php
$conn = mysqli_connect("localhost", "root", "", "collage");




$id = $_GET["id"];

// Delete the specified user
$sql1 = "DELETE FROM userdetails WHERE id=$id";
$sql2 = "DELETE FROM users WHERE id=$id";

if (mysqli_query($conn, $sql1) &&  mysqli_query($conn, $sql2)) {
    header("Location: administration1.php");
} else {
    echo "Error deleting record: " . mysqli_error($con);
}

mysqli_close($con);
?>