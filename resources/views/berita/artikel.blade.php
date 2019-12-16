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
            <h1 class="hero-heading wow fadeInDown" data-wow-duration="0.6s">Pojok Warga LH</h1>
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


    <div id="page-content" class="container mrg25T">
        @foreach($p as $pp)

        <div class="blog-box row">
            <div class="post-image col-md-4">
                <a href="../upload/artikel/{{$pp->foto}}" class="prettyphoto" rel="prettyPhoto[pp_gal]" title="{{$pp->judul}}">
                    <img class="img-responsive lazy img-rounded" src="#" data-original="../upload/artikel/{{$pp->foto}}" alt="" />
                </a>
            </div>
            <div class="post-content-wrapper col-md-8">
                <a class="post-title" href="artikel/{{$pp->id}}" title="">
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
                    <span>
                    <i class="glyph-icon icon-comments-o"></i>
                </span>
                </div>
                <div class="post-content isianya" style="height: 45px">

                </div>
                <a href="artikel/{{$pp->id}}" class="btn btn-sm btn-default" title="Read more">Read more</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection
