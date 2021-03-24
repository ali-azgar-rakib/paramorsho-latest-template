<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Paramorso-Your Consultancy Solution" />
    <meta name="keywords" content="paramorsho,paramorsho website,online doctor,online lawyer,online psychologist" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="frontend_assets/img/favicon/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="'frontend_assets/img/favicon/favicon.ico" type="image/x-icon" />
    <title>Paramorso-Your Consultancy Solution</title>

    <link href="../../../fonts.googleapis.com/css2ce4e.css?family=Cairo:wght@200;300;400;600;900&amp;display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/style.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/custom_style.css" type="text/css" />


</head>



<body>
    <div id='app'>


        <div id="preloder" v-if='isLoading'>
            <!-- <div class="loader"></div> -->
            <div class="preloader-main">
                <div class="preloader-image">
                    <img src="frontend_assets/img/logo/preloader/logo.png" alt="" />
                    <div class="loader">
                        <div class="load1"></div>
                        <div class="load2"></div>
                        <div class="load3"></div>
                    </div>
                </div>
            </div>
        </div>

        <div v-else>

            <div class="humberger__menu__overlay" @click='humbergerMenuOverlay'></div>
            <div class="humberger__menu__wrapper">
                <div class="humberger__menu__logo">
                    <a href="#"><img src="frontend_assets/img/logo/logo-2.png" alt="Paramorsho Logo" /></a>
                </div>
                <div class="humberger__menu__cart">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-heart"></i> <span>1</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a>
                        </li>
                    </ul>
                    <div class="header__cart__price">item: <span>৳ 200.00</span></div>
                </div>
                <div class="humberger__menu__widget">
                    <div class="header__top__right__language">
                        <img src="{{ asset('frontend_assets/img/language.png')}} " alt="" />
                        <div>English</div>
                        <span class="arrow_carrot-down"></span>
                        <ul>
                            <li><a @click="myFunction()" href="#">Spanis</a></li>
                            <li><a @click="myFunction()" href="#">English</a></li>
                        </ul>
                    </div>
                    <div class="header__top__right__auth">
                        <a href="#" @click="myFunction()"><i class="fa fa-user"></i> Login</a>
                    </div>
                </div>
                <nav class="humberger__menu__nav mobile-menu">
                    <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="#" @click="myFunction()">Consultant</a></li>
                        <!-- <li>
            <a href="#">Blogs</a>
            <ul class="header__menu__dropdown">
              <li><a href="shop-details.html">About Us</a></li>
              <li><a href="shoping-cart.html">Shoping Cart</a></li>
              <li><a href="blog-details.html">Blog Details</a></li>
            </ul>
          </li> -->
                        <li><a href="#" @click="myFunction()">Blog</a></li>
                        <li><a href="#" @click="myFunction()">About Us</a></li>
                        <li><a href="/privacy-policy">Privacy Policy</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
                <div class="header__top__right__social">
                    <a href="https://www.facebook.com/paramorsho"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.youtube.com/channel/UCfqCJGGXqnnchyV0NdWjy_g"><i class="fa fa-youtube"></i></a>
                    <a href="#" @click="myFunction()"><i class="fa fa-linkedin"></i></a>
                    <a href="#" @click="myFunction()"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="humberger__menu__contact">
                    <ul>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <a href="#">support@paramorsho.com</a>
                        </li>
                        <li>Paramorsho-Your Consultancy Solution</li>
                    </ul>
                </div>
            </div>

            <!-- header section start here  -->
            <header class="header">
                <div class="header__top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="header__top__left">
                                    <ul>
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            <a href="" class="__cf_email__"
                                                style="color: white">support@paramorsho.com</a>
                                        </li>
                                        <li>
                                            Paramorsho is a mobile app-based online consultation service
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5">
                                <div class="header__top__right">
                                    <div class="header__top__right__social">
                                        <a href="https://www.facebook.com/paramorsho" target="_blank"><i
                                                class="fa fa-facebook"></i></a>
                                        <a href="https://www.youtube.com/channel/UCfqCJGGXqnnchyV0NdWjy_g"
                                            target="_blank"><i class="fa fa-youtube"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                    <div class="header__top__right__language">
                                        <img src="frontend_assets/img/language.png" alt="" />
                                        <div>English</div>
                                        <span class="arrow_carrot-down"></span>
                                        <ul>
                                            <li><a href="#">Spanis</a></li>
                                            <li><a href="#">English</a></li>
                                        </ul>
                                    </div>
                                    <div class="header__top__right__auth">
                                        <a href="#"><i class="fa fa-user"></i> Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="header__logo" style="text-align: center">
                                <a href="#" @click="myFunction()"><img src="frontend_assets/img/logo/logo-1.png"
                                        height="100" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <nav class="header__menu">
                                <ul>
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li><a href="#" @click="myFunction()">Consultant</a></li>
                                    <!-- <li>
                  <a href="#">Pages</a>
                  <ul class="header__menu__dropdown">
                    <li><a href="shop-details.html">Blogs</a></li>
                    <li><a href="shoping-cart.html">About Us</a></li>
                    <li><a href="checkout.html">Check Out</a></li>
                    <li><a href="blog-details.html">Blog Details</a></li>
                  </ul>
                </li> -->
                                    <li><a href="#" @click="myFunction()">Blog</a></li>
                                    <li><a href="#" @click="myFunction()">About Us</a></li>
                                    <li><a href="#" @click="myFunction()">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-3">
                            <div class="header__cart">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-heart"></i> <span>1</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a>
                                    </li>
                                </ul>
                                <div class="header__cart__price">item: <span>৳ 200.00</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="humberger__open" @click='humbergerOpen'>
                        <i class="fa fa-bars"></i>
                    </div>
                </div>
            </header>

            <!-- header section end here  -->

            <!-- hero section start here  -->

            <section class="hero">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="hero__categories">
                                <div class="hero__categories__all" @click='heroCategoriesAll'>
                                    <i class="fa fa-bars"></i>
                                    <span>All Consultancies</span>
                                </div>
                                <ul>
                                    <li><a href="#" @click="myFunction()">Doctor</a></li>
                                    <li><a href="#" @click="myFunction()">Lawyer</a></li>
                                    <li><a href="#" @click="myFunction()">Psychologist</a></li>
                                    <li><a href="#" @click="myFunction()">IT Consultant</a></li>
                                    <li><a href="#" @click="myFunction()">Nutritionist</a></li>
                                    <li>
                                        <a href="#" @click="myFunction()">Beauty & Life Style Consultant</a>
                                    </li>
                                    <li>
                                        <a href="#" @click="myFunction()">Business Consultant</a>
                                    </li>
                                    <li><a href="#" @click="myFunction()">Gym Consultant</a></li>
                                    <li>
                                        <a href="#" @click="myFunction()">Agriculture Consultant</a>
                                    </li>
                                    <li>
                                        <a href="#" @click="myFunction()">Finance and Banking Consultant</a>
                                    </li>
                                    <li>
                                        <a href="#" @click="myFunction()">Musical/Instrument Consultant</a>
                                    </li>
                                    <li>
                                        <a href="#" @click="myFunction()">Travel Consultant</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="hero__search">
                                <div class="hero__search__form">
                                    <form action="#" @click.prevent="myFunction()">
                                        <div class="hero__search__categories">
                                            All Categories
                                            <span class="arrow_carrot-down"></span>
                                        </div>
                                        <input type="text" placeholder="What do yo u need?" />
                                        <button type="submit" class="site-btn">SEARCH</button>
                                    </form>
                                </div>
                                <div class="hero__search__phone">
                                    <div class="hero__search__phone__icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="hero__search__phone__text">
                                        <h5>+8801965-992299</h5>
                                        <span>support 24/7 time</span>
                                    </div>
                                </div>
                            </div>
                            <div class="hero__item set-bg" data-setbg="frontend_assets/img/hero/a.png">
                                <div class="hero__text">
                                    <span>DOWNLOAD OUR APP</span>
                                    <h2>PARAMORSHO</h2>
                                    <p>Your Consultancy Solution</p>
                                    <a href="#" @click="myFunction()" class="primary-btn">Download App</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- hero section end here  -->

            <section class="categories">
                <div class="container">
                    <div class="row">
                        <div class="categories__slider owl-carousel">
                            <div class="col-lg-3">
                                <div class="categories__item set-bg"
                                    data-setbg="frontend_assets/img/consultants/doctor.jpg">
                                    <h5><a href="#" @click="myFunction()">Doctor</a></h5>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="categories__item set-bg"
                                    data-setbg="frontend_assets/img/consultants/lawyer.png">
                                    <h5><a href="#" @click="myFunction()">Lawyer</a></h5>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="categories__item set-bg"
                                    data-setbg="frontend_assets/img/consultants/psychologist.jpg">
                                    <h5><a href="#" @click="myFunction()">Psychologist</a></h5>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="categories__item set-bg"
                                    data-setbg="frontend_assets/img/consultants/it.jpg">
                                    <h5><a href="#" @click="myFunction()">IT Consultant</a></h5>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="categories__item set-bg"
                                    data-setbg="frontend_assets/img/consultants/nutritionist.jpg">
                                    <h5><a href="#" @click="myFunction()">Nutritionist</a></h5>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="categories__item set-bg"
                                    data-setbg="frontend_assets/img/consultants/makeup.jpg">
                                    <h5>
                                        <a href="#" @click="myFunction()">Beauty & Life Style</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="categories__item set-bg"
                                    data-setbg="frontend_assets/img/consultants/business.jpg">
                                    <h5>
                                        <a href="#" @click="myFunction()">Business Consultant</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="categories__item set-bg"
                                    data-setbg="frontend_assets/img/consultants/gym.jpg">
                                    <h5><a href="#" @click="myFunction()">Gym Consultant</a></h5>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="categories__item set-bg"
                                    data-setbg="frontend_assets/img/consultants/agriculture.jpg">
                                    <h5>
                                        <a href="#" @click="myFunction()">Agriculture Consultant</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="categories__item set-bg" data-setbg="img/consultants/bank.jpeg">
                                    <h5>
                                        <a href="#" @click="myFunction()">Finance and Banking Consultant</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="categories__item set-bg"
                                    data-setbg="frontend_assets/img/consultants/musical.jpg">
                                    <h5>
                                        <a href="#" @click="myFunction()">Musical/Instrument Consultant</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="categories__item set-bg"
                                    data-setbg="frontend_assets/img/consultants/travel.jpg">
                                    <h5>
                                        <a href="#" @click="myFunction()">Travel Consultant</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- consultant section start here  -->

            <section class="consultant-section spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="consultant-area-title text-center my-5">
                                <h2>All Consultant</h2>
                            </div>
                        </div>
                    </div>

                    <!-- doctor  -->
                    <div>
                        <div class="row">
                            <div class="label my-3">
                                <span>Doctor</span>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img width=" 100" src="./frontend_assets/img/consultants/doctor.jpg"
                                                alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">doctor</span>
                                            <h3>Dr. Demo</h3>
                                            <h5>Dhaka Medical College</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>


                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img width=" 100" src="./frontend_assets/img/consultants/doctor.jpg"
                                                alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">doctor</span>
                                            <h3>Dr. Demo</h3>
                                            <h5>Dhaka Medical College</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>


                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img width=" 100" src="./frontend_assets/img/consultants/doctor.jpg"
                                                alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">doctor</span>
                                            <h3>Dr. Demo</h3>
                                            <h5>Dhaka Medical College</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>


                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img width=" 100" src="./frontend_assets/img/consultants/doctor.jpg"
                                                alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">doctor</span>
                                            <h3>Dr. Demo</h3>
                                            <h5>Dhaka Medical College</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img width=" 100" src="./frontend_assets/img/consultants/doctor.jpg"
                                                alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">doctor</span>
                                            <h3>Dr. Demo</h3>
                                            <h5>Dhaka Medical College</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>


                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img width=" 100" src="./frontend_assets/img/consultants/doctor.jpg"
                                                alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">doctor</span>
                                            <h3>Dr. Demo</h3>
                                            <h5>Dhaka Medical College</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="container">
                                <div class="col-6 col-lg-2 mx-auto my-3">
                                    <a href="javascript:void(0)" @click="myFunction()" class="btn-more-consultant"> See
                                        More </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end doctor  -->

                    <!-- lawyer  -->
                    <div>
                        <div class="row">
                            <div class="label my-3">
                                <span>lawyer</span>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img src="./frontend_assets/img/consultants/lawyer.png" alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">Laywer</span>
                                            <h3>Demo Lawyer</h3>
                                            <h5>Supreme Court of Bangladesh</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img src="./frontend_assets/img/consultants/lawyer.png" alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">Laywer</span>
                                            <h3>Demo Lawyer</h3>
                                            <h5>Supreme Court of Bangladesh</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>


                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img src="./frontend_assets/img/consultants/lawyer.png" alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">Laywer</span>
                                            <h3>Demo Lawyer</h3>
                                            <h5>Supreme Court of Bangladesh</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>


                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img src="./frontend_assets/img/consultants/lawyer.png" alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">Laywer</span>
                                            <h3>Demo Lawyer</h3>
                                            <h5>Supreme Court of Bangladesh</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>


                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img src="./frontend_assets/img/consultants/lawyer.png" alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">Laywer</span>
                                            <h3>Demo Lawyer</h3>
                                            <h5>Supreme Court of Bangladesh</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img src="./frontend_assets/img/consultants/lawyer.png" alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">Laywer</span>
                                            <h3>Moronsic Vamo</h3>
                                            <h5>Dhaka Medical College</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-6 col-lg-2 mx-auto my-3">
                                <a href="javascript:void(0)" @click="myFunction()" class="btn-more-consultant">See
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <!-- end lawyer  -->


                    <!-- psychologist  -->
                    <div>
                        <div class="row">
                            <div class="label my-3">
                                <span>Psychologist</span>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img src="./frontend_assets/img/consultants/psychologist.jpg" alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">psychologist</span>
                                            <h3>Demo Psychologist</h3>
                                            <h5>University of Dhaka</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img src="./frontend_assets/img/consultants/psychologist.jpg" alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">psychologist</span>
                                            <h3>Demo Psychologist</h3>
                                            <h5>Dhaka Medical College</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img src="./frontend_assets/img/consultants/psychologist.jpg" alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">psychologist</span>
                                            <h3>Demo Psychologist</h3>
                                            <h5>Dhaka Medical College</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img src="./frontend_assets/img/consultants/psychologist.jpg" alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">psychologist</span>
                                            <h3>Demo Psychologist</h3>
                                            <h5>Dhaka Medical College</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img src="./frontend_assets/img/consultants/psychologist.jpg" alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">psychologist</span>
                                            <h3>Demo Psychologist</h3>
                                            <h5>Dhaka Medical College</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img src="./frontend_assets/img/consultants/psychologist.jpg" alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">psychologist</span>
                                            <h3>Demo Psychologist</h3>
                                            <h5>Dhaka Medical College</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-6 col-lg-2 mx-auto my-3">
                                <a href="javascript:void(0)" @click="myFunction()" class="btn-more-consultant">See
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <!-- end psychologist  -->


                    <!-- nutritonist  -->
                    <div>
                        <div class="row">
                            <div class="label my-3">
                                <span>nutritionist</span>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img src="./frontend_assets/img/consultants/nutritionist.jpg" alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">Nutritionist</span>
                                            <h3>Demo Nutritionist</h3>
                                            <h5>University of Dhaka</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img src="./frontend_assets/img/consultants/nutritionist.jpg" alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">Nutritionist</span>
                                            <h3>Demo Nutritionist</h3>
                                            <h5>Dhaka Medical College</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img src="./frontend_assets/img/consultants/nutritionist.jpg" alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">Nutritionist</span>
                                            <h3>Demo Nutritionist</h3>
                                            <h5>Dhaka Medical College</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img src="./frontend_assets/img/consultants/nutritionist.jpg" alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">Nutritionist</span>
                                            <h3>Demo Nutritionist</h3>
                                            <h5>Dhaka Medical College</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img src="./frontend_assets/img/consultants/nutritionist.jpg" alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">Nutritionist</span>
                                            <h3>Demo Nutritionist</h3>
                                            <h5>Dhaka Medical College</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img src="./frontend_assets/img/consultants/nutritionist.jpg" alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">Nutritionist</span>
                                            <h3>Demo Nutritionist</h3>
                                            <h5>Dhaka Medical College</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-6 col-lg-2 mx-auto my-3">
                                <a href="javascript:void(0)" @click="myFunction()" class="btn-more-consultant">See
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <!-- end nutritionist  -->


                    <!-- it  -->
                    <div>
                        <div class="row">
                            <div class="label my-3">
                                <span>IT</span>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img src="./frontend_assets/img/consultants/it.jpg" alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">IT</span>
                                            <h3>Demo IT Guy</h3>
                                            <h5>Youtube & Torrent University</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img src="./frontend_assets/img/consultants/it.jpg" alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">IT</span>
                                            <h3>Demo IT Guy</h3>
                                            <h5>Youtube & Torrent University</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img src="./frontend_assets/img/consultants/it.jpg" alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">IT</span>
                                            <h3>Demo IT Guy</h3>
                                            <h5>Youtube & Torrent University</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img src="./frontend_assets/img/consultants/it.jpg" alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">IT</span>
                                            <h3>Demo IT Guy</h3>
                                            <h5>Youtube & Torrent University</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img src="./frontend_assets/img/consultants/it.jpg" alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">IT</span>
                                            <h3>Demo IT Guy</h3>
                                            <h5>Youtube & Torrent University</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="consultant-card">
                                    <div class="row">
                                        <div class="col-lg-4 col-5">
                                            <img src="./frontend_assets/img/consultants/it.jpg" alt="image" />
                                        </div>
                                        <div class="col-lg-8 col-7 p-2">
                                            <span class="short-text">IT</span>
                                            <h3>Demo IT Guy</h3>
                                            <h5>Youtube & Torrent University</h5>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                            <div class="consultant-details">
                                                <p>experties</p>
                                                <p>blah,blah,blah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn-full" href="javascript:void(0)" @click='myFunction'>Book Now</a>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-6 col-lg-2 mx-auto my-3">
                                <a href="javascript:void(0)" @click="myFunction()" class="btn-more-consultant">See
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <!-- end it  -->
                </div>
            </section>
            <!-- consultant section end here  -->

            <!-- banner section start here  -->
            <div class="banner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="banner__pic">
                                <img @click='myFunction' src="frontend_assets/img/banner/2.png" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="banner__pic">
                                <img @click='myFunction' src="frontend_assets/img/banner/3.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- banner section end here  -->

            <!-- latest product start here  -->
            <section class="latest-product spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="latest-product__text">
                                <h4>Latest Consultant</h4>
                                <div class="latest-product__slider owl-carousel">
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img style="width: 110px"
                                                    src="frontend_assets/img/consultants/woman.png" alt="" />
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Demo Name</h6>
                                                <span>120.00</span>
                                                <span>Psychologist</span>
                                                <span><button @click="myFunction()" class="btn btn-sm btn-warning">
                                                        Book
                                                    </button></span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img style="width: 110px"
                                                    src="frontend_assets/img/consultants/woman.png" alt="" />
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Demo Name</h6>
                                                <span>৳ 200.00</span>
                                                <span>Psychologist</span>
                                                <span><button @click="myFunction()" class="btn btn-sm btn-warning">
                                                        Book
                                                    </button></span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img style="width: 110px"
                                                    src="frontend_assets/img/consultants/woman.png" alt="" />
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Demo Name</h6>
                                                <span>৳ 200.00</span>
                                                <span>Psychologist</span>
                                                <span><button @click="myFunction()" class="btn btn-sm btn-warning">
                                                        Book
                                                    </button></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img style="width: 110px"
                                                    src="frontend_assets/img/consultants/woman.png" alt="" />
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Demo Name</h6>
                                                <span>৳ 200.00</span>
                                                <span>Psychologist</span>
                                                <span><button @click="myFunction()" class="btn btn-sm btn-warning">
                                                        Book
                                                    </button></span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img style="width: 110px"
                                                    src="frontend_assets/img/consultants/woman.png" alt="" />
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Demo Name</h6>
                                                <span>৳ 200.00</span>
                                                <span>Psychologist</span>
                                                <span><button @click="myFunction()" class="btn btn-sm btn-warning">
                                                        Book
                                                    </button></span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img style="width: 110px"
                                                    src="frontend_assets/img/consultants/woman.png" alt="" />
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Demo Name</h6>
                                                <span>৳ 200.00</span>
                                                <span>Psychologist</span>
                                                <span><button @click="myFunction()" class="btn btn-sm btn-warning">
                                                        Book
                                                    </button></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="latest-product__text">
                                <h4>Top Rated Consultant</h4>
                                <div class="latest-product__slider owl-carousel">
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img style="width: 110px" src="frontend_assets/img/consultants/man.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Demo Name</h6>
                                                <span>৳ 200.00</span>
                                                <span>Psychologist</span>
                                                <span><button @click="myFunction()" class="btn btn-sm btn-warning">
                                                        Book
                                                    </button></span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img style="width: 110px" src="frontend_assets/img/consultants/man.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Demo Name</h6>
                                                <span>৳ 200.00</span>
                                                <span>Psychologist</span>
                                                <span><button @click="myFunction()" class="btn btn-sm btn-warning">
                                                        Book
                                                    </button></span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img style="width: 110px" src="frontend_assets/img/consultants/man.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Demo Name</h6>
                                                <span>৳ 200.00</span>
                                                <span>Psychologist</span>
                                                <span><button @click="myFunction()" class="btn btn-sm btn-warning">
                                                        Book
                                                    </button></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img style="width: 110px" src="frontend_assets/img/consultants/man.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Demo Name</h6>
                                                <span>৳ 200.00</span>
                                                <span>Psychologist</span>
                                                <span><button @click="myFunction()" class="btn btn-sm btn-warning">
                                                        Book
                                                    </button></span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img style="width: 110px" src="frontend_assets/img/consultants/man.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Demo Name</h6>
                                                <span>৳ 200.00</span>
                                                <span>Psychologist</span>
                                                <span><button @click="myFunction()" class="btn btn-sm btn-warning">
                                                        Book
                                                    </button></span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img style="width: 110px" src="frontend_assets/img/consultants/man.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Demo Name</h6>
                                                <span>৳ 200.00</span>
                                                <span>Psychologist</span>
                                                <span><button @click="myFunction()" class="btn btn-sm btn-warning">
                                                        Book
                                                    </button></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="latest-product__text">
                                <h4>Related Consultant</h4>
                                <div class="latest-product__slider owl-carousel">
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img style="width: 110px" src="frontend_assets/img/consultants/man.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Demo Name</h6>
                                                <span>৳ 200.00</span>
                                                <span>Psychologist</span>
                                                <span><button @click="myFunction()" class="btn btn-sm btn-warning">
                                                        Book
                                                    </button></span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img style="width: 110px" src="frontend_assets/img/consultants/man.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Demo Name</h6>
                                                <span>৳ 200.00</span>
                                                <span>Psychologist</span>
                                                <span><button @click="myFunction()" class="btn btn-sm btn-warning">
                                                        Book
                                                    </button></span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img style="width: 110px" src="frontend_assets/img/consultants/man.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Demo Name</h6>
                                                <span>৳ 200.00</span>
                                                <span>Psychologist</span>
                                                <span><button @click="myFunction()" class="btn btn-sm btn-warning">
                                                        Book
                                                    </button></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img style="width: 110px"
                                                    src="frontend_assets/img/consultants/woman.png" alt="" />
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Demo Name</h6>
                                                <span>৳ 200.00</span>
                                                <span>Psychologist</span>
                                                <span><button @click="myFunction()" class="btn btn-sm btn-warning">
                                                        Book
                                                    </button></span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img style="width: 110px"
                                                    src="frontend_assets/img/consultants/woman.png" alt="" />
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Demo Name</h6>
                                                <span>৳ 200.00</span>
                                                <span>Psychologist</span>
                                                <span><button @click="myFunction()" class="btn btn-sm btn-warning">
                                                        Book
                                                    </button></span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img style="width: 110px"
                                                    src="frontend_assets/img/consultants/woman.png" alt="" />
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Demo Name</h6>
                                                <span>৳ 200.00</span>
                                                <span>Psychologist</span>
                                                <span><button @click="myFunction()" class="btn btn-sm btn-warning">
                                                        Book
                                                    </button></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- latest product end here  -->

            <!-- blog section start here  -->
            <section class="from-blog spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title from-blog__title">
                                <h2>From The Blog</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="frontend_assets/img/blog/paramorsho-banner.jpg" alt="" />
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5>
                                        <a href="#" @click="myFunction()">Paramorsho is a mobile app-based online
                                            consultation
                                            service</a>
                                    </h5>
                                    <p>
                                        We provide all kinds of consultancy you need in your daily
                                        life. By using paramorsho mobile app anyone can consult with
                                        an expert on different issues like health, psychological, law,
                                        education, business, beauty, lifestyle, etc. It’s a total
                                        consultancy solution for you.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="frontend_assets/img/blog/paramorsho-banner.jpg" alt="" />
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5>
                                        <a href="#" @click="myFunction()">Paramorsho is a mobile app-based online
                                            consultation
                                            service</a>
                                    </h5>
                                    <p>
                                        We provide all kinds of consultancy you need in your daily
                                        life. By using paramorsho mobile app anyone can consult with
                                        an expert on different issues like health, psychological, law,
                                        education, business, beauty, lifestyle, etc. It’s a total
                                        consultancy solution for you.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="frontend_assets/img/blog/paramorsho-banner.jpg" alt="" />
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5>
                                        <a href="#" @click="myFunction()">Paramorsho is a mobile app-based online
                                            consultation
                                            service</a>
                                    </h5>
                                    <p>
                                        We provide all kinds of consultancy you need in your daily
                                        life. By using paramorsho mobile app anyone can consult with
                                        an expert on different issues like health, psychological, law,
                                        education, business, beauty, lifestyle, etc. It’s a total
                                        consultancy solution for you.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-2 mx-auto">
                            <a href="javascript:void(0)" @click="myFunction()" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog section end here  -->

            <!-- footer section start here  -->
            <footer class="footer spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer__about">
                                <div class="footer__about__logo">
                                    <a href="#"><img width="100" height="100" src="./frontend_assets/img/logo/logo.png"
                                            alt="Paramorsho logo" /></a>
                                </div>
                                <ul>
                                    <li>Address: 193/2,Siddik Mansion,Fakirapool,Motijeel</li>
                                    <li>Phone: +8801965-992299</li>
                                    <li>Email: support@paramorsho.com</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                            <div class="footer__widget">
                                <h6>Useful Links</h6>
                                <ul>
                                    <li><a href="#" @click="myFunction()">About Us</a></li>
                                    <li><a href="#" @click="myFunction()">About Our Shop</a></li>
                                    <li><a href="#" @click="myFunction()">Secure Shopping</a></li>
                                    <li>
                                        <a href="#" @click="myFunction()">Delivery infomation</a>
                                    </li>
                                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                                    <li><a href="#" @click="myFunction()">Our Sitemap</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#" @click="myFunction()">Who We Are</a></li>
                                    <li><a href="#" @click="myFunction()">Our Services</a></li>
                                    <li><a href="#" @click="myFunction()">Projects</a></li>
                                    <li><a href="#" @click="myFunction()">Contact</a></li>
                                    <li><a href="#" @click="myFunction()">Innovation</a></li>
                                    <li><a href="#" @click="myFunction()">Testimonials</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="footer__widget">
                                <h6>Download Our App</h6>
                                <p>
                                    We provide all kinds of consultancy you need in your daily life.
                                    By using paramorsho mobile app anyone can consult with an expert
                                    on different issues like health, psychological, law, education,
                                    business, beauty, lifestyle, etc. It’s a total consultancy
                                    solution for you.
                                </p>
                                <div>
                                    <a href="https://play.google.com/store/apps/details?id=com.paramorsho.consultancy"
                                        target="_blank">
                                        <img src="./frontend_assets/img/google-play-badge/google-play-badge/128x128.png"
                                            alt="" /></a>
                                    <a href="javascript:void(0)" @click="myFunction()">
                                        <img src="./frontend_assets/img/app-store-badge/app-store-badge/128x128.png"
                                            alt="" />
                                    </a>
                                </div>
                                <!-- <form action="#">
                <input type="text" placeholder="Enter your mail" />
                <button type="submit" class="site-btn">Subscribe</button>
              </form> -->
                                <div class="footer__widget__social">
                                    <a href="https://www.facebook.com/paramorsho"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.youtube.com/channel/UCfqCJGGXqnnchyV0NdWjy_g"><i
                                            class="fa fa-youtube"></i></a>
                                    <a href="#" @click="myFunction()"><i class="fa fa-twitter"></i></a>
                                    <a href="#" @click="myFunction()"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer__copyright">
                                <div class="footer__copyright__text">
                                    <p>
                                        Copyright &copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script>
                                        All rights reserved | This template is made with
                                        <i class="fa fa-heart" aria-hidden="true"></i> by
                                        <a href="/">Paramorsho</a>
                                    </p>
                                </div>
                                <div class="footer__copyright__payment">
                                    <!-- <img src="img/payment-item.png" alt="" /> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer section end here  -->
        </div>

    </div>
    <script src="{{ asset('frontend_assets') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/jquery-ui.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/jquery.slicknav.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/mixitup.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('frontend_assets') }}/js/main.js"></script>

    <!-- vue js  -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
    <script src="frontend_assets/js/main2.js"></script>


</body>

</html>