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

        <!-- angular css -->
        <link rel="stylesheet" type="text/css" href="{{asset('asset/angular/angular.min.css')}}">

        <!-- style css timeline -->
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/timeline.css')}}">

        <script type="text/javascript" src="{{asset('asset/js/jquery.min.js')}}"></script>

        <style>
            .panel:hover{
                border-color: orange;
            }
        </style>
    </head>

    <body  ng-app="otobuus_app" ng-controller="formCetak_controller">
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
            <div class="slider_overlay" style="background-color: white;" ng-repeat="seri in final">
                <div class="container" style="margin-top: 100px;">
                    <div class="row">

                        <!-- form detail pesanan -->
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <form class="row-border">
                        
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <p>
                                                    <b style="font-size: 14px;">Detail Pesanan</b><br><br>
                                                    <!-- <span style="font-size: 11px;">No. pesanan</span><br><br> -->
                                                    <!-- <img data-ng-src='@{{ seri.logoPo }}'><br> -->
                                                    <img data-ng-src='@{{ seri.logoPo }}'><br>
                                                    <span>
                                                        <b style="font-size: 14px;">PO. @{{ seri.poTrayek.namaPo }}</b><br>
                                                        <span style="font-size: 10px;">
                                                            @{{seri.pemesananJadwal.ekonomi}} - <b>@{{seri.pemesananJadwal.armada}} (@{{seri.pemesananJadwal.kelasBis}})</b><br>
                                                            Kursi (@{{seri.pemesananJadwal.seatType}})
                                                        </span>
                                                    </span><br>
                                                    <span ng-repeat="seri in final">
                                                    <span style="font-size: 12px;">
                                                        <b>@{{ tglBerangkat | tanggal }}</b>
                                                    </span><br>
                                                    <span style="font-size: 12px;">Jam 
                                                        <b ng-model="jamBerangkat">@{{ agenBerangkat.jamBerangkat }}</b>
                                                        <b ng-model="zonaWaktu">@{{agenBerangkat.zonaWaktu}}</b>
                                                    </span><br>
                                                    <span style="font-size: 12px;">
                                                        Tempat Keberangkatan : <br>
                                                        <span style="font-size: 12px;">
                                                        <b>Agen @{{ agenBerangkat.namaAgen }}</b><br>
                                                        @{{ agenBerangkat.alamatAgen }} <br>
                                                        </span>
                                                    </span>
                                                    </span><br>
                                                    <span style="font-size: 12px;"><b ng-model="jumlahPenumpang">@{{val_kursi}}</b> <b>Orang</b></span><br>
                                                    <span style="font-size: 12px;">
                                                        Total harga: <br>
                                                        <b style="color: blue; font-size: 13px;" ng-model="total">@{{ seri.pemesananJadwal.hargaJual * val_kursi | currency : "Rp " }}</b>
                                                    </span>
                                                </p><br>
                                            </div>

                                            <div class="col-md-4">
                                                <p>
                                                    <b style="font-size: 14px;">Fasilitas</b><br><br>
                                                    <div class="col-md-6">
                                                        <span style="font-size: 12px;" ng-show="seri.pemesananJadwal.ac">
                                                            <img src="asset/images/iconFasilitas/ac22.png">&nbsp;&nbsp; AC<br><br>
                                                        </span>
                                                        <span style="font-size: 12px;" ng-show="seri.pemesananJadwal.recSeat">
                                                            <img src="asset/images/iconFasilitas/recliningSeat22.png">&nbsp;&nbsp; Rec Seat<br><br>
                                                        </span>
                                                        <span style="font-size: 12px;" ng-show="seri.pemesananJadwal.footRest">
                                                            <img src="asset/images/iconFasilitas/footRest22.png">&nbsp;&nbsp; Foot Rest<br><br>
                                                        </span>
                                                        <span style="font-size: 12px;" ng-show="seri.pemesananJadwal.legRest">
                                                            <img src="asset/images/iconFasilitas/footRest22.png">&nbsp;&nbsp; Leg Rest<br><br>
                                                        </span>
                                                        <span style="font-size: 12px;" ng-show="seri.pemesananJadwal.video">
                                                            <img src="asset/images/iconFasilitas/video22.png">&nbsp;&nbsp; Video<br><br>
                                                        </span>
                                                        <span style="font-size: 12px;" ng-show="seri.pemesananJadwal.audio">
                                                            <img src="asset/images/iconFasilitas/music22.png">&nbsp;&nbsp; Audio<br><br>
                                                        </span>
                                                        <span style="font-size: 12px;" ng-show="seri.pemesananJadwal.toilet">
                                                            <img src="asset/images/iconFasilitas/toilet22.png">&nbsp;&nbsp; Toilet<br><br>
                                                        </span>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <span style="font-size: 12px;" ng-show="seri.pemesananJadwal.smokingArea">
                                                            <img src="asset/images/iconFasilitas/smokingArea22.png">&nbsp;&nbsp; Smoking Area<br><br>
                                                        </span>
                                                        <span style="font-size: 12px;" ng-show="seri.pemesananJadwal.wifi">
                                                            <img src="asset/images/iconFasilitas/wifi22.png">&nbsp;&nbsp; Wifi<br><br>
                                                        </span>
                                                        <span style="font-size: 12px;" ng-show="seri.pemesananJadwal.airMineral">
                                                            <img src="asset/images/iconFasilitas/airMineral22.png">&nbsp;&nbsp; Air Mineral<br><br>
                                                        </span>
                                                        <span style="font-size: 12px;" ng-show="seri.pemesananJadwal.snack">
                                                            <img src="asset/images/iconFasilitas/voucherMakan22.png">&nbsp;&nbsp; Snack<br><br>
                                                        </span>
                                                        <span style="font-size: 12px;" ng-show="seri.pemesananJadwal.selimut">
                                                            <img src="asset/images/iconFasilitas/selimut22.png">&nbsp;&nbsp; Selimut<br><br>
                                                        </span>
                                                        <span style="font-size: 12px;" ng-show="seri.pemesananJadwal.bantal">
                                                            <img src="asset/images/iconFasilitas/bantal22.png">&nbsp;&nbsp; Bantal<br><br>
                                                        </span>
                                                        <span style="font-size: 12px;" ng-show="seri.pemesananJadwal.bagasi">
                                                            <img src="asset/images/iconFasilitas/bagasi22.png">&nbsp;&nbsp; Bagasi @{{seri.pemesananJadwal.bagasi}} Kg <br><br>
                                                        </span>
                                                    </div>
                                                </p><br>
                                            </div>

                                            <div class="col-md-4">
                                                <p>
                                                    <b style="font-size: 14px;">Rute</b>
                                                </p>
                                                <div class="col-md-12" style="margin-top: -50px;">
                                                    <!-- main timeline section -->
                                                    <section id="cd-timeline" class="cd-container cssanimations">
                                                        <!-- single timeline event -->
                                                        <div ng-repeat="ruteWilayah in rute">
                                                            <div class="cd-timeline-block">
                                                            <div class="cd-timeline-img cd-picture">
                                                            <!-- <img src="asset/images/asal1.png"> -->
                                                            </div>
                                                                <div class="cd-timeline-content">
                                                                    <p style="font-size: 13px;">@{{ruteWilayah}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end -->

                        <!-- form data pemesan -->
                        
                        <form class="row-border">
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <b>Data Pemesan</b><br><br>

                                                    <span>
                                                        <label style="font-size: 12px;">Nama <span style="color: red;">*</span></label>
                                                        <input name="field1" type="text" ng-model="pemesan" class="form-control" style="background: white; font-size:12px;" required><br>
                                                    </span>

                                                    <span>
                                                        <label style="font-size: 12px;">Nomor Handphone <span style="color: red;">*</span></label>
                                                        <input name="number" type="number" ng-model="nomorHandphone" class="form-control" style="background: white; font-size:12px;" required><br>
                                                    </span>

                                                    <span>
                                                        <label style="font-size: 12px;">Email <span style="color: red;">*</span></label>
                                                        <input name="email" type="email" ng-model="email" class="form-control" style="background: white; font-size: 12px;" required><br>
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <b>Data Penumpang</b><br><br>
                                            </div>
                                            <div class="col-md-12" ng-repeat="x in listPenumpangs">
                                                <div class="col-md-1">
                                                    <label style="font-size: 12px; margin-top: 4px;">
                                                        <span>No. </span><br><br>
                                                        <span ng-model="idPenumpang">@{{$index +1}}</span>
                                                    </label>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <label style="font-size: 12px;">Nama lengkap penumpang</label>
                                                    <span>
                                                        <input name="nama" type="text" ng-model="namaPenumpang" class="required form-control" style="background: white; font-size: 12px;" required><br>
                                                    </span>
                                                </div>

                                                <div class="col-md-3">
                                                    <p style="font-size: 12px;">
                                                        <b>Gender</b><br>

                                                        <select id="myslick" style="width: 10px;" ng-model="jenisKelamin">
                                                            <option value="0" data-imagesrc="asset/images/choose-gender/boy.png" data-description="Anak">Boy</option>
                                                            <option value="1" data-imagesrc="asset/images/choose-gender/girl.png" data-description="Anak">Girl</option>
                                                            <option value="2" selected="selected" data-imagesrc="asset/images/choose-gender/male.png" data-description="Dewasa">Male</option>
                                                            <option value="3" data-imagesrc="asset/images/choose-gender/female.png" data-description="Dewasa">Female</option>
                                                        </select>
                                                        
                                                        <!-- <span>
                                                            <select class="form-control" ng-model="gender" style="background: white;">
                                                                <option ng-value="Anak" style="background-image:url({{URL::asset('asset/images/choose-gender/boy.png')}});">Boy</option>
                                                                <option value="Anak"  style="background-image:url({{URL::asset('asset/images/choose-gender/girl.png')}});">Girl</option>
                                                                <option value="Dewasa" style="background-image:url({{URL::asset('asset/images/choose-gender/male.png')}});">Male</option>
                                                                <option value="Dewasa"  style="background-image:url({{URL::asset('asset/images/choose-gender/female.png')}});">Female</option>
                                                            </select>
                                                        </span> -->

                                                    </p><br>
                                                </div>

                                                <div class="col-md-2">
                                                    <p style="font-size: 12px; text-align: center;">
                                                        <b>No. Kursi</b><br>
                                                        <span>
                                                            <b style="font-size: 14px;" ng-model="kursis">@{{x}}</b>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="col-md-8">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4" style="left: 120px;">
                                <input type="button" class="btn btn-sm btn-primary" ng-click="pesanTiket(form, $scope.email)" value="Lanjutkan">
                            </div><br><br><br>
                        </div>
                        <!-- end -->

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

        <script type="text/javascript" src="{{asset('asset/angular/angular.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('asset/angular/angular-messages.js')}}"></script>

        <script type="text/javascript" src="{{asset('asset/js/dd-slick.js')}}"></script>

        <!-- datepicker -->
        <script type="text/javascript" src="{{asset('asset/js/bootstrap-datepicker.js')}}"></script>
        <!-- end -->

        <!-- <script src="{{asset('asset/js/controller-formCetak.js')}}"></script> -->

        <script>
            var app = angular.module("otobuus_app", ['ngMessages']);

                // start filter tglBerangkat
                app.filter("tanggal", function () {
                    return function (date) {
                        var namaBulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

                        var namaHari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];

                        var time = new Date((date));
                        var DD = time.getDay();
                        var dd = time.getDate();
                        var mm = time.getMonth();
                        var yyyy = time.getFullYear();

                        var newDate = namaHari[DD] + ', ' + dd + " " + namaBulan[mm] + " " + yyyy;

                        return newDate;
                    }; 
                });
                // end

                app.controller("formCetak_controller", function($scope, $http, $q, $window, $httpParamSerializer, $location, $rootScope){
                    function getParameterByName(name) {
                        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
                        var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
                        var results = regex.exec(location.search);
                        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
                    };

                    $scope.init = function(){
                        $scope.kotaAsal = getParameterByName('id_asal');
                        $scope.kotaTujuan = getParameterByName('id_tujuan');
                        $scope.tglBerangkat = getParameterByName('tglBerangkat');
                        $scope.ekonomi = getParameterByName('ekonomi');
                        $scope.jmlKursi = getParameterByName('jmlKursi');

                        // untuk get idAgen dan idTrayek
                        $scope.agen = getParameterByName('idagen');
                        $scope.trayek = getParameterByName('idtrayek');
                        $scope.subtrayek = getParameterByName('idSubTrayek');
                        $scope.arahTrayek = getParameterByName('idArahTrayek');
                        $scope.nomerKursi = getParameterByName('nomorKursi');
                        $scope.idJadwal = getParameterByName('idJadwal');
                        $scope.jmlPenumpang = getParameterByName('jmlPenumpangs');
                        // end
                    };
                    console.log(getParameterByName('jmlPenumpangs'))
                    console.log(getParameterByName('nomorKursi'))
                    console.log(getParameterByName('idJadwal'))
                    console.log(getParameterByName('idArahTrayek'))
                    
                    // start get data trayek
                    $http.get("http://dev.otodata.co.id:8181/mobile/operator/bus/" + getParameterByName('id_asal') + '/' + getParameterByName('id_tujuan') + '?tglBerangkat=' + getParameterByName('tglBerangkat') + '&ekonomi=' + getParameterByName('ekonomi') + '&jmlKursi=' + getParameterByName('jmlKursi') + '&web=true')
                    .success(function(data){
                        // $scope.list_trayek = data[0].trayeks;
                        $scope.active = {record: null};
                        $scope.final = [];
                            data.forEach(function(response1){
                                response1.trayeks.forEach(function(response2){
                                    $scope.final.push({
                                        idPo : response1.idPo,
                                        namaPo : response1.namaPo,
                                        logoPo : response1.logoPo,
                                        hargaTerendah : response1.hargaTerendah,
                                        idDetailPemesanan : response2.idDetailPemesanan,
                                        poTrayek : response2.poTrayek,
                                        pemesananJadwal : response2.pemesananJadwal,
                                        pemesananSubTrayek : response2.pemesananSubTrayek,
                                        pemesananAgen : response2.pemesananAgen
                                    })
                                })
                            })

                            console.log($scope.final);
                    });
                    // end

                     // start tanggal
                     $scope.tglBerangkat = getParameterByName('tglBerangkat');
                    console.log($scope.tglBerangkat);

                    $scope.getTanggal = function(){
                        $scope.getTanggal();
                    };
                    // end

                    // getAPI kursi
                    $scope.kursi = [];
                    $scope.getKursi = function (idJadwal, index, agen, trayek, subtrayek) {
                        $rootScope.selectedAgen = agen;
                        console.log(selectedAgen)

                        $rootScope.selectedTrayek = trayek;
                        console.log(selectedTrayek)

                        $rootScope.selectedSubtrayek = subtrayek;
                        console.log(selectedSubTrayek)

                        $http.get("http://dev.otodata.co.id:8181/mobile/jadwal/"+idJadwal+"/kursi")
                        .success(function(kursi) {
                            $scope.kursi[index] = kursi;
                            console.log(kursi);

                            $scope.layoutKursi = [];
                            kursi.seatMap.forEach(function(x) {
                                x.forEach(function(y) {
                                    $scope.layoutKursi.push(y)        
                                });
                            });

                            // total Harga Kursi
                            $scope.biayaKursi = []
                            $scope.getTotal(totalBiaya) = function(jmlKursi, hargaTotal){
                                return hargaTotal * jmlKursi;
                            }
                            // end Harga Kursi


                            // start pilih seat
                            $scope.kursiTerpilih = []

                            $scope.pilihKursi = function(seat, index, hargaTotal){
                                if($scope.layoutKursi[index][4] === '0'){
                                    console.log($scope.layoutKursi[index][2])
                                    if ($scope.kursiTerpilih.length === $scope.val_kursi) {
                                        alert("maximum");
                                    } else {
                                        $scope.layoutKursi[index][4] = '1';
                                        $scope.kursiTerpilih.push($scope.layoutKursi[index][2])
                                        $scope.total = $scope.getTotal($scope.kursiTerpilih.length, hargaTotal);
                                    }
                                }
                                else if($scope.layoutKursi[index][4] ='1'){
                                    for (var i=0; i<$scope.kursiTerpilih.length; i++) {
                                        if ($scope.layoutKursi[index][2] === $scope.kursiTerpilih[i]) {
                                            $scope.kursiTerpilih.splice(i, 1);
                                            $scope.layoutKursi[index][4] = '0'; 
                                            $scope.total = $scope.getTotal($scope.kursiTerpilih.length, hargaTotal);
                                        }
                                    }
                                }
                            };
                            // end pilih seat
                        });
                    };
                    // end

                    // start Nomorkursi
                        $scope.listPenumpangs = getParameterByName('nomorKursi').split(",");
                    // end

                    // start jumlahKursi dan totalHarga
                        $scope.val_kursi = parseInt(getParameterByName('jmlKursi'));
                        // $scope.listPenumpang = []
                        // for (var x = 0; x < $scope.val_kursi; x++) {
                        //     $scope.listPenumpang.push(x)
                        // }
                    // end

                    // start post data agen
                    $http.get("http://dev.otodata.co.id:8181/mobile/agen/keberangkatan?idagen=" + getParameterByName('idagen') + "&idtrayek=" + getParameterByName('idtrayek') + "&idSubTrayek=" + getParameterByName('idSubTrayek'))
                    .success(function(data){
                        $scope.agenBerangkat = data;
                    });
                    // end

                    // start rute keberangkatan
                    $scope.rute = [];
                    $http.get("http://dev.otodata.co.id:8181/mobile/agen/keberangkatan?idagen=" + getParameterByName('idagen') + "&idtrayek=" + getParameterByName('idtrayek') + "&idSubTrayek=" + getParameterByName('idSubTrayek'))
                    .then(function(response){
                        $scope.rute = response.data.rute;
                        console.log($scope.rute)
                    });
                    // end

                    // start POST pesanTiket
                    $scope.pesanTiket = function(form){
                        var params = {
                            // hargaAsal: 0,
                            // hargaJual: 0,
                            // iuranIpomi: 0,
                            // biayaAdmin: 0,
                            // komisiPemberangkatan: 0,
                            asalKota: getParameterByName('id_asal'),
                            emailPemesan: $scope.email,
                            hargaBayar: $scope.total,
                            idAgenBerangkat: getParameterByName('idagen'),
                            idArahTrayek: getParameterByName('idArahTrayek'),
                            idJadwal: getParameterByName('idJadwal'),
                            idPemesan: 0,
                            idSubTrayek: getParameterByName('idSubTrayek'),
                            jmlPenumpang: 0,
                            kotaAsal: "Yogyakarta",
                            kotaTujuan: "Jakarta",
                            // metodePayment: "transfer",
                            namaPemesan: $scope.pemesan,
                            penumpangs: [
                                {
                                gender: $scope.jenisKelamin,
                                id: 1,
                                kursi: getParameterByName('nomorKursi'),
                                nama: $scope.namaPenumpang,
                                kategoriUsia: "dewasa"
                                }
                            ],
                            telponPemesan: $scope.nomorHandphone,
                            tgl: getParameterByName('tglBerangkat'),
                            tujuanKota: getParameterByName('id_tujuan'),
                            waktu: $scope.jamBerangkat,
                            zonaWaktu: $scope.zonaWaktu
                        };
                        $http.post('http://dev.otodata.co.id:8181/order/tiket/', params)
                        .then(function(data){
                            $scope.pesanTiket = data;
                            console.log($scope.pesanTiket);
                            // window.location.href = "https://app.sandbox.veritrans.co.id/snap/v2/vtweb/" + $scope.pesanTiket;
                            // window.location.href = "https://app.sandbox.veritrans.co.id/snap/v2/vtweb/ac853989-7642-4450-9fb4-569d6b3973da";
                        });
                    };
                    // end

                });
        </script>

        <script>
            $('#myslick').ddslick({
                onSelected: function(selectedData){
                    // $('.ddc-selected-value').prop ('name', 'donus');
                    //   var input = $("input[name=donus]").val(); 
                    //   var yon=ciftyon;
                    //callback function: do something with selectedData;
                }
            });
        </script>
    </body>
</html>
