		<!-- Header -->
		<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-7 col-lg-2">
						<div class="logo">
							<a href="{{ url('/') }}">
								<img src="{{ asset('images/logo/logo.jpg') }}" alt="logo images">
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
                                <li class="drop with--one--item"><a href="/">Home</a></li>
                                <li class="drop"><a href="{{ route('articles.index')}}">Articles</a>
									<div class="megamenu dropdown">
										<ul class="item item01">
                                            <li><a href="{{ route('articles.index')}}">All Articles</a></li>
                                            @if(!Auth::guest())
											<li><a href="{{ route('articles.create')}}">Create new article</a></li>
                                            @endif
                                        </ul>
									</div>
								</li>
								<li class="drop"><a href="shop-grid">Catalogue</a>
									<div class="megamenu mega03">
										<ul class="item item03">
											<li class="title">Categories</li>
											<li><a href="shop-grid">Biography </a></li>
											<li><a href="shop-grid">Business </a></li>
											<li><a href="shop-grid">Cookbooks </a></li>
											<li><a href="shop-grid">Health & Fitness </a></li>
											<li><a href="shop-grid">History </a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Customer Favourite</li>
											<li><a href="shop-grid">Mystery</a></li>
											<li><a href="shop-grid">Religion & Inspiration</a></li>
											<li><a href="shop-grid">Romance</a></li>
											<li><a href="shop-grid">Fiction/Fantasy</a></li>
											<li><a href="shop-grid">Sleeveless</a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Collections</li>
											<li><a href="shop-grid">Science </a></li>
											<li><a href="shop-grid">Fiction/Fantasy</a></li>
											<li><a href="shop-grid">Self-Improvemen</a></li>
											<li><a href="shop-grid">Home & Garden</a></li>
											<li><a href="shop-grid">Humor Books</a></li>
										</ul>
									</div>
								</li>
								{{-- <li class="drop"><a href="#">Layouts</a>
									<div class="megamenu dropdown">
										<ul class="item item01">
											<li><a href="about">About Page</a></li>
											<li class="label2"><a href="portfolio">Portfolio</a>
												<ul>
													<li><a href="portfolio">Portfolio</a></li>
													<li><a href="portfolio-details">Portfolio Details</a></li>
												</ul>
											</li>
											<li><a href={{ url('/my-account') }}>My Account</a></li>
											<li><a href="cart">Cart Page</a></li>
											<li><a href="checkout">Checkout Page</a></li>
											<li><a href="wishlist">Wishlist Page</a></li>
											<li><a href="error404">404 Page</a></li>
											<li><a href="faq">Faq Page</a></li>
											<li><a href="team">Team Page</a></li>
										</ul>
									</div>
								</li> --}}
                                <li><a href="contact">Contact</a></li>
                                @if (!Auth::guest())
                                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                @endif
							</ul>
						</nav>
					</div>
					<div class="col-md-8 col-sm-8 col-5 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
							<li class="shop_search"><a class="search__active" href="#"></a></li>
							<li class="wishlist"><a href="#"></a></li>
							<li class="shopcart"><a class="cartbox_active" href="#"><span class="product_qun">3</span></a>
								<!-- Start Shopping Cart -->
								<div class="block-minicart minicart__active">
									<div class="minicart-content-wrapper">
										<div class="micart__close">
											<span>close</span>
										</div>
										<div class="items-total d-flex justify-content-between">
											<span>3 items</span>
											<span>Cart Subtotal</span>
										</div>
										<div class="total_amount text-right">
											<span>$66.00</span>
										</div>
										<div class="mini_action checkout">
											<a class="checkout__btn" href="cart">Go to Checkout</a>
										</div>
										<div class="single__items">
											<div class="miniproduct">
												<div class="item01 d-flex">
													<div class="thumb">
														<a href="product-details"><img src="{{ asset('images/product/sm-img/1.jpg') }}" alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details">Voyage Yoga Bag</a></h6>
														<span class="prize">$30.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 01</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="item01 d-flex mt--20">
													<div class="thumb">
														<a href="product-details"><img src="{{ asset('images/product/sm-img/3.jpg') }}" alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details">Impulse Duffle</a></h6>
														<span class="prize">$40.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 03</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="item01 d-flex mt--20">
													<div class="thumb">
														<a href="product-details"><img src="images/product/sm-img/2.jpg" alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details">Compete Track Tote</a></h6>
														<span class="prize">$40.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 03</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="mini_action cart">
											<a class="cart__btn" href="cart">View and edit cart</a>
										</div>
									</div>
								</div>
								<!-- End Shopping Cart -->
							</li>
							<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
								<div class="searchbar__content setting__block">
									<div class="content-inner">
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Currency</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">USD - US Dollar</span>
													<ul class="switcher-dropdown">
														<li>GBP - British Pound Sterling</li>
														<li>EUR - Euro</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Language</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">English01</span>
													<ul class="switcher-dropdown">
														<li>English02</li>
														<li>English03</li>
														<li>English04</li>
														<li>English05</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Select Store</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">Fashion Store</span>
													<ul class="switcher-dropdown">
														<li>Furniture</li>
														<li>Shoes</li>
														<li>Speaker Store</li>
														<li>Furniture</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>My Account</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														<span><a href="#">Compare Product</a></span>
														<span><a href="#">My Account</a></span>
														<span><a href="#">My Wishlist</a></span>

                                                        {{-- Auth logic --}}
                                                        @guest
                                                            <span><a href="{{ route('login') }}">{{ __('Login') }}</a></span>
                                                            @if (Route::has('register'))
                                                                    <span><a href="{{ route('register') }}">{{ __('Create an account') }}</a></span>
                                                            @endif
                                                        @else
                                                    <span><a href="{{ route('dashboard')}}">{{ Auth::user()->name }}</span></a>
                                                            <span><a href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a></span>

                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                        @endguest

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<!-- Start Mobile Menu -->
				<div class="row d-none">
					<div class="col-lg-12 d-none">
						<nav class="mobilemenu__nav">
							<ul class="meninmenu">
								<li><a href="/">Home</a></li>
								<li><a href="#">Pages</a>
									<ul>
										<li><a href="about">About Page</a></li>
										<li><a href="portfolio">Portfolio</a>
											<ul>
												<li><a href="portfolio">Portfolio</a></li>
												<li><a href="portfolio-details">Portfolio Details</a></li>
											</ul>
										</li>
										<li><a href="my-account">My Account</a></li>
										<li><a href="cart">Cart Page</a></li>
										<li><a href="checkout">Checkout Page</a></li>
										<li><a href="wishlist">Wishlist Page</a></li>
										<li><a href="error404">404 Page</a></li>
										<li><a href="faq">Faq Page</a></li>
										<li><a href="team">Team Page</a></li>
									</ul>
								</li>
								<li><a href="shop-grid">Shop</a>
									<ul>
										<li><a href="shop-grid">Shop Grid</a></li>
										<li><a href="single-product">Single Product</a></li>
									</ul>
								</li>
								<li><a href="blog">Blog</a>
									<ul>
										<li><a href="blog">Blog Page</a></li>
										<li><a href="blog-details">Blog Details</a></li>
									</ul>
								</li>
								<li><a href="contact">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- End Mobile Menu -->
	            <div class="mobile-menu d-block d-lg-none">
	            </div>
	            <!-- Mobile Menu -->
			</div>
		</header>
		<!-- //Header -->
		<!-- Start Search Popup -->
		<div class="box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->
