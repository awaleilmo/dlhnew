@extends('layouts.tampilan')

@section('content')
    <style>
        .sembunyikan {
            position: relative;
        }

        .sembunyikan:after {
            position: absolute;
            bottom: 0;
            height: 100%;
            width: 100%;
            content: "";
            background: linear-gradient(to top,
            rgba(255,255,255, 1) 80%,
            rgba(255,255,255, 0) 10%
            );
            pointer-events: none; /* so the text is still selectable */
        }
    </style>
    <link rel="stylesheet" type="text/css" href="../assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css">

    <div class="hero-box hero-box-smaller full-bg-13 font-inverse" data-top-bottom="background-position: 50% 0px;" data-bottom-top="background-position: 50% -600px;">
        <div class="container">
            <h1 class="hero-heading wow fadeInDown" data-wow-duration="0.6s">Pengumuman</h1>
        </div>
        <div class="hero-overlay bg-black"></div>
    </div>

    <!-- Lazyload -->

    <script type="text/javascript" src="../../assets/widgets/lazyload/lazyload.js"></script>
    <script type="text/javascript">
        /* Lazyload */

        $(function() {
            $("img.lazy").lazyload({
                effect: "fadeIn",
                threshold: 100
            });
        });
    </script>

    <!-- PrettyPhoto modals -->

    <!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/pretty-photo/prettyphoto.css">-->
    <script type="text/javascript" src="../../assets/widgets/pretty-photo/prettyphoto.js"></script>
    <script type="text/javascript">
        /* PrettyPhoto */

        $(document).ready(function() {
            $(".prettyphoto").prettyPhoto();
            $(".pp_social").addClass('hidden');
        });
        $(window).load(function () {
            $(".pp_social").addClass('hidden');
        })
    </script>


    <div id="page-content row" class="container mrg25T">

        <div class="col-md-9">
            @foreach($p as $pp)
                <div class="blog-box row">
                    <div class="post-image col-md-4">
                        <a href="../upload/pengumuman/{{$pp->foto}}" class="prettyphoto" rel="prettyPhoto[pp_gal]" title="{{$pp->judul}}">
                            <img class="img-responsive lazy img-rounded" src="#" data-original="../upload/pengumuman/{{$pp->foto}}" alt="" />
                        </a>
                    </div>
                    <div class="post-content-wrapper col-md-8">
                        <a class="post-title" href="pengumuman/{{$pp->id}}" title="">
                            <h3>{{$pp->judul}}</h3>
                        </a>
                        <div class="post-meta">
                <span>
                    <i class="glyph-icon icon-user"></i>
                    Admin DLH Kota Serang
                </span>
                            <span>
                    <i class="glyph-icon icon-clock-o"></i>
                    {{$pp->created_at->day." ".$pp->created_at->monthName." ".$pp->created_at->year}}
                </span>
                        </div>
                        <div class="post-content isianya" style="height: 45px">

                        </div>
                        <a href="artikel/{{$pp->id}}" class="btn btn-sm btn-default" title="Read more">Read more</a>
                    </div>
                </div>
            @endforeach
            {{ $p ?? ''->links() }}
        </div>

        <div class="col-md-3">
            <div class="content-box">
                <h3 class="content-box-header bg-default">
                    Berita Terbaru
                </h3>
                <div class="posts-list content-box-wrapper">
                    <ul class="">
                        @foreach($z as $zz)
                            <li>
                                <div class="post-image">
                                    <a href=".../upload/artikel/{{$zz->foto}}" class="prettyphoto" rel="prettyPhoto[pp_gal]" title="{{$zz->judul}}">
                                        <img class="img-responsive" src="../upload/artikel/{{$zz->foto}}" alt="" />
                                    </a>
                                </div>
                                <div class="post-body">
                                    <a class="post-title" href="artikel/{{$zz->id}}" title="">
                                        <h3>{{$zz->judul}}</h3>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="content-box">
                <h3 class="content-box-header bg-default">
                    Pengumuman Terbaru
                </h3>
                <div class="posts-list content-box-wrapper">
                    <ul class="">
                        @foreach($x as $xx)
                            <li>
                                <div class="post-image">
                                    <a href=".../upload/pengumuman/{{$xx->foto}}" class="prettyphoto" rel="prettyPhoto[pp_gal]" title="{{$xx->judul}}">
                                        <img class="img-responsive" src="../upload/pengumuman/{{$xx->foto}}" alt="" />
                                    </a>
                                </div>
                                <div class="post-body">
                                    <a class="post-title" href="pengumuman/{{$xx->id}}" title="">
                                        <h3>{{$xx->judul}}</h3>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
