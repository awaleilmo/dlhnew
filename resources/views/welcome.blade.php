@extends('layouts.tampilan')

@section('content')
<!--<link rel="stylesheet" type="text/css" href="assets/widgets/owlcarousel/owlcarousel.css">-->
<script type="text/javascript" src="assets/widgets/owlcarousel/owlcarousel.js"></script>
<script type="text/javascript" src="assets/widgets/owlcarousel/owlcarousel-demo.js"></script>
<!-- slide show -->
<!-- Layerslider -->

<script type="text/javascript" src="../../assets/js-core/greensock.js"></script>
<script type="text/javascript" src="../../assets/widgets/layerslider/layerslider.js"></script>
<script type="text/javascript" src="../../assets/widgets/layerslider/layerslider-transitions.js"></script>
<script type="text/javascript" src="../../assets/widgets/layerslider/layerslider-demo.js"></script>


<!-- Boostrap Tabs -->

<script type="text/javascript" src="../../assets/widgets/tabs/tabs.js"></script>

<div id="layerslider" style="width: 100%; height: 600px;">

    <!-- slide with custom settings -->
    <div class="ls-slide" data-ls="
            slidedirection: right;
			slidedelay: 4000;
			durationin: 1500;
			durationout: 1500;
			easingin: easeInOutQuint;
			easingout: easeInOutQuint;
			delayin: 0;
			delayout: 0;
			timeshift: 0;
			transition2d: 10;
			">
        <img src="../../assets/image-resources/blurred-bg/blurred-bg-5.jpg" class="ls-bg" alt="Slide background 2">
        <div class="col-md-6">
        <h2 class="hero-heading font-white ls-l" style="
					top: 33%;
					left: 0;
					height: 10%;
                    text-align: right;
                    " data-ls=" offsetxin:0; durationin:3000; delayin:2000; easingin:easeOutElastic; rotatexin:90; transformoriginin:50% bottom 0; offsetxout:0; rotatexout:90; transformoriginout:50% bottom 0;">
            Dinas Lingkungan Hidup
        </h2>
        <p class="hero-text font-white ls-l" style=" color: black; top: 50%;left: 0;width: 600px;font-size: 20px;line-height: 1.6em;text-align: left;" data-ls="offsetxin:150; durationin:1500; easingin:easeInOutQuart; rotateyin:40; offsetxout:150; rotateyout:40;">
            Dinas Lingkungan Hidup ( DLH ) Kota Serang dibentuk berdasarkan Peraturan Daerah Kota Serang Nomor 18 Tahun 2011 tentang Perubahan Atas Peraturan Daerah Nomor 10 Tahun 2008 tentang Pembentukan dan Susunan Organisasi Lembaga Teknis Daerah Kota Serang.
        </p>
        </div>
        <div class="col-md-6">
        <img src="../../image-resources/dlh/foto1.jpg" class="ls-l" style="
                top: 30%;
                left: 65%;
                height: 40%;
                width: 25%;
                border-radius: 20px;
                border: 5px whitesmoke solid;
                " data-ls="offsetxin: right;offsetxout: left;easingin:easeOutQuart;easingout:easeInQuart;durationin:2000;durationout:2000;rotatein: 45;">

        <img src="../../image-resources/dlh/foto2.jpg" class="ls-l"
             style="
                top: 45%;
                left: 80%;
                height: 40%;
                width: 25%;
                border-radius: 20px;
                border: 5px whitesmoke solid;
                "
             data-ls="
                offsetxin: left;
                offsetxout: right;
                easingin:easeOutQuart;
                easingout:easeInQuart;
                durationin:2000;
                durationout:2000;
                delayin:1000;
                rotatein: 65;
                "
        >

        <img src="../../image-resources/dlh/foto3.jpg" class="ls-l"
             style="
                top: 75%;
                left: 70%;
                height: 40%;
                width: 25%;
                border-radius: 20px;
                border: 5px whitesmoke solid;
                "
             data-ls="
                offsetxin: right;
                offsetxout: left;
                easingin:easeOutQuart;
                easingout:easeInQuart;
                durationin:2000;
                durationout:2000;
                delayin:1000;
                rotatein: 65;
                "
        >
        </div>
    </div>


    <div class="ls-slide row" data-ls="slidedelay: 4000; transition2d: 6,37,19;">
        <img src="../../assets/image-resources/blurred-bg/blurred-bg-7.jpg" class="ls-bg" alt="Slide background 1">
        <div class="col-md-6">
        <h2 class="hero-heading font-white ls-l"
            style="
					top: 29%;
					left: 0;
                    padding: 0;
                    "

            data-ls="
						offsetxin:0;
						durationin:3000;
						delayin:2000;
						easingin:easeOutElastic;
						rotatexin:90;
						transformoriginin:50% bottom 0;
						offsetxout:0;
						rotatexout:90;
						transformoriginout:50% bottom 0;
					"
        >Menuju Zero Waste</h2>
        <p class="hero-text font-white ls-l"
           style="
					top: 46%;
					left: 0;
					padding: 0;
					width: 650px;
					line-height: 1.5em;
					font-size: 23px;
				"

           data-ls="
					offsetxin:150;
					durationin:1500;
					easingin:easeInOutQuart;
					rotateyin:40;
					offsetxout:150;
					rotateyout:40;
				">Pemerintah Kota Serang menargetkan pada tahun 2023 untuk menyandang zero waste atau tidak ada pengiriman sampah ke Tempat Pembuangan Sampah Akhir (TPSA). </p>
        <div class="ls-l"
             style="
					top: 65%;
					left: 0;
				"

             data-ls="
					offsetxin:150;
					durationin:1500;
					easingin:easeInOutQuart;
					rotateyin:40;
					offsetxout:150;
					rotateyout:40;
				">

        </div>
        </div>
        <div class="col-md-6">
        <img src="../../image-resources/dlh/foto3.jpg" class="ls-l"
             style="
					top: 55%;
					left: 70%;
					height: 70%;
					width: 35%;
					border-radius: 30px;
				"

             data-ls="
					offsetyin:100;
					durationin:1500;
					delayin:1000;
					offsetxout:100;
					offsetyout:100;
					durationout:1000;
                    easingin:easeOutQuart;
					easingout:easeInQuart;
					fadeout:false;
					scalexout:0.8;
					scaleyout:0.8;
					scalexin:1;
					scaleyin:1;
				"
        >
        </div>
    </div>


    <div class="ls-slide row" data-ls="slidedelay: 7000; transition3d: 22;">
        <img src="../../assets/image-resources/blurred-bg/blurred-bg-3.jpg" class="ls-bg" alt="Slide background 3" style="padding: 40px">
        <div class="col-md-4">
            <img src="../../image-resources/dlh/foto12.jpg" class="ls-l" style="width:30%; height:50%;border-radius: 20px; bottom:0px;left:50px; padding-top: 50px" data-ls="durationin:1500;delayin:10;rotatein:20;rotatexin:30;scalexin:3;scaleyin:3;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;" />
         </div>
        <div class="col-md-4">
        <p class="ls-l" style="top:80px;left:599px;height:40px;padding-right:15px;padding-left:15px;font-size:24px;line-height:37px;color:#ffffff;background:rgba(255,255,255,0.1);border-radius:4px;white-space: nowrap;" data-ls="durationin:1500;delayin:500;rotatein:20;rotatexin:30;scalexin:3;scaleyin:3;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">
            VISI
        </p>
        <p class="ls-l" style="top:140px;left:599px;font-size:18px;margin-top: 5px; color:rgba(255,255,255,0.8);" data-ls="offsetxin:0;durationin:1500;delayin:2300;rotateyin:90;skewxin:60;transformoriginin:25% 50% 0;offsetxout:100;durationout:750;skewxout:60;">
            Bersama Menjaga Kualitas Lingkungan Hidup Kota Serang
        </p>
        <p class="ls-l" style="top:180px;left:599px;height:40px;padding-right:15px;padding-left:15px;font-size:24px;line-height:37px;color:#ffffff;background:rgba(255,255,255,0.1);border-radius:4px;white-space: nowrap;" data-ls="durationin:1500;delayin:1000;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">
            MISI
        </p>
        <p class="ls-l" style="top:240px;left:599px;font-size:18px;margin-top: 5px; color:rgba(255,255,255,0.8);" data-ls="offsetxin:0;durationin:1500;delayin:2600;rotateyin:90;skewxin:60;transformoriginin:25% 50% 0;offsetxout:100;durationout:750;skewxout:60;">
            Meningkatkan kapasitas dan akuntabilitas.
        </p>
        <p class="ls-l" style="top:280px;left:599px;font-size:18px;margin-top: 5px; color:rgba(255,255,255,0.8);" data-ls="offsetxin:0;durationin:1500;delayin:3000;rotateyin:90;skewxin:60;transformoriginin:25% 50% 0;offsetxout:100;durationout:750;skewxout:60;">
            Meningkatkan kualitas lingkungan hidup dan pengelolaan sumberdaya alam
        </p>
        <p class="ls-l" style="top:320px;left:599px;font-size:18px;margin-top: 5px; color:rgba(255,255,255,0.8);" data-ls="offsetxin:0;durationin:1500;delayin:3300;rotateyin:90;skewxin:60;transformoriginin:25% 50% 0;offsetxout:100;durationout:750;skewxout:60;">
            Meningkatkan kemampuan, kesadaran, kepedulian, dan partisipasi para pemangku kepentingan terhadap fungsi lingkungan hidup
        </p>
        </div>
    </div>
