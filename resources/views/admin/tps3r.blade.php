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
                <h2>{{__('Dashboard TPS 3R')}}</h2>
                <p>{{__('tampilan menu tps 3r')}}</p>
            </div>
        </div>
        <form id="pelaku"  method="post" enctype="multipart/form-data" action="javascript:void(0)" style="display: none;">
            @csrf
            <div id="bar" class="hidden"><img src="img/loading1.gif" style="width: 35%; height: 50%;"></div>
            <div id="frm" class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        Nama :
                    </div>
                    <div class="col-md-2">
                        <input name="nama" type="text" class="form-control" required autocomplete="off" placeholder="Nama">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        Nama Pengurus :
                    </div>
                    <div class="col-md-2">
                        <input name="namapengurus" type="text" class="form-control" required autocomplete="off" placeholder="Nama Pengurus">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        Alamat :
                    </div>
                    <div class="col-md-2">
                        <textarea  name="alamat" class="form-control" required autocomplete="off" placeholder="Alamat"></textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        Status :
                    </div>
                    <div class="col-md-2">
                        <input name="status" type="text" class="form-control" required autocomplete="off" placeholder=Status>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        Alat :
                    </div>
                    <div class="col-md-2">
                        <input name="alat" type="text" class="form-control" required autocomplete="off" placeholder="Alat">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        Kendala :
                    </div>
                    <div class="col-md-2">
                        <input name="kendala" type="text" class="form-control" required autocomplete="off" placeholder="Kendala">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        Keterangan :
                    </div>
                    <div class="col-md-2">
                        <input name="keterangan" type="text" class="form-control" required autocomplete="off" placeholder="Keterangan">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        Foto :
                    </div>
                    <div class="col-md-2">
                        <input class="hidden" for="foto" id="deskq" name="dek">
                        <span class="btn btn-primary btn-file">
                                <span class="fileinput-new" id="labelfileq">Select file</span>
                                <input accept="image/*" id="foto" name="foto" type="file"  onchange="document.getElementById('deskq').value = this.value; document.getElementById('labelfileq').innerHTML = this.value;" required autocomplete="off">
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
                        Nama :
                    </div>
                    <div class="col-md-2">
                        <input id="id" type="hidden" name="id">
                        <input id="nama" name="nama" type="text" class="form-control" required autocomplete="off" placeholder="Nama">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        Nama Pengurus :
                    </div>
                    <div class="col-md-2">
                        <input name="namapengurus" id="pengurus" type="text" class="form-control" required autocomplete="off" placeholder="Nama Pengurus">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        Alamat :
                    </div>
                    <div class="col-md-2">
                        <textarea id="alamat"  name="alamat" class="form-control" required autocomplete="off" placeholder="Alamat"></textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        Status :
                    </div>
                    <div class="col-md-2">
                        <input name="status" id="status" type="text" class="form-control" required autocomplete="off" placeholder=Status>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        Alat :
                    </div>
                    <div class="col-md-2">
                        <input name="alat" type="text" id="alat" class="form-control" required autocomplete="off" placeholder="Alat">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        Kendala :
                    </div>
                    <div class="col-md-2">
                        <input name="kendala" id="kendala" type="text" class="form-control" required autocomplete="off" placeholder="Kendala">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        Keterangan :
                    </div>
                    <div class="col-md-2">
                        <input name="keterangan" id="keterangan" type="text" class="form-control" required autocomplete="off" placeholder="Keterangan">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        Foto :
                    </div>
                    <div class="col-md-2">
                        <input class="hidden" for="foto" id="desk" name="desk">
                        <span class="btn btn-primary btn-file">
                                <span class="fileinput-new" id="labelfile">Select file</span>
                                <input accept="image/*" id="foto" name="foto" type="file"  onchange="document.getElementById('desk').value = this.value; document.getElementById('labelfile').innerHTML = this.value;" autocomplete="off">
                            </span>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <button type="submit" id="btn-edit" class="btn btn-primary hidden">Edit</button>
                    </div>
                </div>
            </div>
        </form>
        <button id="myDIV" class="btn btn-success" onclick="myFunction()" >Add</button>
        <script>

            function myFunction() {
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
                <th valign="top">{{__("No")}}</th>
                <th valign="top">{{__("Nama")}}</th>
                <th valign="top">{{__("Nama Pengurus")}}</th>
                <th valign="top">{{__("Alamat")}}</th>
                <th valign="top">{{__("Status")}}</th>
                <th valign="top">{{__("Alat")}}</th>
                <th valign="top">{{__("Kendala")}}</th>
                <th valign="top">{{__("Keterangan")}}</th>
                <th valign="top">{{__("Foto")}}</th>
                <th valign="top">{{__("Action")}}</th>
            </tr>
            </thead>

        </table>

        <script>

            $("#pelaku").submit(function (e) {

                e.preventDefault();
                var formData = new FormData($(this)[0]);
                var x = document.getElementById("myDIV");
                $.ajax({
                    url: '{{url("ctps3r")}}',
                    type: "POST",
                    data: formData,
                    async: false,
                    cache: false,
                    contentType: false,
                    enctype: 'multipart/form-data',
                    processData: false,
                    success: function (response) {
                        x.innerHTML = "Add";
                        x.style.borderColor= "#29b765";
                        x.style.background= "#58d68d";
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
                        console.log("Error:", data.statusText);
                        console.log("Error:", data.responseJSON.message);
                    }

                });
            });
            $("#editor").submit(function (e) {
                e.preventDefault();
                var formData = new FormData($(this)[0]);
                var x = document.getElementById("myDIV");
                $.ajax({
                    url: '{{url("etps3r")}}' ,
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
                        console.log(data);
                        alert("Error: "+data.statusText + " & " + data.responseJSON.message);

                    }
                });

            });

            $('body').on('click','.fotol',function () {
                const id = $(this).attr('id');
                let x = document.getElementById(id).style;
                let y = document.getElementById('fotol'+id).style;
                if (x.width === "800px") {
                    x.width = '150px';
                    x.height = '100px';
                    x.marginLeft = '0%';
                    x.marginTop = '0%';
                    x.transition = '1s'
                    y.position = '';
                    y.width = '0%';
                    y.height = '0%';
                    y.marginLeft = '0%';
                    y.marginTop = '0%';
                    y.backgroundColor = "";
                } else {
                    x.width = '800px';
                    x.height = '600px';
                    x.marginLeft = '30%';
                    x.marginTop = '3%';
                    x.transition = '1s'
                    y.position = 'absolute';
                    y.width = '90%';
                    y.height = '113%';
                    y.marginLeft = '-80%';
                    y.marginTop = '-22%';
                    y.backgroundColor = "transparent";
                }
            });

            $('body').on('click', '.edit-user', function () {
                var user_id = $(this).attr('id');
                var x = document.getElementById("myDIV")
                $.get("{{url('/stps3r')}}"+ '/' +user_id, function (data) {
                    document.getElementById("pelaku").style.display='none';
                    document.getElementById("editor").style.display='';
                    x.innerHTML = "Cancel";
                    x.style.borderColor = "#d67520";
                    x.style.background = "#e67e22";
                    $('#btn-submit').addClass('hidden');
                    $('#btn-edit').removeClass('hidden');
                    $('#keterangan').val(data.keterangan);
                    $('#alamat').val(data.alamat);
                    $('#status').val(data.status);
                    $('#kendala').val(data.kendala);
                    $('#labelfile').html(data.foto);
                    $('#desk').val(data.foto);
                    $('#alat').val(data.alat);
                    $('#nama').val(data.nama);
                    $('#pengurus').val(data.namapengurus);
                    $('#id').val(data.id);
                    var oTable = $('#datatable1').dataTable();
                    oTable.fnDraw(false);
                })
            });

            $('body').on('click','.hapus-user', function () {
                var user_id=$(this).attr("id");
                $.ajax({
                    type: "GET",
                    url: "{{url('/htps3r')}}",
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
                    url: "{{url('ttps3r')}}",
                    type: 'GET',
                },
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', },
                    { data: 'nama', name: 'nama', },
                    { data: 'namapengurus', name: 'namapengurus', },
                    { data: 'alamat', name: 'alamat', },
                    { data: 'status', name: 'status'},
                    { data: 'alat', name: 'alat'},
                    { data: 'kendala', name: 'kendala'},
                    { data: 'keterangan', name: 'keterangan', },
                    { data: 'foto', name: 'foto'},
                    { data: 'action', name: 'action', orderable: false, searchable: false},
                ],
                order: [[0, 'asc']],
            });

        </script>

    </div>
@endsection
