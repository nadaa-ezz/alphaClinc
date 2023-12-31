<?php
include('include/head.php'); 
include('include/nav.php'); 
?>


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">About Us</h1>
                <a href="index.php" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="about.php" class="h4 text-white">About</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


 <!-- About Start -->
 <div class="container py-5 wow fadeInUp my-5" data-wow-delay="0.1s">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                        <h1 class="display-5 mb-0">Your Trusted Dental Care Partner</h1>
                    </div>
                    <h4 class="text-body fst-italic mb-4">At Alpha Clinic, we believe that a healthy smile is a gateway to confidence, well-being, and a vibrant life</h4>
                    <p class="mb-4">Our mission is to provide top-tier dental care that transcends expectations, creating lasting smiles one patient at a time. With a dedicated team of experienced professionals and a commitment to the latest advancements in dental technology, we aim to redefine your dental experience. Join us on a journey towards optimal oral health and a smile that reflects the best version of you</p>
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Award Winning</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>24/7 Opened</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <a href="appointment.php" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn" data-wow-delay="0.6s">Make Appointment</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
    </div>
    <!-- About End -->
    

    <?php 
   include('include/footer.php');
   ?>