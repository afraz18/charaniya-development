<?php
$title = "Contact Charaniya Development — Hire Web Developer in Surat";
$description = "Get in touch for dynamic websites, PHP MySQL development, digital marketing, and student projects.";
include 'header.php';
?>

 <div id="smooth-wrapper">


        <div id="smooth-content">

            <main class="o-hidden">


                <!-- ==================== Start Header ==================== -->

                <header class="pg-hero">
                    <div class="container">
                        <div class="row mb-80px">
                            <div class="col-lg-2">
                                <div class="pt-15px">
                                    <span class="butn-bord-sm mb-15px">Contact</span>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div>
                                    <h1 class="fs-80">Your vision, my expertise<br>contact me to begin</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-xxl">
                        <div class="o-hidden border-radius-100px h-700px">
                            <div class="bg-img background-position-center h-800px"
                                data-background="assets/imgs/works/contact-us.png" data-speed="0.5" data-lag="0">
                            </div>
                        </div>
                    </div>
                </header>

                <!-- ==================== End Header ==================== -->



                <!-- ==================== Start section ==================== -->

                <section class="contact-style2">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="box-info p-30px border-radius-30px sub-bg mb-30px">
                                            <span class="fs-40 mb-30px"><i class="fa-solid fa-location-dot"></i></span>
                                            <h6
                                                class="fs-18 text-uppercase mb-30px pb-30px line-bottom border-color-transparent-white-light">
                                                My Presence</h6>
                                            <p>Baldevi Kuwa Faliya, Silvassa, Dadra & Nagar Haveli 396230</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="box-info p-30px border-radius-30px sub-bg mb-30px">
                                            <span class="fs-40 mb-30px"><i class="fa-solid fa-envelope"></i></span>
                                            <h6
                                                class="fs-18 text-uppercase mb-30px pb-30px line-bottom border-color-transparent-white-light">
                                                Email Address</h6>
                                            <p><a href="#0">afrajcharniya264@gmail.com</a></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="box-info p-30px border-radius-30px sub-bg mb-30px">
                                            <span class="fs-40 mb-30px"><i class="fa-solid fa-phone"></i></span>
                                            <h6
                                                class="fs-18 text-uppercase mb-30px pb-30px line-bottom border-color-transparent-white-light">
                                                Phone</h6>
                                            <p>+91 8511290712</p>
                                            <p>+91 9427608005</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact mt-80px">

    <!-- Success / Error Message -->
    <div id="form-status"></div>

    <form id="contact-form" class="form2">

        <div class="controls row">

            <div class="col-lg-6">
                <div class="form-group mb-30px">
                    <input type="text" name="name" placeholder="Full Name *" required>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group mb-30px">
                    <input type="email" name="email" placeholder="Email Address *" required>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group mb-30px">
                    <input type="text" name="phone" placeholder="Mobile Number *" required>
                </div>
            </div>

           <div class="col-lg-6">
                <div class="form-group mb-30px">
                    <input type="text" name="service" placeholder="Service Required *" required>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group mb-30px">
                    <input type="text" name="subject" placeholder="Subject (Optional)">
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <textarea name="message" placeholder="Write your message here..." rows="4" required></textarea>
                </div>

                <div class="mt-30px">
                    <button type="submit" class="butn-arrow butn-rounded main-colorbg mt-30px">
                        <span class="text-uppercase fs-14 fw-500">Send Message</span>
                    </button>
                </div>
            </div>

        </div>

    </form>
</div>

                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End section ==================== -->
                 <?php include 'footer.php'
?>





            </main>


        </div>

    </div>










    <!-- jQuery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jquery-migrate-3.4.0.min.js"></script>

    <!-- plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>

    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollSmoother.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/smoother-script.js"></script>

    <!-- custom scripts -->
    <script src="assets/js/scripts.js"></script>
    <script>
document.getElementById("contact-form").addEventListener("submit", function(e) {
    e.preventDefault();

    let formData = new FormData(this);

    fetch("contact-backend.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.text())
    .then(data => {

        document.getElementById("form-status").innerHTML = `
            <div style="
                padding:12px;
                background:#d4f8d4;
                color:#1f7c1f;
                border-radius:6px;
                margin-bottom:20px;
                font-size:16px;
                font-weight:500;">
                ${data}
            </div>`;

        document.getElementById("contact-form").reset();
    })
    .catch(() => {
        document.getElementById("form-status").innerHTML = `
            <div style="
                padding:12px;
                background:#ffdada;
                color:#b30000;
                border-radius:6px;
                margin-bottom:20px;
                font-size:16px;
                font-weight:500;">
                Something went wrong! Try again.
            </div>`;
    });
});
</script>



</body>


<!-- Mirrored from uithemez.com/i/mivon_html/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Nov 2025 17:33:22 GMT -->
</html>