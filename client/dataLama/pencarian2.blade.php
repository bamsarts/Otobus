<style>
    .trayek:hover{
        border-color: orange;
        transition: all 2s ease;
    }
    .seat-view {
        /* padding: 10px 2px 0 2px ; */
        /* padding-top: 10px; */
        padding-left: 2px;
        padding-right: 0px;
        cursor:pointer;
    }
    .seat {
        padding-bottom: -500px;
        text-align: center;
        color: black!important;
        margin-top: 20px;
    }
    .bus-view {
        width: 310px;
        height: 300px;
        transform: rotate(-90deg);
    }
</style>

<div class="row-hover" ng-repeat="seri in final">
    <div class="container">

        <div class="panel panel-default trayek" ng-click="active.record = $index; showDetails = !showDetails">
        <a href="" data-toggle="tooltip" title="klik order disini">
            <div class="panel-body">
                <div class="col-md-3 po1">
                    <!-- <img src="asset/images/PO_Bus/1.png"><b>&nbsp;&nbsp;&nbsp;Seri W</b><br> -->
                    <img data-ng-src='@{{ seri.logoPo }}'><b style="color: black; font-size: 12px;">&nbsp;@{{ seri.pemesananJadwal.armada }}</b><b style="font-size: 8px; color: black;">(Seat  @{{seri.pemesananJadwal.seatType}})</b><br>
                    <div class="col-md-6">
                        <p align="left" style="font-size: 12px; color: black"><b>@{{seri.pemesananJadwal.kelasBis}}</b></p>
                    </div>
                    <div class="col-md-6 seat1">
                        <p align="right" style="font-size: 12px; color: black"><b>@{{seri.poTrayek.jamAwal}}</b></p>
                    </div>
                    <div id="" class="">
                        <div class="" data-wow-duration="2s" style="margin-top: -250px;">
                            <div class="buttonProfil1">
                                <button ng-click="showDetails3 =! showDetails3" style="height: 25px;" class="col-sm-12 btn btn-xs btn-primary panel-title profil1 collapse_1" type="button">
                                    <p style="font-size: 12px;">Profil Bus</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center rute1">
                    <p align="center" style="font-size: 11px; color: black;">
                        @{{ seri.poTrayek.rute }}
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4 tombol1">
                            <!-- <span ng-click="showDetails = ! showDetails"><a href="javascript:void(0)" data-toggle="tooltip" title="klik order disini"><i class="glyphicon glyphicon-circle-arrow-down"></i></a></span> -->
                        </div>
                    </p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="col-md-4 titel1" ng-show="seri.pemesananJadwal.ac">
                        <img src="asset/images/iconFasilitas/ac.png">
                        <p style="font-size: 11px; color: black;">AC</p>
                    </div>
                    <div class="col-md-4 titel2" ng-show="seri.pemesananJadwal.wifi">
                        <img src="asset/images/iconFasilitas/wifi.png">
                        <p style="font-size: 11px; color: black;">wifi</p>
                    </div>
                    <div class="col-md-4 titel3" ng-show="seri.pemesananJadwal.snack">
                        <img src="asset/images/iconFasilitas/voucherMakan.png">
                        <p style="font-size: 11px; color: black;">Snack</p>
                    </div>
                    <div id="accordion">
                        <div class="panel-default" data-wow-duration="2s" style="margin-top: -250px;">
                            <div class="buttonFasilitas1">
                                <button ng-click="showDetails4 = ! showDetails4" style="height: 25px;" class="col-sm-12 btn btn-xs btn-primary panel-title fasilitas1 collapse_2" type="button" >
                                    <p style="font-size: 12px;">Fasilitas Bus</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center harga1">
                    <p align="right" style="font-size: 11px; color: black;">
                        Kursi Tersedia <b style="font-size: 20px;">@{{seri.pemesananJadwal.availableSeat}}</b><br>
                        Harga per Orang<br>
                        <b style="color: orange; font-size: 20px;">@{{seri.pemesananJadwal.hargaJual | currency : "Rp "}}</b>
                    </p>
                </div>

                <div ng-show="showDetails3" id="" class="panel-collapse col-md-12">
                    <hr>
                    <div class="col-md-6">
                        <div class="container">
                            <div>
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <!-- <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                    </ol>

                                <!-- deklarasi carousel -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img src="asset/images/busBanner/bus1.png" alt="">
                                        </div>

                                        <!-- <div class="item">
                                            <img src="asset/images/4.jpg" alt="">
                                        </div>

                                        <div class="item">
                                            <img src="asset/images/6.jpg" alt="">
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p style="font-size: 12px; color: black;" align="center">
                                <b>Tentang Perusahaan Bus</b>
                        </p>
                        <p style="font-size: 12px; color: black;">
                                A lot of the content of the site has been submitted by the community. Whether it is a commercial element/template/theme 
                                or a free one, you are encouraged to contribute. All credits are published along with the resources.
                        </p>
                    </div>
                </div>

                <div ng-show="showDetails4" id="" class="panel-collapse col-md-12">
                    <hr>
                    <div class="col-md-6">
                        <div class="container">
                            <div>
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                
                                    <ol class="carousel-indicators">
                                        <!-- <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                    </ol>

                                
                                    <div class="carousel-inner" role="listbox">
                                        <!-- <div class="item active">
                                            <img src="asset/images/busBanner/fasilitas1.png" alt="">
                                        </div> -->

                                        <div class="item active">
                                            <img src="asset/images/busBanner/fasilitas1.png" alt="">
                                        </div>

                                        <!-- <div class="item">
                                            <img src="asset/images/6.jpg" alt="">
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="col-md-4">
                                <p style="font-size: 12px; color: black;"><b>Fasilitas Bus</b></p>
                                <p style="font-size: 12px; color: black;">
                                    <span ng-show="seri.pemesananJadwal.ac">
                                        <img src="asset/images/iconFasilitas/ac.png">&nbsp;&nbsp; AC<br><br>
                                    </span>
                                    <span ng-show="seri.pemesananJadwal.recSeat">
                                        <img src="asset/images/iconFasilitas/recliningSeat.png">&nbsp;&nbsp; Rec Seat<br><br>
                                    </span>
                                    <span ng-show="seri.pemesananJadwal.footRest">
                                        <img src="asset/images/iconFasilitas/footRest.png">&nbsp;&nbsp; Foot Rest<br><br>
                                    </span>
                                    <span ng-show="seri.pemesananJadwal.legRest">
                                        <img src="asset/images/iconFasilitas/footRest.png">&nbsp;&nbsp; Leg Rest<br><br>
                                    </span>
                                    <span ng-show="seri.pemesananJadwal.video">
                                        <img src="asset/images/iconFasilitas/video.png">&nbsp;&nbsp; Video<br><br>
                                    </span>
                                    <span ng-show="seri.pemesananJadwal.audio">
                                        <img src="asset/images/iconFasilitas/music.png">&nbsp;&nbsp; Audio<br><br>
                                    </span>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <p style="font-size: 12px; color: black;"><b>Fasilitas Layanan</b></p>
                                <p style="font-size: 12px; color: black;">
                                    <span ng-show="seri.pemesananJadwal.toilet">
                                        <img src="asset/images/iconFasilitas/toilet.png">&nbsp;&nbsp; Toilet<br><br>
                                    </span>
                                    <span ng-show="seri.pemesananJadwal.smokingArea">
                                        <img src="asset/images/iconFasilitas/smokingArea.png">&nbsp;&nbsp; Smoking Area<br><br>
                                    </span>
                                    <span ng-show="seri.pemesananJadwal.wifi">
                                        <img src="asset/images/iconFasilitas/wifi.png">&nbsp;&nbsp; wifi<br><br>
                                    </span>
                                    <span ng-show="seri.pemesananJadwal.airMineral">
                                        <img src="asset/images/iconFasilitas/airMineral.png">&nbsp;&nbsp; Air Mineral<br><br>
                                    </span>
                                    <span ng-show="seri.pemesananJadwal.snack">
                                        <img src="asset/images/iconFasilitas/voucherMakan.png">&nbsp;&nbsp; Snack<br><br>
                                    </span>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <p style="font-size: 12px; color: black;"><b></b></p><br>
                                <p style="font-size: 12px; color: black;">
                                    <span ng-show="seri.pemesananJadwal.selimut">
                                        <img src="asset/images/iconFasilitas/selimut.png">&nbsp;&nbsp; Selimut<br><br>
                                    </span>
                                    <span ng-show="seri.pemesananJadwal.bantal">
                                        <img src="asset/images/iconFasilitas/bantal.png">&nbsp;&nbsp; Bantal<br><br>
                                    </span>
                                    <span ng-show="seri.pemesananJadwal.bagasi">
                                        <img src="asset/images/iconFasilitas/bagasi.png">&nbsp;&nbsp; Bagasi @{{seri.pemesananJadwal.bagasi}} Kg<br><br>
                                    </span>
                                </p>
                            </div> 
                    </div>
                </div><br><br><br>

                <!-- start pesan bus -->	
                <div ng-if="active.record == $index" ng-show="showDetails" class="map" id="map_1">
                <hr>
                    <div class="col-md-6">
                        <div class="container">
                            <div>
                                <div id="" class="" data-ride="">
                                <!-- Indicators -->
                                    <ol class="">
                                        <li data-target="" data-slide-to="0" class="active"></li>
                                    </ol>

                                <!-- deklarasi carousel -->
                                    <div class="" role="listbox">
                                        <div class="item active">
                                            <img src="asset/images/busBanner/map1.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-6">
                        <p style="font-size: 12px; color: black;" align="left">
                                <b>Pilih Tempat & Waktu Berangkat</b>
                        </p>
                        </div>
                        <div class="col-md-6">
                            <form style="size: 10px; position: relative;">
                                <input style="float: left; width: 85%; font-size: 12px;" class="search" type="text" placeholder="Cari Agen" required>
                                <span>
                                    <button style="float: right; font-size: 12px;" class="button" type="button"><i class="glyphicon glyphicon-search" style="color: black;"></i></button>
                                </span>
                            </form>
                        </div><br><br>  
                        <ul>
                            <li ng-repeat="agen in seri.pemesananAgen" ng-click="getKursi(seri.pemesananJadwal.idJadwal, $parent.$index, agen.idAgenBerangkat, seri.poTrayek.idTrayek, seri.pemesananSubTrayek.idSubTrayek, seri.pemesananJadwal.idArahTrayek)">
                                <a href="javascript:void(0);" ng-click="showDetails2 = ! showDetails2">
                                <div class="col-md-10" style="text-align: left;">
                                    <b style="font-size: 12px;">@{{agen.agenKeberangkatan}}</b><br>
                                    <i style="font-size: 11px;">@{{agen.alamatKeberangkatan}}</i>
                                </div>
                                <div class="col-md-2" style="text-align: right;">
                                    <b style="font-size: 12px;">Waktu</b>
                                    <i style="font-size: 11px;">@{{agen.waktuBerangkat}} @{{agen.zonaWaktu}}</i>
                                </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- start pesan bus 2 -->    
                <div ng-show="kursi[$index]">
                    <hr>
                    <p style="font-size: 12px;" align="center">
                        <b>Pilih kursi</b>
                    </p>
                    <div class="col-md-7 bus-view">
                        <div>
                            <div class="row" style="width:300px;margin-left:auto;margin-right:auto">
                                <div class="col-xs-2 seat-view pull-right" ng-style="tipe2 && { 'width' : '16.666666667%' } || !tipe2 && { 'width' : '20%' }">
                                    <div>
                                        <span><img src="asset/images/icon-seat/steer.png" style="transform: rotate(90deg);"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="width:300px; margin-left:auto; margin-right:auto;">
                                <div class="col-xs-2 seat-view" ng-repeat="seat in layoutKursi track by $index" ng-click="pilihKursi(seat, $index, seri.pemesananJadwal.hargaJual)">
                                    <div class="seat" ng-style="seat[2] == 'NO' && {'display': 'none'} || seat[4] === '0' && {'background-color' : 'white'} || seat[4] === '1' && {'background-color' : 'transparent'} || seat[4] === '5' && {'background-color' : 'transparent'}">
                                        <p style="transform: rotate(90deg); font-size: 11px;">
                                        <b>@{{seat[2]}}</b>
                                        <img class="avatar" ng-show="seat[4] == '0'" src="asset/images/icon-seat/blank-seat.png">
                                        <img class="avatar" ng-show="seat[4] == '1'" src="asset/images/icon-seat/male-choose.png">
                                        <img class="avatar" ng-show="seat[4] == '5'" src="asset/images/icon-seat/male-filled.png">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5" style="margin-left: 280px;">
                        <div class="col-md-8">
                            <b style="font-size: 11px;" align="left">Nomor kursi : 
                                <span ng-repeat="nomor in kursiTerpilih" ng-model="noTiket">
                                    @{{ nomor }},
                                </span>
                            </b><br>
                            <b style="font-size: 11px;" align="left">Harga per tiket : @{{seri.pemesananJadwal.hargaJual | currency : "Rp "}}
                            </b><br>
                            <b style="font-size: 11px;" align="left" ng-model="totalBiaya">Total biaya tiket : @{{ total | currency : "Rp "}}
                            </b><br><br>

                            <b style="font-size: 12px;" align="left">Keterangan</b><br>
                            <img src="asset/images/icon-seat/blank-seat.png"><b style="font-size: 11px;"> Kosong</b><br><br>
                            <img src="asset/images/icon-seat/male-choose.png"><b style="font-size: 11px;"> Terbooking</b><br><br>
                            <img src="asset/images/icon-seat/male-filled.png"><b style="font-size: 11px;"> Terjual</b>
                        </div>
                        <div class="col-md-4">
                        <button class="btn btn-xs btn-primary col-md-12" align="left" ng-click="pesan(form, seri.pemesananJadwal.idJadwal, agen.idAgenBerangkat, seri.poTrayek.idTrayek, seri.pemesananSubTrayek.idSubTrayek)">Pesan &nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-arrow-right" align="right"></i></button>
                        </div>
                    </div>
                </div>
                <!-- end -->
            </div>
        </a>
        </div>
    </div>
</div>
