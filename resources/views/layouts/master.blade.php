<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Power your fashion & tailoring business with HandySeam</title>
    <meta name="description" content="HandySeam is the ultimate app for fashion designers and tailors to simplify and supercharge their business operations" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--favicon
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />-->
    <link rel="shortcut icon" href="favicon.png" type="image/png" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.3.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    @include('layouts.header')
    <!-- End Header Area -->

    @yield('content')

    <!-- Start Footer Area -->
    @include('layouts.footer')

    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
        //========= testimonial 
        // tns({
        //     container: '.testimonial-slider',
        //     items: 3,
        //     slideBy: 'page',
        //     autoplay: false,
        //     mouseDrag: true,
        //     gutter: 0,
        //     nav: true,
        //     controls: false,
        //     responsive: {
        //         0: {
        //             items: 1,
        //         },
        //         540: {
        //             items: 1,
        //         },
        //         768: {
        //             items: 2,
        //         },
        //         992: {
        //             items: 2,
        //         },
        //         1170: {
        //             items: 3,
        //         }
        //     }
        // });

        //====== counter up 
        var cu = new counterUp({
            start: 0,
            duration: 2000,
            intvalues: true,
            interval: 100,
            append: " ",
        });
        cu.start();

        //========= glightbox
        GLightbox({
            'href': 'https://youtu.be/OlwkXZ5_qYI?si=5BeoXEEhEZJIVXse',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoplayVideos': true,
        });
    </script>
</body>

</html>