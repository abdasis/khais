<?php
session_start();
$_SESSION['lang'] = NULL;
if (!empty($_GET['lang'])) {
    if ($_GET['lang']  == "english") {
        $a = include "bahasa/inggris.php";
    } else if ($_GET['lang'] == "indonesian") {
        $a = include "bahasa/indonesia.php";
    } else {
        $a = include "bahasa/indonesia.php";
    }
} else {
    $a = include "bahasa/indonesia.php";
}
?>



<script language="JavaScript" type="text/JavaScript">
    function MM_jumpMenu(targ,selObj,restore){ //v3.0
	eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
	if (restore) selObj.selectedIndex=0;
	}
	
</script>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Samdexs | Irit Gesti Ekonomis</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="fav.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/queries.css">
    <link rel="stylesheet" href="css/etline-font.css">
    <link rel="stylesheet" href="bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <!-- UIkit CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.8/dist/css/uikit.min.css" /> -->

    <!-- UIkit JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.8/dist/js/uikit.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.8/dist/js/uikit-icons.min.js"></script> -->
    <style>
        /* .accordion {
            max-width: 560px;
            margin: 0 auto 100px;
            border-top: 1px solid #d9e5e8 !important;
            font-family: "Open Sans";
            font-size: 13px;
            font-size: 0.8125rem;
            font-weight: 300;
            color: #4a6e78 !important;
        }

        .accordion li {
            border-bottom: 1px solid #d9e5e8 !important;
            position: relative;
        }

        .accordion li p {
            display: none;
            padding: 10px 25px 30px;
            color: #6b97a4 !important;
        }

        .accordion a {
            width: 100%;
            display: block;
            cursor: pointer;
            font-weight: 600;
            line-height: 3;
            font-size: 14px;
            font-size: 0.875rem;
            text-indent: 15px;
            user-select: none;
        }

        .accordion a:after {
            width: 8px;
            height: 8px;
            border-right: 1px solid #4a6e78 !important;
            border-bottom: 1px solid #4a6e78 !important;
            position: absolute;
            right: 10px;
            content: " ";
            top: 17px;
            transform: rotate(-45deg);
            -webkit-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        .accordion p {
            font-size: 13px;
            font-size: 0.8125rem;
            line-height: 2;
            padding: 10px;
        }

        a.active:after {
            transform: rotate(45deg);
            -webkit-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        } */
    </style>
</head>

