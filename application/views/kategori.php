<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $judul ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url('assets/magnews/') ?>images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/magnews/') ?>vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/magnews/') ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/magnews/') ?>fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/magnews/') ?>fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/magnews/') ?>vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/magnews/') ?>vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/magnews/') ?>vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/magnews/') ?>css/util.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/magnews/') ?>css/main.css">
    <!--===============================================================================================-->
</head>

<body class="animsition">

    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <div class="topbar">
                <div class="content-topbar container h-100">
                    <div class="left-topbar">
                        <span class="left-topbar-item flex-wr-s-c">
                            <span>
                                New York, NY
                            </span>

                            <img class="m-b-1 m-rl-8" src="images/icons/icon-night.png" alt="IMG">

                            <span>
                                HI 58° LO 56°
                            </span>
                        </span>
                        <a href="#" class="left-topbar-item">
                            Contact
                        </a>

                        <a href="#" class="left-topbar-item">
                            Sing up
                        </a>

                        <a href="#" class="left-topbar-item">
                            Log in
                        </a>
                    </div>

                    <div class="right-topbar">
                        <a href="#">
                            <span class="fab fa-facebook-f"></span>
                        </a>

                        <a href="#">
                            <span class="fab fa-twitter"></span>
                        </a>

                        <a href="#">
                            <span class="fab fa-pinterest-p"></span>
                        </a>

                        <a href="#">
                            <span class="fab fa-vimeo-v"></span>
                        </a>

                        <a href="#">
                            <span class="fab fa-youtube"></span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Header Mobile -->
            <div class="wrap-header-mobile">
                <!-- Logo moblie -->
                <div class="logo-mobile">
                    <a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
                </div>

                <!-- Button show menu -->
                <div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </div>
            </div>

            <!-- Menu Mobile -->
            <div class="menu-mobile">
                <ul class="topbar-mobile">
                    <li class="left-topbar">
                        <span class="left-topbar-item flex-wr-s-c">
                            <span>
                                New York, NY
                            </span>

                            <img class="m-b-1 m-rl-8" src="images/icons/icon-night.png" alt="IMG">

                            <span>
                                HI 58° LO 56°
                            </span>
                        </span>
                    </li>

                    <li class="left-topbar">
                        <a href="#" class="left-topbar-item">
                            About
                        </a>

                        <a href="#" class="left-topbar-item">
                            Contact
                        </a>

                        <a href="#" class="left-topbar-item">
                            Sing up
                        </a>

                        <a href="#" class="left-topbar-item">
                            Log in
                        </a>
                    </li>

                    <li class="right-topbar">
                        <a href="#">
                            <span class="fab fa-facebook-f"></span>
                        </a>

                        <a href="#">
                            <span class="fab fa-twitter"></span>
                        </a>

                        <a href="#">
                            <span class="fab fa-pinterest-p"></span>
                        </a>

                        <a href="#">
                            <span class="fab fa-vimeo-v"></span>
                        </a>

                        <a href="#">
                            <span class="fab fa-youtube"></span>
                        </a>
                    </li>
                </ul>

                <ul class="main-menu-m">
                    <li>
                        <a href="index.html">Home</a>

                    </li>
                </ul>
            </div>

            <!--  -->
            <div class="wrap-logo container">
                <!-- Logo desktop -->
                <div class="logo">
                    <a href="index.html"><img src="images/icons/logo-01.png" alt="LOGO"></a>
                </div>

                <!-- Banner -->
                <div class="banner-header">
                    <a href="#"><img src="images/banner-01.jpg" alt="IMG"></a>
                </div>
            </div>

            <!--  -->
            <div class="wrap-main-nav">
                <div class="main-nav">
                    <!-- Menu desktop -->
                    <nav class="menu-desktop">
                        <a class="logo-stick" href="index.html">
                            <img src="images/icons/logo-01.png" alt="LOGO">
                        </a>

                        <ul class="main-menu">
                            <li>
                                <a href="<?= base_url() ?>">Home</a>
                            </li>
                            <?php foreach ($kategori as $kate) { ?>
                            <li>
                                <a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Breadcrumb -->
    <div class="container">
        <div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
            <div class="f2-s-1 p-r-30 m-tb-6">
                <a href="<?= base_url() ?>" class="breadcrumb-item f1-s-3 cl9">
                    Home
                </a>
                <span class="breadcrumb-item f1-s-3 cl9">
                    <?= $nama_kategori; ?>
                </span>
            </div>

            <div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
                <input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
                <button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
                    <i class="zmdi zmdi-search"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Page heading -->
    <div class="container p-t-4 p-b-40">
        <h2 class="f1-l-1 cl2">
            <?= $nama_kategori; ?>
        </h2>
    </div>

    <!-- Post -->
    <section class="bg0 p-b-55">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 p-b-80">
                    <div class="p-r-10 p-r-0-sr991">
                        <div class="m-t--40 p-b-40">
                            <!-- Item post -->
                            <?php foreach ($konten as $aa) { ?>
                                <div class="flex-wr-sb-s p-t-40 p-b-15 how-bor2">
                                    <a href="blog-detail-02.html" class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
                                        <img src="<?= base_url('assets/upload/konten/' . $aa['foto']) ?>" alt="IMG">
                                    </a>

                                    <div class="size-w-9 w-full-sr575 m-b-25">
                                        <h5 class="p-b-12">
                                            <a href="blog-detail-02.html" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
                                                <?= $aa['judul'] ?>
                                            </a>
                                        </h5>

                                        <div class="cl8 p-b-18">
                                            <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                <?= $aa['nama'] ?>
                                            </a>

                                            <span class="f1-s-3 m-rl-3">
                                                -
                                            </span>

                                            <span class="f1-s-3">
                                                <?= $aa['tanggal'] ?>
                                            </span>
                                        </div>

                                        <p class="f1-s-1 cl6 p-b-24">
                                            <?= mb_substr($aa['keterangan'], 0, 80, 'UTF-8'); ?>
                                        </p>

                                        <a href="blog-detail-02.html" class="f1-s-1 cl9 hov-cl10 trans-03">
                                            Read More
                                            <i class="m-l-2 fa fa-long-arrow-alt-right"></i>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                        <a href="#" class="flex-c-c size-a-13 bo-all-1 bocl11 f1-m-6 cl6 hov-btn1 trans-03">
                            Load More
                        </a>
                    </div>
                </div>

                <div class="col-md-10 col-lg-4 p-b-80">
                    <div class="p-l-10 p-rl-0-sr991">
                        <!-- Subscribe -->
                        <div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-50">
                            <h5 class="f1-m-5 cl0 p-b-10">
                                Subscribe
                            </h5>

                            <p class="f1-s-1 cl0 p-b-25">
                                Get all latest content delivered to your email a few times a month.
                            </p>

                            <form class="size-a-9 pos-relative">
                                <input class="s-full f1-m-6 cl6 plh9 p-l-20 p-r-55" type="text" name="email" placeholder="Email">

                                <button class="size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03">
                                    <i class="fa fa-arrow-right"></i>
                                </button>
                            </form>
                        </div>

                        <!-- Most Popular -->
                        <div class="p-b-23">
                            <div class="how2 how2-cl4 flex-s-c">
                                <h3 class="f1-m-2 cl3 tab01-title">
                                    Most Popular
                                </h3>
                            </div>

                            <ul class="p-t-35">
                                <li class="flex-wr-sb-s p-b-22">
                                    <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                        1
                                    </div>

                                    <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    </a>
                                </li>

                                <li class="flex-wr-sb-s p-b-22">
                                    <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                        2
                                    </div>

                                    <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                        Proin velit consectetur non neque
                                    </a>
                                </li>

                                <li class="flex-wr-sb-s p-b-22">
                                    <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                        3
                                    </div>

                                    <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                        Nunc vestibulum, enim vitae condimentum volutpat lobortis ante
                                    </a>
                                </li>

                                <li class="flex-wr-sb-s p-b-22">
                                    <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                        4
                                    </div>

                                    <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                        Proin velit justo consectetur non neque elementum
                                    </a>
                                </li>

                                <li class="flex-wr-sb-s p-b-22">
                                    <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0">
                                        5
                                    </div>

                                    <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                        Proin velit consectetur non neque
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!--  -->
                        <div class="flex-c-s p-b-50">
                            <a href="#">
                                <img class="max-w-full" src="images/banner-02.jpg" alt="IMG">
                            </a>
                        </div>

                        <!-- Tag -->
                        <div>
                            <div class="how2 how2-cl4 flex-s-c m-b-30">
                                <h3 class="f1-m-2 cl3 tab01-title">
                                    Tags
                                </h3>
                            </div>

                            <div class="flex-wr-s-s m-rl--5">
                                <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                    Fashion
                                </a>

                                <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                    Lifestyle
                                </a>

                                <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                    Denim
                                </a>

                                <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                    Streetstyle
                                </a>

                                <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                    Crafts
                                </a>

                                <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                    Magazine
                                </a>

                                <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                    News
                                </a>

                                <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                    Blogs
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="bg2 p-t-40 p-b-25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 p-b-20">
                        <div class="size-h-3 flex-s-c">
                            <a href="index.html">
                                <img class="max-s-full" src="images/icons/logo-02.png" alt="LOGO">
                            </a>
                        </div>

                        <div>
                            <p class="f1-s-1 cl11 p-b-16">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempor magna eget elit efficitur, at accumsan sem placerat. Nulla tellus libero, mattis nec molestie at, facilisis ut turpis. Vestibulum dolor metus, tincidunt eget odio
                            </p>

                            <p class="f1-s-1 cl11 p-b-16">
                                Any questions? Call us on (+1) 96 716 6879
                            </p>

                            <div class="p-t-15">
                                <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                    <span class="fab fa-facebook-f"></span>
                                </a>

                                <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                    <span class="fab fa-twitter"></span>
                                </a>

                                <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                    <span class="fab fa-pinterest-p"></span>
                                </a>

                                <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                    <span class="fab fa-vimeo-v"></span>
                                </a>

                                <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                    <span class="fab fa-youtube"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 p-b-20">
                        <div class="size-h-3 flex-s-c">
                            <h5 class="f1-m-7 cl0">
                                Popular Posts
                            </h5>
                        </div>

                        <ul>
                            <li class="flex-wr-sb-s p-b-20">
                                <a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
                                    <img src="images/popular-post-01.jpg" alt="IMG">
                                </a>

                                <div class="size-w-5">
                                    <h6 class="p-b-5">
                                        <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
                                            Donec metus orci, malesuada et lectus vitae
                                        </a>
                                    </h6>

                                    <span class="f1-s-3 cl6">
                                        Feb 17
                                    </span>
                                </div>
                            </li>

                            <li class="flex-wr-sb-s p-b-20">
                                <a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
                                    <img src="images/popular-post-02.jpg" alt="IMG">
                                </a>

                                <div class="size-w-5">
                                    <h6 class="p-b-5">
                                        <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
                                            Lorem ipsum dolor sit amet, consectetur
                                        </a>
                                    </h6>

                                    <span class="f1-s-3 cl6">
                                        Feb 16
                                    </span>
                                </div>
                            </li>

                            <li class="flex-wr-sb-s p-b-20">
                                <a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
                                    <img src="images/popular-post-03.jpg" alt="IMG">
                                </a>

                                <div class="size-w-5">
                                    <h6 class="p-b-5">
                                        <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
                                            Suspendisse dictum enim quis imperdiet auctor
                                        </a>
                                    </h6>

                                    <span class="f1-s-3 cl6">
                                        Feb 15
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-lg-4 p-b-20">
                        <div class="size-h-3 flex-s-c">
                            <h5 class="f1-m-7 cl0">
                                Category
                            </h5>
                        </div>

                        <ul class="m-t--12">
                            <li class="how-bor1 p-rl-5 p-tb-10">
                                <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                    Fashion (22)
                                </a>
                            </li>

                            <li class="how-bor1 p-rl-5 p-tb-10">
                                <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                    Technology (29)
                                </a>
                            </li>

                            <li class="how-bor1 p-rl-5 p-tb-10">
                                <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                    Street Style (15)
                                </a>
                            </li>

                            <li class="how-bor1 p-rl-5 p-tb-10">
                                <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                    Life Style (28)
                                </a>
                            </li>

                            <li class="how-bor1 p-rl-5 p-tb-10">
                                <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                    DIY & Crafts (16)
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg11">
            <div class="container size-h-4 flex-c-c p-tb-15">
                <span class="f1-s-1 cl0 txt-center">
                    Copyright © 2018

                    <a href="#" class="f1-s-1 cl10 hov-link1"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </span>
            </div>
        </div>
    </footer>

    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <span class="fas fa-angle-up"></span>
        </span>
    </div>


    <!--===============================================================================================-->
    <script src="<?= base_url('assets/magnews/') ?>vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/magnews/') ?>vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/magnews/') ?>vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url('assets/magnews/') ?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/magnews/') ?>js/main.js"></script>

</body>

</html>