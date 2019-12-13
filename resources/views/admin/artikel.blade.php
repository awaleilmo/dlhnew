@extends('layouts.layouts')

@section('konten')
    <div id="page-content">
        <div class="container">
            <div id="page-title">
                <h2>{{__('Dashboard Artikel')}}</h2>
                <p>{{__('Tampilan menu artikel')}}</p>
            </div>
        </div>
        <!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css">-->
        <script type="text/javascript" src="../../assets/widgets/summernote-wysiwyg/summernote-wysiwyg.js"></script>
        <script type="text/javascript">
            /* WYSIWYG editor */

            $(function() { "use strict";
                $('.wysiwyg-editor').summernote({
                    height: 350
                });
            });
            $(function() { "use strict";
                $('.wysiwyg-editor-air').summernote({
                    airMode: true
                });
            });
        </script>
        <button id="myDIV" class="btn btn-success" onclick="myFunction1()" >Add</button>
        <script>

            function myFunction1() {
                var x = document.getElementById("myDIV");
                var u = document.getElementById("table");
                var y = document.getElementById("pelaku");
                //var yx = document.getElementById("editor");
                if (x.innerHTML === "Add") {
                    x.innerHTML = "Cancel";
                    x.style.borderColor = "#d67520";
                    x.style.background = "#e67e22";
                    y.reset();
                    y.style.display = '';
                    //yx.reset();
                    u.style.display = 'none';
                    //yx.style.display = 'none';
                    $('#labelfile').html('Select File');
                    $('#labelfile1').html('Select File');
                    $('#btn-submit').attr('type','submit')
                } else {
                    x.innerHTML = "Add";
                    y.style.display = 'none';
                    //yx.style.display = 'none';
                    x.style.borderColor= "#29b765";
                    x.style.background= "#58d68d";
                    u.style.display = '';
                    $('#labelfile').html('Select File');
                    $('#labelfile1').html('Select File');
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
                <th>Action</th>
            </tr>
            </thead>
        </table>
        </div>
        <form class="panel" id="pelaku" style="display: none" method="post" action="{{url('cartikel')}}" enctype="multipart/form-data">
            @csrf
            <div class="panel-body">
                <div class="example-box-wrapper">
                    <input name="judul" class="form-control" aria-label="Judul" required placeholder="Judul">
                </div>
                <div class="example-box-wrapper">
                    <textarea name="konten" class="form-control wysiwyg-editor"></textarea>
                </div>
                <div class="example-box-wrapper">
                    <button type="submit"  class="btn btn-success" id="btn-publish">
                        <span class="glyph-icon icon-separator">
                            <i class="glyph-icon icon-paper-plane"></i>
                        </span>
                        <span class="button-content">
                            Publikasikan
                        </span>
                    </button>
                    <button type="submit"  class="btn btn-warning" id="btn-draft">
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
            if ($("#pelaku").length > 0) {
                $("#btn-publish").click(function (e) {
                    $('#btn-submit').html('Sending..');
                    $.ajax({
                        url: '{{url("cartikel")}}',
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
                                $('#res_message').addClass('hidden');
                                $('#msg_div').addClass('hidden');
                            }, 3000);
                        },
                        error: function (data) {
                          console.log(data);
                        }
                    });
                });
                $("#btn-edit").click(function (e) {
                    $('#btn-edit').html('Sending..');
                    $.ajax({
                        url: '{{url("eartikel")}}' ,
                        type: "POST",
                        data: $('#pelaku').serialize(),
                        success: function( response ) {
                            var j = [response.msg];
                            $('#btn-edit').html('Edit');
                            $('#res_message').show();
                            $('#btn-submit').removeClass('hidden');
                            $('#btn-edit').addClass('hidden');
                            var oTable = $('#datatable1').dataTable();
                            oTable.fnDraw(false);
                            $('#res_message').html(j[0]);
                            $('#msg_div').removeClass('hidden');
                            document.getElementById("pelaku").reset();
                            document.getElementById("pelaku").style.display='none';
                            setTimeout(function(){
                                $('#res_message').addClass('hidden');
                                $('#msg_div').addClass('hidden');
                            },3000);
                            console.log(response.msg);
                        }
                    });
                });
            }

            $('body').on('click', '.edit-user', function () {
                var user_id = $(this).attr('id');
                $.get("{{url('/sartikel')}}"+ '/' +user_id, function (data) {
                    document.getElementById("pelaku").style.display='';
                    $('#btn-submit').addClass('hidden');
                    $('#btn-edit').removeClass('hidden');
                    $('#tahun').val(data.tahun);
                    $('#alamat').val(data.alamat);
                    $('#sk').val(data.sk);
                    $('#kepala').val(data.kepalasekolah);
                    $('#nama').val(data.namasekolah);
                    $('#id').val(data.id);
                    var oTable = $('#datatable1').dataTable();
                    oTable.fnDraw(false);
                })
            });

            $('body').on('click','.hapus-user', function () {
                var user_id=$(this).attr("id");
                $.ajax({
                    type: "GET",
                    url: "{{url('/hartikel')}}",
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
                    url: "{{url('tartikel')}}",
                    type: 'GET',
                },

                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', },
                    { data: 'judul', name: 'judul', },
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
                order: [[0, 'asc']],
            });
        </script>

    </div>
@endsection
