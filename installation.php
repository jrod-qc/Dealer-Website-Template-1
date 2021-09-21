    <?php 
        $pageTitle = "Installation";
        $pageDescription = " This is the home page for the dealer";
        $pageKeywords = "QuietCool, Home Page, QC vs AC Calculator";
        include('includes/header.php');
        include("includes/form-modal.php");
        include('includes/nav.php');
    ?>

        <!-- Hero Section --> 
    <div class="installation-hero-container">
        <div class="installation-hero-wrapper">
            <div class="installation-hero-content hero-content">
                <img src="images/webp/Dealer-Guy-Image.webp" alt="This is Woman on Couch with a Cool Breeze">
            </div>
            <div class="installation-hero-content">
                <div class="installation-hero-text-content">
                    <div class="installation-main-header-text">
                        <h1>your local install experts</h1>
                    </div> 
                    <ul>
                        <li>
                            <span><i class="fas fa-check"></i></span>
                            <h3>Installation Experts</h3>
                        </li>
                        <li>
                            <span><i class="fas fa-check"></i></span>
                            <h3>Commitment to Quality</h3>
                        </li>
                        <li>
                            <span><i class="fas fa-check"></i></span>
                            <h3>Professionalism </h3>
                        </li>
                    </ul>
                    <div class="installation-hero-request-btn-container">
                        <a class="form-modal-btn" href="javascript:void(0)">GET FREE QUOTE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <?php include('includes/dealer-badge.php');?>

          <!-- Installation Info Section -->
    <?php include('includes/installation-trust.php');?>

    <?php include('includes/call-to-action-installation.php');?>

    <?php include('includes/testimonials.php');?>

    <div class="footer-image">

    </div>

    <?php include('includes/footer.php');?>