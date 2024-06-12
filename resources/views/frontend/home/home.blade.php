@extends('frontend.layout.master')

@section('title', 'Blog')


@section('content')

@section('body')
<body class="front-page no-sidebar site-layout-full-width header-style-1 menu-has-search menu-has-cart header-sticky">
@endsection

    @foreach ($headers as $header)
    <!-- Slider -->
    <div class="rev_slider_wrapper fullwidthbanner-container">
        <div id="rev-slider2" class="rev_slider fullwidthabanner">
            <ul>
                <!-- Slide -->
                <li data-transition="random">
                    <!-- Main Image -->
                    <img src="{{ asset('uploads/home/header/' . $header->thumbnail)}}" alt="" data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" data-no-retina>
                    <!-- Layers -->
                    <div class="sfb tp-caption tp-resizeme text-white font-family-heading text-shadow text-center font-weight-700 letter-spacing-2px"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-90','-90','-90','-90']"
                        data-fontsize="['58','54','50','46']" data-lineheight="['68','64','60','56']" data-width="none"
                        data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0"
                        data-transform_out="o:0" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                        data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on">
                        {{ $header->title1 }}
                    </div>
                    <div class="sfb tp-caption tp-resizeme text-white text-shadow text-center"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-14','-14','-14','-14']"
                        data-fontsize="['16','16','16','16']" data-lineheight="['30','30','30','28']" data-width="none"
                        data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0"
                        data-transform_out="o:0" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                        data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1800" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-lasttriggerstate="reset">
                        {{ $header->short_title1 }}
                    </div>
                    <div class="sfb tp-caption" data-x="['center','center','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['83','83','83','83']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                        data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                        data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2100" data-splitin="none"
                        data-splitout="none" data-actions='[{"event":"click","action":"scrollbelow","offset":"20px"}]'
                        data-responsive="on">
                        <a href="{{ route('contact') }}" class="wprt-button rounded-3px">GET A QUOTE</a>
                    </div>
                </li>
                <!-- End Slide -->

                <!-- Slide -->
                <li data-transition="random">
                    <!-- Main Image -->
                    <img src="{{ asset('uploads/home/header/' . $header->thumbnail2)}}" alt="" data-bgposition="center center" data-no-retina>
                    <!-- Layers -->
                    <div class="sfb tp-caption tp-resizeme text-white font-family-heading text-shadow font-weight-700 letter-spacing-2px"
                        data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-110','-110','-110','-110']"
                        data-fontsize="['58','54','50','46']" data-lineheight="['68','64','60','56']" data-width="none"
                        data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="o:0"
                        data-transform_out="o:0" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;"
                        data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        {{ $header->title2 }}
                    </div>
                    <div class="sfb tp-caption tp-resizeme text-white text-shadow"
                        data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-34','-34','-34','-34']"
                        data-fontsize="['16','16','16','16']" data-lineheight="['30','30','30','28']" data-width="none"
                        data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                        data-transform_in="o:0" data-transform_out="o:0" data-start="1800" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-lasttriggerstate="reset">
                        {{ $header->short_title2 }}
                    </div>
                    <div class="sfb tp-caption" data-x="['left','left','left','left']"
                        data-hoffset="['30','30','30','30']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['63','63','63','63']" data-width="none" data-height="none"
                        data-whitespace="nowrap"
                        data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                        data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                        data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2100"
                        data-splitin="none" data-splitout="none"
                        data-actions='[{"event":"click","action":"scrollbelow","offset":"20px"}]'
                        data-responsive="on">
                        <a href="#portfolio" class="wprt-button rounded-3px">OUR PORTFOLIO</a>
                    </div>
                    <div class="sfb tp-caption" data-x="['left','left','left','left']"
                        data-hoffset="['240','230','230','220']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['63','63','63','63']" data-width="none" data-height="none"
                        data-whitespace="nowrap"
                        data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                        data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                        data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2200"
                        data-splitin="none" data-splitout="none"
                        data-actions='[{"event":"click","action":"scrollbelow","offset":"20px"}]'
                        data-responsive="on">
                        <a href="{{ route('contact') }}" class="wprt-button outline rounded-3px">CONTACT US</a>
                    </div>
                </li>
                <!-- End Slide -->
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
    </div>
    @endforeach
    <!-- Main Content -->
    <div id="main-content" class="site-main clearfix">
        <div id="content-wrap">
            <div id="site-content" class="site-content clearfix">
                <div id="inner-content" class="inner-content-wrap">
                    <div class="page-content">
                        <!-- Promotion -->
                        <section class="wprt-section promotion">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="wprt-spacer" data-desktop="8" data-mobi="8" data-smobi="8">
                                        </div>
                                        <h2 class="text-white text-center-mobile font-size-20 margin-bottom-0">
                                            Contractors & Construction Managers Since 1981</h2>
                                        <div class="wprt-spacer" data-desktop="0" data-mobi="20" data-smobi="20">
                                        </div>
                                    </div><!-- /.col-md-8 -->

                                    <div class="col-md-4">
                                        <div class="text-right text-center-mobile"><a href="{{ route('contact') }}"
                                                class="wprt-button white rounded-3px">GET A QUOTE</a></div>
                                        <div class="wprt-spacer" data-desktop="0" data-mobi="15" data-smobi="15">
                                        </div>
                                    </div><!-- /.col-md-4 -->

                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </section>

                        <!-- SERVICES -->
                        <section class="wprt-section services">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60">
                                        </div>
                                        <h2 class="text-center margin-bottom-10">MAIN SERVICES</h2>
                                        <div class="wprt-lines style-2 custom-1">
                                            <div class="line-1"></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40">
                                        </div>
                                    </div><!-- /.col-md-12 -->

                                    <div class="col-md-4">
                                        <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                            <div class="icon-wrap">
                                                <span class="dd-icon icon-drawing"></span>
                                            </div>
                                            <div class="content-wrap">
                                                <h3 class="dd-title font-size-18"><a href="#">Construction
                                                        Consultant</a></h3>
                                                <p>Vestibulum eu libero volutpat, portas quam, tempus sem. Donec sodales
                                                    quam id lorem lobortis, vitae interdum nisl.</p>
                                            </div>
                                        </div>

                                        <div class="wprt-spacer" data-desktop="50" data-mobi="30" data-smobi="30">
                                        </div>

                                        <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                            <div class="icon-wrap">
                                                <span class="dd-icon icon-engineer"></span>
                                            </div>
                                            <div class="content-wrap">
                                                <h3 class="dd-title font-size-18"><a href="#">General
                                                        Contracting</a></h3>
                                                <p>Vestibulum eu libero volutpat, portas quam, tempus sem. Donec sodales
                                                    quam id lorem lobortis, vitae interdum nisl.</p>
                                            </div>
                                        </div>

                                        <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30">
                                        </div>
                                    </div><!-- /.col-md-4 -->

                                    <div class="col-md-4">
                                        <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                            <div class="icon-wrap">
                                                <span class="dd-icon icon-drawing-compass"></span>
                                            </div>
                                            <div class="content-wrap">
                                                <h3 class="dd-title font-size-18"><a href="#">Architectural
                                                        Design</a></h3>
                                                <p>Vestibulum eu libero volutpat, portas quam, tempus sem. Donec sodales
                                                    quam id lorem lobortis, vitae interdum nisl.</p>
                                            </div>
                                        </div>

                                        <div class="wprt-spacer" data-desktop="50" data-mobi="30" data-smobi="30">
                                        </div>

                                        <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                            <div class="icon-wrap">
                                                <span class="dd-icon icon-drill-2"></span>
                                            </div>
                                            <div class="content-wrap">
                                                <h3 class="dd-title font-size-18"><a href="#">Resconstruction
                                                        Services</a></h3>
                                                <p>Vestibulum eu libero volutpat, portas quam, tempus sem. Donec sodales
                                                    quam id lorem lobortis, vitae interdum nisl.</p>
                                            </div>
                                        </div>

                                        <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30">
                                        </div>
                                    </div><!-- /.col-md-4 -->

                                    <div class="col-md-4">
                                        <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                            <div class="icon-wrap">
                                                <span class="dd-icon icon-light-bulb"></span>
                                            </div>
                                            <div class="content-wrap">
                                                <h3 class="dd-title font-size-18"><a href="#">Electrical
                                                        System</a></h3>
                                                <p>Vestibulum eu libero volutpat, portas quam, tempus sem. Donec sodales
                                                    quam id lorem lobortis, vitae interdum nisl.</p>
                                            </div>
                                        </div>

                                        <div class="wprt-spacer" data-desktop="50" data-mobi="30" data-smobi="30">
                                        </div>

                                        <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                            <div class="icon-wrap">
                                                <span class="dd-icon icon-pipe-11"></span>
                                            </div>
                                            <div class="content-wrap">
                                                <h3 class="dd-title font-size-18"><a href="#">Plumbilg
                                                        Services</a></h3>
                                                <p>Vestibulum eu libero volutpat, portas quam, tempus sem. Donec sodales
                                                    quam id lorem lobortis, vitae interdum nisl.</p>
                                            </div>
                                        </div>
                                    </div><!-- /.col-md-4 -->

                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60">
                                        </div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </section>

                        <!-- WORKS -->
                        <section class="wprt-section works parallax" id="portfolio">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60">
                                        </div>
                                        <h2 class="text-left text-white">FEATURED WORK</h2>
                                        <div class="wprt-lines custom-2">
                                            <div class="line-1"></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40">
                                        </div>
                                    </div><!-- /.col-md-12 -->

                                    <div class="col-md-12">
                                        <div class="wprt-project arrow-style-2 has-arrows arrow60 arrow-dark"
                                            data-layout="slider" data-column="3" data-column2="3" data-column3="2"
                                            data-column4="1" data-gaph="30" data-gapv="30">
                                            <div id="projects" class="cbp">
                                                <div class="cbp-item">
                                                    <div class="project-item">
                                                        <div class="inner">
                                                            <div class="grid">
                                                                <figure class="effect-sadie">
                                                                    <img src="assets/img/projects/1.jpg"
                                                                        alt="image" />
                                                                    <figcaption>
                                                                        <div>
                                                                            <h2><a target="_blank"
                                                                                    href="page-project-detail.html">LUXURY
                                                                                    BUILDINGS</a></h2>
                                                                            <p>Construction</p>
                                                                        </div>
                                                                    </figcaption>
                                                                </figure>
                                                            </div>

                                                            <a class="project-zoom cbp-lightbox"
                                                                href="assets/img/projects/1-full.jpg"
                                                                data-title="LUXURY BUILDINGS">
                                                                <i class="fa fa-arrows-alt"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div><!--/.cbp-item -->

                                                <div class="cbp-item">
                                                    <div class="project-item">
                                                        <div class="inner">
                                                            <figure class="effect-honey">
                                                                <img src="assets/img/projects/2.jpg" alt="image" />
                                                                <figcaption>
                                                                    <div>
                                                                        <h2><a target="_blank"
                                                                                href="page-project-detail-2.html">LUXURY
                                                                                BUILDINGS</a></h2>
                                                                        <p>Construction</p>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>

                                                            <a class="project-zoom cbp-lightbox"
                                                                href="assets/img/projects/2-full.jpg"
                                                                data-title="LUXURY BUILDINGS">
                                                                <i class="fa fa-arrows-alt"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div><!--/.cbp-item -->

                                                <div class="cbp-item">
                                                    <div class="project-item">
                                                        <div class="inner">
                                                            <figure class="effect-zoe">
                                                                <img src="assets/img/projects/3.jpg" alt="image" />
                                                                <figcaption>
                                                                    <div>
                                                                        <h2><a target="_blank"
                                                                                href="page-project-detail-3.html">LUXURY
                                                                                BUILDINGS</a></h2>
                                                                        <p>Construction</p>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>

                                                            <a class="project-zoom cbp-lightbox"
                                                                href="assets/img/projects/3-full.jpg"
                                                                data-title="LUXURY BUILDINGS">
                                                                <i class="fa fa-arrows-alt"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div><!--/.cbp-item -->

                                                <div class="cbp-item">
                                                    <div class="project-item">
                                                        <div class="inner">
                                                            <figure class="effect-sadie">
                                                                <img src="assets/img/projects/4.jpg" alt="image" />
                                                                <figcaption>
                                                                    <div>
                                                                        <h2><a target="_blank"
                                                                                href="page-project-detail-4.html">LUXURY
                                                                                BUILDINGS</a></h2>
                                                                        <p>Construction</p>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>

                                                            <a class="project-zoom cbp-lightbox"
                                                                href="assets/img/projects/4-full.jpg"
                                                                data-title="LUXURY BUILDINGS">
                                                                <i class="fa fa-arrows-alt"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div><!--/.cbp-item -->

                                                <div class="cbp-item">
                                                    <div class="project-item">
                                                        <div class="inner">
                                                            <figure class="effect-oscar">
                                                                <img src="assets/img/projects/5.jpg" alt="image" />
                                                                <figcaption>
                                                                    <div>
                                                                        <h2><a target="_blank"
                                                                                href="page-project-detail.html">LUXURY
                                                                                BUILDINGS</a></h2>
                                                                        <p>Construction</p>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>

                                                            <a class="project-zoom cbp-lightbox"
                                                                href="assets/img/projects/5-full.jpg"
                                                                data-title="LUXURY BUILDINGS">
                                                                <i class="fa fa-arrows-alt"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div><!--/.cbp-item -->

                                                <div class="cbp-item">
                                                    <div class="project-item">
                                                        <div class="inner">
                                                            <figure class="effect-zoe">
                                                                <img src="assets/img/projects/6.jpg" alt="image" />
                                                                <figcaption>
                                                                    <div>
                                                                        <h2><a target="_blank"
                                                                                href="page-project-detail-2.html">LUXURY
                                                                                BUILDINGS</a></h2>
                                                                        <p>Construction</p>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>

                                                            <a class="project-zoom cbp-lightbox"
                                                                href="assets/img/projects/6-full.jpg"
                                                                data-title="LUXURY BUILDINGS">
                                                                <i class="fa fa-arrows-alt"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div><!--/.cbp-item -->

                                                <div class="cbp-item">
                                                    <div class="project-item">
                                                        <div class="inner">
                                                            <figure class="effect-oscar">
                                                                <img src="assets/img/projects/7.jpg" alt="image" />
                                                                <figcaption>
                                                                    <div>
                                                                        <h2><a target="_blank"
                                                                                href="page-project-detail-2.html">LUXURY
                                                                                BUILDINGS</a></h2>
                                                                        <p>Construction</p>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>

                                                            <a class="project-zoom cbp-lightbox"
                                                                href="assets/img/projects/7-full.jpg"
                                                                data-title="LUXURY BUILDINGS">
                                                                <i class="fa fa-arrows-alt"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div><!--/.cbp-item -->

                                                <div class="cbp-item">
                                                    <div class="project-item">
                                                        <div class="inner">
                                                            <figure class="effect-sadie">
                                                                <img src="assets/img/projects/8.jpg" alt="image" />
                                                                <figcaption>
                                                                    <div>
                                                                        <h2><a target="_blank"
                                                                                href="page-project-detail-2.html">LUXURY
                                                                                BUILDINGS</a></h2>
                                                                        <p>Construction</p>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>

                                                            <a class="project-zoom cbp-lightbox"
                                                                href="assets/img/projects/8-full.jpg"
                                                                data-title="LUXURY BUILDINGS">
                                                                <i class="fa fa-arrows-alt"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div><!--/.cbp-item -->
                                            </div><!-- /#projects -->
                                        </div><!--/.wprt-project -->
                                    </div><!-- /.col-md-12 -->

                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60">
                                        </div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </section>

                        <!-- WHY CHOOSE US -->
                        <section class="wprt-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60">
                                        </div>
                                        <h2>WHY CHOOSE US?</h2>
                                        <div class="wprt-lines style-1 custom-3">
                                            <div class="line-1"></div>
                                            <div class="line-2"></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40">
                                        </div>

                                        <div class="wprt-toggle style-1">
                                            <h3 class="toggle-title">We have 30 plus years in the building industry
                                            </h3>
                                            <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat
                                                nisi. Curabitur tortor mi, eleifend ornare lobortis non. Nulla porta
                                                purus quis iaculis ultrices. Proin aliquam sem at nibh hendrerit
                                                sagittis. Nullam ornare odio eu lacus tincidunt malesuada. Sed eu
                                                vestibulum elit. Curabitur tortor mi, eleifend ornare.</div>
                                        </div>

                                        <div class="wprt-toggle active style-1">
                                            <h3 class="toggle-title">Quality construction continues after the project
                                            </h3>
                                            <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat
                                                nisi. Curabitur tortor mi, eleifend ornare lobortis non. Nulla porta
                                                purus quis iaculis ultrices. Proin aliquam sem at nibh hendrerit
                                                sagittis. Nullam ornare odio eu lacus tincidunt malesuada. Sed eu
                                                vestibulum elit. Curabitur tortor mi, eleifend ornare.</div>
                                        </div>

                                        <div class="wprt-toggle style-1">
                                            <h3 class="toggle-title">We use technology to do the job more quickly</h3>
                                            <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat
                                                nisi. Curabitur tortor mi, eleifend ornare lobortis non. Nulla porta
                                                purus quis iaculis ultrices. Proin aliquam sem at nibh hendrerit
                                                sagittis. Nullam ornare odio eu lacus tincidunt malesuada. Sed eu
                                                vestibulum elit. Curabitur tortor mi, eleifend ornare.</div>
                                        </div>

                                        <div class="wprt-toggle style-1">
                                            <h3 class="toggle-title">Employees are continually trained on safety issues
                                            </h3>
                                            <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat
                                                nisi. Curabitur tortor mi, eleifend ornare lobortis non. Nulla porta
                                                purus quis iaculis ultrices. Proin aliquam sem at nibh hendrerit
                                                sagittis. Nullam ornare odio eu lacus tincidunt malesuada. Sed eu
                                                vestibulum elit. Curabitur tortor mi, eleifend ornare.</div>
                                        </div>
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-6">
                                        <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60">
                                        </div>
                                        <h2>ABOUT US</h2>
                                        <div class="wprt-lines style-1 custom-3">
                                            <div class="line-1"></div>
                                            <div class="line-2"></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40">
                                        </div>

                                        <div class="wprt-galleries galleries w-570px" data-width="135"
                                            data-margin="10">
                                            <div id="wprt-slider" class="flexslider">
                                                <ul class="slides">
                                                    <li class="flex-active-slide">
                                                        <a class="zoom" href="assets/img/gallery/1.jpg"><i
                                                                class="fa fa-arrows-alt"></i></a>
                                                        <img src="assets/img/gallery/1.jpg" alt="image" />
                                                    </li>

                                                    <li class="flex-active-slide">
                                                        <a class="zoom" href="assets/img/gallery/2.jpg"><i
                                                                class="fa fa-arrows-alt"></i></a>
                                                        <img src="assets/img/gallery/2.jpg" alt="image" />
                                                    </li>

                                                    <li class="flex-active-slide">
                                                        <a class="zoom" href="assets/img/gallery/3.jpg"><i
                                                                class="fa fa-arrows-alt"></i></a>
                                                        <img src="assets/img/gallery/3.jpg" alt="image" />
                                                    </li>

                                                    <li class="flex-active-slide">
                                                        <a class="zoom" href="assets/img/gallery/4.jpg"><i
                                                                class="fa fa-arrows-alt"></i></a>
                                                        <img src="assets/img/gallery/4.jpg" alt="image" />
                                                    </li>
                                                </ul>
                                            </div>

                                            <div id="wprt-carousel" class="flexslider">
                                                <ul class="slides">
                                                    <li><img src="assets/img/gallery/1-s.jpg" alt="image"></li>
                                                    <li><img src="assets/img/gallery/2-s.jpg" alt="image"></li>
                                                    <li><img src="assets/img/gallery/3-s.jpg" alt="image"></li>
                                                    <li><img src="assets/img/gallery/4-s.jpg" alt="image"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60">
                                        </div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </section>

                        <!-- OFFER -->
                        <section class="wprt-section offer">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60">
                                        </div>
                                        <h2>WHAT WE OFFER</h2>
                                        <div class="wprt-lines style-1 custom-5">
                                            <div class="line-1"></div>
                                            <div class="line-2"></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40">
                                        </div>
                                    </div><!-- /.col-md-12 -->

                                    <div class="col-md-12">
                                        <div class="wprt-service arrow-style-2 has-arrows arrow60 arrow-light"
                                            data-layout="slider" data-column="3" data-column2="3" data-column3="2"
                                            data-column4="1" data-gaph="30" data-gapv="30">
                                            <div id="service-wrap" class="cbp">
                                                <div class="cbp-item">
                                                    <div class="service-item clearfix">
                                                        <div class="thumb"><img src="assets/img/services/1.jpg"
                                                                alt="image" /></div>
                                                        <div class="service-item-wrap">
                                                            <h3 class="title font-size-18"><a href="#">Design &
                                                                    Construction</a></h3>
                                                            <p class="desc">Nulla iaculis turpis in nibh aliquam
                                                                maximus. In dignissim arcu vel diam scelerisque, pretium
                                                                urna </p>
                                                            <a href="#"
                                                                class="wprt-button small rounded-3px">READ MORE</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.cbp-item -->

                                                <div class="cbp-item">
                                                    <div class="service-item clearfix">
                                                        <div class="thumb"><img src="assets/img/services/2.jpg"
                                                                alt="image" /></div>
                                                        <div class="service-item-wrap">
                                                            <h3 class="title font-size-18"><a href="#">The Green
                                                                    Building</a></h3>
                                                            <p class="desc">Nulla iaculis turpis in nibh aliquam
                                                                maximus. In dignissim arcu vel diam scelerisque, pretium
                                                                urna </p>
                                                            <a href="#"
                                                                class="wprt-button small rounded-3px">READ MORE</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.cbp-item -->

                                                <div class="cbp-item">
                                                    <div class="service-item clearfix">
                                                        <div class="thumb"><img src="assets/img/services/3.jpg"
                                                                alt="image" /></div>
                                                        <div class="service-item-wrap">
                                                            <h3 class="title font-size-18"><a href="#">House
                                                                    Renovation</a></h3>
                                                            <p class="desc">Nulla iaculis turpis in nibh aliquam
                                                                maximus. In dignissim arcu vel diam scelerisque, pretium
                                                                urna </p>
                                                            <a href="#"
                                                                class="wprt-button small rounded-3px">READ MORE</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.cbp-item -->

                                                <div class="cbp-item">
                                                    <div class="service-item clearfix">
                                                        <div class="thumb"><img src="assets/img/services/1.jpg"
                                                                alt="image" /></div>
                                                        <div class="service-item-wrap">
                                                            <h3 class="title font-size-18"><a href="#">Design &
                                                                    Construction</a></h3>
                                                            <p class="desc">Nulla iaculis turpis in nibh aliquam
                                                                maximus. In dignissim arcu vel diam scelerisque, pretium
                                                                urna </p>
                                                            <a href="#"
                                                                class="wprt-button small rounded-3px">READ MORE</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.cbp-item -->
                                            </div><!-- /#service-wrap -->
                                        </div><!-- /.wprt-service -->
                                    </div><!-- /.col-md-12 -->

                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60">
                                        </div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </section>

                        <!-- FACTS -->
                        <section class="wprt-section facts">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                    </div><!-- /.col-md-4 -->
                                    <div class="col-md-8">
                                        <div class="wprt-spacer" data-desktop="120" data-mobi="80" data-smobi="60">
                                        </div>
                                        <h2
                                            class="text-right text-center-mobile text-white font-family-extend font-size-25 margin-bottom-0 line-height-normal letter-spacing-1px">
                                            The Construction Company</h2>
                                        <h3
                                            class="text-right text-center-mobile text-white font-family-heading font-size-70 line-height-normal margin-bottom-20 letter-spacing-1px">
                                            <strong>AWESOME FACTS</strong></h3>
                                    </div><!-- /.col-md-8 -->
                                    <div class="col-md-6">
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-2">
                                        <div class="wprt-counter text-center white-type has-plus">
                                            <div class="number" data-speed="5000" data-to="13691"
                                                data-in-viewport="yes">13691</div>
                                            <div class="text">PROJECT COMPLETED</div>
                                        </div>
                                    </div><!-- /.col-md-2 -->
                                    <div class="col-md-2">
                                        <div class="wprt-counter text-center white-type has-plus">
                                            <div class="number" data-speed="5000" data-to="1725"
                                                data-in-viewport="yes">1725</div>
                                            <div class="text">SATISFIED CLIENTS</div>
                                        </div>
                                    </div><!-- /.col-md-2 -->
                                    <div class="col-md-2">
                                        <div class="wprt-counter text-center white-type has-plus">
                                            <div class="number" data-speed="5000" data-to="984"
                                                data-in-viewport="yes">984</div>
                                            <div class="text">WORKERS EMPLOYED</div>
                                        </div>
                                    </div><!-- /.col-md-2 -->
                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="130" data-mobi="80" data-smobi="60">
                                        </div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </section>

                        <!-- TESTIMONIALS -->
                        <section class="wprt-section testiminials">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60">
                                        </div>
                                    </div><!-- /.col-md-12 -->

                                    <div class="col-md-6">
                                        <h2>OUR PARTNERS</h2>
                                        <div class="wprt-lines style-1 custom-3">
                                            <div class="line-1"></div>
                                            <div class="line-2"></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40">
                                        </div>

                                        <div class="wprt-partner-grid has-outline col-3 gutter-10">
                                            <div class="partner-wrap clearfix">
                                                <div class="partner-row clearfix">
                                                    <div class="partner-item">
                                                        <div class="inner-item">
                                                            <a target="_blank" href="#"><img
                                                                    src="assets/img/partners/1.png"
                                                                    alt="image" /></a>
                                                        </div>
                                                    </div><!-- /.partner-item -->

                                                    <div class="partner-item">
                                                        <div class="inner-item">
                                                            <a target="_blank" href="#"><img
                                                                    src="assets/img/partners/2.png"
                                                                    alt="image" /></a>
                                                        </div>
                                                    </div><!-- /.partner-item -->

                                                    <div class="partner-item">
                                                        <div class="inner-item">
                                                            <a target="_blank" href="#"><img
                                                                    src="assets/img/partners/3.png"
                                                                    alt="image" /></a>
                                                        </div>
                                                    </div><!-- /.partner-item -->
                                                </div>

                                                <div class="partner-row clearfix">
                                                    <div class="partner-item">
                                                        <div class="inner-item">
                                                            <a target="_blank" href="#"><img
                                                                    src="assets/img/partners/4.png"
                                                                    alt="image" /></a>
                                                        </div>
                                                    </div><!-- /.partner-item -->

                                                    <div class="partner-item">
                                                        <div class="inner-item">
                                                            <a target="_blank" href="#"><img
                                                                    src="assets/img/partners/5.png"
                                                                    alt="image" /></a>
                                                        </div>
                                                    </div><!-- /.partner-item -->

                                                    <div class="partner-item">
                                                        <div class="inner-item">
                                                            <a target="_blank" href="#"><img
                                                                    src="assets/img/partners/6.png"
                                                                    alt="image" /></a>
                                                        </div>
                                                    </div><!-- /.partner-item -->
                                                </div>
                                            </div><!-- /.partner-wrap -->
                                        </div><!-- /.wprt-partner-grid -->

                                        <div class="wprt-spacer" data-desktop="0" data-mobi="40" data-smobi="40">
                                        </div>
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-6">
                                        <h2>TESTIMONIALS</h2>
                                        <div class="wprt-lines style-1 custom-3">
                                            <div class="line-1"></div>
                                            <div class="line-2"></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40">
                                        </div>

                                        <div class="wprt-testimonials has-outline arrow-style-2 has-arrows arrow60 arrow-light"
                                            data-layout="slider" data-column="1" data-column2="1" data-column3="1"
                                            data-column4="1" data-gaph="0" data-gapv="0">
                                            <div id="testimonials-wrap" class="cbp">
                                                <div class="cbp-item">
                                                    <div class="customer clearfix">
                                                        <div class="inner">
                                                            <div class="image"><img
                                                                    src="assets/img/testimonials/1.jpg"
                                                                    alt="image" /></div>
                                                            <h4 class="name">DON PAULSON</h4>
                                                            <div class="position">Architectural Co.</div>
                                                            <blockquote class="whisper">Your efficient planning,
                                                                scheduling, management, and supervision resulted in
                                                                timely completion and a quality facility...Particularly
                                                                refreshing was the spirit of cooperation demonstrated by
                                                                your firm which served to minimize costly delays and
                                                                contract modifications.</blockquote>
                                                        </div>
                                                    </div>
                                                </div><!-- /.cbp-item -->

                                                <div class="cbp-item">
                                                    <div class="customer clearfix">
                                                        <div class="inner">
                                                            <div class="image"><img
                                                                    src="assets/img/testimonials/2.jpg"
                                                                    alt="image" /></div>
                                                            <h4 class="name">DON PAULSON</h4>
                                                            <div class="position">Architectural Co.</div>
                                                            <blockquote class="whisper">Your efficient planning,
                                                                scheduling, management, and supervision resulted in
                                                                timely completion and a quality facility...Particularly
                                                                refreshing was the spirit of cooperation demonstrated by
                                                                your firm which served to minimize costly delays and
                                                                contract modifications.</blockquote>
                                                        </div>
                                                    </div>
                                                </div><!-- /.cbp-item -->

                                                <div class="cbp-item">
                                                    <div class="customer clearfix">
                                                        <div class="inner">
                                                            <div class="image"><img
                                                                    src="assets/img/testimonials/3.jpg"
                                                                    alt="image" /></div>
                                                            <h4 class="name">DON PAULSON</h4>
                                                            <div class="position">Architectural Co.</div>
                                                            <blockquote class="whisper">Your efficient planning,
                                                                scheduling, management, and supervision resulted in
                                                                timely completion and a quality facility...Particularly
                                                                refreshing was the spirit of cooperation demonstrated by
                                                                your firm which served to minimize costly delays and
                                                                contract modifications.</blockquote>
                                                        </div>
                                                    </div>
                                                </div><!-- /.cbp-item -->
                                            </div><!-- /#service-wrap -->
                                        </div><!-- /.wprt-service -->
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60">
                                        </div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </section>
                    </div><!-- /.page-content -->
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <!-- Javascript -->
        <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/animsition.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/plugins.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/countTo.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/flexslider.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/cube.portfolio.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

        <!-- Revolution Slider -->
        <script type="text/javascript" src="{{ asset('includes/rev-slider/js/jquery.themepunch.tools.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('includes/rev-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/rev-slider.js') }}"></script>
        <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
        <script type="text/javascript"
            src="{{ asset('includes/rev-slider/js/extensions/revolution.extension.actions.min.js') }}"></script>
        <script type="text/javascript"
            src="{{ asset('includes/rev-slider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
        <script type="text/javascript"
            src="{{ asset('includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
        <script type="text/javascript"
            src="{{ asset('includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script type="text/javascript"
            src="{{ asset('includes/rev-slider/js/extensions/revolution.extension.migration.min.js') }}"></script>
        <script type="text/javascript"
            src="{{ asset('includes/rev-slider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script type="text/javascript"
            src="{{ asset('includes/rev-slider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
        <script type="text/javascript"
            src="{{ asset('includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script type="text/javascript"
            src="{{ asset('includes/rev-slider/js/extensions/revolution.extension.video.min.js') }}"></script>
    @endpush

@endsection