</div>
<!--tentang-->
<div class="row">
<div class="hero-box bg-white hero-box-smaller ">
    <div class="container">
        <h2 class="hero-heading wow fadeInDown animated animated" data-wow-duration="0.6s" style="visibility: visible; animation-duration: 0.6s;">Dinas Lingkungan Hidup Kota Serang</h2>
        <table border="0" cellpadding="10" class="hero-text wow bounceInUp animated animated" data-wow-duration="0.9s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.2s;">
            <br>
            <br>
            <tr>
                <td align="left"></i> <a href="#" class="label"></td>
                <p style="font-size: 20px">Dinas Lingkungan Hidup ( DLH ) Kota Serang dibentuk berdasarkan Peraturan Daerah Kota Serang Nomor 18 Tahun 2011 tentang Perubahan Atas Peraturan Daerah Nomor 10 Tahun 2008 tentang Pembentukan dan Susunan Organisasi Lembaga Teknis Daerah Kota Serang. Secara lebih jelas tertuang dalam Peraturan Walikota Serang Nomor 47 Tahun 2013 tentang Tugas Pokok, Fungsi dan Rincian Tugas Dinas Lingkungan Hidup Kota Serang. Tugas Pokok, Fungsi dan Rincian Tugas yang diemban oleh Dinas Lingkungan Hidup (DLH) Kota Serang menjadi unit kerja dilingkungan Pemerintah Kota Serang yang merupakan unsur pelaksana tugas Walikota di bidang lingkungan hidup yang dipimpin oleh seorang Kepala.</p>
            </tr>
            </br>
            </br>
            <tr>
                <td align="left"><i class="glyph-icon icon-arrow-right"></i> <a href="{{route('sejarah')}}" class="label"> Sejarah DLH</a> </td>
                <td align="left"><i class="glyph-icon icon-arrow-right"></i> <a href="{{route('struktur')}}" class="label"> Struktur Organisasi</a> </td>
            </tr>
            <tr>
                <td align="left"><i class="glyph-icon icon-arrow-right"></i> <a href="{{route('visimisi')}}" class="label"> Visi & Misi</a> </td>
                <td align="left"><i class="glyph-icon icon-arrow-right"></i> <a href="{{route('cilowong')}}" class="label"> TPAS Cilowong</a> </td>
            </tr>
        </table>

    </div>
