@extends('layouts.tampilan')

@section('content')
    <div class="hero-box bg-white hero-box-smaller ">
        <script type="text/javascript" src="../../assets/widgets/datatable/datatable.js"></script>
        <script type="text/javascript" src="../../assets/widgets/datatable/datatable-bootstrap.js"></script>
        <script type="text/javascript" src="../../assets/widgets/datatable/datatable-tabletools.js"></script>
        <div class="container">
            <h2 class="hero-heading wow fadeInDown animated animated" data-wow-duration="0.6s" style="visibility: visible; animation-duration: 0.6s;">PENGAWASAN</h2>
            <table border="0" cellpadding="10" class="hero-text wow bounceInUp animated animated" data-wow-duration="0.9s" data-wow-delay="0.2s" style="text-align: justify; visibility: visible; animation-duration: 0.9s; animation-delay: 0.2s;">
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
                <tr>
                    <td colspan="2" style=""><strong>Data Pelaku Usaha</strong><br><br>
                        <table id="datatable1" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">
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
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', },
                    { data: 'jeniskegiatan', name: 'jeniskegiatan', },
                    { data: 'jumlahperusahaan', name: 'jumlahperusahaan', },
                    { data: 'tahun', name: 'tahun'},
                ],
                order: [[0, 'asc']]
            });
        </script>
                    </td>
                  </tr>
                <tr>
                    <td colspan="2" style=""><strong>Hasil Pengawasan</strong><br><br>
                        <table id="datatable2" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Temuan Hasil Pengawasan</th>
                                <th>Kategori Dokumen</th>
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
                        </table>
        <script>
            $("#datatable2").dataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{url('tdiawasi')}}",
                    type: 'GET',
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
                    </td>
                  </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
