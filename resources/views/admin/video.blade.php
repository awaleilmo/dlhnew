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
                <h2>{{__('Dashboard Video')}}</h2>
                <p>{{__('tampilan Video')}}</p>
            </div>
        </div>
        <form id="pelaku"  method="post" enctype="multipart/form-data" action="cvideo" style="display: none;">
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
                        Link Video :
                    </div>
                    <div class="col-md-2">
                        <input name="link" type="text" class="form-control" required autocomplete="off" placeholder="Link Video">
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
        <form id="editor"  method="post" enctype="multipart/form-data" action="evideo" style="display: none;">
            @csrf
            <div id="bar" class="hidden"><img src="img/loading1.gif" style="width: 35%; height: 50%;"></div>
            <div id="frm" class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        Judul :
                    </div>
                    <div class="col-md-2">
                        <input id="judul" name="judul" type="text" class="form-control" required autocomplete="off" placeholder="Judul">
                        <input id="idnya" name="id" type="text" class="hidden" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        Link Video :
                    </div>
                    <div class="col-md-2">
                        <input id="link" name="link" type="text" class="form-control" required autocomplete="off" placeholder="Link Video">
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
        <table id="datatable1" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>{{__("No")}}</th>
                <th>{{__("Judul")}}</th>
                <th>{{__("Link")}}</th>
                <th>{{__("Tanggal")}}</th>
                <th>{{__("Action")}}</th>
            </tr>
            </thead>

        </table>

        <script>



            $('body').on('click', '.edit-user', function () {
                var user_id = $(this).attr('id');
                var x = document.getElementById("myDIV")
                $.get("{{url('/svideo')}}"+ '/' +user_id, function (data) {
                    document.getElementById("pelaku").style.display='none';
                    document.getElementById("editor").style.display='';
                    x.innerHTML = "Cancel";
                    x.style.borderColor = "#d67520";
                    x.style.background = "#e67e22";
                    $('#btn-submit').addClass('hidden');
                    $('#btn-edit').removeClass('hidden');
                    $('#link').val(data.link);
                    $('#judul').val(data.judul);
                    $('#idnya').val(data.id);
                    var oTable = $('#datatable1').dataTable();
                    oTable.fnDraw(false);
                })
            });

            $('body').on('click','.hapus-user', function () {
                var user_id=$(this).attr("id");
                $.ajax({
                    type: "GET",
                    url: "{{url('/hvideo')}}",
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
                    url: "{{url('tvideo')}}",
                    type: 'GET',
                },
                "footerCallback": function ( row, data, start, end, display ) {
                    var api = this.api(), data;

                    // Remove the formatting to get integer data for summation
                    var intVal = function ( i ) {
                        return typeof i === 'string' ?
                            i.replace(/[\$,]/g, '')*1 :
                            typeof i === 'number' ?
                                i : 0;
                    };

                    // Total over all pages
                    total = api
                        .column( 4 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    // Total over this page
                    pageTotal = api
                        .column( 4, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
                    // Update footer
                    $( api.column( 4 ).footer() ).html(
                        ' '+ pageTotal +' M3 ( Total '+ total +' M3)'
                    );
                },
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', },
                    { data: 'judul', name: 'judul', },
                    { data: 'link', name: 'link', },
                    { data: 'created_at', name: 'created_at'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
                order: [[3, 'desc']],
            });

        </script>

    </div>
@endsection
