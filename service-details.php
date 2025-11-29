<?php 
include 'config.php';
include 'header.php';

// Get the service slug from URL
$slug = $_GET['service'] ?? '';

// Fetch service data
$sql = "SELECT * FROM services WHERE slug='$slug' LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo "<h1 style='text-align:center;margin-top:100px;'>Service Not Found</h1>";
    include 'footer.php';
    exit;
}

$service = $result->fetch_assoc();
?>

<div id="smooth-wrapper">


        <div id="smooth-content">

            <main class="o-hidden">

<!-- ==================== Start Header ==================== -->

<header class="pg-hero">
    <div class="container">
        <div class="row mb-80px">
            <div class="col-lg-2">
                <span class="butn-bord-sm mb-15px">Service Details</span>
            </div>

            <div class="col-lg-10">
                <span class="fs-16 text-uppercase fw-300 mb-10px opacity-7">
                    <?= $service['subtitle']; ?>
                </span>

                <h1 class="fs-80">
                    <?= $service['title']; ?>
                </h1>

                <div class="info mt-50px"></div>
            </div>
        </div>
    </div>

    <div class="container-xxl">
        <div class="o-hidden border-radius-100px h-700px">
            <div class="bg-img background-position-center h-800px"
                data-background="assets/imgs/serv/<?= $service['image']; ?>"
                data-speed="0.5" data-lag="0">
            </div>
        </div>
    </div>
</header>

<!-- ==================== End Header ==================== -->

<!-- ==================== Start Blogs ==================== -->



<section class="pb-80px pt-80px">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-8">
                <div class="main-post">
                    <div class="item pb-60px">
                        <article>
                            <div class="text">
                                <p><?= nl2br($service['description']); ?></p>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="contact mt-80px">
                    <div class="mb-60px">
                        <h3>Service Inquiry</h3>
                    </div>

                    <form id="service-form" class="form2" method="post" action="services-message.php">
    <div class="controls row">

        <div class="col-lg-6">
            <div class="form-group mb-30px">
                <input type="text" name="name" placeholder="Name" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group mb-30px">
                <input type="email" name="email" placeholder="Email" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group mb-30px">
                <input type="text" name="mobile" placeholder="Mobile Number" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group mb-30px">
                <input type="text" name="service" value="<?= $service['title']; ?>" readonly>
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <textarea name="message" rows="4" placeholder="Message" required></textarea>
            </div>

            <button type="submit" class="butn-arrow butn-rounded main-colorbg mt-30px">
                <span class="text-uppercase fs-14 fw-500">Send Message</span>
            </button>
        </div>

    </div>
</form>
<div id="popup" style="
    display:none;
    position: fixed;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    background: #28a745;
    color: #fff;
    padding: 15px 25px;
    border-radius: 6px;
    text-align: center;
    z-index: 1000;">
    Message Sent Successfully!
</div>



                </div>
            </div>

        </div>
    </div>

</section>


                <!-- ==================== End Blogs ==================== -->



                 <?php include 'footer.php'
?>
                <!-- ==================== End Footer ==================== -->

            </main>


        </div>

    </div>

<script>
const form = document.getElementById('service-form');
const popup = document.getElementById('popup');

form.addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(form);

    fetch('services-message.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        // Set popup message and color
        popup.textContent = data.message;
        popup.style.background = data.status === 'success' ? '#28a745' : '#dc3545';
        popup.style.display = 'block';

        if (data.status === 'success') {
            form.reset();
        }

        setTimeout(() => {
            popup.style.display = 'none';
        }, 3000);
    })
    .catch(error => {
        popup.textContent = 'Something went wrong!';
        popup.style.background = '#dc3545';
        popup.style.display = 'block';
        setTimeout(() => {
            popup.style.display = 'none';
        }, 3000);
    });
});
</script>





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


</body>


<!-- Mirrored from uithemez.com/i/mivon_html/project-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Nov 2025 17:33:26 GMT -->
</html>