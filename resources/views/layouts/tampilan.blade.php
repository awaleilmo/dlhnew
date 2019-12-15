<!DOCTYPE html>
<html lang ="en">

<!-- Mirrored from agileui.com/demo/monarch/demo/frontend-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jul 2019 03:58:24 GMT -->
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Dinas Lingkungan Hidup Kota Serang</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicons -->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="image-resources/dlh/dlh.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="image-resources/dlh/dlh.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="image-resources/dlh/dlh.png">
    <link rel="apple-touch-icon-precomposed" href=image-resources/dlh/dlh.png">
    <link rel="shortcut icon" href="image-resources/dlh/dlh.png">



    <link rel="stylesheet" type="text/css" href="assets-minified/frontend-all-demo.css">

    <!-- JS Core -->

    <script type="text/javascript" src="assets/js-core/jquery-core.js"></script>
    <script type="text/javascript" src="assets/js-core/jquery-ui-core.js"></script>
    <script type="text/javascript" src="assets/js-core/jquery-ui-widget.js"></script>
    <script type="text/javascript" src="assets/js-core/jquery-ui-mouse.js"></script>
    <script type="text/javascript" src="assets/js-core/jquery-ui-position.js"></script>

    <script type="text/javascript" src="assets/js-core/modernizr.js"></script>
    <script type="text/javascript" src="assets/js-core/jquery-cookie.js"></script>
    <link rel="stylesheet" href="leaflet/leaflet.css" />
    <script src="leaflet/leaflet.js"></script>

    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>


</head>

<body>

<div id="loading">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > 450) {
            document.getElementById("myP").style.height = "0px";
            document.getElementById("myL").style.height = "0px";
            document.getElementById("myP").style.transition = "height 10s";
            document.getElementById("myP").style.webkitTransition = "height 0s";
            document.getElementById("myO").style.position = "fixed";
            document.getElementById("myO").style.marginTop = "0";
            document.getElementById("myI").style.marginTop = "5em";
        } else if(prevScrollpos < 12) {
            document.getElementById("myP").style.height = "200px";
            document.getElementById("myL").style.height = "200px";
            document.getElementById("myP").style.transition = "height 1s";
            document.getElementById("myP").style.webkitTransition = "height 1s";
            document.getElementById("myO").style.position = "relative";
            document.getElementById("myO").style.marginTop = "0";
            document.getElementById("myI").style.marginTop = "0em";
        }
        prevScrollpos = currentScrollPos;
    }
</script>
<!-- banner -->

<div id="myL" class="top-bar font-inverse" style="padding: 0px; width: 100%; height: 200px; margin-bottom: -.5em; background: linear-gradient(to right, #8EC220, #006B35)">
       <img id="myP"  src="image-resources/dlh/banner2,1.png" style="margin-left:10%; width: 80%; height: 200px; ">
</div>

