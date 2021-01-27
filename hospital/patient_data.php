<?php
$RegNo = $_GET['mobile'];
include './connection.php';
$selectSR = mysqli_query($conn, "SELECT * FROM `data` where mobile = '$RegNo' ");
while ($row = mysqli_fetch_array($selectSR)) {
    $patname = $row['name'];
    $patage = $row['age'];
    $patheight = $row['height'];
    $patweight = $row['weight'];
    $regdate = $row['date'];
}
?>
<!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <title>Hospital</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Bootstrap Stylesheet -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Animate -->
        <link rel="stylesheet" href="css/animate.min.css">

        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- FontAwesome Icons -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Normailize Stylesheet -->
        <link rel="stylesheet" href="css/normalize.min.css">

        <!-- Main Styles -->
        <link rel="stylesheet" href="css/style.css">

        <link rel="stylesheet" href="css/doctor.css">

        <script src="js/doc.js"></script>

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
         <style> 
            body{
                
                background-image: url("images/contact-bg.png");
                background-repeat:no-repeat;
                background-size:cover;
                background-position:center;
                text-align: center;
                color: white;
                padding-top: 100px;
            }
            .row{
                padding:10px;
                padding-left:30px;
                padding-right:30px;
            }
        </style>
    </head>
    <body>
        <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <h4>Hi, <?php echo $patname;?></h4>
                    </center>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Your Name</label>
                        <input readonly type="text" value="<?php echo $patname;?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Your Age</label>
                        <input readonly type="text" value="<?php echo $patage;?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Your Height</label>
                        <input readonly type="text" value="<?php echo $patheight;?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Your Weight</label>
                        <input readonly type="text" value="<?php echo $patweight;?>">
                    </div>
                </div>
            </div>
        </div>
        </section>
        
       
        <script src="js/vendor/jquery-1.10.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/templatemo_custom.js"></script> 
        <script>
            const loginbox = document.getElementById('log_doc');
            document.getElementById('show_logger').onclick = function () {
                loginbox.classList.toggle('disp_none');
            };
        </script>
    </body>
</html

