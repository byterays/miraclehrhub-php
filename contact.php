<?php $contents = ob_start() ?>
<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="page-header__shape"><img src="assets/images/shapes/page-header-shape.png" alt="hiredots"></div>
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

                            <h3 class="sec-title__title">Feel Free to Get in Touch <br> with Hiredots</h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="contact-one__text">Aliquam hendrerit a augue insuscipit. Etiam aliquam massa quis des
                            mauris commodo venenatis ligula commodo leez sed blandit convallis dignissim onec vel
                            pellentesque neque.
                        </p><!-- /.contact-one__text -->
                        <ul class="list-unstyled contact-one__info">
                            <li class="contact-one__info__item">
                                <div class="contact-one__info__icon">
                                    <i class="icon-phone-call-1"></i>
                                </div><!-- /.contact-one__info__icon -->
                                <div class="contact-one__info__content">
                                    <p class="contact-one__info__text">Have Question?</p>
                                    <!-- /.contact-one__info__text -->
                                    <h4 class="contact-one__info__title">Free <a href="tel:+92(8800)-8960">+23 (000)-9850</a></h4><!-- /.contact-one__info__title -->
                                </div><!-- /.contact-one__info__content -->
                            </li>
                            <li class="contact-one__info__item">
                                <div class="contact-one__info__icon">
                                    <i class="icon-message"></i>
                                </div><!-- /.contact-one__info__icon -->
                                <div class="contact-one__info__content">
                                    <p class="contact-one__info__text">Write Email </p>
                                    <!-- /.contact-one__info__text -->
                                    <h4 class="contact-one__info__title"><a href="mailto:needhelp@company.com">needhelp@company.com</a></h4>
                                    <!-- /.contact-one__info__title -->
                                </div><!-- /.contact-one__info__content -->
                            </li>
                            <li class="contact-one__info__item">
                                <div class="contact-one__info__icon">
                                    <i class="icon-placeholder"></i>
                                </div><!-- /.contact-one__info__icon -->
                                <div class="contact-one__info__content">
                                    <p class="contact-one__info__text">Visit Anytime</p> <!-- /.contact-one__info__text -->
                                    <h4 class="contact-one__info__title"><a href="#">30 broklyn golden street. New York</a></h4><!-- /.contact-one__info__title -->
                                </div><!-- /.contact-one__info__content -->
                            </li>
                        </ul><!-- /.list-unstyled -->
                    </div><!-- /.contact-one__content -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="contact-one__left">
                        <form class="contact-one__form contact-form-validated form-one background-base wow fadeInUp" data-wow-duration="1500ms" action="https://thegenius.co/html/hiredots/inc/sendemail.php">
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
            <iframe title="template google map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="map__contact" allowfullscreen></iframe>
        </div>
        <!-- /.google-map -->
    </div><!-- /.container-fluid -->
</section><!-- /.contact-map -->
<?php $contents = ob_get_clean() ?>
<?php include "template/layout.php"; ?>