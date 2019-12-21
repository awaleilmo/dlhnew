@extends('layouts.tampilan')

@section('content')

    <script type="text/javascript" src="../../assets/widgets/tabs/tabs.js"></script>
    <div class="hero-box bg-white hero-box-smaller ">
        <div class="container">
          <h2 class="hero-heading wow fadeInDown animated animated" data-wow-duration="0.6s" style="visibility: visible; animation-duration: 0.6s;">ADIWIYATA</h2><br>
            <ul class="tabs-nav" role="tablist" >
                <li >
                    <a href="#tentang" style="font-size: 15px; border: 1px solid #3e4855; " role="tab" data-toggle="tab">Tentang Adwiyata</a>
                </li>
                <li >
                    <a href="#sca" style="font-size: 15px; border: 1px solid #3e4855; " role="tab" data-toggle="tab">Sekolah Calon Adwiyata</a>
                </li>
                <li >
                    <a href="#sna" style="font-size: 15px; border: 1px solid #3e4855; " role="tab" data-toggle="tab">Sekolah Non Adwiyata</a>
                </li>
                <li >
                    <a href="#scatingkat" style="font-size: 15px; border: 1px solid #3e4855; " role="tab" data-toggle="tab">Sekolah Calon Adwiyata Tingkat</a>
                </li>
            </ul>
            <div class="tab-content">
                <script type="text/javascript" src="../../assets/widgets/datatable/datatable.js"></script>
                <script type="text/javascript" src="../../assets/widgets/datatable/datatable-bootstrap.js"></script>
                <script type="text/javascript" src="../../assets/widgets/datatable/datatable-tabletools.js"></script>
                <div id="tentang" class="tab-pane active">
                    <br>
                    <h2 class="hero-heading">Tentang Adwiyata</h2>
                    <table width="100%" border="0" cellpadding="10" class="hero-text wow bounceInUp animated animated" style=" opacity:1; text-align: justify; visibility: visible; animation-duration: 0.9s; animation-delay: 0.2s;" data-wow-duration="0.9s" data-wow-delay="0.2s">
                <br>
                <br>
                <tbody>
                <tr>
                    <td colspan="2" valign="top">
                        <strong>Pengertian</strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" >
                        <p style="text-align: justify">&emsp;Adiwiyata (Green School) merupkan salah satu program kementrian negara lingkungan hidup yang memiliki tujuan untuk mendorong terciptanya pengetahuan serta kesadaran warga sekolah dalam pelestarian lingkungan hidup.</p>
                        <br>
                        <p style="text-align: justify">&emsp;Peraturan Menteri Lingkungan Hidup Republik Indonesia Nomor 05 Tahun 2013 Tentang Pedoman Pelaksanaan Program Adiwiyata menyatakan bahwa sekolah adiwiyata merupakan sekolah yang peduli serta berbudaya lingkungan dan juga program adiwiyata ialah suatu program untuk dapat mewujudkan sekolah yang peduli serta juga berbudaya lingkungan.</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" valign="top">
                        <strong style="    text-decoration: underline;">Tujuan Adwiyata</strong></td>
                </tr>
                <tr>
                  <td colspan="2" style=""><span style="text-align: justify">&emsp;Tujuan sekolah Adiwiyata yang secara umum itu menerangkan dalam mewujudkan masyarakat sekolah yang peduli serta juga berbudaya dalam lingkungan dengan</span>:</td>
                </tr>
                <tr>
                  <td valign="top" style=""><strong>1.</strong></td>
                  <td style="">Menciptakan  kondisi yang lebih baik bagi pada sekolah untuk menjadi wadah pembelajaran  serta juga penyadaran segenap waga sekolah diantaranya Murid, Guru, Orang  Tua/Wali Murid, dan juga lingkunagn masyarakat demi terciptanya upaya  pelestarian lingkungan hidup.</td>
                </tr>
                <tr>
                  <td valign="top" style=""><strong>2.</strong></td>
                  <td style="">Warga  sekolah jug aturut bertanggung jawab dalam mengupayakan penyelamatan lingkungan  hidup serta juga pembangunan yang berkelanjutan.</td>
                </tr>
                <tr>
                  <td valign="top" style=""><strong>3.</strong></td>
                  <td style="">Mendorong  dan membantu sekolah untuk dapat turut serta didalam melaksanakan upaya  pemerintah demi melestarikan lingkungan hidup dalam pembangunan yang bekelanjutan,  berwawasan lingkungan demi hadirnya kepentingan generasi yang akan datang.</td>
                </tr>
                <tr>
                  <td colspan="2" style=""><strong style="text-decoration: underline;">Fungsi</strong></td>
                  </tr>
                <tr>
                  <td colspan="2" style="">&emsp;Fungsi  program adiwiyata agar seluruh pelajar ikut terlibat dalam seggala kegiatan  atau aktivitas persekolahan demi menuju lingkungan yang sehat dan juga mampu menghindari  dampak lingkungan yang negatif.</td>
                  </tr>
                <tr>
                  <td colspan="2" style=""><strong style="text-decoration: underline;">Prinsip Program Adwiyata</strong></td>
                  </tr>
                <tr>
                  <td style="">&nbsp;</td>
                  <td style=""><strong>Pertisipatif</strong></td>
                  </tr>
                <tr>
                  <td style="">&nbsp;</td>
                  <td style="">&emsp;Komunitas  sekolah terlibat dalam manajemen sekolah yang melingkupi keseluruhan proses  perencanaan, pelaksanaan serta evaluasi sesuai tanggungjawab dan juga peran.</td>
                  </tr>
                <tr>
                  <td style="">&nbsp;</td>
                  <td style=""><strong>Berkelanjutan</strong></td>
                  </tr>
                <tr>
                  <td style="">&nbsp;</td>
                  <td style="">&emsp;Seluruh  kegiatan atau aktivitas harus dilakukan secara terrencana dan terus menerus  secara komprehensif.</td>
                  </tr>
                <tr>
                  <td style="">&nbsp;</td>
                  <td style=""><strong>Edukatif </strong>( Permen LH No 2013 )</td>
                </tr>
                <tr>
                  <td colspan="2" style=""><strong style="text-decoration:underline">Manfaat Program Adwiyata</strong></td>
                  </tr>
                <tr>
                  <td style=""><strong>1.</strong></td>
                  <td style="">Mengubah  perilaku warga sekolah untuk dapat melakukan budaya pelestarian lingkungan.</td>
                </tr>
                <tr>
                  <td style=""><strong>2.</strong></td>
                  <td style="">Meningkatkan  penghematan sumber dana melalui pengurangan sumber daya dan energi.</td>
                </tr>
                <tr>
                  <td style=""><strong>3.</strong></td>
                  <td style="">Dapat  menghinari sejumlah resiko dampak lingkungan yang terdapat di wilayah sekolah.</td>
                </tr>
                <tr>
                  <td style=""><strong>4.</strong></td>
                  <td style="">Meningkatkan  efisiensi dalam pelaksanaan aktivitas atau kegiatan operasional sekolah.</td>
                </tr>
                <tr>
                  <td style=""><strong>5.</strong></td>
                  <td style="">Menciptakan  kondisi kebersamaan bagi semua warga sekolah.</td>
                </tr>
                <tr>
                  <td style=""><strong>6.</strong></td>
                  <td style="">Memberikan  pembelajaran bagi generasi muda mengenai pemeliharaan serta pengelolaan  lingkungan hidup yang baik dan juga benar.</td>
                </tr>
                <tr>
                  <td style=""><strong>7.</strong></td>
                  <td style="">Meningkatkan  kualitas dan kondisi belajar mengajar yang lebih nyaman serta juga kondusif  bagi seluruh warga sekolah.</td>
                </tr>
                <tr>
                  <td colspan="2" style=""><strong style="text-decoration:underline">Jenis Penghargaan Adwiyata</strong></td>
                  </tr>
                <tr>
                  <td style="">&nbsp;</td>
                  <td style=""><strong>Penghargaan Adwiyata Kabupaten/Kota</strong></td>
                  </tr>
                <tr>
                  <td style=""><p>&nbsp;</p></td>
                  <td style="">&emsp;Penghargaan yang  diberikan oleh Bupati/Walikota.</td>
                  </tr>
                <tr>
                  <td style="">&nbsp;</td>
                  <td style=""><strong>Penghargaan Adwiyata Nasional</strong></td>
                  </tr>
                <tr>
                  <td style="">&nbsp;</td>
                  <td style="">&emsp;Penghargaan  yang diberikan langsung oleh Menteri Lingkungan Hidup dan Kehutanan</td>
                  </tr>
                <tr>
                  <td style="">&nbsp;</td>
                  <td style=""><strong>Penghargaan Adwiyata Tingkat Provinsi</strong></td>
                  </tr>
                <tr>
                  <td style=""><p>&nbsp;</p></td>
                  <td style="">&emsp;Penghargaan yang  diberikan oleh Gubernur.</td>
                  </tr>
                <tr>
                  <td style="">&nbsp;</td>
                  <td style=""><strong>Penghargaan Adwiyata Mandiri</strong></td>
                  </tr>
                <tr>
                  <td style="">&nbsp;</td>
                  <td style="">&emsp;Penghargaan  khusus bagi tiap-tiap sekolah dengan penilaian berupa sekolah yang mempunyai  minimal 10 Sekolah binaan yang telah mendapatkan penghargaan Adiwiyata  Kabupaten/Kota, juga penghargaan yang diberikan oleh Presiden.</td>
                  </tr>
                <tr>
                  <td colspan="2" style=""><strong style="text-decoration:underline">Kriteria Penilaian Penghargaan Adwiyata</strong></td>
                  </tr>
                <tr>
                  <td style=""><strong>1.</strong></td>
                  <td style="">Aspek  kebijakan sekolah yang mempunyai wawasan lingkan hidup.</td>
                </tr>
                <tr>
                  <td style=""><strong>2.</strong></td>
                  <td style="">Aspek  kurikulum sekolah yang memiliki basis lingkungan hidup.</td>
                </tr>
                <tr>
                  <td style=""><strong>3.</strong></td>
                  <td style="">Aspek  pengelolaan sarana serta prasarana pendukungan sekolah yang ramah lingkungan.</td>
                </tr>
                <tr>
                  <td style=""><strong>4.</strong></td>
                  <td style="">Aspek  kegiatan lingkungan di sekolah yang berbasis partisipatif.</td>
                </tr>
                <tr>
                    <td style="">
                        <p style="text-align: justify">&nbsp;</p>
                    </td>
                    <td style="">&nbsp;</td>
                </tr>
                </tbody>
            </table>
                </div>
                <div id="sca" class="tab-pane">
                    <br>
                    <br>
                    <h2 class="hero-heading">Sekolah Calon Adwiyata</h2>
                    <br>
                    <br>
                    <table id="datatable1" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>{{__("No")}}</th>
                            <th>{{__("Nama Sekolah")}}</th>
                            <th>{{__("Alamat")}}</th>
                            <th>{{__("SK")}}</th>
                            <th>{{__("Kepala Sekolah")}}</th>
                            <th>{{__("Tahun")}}</th>
                        </tr>
                        </thead>
                        <tbody>

                                @php
                                $no = 1;
                                @endphp
                                @foreach($sca as $ssc)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$ssc->namasekolah}}</td>
                                    <td>{{$ssc->alamat}}</td>
                                    <td>{{$ssc->sk}}</td>
                                    <td>{{$ssc->kepalasekolah}}</td>
                                    <td>{{$ssc->tahun}}</td>

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
                <div id="sna" class="tab-pane">
                    <br>
                    <br>
                    <h2 class="hero-heading">Sekolah Non Adwiyata</h2>
                    <br>
                    <br>
                    <table id="datatable2" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>{{__("No")}}</th>
                            <th>{{__("Nama Sekolah")}}</th>
                            <th>{{__("Alamat")}}</th>
                            <th>{{__("SK")}}</th>
                            <th>{{__("Kepala Sekolah")}}</th>
                            <th>{{__("Kecamatan")}}</th>
                            <th>{{__("Tahun")}}</th>
                        </tr>
                        </thead>
                        <tbody>

                        @php
                            $no = 1;
                        @endphp
                        @foreach($sna as $ssc)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$ssc->namasekolah}}</td>
                                <td>{{$ssc->alamat}}</td>
                                <td>{{$ssc->sk}}</td>
                                <td>{{$ssc->kepalasekolah}}</td>
                                <td>{{$ssc->kecamatan}}</td>
                                <td>{{$ssc->tahun}}</td>

                            </tr>
                            @php $no++ @endphp
                        @endforeach

                        </tbody>
                    </table>
                    <script>
                        $(document).ready(function () {
                            $('#datatable2').dataTable();
                        });
                    </script>
                </div>
                <div id="scatingkat" class="tab-pane">
                    <br>
                    <br>
                    <h2 class="hero-heading">Sekolah Calon Adwiyata Tingkat</h2>
                    <br>
                    <br>
                    <table id="datatable3" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>{{__("No")}}</th>
                            <th>{{__("Nama Sekolah")}}</th>
                            <th>{{__("Alamat")}}</th>
                            <th>{{__("SK")}}</th>
                            <th>{{__("Kepala Sekolah")}}</th>
                            <th>{{__("Penghargaan")}}</th>
                            <th>{{__("Tahun")}}</th>
                        </tr>
                        </thead>
                        <tbody>

                        @php
                            $no = 1;
                        @endphp
                        @foreach($sna as $ssc)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$ssc->namasekolah}}</td>
                                <td>{{$ssc->alamat}}</td>
                                <td>{{$ssc->sk}}</td>
                                <td>{{$ssc->kepalasekolah}}</td>
                                <td>{{$ssc->penghargaan}}</td>
                                <td>{{$ssc->tahun}}</td>

                            </tr>
                            @php $no++ @endphp
                        @endforeach

                        </tbody>
                    </table>
                    <script>
                        $(document).ready(function () {
                            $('#datatable3').dataTable();
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection
