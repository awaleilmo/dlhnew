@extends('layouts.layouts')

@section('konten')
    <script>
        $(window).load(function () {
            $(".note-insert").addClass("hidden");
        });
    </script>
    <div id="page-content">
        @if ($message = Session::get('msg'))
            <div class="alert alert-success hidden" id="msg_div">
                <div class="bg-green alert-icon">
                    <i class="glyph-icon icon-check"></i>
                </div>
                <div class="alert-content">
                    <button type="button" style="float: right" onclick="document.getElementById('alert').style.display ='none'" class="close" data-dismiss="alert">×</button>
                    <h4 class="alert-title">Sukses</h4>
                    <p id="res_message">{{$message}}</p>
                    <br>
                </div>
            </div>
        @endif
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
                <h2>{{__('Dashboard Pengumuman')}}</h2>
                <p>{{__('Tampilan menu Pengumuman')}}</p>
            </div>
        </div>
            <!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css">-->
            <script type="text/javascript" src="../../assets/widgets/summernote-wysiwyg/summernote-wysiwyg.js"></script>
            <script type="text/javascript">
                /* WYSIWYG editor */

                $(function() { "use strict";
                    $('.wysiwyg-editor').summernote({
                        height: 300,
                    })

                });

                $(function() { "use strict";
                    $('.wysiwyg').summernote({
                        height: 350
                    });
                });
            </script>
            <button id="myDIV" class="btn btn-success" onclick="myFunction1()" >Add</button>
            <script>

                function myFunction1() {
                    var x = document.getElementById("myDIV");
                    var u = document.getElementById("datatable1");
                    var y = document.getElementById("pelaku");
                    var yx = document.getElementById("editor");
                    var k = $('.note-editable');
                    if (x.innerHTML === "Add") {
                        x.innerHTML = "Cancel";
                        x.style.borderColor = "#d67520";
                        x.style.background = "#e67e22";
                        y.reset();
                        y.style.display = '';
                        yx.reset();
                        u.style.display = 'none';
                        //yx.style.display = 'none';
                        $('#labelfile').html('Select File');
                        $('#labelfile1').html('Select File');
                        $('#btn-submit').attr('type','submit');
                    } else {

                        x.innerHTML = "Add";
                        y.style.display = 'none';
                        yx.style.display = 'none';
                        x.style.borderColor= "#29b765";
                        x.style.background= "#58d68d";
                        u.style.display = '';
                        $('#labelfile').html('Select File');
                        $('#labelfile1').html('Select File');
                        k.html("");
                    }
                }
            </script>
            <br>
            <br>
            <div id="table">
                <table id="datatable1" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                </table>
            </div>
            <form class="panel" id="pelaku" style="display: none" method="post" action="{{url('cpengumuman')}}" enctype="multipart/form-data">
                @csrf
                <div class="panel-body">
                    <div class="example-box-wrapper">
                        <input name="judul" class="form-control" aria-label="Judul" required placeholder="Judul">
                    </div>
                    <div class="example-box-wrapper">
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
                    <div class="example-box-wrapper">
                        <textarea name="konten" class="form-control wysiwyg"></textarea>
                    </div>
                    <div class="example-box-wrapper">
                        <button type="submit" name="publish"  class="btn btn-success" id="btn-publish">
                        <span class="glyph-icon icon-separator">
                            <i class="glyph-icon icon-paper-plane"></i>
                        </span>
                            <span class="button-content">
                            Publikasikan
                        </span>
                        </button>
                        <button type="submit" name="draft"  class="btn btn-warning" id="btn-draft">
                        <span class="glyph-icon icon-separator">
                            <i class="glyph-icon icon-paper-plane-o"></i>
                        </span>
                            <span class="button-content">
                            Draft
                        </span>
                        </button>
                    </div>
                </div>
            </form>
            <form class="panel" id="editor" style="display: none" method="post" action="{{url('epengumuman')}}" enctype="multipart/form-data">
                @csrf
                <div class="panel-body">
                    <div class="example-box-wrapper">
                        <input id="id" type="hidden" name="id">
                        <input id="judul" name="judul" class="form-control" aria-label="Judul" required placeholder="Judul">
                    </div>
                    <div class="example-box-wrapper">
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
                    <div class="example-box-wrapper">
                        <textarea id="konten" name="konten" class="form-control wysiwyg"></textarea>
                    </div>
                    <div class="example-box-wrapper">
                        <button type="submit" name="publish"  class="btn btn-success" id="btn-publish">
                        <span class="glyph-icon icon-separator">
                            <i class="glyph-icon icon-paper-plane"></i>
                        </span>
                            <span class="button-content">
                            Publikasikan
                        </span>
                        </button>
                        <button type="submit" name="draft"  class="btn btn-warning" id="btn-draft">
                        <span class="glyph-icon icon-separator">
                            <i class="glyph-icon icon-paper-plane-o"></i>
                        </span>
                            <span class="button-content">
                            Draft
                        </span>
                        </button>
                    </div>
                </div>
            </form>
            <script>
                $('body').on('click', '.edit-user', function () {
                    var user_id = $(this).attr('id');
                    var x = document.getElementById("myDIV");
                    var u = document.getElementById("table");
                    var y = document.getElementById("pelaku");
                    var yx = document.getElementById("editor");
                    x.innerHTML = "Cancel";
                    x.style.borderColor = "#d67520";
                    x.style.background = "#e67e22";
                    $.get("{{url('/spengumuman')}}"+ '/' +user_id, function (data) {
                        y.style.display='none';
                        document.getElementById("datatable1").style.display='none';
                        yx.style.display='';
                        $('#btn-submit').addClass('hidden');
                        $('#btn-edit').removeClass('hidden');
                        $('#judul').val(data.judul);
                        $('#desk').val(data.foto);
                        $('#labelfile').html(data.foto);
                        $('.note-editable').html(data.deskripsi );
                        $('#id').val(data.id);
                        var oTable = $('#datatable1').dataTable();
                        oTable.fnDraw(false);
                    })
                });

                $('body').on('click','.hapus-user', function () {
                    var user_id=$(this).attr("id");
                    $.ajax({
                        type: "GET",
                        url: "{{url('/hpengumuman')}}",
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
                        url: "{{url('tpengumuman')}}",
                        type: 'GET',
                    },

                    columns: [
                        { data: 'DT_RowIndex', name: 'DT_RowIndex', },
                        { data: 'judul', name: 'judul', },
                        { data: 'tipe', name: 'tipe', },
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ],
                    order: [[0, 'asc']],
                });
            </script>

    </div>
@endsection
