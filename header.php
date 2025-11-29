<!DOCTYPE html>
<html lang="zxx">



<head>

    <!-- Metas -->
<?php
// Default SEO (Home Page)
if(!isset($title)) { $title = "Charaniya Development — Dynamic Website & PHP MySQL Developer"; }
if(!isset($description)) { $description = "Charaniya Development provides dynamic websites, PHP MySQL development, responsive design, and digital marketing solutions."; }
if(!isset($keywords)) { $keywords = "web development, dynamic website, php mysql developer, website design, responsive website, Surat web developer, digital marketing"; }
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>">
<meta name="keywords" content="<?php echo $keywords; ?>">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://charaniya-development.page.gd/">

<!-- OG Tags -->
<meta property="og:title" content="<?php echo $title; ?>">
<meta property="og:description" content="<?php echo $description; ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Charaniya Development">



<!-- Canonical URL -->
<?php
$current_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$canonical = strtok($current_url, '?');
?>
<link rel="canonical" href="<?= htmlspecialchars($canonical) ?>" />

<!-- Mobile friendly -->
<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title  -->
    <title>Charaniya Development | Web • App • Digital Marketing</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="assets/imgs/works/c_updated_logo.png">
    <link rel="apple-touch-icon" href="c_updated_logo.png">
    <link rel="android-chrome" sizes="192x192" href="c_updated_logo.png">
    <link rel="favicon" sizes="32x32" href="c_updated_logo.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Funnel+Display:wght@300..800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mozilla+Text:wght@200..700&amp;display=swap" rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="assets/css/style.css">
<!-- Favicon -->
<link rel="icon" type="image/png" href="https://charaniya-development.page.gd/c_updated_logo.png">

<!-- Open Graph (Google, Facebook, Instagram) -->
<meta property="og:title" content="Charaniya Development">
<meta property="og:site_name" content="Charaniya Development">
<meta property="og:type" content="website">
<meta property="og:url" content="https://charaniya-development.page.gd/">
<meta property="og:image" content="https://charaniya-development.page.gd/c_updated_logo.png">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Charaniya Development">
<meta name="twitter:image" content="https://charaniya-development.page.gd/c_updated_logo.png">

<!-- Schema Markup (Strongest for Google Logo) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Charaniya Development",
  "url": "https://charaniya-development.page.gd/",
  "logo": "https://charaniya-development.page.gd/c_updated_logo.png"
}
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q336HXDHZK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Q336HXDHZK');
</script>

</head>

<body class="home-freelancer">




    <!-- ==================== Start Loading ==================== -->

    <div class="loader-wrap">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="loader-wrap-heading">
            <div class="load-text">
                <span>I</span>
                <span>N</span>
                <br>
                <span>W</span>
                <span>H</span>
                <span>I</span>
                <span>L</span>
                <span>E</span>
            </div>
        </div>
    </div>

    <!-- ==================== End Loading ==================== -->


    <div class="cursor"></div>
    <div class="blur-div"></div>


    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->



    <!-- ==================== Start Navbar ==================== -->

    <nav class="navbar navbar-expand-lg">
        <div class="container align-items-center">

            <!-- Logo -->
            <!-- Logo -->
<a class="navbar-brand d-flex align-items-center" href="index.php">
    <img src="assets/imgs/works/new-logo-charaniya.png" 
         alt="Charaniya Development Logo" 
         class="logo-img">
</a>

<style>
    .logo-img {
        width: 200px;       /* Change size if needed */
        height: auto;
        display: block;
    }
</style>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><span class="rolling-text">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-cd"><span class="rolling-text">About CD</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services-category"><span class="rolling-text">Services</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blogs-category"><span class="rolling-text">Blogs</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faq"><span class="rolling-text">FAQ</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact"><span class="rolling-text">Contact Us</span></a>
                    </li>
                </ul>
            </div>

            <div class="light-mode-icon">
                <button type="button" class="theme-icon">
                <i aria-hidden="true" class="pe-7s-moon moon" title="Toggle between dark and light mode"></i>
                <i aria-hidden="true" class="pe-7s-sun sun" title="Toggle between dark and light mode"></i>
                
                </button>
            </div>
        </div>
    </nav>
    

    <!-- ==================== End Navbar ==================== -->