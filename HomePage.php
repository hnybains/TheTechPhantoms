<html lang="en-CA" class="">

<head>

	<!-- End Google Tag Manager -->

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="https://recoverycollegeedmonton.ca/xmlrpc.php">


	<!---This site is optimized with the Yoast SEO plugin v15.1.1 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Home - Recovery College Edmonton</title>
	<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
	<link rel="canonical" href="https://recoverycollegeedmonton.ca/">
	<meta property="og:locale" content="en_US">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Home - Recovery College Edmonton">
	<!--<meta property="og:url" content="https://recoverycollegeedmonton.ca/"> -->
	<meta property="og:site_name" content="Recovery College Edmonton">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:creator" content="@CMHAEdmonton">
	<meta name="twitter:site" content="@CMHAEdmonton">

	<link rel="shortlink" href="https://recoverycollegeedmonton.ca/">
	<!-- / Yoast SEO plugin.-->


	<link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
	<link rel="dns-prefetch" href="//maps.googleapis.com">
	<link rel="dns-prefetch" href="//s.w.org">
	<link rel="alternate" type="application/rss+xml" title="Recovery College Edmonton » Feed" href="https://recoverycollegeedmonton.ca/feed/">
	<link rel="alternate" type="application/rss+xml" title="Recovery College Edmonton » Comments Feed" href="https://recoverycollegeedmonton.ca/comments/feed/">



	<!--JavaScript files-->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" id="jquery-js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js?ver=67c90ffd8417a442ac33ffaa4a4ee97a" id="popper-js-js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js?ver=67c90ffd8417a442ac33ffaa4a4ee97a" id="bootstrap-js-js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGHX5BwU2iuffzu6Stj9FSs9k_BroiQBc&amp;ver=67c90ffd8417a442ac33ffaa4a4ee97a" id="google_maps_script_js-js"></script>
	<script type="text/javascript" src="js/google_maps_script.js?ver=1.7" id="google_maps-js"></script>
	<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/9/common.js"></script>
	<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/9/util.js"></script>

	<!-- icons -->
	<link rel="icon" href="images/png/cropped-RecoveryCollege_Favicon-32x32.png" sizes="32x32">
	<link rel="icon" href="images/png/cropped-RecoveryCollege_Favicon-192x192.png" sizes="192x192">
	<link rel="apple-touch-icon" href="images/png/cropped-RecoveryCollege_Favicon-180x180.png">
	<meta name="msapplication-TileImage" content="images/png/cropped-RecoveryCollege_Favicon-270x270.png">
	<link rel="cart" href="images/svg/cart.svg" sizes="192x192" />
	<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

	<!--Style Sheets-->
	<link rel="stylesheet" id="tribe-common-skeleton-style-css" href="css/common-skeleton.min.css?ver=4.12.5" type="text/css" media="all">
	<link rel="stylesheet" id="tribe-tooltip-css" href="css/tooltip.min.css?ver=4.12.5" type="text/css" media="all">
	<link rel="stylesheet" id="wp-block-library-css" href="css/style.min.css?ver=67c90ffd8417a442ac33ffaa4a4ee97a" type="text/css" media="all">
	<link rel="stylesheet" id="edd-styles-css" href="css/edd.min.css?ver=2.9.26" type="text/css" media="all">
	<link rel="stylesheet" id="bootstrap-css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css?ver=67c90ffd8417a442ac33ffaa4a4ee97a" type="text/css" media="all">
	<link rel="stylesheet" id="site_styles-css" href="css/main_styles.css?ver=1.7" type="text/css" media="all">
	<link rel="stylesheet" id="ie11_styles-css" href="css/ie11.css?ver=1.7" type="text/css" media="all">

	<script type="text/javascript">
		function addToCart(clicked_id) {
			$.ajax({
				type: "POST",
				url: 'ajax.php',
				data: {
					action: 'add_to_cart',
					course_id: clicked_id
				},
				success: function(html) {
					location.reload();
				}

			});
		}

		function ShowAllCourses() {
			var all = document.getElementsByClassName("col-12 col-md-6 card-container extra");
			var str = document.getElementById("viewAllCourses");

			if (all[0].style.display=="block") {
				for (var i = 0; i < all.length; i++) {
					all[i].style.display = "none";
				}
				str.innerText = "Show All Courses";
			} else {
				for (var i = 0; i < all.length; i++) {
					all[i].style.display = "block";
				}
				str.innerText = "Hide Courses";
			}

		}
	</script>
