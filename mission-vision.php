<?php $contents = ob_start() ?>
<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="page-header__shape"><img src="assets/images/shapes/page-header-shape.png" alt="hiredots"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">Mission Vision</h2>
        <ul class="hiredots-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>Mission-Vision</span></li>
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
                <h3 class="service-details__title">Our Mission and Vision </h3><!-- /.service-details__title -->
                    <div class="service-details__thumbnail">
                        <img src="assets/images/resources/service-d-1.png" alt="Miracle HR Hub">
                    </div><!-- /.service-details__thumbnail -->
                    <h3 class="service-details__lighlight">Mission</h3>
                    <p class="service-details__text">Our mission at Bua & Miracle HR Consultancy is to bridge talents with opportunities, connecting the right individuals with organizations that align with their skills and aspirations. We are committed to delivering exceptional Recruitment and HR Services, enabling businesses to thrive and individuals to achieve their full potential.</p> 
                    
                    <h3 class="service-details__lighlight">Vision</h3>
                    <p class="service-details__text">Our vision is to be the leading HR consulting firm in the region, recognized for our expertise, professionalism, and commitment to excellence. We aim to build long-term partnerships with our clients, becoming their trusted advisors in talent acquisition and human resource management. We strive to create a positive impact on organizations, individuals, and communities by facilitating meaningful employment opportunities.</p> 

                    <h3 class="service-details__lighlight">Core Values</h3>
                    <p class="service-details__text"><strong>Integrity:</strong> We uphold the highest standards of honesty, transparency, and ethical conduct in all our interactions.</p> 
                    <p class="service-details__text"><strong>Excellence:</strong> We strive for excellence, delivering exceptional services that surpass expectations and consistently meet the needs of our clients.</p> 
                    <p class="service-details__text"><strong>Collaboration:</strong> We value collaboration, working closely with clients, candidates, and partners to create synergistic relationships and achieve mutual success.</p> 
                    <p class="service-details__text"><strong>Client-Centric Approach:</strong> Our clients are at the forefront of everything we do. We prioritize their needs, provide proactive support, and build long-lasting partnerships based on trust and exceptional service.</p> 
                    
                </div><!-- /.service-details__content -->
            </div><!-- /.col-md-12 col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.service-details -->
<?php $contents = ob_get_clean() ?>

<?php include "template/layout.php"; ?>