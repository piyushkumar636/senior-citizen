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

    </head>
    <body>


        <div id="responsive-menu">
            <ul class="menu-holder">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="#services"><i class="fa fa-cogs"></i>Services</a></li>
                <li><a href="#products"><i class="fa fa-list"></i>Products</a></li>
                <li><a href="#video"><i class="fa fa-list"></i>Video</a></li>
                <li><a href="#contact"><i class="fa fa-envelope"></i>Contact</a></li>
            </ul>
        </div>

        <!-- HEADER -->
        <header class="site-header">
            <div class="container">
                <div class="row">
                    <div class="menu-holder" style="display:flex;justify-content: space-between;">
                        <div class="col-md-7 col-sm-8">
                            <nav class="main-menu hidden-xs">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#services">Services</a></li>
                                    <li><a href="#products">Login</a></li>
                                    <li><a href="#video">Registration</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <ul class="social-top">
                                <li><a href="#"><i class="fa fa-facebook"></i><span class="hidden-xs">Facebook</span></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i><span class="hidden-xs">Twitter</span></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i><span class="hidden-xs">Instagram</span></a></li>
                                <li>
                                    <button class="d-login-btn" style="margin-top: 5px;" id="show_logger">Doctor Login</button>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="text-right visible-xs">
                        <a href="#" id="mobile_menu"><span class="fa fa-bars"></span></a>
                    </div>
                </div>
            </div>
        </header> <!-- .site-header -->


        <!-- TOP CONTENT -->
        <div class="top-c">
            <div class="container"><br><br><br><br><br>
                <!-- Doctor's Login box -->
                <div class="login-container disp_none" id="log_doc">
                    <div class="center-contents">
                        <form action="doctorvalid.php" method="POST">
							<div class="centered-item">
                            <div class="row">
                                <h2 style="text-align: center;color: #31b0d5">Login as Doctor</h2>
                                <hr></hr>
                            </div>
                            <div class="input-wrapper">
                                <label>E-mail</label>
                                <input class="inp-doc" type="text" name="doc_email" placeholder="">
                            </div>
                            <div class="input-wrapper">
                                <label>Password</label>
                                <input class="inp-doc" type="password" name="doc_password" placeholder="">
                            </div>

                            <div class="button-wrapper">
                                <input type="submit" class="btn btn-info d-login-btn mb_none" value="Login" style="outline: none;">
                            </div>
							</div>
						</form>

                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h1>Multicare Hospital </h1>
                        <p>Nara Road, Jaripatka</p><p> Nagpur-440014</p>
                    </div>
                    <div class="col-md-6"><img src="images/hospital.jpg" style="width:100%;height:300px;"></div>
                </div>
            </div>
        </div>


        <!-- SERVICES -->
        <div class="content-section" id="services">
            <div class="container">
                <div class="row">
                    <div>
                        <center><h1>services</h1></center>
                        <div class="row"> 
                            <div class="col-md-4">
                                <P>24*7 Pathology labs</P>
                                <img src="images/path.jpg" style="width:200px;height:150px;">						  
                            </div>

                            <div class="col-md-4">
                                <p>On Call Doctor </p>
                                <img src="images/doctor.jpg" style="width:200px;height:150px;">
                            </div>

                            <div class="col-md-4">
                                <p>Diagnostic Test</p>
                                <img src="images/test.jpg" style="width:200px;height:150px;">
                            </div>
                        </div>   
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- #services -->


        <!-- PRODUCTS -->
        <div class="content-section" id="products">
            <div class="container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <form action="patient_login.php" method="POST">
                        <div class=" card" > 
                            <div class="padder15 login-wrp">
                                <center><h1>LOGIN</h1></center>
                                
                                <div class="row">
                                    <div class="col-md-12"> 
                                        <lable>Enter Mobile number</lable>
                                        <input type="text" class="form-control" placeholder="mobile" name="regMobNo" required>
                                    </div> 
                                </div><br>
                                <div class="row">
                                    <div class="col-md-12 login-flex">
                                        <button class="btn btn-primary mb-btn-login" type="submit">LOGIN</button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </form>
                    </div>
                    <div class="col-md-4"></div>
                    
                </div>
            </div> 
        </div> <!-- #products -->


        <!-- VIDEO FEATURe -->
        <div id="video" class="video-feature content-section">
            <div class="container">
                <div class="row">
                    <form action="store.php" method="POST">
                        <div class="container card" >
                            <div class="form-wrapper">
                                <center><h1>REGISTER</h1></center>
                                <div class="row mb_15">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <lable>Full Name</lable>
                                            <input type="text" class="form-control" placeholder="Ex : piyush wanjari" name="fullname" required>
                                        </div>

                                        <div class="col-md-6">
                                            <lable>Age</lable>
                                            <input type="number" class="form-control" placeholder="25" name="age" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <lable>Height (cms)</lable>
                                            <input type="text" class="form-control" placeholder="150cm" name="height" required>
                                        </div>

                                        <div class="col-md-6">
                                            <lable>Weight (Kgs)</lable>
                                            <input type="text" class="form-control" placeholder="100 kg" name="weight" required><br>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <lable>Mobile Number</lable>
                                            <input type="number" class="form-control" placeholder="Ex : 8000000007" name="regmob" required>
                                        </div>


                                        <div class="col-md-6">
                                            <lable>Date Of Appoitement</lable>
                                            <input type="date" class="form-control" placeholder="" name="date" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12 x-center">
                                        <button class="btn btn-primary btn-center" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .video-feature -->


        <!-- CONTACT -->
        <div class="content-section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center section-header">
                        <h2 class="section-title">Contact Us</h2>
                        <p>Welcome to our hospital we are always happy to help you </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 contact-info">
                      <!--  <p>Etiam interdum elementum massa amaas, sit amet pretium orci sollicitudin pellenue. Aeneanss risus neque, dignissim nec orci in. <br><br>Hendrerit tempor ligula. Suspendisse sed nisi eget sapien ltrices.</p>-->
                        <ul>
                            <li><i class="fa fa-phone"></i> 090-080-0980</li>
                            <li><i class="fa fa-map-marker"></i> Jaripatka nagpur</li>
                            <li><i class="fa fa-envelope"></i> <a href="mailto:info@company.com">info@hospital.com</a></li>
                        </ul>
                    </div> <!-- .col-md-5 -->
                    <div class="col-md-7">
                        <div class="row">
                            <form class="contact-form" action="#" method="post">
                                <fieldset class="col-md-6">
                                    <input type="text" name="name" placeholder="Name...">
                                </fieldset>
                                <fieldset class="col-md-6">
                                    <input type="email" name="email" placeholder="Email...">
                                </fieldset>
                                <fieldset class="col-md-12">
                                    <input type="text" name="subject" placeholder="Subject...">
                                </fieldset>
                                <fieldset class="col-md-12">
                                    <textarea name="message" id="message" cols="30" rows="5" placeholder="Message..."></textarea>
                                </fieldset>
                                <fieldset class="col-md-12">
                                    <input type="submit" value="Send Message" class="main-button">
                                </fieldset>
                            </form>
                        </div> <!-- .row -->
                    </div> <!-- .col-md-8 -->
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- #contact -->


        <!-- FOOTER -->
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <p>Piyushkumar Wanjari</p>
                    </div> <!-- .col-md-12 -->
                </div> <!-- .row -->
            </div> <!-- .container -->
        </footer> <!-- .site-footer -->


        <script src="js/vendor/jquery-1.10.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/templatemo_custom.js"></script> 
        <script>
            const loginbox = document.getElementById('log_doc');
            document.getElementById('show_logger').onclick = function(){
                loginbox.classList.toggle('disp_none');
            };
        </script>
    </body>
</html>