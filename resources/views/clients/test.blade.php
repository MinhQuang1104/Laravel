
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Porto - Bootstrap eCommerce Template</title>

	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Porto - Bootstrap eCommerce Template">
	<meta name="author" content="SW-THEMES">

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.png">


	<script>
		WebFontConfig = {
			google: { families: [ 'Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700', 'Shadows+Into+Light:400' ] }
		};
		( function ( d ) {
			var wf = d.createElement( 'script' ), s = d.scripts[ 0 ];
			wf.src = 'assets/js/webfont.js';
			wf.async = true;
			s.parentNode.insertBefore( wf, s );
		} )( document );
	</script>

	<!-- Plugins CSS File -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Main CSS File -->
	<link rel="stylesheet" href="assets/css/style.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
</head>

<body>
	<div class="page-wrapper">
		<div class="top-notice bg-primary text-white">
			<div class="container text-center">
				<h5 class="d-inline-block">Get Up to <b>40% OFF</b> New-Season Styles</h5>
				<a href="category.html" class="category">MEN</a>
				<a href="category.html" class="category ml-2 mr-3">WOMEN</a>
				<small>* Limited time only.</small>
				<button title="Close (Esc)" type="button" class="mfp-close">×</button>
			</div><!-- End .container -->
		</div><!-- End .top-notice -->

		<header class="header">
			<div class="header-top">
				<div class="container">
					<div class="header-left d-none d-sm-block">
						<p class="top-message text-uppercase">FREE Returns. Standard Shipping Orders $99+</p>
					</div><!-- End .header-left -->

					<div class="header-right header-dropdowns ml-0 ml-sm-auto w-sm-100">
						<div class="header-dropdown dropdown-expanded d-none d-lg-block">
							<a href="#">Links</a>
							<div class="header-menu">
								<ul>
									<li><a href="dashboard.html">My Account</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="wishlist.html">My Wishlist</a></li>
									<li><a href="cart.html">Cart</a></li>
									<li><a href="login.html" class="login-link">Log In</a></li>
								</ul>
							</div><!-- End .header-menu -->
						</div><!-- End .header-dropown -->

						<span class="separator"></span>

						<div class="header-dropdown">
							<a href="#"><i class="flag-us flag"></i>ENG</a>
							<div class="header-menu">
								<ul>
									<li><a href="#"><i class="flag-us flag mr-2"></i>ENG</a>
									</li>
									<li><a href="#"><i class="flag-fr flag mr-2"></i>FRA</a></li>
								</ul>
							</div><!-- End .header-menu -->
						</div><!-- End .header-dropown -->

						<div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
							<a href="#">USD</a>
							<div class="header-menu">
								<ul>
									<li><a href="#">EUR</a></li>
									<li><a href="#">USD</a></li>
								</ul>
							</div><!-- End .header-menu -->
						</div><!-- End .header-dropown -->

						<span class="separator"></span>

						<div class="social-icons">
							<a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
							<a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
							<a href="#" class="social-icon social-instagram icon-instagram" target="_blank"></a>
						</div><!-- End .social-icons -->
					</div><!-- End .header-right -->
				</div><!-- End .container -->
			</div><!-- End .header-top -->

			<div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
				<div class="container">
					<div class="header-left col-lg-2 w-auto pl-0">
						<button class="mobile-menu-toggler text-primary mr-2" type="button">
							<i class="fas fa-bars"></i>
						</button>
						<a href="demo4.html" class="logo">
							<img src="assets/images/logo.png" width="111" height="44" alt="Porto Logo">
						</a>
					</div><!-- End .header-left -->

					<div class="header-right w-lg-max">
						<div
							class="header-icon header-search header-search-inline header-search-category w-lg-max text-right mt-0">
							<a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
							<form action="#" method="get">
								<div class="header-search-wrapper">
									<input type="search" class="form-control" name="q" id="q" placeholder="Search..."
										required>
									<div class="select-custom">
										<select id="cat" name="cat">
											<option value="">All Categories</option>
											<option value="4">Fashion</option>
											<option value="12">- Women</option>
											<option value="13">- Men</option>
											<option value="66">- Jewellery</option>
											<option value="67">- Kids Fashion</option>
											<option value="5">Electronics</option>
											<option value="21">- Smart TVs</option>
											<option value="22">- Cameras</option>
											<option value="63">- Games</option>
											<option value="7">Home &amp; Garden</option>
											<option value="11">Motors</option>
											<option value="31">- Cars and Trucks</option>
											<option value="32">- Motorcycles &amp; Powersports</option>
											<option value="33">- Parts &amp; Accessories</option>
											<option value="34">- Boats</option>
											<option value="57">- Auto Tools &amp; Supplies</option>
										</select>
									</div><!-- End .select-custom -->
									<button class="btn icon-magnifier p-0" type="submit"></button>
								</div><!-- End .header-search-wrapper -->
							</form>
						</div><!-- End .header-search -->

						<div class="header-contact d-none d-lg-flex pl-4 pr-4">
							<img alt="phone" src="assets/images/phone.png" width="30" height="30" class="pb-1">
							<h6><span>Call us now</span><a href="tel:#" class="text-dark font1">+123 5678 890</a></h6>
						</div>

						<a href="login.html" class="header-icon" title="login"><i class="icon-user-2"></i></a>

						<a href="wishlist.html" class="header-icon" title="wishlist"><i class="icon-wishlist-2"></i></a>

						<div class="dropdown cart-dropdown">
							<a href="#" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
								<i class="minicart-icon"></i>
								<span class="cart-count badge-circle">3</span>
							</a>


							<div class="cart-overlay"></div>

							<div class="dropdown-menu mobile-cart">
								<a href="#" title="Close (Esc)" class="btn-close">×</a>

								<div class="dropdownmenu-wrapper custom-scrollbar">
									<div class="dropdown-cart-header">Shopping Cart</div>
									<!-- End .dropdown-cart-header -->

									<div class="dropdown-cart-products">
										<div class="product">
											<div class="product-details">
												<h4 class="product-title">
													<a href="product.html">Ultimate 3D Bluetooth Speaker</a>
												</h4>

												<span class="cart-product-info">
													<span class="cart-product-qty">1</span>
													× $99.00
												</span>
											</div><!-- End .product-details -->

											<figure class="product-image-container">
												<a href="product.html" class="product-image">
													<img src="assets/images/products/product-1.jpg" alt="product"
														width="80" height="80">
												</a>

												<a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
											</figure>
										</div><!-- End .product -->

										<div class="product">
											<div class="product-details">
												<h4 class="product-title">
													<a href="product.html">Brown Women Casual HandBag</a>
												</h4>

												<span class="cart-product-info">
													<span class="cart-product-qty">1</span>
													× $35.00
												</span>
											</div><!-- End .product-details -->

											<figure class="product-image-container">
												<a href="product.html" class="product-image">
													<img src="assets/images/products/product-2.jpg" alt="product"
														width="80" height="80">
												</a>

												<a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
											</figure>
										</div><!-- End .product -->

										<div class="product">
											<div class="product-details">
												<h4 class="product-title">
													<a href="product.html">Circled Ultimate 3D Speaker</a>
												</h4>

												<span class="cart-product-info">
													<span class="cart-product-qty">1</span>
													× $35.00
												</span>
											</div><!-- End .product-details -->

											<figure class="product-image-container">
												<a href="product.html" class="product-image">
													<img src="assets/images/products/product-3.jpg" alt="product"
														width="80" height="80">
												</a>
												<a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
											</figure>
										</div><!-- End .product -->
									</div><!-- End .cart-product -->

									<div class="dropdown-cart-total">
										<span>SUBTOTAL:</span>

										<span class="cart-total-price float-right">$134.00</span>
									</div><!-- End .dropdown-cart-total -->

									<div class="dropdown-cart-action">
										<a href="cart.html" class="btn btn-gray btn-block view-cart">View
											Cart</a>
										<a href="checkout.html" class="btn btn-dark btn-block">Checkout</a>
									</div><!-- End .dropdown-cart-total -->
								</div><!-- End .dropdownmenu-wrapper -->
							</div><!-- End .dropdown-menu -->
						</div><!-- End .dropdown -->
					</div><!-- End .header-right -->
				</div><!-- End .container -->
			</div><!-- End .header-middle -->

			<div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{'mobile': false}">
				<div class="container">
					<nav class="main-nav w-100">
						<ul class="menu">
							<li>
								<a href="demo4.html">Home</a>
							</li>
							<li>
								<a href="category.html">Categories</a>
								<div class="megamenu megamenu-fixed-width megamenu-3cols">
									<div class="row">
										<div class="col-lg-4">
											<a href="#" class="nolink">VARIATION 1</a>
											<ul class="submenu">
												<li><a href="category.html">Fullwidth Banner</a></li>
												<li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a>
												</li>
												<li><a href="category-banner-boxed-image.html">Boxed Image Banner</a>
												</li>
												<li><a href="category.html">Left Sidebar</a></li>
												<li><a href="category-sidebar-right.html">Right Sidebar</a></li>
												<li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
												<li><a href="category-horizontal-filter1.html">Horizontal Filter1</a>
												</li>
												<li><a href="category-horizontal-filter2.html">Horizontal Filter2</a>
												</li>
											</ul>
										</div>
										<div class="col-lg-4">
											<a href="#" class="nolink">VARIATION 2</a>
											<ul class="submenu">
												<li><a href="category-list.html">List Types</a></li>
												<li><a href="category-infinite-scroll.html">Ajax Infinite Scroll</a>
												</li>
												<li><a href="category.html">3 Columns Products</a></li>
												<li><a href="category-4col.html">4 Columns Products</a></li>
												<li><a href="category-5col.html">5 Columns Products</a></li>
												<li><a href="category-6col.html">6 Columns Products</a></li>
												<li><a href="category-7col.html">7 Columns Products</a></li>
												<li><a href="category-8col.html">8 Columns Products</a></li>
											</ul>
										</div>
										<div class="col-lg-4 p-0">
											<div class="menu-banner">
												<figure>
													<img src="assets/images/menu-banner.jpg" width="192" height="313"
														alt="Menu banner">
												</figure>
												<div class="banner-content">
													<h4>
														<span class="">UP TO</span><br />
														<b class="">50%</b>
														<i>OFF</i>
													</h4>
													<a href="category.html" class="btn btn-sm btn-dark">SHOP NOW</a>
												</div>
											</div>
										</div>
									</div>
								</div><!-- End .megamenu -->
							</li>
							<li>
								<a href="product.html">Products</a>
								<div class="megamenu megamenu-fixed-width">
									<div class="row">
										<div class="col-lg-4">
											<a href="#" class="nolink">PRODUCT PAGES</a>
											<ul class="submenu">
												<li><a href="product.html">SIMPLE PRODUCT</a></li>
												<li><a href="product-variable.html">VARIABLE PRODUCT</a></li>
												<li><a href="product.html">SALE PRODUCT</a></li>
												<li><a href="product.html">FEATURED & ON SALE</a></li>
												<li><a href="product-custom-tab.html">WITH CUSTOM TAB</a></li>
												<li><a href="product-sidebar-left.html">WITH LEFT SIDEBAR</a></li>
												<li><a href="product-sidebar-right.html">WITH RIGHT SIDEBAR</a></li>
												<li><a href="product-addcart-sticky.html">ADD CART STICKY</a></li>
											</ul>
										</div><!-- End .col-lg-4 -->

										<div class="col-lg-4">
											<a href="#" class="nolink">PRODUCT LAYOUTS</a>
											<ul class="submenu">
												<li><a href="product-extended-layout.html">EXTENDED LAYOUT</a></li>
												<li><a href="product-grid-layout.html">GRID IMAGE</a></li>
												<li><a href="product-full-width.html">FULL WIDTH LAYOUT</a></li>
												<li><a href="product-sticky-info.html">STICKY INFO</a></li>
												<li><a href="product-sticky-both.html">LEFT & RIGHT STICKY</a></li>
												<li><a href="product-transparent-image.html">TRANSPARENT IMAGE</a></li>
												<li><a href="product-center-vertical.html">CENTER VERTICAL</a></li>
												<li><a href="#">BUILD YOUR OWN</a></li>
											</ul>
										</div><!-- End .col-lg-4 -->

										<div class="col-lg-4 p-0">
											<div class="menu-banner menu-banner-2">
												<figure>
													<img src="assets/images/menu-banner-1.jpg" width="182" height="317"
														alt="Menu banner" class="product-promo">
												</figure>
												<i>OFF</i>
												<div class="banner-content">
													<h4>
														<span class="">UP TO</span><br />
														<b class="">50%</b>
													</h4>
												</div>
												<a href="category.html" class="btn btn-sm btn-dark">SHOP NOW</a>
											</div>
										</div><!-- End .col-lg-4 -->
									</div><!-- End .row -->
								</div><!-- End .megamenu -->
							</li>
							<li class="active">
								<a href="#">Pages</a>
								<ul>
									<li><a href="wishlist.html">Wishlist</a></li>
									<li><a href="cart.html">Shopping Cart</a></li>
									<li><a href="checkout.html">Checkout</a></li>
									<li><a href="dashboard.html">Dashboard</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="#">Blog</a>
										<ul>
											<li><a href="blog.html">Blog</a></li>
											<li><a href="single.html">Blog Post</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact Us</a></li>
									<li><a href="login.html">Login</a></li>
									<li><a href="forgot-password.html">Forgot Password</a></li>
								</ul>
							</li>
							<li><a href="blog.html">Blog</a></li>
							<li>
								<a href="#">Elements</a>
								<ul class="custom-scrollbar">
									<li><a href="element-accordions.html">Accordion</a></li>
									<li><a href="element-alerts.html">Alerts</a></li>
									<li><a href="element-animations.html">Animations</a></li>
									<li><a href="element-banners.html">Banners</a></li>
									<li><a href="element-buttons.html">Buttons</a></li>
									<li><a href="element-call-to-action.html">Call to Action</a></li>
									<li><a href="element-countdown.html">Count Down</a></li>
									<li><a href="element-counters.html">Counters</a></li>
									<li><a href="element-headings.html">Headings</a></li>
									<li><a href="element-icons.html">Icons</a></li>
									<li><a href="element-info-box.html">Info box</a></li>
									<li><a href="element-posts.html">Posts</a></li>
									<li><a href="element-products.html">Products</a></li>
									<li><a href="element-product-categories.html">Product Categories</a></li>
									<li><a href="element-tabs.html">Tabs</a></li>
									<li><a href="element-testimonial.html">Testimonials</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact Us</a></li>
							<li class="float-right"><a href="https://1.envato.market/DdLk5" class="pl-5"
									target="_blank">Buy Porto!</a></li>
							<li class="float-right"><a href="#" class="pl-5">Special Offer!</a></li>
						</ul>
					</nav>
				</div><!-- End .container -->
			</div><!-- End .header-bottom -->
		</header><!-- End .header -->

		<main class="main">
			<div class="page-header">
				<div class="container d-flex flex-column align-items-center">
					<nav aria-label="breadcrumb" class="breadcrumb-nav">
						<div class="container">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="demo4.html">Home</a></li>
								<li class="breadcrumb-item"><a href="category.html">Shop</a></li>
								<li class="breadcrumb-item active" aria-current="page">
									My Account
								</li>
							</ol>
						</div>
					</nav>

					<h1>My Account</h1>
				</div>
			</div>

			<div class="container account-container custom-account-container">
				<div class="row">
					<div class="sidebar widget widget-dashboard mb-lg-0 mb-3 col-lg-3 order-0">
						<h2 class="text-uppercase">My Account</h2>
						<ul class="nav nav-tabs list flex-column mb-0" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="dashboard-tab" data-toggle="tab" href="#dashboard"
									role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" id="order-tab" data-toggle="tab" href="#order" role="tab"
									aria-controls="order" aria-selected="true">Orders</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" id="download-tab" data-toggle="tab" href="#download" role="tab"
									aria-controls="download" aria-selected="false">Downloads</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" id="address-tab" data-toggle="tab" href="#address" role="tab"
									aria-controls="address" aria-selected="false">Addresses</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" id="edit-tab" data-toggle="tab" href="#edit" role="tab"
									aria-controls="edit" aria-selected="false">Account
									details</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="shop-address-tab" data-toggle="tab" href="#shipping" role="tab"
									aria-controls="edit" aria-selected="false">Shopping Addres</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="wishlist.html">Wishlist</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="login.html">Logout</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-9 order-lg-last order-1 tab-content">
						<div class="tab-pane fade show active" id="dashboard" role="tabpanel">
							<div class="dashboard-content">
								<p>
									Hello <strong class="text-dark">Editor</strong> (not
									<strong class="text-dark">Editor</strong>?
									<a href="login.html" class="btn btn-link ">Log out</a>)
								</p>

								<p>
									From your account dashboard you can view your
									<a class="btn btn-link link-to-tab" href="#order">recent orders</a>,
									manage your
									<a class="btn btn-link link-to-tab" href="#address">shipping and billing
										addresses</a>, and
									<a class="btn btn-link link-to-tab" href="#edit">edit your password and account
										details.</a>
								</p>

								<div class="mb-4"></div>

								<div class="row row-lg">
									<div class="col-6 col-md-4">
										<div class="feature-box text-center pb-4">
											<a href="#order" class="link-to-tab"><i
													class="sicon-social-dropbox"></i></a>
											<div class="feature-box-content">
												<h3>ORDERS</h3>
											</div>
										</div>
									</div>

									<div class="col-6 col-md-4">
										<div class="feature-box text-center pb-4">
											<a href="#download" class="link-to-tab"><i
													class="sicon-cloud-download"></i></a>
											<div class=" feature-box-content">
												<h3>DOWNLOADS</h3>
											</div>
										</div>
									</div>

									<div class="col-6 col-md-4">
										<div class="feature-box text-center pb-4">
											<a href="#address" class="link-to-tab"><i
													class="sicon-location-pin"></i></a>
											<div class="feature-box-content">
												<h3>ADDRESSES</h3>
											</div>
										</div>
									</div>

									<div class="col-6 col-md-4">
										<div class="feature-box text-center pb-4">
											<a href="#edit" class="link-to-tab"><i class="icon-user-2"></i></a>
											<div class="feature-box-content p-0">
												<h3>ACCOUNT DETAILS</h3>
											</div>
										</div>
									</div>

									<div class="col-6 col-md-4">
										<div class="feature-box text-center pb-4">
											<a href="wishlist.html"><i class="sicon-heart"></i></a>
											<div class="feature-box-content">
												<h3>WISHLIST</h3>
											</div>
										</div>
									</div>

									<div class="col-6 col-md-4">
										<div class="feature-box text-center pb-4">
											<a href="login.html"><i class="sicon-logout"></i></a>
											<div class="feature-box-content">
												<h3>LOGOUT</h3>
											</div>
										</div>
									</div>
								</div><!-- End .row -->
							</div>
						</div><!-- End .tab-pane -->

						<div class="tab-pane fade" id="order" role="tabpanel">
							<div class="order-content">
								<h3 class="account-sub-title d-none d-md-block"><i
										class="sicon-social-dropbox align-middle mr-3"></i>Orders</h3>
								<div class="order-table-container text-center">
									<table class="table table-order text-left">
										<thead>
											<tr>
												<th class="order-id">ORDER</th>
												<th class="order-date">DATE</th>
												<th class="order-status">STATUS</th>
												<th class="order-price">TOTAL</th>
												<th class="order-action">ACTIONS</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="text-center p-0" colspan="5">
													<p class="mb-5 mt-5">
														No Order has been made yet.
													</p>
												</td>
											</tr>
										</tbody>
									</table>
									<hr class="mt-0 mb-3 pb-2" />

									<a href="category.html" class="btn btn-dark">Go Shop</a>
								</div>
							</div>
						</div><!-- End .tab-pane -->

						<div class="tab-pane fade" id="download" role="tabpanel">
							<div class="download-content">
								<h3 class="account-sub-title d-none d-md-block"><i
										class="sicon-cloud-download align-middle mr-3"></i>Downloads</h3>
								<div class="download-table-container">
									<p>No downloads available yet.</p> <a href="category.html"
										class="btn btn-primary text-transform-none mb-2">GO SHOP</a>
								</div>
							</div>
						</div><!-- End .tab-pane -->

						<div class="tab-pane fade" id="address" role="tabpanel">
							<h3 class="account-sub-title d-none d-md-block mb-1"><i
									class="sicon-location-pin align-middle mr-3"></i>Addresses</h3>
							<div class="addresses-content">
								<p class="mb-4">
									The following addresses will be used on the checkout page by
									default.
								</p>

								<div class="row">
									<div class="address col-md-6">
										<div class="heading d-flex">
											<h4 class="text-dark mb-0">Billing address</h4>
										</div>

										<div class="address-box">
											You have not set up this type of address yet.
										</div>

										<a href="#billing" class="btn btn-default address-action link-to-tab">Add
											Address</a>
									</div>

									<div class="address col-md-6 mt-5 mt-md-0">
										<div class="heading d-flex">
											<h4 class="text-dark mb-0">
												Shipping address
											</h4>
										</div>

										<div class="address-box">
											You have not set up this type of address yet.
										</div>

										<a href="#shipping" class="btn btn-default address-action link-to-tab">Add
											Address</a>
									</div>
								</div>
							</div>
						</div><!-- End .tab-pane -->

						<div class="tab-pane fade" id="edit" role="tabpanel">
							<h3 class="account-sub-title d-none d-md-block mt-0 pt-1 ml-1"><i
									class="icon-user-2 align-middle mr-3 pr-1"></i>Account Details</h3>
							<div class="account-content">
								<form action="#">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="acc-name">First name <span class="required">*</span></label>
												<input type="text" class="form-control" placeholder="Editor"
													id="acc-name" name="acc-name" required />
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label for="acc-lastname">Last name <span
														class="required">*</span></label>
												<input type="text" class="form-control" id="acc-lastname"
													name="acc-lastname" required />
											</div>
										</div>
									</div>

									<div class="form-group mb-2">
										<label for="acc-text">Display name <span class="required">*</span></label>
										<input type="text" class="form-control" id="acc-text" name="acc-text"
											placeholder="Editor" required />
										<p>This will be how your name will be displayed in the account section and
											in
											reviews</p>
									</div>


									<div class="form-group mb-4">
										<label for="acc-email">Email address <span class="required">*</span></label>
										<input type="email" class="form-control" id="acc-email" name="acc-email"
											placeholder="editor@gmail.com" required />
									</div>

									<div class="change-password">
										<h3 class="text-uppercase mb-2">Password Change</h3>

										<div class="form-group">
											<label for="acc-password">Current Password (leave blank to leave
												unchanged)</label>
											<input type="password" class="form-control" id="acc-password"
												name="acc-password" />
										</div>

										<div class="form-group">
											<label for="acc-password">New Password (leave blank to leave
												unchanged)</label>
											<input type="password" class="form-control" id="acc-new-password"
												name="acc-new-password" />
										</div>

										<div class="form-group">
											<label for="acc-password">Confirm New Password</label>
											<input type="password" class="form-control" id="acc-confirm-password"
												name="acc-confirm-password" />
										</div>
									</div>

									<div class="form-footer mt-3 mb-0">
										<button type="submit" class="btn btn-dark mr-0">
											Save changes
										</button>
									</div>
								</form>
							</div>
						</div><!-- End .tab-pane -->

						<div class="tab-pane fade" id="billing" role="tabpanel">
							<div class="address account-content mt-0 pt-2">
								<h4 class="title">Billing address</h4>

								<form class="mb-2" action="#">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>First name <span class="required">*</span></label>
												<input type="text" class="form-control" required />
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label>Last name <span class="required">*</span></label>
												<input type="text" class="form-control" required />
											</div>
										</div>
									</div>

									<div class="form-group">
										<label>Company </label>
										<input type="text" class="form-control">
									</div>

									<div class="select-custom">
										<label>Country / Region <span class="required">*</span></label>
										<select name="orderby" class="form-control">
											<option value="" selected="selected">British Indian Ocean Territory
											</option>
											<option value="1">Brunei</option>
											<option value="2">Bulgaria</option>
											<option value="3">Burkina Faso</option>
											<option value="4">Burundi</option>
											<option value="5">Cameroon</option>
										</select>
									</div>

									<div class="form-group">
										<label>Street address <span class="required">*</span></label>
										<input type="text" class="form-control"
											placeholder="House number and street name" required />
										<input type="text" class="form-control"
											placeholder="Apartment, suite, unit, etc. (optional)" required />
									</div>

									<div class="form-group">
										<label>Town / City <span class="required">*</span></label>
										<input type="text" class="form-control" required />
									</div>

									<div class="form-group">
										<label>State / Country <span class="required">*</span></label>
										<input type="text" class="form-control" required />
									</div>

									<div class="form-group">
										<label>Postcode / ZIP <span class="required">*</span></label>
										<input type="text" class="form-control" required />
									</div>

									<div class="form-group mb-3">
										<label>Phone <span class="required">*</span></label>
										<input type="number" class="form-control" required />
									</div>

									<div class="form-group mb-3">
										<label>Email address <span class="required">*</span></label>
										<input type="email" class="form-control" placeholder="editor@gmail.com"
											required />
									</div>

									<div class="form-footer mb-0">
										<div class="form-footer-right">
											<button type="submit" class="btn btn-dark py-4">
												Save Address
											</button>
										</div>
									</div>
								</form>
							</div>
						</div><!-- End .tab-pane -->

						<div class="tab-pane fade" id="shipping" role="tabpanel">
							<div class="address account-content mt-0 pt-2">
								<h4 class="title mb-3">Shipping Address</h4>

								<form class="mb-2" action="#">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>First name <span class="required">*</span></label>
												<input type="text" class="form-control" required />
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label>Last name <span class="required">*</span></label>
												<input type="text" class="form-control" required />
											</div>
										</div>
									</div>

									<div class="form-group">
										<label>Company </label>
										<input type="text" class="form-control">
									</div>

									<div class="select-custom">
										<label>Country / Region <span class="required">*</span></label>
										<select name="orderby" class="form-control">
											<option value="" selected="selected">British Indian Ocean Territory
											</option>
											<option value="1">Brunei</option>
											<option value="2">Bulgaria</option>
											<option value="3">Burkina Faso</option>
											<option value="4">Burundi</option>
											<option value="5">Cameroon</option>
										</select>
									</div>

									<div class="form-group">
										<label>Street address <span class="required">*</span></label>
										<input type="text" class="form-control"
											placeholder="House number and street name" required />
										<input type="text" class="form-control"
											placeholder="Apartment, suite, unit, etc. (optional)" required />
									</div>

									<div class="form-group">
										<label>Town / City <span class="required">*</span></label>
										<input type="text" class="form-control" required />
									</div>

									<div class="form-group">
										<label>State / Country <span class="required">*</span></label>
										<input type="text" class="form-control" required />
									</div>

									<div class="form-group">
										<label>Postcode / ZIP <span class="required">*</span></label>
										<input type="text" class="form-control" required />
									</div>

									<div class="form-footer mb-0">
										<div class="form-footer-right">
											<button type="submit" class="btn btn-dark py-4">
												Save Address
											</button>
										</div>
									</div>
								</form>
							</div>
						</div><!-- End .tab-pane -->
					</div><!-- End .tab-content -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-5"></div><!-- margin -->
		</main><!-- End .main -->

		<footer class="footer bg-dark">
			<div class="footer-middle">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-sm-6">
							<div class="widget">
								<h4 class="widget-title">Contact Info</h4>
								<ul class="contact-info">
									<li>
										<span class="contact-info-label">Address:</span>123 Street Name, City, England
									</li>
									<li>
										<span class="contact-info-label">Phone:</span><a href="tel:">(123)
											456-7890</a>
									</li>
									<li>
										<span class="contact-info-label">Email:</span> <a
											href="mailto:mail@example.com">mail@example.com</a>
									</li>
									<li>
										<span class="contact-info-label">Working Days/Hours:</span>
										Mon - Sun / 9:00 AM - 8:00 PM
									</li>
								</ul>
								<div class="social-icons">
									<a href="#" class="social-icon social-facebook icon-facebook" target="_blank"
										title="Facebook"></a>
									<a href="#" class="social-icon social-twitter icon-twitter" target="_blank"
										title="Twitter"></a>
									<a href="#" class="social-icon social-instagram icon-instagram" target="_blank"
										title="Instagram"></a>
								</div><!-- End .social-icons -->
							</div><!-- End .widget -->
						</div><!-- End .col-lg-3 -->

						<div class="col-lg-3 col-sm-6">
							<div class="widget">
								<h4 class="widget-title">Customer Service</h4>

								<ul class="links">
									<li><a href="#">Help & FAQs</a></li>
									<li><a href="#">Order Tracking</a></li>
									<li><a href="#">Shipping & Delivery</a></li>
									<li><a href="#">Orders History</a></li>
									<li><a href="#">Advanced Search</a></li>
									<li><a href="dashboard.html">My Account</a></li>
									<li><a href="#">Careers</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="#">Corporate Sales</a></li>
									<li><a href="#">Privacy</a></li>
								</ul>
							</div><!-- End .widget -->
						</div><!-- End .col-lg-3 -->

						<div class="col-lg-3 col-sm-6">
							<div class="widget">
								<h4 class="widget-title">Popular Tags</h4>

								<div class="tagcloud">
									<a href="#">Bag</a>
									<a href="#">Black</a>
									<a href="#">Blue</a>
									<a href="#">Clothes</a>
									<a href="#">Fashion</a>
									<a href="#">Hub</a>
									<a href="#">Shirt</a>
									<a href="#">Shoes</a>
									<a href="#">Skirt</a>
									<a href="#">Sports</a>
									<a href="#">Sweater</a>
								</div>
							</div><!-- End .widget -->
						</div><!-- End .col-lg-3 -->

						<div class="col-lg-3 col-sm-6">
							<div class="widget widget-newsletter">
								<h4 class="widget-title">Subscribe newsletter</h4>
								<p>Get all the latest information on events, sales and offers. Sign up for newsletter:
								</p>
								<form action="#" class="mb-0">
									<input type="email" class="form-control m-b-3" placeholder="Email address" required>

									<input type="submit" class="btn btn-primary shadow-none" value="Subscribe">
								</form>
							</div><!-- End .widget -->
						</div><!-- End .col-lg-3 -->
					</div><!-- End .row -->
				</div><!-- End .container -->
			</div><!-- End .footer-middle -->

			<div class="container">
				<div class="footer-bottom">
					<div class="container d-sm-flex align-items-center">
						<div class="footer-left">
							<span class="footer-copyright">© Porto eCommerce. 2021. All Rights Reserved</span>
						</div>

						<div class="footer-right ml-auto mt-1 mt-sm-0">
							<div class="payment-icons">
								<span class="payment-icon visa"
									style="background-image: url(assets/images/payments/payment-visa.svg)"></span>
								<span class="payment-icon paypal"
									style="background-image: url(assets/images/payments/payment-paypal.svg)"></span>
								<span class="payment-icon stripe"
									style="background-image: url(assets/images/payments/payment-stripe.png)"></span>
								<span class="payment-icon verisign"
									style="background-image:  url(assets/images/payments/payment-verisign.svg)"></span>
							</div>
						</div>
					</div>
				</div><!-- End .footer-bottom -->
			</div><!-- End .container -->
		</footer><!-- End .footer -->
	</div><!-- End .page-wrapper -->

	<div class="loading-overlay">
		<div class="bounce-loader">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>

	<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

	<div class="mobile-menu-container">
		<div class="mobile-menu-wrapper">
			<span class="mobile-menu-close"><i class="fa fa-times"></i></span>
			<nav class="mobile-nav">
				<ul class="mobile-menu">
					<li><a href="demo4.html">Home</a></li>
					<li>
						<a href="category.html">Categories</a>
						<ul>
							<li><a href="category.html">Full Width Banner</a></li>
							<li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
							<li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
							<li><a href="category-sidebar-left.html">Left Sidebar</a></li>
							<li><a href="category-sidebar-right.html">Right Sidebar</a></li>
							<li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
							<li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
							<li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
							<li><a href="#">List Types</a></li>
							<li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span
										class="tip tip-new">New</span></a></li>
							<li><a href="category.html">3 Columns Products</a></li>
							<li><a href="category-4col.html">4 Columns Products</a></li>
							<li><a href="category-5col.html">5 Columns Products</a></li>
							<li><a href="category-6col.html">6 Columns Products</a></li>
							<li><a href="category-7col.html">7 Columns Products</a></li>
							<li><a href="category-8col.html">8 Columns Products</a></li>
						</ul>
					</li>
					<li>
						<a href="product.html">Products</a>
						<ul>
							<li>
								<a href="#" class="nolink">PRODUCT PAGES</a>
								<ul>
									<li><a href="product.html">SIMPLE PRODUCT</a></li>
									<li><a href="product-variable.html">VARIABLE PRODUCT</a></li>
									<li><a href="product.html">SALE PRODUCT</a></li>
									<li><a href="product.html">FEATURED & ON SALE</a></li>
									<li><a href="product-sticky-info.html">WIDTH CUSTOM TAB</a></li>
									<li><a href="product-sidebar-left.html">WITH LEFT SIDEBAR</a></li>
									<li><a href="product-sidebar-right.html">WITH RIGHT SIDEBAR</a></li>
									<li><a href="product-addcart-sticky.html">ADD CART STICKY</a></li>
								</ul>
							</li>
							<li>
								<a href="#" class="nolink">PRODUCT LAYOUTS</a>
								<ul>
									<li><a href="product-extended-layout.html">EXTENDED LAYOUT</a></li>
									<li><a href="product-grid-layout.html">GRID IMAGE</a></li>
									<li><a href="product-full-width.html">FULL WIDTH LAYOUT</a></li>
									<li><a href="product-sticky-info.html">STICKY INFO</a></li>
									<li><a href="product-sticky-both.html">LEFT & RIGHT STICKY</a></li>
									<li><a href="product-transparent-image.html">TRANSPARENT IMAGE</a></li>
									<li><a href="product-center-vertical.html">CENTER VERTICAL</a></li>
									<li><a href="#">BUILD YOUR OWN</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
						<ul>
							<li>
								<a href="wishlist.html">Wishlist</a>
							</li>
							<li>
								<a href="cart.html">Shopping Cart</a>
							</li>
							<li>
								<a href="checkout.html">Checkout</a>
							</li>
							<li>
								<a href="dashboard.html">Dashboard</a>
							</li>
							<li>
								<a href="login.html">Login</a>
							</li>
							<li>
								<a href="forgot-password.html">Forgot Password</a>
							</li>
						</ul>
					</li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="#">Elements</a>
						<ul class="custom-scrollbar">
							<li><a href="element-accordions.html">Accordion</a></li>
							<li><a href="element-alerts.html">Alerts</a></li>
							<li><a href="element-animations.html">Animations</a></li>
							<li><a href="element-banners.html">Banners</a></li>
							<li><a href="element-buttons.html">Buttons</a></li>
							<li><a href="element-call-to-action.html">Call to Action</a></li>
							<li><a href="element-countdown.html">Count Down</a></li>
							<li><a href="element-counters.html">Counters</a></li>
							<li><a href="element-headings.html">Headings</a></li>
							<li><a href="element-icons.html">Icons</a></li>
							<li><a href="element-info-box.html">Info box</a></li>
							<li><a href="element-posts.html">Posts</a></li>
							<li><a href="element-products.html">Products</a></li>
							<li><a href="element-product-categories.html">Product Categories</a></li>
							<li><a href="element-tabs.html">Tabs</a></li>
							<li><a href="element-testimonial.html">Testimonials</a></li>
						</ul>
					</li>
				</ul>

				<ul class="mobile-menu mt-2 mb-2">
					<li class="border-0">
						<a href="#">
							Special Offer!
						</a>
					</li>
					<li class="border-0">
						<a href="#" target="_blank">
							Buy Porto!
							<span class="tip tip-hot">Hot</span>
						</a>
					</li>
				</ul>

				<ul class="mobile-menu">
					<li><a href="login.html">My Account</a></li>
					<li><a href="contact.html">Contact Us</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="wishlist.html">My Wishlist</a></li>
					<li><a href="cart.html">Cart</a></li>
					<li><a href="login.html" class="login-link">Log In</a></li>
				</ul>
			</nav><!-- End .mobile-nav -->

			<form class="search-wrapper mb-2" action="#">
				<input type="text" class="form-control mb-0" placeholder="Search..." required />
				<button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
			</form>

			<div class="social-icons">
				<a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
				</a>
				<a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
				</a>
				<a href="#" class="social-icon social-instagram icon-instagram" target="_blank">
				</a>
			</div>
		</div><!-- End .mobile-menu-wrapper -->
	</div><!-- End .mobile-menu-container -->

	<div class="sticky-navbar">
		<div class="sticky-info">
			<a href="demo4.html">
				<i class="icon-home"></i>Home
			</a>
		</div>
		<div class="sticky-info">
			<a href="category.html" class="">
				<i class="icon-bars"></i>Categories
			</a>
		</div>
		<div class="sticky-info">
			<a href="wishlist.html" class="">
				<i class="icon-wishlist-2"></i>Wishlist
			</a>
		</div>
		<div class="sticky-info">
			<a href="login.html" class="">
				<i class="icon-user-2"></i>Account
			</a>
		</div>
		<div class="sticky-info">
			<a href="cart.html" class="">
				<i class="icon-shopping-cart position-relative">
					<span class="cart-count badge-circle">3</span>
				</i>Cart
			</a>
		</div>
	</div>



	<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

	<!-- Plugins JS File -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/plugins.min.js"></script>

	<!-- Main JS File -->
	<script src="assets/js/main.min.js"></script>
</body>

</html>