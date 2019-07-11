﻿@extends('layouts.app')

@section('content')
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Portfolio</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="/">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Portfolio</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
		<!-- Start Portfolio Area -->
		<section class="wn__portfolio__area gallery__masonry__activation bg--white mt--40 pb--100">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="gallery__menu">
                            <button data-filter="*" class="is-checked">Filter - All</button>
                            <button data-filter=".cat--1">Company News</button>
                            <button data-filter=".cat--2">Computers</button>
                            <button data-filter=".cat--3">General News</button>
                            <button data-filter=".cat--4">Hipster Content</button>
                            <button data-filter=".cat--5">Just Food</button>
                      	</div>
					</div>
				</div>
				<div class="row masonry__wrap">
					<!-- Start Single Portfolio -->
					<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--1">
						<div class="portfolio">
							<div class="thumb">
								<a href="portfolio-details">
									<img src="images/portfolio/md-img/1.jpg" alt="portfolio images">
								</a>
								<div class="search">
									<a href="images/portfolio/big-2/1.jpg" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
								</div>
								<div class="link">
									<a href="portfolio-details"><i class="fa fa-link"></i></a>
								</div>
							</div>
							<div class="content">
								<h6><a href="portfolio-details">Coffee & Cookie Time</a></h6>
								<p>road theme</p>
							</div>
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--2">
						<div class="portfolio">
							<div class="thumb">
								<a href="portfolio-details">
									<img src="images/portfolio/md-img/2.jpg" alt="portfolio images">
								</a>
								<div class="search">
									<a href="images/portfolio/big-2/2.jpg" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
								</div>
								<div class="link">
									<a href="portfolio-details"><i class="fa fa-link"></i></a>
								</div>
							</div>
							<div class="content">
								<h6><a href="portfolio-details">Coffee & Cookie Time</a></h6>
								<p>road theme</p>
							</div>
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--3">
						<div class="portfolio">
							<div class="thumb">
								<a href="portfolio-details">
									<img src="images/portfolio/md-img/3.jpg" alt="portfolio images">
								</a>
								<div class="search">
									<a href="images/portfolio/big-2/3.jpg" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
								</div>
								<div class="link">
									<a href="portfolio-details"><i class="fa fa-link"></i></a>
								</div>
							</div>
							<div class="content">
								<h6><a href="portfolio-details">Coffee & Cookie Time</a></h6>
								<p>road theme</p>
							</div>
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--4">
						<div class="portfolio">
							<div class="thumb">
								<a href="portfolio-details">
									<img src="images/portfolio/md-img/4.jpg" alt="portfolio images">
								</a>
								<div class="search">
									<a href="images/portfolio/big-2/1.jpg" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
								</div>
								<div class="link">
									<a href="portfolio-details"><i class="fa fa-link"></i></a>
								</div>
							</div>
							<div class="content">
								<h6><a href="portfolio-details">Coffee & Cookie Time</a></h6>
								<p>road theme</p>
							</div>
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--5">
						<div class="portfolio">
							<div class="thumb">
								<a href="portfolio-details">
									<img src="images/portfolio/md-img/5.jpg" alt="portfolio images">
								</a>
								<div class="search">
									<a href="images/portfolio/big-2/1.jpg" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
								</div>
								<div class="link">
									<a href="portfolio-details"><i class="fa fa-link"></i></a>
								</div>
							</div>
							<div class="content">
								<h6><a href="portfolio-details">Coffee & Cookie Time</a></h6>
								<p>road theme</p>
							</div>
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--2">
						<div class="portfolio">
							<div class="thumb">
								<a href="portfolio-details">
									<img src="images/portfolio/md-img/6.jpg" alt="portfolio images">
								</a>
								<div class="search">
									<a href="images/portfolio/big-2/2.jpg" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
								</div>
								<div class="link">
									<a href="portfolio-details"><i class="fa fa-link"></i></a>
								</div>
							</div>
							<div class="content">
								<h6><a href="portfolio-details">Coffee & Cookie Time</a></h6>
								<p>road theme</p>
							</div>
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--3">
						<div class="portfolio">
							<div class="thumb">
								<a href="portfolio-details">
									<img src="images/portfolio/md-img/7.jpg" alt="portfolio images">
								</a>
								<div class="search">
									<a href="images/portfolio/big-2/1.jpg" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
								</div>
								<div class="link">
									<a href="portfolio-details"><i class="fa fa-link"></i></a>
								</div>
							</div>
							<div class="content">
								<h6><a href="portfolio-details">Coffee & Cookie Time</a></h6>
								<p>road theme</p>
							</div>
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--4">
						<div class="portfolio">
							<div class="thumb">
								<a href="portfolio-details">
									<img src="images/portfolio/md-img/8.jpg" alt="portfolio images">
								</a>
								<div class="search">
									<a href="images/portfolio/big-2/3.jpg" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
								</div>
								<div class="link">
									<a href="portfolio-details"><i class="fa fa-link"></i></a>
								</div>
							</div>
							<div class="content">
								<h6><a href="portfolio-details">Coffee & Cookie Time</a></h6>
								<p>road theme</p>
							</div>
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--5">
						<div class="portfolio">
							<div class="thumb">
								<a href="portfolio-details">
									<img src="images/portfolio/md-img/9.jpg" alt="portfolio images">
								</a>
								<div class="search">
									<a href="images/portfolio/big-2/2.jpg" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
								</div>
								<div class="link">
									<a href="portfolio-details"><i class="fa fa-link"></i></a>
								</div>
							</div>
							<div class="content">
								<h6><a href="portfolio-details">Coffee & Cookie Time</a></h6>
								<p>road theme</p>
							</div>
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--2">
						<div class="portfolio">
							<div class="thumb">
								<a href="portfolio-details">
									<img src="images/portfolio/md-img/10.jpg" alt="portfolio images">
								</a>
								<div class="search">
									<a href="images/portfolio/big-2/1.jpg" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
								</div>
								<div class="link">
									<a href="portfolio-details"><i class="fa fa-link"></i></a>
								</div>
							</div>
							<div class="content">
								<h6><a href="portfolio-details">Coffee & Cookie Time</a></h6>
								<p>road theme</p>
							</div>
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--3">
						<div class="portfolio">
							<div class="thumb">
								<a href="portfolio-details">
									<img src="images/portfolio/md-img/5.jpg" alt="portfolio images">
								</a>
								<div class="search">
									<a href="images/portfolio/big-2/1.jpg" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
								</div>
								<div class="link">
									<a href="portfolio-details"><i class="fa fa-link"></i></a>
								</div>
							</div>
							<div class="content">
								<h6><a href="portfolio-details">Coffee & Cookie Time</a></h6>
								<p>road theme</p>
							</div>
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--4">
						<div class="portfolio">
							<div class="thumb">
								<a href="portfolio-details">
									<img src="images/portfolio/md-img/7.jpg" alt="portfolio images">
								</a>
								<div class="search">
									<a href="images/portfolio/big-2/2.jpg" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
								</div>
								<div class="link">
									<a href="portfolio-details"><i class="fa fa-link"></i></a>
								</div>
							</div>
							<div class="content">
								<h6><a href="portfolio-details">Coffee & Cookie Time</a></h6>
								<p>road theme</p>
							</div>
						</div>
					</div>
					<!-- End Single Portfolio -->
				</div>
			</div>
		</section>
		<!-- End Portfolio Area -->
@endsection