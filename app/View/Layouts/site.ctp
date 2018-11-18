<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $this->fetch('title'); ?></title>
		<!-- Bootstrap CSS -->
		<?php echo $this->Html->css(array('site/bootstrap.min.css',
										  'site/slicknav.min.css',
										  'site/icofont.css',
										  'site/slick.css',
										  'site/font-awesome.min.css',
										  'site/owl.carousel.css',
										  'site/magnific-popup.css',
										  'site/switcher-style.css',
										  'site/animate.min.css',
										  'site/style.css',
										  'site/responsive.css')); ?>


											<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
											<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	</head>
	<body data-spy="scroll" data-target=".header" data-offset="50">

		<!-- header section start -->
		<header class="header">
			<div class="container">
				<div class="row flexbox-center">
					<div class="col-lg-2 col-md-3 col-6">
						<div class="logo">
							<a href="#"><?php echo $this->Html->image('site/logo.png',array("style"=>"height: 57px;")) ?></a>
						</div>
					</div>
					<div class="col-lg-10 col-md-9 col-6">
						<div class="responsive-menu"></div>
					    <div class="mainmenu">
                            <ul id="primary-menu">
                                <li><a class="nav-link active" href="#home">Home</a></li>
                                <li><a class="nav-link" href="#feature">Tour</a></li>
                                <li><a class="nav-link" href="#pricing">Pricing</a></li>
                         <li><?php echo $this->Html->link('Login',array('controller'=>'users','action'=>'login'),array('class'=>'nav-link')) ?></li>

                                <li><a class="nav-link" href="#contact">Contact Us</a></li>
                                <li><?php echo $this->Html->link('Get Started Free',array('controller'=>'users','action'=>'add'),array('class'=>'appao-btn')) ?></li>
                            </ul>
					    </div>
					</div>
				</div>
			</div>
		</header><!-- header section end -->
		<!-- hero area start -->
		<section class="hero-area" id="home">
			 <div class="player" data-property="{videoURL:'http://youtu.be/kn-1D5z3-Cs',containment:'#home',autoPlay:true, mute:true, startAt:0, showControls:false, loop:true, opacity:1}"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="hero-area-content">
							<h1>It’s all about Promoting your Business</h1>
							<p>Retail Marketing Automation for Facebook Messenger
