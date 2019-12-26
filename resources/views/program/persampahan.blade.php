@extends('layouts.tampilan')

@section('content')
    <div class="hero-box bg-white hero-box-smaller ">
        <script type="text/javascript" src="../../assets/widgets/datatable/datatable.js"></script>
        <script type="text/javascript" src="../../assets/widgets/datatable/datatable-bootstrap.js"></script>
        <script type="text/javascript" src="../../assets/widgets/datatable/datatable-tabletools.js"></script>
        <div class="container">
            <h2 class="hero-heading wow fadeInDown animated animated" data-wow-duration="0.6s" style="opacity:1;visibility: visible; animation-duration: 0.6s;">PERSAMPAHAN</h2>
            <br>
            <br>
                <div class="clearfix">
                    <style>
                        .aktif, aktif > focus{
                            background: url(../image-resources/blurred-bg/blurred-bg-1.jpg); border-top-left-radius: 10px; border-top-right-radius: 10px;
                            color: white;
                        }
                    </style>
                    <ul class="nav nav-tabs" style="padding: 0 10%;">
                        <li><a id="1" onclick="f1()" class="aktif" href="javascript:void(0)">Tentang Persampah</a></li>
                        <li><a id="2" onclick="f2()" href="javascript:void(0)">Timbulan Sampah</a></li>
                        <li><a id="3" onclick="f3()" href="javascript:void(0)">Sampah Liar</a></li>
                        <li><a id="4" onclick="f4()" href="javascript:void(0)">TPS</a></li>
                    </ul>
                </div>
            <script>
                function f1() {
                    $('#1').addClass('aktif');
                    $('#2').removeClass('aktif');
                    $('#3').removeClass('aktif');
                    $('#4').removeClass('aktif');
                    $('#tentang').addClass('active');
                    $('#timbul').removeClass('active');
                    $('#sampah').removeClass('active');
                    $('#tps').removeClass('active');
                }
                function f2() {
                    $('#1').removeClass('aktif');
                    $('#2').addClass('aktif');
                    $('#3').removeClass('aktif');
                    $('#4').removeClass('aktif');
                    $('#tentang').removeClass('active');
                    $('#timbul').addClass('active');
                    $('#sampah').removeClass('active');
                    $('#tps').removeClass('active');
                }
                function f3() {
                    $('#1').removeClass('aktif');
                    $('#2').removeClass('aktif');
                    $('#3').addClass('aktif');
                    $('#4').removeClass('aktif');
                    $('#tentang').removeClass('active');
                    $('#timbul').removeClass('active');
                    $('#sampah').addClass('active');
                    $('#tps').removeClass('active');
                }
                function f4() {
                    $('#1').removeClass('aktif');
                    $('#2').removeClass('aktif');
                    $('#3').removeClass('aktif');
                    $('#4').addClass('aktif');
                    $('#tentang').removeClass('active');
                    $('#timbul').removeClass('active');
                    $('#sampah').removeClass('active');
                    $('#tps').addClass('active');
                }
            </script>
            <br>
            <br>
            <div class="tab-content">
                <div id="tentang" class="tab-pane active">
            <table border="0" cellpadding="10" class="hero-text wow bounceInUp animated animated" data-wow-duration="0.9s" data-wow-delay="0.2s" style="opacity:1;text-align: justify; visibility: visible; animation-duration: 0.9s; animation-delay: 0.2s;">
                <br>
                <br>
                <tbody>
                <tr>
                    <td style="width: 27px;" valign="top">
                        <strong>Pengertian Sampah</strong>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">&emsp;Sampah adalah sisa kegiatan sehari-hari manusia dan/atau proses alam yang berbentuk padat yang terdiri atas sampah rumah tangga maupun sampah sejenis sampah rumah tangga.</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 27px;" valign="top">
                        <strong>Pengertian TPS</strong>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">&emsp;TPS adalah singkatan dari Tempat Penampungan Sementara yaitu tempat sebelum sampah diangkut ke tempat pendauran ulang, pengolahan, dan/atau tempat pengolahan sampah terpadu.</p>
                    </td>
                </tr>

                <tr>
                    <td style="width: 27px;" valign="top">
                        <strong>Pengertian TPA</strong>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">&emsp;Sedangkan TPA adalah singkatan dari Tempat Pemrosesan Akhir yaitu tempat untuk memroses dan mengembalikan sampah ke media lingkungan secara aman bagi manusia dan lingkungan.</p>
                    </td>
                </tr>
                </tbody>
            </table>
                </div>
                <div id="timbul" class="tab-pane">
                    <table id="datatable1" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>{{__("No")}}</th>
                            <th>{{__("Nama Jalur")}}</th>
                            <th>{{__("Jumlah Titik")}}</th>
                            <th>{{__("Rata Rata Volume")}}</th>
                            <th>{{__("Jumlah")}}</th>
                            <th>{{__("Kubikasi")}}</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th></th>
                            <th>Jumlah</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                    <div class="row">
                        <p align="left">
                        Catatan :
                        <br><br>
                            TOTAL SAMPAH LIAR BAIK DI JALAN ATAU DILINGKUNGAN YG PERNAH DITANGANI SELAMA DI TAHUN 2019 Adalah <bold id="ttl"></bold> M3
                        </p>
                    </div>
                    <script>
                        var table = $("#datatable1").dataTable({
                            processing: true,
                            serverSide: true,
                            ajax: {
                                url: "{{url('ttimbulan')}}",
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
                                total3 = api
                                    .column( 3 )
                                    .data()
                                    .reduce( function (a, b) {
                                        return intVal(a) + intVal(b);
                                    }, 0 );

                                // Total over this page
                                pageTotal3 = api
                                    .column( 3, { page: 'current'} )
                                    .data()
                                    .reduce( function (a, b) {
                                        return intVal(a) + intVal(b);
                                    }, 0 );
                                total2 = api
                                    .column( 2 )
                                    .data()
                                    .reduce( function (a, b) {
                                        return intVal(a) + intVal(b);
                                    }, 0 );

                                // Total over this page
                                pageTotal2 = api
                                    .column( 2, { page: 'current'} )
                                    .data()
                                    .reduce( function (a, b) {
                                        return intVal(a) + intVal(b);
                                    }, 0 );
                                // Update footer
                                $( api.column( 4 ).footer() ).html(
                                    ' '+ pageTotal +' ( Total '+ total +')'
                                );
                                $("#ttl" ).html(
                                     total
                                );
                                $( api.column( 3 ).footer() ).html(
                                    ' '+ pageTotal3 +' ( Total '+ total3 +')'
                                );
                                $( api.column( 2 ).footer() ).html(
                                    ' '+ pageTotal2 +' ( Total '+ total2 +')'
                                );
                            },
                            columns: [
                                { data: 'DT_RowIndex', name: 'DT_RowIndex', },
                                { data: 'namajalur', name: 'namajalur', },
                                { data: 'jumlahtitik', name: 'jumlahtitik', },
                                { data: 'ratavolume', name: 'ratavolume'},
                                { data: 'jumlah', name: 'jumlah'},
                                { data: 'kubikasi', name: 'kubikasi'},
                            ],
                            order: [[0, 'asc']],
                        });
                    </script>
                </div>
                <div id="sampah" class="tab-pane">
                    sampah liar
                </div>
                <div id="tps" class="tab-pane">
                    tps
                </div>
            </div>
        </div>
    </div>
@endsection
