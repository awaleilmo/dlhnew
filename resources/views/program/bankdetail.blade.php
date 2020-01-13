
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

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../image-resources/dlh/dlh.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../image-resources/dlh/dlh.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../image-resources/dlh/dlh.png">
    <link rel="apple-touch-icon-precomposed" href="../image-resources/dlh/dlh.png">
    <link rel="shortcut icon" href="../image-resources/dlh/dlh.png">



    <link rel="stylesheet" type="text/css" href="../assets-minified/frontend-all-demo.css">

    <!-- JS Core -->

    <script type="text/javascript" src="../assets/js-core/jquery-core.js"></script>
    <script type="text/javascript" src="../assets/js-core/jquery-ui-core.js"></script>
    <script type="text/javascript" src="../assets/js-core/jquery-ui-widget.js"></script>
    <script type="text/javascript" src="../assets/js-core/jquery-ui-mouse.js"></script>
    <script type="text/javascript" src="../assets/js-core/jquery-ui-position.js"></script>

    <script type="text/javascript" src="../assets/js-core/modernizr.js"></script>
    <script type="text/javascript" src="../assets/js-core/jquery-cookie.js"></script>
    <link rel="stylesheet" href="../leaflet/leaflet.css" />
    <script src="../leaflet/leaflet.js"></script>


    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>


</head>

<body class="main-header-fixed">

<div id="loading">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<!-- banner -->
<div class="top-bar bg-topbar" style="padding: 0 0;">
    <div id="myL" class="top-bar font-inverse" style="padding: 0px; width: 100%; height: 136px; margin-bottom: -.1em; background: linear-gradient(to right, #ffffff, #ffffff)">
        <img id="myP"  src="../image-resources/dlh/banner.png" style="margin-left:24%; width: 50%; height: 136px; ">
    </div>
</div>
<!-- .top-bar -->
@include('layouts.menuuser')

<div id="myI">
    <script type="text/javascript" src="../../assets/widgets/tabs/tabs.js"></script>
    <div class="hero-box bg-white hero-box-smaller ">
        @if($message = Session::get('error'))
            <script>
                $(window).load(function(){
                    setTimeout(function() {
                        $('.alert').fadeOut( 400, "linear" );
                    }, 3000);
                });
            </script>
            <div class="alert alert-danger">
                <div class="bg-red alert-icon">
                    <i class="glyph-icon icon-times"></i>
                </div>
                <div class="alert-content">
                    <button type="button" style="float: right" onclick="document.getElementById('alert').style.display ='none'" class="close" data-dismiss="alert">×</button>
                    <h4 class="alert-title">Error</h4>
                    <p>{{ $message }}</p>
                </div>
            </div>
        @endif
        <div class="container" style="max-width: 95%">

                <script type="text/javascript" src="../../assets/widgets/datatable/datatable.js"></script>
                <script type="text/javascript" src="../../assets/widgets/datatable/datatable-bootstrap.js"></script>
                <script type="text/javascript" src="../../assets/widgets/datatable/datatable-tabletools.js"></script>
                    <br>
                    <br>
                    <h2 class="hero-heading">Bank Sampah {{$p->nama}}</h2>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="../upload/banksampah/{{$p->foto}}" style="width: 100%; height: 65%">
                        </div>
                        <div class="col-md-6 hero-text wow bounceInUp animated animated blurred-bg-1" style="border:1px solid green;
                        padding-top: 2.5em;
                        padding-bottom: 2.5em;
                        text-align: left;
                        font-size: 18px;
                        border-radius: 2em;
                        opacity: 1">
                            <div class="row">
                            <div class="col-md-6">
                                Nama :
                            </div>
                            <div class="col-md-6">
                                {{$p->nama}}
                            </div>
                        </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    Alamat :
                                </div>
                                <div class="col-md-6">
                                    {{$p->alamat}}
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6"><br>
                                    Jenis Kerajinan :
                                </div>
                                <div class="col-md-6">
                                    <p style="margin: 0px;    height: auto;    width: auto;    overflow: hidden;    resize: none;    text-rendering: auto;    letter-spacing: normal;    word-spacing: normal;    flex-direction: column;    white-space: pre-line;    overflow-wrap: break-word;">
                                        {{$p->jeniskegiatan}}
                                    </p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    Jumlah Nasabah :
                                </div>
                                <div class="col-md-6">
                                    {{$p->jumlahnasabah}}
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    Tahun :
                                </div>
                                <div class="col-md-6">
                                    {{$p->tahun}}
                                </div>
                            </div>
                        </div>
                    </div>

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
<script type="text/javascript" src="../assets-minified/frontend-all-demo.js"></script>

</body>

<!-- Mirrored from agileui.com/demo/monarch/demo/frontend-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jul 2019 03:58:50 GMT -->
</html>

