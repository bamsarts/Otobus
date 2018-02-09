<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Otobus</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

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


        <!-- style form -->
        <link rel="stylesheet" type="text/css" href="{{asset('asset/assets/css/styleForm.css')}}">

        <script src="{{asset('asset/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('asset/js/jquery-1.10.2.min.js')}}"></script>

        <!-- yamn css-->
        <link rel="stylesheet" href="{{asset('asset/css/yamn.css')}}">

        <!-- demo css-->
        <link rel="stylesheet" href="{{asset('asset/css/demo.css')}}">

        <!-- style login -->
        <link rel="stylesheet" href="{{asset('asset/css/style-login.css')}}">

        <!-- style @media login -->
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/style-media-login.css')}}">
        
    </head>

    <body style="background: black;">

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
                                        <li><a href="index.php" style="font-size: 14px;">Home</a></li>
                                        <li><a href="pemesanan.php" style="font-size: 14px;">Cek Pemesanan</a></li>
                                        <li><a href="informasi.php" style="font-size: 14px;">Informasi</a></li>
                                        <li><a href="login.php" style="font-size: 14px;">Login/Daftar</a></li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>	
        </header> <!-- End Header Section -->

        <section id="slider" class="slider daftar" style="background: url({{ URL::asset('asset/images/loginpage1.png') }}) center center fixed no-repeat; width: 100%;">
            <div class="slider_overlay">
            <div class="container">
                <div class="row" style="margin-top:150px">
                    <div class="col-md-6">
		                <div id="register">
                            <input type="email" class="reg" size="20" placeholder="Email" required>&nbsp; 
                            <input type="password" class="reg" size="19" placeholder="Password" required>&nbsp;&nbsp;
                            <button class="btn btn-sm btn-primary" id="masuk">Masuk</button>
                        </div><br><br>
        
                        <div id="register">
                            <p style="font-size: 20px; color: white;"><b>Daftar</b></p>
                            <input type="text" class="reg" size="45" placeholder="Nama Lengkap" required><br/><br/>
                            <input type="radio" name="radio" required>Laki - laki     
                            <input type="radio" name="radio" required>Perempuan<br/><br/>
                            <select required>
                                <option selected="selected">Tgl</option>
                                <?php
                                    for($a=1; $a<=31; $a+=1){
                                        echo "<option value=$a> $a </option>";
                                    }
                                ?>
                            </select>
                            <select required>
                                <option selected="selected">Bln</option>
                                <?php
                                    $bulan = array("Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agu","Sep","Okt","Nov","Des");
                                    $jml_bln=count($bulan);
                                    for($c=0; $c<$jml_bln; $c+=1){
                                    echo "<option value=$bulan[$c]> $bulan[$c] </option>";
                                    }
                                ?>
                            </select>
                            <select required>
                                <option selected="selected">Thn</option>
                                <?php
                                    for($i=2050; $i>=1999; $i-=1){
                                        echo "<option> $i </option>";
                                    }
                                ?>
                            </select><br/><br/>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon2" style="font-size: 12px;">+62</span>
                                <input id="slider-price-low" type="text" class="form-control" aria-describedby="basic-addon2" placeholder="Phone" required style="background: white; font-size: 12px; width: 323px;">
                            </div><br>

                            <input type="email" class="reg" size="45" placeholder="Email" required><br/><br/>
                            <input type="password" class="reg" size="45" placeholder="Kata Sandi Baru" required><br/><br/>
                            <input type="password" class="reg" size="45" placeholder="Ulangi Kata Sandi" required><br/><br/>
                                
                            <button class="btn btn-sm btn-primary" style="width: 365px;">Buat Akun</button><br><br>

                            <p style="font-size: 12px; width: 360px;" align="center">Dengan melakukan pendaftaran, saya setuju dengan Kebijakan Privasi dan Syarat serta Ketentuan Otobus.co.id</p>
                        </div>
                    </div>
                    	
                    <div class="col-md-6" style="margin-top: -80px;">
                        <div class="main_slider_content wow zoomIn" data-wow-duration="1s">
                            <p style="font-size: 18px;">Teks redaksi pendek & image yang menggambarkan profil perusahaan</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section id="footer_widget" class="footer_widget" style="background: url({{ URL::asset('asset/images/footer.png') }}); position: absolute; height: 241px;">
        </section>

        <!--Start of Tawk.to Script-->
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
        <!--End of Tawk.to Script-->

        <!-- yamn -->
        <script>
            $(function() {
                window.prettyPrint && prettyPrint()
                $(document).on('click', '.yamm .dropdown-menu', function(e) {
                    e.stopPropagation()
                })
            })
        </script>
		
        <!-- untuk scroll up aktif -->
		<div class="scrollup">
			<a href="#"><i class="fa fa-chevron-up"></i></a>
		</div>		
        

        <script src="{{asset('asset/assets/js/vendor/jquery-1.11.2.min.js')}}"></script>
        <script src="{{asset('asset/assets/js/vendor/bootstrap.min.js')}}"></script>

        <script src="{{asset('asset/assets/js/jquery-easing/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('asset/assets/js/wow/wow.min.js')}}"></script>
        <script src="{{asset('asset/assets/js/plugins.js')}}"></script>
        <script src="{{asset('asset/assets/js/main.js')}}"></script>

        <!-- javascript login -->
        <script src="{{asset('asset/js/javascript-login.js')}}"></script>
    </body>
</html>
