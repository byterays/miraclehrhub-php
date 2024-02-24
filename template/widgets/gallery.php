<section class="background-gray py-5">
    <div class="container">
        <div class="sec-title text-center">
            <h3 class="sec-title__title upper-bar ">Gallery</h3><!-- /.sec-title__title -->
        </div>
        <div class="row gutter-y-30">
            <?php

            $root = dirname(__DIR__, 2); // Change the number to adjust the level of directory hierarchy.
            $directory = "{$root}/assets/images/gallery/";


            $gallery_pics = [
                "miracle-gallery 11.jpg", "miracle-gallery 12.jpg", "miracle-gallery 13.jpg",
                "miracle-gallery 14.jpg", "miracle-gallery1.jpg", "miracle-gallery10.jpg",
                "miracle-gallery2.jpg", "miracle-gallery3.jpg", "miracle-gallery4.jpg",
                "miracle-gallery5.jpg", "miracle-gallery6.jpg", "miracle-gallery7.jpg",
                "miracle-gallery8.jpg", "miracle-gallery9.jpg"
            ];



            foreach ($gallery_pics as $image) :

              
            ?>
                    <div class="col-xs-6 col-md-4 col-lg-3">

                        <div class="project-one__img">
                            <img src="assets/images/gallery/<?= $image ?>">
                        </div>


                    </div>
            <?php
              
            endforeach;
            ?>
        </div>
    </div>
</section>