<body id="top">
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section class="hero">
        <section class="navigation">
            <header>
                <div class="header-content">
                    <div class="logo"><a href="#"><img src="img/sedna-logo.png" alt="Sedna logo"></a></div>
                    <div class="header-nav">
                        <nav id="navb">
                            <ul class="primary-nav">
                                <li><a href="#about"><?php echo $_SESSION['lang'] . $about; ?></a></li>
                                <li><a href="#manfaat"><?php echo $_SESSION['lang'] . $manfaat; ?></a></li>
                                <li><a href="#features"><?php echo $_SESSION['lang'] . $mengapa; ?></a></li>
                                <li><a href="#assets"><?php echo $_SESSION['lang'] . $profile; ?></a></li>
                                <li><a href="#blog"><?php echo $_SESSION['lang'] . $faq; ?></a></li>
                                <li><a href="#blog"><?php echo $_SESSION['lang'] . $galerry; ?></a></li>
                                <li><a href="#blog"><?php echo $_SESSION['lang'] . $testi; ?></a></li>
                                <li><a href="#download"><?php echo $_SESSION['lang'] . $email; ?></a></li>

                                <br>

                                <li>
                                    <form name="form1" method="post" action="?lang=">
                                        <select name="menu1" onChange="MM_jumpMenu('parent',this,0)">
                                            <?php
                                            if (($_GET['lang'] == "indonesian") || (empty($_GET['lang']))) {
                                            ?>
                                                <option value="?lang=indonesian" selected>Indonesian</option>
                                                <option value="?lang=english">English</option>
                                            <?php
                                            } else {
                                            ?>
                                                <option value="?lang=indonesian">Indonesian</option>
                                                <option value="?lang=english" selected>English</option>
                                            <?php
                                            } // end else
                                            ?>
                                        </select>
                                    </form>
                                </li>
                            </ul>
                            <ul class="member-actions">
                                <!-- <li><a href="#download" class="login">Log in</a></li> -->
                                <!-- <li><a href="#download" class="btn-white btn-small">Sign up</a></li> -->
                            </ul>
                        </nav>
                    </div>
                    <div class="navicon">
                        <a class="nav-toggle" href="#"><span></span></a>
                    </div>
                </div>
            </header>
        </section>
        <div class="container" id="about">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="hero-content text-center">
                        <div class="typewriter">
                            <h1><?php echo $_SESSION['lang'] . $judul; ?></h1>
                        </div>
                        <p class="intro"><em><?php echo $_SESSION['lang'] . $desc; ?></em></p>
                        <!-- <a href="#" class="btn btn-fill btn-large btn-margin-right">Download</a> <a href="#" class="btn btn-accent btn-large">Learn more</a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="down-arrow floating-arrow"><a href="#"><i class="fa fa-angle-down"></i></a></div>
    </section>
    <section class="intro section-padding" id="manfaat">
        <div class="container">
            <div class="row  manfaat">
                <div class="col">
                    <h2><u><?php echo $_SESSION['lang'] . $advantage; ?></u></h2>

                    <div class='under'></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 intro-feature">
                    <div class="intro-icon">
                        <!-- <span data-icon="&#xe033;" class="icon"></span> -->
                        <!-- <span class="glyphicon glyphicon-tags"></span> -->
                        <span data-icon="&#xe03c;"></span>
                    </div>
                    <div class="intro-content">
                        <h5><?php echo $_SESSION['lang'] . $adv1; ?></h5>
                        <!-- <p>Easily customise Sedna to suit your start up, portfolio or product. Take advantage of the layered Sketch file and bring your product to life.</p> -->
                    </div>
                </div>
                <div class="col-md-4 intro-feature">
                    <div class="intro-icon">
                        <!-- <span data-icon="&#xe030;" class="icon"></span> -->
                        <!-- <i class="fa fa-car" aria-hidden="true"></i> -->
                        <span data-icon="&#xe03c;"></span>
                    </div>
                    <div class="intro-content">
                        <h5><?php echo $_SESSION['lang'] . $adv2; ?></h5>
                        <!-- <p>Designed with modern trends and techniques in mind, Sedna will help your product stand out in an already saturated market.</p> -->
                    </div>
                </div>
                <div class="col-md-4 intro-feature">
                    <div class="intro-icon">
                        <!-- <span data-icon="&#xe046;" class="icon"></span> -->
                        <span data-icon="&#xe03c;"></span>
                    </div>
                    <div class="intro-content last">
                        <h5><?php echo $_SESSION['lang'] . $adv3; ?></h5>
                        <!-- <p>Built using the latest web technologies like html5, css3, and jQuery, rest assured Sedna will look smashing on every device under the sun.</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 intro-feature">
                    <div class="intro-icon">
                        <!-- <span data-icon="&#xe033;" class="icon"></span> -->
                        <!-- <i class="fa fa-refresh"></i> -->
                        <span data-icon="&#xe03e;"></span>
                    </div>
                    <div class="intro-content">
                        <h5><?php echo $_SESSION['lang'] . $adv4; ?></h5>
                        <!-- <p>Easily customise Sedna to suit your start up, portfolio or product. Take advantage of the layered Sketch file and bring your product to life.</p> -->
                    </div>
                </div>
                <div class="col-md-4 intro-feature">
                    <div class="intro-icon">
                        <!-- <span data-icon="&#xe030;" class="icon"></span> -->
                        <span data-icon="&#xe03e;"></span>
                    </div>
                    <div class="intro-content">
                        <h5><?php echo $_SESSION['lang'] . $adv5; ?></h5>
                        <!-- <p>Designed with modern trends and techniques in mind, Sedna will help your product stand out in an already saturated market.</p> -->
                    </div>
                </div>
                <div class="col-md-4 intro-feature">
                    <div class="intro-icon">
                        <!-- <span data-icon="&#xe046;" class="icon"></span> -->
                        <span data-icon="&#xe03e;"></span>
                        <!-- <span  class="icon"></span> -->
                    </div>
                    <div class="intro-content last">
                        <h5><?php echo $_SESSION['lang'] . $adv6; ?></h5>
                        <!-- <p>Built using the latest web technologies like html5, css3, and jQuery, rest assured Sedna will look smashing on every device under the sun.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features section-padding" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-7">
                    <div class="feature-list">
                        <h3>Mengapa Memilih Samdexs?</h3>
                        <!-- <p>Present your product, start up, or portfolio in a beautifully modern way. Turn your visitors in to clients.</p> -->
                        <ul class="features-stack">
                            <li class="feature-item">
                                <div class="feature-icon">
                                    <span data-icon="&#xe03e;" class="icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h5>Bahan Terjamin</h5>
                                    <p>SAMDEXS mengandung bahan nabati terjamin menghasilkan produk yang berkualitas serta irit, gesit dan ekonomis</p>
                                </div>
                            </li>
                            <li class="feature-item">
                                <div class="feature-icon">
                                    <span data-icon="&#xe040;" class="icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h5>Mudah digunakan</h5>
                                    <p>1. Bagi pengguna roda dua beri 2 ml samdexs </p>
                                    <p>2. Bagi pengguna roda empat beri 5 ml samdexs</p>
                                </div>
                            </li>
                            <li class="feature-item">
                                <div class="feature-icon">
                                    <span data-icon="&#xe03c;" class="icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h5>Meningkatkan Performa Mesin</h5>
                                    <p>Produk SAMDEXS terbukti meningkatkan oktan sehingga pembakaran di ruang mesin menjadi sempurna dan tidak meninggalkan kerak karbon</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="devicecase">
            <div class="devices">
                <div class="ipad-wrap wp1"></div>
                <div class="iphone-wrap wp2"></div>
            </div>
        </div>
        <div class="responsive-feature-img"><img src="img/devices.png" alt="responsive devices"></div>
    </section>
    <section class="features-extra section-padding" id="assets">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="feature-list">
                        <h3>Diproduksi oleh PT. Sila Sukses Bersama</h3>
                        <p><strong>PT. Sila Sukses Bersama</strong> didirikan pada tahun 2020 berlokasi di Pondok Mutiara-Blok S- No.20-Sidoarjo
                            – Jawa Timur, yang bergerak dibidang perdagangan, dengan menciptakan inovasi yang menarik
                            dan sesuai misi perusahaan yang mengutamakan mutu dan kepuasan pelanggan dan mitra kerja.</p>
                        <p>
                            <strong>Misi :</strong>
                            Mengutamakan mutu dan keandalan pelayanan untuk kepuasan pelanggan dan mitra kerja
                        </p>
                        <p>
                            <strong>Visi :</strong>
                            Menjadi perusahaan perdagangan yang terbaik dan tangguh

                        </p>
                        <p>
                            <strong>Moto :</strong>
                            Selalu menciptakan dan berinovasi pekerjaan yang halal dan berkah
                        </p>
                        <!-- <a href="#" class="btn btn-ghost btn-accent btn-small">What's Sketch?</a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="macbook-wrap wp3"></div>
        <div class="responsive-feature-img"><img src="img/macbook-pro.png" alt="responsive devices"></div>
    </section>
    <section class="hero-strip section-padding">
        <div class="container">
            <div class="col-md-12 text-center">
                <h2>
                    Pilihan Tepat untuk Mesin Kendaraan Anda !
                </h2>
                <p>Terbukti meningkatkan performa mesin kemdaraan, coba sendiri keunggulannya</p>
                <!-- <a href="#" class="btn btn-ghost btn-accent btn-large">Download now!</a> -->
                <div class="logo-placeholder floating-logo"><img src="img/sketch-logo.png" alt="Sketch Logo"></div>
            </div>
        </div>
    </section>
    <!-- <br>
    <br>
    <br> -->
    <!-- <section class="blog-intro section-padding" id="blog"> -->
    <!-- <div class="container"> -->
    <!-- <div class="row"> -->
    <!-- <div class="col-md-12"> -->
    <!-- <h3case your smashing product with Sedna</h3> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- <div class="row"> -->
    <!-- <div class="col-md-6 col-sm-12 col-xs-12 "> -->
    <!-- <h5 style="font-size: 100px; color: #E5E5E5; text-align: center; font-weight: bold;">FAQ</h5> -->
    <!-- <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
    <!-- </div> -->
    <!-- <div class="col-md-6 col-sm-12 col-xs-12 rightcol"> -->
    <!-- <ul class="accordion">
                        <li>
                            <a>Lorem ipsum</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, ipsum, fuga, in, obcaecati magni ullam nobis voluptas fugiat tenetur voluptatum quas tempora maxime rerum neque deserunt suscipit provident cumque et mollitia ex aspernatur porro minus sapiente voluptatibus eos at perferendis repellat odit aliquid harum molestias ratione pariatur adipisci. Aliquid, iure.</p>
                        </li>
                        <li>
                            <a>Repellat Odit Aliquid</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, ipsum, fuga, in, obcaecati magni ullam nobis voluptas fugiat tenetur voluptatum quas tempora maxime rerum neque deserunt suscipit provident cumque et mollitia ex aspernatur porro minus sapiente voluptatibus eos at perferendis repellat odit aliquid harum molestias ratione pariatur adipisci. Aliquid, iure.</p>
                        </li>
                        <li>
                            <a>Dolor sit Amet</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, ipsum, fuga, in, obcaecati magni ullam nobis voluptas fugiat tenetur voluptatum quas tempora maxime rerum neque deserunt suscipit provident cumque et mollitia ex aspernatur porro minus sapiente voluptatibus eos at perferendis repellat odit aliquid harum molestias ratione pariatur adipisci. Aliquid, iure.</p>
                        </li>
                    </ul> -->
    <!-- <h5>SPREADING PIXELS AROUND THE WORLD</h5>
                    <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- </section> -->
    <section class="blog text-center">
        <div class="container-fluid">
            <br>
            <br>
            <div class="row">
                <div class="col">
                    <h1 style="color: red; font-weight: bold;">GALERY</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="img/blog-img-01.jpg" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="img/blog-img-01.jpg" alt="Sedna blog image" />
                                </div>
                            </a>
                            <figcaption>
                                <h2 style="color: red; font-size: large;">Konsumen SAMDEXS</h2>
                                <!-- <h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Product</a></h2> -->
                                <!-- <p><a href="#" class="blog-post-title">Getting started with Sedna <i class="fa fa-angle-right"></i></a></p> -->
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="img/blog-img-02.jpg" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="img/blog-img-02.jpg" alt="Sedna blog image" />
                                </div>
                            </a>
                            <figcaption>
                                <!-- <h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Technology</a></h2> -->
                                <!-- <p><a href="#" class="blog-post-title">Why IE8 support is deminishing <i class="fa fa-angle-right"></i></a></p> -->
                                <h2 style="color: red; font-size: large;">komunitas</h2>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="img/blog-img-03.jpg" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="img/blog-img-03.jpg" class="single_image" alt="Sedna blog image" />
                                </div>
                            </a>
                            <figcaption>
                                <!-- <h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Product</a></h2> -->
                                <!-- <p><a href="#" class="blog-post-title">Sedna tutorial: How to begin your <i class="fa fa-angle-right"></i></a></p> -->
                                <h2 style="color: red; font-size: large;">Dinas pertanian provinsi jawa timur</h2>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <!-- <a href="#" class="btn btn-ghost btn-accent btn-small">More news</a> -->
            </div>
            <!-- <div class="row">
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="img/blog-img-01.jpg" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="img/blog-img-01.jpg" alt="Sedna blog image"/>
                                </div>
                            </a>
                            <figcaption>
                            <h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Product</a></h2>
                            <p><a href="#" class="blog-post-title">Getting started with Sedna <i class="fa fa-angle-right"></i></a></p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="img/blog-img-02.jpg" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="img/blog-img-02.jpg" alt="Sedna blog image"/>
                                </div>
                            </a>
                            <figcaption>
                            <h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Technology</a></h2>
                            <p><a href="#" class="blog-post-title">Why IE8 support is deminishing <i class="fa fa-angle-right"></i></a></p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="img/blog-img-03.jpg" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="img/blog-img-03.jpg" class="single_image" alt="Sedna blog image"/>
                                </div>
                            </a>
                            <figcaption>
                            <h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Product</a></h2>
                            <p><a href="#" class="blog-post-title">Sedna tutorial: How to begin your <i class="fa fa-angle-right"></i></a></p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <a href="#" class="btn btn-ghost btn-accent btn-small">More news</a>
            </div> -->
        </div>
    </section>
    <section class="testimonial-slider section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div style="display: block;
                                margin-left: auto;
                                margin-right: auto ;
                                height: 600px;
                                width: 700px;
                                @media only screen and (max-width: 600px) {
                                    height: 60px;
                                    width: 70px; 
                                }">
                                    <p class="author"><img src="img/testi1.jpeg" alt=""></p>
                                </div>

                                <!-- <div class="avatar"><img src="img/avatar.jpg" alt="Sedna Testimonial Avatar"></div>
                                <h2>"Lorem ipsum dolor sit amet, nullam lucia nisi."</h2>
                                Peter Finlan, Product Designer.</p> -->
                            </li>
                            <li>
                                <div style="display: block;
                                margin-left: auto;
                                margin-right: auto ;
                                height: 600px;
                                width: 700px;">
                                    <img src="img/testi2.jpeg" alt="">
                                </div>
                                <!-- <div class="avatar"><img src="img/mani.jpg" alt="Sedna Testimonial Avatar"></div>
                                <h2>"Nunc vel maximus purus. Nullam ac urna ornare."</h2>
                                <p class="author">Manoela Ilic, Founder @ Codrops.</p> -->
                            </li>
                            <li>
                                <div style="display: block;
                                margin-left: auto;
                                margin-right: auto ;
                                height: 600px;
                                width: 700px;">
                                    <img src="img/testi3.jpeg" alt="">
                                </div>

                                <!-- <div class="avatar"><img src="img/130.jpg" alt="Sedna Testimonial Avatar"></div>
                                <h2>"Nullam ac urna ornare, ultrices nisl ut, lacinia nisi."</h2>
                                <p class="author">Blaz Robar, Pixel Guru</p> -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-7">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn-collapse" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Apa itu SAMDEXS?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    SAMDEXS Adalah cairan additive, hasil fermentasi bahan nabati yang di kemas dan dipasarkan oleh PT. SILA SUKSES BERSAMA.
                                    Dengan adanya kebutuhan BBM semakin meningkat dan harga BBM semakin lama semakin naik
                                    PT, SILA SUKSES BERSAMA Juga mengikuti program pemerintah yang menganjurkan GOGREEN udara anti polusi sehingga terdoronglah prof ahli bioteknologi dan didukung oleh pakar otomotif mengadakan penelitian bertujuan menciptakan additive penghemat BBM yang ramah lingkungan dan mempunyai selogan IRIT GESIT EKONOMIS

                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn-collapse" data-toggle="collapse" data-target="#collapseDua" aria-expanded="false" aria-controls="collapseDua">
                                        2.Apa keunggulan SAMDEXS itu ?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseDua" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    Diluaran ada beberapa jenis penghemat BBM yg masih mengandung Zn dan Pb ( timbal) yg justru merusak mesin dan menimbulkan kerak pada filter bensin
                                    SAMDEXS murni hasil fermentasi bahan nabati sehingga meningkatkan peforma mesin, menyempurnakan pembakaran, memberikan penghematan dan ramah lingkungan,,
                                    SAMDEXS full organik sehingga mudah menyatu dgn bahan bakar untuk menaikan oktan dan meningkatkan performa mesin yang berbahan sebagai berikut :
                                    Bahan murni dari bahan nabati yang tidak berbahaya pada organ manusia yg berfungsi meyempurnakan pembakaran dan mempertahankam mesin tetap prima
                                    De Emulsion. Memisahkan zat murni bahan bakar dengan emulsi pengotor seperti air hujan dll. Sehingga tak berpengaruh pada proses pembakaran.
                                    Corrosion Inhibitor. Mencegah korosi/karat pada saluran bensin dan mesin pembakaran, serta membuang sisa karat karena penggunaan bbm yang salah seperti premium pada motor dengan kompresi diatas 9.1 (jenis injection dan matic )
                                    Dengan SAMDEXS pembakaran akan lebih sempurna hingga emisi gas buang 90-100%.Jika pembakaran sempurna artinya semua bensin (dalam bentuk uap) dalam tabung kompresi terbakar semua sehingga menambah dorongan lebih.
                                    Dengan SAMDEXS bensin menjadi lebih murni.


                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn-collapse" data-toggle="collapse" data-target="#collapseTiga" aria-expanded="false" aria-controls="collapseTiga">
                                        Apakah SAMDEXS aman untuk mesin ?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseTiga" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    SAMDEXS aman untuk mesin karena :
                                    <ul>
                                        <li>SAMDEXS 100% terbuat dari hasil fermentasi bahan Nabati</li>
                                        <li>Hasil penelitian prof ahli bioteknologi dan didukung oleh pakar otomotif</li>
                                        <li>Telah lulus uji Pro Lab dan uji emisi dari perhubungan</li>
                                        <li>Telah terbukti melalui pengujian langsung di beberapa kendaraan dan tidak ada complain, mesin tetap dalam kondisi baik dan performa mesin bagus.</li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn-collapse" data-toggle="collapse" data-target="#collapseEmpat" aria-expanded="false" aria-controls="collapseEmpat">
                                    Manfaat menggunakan SAMDEXS?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseEmpat" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    SAMDEXS aman untuk mesin karena :
                                    <ul>
                                        <li>SAMDEXS 100% terbuat dari hasil fermentasi bahan Nabati</li>
                                        <li>Hasil penelitian prof ahli bioteknologi dan didukung oleh pakar otomotif</li>
                                        <li>Telah lulus uji Pro Lab dan uji emisi dari perhubungan</li>
                                        <li>Telah terbukti melalui pengujian langsung di beberapa kendaraan dan tidak ada complain, mesin tetap dalam kondisi baik dan performa mesin bagus.</li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn-collapse" data-toggle="collapse" data-target="#collapseLima" aria-expanded="false" aria-controls="collapseLima">
                                    Cara Menggunakan SAMDEXS
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseLima" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                   <ol>
                                       <li>Cara Menggunakan SAMDEXS</li>
                                       <li>Cara Menggunakan SAMDEXS</li>
                                   </ol>

                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn-collapse" data-toggle="collapse" data-target="#collapseEnam" aria-expanded="false" aria-controls="collapseEnam">
                                    Bahaya tidak SAMDEXS Ke Mesin Kendaraan?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseEnam" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                SAMDEXS menggunakan Fermentasi Nabati dan berbahan organik. Dia bekerja tidak langsung membuat irit BBM. Tapi dia melunturkan kerak kerak melalui udara pembuangan. Menutup pori pori Blok mesin yang terkikis akibat kinerja piston yang tidak stabil. Selain itu, SAMDEXS membuat lapisan flin di blok mesin dan piston. Ini adalah rekayasa SAMDEXS supaya mesin terlindungi. Jika dibuka, seakan ada lapisan plastik pada piston, ring dan blok mesin bagian dalam.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn-collapse" data-toggle="collapse" data-target="#collapseTujuh" aria-expanded="false" aria-controls="collapseTujuh">
                                    Bagaimana penjelasan SAMDEXS bisa menghemat BBM ? 
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseTujuh" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                Penghematan BBM dengan SAMDEXS pada dasarnya hanyalah efek dari pembakaran yg sempurna.
                                Secara umum, pembakaran yang sempurna terjadi jika BBM memiliki padanan RON (Research Octane Number) yg sesuai dg Compression Ratio kendaraan.
                                        <br>
                                Tabel Kompresi RON <br> 
                                8,1:1-9,0:1 88 <br>
                                8,6:1-9,5:1 90 <br>
                                9,1:1-10,0:1 92 <br>
                                10,1:1-10,7:1 95 <br>
                                10,8:1-11,5:1 96 <br>
                                <br>

                                Semakin tinggi KOMPRESI MESIN semakin tingggi kebutuhan RON
                                Kendaraan dari tahun 2009 rata-rata sdh memiliki Kompresi mesin yg tinggi minimal 9,1:1 bahkan 11,1:1 dst. Jd butuh BBM dg RON tinggi.
                                Dan apabila menggunakan BBM RON lebih rendah maka akibatnya knocking.
                                Knocking adalah terbakarnya campuran bensin dan udara di ruang bakar karena tekanan piston sebelum mendapat percikan api dari busi. (Terbakar terlalu cepat sebelum waktunya). Istilah lain Knocking yaitu MBREBET

                                <br>

                                Efek dari Knocking :
                                <ul>
                                    <li>Piston jebol</li>
                                    <li>Mesin berkerak</li>
                                    <li>Tenaga loyo</li>
                                    <li>Polusi</li>
                                    <li>Boros BBM</li>
                                    <li>Oil Cepat Kotor</li>
                                </ul>
                                <br>
                            
                                Maka dari itu pakailah SAMDEXS, yang bermanfaat :
                                <br>
                                <ul>
                                    <li>Meningkat Power dan Torsi</li>
                                    <li>Hemat 45%</li>
                                    <li>Menghilangkan Polusi CO Hingga 100% Meningkatkan 5-10 RON</li>
                                    <li>Membersihkan Kerak</li>
                                    <li>Menghilangkan Knocking</li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sign-up section-padding text-center" id="download">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h3>Mau dapat info dari kami?, Submit email kamu di bawah ini</h3>
                    <!-- <p>Grab your copy today, exclusively from Codrops</p> -->
                    <form class="signup-form" action="#" method="POST" role="form">
                        <div class="form-input-group">
                            <i class="fas fa-envelope-open-text"></i><input type="text" class="" placeholder="Enter your email" required>
                        </div>
                        <!-- <div class="form-input-group">
                            <i class="fa fa-lock"></i><input type="text" class="" placeholder="Enter your password" required>
                        </div> -->
                        <button type="submit" class="btn-fill sign-up-btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="to-top">
        <div class="container">
            <div class="row">
                <div class="to-top-wrap">
                    <a href="#top" class="top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="footer-links">
                        <ul class="footer-group" style="color: white;">
                            <strong>Alamat kantor/korespondesi</strong> : PONDOK MUTIARA, S-20 SIDOARJO, Kel. Banjarbendo, Kec. Sidoarjo,
                            Kab. Sidoarjo, Prov. Jawa Timur. <br>
                            <strong>Nomor</strong> : 031-99704417 <br>
                            Whatsapp : <a href="https://wa.me/6287866855303?text=Custom by Ciels rebels a.k.a Nuril Khotibi" target="_blank"> <i class="fa fa-whatsapp" style="font-size:30; color:yellow;"></i></a>
                            <!-- <li><a href="#">Features</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Sign up</a></li>
                            <li><a href="http://tympanus.net/codrops/licensing/">Licence</a></li>
                            <li><a href="http://tympanus.net/codrops/">Codrops</a></li>
                            <li><a href="http://www.dribbble.com/">Dribbble</a></li> -->
                        </ul>
                        <p>Copyright © 2020 <a href="#assets"> Samdexs | PT. Sila Sukses Bersama</a><br>
                            <!-- <a href="http://tympanus.net/codrops/licensing/">Licence</a> | Crafted with <span class="fa fa-heart pulse2"></span> for <a href="https://tympanus.net/codrops/">Codrops</a>.</p> -->
                    </div>
                </div>
                <div class="social-share">
                    <!-- <p>Share Sedna with your friends</p> -->
                    <!-- <a href="#" class="twitter-share"><i class="fa fa-twitter"></i></a> <a href="#" class="facebook-share"><i class="fa fa-facebook"></i></a> -->
                </div>
            </div>
        </div>
    </footer>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script src="bower_components/retina.js/dist/retina.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="bower_components/classie/classie.js"></script>
    <script src="bower_components/jquery-waypoints/lib/jquery.waypoints.min.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->



    <script>
        (function(b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                function() {
                    (b[l].q = b[l].q || []).push(arguments)
                });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = '//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X', 'auto');
        ga('send', 'pageview');



        (function($) {
            $('.accordion > li:eq(0) a').addClass('active').next().slideDown();

            $('.accordion a').click(function(j) {
                var dropDown = $(this).closest('li').find('p');

                $(this).closest('.accordion').find('p').not(dropDown).slideUp();

                if ($(this).hasClass('active')) {
                    $(this).removeClass('active');
                } else {
                    $(this).closest('.accordion').find('a.active').removeClass('active');
                    $(this).addClass('active');
                }

                dropDown.stop(false, true).slideToggle();

                j.preventDefault();
            });
        })(jQuery);
        //     $('#navb ul li a').on('click',function(event){
        //    var $anchor = $(this);
        //    $('html, body').animate({
        //      scrollTop: $($anchor.attr('href')).offset().top + "px"
        //    }, 4500);
        //     event.preventDefault();
        //     });
    </script>
</body>

</html>