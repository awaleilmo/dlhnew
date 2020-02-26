@extends('layouts.tampilan')

@section('content')
    <div class="hero-box bg-white hero-box-smaller ">
        <div class="container">
            <h2 class="hero-heading wow fadeInDown animated animated" data-wow-duration="0.6s" style="visibility: visible; animation-duration: 0.6s;">UKL - UPL</h2>
            <div class="clearfix">
                <style>
                    .aktif, aktif > focus{
                        background: url(../image-resources/blurred-bg/blurred-bg-1.jpg); border-top-left-radius: 10px; border-top-right-radius: 10px;
                        color: white;
                    }
                </style>
                <ul class="nav nav-tabs" style="padding: 0 10%;">
                    <li><a id="1" onclick="f1()" class="aktif" href="javascript:void(0)">UKL-UPL</a></li>
                    <li><a id="2" onclick="f2()" href="javascript:void(0)">Upload Form</a></li>
                </ul>
            </div>
            <script>
                function f1() {
                    $('#1').addClass('aktif');
                    $('#2').removeClass('aktif');
                    $('#formulir').addClass('active');
                    $('#terkirim').removeClass('active');
                }
                function f2() {
                    $('#1').removeClass('aktif');
                    $('#2').addClass('aktif');
                    $('#formulir').removeClass('active');
                    $('#terkirim').addClass('active');
                }
            </script>
            <div class="tab-content">
                <div id="formulir" class="tab-pane active">
                    <table border="0" cellpadding="10" class="hero-text wow bounceInUp animated animated" data-wow-duration="0.9s" data-wow-delay="0.2s" style="text-align: justify; visibility: visible; animation-duration: 0.9s; animation-delay: 0.2s;">
                <br>
                <br>
                <tbody>
                <tr>
                    <td style="width: 27px;" valign="top">
                        <strong>Pengertian</strong>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">Upaya Pengelolaan Lingkungan Hidup dan Upaya Pemantauan Lingkungan Hidup yang disebut UKL.UPL, adalah pengelolaan dan pemantauan terhadap Usaha dan/atau Kegiatan yang tidak berdampak penting terhadap lingkungan hidup yang diperlukan bagi proses pengambilan keputusan tentang penyelenggaraan Usaha dan/atau Kegiatan</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 27px;" valign="top" align="center">
                        <strong>Persyaratan</strong>
                    </td>
                </tr>
                </td>
                </tr>
                <tr>
                    <td>
                        <img src="image-resources/dlh/syaratuklupl.png" style="width:100%; height:50%">
                    </td>
                </tr>

                <tr>
                    <td style="width: 27px;" valign="top" align="center">
                        <strong>Alur Penilaian UKL-UPL</strong>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="image-resources/dlh/uklupl.png" style="width:100%; height:50%">
                    </td>
                </tr>

                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">Untuk melengkapi persyaratan diatas, download form di bawah ini sebagai syarat dalam pembuatan dokumen UKL-UPL</p>
                    </td>
                </tr>

                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">Untuk melengkapi persyaratan diatas, download form di bawah ini sebagai syarat dalam pembuatan dokumen UKL UPL</p>
                    </td>
                </tr>

                <tr>
                    <td>

                        @foreach($p as $pp)
                            <a href="upload/dokumenlingkungan/{{$pp->forms}}" download="upload/dokumenlingkungan/{{$pp->forms}}" class="btn btn-primary" style="font-size: large;"><i class="glyph-icon icon-file-word-o"></i> Download Form </a>
                        @endforeach
                    </td>
                </tr>
                </tbody>
            </table>
                </div>
                <div id="terkirim" class="tab-pane">
                    <form id="pelaku"  method="post" enctype="multipart/form-data" action="javascript:void(0)" style="">
                        @csrf
                        <input name="userId" class="hidden" type="text" value="{{Auth::user()->id}}">
                        <input name="dok" class="hidden" type="text" value="UKLUPL">
                        <div id="bar" class="hidden"><img src="img/loading1.gif" style="width: 35%; height: 50%;"></div>
                        <div id="frm" class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    File :
                                </div>
                                <div class="col-md-2">
                                    <input class="hidden" for="file" id="desk1" name="dek">
                                    <span class="btn btn-primary btn-file">
                                <span class="fileinput-new" id="labelfile1">Select file</span>
                                <input accept=".pdf" id="file" name="file" type="file"  onchange="document.getElementById('desk1').value = this.value; document.getElementById('labelfile1').innerHTML = this.value;" required autocomplete="off">
                            </span>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2">
                                    <button id="btn-submit" class="btn btn-success" type="submit">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <br>
                    <table id="datatable1" align="center" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">

                        <thead>
                        <tr>
                            <th>{{__('Tanggal Upload')}}</th>
                            <th>{{__('Tanggal Penyelesaian')}}</th>
                            <th>{{__('File')}}</th>
                            <th>{{__('Status')}}</th>
                        </tr>
                        </thead>
                    </table>
                </div>
                <script>

                    $("#pelaku").submit(function (e) {
                        document.getElementById('bar').style.display = 'none';
                        document.getElementById('frm').style.display = '';
                        e.preventDefault();
                        setTimeout(function () {
                        }, 3000);
                        var formData = new FormData($(this)[0]);
                        $.ajax({
                            url: '{{url("cdokir")}}',
                            type: "POST",
                            data: formData,
                            async: true,
                            cache: false,
                            contentType: false,
                            enctype: 'multipart/form-data',
                            processData: false,
                            success: function (response) {

                                $('#res_message').show();
                                $('#labelfile1').html('Select file');
                                $('#file').val('');
                                $('#res_message').html(response.msg);
                                $('#msg_div').removeClass('hidden');
                                $('#bar').addClass('hidden');
                                $('#frm').removeClass('hidden');
                                setTimeout(function () {
                                    $('#res_message').addClass('hidden');
                                    $('#msg_div').addClass('hidden');
                                }, 3000);
                                var oTable = $('#datatable1').dataTable();
                                oTable.fnDraw(false);
                                $("#bar").addClass('hidden');
                                $("#frm").removeClass('hidden');
                            },
                            error: function (data) {
                                $("#bar").removeClass('hidden');
                                $("#frm").addClass('hidden');
                                console.log("Error:", data);
                            }

                        });
                    });

                    //////////////
                    $('#datatable1').DataTable({

                        serverSide: true,
                        ajax: {
                            url: "{{url('tdokiruklupl')}}/{{Auth::user()->id}}",
                            type: 'GET',
                        },
                        columns: [
                            { data: 'created_at',   name: 'created_at', },
                            { data: 'penyelesaian',   name: 'penyelesaian', },
                            { data: 'file',         name: 'file', },
                            { data: 'status',       name: 'status', },
                        ],
                        order: [[0, 'asc']]
                    });
                </script>
            </div>
        </div>
    </div>
@endsection
