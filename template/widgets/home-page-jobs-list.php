<div class="project-one--home-three  jobs background-gray">
    <div class="container ">
        <div class="sec-title text-center">
            <h3 class="sec-title__title upper-bar">Latest Jobs</h3><!-- /.sec-title__title -->
        </div>
        <div class="jobs-list row">

            <?php

            $header_row = true;
            $data_file = "assets/data/jobs-list.csv";
            if (($handle = fopen($data_file, "r")) !== FALSE) :
                while (($data = fgetcsv($handle, null, ",")) !== FALSE) :
                    if ($header_row) {
                        $header_row = false;
                        continue;
                    }

                    //if published
                    if($data[10]=="yes"):
            ?>
                    <!-- begin job card  -->
                    <div class="job-info col-md-6">
                        <div class="jobs-list__card my-1 p-2 ">
                            <div class="jobs-list__left">
                                <div class="jobs-list__logo">
                                    <img width="150" src="assets/images/jobs/<?= $data[2] ?>" alt="<?= $data[1] ?>">
                                </div>
                                <div class="jobs-list__content">
                                    <h3 class="jobs-list__title"><a href="job-category/security-guard"><?= $data[3] ?> (<?= $data[5] ?>)</a></h3>
                                    <h4 class="jobs-list__sub-title"><a href="job-category/security-guard"><?= $data[1] ?></a></h4>
                                    <!-- <span class="jobs-list__location">San Fransisco, California</span> -->
                                    <span class="jobs-list__price">Salary: <b><?=$data[6]?></b></span>
                                    <div class="jobs-list__time"><a><?=strtoupper($data[0])?></a> <i class="fas fa-clock"></i> Posted On: <?= $data[9] ?> </div>

                                    <div class="col-md-12">
                                        
                                        <a href="contact" class="hiredots-btn gray job-detail" data-bs-toggle="modal" data-bs-target="#modal-popup"> <i class="fa fa-eye"></i>View Details </a>
                                        <?php if ($data[8] == "yes") : ?>
                                            <a href="contact" class="hiredots-btn">Apply Now</a>
                                        <?php else : ?>
                                            <span class="hiredots-btn red">Job Closed</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end job card  -->
            <?php
                    endif;
                endwhile;
                fclose($handle);
            endif;
            ?>
        </div>
    </div>
</div>