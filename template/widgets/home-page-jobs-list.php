<div class="project-one--home-three  jobs background-gray mt-50">
    <div class="container ">
        <div class="sec-title text-center">
            <h3 class="sec-title__title upper-bar">Latest Jobs</h3><!-- /.sec-title__title -->
        </div>
        <div class="jobs-list row">

            <?php

            $header_row = true;
            $data_file = "assets/data/jobs/jobs-list.csv";
            if (($handle = fopen($data_file, "r")) !== FALSE) :
                while (($data = fgetcsv($handle, null, ",")) !== FALSE) :
                    if ($header_row) {
                        $header_row = false;
                        continue;
                    }
            ?>
                    <!-- begin job card  -->
                    <div class="col-md-6">
                        <div class="jobs-list__card my-1 p-2 ">
                            <div class="jobs-list__left">
                                <div class="jobs-list__logo">
                                    <img height="145" src="assets/images/jobs/<?= $data[2]?>" alt="">
                                </div>
                                <div class="jobs-list__content">
                                    <h3 class="jobs-list__title"><a href="job-category/security-guard"><?= $data[3] ?> (<?= $data[5] ?>)</a></h3>
                                    <h4 class="jobs-list__sub-title"><a href="job-category/security-guard"><?= $data[1] ?></a></h4>
                                    <!-- <span class="jobs-list__location">San Fransisco, California</span> -->
                                    <!-- <span class="jobs-list__price"><b>$85,000 - $90,000</b> Per Year</span> -->
                                    <span class="jobs-list__time"><i class="fas fa-clock"></i> Posted On: <?= $data[9] ?> </span>
                                    <a href="contact.html" class="hiredots-btn gray"> <i class="fa fa-eye"></i>View Details </a>
                                </div>
                            </div>
                            <div class="jobs-list__right">
                                <?php if ($data[8] == "yes") : ?>
                                    <a href="contact.html" class="hiredots-btn">Available</a>
                                    <a href="contact.html" class="hiredots-btn">Apply</a>
                                <?php else : ?>
                                    <span class="hiredots-btn red">Closed</span>
                                <?php endif; ?>


                            </div>
                        </div>
                    </div>
                    <!-- end job card  -->
            <?php
                endwhile;
                fclose($handle);
            endif;
            ?>

        </div>
    </div>
</div>