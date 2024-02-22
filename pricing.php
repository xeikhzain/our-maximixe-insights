<?php
    include 'includes/header.php';
    
?>
<video id="home-video" style="position: fixed;" autoplay muted loop>
    <source src="./assets/Home Page Animation.webm" type="video/mp4">
</video>
<br><br><br>
<section class="pricing-section ">
    <div class="pattern" data-aos="flip-right" data-aos-delay="100">
        <div class="sec-title">
            <h2 class="table-pri">Our Pricing Table</h2>
            <div class="text">
                We take a consultative approach to every client engagement and find
                actionable <br />
                solutions that will help your organization achieve the best
                outcomes.
            </div>
        </div>

        <div class="buttons-outer" id="pricingTab">
            <ul class="tab-buttons">
                <li id="design-btn" class="btn-txt tab active shadow" onclick="openTab('design')">Website
                    Development</li>
                <li id="shopify-btn" class="btn-txt tab shadow" type="button" class="btn-close" aria-label="Close"
                    onclick="openTab('shopify')">
                    <!-- <div class="btn-txt tab" onclick="openTab('shopify')"> -->
                    SEO - Search Engine Optimization
                    <!-- </div> -->
                </li>
                <li id="e-store-btn" class="btn-txt tab shadow" onclick="openTab('e-store')">
                    <!-- <div class="btn-txt tab active" onclick="openTab('e-store')"> -->
                    Graphic Designing
                    <!-- </div> -->
                </li>
                <li id="branding-btn" class="btn-txt tab shadow" onclick="openTab('branding')">
                    <!-- <div class="btn-txt tab" onclick="openTab('branding')"> -->
                    Social Media Marketing
                    <!-- </div> -->
                </li>

            </ul>
        </div>

        <!-- web design -->
        <div class="tab-content flip-right PricingCard" id="design">
            <!-- -----card-1--- -->
            <div class="card scroll-card-1">
                <div class="p-3">
                    <h4 style="color: #2BBCEF;" class="pt-3" id="wd_basic_package">
                        BASIC</h4>
                </div>
                <div class="bg-successs">
                    <h2 class="pt-2" id="wd_basic_price">$299 - $1299</h2>
                </div>
                <div class="padd">
                    <ul class="first-ul" id="wd_basic_list">
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Static Website
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            UI/UX Designe
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            1-18 Unique Pages Website
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Social Media Links
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            1 Slider Banner
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Unlimited Rivisions
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            FREE Google Friendly Sitemap
                        </li>
                        <li><i class="fa-solid fa-check"></i>100% Ownership Rights</li>
                        <li>
                            <i class="fa-solid fa-check"></i>100% Satisfaction Guarantee
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>100% Unique Design Guarantee
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>Secured Website
                        </li>
                    </ul>
                    <br>


                    <button class="btn order_btn" id="wd_basic"  data-bs-toggle="modal" data-bs-target="#order">Order Now</button>




                </div>
            </div>
            <!-- -----card-2--- -->
            <div class="card scroll-card-2">
                <div class="p-3">
                    <h4 style="color:  #002966;" class="text-center pt-3" id="wd_business_package">
                        BUSINESS</h4>
                </div>
                <div class="bg-price">
                    <h2 class="pt-2 text-center" id="wd_business_price">$499 - $1499</h2>
                    <!-- <h3 class=" text-center"></h3> -->
                </div>
                <div class="padd">
                    <ul class="second-ul" id="wd_business_list">
                        <li>
                            <i class="fa-solid fa-check"></i>Dynamic Website
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            UI/UX Designe
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            1-15 Unique Pages Website
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            1 jQuery Slider Banner
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Social Media Links
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            FREE Google Friendly Sitemap
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            1 Conact Us Form
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Product Cards
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Unlimited Rivisions
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Whats App Integration
                        </li>
                        <li><i class="fa-solid fa-check"></i>Complete Deployment</li>
                        <li><i class="fa-solid fa-check"></i> 100% Ownership Rights</li>
                        <li>
                            <i class="fa-solid fa-check"></i> 100% Satisfaction Guarantee
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i> 100% Unique Design Guarantee
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i> 100% Money Back Guarantee
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i> Secured Website
                        </li>
                    </ul>
                    <br>
                    <button style="background-color:  #002966;" class="btn order_btn" id="wd_business" data-bs-toggle="modal" data-bs-target="#order">Order Now</button>
                </div>
            </div>
            <!-- -----card-3--- -->
            <div class="card scroll-card-3">
                <div class="p-3">
                    <h4 style="color:  #fca62d;text-align: right;" class="pt-3" id="wd_premium_package">
                        PREMIUM</h4>
                </div>
                <div class="bg-price-3" id="wd_premium_price">
                    <h2 style="text-align: right;" class="pt-2 ">$699 - $1899</h2>
                    <!-- <h3 style="text-align: right;"></h3> -->
                </div>
                <div class="padd">
                    <ul class="third-ul" id="wd_premium_list">
                        <li>
                            <i class="fa-solid fa-check"></i>Ecommerce Store
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            UI/UX Design
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            1-12 Unique Pages Website
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Slider Banners
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            FREE Google Friendly Sitemap
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Unlimited Categories
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Shopping Cart Integration
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Unlimited Rivisions
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Product Listings
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Payment Integration
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Sales &amp; Inventory Management
                        </li>
                        <li><i class="fa-solid fa-check"></i>Social Meida Links</li>
                        <li><i class="fa-solid fa-check"></i>Complete Deployment</li>
                        <li>
                            <i class="fa-solid fa-check"></i> Dedicated Accounts Manager
                        </li>
                        <li><i class="fa-solid fa-check"></i> 100% Ownership Rights</li>

                        <li>
                            <i class="fa-solid fa-check"></i> 100% Satisfaction Guarantee
                        </li>

                        <li>
                            <i class="fa-solid fa-check"></i> 100% Unique Design Guarantee
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>Secured Website
                        </li>
                    </ul>
                    <br>


                    <button style="background-color:  #fca62d;" class="btn order_btn" data-bs-toggle="modal" data-bs-target="#order" id="wd_premium">Order Now</button>




                </div>
            </div>
        </div>

        <!--SEO -->
        <div class="tab-content PricingCard" id="shopify">
            <!-- -----card-1--- -->
            <div class="card scroll-card-1">
                <div class="p-3">
                    <h4 style="color: #2BBCEF;" class="pt-3" id="seo_basic_package">
                        BASIC</h4>
                </div>
                <div class="bg-successs">
                    <h2 class="pt-2" id="seo_basic_price">$899 - $1399</h2>
                </div>
                <div class="padd">
                    <ul class="first-ul" id="seo_basic_list">
                        <li>
                            <i class="fa-solid fa-check"></i>Competitor Analysis
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>

                            Prior Analysis
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Business Analysis
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Consumer Analysis
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Competitor Analysis
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            15 Selected Keywords Targeting
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            15 Pages Keyword Targeted
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Webpage Optimization
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Meta Tags Creation
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Keyword Optimization
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Image Optimization
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Tracking & Analysis
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Google Analytics Installation
                        </li>

                        <li><i class="fa-solid fa-check"></i>Google Webmaster Installation </li>

                        <li>
                            <i class="fa-solid fa-check"></i> Call To Action Plan
                        </li>

                        <li><i class="fa-solid fa-check"></i>Creation of Sitemaps</li>

                        <li><i class="fa-solid fa-check"></i>Monthly Reporting</li>

                        <li>
                            <i class="fa-solid fa-check"></i> Recommendation
                        </li>

                        <li><i class="fa-solid fa-check"></i> Phone Support</li>

                        <li>
                            <i class="fa-solid fa-check"></i> Off Page Optimization
                        </li>

                        <li>
                            <i class="fa-solid fa-check"></i> Social Bookmarking
                        </li>

                        <li>
                            <i class="fa-solid fa-check"></i> Slide Share Marketing
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i> Forums/FAQ's
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i> Link Building
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i> Directory Submission
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i> Local Business Listings
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i> Slide Share Marketing
                        </li>

                    </ul>
                    <br>


                    <button class="btn order_btn" data-bs-toggle="modal" data-bs-target="#order" id="seo_basic">Order Now</button>




                </div>
            </div>

            <!-- -----card-2--- -->
            <div class="card scroll-card-2">
                <div class="p-3">
                    <h4 style="color:  #002966;" class="text-center pt-3" id="seo_business_package">
                        BUSINESS</h4>
                </div>
                <div class="bg-price">
                    <h2 class="pt-2 text-center" id="seo_business_price">$1499 - $1999</h2>
                </div>
                <div class="padd">
                    <ul class="second-ul" id="seo_business_list">
                        <li>
                            <i class="fa-solid fa-check"></i> Prior Analysis
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Business Analysis
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>

                            Consumer Analysis
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Competitor Analysis
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            30 Selected Keywords Targeting
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            30 Pages Keyword Targeted
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>

                            Webpage Optimization
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Meta Tags Creation
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Keyword Optimization
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>

                            Image Optimization
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>

                            Sales &amp; Inventory Management
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>

                            Inclusion of huskys tags
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>

                            inclusion of huskys Indexing Modifications
                        </li>

                        <li><i class="fa-solid fa-check"></i>Tracking & Analysis</li>

                        <li>
                            <i class="fa-solid fa-check"></i> Google Places Inclusions
                        </li>

                        <li><i class="fa-solid fa-check"></i>Google Analytics Installation </li>

                        <li><i class="fa-solid fa-check"></i>Google Webmaster Installation </li>

                        <li>
                            <i class="fa-solid fa-check"></i> Dedicated Accounts Manager
                        </li>

                        <li><i class="fa-solid fa-check"></i> Call To Action Plan </li>

                        <li>
                            <i class="fa-solid fa-check"></i> Monthly Reporting
                        </li>

                        <li>
                            <i class="fa-solid fa-check"></i> Reporting
                        </li>

                        <li>
                            <i class="fa-solid fa-check"></i> Email Support
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i> Phone Support
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i> Off Page Optimization
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>Social Bookmarking
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i> Slide Share Marketing
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i> Forums/FAQ's
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i> Link Building
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i> Directory Submission
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i> Local Business Listings
                        </li>
                    </ul>
                    <br>


                    <button style="background-color:  #002966;" class="btn order_btn" data-bs-toggle="modal" data-bs-target="#order" id="seo_business">Order Now</button>




                </div>
            </div>

            <!-- -----card-3--- -->
            <div class="card scroll-card-3">
                <div class="p-3">
                    <h4 style="color:  #fca62d;text-align: right;" class="pt-3" id="seo_premium_package">
                        PREMIUM</h4>
                </div>
                <div class="bg-price-3">
                    <h2 style="text-align: right; " class="pt-2 " id="seo_premium_price">$2199 - $2499</h2>
                    <!-- <h3 style="text-align: right;">/Month</h3> -->
                </div>
                <div class="padd">
                    <ul class="third-ul" id="seo_premium_list">
                        <li>
                            <i class="fa-solid fa-check"></i> Business Analysis
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Consumer Analysis
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>

                            Competitor Analysis
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            70 Selected Keywords Targeting
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            50 Pages Keyword Targeted
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Webpage Optimization
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>

                            Complete W3C Certified HTML
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Meta Tags Creation
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Keyword Optimization
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>

                            Image Optimization
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Inclusion of huskys tags
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Inclusion of huskys Indexing Modifications
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Tracking & Analysis
                        </li>

                        <li><i class="fa-solid fa-check"></i>Google Places Inclusions </li>

                        <li>
                            <i class="fa-solid fa-check"></i> Google Analytics Installation
                        </li>

                        <li><i class="fa-solid fa-check"></i>Google Webmaster Installation</li>

                        <li><i class="fa-solid fa-check"></i>Call To Action Plan</li>

                        <li>
                            <i class="fa-solid fa-check"></i>Creation of Sitemaps
                        </li>

                        <li><i class="fa-solid fa-check"></i>Reporting</li>

                        <li>
                            <i class="fa-solid fa-check"></i> Monthly Reporting
                        </li>

                        <li>
                            <i class="fa-solid fa-check"></i> Recommendation
                        </li>

                        <li>
                            <i class="fa-solid fa-check"></i> Email Support
                        </li>

                        <li>
                            <i class="fa-solid fa-check"></i> Phone Support
                        </li>

                        <li>
                            <i class="fa-solid fa-check"></i>Off Page Optimization
                        </li>

                        <li>
                            <i class="fa-solid fa-check"></i> Social Bookmarking
                        </li>

                        <li>
                            <i class="fa-solid fa-check"></i> Slide Share Marketing
                        </li>

                        <li>
                            <i class="fa-solid fa-check"></i> Forums/FAQ's
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i> Link Building
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i> Directory Submission
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i> Local Business Listings
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>Blog Content Creation
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>Local SEO
                        </li>
                    </ul>
                    <br>
                    <button style="background-color:  #fca62d;" class="btn order_btn" data-bs-toggle="modal" data-bs-target="#order" id="seo_premium">Order Now</button>
                </div>
            </div>
        </div>

        <!-- ---Graphic Designing--- -->
        <div class="tab-content PricingCard" id="e-store">
            <!-- -----card-1--- -->
            <div class="card scroll-card-1">
                <div class="p-3">
                    <h4 style="color: #2BBCEF;" class="pt-3" id="gd_basic_package">
                        BASIC</h4>
                </div>
                <div class="bg-successs">
                    <h2 class="pt-2" id="gd_basic_price">$25 - $75</h2>
                </div>
                <div class="padd">
                    <ul class="first-ul" id="gd_basic_list">
                        <li>
                            <i class="fa-solid fa-check"></i> 2 - 5 Initial Logo Concepts
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Unlimitted Revisions
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            High-Resolution JPEG and PNG Files
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Delivery Time: 1 - 5 Business Days
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Business Card and Letterhead
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Social Media Kit (Profile and Cover Image)
                        </li>
                    </ul>
                    <br>
                    <button class="btn order_btn" data-bs-toggle="modal" data-bs-target="#order" id="gd_basic">Order Now</button>
                </div>
            </div>

            <!-- -----card-2--- -->
            <div class="card scroll-card-2">
                <div class="p-3">
                    <h4 style="color:  #002966;" class="text-center pt-3" id="gd_business_package">
                        BUSINESS</h4>
                </div>
                <div class="bg-price">
                    <h2 class="pt-2 text-center" id="gd_business_price">$25 - $75</h2>
                </div>
                <div class="padd">
                    <ul class="second-ul" id="gd_business_list">
                        <li>
                            <i class="fa-solid fa-check"></i>2 - 5 Initial Banner or Social Media Post Concepts
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            3 Pages Website Conceptual and Dynamic Website
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Unlimitted Revisions
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            High-Resolution JPEG and PNG Files
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Delivery Time: 1 - 5 Business Days
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Social Media Ad Template
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Priority Support
                        </li>
                    </ul>
                    <br>


                    <button style="background-color:  #002966;" class="btn order_btn" data-bs-toggle="modal" data-bs-target="#order" id="gd_business">Order Now</button>




                </div>
            </div>

            <!-- -----card-3--- -->
            <div class="card scroll-card-3">
                <div class="p-3">
                    <h4 style="color:  #fca62d;text-align: right;" class="pt-3" id="gd_premium_package">
                        PREMIUM</h4>
                </div>
                <div class="bg-price-3">
                    <h2 style="text-align: right;" class="pt-2 " id="gd_premium_price">$99 - $399</h2>
                </div>
                <div class="padd">
                    <ul class="third-ul" id="gd_premium_list">
                        <li>
                            <i class="fa-solid fa-check"></i> UI/UX Design for 1 - 18 pages
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            2 UI Design Concepts
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Unlimitted Revisions
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Interactive Prototype
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Delivery Time: 7 - 15 Business Days
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Responsive UI Designe
                        </li>
                    </ul>
                    <br>


                    <button style="background-color:  #fca62d;" class="btn order_btn" data-bs-toggle="modal" data-bs-target="#order" id="gd_premium">Order Now</button>




                </div>
            </div>
        </div>

        <!-- Social Media -->
        <div class="tab-content PricingCard" id="branding">
            <!-- -----card-1--- -->
            <div class="card scroll-card-1">
                <div class="p-3">
                    <h4 style="color: #2BBCEF;" class="pt-3" id="sm_basic_package">
                        BASIC</h4>
                </div>
                <div class="bg-successs">
                    <h2 class="pt-2" id="sm_basic_price">$149.00 </h2>

                </div>
                <div class="padd">
                    <ul class="first-ul" id="sm_basic_list">
                        <li>
                            <i class="fa-solid fa-check"></i> Posts 15
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Stories 14
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            GIF 3
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Cover Image
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Content Writing
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Brand Awareness
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Hashtag Campaigns
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>

                            Page Optimizations
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>

                            Premium Designs
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            FB & Insta Setup
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Monthly Progress
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>

                            Social Media Strategy
                        </li>

                        <li><i class="fa-solid fa-check"></i>Paid Ads</li>

                        <li>
                            <i class="fa-solid fa-check"></i>Meta Pixel Intigration
                        </li>
                    </ul>
                    <br>


                    <button class="btn order_btn" data-bs-toggle="modal" data-bs-target="#order" id="sm_basic">Order Now</button>




                </div>
            </div>

            <!-- -----card-2--- -->
            <div class="card scroll-card-2">
                <div class="p-3">
                    <h4 style="color:  #002966;" class="text-center pt-3" id="sm_business_package">
                        BUSINESS</h4>
                </div>
                <div class="bg-price">
                    <h2 class="pt-2 text-center" id="sm_business_price">$249.00</h2>

                </div>
                <div class="padd">
                    <ul class="second-ul" id="sm_business_list">
                        <li>
                            <i class="fa-solid fa-check"></i> Posts 20
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Stories 18
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            GIF 5
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Cover Image
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Video 2
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Content Writing
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Brand Awareness
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Hashtag Campaigns
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>

                            Page Optimizations
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>

                            Premium Designs
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            FB & Insta Setup
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Monthly Progress
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>

                            Social Media Strategy
                        </li>

                        <li><i class="fa-solid fa-check"></i>Paid Ads</li>

                        <li>
                            <i class="fa-solid fa-check"></i>Meta Pixel Intigration
                        </li>
                    </ul>
                    <br>


                    <button style="background-color:  #002966;" class="btn order_btn" data-bs-toggle="modal" data-bs-target="#order" id="sm_business">Order Now</button>




                </div>
            </div>

            <!-- -----card-3--- -->
            <div class="card scroll-card-3">
                <div class="p-3">
                    <h4 style="color:  #fca62d;text-align: right;" class="pt-3" id="sm_premium_package">
                        PREMIUM</h4>
                </div>
                <div class="bg-price-3">
                    <h2 style="text-align: right;" class="pt-2 " id="sm_premium_price">$349.00</h2>
                </div>
                <div class="padd">
                    <ul class="third-ul" id="sm_premium_list">
                        <li>
                            <i class="fa-solid fa-check"></i> Posts 30
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Stories 27
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            GIF 8
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Cover Image
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Video 3
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Content Writing
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Brand Awareness
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Hashtag Campaigns
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>

                            Page Optimizations
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>

                            Premium Designs
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            FB & Insta Setup
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>
                            Monthly Progress
                        </li>
                        <li>
                            <i class="fa-solid fa-check"></i>

                            Social Media Strategy
                        </li>

                        <li><i class="fa-solid fa-check"></i>Paid Ads</li>

                        <li>
                            <i class="fa-solid fa-check"></i>Meta Pixel Intigration
                        </li>
                    </ul>
                    <br>


                    <button style="background-color:  #fca62d;" class="btn order_btn" data-bs-toggle="modal" data-bs-target="#order" id="sm_premium">Order Now</button>




                </div>
            </div>
        </div>
    </div>
