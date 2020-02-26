@extends('layouts.layouts')

@section('konten')
    <div id="page-content">
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
        <div class="container">
            <div id="page-title">
                <h2>{{__('Dashboard Settings')}}</h2>
                <p>{{__('Tampilan menu Settings')}}</p>
            </div>
        </div>
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-success hidden"  id="msg_div">
                        <span id="res_message"></span>
                    </div>

                    <br>
                    <div class="dashboard-box dashboard-box-chart bg-white content-box">
                        <div class="content-wrapper">
                            <div class="example-box-wrapper">
                                <table id="datatable1" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">

                                    <tr>
                                        <th>{{__('Notifikasi')}}</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if($ps == 1)
                                        <label>
                                            All Fine
                                        </label>
                                            @endif
                                            @if($ps == 0)
                                                <a href="{{ URL('/repairnotif') }}">
                                        <button class="btn btn-default btn-outline-success">
                                            Repair Notification
                                        </button></a>
                                                @endif
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
@endsection
