<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<!-- Mirrored from themes247.net/html5/construction-template/demo/home-slider-simple.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jun 2024 08:24:41 GMT -->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Construction - Construction Company, Building Company Template</title>
    <meta name="description" content="Template built for Construction Company, Building Services, Architecture, Engineering, Cleaning Service and other Construction related services">
    <meta name="keywords" content=" architecture, builder, building, building company, cleaning services, construction, construction business, construction company">
    <meta name="author" content="blogwp.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <!-- Favicon and touch icons  -->
    <link rel="shortcut icon" href="assets/icon/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/icon/apple-touch-icon-158-precomposed.png">

</head>


@yield('body')
    <div id="wrapper" class="animsition">
        <div id="page" class="clearfix">


    @include('frontend.layout.navbar')

    @yield('content')

    @include('frontend.layout.footer')

</div><!-- /#page -->
</div><!-- /#wrapper -->

<a id="scroll-top"></a>

    @stack('script')

</body>

</html>