Start conversations that build more valuable relationships with your customers and drive millions in extra revenue. </p>
							<?php echo $this->Html->link('Get started free',array('controller'=>'users','action'=>'add'),array('class'=>'appao-btn')) ?>

						</div>
					</div>
					<div class="col-lg-5">
					    <div class="hand-mockup text-lg-left text-center">
							<?php echo $this->Html->image('site/hand-mockup.png') ?>
						</div>
					</div>
				</div>
			</div>
		</section><!-- hero area end -->
		<!-- about section start -->
		<section class="about-area ptb-90" id="feature">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					    <div class="sec-title">
							<h2>HOW BRANDS USE <?php echo $get_title_app['Dynamique']['titile'] ?><span class="sec-title-border"><span></span><span></span><span></span></span></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
					    <div class="single-about-box">
							<i class="icofont icofont-tools-alt-2"></i>
							<h4>Close the Sale</h4>
							<p>Send abandoned cart, back in stock, and price alert messages based on website activity. No need for customers to login or enter their email address.</p>
						</div>
					</div>
					<div class="col-lg-4">
					    <div class="single-about-box active">
							<i class="icofont icofont-memorial"></i>
							<h4>Increase LTV</h4>
							<p>Create valuable long-term relationships with drip campaigns, win-back sequences, product recommendations and upsells.</p>
						</div>
					</div>
					<div class="col-lg-4">
					    <div class="single-about-box">
							<i class="icofont icofont-lego"></i>
							<h4>Happier Customers</h4>
							<p>Build and maintain a world-class brand with personalized messages, automated responses, smart receipts, engaging content, and FAQs.</p>
						</div>
					</div>
				</div>
			</div>
		</section><!-- about section end -->
		<!-- feature section start -->
		<section class="feature-area ptb-90" >
			<div class="container">
				<div class="row flexbox-center">
					<div class="col-lg-4">
						<div class="single-feature-box text-lg-right text-center">
							<ul>
								<li>
									<div class="feature-box-info">
										<h4>PERSONALIZED SEQUENCES</h4>
										<p>Trigger the perfect message at the right time </p>
									</div>
									<div class="feature-box-icon">
										<i class="icofont icofont-brush"></i>
									</div>
								</li>
								<li>
									<div class="feature-box-info">
										<h4>SUPERIOR SURFACING</h4>
										<p>Delivered right to your customers </p>
									</div>
									<div class="feature-box-icon">
										<i class="icofont icofont-computer"></i>
									</div>
								</li>
								<li>
									<div class="feature-box-info">
										<h4>FRICTIONLESS CAPTURE</h4>
										<p>See what a 90% opt-in rate looks like</p>
									</div>
									<div class="feature-box-icon">
										<i class="icofont icofont-law-document"></i>
									</div>
								</li>
								<li>
									<div class="feature-box-info">
										<h4>DASHBOARD</h4>
										<p>Measurable Results </p>
									</div>
									<div class="feature-box-icon">
										<i class="icofont icofont-heart-beat"></i>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="single-feature-box text-center">
							<?php echo $this->Html->image('site/feature.png') ?>

						</div>
					</div>
					<div class="col-lg-4">
						<div class="single-feature-box text-lg-left text-center">
							<ul>
								<li>
									<div class="feature-box-icon">
										<i class="icofont icofont-eye"></i>
									</div>
									<div class="feature-box-info">
										<h4>PERSONALIZED CAMPAIGNS</h4>
										<p>Segment your customers based on any attribute</p>
									</div>
								</li>
								<li>
									<div class="feature-box-icon">
										<i class="icofont icofont-sun-alt"></i>
									</div>
									<div class="feature-box-info">
										<h4>BACK-IN-STOCK NOTIFICATIONS</h4>
										<p>Send personalized reminders when a product is back in stock. </p>
									</div>
								</li>
								<li>
									<div class="feature-box-icon">
										<i class="icofont icofont-code-alt"></i>
									</div>
									<div class="feature-box-info">
										<h4>ON-SITE CONCIERGE</h4>
										<p>Automatically Reply to Customer Questions </p>
									</div>
								</li>
								<li>
									<div class="feature-box-icon">
										<i class="icofont icofont-headphone-alt"></i>
									</div>
									<div class="feature-box-info">
										<h4>PRODUCT RECOMMENDATIONS</h4>
										<p>Drive recommendations and upsells using the <?php echo $get_title_app['Dynamique']['titile'] ?> recommendation engine </p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section><!-- feature section end -->
		<!-- showcase section start -->
		<section class="showcase-area ptb-90">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					    <div class="sec-title">
							<h2>FULL FEATURED PLATFORM<span class="sec-title-border"><span></span><span></span><span></span></span></h2>
							<p>Meaningful Conversations, Automated</p>
						</div>
					</div>
				</div>
				<div class="row flexbox-center">
					<div class="col-lg-12">
						<div class="single-showcase-box">
							<p>Meaningful Conversations, Automated
Automate conversations that build valuable relationships with your customers and drive millions in extra revenue.</p>
						</div>
					</div>

				</div>
				<div class="row flexbox-center">
					<div class="col-lg-12">
						<div class="single-showcase-box">
							<?php echo $this->Html->image('site/showcas.png') ?>

						</div>
					</div>

				</div>
			</div>
		</section><!-- showcase section end -->
		<!-- video section start -->
		<section class="video-area ptb-90">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					    <div class="video-popup">
							<a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube"><i class="icofont icofont-ui-play"></i></a>
							<h1>Watch Video Demo</h1>
						</div>
					</div>
				</div>
			</div>
		</section><!-- video section end -->
		<!-- screenshots section start -->
		<section class="screenshots-area ptb-90" id="screenshot">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					    <div class="sec-title">
							<h2>Why Facebook Messenger?<span class="sec-title-border"><span></span><span></span><span></span></span></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="screenshot-wrap">
							<div class="row flexbox-center">
					<div class="col-lg-6">
						<div class="single-showcase-box">
							<h5>Tired of having your emails end up in spam? Crossing your fingers that you get inboxed? Spending lots of money for retargeting? Facebook Messenger bot solves this problem by providing a private channel of communication with each user. It’s instant and interactive, and no message is ever lost.</h5>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="single-showcase-box">
							<?php echo $this->Html->image('site/showcase.png') ?>

						</div>
					</div>
				</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- screenshots section end -->
		<!-- pricing section start -->
		<section class="pricing-area ptb-90" id="pricing">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					    <div class="sec-title">
							<h2>Pricing<span class="sec-title-border"><span></span><span></span><span></span></span></h2>
							<p>Our Pricing Plan</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">

					</div>
					<div class="col-lg-4">
						<div class="single-pricing-box">
							<div class="pricing-top">
								<h4>Professional</h4>
							</div>
							<div class="price">
								<h1><span>$</span>99</h1>
								<p>Pro</p>
							</div>
							<div class="price-details">
								<ul>
									<li>3,000 recipients per month</li>
									<li>Email & Chat Support</li>
									<li>$25 for each additional 1,000 recipients</li>

								</ul>
								<a class="appao-btn" href="#">14 Day Free Trial</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="single-pricing-box">
							<div class="pricing-top">
								<h4>Enterprise </h4>
							</div>
							<div class="price">
								<h1>Contact Us</h1>
								<p>Enterprise </p>
							</div>
							<div class="price-details">
								<ul>
									<li>Unlimited recipients</li>
									<li>Email, Chat, and Phone Support</li>
									<li>Custom Integrations</li>

								</ul>
								<a class="appao-btn" href="#">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- pricing section end -->
		<!-- testimonial section start -->


		 <section class="screenshots-area ptb-90" id="screenshot">

		</section>
		<!-- footer section start -->
		<footer class="footer" id="contact">
			<div class="container">
				<div class="row">
                    <div class="col-lg-6">
						<div class="contact-form">
							<h4>Get in Touch</h4>
							<p class="form-message"></p>
							<form id="contact-form" action="#" method="POST">
				                <input type="text" name="name" placeholder="Enter Your Name">
				                <input type="email" name="email" placeholder="Enter Your Email">
				                <input type="text" name="subject" placeholder="Your Subject">
				                <textarea placeholder="Messege" name="message"></textarea>
				                <button type="submit" name="submit">Send Message</button>
				            </form>
						</div>
                    </div>
                    <div class="col-lg-6">
						<div class="contact-address">
							<h4>Address</h4>
							<p>Casablanca,Morocco</p>
							<ul>
								<li>
									<div class="contact-address-icon">
										<i class="icofont icofont-headphone-alt"></i>
									</div>
									<div class="contact-address-info">
										<a href="callto:#">+212600000000</a>
									</div>
								</li>
								<li>
									<div class="contact-address-icon">
										<i class="icofont icofont-envelope"></i>
									</div>
									<div class="contact-address-info">
										<a href="mailto:#">contact@contact.com</a>
									</div>
								</li>
								<li>
									<div class="contact-address-icon">
										<i class="icofont icofont-web"></i>
									</div>
									<div class="contact-address-info">
										<a href="www.jsoftbd.com">www.<?php echo $get_title_app['Dynamique']['titile'] ?>.com</a>
									</div>
								</li>
							</ul>
						</div>
                    </div>
				</div>
				<div class="row">
                    <div class="col-lg-12">
						<div class="subscribe-form">
							<form action="#">
								<input type="text" placeholder="Your email address here">
								<button type="submit">Subcribe</button>
							</form>
						</div>
                    </div>
				</div>
				<div class="row">
                    <div class="col-lg-12">
						<div class="copyright-area">
							<ul>
								<li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
								<li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
								<li><a href="#"><i class="icofont icofont-brand-linkedin"></i></a></li>
								<li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
								<li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
							</ul>
							<p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						</div>
                    </div>
				</div>
			</div>
		</footer><!-- footer section end -->
		<a href="#" class="scrollToTop">
			<i class="icofont icofont-arrow-up"></i>
		</a>

		<!-- jquery main JS -->
		<?php echo $this->Html->script(array(
										'site/main.js',
										'site/bootstrap.min.js',
										'site/jquery.slicknav.min.js',
										'site/slick.min.js',
										'site/owl.carousel.min.js',
										'site/jquery.counterup.min.js',
										'site/waypoints.min.js',
										'site/jquery.mb.YTPlayer.min.js',
										'site/gmap3.min.js',
										'site/wow-1.3.0.min.js',
										'site/switcher.js',
									'site/jquery.min.js',
								'site/jquery.magnific-popup.min.js',
							'site/jquery.easing.1.3.js'));?>



	</body>
</html>
