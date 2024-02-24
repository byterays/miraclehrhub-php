<?php $contents = ob_start() ?>
<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="page-header__shape"><img src="assets/images/shapes/page-header-shape.png" ></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">Overseas Recruitment Services</h2>
        <ul class="hiredots-breadcrumb list-unstyled">
            <li><a href="index.html">Services</a></li>
            <li><span>Overseas Recruitment</span></li>
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
                <h3 class="service-details__title">Overseas Recruitment Services</h3><!-- /.service-details__title -->
                    <div class="service-details__thumbnail">
                        <img src="assets/images/services/overseas-recruitment-services.jpg" alt="Miracle HR Hub">
                    </div><!-- /.service-details__thumbnail -->
                    <p class="service-details__text">Bua & Miracle HR Consultancy is your premier partner for Overseas Recruitment Services, offering tailored solutions to meet the global staffing needs of businesses across diverse industries. With our extensive network, industry expertise, and commitment to excellence, we specialize in connecting employers with top-tier talent from around the world.</p> 
                    <p class="service-details__text">Our Overseas Recruitment Services encompass every stage of the recruitment process, from candidate sourcing and screening to visa processing and deployment. We understand the complexities and challenges of international hiring and strive to simplify the process for our clients while ensuring compliance with local regulations and cultural sensitivities.</p> 
                    <p class="service-details__text">At Bua & Miracle HR Consultancy, we prioritize transparency, integrity, and professionalism in all our interactions. Whether you are seeking skilled professionals for short-term projects or permanent placements in foreign markets, we leverage our global reach and resources to identify and secure candidates who meet your specific requirements and contribute to the success and growth of your organization. Partner with us to unlock opportunities and build a workforce that drives innovation, productivity, and competitiveness on the global stage.</p> 
                    
                </div><!-- /.service-details__content -->
            </div><!-- /.col-md-12 col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.service-details -->
<?php $contents = ob_get_clean() ?>

<?php include "template/layout.php"; ?>