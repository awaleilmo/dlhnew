@extends('layouts.tampilan')

@section('content')

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
                    <h1 class="hero-heading wow fadeInDown" data-wow-duration="0.6s">Galeri Foto</h1>
                    <p class="hero-text wow bounceInUp" data-wow-duration="0.9s" data-wow-delay="0.2s">Kumpulan Foto Kegiatan DLH Kota Serang</p>
                </div>
                <div class="hero-overlay bg-black"></div>
            </div>
            <div class="container">

            <div class="dashboard-box dashboard-box-chart" style="background-color: transparent">
                <div class="content-wrapper">
                    <div class="example-box-wrapper">
                        @foreach($kl as $p)
                            <div style="margin-left: 5px; margin-right: 5px; float: left">
                                <div class="panel panel-info panel-box content-box" style="margin-left: 10px; margin-right: 10px; margin-top: 10px">
                                    <div class="panel-heading text-uppercase"> {{$p->judul}} </div>
                                    <div id="fotol{{$p->id}}" class="panel-body"> <img onclick="document.getElementById('myModal{{$p->id}}').style.display='block';" id="{{$p->id}}" class="fotol" src="upload/galeri/foto/{{$p->file}}" style="height: 200px; width: 200px"> </div>
                                </div>
                            </div>
                            <div class="modal" id="myModal{{$p->id}}"  style="display: none; margin-top: 7%">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <h2 class="modal-title font-inverse" style="color: black"><strong>{{$p->judul}}</strong> <button type="button" class="btn btn-danger float-right" data-dismiss="modal" onclick="document.getElementById('myModal{{$p->id}}').style.display='none';">X</button></h2>

                                        </div>
                                        <div class="modal-body">
                                            <div class="example-box-wrapper">

                                                <div class="row form-group">
                                                    <div class="col-md-12" style="text-align: center">
                                                        <snap><img src="upload/galeri/foto/{{$p->file}}" style="width: 40%; height: 50%"></snap>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="document.getElementById('myModal{{$p->id}}').style.display='none';">Close</button>
                                        </div>
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
