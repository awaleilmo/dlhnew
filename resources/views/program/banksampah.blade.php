@extends('layouts.tampilan')

@section('content')
    <script type="text/javascript" src="../../assets/widgets/tabs/tabs.js"></script>
    <div class="hero-box bg-white hero-box-smaller ">
        @if($message = Session::get('error'))
            <script>
                $(window).load(function(){
                    setTimeout(function() {
                        $('.alert').fadeOut( 400, "linear" );
                    }, 3000);
                });
            </script>
            <div class="alert alert-danger">
                <div class="bg-red alert-icon">
                    <i class="glyph-icon icon-times"></i>
                </div>
                <div class="alert-content">
                    <button type="button" style="float: right" onclick="document.getElementById('alert').style.display ='none'" class="close" data-dismiss="alert">×</button>
                    <h4 class="alert-title">Error</h4>
                    <p>{{ $message }}</p>
                </div>
            </div>
        @endif
        <div class="container">
            <h2 class="hero-heading wow fadeInDown animated animated" data-wow-duration="0.6s" style="visibility: visible; animation-duration: 0.6s;">BANK SAMPAH</h2>
            <ul class="tabs-nav" role="tablist" >
                <li >
                    <a href="#tentang" style="font-size: 15px; border: 1px solid #3e4855; " role="tab" data-toggle="tab">Tentang Bank Sampah</a>
                </li>
                <li >
                    <a href="#bnksmph" style="font-size: 15px; border: 1px solid #3e4855; " role="tab" data-toggle="tab">Bank Sampah di Kota Serang</a>
                </li>
            </ul>
            <div class="tab-content">
                <script type="text/javascript" src="../../assets/widgets/datatable/datatable.js"></script>
                <script type="text/javascript" src="../../assets/widgets/datatable/datatable-bootstrap.js"></script>
                <script type="text/javascript" src="../../assets/widgets/datatable/datatable-tabletools.js"></script>
                <div id="tentang" class="tab-pane active">
                    <br>
                    <br>
                    <h2 class="hero-heading">Tentang Bank Sampah</h2>
                    <br>
                    <br>
            <table border="0" cellpadding="10" class="hero-text wow bounceInUp animated animated" data-wow-duration="0.9s" data-wow-delay="0.2s" style="text-align: justify; visibility: visible; animation-duration: 0.9s; animation-delay: 0.2s;">
                <br>
                <br>
                <tbody>

                <tr>
                    <td colspan="2" style=""><strong style="text-decoration: underline;">Sekilas Bank Sampah</strong></td>
                  </tr>
                <tr>
                    <td colspan="2"  style="">&emsp;Semenjak Tahun 2012 dengan  nama Badan Lingkungan Hidup Daerah Kota Serang  telah melakukan program Sosialisasi dan Bimbingan Teknis (BIMTEK)  terkait pengolahan persampahan  kepada masyarakat hingga  Tahun 2019 dengan nama Dinas Lingkungan Hidup Kota Serang.</td>
                    <br>
                    </tr>
                    <tr>
                    <td colspan="2" style="">&emsp;Teridentifikasi mulai Tahun 2014 hingga 2019 di Kota Serang telah terbentuk 22 Bank Sampah yang dibina oleh Dinas Lingkungan Hidup Kota Serang dengan jumlah nasabah setiap Bank Sampah meningkat dari tahun ke tahun.</td>

                </tr>
                <tr>
                    <td colspan="2" style="width: 27px;" valign="top">
                        <strong>Pengertian</strong>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;" colspan="2">
                        <p style="text-align: justify">&emsp;Bank sampah menurut Peraturan Menteri Lingkungan Hidup RI nomor 13 tahun 2012 adalah tempat pemilahan dan pengumpulan sampah yang dapat didaur ulang dan/atau diguna ulang yang memiliki nilai ekonomi.</p>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" style=""><strong style="text-decoration:underline">Pengelola Bank Sampah</strong></td>
                </tr>
                <tr>
                    <td style="" colspan="2">Pengelola Bank Sampah terdiri dari :</td>
                </tr>
                <tr>
                    <td style=""><strong>1.</strong></td>
                    <td style="">Ketua/direktur</td>
                </tr>
                <tr>
                    <td style=""><strong>2.</strong></td>
                    <td style="">Administrasi/teller</td>
                </tr>
                <tr>
                    <td style=""><strong>3.</strong></td>
                    <td style="">Bendahara</td>
                </tr>
                <tr>
                    <td style=""><strong>4.</strong></td>
                    <td style="">Pemilah/pengepul</td>
                </tr>

                <tr>
                    <td align="center" colspan="2">
                        <img src="image-resources/dlh/mendirikan.png" style="width:80%; height:70%">
                    </td>
                </tr>

                <tr>
                    <td align="center" colspan="2">
                        <img src="image-resources/dlh/menjadi.png" style="width:80%; height:70%">
                    </td>
                </tr>

                <tr>
                    <td colspan="2" style=""><strong style="text-decoration:underline">Partisipasi Masyarakat dalam Pengelolaan Bank Sampah</strong></td>
                </tr>
                <tr>
                    <td style=""><strong>1.</strong></td>
                    <td style="">Saat ini jumlah Bank Sampah di Kota Serang mencapai 22 Bank Sampah dengan jumlah nasabah yang cenderung meningkat dari Tahun ke Tahun.</td>
                </tr>
                <tr>
                    <td style=""><strong>2.</strong></td>
                    <td style="">Motif paling dominan yang melatarbelakangi pendirian Bank Sampah dan menjadi  nasabah Bank Sampah adalah ingin turut serta dalam menjaga lingkungan.</td>
                </tr>
                <tr>
                    <td style=""><strong>3.</strong></td>
                    <td style="">Pengelola Bank Sampah masih membutuhkan pelatihan yang bersifat manajemen dan keterampilan terkait dengan pengelolaan sampah.</td>
                </tr>
                <tr>
                    <td style=""><strong>4.</strong></td>
                    <td style="">Pencatatan terkait dengan aktifitas penabungan sampah di Bank Sampah masih sederhana dan perlu dioptimalkan lagi menjadi kegiatan terstandarkan.</td>
                </tr>
                <tr>
                    <td style=""><strong>5.</strong></td>
                    <td style="">Kegiatan pengolahan sampah organik menjadi kompos dan biogas dan membuat handicraft dari sampah yang dilakukan oleh para nasabah Bank Sampah.</td>
                </tr>

                <tr>
                    <td colspan="2" style=""><strong style="text-decoration:underline">Hambatan Bank Sampah</strong></td>
                </tr>
                <tr>
                    <td style=""><strong>1.</strong></td>
                    <td style="">Keterbatasan tempat, bangunan atau lahan.</td>
                </tr>
                <tr>
                    <td style=""><strong>2.</strong></td>
                    <td style="">Keterbatasan sarana timbangan, alat angkut sampah dan alat pengolah sampah.</td>
                </tr>
                <tr>
                    <td style=""><strong>3.</strong></td>
                    <td style="">Keterbatasan ilmu dan kemampuan manajemen.</td>
                </tr>
                <tr>
                    <td style=""><strong>4.</strong></td>
                    <td style="">Naik turunnya semangat menjadi nasabah.</td>
                </tr>
                <tr>
                    <td style=""><strong>5.</strong></td>
                    <td style="">Kurangnya tenaga laki-laki.</td>
                </tr>
                <tr>
                    <td style=""><strong>6.</strong></td>
                    <td style="">Masih adanya masyarakat yang tidak peduli  terhadap.</td>
                </tr>
                <tr>
                    <td style=""><strong>7.</strong></td>
                    <td style="">Sulitnya mencari pengurus.</td>
                </tr>
                <tr>
                    <td style=""><strong>8.</strong></td>
                    <td style="">Sulitnya mendapatkan nasabah.</td>
                </tr>
                <tr>
                    <td style=""><strong>9.</strong></td>
                    <td style="">Kurangnya dukungan dalam pengelolaan.</td>
                </tr>
                <tr>
                    <td style=""><strong>10.</strong></td>
                    <td style="">Perlunya modal awal pendirian.</td>
                </tr>
                <tr>
                    <td style=""><strong>11.</strong></td>
                    <td style="">Perlunya honor bagi pengurus.</td>
                </tr>

                </tbody>
            </table>
                </div>
                <div id="bnksmph" class="tab-pane">
                    <br>
                    <br>
                    <h2 class="hero-heading">Bank Sampah di Kota Serang</h2>
                    <br>
                    <br>
                    <table id="datatable1" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>{{__("No")}}</th>
                            <th>{{__("Nama")}}</th>
                            <th>{{__("Alamat")}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach($t as $tt)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$tt->nama}}</td>
                                <td>{{$tt->alamat}}</td>
                                <td><a href="banksampah/{{$tt->id}}" class="btn btn-default">Detail</a></td>
                            </tr>
                            @php $no++ @endphp
                        @endforeach
                        </tbody>
                    </table>
                    <script>
                        $(document).ready(function () {
                            $('#datatable1').dataTable();
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection
