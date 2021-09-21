    <?php 
        $pageTitle = "Contact Us";
        $pageDescription = " This is the home page for the dealer";
        $pageKeywords = "QuietCool, Home Page, QC vs AC Calculator";
        include('includes/header.php');
        include("includes/form-modal.php");
        include('includes/nav.php');
    ?>

    <div class="contact-us-hero-container">
        <div class="contact-us-hero-wrapper">
            <div class="contact-us-hero-content hero-content"></div>
            <div class="contact-us-hero-content">
                <h1>Contact Us</h1>
                <h2>We are here to help!</h2>
                <div class="hero-request-btn-container">
                        <a class="form-modal-btn" href="javascript:void(0)">REQUEST FREE QUOTE</a>
                    </div>
            </div>
        </div>
    </div>
    <?php include('includes/dealer-badge.php');?>
    <div class="workers-image-contact-us-container"> </div>

    <div class="contact-us-quote-form">
        <div class="contact-us-quote-form-wrapper">
            <div class="contact-us-form-title">
            <h2>GET A FAST FREE QUOTE!</h2>
            <p>We Receive Your Request Instantly And Will Reach Out To You ASAP</p>
        </div>
            <div class="contact-us-quote-form-content">
                <form action="">
                    <div class="contact-us-form-right">
                        <input type="text" name="First name" id="" placeholder="First name">
                        <input type="email" name="First name" id="" placeholder="Email">
                        <input type="text" name="First name" id="" placeholder="House SQFT">
                    </div>
                    <div class="contact-us-form-left">
                        <input type="text" name="Last name" id="" placeholder="Last name">
                        <input type="tel" name="Phone Number" id="" placeholder="Phone Number">
                        <input type="text" name="Zip Code" id="" placeholder="Phone Number">
                    </div>
                    <textarea name="Additional Notes" id="" cols="30" rows="10"></textarea>

                    <button type="submit">REQUEST FREE QUOTE</button>
                </form>
            </div>
        </div>
    </div>

    <?php include('includes/testimonials.php');?>



    <?php include('includes/footer.php');?>