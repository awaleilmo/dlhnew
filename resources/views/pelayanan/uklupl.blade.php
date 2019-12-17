@extends('layouts.tampilan')

@section('content')
<div class="hero-box bg-white hero-box-smaller ">
    <div class="container">
        <h2 class="hero-heading wow fadeInDown animated animated" data-wow-duration="0.6s" style="visibility: visible; animation-duration: 0.6s;">UKL - UPL</h2>
        <table border="0" cellpadding="10" class="hero-text wow bounceInUp animated animated" data-wow-duration="0.9s" data-wow-delay="0.2s" style="text-align: justify; visibility: visible; animation-duration: 0.9s; animation-delay: 0.2s;">
            <br>
            <br>
            <tbody>
            <tr>
                <td style="width: 27px;" valign="top">
                    <strong>Pengertian</strong>
                </td>
            </tr>
            <tr>
                <td style="width: 976px;">
                    <p style="text-align: justify">Upaya Pengelolaan Lingkungan Hidup dan Upaya Pemantauan Lingkungan Hidup yang disebut UKL.UPL, adalah pengelolaan dan pemantauan terhadap Usaha dan/atau Kegiatan yang tidak berdampak penting terhadap lingkungan hidup yang diperlukan bagi proses pengambilan keputusan tentang penyelenggaraan Usaha dan/atau Kegiatan</p>
                </td>
            </tr>
            <tr>
                <td style="width: 27px;" valign="top" align="center">
                    <strong>Syarat</strong>
                </td>
            </tr>
            </td>
            </tr>
            <tr>
                <td>
                    <img src="image-resources/dlh/syaratuklupl.png" style="width:100%; height:450px">
                </td>
            </tr>

            <tr>
                <td style="width: 27px;" valign="top" align="center">
                    <strong>Alur Penilaian UKL-UPL</strong>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="image-resources/dlh/uklupl.png" style="width:100%; height:450px">
                </td>
            </tr>

            <tr>
                <td style="width: 976px;">
                    <p style="text-align: justify">Untuk melengkapi persyaratan diatas, download form di bawah ini sebagai syarat dalam pembuatan dokumen UKL-UPL</p>
                </td>
            <tr>
                <td>
                    <a href="upload/dokumenlingkungan/@foreach($p as $pp) {{$pp->forms}} @endforeach" download="upload/dokumenlingkungan/@foreach($p as $pp) {{$pp->forms}} @endforeach" class="btn btn-primary" style="font-size: large;"><i class="glyph-icon icon-file-word-o"></i> Download Form </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
