<?php ob_start(); ?>

<?php 
    $widgets=array("home-page-banner", "feature-2-block", "feature-3-block", "service-2-block", "faq-block"); 

    foreach($widgets as $widget){
        include "template/widgets/{$widget}.php";
    }
?>

<div class="project-one project-one--home-three">
    <div class="container">
        <div class="sec-title text-center">

            <h6 class="sec-title__tagline">Our projects</h6><!-- /.sec-title__tagline -->

            <h3 class="sec-title__title">Recent Closed Projects</h3><!-- /.sec-title__title -->
        </div><!-- /.sec-title -->
        <div class="project-one__carousel hiredots-owl__carousel hiredots-owl__carousel--with-shadow hiredots-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
			"items": 1,
			"margin": 30,
			"loop": false,
			"smartSpeed": 700,
			"nav": false,
			"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
			"dots": false,
			"autoplay": false,
			"responsive": {
				"0": {
					"items": 1
				},
				"576": {
					"items": 2
				},
				"992": {
					"items": 3
				},
				"1360": {
					"items": 4
				}
			}
			}'>
            <div class="item">
                <div class="project-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
                    <div class="project-one__img">
                        <img src="assets/images/project/project-1-1.jpg" alt="Staffing Solution">
                    </div>
                    <div class="project-one__content">
                        <span class="project-one__tagline">Resources</span>
                        <h3 class="project-one__title"><a href="project-details.html">Staffing Solution</a></h3>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
                    <div class="project-one__img">
                        <img src="assets/images/project/project-1-2.jpg" alt="Staffing Solution">
                    </div>
                    <div class="project-one__content">
                        <span class="project-one__tagline">Resources</span>
                        <h3 class="project-one__title"><a href="project-details.html">Staffing Solution</a></h3>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
                    <div class="project-one__img">
                        <img src="assets/images/project/project-1-3.jpg" alt="Staffing Solution">
                    </div>
                    <div class="project-one__content">
                        <span class="project-one__tagline">Resources</span>
                        <h3 class="project-one__title"><a href="project-details.html">Staffing Solution</a></h3>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
                    <div class="project-one__img">
                        <img src="assets/images/project/project-1-4.jpg" alt="Staffing Solution">
                    </div>
                    <div class="project-one__content">
                        <span class="project-one__tagline">Resources</span>
                        <h3 class="project-one__title"><a href="project-details.html">Staffing Solution</a></h3>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
                    <div class="project-one__img">
                        <img src="assets/images/project/project-1-5.jpg" alt="Staffing Solution">
                    </div>
                    <div class="project-one__content">
                        <span class="project-one__tagline">Resources</span>
                        <h3 class="project-one__title"><a href="project-details.html">Staffing Solution</a></h3>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
                    <div class="project-one__img">
                        <img src="assets/images/project/project-1-6.jpg" alt="Staffing Solution">
                    </div>
                    <div class="project-one__content">
                        <span class="project-one__tagline">Resources</span>
                        <h3 class="project-one__title"><a href="project-details.html">Staffing Solution</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="testimonials-three">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="sec-title text-left">

                    <h6 class="sec-title__tagline">Our Testimonials</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title">What They’re Talking<br> About Agency?</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="testimonials-three__carousel hiredots-owl__carousel owl-carousel" data-owl-options='{
						"items": 1,
						"margin": 0,
						"loop": true,
						"smartSpeed": 700,
						"nav": true,
						"navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
						"dots": false,
						"autoplay": false
					}'>
                    <div class="item">
                        <div class="testimonials-three__item">
                            <div class="testimonials-three__ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="testimonials-three__content">
                                This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.
                            </div>
                            <div class="testimonials-three__meta">
                                <h5 class="testimonials-three__meta__name">Christine Eve</h5><span class="testimonials-three__meta__dot">.</span>Our Customer
                            </div>
                        </div>
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-three__item">
                            <div class="testimonials-three__ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="testimonials-three__content">
                                This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.
                            </div>
                            <div class="testimonials-three__meta">
                                <h5 class="testimonials-three__meta__name">Alesha Brown</h5><span class="testimonials-three__meta__dot">.</span>Developer
                            </div>
                        </div>
                    </div><!-- /.item -->
                </div><!-- /.testimonials-three__carousel -->
            </div>
            <div class="col-lg-6">
                <div class="testimonials-three__thumbs">
                    <div class="testimonials-three__thumbs__item"><img src="assets/images/resources/testi-3-1.jpg" alt="hiredots"></div>
                    <div class="testimonials-three__thumbs__item"><img src="assets/images/resources/testi-3-2.jpg" alt="hiredots"></div>
                    <div class="testimonials-three__thumbs__item"><img src="assets/images/resources/testi-3-3.jpg" alt="hiredots"></div>
                    <div class="testimonials-three__thumbs__item"><img src="assets/images/resources/testi-3-4.jpg" alt="hiredots"></div>
                    <div class="testimonials-three__thumbs__icon"><img src="assets/images/shapes/testimonial-icon.png" alt="hiredots"></div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
