@extends('layouts.tampilan')

@section('content')
    <div class="hero-box hero-box-smaller full-bg-13 font-inverse" data-top-bottom="background-position: 50% 0px;" data-bottom-top="background-position: 50% -600px;">
        <div class="container">
            <h1 class="hero-heading wow fadeInDown" data-wow-duration="0.6s">Single post</h1>
            <p class="hero-text wow bounceInUp" data-wow-duration="0.9s" data-wow-delay="0.2s">Monarch comes with example pages for single blog posts.</p>
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
        });
    </script>

    <div id="page-content" class="container mrg25T">
        <div class="row">
            <div class="col-md-12">
                <div class="blog-box blog-box-single blog-box-alt row">
                    <a class="post-title" href="blog-single" title="">
                        <h3>When our power of choice is untrammelled and when nothing prevents our being able</h3>
                    </a>
                    <div class="post-image">
                        <a href="../../assets/image-resources/stock-images/img-42.jpg" class="prettyphoto" rel="prettyPhoto[pp_gal]" title="Blog post title">
                            <img class="img-responsive lazy img-rounded" src="#" data-original="../../assets/image-resources/slides-bg/slide-3.jpg" alt="" />
                        </a>
                    </div>
                    <div class="post-content-wrapper">
                        <div class="post-meta clearfix">
                        <span class="float-left">
                            <i class="glyph-icon icon-user"></i>
                            <a href="#" title="">Thomas Edison</a>
                        </span>
                            <span class="float-left">
                            <i class="glyph-icon icon-clock-o"></i>
                            21 December 2014
                        </span>
                            <span class="float-right">
                            <i class="glyph-icon icon-comments-o"></i>
                            <a href="#comments" title="">4 Comments</a>
                        </span>
                        </div>
                        <div class="divider"></div>
                        <div class="post-content">
                            <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>

                            <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>

                            <p>Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators.</p>

                            <p>To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.</p>

                            <p>If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.</p>

                            <p>The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental.</p>

                            <p>To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth.</p>

                            <p>For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>

                            <p>Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.</p>

                            <p>If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages.</p>

                            <p>It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family.</p>

                            <p>Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>

                            <p>Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as</p>
                        </div>

                    </div>
                </div>

                <div class="text-center post-share-box">
                    <a href="#" class="btn btn-xs bg-facebook">
                    <span class="glyph-icon icon-separator">
                        <i class="glyph-icon icon-facebook"></i>
                    </span>
                        <span class="button-content">
                        Share on Facebook
                    </span>
                    </a>
                    <a href="#" class="btn btn-xs bg-google">
                    <span class="glyph-icon icon-separator">
                        <i class="glyph-icon icon-google-plus"></i>
                    </span>
                        <span class="button-content">
                        Share on Google
                    </span>
                    </a>
                    <a href="#" class="btn btn-xs bg-twitter">
                    <span class="glyph-icon icon-separator">
                        <i class="glyph-icon icon-twitter"></i>
                    </span>
                        <span class="button-content">
                        Share on Twitter
                    </span>
                    </a>
                </div>



            </div>
        </div>
    </div>
@endsection