<!-- .top-bar -->
<div id="myO" class="main-header bg-gradient-7 wow fadeInDown font-inverse" style=" width: 100%;">
    <div class="container">

        <div class="right-header-btn">
            <div id="mobile-navigation">
                <button style="    padding: 10px 35px 25px 0;" id="nav-toggle" class="collapsed" data-toggle="collapse" data-target=".header-nav"><span></span></button>
            </div>

        </div><!-- .header-logo -->
        <ul class="header-nav collapse" style="float: none">
            <li>
                <a href="{{url("/")}}" style="width: 50px; text-align: left">
                    <i class="glyph-icon icon-home" style="font-size: xx-large; color: #8da0aa"></i>
                </a>
            </li>
            <li>
                <a href="#" title="Tentang Kami">
                    Tentang Kami <i class="glyph-icon icon-caret-down"></i>
                </a>
                <ul>

                    <li class="dropdown" style="color: white"><a href="{{route('dasarhukum')}}"> Dasar Hukum</a></li>
                    <!--<li class="dropdown" style="color: white"><a href="{{route('kewenangan')}}"> Tujuan dan Sasaran</a></li>-->
                    <li class="dropdown" style="color: white"><a href="{{route('visimisi')}}"> Visi & Misi</a></li>
                    <li class="dropdown" style="color: white"><a href="{{route('sejarah')}}"> Sejarah DLH Kota Serang</a></li>
                    <li class="dropdown" >
                        <a href="#" title="Pages" class="dropdown-toggle" data-toggle="dropdown">
                            Struktur Bidang <i class="glyph-icon icon-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu" style="position:relative;background-color: #253035; height: 250px; overflow-x: hidden; overflow-y: scroll;" aria-labelledby="dropdownMenu1">
                            <li class="dropdown" style="width:100%; color: white"><a href="{{route('kadis')}}"> Kepala Dinas</a></li>
                            <li class="dropdown" style="width:100%; color: white"><a href="{{route('sekdis')}}"> Sekretaris</a></li>
                            <li class="dropdown" style="width:100%; color: white"><a href="{{route('unpeg')}}"> Umum dan Kepegawaian</a></li>
                            <li class="dropdown" style="width:100%; color: white"><a href="{{route('pep')}}"> PEP dan Keuangan</a></li>
                            <li class="dropdown" style="width:100%; color: white"><a href="{{route('pplh')}}"> Bidang Penataan dan Penaatan <br>Perlindungan Pengelolaan <br>Lingkungan Hidup</a></li>
                            <li class="dropdown" style="width:100%; color: white"><a href="{{route('pslb')}}"> Bidang Pengelolaan Sampah,<br> Limbah B3 dan Peningkatan <br>Kapasitas</a></li>
                            <li class="dropdown" style="width:100%; color: white"><a href="{{route('ppklh')}}"> Bidang Pengendalian Pencemaran <br>dan Kerusakan Lingkungan Hidup</a></li>
                            <li class="dropdown" style="width:100%; color: white"><a href="{{route('uptlab')}}"> UPT Laboratorium</a></li>
                            <li class="dropdown" style="width:100%; color: white"><a href="{{route('uptperbekalan')}}"> UPT Perbekalan</a>
                            </li>
                            <li class="dropdown" style="color: white"><a href=""> Kelompok Jabatan Fungsional</a></li>
                        </ul>

                    </li>
                    <li class="dropdown" style="color: white"><a href="{{route('struktur')}}"> Struktur Organisasi</a></li>
                    <!--<li class="dropdown" style="color: white"><a href="{{route('programs')}}"> Tugas Pokok dan Fungsi</a></li>-->
                    <li class="dropdown" style="color: white"><a href="{{route('jmlpnsthl')}}"> Jumlah Pegawai</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('cilowong')}}" title="TPAS Cilowong">
                    TPAS Cilowong
                </a>

            </li>
            @guest
            @else
            <li>
                <a href="#" title="Features">
                    Pelayanan <i class="glyph-icon icon-caret-down"></i>
                </a>
                <ul>
                    <li class="dropdown" style="color: white">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Dokumen Lingkungan <i class="glyph-icon icon-caret-down"></i></a>

                        <ul class="dropdown-menu" style="position:relative;background-color: #253035; height: auto; overflow-x: hidden; overflow-y: hidden;" aria-labelledby="dropdownMenu2">
                            <li class="dropdown" style="width:100%; color: white"><a href="{{route('amdal')}}"> AMDAL</a></li>
                            <li class="dropdown" style="width:100%; color: white"><a href="{{route('uklupl')}}"> UKL-UPL</a></li>
                            <li class="dropdown" style="width:100%; color: white"><a href="{{route('sppl')}}"> SPPL</a></li>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown" style="color: white"><a href="{{route('perizinanlimbah')}}"> Perizinan Limbah B3</a>
                    </li>
                </ul>

            </li>
            <li>
                <a href="#" title="Components">
                    Pelaporan <i class="glyph-icon icon-caret-down"></i>
                </a>
                <ul>
                    <li class="dropdown" style="color: white"><a href="{{url('pojok_pengaduan')}}">Pengaduan</a></li>
                    </li>
                </ul>

            </li>
            <li>
                <a href="#" title="Pages">
                    Program
                </a>
                <ul>
                    <li class="dropdown"><a href="{{route('pengawasan')}}">Pengawasan</a></li>
                    <li class="dropdown"><a href="{{route('persampahan')}}">Persampahan</a></li>
                    <li class="dropdown"><a href="{{route('adwiyata')}}">Adwiyata</a></li>
                    <li class="dropdown"><a href="{{route('banksampah')}}">Bank Sampah</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('data')}}" title="Pages">
                    Data
                </a>

            </li>
            @endguest
            <li>
                <a href="#" title="Pages">
                    Berita <i class="glyph-icon icon-caret-down"></i>
                </a>
                <ul>
                    <li class="dropdown" style="color: white"><a href="{{route('artikel')}}"> Pojok Warga LH</a></li>
                    <li class="dropdown" style="color: white"><a href="{{route('artikel')}}"> Pengumuman</a>
                    </li>
                </ul>


            </li>
            <li>
                @guest
                <a href="{{route('login')}}" title="Pages">
                    Masuk / Daftar
                </a>
                @else
                <li>
                    <a>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul>
                        @if(Auth::user()->level == "admin")
                            <li><a href="{{route('admin')}}">Dashboard Admin</a></li>
                        @endif
                        <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        </li>
                    </ul>
                </li>
                @endguest
            </li>
        </ul><!-- .header-nav -->
    </div><!-- .container -->
