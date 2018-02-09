// start filter tglBerangkat
otobusApp.filter("tanggal", function () {
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

otobusApp.controller('formCetak_controller', function($scope, $http, $q, $window, $httpParamSerializer, $location, $rootScope, $routeParams, $window){

  console.log($routeParams)

  console.log($routeParams.jmlPenumpangs)
  console.log($routeParams.nomorKursi)
  console.log($routeParams.idJadwal)
  console.log($routeParams.idArahTrayek)

  var vm = this;

  $http.get("client/asset/json/gender.json")
  .success(function(data){
    $scope.resultGender = data;
    console.log(data);
  })

  // start get data trayek
  $http.get(base_endpoint + "/mobile/operator/bus/" + $routeParams.id_asal + '/' + $routeParams.id_tujuan + '?tglBerangkat=' + $routeParams.tglBerangkat + '&ekonomi=' + $routeParams.ekonomi + '&jmlKursi=' + $routeParams.jmlKursi + '&web=true')
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
   $scope.tglBerangkat = $routeParams.tglBerangkat;
  console.log($scope.tglBerangkat);

  $scope.getTanggal = function(){
      $scope.getTanggal();
  };
  // end

  // getAPI kursi
  $scope.kursi = [];
  $scope.getKursi = function (idJadwal, index, agen, trayek, subtrayek) {
      // $rootScope.selectedAgen = agen;
      // console.log(selectedAgen)
      $scope['selectedAgen'] = agen;

      // $rootScope.selectedTrayek = trayek;
      // console.log(selectedTrayek)
      $scope['selectedTrayek'] = trayek;

      // $rootScope.selectedSubtrayek = subtrayek;
      // console.log(selectedSubTrayek)
      $scope['selectedSubTrayek'] = subtrayek;

      $http.get(base_endpoint + "/mobile/jadwal/"+idJadwal+"/kursi")
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
      $scope.listPenumpangs = $routeParams.nomorKursi.split(",");
  // end

  // start jumlahKursi dan totalHarga
      $scope.val_kursi = $routeParams.jmlKursi;
      // $scope.listPenumpang = []
      // for (var x = 0; x < $scope.val_kursi; x++) {
      //     $scope.listPenumpang.push(x)
      // }
  // end

  // start post data agen
    $http.get(base_endpoint + "/mobile/agen/keberangkatan?idagen=" + $routeParams.idagen + "&idtrayek=" + $routeParams.idtrayek + "&idSubTrayek=" + $routeParams.idSubTrayek)
    .success(function(data){
        $scope.agenBerangkat = data;
    });
  // end

  // start rute keberangkatan
  $scope.rute = [];
  $http.get(base_endpoint + "/mobile/agen/keberangkatan?idagen=" + $routeParams.idagen + "&idtrayek=" + $routeParams.idtrayek + "&idSubTrayek=" + $routeParams.idSubTrayek)
  .then(function(response){
      $scope.rute = response.data.rute;
      console.log($scope.rute)
  });
  // end

  // start POST pesanTiket
  $scope.pesanTiket = function(form, jamBerangkat, zonaWaktu, idPenumpang){
    // console.log(vm.idPenumpang);
      var params = {
          hargaAsal: $routeParams.hargaAsal,
          hargaJual: $routeParams.hargaJual,
          iuranIpomi: $routeParams.iuranIpomi,
          biayaAdmin: $routeParams.biayaAdmin,
          komisiPemberangkatan: $routeParams.komisiPemberangkatan,
          asalKota: $routeParams.id_asal,
          emailPemesan: vm.email,
          idAgenBerangkat: $routeParams.idagen,
          idArahTrayek: $routeParams.idArahTrayek,
          idJadwal: $routeParams.idJadwal,
          idPemesan: "0",
          idSubTrayek: $routeParams.idSubTrayek,
          jmlPenumpang: $routeParams.jmlPenumpangs,
          kotaAsal: "Yogyakarta",
          kotaTujuan: "Jakarta",
          namaPemesan: vm.pemesan,
          biayaMidtrans: $routeParams.biayaMidtrans,
          penumpangs: [
              {
              // gender: $scope['selectedGender'] = gender,
              gender: vm.jenisKelamin,
              id: $scope['SelectidPenumpang'] = idPenumpang,
              kursi: $routeParams.nomorKursi,
              nama: vm.namaPenumpang,
              kategoriUsia: vm.kategoriUsia
              }
          ],
          telponPemesan: vm.nomorHandphone,
          tgl: $routeParams.tglBerangkat,
          tujuanKota: $routeParams.id_tujuan,
          waktu: $scope['selectJam'] = jamBerangkat,
          zonaWaktu: $scope['selectZona'] = zonaWaktu
      };
      $http.post(base_endpoint + "/order/tiket/", params)
      .success(function(data){
          $scope.pesanTiket = data;
          console.log($scope.pesanTiket);

          snap.pay(data.token, {
            onSuccess: function(result){
              // $window.location.href = "#/pemesanan";
              console.log('success');
              console.log(result);
            }
            // onPending: function(result){console.log('pending');console.log(result);},
            // onError: function(result){console.log('error');console.log(result);},
            // onClose: function(){console.log('customer closed the popup without finishing the payment');}
          })
          // window.location.href = "https://app.sandbox.veritrans.co.id/snap/v2/vtweb/" + data.token;
          // window.location.href = "https://otobus.dev.otodata.co.id/#/midtrans";
          // window.location.href = "http://localhost/otobus-webApp/#/midtrans";
          // $http.defaults.headers.common['X-Frame-Options'] = 'SAMEORIGIN';
      });
  };
  // end
});
