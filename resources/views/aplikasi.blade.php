@extends('layouts.tampilan')

@section('content')
    <div class="hero-box bg-white hero-box-smaller ">
        <div class="container">
            <h2 class="hero-heading wow fadeInDown animated animated" data-wow-duration="0.6s" style="visibility: visible; animation-duration: 0.6s;"><strong>Aplikasi SiHerang</strong></h2>
            <div class="panel panel-info">
                <div class="panel-body row">
                    <div class="col-md-6">
                        <img src="../../image-resources/dlh/hp.jpg" style="height: 80%; border: solid gray 1px">
                    </div>
                    <div class="col-md-6">
                        <a href="../../upload/SiHerang_PS.apk" download="SiHerang_PS.apk" class="btn btn-success"><i class="glyph-icon icon-download"></i> Download</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
