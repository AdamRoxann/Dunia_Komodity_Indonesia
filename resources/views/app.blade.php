<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <link rel="icon" type="image/png" href="/assets/images/logo.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <title>PT. DKI</title>
    <link rel="stylesheet" href="/assets/css/fontawesome-min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/xsIcon.css">
    <link rel="stylesheet" href="/assets/css/iconmoon.css">
    <link rel="stylesheet" href="/assets/css/isotope.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/css/navigation.css">
    <link rel="stylesheet" href="/assets/css/animate.css">

    <!--Theme custom css -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="/assets/css/responsive.css" />
    <style>
        html {
          scroll-behavior: smooth;
        }
        .whats-app {
            margin-right: 25px;
            position: fixed;
            width: 70px;
            height: 70px;
            bottom: 40px;
            left: unset;
            right: 0;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 20px;
        }

        .no_dropdown::before {
            content: none !important;
        }

        .zoom {
            border-radius: 10px;
            transition: transform .2s;
        }

        .zoom:hover {
            transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
    

    </style>
</head>
<body>
<a class="whats-app" href="https://api.whatsapp.com/send/?phone=%2B6281260774365&text&app_absent=0" target="_blank">
    <!-- <a class="whats-app" href="https://api.whatsapp.com/send/?phone=%2B6287877515574&text&app_absent=0" target="_blank"> -->
        <i class="fa fa-whatsapp fa-lg my-float"></i>
    </a>
    <div id="preloader">
        <div class="preloader-wrapper">
            <div class="la-ball-clip-rotate-pulse la-2x">
                <div></div>
                <div></div>
            </div>
        </div>
        <a href="" class="cancel-preloader">Cancel Preloader</a>
    </div>
<main id="app">
    <headers></headers>
    <router-view></router-view>
    <footers></footers>
</main>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="/assets/js/jquery-3.2.1.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery-mixtub.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/navigation.js"></script>
    <script src="/assets/js/jquery.appear.min.js"></script>
    <script src="/assets/js/isotope.js"></script>
    <script src="/assets/js/wow.min.js"></script>
            <script>
              new WOW().init();
            </script>
    <script src="/assets/js/main.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>

</body>
</html>