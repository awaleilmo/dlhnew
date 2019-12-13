@extends('layouts.tampilan')

@section('content')
    <div class="hero-box hero-box-smaller full-bg-13 font-inverse" data-top-bottom="background-position: 50% 0px;" data-bottom-top="background-position: 50% -600px;">
        <div class="container">
            <h1 class="hero-heading wow fadeInDown" data-wow-duration="0.6s">Blog full width</h1>
            <p class="hero-text wow bounceInUp" data-wow-duration="0.9s" data-wow-delay="0.2s">Full width blog posts without sidebars</p>
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
        <div class="blog-box row">
            <div class="post-image col-md-4">
                <a href="../../assets/image-resources/stock-images/img-44.jpg" class="prettyphoto" rel="prettyPhoto[pp_gal]" title="Blog post title">
                    <img class="img-responsive lazy img-rounded" src="#" data-original="../../assets/image-resources/stock-images/img-44.jpg" alt="" />
                </a>
            </div>
            <div class="post-content-wrapper col-md-8">
                <a class="post-title" href="blog-single" title="">
                    <h3>When our power of choice is untrammelled and when nothing prevents our being able</h3>
                </a>
                <div class="post-meta">
                <span>
                    <i class="glyph-icon icon-user"></i>
                    <a href="#" title="">Thomas Edison</a>
                </span>
                    <span>
                    <i class="glyph-icon icon-clock-o"></i>
                    21 December 2014
                </span>
                    <span>
                    <i class="glyph-icon icon-comments-o"></i>
                    <a href="#" title="">4 Comments</a>
                </span>
                </div>
                <div class="post-content">
                    <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
                    <p>But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted.</p>
                </div>
                <a href="blog-single" class="btn btn-sm btn-default" title="Read more">Read more</a>
            </div>
        </div>
        <div class="blog-box row">
            <div class="post-image col-md-4">
                <a href="../../assets/image-resources/stock-images/img-43.jpg" class="prettyphoto" rel="prettyPhoto[pp_gal]" title="Blog post title">
                    <img class="img-responsive lazy img-rounded" src="#" data-original="../../assets/image-resources/stock-images/img-43.jpg" alt="" />
                </a>
            </div>
            <div class="col-md-8">
                <a class="post-title" href="blog-single" title="">
                    <h3>When our power of choice is untrammelled and when nothing prevents our being able</h3>
                </a>
                <div class="post-meta">
                <span>
                    <i class="glyph-icon icon-user"></i>
                    <a href="#" title="">Thomas Edison</a>
                </span>
                    <span>
                    <i class="glyph-icon icon-clock-o"></i>
                    21 December 2014
                </span>
                    <span>
                    <i class="glyph-icon icon-comments-o"></i>
                    <a href="#" title="">4 Comments</a>
                </span>
                </div>
                <div class="post-content">
                    <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
                    <p>But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted.</p>
                </div>
                <a href="blog-single" class="btn btn-sm btn-default" title="Read more">Read more</a>
            </div>
        </div>
        <div class="blog-box row">
            <div class="post-image col-md-4">
                <a href="../../assets/image-resources/stock-images/img-42.jpg" class="prettyphoto" rel="prettyPhoto[pp_gal]" title="Blog post title">
                    <img class="img-responsive lazy img-rounded" src="#" data-original="../../assets/image-resources/stock-images/img-42.jpg" alt="" />
                </a>
            </div>
            <div class="col-md-8">
                <a class="post-title" href="blog-single" title="">
                    <h3>When our power of choice is untrammelled and when nothing prevents our being able</h3>
                </a>
                <div class="post-meta">
                <span>
                    <i class="glyph-icon icon-user"></i>
                    <a href="#" title="">Thomas Edison</a>
                </span>
                    <span>
                    <i class="glyph-icon icon-clock-o"></i>
                    21 December 2014
                </span>
                    <span>
                    <i class="glyph-icon icon-comments-o"></i>
                    <a href="#" title="">4 Comments</a>
                </span>
                </div>
                <div class="post-content">
                    <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
                    <p>But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted.</p>
                </div>
                <a href="blog-single" class="btn btn-sm btn-default" title="Read more">Read more</a>
            </div>
        </div>
        <div class="blog-box row">
            <div class="post-image col-md-4">
                <a href="../../assets/image-resources/stock-images/img-41.jpg" class="prettyphoto" rel="prettyPhoto[pp_gal]" title="Blog post title">
                    <img class="img-responsive lazy img-rounded" src="#" data-original="../../assets/image-resources/stock-images/img-41.jpg" alt="" />
                </a>
            </div>
            <div class="col-md-8">
                <a class="post-title" href="blog-single" title="">
                    <h3>When our power of choice is untrammelled and when nothing prevents our being able</h3>
                </a>
                <div class="post-meta">
                <span>
                    <i class="glyph-icon icon-user"></i>
                    <a href="#" title="">Thomas Edison</a>
                </span>
                    <span>
                    <i class="glyph-icon icon-clock-o"></i>
                    21 December 2014
                </span>
                    <span>
                    <i class="glyph-icon icon-comments-o"></i>
                    <a href="#" title="">4 Comments</a>
                </span>
                </div>
                <div class="post-content">
                    <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
                    <p>But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted.</p>
                </div>
                <a href="blog-single" class="btn btn-sm btn-default" title="Read more">Read more</a>
            </div>
        </div>
        <div class="blog-box row">
            <div class="post-image col-md-4">
                <a href="../../assets/image-resources/stock-images/img-40.jpg" class="prettyphoto" rel="prettyPhoto[pp_gal]" title="Blog post title">
                    <img class="img-responsive lazy img-rounded" src="#" data-original="../../assets/image-resources/stock-images/img-40.jpg" alt="" />
                </a>
            </div>
            <div class="col-md-8">
                <a class="post-title" href="blog-single" title="">
                    <h3>When our power of choice is untrammelled and when nothing prevents our being able</h3>
                </a>
                <div class="post-meta">
                <span>
                    <i class="glyph-icon icon-user"></i>
                    <a href="#" title="">Thomas Edison</a>
                </span>
                    <span>
                    <i class="glyph-icon icon-clock-o"></i>
                    21 December 2014
                </span>
                    <span>
                    <i class="glyph-icon icon-comments-o"></i>
                    <a href="#" title="">4 Comments</a>
                </span>
                </div>
                <div class="post-content">
                    <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
                    <p>But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted.</p>
                </div>
                <a href="blog-single" class="btn btn-sm btn-default" title="Read more">Read more</a>
            </div>
        </div>
        <div class="blog-box row">
            <div class="post-image col-md-4">
                <a href="../../assets/image-resources/stock-images/img-39.jpg" class="prettyphoto" rel="prettyPhoto[pp_gal]" title="Blog post title">
                    <img class="img-responsive lazy img-rounded" src="#" data-original="../../assets/image-resources/stock-images/img-39.jpg" alt="" />
                </a>
            </div>
            <div class="col-md-8">
                <a class="post-title" href="blog-single" title="">
                    <h3>When our power of choice is untrammelled and when nothing prevents our being able</h3>
                </a>
                <div class="post-meta">
                <span>
                    <i class="glyph-icon icon-user"></i>
                    <a href="#" title="">Thomas Edison</a>
                </span>
                    <span>
                    <i class="glyph-icon icon-clock-o"></i>
                    21 December 2014
                </span>
                    <span>
                    <i class="glyph-icon icon-comments-o"></i>
                    <a href="#" title="">4 Comments</a>
                </span>
                </div>
                <div class="post-content">
                    <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
                    <p>But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted.</p>
                </div>
                <a href="blog-single" class="btn btn-sm btn-default" title="Read more">Read more</a>
            </div>
        </div>
        <div class="text-center">
            <ul class="pagination pagination-lg">
                <li><a href="#">«</a></li>
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
            </ul>
        </div>
    </div>
@endsection
