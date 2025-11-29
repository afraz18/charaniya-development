<!-- ==================== Start Footer ==================== -->

<footer class="footer-style1 pb-50px">
    <div class="container">
        <div class="row sm-marg">
            <!-- Left Section -->
            <div class="col-lg-8">
                <div class="fo-box-left v-align-between">
                    <div>
                        <div
                            class="d-flex align-items-center justify-content-between fs-14 mb-20px pb-20px line-bottom border-color-transparent-white-light">
                            <div>
                                <h2><span class="opacity-7">Let’s</span> <br> Start Your Project</h2>
                            </div>
                            <div>
                                <a href="contact" class="butn-arrow butn-rounded">
                                     <span class="text-uppercase fs-14 fw-500">Get a Quote</span>
                                        <span class="arrow-icon">
                                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7 11.5H17.0635M17.0635 11.5L12.5635 7M17.0635 11.5L12.5635 16">
                                                </path>
                                            </svg>
                                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7 11.5H17.0635M17.0635 11.5L12.5635 7M17.0635 11.5L12.5635 16">
                                                </path>
                                            </svg>
                                        </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex align-items-end justify-content-between">
                            <div>
                                <div class="f-logo w-250px mb-30px">
                                    <img src="assets/imgs/works/new-logo-charaniya.png" alt="Charaniya Development Service">
                                </div>
                                <p class="fs-14 text-uppercase fw-200">
                                    digital marketing.
                                </p>
                            </div>
                            <div class="tags text-align-right">
                                <a href="services-category">Services</a>
                                <a href="index">Portfolio</a>
                                <br>
                                <a href="about-cd">About Us</a>
                                <a href="blogs-category.php">Blog</a>
                                <a href="contact">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Section -->
            <div class="col-lg-4">
                <div class="fo-box-right d-flex v-align-between">
                    <div>
                        <h5>Follow Us Online</h5>
                        <div class="social-icon-circle mt-30px">
                            <a href="https://x.com/"><i class="fab fa-x"></i></a>
                            <a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a href="https://linkedin.com/in/afraj-charaniya-042484255"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="subscribe">
    <h6 class="fs-14 mb-15px"><i class="fa-solid fa-envelope mr-10px"></i> News</h6>
    <form id="subscribeForm" class="position-relative" method="post">
        <input type="email" placeholder="Enter your email address" name="subscribe" required>
        <button type="submit"><img src="assets/imgs/paper-plane.svg" alt="" class="w-30px"></button>
    </form>
    <p class="fs-14 mt-15px">
        By subscribing, you agree to our <a href="#0" class="underline">Privacy Policy</a>
    </p>
    <div id="subscribeMessage" style="margin-top:10px; font-size:14px; color:#ff6600;"></div>
</div>

<script>
document.getElementById('subscribeForm').addEventListener('submit', function(e){
    e.preventDefault();

    var formData = new FormData(this);

    fetch('subscribe.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('subscribeMessage').innerHTML = data;
        document.getElementById('subscribeForm').reset();
    })
    .catch(error => console.error('Error:', error));
});
</script>

                </div>
            </div>
        </div>
    </div>
    <div style="text-align: center; padding: 15px; font-size: 14px; color: #888;">
    &copy; 2025 <a href="https://charaniya-development.page.gd" style="text-decoration: none; color: inherit;">Charaniya Development</a>. All rights reserved.
  </div>
</footer>
<script>
document.getElementById('subscribeForm').addEventListener('submit', function(e){
    e.preventDefault(); // Prevent page reload

    var formData = new FormData(this);

    fetch('subscribe.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('subscribeMessage').innerHTML = data;
        document.getElementById('subscribeForm').reset(); // Clear form
    })
    .catch(error => console.error('Error:', error));
});
</script>
<!-- ==========================
     FULL WEBSITE PROTECTION
========================== -->

<style>
/* Disable image download, drag, selection */
img {
    -webkit-user-drag: none;
    user-select: none;
    pointer-events: none;
}

/* Disable text selection */
body {
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
</style>

<script>
// Disable Right Click
document.addEventListener("contextmenu", function(e){
    e.preventDefault();
});

// Disable Inspect Element Shortcuts
document.addEventListener("keydown", function(e) {
    // F12
    if (e.keyCode === 123) {
        e.preventDefault();
        return false;
    }
    // Ctrl + Shift + I
    if (e.ctrlKey && e.shiftKey && e.keyCode === 73) {
        e.preventDefault();
        return false;
    }
    // Ctrl + Shift + J
    if (e.ctrlKey && e.shiftKey && e.keyCode === 74) {
        e.preventDefault();
        return false;
    }
    // Ctrl + U
    if (e.ctrlKey && e.keyCode === 85) {
        e.preventDefault();
        return false;
    }
    // Ctrl + S (Save Page)
    if (e.ctrlKey && e.keyCode === 83) {
        e.preventDefault();
        return false;
    }
});
</script>

<!-- END PROTECTION CODE -->



<!-- ==================== End Footer ==================== -->
