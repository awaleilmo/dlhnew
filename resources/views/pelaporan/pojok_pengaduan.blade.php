@extends('layouts.tampilan')

@section('content')

    <div class="hero-box hero-box-smaller bg-gradient-3 font-inverse">
        @if ($message = Session::get('alert'))
            <div id="alert" class="alert alert-success alert-block" style="text-align: center">
                <button type="button" onclick="document.getElementById('alert').style.display ='none'" class="close" data-dismiss="alert">×</button>
                <strong>{{$message}}</strong>
            </div>
        @endif
            @if ($message = Session::get('gagal'))
                <div id="alert" class="alert alert-danger alert-block" style="text-align: center">
                    <button type="button" onclick="document.getElementById('alert').style.display ='none'" class="close" data-dismiss="alert">×</button>
                    <strong>{{$message}}</strong>
                </div>
            @endif
        <script type="text/javascript" src="assets/widgets/datepicker/datepicker.js"></script>
        <script type="text/javascript">
            /* Datepicker bootstrap */

            $(function() { "use strict";
                $('.bootstrap-datepicker').bsdatepicker({
                    format: 'dd-mm-yyyy'
                });
            });

        </script>
        <script type="text/javascript" src="assets/widgets/timepicker/timepicker.js"></script>
        <script type="text/javascript">

            /* Timepicker */

            $(function() { "use strict";
                $('.timepicker-example').timepicker();
            });
        </script>
        <div class="container" style="margin-top: 2em;">
            <h1 class="hero-heading wow fadeInDown animated animated" data-wow-duration="0.6s" style="visibility: visible; animation-duration: 0.6s;">LAYANAN PENGADUAN DUGAAN PENCEMARAN DAN PERUSAKAN LINGKUNGAN HIDUP ATAU PERUSAKAN HUTAN</h1>
            <br>
            <br>
            <br>
            <br>
            <p class="hero-text wow bounceInUp animated animated" data-wow-duration="0.9s" data-wow-delay="0.2s" style="text-align: justify ; visibility: visible; animation-duration: 0.9s; animation-delay: 0.2s;">
                Pengadu melengkapi informasi sesuai dengan formulir pengaduan di bawah ini : </p>
            <br>

        </div>
        <div class="hero-overlay bg-green opacity-30">
            <div class="hero-pattern pattern-bg-2" style="opacity: .3">

            </div>
        </div>
            <div class="btn btn-group">
                <button id="1" onclick="myas()" class="btn btn-success active btn-lg btn-light">Formulir Pengaduan</button>
                <button id="2" onclick="myas1()" class="btn btn-success btn-lg">Pengaduan Terkirim</button>
            </div>
        <br>
        <br>
        <br>
        <div id="formulir">
        <p  class="hero-text wow bounceInUp animated animated" data-wow-duration="0.9s" data-wow-delay="0.2s" style=" opacity: 1 ; text-align: center ; font-size: xx-large; visibility: visible; animation-duration: 0.9s; animation-delay: 0.2s;"> FORMULIR PENGADUAN</p>
        <br>
        <form id="pojok" method="post" action="{{url('pojok_pengaduan')}}" enctype="multipart/form-data">
            @csrf
        <table cellpadding="20" class="wow bounceInUp animated animated" bgcolor="" data-wow-duration="0.9s" data-wow-delay="0.2s" style="opacity:1; color: black; width: 70%; border-radius: 10px; font-size: x-large; text-align: left" align="center">
        <tr>
             <td>Tempat</td>
             <td><input name="tempat" class="form-control" type="text">
                 <input name="userId" class="hidden" type="text" value="{{Auth::user()->id}}">
             </td>
        </tr>
            <tr>
                <td colspan="2"><strong>A. Identitas Pengadu</strong></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input name="nama" class="form-control" type="Text"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" class="form-control"></textarea></td>
            </tr>
            <tr>
                <td>NO Telp</td>
                <td><input name="nohp" class="form-control" type="number"></td>
            </tr>
            <tr>
                <td colspan="2"><strong>B. Lokasi Kejadian</strong></td>
            </tr>
            <tr>
                <td>Alamat Kejadian</td>
                <td><input name="alamatkejadian" class="form-control" type="Text"></td>
            </tr>
            <tr>
                <td colspan="2"><strong>C. Dugaan Sumber atau Penyebab</strong></td>
            </tr>
            <tr>
                <td>Jenis Kegiatan ( <i>jika diketahui</i> )</td>
                <td><input name="jeniskegiatan" class="form-control" type="Text"></td>
            </tr>
            <tr>
                <td>Nama Kegiatan dan/atau usaha ( <i>jika diketahui</i> )</td>
                <td><input name="namakegiatan" class="form-control" type="Text"></td>
            </tr>
            <tr>
                <td colspan="2"><strong>D. Waktu dan Uraian Kejadian</strong></td>
            </tr>
            <tr>
                <td colspan="2">Waktu diketahuinya pencemaran dan atau perusakan lingkungan dan/atau perusakan hutan:</td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="uraianwaktu" class="form-control timepicker-example"></td>
            </tr>
            <tr>
                <td colspan="2">Uraian Kejadian</td>
            </tr>
            <tr>
                <td colspan="2"><textarea name="uraiankejadian" class="form-control"></textarea></td>
            </tr>
            <tr>
                <td colspan="2">Dampak yang dirasakan akibat pencemaran dan atau perusakan lingkungan dan/atau perusakan hutan:</td>
            </tr>
            <tr>
                <td colspan="2"><textarea name="uraiandampak" class="form-control"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><strong>E. Penyelesaian yang Diinginkan</strong></td>
            </tr>
            <tr>
                <td colspan="2"><textarea name="penyelesaian" class="form-control"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><strong>F. Pernah Menyampaikan Pengaduan</strong></td>
            </tr>
            <tr>
                <td colspan="2">
                    <table cellpadding="3" cellspacing="3" border="1">
                        <thead>
                        <tr>
                            <td>Nama Instansi</td>
                            <td>Tanggal</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td><input class="form-control" name="namainstansi" type="text"></td>
                        <td><input class="form-control bootstrap-datepicker" name="tglpengaduan" type="text"></td>
                        </tr>
                        <tr>
                            <td><input class="form-control" name="namainstansi2" type="text"></td>
                            <td><input class="form-control bootstrap-datepicker" name="tglpengaduan3" type="text"></td>
                        </tr>
                        <tr>
                            <td><input class="form-control" name="namainstansi3" type="text"></td>
                            <td><input class="form-control bootstrap-datepicker" name="tglpengaduan3" type="text"></td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2"><strong>G. Lokasi Dan Upload Foto</strong></td>
            </tr>
            <tr>
                <td>Upload foto</td>
                <td><input type="file" class="form-control" name="foto"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <h2>Lokasi</h2>

                    <div id="googl" style="width:100%;height:380px;"></div>
                    <script>

                            var dlh = L.layerGroup();

                            L.marker([-6.112387777530127, 106.14165547958123]).addTo(dlh);

                            var ma =
                                    L.tileLayer('https://{s}.google.com/vt/lyrs=m@221097413,traffic&x={x}&y={y}&z={z}', {
                                        maxZoom: 20,
                                        minZoom: 2,
                                        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                                    }),

                                sa = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
                                    maxZoom: 20,
                                    subdomains:['mt0','mt1','mt2','mt3']
                                });

                            var peta = L.map('googl', {
                                center: [-6.112387777530127, 106.14165547958123],
                                zoom: 15,
                                layers: [ma]
                            });

                            var layer = {
                                "Map": ma,
                                "Satellite": sa
                            };

                            var dinas = {
                                "dinas lingkungan hidup kota serang": dlh,

                            };

                            var kon = L.control.layers(layer, dinas).addTo(peta);

                            var markdinas ;



                            var popupdinas = L.popup();

                            function onMapClick(e) {
                                if (markdinas != undefined) {
                                    peta.removeLayer(markdinas);
                                }
                                var lat = e.latlng;
                                var lat1 = e.latlng.lat;
                                var lng = e.latlng.lng;
                                markdinas = L.marker(lat).addTo(peta);
                                document.getElementById("lokasi").value= lat1+","+lng;
                            }

                            peta.on('click', onMapClick);

                    </script>
                    <br>
                    <br>
                    <input readonly  type="hidden" id="lokasi" name="lokasi" value="">
                </td>
            </tr>
            <tr>
                <td></td>
                <td align="right"><input type="submit" class="btn btn-lg btn-primary btn-outline" value="Kirim"></td>
            </tr>

        </table>
        </form>
        </div>
            <script type="text/javascript" src="../../assets/widgets/datatable/datatable.js"></script>
            <script type="text/javascript" src="../../assets/widgets/datatable/datatable-bootstrap.js"></script>
            <script type="text/javascript" src="../../assets/widgets/datatable/datatable-tabletools.js"></script>
        <div id="terkirim" style="display: none; width: 80%; margin-left: 10%">
            <table id="datatable1" align="center" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">

                <thead>
                <tr>
                    <th>{{__('Tanggal Pengaduan')}}</th>
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
                { data: 'nama', name: 'nama', },
                { data: 'alamat', name: 'alamat', },
                { data: 'notelp', name: 'notelp', },
                { data: 'status', name: 'status', },
                { data: 'action', name: 'action',},
            ],
            order: [[0, 'asc']]
        });
        </script>

       <script>
           function myas(){
               let x = $('#1');
               let y = $('#2');
               let z = document.getElementById('formulir');
               let p = document.getElementById('terkirim');
               z.style.display = '';
               p.style.display = 'none';
               y.removeClass('active');
               x.addClass('active');
           }
           function myas1(){
               let x = $('#1');
               let y = $('#2');
               let z = document.getElementById('formulir');
               let p = document.getElementById('terkirim');
               p.style.display = '';
               z.style.display = 'none';
               x.removeClass('active');
               y.addClass('active');

           }
       </script>

    </div>


@endsection