</div><!-- .main-header -->

<div id="myI">
@yield('content')
</div>
<!-- Owl carousel -->

<!-- kontak -->
<div class="main-footer bg-black clearfix">
    <div class="container col-md-6" style="margin-top: 5%">
        <h4 class="header"><center>Hubungi Kami</center></h4>
        <ul class="footer-contact">
            <li>
                <center>
                    Jl. Letnan Jidul No 5 Kepandean, Kelurahan Lontar Baru, Kecamatan Serang, Kota Serang, Provinsi Banten
                </center>
            </li>
            <li>
                <center>
                    <i class="glyph-icon icon-phone"></i>
                    (0254) 221-764
                </center>
            </li>
        </ul>
    </div>
    <div class="container col-md-6">

        <div id="googleMaphk" style="width:80%;height:300px; border-radius: 20px; margin-top: 20px"></div>
        <script>

            var dlh = L.layerGroup();

            L.marker([-6.112387777530127, 106.14165547958123]).addTo(dlh)
                .bindPopup('<a href="https://www.google.com/maps/dir/?api=1&destination=-6.112387777530127,106.14165547958123" target="_blank" style="color: deepskyblue">Petunjuk Arah</a>').openPopup();

            var street =
                    L.tileLayer('https://{s}.google.com/vt/lyrs=m@221097413,traffic&x={x}&y={y}&z={z}', {
                        maxZoom: 20,
                        minZoom: 2,
                        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                    }),

                satelite = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
                    maxZoom: 20,
                    subdomains:['mt0','mt1','mt2','mt3']
                });

            var mymap = L.map('googleMaphk', {
                center: [-6.112387777530127, 106.14165547958123],
                zoom: 17,
                layers: [street, dlh]
            });

            var baseLayers = {
                "Map": street,
                "Satellite": satelite
            };

            var overlays = {
                "dinas lingkungan hidup kota serang": dlh,

            };

            L.control.layers(baseLayers, overlays).addTo(mymap);


        </script>
    </div>
    <div class="footer-pane">
        <div class="container">
            <div class="logo" tyle="font-size: 18px">&copy; 2019 Awaludin Ramdani. All Rights Reserved.</div>
            <div class="footer-nav-bottom">

            </div>
        </div>
    </div>
</div></div>


<!-- JS Demo -->
<script type="text/javascript" src="assets-minified/frontend-all-demo.js"></script>

</body>

<!-- Mirrored from agileui.com/demo/monarch/demo/frontend-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jul 2019 03:58:50 GMT -->
</html>

