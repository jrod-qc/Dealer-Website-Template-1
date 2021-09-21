    <?php 
        $pageTitle = "Products Page";
        $pageDescription = " This is the Products Page for the dealer";
        $pageKeywords = "QuietCool, Home Page, QC vs AC Calculator";
        include('includes/header.php');
        include('includes/video.php');
        include("includes/form-modal.php");
        include('includes/nav.php');
    ?>


    <!-- Hero Section -->
    <div class="hero-container-products">
        <div class="hero-wrapper-products">
            <div class="hero-content-products hero-content">
                <h1>A Cooling Breeze at the Press of a Button</h1>
            </div>
            <div class="hero-content-products hero-content"></div>
        </div>
    </div>

    <!-- Trident Section -->
    <div class="trident-container">
        <div class="trident-wrapper">
            <div class="trident-content">
                <h2>Trident Pro Series</h2>
                <h3>Whole House Fan</h3>
                <p><img src="images/TRI-4.8-full-reflection.webp" alt="trident fan"></p>
            </div>

            <div class="trident-content">
                <p>Our <span>Trident Pro X Series</span> is the powerful Whole House Fan that is ideal for any home in need of maximum airflow. With our patented design, robust airflow, and reliable production, you can experience supreme cooling.</p>
                <p>Permanent Split Capacitor Motor (PSC)</p>
                <p>115 watts to 1,147 watts depending on model</p>
                <p>1,498 CFM to 7,015 CFM depending on model</p>
                <div class="trident-content-btn-container">
                    <a href="" class="trident-content-btn">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Stealth Section -->
    <div class="stealth-container">
        <div class="stealth-wrapper">
            <div class="stealth-content">
                <h2>Stealth Pro Series</h2>
                <h3>Whole House Fan</h3>
                <p><img src="images/STL-4.8-full-reflection.jpg" alt="trident fan"></p>
            </div>

            <div class="stealth-content">
                <p>Our <span>Stealth Pro X Series</span> is the efficient Whole House Fan that mastered low cost cooling with powerful results. With our sleek design, patented technology, and reliable production, you can utilize an ultra-energy efficient
                    motor to keep your home cool and your money saved.</p>
                <p>Electronically Commutated Motor (ECM)</p>
                <p>66.7 watts to 725 watts depending on the model</p>
                <p>1,479 CFM to 6,996 CFM depending on the model</p>
                <div class="stealth-content-btn-container">
                    <a href="" class="stealth-content-btn">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Smart Section -->
    <div class="smart-container">
        <div class="smart-wrapper">
            <div class="smart-content">
                <h2>Smart</h2>
                <h3>Attic Gable Fans</h3>
                <p><img src="images//AtticFans.png" alt="trident fan"></p>
            </div>

            <div class="smart-content">
                <p>Our gable mount smart attic fan features a built-in thermostat and/or humidistat that directly controls the motor speed based on the conditions in the attic. By self-adjusting to the attic conditions, the fan is able to maintain an optimum
                    year-round attic climate while minimizing energy consumption.</p>
                <p>Plug and play (no wiring)</p>
                <p>22 watts to 205 watts depending on the model</p>
                <p>1,343 CFM to 2,830 CFM depending on the model</p>
                <div class="smart-content-btn-container">
                    <a href="" class="smart-content-btn">Learn More</a>
                </div>
            </div>
        </div>
    </div>

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

    <!-- Family Picture -->
    <div class="family-container">
        <div class="family-wrapper">
            <div class="family-content">

            </div>
        </div>
    </div>



    <!-- Footer Section -->
    <div class="products-footer-container">
        <div class="products-footer-wrapper">
            <div class="products-footer-content">
                <div class="products-footer-form-container">
                    <div class="products-footer-form-wrapper">
                        <h2>READY TO START SAVING UP TO 50-90%</h2>
                        <h3>ON YOUR COOLING COSTS?</h3>
                        <form action="">
                            <input type="text" placeholder="Full Name">
                            <input type="text" placeholder="Email">
                            <input type="text" placeholder="Phone">
                            <input class="footer-form-btn" type="submit" value="Request Free Quote">
                        </form>
                    </div>
                </div>
                <div class="products-footer-right-side-image">
                    <img src="images/GroupProductShots.webp" alt="">
                    <ul class="products-footer-points">
                        <li>
                            <span><i class="fas fa-check"></i></span>
                            <p>SAVE 50-90% ON AIR CONDITIONING COSTS</p>
                        </li>
                        <li>
                            <span><i class="fas fa-check"></i></span>
                            <p>Prolong the life of your air conditioning unit and save more on a/c repairs</p>
                        </li>
                        <li>
                            <span><i class="fas fa-check"></i></span>
                            <p>Expels cooking odor, pet dander, smoke, germs, gases, & other unwanted airborne annoyances</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php');?>

