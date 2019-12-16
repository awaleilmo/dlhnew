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
    <img id="myP"  src="../image-resources/dlh/banner2,1.png" style="margin-left:10%; width: 80%; height: 200px; ">
</div>
@include('layouts.menuuser')
    <div class="hero-box hero-box-smaller blurred-img-5 font-inverse" data-top-bottom="background-position: 50% 0px;" data-bottom-top="background-position: 50% -600px;">
        <div class="container">
            <h1 class="hero-heading wow fadeInDown" data-wow-duration="0.6s">{{$p->judul}}</h1>
        </div>
        <div class="hero-overlay bg-black"></div>
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

    <div id="page-content" class="container mrg25T">
        <div class="row">
            <div class="col-md-9">
                <div class="blog-box blog-box-single blog-box-alt row">
                    <div class="post-image">
                        <a href="../upload/artikel/{{$p->foto}}" class="prettyphoto" rel="prettyPhoto[pp_gal]" title="Blog post title">
                            <img class="img-responsive lazy img-rounded" src="#" data-original="../upload/artikel/{{$p->foto}}" alt="" />
                        </a>
                    </div>
                    <a class="post-title" href="artikel/{{$p->id}}" title="">
                        <h3>{{$p->judul}}</h3>
                    </a>
                    <div class="post-content-wrapper">
                        <div class="post-meta clearfix">
                        <span class="float-left">
                            <i class="glyph-icon icon-user"></i>
                            Admin DLH Kota Serang
                        </span>
                            <span class="float-left">
                            <i class="glyph-icon icon-clock-o"></i>
                            {{$p->created_at->day." ".$p->created_at->monthName." ".$p->created_at->year}}
                        </span>
                        </div>
                        <div class="divider"></div>
                        <div class="post-content">
                            {!! $p->deskripsi !!}
                        </div>

                    </div>
                </div>





            </div>
            <div class="col-md-3">
                <div class="content-box">
                    <h3 class="content-box-header bg-default">
                        Berita Terbaru
                    </h3>
                    <div class="posts-list content-box-wrapper">
                        <ul class="">
                            @foreach($z as $zz)
                            <li>
                                <div class="post-image">
                                    <a href=".../upload/artikel/{{$zz->foto}}" class="prettyphoto" rel="prettyPhoto[pp_gal]" title="{{$zz->judul}}">
                                        <img class="img-responsive" src="../upload/artikel/{{$zz->foto}}" alt="" />
                                    </a>
                                </div>
                                <div class="post-body">
                                    <a class="post-title" href="{{$zz->id}}" title="">
                                        <h3>{{$zz->judul}}</h3>
                                    </a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="content-box">
                    <h3 class="content-box-header bg-default">
                        Pengumuman Terbaru
                    </h3>
                    <div class="posts-list content-box-wrapper">
                        <ul class="">
                            @foreach($x as $xx)
                                <li>
                                    <div class="post-image">
                                        <a href=".../upload/pengumuman/{{$xx->foto}}" class="prettyphoto" rel="prettyPhoto[pp_gal]" title="{{$xx->judul}}">
                                            <img class="img-responsive" src="../upload/pengumuman/{{$xx->foto}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="post-body">
                                        <a class="post-title" href="pengumuman/{{$xx->id}}" title="">
                                            <h3>{{$xx->judul}}</h3>
                                        </a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
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

