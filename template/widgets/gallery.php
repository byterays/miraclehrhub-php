<section class="background-gray py-5">
    <div class="container">
        <div class="sec-title text-center">
            <h3 class="sec-title__title upper-bar ">Gallery</h3><!-- /.sec-title__title -->
        </div>
        <div class="row gutter-y-30">
            <?php

            $root = dirname(__DIR__, 2); // Change the number to adjust the level of directory hierarchy.
            $directory = "{$root}/assets/images/gallery/";
           

            $gallery_pics = scandir($directory);


            foreach ($gallery_pics as $image) :

                if (!is_dir($directory . '/' . $image)) :
            ?>
                    <div class="col-xs-6 col-md-4 col-lg-3">

                        <div class="project-one__img">
                            <img src="assets/images/gallery/<?= $image ?>">
                        </div>


                    </div>
            <?php
                endif;
            endforeach;
            ?>
        </div>
    </div>
</section>