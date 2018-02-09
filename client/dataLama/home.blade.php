<?php
    header("Access-Control-Allow-Origin: *");
    header("Conten-Type: application/json; charset=UTF-8");
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Otobus</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--favicon otobus-->
        <link rel="shortcut icon" type="text/css" href="{{asset('asset/images/icon.png')}}">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">

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

        <!-- datepicker style -->
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/datepicker.css')}}">

        <!-- material design lite (Form) -->
        <link rel="stylesheet" type="text/css" href="{{asset('asset/material_design_lite/material.min.css')}}">
        <!-- end -->
        <!-- material design lite (Form) -->
        <script type="text/javascript" src="{{asset('asset/material_design_lite/material.min.js')}}"></script>
        <!-- end -->

        <script src="{{asset('asset/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>

        <!-- css chosen file -->
        <link rel="stylesheet" type="text/css" href="{{asset('asset/chosen/chosen.css')}}">
    </head>
    <body >
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <header id="home" class="navbar-fixed-top">

            <!-- End navbar-collapse-->

            <div class="main_menu_bg">
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
                                        <li><a href="{{ url ('/') }}">Home</a></li>
                                        <li><a href="{{ url ('pemesanan') }}">Cek Pemesanan</a></li>
                                        <li><a href="{{ url ('informasi') }}">Informasi</a></li>
                                        <li><a href="{{ url ('login') }}">Login/Daftar</a></li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>	
        </header> <!-- End Header Section -->

        <section id="slider" class="slider">
            <div class="slider_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_slider text-center" style="margin-top: -60px;">
                            <div class="col-md-6">
                            <div class="main_slider_content wow fadeIn" data-wow-duration="1s">
                                <div class="single_widget_form text-left">
                                    
                                    <form action="#" id="formid" method="get">
                                        <div class="col-md-2">
                                            <img src="asset/images/asal1.png">
                                        </div>
                                        <div class="col-md-10">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label col-xs-5">
                                                <input type="text" class="mdl-textfield__input" id="asal1">
                                                <label class="mdl-textfield__label" for=""><p style="color: white;">Kota Asal</p></label>
                                            </div>

                                            <!-- <div id="asal2" class="col-xs-5 asal">
                                                <select class="kotaAsal" id="kotaAsal" style="width: 200px;">
                                                    <optgroup>
                                                        <option>
                                                            
                                                        </option>
                                                    </optgroup>
                                                </select>
                                            </div> -->
                                        </div>

                                        <div class="col-md-2">
                                            <img src="asset/images/tujuan1.png">
                                        </div>
                                        <div class="col-md-10">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label col-xs-5">
                                                <input type="text" class="mdl-textfield__input" id="tujuan1">
                                                <label class="mdl-textfield__label" for=""><p style="color: white;">Kota Tujuan</p></label>
                                            </div>

                                            <!-- <div id="tujuan2" class="col-xs-5 tujuan">
                                                <select class="kotaTujuan" id="kotaTujuan" style="width: 200px;">
                                                    <optgroup>
                                                        <option>
                                                            
                                                        </option>
                                                    </optgroup>
                                                </select>
                                            </div> -->
                                        </div>

                                        <div class="col-md-2">
                                            <img src="asset/images/tanggal1.png">
                                        </div>
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label col-md-10">
                                            <input type="text" class="mdl-textfield__input tanggal" value="<?php $tgl=date('d-m-Y'); echo $tgl; ?>">
                                        </div>

                                        <div class="col-md-2">
                                            <img src="asset/images/kelas1.png">
                                        </div>
                                        <div class="col-md-10">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label col-xs-5">
                                                <input type="text" class="mdl-textfield__input" id="kelas1">
                                                <label class="mdl-textfield__label" for=""><p style="color: white;">Kelas</p></label>
                                            </div>

                                            <div id="kelas2" class="col-xs-5 kelas_">
                                                <select class="kelas" id="kelas" style="width: 200px;">
                                                    <!--<option value="ekonomi">Ekonomi</option>
                                                    <option value="non_ekonomi">Non Ekonomi</option>-->
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <img src="asset/images/penumpang1.png">
                                        </div>
                                        <div class="col-md-10">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label col-xs-5">
                                                <input type="text" class="mdl-textfield__input" id="penumpang1">
                                                <label class="mdl-textfield__label" for=""><p style="color: white;">Jumlah Penumpang</p></label>
                                            </div>

                                            <div id="penumpang2" class="col-xs-5 penumpang_">
                                                <select class="penumpang" style="width: 200px;">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div> 

                                        <br><br><input type="button" value="Cari" class="btn btn-xs btn-primary form-control" onclick="window.location = '{{ url ("pencarian") }}' ">
                                    </form>
                                    
                                </div>
                            </div>
                            </div>	
                            <div class="col-md-6" style="margin-top: 150px;">
                                <div class="main_slider_content wow zoomIn" data-wow-duration="1s">
                                    <h4 style="color: orange;">Cari dan pesan tiket disini !</h4>
                                    <p style="font-size: 18px;">Anda bisa pesan tiket s/d 45 hari sebelum keberangkatan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr style="border: 0; height: 1px; background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 1), rgba(0, 0, 0, 0)); color: white;">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h5 style="color: white;">Operator Bus</h5>
                        </div>
                        <div class="text-center">
                        	<marquee behavior="alternate" width="30%"  onmouseover="this.stop()" onmouseout="this.start()">
                            <img src="asset/images/PO_Bus/1.png" style="margin-bottom: 8px;">
                            <img src="asset/images/PO_Bus/2.png" style="margin-bottom: 8px;">
                            <img src="asset/images/PO_Bus/3.png" style="margin-bottom: 8px;">
                            <img src="asset/images/PO_Bus/4.png" style="margin-bottom: 8px;">
                            <img src="asset/images/PO_Bus/5.png" style="margin-bottom: 8px;">
                            <img src="asset/images/PO_Bus/6.png" style="margin-bottom: 8px;">
                        	</marquee>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="text-center">
                            <h5 style="color: white;">Pembayaran</h5>
                        </div>
                        <div class="text-center">
                        	<marquee behavior="alternate" direction="right" width="30%"  onmouseover="this.stop()" onmouseout="this.start()">
                            <img src="asset/images/bank/1.jpg" style="margin-bottom: 8px;">
                            <img src="asset/images/bank/2.jpg" style="margin-bottom: 8px;">
                            <img src="asset/images/bank/3.jpg" style="margin-bottom: 8px;">
                            <img src="asset/images/bank/4.jpg" style="margin-bottom: 8px;">
                            <img src="asset/images/bank/5.jpg" style="margin-bottom: 8px;">
                            <img src="asset/images/bank/6.jpg" style="margin-bottom: 8px;">
                            <img src="asset/images/bank/7.jpg" style="margin-bottom: 8px;">
                            <img src="asset/images/bank/8.jpg" style="margin-bottom: 8px;">
                            <img src="asset/images/bank/9.jpg" style="margin-bottom: 8px;">
                            <img src="asset/images/bank/10.jpg" style="margin-bottom: 8px;">
                            <img src="asset/images/bank/11.jpg" style="margin-bottom: 8px;">
                            <img src="asset/images/bank/12.jpg" style="margin-bottom: 8px;">
                            <img src="asset/images/bank/13.jpg" style="margin-bottom: 8px;">
                            <img src="asset/images/bank/14.jpg" style="margin-bottom: 8px;">
                            <img src="asset/images/bank/15.jpg" style="margin-bottom: 8px;">
                            <img src="asset/images/bank/16.jpg" style="margin-bottom: 8px;">
                            <img src="asset/images/bank/17.jpg" style="margin-bottom: 8px;">
                        	</marquee>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="abouts" class="abouts">
            <div class="container">
                <div class="row">
                        <div class="col-md-12">
                            <div class="single_abouts_text text-center wow slideInLeft" data-wow-duration="1s">
                                <br><h4 style="color: white;">Mengapa beli tiket di otobus.co.id?</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="height: 100%;position: relative;">
                    <div class="col-md-4">
                        <div class="box-simple wow slideInRight" data-wow-duration="1s">
                            <div class="icon">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <h3>Title</h3>
                            <p>Deskripsi singkat disini</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-simple wow slideInRight" data-wow-duration="1s">
                            <div class="icon">
                                <i class="fa fa-print"></i>
                            </div>
                            <h3>Title</h3>
                            <p>Deskripsi singkat disini</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-simple wow slideInRight" data-wow-duration="1s">
                            <div class="icon">
                                <i class="fa fa-print"></i>
                            </div>
                            <h3>Title</h3>
                            <p>Deskripsi singkat disini</p>
                        </div>
                    </div>
                </div>
                <div class="row" style="height: 100%;position: relative;">
                    <div class="col-md-4">
                        <div class="box-simple wow slideInRight" data-wow-duration="1s">
                            <div class="icon">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <h3>Title</h3>
                            <p>Deskripsi singkat disini</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-simple wow slideInRight" data-wow-duration="1s">
                            <div class="icon">
                                <i class="fa fa-print"></i>
                            </div>
                            <h3>Title</h3>
                            <p>Deskripsi singkat disini</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-simple wow slideInRight" data-wow-duration="1s">
                            <div class="icon">
                                <i class="fa fa-print"></i>
                            </div>
                            <h3>Title</h3>
                            <p>Deskripsi singkat disini</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="footer_widget" class="footer_widget">
            <div class="container">
                <div class="row">
                    <div class="footer_widget_content">
                    <div class="col-md-12">
                                <div class="single_widget wow fadeIn" data-wow-duration="1s">
                                    <!--<h4 style="color: orange;" class="text-center">Cari dan pesan tiket disini !</h4>-->
                                    <p style="font-size: 15px; color: black;" class="text-center">
                                        Otobus.co.id adalah website booking tiket bus online terbesar di Indonesia. Kami membantu Anda pesan tiket dengan lebih cepat, mudah, dan aman. Otobus.co.id memiliki lebih dari 1000 keberangkatan per hari dan bekerja sama dengan 100+ operator bus terpercaya. Rute perjalanan kami telah menjangkau pulau Jawa, Sumatera, Bali, Madura, dan Kalimantan. Kini semakin mudah merencanakan perjalanan anda. Cobalah pengalaman beli tiket disini.
                                    </p>
                                </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single_widget wow fadeIn" data-wow-duration="2s">
                                <h3 style="color: black;">Rute Populer</h3>

                                <div class="single_widget_info">
                                    <p style="color: black;">
                                        Jakarta Timur - Yogyakarta<br>
                                        Tangerang - Yogyakarta<br>
                                        Semarang - Surabaya<br>
                                        Bekasi - Wonosari<br>
                                        Medan - Aceh<br>
                                        Lampung - Semarang<br>
                                        Surabaya - Bali<br>
                                        Denpasar - Lombok<br>
                                        Lampung - Semarang<br><br>
                                        <a href="#">Selengkapnya</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single_widget wow fadeIn" data-wow-duration="2s">
                                <div class="footer_socail_icon">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                    <a href=""><i class="fa fa-pinterest-p"></i></a>
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                    <a href=""><i class="fa fa-phone"></i></a>
                                    <a href=""><i class="fa fa-camera"></i></a>
                                </div>
                            </div>
                            <form role="form">
                        <div class="input-group">
                            <input type="text" class="form-control" autocomplete="off" placeholder="Email">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" style="margin-left: -25px; background-color: orange; border-color: orange;">Subscribe</button>
                            </span>
                        </div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="copyright wow zoomIn" data-wow-duration="3s">
                            <p>Copyright &copy; 2017 Otodesign</p>
                        </div>
                    </div>
                </div>
            </div><br>
        </section>

        <!--Start of Tawk.to Script-->
        <!-- <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/59bf396dc28eca75e4620995/default';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
            })();
        </script> -->
        <!--End of Tawk.to Script-->
		
		<div class="scrollup">
			<a href="#"><i class="fa fa-chevron-up"></i></a>
		</div>		

        <!-- untuk accordion bootstrap -->
        <script type="text/javascript" src="{{asset('asset/js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{asset('asset/js/jquery-ui.js')}}"></script>

        <script src="{{asset('asset/assets/js/vendor/jquery-1.11.2.min.js')}}"></script>
        <script src="{{asset('asset/assets/js/vendor/bootstrap.min.js')}}"></script>

        <script src="{{asset('asset/assets/js/jquery-easing/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('asset/assets/js/wow/wow.min.js')}}"></script>
        <script src="{{asset('asset/assets/js/plugins.js')}}"></script>
        <script src="{{asset('asset/assets/js/main.js')}}"></script>

        <!-- chosen file -->
        <script type="text/javascript" src="{{asset('asset/chosen/chosen.jquery.js')}}"></script>
        <script type="text/javascript" src="{{asset('asset/chosen/chosen.jquery.min.js')}}"></script>

        <!-- datepicker -->
        <script type="text/javascript" src="{{asset('asset/js/bootstrap-datepicker.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.tanggal').datepicker({
                    format: "dd-mm-yyyy",
                    autoclose:true
                });
            });
        </script>
        <!-- end -->

        <script type="text/javascript">
            var data = [{'1':'Jakarta Barat'},{'32':'Jakarta Timur'}];

            $.each(data, function(key, value) {
                var i = Object.keys(value) [0];
                $("select#kelas").append($("<option />").val(i).text(value[i]));
            });
        </script>
    </body>

    

    <style type="text/css">
        .asal{
            position: absolute;
            bottom: 25px;
            right: -120px;
        }

        .tujuan{
            position: absolute;
            bottom: 25px;
            right: -120px;
        }

        .kelas_{
            position: absolute;
            bottom: 25px;
            right: -120px;
        }

        .penumpang_{
            position: absolute;
            bottom: 25px;
            right: -120px;
        }
    </style>
</html>
