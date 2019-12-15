<!DOCTYPE html>
<html lang="en">


<head>

    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <title> DLH KOTA SERANG </title>


    @include('cssother')

    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });


    </script>



</head>
<body>
<div class="sb-site">
    <div id="loading">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <div id="page-wrapper">
        <div id="page-header" class="bg-gradient-7">
            <div id="mobile-navigation">
                <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span></button>
            </div>
            <div id="header-logo" class="logo-bg" style="background-color: transparent">
                <a href="{{route('admin')}}" class="logo-content-big" style="background-image: url('../image-resources/dlh/dlh.png'); background-size: 100%; background-repeat: no-repeat; top:0; margin: 0px; height: 100%; padding: 10px">

                </a>
                <a href="{{route('admin')}}" class="logo-content-small" style="background-image: url('../image-resources/dlh/dlh.png'); background-size: 100%; background-repeat: no-repeat; top:0; margin: 0px; height: 100%; width: 50%">

                </a>
                <a id="close-sidebar" href="#" title="Close sidebar">
                    <i class="glyph-icon icon-angle-left" style="font-size: x-large"></i>
                </a>
            </div>
            <div id="header-nav-left " style="margin-left: 1em">
                <div class="user-account-btn dropdown">
                    <a href="#" title="My Account" class="user-profile clearfix" data-toggle="dropdown">
                        <i width="28" class="glyph-icon icon-linecons-user" alt="Profile image" style="float: left"></i>
                        <span class=" wow bounceInDown animated" data-transition="5" data-wow-delay="5" style="width: auto; margin-left: 1em"> {{Auth::user()->name}}</span>
                        <i class="glyph-icon icon-angle-down"></i>
                    </a>
                    <div class="dropdown-menu float-left" style="margin-left: 10px">
                        <div class="box-sm">
                            <div class="login-box clearfix">
                                <div class="user-img" style="margin-top: 2em;">
                                    <i  class="glyph-icon icon-linecons-user" style="font-size: 6em"></i>
                                </div>
                                <div class="user-info">
                            <span>
                                {{Auth::user()->name}}
                                <i>Admin</i>
                            </span>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <ul class="reset-ul mrg5B">
                                <li>
                                    <a href="#">
                                        Email: {{ Auth::user()->email }}
                                    </a>
                                </li>
                            </ul>
                            <div class="pad5A button-pane button-pane-alt text-center">
                                <a class="btn btn-block btn-danger btn-outline" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    @include('layouts.menuadmin')
    <div id="page-content-wrapper">
        <script type="text/javascript" src="../../assets/widgets/summernote-wysiwyg/summernote-wysiwyg.js"></script>
        <div id="page-content">
            <div class="panel">
                <div class="panel-body">
                    <div class="ribbon">
                        <div class="bg-blue-alt">PREVIEW</div>
                    </div>
                    <div class="ribbon ribbon-tr">
                        @if($p->tipe == 1)
                            <div class="bg-green">PUBLIKASI</div>
                        @endif
                        @if($p->tipe == 0)
                            <div class="bg-orange">DRAFT</div>
                        @endif
                    </div>
                    <div class="container">
                        <div id="page-title">
                            <h1 align="center">{{$p->judul}}</h1>
                        </div>
                    </div>
                    <p align="center">
                        <img src="../upload/pengumuman/{{$p->foto}}" style="width: 800px; height: 400px"><br><br>
                    <div class="post-meta clearfix">
                        <span class="float-left">
                            <i class="glyph-icon icon-user"></i>
                            Admin DLH Kota Serang
                        </span>
                        <span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
                        <span class="float-left" style="padding-left: 10px">
                            <i class="glyph-icon icon-clock-o"></i>
                            {{$p->created_at->day." ".$p->created_at->monthName." ".$p->created_at->year}}
                        </span>
                    </div>
                    <div class="divider"></div>
                    </p>
                    <div id="summernote">
                        {!! $p->deskripsi !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('jsother')
</div>
</body>
</html>
