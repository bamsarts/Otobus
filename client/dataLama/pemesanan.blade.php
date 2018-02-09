<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Otobus</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!--favicon otobus-->
        <link rel="shortcut icon" type="text/css" href="{{asset('asset/images/icon.png')}}">

        <link rel="stylesheet" href="{{asset('asset/assets/css/bootstrap.min.css')}}">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{asset('asset/assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('asset/assets/css/bootstrap-theme.min.css')}}">


        <!--For Plugins external css-->
        <link rel="stylesheet" href="{{asset('asset/assets/css/animate/animate.css')}}" />
        <link rel="stylesheet" href="{{asset('asset/assets/css/plugins.css')}}" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="{{asset('asset/assets/css/style.css')}}">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{asset('asset/assets/css/responsive.css')}}" />

        <link rel="stylesheet" type="text/css" href="{{asset('asset/universal/style.css')}}">

        <!-- style form -->
        <link rel="stylesheet" type="text/css" href="{{asset('asset/assets/css/styleForm.css')}}">

        <script src="{{asset('asset/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>

    <body  ng-app="otobuus_app" ng-controller="pemesanan_controller">
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <header id="home" class="navbar-fixed-top">

            <!-- End navbar-collapse-->

            <div class="main_menu_bg" style="background: black;">
                <div class="container"> 
                    <div class="row">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="{{ url ('/') }}"><img src="{{asset('asset/images/logo.png')}}" alt="" /></a>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="{{ url ('/') }}" style="font-size: 14px;">Home</a></li>
                                        <li><a href="{{ url ('pemesanan') }}" style="font-size: 14px;">Cek Pemesanan</a></li>
                                        <li><a href="{{ url ('informasi') }}" style="font-size: 14px;">Informasi</a></li>
                                        <li><a href="{{ url ('login') }}" style="font-size: 14px;">Login/Daftar</a></li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>	
        </header> <!-- End Header Section -->

        <section id="slider">
            <div class="slider_overlay" style="background-color: white;">
                <div class="container" style="margin-top: -60px;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main_slider_content wow zoomIn" data-wow-duration="1s">
                                <p style="font-size: 18px; color: black; text-align: center;"><b>Terima Kasih</b></p>
                                <p style="font-size: 12px; color: black; text-align: center;">
                                    No. Pesanan
                                </p><br>
                                <p style="font-size: 12px; color: black; text-align: center;">
                                    Kami akan menunggu proses pembayaran anda dalam waktu
                                    <span ng-repeat="transaksi in pemesanan_transaksi"></span>
                                </p><br><br>
                                <p style="font-size: 12px; color: black; text-align: center;">
                                    E-Tiket/Kode Booking anda akan dikirim ke kotak masuk email atau sms setelah anda melakukan pembayaran. Jika anda telah memiliki akun Otobus, anda dapat melakukan pengecekan transaksi pemesanan pada menu <b><a href="#" style="color: black;">Riwayat Pemesanan</a></b>
                                </p><br>
                                <p align="center"><button class="btn btn-warning btn-sm" style="background: #ff6600; border-color: #ff6600; border-radius: 2px;">ke Website Otobus</button></p>
                                <p align="center" style="font-size: 12px; color: black;">Atau</p>
                                <p align="center"><button class="btn btn-warning btn-sm" style="background: #ff9900; border-color: #ff9900; border-radius: 2px;"><data android:scheme="otobus" android:host="com.otobus.otodata"/>
                                <a href="otobus://" style="color: white;">Kembali ke Aplikasi</a></button></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Start of Tawk.to Script
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/59bf396dc28eca75e4620995/default';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
        End of Tawk.to Script-->
		
        <!-- untuk scroll up sengaja di disable
		<div class="scrollup">
			<a href="#"><i class="fa fa-chevron-up"></i></a>
		</div>		
        -->

        <script src="{{asset('asset/assets/js/vendor/jquery-1.11.2.min.js')}}"></script>
        <script src="{{asset('asset/assets/js/vendor/bootstrap.min.js')}}"></script>

        <script src="{{asset('asset/assets/js/jquery-easing/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('asset/assets/js/wow/wow.min.js')}}"></script>
        <script src="{{asset('asset/assets/js/plugins.js')}}"></script>
        <script src="{{asset('asset/assets/js/main.js')}}"></script>
    </body>
</html>
