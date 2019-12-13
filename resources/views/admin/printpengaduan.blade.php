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


    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.css">



    <link rel="stylesheet" type="text/css" href="../assets/helpers/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/helpers/backgrounds.css">
    <link rel="stylesheet" type="text/css" href="../assets/helpers/boilerplate.css">
    <link rel="stylesheet" type="text/css" href="../assets/helpers/border-radius.css">
    <link rel="stylesheet" type="text/css" href="../assets/helpers/grid.css">
    <link rel="stylesheet" type="text/css" href="../assets/helpers/page-transitions.css">
    <link rel="stylesheet" type="text/css" href="../assets/helpers/spacing.css">
    <link rel="stylesheet" type="text/css" href="../assets/helpers/typography.css">
    <link rel="stylesheet" type="text/css" href="../assets/helpers/utils.css">
    <link rel="stylesheet" type="text/css" href="../assets/helpers/colors.css">

    <link rel="stylesheet" type="text/css" href="../assets/elements/badges.css">
    <link rel="stylesheet" type="text/css" href="../assets/elements/buttons.css">
    <link rel="stylesheet" type="text/css" href="../assets/elements/content-box.css">
    <link rel="stylesheet" type="text/css" href="../assets/elements/dashboard-box.css">
    <link rel="stylesheet" type="text/css" href="../assets/elements/forms.css">
    <link rel="stylesheet" type="text/css" href="../assets/elements/images.css">
    <link rel="stylesheet" type="text/css" href="../assets/elements/info-box.css">
    <link rel="stylesheet" type="text/css" href="../assets/elements/invoice.css">
    <link rel="stylesheet" type="text/css" href="../assets/elements/loading-indicators.css">
    <link rel="stylesheet" type="text/css" href="../assets/elements/menus.css">
    <link rel="stylesheet" type="text/css" href="../assets/elements/panel-box.css">
    <link rel="stylesheet" type="text/css" href="../assets/elements/response-messages.css">
    <link rel="stylesheet" type="text/css" href="../assets/elements/responsive-tables.css">
    <link rel="stylesheet" type="text/css" href="../assets/elements/ribbon.css">
    <link rel="stylesheet" type="text/css" href="../assets/elements/social-box.css">
    <link rel="stylesheet" type="text/css" href="../assets/elements/tables.css">
    <link rel="stylesheet" type="text/css" href="../assets/elements/tile-box.css">
    <link rel="stylesheet" type="text/css" href="../assets/elements/timeline.css">

    <link rel="stylesheet" type="text/css" href="../assets/icons/fontawesome/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="../assets/icons/linecons/linecons.css">
    <link rel="stylesheet" type="text/css" href="../assets/icons/spinnericon/spinnericon.css">

    <link rel="stylesheet" type="text/css" href="../assets/widgets/accordion-ui/accordion.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/calendar/calendar.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/carousel/carousel.css">

    <link rel="stylesheet" type="text/css" href="../assets/widgets/charts/justgage/justgage.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/charts/morris/morris.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/charts/piegage/piegage.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/charts/xcharts/xcharts.css">

    <link rel="stylesheet" type="text/css" href="../assets/widgets/chosen/chosen.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/colorpicker/colorpicker.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/datatable/datatable.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/datepicker/datepicker.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/datepicker-ui/datepicker.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/dialog/dialog.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/dropdown/dropdown.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/dropzone/dropzone.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/file-input/fileinput.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/input-switch/inputswitch.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/input-switch/inputswitch-alt.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/ionrangeslider/ionrangeslider.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/jcrop/jcrop.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/jgrowl-notifications/jgrowl.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/loading-bar/loadingbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/maps/vector-maps/vectormaps.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/markdown/markdown.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/modal/modal.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/multi-select/multiselect.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/multi-upload/fileupload.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/nestable/nestable.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/noty-notifications/noty.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/popover/popover.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/pretty-photo/prettyphoto.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/progressbar/progressbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/range-slider/rangeslider.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/slidebars/slidebars.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/slider-ui/slider.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/tabs-ui/tabs.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/theme-switcher/themeswitcher.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/timepicker/timepicker.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/tocify/tocify.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/tooltip/tooltip.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/touchspin/touchspin.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/uniform/uniform.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/wizard/wizard.css">
    <link rel="stylesheet" type="text/css" href="../assets/widgets/xeditable/xeditable.css">

    <link rel="stylesheet" type="text/css" href="../assets/snippets/chat.css">
    <link rel="stylesheet" type="text/css" href="../assets/snippets/files-box.css">
    <link rel="stylesheet" type="text/css" href="../assets/snippets/login-box.css">
    <link rel="stylesheet" type="text/css" href="../assets/snippets/notification-box.css">
    <link rel="stylesheet" type="text/css" href="../assets/snippets/progress-box.css">
    <link rel="stylesheet" type="text/css" href="../assets/snippets/todo.css">
    <link rel="stylesheet" type="text/css" href="../assets/snippets/user-profile.css">
    <link rel="stylesheet" type="text/css" href="../assets/snippets/mobile-navigation.css">

    <link rel="stylesheet" type="text/css" href="../assets/applications/mailbox.css">

    <link rel="stylesheet" type="text/css" href="../assets/themes/admin/layout.css">
    <link rel="stylesheet" type="text/css" href="../assets/themes/admin/color-schemes/default.css">

    <link rel="stylesheet" type="text/css" href="../assets/themes/components/default.css">
    <link rel="stylesheet" type="text/css" href="../assets/themes/components/border-radius.css">

    <link rel="stylesheet" type="text/css" href="../assets/helpers/responsive-elements.css">
    <link rel="stylesheet" type="text/css" href="../assets/helpers/admin-responsive.css">

    <script type="text/javascript" src="../assets/js-core/jquery-core.js"></script>
    <script type="text/javascript" src="../assets/js-core/jquery-ui-core.js"></script>
    <script type="text/javascript" src="../assets/js-core/jquery-ui-widget.js"></script>
    <script type="text/javascript" src="../assets/js-core/jquery-ui-mouse.js"></script>
    <script type="text/javascript" src="../assets/js-core/jquery-ui-position.js"></script>

    <script type="text/javascript" src="../assets/js-core/modernizr.js"></script>
    <script type="text/javascript" src="../assets/js-core/jquery-cookie.js"></script>
    <script type="text/javascript" src="../assets/widgets/datatable/datatable.js"></script>
    <script type="text/javascript" src="../assets/widgets/datatable/datatable-bootstrap.js"></script>
    <script type="text/javascript" src="../assets/widgets/datatable/datatable-responsive.js"></script>
    <link rel="stylesheet" href="../leaflet/leaflet.css" />
    <script src="../leaflet/leaflet.js"></script>
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

    <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.js"></script>

    <script type="text/javascript" src="../assets/widgets/progressbar/progressbar.js"></script>

    <script type="text/javascript" src="../assets/widgets/superclick/superclick.js"></script>

    <script type="text/javascript" src="../assets/widgets/input-switch/inputswitch-alt.js"></script>

    <script type="text/javascript" src="../assets/widgets/slimscroll/slimscroll.js"></script>

    <script type="text/javascript" src="../assets/widgets/slidebars/slidebars.js"></script>
    <script type="text/javascript" src="../assets/widgets/slidebars/slidebars-demo.js"></script>

    <script type="text/javascript" src="../assets/widgets/charts/piegage/piegage.js"></script>
    <script type="text/javascript" src="../assets/widgets/charts/piegage/piegage-demo.js"></script>

    <script type="text/javascript" src="../assets/widgets/screenfull/screenfull.js"></script>

    <script type="text/javascript" src="../assets/widgets/content-box/contentbox.js"></script>

    <script type="text/javascript" src="../assets/widgets/overlay/overlay.js"></script>

    <script type="text/javascript" src="../assets/js-init/widgets-init.js"></script>

    <script type="text/javascript" src="../assets/themes/admin/layout.js"></script>

    <script type="text/javascript" src="../assets/widgets/theme-switcher/themeswitcher.js"></script>
</div>
</body>
</html>
