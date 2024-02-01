<?php $contents = ob_start() ?>
<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="page-header__shape"><img src="assets/images/shapes/page-header-shape.png" alt="hiredots"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">Global Reach</h2>
        <ul class="hiredots-breadcrumb list-unstyled">
            <li><a href="index.html">Services</a></li>
            <li><span>Global Reach</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="service-details">
    <div class="container">
        <div class="row gutter-y-30">
            <div class="col-md-12 col-lg-4">
                <div class="service-sidebar">
                    <?php include "template/widgets/service-sidebar.php" ?>
                </div><!-- /.sidebar -->
            </div><!-- /.col-md-12 col-lg-4 -->
            <div class="col-md-12 col-lg-8">
                <div class="service-details__content">
                    <h3 class="service-details__title">Manpower Supply to Different Countries</h3><!-- /.service-details__title -->
                    <div class="service-details__thumbnail">
                        <img src="assets/images/company/mission-vision.jpg" alt="Miracle HR Hub">
                    </div><!-- /.service-details__thumbnail -->
                    <p class="service-details__text">Bua & Miracle HR Consultancy specializes in providing comprehensive Manpower Supply services to different countries including Middle East, East Asia, Europe, Canada, Australia, New Zealand, Japan and beyond., catering to the diverse needs of businesses across various industries. With a strategic approach and a commitment to excellence, we facilitate the seamless recruitment, selection, and deployment of skilled professionals to meet the staffing requirements of our clients worldwide.</p>
                    <p class="service-details__text">Our dedicated team works closely with both employers and candidates to ensure a mutually beneficial partnership. We meticulously assess the qualifications, experience, and cultural fit of potential candidates to ensure they align with the specific demands of each role and organization.</p>
                    <p class="service-details__text">Additionally, we offer comprehensive support services including visa processing, documentation, and logistics coordination to streamline the deployment process and minimize administrative burdens for our clients.</p>
                    <p class="service-details__text">At Bua & Miracle HR Consultancy, we prioritize transparency, integrity, and professionalism in all our interactions. Whether you require manpower for short-term projects or long-term assignments, we are committed to delivering tailored solutions that drive productivity, efficiency, and success for your business operations across borders.</p>

                </div><!-- /.service-details__content -->
            </div><!-- /.col-md-12 col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.service-details -->
<?php $contents = ob_get_clean() ?>

<?php include "template/layout.php"; ?>