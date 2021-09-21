    <?php 
        $pageTitle = "About Us";
        $pageDescription = " This is the home page for the dealer";
        $pageKeywords = "QuietCool, Home Page, QC vs AC Calculator";
        include('includes/header.php');
        include("includes/form-modal.php");
        include('includes/nav.php');
    ?>


    <!-- Hero Section -->
    <div class="about-us-hero-container hero-content">
        <div class="about-us-hero-wrapper">
            <div class="about-us-hero-title">
                <h2>Contact Us Today & Improve the Health of Your Home</h2>
                <div class="about-us-hero-request-btn-container">
                    <a class="form-modal-btn" href="javascript:void(0)">GET FREE QUOTE</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Dealer Badge Section -->
    <div class="dealer-badge-container">
        <div class="dealer-badge-wrapper">
            <div class="dealer-badge-content">
                <img src="images/platinum_dealer_badge.png" alt="Dealers Badge Image">
            </div>
            <div class="dealer-badge-content">
                <h2>PLATINUM QUIETCOOL DEALER IN NORTHERN CALIFORNIA</h2>
                <h3>OVER 3,000 HAPPY CUSTOMERS</h3>
            </div>
        </div>
    </div>

    <!-- Serving Cal Section -->
    <div class="serving-state-container">
        <div class="serving-state-wrapper">
            <div class="serving-state-content">
                <div class="serving-state-content-text">
                    <h1>Serving California</h1>
                    <h3>SINCE 1989</h3>
                    <p>We decided to start this business after our own personal experience with not being able to find quality contractors for home services. We wanted to offer consumers a customer experience that was excellent and provide them with resources
                        and analysis to make their decisions with ease. We set ourselves apart by staying current with emerging trends, technology and quality technicians. We are locally owned and operated and want to leave your home or building more
                        comfortable. We are your local energy efficiency experts.</p>
                </div>
            </div>
            <div class="serving-state-content">
                <img src="images/workers-image.jpg" alt="">
            </div>
        </div>
    </div>

    <!-- Credibility Section -->
    <?php include('includes/credibility.php');?>

    <!-- High Bill Section -->
    <?php include('includes/high-bills.php');?>


    <!-- Review Section -->
    <div class="review-container">
        <div class="about-us-reviews-title">
            <h1>Our Reviews</h1>
        </div>
        <div class="review-wrapper">
            <div class="review-content">
                <img src="images/yelp-icon.png" alt="">
            </div>
            <div class="review-content">
                <img src="images/home-adviser-icon.png" alt="">
            </div>
            <div class="review-content">
                <img src="images/angels;ist-icon.png" alt="">
            </div>
            <div class="review-content">
                <img src="images/google-icon.png" alt="">
            </div>
        </div>
    </div>

    <!-- Call To Action Section -->
    <div class="about-us-call-to-action-container">
        <div class="about-us-call-to-action-wrapper">
            <div class="about-us-call-to-action-content">
                <h2>Don’t Just Keep your Home Cool,</h2>
                <h1>Keep it QuietCool</h1>
                <div class="about-us-hero-request-btn-container">
                    <a class="form-modal-btn" href="javascript:void(0)">REQUEST FREE QUOTE</a>
                </div>
            </div>
            <div class="about-us-call-to-action-content">

            </div>
        </div>
    </div>
    <!-- Testimonials Slider Section -->
    <?php include('includes/testimonials.php');?>
    <!-- Footer Section -->
    <div class="about-us-footer-container">
        <div class="about-us-footer-wrapper">
            <div class="about-us-footer-content">
            </div>
        </div>
    </div>

        <?php include('includes/footer.php');?>

