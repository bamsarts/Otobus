otobusApp.controller('pemesanan_controller', function($http, $scope, $routeParams){
  var vm = this;

  vm.order_id = $routeParams.order_id;
  console.log(vm.order_id);

  $http.get(base_endpoint + '/order/history?kodePesanan=' + vm.order_id + '&isLogin=false')
  .success(function(data){
    $scope.waktu_order = data[0].tglExpired;
    console.log(data[0].tglExpired);
  });
});
