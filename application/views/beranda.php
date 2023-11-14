<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>
	<meta charset="utf-8">
	<title>NewsBit - News Magazine Newspaper HTML Template</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- theme meta -->
	<meta name="theme-name" content="newsbit" />

	<!--Favicon-->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">

	<!-- THEME CSS
	================================================== -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?= base_url('assets/newsbit/theme/') ?>plugins/bootstrap/css/bootstrap.min.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="<?= base_url('assets/newsbit/theme/') ?>plugins/font-awesome/css/font-awesome.min.css">
	<!-- Slick Carousel -->
	<link rel="stylesheet" href="<?= base_url('assets/newsbit/theme/') ?>plugins/slick-carousel/slick.css">
	<link rel="stylesheet" href="<?= base_url('assets/newsbit/theme/') ?>plugins/slick-carousel/slick-theme.css">
	<!-- manin stylesheet -->
	<link rel="stylesheet" href="<?= base_url('assets/newsbit/theme/') ?>css/style.css">
</head>

<body>

	<div class="trending-bar-dark hidden-xs ">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h3 class="trending-bar-title">Trending News</h3>
					<div class="trending-news-slider">
						<div class="item">
							<div class="post-content">
								<h2 class="post-title title-sm">
									<a href="single-post.html">Ex-Googler warns coding bootcamps are lacking</a>
								</h2>
							</div>
						</div>
						<div class="item">
							<div class="post-content">
								<h2 class="post-title title-sm">
									<a href="single-post.html">Intel’s new smart glasses actually look good</a>
								</h2>
							</div>
						</div>
						<div class="item">
							<div class="post-content">
								<h2 class="post-title title-sm">
									<a href="single-post.html">Here's How To Get Free Pizza On 2 hour</a>
								</h2>
							</div>
						</div>
					</div>
				</div>


				<div class="col-md-12 col-sm-12 col-xs-12 top-nav-social-lists text-lg-right col-lg-4 ml-lg-auto">
					<ul class="list-unstyled mt-4 mt-lg-0">
						<li>
							<a href="#">
								<span class="social-icon">
									<i class="fa fa-facebook-f"></i>
								</span>
							</a>
							<a href="#">
								<span class="social-icon">
									<i class="fa fa-twitter"></i>
								</span>
							</a>
							<a href="#">
								<span class="social-icon">
									<i class="fa fa-google-plus"></i>
								</span>
							</a>
							<a href="#">
								<span class="social-icon">
									<i class="fa fa-youtube"></i>
								</span>
							</a>
							<a href="#">
								<span class="social-icon">
									<i class="fa fa-linkedin"></i>
								</span>
							</a>
							<a href="#">
								<span class="social-icon">
									<i class="fa fa-pinterest-p"></i>
								</span>
							</a>
							<a href="#">
								<span class="social-icon">
									<i class="fa fa-rss"></i>
								</span>
							</a>
							<a href="#">
								<span class="social-icon">
									<i class="fa fa-github"></i>
								</span>
							</a>
							<a href="#">
								<span class="social-icon">
									<i class="fa fa-reddit-alien"></i>
								</span>
							</a>
						</li>
					</ul>
				</div>

			</div>
		</div>
	</div>

	<header class="header-navigation d-none d-lg-block">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xs-12 col-sm-3 col-md-3">
					<!-- Logo -->
					<div class="logo">
						<a href="index.html">
							<img src="images/logos/logo.png" alt=""> <!-- Replace Logo Here -->
						</a>
					</div>
					<!-- End Logo -->
				</div>
				<div class="col-xs-12 col-sm-9 col-md-9">
					<div class="top-ad-banner float-right">
						<a href="#">
							<img src="images/news/ad-pro.png" class="img-fluid" alt="banner-ads">
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="main-navbar clearfix bg-dark ">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav class="navbar navbar-expand-lg site-main-nav navigation">
						<a class="navbar-brand d-lg-none" href="index.html">
							<img src="images/logos/footer-logo.png" alt="">
						</a>

						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="fa fa-bars"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">

								<li class="nav-item">
									<a class="nav-link" href="<?= base_url() ?>" role="button" aria-haspopup="true" aria-expanded="false">
										Home
									</a>
								</li>
								<?php foreach ($kategori as $kate) { ?>
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>" role="button" aria-haspopup="true" aria-expanded="false">
											<?= $kate['nama_kategori'] ?>
										</a>
									</li>
								<?php } ?>
							</ul>
							<div class="nav-search ml-auto d-none d-lg-block">
								<span id="search">
									<i class="fa fa-search"></i>
								</span>
							</div>
						</div>
					</nav>

				</div>
			</div>
		</div>
		<form class="site-search" method="get">
			<input type="text" id="searchInput" name="site_search" placeholder="Enter Keyword Here..." autofocus="">
			<div class="search-close">
				<span class="close-search">
					<i class="fa fa-times"></i>
				</span>
			</div>
		</form>
	</div>

	<div class="py-30"></div>

	<section class="featured-posts">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-6 col-xs-12 col-lg-4">
					<div class="featured-slider mr-md-3 mr-lg-3">
						<div class="item" style="background-image:url(images/news/img-1.jpg)">
							<div class="post-content">
								<a href="#" class="post-cat bg-primary">Entertainment</a>
								<h2 class="slider-post-title">
									<a href="single-post.html">Here's How To Get Free Pizza On</a>
								</h2>
								<div class="post-meta mt-2">
									<span class="posted-time"><i class="fa fa-clock-o mr-2 text-danger"></i>19 hours ago</span>
									<span class="post-author">
										by
										<a href="author.html">Rodinho Summon</a>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</section>


	<section class="block-wrapper">
		<div class="container">
			<div class="row">
				<?php foreach ($kategori as $kt) { ?>
					<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
						<div class="news-style-one">
							<h3 class="news-title">
								<span><?= $kt['nama_kategori'] ?></span>
							</h3>
							<div class="news-style-one-slide">
								<?php
								$this->db->from('konten')->where('id_kategori', $kt['id_kategori']);
								$this->db->limit(4);
								$konten = $this->db->get()->result_array();
								?>
								<?php foreach ($konten as $kk) { ?>
								<div class="item">
									<div class="post-block-wrapper clearfix  mb-5">
										<div class="post-thumbnail">
											<a href="single-post.htm">
												<img class="img-fluid" src="<?= base_url('assets/upload/konten/' . $kk['foto']) ?>" alt="post-thumbnail" />
											</a>
										</div>
										<div class="post-content">
											<h2 class="post-title">
												<a href="single-post.html">PS4 Games Sale: All The PSN Deals</a>
											</h2>
											<div class="post-meta mb-2">
												<span class="posted-time"><i class="fa fa-clock-o mr-2"></i>5 hours ago</span>
												<span class="post-author">
													by
													<a href="author.html">Tarnak Sunder</a>
												</span>
											</div>
											<p>Suscipit beatae facilis doloribus aliquam sed expedita accusantium itaque assumenda laborum facere aliquid Reiciendis.</p>
										</div>
									</div>
								</div>
								<?php } ?>

							</div>
						</div>
						<div class="py-40"></div>


					</div>
				<?php } ?>

				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="sidebar">
						<div class="widget">
							<h3 class="news-title">
								<span>Stay in touch</span>
							</h3>

							<ul class="list-inline social-widget">
								<li class="list-inline-item">
									<a class="social-page youtube" href="#">
										<i class="fa fa-play"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a class="social-page facebook" href="#">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a class="social-page twitter" href="#">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a class="social-page pinterest" href="#">
										<i class="fa fa-pinterest"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a class="social-page linkedin" href="#">
										<i class="fa fa-linkedin"></i>
									</a>
								</li>

								<li class="list-inline-item">
									<a class="social-page youtube" href="#">
										<i class="fa fa-youtube"></i>
									</a>
								</li>

							</ul>

						</div>
						<div class="widget">
							<h3 class="news-title">
								<span>Hot News</span>
							</h3>

							<div class="post-overlay-wrapper">
								<div class="post-thumbnail">
									<img class="img-fluid" src="images/news/news-15.jpg" alt="post-thumbnail" />
								</div>
								<div class="post-content">
									<a class="post-category white" href="post-category-1.html">Fashion</a>
									<h2 class="post-title">
										<a href="single-post.html">First Look At Self-Portrait's Autumn Collection...</a>
									</h2>
									<div class="post-meta white">
										<span class="posted-time"><i class="fa fa-clock-o mr-1"></i>17 jun,2019</span>
										<span> by </span>
										<span class="post-author">
											<a href="author.html">Jammy Anderson</a>
										</span>
									</div>
								</div>
							</div>
							<div class="post-list-block">
								<div class="post-block-wrapper post-float ">
									<div class="post-thumbnail">
										<a href="single-post.html">
											<img class="img-fluid" src="images/news/news-03.jpg" alt="post-thumbnail" />
										</a>
									</div>
									<div class="post-content">
										<h2 class="post-title title-sm">
											<a href="single-post.html">Apple HomePod review: locked in</a>
										</h2>
										<div class="post-meta">
											<span class="posted-time"><i class="fa fa-clock-o mr-1"></i>2 hours ago</span>
										</div>
									</div>
								</div>
								<div class="post-block-wrapper post-float">
									<div class="post-thumbnail">
										<a href="single-post.html">
											<img class="img-fluid" src="images/news/news-05.jpg" alt="post-thumbnail" />
										</a>
									</div>
									<div class="post-content">
										<h2 class="post-title title-sm">
											<a href="single-post.html">Intel’s new smart glasses actually look good</a>
										</h2>
										<div class="post-meta">
											<span class="posted-time"><i class="fa fa-clock-o mr-1"></i> 15 March , 2019</span>
										</div>
									</div>
								</div>
								<div class="post-block-wrapper post-float">
									<div class="post-thumbnail">
										<a href="single-post.html">
											<img class="img-fluid" src="images/news/news-11.jpg" alt="post-thumbnail" />
										</a>
									</div>

									<div class="post-content">
										<h2 class="post-title title-sm">
											<a href="single-post.html">Free Two-Hour Delivery From Whole Foods</a>
										</h2>
										<div class="post-meta">
											<span class="posted-time"><i class="fa fa-clock-o mr-1"></i> 5 hours ago</span>
										</div>
									</div>
								</div>
								<div class="post-block-wrapper post-float">
									<div class="post-thumbnail">
										<a href="single-post.html">
											<img class="img-fluid" src="images/news/news-06.jpg" alt="post-thumbnail" />
										</a>
									</div>

									<div class="post-content">
										<h2 class="post-title title-sm">
											<a href="single-post.html">Here's How To Get Free Pizza On</a>
										</h2>
										<div class="post-meta">
											<span class="posted-time"><i class="fa fa-clock-o mr-1"></i> 17 June, 2019</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="widget mb-0">
							<h3 class="news-title">
								<span>Beauty Blog</span>
							</h3>
							<div class="post-slide">
								<div class="item">
									<div class="post-overlay-wrapper clearfix">
										<div class="post-thumbnail">
											<a href="single-post.html">
												<img class="img-fluid" src="images/news/news-16.jpg" alt="post-thumbnail" />
											</a>
										</div>
										<div class="post-content">
											<a class="post-category white" href="post-category-2.html">Hair</a>
											<h2 class="post-title">
												<a href="single-post.html">On Beauty: Style and Fashion Blogger...</a>
											</h2>
											<div class="post-meta white">
												<span class="posted-time">4 hours ago</span>
												<span> by </span>
												<span class="post-author">
													<a href="author.html">Jammy Anderson</a>
												</span>
											</div>
										</div>
									</div>

									<div class="post-overlay-wrapper clearfix mt-3">
										<div class="post-thumbnail">
											<a href="single-post.html">
												<img class="img-fluid" src="images/news/news-18.jpg" alt="post-thumbnail" />
											</a>
										</div>
										<div class="post-content">
											<a class="post-category white" href="post-category-2.html">Eyes</a>
											<h2 class="post-title">
												<a href="single-post.html">The Best Eye Makeup Tutorials fo...</a>
											</h2>
											<div class="post-meta white">
												<span class="posted-time">5 hours ago</span>
												<span> by </span>
												<span class="post-author">
													<a href="author.html">Roberto Carlous</a>
												</span>
											</div>
										</div>
									</div>
								</div>

								<div class="item ">
									<div class="post-overlay-wrapper clearfix">
										<div class="post-thumbnail">
											<a href="single-post.html">
												<img class="img-fluid" src="images/news/news-17.jpg" alt="post-thumbnail" />
											</a>
										</div>

										<div class="post-content">
											<a class="post-category white" href="post-category-2.html">Nail</a>
											<h2 class="post-title">
												<a href="single-post.html">5 Best Essie Polishes for Winter...</a>
											</h2>
											<div class="post-meta white">
												<span class="posted-time">10 hours ago</span>
												<span> by </span>
												<span class="post-author">
													<a href="author.html">Jamalick Jack</a>
												</span>
											</div>
										</div>
									</div>
									<div class="post-overlay-wrapper mt-3 clearfix">
										<div class="post-thumbnail">
											<a href="single-post.html">
												<img class="img-fluid" src="images/news/news-19.jpg" alt="post-thumbnail" />
											</a>
										</div>
										<div class="post-content">
											<a class="post-category white" href="post-category-2.html">Lips</a>
											<h2 class="post-title">
												<a href="single-post.html">This Red Hot Metallic Lip Tutori...</a>
											</h2>
											<div class="post-meta white">
												<span class="posted-time">5 hours ago</span>
												<span> by </span>
												<span class="post-author">
													<a href="author.html">Jerin Khan</a>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="news-style-four bg-light section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="block">
						<h3 class="news-title">
							<span>Tour</span>
						</h3>
						<div class="post-overlay-wrapper clearfix">
							<div class="post-thumbnail">
								<img class="img-fluid" src="images/news/news-13.jpg" alt="post-thumbnail" />
							</div>

							<div class="post-content">
								<h2 class="post-title ">
									<a href="single-post.html">An Asteroid Is Passing Earth Today: Here's How to</a>
								</h2>
								<div class="post-meta white">
									<span class="posted-time">2 hours ago</span>
									<span class="post-author">by
										<a href="author.html">Rock Madveen</a>
									</span>
									<span class="pull-right">
										<i class="fa fa-comments"></i>
										<a href="single-post.html#comments">05</a>
									</span>
								</div>
							</div>
						</div>

						<div class="post-list-block">
							<div class="post-block-wrapper post-float clearfix">
								<div class="post-thumbnail">
									<img class="img-fluid" src="images/news/news-11.jpg" alt="post-thumbnail" />

								</div>

								<div class="post-content">
									<h2 class="post-title title-sm">
										<a href="single-post.html">Snow and Freezing Rain in Paris Forces the</a>
									</h2>
									<div class="post-meta">
										<span class="posted-time">3 hours ago</span>
									</div>
								</div>
							</div>

							<div class="post-block-wrapper post-float clearfix">
								<div class="post-thumbnail">
									<img class="img-fluid" src="images/news/news-04.jpg" alt="post-thumbnail" />
								</div>
								<div class="post-content">
									<h2 class="post-title title-sm">
										<a href="single-post.html">Your social media apps want to help.</a>
									</h2>
									<div class="post-meta">
										<span class="posted-time">8 hours ago</span>
									</div>
								</div>
							</div>

							<div class="post-block-wrapper post-float clearfix">
								<div class="post-thumbnail">
									<img class="img-fluid" src="images/news/news-12.jpg" alt="post-thumbnail" />
								</div>

								<div class="post-content">
									<h2 class="post-title title-sm">
										<a href="single-post.html">Today Is the Day Most People Quit Their New Year's</a>
									</h2>
									<div class="post-meta">
										<span class="posted-time">9 hours ago</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="block">
						<h3 class="news-title">
							<span>Game</span>
						</h3>
						<div class="post-overlay-wrapper clearfix">
							<div class="post-thumbnail">
								<img class="img-fluid" src="images/news/news-08.jpg" alt="post-thumbnail" />
							</div>

							<div class="post-content">
								<h2 class="post-title">
									<a href="single-post.html">Call Of Duty: Black Ops 4 Releasing</a>
								</h2>
								<div class="post-meta white">
									<span class="posted-time">3 hours ago</span>
									<span class="post-author">by
										<a href="author.html">Arya Stark</a>
									</span>
									<span class="pull-right">
										<i class="fa fa-comments"></i>
										<a href="single-post.html#comments">10</a>
									</span>
								</div>
							</div>
						</div>

						<div class="post-list-block">
							<div class="post-block-wrapper post-float clearfix">
								<div class="post-thumbnail">
									<img class="img-fluid" src="images/news/news-03.jpg" alt="post-thumbnail" />
								</div>

								<div class="post-content">
									<h2 class="post-title title-sm">
										<a href="single-post.html">Apple HomePod review: locked in</a>
									</h2>
									<div class="post-meta">
										<span class="posted-time">4 hours ago</span>
									</div>
								</div>
							</div>

							<div class="post-block-wrapper post-float clearfix">
								<div class="post-thumbnail">
									<img class="img-fluid" src="images/news/news-01.jpg" alt="post-thumbnail" />
								</div>

								<div class="post-content">
									<h2 class="post-title title-sm">
										<a href="single-post.html">Ex-Googler warns coding bootcamps are lacking</a>
									</h2>
									<div class="post-meta">
										<span class="posted-time">5 hours ago</span>
									</div>
								</div>
							</div>

							<div class="post-block-wrapper post-float clearfix">
								<div class="post-thumbnail">
									<img class="img-fluid" src="images/news/news-06.jpg" alt="post-thumbnail" />
								</div>

								<div class="post-content">
									<h2 class="post-title title-sm">
										<a href="single-post.html">PS4 Games Sale: All The PSN Deals</a>
									</h2>
									<div class="post-meta">
										<span class="posted-time">12 hours ago</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="block">
						<h3 class="news-title">
							<span>Health</span>
						</h3>
						<div class="post-overlay-wrapper clearfix">
							<div class="post-thumbnail">
								<img class="img-fluid" src="images/news/news-05.jpg" alt="post-thumbnail" />
							</div>

							<div class="post-content">
								<h2 class="post-title">
									<a href="single-post.html">Here's How To Get Free Pizza On</a>
								</h2>
								<div class="post-meta white">
									<span class="posted-time">an hour ago</span>
									<span class="post-author">by
										<a href="author.html">Mad King</a>
									</span>
									<span class="pull-right">
										<i class="fa fa-comments"></i>
										<a href="single-post.html#comments">30</a>
									</span>
								</div>
							</div>
						</div>

						<div class="post-list-block">
							<div class="post-block-wrapper post-float clearfix">
								<div class="post-thumbnail">
									<img class="img-fluid" src="images/news/news-10.jpg" alt="post-thumbnail" />
								</div>

								<div class="post-content">
									<h2 class="post-title title-sm">
										<a href="single-post.html">Free Two-Hour Delivery From Whole Foods</a>
									</h2>
									<div class="post-meta">
										<span class="posted-time">2 hours ago</span>
									</div>
								</div>
							</div>

							<div class="post-block-wrapper post-float clearfix">
								<div class="post-thumbnail">
									<img class="img-fluid" src="images/news/news-07.jpg" alt="post-thumbnail" />
								</div>

								<div class="post-content">
									<h2 class="post-title title-sm">
										<a href="single-post.html">Your social media apps want to help</a>
									</h2>
									<div class="post-meta">
										<span class="posted-time">4 hours ago</span>
									</div>
								</div>
							</div>

							<div class="post-block-wrapper post-float clearfix">
								<div class="post-thumbnail">
									<img class="img-fluid" src="images/news/news-14.jpg" alt="post-thumbnail" />
								</div>

								<div class="post-content">
									<h2 class="post-title title-sm">
										<a href="single-post.html">Snow and Freezing Rain in Paris Forces the</a>
									</h2>
									<div class="post-meta">
										<span class="posted-time">9 hours ago</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
					<div class="all-news-block">
						<h3 class="news-title">
							<span>Latest Articles</span>
						</h3>
						<div class="all-news">
							<div class="row">
								<div class="col-lg-6 col-md-6">
									<div class="post-block-wrapper post-float-half clearfix">
										<div class="post-thumbnail">
											<a href="single-post.html">
												<img class="img-fluid" src="images/news/news-01.jpg" alt="post-thumbnail" />
											</a>
										</div>
										<div class="post-content">
											<a class="post-category" href="post-category-2.html">Google</a>
											<h2 class="post-title mt-3">
												<a href="single-post.html">Ex-Googler warns coding bootcamps are lacking</a>
											</h2>
											<div class="post-meta">
												<span class="posted-time">an hour ago</span>
												<span class="post-author">by
													<a href="author.html">John Snow</a>
												</span>
											</div>
											<p>
												Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel eaque, aliquid accusamus
												soluta!...
											</p>
										</div>
									</div>
								</div>

								<div class="col-lg-6 col-md-6">
									<div class="post-block-wrapper post-float-half clearfix">
										<div class="post-thumbnail">
											<a href="single-post.html">
												<img class="img-fluid" src="images/news/news-12.jpg" alt="post-thumbnail" />
											</a>
										</div>
										<div class="post-content">
											<a class="post-category" href="post-category-2.html">Health</a>
											<h2 class="post-title mt-3">
												<a href="single-post.html">Today Is the Day Most People Quit Their New Year's Party</a>
											</h2>
											<div class="post-meta">
												<span class="posted-time">4 hours ago</span>
												<span class="post-author">by
													<a href="author.html">Rimmon Ronnick</a>
												</span>
											</div>
											<p>
												Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis blanditiis hic
												cumque excepturi...
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<nav aria-label="pagination-wrapper" class="pagination-wrapper">
						<ul class="pagination justify-content-center">
							<li class="page-item active">
								<a class="page-link" href="#" aria-label="Previous">
									<span aria-hidden="true"><i class="fa fa-angle-double-left mr-2"></i></span>
									<span class="">Previous</span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
									<span class="">Next</span>
									<span aria-hidden="true"><i class="fa fa-angle-double-right ml-2"></i></span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
					<div class="sidebar sidebar-right">
						<div class="widget">
							<h3 class="news-title">
								<span>Top Authors</span>
							</h3>
							<div class="post-list-block">
								<div class=" review-post-list">
									<div class="top-author">
										<img src="images/news/author-01.jpg" alt="author-thumb">
										<div class="info">
											<h4 class="name"><a href="author.html">Jack Rockshow</a></h4>
											<ul class="list-unstyled">
												<li>37 Posts</li>
											</ul>
										</div>
									</div>
									<div class="top-author">
										<img src="images/news/author-02.jpg" alt="author-thumb">
										<div class="info">
											<h4 class="name"><a href="author.html">Lint Handson</a></h4>
											<ul class="list-unstyled">
												<li>28 Posts</li>
											</ul>
										</div>
									</div>
									<div class="top-author">
										<img src="images/news/author-03.jpg" alt="author-thumb">
										<div class="info">
											<h4 class="name"><a href="author.html">Ronny Robeen</a></h4>
											<ul class="list-unstyled">
												<li>19 Posts</li>
											</ul>
										</div>
									</div>
									<div class="top-author">
										<img src="images/news/author-02.jpg" alt="author-thumb">
										<div class="info">
											<h4 class="name"><a href="author.html">Handson</a></h4>
											<ul class="list-unstyled">
												<li>18 Posts</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="py-40"></div>

	<footer class="footer footer-main ">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 col-sm-12 col-lg-6 text-center">
					<a href="index.html"><img src="images/logos/footer-logo.png" alt="" class="img-fluid"></a>
					<p class="mt-4">We perfectly balances the simplicity of a clean, eye-catching blog with the flexibility to create unique page layouts.</p>

					<ul class="list-inline footer-social">
						<li class="li list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="fa fa-facebook"></i></a></li>
						<li class="li list-inline-item"><a href="https://twitter.com/themefisher"><i class="fa fa-twitter"></i></a></li>
						<li class="li list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li class="li list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
						<li class="li list-inline-item"><a href="#"><i class="fa fa-rss"></i></a></li>
						<li class="li list-inline-item"><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>

					<div class="copyright-text text-center">
						<p class="mb-0">© All Copyright Reserved to - <a href="https://themefisher.com/" target="_blank">Themefisher</a></p>
					</div>
				</div>

				<div class="scroll-to-top">
					<button class="btn btn-primary" title="Back to Top">
						<i class="fa fa-angle-up"></i>
					</button>
				</div>
			</div>
		</div>
	</footer>


	<!-- THEME JAVASCRIPT FILES
================================================== -->
	<!-- initialize jQuery Library -->
	<script src="<?= base_url('assets/newsbit/theme/') ?>plugins/jquery/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script src="<?= base_url('assets/newsbit/theme/') ?>plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- Slick Slider -->
	<script src="<?= base_url('assets/newsbit/theme/') ?>plugins/slick-carousel/slick.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
	<script src="<?= base_url('assets/newsbit/theme/') ?>plugins/google-map/gmap.js"></script>
	<!-- main js -->
	<script src="<?= base_url('assets/newsbit/theme/') ?>js/custom.js"></script>

</body>

</html>