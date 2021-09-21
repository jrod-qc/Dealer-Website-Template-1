    <?php 
        $pageTitle = "Benefits";
        $pageDescription = " This is the home page for the dealer";
        $pageKeywords = "QuietCool, Home Page, QC vs AC Calculator";
        include('includes/header.php');
        include("includes/form-modal.php");
        include('includes/nav.php');
    ?>


    <!-- Hero Section -->
    <div class="benefits-hero-container">
        <div class="benefits-hero-wrapper">
            <div class="benefits-hero-content hero-content">
                <img src="images/webp/GroupProductShots.webp" alt="This is Woman on Couch with a Cool Breeze">
            </div>
            <div class="benefits-hero-content">
                <div class="benefits-hero-text-content">
                    <div class="benefits-main-header-text">
                        <h1>Saving Money Never Felt so Cool™</h1>
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
                    <div class="benefits-hero-request-btn-container">
                        <a class="form-modal-btn" href="javascript:void(0)">GET FREE QUOTE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Benefits Section -->
    <?php include("includes/benefits.php"); ?>


    <!-- Video Section -->
    <div class="video-container">
        <div class="video-wrapper">
            <div class="video-content">
                <h2>6 Reasons Why You Need A QuietCool</h2>
                <div class="video-box">
                    <p class="video-btn-modal"><i class="fab fa-youtube"></i></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Keep Your Money Section -->

    <div class="keep-your-money-container">
        <div class="keep-your-money-wrapper">
            <div class="keep-your-money-title">
                <h2>KEEP YOUR HARD EARNED MONEY!</h2>
            </div>
            <div class="keep-your-money-content">
                <div class="keep-your-money-content-box">
                    <img src="images/webp/QCvsAC-Final.webp" alt="QC VS AC image">
                </div>
                <div class="keep-your-money-content-box">
                    <img src="images/webp/kitchen-image.webp" alt="This is an image of a kitchen">
                </div>
            </div>
            <div class="keep-your-money-content">
                <img src="images/webp/ROI-DealerChart-.webp" alt="This is The ROI for QC">
            </div>
            <div class="keep-your-money-content">
                <div class="keep-your-money-content-image">
                    <img src="images/webp/goodairquality.webp" alt="Good Quality air image">
                </div>
                <div class="keep-your-money-content-text">
                    <div class="keep-your-money-content-text-container">
                        <h2>A HEALTHIER HOME</h2>
                        <h3>STARTS WITH YOUR AIR</h3>
                        <p>Airborne pathogens, dust, dangerous gases, and smoke can plague your house. A/C simply conditions that polluted air in your home. QuietCool gives your home a breath of fresh air while flushing out all airborne pathogens that
                            can make you and your family sick.
                        </p>
                    </div>

                </div>
            </div>
            <div class="keep-your-money-content">
                <div class="keep-your-money-content-image">
                    <img src="images/webp/dog-sitting-on-couch.webp" alt="Good Quality air image">
                </div>
                <div class="keep-your-money-content-text">
                    <div class="keep-your-money-content-text-container">
                        <h2>IDEAL FOR A</h2>
                        <h3>FURRY FAMILY</h3>
                        <p>Dogs, cats, and other animals turned family are a staple in most homes in America. These cuddly creatures are great but they can leave unpleasant dander behind. With a QuietCool whole house fan, you can usher out that dander as
                            you cool your home. Leaving your home cooler, fresher, and more comfortable.

                        </p>
                    </div>

                </div>
            </div>
            <div class="keep-your-money-content">
                <div class="keep-your-money-content-image">
                    <img src="images/webp/couple-resting-on-bed.webp" alt="Good Quality air image">
                </div>
                <div class="keep-your-money-content-text">
                    <div class="keep-your-money-content-text-container">
                        <h2>EXPERIENCE</h2>
                        <h3>MORE COMFORT</h3>
                        <p>During the summer months it can get really hot upstairs in a 2 or 3 story home. Sometime not even an air conditioning can cool off the upstairs of a home on a hot summer day. Whole house fans are the best way to cool a hot upstairs
                            and allow you to stop having those hot sleepless nights.

                        </p>
                    </div>

                </div>
            </div>
            <div class="keep-your-money-title">
                <h2>QUIET OPERATION</h2>
                <p>These whisper quiet and energy-efficient wonders are the #1 residential cooling & ventilation appliance on the market.</p>
            </div>
            <div class="keep-your-money-content">
                <img src="images/webp/soundelvels.webp" alt="This is The ROI for QC">
            </div>
        </div>
    </div>

    <!-- QC Tech Section -->
    <div class="qc-tech-container">
        <div class="qc-tech-wrapper">
            <div class="qc-tech-content">
                <img src="images/webp/warranty-image.webp" alt="This is the Warranty Image">
                <h2>Industry Leading Warranty</h2>
                <p>With our 10 to 15-Year industry leading warranty, we offer an unmatched promise to our customers.</p>
            </div>
            <div class="qc-tech-content">
                <img src="images/webp/motor-tech.webp" alt="This is the Motor technology">
                <h2>Motor Technology</h2>
                <p>We ensure that our products use the most energy-efficient and revolutionary motors possible so we can save you money and together we can reduce our carbon footprint.</p>
            </div>
        </div>
    </div>

    <!-- Experts Section -->
    <?php include('includes/experts-say.php');?>

    <?php include('includes/call-to-action.php');?>

    <?php include('includes/testimonials.php');?>

    <!-- Footer Section -->
    <div class="footer-container">
        <div class="footer-wrapper">
            <div class="benefits-footer-content">
            </div>
        </div>
    </div>
    <?php include('includes/footer.php');?>

