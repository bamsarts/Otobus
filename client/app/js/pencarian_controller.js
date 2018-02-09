otobusApp.controller('pencarian_controller', function($timeout, $scope, $http, $q, $window, $httpParamSerializer, $location, $rootScope, $routeParams){
    
    //for toggle search
    $scope.exp=true;
    $scope.changeSearchText = "Ganti Pencarian";
    $timeout(function(){
        $scope.mySearch = false;
    });

    $scope.changeSearch = function(){
        if($scope.mySearch == true){
            $scope.mySearch = false;
            $scope.changeSearchText = "Ganti Pencarian";
        }else{
            $scope.mySearch = true;
            $scope.changeSearchText = "Tutup";
        }
    }
    
  
  var vm = this;

  $scope.namaWilayahAsal = $routeParams.namaWilayahAsal;
  console.log($scope.namaWilayahAsal);

  $scope.namaWilayahTujuan = $routeParams.namaWilayahTujuan;
  console.log($scope.namaWilTujuan);

  $scope.namaEkonomi = $routeParams.namaEkonomi;
  console.log($scope.namaEkonomi);

  $scope.namaKursi = $routeParams.namaKursi;
  console.log($scope.namaKursi);
  // baca query string dari url dahulu
  // kalau ada query string brrt jalankan search
  // kalau tidak ada maka jangan jalankan

  // show hide pada panel order
  $scope.showDetails = false;
  $scope.openDetailsPage = function(){
    $scope.showDetails = true;
  };
  $scope.closeDetails = function(){
    $scope.kursi = [];
  };
  // end

  console.log($routeParams)

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

  // getAPI kursi
  $scope.kursi = [];
  $scope.getKursi = function (idJadwal, index, agen, trayek, subtrayek, arahtrayek, harga_asal, harga_jual, komisi_pemberangkatan, biaya_admin, iuran_ipomi, biayaMidtrans) {
      // $rootScope.selectedAgen = agen;
      // console.log($rootScope.selectedAgen)
      $scope['selectedAgen'] = agen;

      // $rootScope.selectedTrayek = trayek;
      // console.log($rootScope.selectedTrayek)
      $scope['selectedTrayek'] = trayek;

      // $rootScope.selectedSubtrayek = subtrayek;
      // console.log($rootScope.selectedSubtrayek)
      $scope['selectedSubtrayek'] = subtrayek;

      // $rootScope.selectedArahtrayek = arahtrayek;
      // console.log($rootScope.selectedArahtrayek)
      $scope['selectedArahtrayek'] = arahtrayek;

      $scope['selectedHargaAsal'] = harga_asal;

      $scope['selectedHargaJual'] = harga_jual;

      $scope['selectedKomisiPemberangkatan'] = komisi_pemberangkatan;

      $scope['selectedBiayaAdmin'] = biaya_admin;

      $scope['selectedIuranIpomi'] = iuran_ipomi;

      $scope['selectedBiayaMidtrans'] = biayaMidtrans;

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
          $scope.getTotal = function(jmlKursi, hargaTotal){
              return hargaTotal * jmlKursi;
          }
          // end Harga Kursi

          // start pilih seat
          $scope.kursiTerpilih = []

          $scope.pilihKursi = function(seat, index, hargaTotal){
              if($scope.layoutKursi[index][4] === '0'){
                  console.log($scope.layoutKursi[index][2])
                  if ($scope.kursiTerpilih.length === $routeParams.jmlKursi) {
                      window.alert("Batas maksimal");
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

  // // start get kota asal
  // $scope.kota1 = $routeParams.id_asal;
  // console.log($scope.kota1);
  //
  // $scope.getKotaAsal = function(){
  //     $http.get(base_endpoint + "/mobile/kota/asal")
  //     .success(function(data){
  //         $scope.tesAsal = [];
  //         data.forEach(function(response){
  //             response.wilayahs.forEach(function(response2){
  //                 $scope.tesAsal.push({
  //                     namaProvinsi: response.namaProvinsi,
  //                     idProvinsi: response.idProvinsi,
  //                     namaWilayah: response2.namaWilayah,
  //                     idWilayah: response2.idWilayah
  //                 });
  //             });
  //         });
  //     });
  // };
  // $scope.getKotaAsal();
  // // end


  $http.get(base_endpoint + "/mobile/kota/asal")
  .success (function (data) {
      $scope.tesAsal = [];
      data.forEach(function(response){
          response.wilayahs.forEach(function(response2){
              $scope.tesAsal.push({
                  namaProvinsi: response.namaProvinsi,
                  idProvinsi: response.idProvinsi,
                  namaWilayah: response2.namaWilayah,
                  idWilayah: response2.idWilayah
              });
          });
      });
      console.log(data);
  });

  // // start get kota tujuan
  // $scope.kota2 = $routeParams.id_tujuan;
  // console.log($scope.kota2);
  //
  // $scope.getKotaTujuan = function(){
  //     $http.get(base_endpoint + "/mobile/kota/tujuan?idAsal=" + $scope.kota1)
  //     .success(function(data){
  //         $scope.tesTujuan = [];
  //         data.forEach(function(response){
  //             response.wilayahs.forEach(function(response2){
  //                 $scope.tesTujuan.push({
  //                     idProvinsi: response.idProvinsi,
  //                     namaProvinsi: response.namaProvinsi,
  //                     idWilayah: response2.idWilayah,
  //                     namaWilayah: response2.namaWilayah
  //                 });
  //             });
  //         });
  //     });
  // };
  // $scope.getKotaTujuan();
  // // end

  $scope.fetch = function () {
      // $scope._result_kota_tujuan = null;
      // console.log("http://dev.otodata.co.id:8181/mobile/kota/tujuan?idAsal=" + $scope.id_wilAsal);
      $http.get(base_endpoint + "/mobile/kota/tujuan?idAsal=" + $scope.asal.idWilayah)
      .success (function (data) {
        $scope.tesTujuan = [];
        data.forEach(function(response){
            response.wilayahs.forEach(function(response2){
                $scope.tesTujuan.push({
                    idProvinsi: response.idProvinsi,
                    namaProvinsi: response.namaProvinsi,
                    idWilayah: response2.idWilayah,
                    namaWilayah: response2.namaWilayah
                });
            });
        });
        console.log(data);
      });
  };

  // start tanggal
  $scope.tglBerangkat = $routeParams.tglBerangkat;
  console.log($scope.tglBerangkat);

  $scope.getTanggal = function(){
      $scope.getTanggal();
  };
  // end

  // // start kelas
  // $scope.val_kelas = $routeParams.ekonomi;
  // console.log($scope.val_kelas);
  //
  // $scope.getEkonomi = function(){
  //     $http.get("client/asset/json/hasil_kelas.json")
  //     .success(function(data){
  //         $scope.tesEkonomi = [];
  //         data.forEach(function(response){
  //             $scope.tesEkonomi.push({
  //                 idKelas: response.idKelas,
  //                 jumlahKelas: response.jumlahKelas
  //             });
  //         });
  //     });
  // };
  // $scope.getEkonomi();
  // // end

  $http.get("client/asset/json/hasil_kelas.json")
  .success(function (data) {
      $scope.tesKelas = [];
      data.forEach(function(response){
          $scope.tesKelas.push({
              idKelas: response.idKelas,
              jumlahKelas: response.jumlahKelas,
          });
      });
      console.log(data);
  });

  // // start kursi
  // $scope.val_kursi = $routeParams.jmlKursi;
  // console.log($scope.val_kursi);
  //
  // $scope.getJmlKursi = function(){
  //     $http.get("client/asset/json/penumpang.json")
  //     .success(function(data){
  //         $scope.tesJmlKursi = [];
  //         data.forEach(function(response){
  //             $scope.tesJmlKursi.push({
  //                 idPenumpang: response.idPenumpang,
  //                 jumlahPenumpang: response.jumlahPenumpang
  //             });
  //         });
  //     });
  // };
  // $scope.getJmlKursi();
  // // end

  $http.get("client/asset/json/penumpang.json")
  .success(function (data) {
      $scope.tesPenumpang = [];
      data.forEach(function(response){
          $scope.tesPenumpang.push({
              idPenumpang: response.idPenumpang,
              jumlahPenumpang: response.jumlahPenumpang,
          });
      });
      console.log(data);
  });

  $scope.panggil = function(form){
      var params = {
          'tglBerangkat': $scope.tglBerangkat,
          'ekonomi': $scope.id_jurusan.idKelas,
          'jmlKursi': $scope.id_kursi.idPenumpang,
          'web': true
          };
      var url = base_endpoint + '/mobile/operator/bus/'+ $scope.asal.idWilayah +'/' + $scope.tujuan.idWilayah + '?' + $httpParamSerializer(params);

      $http.get(url)
      .success (function(data, status, header, config){
          window.location.href = base_url + "/#/pencarian?id_asal=" + $scope.asal.idWilayah + "&namaWilayahAsal=" + $scope.asal.namaWilayah + "&id_tujuan=" + $scope.tujuan.idWilayah + "&namaWilayahTujuan=" + $scope.tujuan.namaWilayah + "&tglBerangkat=" + $scope.tglBerangkat + "&ekonomi=" + $scope.id_jurusan.idKelas + "&namaEkonomi=" + $scope.id_jurusan.jumlahKelas + "&jmlKursi=" + $scope.id_kursi.idPenumpang + "&namaKursi=" + $scope.id_kursi.jumlahPenumpang + '&web=true' ;
          $scope.panggil = data;
          console.log('berhasil');
          // alert("berhasil");
      });
  };

  // start form isi data
  $scope.pesan = function(form, idJadwal, index, agen, trayek, subtrayek, arahtrayek){

      if($scope.kursiTerpilih.length < $scope.val_kursi){
          alert('silahkan pilih kursi sesuai jumlah pesan')
          return false;
      }
      var params = [];
      $scope.kursiTerpilih.forEach(function (d) {
          params.push({
              kursi : d
          })
      })
      console.log(params)
      $http.post(base_endpoint + '/mobile/jadwal/' + idJadwal + '/bookingkursi', params)
      .then (function(data, status, header, config){
          window.location.href = base_url + "/#/formCetak?id_asal=" + $routeParams.id_asal +"&id_tujuan=" + $routeParams.id_tujuan + "&tglBerangkat=" + $routeParams.tglBerangkat + "&ekonomi=" + $routeParams.ekonomi + "&jmlKursi=" + $routeParams.jmlKursi + '&web=true' + "&idagen=" + $scope['selectedAgen'] + "&idtrayek=" + $scope['selectedTrayek'] + "&idSubTrayek=" + $scope['selectedSubtrayek'] + "&idArahTrayek=" + $scope['selectedArahtrayek'] + "&hargaAsal=" + $scope['selectedHargaAsal'] + "&hargaJual=" + $scope['selectedHargaJual'] + "&komisiPemberangkatan=" + $scope['selectedKomisiPemberangkatan'] + "&biayaAdmin=" + $scope['selectedBiayaAdmin'] + "&iuranIpomi=" + $scope['selectedIuranIpomi'] + "&biayaMidtrans=" + $scope['selectedBiayaMidtrans'] + "&nomorKursi=" + $scope.kursiTerpilih + "&idJadwal=" + idJadwal + "&jmlPenumpangs=" + $scope.val_kursi;
          // window.location.href = "http://localhost/web_otobus_laravel/public/formCetak";
          $scope.pesan = data;
          console.log("berhasil")
      });
  };
  // end
});
