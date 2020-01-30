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
                    <li><a id="1" onclick="f1()" class="aktif" href="javascript:void(0)">Formulir AMDAL</a></li>
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
                        <p style="text-align: justify">Analisis Mengenai Dampak Lingkungan Hidup yang disebut Amdal adalah kajian mengenai dampak penting suatu Usaha dan/atau Kegiatan yang direncanakan pada lingkungan hidup yang diperlukan bagi proses pengambilan keputusan tentang penyelenggaraan Usaha dan/atau Kegiatan</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 27px;" valign="top" align="center">
                        <strong>Persyaratan</strong>
                </td>
                </tr>
                <tr>
                    <td align="center">
                        <img src="image-resources/dlh/syaratamdal.png" style="width:80%; height:70%">
                    </td>
                </tr>

                <tr>
                    <td style="width: 27px;" valign="top" align="center">
                        <strong>Alur Penilaian Amdal</strong>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="image-resources/dlh/amdal.png" style="width:100%; height:50%">
                    </td>
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
                <table id="datatable1" align="center" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">

                    <thead>
                    <tr>
                        <th>{{__('Tanggal Pengaduan')}}</th>
                        <th>{{__('Tanggal Penyelesaian')}}</th>
                        <th>{{__('Nama Pengadu')}}</th>
                        <th>{{__('Alamat Pengadu')}}</th>
                        <th>{{__('NO HP')}}</th>
                        <th>{{__('Status')}}</th>
                        <th>{{__('Action')}}</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>{{__('Tanggal Pengaduan')}}</th>
                        <th>{{__('Tanggal Penyelesaian')}}</th>
                        <th>{{__('Nama Pengadu')}}</th>
                        <th>{{__('Alamat Pengadu')}}</th>
                        <th>{{__('NO HP')}}</th>
                        <th>{{__('Status')}}</th>
                        <th>{{__('Action')}}</th>
                    </tr>
                    </tfoot>
                </table>

            </div>
            <script>

                //////////////
                $('#datatable1').DataTable({

                    serverSide: true,
                    ajax: {
                        url: "{{url('tpojok_pengaduan')}}/{{Auth::user()->id}}",
                        type: 'GET',
                    },
                    columns: [
                        { data: 'created_at', name: 'created_at', },
                        { data: 'penyelesaian',         name: 'penyelesaian', },
                        { data: 'nama', name: 'nama', },
                        { data: 'alamat', name: 'alamat', },
                        { data: 'notelp', name: 'notelp', },
                        { data: 'status', name: 'status', },
                        { data: 'action', name: 'action',},
                    ],
                    order: [[0, 'asc']]
                });
            </script>
            </div>
        </div>

    </div>
@endsection
