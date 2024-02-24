<?php $contents = ob_start() ?>
<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="page-header__shape"><img src="assets/images/shapes/page-header-shape.png" ></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">Contact</h2>
        <ul class="hiredots-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>Contact</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="contact-one pt-100 pb-100">
    <div class="container">
        <div class="contact-one__inner">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-one__content">
                        <div class="sec-title text-@@textAlign">

                            <h6 class="sec-title__tagline">Contact us</h6><!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title">Feel Free to Get in Touch with Bua & Miracle HR Consultancy</h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="contact-one__text">Connect Today: Empower Your Workforce with Bua & Miracle HR Consultancy
                        </p><!-- /.contact-one__text -->
                        <ul class="list-unstyled contact-one__info">
                            <li class="contact-one__info__item">
                                <div class="contact-one__info__icon">
                                    <i class="icon-phone-call-1"></i>
                                </div><!-- /.contact-one__info__icon -->
                                <div class="contact-one__info__content">
                                    <p class="contact-one__info__text">Have Question?</p>
                                    <!-- /.contact-one__info__text -->
                                    <h4 class="contact-one__info__title">Free <a href="tel:(+971)521984592">+(971) 521 984 592</a></h4><!-- /.contact-one__info__title -->
                                </div><!-- /.contact-one__info__content -->
                            </li>
                            <li class="contact-one__info__item">
                                <div class="contact-one__info__icon">
                                    <i class="icon-message"></i>
                                </div><!-- /.contact-one__info__icon -->
                                <div class="contact-one__info__content">
                                    <p class="contact-one__info__text">Write Email </p>
                                    <!-- /.contact-one__info__text -->
                                    <h4 class="contact-one__info__title"><a href="mailto:info@miraclehrhub.com">info@miraclehrhub.com</a></h4>
                                    <!-- /.contact-one__info__title -->
                                </div><!-- /.contact-one__info__content -->
                            </li>
                            <li class="contact-one__info__item">
                                <div class="contact-one__info__icon">
                                    <i class="icon-placeholder"></i>
                                </div><!-- /.contact-one__info__icon -->
                                <div class="contact-one__info__content">
                                    <p class="contact-one__info__text">Visit Anytime</p> <!-- /.contact-one__info__text -->
                                    <h4 class="contact-one__info__title"><a href="#">Bu Abdullah Investment Group,<br>Office No.209, Al Owais Building</a></h4><!-- /.contact-one__info__title -->
                                </div><!-- /.contact-one__info__content -->
                            </li>
                        </ul><!-- /.list-unstyled -->
                    </div><!-- /.contact-one__content -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="contact-one__left">
                        <form class="contact-one__form contact-form-validated form-one background-base wow fadeInUp" data-wow-duration="1500ms" action="">
                            <div class="form-one__group">
                                <div class="form-one__control form-one__control--full">
                                    <input type="text" name="name" placeholder="Your name">
                                </div><!-- /.form-one__control form-one__control--full -->
                                <div class="form-one__control form-one__control--full">
                                    <input type="email" name="email" placeholder="Email address">
                                </div><!-- /.form-one__control form-one__control--full -->
                                <div class="form-one__control form-one__control--full">
                                    <input type="text" name="phone" placeholder="Phone number">
                                </div><!-- /.form-one__control form-one__control--full -->

                                <div class="form-one__control form-one__control--full">
                                    <textarea name="message" placeholder="Write  a message"></textarea><!-- /# -->
                                </div><!-- /.form-one__control -->
                                <div class="form-one__control form-one__control--full">
                                    <button type="submit" class="hiredots-btn hiredots-btn--white"><span>send a message</span></button>
                                </div><!-- /.form-one__control -->
                            </div><!-- /.form-one__group -->
                        </form>
                    </div>

                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.contact-one__inner -->
    </div><!-- /.container -->
</section><!-- /.contact-one -->

<section class="contact-map">
    <div class="container">
        <div class="google-map google-map__contact">
            <iframe title="Miracle HR Hub Location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.3187704361876!2d55.33360847449136!3d25.25986002916143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d5cef7ee8cf%3A0x1fc94c378ac91af2!2sBu%20Abdullah%20Investment%20Group!5e0!3m2!1sen!2sin!4v1706687219721!5m2!1sen!2sin" class="map__contact" allowfullscreen></iframe>
        </div>
        <!-- /.google-map -->
    </div><!-- /.container-fluid -->
</section><!-- /.contact-map -->
<?php $contents = ob_get_clean() ?>
<?php include "template/layout.php"; ?>