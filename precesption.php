<?php
include './connection.php';

$patMob = $_POST['patmob'];
$firstMed = $_POST['medone'];
$firstTime = $_POST['medonetime'];
$secondMed = $_POST['medtwo'];
$secondTime = $_POST['medtwotime'];
$thirdMed = $_POST['medthree'];
$thirdTime = $_POST['medthreetime'];
$fourMed = $_POST['medfour'];
$fourTime = $_POST['medfourtime'];
$fiveMed = $_POST['medfive'];
$fivetTime = $_POST['medfivetime'];

echo $patMob; echo '<br>';
echo $firstMed; echo '<br>';
echo $firstTime; echo '<br>';
echo $secondMed; echo '<br>';
echo $secondTime; echo '<br>';
echo $thirdMed; echo '<br>';
echo $thirdTime; echo '<br>';
echo $fourMed; echo '<br>';
echo $fourTime; echo '<br>';
echo $fiveMed; echo '<br>';
echo $fivetTime; echo '<br>';

$sql = "INSERT INTO prescription (`mobile`, `medicineone`, `medonetime`, `medicinetwo`, `medtwotime`, `medicinethree`,`medthreetime`,`medicinefour`,`medfourtime`,`medicinefive`,`medfivetime`)
VALUES ('$patMob', '$firstMed', '$firstTime', '$secondMed', '$secondTime', '$thirdMed','$thirdTime','$fourMed','$fourTime','$fiveMed','$fivetTime')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
            alert('Prescribtion Submited');
            window.location.href='view.php';
           </script>";
//  header("location:patdet.php");
} else {
  echo "<script>
            alert('Please try again');
            window.location.href='view.php';
           </script>";
}