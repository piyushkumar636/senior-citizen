<?php
include_once './connection.php';

$docEmail= $_POST['doc_email'];
$docPass= $_POST['doc_password'];

$selectSR = mysqli_query($conn, "SELECT drname, drpass FROM `doctorlogin` ");
while ($row = mysqli_fetch_array($selectSR)) {
    $drname = $row['drname'];
    $drpass = $row['drpass'];
    if($drname == $docEmail && $drpass == $docPass){
        header("location:view.php");
    }else{
        
        echo "<script>
            alert('Please enter valid number.');
            window.location.href='index.php';
           </script>";
//        header("location:index.php");
    }
}