</section>
</div>
</div>
<br><br>

<!-- Modal -->
<!-- Button trigger modal -->


<!-- Modal -->
<!-- <div class="container">
    <div class="modal fade" id="order" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>web development order</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="form-container">
                    <form class="form">
                    <div class="form-group">
                            <label for="email">Your Good Name</label>
                            <input type="text" id="text" name="name" required="">
                        </div>
                        <div class="form-group">
                            <label for="email">Company Email</label>
                            <input type="text" id="email" name="email" required="">
                        </div>
                        <div class="form-group">
                            <label for="textarea">Your Requirements</label>
                            <textarea name="textarea" id="textarea" rows="10" cols="50"
                                required="">          </textarea>
                        </div>
                        <button class="form-submit-btn" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="container">
    <div class="modal fade" id="order" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="form-container">

                    <div>
                        <h2 class="modal-heading"></h2>
                        <div class="p-3">
                            <h4 style="" class="modal-package"></h4>
                        </div>
                        <div class="price-bg">
                            <h2 class="modal-price"></h2>
                        </div>
                        <ul class="modal-orderlist"></ul>
                    </div>
                    
                    <form class="form">
                        <input type="hidden" name="" id="" class="inp-package">
                        <input type="hidden" name="" id="" class="inp-price">
                        <div class="form-group">
                            <label for="name">Your Good Name</label>
                            <input type="text" id="user_name" name="name" required="">
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="text" id="user_email" name="email" required="">
                        </div>
                        <div class="form-group">
                            <label for="address">Your Address</label>
                            <input type="text" id="user_address" name="address" required="">
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea name="message" id="user_message" rows="10" cols="50" required=""></textarea>
                        </div>
                        <!-- <button class="form-submit-btn" id="user_submit" type="submit">Submit</button> -->
                    </form>
                    <button name="orderBtn" class="form-submit-btn modal-btn bg-warning w-100" id="user_submit">Order Now</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /Modal -->


