<?php
$banners = [
    [
        "banner-image"=>"assets/images/backgrounds/slider-3-1.jpg",
        "overlay-image"=>"assets/images/backgrounds/slider-overlay.png",
        "title" => "HR CONSULTANCY, RECRUITING AND PLACEMENT",
        "sub-title" => "Connecting Talent with Opportunity",
        "button"=>["text"=>"Discover More", "link"=>"overseas-recruitment-service"]
    ],
    [
        "banner-image"=>"assets/images/backgrounds/slider-3-2.jpg",
        "overlay-image"=>"assets/images/backgrounds/slider-overlay.png",
        "title" => "YOUR PARTNER FOR OVERSEAS RECRUITMENT",
        "sub-title" => "Empowering Your Global Workforce",
        "button"=>["text"=>"Discover More", "link"=>"overseas-recruitment-service"]
    ],
    [
        "banner-image"=>"assets/images/backgrounds/slider-3-3.jpg",
        "overlay-image"=>"assets/images/backgrounds/slider-overlay.png",
        "title" => "UNDERSTANDING YOUR UNIQUE NEEDS",
        "sub-title" => "Tailored Solutions for Your Success Journey",
        "button"=>["text"=>"Discover More", "link"=>"overseas-recruitment-service"]
    ]


];
?>

<section class="main-slider-three">
    <div class="main-slider-three__carousel hiredots-owl__carousel owl-carousel" data-owl-options='{
		"loop": true,
		"animateOut": "slideOutDown",
		"animateIn": "fadeIn",
		"items": 1,
		"autoplay": true,
		"autoplayTimeout": 6000,
		"smartSpeed": 1000,
		"nav": true,
        "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
		"dots": false,
		"margin": 0
	    }'>

        <?php foreach($banners as $banner): ?>
        <div class="item">
            <div class="main-slider-three__item">
                <div class="main-slider-three__bg" style="background-image: url(<?=$banner["banner-image"]?>);"></div>
                <div class="main-slider-three__overlay" style="background-image: url(<?=$banner["overlay-image"]?>);"></div>
                <div class="main-slider-three__shape"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-slider-three__content">
                                <h2 class="main-slider-three__title"><?=$banner["title"]?></h2><!-- slider-title -->
                                <p class="main-slider-three__text"><?=$banner["sub-title"]?></p><!-- slider-text -->
                                <div class="main-slider-three__btn">
                                    <a href="<?=$banner["button"]["link"]?>" class="hiredots-btn"><span><?=$banner["button"]["text"]?></span></a><!-- slider-btn -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <?php endforeach;?>
    </div>
</section>
<!-- main-slider-end -->