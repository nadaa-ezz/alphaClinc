<?php
include('include/head.php');
include('include/nav.php');
?>



<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Appointment</h1>
            <a href="" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h4 text-white">Appointment</a>
        </div>
    </div>
</div>
<!-- Hero End -->


<!-- Appointment Start -->
<div class="container-fluid  bg-appointment mb-5 wow fadeInUp my-5" data-wow-delay="0.1s" style="margin-top: 90px; margin-bottom:90px;">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 py-5">
                <div class="py-5">
                    <h1 class="display-5 text-white mb-4">We Are A Certified and Award Winning Dental Clinic You Can Trust</h1>
                    <p class="text-white mb-0">we take immense pride in being a certified and award-winning dental clinic that you can trust. Our commitment to excellence and patient satisfaction has earned us recognition in the dental industry. We are dedicated to providing the highest quality dental care to our patients. Our team's expertise, combined with state-of-the-art technology, ensures that you receive the best treatment possible. Rest assured, your dental health is in the hands of professionals who care.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                    <h1 class="text-white mb-4">Make Appointment</h1>
                    <form id="appointmentForm">
                        <div class="row g-3 my-5">
                            <div class="col-12 col-sm-6">
                                <select class="form-select bg-light border-0" style="height: 55px;" id="service">
                                    <option selected>Select A Service</option>
                                    <option value="Cosmetic Dentistry">Cosmetic Dentistry</option>
                                    <option value="Dental Implants">Dental Implants</option>
                                    <option value="Dental Bridges">Dental Bridges</option>
                                    <option value="Teeth Whitening">Teeth Whitening</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <select class="form-select bg-light border-0" style="height: 55px;" id="doctor">
                                    <option selected>Select Doctor</option>
                                    <option value="Dr. Abdelrahman mohammed">Dr. Abdelrahman mohammed</option>
                                    <option value="Dr. Nour Adel">Dr. Nour Adel</option>
                                    <option value="Dr. Kareem Elsaid">Dr. Kareem Elsaid</option>
                                    <option value="Dr. walaa Ahmed">Dr. walaa Ahmed</option>
                                    <option value="Dr. Gamal Ramzy">Dr. Gamal Ramzy</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;" id="name">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;" id="email">
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="text" class="form-control bg-light border-0 datetimepicker-input" placeholder="Appointment Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;" id="date">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="time" id="time1" data-target-input="nearest">
                                    <input type="text" class="form-control bg-light border-0 datetimepicker-input" placeholder="Appointment Time" data-target="#time1" data-toggle="datetimepicker" style="height: 55px;" id="time">
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">Make Appointment</button>
                            </div>
                            <div>
                                <span id="errorMsg" class="text-danger text-center"> </span>
                            </div>
                        </div>
                    </form>
                    <div id="thanksMsg" style="display: none;">
                        <p class="text-success">Thank you, we will contact you soon.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->




<?php
include('include/footer.php');
?>

<script>
    document.getElementById("appointmentForm").addEventListener("submit", function(event) {
        event.preventDefault();

        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var doctor = document.getElementById("doctor").value;
        var service = document.getElementById("service").value;
        var date = document.getElementById("date").value;
        var time = document.getElementById("time").value;

        if (name.trim() !== "" && email.trim() !== "") {
            document.getElementById("appointmentForm").style.display = "none";
            document.getElementById("thanksMsg").style.display = "block";

            setTimeout(function() {
                document.getElementById("appointmentForm").style.display = "block";
                document.getElementById("thanksMsg").style.display = "none";
                document.getElementById("appointmentForm").reset();
            }, 5000);
        } else {
            document.getElementById("errorMsg").textContent = "Please fill out all fields.";
        }
    });
</script>