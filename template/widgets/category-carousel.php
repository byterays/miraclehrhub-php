<section class="project-one--home-three p-0">
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <?php
                $job_categories = [
                    ["name" => "Security Guard"],
                    ["name" => "Hotel and Restaurant"],
                    ["name" => "Administration"],
                    ["name" => "Administration"],
                    ["name" => "Contruction"],
                    ["name" => "Manufacturing"],
                    ["name" => "Engineering"],
                    ["name" => "Facilities and Property Services"],

                ];
                ?>
                <div class="hiredots-owl__carousel owl-theme owl-carousel" data-owl-options='{
                    
                    "margin": 10,
                    "smartSpeed": 300,
                    "loop":true,
                    "autoplay": 300,
                    "nav":false,
                    "dots":false,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive":{
                        "0":{
                            "items":1,
                            "margin": 0
                        },
                        "360":{
                            "items":2,
                            "margin": 30
                        },
                        "575":{
                            "items":3,
                            "margin": 30
                        },
                        "768":{
                            "items":3,
                            "margin": 40
                        },
                        "992":{
                            "items": 4,
                            "margin": 40
                        },
                        "1200":{
                            "items": 5
                        }
                    }
                    }'>
                    <?php

                    foreach ($job_categories as $category) {
                    ?>
                        <div class="client-carousel__one__item">
                            <center>
                                <a href="#" class="btn btn-danger"><?= $category["name"] ?> </a>
                            </center>
                        </div><!-- /.owl-slide-item-->
                    <?php
                    }
                    ?>


                </div><!-- /.thm-owl__slider -->
            </div>
        </div>

    </div><!-- /.container -->
</section>