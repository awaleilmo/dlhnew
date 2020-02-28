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
                <h2>{{__('Dashboard Foto')}}</h2>
                <p>{{__('tampilan Foto')}}</p>
            </div>
        </div>
        <form id="pelaku"  method="post" enctype="multipart/form-data" action="cfoto" style="display: none;">
            @csrf
            <div id="bar" class="hidden"><img src="img/loading1.gif" style="width: 35%; height: 50%;"></div>
            <div id="frm" class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        Judul :
                    </div>
                    <div class="col-md-2">
                        <input name="judul" type="text" class="form-control" required autocomplete="off" placeholder="Judul">
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
                                <input accept="image/*" id="foto" name="foto" type="file"  onchange="document.getElementById('deskq').value = this.value; document.getElementById('labelfileq').innerHTML = this.value;"  autocomplete="off">
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
        <form id="editor"  method="post" enctype="multipart/form-data" action="efoto" style="display: none;">
            @csrf
            <div id="bar1" class="hidden"><img src="img/loading1.gif" style="width: 35%; height: 50%;"></div>
            <div id="frm1" class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        Judul :
                    </div>
                    <div class="col-md-2">
                        <input id="judul" name="judul" type="text" class="form-control" required autocomplete="off" placeholder="Judul">
                        <input id="id" name="id" type="text" class="hidden" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        Foto :
                    </div>
                    <div class="col-md-2">
                        <input class="hidden" for="foto" id="desk1" name="desk">
                        <span class="btn btn-primary btn-file">
                                <span class="fileinput-new" id="labelfileq1">Select file</span>
                                <input accept="image/*" id="foto1" name="foto" type="file"  onchange="document.getElementById('desk1').value = this.value; document.getElementById('labelfileq1').innerHTML = this.value;"  autocomplete="off">
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
        @foreach($kl as $p)
            <div style="margin-left: 5px; margin-right: 5px; float: left">
            <div class="panel panel-info panel-box" style="margin-left: 10px; margin-right: 10px">
                <div class="panel-heading text-uppercase"> {{$p->judul}} </div>
                <div class="panel-body"> <img src="upload/galeri/foto/{{$p->file}}" style="height: 200px; width: 200px"> </div>
                <div class="panel-footer" style="float: right"> <a href="javascript:void(0)"  class=" demo-icon edit-user"  id="{{$p->id}}" style="font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-pencil"></i></a>
                    <a href="{{url('/hfoto')}}/{{$p->id}}" class=" demo-icon hapus-user" id="{{$p->id}}" style="color:red; font-size: 19px; line-height: 30px; width: 30px; height: 30px; margin: 2px"><i class="glyph-icon icon-trash"></i></a> </div>
            </div>
            </div>
        @endforeach
        {{ $kl->links() }}
        <script>






            $('body').on('click', '.edit-user', function () {
                var user_id = $(this).attr('id');
                var x = document.getElementById("myDIV")
                $.get("{{url('/sfoto')}}"+ '/' +user_id, function (data) {
                    document.getElementById("pelaku").style.display='none';
                    document.getElementById("editor").style.display='';
                    x.innerHTML = "Cancel";
                    x.style.borderColor = "#d67520";
                    x.style.background = "#e67e22";
                    $('#btn-submit').addClass('hidden');
                    $('#btn-edit').removeClass('hidden');
                    $('#labelfileq1').html(data.file);
                    $('#desk1').val(data.file);
                    $('#judul').val(data.judul);
                    $('#id').val(data.id);
                    var oTable = $('#datatable1').dataTable();
                    oTable.fnDraw(false);
                })
            });





        </script>

    </div>
@endsection
