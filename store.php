<?php
include 'connection.php';

$fullname=$_POST['fullname'];
$age=$_POST['age'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$mobile=$_POST['regmob'];
$date=$_POST['date'];
 echo $fullname;echo '<br>';
 echo $age;echo '<br>';
 echo $height;echo '<br>';
 echo $weight;echo '<br>';
 echo $mobile;echo '<br>';
 echo $date;

$sql = "INSERT INTO data (`name`, `age`, `height`, `weight`, `mobile`, `date`)
VALUES ('$fullname', '$age', '$height', '$weight', '$mobile', '$date')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("location:index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



?>