@extends('layouts.tampilan')

@section('content')
    <div class="hero-box bg-white hero-box-smaller ">
        <div class="container">
            <h2 class="hero-heading wow fadeInDown animated animated" data-wow-duration="0.6s" style="visibility: visible; animation-duration: 0.6s;">AMDAL</h2>
            <div class="clearfix">
                <style>
                    .aktif, aktif > focus{
                        background: url(../image-resources/blurred-bg/blurred-bg-1.jpg); border-top-left-radius: 10px; border-top-right-radius: 10px;
                        color: white;
                    }
                </style>
                <ul class="nav nav-tabs" style="padding: 0 10%;">
                    <li><a id="1" onclick="f1()" class="aktif" href="javascript:void(0)">AMDAL</a></li>
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
            <table border="0" cellpadding="10" class="hero-text wow bounceInUp animated animated" data-wow-duration="0.9s" data-wow-delay="0.2s" style="opacity:1; text-align: justify; visibility: visible; animation-duration: 0.9s; animation-delay: 0.2s;">
                <br>
                <br>
                <tbody>
                <tr>
                    <td style="width: 27px;" valign="top" align="center">
                        <strong>KERANGKA ACUAN AMDAL DI OSS</strong>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <img src="image-resources/dlh/oss.png" style="width:80%; height:90%">
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">Sesuai dengan Peraturan Menteri Lingkungan Hidup dan Kehutanan (KLHK) Nomor P.26/MENLHK/SETJEN/KUM.1/7/2018 tentang Pedoman Penyusunan dan Penilaian Serta Pemeriksaan Dokumen Lingkungan Hidup Dalam Pelaksanaan Pelayanan Perizinan Berusaha Terintegrasi Secara Elektronik.

                            Berikut ini metodenya :
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 27px;" valign="top">
                        <strong>PEDOMAN PENYUSUNAN FORMULIR KERANGKA ACUAN (KA)</strong>
                </td>
                </tr>
                <tr>
                    <td valign="top"><strong>A. Tujuan dan Fungsi Formulir KA</strong></td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">1. Tujuan Penyusunan Formulir KA adalah :</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">• Merumuskan lingkup dan kedalaman Studi Andal;</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">• Mengarahkan Studi Andal agar berjalan secara efektif dan efesien sesuai dengan biaya, tenaga, dan waktu yang tersedia.</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">2. Fungsi Formulir KA adalah :</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">• Sebagai rujukan penting bagi pelaku usaha, penyusun Dokumen Amdal, instansi yang membidangi rencana usaha dan/atau kegiatan, dan instansi lingkungan hidup, serta Tim Teknis Komisi Penilai Amdal tentang lingkup dan kedalaman studi Andal yang akan dilakukan;</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">• Sebagai salah satu bahan rujukan bagi penilai dokumen Andal untuk mengevaluasi hasil studi Andal.</p>
                    </td>
                </tr>
                <tr>
                    <td valign="top"><strong>B. Muatan Formulir KA</strong></td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">1. Informasi Umum</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">Informasi umum formulir Kerangka Acuan Andal minimal berisikan antara lain ;</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">a.	Nama Kegiatan ~ pada bagian ini dicantumkan nama rencana usaha dan/atau kegiatan yang akan dilakukan.</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">b.	Pelaku Usaha ~ pada bagian ini dicantumkan nama dan alamat lengkap instansi/perusahaan sebagai pelaku usaha dan/atau kegiatan, serta nama dan alamat lengkap penanggung jawab rencana usaha dan/atau kegiatan.</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">c.	Penyusun Dokumen ~ pada bagian ini dicantumkan Penyusun Dokumen Amdal yang terdiri dari Tim Penyusun Dokumen Amdal, Tenaga Ahli dan Asisten Penyusun Dokumen Amdal. Penyusun Dokumen Amdal wajib dilengkapi dengan Sertifikat Kompetensi Penyusun Dokumen Amdal, dalam hal penyusunan dokumen Amdal dilakukan oleh Lembaga Penyedia Jasa Penyusun (LPJP) Amdal maka wajib disertakan bukti registrasi yang masih berlaku atas nama LPJP Amdal terkait.</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">d.	Deskripsi Rencana Usaha dan/atau Kegiatan ~ pada bagian ini dijelaskan rencana kegiatan utama dan kegiatan pendukung berikut pula alternatif rencana usaha dan/atau kegiatan yang disertai pula dengan rencana pengelolaan dan pemantauan yang telah dipersiapkan.</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">e.	Lokasi Rencana Kegiatan ~ pada bagian ini dijelaskan posisi lokasi rencana kegiatan yang akan dilakukan, informasi kegiatan lain di sekitar rencana usaha dan/atau kegiatan serta keterkaitannya dengan keberadaan lokasi ataupun kawasan sentitif yang ada.</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">f.	Hasil Pelibatan Masyarakat ~ pada bagian ini dijelaskan hasil pelibatan masyarakat berupa saran, pendapat dan tanggapan yang dihasilkan dari proses pengumuman dan konsultasi publik yang telah dilakukan oleh pelaku usaha dan/atau kegiatan. Pada bagian ini diinformasikan pula wakil masyarakat sebagai perwakilan yang disepakati dan akan duduk sebagai Anggota Komisi Penilai Amdal.</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify"></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify"></p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify"></p>
                    </td>
                </tr>
                </tr>


                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">Untuk melengkapi persyaratan diatas, download form di bawah ini sebagai syarat dalam pembuatan dokumen KA-Andal, Amdal dan RKL-RPL</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="upload/dokumenlingkungan/@foreach($p as $pp) {{$pp->forms}} @endforeach" download="upload/dokumenlingkungan/@foreach($p as $pp) {{$pp->forms}} @endforeach" class="btn btn-primary" style="font-size: large;"><i class="glyph-icon icon-file-word-o"></i> Download Form </a>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
            <script type="text/javascript" src="../../assets/widgets/datatable/datatable.js"></script>
            <script type="text/javascript" src="../../assets/widgets/datatable/datatable-bootstrap.js"></script>
            <script type="text/javascript" src="../../assets/widgets/datatable/datatable-tabletools.js"></script>
            <div id="terkirim" class="tab-pane">
                <form id="pelaku"  method="post" enctype="multipart/form-data" action="javascript:void(0)" style="">
                    @csrf
                    <input name="userId" class="hidden" type="text" value="{{Auth::user()->id}}">
                    <input name="dok" class="hidden" type="text" value="AMDAL">
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
                        <th>{{__('Keterangan')}}</th>
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
                        url: "{{url('tdokiramdal')}}/{{Auth::user()->id}}",
                        type: 'GET',
                    },
                    columns: [
                        { data: 'created_at',   name: 'created_at', },
                        { data: 'penyelesaian', name: 'penyelesaian', },
                        { data: 'file',         name: 'file', },
                        { data: 'keterangan',   name: 'keterangan'},
                        { data: 'status',       name: 'status', },
                    ],
                    order: [[0, 'asc']]
                });
            </script>
            </div>
        </div>

    </div>
@endsection
