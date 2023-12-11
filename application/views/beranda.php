<!DOCTYPE html>
<html>

<head>
    <title> <?= $judul ?></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/tech/') ?>css/vendor.css">
    <link href="<?= base_url('assets/tech/') ?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/tech/') ?>css/main.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="logo-facebook" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <title>Facebook</title>
            <path fill="currentColor" fill-rule="evenodd" d="M480 257.35c0-123.7-100.3-224-224-224s-224 100.3-224 224c0 111.8 81.9 204.47 189 221.29V322.12h-56.89v-64.77H221V208c0-56.13 33.45-87.16 84.61-87.16c24.51 0 50.15 4.38 50.15 4.38v55.13H327.5c-27.81 0-36.51 17.26-36.51 35v42h62.12l-9.92 64.77H291v156.54c107.1-16.81 189-109.48 189-221.31Z" />
        </symbol>
        <symbol id="logo-twitter" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <title>Twitter</title>
            <path fill="currentColor" d="M496 109.5a201.8 201.8 0 0 1-56.55 15.3a97.51 97.51 0 0 0 43.33-53.6a197.74 197.74 0 0 1-62.56 23.5A99.14 99.14 0 0 0 348.31 64c-54.42 0-98.46 43.4-98.46 96.9a93.21 93.21 0 0 0 2.54 22.1a280.7 280.7 0 0 1-203-101.3A95.69 95.69 0 0 0 36 130.4c0 33.6 17.53 63.3 44 80.7A97.5 97.5 0 0 1 35.22 199v1.2c0 47 34 86.1 79 95a100.76 100.76 0 0 1-25.94 3.4a94.38 94.38 0 0 1-18.51-1.8c12.51 38.5 48.92 66.5 92.05 67.3A199.59 199.59 0 0 1 39.5 405.6a203 203 0 0 1-23.5-1.4A278.68 278.68 0 0 0 166.74 448c181.36 0 280.44-147.7 280.44-275.8c0-4.2-.11-8.4-.31-12.5A198.48 198.48 0 0 0 496 109.5Z" />
        </symbol>
        <symbol id="logo-pinterest" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <title>Pinterest</title>
            <path fill="currentColor" d="M256.05 32c-123.7 0-224 100.3-224 224c0 91.7 55.2 170.5 134.1 205.2c-.6-15.6-.1-34.4 3.9-51.4c4.3-18.2 28.8-122.1 28.8-122.1s-7.2-14.3-7.2-35.4c0-33.2 19.2-58 43.2-58c20.4 0 30.2 15.3 30.2 33.6c0 20.5-13.1 51.1-19.8 79.5c-5.6 23.8 11.9 43.1 35.4 43.1c42.4 0 71-54.5 71-119.1c0-49.1-33.1-85.8-93.2-85.8c-67.9 0-110.3 50.7-110.3 107.3c0 19.5 5.8 33.3 14.8 43.9c4.1 4.9 4.7 6.9 3.2 12.5c-1.1 4.1-3.5 14-4.6 18c-1.5 5.7-6.1 7.7-11.2 5.6c-31.3-12.8-45.9-47-45.9-85.6c0-63.6 53.7-139.9 160.1-139.9c85.5 0 141.8 61.9 141.8 128.3c0 87.9-48.9 153.5-120.9 153.5c-24.2 0-46.9-13.1-54.7-27.9c0 0-13 51.6-15.8 61.6c-4.7 17.3-14 34.5-22.5 48a225.13 225.13 0 0 0 63.5 9.2c123.7 0 224-100.3 224-224S379.75 32 256.05 32Z" />
        </symbol>
        <symbol id="logo-instagram" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <title>Instagram</title>
            <path fill="currentColor" d="M349.33 69.33a93.62 93.62 0 0 1 93.34 93.34v186.66a93.62 93.62 0 0 1-93.34 93.34H162.67a93.62 93.62 0 0 1-93.34-93.34V162.67a93.62 93.62 0 0 1 93.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32Z" />
            <path fill="currentColor" d="M377.33 162.67a28 28 0 1 1 28-28a27.94 27.94 0 0 1-28 28ZM256 181.33A74.67 74.67 0 1 1 181.33 256A74.75 74.75 0 0 1 256 181.33m0-37.33a112 112 0 1 0 112 112a112 112 0 0 0-112-112Z" />
        </symbol>
        <symbol id="logo-youtube" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <title>Youtube</title>
            <path fill="currentColor" d="M508.64 148.79c0-45-33.1-81.2-74-81.2C379.24 65 322.74 64 265 64h-18c-57.6 0-114.2 1-169.6 3.6C36.6 67.6 3.5 104 3.5 149C1 184.59-.06 220.19 0 255.79q-.15 53.4 3.4 106.9c0 45 33.1 81.5 73.9 81.5c58.2 2.7 117.9 3.9 178.6 3.8q91.2.3 178.6-3.8c40.9 0 74-36.5 74-81.5c2.4-35.7 3.5-71.3 3.4-107q.34-53.4-3.26-106.9ZM207 353.89v-196.5l145 98.2Z" />
        </symbol>
        <symbol id="person" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <title>Login</title>
            <path fill="currentColor" d="M332.64 64.58C313.18 43.57 286 32 256 32c-30.16 0-57.43 11.5-76.8 32.38c-19.58 21.11-29.12 49.8-26.88 80.78C156.76 206.28 203.27 256 256 256s99.16-49.71 103.67-110.82c2.27-30.7-7.33-59.33-27.03-80.6ZM432 480H80a31 31 0 0 1-24.2-11.13c-6.5-7.77-9.12-18.38-7.18-29.11C57.06 392.94 83.4 353.61 124.8 326c36.78-24.51 83.37-38 131.2-38s94.42 13.5 131.2 38c41.4 27.6 67.74 66.93 76.18 113.75c1.94 10.73-.68 21.34-7.18 29.11A31 31 0 0 1 432 480Z" />
        </symbol>
        <symbol id="search" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <title>Search</title>
            <path fill="currentColor" d="M456.69 421.39L362.6 327.3a173.81 173.81 0 0 0 34.84-104.58C397.44 126.38 319.06 48 222.72 48S48 126.38 48 222.72s78.38 174.72 174.72 174.72A173.81 173.81 0 0 0 327.3 362.6l94.09 94.09a25 25 0 0 0 35.3-35.3ZM97.92 222.72a124.8 124.8 0 1 1 124.8 124.8a124.95 124.95 0 0 1-124.8-124.8Z" />
        </symbol>
        <symbol id="cart" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <title>Cart</title>
            <circle cx="176" cy="416" r="32" fill="currentColor" />
            <circle cx="400" cy="416" r="32" fill="currentColor" />
            <path fill="currentColor" d="M456.8 120.78a23.92 23.92 0 0 0-18.56-8.78H133.89l-6.13-34.78A16 16 0 0 0 112 64H48a16 16 0 0 0 0 32h50.58l45.66 258.78A16 16 0 0 0 160 368h256a16 16 0 0 0 0-32H173.42l-5.64-32h241.66A24.07 24.07 0 0 0 433 284.71l28.8-144a24 24 0 0 0-5-19.93Z" />
        </symbol>
        <symbol id="long-arrow-alt-left" xmlns="http://www.w3.org/2000/svg" class="la" viewBox="0 0 32 32">
            <title>Long Arrow Left</title>
            <path fill="currentColor" d="M10.813 9.281L4.093 16l6.72 6.719l1.406-1.438L7.938 17H28v-2H7.937l4.282-4.281z" />
        </symbol>
        <symbol id="long-arrow-alt-right" xmlns="http://www.w3.org/2000/svg" class="la" viewBox="0 0 32 32">
            <title>Long Arrow Right</title>
            <path fill="currentColor" d="M21.188 9.281L19.78 10.72L24.063 15H4v2h20.063l-4.282 4.281l1.407 1.438L27.905 16z" />
        </symbol>
        <symbol id="caret-down" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <title>Caret Down</title>
            <path fill="currentColor" d="m98 190.06l139.78 163.12a24 24 0 0 0 36.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62Z" />
        </symbol>
        <symbol id="arrow-back" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <title>Arrow Back</title>
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M244 400L100 256l144-144M120 256h292" />
        </symbol>
        <symbol id="arrow-forward" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <title>Arrow Forward</title>
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="m268 112l144 144l-144 144m124-144H100" />
        </symbol>
        <symbol id="chevron-forward" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <title>Chevron Forward</title>
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="m184 112l144 144l-144 144" />
        </symbol>
        <symbol id="play" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <title>Play</title>
            <path fill="currentColor" d="M133 440a35.37 35.37 0 0 1-17.5-4.67c-12-6.8-19.46-20-19.46-34.33V111c0-14.37 7.46-27.53 19.46-34.33a35.13 35.13 0 0 1 35.77.45l247.85 148.36a36 36 0 0 1 0 61l-247.89 148.4A35.5 35.5 0 0 1 133 440Z" />
        </symbol>
        <symbol id="menu-sharp" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <title>Menu</title>
            <path fill="currentColor" d="M64 384h384v-42.67H64Zm0-106.67h384v-42.66H64ZM64 128v42.67h384V128Z" />
        </symbol>
        <symbol id="close-sharp" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <title>Cross</title>
            <path fill="currentColor" d="M400 145.49L366.51 112L256 222.51L145.49 112L112 145.49L222.51 256L112 366.51L145.49 400L256 289.49L366.51 400L400 366.51L289.49 256L400 145.49z" />
        </symbol>
    </svg>

    <div id="preloader">
        <div id="loader"></div>
    </div>

    <header id="header-wrap">
        <div class="top-header bg-dark">

            <div class="container py-2 d-flex justify-content-between text-white">

                <div class="secondary-nav">
                    <ul class="d-flex m-0 list-unstyled">
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#about">Privacy Policy</a></li>
                        <li><a href="#about">Contact Us</a></li>
                        <li><a href="#about">Terms of Use</a></li>
                    </ul>
                </div>

                <div class="social-share">
                    <ul class="d-flex flex-wrap m-0 list-unstyled">
                        <li><a href="#"><svg class="bi" width="16" height="16">
                                    <use xlink:href="#logo-facebook"></use>
                                </svg></a></li>
                        <li><a href="#"><svg class="bi" width="16" height="16">
                                    <use xlink:href="#logo-twitter"></use>
                                </svg></a></li>
                        <li><a href="#"><svg class="bi" width="16" height="16">
                                    <use xlink:href="#logo-pinterest"></use>
                                </svg></a></li>
                        <li><a href="#"><svg class="bi" width="16" height="16">
                                    <use xlink:href="#logo-instagram"></use>
                                </svg></a></li>
                        <li><a href="#"><svg class="bi" width="16" height="16">
                                    <use xlink:href="#logo-youtube"></use>
                                </svg></a></li>
                    </ul>
                </div>

            </div>

        </div>

        <nav id="header-nav" class="navbar navbar-expand-lg py-4">

            <div class="container align-items-center">

                
                <button class="navbar-toggler d-flex d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <svg class="bi" width="36" height="36">
                        <use xlink:href="#menu-sharp"></use>
                    </svg>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header justify-content-end">
                        <button type="button" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#bdNavbar">
                            <svg class="bi" width="36" height="36">
                                <use xlink:href="#close-sharp"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="offcanvas-body justify-content-end">
                        <ul id="navbar" class="navbar-nav d-flex justify-content-end flex-wrap list-unstyled m-0">

                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url() ?>">Home</a>
                            </li>
                            <?php foreach ($kategori as $kate) { ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>

            </div>

        </nav>
    </header>



    <section id="slider" class="position-relative padding-xlarge no-padding-top">

        <div class="container">

            <div class="swiper main-slider overflow-hidden">
                <div class="swiper-wrapper">
                    <?php foreach ($rencent as $rcn) { ?>
                        <div class="swiper-slide">
                            <img src="<?= base_url('assets/upload/konten/' . $rcn['foto']) ?>" style="width: 1500px; height: 700px;" class="slider-img img-fluid">
                            <div class="carousel-text text-start">
                                <div class="story-title-wrap mt-3">
                                    <div class="post-meta"><a href="blog.html"><?= $rcn['nama_kategori'] ?></a></div>
                                    <h2 class="story-title"><a href="<?= base_url('home/artikel/' . $rcn['slug']) ?>"><?= $rcn['judul']; ?></a></h2>
                                    <p><?= mb_substr($rcn['keterangan'], 0, 150, 'UTF-8'); ?></p>
                                    <div class="entry-meta">
                                        <span class="author"><span class="sp">by</span><span class="author-name"><?= $rcn['nama']; ?></span></span>
                                        <span class="meta-date"><span class="sp">-</span><time class="published" datetime=""><?= $rcn['tanggal']; ?></time></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }; ?>
                </div>
            </div>
            <div class="swiper-icon swiper-arrow slider-arrow-next position-absolute top-0 bottom-0 end-0 d-flex align-items-center">
                <a href="#"><svg class="bi" width="60" height="60">
                        <use xlink:href="#long-arrow-alt-right"></use>
                    </svg></a>
            </div>
            <div class="swiper-icon swiper-arrow slider-arrow-prev position-absolute top-0 bottom-0 start-0 d-flex align-items-center">
                <a href="#"><svg class="bi" width="60" height="60">
                        <use xlink:href="#long-arrow-alt-left"></use>
                    </svg></a>
            </div>
            <div class="swiper-pagination main-slider-pagination"></div>

        </div>
    </section>

    <div class="container">
        <aside class="col-md-12">
            <div class="sidebar">
                <div class="widget-menu">
                    <div class="widget-search-bar">
                        <form action="<?= base_url('home/search/') ?>" method="post" class="d-flex">
                            <input class="search-field w-100" placeholder="Search" type="search" name="keyword">
                            <button class="search-icon bg-dark" type="submit">
                                    <svg class="search text-light">
                                        <use xlink:href="#search"></use>
                                    </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </aside>
    </div>

    <section id="blog-section" class="bg-light padding-large">
        <div class="container">
            <div class="row">
                <?php foreach ($konten as $late) { ?>
                    <?php
                    $this->db->from('konten')->order_by('foto', 'DESC');
                    $konten = $this->db->limit(4)->get()->result_array();
                    ?>
                    <div class="post-item col-md-3">
                        <figure class="zoom-effect">
                            <a href="single-post.html" class="zoom-in"><img src="<?= base_url('assets/upload/konten/' . $late['foto']) ?>" alt="stories" class="lgpostImg img-fluid" style="width: 500px; height: 200px;"></a>
                        </figure>
                        <div class="story-title-wrap mt-3">
                            <div class="post-meta"><a href="blog.html"><?= $late['nama_kategori'] ?></a></div>
                            <h3 class="story-title"><a href="<?= base_url('home/artikel/' . $late['slug']) ?>"><?= $late['judul']; ?></a></h3>
                            <div class="entry-meta">
                                <span class="author"><span class="sp">by</span><span class="author-name"><?= $late['nama']; ?></span></span>
                                <span class="meta-date"><span class="sp">-</span><time class="published" datetime=""><?= $late['tanggal']; ?></time></span>
                            </div>
                        </div>
                    </div>
                <?php }; ?>
            </div>
        </div>
    </section>

    <section id="latest-posts" class="latest-posts margin-large">
        <div class="container">
            <?php
            $counter_outer = 0; //Inisialisasi penghitung untuk loop luar

            foreach ($kategori as $kt) {
                if ($counter_outer < 4) { //Periksa apakah penghitung loop luar kurang dari 
            ?>
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="section-header">
                            <h4 class="elementary-title"><?= $kt['nama_kategori'] ?></h4>
                        </div><!--section-header-->
                        <a href="<?= base_url('home/kategori/' . $kt['id_kategori']) ?>" class="button">All news<svg class="bi" width="18" height="18">
                                <use xlink:href="#chevron-forward"></use>
                            </svg></a>
                    </div>

                    <?php
                    $this->db->from('konten')->where('id_kategori', $kt['id_kategori']);
                    $this->db->order_by('foto', 'DESC');
                    $this->db->limit(4);
                    $konten = $this->db->get()->result_array();
                    ?>

                    <div class="row">
                        <?php foreach ($konten as $kk) { ?>
                            <div class="post-item col-md-3">
                                <figure class="zoom-effect">
                                    <a href="single-post.html" class="zoom-in"><img src="<?= base_url('assets/upload/konten/' . $kk['foto']) ?>" style="width: 500px; height: 200px;" alt="stories" class="blogImg img-fluid"></a>
                                </figure>
                                <div class="story-title-wrap mt-3">
                                    <h3 class="story-title"><a href="<?= base_url('home/artikel/' . $kk['slug']) ?>"><?= $kk['judul'] ?></a></h3>
                                    <div class="entry-meta">
                                        <span class="author"><span class="sp">by</span><span class="author-name"><?= $kk['username']; ?></span>
                                            <span class="meta-date"><span class="sp">-</span><time class="published" datetime=""><?= $kk['tanggal'] ?></time></span>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
            <?php
                    $counter_outer++; //Menambah penghitung untuk loop luar
                } else {
                    break; // Keluar dari loop luar jika penghitung melebihi
                }
            }
            ?>
        </div>
    </section>

    <footer id="footer" class="padding-large">
        <div class="container">
            <div class="row">

                <div class="col-md-3 mb-5">
                    <a href="index.html"><img src="images/logo-light.png" class="logo"></a>
                    <p>Vel non nibh vestibulum massa ullamcorper. Bibendum ultrices venenatis, id id sed mass commodo eros duis ut cras neque.</p>
                    <p>©2023 TechLight / HTML template by <a href="https://templatesjungle.com/" class="link-primary fw-bold text-decoration-underline" target="_blank">TemplatesJungle</a></p>
                </div>

                <div class="col-md-3 mb-5">
                    <h5>More from us</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a href="#" class="nav-link">iPhones</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">MacBook</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Best Laptop</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Best TV Deal</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Best Macbook Deals</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">eBay Coupons</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Amazon Coupons</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Laptop Coupons</a></li>
                    </ul>
                </div>

                <div class="col-md-3 mb-5">
                    <h5>About us</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a href="#" class="nav-link">Advertise</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">More About Us</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Newsletter</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Careers</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Help Center</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Sitemap</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Licensing</a></li>
                    </ul>
                </div>

                <div class="col-md-3 mb-5">
                    <h5>Policies</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a href="#" class="nav-link">Privacy Policy</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Terms of Use</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Cookies</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Information</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Compliance</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">GDPR Policy</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Sell informations</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Copyright</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>

    <!-- Video Popup -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg class="bi" width="40" height="40">
                            <use xlink:href="#close-sharp"></use>
                        </svg></button>
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script src="<?= base_url('assets/tech/') ?>js/jquery-1.11.0.min.js"></script>
    <script src="<?= base_url('assets/tech/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/tech/') ?>js/plugins.js"></script>
    <script src="<?= base_url('assets/tech/') ?>js/script.js"></script>

</body>

</html>