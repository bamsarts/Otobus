otobusApp.controller('index_controller', function($scope, $http, $window, $httpParamSerializer, $location, $routeParams, $timeout){

// membuat batas tanggal
  // var date = new Date();
  //       var yyyy = date.getFullYear();
  //       var mm = date.getMonth() + 1;
  //       var dd = date.getDate();
  //       if (mm < 10) {
  //         mm = '0' + mm;
  //       }
  //       if (dd < 2) {
  //         dd = '1' + dd;
  //       }
  //       var now = yyyy + '-' + mm + '-' + dd +',23:59';
  //       $scope.now = new Date(now); // tanggal sekarang
  //       $scope.limit = String($scope.now); // tanggal sekarang
  $scope.limit = new Date().toDateString();
// end

  // untuk masuk ke page pemesanan
    if($routeParams.order_id){
      window.location.href = '/#/pemesanan?order_id=' + $routeParams.order_id;
    }
  // end

  // $scope._result_kota_asal = null;
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
});
