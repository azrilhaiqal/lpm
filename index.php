<?php
session_start();
include 'koneksi.php';
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HOME</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body style="">
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 ">
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-envelope"></i> pemdes@batujajarbarat.desa.id</a></li>
                                    <li><a href="#"> <i class="fa fa-phone"></i>02286006079</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="img/logo desaa-picsay.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <i class="fa fa-home" style="color:white"><li><a class="active" href="index.php">Home</a></li></i>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="search_button">
                                       
                                    </div>
                                    <div class="book_btn d-none d-lg-block">
                                        <a class="popup-with-form" href="#test-form"><i class="fa fa-sign-in"></i> Login Admin/Petugas</a>
                                    </div>
                                </div>
                                               <?php
if (isset($_POST ['login'])) {
				$user = $_POST['user'];
				$pass = $_POST['pass'];
				$data_user = mysqli_query ($conn,"SELECT * FROM petugas WHERE username ='$user' AND password ='$pass'");
				$r = mysqli_fetch_array ($data_user);
				$username = $r ['username'];
				$password = $r ['password'];
				$nama_user = $r ['nama_petugas'];
				$nik = $r ['level'];
				if ($user == $username && $pass == $password) {
					$_SESSION['nama_petugas'] = $nama_user;
					$_SESSION['level'] = $nik;
		echo "<div class='alert alert-success' style='margin-top:11px'>Login Sukses</div>";
		echo "<meta http-equiv='refresh' content='1;url=admin_petugas.php'>";
		} else {
		echo "<div class='alert alert-danger' style='margin-top:11px'>Login Gagal</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php'>";

	}
	}
?>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
      <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_3 overlay2" style="background-image: url('img/banner/guru-picsay.jpg');" >
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                               <center><h3>Pengaduan Masyarakat</h3>
                                <p>Selamat datang di web Pengaduan Masyarakat Desa Batujajar Barat<br>
                                    Silahkan Registrasi dan Login dengan akun anda.</p>
                                <div class="video_service_btn">
                                    <a href="registrasi.php" class="boxed-btn3"><i class="fa fa-user-plus"> Registrasi disini</i></a>
                                    <a href="Login/index.php" class="boxed-btn3"> <i class="fa fa-sign-in"></i>
                                        Login disini</a></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- slider_area_end -->

    <!-- service_area_start -->


    <!-- project  -->
    <!--/ project  -->

    <!-- footer start -->
    <footer class="footer">
            
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center" >
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Muhamad Azril Haiqal</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- link that opens popup -->

    <!-- form itself end-->
    <form id="test-form" method="post" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="popup_header">
                    <h3>Login Khusus Admin/Petugas</h3>
                </div>
                <div class="custom_form">
                        <div class="row">
                                <div class="col-xl-12">
                                    <input type="text" name="user" required="required" placeholder="Username">
                                </div>
                                <div class="col-xl-12">
                                    <input type="password" name="pass" required="required" placeholder="Password">
                                </div>
                               
                                <div class="col-xl-12">
                                    <button type="submit" name="login" class="boxed-btn3"><i class="fa fa-sign-in"></i> Login</button>
                                </div>
                                <div class="col-xl-12">
                                </div>
                            </div>
                </div>
            </div>
        </div>
                                           
    </form>
    
     

   
    <!-- form itself end -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/slick.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
</body>

</html>