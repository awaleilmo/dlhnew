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
                <br>
            </div>
        </div>
        <div class="container">
            <div id="page-title">
                <h2>{{__('Dashboard Dokumen Lingkungan')}}</h2>
                <p>{{__('Tampilan menu dokumen lingkungan')}}</p>
            </div>
        </div>
        <form id="pelaku"  method="post" enctype="multipart/form-data" action="javascript:void(0)" style="display: none;">
            @csrf
            <div id="bar" class="hidden"><img src="img/loading1.gif" style="width: 35%; height: 50%;"></div>
            <div id="frm" class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        Nama Dokumen :
                    </div>
                    <div class="col-md-2">
                        <input  name="nama" type="text" class="form-control" required autocomplete="off" placeholder="Nama Dokumen">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        File :
                    </div>
                    <div class="col-md-2">
                        <input class="hidden" for="file" id="desk1" name="dek">
                        <span class="btn btn-primary btn-file">
                                <span class="fileinput-new" id="labelfile1">Select file</span>
                                <input accept=".pdf,.doc,.docx,.doc,.xls,.xlsx" id="file" name="file" type="file"  onchange="document.getElementById('desk1').value = this.value; document.getElementById('labelfile1').innerHTML = this.value;" required autocomplete="off">
                            </span>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <button id="btn-submit" class="btn btn-success" type="submit">Simpan</button>
                    </div>
                </div>
            </div>
        </form>

        <form id="editor"  method="post" enctype="multipart/form-data" action="javascript:void(0)" style="display: none;">
            @csrf
            <div id="bar" class="hidden"><img src="img/loading1.gif" style="width: 35%; height: 50%;"></div>
            <div id="frm" class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        Nama Dokumen :
                    </div>
                    <div class="col-md-2">
                        <input id="id" type="hidden" name="id">
                        <input id="nama" name="nama" type="text" class="form-control" required autocomplete="off" placeholder="Nama Dokumen">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        File :
                    </div>
                    <div class="col-md-2">
                        <input class="hidden" for="file" id="desk" name="desk">
                        <span class="btn btn-primary btn-file">
                                <span class="fileinput-new" id="labelfile">Select file</span>
                                <input accept=".pdf,.doc,.docx,.doc,.xls,.xlsx" id="file" name="file" type="file"  onchange="document.getElementById('desk').value = this.value; document.getElementById('labelfile').innerHTML = this.value;" autocomplete="off">
                            </span>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <button id="btn-edit" class="btn btn-primary hidden" type="submit">Edit</button>
                    </div>
                </div>
            </div>
        </form>

        <button id="myDIV" class="btn btn-success" onclick="myFunction1()" >Add</button>
        <script>

            function myFunction1() {
                var x = document.getElementById("myDIV");
                var y = document.getElementById("pelaku")
                var yx = document.getElementById("editor")
                if (x.innerHTML === "Add") {
                    x.innerHTML = "Cancel";
                    x.style.borderColor = "#d67520";
                    x.style.background = "#e67e22";
                    y.reset();
                    y.style.display = '';
                    yx.reset();
                    yx.style.display = 'none';
                    $('#labelfile').html('Select File');
                    $('#labelfile1').html('Select File');
                    $('#btn-submit').attr('type','submit')
                } else {
                    x.innerHTML = "Add";
                    y.style.display = 'none';
                    yx.style.display = 'none';
                    x.style.borderColor= "#29b765";
                    x.style.background= "#58d68d";
                    $('#labelfile').html('Select File');
                    $('#labelfile1').html('Select File');
                }
            }
        </script>
        <br>
        <br>
        <table id="datatable1" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>{{__("No")}}</th>
                <th>{{__("Nama")}}</th>
                <th>{{__("Files")}}</th>
                <th>{{__("Action")}}</th>
            </tr>
            </thead>

        </table>
        <br>
        <br>
        <div class="panel panel-body panel-info">

                <div id="page-title">
                    <h2>{{__('Pelaporan User')}}</h2>
                </div>
            <table id="datatable2" style="font-size: small" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>{{__('Tanggal Upload')}}</th>
                    <th>{{__('Tanggal Disetujui')}}</th>
                    <th>{{__('Nama User')}}</th>
                    <th>{{__('File')}}</th>
                    <th>{{__('Keterangan')}}</th>
                    <th>{{__('Status')}}</th>
                </tr>
                </thead>
            </table>
            <br>

        </div>

        <script>

            $("#pelaku").submit(function (e) {

                e.preventDefault();
                var formData = new FormData($(this)[0]);
                $.ajax({
                    url: '{{url("cdokling")}}',
                    type: "POST",
                    data: formData,
                    async: false,
                    cache: false,
                    contentType: false,
                    enctype: 'multipart/form-data',
                    processData: false,
                    success: function (response) {
                        $('#btn-submit').html('Simpan');
                        $('#res_message').show();
                        var oTable = $('#datatable1').dataTable();
                        oTable.fnDraw(false);
                        $('#res_message').html(response.msg);
                        $('#msg_div').removeClass('hidden');
                        document.getElementById("pelaku").reset();
                        document.getElementById("pelaku").style.display='none';
                        $('#bar').addClass('hidden');
                        $('#frm').removeClass('hidden');
                        setTimeout(function () {
                            $('#res_message').addClass('hidden');
                            $('#msg_div').addClass('hidden');
                        }, 3000);
                    },
                    error: function (data) {
                        console.log("Error:", data);
                    }

                });

            });

            $("#editor").submit(function (e) {
                e.preventDefault();
                var formData = new FormData($(this)[0]);
                var x = document.getElementById("myDIV");
                $.ajax({
                    url: '{{url("edokling")}}' ,
                    type: "POST",
                    data: formData,
                    async: false,
                    cache: false,
                    contentType: false,
                    enctype: 'multipart/form-data',
                    processData: false,
                    success: function( response ) {
                        var j = [response.msg];
                        x.innerHTML = "Add";
                        x.style.borderColor= "#29b765";
                        x.style.background= "#58d68d";
                        $('#btn-edit').html('Edit');
                        $('#res_message').show();
                        $('#btn-submit').removeClass('hidden');
                        $('#btn-edit').addClass('hidden');
                        var oTable = $('#datatable1').dataTable();
                        oTable.fnDraw(false);
                        $('#res_message').html(j[0]);
                        $('#msg_div').removeClass('hidden');
                        document.getElementById("editor").reset();
                        document.getElementById("editor").style.display='none';
                        setTimeout(function(){
                            $('#res_message').addClass('hidden');
                            $('#msg_div').addClass('hidden');
                        },3000);
                    },
                    error: function (data) {
                        alert("Error: "+data.statusText + " & " + data.responseJSON.message);
                        console.log(data);
                        console.log();
                    }
                });
            });


            $('body').on('click', '.edit-user', function () {
                var user_id = $(this).attr('id');
                var x = document.getElementById("myDIV")
                $.get("{{url('/sdokling')}}"+ '/' +user_id, function (data) {
                    document.getElementById("pelaku").style.display='none';
                    document.getElementById("editor").style.display='';
                    x.innerHTML = "Cancel";
                    x.style.borderColor = "#d67520";
                    x.style.background = "#e67e22";
                    $('#btn-submit').addClass('hidden');
                    $('#btn-edit').removeClass('hidden');
                    $('#desk').val(data.forms);
                    $('#labelfile').html(data.forms);
                    $('#nama').val(data.nama);
                    $('#id').val(data.id);
                    $("#btn-edit").attr('type','submit');
                    var oTable = $('#datatable1').dataTable();
                    oTable.fnDraw(false);
                })
            });

            $('body').on('click','.hapus-user', function () {
                var user_id=$(this).attr("id");
                $.ajax({
                    type: "GET",
                    url: "{{url('/hdokling')}}",
                    data: 'id='+user_id,
                    success: function(response){
                        $('#res_message').removeClass('hidden');
                        var oTable = $('#datatable1').dataTable();
                        oTable.fnDraw(false);
                        $('#res_message').html(response.msg);
                        $('#msg_div').removeClass('hidden');
                        document.getElementById("pelaku").reset();
                        setTimeout(function(){
                            $('#res_message').addClass('hidden');
                            $('#msg_div').addClass('hidden');
                        },3000);
                    },
                    error: function (data) {
                        console.log("Error:", data);
                    }
                });
            });

            var table = $("#datatable1").dataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{url('tdokling')}}",
                    type: 'GET',
                },
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', },
                    { data: 'nama', name: 'nama', },
                    { data: 'forms', name: 'forms', },
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
                order: [[0, 'asc']],
            });

            $('#datatable2').DataTable({

                serverSide: true,
                ajax: {
                    url: "{{url('tpelap')}}",
                    type: 'GET',
                },
                columns: [
                    { data: 'created_at',   name: 'created_at', },
                    { data: 'penyelesaian', name: 'penyelesaian', },
                    { data: 'nama',         name: 'nama', },
                    { data: 'file',         name: 'file', },
                    { data: 'keterangan',   name: 'keterangan'},
                    { data: 'status',       name: 'status', },
                ],
                order: [[0, 'asc']]
            });

        </script>
    </div>
@endsection
