@extends('layouts.tampilan')

@section('content')
    <div class="hero-box bg-white hero-box-smaller ">
        <div class="container">
            <h2 class="hero-heading wow fadeInDown animated animated" data-wow-duration="0.6s" style="visibility: visible; animation-duration: 0.6s;">IZIN LIMBAH ( SIPAL )</h2>
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
                        <p style="text-align: justify">Limbah bahan berbahaya dan beracun, yang selanjutnya disebut limbah B3 adalah sisa suatu usaha dan/atau kegiatan yang mengandung bahan berbahaya dan/atau beracun yang karena sifat dan/atau konsentrasinya dan/atau jumlahnya, baik secara langsung maupun tidak langsung, dapat mencemarkan dan/atau merusakkan lingkungan hidup, dan/atau dapat membahayakan lingkungan hidup, kesehatan, kelangsungan hidup manusia serta makhluk hidup lainnya.</p>
                    </td>
                </tr>
                <tr>
                    <td style="width: 27px;" valign="top">
                        <strong>Persyaratan</strong>
                    </td>
                </tr>
                <br>

                <tr>
                    <td>
                        <img src="image-resources/dlh/syaratsipal.png" style="width:100%; height:450px">
                    </td>
                </tr>


                @foreach($p as $pp)
                <tr>
                    <td style="width: 27px;" valign="top">
                        <strong>{{$pp->nama}}</strong>
                    </td>
                </tr>
                <tr>
                    <td style="width: 976px;">
                        <a href="upload/limbah/{{$pp->forms}}" download="upload/limbah/{{$pp->forms}}" class="btn btn-primary" style="font-size: large;"><i class="glyph-icon icon-file-word-o"></i> Download Form </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
