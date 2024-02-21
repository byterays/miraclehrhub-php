<div class="client-carousel client-carousel-one ">
    <div class="container">
        <div class="client-carousel__one hiredots-owl__carousel owl-theme owl-carousel" data-owl-options='{
            "items": 5,
            "margin": 55,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": 6000,
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
                    "margin": 0
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

            $header_row = true;
            $data_file = "assets/data/clients-list.csv";
            if (($handle = fopen($data_file, "r")) !== FALSE) :
                while (($data = fgetcsv($handle, null, ",")) !== FALSE) :
                    if ($header_row) {
                        $header_row = false;
                        continue;
                    }
            ?>
            <div class="client-carousel__one__item">
                <img src="assets/images/clients/<?= $data[1] ?>" alt="<?= $data[0] ?>">
            </div><!-- /.owl-slide-item-->
            <?php
                endwhile;
                fclose($handle);
            endif;
            ?>
        </div><!-- /.thm-owl__slider -->
    </div><!-- /.container -->
</div><!-- /.client-carousel -->