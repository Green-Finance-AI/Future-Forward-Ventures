<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $ga_id; ?>"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', '<?php echo $ga_id; ?>');
    </script>
    
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="Alice" content="Future Forward Ventures">
    <!-- Description -->
    <!-- <meta name="description"
        content="MegaOne is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose studio and portfolio HTML5 template with ready home page demos."> -->
    <!-- Page Title -->
    <title> Future Forward Ventures</title>
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?php echo $gtm_id; ?>');</script>
    <!-- End Google Tag Manager -->

    <!-- Bundle -->
    <link rel="stylesheet" href="vendor/css/bundle.min.css">
    <!-- Plugin Css -->
    <link href="vendor/css/LineIcons.min.css" rel="stylesheet">
    <link href="vendor/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="vendor/css/owl.carousel.min.css" rel="stylesheet">
    <link href="vendor/css/wow.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/css/cubeportfolio.min.css">
    <link href="ai-agency/css/line-awesome.min.css" rel="stylesheet">
    <!-- Style Sheet -->
    <link href="ai-agency/css/style.css" rel="stylesheet">
    <link href="ai-agency/css/custom.css" rel="stylesheet">

    <!-- Favicon for all devices and platforms -->
    <link rel="icon" type="image/png" sizes="16x16" href="ai-agency/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="ai-agency/favicon/favicon-32x32.png">
    <link rel="icon" href="ai-agency/favicon/favicon.ico" type="image/x-icon">

    <!-- Apple Touch Icon for iOS devices -->
    <link rel="apple-touch-icon" sizes="180x180" href="ai-agency/favicon/apple-touch-icon.png">

    <!-- Android Chrome Icons -->
    <link rel="icon" type="image/png" sizes="192x192" href="ai-agency/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="ai-agency/favicon/android-chrome-512x512.png">

    <!-- Web App Manifest -->
    <link rel="manifest" href="ai-agency/favicon/site.webmanifest">

    <!-- Quick and dirty inline styles -->
    <style>
        .banner-sec {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            position: relative;
            background-size: cover;
            background-position: center;
            /* Add a dark overlay using a linear gradient */
            background-color: rgba(0, 0, 0, 0.7); /* Fallback color */
            background-blend-mode: multiply;
        }
        
        .about-image img {
            max-width: 100%;
            max-height: 80vh;
            object-fit: contain;
        }
    </style>
</head>