</div>
<style>

    .hero-box-smaller .owl-pagination {
        display: none;
    }

</style>
<!-- Dokumen -->
<div class="hero-box bg-black font-inverse" style="padding: 4em 0">
    <h2 class="hero-heading wow fadeInDown animated animated" data-wow-duration="0.6s" style="visibility: visible; animation-duration: 0.6s;">Dokumen Lingkungan</h2>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></center><img src="image-resources/dlh/foto6.jpg" style="width: 30em; border-radius: 30px">
            </div>
            <div class="col-md-8">
                <table border="0" cellpadding="10" class="hero-text wow bounceInUp animated animated" data-wow-duration="0.9s" data-wow-delay="0.2s" style="color:white; width: 80%; visibility: visible; animation-duration: 0.9s; animation-delay: 0.2s;">
                    <tr>
                        <td align="left"><h4 class="hero-heading wow fadeInDown" style="padding: 0">AMDAL</h4>
                            <p style="font-size: 15px">Analisis Mengenai Dampak Lingkungan Hidup yang disebut Amdal adalah kajian mengenai dampak penting suatu Usaha dan/atau Kegiatan yang direncanakan pada lingkungan hidup yang diperlukan bagi proses pengambilan keputusan tentang penyelenggaraan Usaha dan/atau Kegiatan</p>
                            <a href="{{route('amdal')}}" style="left:75%">Lanjut <i class="glyph-icon icon-chevron-circle-right"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td align="left"><h4 class="hero-heading wow fadeInDown" style="padding: 0">UKL.UPL</h4>
                            <p style="font-size: 15px">Upaya Pengelolaan Lingkungan Hidup dan Upaya Pemantauan Lingkungan Hidup yang disebut UKL.UPL, adalah pengelolaan dan pemantauan terhadap Usaha dan/atau Kegiatan yang tidak berdampak penting terhadap lingkungan hidup yang diperlukan bagi proses pengambilan keputusan tentang penyelenggaraan Usaha dan/atau Kegiatan</p>
                            <a href="{{route('uklupl')}}" style="left:75%">Lanjut <i class="glyph-icon icon-chevron-circle-right"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td align="left"><h4 class="hero-heading wow fadeInDown" style="padding: 0">SPPL</h4>
                            <p style="font-size: 15px">Surat Pernyataan Kesanggupan Pengelolaan dan Pemantauan Lingkungan Hidup yang disebut SPPL, adalah pernyataan kesanggupan dari penanggung jawab Usaha dan/atau Kegiatan untuk melakukan pengelolaan dan pemantauan lingkungan hidup atas dampak lingkungan hidup dari Usaha dan/atau Kegiatannya di luar Usaa dan/atau Kegiatan yang wajib Amdal atau UKL.UPL</p>
                            <a href="{{route('sppl')}}" style="left:75%">Lanjut <i class="glyph-icon icon-chevron-circle-right"></i></a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<!--gambar-->
