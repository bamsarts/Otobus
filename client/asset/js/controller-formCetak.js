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
            // end
        };
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

        // start POST Pesantiket
        $scope.SubmitText = function(form){
            // console.log($scope.email)
            var params = {
                hargaAsal: 0,
                hargaJual: 0,
                iuranIpomi: 0,
                biayaAdmin: 0,
                asalKota: getParameterByName('id_asal'),
                emailPemesan: $scope.email,
                hargaBayar: $scope.total,
                idAgenBerangkat: getParameterByName('idagen'),
                idPemesan: 1,
                idArahTrayek: getParameterByName('idArahTrayek'),
                idSubTrayek: getParameterByName('idSubTrayek'),
                idJadwal: getParameterByName('idJadwal'),
                jmlPenumpang: getParameterByName('jmlKursi'),
                kotaAsal: 'Yogyakarta',
                kotaTujuan: 'Jakarta',
                // metodePayment: 'transfer',
                namaPemesan: $scope.namaPemesan,
                penumpangs: [
                    {
                        gender: $scope.gender,
                        id: $scope.no,
                        kursi: $scope.kursis,
                        nama: $scope.namaPenumpang,
                        kategoriUsia: 'Dewasa'
                    }
                ],
                telponPemesan: $scope.nomorHandphone,
                tgl: getParameterByName('tglBerangkat'),
                tujuanKota: getParameterByName('id_tujuan'),
                waktu: $scope.jamBerangkat,
                zonaWaktu: 'WIB'
            };
            $http.post('http://dev.otodata.co.id:8181/order/tiket/' , params)
            .then(function(data){
                $scope.SubmitText = data;
                // console.log($scope.SubmitText);
                // window.location.href = "https://app.sandbox.veritrans.co.id/snap/v2/vtweb/?token=" + data.token;
                // window.location = response.redirect_url;
                // window.location.href = "https://app.sandbox.veritrans.co.id/snap/v2/vtweb/dbbb3184-fb18-41e2-93e0-dbe93be85891";
            });
        };
        // end

    });