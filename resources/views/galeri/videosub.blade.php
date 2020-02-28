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
    @include('cssfronother')
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

<div class="top-bar bg-topbar" style="padding: 0 0;">
    <div id="myL" class="top-bar font-inverse" style="padding: 0px; width: 100%; height: 136px; margin-bottom: -.1em; background: linear-gradient(to right, #ffffff, #ffffff)">
        <img id="myP"  src="../image-resources/dlh/banner.png" style="margin-left:24%; width: 50%; height: 136px; ">
    </div>
</div>
<!-- banner -->

@include('layouts.menuuser')
<div class="hero-box hero-box-smaller full-bg-9 font-inverse" data-top-bottom="background-position: 50% 0px;" data-bottom-top="background-position: 50% -600px;">
    <div class="container">

            <h1 class="hero-heading wow fadeInDown" data-wow-duration="0.6s">Galeri Video</h1>
            <p class="hero-text wow bounceInUp" data-wow-duration="0.9s" data-wow-delay="0.2s">Kumpulan Video Kegiatan DLH Kota Serang</p>

    </div>

</div>

<!-- Lazyload -->

<script type="text/javascript" src="../../assets/widgets/lazyload/lazyload.js"></script>
<script type="text/javascript">
    /* Lazyload */

    $(function() {
        $("img.lazy").lazyload({
            effect: "fadeIn",
            threshold: 100
        });
    });
</script>

<!-- PrettyPhoto modals -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/pretty-photo/prettyphoto.css">-->
<script type="text/javascript" src="../../assets/widgets/pretty-photo/prettyphoto.js"></script>
<script type="text/javascript">
    /* PrettyPhoto */

    $(document).ready(function() {
        $(".prettyphoto").prettyPhoto();
    });
</script>

<div id="page-content" style="padding: 0">
    <div class="hero-box hero-box-smaller bg-gradient-3 font-inverse">

        <div class="dashboard-box dashboard-box-chart" style="background-color: transparent">
            <div class="content-wrapper">
                <div class="example-box-wrapper">

                    <div style="margin-left: 5px; margin-right: 5px;">
                        <div class="panel panel-info" style="margin-left: 10px; margin-right: 10px">
                            <div class="panel-heading text-uppercase"> {{$p->judul}} </div>
                            <div id="fotol{{$p->id}}" class="panel-body">
                                <iframe width="100%" height="600px" src="https://www.youtube.com/embed/{{$p->link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

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
@include('jsfronother')
</body>
</html>