<div class="hero-box poly-bg-3 hero-box-smaller overflow-hidden font-inverse">
    <div class="wow fadeInUp col-md-5">
        <div class="bg-holder" style="top: -100px;">
            <img src="image-resources/dlh/foto7.jpg" height="400px" />
        </div>
    </div>
    <div class="col-md-7">
        <div class="owl-carousel-5 slider-wrapper carousel-wrapper">

            <div class="pad15A">
                <div class="thumbnail-box">
                    <a class="thumb-link" href="#" title=""></a>
                    <div class="thumb-content">
                        <div class="center-vertical">
                            <div class="center-content">
                                <h3 class="thumb-heading wow bounceIn">
                                    Railroad bridge
                                    <small>12 March 2015</small>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="thumb-overlay bg-primary"></div>
                    <img src="image-resources/dlh/foto8.jpg" alt="" />
                </div>
            </div>
            <div class="pad15A">
                <div class="thumbnail-box">
                    <a class="thumb-link" href="#" title=""></a>
                    <div class="thumb-content">
                        <div class="center-vertical">
                            <div class="center-content">
                                <h3 class="thumb-heading wow rollIn">
                                    Beautiful garden
                                    <small>12 March 2015</small>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="thumb-overlay bg-black"></div>
                    <img src="image-resources/dlh/foto9.jpg" alt="" />
                </div>
            </div>
            <div class="pad15A">
                <div class="thumbnail-box">
                    <a class="thumb-link" href="#" title=""></a>
                    <div class="thumb-content">
                        <div class="center-vertical">
                            <div class="center-content">
                                <h3 class="thumb-heading wow fadeInDown">
                                    Sunrays flowers
                                    <small>12 March 2015</small>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="thumb-overlay bg-primary"></div>
                    <img src="image-resources/dlh/foto10.jpg" alt="" />
                </div>
            </div>
            <div class="pad15A">
                <div class="thumbnail-box">
                    <a class="thumb-link" href="#" title=""></a>
                    <div class="thumb-content">
                        <div class="center-vertical">
                            <div class="center-content">
                                <h3 class="thumb-heading wow flipInX">
                                    Seeing a DJs work
                                    <small>12 March 2015</small>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="thumb-overlay bg-blue"></div>
                    <img src="image-resources/dlh/foto11.jpg" alt="" />
                </div>
            </div>
            <div class="pad15A">
                <div class="thumbnail-box">
                    <div class="thumb-content">
                        <div class="center-vertical">
                            <div class="center-content">
                                <div class="thumb-btn wow bounceInDown">
                                    <a href="#" class="btn btn-md btn-round btn-success" title=""><i class="glyph-icon icon-check"></i></a>
                                    <a href="#" class="btn btn-md btn-round btn-danger" title=""><i class="glyph-icon icon-remove"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="thumb-overlay bg-primary"></div>
                    <img src="image-resources/dlh/foto12.jpg" alt="" />
                </div>
            </div>
            <div class="pad15A">
                <div class="thumbnail-box">
                    <div class="thumb-content">
                        <div class="center-vertical">
                            <div class="center-content">
                                <div class="thumb-btn wow zoomIn">
                                    <a href="#" class="btn btn-lg btn-round btn-success" title=""><i class="glyph-icon icon-check"></i></a>
                                    <a href="#" class="btn btn-lg btn-round btn-danger" title=""><i class="glyph-icon icon-remove"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="thumb-overlay bg-gray"></div>
                    <img src="image-resources/dlh/foto13.jpg" alt="" />
                </div>
            </div>
            <div class="pad15A">
                <div class="thumbnail-box">
                    <div class="thumb-content">
                        <div class="center-vertical">
                            <div class="center-content">
                                <div class="thumb-btn wow rotateIn">
                                    <a href="#" class="btn btn-lg btn-round btn-primary" title=""><i class="glyph-icon icon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="thumb-overlay bg-black"></div>
                    <img src="image-resources/dlh/foto14.jpg" alt="" />
                </div>
            </div>

        </div>

    </div>
    <div class="hero-overlay bg-black opacity-60"></div>
    <div class="hero-pattern pattern-bg-1"></div>
</div>
</div>
@endsection