</section><!-- /.testimonials-three -->
<section class="pricing-one" style="background-image: url(assets/images/shapes/pricing-bg-1.jpg);">
    <div class="container">
        <div class="sec-title text-center">

            <h6 class="sec-title__tagline">Our projects</h6><!-- /.sec-title__tagline -->

            <h3 class="sec-title__title">Check Our Impressive <br>Pricing & Plans</h3><!-- /.sec-title__title -->
        </div><!-- /.sec-title -->
        <div class="row gutter-y-30">
            <div class="col-md-6 col-lg-4">
                <div class="pricing-one__item">
                    <div class="pricing-one__inner">
                        <h3 class="pricing-one__title">Temprory <br>Recruitment</h3>
                        <div class="pricing-one__icon"><span class="icon-candidate"></span></div>
                        <div class="pricing-one__price">$130<span class="pricing-one__price__tagline">per role charges</span></div>
                        <p class="pricing-one__text">Average Percentage Fee <br>10% / Candiadte</p>
                        <a href="contact.html" class="hiredots-btn">
                            <span>Get started</span>
                        </a>
                    </div>
                </div><!-- /.pricing-one__item -->
            </div><!-- /.col-md-6 col-lg-4 -->
            <div class="col-md-6 col-lg-4">
                <div class="pricing-one__item">
                    <div class="pricing-one__inner">
                        <h3 class="pricing-one__title">Contract <br>Recruitment</h3>
                        <div class="pricing-one__icon"><span class="icon-recruitment"></span></div>
                        <div class="pricing-one__price">$230<span class="pricing-one__price__tagline">per role charges</span></div>
                        <p class="pricing-one__text">Average Percentage Fee <br>10% / Candiadte</p>
                        <a href="contact.html" class="hiredots-btn">
                            <span>Get started</span>
                        </a>
                    </div>
                </div><!-- /.pricing-one__item -->
            </div><!-- /.col-md-6 col-lg-4 -->
            <div class="col-md-6 col-lg-4">
                <div class="pricing-one__item">
                    <div class="pricing-one__inner">
                        <h3 class="pricing-one__title">Direct <br>Recruitment</h3>
                        <div class="pricing-one__icon"><span class="icon-recruitment-two"></span></div>
                        <div class="pricing-one__price">$330<span class="pricing-one__price__tagline">per role charges</span></div>
                        <p class="pricing-one__text">Average Percentage Fee <br>10% / Candiadte</p>
                        <a href="contact.html" class="hiredots-btn">
                            <span>Get started</span>
                        </a>
                    </div>
                </div><!-- /.pricing-one__item -->
            </div><!-- /.col-md-6 col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.pricing-one -->
