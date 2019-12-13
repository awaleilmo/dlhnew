@extends('layouts.layouts')

@section('konten')
    <style>
        .modal-backdrop{
            position: inherit;
        }
    </style>
    <div id="page-content">
        <div class="alert alert-success hidden" id="msg_div">
            <div class="bg-green alert-icon">
                <i class="glyph-icon icon-check"></i>
            </div>
            <div class="alert-content">
                <button type="button" style="float: right" onclick="document.getElementById('alert').style.display ='none'" class="close" data-dismiss="alert">×</button>
                <h4 class="alert-title">Sukses</h4>
                <p id="res_message"></p>
            </div>
        </div>
        <div class="container">
            <div id="page-title">
                <h2>{{__('Dashboard Pengawasan')}}</h2>
                <p>{{__('Tampilan menu pengawasan')}}</p>
            </div>
        </div>
    <div role="tabpanel">
        <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="#home1" data-toggle="tab" role="tab">Data Pelaku Usaha</a></li>
            <li><a href="#paneTwo1" data-toggle="tab" role="tab">Data Pelaku Usaha tang Telah Diawasi</a></li>
        </ul>
        <div id="tabContent1" class="tab-content">
            <div class="tab-pane fade in active" id="home1">
                <form id="pelaku"  method="post" action="javascript:void(0)" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    @csrf
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            Tahun :
                        </div>
                        <div class="col-md-2">
                            <input id="idpelaku" type="hidden" name="id">
                            <input id="tahun" name="tahun" type="number" class="form-control" required autocomplete="off" placeholder="Tahun">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2">
                            Jenis Kegiatan :
                        </div>
                        <div class="col-md-2">
                            <input id="jenis" name="jeniskegiatan" type="text" class="form-control" required autocomplete="off" placeholder="Jenis Kegiatan">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2">
                            Jumlah Perusahaan :
                        </div>
                        <div class="col-md-2">
                            <input id="jmlh" name="jumlahperusahaan" type="number" class="form-control" required autocomplete="off" placeholder="Jumlah Perusahaan">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2">
                            <button id="btn-submit" class="btn btn-success" type="submit">Simpan</button>
                            <button type="submit" id="btn-edit" class="btn btn-primary hidden">Edit</button>
                        </div>
                    </div>
                </div>
                </form>
                <button id="myDIV" class="btn btn-success" onclick="myFunction()" data-toggle="modal" data-target="#pelaku">Add</button>
                <script>
                    function myFunction() {
                        var x = document.getElementById("myDIV");
                        if (x.innerHTML === "Add") {
                            x.innerHTML = "Cancel";
                            x.style.borderColor = "#d67520";
                            x.style.background = "#e67e22";
                            document.getElementById("pelaku").reset();
                        } else {
                            x.innerHTML = "Add";
                            x.style.bordeColor= "#29b765";
                            x.style.background= "#58d68d";
                        }
                    }
                </script>
                <br>
                <br>
                <table id="datatable1" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Kegiatan</th>
                    <th>Jumlah Perusahaan</th>
                    <th>Tahun</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
                </table>
            </div>
            <script>
                if ($("#pelaku").length > 0) {
                    $("#btn-submit").click(function (e) {
                        $('#btn-submit').html('Sending..');
                        $.ajax({
                            url: '{{url("cpelaku")}}',
                            type: "POST",
                            data: $('#pelaku').serialize(),
                            success: function (response) {
                                $('#btn-submit').html('Simpan');
                                $('#res_message').show();
                                var oTable = $('#datatable1').dataTable();
                                oTable.fnDraw(false);
                                $('#res_message').html(response.msg);
                                $('#msg_div').removeClass('hidden');
                                document.getElementById("pelaku").reset();
                                document.getElementById("pelaku").style.display='none';
                                setTimeout(function () {
                                    $('#res_message').hide();
                                    $('#msg_div').hide();
                                }, 3000);
                            }
                        });
                    });
                    $("#btn-edit").click(function (e) {
                        $('#btn-edit').html('Sending..');
                        $.ajax({
                            url: '{{url("epelaku")}}' ,
                            type: "POST",
                            data: $('#pelaku').serialize(),
                            success: function( response ) {
                                $('#btn-edit').html('Edit');
                                $('#res_message').show();
                                $('#btn-submit').removeClass('hidden');
                                $('#btn-edit').addClass('hidden');
                                var oTable = $('#datatable1').dataTable();
                                oTable.fnDraw(false);
                                $('#res_message').html(response.msg);
                                $('#msg_div').removeClass('hidden');
                                document.getElementById("pelaku").reset();
                                document.getElementById("pelaku").style.display='none';
                                setTimeout(function(){
                                    $('#res_message').hide();
                                    $('#msg_div').hide();
                                },3000);
                            }
                        });
                    });
                }

                $('body').on('click', '.edit-user', function () {
                    var user_id = $(this).attr('id');
                    $.get("{{url('/spelaku')}}"+ '/' +user_id, function (data) {
                        document.getElementById("pelaku").style.display='';
                        $('#btn-submit').addClass('hidden');
                        $('#btn-edit').removeClass('hidden');
                        $('#jenis').val(data.jeniskegiatan);
                        $('#idpelaku').val(data.id);
                        $('#jmlh').val(data.jumlahperusahaan);
                        $('#tahun').val(data.tahun);
                        $('#res_message').show();
                        var oTable = $('#datatable1').dataTable();
                        oTable.fnDraw(false);
                    })
                });

                $('body').on('click','.hapus-user', function () {
                    var user_id=$(this).attr("id");
                    $.ajax({
                        type: "GET",
                        url: "{{url('/hpelaku')}}",
                        data: 'id='+user_id,
                        success: function(response){
                            $('#res_message').show();
                            var oTable = $('#datatable1').dataTable();
                            oTable.fnDraw(false);
                            $('#res_message').html(response.msg);
                            $('#msg_div').removeClass('hidden');
                            document.getElementById("pelaku").reset();
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

                $("#datatable1").dataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: "{{url('tpelaku')}}",
                        type: 'GET',
                    },
                    columns: [
                        { data: 'DT_RowIndex', name: 'DT_RowIndex', },
                        { data: 'jeniskegiatan', name: 'jeniskegiatan', },
                        { data: 'jumlahperusahaan', name: 'jumlahperusahaan', },
                        { data: 'tahun', name: 'tahun'},
                        {data: 'action', name: 'action', orderable: false},
                    ],
                    order: [[0, 'asc']]
                });
            </script>
            <div class="tab-pane fade" id="paneTwo1">
                <form id="diawasi"  method="post" action="javascript:void(0)" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                   @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                Tahun :
                            </div>
                            <div class="col-md-2">
                                <input id="iddiawasi" type="hidden" name="id">
                                <input id="tahun1" name="tahun" type="number" class="form-control" required autocomplete="off" placeholder="Tahun">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-2">
                                Temuan Hasil Pengawasan :
                            </div>
                            <div class="col-md-2">
                                <input id="temuan" name="temuan" type="text" class="form-control" required autocomplete="off" placeholder="Temuan Hasil Pengawasan">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-2">
                                Kategori Dokumen :
                            </div>
                            <div class="col-md-2">
                                <select name="selek" id="kategori" class="form-control" onchange="li()">
                                    <option value="none"></option>
                                    <option value="memiliki">Memiliki</option>
                                    <option value="taat">Taat</option>
                                </select>
                                <div id="memiliki" class="hidden">
                                    <input id="kategori1" name="kategori1" class="form-control" placeholder="Memiliki" value="Memiliki">
                                    <input id="kategori2" name="kategori2" class="form-control" placeholder="Tidak Memiliki" value="Tidak Memiliki">
                                </div>
                                <div id="taat" class="hidden">
                                    <input id="kategori3" name="kategori3" class="form-control" placeholder="Taat" value="Taat">
                                    <input id="kategori4" name="kategori4" class="form-control" placeholder="Tidak Taat" value="Tidak Taat">
                                </div>
                            </div>
                        </div>
                        <script>
                            function li(){
                                var x = document.getElementById("kategori").value;
                                if(x == 'memiliki'){
                                    $('#memiliki1').removeClass('hidden');
                                    $('#taat1').addClass('hidden');
                                }else if(x == 'taat'){
                                    $('#taat1').removeClass('hidden');
                                    $('#memiliki1').addClass('hidden');
                                }else if(x == 'none'){
                                    $('#taat1').addClass('hidden');
                                    $('#memiliki1').addClass('hidden');
                                }
                            }
                        </script>
                        <br>
                        <div class="row">
                            <div class="col-md-2">
                                Jumlah Perusahaan :
                            </div>
                            <div class="col-md-2 hidden" id="memiliki1">
                                <input id="jumlah1" name="jumlah1" type="number" class="form-control"  autocomplete="off" placeholder="Memiliki">
                                <input id="jumlah2" name="jumlah2" type="number" class="form-control"  autocomplete="off" placeholder="Tidak Memiliki">
                            </div>
                            <div class="col-md-2 hidden" id="taat1">
                                <input id="jumlah3" name="jumlah3" type="number" class="form-control"  autocomplete="off" placeholder="Taat">
                                <input id="jumlah4" name="jumlah4" type="number" class="form-control"  autocomplete="off" placeholder="Tidak Taat">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <button id="btn-submit1" class="btn btn-success" type="submit">Simpan</button>
                                <button type="submit" id="btn-edit1" class="btn btn-primary hidden">Edit</button>
                            </div>
                        </div>
                    </div>
                </form>
                <button id="myDIVw" class="btn btn-success" onclick="myFunctionw()" data-toggle="modal" data-target="#diawasi">Add</button>
                <script>
                    function myFunctionw() {
                        var x = document.getElementById("myDIVw");
                        if (x.innerHTML === "Add") {
                            x.innerHTML = "Cancel";
                            x.style.borderColor = "#d67520";
                            x.style.background = "#e67e22";
                            document.getElementById("diawasi").reset();
                        } else {
                            x.innerHTML = "Add";
                            x.style.bordeColor= "#29b765";
                            x.style.background= "#58d68d";
                        }
                    }
                </script>
                <br>
                <br>
                <table id="datatable2" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Temuan Hasil Pengawasan</th>
                        <th>Kategori Dokumen</th>
                        <th>Jumlah Perusahaan</th>
                        <th>Tahun</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <script>
                if ($("#diawasi").length > 0) {
                    $("#btn-submit1").click(function (e) {
                        $('#btn-submit1').html('Sending..');
                        $.ajax({
                            url: '{{url("cdiawasi")}}',
                            type: "POST",
                            data: $('#diawasi').serialize(),
                            success: function (response) {
                                $('#btn-submit1').html('Simpan');
                                $('#res_message').show();
                                var oTable = $('#datatable2').dataTable();
                                oTable.fnDraw(false);
                                $('#res_message').html(response.msg);
                                $('#msg_div').removeClass('hidden');
                                document.getElementById("diawasi").reset();
                                document.getElementById("diawasi").style.display = 'none';
                                setTimeout(function () {
                                    $('#res_message').hide();
                                    $('#msg_div').hide();
                                }, 3000);
                            }
                        });
                    });
                    $("#btn-edit1").click(function (e) {
                        $('#btn-edit1').html('Sending..');
                        $.ajax({
                            url: '{{url("ediawasi")}}' ,
                            type: "POST",
                            data: $('#diawasi').serialize(),
                            success: function( response ) {
                                $('#btn-edit1').html('Edit');
                                $('#res_message').show();
                                $('#btn-submit1').removeClass('hidden');
                                $('#btn-edit1').addClass('hidden');
                                var oTable = $('#datatable2').dataTable();
                                oTable.fnDraw(false);
                                $('#res_message').html(response.msg);
                                $('#msg_div').removeClass('hidden');
                                document.getElementById("diawasi").reset();
                                document.getElementById("diawasi").style.display='none';
                                setTimeout(function(){
                                    $('#res_message').hide();
                                    $('#msg_div').hide();
                                },3000);
                            }
                        });
                    });
                }

                $('body').on('click', '.edit-user1', function () {
                    var user_id = $(this).attr('id');
                    $.get("{{url('/sdiawasi')}}"+ '/' +user_id, function (data) {
                        document.getElementById("diawasi").style.display='';
                        $('#btn-submit1').addClass('hidden');
                        $('#btn-edit1').removeClass('hidden');
                        $('#iddiawasi').val(data.id);
                        $('#temuan').val(data.temuan);
                        $('#tahun1').val(data.tahun);
                        if(data.kategori == 'Memiliki,Tidak Memiliki'){
                            $('#kategori').select().val('memiliki');
                            $('#memiliki1').removeClass('hidden');
                            $('#taat1').addClass('hidden');
                            $('#jumlah1').val(data.jumlah[0]);
                            $('#jumlah2').val(data.jumlah[1]);
                        }else if(data.kategori == 'Taat,Tidak Taat'){
                            $('#kategori').select().val('taat');
                            $('#taat1').removeClass('hidden');
                            $('#memiliki1').addClass('hidden');
                            $('#jumlah3').val(data.jumlah[0]);
                            $('#jumlah4').val(data.jumlah[1]);
                        }
                        $('#res_message').show();
                        var oTable = $('#datatable1').dataTable();
                        oTable.fnDraw(false);
                    })
                });
                $('body').on('click','.hapus-user1', function () {
                    var user_id=$(this).attr("id");
                    $.ajax({
                        type: "GET",
                        url: "{{url('/hdiawasi')}}",
                        data: 'id='+user_id,
                        success: function(response){
                            $('#res_message').show();
                            var oTable = $('#datatable2').dataTable();
                            oTable.fnDraw(false);
                            $('#res_message').html(response.msg);
                            $('#msg_div').removeClass('hidden');
                            document.getElementById("diawasi").reset();
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

                $("#datatable2").dataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: "{{url('tdiawasi')}}",
                        type: 'GET',
                    },
                    columns: [
                        { data: 'DT_RowIndex', name: 'DT_RowIndex', },
                        { data: 'temuan', name: 'temuan', },
                        { data: 'kategori', name: 'kategori', },
                        { data: 'jumlah', name: 'jumlah', },
                        { data: 'tahun', name: 'tahun'},
                        {data: 'action', name: 'action', orderable: false},
                    ],
                    order: [[0, 'asc']]
                });
            </script>
        </div>
    </div>
    </div>
@endsection
