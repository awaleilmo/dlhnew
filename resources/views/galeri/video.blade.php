@extends('layouts.tampilan')

@section('content')
    <style>
        .iti{
            color: lime;
            font-size: 5em;
            padding-top: 15%;
            opacity: 0.5;
        }
        .iti:hover{
            color: red;
            font-size: 7em;
            padding-top: 10%;
            opacity: 1;
            transition: 0.5s ease-in-out;
        }
    </style>
    <div class="hero-box hero-box-smaller bg-gradient-3 font-inverse">
        @if ($message = Session::get('alert'))
            <div id="alert" class="alert alert-success alert-block" style="text-align: center">
                <button type="button" onclick="document.getElementById('alert').style.display ='none'" class="close" data-dismiss="alert">×</button>
                <strong>{{$message}}</strong>
            </div>
        @endif
        @if ($message = Session::get('gagal'))
            <div id="alert" class="alert alert-danger alert-block" style="text-align: center">
                <button type="button" onclick="document.getElementById('alert').style.display ='none'" class="close" data-dismiss="alert">×</button>
                <strong>{{$message}}</strong>
            </div>
        @endif
        <script type="text/javascript" src="assets/widgets/datepicker/datepicker.js"></script>
        <script type="text/javascript">
            /* Datepicker bootstrap */

            $(function() { "use strict";
                $('.bootstrap-datepicker').bsdatepicker({
                    format: 'dd-mm-yyyy'
                });
            });

        </script>
        <script type="text/javascript" src="assets/widgets/timepicker/timepicker.js"></script>
        <script type="text/javascript">

            /* Timepicker */

            $(function() { "use strict";
                $('.timepicker-example').timepicker();
            });
        </script>

        <div class="hero-box hero-box-smaller full-bg-9 font-inverse"  style="margin-top: -85px" data-top-bottom="background-position: 50% 0px;" data-bottom-top="background-position: 50% -600px;">
            <div class="container">
                <h1 class="hero-heading wow fadeInDown" data-wow-duration="0.6s">Galeri Video</h1>
                <p class="hero-text wow bounceInUp" data-wow-duration="0.9s" data-wow-delay="0.2s">Kumpulan Video Kegiatan DLH Kota Serang</p>
            </div>
            <div class="hero-overlay bg-black"></div>
        </div>
        <div class="container">

            <div class="dashboard-box dashboard-box-chart" style="background-color: transparent">
                <div class="content-wrapper">
                    <div class="example-box-wrapper">

                        @foreach($kl as $p)
                            <div style="margin-left: 5px; margin-right: 5px; float: left; margin-top:10px;">
                                <div class="panel panel-info panel-box content-box" style="width:350px; height: 250px; margin-left: 10px; margin-right: 10px">
                                    <div class="panel-heading text-uppercase" style="font-size: small"> @php
                                            $k = $p->judul;
                                            echo substr( $k, 0,40);
                                            @endphp... </div>
                                    <div id="fotol{{$p->id}}" class="panel-body">
                                        <a href="{{url('video')}}/{{$p->id}}" style="cursor: pointer">
                                            <i class="glyph-icon icon-play-circle iti" style="position: absolute;  width: 100%; "></i>
                                            <img style="position: static" width="320" height="200" src="http://img.youtube.com/vi/{{$p->link}}/mqdefault.jpg" />

                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div style="display: block; width: 100%; float: left; background-color: white; border-radius: 10px; margin-top: 10px">
                               {{ $kl->links() }}
                        </div>


                    </div>

                </div>
            </div>
        </div>

    </div>


@endsection
