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
                <h2>{{__('Dashboard Jenis Angkutan')}}</h2>
                <p>{{__('Tampilan menu jenis angkutan')}}</p>
            </div>
        </div>
        <form id="pelaku"  method="post" action="javascript:void(0)" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        Jenis :
                    </div>
                    <div class="col-md-2">
                        <input id="id" type="hidden" name="id">
                        <input id="jenis" name="jenis" type="text" class="form-control" required autocomplete="off" placeholder="jenis">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        Unit :
                    </div>
                    <div class="col-md-2">
                        <input id="unit" name="unit" type="number" class="form-control" required autocomplete="off" placeholder="Unit">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        Keterangan :
                    </div>
                    <div class="col-md-2">
                        <input id="keterangan" name="keterangan" type="text" class="form-control" required autocomplete="off" placeholder="Keterangan">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <button id="btn-submit" class="btn btn-success">Simpan</button>
                        <button id="btn-edit" class="btn btn-primary hidden">Edit</button>
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
                <th>{{__("No")}}</th>
                <th>{{__("Jenis")}}</th>
                <th>{{__("unit")}}</th>
                <th>{{__("Keterangan")}}</th>
                <th>{{__("Action")}}</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th></th>
                <th>JUMLAH</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </tfoot>
        </table>

        <script>
            if ($("#pelaku").length > 0) {
                $("#btn-submit").click(function (e) {
                    $('#btn-submit').html('Sending..');
                    $.ajax({
                        url: '{{url("cangkut")}}',
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
                        }
                    });
                });
                $("#btn-edit").click(function (e) {
                    $('#btn-edit').html('Sending..');
                    $.ajax({
                        url: '{{url("eangkut")}}' ,
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
                $.get("{{url('/sangkut')}}"+ '/' +user_id, function (data) {
                    document.getElementById("pelaku").style.display='';
                    $('#btn-submit').addClass('hidden');
                    $('#btn-edit').removeClass('hidden');
                    $('#jenis').val(data.jenis);
                    $('#unit').val(data.unit);
                    $('#keterangan').val(data.keterangan);
                    $('#id').val(data.id);
                    var oTable = $('#datatable1').dataTable();
                    oTable.fnDraw(false);
                })
            });

            $('body').on('click','.hapus-user', function () {
                var user_id=$(this).attr("id");
                $.ajax({
                    type: "GET",
                    url: "{{url('/hangkut')}}",
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
                    url: "{{url('tangkut')}}",
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
                        .column( 2 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    // Total over this page
                    pageTotal = api
                        .column( 2, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
                    // Update footer
                    $( api.column( 2 ).footer() ).html(
                        ' '+ pageTotal + ' ( Total '+total+' )'
                    );
                },
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', },
                    { data: 'jenis', name: 'jenis', },
                    { data: 'unit', name: 'unit', },
                    { data: 'keterangan', name: 'keterangan', },
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
                order: [[0, 'asc']],
            });
        </script>

    </div>
@endsection