<!-- <body data-offset="90" data-spy="scroll" data-target=".navbar"> -->
<body data-spy="scroll">
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $gtm_id; ?>"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Start preloader -->
    <div class="loader-bg">
        <div id="building">
            <div id="blocks">
                <div class="b" id="b1"></div>
                <div class="b" id="b2"></div>
                <div class="b" id="b3"></div>
                <div class="b" id="b4"></div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Start Header -->
    <!-- <header> -->
        <!--Navigation-->
        <!-- <nav class="navbar navbar-top-default navbar-expand-lg navbar-simple nav-line">
            <a href="javascript:void(0)" class="sidemenu_btn" id="sidemenu_toggle">
                <span></span>
                <span></span>
                <span></span>
            </a> -->
            <!-- <div class="container-fluid">
                <a href="index-ai-agency.html" title="Logo" class="logo"> -->
                    <!--Logo Default-->
                    <!-- <img src="ai-agency/images/logo.png" alt="logo" class="logo-dark ml-lg-5 mr-lg-2">
                </a> -->

                <!--Side Menu Button-->
                <!-- <div class="nav-social text-white d-flex justify-content-center">
                    <ul class="social-icons-simple">
                        <li><a class="facebook-bg-hvr" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a>
                        </li>
                        <li><a class="twitter-bg-hvr" href="javascript:void(0)"><i class="fab fa-x-twitter"></i> </a>
                        </li>
                        <li><a class="linkedin-bg-hvr" href="javascript:void(0)"><i class="fab fa-linkedin-in"></i> </a>
                        </li>
                        <li><a class="instagram-bg-hvr" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a>
                        </li>
                    </ul>
                </div> -->
            <!-- </div> -->
            <!--Social Icons-->
        <!-- </nav> -->
        <!--Side Nav-->
        <!-- <div class="side-menu hidden"> -->
            <!-- <div class="inner-wrapper">
                <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
                <a href="index-ai-agency.html" title="Logo" class="logo-side-menu"> -->
                    <!--Logo Default-->
                    <!-- <img src="ai-agency/images/logo-side-menu.png" alt="logo" class="logo-dark">
                </a>
                <nav class="side-nav w-100">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#banner">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#about">About Agency</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#company-portfolio-section">AI Work Samples</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#testimonial">Client Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#blog">Why AI Chatbots</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#contact">Hire Us</a>
                        </li>
                    </ul>
                </nav> -->

                <!-- <div class="side-footer text-white w-100">
                    <ul class="social-icons-simple">
                        <li><a class="facebook-bg-hvr" href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a class="twitter-bg-hvr" href="javascript:void(0)"><i class="fab fa-x-twitter"></i></a></li>
                        <li><a class="linkedin-bg-hvr" href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li><a class="instagram-bg-hvr" href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                    <p class="sidemenu-des">&copy; 2024 MegaOne. Made With Love by <span class="d-inline d-lg-block">
                            ThemesIndustry</span></p>
                </div>
            </div> -->
        <!-- </div> -->
        <!-- <a id="close_side_menu" href="javascript:void(0);"></a> -->
        <!-- End side menu -->
    <!-- </header> -->
    <!-- End Header -->

    <!-- Start banner -->
    <section class="banner-sec banner-image" id="banner">
        <div class="container-fluid">
            <!-- <div class="row"> -->
                <!-- <div class="col-lg-6 d-flex align-items-center justify-content-center"> -->
                    <div class="brand-container">
                        <img src="ai-agency/images/futurefwdai_logo.png" alt="Logo" class="brand-logo">
                        <div class="brand-text">
                            <span class="d-block">Future</span>
                            <span class="d-block">Forward</span>
                            <span class="d-block">Ventures</span>
                        </div>
                    </div>
                <!-- </div> -->
            <!-- </div> -->
        </div>
    </section>
    <!-- End banner -->

    <!-- Start About -->
    <!-- <section class="about-sec bg-dark-blue" id="about">
        <div class="container">

            <div class="row padding-bottom">
                <div class="col-lg-4">
                    <div class="cover">
                        <div class="card">
                            <h1 class="numbering text-green">01.</h1>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">AI Based Images</h5>
                            <p class="card-text info">Lorem ipsum dolor amet, consectetur adipiscing elit augue diam,
                                accumsan ipsum dolor sit amet, consectetur adipiscing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="cover">
                        <div class="card">
                            <h1 class="numbering text-green">02.</h1>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">AI Text Generator</h5>
                            <p class="card-text info">Lorem ipsum dolor amet, consectetur adipiscing elit augue diam,
                                accumsan ipsum dolor sit amet, consectetur adipiscing.</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="about-image">
                        <img src="ai-agency/images/about-img.png" alt="about-image">
                    </div>
                </div>
            </div>

            <div class="row padding-top">
                <div class="col-lg-4">
                    <div class="cover">
                        <div class="card">
                            <h1 class="numbering text-green">03.</h1>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">AI Personal Assistant</h5>
                            <p class="card-text info">Lorem ipsum dolor amet, consectetur adipiscing elit augue diam,
                                accumsan ipsum dolor sit amet, consectetur adipiscing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="cover">
                        <div class="card">
                            <h1 class="numbering text-green">04.</h1>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">AI CHATbot </h5>
                            <p class="card-text info">Lorem ipsum dolor amet, consectetur adipiscing elit augue diam,
                                accumsan ipsum dolor sit amet, consectetur adipiscing.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section> -->
    <!-- End About -->

    <!-- Start feature -->
    <!-- <section class="feature-sec feature-image">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <div class="feature-area">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <h2 class="feature-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae
                            egestas mi, vel dapibus diam.</h2>
                        <h4 class="quote-name">TANIA PARIS</h4>
                        <h3 class="quote-des mt-1"><i>The Next AI Agency</i></h3>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End feature -->

    <!-- Start Portfolio -->
    <!-- <section class="portfolio-sec company-portfolio-section" id="company-portfolio-section">
        <div class="container">
            <div class="section-heading">
                <div class="row">
                    <div class="col-lg-6 wow fadeInUp text-center text-lg-left" data-wow-delay="300ms">
                        <h1 class="portfolio-heading text-blue"><span class="d-block text-dark-blue">Our Recent
                            </span> AI Based work</h1>
                    </div> -->
                    <!-- Filters -->
                    <!-- <div class="col-md-12 pt-4 pt-md-5">
                        <div id="js-filters-mosaic" class="cbp-l-filters-button wow fadeInUp text-center text-lg-left"
                            data-wow-delay="350ms">
                            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All</div>
                            <div data-filter=".chatbot" class="cbp-filter-item">Chatbot</div>
                            <div data-filter=".logo" class="cbp-filter-item"> images </div>
                            <div data-filter=".mobile" class="cbp-filter-item">content </div>
                            <div data-filter=".development" class="cbp-filter-item">Other</div>
                        </div>
                        <div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic"> -->
                            <!-- Image-1 -->
                            <!-- <div class="cbp-item chatbot logo">
                                <a href="ai-agency/images/work-1.jpg" class="cbp-caption cbp-lightbox"
                                    data-title="Workout Buddy<br>by Tiberiu Neamu">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="ai-agency/images/work-1.jpg" alt="img">
                                    </div>
                                    <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                        <div class="portfolio-inner-content">
                                            <span></span>
                                            <span></span>
                                        </div>
                                        <div class="hover-text">
                                            <h4 class="p-hover-title">Creative</h4>
                                            <p class="p-hover-des">35 WP Anniversary</p>
                                        </div>
                                    </div>
                                </a>
                            </div> -->
                            <!-- Image-2 -->
                            <!-- <div class="cbp-item print mobile chatbot">
                                <a href="ai-agency/images/work-2.jpg" class="cbp-caption cbp-lightbox"
                                    data-title="Workout Buddy<br>by Tiberiu Neamu">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="ai-agency/images/work-2.jpg" alt="img">
                                    </div>
                                    <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                        <div class="portfolio-inner-content">
                                            <span></span>
                                            <span></span>
                                        </div>
                                        <div class="hover-text">
                                            <h4 class="p-hover-title">Creative Design</h4>
                                            <p class="p-hover-des">35 WP Anniversary</p>
                                        </div>
                                    </div>
                                </a>
                            </div> -->
                            <!-- Image-3 -->
                            <!-- <div class="cbp-item print logo development chatbot mobile">
                                <a href="ai-agency/images/work-3.jpg" class="cbp-caption cbp-lightbox"
                                    data-title="Workout Buddy<br>by Tiberiu Neamu">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="ai-agency/images/work-3.jpg" alt="img">
                                    </div>
                                    <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                        <div class="portfolio-inner-content">
                                            <span></span>
                                            <span></span>
                                        </div>
                                        <div class="hover-text">
                                            <h4 class="p-hover-title">Amazing</h4>
                                            <p class="p-hover-des">35 WP Anniversary</p>
                                        </div>
                                    </div>
                                </a>
                            </div> -->
                            <!-- Image-4 -->
                            <!-- <div class="cbp-item logo development">
                                <a href="ai-agency/images/work-4.jpg" class="cbp-caption cbp-lightbox"
                                    data-title="Workout Buddy<br>by Tiberiu Neamu">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="ai-agency/images/work-4.jpg" alt="img">
                                    </div>
                                    <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                        <div class="portfolio-inner-content">
                                            <span></span>
                                            <span></span>
                                        </div>
                                        <div class="hover-text">
                                            <h4 class="p-hover-title">Flowers design</h4>
                                            <p class="p-hover-des">35 WP Anniversary</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div> -->
                        <!-- Button -->
                        <!-- <div id="js-loadMore-lightbox-gallery" class="cbp-l-loadMore-button text-data wow fadeInUp"
                            data-wow-delay="650ms">
                            <div class="row portfolio-foot-detail text-data-inner">
                                <div class="col-7 col-lg-4 offset-lg-6 text-left pl-4">
                                    <span class="p-text">We've Completed More Then</span>
                                    <h4 class="p-num text-blue">389</h4>
                                    <span class="p-text">AI Apps for Our amazing Clients</span>
                                </div>
                                <div class="col-5 col-lg-2 d-flex justify-content-end align-items-center"><a
                                        href="ai-agency/standalone.html"
                                        class="btn btn-darkblue rounded-pill">View All</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Portfolio -->

    <!-- Start testimonial -->
    <!-- <section class="testimonial-sec testimonial-img" id="testimonial">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center vh-100">
                <div class="col-lg-6 ">
                    <div class="testimonial-area">
                        <h2 class="testimonial-heading">satisfied <span class="d-block">customers</span></h2>
                        <h4 class="testimonial-des">Lorem ipsum is simply dummy text of the printing and typesetting.
                            Lorem Ipsum has been the industry’s standard dummy.</h4>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-carousel wow fadeInRight">
                        <div class="testimonial-box owl-carousel owl-theme">
                            <div class="item text-center">
                                <div class="icon-holder">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                                <p class="testimonial-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae egestas mi, vel
                                    dapibus diam. Mauris malesuada, nisl non rutrum commodo, sem magna laoreet tellus,
                                    eu euismod dolor enim et mi. In at tempor purus.
                                </p>
                                <div class="img-holder">
                                    <img src="ai-agency/images/client-1.jpg" alt="image">
                                </div>
                                <h4 class="user-name">Sara Williams</h4>
                            </div>
                            <div class="item text-center">
                                <div class="icon-holder">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                                <p class="testimonial-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae egestas mi, vel
                                    dapibus diam. Mauris malesuada, nisl non rutrum commodo, sem magna laoreet tellus,
                                    eu euismod dolor enim et mi. In at tempor purus.
                                </p>
                                <div class="img-holder">
                                    <img src="ai-agency/images/client-2.png" alt="image">
                                </div>
                                <h4 class="user-name">Julia Miltese</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End testimonial -->

    <!-- Start blog -->
    <!-- <section class="blog-sec" id="blog">
        <div class="container">
            <div class="row padding-top padding-bottom ">
                <div class="col-lg-6">
                    <div class="blog-image">
                        <img src="ai-agency/images/blog-img.png" alt="blog-image">
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <div class="blog-area">
                        <h2 class="blog-heading text-blue">AI Super <span class="text-dark-blue">Chatbots</span></h2>
                            <div class="blog-des">
                            <p>Lorem ipsum is simply dummy text of the printing and typesetting. Lorem
                            Ipsum has been the industry. Lorem ipsum is simply dummy text of the printing and
                            typesetting. Lorem Ipsum has been the industry.</p> 
                            
                            <p>Lorem ipsum is simply dummy text of the printing and typesetting. Lorem
                            Ipsum has been the industry. </p>
                        </div>
                        <a href="ai-agency/standalone.html" class="btn btn-blue rounded-pill">LEARN MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End blog -->

    <!-- Start contact -->
    <!-- <section class="contact-sec bg-contact" id="contact">
        <div class="container">
            <div class="row padding-top padding-bottom">
                <div class="col-12 col-md-12 col-lg-6 wow slideInLeft" data-wow-delay=".5s">
                    <div class="contact-area">
                        <h4 class="contact-heading">Hire Us! <span class="d-block"> as as your AI partner</h4>
                    </div>
                    <div class="contact-details">
                        <ul>
                            <li><i aria-hidden="true" class="las la-paper-plane"></i>email@website.com</li>
                            <li><i aria-hidden="true" class="las la-phone"></i><span>+1 631 1234 5678</span></li>
                            <li><i aria-hidden="true" class="las la-map-marker"></i> 123 Park Avenue, New York</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6 wow slideInRight" data-wow-delay=".5s">
                    <form class="row contact-form row-padding" id="contact-form-data">
                        <div class="col-12 col-lg-10" id="result"></div>
                        <div class="col-12 col-lg-10">
                            <input type="text" name="userName" placeholder="Name" class="form-control">
                            <input type="text" name="userPhone" placeholder="Contact No" class="form-control">
                            <input type="email" name="userEmail" placeholder="Email" class="form-control">
                            <textarea class="form-control" name="userMessage" rows="6"
                                placeholder="Type Your Message Here"></textarea>
                            <a href="javascript:void(0);"
                                class="btn btn-medium btn-rounded btn-white rounded-pill w-100 contact_btn main-font">Submit
                                Information</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row padding-top">
                <div class="col-lg-6">
                    <div class="footer-social">
                        <ul class="list-unstyled">
                            <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true"
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true"
                                        class="fab fa-x-twitter"></i></a></li>
                            <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true"
                                        class="fab fa-google-plus-g"></i></a></li>
                            <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true"
                                        class="fab fa-linkedin-in"></i></a></li>
                            <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true"
                                        class="fab fa-instagram"></i></a></li>
                            <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true"
                                        class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div> -->
                <!--Text-->
                <!-- <div class="col-lg-6 ">
                    <p class="company-about fadeIn">&copy; 2024 MegaOne. Made With Love By <a
                            href="javascript:void(0);">Themesindustry</a>
                    </p>
                </div>
            </div>
        </div> -->
    <!-- </section> -->
    <!-- End contact -->

    <!-- JavaScript -->
    <script src="vendor/js/bundle.min.js"></script>
    <!-- Plugin Js -->
    <script src="vendor/js/jquery.appear.js"></script>
    <script src="vendor/js/jquery.fancybox.min.js"></script>
    <script src="vendor/js/owl.carousel.min.js"></script>
    <script src="vendor/js/wow.min.js"></script>
    <script src="vendor/js/jquery.cubeportfolio.min.js"></script>
    <!-- CUSTOM JS -->
    <script src="vendor/js/contact_us.js"></script>
    <script src="ai-agency/js/script.js"></script>
</body>

</html>