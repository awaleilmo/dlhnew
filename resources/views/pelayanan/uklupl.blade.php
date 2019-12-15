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
                <td style="width: 27px;" valign="top">
                    <strong>Syarat</strong>
                </td>
            </tr>
            <tr>
                <td style="width: 976px;">
                    <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </td>
            </tr>
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
