<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>e-santunan</title>

<!-- Stylesheets -->
<link href="{{asset('')}}assets/css/style.css" rel="stylesheet">
<link href="{{asset('')}}assets/css/responsive.css" rel="stylesheet">
<link rel="icon" href="{{asset('')}}image/logo.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<!-- page wrapper -->
<body class="boxed_wrapper">


    <!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->



    <!-- main header -->
    <header class="main-header">

        <!-- Header upper -->
        <div class="header-upper">
            <div class="container">
                <div class="outer-box clearfix">
                    <div class="float-left">
                        <figure class="logo-box"><a href="#home">
                            {{-- <img src="{{asset('')}}image/logo.png"  alt="" title="" width="10%"> --}}
                            {{-- <h>e-Santunan</h> --}}
                        </a></figure>
                    </div>
                    <div class="float-right upper-right clearfix">
                        <div class="nav-outer clearfix">
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current dropdown"><a href="#home">Home</a>
                                            {{-- <div class="megamenu">
                                                <div class="row">
                                                    <div class="col-lg-4 column">
                                                        <div class="inner-column">
                                                            <h4><a href="index-2.html">Home 01</a></h4>
                                                            <figure class="image"><a href="index-2.html"><img src="{{asset('')}}assets/images/resource/home-1.png" alt=""></a></figure>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 column">
                                                        <div class="inner-column">
                                                            <h4><a href="index-3.html">Home 02</a></h4>
                                                            <figure class="image"><a href="index-3.html"><img src="{{asset('')}}assets/images/resource/home-2.png" alt=""></a></figure>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 column">
                                                        <div class="inner-column">
                                                            <h4><a href="index-4.html">Home 03</a></h4>
                                                            <figure class="image"><a href="index-4.html"><img src="{{asset('')}}assets/images/resource/home-3.png" alt=""></a></figure>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 column">
                                                        <div class="inner-column">
                                                            <h4><a href="index-5.html">Home 04</a></h4>
                                                            <figure class="image"><a href="index-5.html"><img src="{{asset('')}}assets/images/resource/home-4.png" alt=""></a></figure>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 column">
                                                        <div class="inner-column">
                                                            <h4><a href="index-6.html">Home 05</a></h4>
                                                            <figure class="image"><a href="index-6.html"><img src="{{asset('')}}assets/images/resource/home-5.png" alt=""></a></figure>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 column">
                                                        <div class="inner-column">
                                                            <h4><a href="index-7.html">Home 06</a></h4>
                                                            <figure class="image"><a href="index-7.html"><img src="{{asset('')}}assets/images/resource/home-6.png" alt=""></a></figure>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 column">
                                                        <div class="inner-column">
                                                            <h4><a href="index-8.html">E-commerce_Home </a></h4>
                                                            <figure class="image"><a href="index-8.html"><img src="{{asset('')}}assets/images/resource/home-7.png" alt=""></a></figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </li>
                                        {{-- <li class="dropdown"><a href="#">Portfolio</a>
                                            <div class="megamenu">
                                                <div class="row">
                                                    <div class="col-lg-4 column">
                                                        <div class="inner-column">
                                                            <h4 class="submenu-title">Portfolio features</h4>
                                                            <ul class="list">
                                                                <li><a href="portfolio.html">Portfolio Classic box</a></li>
                                                                <li><a href="portfolio-2.html">Portfolio fullwidth with box</a></li>
                                                                <li><a href="portfolio-3.html">Portfolio 2 column/grid</a></li>
                                                                <li><a href="portfolio-4.html">Portfolio Full width Filter</a></li>
                                                                <li><a href="portfolio-5.html">Portfolio 3 column filter</a></li>
                                                                <li><a href="portfolio-6.html">Portfolio 4 column filter</a></li>
                                                                <li><a href="portfolio-7.html">Portfolio left side filter</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 column">
                                                        <div class="inner-column">
                                                            <h4 class="submenu-title">Portfolio Feature 2</h4>
                                                            <ul class="list">
                                                                <li><a href="portfolio-8.html">Portfolio Full width masonry</a></li>
                                                                <li><a href="portfolio-9.html">Full width masonry Filter</a></li>
                                                                <li><a href="portfolio-10.html">Portfolio 2 columns slide style</a></li>
                                                                <li><a href="portfolio-11.html">Portfolio banner style</a></li>
                                                                <li><a href="portfolio-12.html">Portfolio banner style 2</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 column">
                                                        <div class="inner-column">
                                                            <h4 class="submenu-title">Portfolio Single</h4>
                                                            <ul class="list">
                                                                <li><a href="portfolio-single.html">Portfolio Single v1</a></li>
                                                                <li><a href="portfolio-single-2.html">Portfolio Single fullwidth</a></li>
                                                                <li><a href="portfolio-single-3.html">Portfolio Single banner</a></li>
                                                                <li><a href="portfolio-single-4.html">Portfolio banner style 2</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> --}}
                                        <li class="dropdown"><a href="#tentang">Tentang</a>
                                            {{-- <ul>
                                                <li><a href="about.html">About v1</a></li>
                                                <li><a href="about-2.html">About v2</a></li>
                                                <li><a href="team.html">Team v1</a></li>
                                                <li><a href="team-2.html">Team v2</a></li>
                                                <li><a href="team-3.html">Team v3</a></li>
                                                <li><a href="review.html">Review Page</a></li>
                                                <li><a href="cases.html">Our Cases</a></li>
                                                <li><a href="feature.html">Feature Page</a></li>
                                            </ul> --}}
                                        </li>
                                        <li class="dropdown"><a href="#pengajuan">Cara Pengajuan</a>
                                            {{-- <div class="megamenu">
                                                <div class="row">
                                                    <div class="col-lg-3 column">
                                                        <div class="inner-column">
                                                            <h4 class="submenu-title">Services</h4>
                                                            <ul class="list">
                                                                <li><a href="service.html">Services v1</a></li>
                                                                <li><a href="service-2.html">Services v2</a></li>
                                                                <li><a href="service-3.html">Services v3</a></li>
                                                                <li><a href="service-4.html">Services v4</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 column">
                                                        <div class="inner-column">
                                                            <h4 class="submenu-title">Contact us</h4>
                                                            <ul class="list">
                                                                <li><a href="contact.html">Contact v1</a></li>
                                                                <li><a href="contact-2.html">Contact v2</a></li>
                                                                <li><a href="contact-3.html">Contact v3</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 column">
                                                        <div class="inner-column">
                                                            <h4 class="submenu-title">E-commerce Page</h4>
                                                            <ul class="list">
                                                                <li><a href="shop.html">Shop Page</a></li>
                                                                <li><a href="single-shop.html">Shop Single</a></li>
                                                                <li><a href="cart.html">Cart Page</a></li>
                                                                <li><a href="checkout.html">Checkout Page</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 column">
                                                        <div class="inner-column">
                                                            <h4 class="submenu-title">Extra Page 2</h4>
                                                            <ul class="list">
                                                                <li><a href="faq.html">Faq Page</a></li>
                                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                                                <li><a href="pricing.html">Pricing Page</a></li>
                                                                <li><a href="error-page.html">404 Page</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </li>
                                        <li class="dropdown"><a href="#syarat">Persyaratan</a>
                                            {{-- <div class="megamenu">
                                                <div class="row">
                                                    <div class="col-lg-6 column">
                                                        <div class="inner-column">
                                                            <h4 class="submenu-title">Blog overview</h4>
                                                            <ul class="list">
                                                                <li><a href="blog.html">Blog Classic</a></li>
                                                                <li><a href="blog-2.html">Blog Masnory</a></li>
                                                                <li><a href="blog-3.html">Blog Masnory v2</a></li>
                                                                <li><a href="blog-4.html">Blog List</a></li>
                                                                <li><a href="blog-5.html">Blog list Vertical</a></li>
                                                                <li><a href="blog-6.html">Blog List Right Sidebar</a></li>
                                                                <li><a href="blog-7.html">Blog List Left Sidebar</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 column">
                                                        <div class="inner-column">
                                                            <h4 class="submenu-title">Blog Single Page</h4>
                                                            <ul class="list">
                                                                <li><a href="blog-single.html">Blog Single fullwidth</a></li>
                                                                <li><a href="blog-single-2.html">Blog Single Fullwidth Gradient</a></li>
                                                                <li><a href="blog-single-3.html">Single Fullwidth Right sidebar</a></li>
                                                                <li><a href="blog-single-4.html">Single Center fullwidth</a></li>
                                                                <li><a href="blog-single-5.html">Single Fullwidth Leftsidebar</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </li>
                                        <li class="dropdown"><a href="#umum">Pertanyaan Umum</a>
                                            {{-- <div class="megamenu">
                                                <div class="row">
                                                    <div class="col-lg-3 column">
                                                        <div class="inner-column">
                                                            <h4 class="submenu-title">Elements 01</h4>
                                                            <ul class="list">
                                                                <li><a href="call-action.html">Call to action</a></li>
                                                                <li><a href="pricing-table.html">Pricing Tables</a></li>
                                                                <li><a href="subscribe-form.html">Subscribe Forms</a></li>
                                                                <li><a href="service-block.html">Service Block</a></li>
                                                                <li><a href="client-page.html">Clients</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 column">
                                                        <div class="inner-column">
                                                            <h4 class="submenu-title">Elements 02</h4>
                                                            <ul class="list">
                                                                <li><a href="counter.html">Counters</a></li>
                                                                <li><a href="progress-bar.html">Progress Bar</a></li>
                                                                <li><a href="contact-form.html">Contact Form</a></li>
                                                                <li><a href="video-btn.html">Video Button</a></li>
                                                                <li><a href="footer.html">Footer</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 column">
                                                        <div class="inner-column">
                                                            <h4 class="submenu-title">Elements 03</h4>
                                                            <ul class="list">
                                                                <li><a href="button-page.html">button</a></li>
                                                                <li><a href="header-page.html">Header/Menu</a></li>
                                                                <li><a href="typhography-page.html">Typhography</a></li>
                                                                <li><a href="shop.html">shop Page</a></li>
                                                                <li><a href="team.html">Our Team</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 column">
                                                        <div class="inner-column">
                                                            <h4 class="submenu-title">Elements 04</h4>
                                                            <ul class="list">
                                                                <li><a href="testimonial.html">Testimonial</a></li>
                                                                <li><a href="blog-4.html">Blog List</a></li>
                                                                <li><a href="faq.html">Faq Page</a></li>
                                                                <li><a href="error-page.html">404 Page</a></li>
                                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </li>
                                        <li class="dropdown">
                                            <a href="/login">cek data</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav><!-- Main Menu End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container">
                <div class="clearfix">
                    <!--Logo-->
                    <div class="logo float-left">
                        <a href="#home" class="img-responsive"><img src="{{asset('')}}image/smal-e-santunan.png" alt="" title=""></a>
                    </div>

                    <!--Right Col-->
                    <div class="right-col float-right">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="#home">Home</a>
                                        {{-- <div class="megamenu">
                                            <div class="row">
                                                <div class="col-lg-4 column">
                                                    <div class="inner-column">
                                                        <h4><a href="index-2.html">Home 01</a></h4>
                                                        <figure class="image"><a href="index-2.html"><img src="{{asset('')}}assets/images/resource/home-1.png" alt=""></a></figure>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 column">
                                                    <div class="inner-column">
                                                        <h4><a href="index-3.html">Home 02</a></h4>
                                                        <figure class="image"><a href="index-3.html"><img src="{{asset('')}}assets/images/resource/home-2.png" alt=""></a></figure>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 column">
                                                    <div class="inner-column">
                                                        <h4><a href="index-4.html">Home 03</a></h4>
                                                        <figure class="image"><a href="index-4.html"><img src="{{asset('')}}assets/images/resource/home-3.png" alt=""></a></figure>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 column">
                                                    <div class="inner-column">
                                                        <h4><a href="index-5.html">Home 04</a></h4>
                                                        <figure class="image"><a href="index-5.html"><img src="{{asset('')}}assets/images/resource/home-4.png" alt=""></a></figure>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 column">
                                                    <div class="inner-column">
                                                        <h4><a href="index-6.html">Home 05</a></h4>
                                                        <figure class="image"><a href="index-6.html"><img src="{{asset('')}}assets/images/resource/home-5.png" alt=""></a></figure>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 column">
                                                    <div class="inner-column">
                                                        <h4><a href="index-7.html">Home 06</a></h4>
                                                        <figure class="image"><a href="index-7.html"><img src="{{asset('')}}assets/images/resource/home-6.png" alt=""></a></figure>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 column">
                                                    <div class="inner-column">
                                                        <h4><a href="index-8.html">E-commerce_Home </a></h4>
                                                        <figure class="image"><a href="index-8.html"><img src="{{asset('')}}assets/images/resource/home-7.png" alt=""></a></figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </li>
                                    {{-- <li class="dropdown"><a href="#">Portfolio</a>
                                        <div class="megamenu">
                                            <div class="row">
                                                <div class="col-lg-4 column">
                                                    <div class="inner-column">
                                                        <h4 class="submenu-title">Portfolio features</h4>
                                                        <ul class="list">
                                                            <li><a href="portfolio.html">Portfolio Classic box</a></li>
                                                            <li><a href="portfolio-2.html">Portfolio fullwidth with box</a></li>
                                                            <li><a href="portfolio-3.html">Portfolio 2 column/grid</a></li>
                                                            <li><a href="portfolio-4.html">Portfolio Full width Filter</a></li>
                                                            <li><a href="portfolio-5.html">Portfolio 3 column filter</a></li>
                                                            <li><a href="portfolio-6.html">Portfolio 4 column filter</a></li>
                                                            <li><a href="portfolio-7.html">Portfolio left side filter</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 column">
                                                    <div class="inner-column">
                                                        <h4 class="submenu-title">Portfolio Feature 2</h4>
                                                        <ul class="list">
                                                            <li><a href="portfolio-8.html">Portfolio Full width masonry</a></li>
                                                            <li><a href="portfolio-9.html">Full width masonry Filter</a></li>
                                                            <li><a href="portfolio-10.html">Portfolio 2 columns slide style</a></li>
                                                            <li><a href="portfolio-11.html">Portfolio banner style</a></li>
                                                            <li><a href="portfolio-12.html">Portfolio banner style 2</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 column">
                                                    <div class="inner-column">
                                                        <h4 class="submenu-title">Portfolio Single</h4>
                                                        <ul class="list">
                                                            <li><a href="portfolio-single.html">Portfolio Single v1</a></li>
                                                            <li><a href="portfolio-single-2.html">Portfolio Single fullwidth</a></li>
                                                            <li><a href="portfolio-single-3.html">Portfolio Single banner</a></li>
                                                            <li><a href="portfolio-single-4.html">Portfolio banner style 2</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li> --}}
                                    <li class="dropdown"><a href="#tentang">Tentang</a>
                                        {{-- <ul>
                                            <li><a href="about.html">About v1</a></li>
                                            <li><a href="about-2.html">About v2</a></li>
                                            <li><a href="team.html">Team v1</a></li>
                                            <li><a href="team-2.html">Team v2</a></li>
                                            <li><a href="team-3.html">Team v3</a></li>
                                            <li><a href="review.html">Review Page</a></li>
                                            <li><a href="cases.html">Our Cases</a></li>
                                            <li><a href="feature.html">Feature Page</a></li>
                                        </ul> --}}
                                    </li>
                                    <li class="dropdown"><a href="#pengajuan">Cara Pengajuan</a>
                                        {{-- <div class="megamenu">
                                            <div class="row">
                                                <div class="col-lg-3 column">
                                                    <div class="inner-column">
                                                        <h4 class="submenu-title">Services</h4>
                                                        <ul class="list">
                                                            <li><a href="service.html">Services v1</a></li>
                                                            <li><a href="service-2.html">Services v2</a></li>
                                                            <li><a href="service-3.html">Services v3</a></li>
                                                            <li><a href="service-4.html">Services v4</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 column">
                                                    <div class="inner-column">
                                                        <h4 class="submenu-title">Contact us</h4>
                                                        <ul class="list">
                                                            <li><a href="contact.html">Contact v1</a></li>
                                                            <li><a href="contact-2.html">Contact v2</a></li>
                                                            <li><a href="contact-3.html">Contact v3</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 column">
                                                    <div class="inner-column">
                                                        <h4 class="submenu-title">E-commerce Page</h4>
                                                        <ul class="list">
                                                            <li><a href="shop.html">Shop Page</a></li>
                                                            <li><a href="single-shop.html">Shop Single</a></li>
                                                            <li><a href="cart.html">Cart Page</a></li>
                                                            <li><a href="checkout.html">Checkout Page</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 column">
                                                    <div class="inner-column">
                                                        <h4 class="submenu-title">Extra Page 2</h4>
                                                        <ul class="list">
                                                            <li><a href="faq.html">Faq Page</a></li>
                                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                                            <li><a href="pricing.html">Pricing Page</a></li>
                                                            <li><a href="error-page.html">404 Page</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </li>
                                    <li class="dropdown"><a href="#syarat">Persyaratan</a>
                                        {{-- <div class="megamenu">
                                            <div class="row">
                                                <div class="col-lg-6 column">
                                                    <div class="inner-column">
                                                        <h4 class="submenu-title">Blog overview</h4>
                                                        <ul class="list">
                                                            <li><a href="blog.html">Blog Classic</a></li>
                                                            <li><a href="blog-2.html">Blog Masnory</a></li>
                                                            <li><a href="blog-3.html">Blog Masnory v2</a></li>
                                                            <li><a href="blog-4.html">Blog List</a></li>
                                                            <li><a href="blog-5.html">Blog list Vertical</a></li>
                                                            <li><a href="blog-6.html">Blog List Right Sidebar</a></li>
                                                            <li><a href="blog-7.html">Blog List Left Sidebar</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 column">
                                                    <div class="inner-column">
                                                        <h4 class="submenu-title">Blog Single Page</h4>
                                                        <ul class="list">
                                                            <li><a href="blog-single.html">Blog Single fullwidth</a></li>
                                                            <li><a href="blog-single-2.html">Blog Single Fullwidth Gradient</a></li>
                                                            <li><a href="blog-single-3.html">Single Fullwidth Right sidebar</a></li>
                                                            <li><a href="blog-single-4.html">Single Center fullwidth</a></li>
                                                            <li><a href="blog-single-5.html">Single Fullwidth Leftsidebar</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </li>
                                    <li class="dropdown"><a href="#umum">Pertanyaan Umum</a>
                                        {{-- <div class="megamenu">
                                            <div class="row">
                                                <div class="col-lg-3 column">
                                                    <div class="inner-column">
                                                        <h4 class="submenu-title">Elements 01</h4>
                                                        <ul class="list">
                                                            <li><a href="call-action.html">Call to action</a></li>
                                                            <li><a href="pricing-table.html">Pricing Tables</a></li>
                                                            <li><a href="subscribe-form.html">Subscribe Forms</a></li>
                                                            <li><a href="service-block.html">Service Block</a></li>
                                                            <li><a href="client-page.html">Clients</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 column">
                                                    <div class="inner-column">
                                                        <h4 class="submenu-title">Elements 02</h4>
                                                        <ul class="list">
                                                            <li><a href="counter.html">Counters</a></li>
                                                            <li><a href="progress-bar.html">Progress Bar</a></li>
                                                            <li><a href="contact-form.html">Contact Form</a></li>
                                                            <li><a href="video-btn.html">Video Button</a></li>
                                                            <li><a href="footer.html">Footer</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 column">
                                                    <div class="inner-column">
                                                        <h4 class="submenu-title">Elements 03</h4>
                                                        <ul class="list">
                                                            <li><a href="button-page.html">button</a></li>
                                                            <li><a href="header-page.html">Header/Menu</a></li>
                                                            <li><a href="typhography-page.html">Typhography</a></li>
                                                            <li><a href="shop.html">shop Page</a></li>
                                                            <li><a href="team.html">Our Team</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 column">
                                                    <div class="inner-column">
                                                        <h4 class="submenu-title">Elements 04</h4>
                                                        <ul class="list">
                                                            <li><a href="testimonial.html">Testimonial</a></li>
                                                            <li><a href="blog-4.html">Blog List</a></li>
                                                            <li><a href="faq.html">Faq Page</a></li>
                                                            <li><a href="error-page.html">404 Page</a></li>
                                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </li>
                                    <li class="dropdown">
                                        <a href="/login">cek data</a>
                                    </li>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                    </div>
                </div>


            </div>
        </div>
        <!--End Sticky Header-->
    </header>

    @yield('container')
    <!--Form Back Drop-->
    <div class="form-back-drop"></div>


    <!-- Hidden Bar -->
    {{-- <section class="hidden-bar" id="cek-data">
        <div class="inner-box">
            <div class="cross-icon"><span class="fa fa-times"></span></div>
            <div class="title">
                <h2>Cek Penerima Santunan?</h2>
            </div>

            <!--Appointment Form-->
            <div class="appointment-form">
                <form method="post" action="">
                    <div class="form-group">
                        <input type="text" name="text" value="" placeholder="Ketik nik almarhum/almarhumah" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn-style-one">Cek sekarang</button>
                    </div>
                </form>
            </div>
            <hr>
            <div class="cross-icon"><span class="fa fa-times"></span></div>
            <div class="title">
                <h2>Tracking Permohonan Santunan</h2>
            </div>

            <!--Appointment Form-->
            <div class="appointment-form">
                <form method="post" action="">
                    <div class="form-group">
                        <input type="text" name="text" value="" placeholder="Ketik nik almarhum/almarhumah" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn-style-one">Cek sekarang</button>
                    </div>
                </form>
            </div>
        </div>

    </section> --}}
    <!--End Hidden Bar -->


    <!-- main-footer -->
    <footer class="main-footer">
        <div class="large-container">
            <div class="widget-content">
                <div class="row">
                    <div class="col-xl-4 col-lg-12 col-md-12 small-column">
                        <div class="footer-widget about-widget">
                            <figure class="footer-logo">
                                <a href="index-2.html"><img src="{{asset('')}}image/logo.png" alt=""></a>
                            </figure>
                            <div class="text"><i class="fa fa-location-arrow"></i> e-Santunan</div>
                            <ul class="footer-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-12 col-md-12 big-column">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget contact-widget">
                                    <h3 class="widget-title">Hubungi kami</h3>
                                    <ul class="contact-list">
                                        <li>
                                            <i class="fa fa-map-marker-alt"></i>
                                            21 Maypole Crescent Ilford, L6 California, United State.
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            <a href="mailto:test@gmail.com">test@gmail.com</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-headphones"></i>
                                            <a href="tel:+88016268101">+88016268101</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget link-widget">
                                    <h3 class="widget-title">Company</h3>
                                    <ul class="links-list">
                                        <li><a href="#">Request a Demo</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms of Service</a></li>
                                        <li><a href="#">Partners</a></li>
                                    </ul>
                                </div>
                            </div> --}}
                            {{-- <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget link-widget">
                                    <h3 class="widget-title">Features</h3>
                                    <ul class="links-list">
                                        <li><a href="#">Customer Support</a></li>
                                        <li><a href="#">Terms</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Careers</a></li>
                                    </ul>
                                </div>
                            </div> --}}
                            {{-- <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget link-widget">
                                    <h3 class="widget-title">Navigation</h3>
                                    <ul class="links-list">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Plans & Pricing</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Blog</a></li>
                                    </ul>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="large-container clearfix">
                <div class="left-content">
                    <div class="copyright">Copyrights 2022 <a href="#">m.p_pentadakosta</a></div>
                </div>
                <div class="right-content">
                    <ul class="download-btn">
                        <li><a href="#"><i class="fab fa-apple"></i> Download IOS</a></li>
                        <li><a href="#"><i class="fab fa-google-play"></i> Download Android</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
   <!-- main-footer end -->



<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
    <span class="text">Top</span>
</button>



<!-- jequery plugins -->
<script src="{{asset('')}}assets/js/jquery.js"></script>
<script src="{{asset('')}}assets/js/popper.min.js"></script>
<script src="{{asset('')}}assets/js/bootstrap.min.js"></script>

<script src="{{asset('')}}assets/js/owl.js"></script>
<script src="{{asset('')}}assets/js/wow.js"></script>
<script src="{{asset('')}}assets/js/validation.js"></script>
<script src="{{asset('')}}assets/js/jquery.fancybox.js"></script>
<script src="{{asset('')}}assets/js/appear.js"></script>
<script src="{{asset('')}}assets/js/aos.js"></script>
<script src="{{asset('')}}assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{asset('')}}assets/js/jquery.paroller.min.js"></script>

<!-- main-js -->
<script src="{{asset('')}}assets/js/script.js"></script>

{{-- modal --}}

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
