﻿<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>Barren - Simple Online Event Ticketing System</title>
		
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="images/fav.png">
		
		<!-- Stylesheets -->
		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
		<link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
		<link href="css/style.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<link href="css/night-mode.css" rel="stylesheet">
		
		<!-- Vendor Stylesheets -->
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
		<link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">		
		
	</head>

<body class="d-flex flex-column h-100">
	<!-- Header Start-->
	<?php include "include/nav1.php";?>
	<!-- Header End-->
	<!-- Body Start-->
	<div class="wrapper">
		<div class="hero-banner">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-7 col-lg-9 col-md-10">
						<div class="hero-banner-content">
							<h2>The Easiest and Most Powerful Online Event Booking and Ticketing System</h2>
							<p>Barren is an all-in-one event ticketing platform for event organisers, promoters, and managers. Easily create, promote and manage your events of any type and size.</p>
							<a href="create.html" class="main-btn btn-hover">Create Event <i class="fa-solid fa-arrow-right ms-3"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="explore-events p-80">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="main-title">
							<h3>Explore Events</h3>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="event-filter-items">
							<div class="featured-controls">
								<div class="filter-tag">
									<a href="explore_events_by_date.html" class="active">All</a>
									<a href="explore_events_by_date.html">Today</a>
									<a href="explore_events_by_date.html">Tomorrow</a>
									<a href="explore_events_by_date.html">This Week</a>
									<a href="explore_events_by_date.html">This Weekend</a>
									<a href="explore_events_by_date.html">Next Week</a>
									<a href="explore_events_by_date.html">Next Weekend</a>
									<a href="explore_events_by_date.html">This Month</a>
									<a href="explore_events_by_date.html">Next Month</a>
									<a href="explore_events_by_date.html">This Year</a>
									<a href="explore_events_by_date.html">Next Year</a>
								</div>
								<div class="controls">
									<button type="button" class="control" data-filter="all">All</button>
									<button type="button" class="control" data-filter=".arts">Arts</button>
									<button type="button" class="control" data-filter=".business">Business</button>
									<button type="button" class="control" data-filter=".concert">Concert</button>
									<button type="button" class="control" data-filter=".workshops">Workshops</button>
									<button type="button" class="control" data-filter=".coaching_consulting">Coaching and Consulting</button>
									<button type="button" class="control" data-filter=".health_Wellness">Health and Wellbeing</button>									
									<button type="button" class="control" data-filter=".volunteer">Volunteer</button>
									<button type="button" class="control" data-filter=".sports">Sports</button>
									<button type="button" class="control" data-filter=".free">Free</button>	
								</div>
								<div class="row" data-ref="event-filter-content">
									<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix arts concert workshops volunteer sports health_Wellness" data-ref="mixitup-target">
										<div class="main-card mt-4">
											<div class="event-thumbnail">
												<a href="venue_event_detail_view.html" class="thumbnail-img">
													<img src="images/event-imgs/img-1.jpg" alt="">
												</a>
												<span class="bookmark-icon" title="Bookmark"></span>
											</div>
											<div class="event-content">
												<a href="venue_event_detail_view.html" class="event-title">A New Way Of Life</a>
												<div class="duration-price-remaining">
													<span class="duration-price">AUD $100.00*</span>
													<span class="remaining"></span>
												</div>
											</div>
											<div class="event-footer">
												<div class="event-timing">
													<div class="publish-date">
														<span><i class="fa-solid fa-calendar-day me-2"></i>15 Apr</span>
														<span class="dot"><i class="fa-solid fa-circle"></i></span>
														<span>Fri, 3.45 PM</span>
													</div>
													<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>1h</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix business workshops volunteer sports health_Wellness" data-ref="mixitup-target">
										<div class="main-card mt-4">
											<div class="event-thumbnail">
												<a href="online_event_detail_view.html" class="thumbnail-img">
													<img src="images/event-imgs/img-2.jpg" alt="">
												</a>
												<span class="bookmark-icon" title="Bookmark"></span>
											</div>
											<div class="event-content">
												<a href="online_event_detail_view.html" class="event-title">Earrings Workshop with Bronwyn David</a>
												<div class="duration-price-remaining">
													<span class="duration-price">AUD $75.00*</span>
													<span class="remaining"><i class="fa-solid fa-ticket fa-rotate-90"></i>6 Remaining</span>
												</div>
											</div>
											<div class="event-footer">
												<div class="event-timing">
													<div class="publish-date">
														<span><i class="fa-solid fa-calendar-day me-2"></i>30 Apr</span>
														<span class="dot"><i class="fa-solid fa-circle"></i></span>
														<span>Sat, 11.20 PM</span>
													</div>
													<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>2h</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix coaching_consulting free concert volunteer health_Wellness bussiness" data-ref="mixitup-target">
										<div class="main-card mt-4">
											<div class="event-thumbnail">
												<a href="venue_event_detail_view.html" class="thumbnail-img">
													<img src="images/event-imgs/img-3.jpg" alt="">
												</a>
												<span class="bookmark-icon" title="Bookmark"></span>
											</div>
											<div class="event-content">
												<a href="venue_event_detail_view.html" class="event-title">Spring Showcase Saturday April 30th 2022 at 7pm</a>
												<div class="duration-price-remaining">
													<span class="duration-price">Free*</span>
													<span class="remaining"></span>
												</div>
											</div>
											<div class="event-footer">
												<div class="event-timing">
													<div class="publish-date">
														<span><i class="fa-solid fa-calendar-day me-2"></i>1 May</span>
														<span class="dot"><i class="fa-solid fa-circle"></i></span>
														<span>Sun, 4.30 PM</span>
													</div>
													<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>3h</span>
												</div>
											</div>
										</div>
									</div>
									<div class=" col-xl-3 col-lg-4 col-md-6 col-sm-12 mix health_Wellness concert volunteer sports free business" data-ref="mixitup-target">
										<div class="main-card mt-4">
											<div class="event-thumbnail">
												<a href="online_event_detail_view.html" class="thumbnail-img">
													<img src="images/event-imgs/img-4.jpg" alt="">
												</a>
												<span class="bookmark-icon" title="Bookmark"></span>
											</div>
											<div class="event-content">
												<a href="online_event_detail_view.html" class="event-title">Shutter Life</a>
												<div class="duration-price-remaining">
													<span class="duration-price">AUD $85.00</span>
													<span class="remaining"><i class="fa-solid fa-ticket fa-rotate-90"></i>7 Remaining</span>
												</div>
											</div>
											<div class="event-footer">
												<div class="event-timing">
													<div class="publish-date">
														<span><i class="fa-solid fa-calendar-day me-2"></i>1 May</span>
														<span class="dot"><i class="fa-solid fa-circle"></i></span>
														<span>Sun, 5.30 PM</span>
													</div>
													<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>1h</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix concert sports health_Wellness free arts" data-ref="mixitup-target">
										<div class="main-card mt-4">
											<div class="event-thumbnail">
												<a href="venue_event_detail_view.html" class="thumbnail-img">
													<img src="images/event-imgs/img-5.jpg" alt="">
												</a>
												<span class="bookmark-icon" title="Bookmark"></span>
											</div>
											<div class="event-content">
												<a href="venue_event_detail_view.html" class="event-title">Friday Night Dinner at The Old Station May 27 2022</a>
												<div class="duration-price-remaining">
													<span class="duration-price">AUD $41.50*</span>
													<span class="remaining"></span>
												</div>
											</div>
											<div class="event-footer">
												<div class="event-timing">
													<div class="publish-date">
														<span><i class="fa-solid fa-calendar-day me-2"></i>27 May</span>
														<span class="dot"><i class="fa-solid fa-circle"></i></span>
														<span>Fri, 12.00 PM</span>
													</div>
													<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>5h</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix workshops concert arts volunteer sports" data-ref="mixitup-target">
										<div class="main-card mt-4">
											<div class="event-thumbnail">
												<a href="venue_event_detail_view.html" class="thumbnail-img">
													<img src="images/event-imgs/img-6.jpg" alt="">
												</a>
												<span class="bookmark-icon" title="Bookmark"></span>
											</div>
											<div class="event-content">
												<a href="venue_event_detail_view.html" class="event-title">Step Up Open Mic Show</a>
												<div class="duration-price-remaining">
													<span class="duration-price">AUD $200.00*</span>
													<span class="remaining"></span>
												</div>
											</div>
											<div class="event-footer">
												<div class="event-timing">
													<div class="publish-date">
														<span><i class="fa-solid fa-calendar-day me-2"></i>30 Jun</span>
														<span class="dot"><i class="fa-solid fa-circle"></i></span>
														<span>Thu, 4.30 PM</span>
													</div>
													<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>1h</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix volunteer free health_Wellness" data-ref="mixitup-target">
										<div class="main-card mt-4">
											<div class="event-thumbnail">
												<a href="online_event_detail_view.html" class="thumbnail-img">
													<img src="images/event-imgs/img-7.jpg" alt="">
												</a>
												<span class="bookmark-icon" title="Bookmark"></span>
											</div>
											<div class="event-content">
												<a href="online_event_detail_view.html" class="event-title">Tutorial on Canvas Painting for Beginners</a>
												<div class="duration-price-remaining">
													<span class="duration-price">AUD $50.00*</span>
													<span class="remaining"><i class="fa-solid fa-ticket fa-rotate-90"></i>17 Remaining</span>
												</div>
											</div>
											<div class="event-footer">
												<div class="event-timing">
													<div class="publish-date">
														<span><i class="fa-solid fa-calendar-day me-2"></i>17 Jul</span>
														<span class="dot"><i class="fa-solid fa-circle"></i></span>
														<span>Sun, 5.30 PM</span>
													</div>
													<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>1h</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix sports concert volunteer arts" data-ref="mixitup-target">
										<div class="main-card mt-4">
											<div class="event-thumbnail">
												<a href="venue_event_detail_view.html" class="thumbnail-img">
													<img src="images/event-imgs/img-8.jpg" alt="">
												</a>
												<span class="bookmark-icon" title="Bookmark"></span>
											</div>
											<div class="event-content">
												<a href="venue_event_detail_view.html" class="event-title">Trainee Program on Leadership' 2022</a>
												<div class="duration-price-remaining">
													<span class="duration-price">AUD $120.00*</span>
													<span class="remaining"><i class="fa-solid fa-ticket fa-rotate-90"></i>7 Remaining</span>
												</div>
											</div>
											<div class="event-footer">
												<div class="event-timing">
													<div class="publish-date">
														<span><i class="fa-solid fa-calendar-day me-2"></i>20 Jul</span>
														<span class="dot"><i class="fa-solid fa-circle"></i></span>
														<span>Wed, 11.30 PM</span>
													</div>
													<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>12h</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="browse-btn">
									<a href="explore_events.html" class="main-btn btn-hover ">Browse All</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="host-engaging-event-block p-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-10">
						<div class="main-title">
							<h3>Host Engaging Online and Venue Events with Barren</h3>
							<p>Organise venue events and host online events with unlimited possibilities using our built-in virtual event platform. Build a unique event experience for you and your attendees.</p>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="engaging-block">
							<div class="owl-carousel engaging-slider owl-theme">
								<div class="item">
									<div class="main-card">
										<div class="host-item">
											<div class="host-img">
												<img src="images/icons/venue-events.png" alt="">
											</div>
											<h4>Venue Events</h4>
											<p>Create outstanding event page for your venue events, attract attendees and sell more tickets.</p>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<div class="host-item">
											<div class="host-img">
												<img src="images/icons/webinar.png" alt="">
											</div>
											<h4>Webinar</h4>
											<p>Webinars tend to be one-way events. Barren helps to make them more engaging.</p>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<div class="host-item">
											<div class="host-img">
												<img src="images/icons/training-workshop.png" alt="">
											</div>
											<h4>Training & Workshop </h4>
											<p>Create and host profitable workshops and training sessions online, sell tickets and earn money.</p>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<div class="host-item">
											<div class="host-img">
												<img src="images/icons/online-class.png" alt="">
											</div>
											<h4>Online Class</h4>
											<p>Try our e-learning template to create a fantastic e-learning event page and drive engagement. </p>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<div class="host-item">
											<div class="host-img">
												<img src="images/icons/talk-show.png" alt="">
											</div>
											<h4>Talk Show</h4>
											<p>Use our intuitive built-in event template to create and host an engaging Talk Show.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="feature-block p-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-10">
						<div class="main-title">
							<h3>No Feature Overload, Get Exactly What You Need</h3>
							<p>As well as being the most affordable online-based event registration tool and one of the best online event ticketing systems in Australia, Barren is super easy-to-use and built with a simplistic layout which is totally convenient for the organisers to operate.</p>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="feature-group-list">
							<div class="row">
								<div class="col-xl-3 col-lg-4 col-md-6">
									<div class="feature-item mt-46">
										<div class="feature-icon">
											<img src="images/icons/feature-icon-1.png" alt="">
										</div>
										<h4>Online Events</h4>
										<p>Built-in video conferencing platform to save you time and cost.</p>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6">
									<div class="feature-item mt-46">
										<div class="feature-icon">
											<img src="images/icons/feature-icon-2.png" alt="">
										</div>
										<h4>Venue Event</h4>
										<p>Easy-to-use features to create and manage your venue events.</p>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6">
									<div class="feature-item mt-46">
										<div class="feature-icon">
											<img src="images/icons/feature-icon-3.png" alt="">
										</div>
										<h4>Engaging Event Page</h4>
										<p>Create engaging event pages with your logo and our hero image collage gallery.</p>
									</div>
								</div>
								
								<div class="col-xl-3 col-lg-4 col-md-6">
									<div class="feature-item mt-46">
										<div class="feature-icon">
											<img src="images/icons/feature-icon-5.png" alt="">
										</div>
										<h4>Sell Tickets</h4>
										<p>Start monetising your online and venue events, sell unlimited* tickets.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="host-step-block p-80">
			<div class="container ">
				<div class="row">
					<div class="col-lg-12">
						<div class="main-title text-center">
							<h3 >Be a Star Event Host in 3 Easy Steps</h3>
							<p>Use early-bird discounts, coupons and group ticketing to double your ticket sale. Get paid quickly and securely.</p>
						</div>
					</div>
					<div class="col-lg-12 text-center ">
						<div class="easy-steps-tab">
							<div class="nav step-tabs justify-content-md-center " role="tablist">
								<button class="step-link active" data-bs-toggle="tab" data-bs-target="#step-01" type="button" role="tab" aria-controls="step-01" aria-selected="true">Step 01<span>Create Your Event</span></button>
								<button class="step-link" data-bs-toggle="tab" data-bs-target="#step-02" type="button" role="tab" aria-controls="step-02" aria-selected="false">Step 02<span>Sell Tickets and  Get Paid</span></button>
								<button class="step-link" data-bs-toggle="tab" data-bs-target="#step-04" type="button" role="tab" aria-controls="step-04" aria-selected="false">Step 03<span>Repeat and Grow</span></button>
							</div>
							<div class="tab-content">
								<div class="tab-pane fade show active" id="step-01" role="tabpanel">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<div class="step-text">Sign up for free and create your event easily in minutes.</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="step-item">
												<div class="step-icon">
													<img src="images/icons/step-icon-1.png" alt="">
												</div>
												<h4>Sign up for free</h4>
												<p>Sign up easily using your Google or Facebook account or email and create your events in minutes.</p>
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="step-item">
												<div class="step-icon">
													<img src="images/icons/step-icon-2.png" alt="">
												</div>
												<h4>Use built-in event page template</h4>
												<p>Choose from our customised page templates specially designed to attract attendees.</p>
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="step-item">
												<div class="step-icon">
													<img src="images/icons/step-icon-3.png" alt="">
												</div>
												<h4>Customise your event page as you like</h4>
												<p>Add logo, collage hero images, and add details to create an outstanding event page.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="step-02" role="tabpanel">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<div class="step-text">Use our multiple ticketing features & marketing automation tools to boost ticket sales.</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="step-item">
												<div class="step-icon">
													<img src="images/icons/step-icon-4.png" alt="">
												</div>
												<h4>Promote your events on social media & email</h4>
												<p>Use our intuitive event promotion tools to reach your target audience and sell tickets.</p>
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="step-item">
												<div class="step-icon">
													<img src="images/icons/step-icon-5.png" alt="">
												</div>
												<h4>Use early-bird discounts, coupons & group ticketing</h4>
												<p>Double your ticket sales using our built-in discounts, coupons and group ticketing features.</p>
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="step-item">
												<div class="step-icon">
													<img src="images/icons/step-icon-6.png" alt="">
												</div>
												<h4>Get paid quickly & securely</h4>
												<p>Use our PCI compliant payment gateways to collect your payment securely.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="step-04" role="tabpanel">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<div class="step-text">Create more events and earn more money.</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="step-item">
												<div class="step-icon">
													<img src="images/icons/step-icon-10.png" alt="">
												</div>
												<h4>Create multiple sessions & earn more</h4>
												<p>Use our event scheduling features to create multiple sessions for your events & earn more money.</p>
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="step-item">
												<div class="step-icon">
													<img src="images/icons/step-icon-11.png" alt="">
												</div>
												<h4>Clone past event to create similar events</h4>
												<p>Use our event cloning feature to clone past event and create a new one easily within a few clicks.</p>
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="step-item">
												<div class="step-icon">
													<img src="images/icons/step-icon-12.png" alt="">
												</div>
												<h4>Get support like nowhere else</h4>
												<p>Our dedicated on-boarding coach will assist you in becoming an expert in no time.</p>
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
		<div class="testimonial-block p-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-10">
						<div class="main-title">
							<h3>Transforming Thousands of Event Hosts Just Like You</h3>
							<p>Be part of a winning team. We are continuously thriving to bring the best to our customers. Be that a new product feature, help in setting up your events or even supporting your customers so that they can easily buy tickets and participate your in events. Here is what some of the clients have to say,</p>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="testimonial-slider-area">
							<div class="owl-carousel testimonial-slider owl-theme">
								<div class="item">
									<div class="main-card">
										<div class="testimonial-content">
											<div class="testimonial-text">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus arcu et ligula maximus vehicula. Phasellus at luctus lacus, quis eleifend nibh. Nam vitae convallis nisi, vitae tempus risus.</p>
											</div>
											<div class="testimonial-user-dt">
												<h5>Madeline S.</h5>
												<span>Events Co-ordinator</span>
												<ul>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
												</ul>
											</div>
											<span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<div class="testimonial-content">
											<div class="testimonial-text">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus arcu et ligula maximus vehicula. Phasellus at luctus lacus, quis eleifend nibh. Nam vitae convallis nisi, vitae tempus risus.</p>
											</div>
											<div class="testimonial-user-dt">
												<h5>Gabrielle B.</h5>
												<span>Administration</span>
												<ul>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
												</ul>
											</div>
											<span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<div class="testimonial-content">
											<div class="testimonial-text">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus arcu et ligula maximus vehicula. Phasellus at luctus lacus, quis eleifend nibh. Nam vitae convallis nisi, vitae tempus risus.</p>
											</div>
											<div class="testimonial-user-dt">
												<h5>Piyush G.</h5>
												<span>Application Developer</span>
												<ul>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
												</ul>
											</div>
											<span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<div class="testimonial-content">
											<div class="testimonial-text">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus arcu et ligula maximus vehicula. Phasellus at luctus lacus, quis eleifend nibh. Nam vitae convallis nisi, vitae tempus risus.</p>
											</div>
											<div class="testimonial-user-dt">
												<h5>Joanna P.</h5>
												<span>Event manager</span>
												<ul>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
												</ul>
											</div>
											<span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<div class="testimonial-content">
											<div class="testimonial-text">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus arcu et ligula maximus vehicula. Phasellus at luctus lacus, quis eleifend nibh. Nam vitae convallis nisi, vitae tempus risus.</p>
											</div>
											<div class="testimonial-user-dt">
												<h5>Romo S.</h5>
												<span>Admin</span>
												<ul>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
												</ul>
											</div>
											<span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<div class="testimonial-content">
											<div class="testimonial-text">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus arcu et ligula maximus vehicula. Phasellus at luctus lacus, quis eleifend nibh. Nam vitae convallis nisi, vitae tempus risus.</p>
											</div>
											<div class="testimonial-user-dt">
												<h5>Christopher F.</h5>
												<span>Online Marketing Executive</span>
												<ul>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
													<li><i class="fa-solid fa-star"></i></li>
												</ul>
											</div>
											<span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
										</div>
									</div>
								</div>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	<!-- Body End-->
	<!-- Footer Start-->
	<?php include "include/Footer.php";?>
	<!-- Footer End-->
	
	
	
	<script src="js/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>	
	<script src="vendor/mixitup/dist/mixitup.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/night-mode.js"></script>
	<script>	
		var containerEl = document.querySelector('[data-ref~="event-filter-content"]');

            var mixer = mixitup(containerEl, {
                selectors: {
                    target: '[data-ref~="mixitup-target"]'
                }
            });
	</script>
</body>
</html>