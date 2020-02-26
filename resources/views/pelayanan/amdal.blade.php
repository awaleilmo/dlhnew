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
                        <p style="text-align: justify">Informasi umum formulir Kerangka Acuan Andal minimal berisikan antara lain :</p>
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
                    <p style="text-align: justify">2. Pelingkupan</p>
                </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">Muatan pelingkupan pada dasarnya berisi informasi tentang :</p>
                    </td>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">a.	Rencana Kegiatan Yang Berpotensi Menimbulkan Dampak ~ rencana kegiatan yang berpotensi menimbulkan dampak sangat terkait erat dengan tahapan rencana kegiatan yang akan dilakukan oleh pelaku usaha.</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">b.	Pengelolaan Lingkungan Hidup Yang Sudah Direncanakan ~ pada bagian ini dijelaskan informasi terkait dengan pengelolaan lingkungan dan pemantauan lingkungan yang sudah direncanakan sebelumnya oleh pelaku usaha.</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">c.	Komponen Lingkungan Terkena Dampak ~ pada bagian ini harus menguraikan data dan informasi yang terkait atau relevan dengan dampak yang mungkin terjadi. Deskripsi ini didasarkan data dan informasi primer dan/atau skunder yang bersifat aktual dan menggunakan sumber data informasi yang valid untuk data sekunder yang resmi dan/atau kredibel untuk menjamin validitas data informasi serta didukung oleh hasil observasi lapangan. Data dan informasi rinci terkait dengan Rona Lingkungan Hidup harus dilakukan untuk masing-masing alternatif lokasi. Deskripsi Rona Lingkungan Hidup Awal dapat disajikan dalam bentuk data dan informasi spasial.</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">d.	Dampak Potensial ~ pada bagian ini dilakukan identifikasi dan inventarisasi segenap dampak lingkungan hidup (primer, skunder dan seterusnya) yang secara potensial akan timbul sebagai akibat adanya rencana usaha dan/atau kegiatan yang dilakukan oleh pelaku usaha. Proses identifikasi dampak potensial dilakukan dengan menggunakan metode-metode ilmiah yang berlaku secara nasional dan/atau internasional di berbagai literatur. Keluaran yang diharapkan disajikan dalam bagian ini adalah berupa daftar dampak-dampak potensial yang mungkin timbul atas adanya rencana usaha dan/atau kegiatan yang diusulkan.</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">e.	Evaluasi Dampak Potensial ~  pada bagian ini penyusun dokumen amdal menguraikan proses evaluasi dampak potensial yang dilakukan, yaitu dengan memisahkan dampak-dampak yang perlu kajian mendalam untuk membuktikan dugaan (hipotesa) dampak (dari dampak yang tidak lagi perlu dikaji). Dalam proses ini, harus dijelaskan dasar penentuan bagaimana suatu dampak potensial dapat disimpulkan menjadi Dampak Penting Hipotetik (DPH) atau tidak.</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">f.	Dampak Penting Hipotetik ~ pada bagian ini berisikan kesimpulan dari hasil evaluasi dampak potensial yang telah dilakukan.</p>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">g.	Batas Wilayah Studi ~ batas wilayah studi ini merupakan batas terluar dari hasil tumpang susun (overlay) dari batas wilayah proyek, ekologis, sosial dan administratif setelah mempertimbangkan kendala teknis yang dihadapi.  Batasan ruang lingkup wilayah studi penentuannya disesuaikan dengan kemampuan pelaksana yang biasanya memiliki keterbatasan sumber data, seperti waktu, dana, tenaga, teknis, dan metode telaahan. Setiap penentuan masing-masing batas wilayah (proyek, ekologis, sosial dan administratif) harus dilengkapi dengan justifikasi ilmiah yang kuat. Bagian ini harus dilengkapi dengan peta batas wilayah studi yang dapat menggambarkan batas wilayah proyek, ekologis, sosial dan administratif. Peta yang disertakan harus memenuhi kaidah-kaidah kartografi.</p>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">Batas wilayah studi dibentuk dari 4 unsur yang berhubungan dengan dampak lingkungan suatu rencana kegiatan yaitu :</p>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">1.	BATAS PROYEK ~ yaitu ruang dimana seluruh komponen rencana kegiatan akan dilakukan, termasuk komponen kegiatan tahap pra-konstruksi, konstruksi, operasi dan pasca operasi. Dari ruang rencana usaha dan/atau kegiatan inilah bersumber dampak terhadap lingkungan hidup sekitarnya. Batas proyek secara mudah dapat diplotkan pada peta, karena lokasi-lokasinya dapat diperoleh langsung dari peta-peta pelaku usaha. Selain tapak proyek utama, batas proyek juga harus meliputi fasilitas pendukung seperti perumahan, dermaga, tempat penyimpanan bahan, bengkel, dan sebagainya.</p>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">2.	BATAS EKOLOGIS ~ yaitu ruang terjadinya sebaran dampak-dampak lingkungan dari suatu rencana usaha dan/atau kegiatan yang akan dikaji, mengikuti media masing-masing lingkungan (seperti air dan udara), dimana proses alami yang berlangsung dalam ruang tersebut diperkirakan akan mengalami perubahan mendasar. Batas ekologis akan mengarahkan penentuan lokasi pengumpulan data rona lingkungan hidup awal dan analisis persebaran dampak. Penentuan batas ekologis harus mempertimbangkan setiap komponen lingkungan biogeofisik-kimia yang terkena dampak (dari daftar dampak penting hipotetik). Untuk masing-masing dampak, batas persebarannya dapat diplotkan pada peta sehingga batas ekologis memiliki beberapa garis batas, sesuai dengan jumlah dampak penting hipotetik.</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">3.	BATAS SOSIAL ~ yaitu ruang disekitar rencana usaha dan/atau kegiatan yang merupakan tempat berlangsungnya berbagai interaksi sosial yang mengandung norma dan nilai tertentu yang sudah mapan (termasuk sistem dan struktur sosial), sesuai dengan proses dan dinamika sosial suatu kelompok suatu kelompok masyarakat, yang diperkirakan akan mengalami perubahan mendasar akibat suatu rencana usaha dan/atau kegiatan. Batas ini pada dasarnya merupakan ruang dimana masyarakat yang terkena dampak lingkungan seperti limbah, emisi, atau kerusakan lingkungan, tinggal atau melakukan kegiatan. Batas sosial akan mempengaruhi identifikasi kelompok masyarakat yang terkena dampak sosial-ekonomi-kesehatan masyarakat dan penentuan masyarakat yang perlu dikonsultasikan (pada tahap lanjutan keterlibatan masyarakat).</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">4.	BATAS ADMINISTRATIF ~ yaitu wilayah administratif terkecil yang relevan (seperti desa, kelurahan, kecamatan, kabupaten, provinsi) yang wilayahnya tercakup 3 unsur batas diatas. Dengan menumpangsusunkan (overlay) batas administratif wilayah pemerintahan dengan 3 peta batas seperti tersebut diatas, maka akan terlihat desa/kelurahan, kecamatan, kabupatan dan/atau provinsi mana saja yang masuk dalam batas proyek, batas ekologis dan batas sosial. Batas administrtif sebenarnya diperlukan untuk mengarahkan pelau usaha dan/atau penyusun amdal untuk dapat berkoordinasi ke lembaga pemerintah daerah yang relevan, baik untuk koordinasi administratif (misalnya penilaian Amdal dan pelaksanaan konsultasi masyarakat), pengumpulan data tentang kondisi rona lingkungan awal, kegiatan di sekitar lokasi kegiatan, dan sebagainya.
                            Masing-masing batas diplotkan pada peta yang kemudian ditumpang susunkan satu sama lain (overlay) sehingga dapat ditarik garis luar gabungan ke-4 batas tersebut. Garis luar gabungan itu yang disebut sebagai 'Batas Wilayah Studi'. Dalam proses ini, harus dijelaskan dasar penentuan batas wilayah studi.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">h. Batas Waktu Kajian ~ dalam proses pelingkupan, harus teridentifikasi secara jelas pula batas waktu kajian yang akan digunakan dalam melakukan prakiraan dan evaluasi dampak dalam kajian amdal. Setiap dampak penting hipotetik yang dikaji memiliki batas waktu kajian tersendiri. Penentuan batas waktu kajian ini selanjutnya digunakan sebagai dasar untuk melakukan penentuan perubahan rona lingkungan tanpa adanya rencana usaha dan/atau kegiatan atau dengan adanya rencana usaha dan/atau kegiatan.</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">3. Metode Studi</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">Pada prinsipnya metode studi ini berisi tentang penjelasan dan informasi mengenai :</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">a. Metode Pengumpulan dan Analisis Data Yang Digunakan</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">1) Metode pengumpulan dan analisis data : bagian ini berisi metode pengumpulan data primer dan skunder yang sahih serta dapat dipercaya (reliable) untuk digunakan dalam penyusunan rona lingkungan hidup awal yang rinci dan sebagai masukan dalam melakukan prakiraan besaran dan sifat penting dampak. Metode pengumpulan dan analisis data harus relevan dengan metode pengumpulan dan analisis data untuk penentuan rona lingkungan hidup rinci serta metode prakiraan dampak yang digunakan untuk setiap dampak penting hipotetik yang akan dikaji, sehingga data yang dikumpulkan relevan dan representatif dengan dampak penting hipotetik yang akan dianalisis dalam prakiraan dampak, yaitu :</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">• Cantumkan secara jelas metode yang digunakan dalam proses pengumpulan data berikut dengan jenis peralatan, instrumen, dan tingkat ketelitian alat yang digunakan dalam pengumpulan data. Metode pengumpulan data yang digunakan harus sesuai Standar Nasional Indonesia (SNI), sesuai peraturan perundang-undangan yang berlaku atau metode-metode ilmiah yang berlaku secara nasional dan/atau internasional di berbagai literatur.</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">• Uraikan metode yang digunakan untuk menganalisis data hasil pengukuran. Cantumkan jenis peralatan, instrumen, dan rumus yang digunakan dalam proses analisis data. Khusus untuk analisis data primer yang memerlukan pengujian laboratorium, maka harus dilakukan di laboratorium yang terakreditasi dan/atau teregistrasi.</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">b. Metode Prakiraan Dampak Penting Yang Akan Digunakan</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">• Bagian ini menjelaskan metode prakiraan dampak penting yang digunakan untuk memprakirakan besaran dan sifat penting dampak dalam studi andal untuk masing-masing dampak penting hipotetik, termasuk rumus-rumus dan asumsi prakiraan dampaknya disertai argumentasi/alasan pemilihan metode tersebut,</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">• Penyusun dokumen Amdal dapat menggunakan metode-metode ilmiah yang berlaku secara nasional dan/atau internasional di berbagai literatur untuk melakukan prakiraan dampak penting yang sesuai dengan kaidah ilmiah metode prakiraan dampak penting dalam Amdal.</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">c.	Metode Evaluasi Secara Holistik Terhadap Dampak Lingkungan</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">• Evaluasi secara holistik terhadap dampak lingkungan yang terjadi dilakukan untuk menentukan kelayakan atau ketidaklayakan lingkungan hidup.</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">• Bagian ini menguraikan metode-metode yang lazim digunakan dalam Studi Andal untuk mengevaluasi keterkaitan dan interkasi dampak lingkungan yang diprakirakan timbul (seluruh dampak penting hipotetik) secara keseluruhan dalam rangka penentuan karakteristik dampak rencana usaha dan/atau kegiatan secara total terhadap lingkungan hidup. Meotde evaluasi dampak menggunakan metode-metode ilmiah yang berlaku secara nasional dan/atau internasional di berbagai literatur yang sesuai dengan kaidah ilmiah metode evaluasi dampak penting dalam Amdal.</p>
                    </td>

                </tr>


                <tr>
                    <td style="width: 976px;">
                        <p style="text-align: justify">Semua informasi yang dijelaskan diatas disampaikan dalam bentuk Formulir KA sebagaimana berikut :</p>
                    </td>
                </tr>
                <tr>
                    <td>@foreach($p as $pp)
                        <a href="upload/dokumenlingkungan/{{$pp->forms}}" download="upload/dokumenlingkungan/{{$pp->forms}}" class="btn btn-primary" style="font-size: large;"><i class="glyph-icon icon-file-word-o"></i> Download Form </a>
                        @endforeach
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
