    <?php 
        $pageTitle = "Home Page";
        $pageDescription = " This is the home page for the dealer";
        $pageKeywords = "QuietCool, Home Page, QC vs AC Calculator";
        include('includes/header.php');
        include("includes/form-modal.php");
        include('includes/nav.php');
    ?>


    <!-- Hero Section -->
    <div class="hero-container">
        <div class="hero-wrapper">
            <div class="hero-content">
                <img src="images/Webp/lady-lifestyle.webp" alt="This is Woman on Couch with a Cool Breeze">
            </div>
            <div class="hero-content">
                <div class="hero-text-content">
                    <div class="main-header-text">
                        <h1>Saving Money Never Felt So Cool™
                            <!-- <span class="trademark">&#8482;</span></h1> -->
                    </div>
                    <ul>
                        <li>
                            <span><i class="fas fa-check"></i></span>
                            <h3>Save up to 50-90% on A/C cooling costs</h3>
                        </li>
                        <li>
                            <span><i class="fas fa-check"></i></span>
                            <h3>Instantly feel 5-10 F cooler</h3>
                        </li>
                        <li>
                            <span><i class="fas fa-check"></i></span>
                            <h3>Completes air exchange in 3-4 minutes</h3>
                        </li>
                    </ul>
                    <div class="hero-request-btn-container">
                        <a class="form-modal-btn" href="javascript:void(0)">GET FREE QUOTE</a>
                    </div>
                </div>
            </div>
            <!-- <div class="hero-content">
                <img src="images/lady-lifestyle.png" alt="This is Woman on Couch with a Cool Breeze">
            </div> -->
        </div>
    </div>

    <!-- Products Section -->
    <div class="products-container">
        <div class="products-wrapper">
            <div class="products-content">
                <h2><a href="#">Whole House Fans</a></h2>
            </div>
            <div class="products-content">
                <h2><a href="#">Attic Fans</a></h2>
            </div>
            <div class="products-content">
                <h2><a href="#">Garage Fans</a></h2>
            </div>
            <div class="products-content">
                <h2><a href="#">Accessories</a></h2>
            </div>
        </div>
    </div>

    <!-- Dealer Section -->
    <div class="dealer-container">
        <div class="dealer-wrapper">
            <div class="dealer-main-image">
                <div class="dealer-guy-image">
                    <img src="images/Webp/Dealer-Guy-Image.webp" alt="Dealers Worker images">
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/dealer-badge.php');?>
    <?php include('includes/credibility.php');?>

    <!-- Built in America Section -->
    <div class="built-in-america-container">
        <div class="built-in-america-wrapper">
            <div class="built-in-america-content">
                <h1>#1</h1>
                <h2>Cooling</h2>
                <h2>System</h2>
                <h3>In America</h3>
            </div>
            <div class="built-in-america-content">
                <img src="images/Webp/Group-Products-Shots.webp" alt="This is an image of all QC products">
            </div>
        </div>
    </div>

    <?php include('includes/benefits.php');?>

    <?php include('includes/calculator.php');?>

    <!-- Call to Action 2 Section -->
    <div class="call-to-action-container">
        <div class="call-to-action-wrapper">
            <div class="call-to-action-content">
                <img src="images/Webp/WHF-House-Lifestyle.webp" alt="House Image">
            </div>
            <div class="call-to-action-content">
                <h1>DON’T WAIT</h1>
                <h2>FOR YOUR FIRST HIGH A/C BILL!</h2>
                <div class="hero-request-btn-container">
                    <a class="form-modal-btn" href="javascript:void(0)">REQUEST FREE QUOTE</a>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/testimonials.php');?>

    <?php include('includes/experts-say.php');?>
    <!-- ROI Section -->
    <div class="roi-container">
        <div class="roi-wrapper">
            <div class="roi-content">
                <h2>Our QuietCool whole house fans have reinvented the way homeowners cool & ventilate their homes forever! With our green energy initiative, we have one of the fastest ROIs of any green energy product on the market today!</h2>
            </div>
            <div class="roi-content">
                <img src="images/Webp/ROI-image.webp" alt="QC ROI Image">
            </div>
        </div>
    </div>

    <!-- Start Saving Today Section -->
    <div class="start-saving-container">
        <div class="start-saving-wrapper">
            <div class="start-saving-content">
                <img src="images/Webp/Guy-Holding-Money.webp" alt="Guy holding money image">
            </div>
            <div class="start-saving-content">
                <div class="start-saving-text">
                    <h1>Start Saving Today!</h1>
                    <h2>You can experience massive savings on your A/C bill with any QuietCool product.</h2>
                    <div class="call-to-action-content">
                        <div class="hero-request-btn-container">
                            <a class="form-modal-btn" href="javascript:void(0)">REQUEST FREE QUOTE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Footer Section -->
    <div class="top-home-footer-container">
        <div class="top-home-footer-wrapper">
            <div class="top-home-footer-content">
            </div>

        </div>
    </div>

    <?php include('includes/footer.php');?>

