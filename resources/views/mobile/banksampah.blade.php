@extends('layouts.mobile')

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
                                <img src="../image-resources/dlh/mendirikan.png" style="width:100%; height:25%">
                            </td>
                        </tr>

                        <tr>
                            <td align="center" colspan="2">
                                <img src="../image-resources/dlh/menjadi.png" style="width:100%; height:25%">
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
                    <form id="pelaku"  method="post" enctype="multipart/form-data" action="javascript:void(0)" style="display: none;">
                        @csrf
                        <div id="bar" class="hidden"><img src="img/loading1.gif" style="width: 35%; height: 50%;"></div>
                        <div id="frm" class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    Nama :
                                </div>
                                <div class="col-md-2">
                                    <input name="nama" type="text" class="form-control" required autocomplete="off" placeholder="Nama">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2">
                                    Alamat :
                                </div>
                                <div class="col-md-2">
                                    <textarea  name="alamat" class="form-control" required autocomplete="off" placeholder="Alamat"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2">
                                    Jenis Kerajinan :
                                </div>
                                <div class="col-md-2">
                                    <textarea name="jenis" type="text" class="form-control"  autocomplete="off" placeholder="Jenis Kerajinan"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2">
                                    Jumlah Nasabah :
                                </div>
                                <div class="col-md-2">
                                    <input name="jumlah" type="number" class="form-control" required autocomplete="off" placeholder="Jumlah Nasabah">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2">
                                    Tahun :
                                </div>
                                <div class="col-md-2">
                                    <input name="tahun" type="number" class="form-control" required autocomplete="off" placeholder="Tahun">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2">
                                    Foto :
                                </div>
                                <div class="col-md-2">
                                    <input class="hidden" for="foto" id="deskq" name="dek">
                                    <span class="btn btn-primary btn-file">
                                <span class="fileinput-new" id="labelfileq">Select file</span>
                                <input accept="image/*" id="foto" name="foto" type="file"  onchange="document.getElementById('deskq').value = this.value; document.getElementById('labelfileq').innerHTML = this.value;"  autocomplete="off">
                            </span>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2">
                                    <button id="btn-submit" class="btn btn-success" type="submit">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form id="editor"  method="post" enctype="multipart/form-data" action="javascript:void(0)" style="display: none;">
                        @csrf
                        <div id="bar" class="hidden"><img src="img/loading1.gif" style="width: 35%; height: 50%;"></div>
                        <div id="frm" class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    Nama :
                                </div>
                                <div class="col-md-2">
                                    <input id="id" type="hidden" name="id">
                                    <input id="nama" name="nama" type="text" class="form-control" required autocomplete="off" placeholder="Nama">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2">
                                    Alamat :
                                </div>
                                <div class="col-md-2">
                                    <textarea id="alamat"  name="alamat" class="form-control" required autocomplete="off" placeholder="Alamat"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2">
                                    Jenis Kerajinan :
                                </div>
                                <div class="col-md-2">
                                    <textarea id="jenis" name="jenis" type="text" class="form-control" autocomplete="off" placeholder="Jenis Kerajinan"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2">
                                    Jumlah Nasabah :
                                </div>
                                <div class="col-md-2">
                                    <input id="jumlah" name="jumlah" type="number" class="form-control" required autocomplete="off" placeholder="Jumlah Nasabah">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2">
                                    Tahun :
                                </div>
                                <div class="col-md-2">
                                    <input id="tahun" name="tahun" type="number" class="form-control" required autocomplete="off" placeholder="Tahun">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2">
                                    Foto :
                                </div>
                                <div class="col-md-2">
                                    <input class="hidden" for="foto" id="desk" name="desk">
                                    <span class="btn btn-primary btn-file">
                                <span class="fileinput-new" id="labelfile">Select file</span>
                                <input accept="image/*" id="foto" name="foto" type="file"  onchange="document.getElementById('desk').value = this.value; document.getElementById('labelfile').innerHTML = this.value;" autocomplete="off">
                            </span>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2">
                                    <button type="submit" id="btn-edit" class="btn btn-primary hidden">Edit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <button id="myDIV" class="btn btn-success" style="float: left" onclick="myFunction()" >Add</button>
                    <script>

                        function myFunction() {
                            var x = document.getElementById("myDIV");
                            var y = document.getElementById("pelaku")
                            var yx = document.getElementById("editor")
                            if (x.innerHTML === "Add") {
                                x.innerHTML = "Cancel";
                                x.style.borderColor = "#d67520";
                                x.style.background = "#e67e22";
                                y.reset();
                                y.style.display = '';
                                yx.reset();
                                yx.style.display = 'none';
                                $('#labelfile').html('Select File');
                                $('#labelfile1').html('Select File');
                                $('#btn-submit').attr('type','submit')
                            } else {
                                x.innerHTML = "Add";
                                y.style.display = 'none';
                                yx.style.display = 'none';
                                x.style.borderColor= "#29b765";
                                x.style.background= "#58d68d";
                                $('#labelfile').html('Select File');
                                $('#labelfile1').html('Select File');
                            }
                        }
                    </script>
                    <br>
                    <br>
                    <table id="datatable1" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%" style="font-size: xx-small">
                        <thead>
                        <tr>
                            <th>{{__("No")}}</th>
                            <th>{{__("Nama")}}</th>
                            <th>{{__("Alamat")}}</th>
                            <th>{{__("Detail")}}</th>
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
                        $("#pelaku").submit(function (e) {

                            e.preventDefault();
                            var formData = new FormData($(this)[0]);
                            var x = document.getElementById("myDIV");
                            $.ajax({
                                url: '{{url("cbank")}}',
                                type: "POST",
                                data: formData,
                                async: false,
                                cache: false,
                                contentType: false,
                                enctype: 'multipart/form-data',
                                processData: false,
                                success: function (response) {
                                    x.innerHTML = "Add";
                                    x.style.borderColor= "#29b765";
                                    x.style.background= "#58d68d";
                                    $('#btn-submit').html('Simpan');
                                    $('#res_message').show();
                                    var oTable = $('#datatable1').dataTable();
                                    oTable.fnDraw(false);
                                    $('#res_message').html(response.msg);
                                    $('#msg_div').removeClass('hidden');
                                    document.getElementById("pelaku").reset();
                                    document.getElementById("pelaku").style.display='none';
                                    $('#bar').addClass('hidden');
                                    $('#frm').removeClass('hidden');
                                    setTimeout(function () {
                                        $('#res_message').addClass('hidden');
                                        $('#msg_div').addClass('hidden');
                                    }, 3000);
                                },
                                error: function (data) {
                                    console.log("Error:", data.statusText);
                                    console.log("Error:", data.responseJSON.message);
                                }

                            });
                        });
                        $("#editor").submit(function (e) {
                            e.preventDefault();
                            var formData = new FormData($(this)[0]);
                            var x = document.getElementById("myDIV");
                            $.ajax({
                                url: '{{url("ebank")}}' ,
                                type: "POST",
                                data: formData,
                                async: false,
                                cache: false,
                                contentType: false,
                                enctype: 'multipart/form-data',
                                processData: false,
                                success: function( response ) {
                                    var j = [response.msg];
                                    x.innerHTML = "Add";
                                    x.style.borderColor= "#29b765";
                                    x.style.background= "#58d68d";
                                    $('#btn-edit').html('Edit');
                                    $('#res_message').show();
                                    $('#btn-submit').removeClass('hidden');
                                    $('#btn-edit').addClass('hidden');
                                    var oTable = $('#datatable1').dataTable();
                                    oTable.fnDraw(false);
                                    $('#res_message').html(j[0]);
                                    $('#msg_div').removeClass('hidden');
                                    document.getElementById("editor").reset();
                                    document.getElementById("editor").style.display='none';
                                    setTimeout(function(){
                                        $('#res_message').addClass('hidden');
                                        $('#msg_div').addClass('hidden');
                                    },3000);
                                },
                                error: function (data) {
                                    console.log(data);
                                    alert("Error: "+data.statusText + " & " + data.responseJSON.message);

                                }
                            });

                        });

                        $('body').on('click','.fotol',function () {
                            const id = $(this).attr('id');
                            let x = document.getElementById(id).style;
                            let y = document.getElementById('fotol'+id).style;
                            if (x.width === "800px") {
                                x.width = '150px';
                                x.height = '100px';
                                x.marginLeft = '0%';
                                x.marginTop = '0%';
                                x.transition = '1s'
                                y.position = '';
                                y.width = '0%';
                                y.height = '0%';
                                y.marginLeft = '0%';
                                y.marginTop = '0%';
                                y.backgroundColor = "";
                            } else {
                                x.width = '800px';
                                x.height = '600px';
                                x.marginLeft = '30%';
                                x.marginTop = '3%';
                                x.transition = '1s'
                                y.position = 'absolute';
                                y.width = '90%';
                                y.height = '113%';
                                y.marginLeft = '-80%';
                                y.marginTop = '-22%';
                                y.backgroundColor = "transparent";
                            }
                        });

                        $('body').on('click', '.edit-user', function () {
                            var user_id = $(this).attr('id');
                            var x = document.getElementById("myDIV")
                            $.get("{{url('/sbank')}}"+ '/' +user_id, function (data) {
                                document.getElementById("pelaku").style.display='none';
                                document.getElementById("editor").style.display='';
                                x.innerHTML = "Cancel";
                                x.style.borderColor = "#d67520";
                                x.style.background = "#e67e22";
                                $('#btn-submit').addClass('hidden');
                                $('#btn-edit').removeClass('hidden');
                                $('#tahun').val(data.tahun);
                                $('#alamat').val(data.alamat);
                                $('#jenis').val(data.jeniskegiatan);
                                $('#jumlah').val(data.jumlahnasabah);
                                $('#labelfile').html(data.foto);
                                $('#desk').val(data.foto);
                                $('#nama').val(data.nama);
                                $('#id').val(data.id);
                                var oTable = $('#datatable1').dataTable();
                                oTable.fnDraw(false);
                            })
                        });

                        $(document).ready(function () {
                            $('#datatable1').dataTable();
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection
