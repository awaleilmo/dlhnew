@extends('layouts.mobile')

@section('content')
    <div>
        <script type="text/javascript" src="../../assets/widgets/datatable/datatable.js"></script>
        <script type="text/javascript" src="../../assets/widgets/datatable/datatable-bootstrap.js"></script>
        <script type="text/javascript" src="../../assets/widgets/datatable/datatable-tabletools.js"></script>
        <div class="container">
            <br>
            <h2 class="hero-heading wow fadeInDown animated animated" data-wow-duration="0.6s" style="text-align:center; visibility: visible; animation-duration: 0.6s;"><b>PENGAWASAN</b></h2>
            <table border="0" cellpadding="5" class="hero-text wow bounceInUp animated animated" data-wow-duration="0.9s" data-wow-delay="0.2s" style="text-align: justify; visibility: visible; animation-duration: 0.9s; animation-delay: 0.2s; opacity: 1">
                <br>
                <br>
                <tbody>
                <tr>
                    <td colspan="2" style="width: 27px;" valign="top">
                        <strong>Latar Belakang</strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="width: 976px;">
                        <p style="text-align: justify">&emsp;Pengawasan lingkungan hidup berdasarkan Undang-Undang No. 32 Tahun 2009 didefinisikan sebagai, Kegiatan yang dilaksanakan secara langsung atau tidak langsung oleh Pejabat Penyidik Lingkungan Hidup Pusat dan Pejabat Penyidik Lingkungan Hidup Daerah, untuk mengetahui tingkat ketaatan Penanggung Jawab usaha dan atau kegiatan, terhadap ketentuan peraturan perundang-undangan di bidang pengendalian pencemaran dan atau kerusakan lingkungan hidup.</p>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" style="width: 27px;" valign="top">
                        <strong>Tujuan</strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="width: 976px;">
                        <p style="text-align: justify">&emsp;Tujuan pengawasan lingkungan hidup berdasarkan Undang-Undang No. 32 Tahun 2009 adalah memantau, mengevaluasi dan menetapkan status ketaatan Penanggung jawab usaha dan atau kegiatan :</p>
                    </td>
                </tr>
                <tr>
                    <td valign="top" style=""><strong>1.</strong></td>
                    <td style="">Peraturan perundang-undangan di bidang pengendalian pencemaran dan perusakan lingkungan hidup.</td>
                </tr>
                <tr>
                    <td valign="top" style=""><strong>2.</strong></td>
                    <td style="">Perijinan yang terkait dengan pengendalian pencemaran dan perusakan lingkungan hidup.</td>
                </tr>
                <tr>
                    <td valign="top" style=""><strong>3.</strong></td>
                    <td style="">Kewajiban pengelolaan dan pemantauan lingkungan yang tercantum dalam RKL (Rencana Pengelolaan Lingkungan) dan RPL (Rencana Pemantauan Lingkungan) atau UKL (Upaya Pengelolaan Lingkungan) dan UPL (Upaya Pemantauan Lingkungan)..</td>
                </tr>

                <tr>
                    <td colspan="2" style="">Berikut adalah data pelaku usaha dan hasil pengawasan kegiatan usaha di kota serang :</td>
                </tr>

                </tbody>
            </table>
            <br>
            <h3><strong>Data Pelaku Usaha</strong></h3><br><br>
            <div style="overflow-x: scroll">
                <table id="datatable1" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="80%" style="font-size: xx-small">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Kegiatan</th>
                        <th>Jumlah Perusahaan</th>
                        <th>Tahun</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="2">Jumlah</td>
                        <td colspan="2"></td>
                    </tr>
                    </tfoot>
                </table>
                <br>
                <br>
                <script>

                    $("#datatable1").dataTable({
                        processing: true,
                        serverSide: true,
                        ajax: {
                            url: "{{url('tpelaku')}}",
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
                                ' '+ pageTotal +' ( Total '+ total +' )'
                            );
                        },
                        columns: [
                            { data: 'DT_RowIndex', name: 'DT_RowIndex', },
                            { data: 'jeniskegiatan', name: 'jeniskegiatan', },
                            { data: 'jumlahperusahaan', name: 'jumlahperusahaan', },
                            { data: 'tahun', name: 'tahun'},
                        ],
                        order: [[0, 'asc']]
                    });
                </script>
            </div>
                <br>
            <h3><strong>Hasil Pengawasan</strong></h3><br><br>
                <div style="overflow-x: scroll">
                    <table id="datatable2" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="80%" style="font-size: xx-small">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Temuan Hasil Pengawasan</th>
                            <th>Kategori Dokumen</th>
                            <th>Jumlah Perusahaan</th>
                            <th>Tahun</th>
                        </tr>
                        </thead>

                    </table>
                    <script>
                        $("#datatable2").dataTable({
                            processing: true,
                            serverSide: true,
                            ajax: {
                                url: "{{url('tdiawasi')}}",
                                type: 'GET',
                            },
                            "footerCallback": function ( row, data, start, end, display ) {
                                var api = this.api(), data;

                                // Remove the formatting to get integer data for summation
                                var intVal = function ( i ) {
                                    return typeof i === 'integer' ?
                                        i.replace(/[\$,]/g, '')*1 :
                                        typeof i === 'integer' ?
                                            i : 0;
                                };

                                // Total over all pages
                                total = api
                                    .column( 3 )
                                    .data()
                                    .reduce( function (a, b) {
                                        return intVal(a) + intVal(b);
                                    }, 0 );

                                // Total over this page
                                pageTotal = api
                                    .column( 3, { page: 'current'} )
                                    .data()
                                    .reduce( function (a, b) {
                                        return intVal(a) + intVal(b);
                                    }, 0 );
                                // Update footer
                                $( api.column( 3 ).footer() ).html(
                                    ' '+ pageTotal +' ( Total '+ total +' )'
                                );
                            },
                            columns: [
                                { data: 'DT_RowIndex', name: 'DT_RowIndex', },
                                { data: 'temuan', name: 'temuan', },
                                { data: 'kategori', name: 'kategori', },
                                { data: 'jumlah', name: 'jumlah', },
                                { data: 'tahun', name: 'tahun'},
                            ],
                            order: [[0, 'asc']]
                        });
                    </script>
                </div>
            <br>
            <br>
        </div>
    </div>
@endsection