<!-- Hidden pop-up container -->
<div id="custom-popup" class="popup-container" style="display: none;">
    <div class="popup-content">
        <h3>Your order is submitted!</h3>
        <p>Thank you for your order.</p>
        <i class="fa-solid fa-check"></i>
    </div>
</div>







<!-- icons -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    // $(document).ready(function(){
        // alert("k");
        // $(".order_btn").click(function(){
        //     var orderId = $(this).attr('id');
        //     alert('Check'+orderId);
        //     var dataToSend = {
        //         orderId: orderId
        //     };

        //     alert(check."okkkkk");

        //     $.ajax({
        //         type: "POST",
        //         url: "process.php",
        //         data: dataToSend,
        //         success: function(response){
        //             console.log(response);
        //         }
        //     });
        // });
        
        
        
    const openTab = (tabName) => {
        const tabs = ["design", "shopify", "e-store", "branding", "animation", "seo"];

        tabs.forEach((tab) => {
            const tabButton = document.getElementById(`${tab}-btn`);
            if (tabButton) {
                tabButton.classList.remove("active");
            }
            const element = document.getElementById(tab);
            if (element) {
                if (tab === tabName) {
                    element.style.display = "flex";
                    element.classList.add("flip-right");
                } else {
                    element.style.display = "none";
                    element.classList.remove("flip-right");
                }
            }
        });

        // Add the 'active' class to the clicked button
        const clickedTabButton = document.getElementById(`${tabName}-btn`);
        if (clickedTabButton) {
            clickedTabButton.classList.add("active");
        }
    };
// });



        


</script>



<?php
include 'includes/footer.php';
?>