<section class="features-one about-page--feature" style="background-image: url(assets/images/shapes/feature-bg-with-shape.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="features-one__left">
                    <div class="sec-title text-left">

                        <h6 class="sec-title__tagline">our benefits</h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">Hiredots Advantages of Working</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <p class="features-one__sec-text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry when an unknown printer. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <div class="features-one__video">
                        <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                            <i class="fa fa-play"></i>
                            Watch our video
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="features-one__right">
                    <div class="features-one__list">
                        <i class="icon-recruitment1"></i>
                        <h3 class="features-one__list__title">Sourcing Best <br>
                            Resource</h3>
                        <p class="features-one__list__info">There are many not of age of rm available the majority.</p>
                    </div>
                    <div class="features-one__list">
                        <i class="icon-save-time"></i>
                        <h3 class="features-one__list__title">Save Your <br>
                            Time & Money</h3>
                        <p class="features-one__list__info">There are many not of age of rm available the majority.</p>
                    </div>
                    <div class="features-one__list">
                        <i class="icon-background-check"></i>
                        <h3 class="features-one__list__title">Partners in <br>
                            Team Building</h3>
                        <p class="features-one__list__info">There are many not of age of rm available the majority.</p>
                    </div>
                    <div class="hiredots-stretch-element-inside-column">
                        <div class="features-one__bg">
                            <img src="assets/images/resources/features-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-one">
    <div class="container">
        <div class="sec-title text-center">

            <h6 class="sec-title__tagline">News Updates</h6><!-- /.sec-title__tagline -->

            <h3 class="sec-title__title">Latest Articles & <br>News from the Blogs</h3><!-- /.sec-title__title -->
        </div><!-- /.sec-title -->
        <div class="blog-one__carousel hiredots-owl__carousel hiredots-owl__carousel--with-shadow hiredots-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
			"items": 1,
			"margin": 0,
			"loop": false,
			"smartSpeed": 700,
			"nav": true,
			"navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
			"dots": false,
			"autoplay": false,
			"responsive": {
				"0": {
					"items": 1
				},
				"576": {
					"items": 2,
					"margin": 30
				},
				"992": {
					"items": 3,
					"margin": 30
				}
			}
			}'>
            <div class="item">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="blog-card__image">
                        <img src="assets/images/blog/blog-1-1.jpg" alt="Guide to HR Adviser and Clients Lessening">
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <div class="blog-card__date"><span>30</span>
                            Aug</div><!-- /.blog-card__date -->
                        <ul class="list-unstyled blog-card__meta">
                            <li><a href="blog.html"><i class="fas fa-tags"></i>Business</a></li>
                            <li><a href="blog-details.html"><i class="fa fa-comments"></i> 2 Comments</a></li>
                        </ul><!-- /.list-unstyled blog-card__meta -->
                        <h3 class="blog-card__title"><a href="blog-details.html">Guide to HR Adviser and Clients Lessening</a></h3><!-- /.blog-card__title -->
                        <p class="blog-card__info">Lorem ipsum is simply free dolor sit amet, consect pisicing elit.</p>
                        <a href="blog-details.html" class="blog-card__link">
                            Read more
                            <i class="icon-right-arrow"></i>
                        </a><!-- /.blog-card__link -->
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                    <div class="blog-card__image">
                        <img src="assets/images/blog/blog-1-2.jpg" alt="Top Skin care tips for oily skins">
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <div class="blog-card__date"><span>30</span>
                            Aug</div><!-- /.blog-card__date -->
                        <ul class="list-unstyled blog-card__meta">
                            <li><a href="blog.html"><i class="fas fa-tags"></i>Business</a></li>
                            <li><a href="blog-details.html"><i class="fa fa-comments"></i> 2 Comments</a></li>
                        </ul><!-- /.list-unstyled blog-card__meta -->
                        <h3 class="blog-card__title"><a href="blog-details.html">Top Skin care tips for oily skins</a></h3><!-- /.blog-card__title -->
                        <p class="blog-card__info">Lorem ipsum is simply free dolor sit amet, consect pisicing elit.</p>
                        <a href="blog-details.html" class="blog-card__link">
                            Read more
                            <i class="icon-right-arrow"></i>
                        </a><!-- /.blog-card__link -->
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                    <div class="blog-card__image">
                        <img src="assets/images/blog/blog-1-3.jpg" alt="Outstanding island for winter sun">
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <div class="blog-card__date"><span>30</span>
                            Aug</div><!-- /.blog-card__date -->
                        <ul class="list-unstyled blog-card__meta">
                            <li><a href="blog.html"><i class="fas fa-tags"></i>Business</a></li>
                            <li><a href="blog-details.html"><i class="fa fa-comments"></i> 2 Comments</a></li>
                        </ul><!-- /.list-unstyled blog-card__meta -->
                        <h3 class="blog-card__title"><a href="blog-details.html">Outstanding island for winter sun</a></h3><!-- /.blog-card__title -->
                        <p class="blog-card__info">Lorem ipsum is simply free dolor sit amet, consect pisicing elit.</p>
                        <a href="blog-details.html" class="blog-card__link">
                            Read more
                            <i class="icon-right-arrow"></i>
                        </a><!-- /.blog-card__link -->
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.item -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-one -->
<section class="contact-map contact-map--home-three">
    <div class="google-map google-map__contact">
        <iframe title="template google map" src="//www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="map__contact" allowfullscreen></iframe>
    </div>
    <!-- /.google-map -->
</section><!-- /.contact-map -->
<?php $contents = ob_get_clean(); ?>

<?php include "template/layout.php"; ?>