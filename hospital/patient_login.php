<?php

include_once './connection.php';

$RegNo = $_POST['regMobNo'];


$selectSR = mysqli_query($conn, "SELECT mobile FROM `data` ");
while ($row = mysqli_fetch_array($selectSR)) {
    $RegMobile = $row['mobile'];
    if($RegMobile == $RegNo){
        header("location:patient_data.php?mobile=$RegNo");
    }else{
        
        echo "<script>
            alert('Please enter valid number.');
            window.location.href='index.php';
           </script>";
//        header("location:index.php");
    }
}