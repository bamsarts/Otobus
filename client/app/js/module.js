var otobusApp = angular.module ('otobusApp', ['ngRoute', 'ngResource', '720kb.datepicker', 'ngAnimate']);
var base_url = 'http://localhost/otobus-webApp';
var base_endpoint = 'https://dev.otodata.co.id:8443';

otobusApp.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider){
  // $locationProvider.html5Mode({
  //   enabled: true,
  //   requireBase: false
  // });

  $routeProvider
  .when('/', {
    templateUrl: 'client/welcome.html',
    controller: 'index_controller',
  })
  .when('/pencarian', {
    templateUrl:  'client/pencarian.html',
    controller: 'pencarian_controller',
    controllerAs: 'vm'
  })
  .when('/formCetak', {
    templateUrl: 'client/formCetak.html',
    controller: 'formCetak_controller',
    controllerAs : 'vm'
  })
  .when('/pemesanan', {
    templateUrl: 'client/pemesanan.html',
    controller: 'pemesanan_controller',
    controllerAs: 'vm'
  })
  .when('/informasi', {
    templateUrl: 'client/informasi.html',
    controller: 'informasi_controller',
  })
  .when('/login', {
    templateUrl: 'client/login.html',
    controller: 'login_controller',
  })
  .when('/midtrans', {
    templateUrl: 'client/formMidtrans.html',
    controller: 'midtrans_controller',
  })
  .otherwise({
    redirectTo: '/'
  });
}]);
