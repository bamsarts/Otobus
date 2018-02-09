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
        
        <!-- angular css -->
        <link rel="stylesheet" type="text/css" href="asset/angular/angular.min.css">
        <link rel="stylesheet" href="{{asset('asset/angular/angular-datepicker.css')}}">

        <!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.css"/> -->

        <!-- css chosen file -->
        <!-- <link rel="stylesheet" type="text/css" href="{{asset('asset/chosen/chosen.css')}}"> -->

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
    
    <!-- custom css untuk select option -->
    <style>
        .kotaAsal{
            -webkit-appearance: none;
            -moz-appearance: none;
            -o-appearance: none;
            -ms-appearance: none;
            appearance: none;

            display: block;
            color: #fff;

            background-color: #222;
            border-radius: 5px;
            border: 2px solid orange;
        }

        .kotaTujuan{
            -webkit-appearance: none;
            -moz-appearance: none;
            -o-appearance: none;
            -ms-appearance: none;
            appearance: none;

            display: block;
            color: #fff;

            background-color: #222;
            border-radius: 5px;
            border: 2px solid orange;
        }

        .tanggal_utama{
            -webkit-appearance: none;
            -moz-appearance: none;
            -o-appearance: none;
            -ms-appearance: none;
            appearance: none;

            display: block;
            color: #fff;
            margin-left: 15px;
            width: 200px;
            height: 25px;

            background-color: #222;
            border-radius: 5px;
            border: 2px solid orange;

            margin-top: 0px;
            margin-left: 15px;
        }

        ._kelas{
            -webkit-appearance: none;
            -moz-appearance: none;
            -o-appearance: none;
            -ms-appearance: none;
            appearance: none;

            display: block;
            color: #fff;

            background-color: #222;
            border-radius: 5px;
            border: 2px solid orange;
        }

        .penumpang{
            -webkit-appearance: none;
            -moz-appearance: none;
            -o-appearance: none;
            -ms-appearance: none;
            appearance: none;

            display: block;
            color: #fff;
            background-color: #222;
            border-radius: 5px;
            border: 2px solid orange;
        }

        hr {
            border: 0; 
            height: 2px; 
            background-image: linear-gradient(to right, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0), rgba(0, 0, 0, 1));
            background-color: orange;
        }

        /* untuk css pemesanan */
        .inner{
        height: 160px;
        width: 180px;
        background-color: rgb(181, 187, 181);
        border-radius: 10px;
        }

        .outer{
        padding: 10px;
        background-color: rgb(181, 187, 181);
        display: inline-block;
        border-radius: 8px;
        position: relative;
        margin-left: -70px;
        margin-top: 60px;
        }

        .arrow{
        position: absolute;
        top: -50px;
        left: 55px;
        border: 25px solid transparent;
        border-right: 50px solid rgb(181, 187, 181);

        width: 0;
        height: 0;
        border-left: 20px solid transparent;
        border-right: 20px solid transparent;
        border-bottom: 25px solid rgb(181, 187, 181);
        }
        /* end */
    </style>
    <!-- end -->

    <style>
    .dropbtn {
        background-color: Transparent;
        background-repeat:no-repeat;
        border: none;
        cursor:pointer;
        overflow: hidden;
        outline:none;
        color: white;
    }
    
    .dropdown {
        position: relative;
        margin-top: 13px;
    }
    
    .dropdown-content {

        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        z-index: 1;
        border-radius: 5px;

        margin-top: 20px;
    }
    
    .dropdown button:hover {
        color: orange;
    }
    
    .show {
        display:block;
    }

    .pesan{
        margin-left: 8px;
        margin-top: 5px;
    }
    .telepon{
        margin-left: 8px;
        margin-top: 5px;
    }
    .email{
        margin-left: 8px;
        margin-top: 5px;
    }
    .cek{
        margin-left: 8px;
        margin-top: -30px;
    }
    </style>

    <body ng-app="otobuus_app" ng-controller="index_controller">
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
                                    <a class="navbar-brand" href="index.php"><img src="asset/images/logo.png" alt="" /></a>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="{{ url ('/') }}">Home</a></li>
                                        <li>
                                            <!-- <a href="#" onclick="toggle_visibility('foo');">Cek Pemesanan</a> -->
                                            <div class="dropdown">
                                                <button onclick="myFunction()" class="dropbtn">Cek Pemesanan</button>
                                                <div id="myDropdown" class="dropdown-content">
                                                    <div class="">
                                                        <form class="form-signin">
                                                            <input type="text" class="form-control pesan" placeholder="Kode Pesanan" required autofocus>
                                                            <input type="text" class="form-control telepon" placeholder="No Telepon" required>
                                                            <input type="email" class="form-control email" placeholder="Email" required><br>
                                                            <a href="{{ url('pemesanan') }}"><input class="btn btn-primary form-control cek" type="text" value="Cek"></a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
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
                                            <img src="asset/images/asal1.png" style="margin-top: -90px;">
                                        </div>
                                        <div class="col-md-10">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label col-xs-5" style="margin-top: -90px;">
                                                <!-- <input type="text" class="mdl-textfield__input" id="asal1"> -->
                                                <label class="" for=""><p style="color: white;">Kota Asal</p></label>
                                                <br>
                                                <select class="kotaAsal" id="kotaAsal" name="kotaAsal"  style="width: 200px;" ng-model="id_wilAsal" ng-change="fetch()">
                                                    <optgroup ng-repeat="list_kota in _result_kota_asal" label="@{{list_kota.namaProvinsi}}">
                                                        <option ng-repeat="wilayah in list_kota.wilayahs" value="@{{wilayah.idWilayah}}">
                                                            @{{wilayah.namaWilayah}}
                                                        </option>
                                                    </optgroup>
                                                </select>
                                            </div><br><br>

                                            <div id="asal2" class="col-xs-5 asal">
                                                <!-- <select class="kotaAsal" id="kotaAsal" name="kotaAsal"  style="width: 200px;" ng-model="id_wilAsal" ng-change="fetch()">
                                                    <optgroup ng-repeat="list_kota in _result_kota_asal" label="@{{list_kota.namaProvinsi}}">
                                                        <option ng-repeat="wilayah in list_kota.wilayahs" value="@{{wilayah.idWilayah}}">
                                                            @{{wilayah.namaWilayah}}
                                                        </option>
                                                    </optgroup>
                                                </select> -->
                                                <!-- <select class="kotaAsal" id="kotaAsal" name="kotaAsal"  style="width: 200px;" ng-model="id_wilAsal" ng-change="fetch()">
                                                    <optgroup ng-repeat="list_kota in _result_kota_asal" label="@{{list_kota.namaProvinsi}}">
                                                        <option ng-repeat="wilayah in list_kota.wilayahs" value="@{{wilayah.idWilayah}}">
                                                            @{{wilayah.namaWilayah}}
                                                        </option>
                                                    </optgroup>
                                                </select> -->
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <img src="asset/images/tujuan1.png" style="margin-top: -10px;">
                                        </div>
                                        <div class="col-md-10">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label col-xs-5" style="margin-top: -60px;">
                                                <!-- <input type="text" class="mdl-textfield__input" id="tujuan1"> -->
                                                <label class="mdl-textfield__label" for=""><p style="color: white;">Kota Tujuan</p></label><br><br>
                                                <select class="kotaTujuan" id="kotaTujuan" style="width: 200px;" ng-model="id_wilTujuan">
                                                    <optgroup ng-repeat="list_kota in _result_kota_tujuan" label="@{{ list_kota.namaProvinsi }}">
                                                        <option ng-repeat="wilayah in list_kota.wilayahs" value="@{{ wilayah.idWilayah }}">
                                                            @{{ wilayah.namaWilayah }}
                                                        </option>
                                                    </optgroup>
                                                </select>
                                            </div>

                                            <div id="tujuan2" class="col-xs-5 tujuan">
                                                <!-- <select class="kotaTujuan" id="kotaTujuan" style="width: 200px;" ng-model="id_wilTujuan">
                                                    <optgroup ng-repeat="list_kota in _result_kota_tujuan" label="@{{ list_kota.namaProvinsi }}">
                                                        <option ng-repeat="wilayah in list_kota.wilayahs" value="@{{ wilayah.idWilayah }}">
                                                            @{{ wilayah.namaWilayah }}
                                                        </option>
                                                    </optgroup>
                                                </select> -->
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <img src="asset/images/tanggal1.png" style="margin-top: 20px;">
                                        </div>
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label col-md-10" style="margin-top: -30px;">
                                            <div>
                                                <label id="tanggal1" class="mdl-textfield__label" for=""><p style="color: white;">&nbsp;&nbsp;&nbsp;&nbsp;Tanggal</p></label><br><br>
                                                <datepicker type="text" date-format="yyyy-MM-dd" class="tanggal3" id="tanggal3" ng-disabled="true" >
                                                    <input type="text" class="tanggal_utama" ng-model="tglBerangkat">
                                                </datepicker>
                                            </div>
                                            <div>
                                                <!-- <input class="tanggal_utama" id="datepicker" type="text" ng-model="tglBerangkat"> -->
                                                <!-- <datepicker type="text" date-format="yyyy-MM-dd" class="tanggal_utama tanggal3" id="tanggal3" ng-disabled="true" >
                                                    <input type="text" class="mdl-textfield" ng-model="tglBerangkat">
                                                </datepicker> -->
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <img src="asset/images/kelas1.png" style="margin-top: 20px;">
                                        </div>
                                        <div class="col-md-10">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label col-xs-5" style="margin-top: -20px;">
                                                <!-- <input type="text" class="mdl-textfield__input" id="penumpang1"> -->
                                                <label class="mdl-textfield__label" for=""><p style="color: white;">Kelas</p></label><br><br>
                                                <select class="_kelas" id="_kelas" style="width: 200px;" ng-model="id_jurusan">
                                                    <option ng-repeat="list_kelas in resultKelas" value="@{{ list_kelas.idKelas }}">
                                                        @{{ list_kelas.jumlahKelas }}
                                                    </option>
                                                </select>
                                            </div>

                                            <div id="kelas2" class="col-xs-5 kelas_">
                                                <!-- <select class="kelas" id="kelas" style="width: 200px;" ng-model="id_ekonomi">
                                                    <option ng-repeat="list_kelas in _result_kelas" value="@{{ list_kelas.idKelas }}">
                                                        @{{ list_kelas.namaKelas }}
                                                    </option>
                                                </select> -->
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <img src="asset/images/penumpang1.png" style="margin-top: 25px;">
                                        </div>
                                        <div class="col-md-10">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label col-xs-5" style="margin-top: -20px;">
                                                <!-- <input type="text" class="mdl-textfield__input" id="penumpang1"> -->
                                                <label class="mdl-textfield__label" for=""><p style="color: white;">Jumlah Penumpang</p></label><br><br>
                                                <select class="penumpang" id="penumpang" style="width: 200px;" ng-model="id_kursi">
                                                    <option ng-repeat="list_penumpang in _result_penumpang" value="@{{ list_penumpang.idPenumpang }}">
                                                        @{{ list_penumpang.jumlahPenumpang }}
                                                    </option>
                                                </select>
                                            </div>

                                            <div id="penumpang2" class="col-xs-5 penumpang_">
                                                <!-- <select class="penumpang" id="penumpang" style="width: 200px;" ng-model="id_kursi">
                                                    <option ng-repeat="list_penumpang in _result_penumpang" value="@{{ list_penumpang.idPenumpang }}">
                                                        @{{ list_penumpang.jumlahPenumpang }}
                                                    </option>
                                                </select> -->
                                            </div>
                                        </div> 
                                        <br><br><input type="button" value="Cari" ng-click="panggil(form)" class="btn btn-xs btn-primary form-control">
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
                    <hr>
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

        <!-- angular -->
        <script type="text/javascript" src="{{asset('asset/angular/angular.min.js')}}"></script>
        <script src="{{asset('asset/angular/angular-datepicker.js')}}"></script>
        <script src="{{asset('asset/angular/angular-route.min.js')}}"></script>
        <!-- end angular -->

        <!-- chosen file -->
        <!-- <script type="text/javascript" src="{{asset('asset/chosen/chosen.jquery.js')}}"></script> -->
        <!-- <script type="text/javascript" src="{{asset('asset/chosen/chosen.jquery.min.js')}}"></script> -->
        <!-- end -->

        <script>
            var app = angular.module("otobuus_app" , ['720kb.datepicker']);
                app.controller("index_controller", function($scope, $http, $window, $httpParamSerializer){
                    // $scope._result_kota_asal = null;
                    $http.get("http://dev.otodata.co.id:8181/mobile/kota/asal")
                    .success (function (data) {
                        $scope._result_kota_asal = data;
                        console.log(data);
                    });
                    
                    $scope.fetch = function () {
                        // $scope._result_kota_tujuan = null;
                        // console.log("http://dev.otodata.co.id:8181/mobile/kota/tujuan?idAsal=" + $scope.id_wilAsal);
                        $http.get("http://dev.otodata.co.id:8181/mobile/kota/tujuan?idAsal=" + $scope.id_wilAsal)
                        .success (function (data) {
                            $scope._result_kota_tujuan = data;
                            console.log('berhasil');
                            console.log(data);
                        });
                    };

                    $http.get("{{asset('asset/json/hasil_kelas.json')}}")
                    .success(function (data) { 
                        console.log("berhasil");
                        $scope.resultKelas = data;
                        console.log(data);
                    });

                    $http.get("{{asset('asset/json/penumpang.json')}}")
                    .success(function (data) {
                        console.log("berhasil");
                        $scope._result_penumpang = data;
                        console.log(data);
                    });

                    $scope.panggil = function(form){
                        var params = {
                            'tglBerangkat': $scope.tglBerangkat,
                            'ekonomi': $scope.id_jurusan,
                            'jmlKursi': $scope.id_kursi,
                            'web': true
                            };
                        var url = 'http://dev.otodata.co.id:8181/mobile/operator/bus/'+ $scope.id_wilAsal +'/' + $scope.id_wilTujuan + '?' + $httpParamSerializer(params);

                        $http.get(url)
                        .success (function(data, status, header, config){
                            window.location.href = "http://localhost/web_otobus_laravel/public/pencarian?id_asal=" + $scope.id_wilAsal +"&id_tujuan=" + $scope.id_wilTujuan + "&tglBerangkat=" + $scope.tglBerangkat + "&ekonomi=" + $scope.id_jurusan + "&jmlKursi=" + $scope.id_kursi + '&web=true' ;
                            $scope.panggil = data;
                            console.log('berhasil');
                            // alert("berhasil");
                        });
                    };
                });
        </script>

        <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {

            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
            }
        }
        }
        </script>
    </body>
</html>