</head>


<body class="home page-template-default page page-id-13 tribe-js">

	<div id="page" class="site">
		<div id="content" class="site-content">		

			<div class="sitewide-banner" data-modified="1588200144">
				<div class="sitewide-banner-container">
					<h4>CMHA Recovery College classes are now being online.</h4><a href="AddNewStudentNew.php" class="button">Register here.</a>
				</div>

				<i class="icon ion-md-close hide-banner"></i>
			</div>

			<div id="site-menu" class="main-nav">
				<div class="sitewide-banner" data-modified="1588200144">
					<div class="sitewide-banner-container">
						<h4>CMHA Recovery College classes are now being offered online.</h4><a href="AddNewStudentNew.php" class="button">Register here.</a>
					</div>

					<i class="icon ion-md-close hide-banner"><span class="iconify" data-icon="gridicons:cross-small" data-inline="false"></span></i>
				</div>


				<div class="d-md-none">
					<div class="nav-trigger d-lg-none">
						<button class="menu-toggle button--primary" id="main-nav-toggle" aria-haspopup="true" aria-expanded="false"><span class="text">Menu</span> <span class="hamburger-bars"><span class="bar-helper"></span></span></button>
					</div>

				</div>

				<div class="navigation-wrapper">
					<nav class="primary-nav">
						<ul id="menu-main-menu" class="menu">
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-22" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22 nav-item"><a title="About Recovery College" href="about.php" class="nav-link">About Recovery College</a></li>
						    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-23" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-23 nav-item"><a title="Find a Course" href="AllCourses.php" aria-haspopup="true" aria-expanded="false" id="menu-item-dropdown-23">Find a Course</a></li>
						</ul>
					</nav>



					<nav class="utility-nav">

						<ul id="menu-utility-menu" class="menu">
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19 nav-item"><a title="News &amp; Updates" href="news.php" class="nav-link">News &amp; Updates</a></li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-20" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20 nav-item"><a title="Donate" target="_blank" href="https://edmonton.cmha.ca/get-involved/donate/" class="nav-link">Donate</a></li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21 nav-item"><a title="FAQs" href="Faq.php" class="nav-link">FAQs</a></li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 nav-item"><a title="Contact" href="contact.php" class="nav-link">Contact</a></li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 nav-item"><a title="Login" href="user/StudentLogin.php" class="nav-link">Login</a></li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 nav-item"><a title="Cart" href="MyCart.php" class="nav-link">&nbsp;&nbsp;&nbsp;Cart</a></li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 nav-item"><a title="Cart" href="MyCart.php" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  							<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg></a>
  							</li>
						</ul>
					</nav>
				</div>
			</div>
			<div id="skip-anchor" tabindex="-1"></div>
			<div class="header header-hero">

				<div class="container">
					<div class="row">

						<div class="col-12 col-md-6 hero-title">
							<h2 class="title-1">Real people sharing what works</h2>
							<p class="big">
								Recovery College provides free courses that help you develop your own resourcefulness.
							</p>
						</div>


						<div class="d-none d-md-block col-12 col-md-6 hero-image">
							<div class="hero-image-container">
								<div class="hero-image hero-image-active" style="background-image: url(images/svg/RecoveryCollege-FreeMentalHealthCourses-HeaderGraphic1.svg );"></div>
								<div class="hero-image hero-image-fade" style="background-image: url(images/svg/RecoveryCollege-FreeMentalHealthCourses-HeaderGraphic2.svg );"></div>
								<div class="hero-image hero-image-fade" style="background-image: url(images/svg/RecoveryCollege-FreeMentalHealthCourses-HeaderGraphic3.svg );"></div>
							</div>
						</div>

					</div>
				</div>

			</div>
			<section class="intro" id="intro-frontpage">

				<div class="brush-stroke brush-stroke-top" style="background-image: url(images/svg/white-top.svg);"></div>

				<div class="container intro-container">
					<div class="row">

						<div class="col-12 col-md-6">
							<h2>Learning experiences for everyone</h2>

							<div class="intro-icons">
								<div  data-relationship="individuals">
									<img src="images/svg/CMHA_Anybody.svg" alt="">
								</div>
								<div  data-relationship="young-adults">
									<img src="images/svg/CMHA_Students.svg" alt="">
								</div>
								<div  data-relationship="">
									<img src="images/svg/CMHA_OlderAdults.svg" alt="">
								</div>
								<div data-relationship="family-friends">
									<img src="images/svg/CMHA_Families.svg" alt="">
								</div>
								<div  data-relationship="">
									<img src="images/svg/CMHA_NativeAmericans.svg" alt="">
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<div class="intro-copy">
								<p><strong><a class="intro-copy-content intro-copy--online" href="AllCourses.php" data-relationship=" online">We are currently offering CMHA Recovery College classes through online virtual delivery.</a>
										
									</strong> Usually, we have several courses to choose from, there is something for everyone. There are courses for anyone,
									youth, and family, friends, and parents,so you can easily find one that is right for you. All of our courses are developed and delivered in partnership with our peer supporters who are experts by experience: they have their own personal story of a mental health or substance use concern, or are supporting a loved one.
								</p>
								<p>To learn more about CMHA Recovery College, please visit <a href="about.php">About Recovery College</a>.</p>
								<p>For more wellness-focused courses in Edmonton visit the The Wellness Network</p>
							</div>
						</div>

					</div>
				</div>

				<div class="brush-stroke brush-stroke-bottom" style="background-image: url(images/svg/white-top.svg);"></div>

			</section>



			<section class="upcoming-courses">

				<div class="container">
					<div class="row">

						<div class="col-12">
							<h2>Find an online class here. </h2>
							<p class="big">Register for an online virtual course or get more information in our course catalogue</p>
							
						</div>

						<?php include 'config.php';?>
						<?php

						$string = exec('getmac');
						$mac = substr($string, 0, 17);
						$sql = pg_query(sprintf("SELECT * FROM public.courses where course_id NOT IN (SELECT course_id from cart where emailaddress='" . $mac . "')"));
						$count = 0;

						while ($row = pg_fetch_assoc($sql)) {
							$count = $count + 1;

							if ($count > 3) {

								echo "
													<div class='col-12 col-md-6 card-container extra' id='display_functionality' style='display:none'>
														<div id='tribe-event-content--5068' class='card tribe-events-single events-single-card' data-filter-container=''>
															<div class='location-meta' data-location='online'></div>
															<div class='tags' data-filter-target='' data-tags='online'></div>
															<div class='card__header'>
																<div class='card__title title-4 tribe-events-single-event-title'>" . htmlspecialchars($row['course_name']) . "</div>	
																</div>

															<div class='card__body small'>
															

																<table class='details'>
																	<tbody>
																		<tr>
																			<th>Start</th>
																			<td>" . htmlspecialchars($row['start_date']) . "</td>
																		</tr>
																		<tr>
																			<th>End</th>
																			<td>" . htmlspecialchars($row['end_date']) . "</td>
																		</tr>
																	</tbody>
																</table>
															</div>

															<div class='card__footer'>";



								if($row['currently_enrolled']<$row['capacity'])
								{
								echo "<button class='add-to-cart button--plus button--online' id='" . $row['course_id'] . "' onclick='addToCart(this.id)'>Add to Cart</button>
														<a href='learnmore.php?course_id=" . $row['course_id'] . "' class='button button--secondary'>Learn More</a>
															</div>
														</div><!-- #tribe-events-content -->
													</div>";
								}
								else
								{
									echo "<button class='btn btn-secondary' id='" . $row['course_id'] . "' onclick='addToCart(this.id) disabled'>Class Full</button>
									<a href='learnmore.php?course_id=" . $row['course_id'] . "' class='button button--secondary'>Learn More</a>
										</div>
									</div><!-- #tribe-events-content -->
								</div>";
								}
							} else {
								echo "
								<div class='col-12 col-md-6 card-container'>
									<div id='tribe-event-content--5068' class='card tribe-events-single events-single-card' data-filter-container=''>
										<div class='location-meta' data-location='online'></div>
										<div class='tags' data-filter-target='' data-tags='online'></div>
										<div class='card__header'>
											<div class='card__title title-4 tribe-events-single-event-title'>" . htmlspecialchars($row['course_name']) . "</div>	
											</div>

										<div class='card__body small'>
										

											<table class='details'>
												<tbody>
													<tr>
														<th>Start Date</th>
														<td>" . htmlspecialchars($row['start_date']) . "</td>
													</tr>
													<tr>
														<th>End Date</th>
														<td>" . htmlspecialchars($row['end_date']) . "</td>
													</tr>
													<tr>
														<th>Location</th>
														<td>Online</td>
													</tr>
												</tbody>
											</table>
										</div>

										<div class='card__footer'>";

								
										if($row['currently_enrolled']<$row['capacity'])
										{

								echo "<button class='add-to-cart button--plus button--online' id='" . $row['course_id'] . "' onclick='addToCart(this.id)'>Add to Cart</button>";
								echo "									<a href='learnmore.php?course_id=" . $row['course_id'] . "' class='button button--secondary'>Learn More</a>
										</div>
									</div><!-- #tribe-events-content -->
								</div>";
										}
										else
										{
											echo "<button class='btn btn-secondary' id='" . $row['course_id'] . "' onclick='addToCart(this.id) disabled'>Class Full</button>";
								echo "									<a href='learnmore.php?course_id=" . $row['course_id'] . "' class='button button--secondary'>Learn More</a>
										</div>
									</div><!-- #tribe-events-content -->
								</div>";
										}
							}
						}

						?>

						<div class="col-12 col-md-6 card-container">
							<div class="card card-view-all">
								<div class="card-view-all__body">
									<h3>Courses</h3>
									<a href="AllCourses.php" title="ViewAllCourses" class="button button">View All Courses</a>
								</div>
							</div>
						</div>


						<div class="col-12">
							<p>If you require any help registering for courses please call us at <b>780-414-6300</b> or email us at <b>recoverycollege@cmha-edmonton.ab.ca</b>
								<!--https://recoverycollegeedmonton.ca/events/-->.
							</p>
						</div>

					</div>
				</div>

			</section>


			<section class="dynamic-content ">

				<div class="container">
					<div class="row">


						<div class="col-12 ">
							<div class="wysiwyg">
							</div>
						</div>


					</div>
				</div>

			</section>




			<section class="featured-news-home">
											<div class="container">
												<div class="row">
													<div class="col-12">

														<div class="card news-card">

    
        <a href="news/at-home-in-alberta-together.html" title="At Home in Alberta, Together">
        
    
        <div class="news-card-inner">

                            <div class="card-image">
                    					<div class="responsive-background ">
                    						<div class="image-controller d-block d-sm-none">
                    							<div class="image" style="background-image: url(images/png/Podcast-Episode-15_-2020_-TW_FB-576x288.png);">
                    								
                    							</div>
                    						</div>
                    						<div class="image-controller d-none d-sm-block">
                    							<div class="image" style="background-image: url(images/png/Podcast-Episode-15_-2020_-TW_FB-768x384.png);">
                    								
                    							</div>
                    						</div>
                    					</div>                		  
                    				</div>
            								<div class="card-body">
            									<h2 class="label">News</h2>
                								<h3>At Home in Alberta, Together</h3>
                								<p>As we work toward an honest effort to honor and learn about Indigenous we better ...</p>
                								<button class="button button--secondary">Read More</button>

            								</div>
        								</div>
    								</a>
								</div>					
							</div>
						</div>
					</div>
				</div>
			</section>


		<section class="cta">

	        <div class="brush-stroke brush-stroke-top" style="background-image: url(images/svg/dark-top.svg);"></div>

	        <div class="container">
	            <div class="row">
	                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 cta-inner">
						<img src="images/svg/RecoveryCollege-FreeMentalHealthCourses-FooterGraphic.svg" alt="Find a Course">
	                    <h3 class="title-2">Develop your own resourcefulness</h3>
						<a href="AllCourses.php" title="Find a Course" class="button button--reversed">Find a Course</a>
	                </div>
	            </div>
	        </div>

    	</section>


		</div>
					</div>
				</div>
			</div>
		</div>
		<footer id="site-footer" class="footer" role="contentinfo">
			<div class="container footer-container">
				<div class="row">
					<div class="footer-newsletter col-12 col-md-4">
					</div>
					<div class="footer-nav col-6 d-none d-md-block">
						<ul id="menu-footer-menu" class="menu">
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-27" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-27 nav-item">
							<a title="Find a Course" href="AllCourses.php" class="nav-link">Find a Course</a>
								<ul role="menu">
									<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-28" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28 nav-item"><a title="All Courses" href="AllCourses.php" class="dropdown-item">All Courses</a>
									</li>
								</ul>
							</li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-31" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-31 nav-item">
							<a title="Get Help" href="#" class="nav-link">Get Help</a>
								<ul role="menu">
									<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-32" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-32 nav-item"><a title="News &amp; Updates" href="news.php" class="dropdown-item">News &amp; Updates</a></li>
									<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-33" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-33 nav-item"><a title="FAQs" href="Faq.php" class="dropdown-item">FAQs</a></li>
								</ul>
							</li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-402" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-402 nav-item"><a title="Contact Us" href="contact.php" class="nav-link">Contact Us</a><ul role="menu" aria-role="menu"><li class="nav-item" aria-role="menuitem">300, 10010-105 St NW<br>Edmonton, AB T5J 1C4</li><li class="nav-item" aria-role="menuitem">780-414-6300</li></ul></li>
						</ul>
					</div>

					<div class="footer-other-blogs col-12 col-md-2">
													
						<ul class="menu">
							<li class="nav-item">
								<a href="#" class="nav-link link">Other Locations</a>
								<ul class="cmha-locations-menu" role="menu" aria-role="menu">
									<li class="menu-item" aria-role="menuitem"><a href="http://recoverycollegecalgary.ca" title="Recovery College Calgary">Calgary</a>
									</li>
									<li class="menu-item" aria-role="menuitem"><a href="http://recoverycollegewoodbuffalo.ca" title="Recovery College Wood Buffalo">Wood Buffalo</a>
									</li>
									<li class="menu-item" aria-role="menuitem"><a href="http://recoverycollegelethbridge.ca" title="Recovery College Lethbridge">Lethbridge</a>
									</li>
									<li class="menu-item" aria-role="menuitem"><a href="http://recoverycollegecentralalberta.ca" title="Recovery College Central Alberta">Central Alberta</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>

				<div class="row">
					<div class="col-12 col-md-4 footer-main-site-link">
						<a href="HomePage.php">
						<img class="" srcset="images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg 1w, images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg 1w, images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg 1w, images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg 1w" src="https://images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg" alt="">
						</a>
					</div>

					<div class="col-12 col-md-8 footer-social">
						<span class="title-5">Find Us</span>
							<ul class="footer-social-icons">
								<li><a href="https://www.facebook.com/CMHAEdmonton/" target="_blank" rel="noopener" aria-label="Facebook"><span class="iconify" data-icon="ant-design:facebook-filled" data-inline="false" style="margin-top: -8px;"></span></a>
								</li>
								<li><a href="https://twitter.com/CMHAEdmonton" target="_blank" rel="noopener" aria-label="Twitter"><span class="iconify" data-icon="ion-logo-twitter" data-inline="false" style="margin-top: -8px;"></span></a>
								</li>
							</ul>
					</div>
				</div>

				<div class="footer-meta">
					<div class="row">
						<div class="col-12 col-sm-4 col-md-6">
							<span class="footer-meta-item"><a href="Privacy.php">Privacy Page</a></span>
							<span class="footer-meta-sep">|</span>
							<span class="footer-meta-item"><a href="TermsConditions.php">Terms of Use</a></span>
							<span class="footer-meta-sep">|</span>
							<span class="footer-meta-item"><a href="CopyrightPermissions.php">Copyright &amp; Permissions</a></span>
						</div>

						<div class="col-12 col-sm-8 col-md-6">
							<span class="copy-registration"><span class="footer-meta-item">© Recovery College Edmonton 2020, All Rights Reserved</span><span class="footer-meta-item">Registered Charity Number: 118834316RR</span></span>
						</div>
					</div>
				</div>
			</div>
		</footer>

		
	</div>
	<!-- #page -->

	<script>
		(function(body) {
			'use strict';
			body.className = body.className.replace(/\btribe-no-js\b/, 'tribe-js');
		})(document.body);
	</script>
	<script type="text/javascript" id="site_scripts-js-extra">
		/* <![CDATA[ */
		var plglobals = {
			"session": ""
		};
		/* ]]> */
	</script>
	<script type="text/javascript" src="js/base_script.js?ver=1.7" id="site_scripts-js"></script>
	<script type="text/javascript" id="ajax_scripts-js-extra">
		/* <![CDATA[ */
		var ajaxscript = {
			"ajax_url": "https:\/\/recoverycollegeedmonton.ca\/wp-admin\/admin-ajax.php",
			"home_url": "https:\/\/recoverycollegeedmonton.ca",
			"theme_url": "https:\/\/recoverycollegeedmonton.ca\/wp-content\/themes\/cmha",
			"checkout_url": "https:\/\/recoverycollegeedmonton.ca\/registration\/",
			"nonce": "ac3450dab4"
		};
		/* ]]> */
	</script>
	<!-- <script type="text/javascript" src="js/ajax_script.js?ver=1.7" id="ajax_scripts-js"></script> -->


</body>

</html>