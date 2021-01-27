<?php
include 'connection.php';
$submit_id = $_GET['id'];
//echo $submit_id;
?>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
        <link href="css/accordian.css" rel="stylesheet" type="text/css"/>
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
        <div class="container">
            <br>
            <center><h1>PATIENT DETAILS</h1></center>
            <?php
            $sql = "SELECT sr_no, name, age, height, weight, mobile, date FROM data WHERE sr_no=$submit_id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    ?>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <center><label>Full Name</label></center>
                                <input class="form-control" type="text" name="fullname" id="fullname" value="<?php echo $row['name'] ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <center><label>age</label></center>
                                <input class="form-control" type="text" name="age" id="age" value="<?php echo $row['age'] ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <center><label>height</label></center>
                                <input class="form-control" type="text" name="height" id="height" value="<?php echo $row['height'] ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <center><label>weight</label></center>
                                <input class="form-control" type="text" name="weight" id="weight" value="<?php echo $row['weight'] ?>" readonly="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <center><label>mobile</label></center>
                                <input class="form-control" type="text" name="mobile" id="mobile" value="<?php echo $row['mobile'] ?>" readonly="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <center><label>Date</label></center>
                                <input class="form-control" type="date" name="date" id="date" value="<?php echo $row['date'] ?>" readonly="">
                            </div>
                        </div>
                    </div>

                    

                    <?php
                }
            } else {
                echo "0 results";
            }
            ?>
            <hr>
            <h1>Prescription</h1>
            <form method="POST" action="precesption.php">
                
                <?php

                    $selectSR = mysqli_query($conn, "SELECT mobile FROM `data` where sr_no = '$submit_id'");
                    while ($row = mysqli_fetch_array($selectSR)) {
                        $PatientMob = $row['mobile'];
                    }
                ?>
                <input type="hidden" name="patmob" value="<?php echo $PatientMob; ?>" style="color:black;" >
                <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="panel-group wrap" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Medicine 1
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="medone" placeholder="Medicine Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <input class="form-control" type="number" name="medonetime" placeholder="Medicine Time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of panel -->

                        <div class="panel">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Medicine 2
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="medtwo" placeholder="Medicine Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <input class="form-control" type="number" name="medtwotime" placeholder="Medicine Time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of panel -->

                        <div class="panel">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Medicine 3
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="medthree" placeholder="Medicine Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <input class="form-control" type="number" name="medthreetime" placeholder="Medicine Time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of panel -->

                        <div class="panel">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Medicine 4
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="medfour" placeholder="Medicine Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <input class="form-control" type="number" name="medfourtime" placeholder="Medicine Time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of panel -->
                        
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Medicine 5
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="medfive" placeholder="Medicine Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <input class="form-control" type="number" name="medfivetime" placeholder="Medicine Time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of panel -->

                    </div>
                    <!-- end of #accordion -->

                </div>
                <div class="col-md-12">
                    <center>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </center>
                </div>
            </div>
            </form>
            
            <br><br><br><br>
        </div> 

        <script src="js/vendor/jquery-1.10.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/templatemo_custom.js"></script> 
        <script>
            $(document).ready(function () {
                $('.collapse.in').prev('.panel-heading').addClass('active');
                $('#accordion, #bs-collapse')
                        .on('show.bs.collapse', function (a) {
                            $(a.target).prev('.panel-heading').addClass('active');
                        })
                        .on('hide.bs.collapse', function (a) {
                            $(a.target).prev('.panel-heading').removeClass('active');
                        });
            });
        </script>
    </body>
</html>