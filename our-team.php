<?php $contents = ob_start() ?>
<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="page-header__shape"><img src="assets/images/shapes/page-header-shape.png" ></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">Our Team</h2>
        <ul class="hiredots-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>Our Team</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->


<section class="service-details">
    <div class="container">
        <div class="row gutter-y-30">
            <div class="col-md-12 col-lg-4">
                <div class="service-sidebar">
                    <?php include "template/widgets/about-us-sidebar.php" ?>
                </div><!-- /.sidebar -->
            </div><!-- /.col-md-12 col-lg-4 -->
            <div class="col-md-12 col-lg-8">
                <div class="service-details__content">
                    <?php include "template/widgets/team-1-block.php" ?>
                </div><!-- /.service-details__content -->
            </div><!-- /.col-md-12 col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.service-details -->



<?php $contents = ob_get_clean() ?>

<?php include "template/layout.php"; ?>