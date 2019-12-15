<!DOCTYPE html>
<html lang="en">


<head>

    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <title> DLH KOTA SERANG </title>

    @include('cssother')
    <style>
        @font-face {
            font-family: "time";
            src: url('font/times.ttf');
        }
    </style>
    <script type="text/javascript">
        $(window).load(function(){
          window.print();
        });
    </script>
</head>
<body style="color: black">
<div class="sb-site">

    <div class="container" style=";  width: 21.6cm; height:27.9cm;">
      <table style="width: 21.6cm">
          <tr>
          <td><img src="../image-resources/dlh/Lambang_Kota_Serang.jpg" style="width: 10em; margin-left: 20%"></td>
          <td style="text-align: center; font-family: time">
              <p style="font-size: 22px">
                  PEMERINTAH KOTA SERANG</p>
                <strong style="font-size: 32px">DINAS LINGKUNGAN HIDUP</strong>
                <p style="font-size: 15px; font-weight: bold">Jalan Letnan Jidun No. 5 Kepandean Telp. 0254-221 764 Kode Pos 42112<p>
               <p style="font-size: 22px; font-weight: bold"> SERANG - BANTEN
              </p>
          </td>
          </tr>
      </table>
      <hr style="border-top: 3px solid black;">
        <br>
        <br>
        <div class="row" style="text-align: center">
            <strong style="font-size: 18px; font-family: time; ">
                FORMULIR PENGADUAN<br>
                DUGAAN PENCEMARAN DAN / ATAU PERUSAKAN LINGKUNGAN HIDUP<br> DAN / ATAU PERUSAKAN HUTAN
            </strong>
        </div>
        <br>
        <br>
        <br>
        <div class="row" style="text-align: justify; padding: 0 0 0 40px; word-spacing: 5px">
            <p style="font-size: 18px; font-family: Arial; ">
               Pada hari ini {{$pengaduan->created_at->dayName}} tanggal {{$pengaduan->created_at->day}} bulan {{$pengaduan->created_at->monthName}} tahun {{$pengaduan->created_at->year}} pukul {{$pengaduan->created_at->format('H:i:s')}} WIB, di <br>
               {{$pengaduan->tempat}} yang bertanda tangan di bawah ini:
            </p>
        </div>
        <br>
        <br>
        <table style="width: 93%; line-height: 1.9em" cellpadding="20" align="center">
            <tr style="text-align: justify; padding: 0 0 0 40px; word-spacing: 5px">
                <td colspan="3"><strong style="font-size: 18px; font-family: Arial; ">
                        A. Identitas Pengadu
                    </strong></td>
            </tr>
            <tr style="text-align: justify; padding: 0 0 0 40px; word-spacing: 5px">
                <td style="width: 1px;"><p style="font-size: 18px; font-family: Arial; padding-left: 25px">
                        1.
                    </p>
                </td>
                <td  style="width:35%">
                    <p style="font-size: 18px; font-family: Arial; padding-left: 5px">
                        Nama
                    </p>
                </td>
                <td >
                    <p style="font-size: 18px; font-family: Arial; padding-left: 10px">
                        : {{$pengaduan->nama}}
                    </p>
                </td>
            </tr>
            <tr style="text-align: justify; padding: 0 0 0 40px; word-spacing: 5px">
                <td width="2px"><p style="font-size: 18px; font-family: Arial; padding-left: 25px">
                        2.
                    </p>
                </td>
                <td >
                    <p style="font-size: 18px; font-family: Arial; padding-left: 5px">
                        Alamat
                    </p>
                </td>
                <td >
                    <p style="font-size: 18px; font-family: Arial; padding-left: 10px">
                        : {{$pengaduan->alamat}}
                    </p>
                </td>
            </tr>
            <tr style="text-align: justify; padding: 0 0 0 40px; word-spacing: 5px">
                <td width="2px"><p style="font-size: 18px; font-family: Arial; padding-left: 25px">
                        3.
                    </p>
                  <p style="font-size: 18px; font-family: Arial; padding-left: 10px">&nbsp;</p>
                </td>
                <td >
                    <p style="font-size: 18px; font-family: Arial; padding-left: 5px">
                        No Telp
                    </p>
                    <p style="font-size: 18px; font-family: Arial;">&nbsp;</p>
                </td>
                <td >
                    <p style="font-size: 18px; font-family: Arial; padding-left: 10px">
                        : {{$pengaduan->notelp}}
                    </p>
                    <p style="font-size: 18px; font-family: Arial; padding-left: 10px">&nbsp;</p>
                </td>
            </tr>
            <tr style="text-align: justify; padding: 0 0 0 40px; word-spacing: 5px">
                <td colspan="3">
                    <strong style="font-size: 18px; font-family: Arial; ">
                        B. Lokasi Kejadian
                    </strong>
                </td>
            </tr>
            <tr style="text-align: justify; padding: 0 0 0 40px; word-spacing: 5px">
                <td width="2px"><p style="font-size: 18px; font-family: Arial; padding-left: 25px">
                        1.
                    </p>
                    <p style="font-size: 18px; font-family: Arial;">&nbsp;</p>
                </td>
                <td >
                    <p style="font-size: 18px; font-family: Arial; padding-left: 5px">
                        Alamat Kejadian
                    </p>
                    <p style="font-size: 18px; font-family: Arial;">&nbsp;</p>
                </td>
                <td >
                    <p style="font-size: 18px; font-family: Arial; padding-left: 10px">
                        : {{$pengaduan->alamatkejadian}}
                    </p>
                    <p style="font-size: 18px; font-family: Arial; padding-left: 10px">&nbsp;</p>
                </td>
            </tr>
            <tr style="text-align: justify; padding: 0 0 0 40px; word-spacing: 5px">
                <td colspan="3">
                    <strong style="font-size: 18px; font-family: Arial; ">
                        C. Dugaan Sumber atau Penyebab
                    </strong>
                </td>
            </tr>
            <tr style="text-align: justify; padding: 0 0 0 40px; word-spacing: 5px">
                <td width="2px" valign="top"><p style="font-size: 18px; font-family: Arial; padding-left: 25px">
                        1.
                    </p>
                </td>
                <td >
                    <p style="font-size: 18px; font-family: Arial; padding-left: 5px">
                        Jenis Kegiatan <br>(jika diketahui)
                    </p>
                </td>
                <td valign="top">
                    <p style="font-size: 18px; font-family: Arial; padding-left: 10px">
                        : {{$pengaduan->jeniskegiatan}}
                    </p>
                </td>
            </tr>
            <tr style="text-align: justify; padding: 0 0 0 40px; word-spacing: 5px">
                <td width="2px" valign="top"><p style="font-size: 18px; font-family: Arial; padding-left: 25px">
                        2.
                    </p>
                </td>
                <td >
                    <p style="font-size: 18px; font-family: Arial; padding-left: 5px">
                        Nama Kegiatan dan/atau<br> usaha (jika diketahui)
                    </p>
                    <p style="font-size: 18px; font-family: Arial;">&nbsp;</p>
                </td>
                <td valign="top">
                    <p style="font-size: 18px; font-family: Arial; padding-left: 10px">
                        : {{$pengaduan->namakegiatan}}</p>
                    <p style="font-size: 18px; font-family: Arial; padding-left: 10px">&nbsp;</p>
                </td>
            </tr>
            <tr style="text-align: justify; padding: 0 0 0 40px; word-spacing: 5px">
                <td colspan="3">
                    <strong style="font-size: 18px; font-family: Arial; ">
                        D. Waktu dan Uraian Kejadian
                    </strong>
                </td>
            </tr>
            <tr style="text-align: justify; padding: 0 0 0 40px; word-spacing: 5px">
                <td width="2px" valign="top"><p style="font-size: 18px; font-family: Arial; padding-left: 25px">
                        1.
                    </p>
                </td>
                <td  colspan="2" style="padding-left: 0">
                    <p style="font-size: 18px; font-family: Arial; padding-left: 5px">Waktu diketahuinya pencemaran dan atau perusakan lingkungan dan/atau perusakan hutan:
                    </p>
                </td>
            </tr>
            <tr>
                <td>&nbsp;

                </td>
                <td  colspan="2"><i style="font-size: 18px; font-family: Arial; padding-left: 5px">
                        {{$pengaduan->waktu}}</i>
                    <p style="font-size: 18px; font-family: Arial; padding-left: 5px"><br>
                    </p></td>
            </tr>
            <tr style="text-align: justify; padding: 0 0 0 40px; word-spacing: 5px">
                <td width="2px"><p style="font-size: 18px; font-family: Arial; padding-left: 25px">
                        2.
                    </p>
                </td>
                <td  colspan="3" style="padding-left: 0">
                    <p style="font-size: 18px; font-family: Arial; padding-left: 5px">Uraian Kejadian:
                    </p>
                </td>
            </tr>
            <tr>
                <td >
                    &nbsp
                </td>
                <td  colspan="2"><i style="font-size: 18px; text-transform: capitalize; font-family: Arial; padding-left: 5px">
                        {{$pengaduan->uraiankejadian}}</i>
                    <p style="font-size: 18px; font-family: Arial; padding-left: 5px"><br>
                    </p></td>
            </tr>
            <tr style="text-align: justify; padding: 0 0 0 40px; word-spacing: 5px">
                <td width="2px" valign="top"><p style="font-size: 18px; font-family: Arial; padding-left: 25px">
                        3.
                    </p>
                </td>
                <td  colspan="3" style="padding-left: 0">
                    <p style="font-size: 18px; font-family: Arial; padding-left: 5px">Dampak yang dirasakan akibat pencemaran dan atau perusakan lingkungan dan/atau perusakan hutan:
                    </p>
                </td>
            </tr>
            <tr>
                <td >
                    &nbsp
                </td>
                <td  colspan="2"><i style="font-size: 18px; text-transform: capitalize; font-family: Arial; padding-left: 5px">
                        {{$pengaduan->dampak}}</i>
                    <p style="font-size: 18px; font-family: Arial; padding-left: 5px"><br>
                    </p></td>
            </tr>
            <tr style="text-align: justify; padding: 0 0 0 40px; word-spacing: 5px">
                <td colspan="3">
                    <strong style="font-size: 18px; font-family: Arial; ">
                        E. Penyelesaian yang Diinginkan
                    </strong>
                </td>
            </tr>
            <tr>
                <td >
                    &nbsp
                </td>
                <td colspan="2"><i style="font-size: 18px; text-transform: capitalize; font-family: Arial; padding-left: 5px">
                        {{$pengaduan->penyelesaian}}</i>
                    <p style="font-size: 18px; font-family: Arial; padding-left: 5px"><br>
                    </p></td>
            </tr>
            <tr style="text-align: justify; padding: 0 0 0 40px; word-spacing: 5px">
                <td colspan="3">
                    <strong style="font-size: 18px; font-family: Arial; ">
                        F. Pernah Menyampaikan Pengaduan
                    </strong>
                </td>
            </tr>

            <tr>
                <td >
                    &nbsp
                </td>
                <td align="center" colspan="2">
                    <br>
                    <table width="100%" border="1" align="center" style="padding-left:3em">
                        <tbody>
                        <tr>
                            <th align="center" scope="col"><p style="padding:10px">Nama Instansi</p></th>
                            <th align="center" scope="col"><p style="padding:10px">Tanggal/Bulan/Tahun</p></th>
                        </tr>
                        @php
                            $dt = explode(",", $pengaduan->namainstansi);
                            $ds = explode(",", $pengaduan->tgl);
        $no = 0;                                                              @endphp
                        @foreach($dt as $dtt)

                            <tr>
                                <td><p style="padding:10px">{{$dtt}}</p></td>
                                <td><p style="padding:10px">{{$ds[$no]}}</p></td>
                            </tr>
                            @php
                                $no++
                            @endphp
                        @endforeach
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="3">
                    <table width="100%">
                        <tr>
                            <td align="center"></td>
                            <td align="center"><br><p style="font-family:Arial; font-size:18px; text-transform:capitalize">{{$pengaduan->tempat}}, {{$pengaduan->created_at->format('d - m - Y')}}</p></td>
                        </tr>
                        <tr>

                            <td align="center"><p style="font-size: 18px; font-family: Arial;"> Penerima Pengaduan</p></td>
                            <td align="center"><p style="font-size: 18px; font-family: Arial;"> Pengadu</p></td>
                        </tr>
                         <tr>
                          <td align="center"><br><br><br><br></td>
                          <td align="center"><br><br><br><br></td>
                        </tr>
                        <tr>
                          <td align="center">
                          <p style="font-size: 18px; font-family: Arial; margin-bottom:0em"></p>
                          <p style="font-size: 18px; font-family: Arial;">_________________</p></td>
                          <td align="center">
                          <p style="font-size: 18px; font-family: Arial; margin-bottom:-1.5em; text-transform:capitalize">{{$pengaduan->nama}}</p>
                          <p style="font-size: 18px; font-family: Arial;">_________________</p></td>
                        </tr>
                    </table>
                    <br><br><br><br><br>
                </td>
            </tr>
        </table>

    </div>

    @include('jsother')
</div>
</body>
</html>
