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
                <h2>{{__('Dashboard Pengaduan')}}</h2>
                <p>{{__('Tampilan menu pengaduan')}}</p>
            </div>
        </div>
        <form id="contact_us" method="post" action="{{url('hitpengaduan')}}" >
            @csrf
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
                                    @foreach($pengaduan as $p)
                                        <div class="modal fade" id="myModal{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title"><strong>{{__('Detail Pengaduan')}}</strong></h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div style="height: 50px">
                                                                <a href="{{url('pengaduan')}}/{{$p->id}}" class="btn btn-primary" style="float: right"><i class="glyph-icon icon-print"></i> Print </a>
                                                        </div>
                                                        <div class="example-box-wrapper">
                                                            <div class="row form-group">
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <strong>{{__("Tanggal")}}</strong>
                                                                </div>
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <snap>{{$p->created_at}}</snap>

                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <strong>{{__("Nama Pengadu")}}</strong>
                                                                </div>
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <snap>{{$p->nama}}</snap>

                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <strong>{{__("Alamat Pengadu")}}</strong>
                                                                </div>
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <snap>{{$p->alamat}}</snap>

                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <strong>{{__("No HP Pengadu")}}</strong>
                                                                </div>
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <snap>{{$p->notelp}}</snap>

                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <strong>{{__("Alamat Kejadian")}}</strong>
                                                                </div>
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <snap>{{$p->alamatkejadian}}</snap>

                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <strong>{{__("Jenis Kegiatan")}}</strong>
                                                                </div>
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <snap>{{$p->jeniskegiatan}}</snap>

                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <strong>{{__("Nama Kegiatan")}}</strong>
                                                                </div>
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <snap>{{$p->namakegiatan}}</snap>
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <strong>{{__("Waktu Kejadian")}}</strong>
                                                                </div>
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <snap>{{$p->waktu}}</snap>

                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <strong>{{__("Uraian Kejadian")}}</strong>
                                                                </div>
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <snap>{{$p->uraiankejadian}}</snap>

                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <strong>{{__("Dampak")}}</strong>
                                                                </div>
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <snap>{{$p->dampak}}</snap>

                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <strong>{{__("Penyelesaian")}}</strong>
                                                                </div>
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <snap>{{$p->penyelesaian}}</snap>

                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <strong>{{__("Nama Instansi Dan Tanggal")}}</strong>
                                                                </div>
                                                                <div class="col-md-5" style="text-align: left">
                                                                    @php
                                                                        $dt = explode(",", $p->namainstansi);
                                                                        $ds = explode(",", $p->tgl);
                                                                    @endphp
                                                                    <div class="col-md-6">
                                                                    <strong>Nama Instansi</strong>
                                                                    @foreach($dt as $dd)
                                                                            <br><br><snap>{{$dd}}</snap>
                                                                    @endforeach
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <strong>Tanggal Pengaduan</strong>
                                                                        @foreach($ds as $dx)
                                                                            <br><br><snap>{{$dx}}</snap>
                                                                        @endforeach
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <strong>{{__("Foto")}}</strong>
                                                                </div>
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <snap><img src="upload/pengaduan/{{$p->foto}}" style="width: 200px; height: 200px"></snap>

                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <strong>{{__("Lokasi")}}</strong>
                                                                </div>
                                                                <div class="col-md-5" style="text-align: left">
                                                                    <a href="https://www.google.com/maps/dir/?api=1&destination={{$p->lokasi}}" target="_blank" style="color: deepskyblue">Petunjuk Arah</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>{{__('Tanggal Pengaduan')}}</th>
                                        <th>{{__('Tanggal Penyelesaian')}}</th>
                                        <th>{{__('Nama Pengadu')}}</th>
                                        <th>{{__('Alamat Pengadu')}}</th>
                                        <th>{{__('NO HP')}}</th>
                                        <th>{{__('Status')}}</th>
                                        <th>{{__('Action')}}</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th></th>
                                        <th>{{__('Tanggal Pengaduan')}}</th>
                                        <th>{{__('Tanggal Penyelesaian')}}</th>
                                        <th>{{__('Nama Pengadu')}}</th>
                                        <th>{{__('Alamat Pengadu')}}</th>
                                        <th>{{__('NO HP')}}</th>
                                        <th>{{__('Status')}}</th>
                                        <th>{{__('Action')}}</th>
                                    </tr>
                                    </tfoot>
                                </table>
                                    <input type="submit" class="btn btn-success float-left" value="Hit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>

                //////////////
                $('#datatable1').DataTable({

                    serverSide: true,
                    ajax: {
                        url: "{{url('tpengaduan')}}",
                        type: 'GET',
                    },
                    columns: [
                        { data: 'ceked',        name: 'ceked', },
                        { data: 'created_at',   name: 'created_at', },
                        { data: 'penyelesaian',         name: 'penyelesaian', },
                        { data: 'nama',         name: 'nama', },
                        { data: 'alamat',       name: 'alamat', },
                        { data: 'notelp',       name: 'notelp', },
                        { data: 'status',       name: 'status', },
                        { data: 'action',       name: 'action', },
                    ],
                    order: [[0, 'asc']]
                });

                /////////////
                $('body').on('click', '.edit-user', function () {
                    var user_id = $(this).attr('id');
                    $.get("{{url('/kategori/edit/')}}"+ '/' +user_id, function (data) {
                        document.getElementById("add").style.display = '';
                        $('#btn-submit').addClass('hidden');
                        $('#btn-edit').removeClass('hidden');
                        $('#nama').val(data.nama);
                        $('#idkat').val(data.id);
                        $('#res_message').show();
                        var oTable = $('#datatable1').dataTable();
                        oTable.fnDraw(false);
                    })
                });
                /////////////
                $('body').on('click','.hapus-user', function () {
                    var user_id=$(this).attr("id");


                    $.ajax({
                        type: "GET",
                        url: "{{url('/kathap')}}",
                        data: 'id='+user_id,
                        success: function(response){
                            $('#res_message').show();
                            var oTable = $('#datatable1').dataTable();
                            oTable.fnDraw(false);
                            $('#res_message').html(response.msg);
                            $('#msg_div').removeClass('hidden');
                            document.getElementById("add").style.display = 'none';
                            document.getElementById("contact_us").reset();
                            setTimeout(function(){
                                $('#res_message').hide();
                                $('#msg_div').hide();
                            },3000);
                        },
                        error: function (data) {
                            console.log("Error:", data);
                        }
                    });
                });
            </script>
        </form>
    </div>
@endsection
