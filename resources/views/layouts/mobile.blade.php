
<html lang ="en">

<!-- Mirrored from agileui.com/demo/monarch/demo/frontend-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jul 2019 03:58:24 GMT -->
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>SiHerang ( DLH Kota Serang )</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicons -->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../image-resources/dlh/dlh.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../image-resources/dlh/dlh.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../image-resources/dlh/dlh.png">
    <link rel="apple-touch-icon-precomposed" href=image-resources/dlh/dlh.png">
    <link rel="shortcut icon" href="../image-resources/dlh/dlh.png">



    <link rel="stylesheet" type="text/css" href="../assets-minified/frontend-all-demo.css">

    <!-- JS Core -->

    <script type="text/javascript" src="../assets/js-core/jquery-core.js"></script>
    <script type="text/javascript" src="../assets/js-core/jquery-ui-core.js"></script>
    <script type="text/javascript" src="../assets/js-core/jquery-ui-widget.js"></script>
    <script type="text/javascript" src="../assets/js-core/jquery-ui-mouse.js"></script>
    <script type="text/javascript" src="../assets/js-core/jquery-ui-position.js"></script>

    <script type="text/javascript" src="../assets/js-core/modernizr.js"></script>
    <script type="text/javascript" src="../assets/js-core/jquery-cookie.js"></script>
    <link rel="stylesheet" href="../leaflet/leaflet.css" />
    <script src="../leaflet/leaflet.js"></script>


    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>


</head>

<body>

<div id="myI">
    @yield('content')
</div>
<!-- JS Demo -->
<script type="text/javascript" src="../assets-minified/frontend-all-demo.js"></script>

</body>

<!-- Mirrored from agileui.com/demo/monarch/demo/frontend-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jul 2019 03:58:50 GMT -->
</html>

