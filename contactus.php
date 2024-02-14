
<?php
include 'includes/header.php';
?>
<video id="home-video" style="position: fixed;" autoplay muted loop>
    <source src="./assets/Home Page Animation.webm" type="video/mp4">
</video>
    <!-- icons -->
    <div class="fixed-icons">
        <a href="#" title="Chat"><i class="fa fa-comments"></i></a>
        <a href="#" title="Call"><i class="fa fa-phone"></i></a>
    </div>
    <br><br><br>
    <!-- icons -->
    <div style="position: relative;" class="container main-contact-us">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="contact-us">
                    <br class="br-br">
                    <h1>Contact US</h1>
                    <p>Other ways to connect with the Maximize Insights team:</p>
                    <div class="media">
                        <ul class="a-c-e">
                            <li><a href=""><i class="fas fa-phone icons"></i>+92 300 829372</a></li>
                            <li><a href=""><i class="fas fa-envelope icons"></i> info@maximizeinsghts.com</a>
                            </li>
                            <div class="add d-flex">
                                <i class="fas fa-map-marker-alt icons"
                                    style="margin-left: -1rem; padding-right:1.5rem;"></i>
                                <li><a href="" style="text-align:justify;">44 Drake Avenue, Teignmouth, Devon, United
                                        Kingdom, TQ14 9NA</a>
                                </li>
                            </div>
                        </ul>
                        <div class="contactMap">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2534.4379307222694!2d-3.5052684999999997!3d50.5632218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486d093feacccf0f%3A0x14010d1a0ec1524f!2s44%20Drake%20Ave%2C%20Teignmouth%20TQ14%209NA%2C%20UK!5e0!3m2!1sen!2s!4v1705069719445!5m2!1sen!2s"
                                width="580" height="230" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 form-details">
                <form action="code.php" method="POST" class="form">
                     <?php
                    if(isset($_SESSION['status'])){
                        ?>
                            <div id="myAlert" class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Hey!</strong> <?php echo $_SESSION['status'] ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                    ?>
                    <p class="title">Register </p>
                    <p class="message">Do you have a project you would like to discuss? Tell us a little about yourself, and we will be
                        in touch right away!</p>
                    <div class="flex">
                        <label>
                            <input class="input" type="text" placeholder="" name="fname" id="restrictedInput" oninput="validateInput(this)" maxlength="15" required="">
                            <span>First Name</span>
                        </label>

                        <label>
                            <input class="input" type="text" placeholder="" name="lname" id="restrictedInput" oninput="validateInput(this)" maxlength="15" required="">
                            <span>Last Name</span>
                        </label>
                    </div>

                    <label>
                        <input class="input" type="email" placeholder="" name="email" oninput="validateEmail(this)" maxlength="30" required="">
                        <span>Email</span>
                    </label>

                    <label>
                        <input class="input" type="tel" id="phone" placeholder="" name="phone" oninput="validateNumericInput(this)" maxlength="15" required>
                    </label>
                        <select name="services" id="" class="input service my-2">
                            <option value="">Select Service</option>
                            <option value="Website Development">Website Development</option>
                            <option value="Digital Marketing">Social Media Marketing</option>
                            <option value="Graphic Designing">Graphic Designing</option>
                            <option value="Software Solutions">Search Engine Optimization</option>
                            <option value="Software Solutions">Content Writting</option>
                            <option value="Software Solutions">Video Editing</option>
                        </select>
                        <label>
                        <textarea class="input" type="text" placeholder="" rows="1" name="message" id="restrictedInput" oninput="validateInput(this)" maxlength="1000" required=""></textarea>
                        <span>Message</span>
                    </label>
                        <button type="submit" name="contactBtn" class="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>

   <?php
   include 'includes/footer.php';
   ?>