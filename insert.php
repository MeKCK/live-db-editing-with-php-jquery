<?php
$connect = mysqli_connect("localhost", "root", "", "testing");
if(isset($_POST["extension"], $_POST["fname"], $_POST["department"], $_POST["campus"]))
{
 $extension = mysqli_real_escape_string($connect, $_POST["extension"]);
 $fname = mysqli_real_escape_string($connect, $_POST["fname"]);
 $department = mysqli_real_escape_string($connect, $_POST["department"]);
 $campus = mysqli_real_escape_string($connect, $_POST["campus"]);
 $query = "INSERT INTO user(extension, fname, department, campus) VALUES('$extension', '$fname', '$department', '$campus')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>