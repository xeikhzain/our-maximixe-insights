<!-- footer -->
<footer class="footers">
    <div class="container" data-aos="fade-up" data-aos-delay="50">
        <br>
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <h2 class="hover-underline-animation">Services</h2>
                <br><br>
                <a href="./web.php">
                    <p class="hover-underline-animation">Custom Website Design & Development</p>
                </a>
                <br>
                <a href="./seo.php">
                    <p class="hover-underline-animation">Search Engine Optiization</p>
                </a>
                <br>
                <a href="./design.php">
                    <p class="hover-underline-animation">Graphic Designing</p>
                </a>
                <br>
                <a href="./services.php">
                    <p class="hover-underline-animation">Social Media Marketing</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-12">
                <h2 class="hover-underline-animation">More Services</h2>
                <br><br>

                <a href="">
                    <p class="hover-underline-animation">Website Maintenance</p>
                </a>
                <br>
                <a href="">
                    <p class="hover-underline-animation">Video Editing</p>
                </a>
                <br>
                <a href="">
                    <p class="hover-underline-animation">Content Writing</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-12">
                <h2 class="hover-underline-animation">Quick Links</h2>
                <br><br>
                <a href="./pricing.php">
                    <p class="hover-underline-animation">Packages</p><br>
                </a>
                <a href="./index.php#testimonial_area">
                    <p class="hover-underline-animation">Testimonials</p><br>
                </a>
                <a href="#">
                    <p class="hover-underline-animation">Privacy Policy</p><br>
                </a>
            </div>
            <div class="col-lg-3 col-md-12">
                <h2 class="hover-underline-animation"> Get in Touch!</h2>
                <br><br>
                <p class="hover-underline-animation"><i class="fa fa-phone"></i> Landline: <br> +44 (7547) 754836
                </p><br>
                <p class="hover-underline-animation"><i class="fas fa-envelope"></i> Email:
                    <br>maximizeinsights@gmail.com
                </p>
                <br>
                <p class="hover-underline-animation">
                    <i class="fas fa-map-marker-alt"></i>
                    Address: <br> 44 Drake Avenue, Teignmouth, Devon, United Kingdom, TQ14 9NA
                </p>
                <br>
                <p class="hover-underline-animation"></p>
                <a href="" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                <a href="" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                <a href=""><i class="fa-brands fa-square-twitter"></i></a>
                <a href="" target="_blank"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </div>


    <hr style="color: aliceblue;">
    <p class="copy-right" style="text-align:center;color: aliceblue; text-align: center;
  color: aliceblue;
  font-size: 12px;
  font-weight: 200; margin: 0 auto;">2024 © All rights reserved by Maximize Insights</p>
</footer>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width:75%; margin:0 auto;">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    <p class="title">Register </p>
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="code.php" method="POST" class="form">
                    <div class="flex">
                        <label>
                            <input class="input" type="text" placeholder="" name="fname" id="restrictedInput"
                                oninput="validateInput(this)" maxlength="15" required="">
                            <span>First Name</span>
                        </label>

                        <label>
                            <input class="input" type="text" placeholder="" name="lname" id="restrictedInput"
                                oninput="validateInput(this)" maxlength="15" required="">
                            <span>Last Name</span>
                        </label>
                    </div>

                    <label>
                        <input class="input" type="email" placeholder="" name="email" oninput="validateEmail(this)"
                            maxlength="30" required="">
                        <span>Email</span>
                    </label>

                    <label>
                        <input class="input" type="tel" id="phonee" placeholder="" name="phone"
                            oninput="validateNumericInput(this)" maxlength="15" required>
                    </label>
                    <select name="services" id="" class="input service my-2">
                        <option value="">Select Services</option>
                        <option value="Website Development">Website Development</option>
                        <option value="Digital Marketing">Digital Marketing</option>
                        <option value="Graphic Designing">Graphic Designing</option>
                        <option value="Software Solutions">Software Solutions</option>
                    </select>
                    <label>
                        <textarea class="input" type="text" placeholder="" rows="3" name="message" id="restrictedInput"
                            oninput="validateInput(this)" maxlength="30" required=""></textarea>
                        <span>Message</span>
                    </label>
                    <?php
                        $currentUrl = $_SERVER['REQUEST_URI'];
                        $parsedUrl = parse_url($currentUrl);
                        $pageName = basename($parsedUrl['path']);
                        echo "<input type='hidden' name='url' value='$pageName'>";
                    ?>
                    <button type="submit" name="modalBtn" class="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>



<script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js'></script>
<script>
var countryData = window.intlTelInputGlobals.getCountryData(),
    input = document.querySelector("#phone"),
    addressDropdown = document.querySelector("#country");
var iti = window.intlTelInput(input, {
    hiddenInput: "full_phone",
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
});
for (var i = 0; i < countryData.length; i++) {
    var country = countryData[i];
    var optionNode = document.createElement("option");
    optionNode.value = country.iso2;
    var textNode = document.createTextNode(country.name);
    optionNode.appendChild(textNode);
    addressDropdown.appendChild(optionNode);
}
addressDropdown.value = iti.getSelectedCountryData().iso2;
input.addEventListener('countrychange', function(e) {
    addressDropdown.value = iti.getSelectedCountryData().iso2;
});
addressDropdown.addEventListener('change', function() {
    iti.setCountry(this.value);
});
</script>
<script>
$("#phone").prop('value', '+1 ');
</script>



<script>
var countryData = window.intlTelInputGlobals.getCountryData(),
    input = document.querySelector("#phonee"),
    addressDropdown = document.querySelector("#country");
var iti = window.intlTelInput(input, {
    hiddenInput: "full_phone",
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
});
for (var i = 0; i < countryData.length; i++) {
    var country = countryData[i];
    var optionNode = document.createElement("option");
    optionNode.value = country.iso2;
    var textNode = document.createTextNode(country.name);
    optionNode.appendChild(textNode);
    addressDropdown.appendChild(optionNode);
}
addressDropdown.value = iti.getSelectedCountryData().iso2;
input.addEventListener('countrychange', function(e) {
    addressDropdown.value = iti.getSelectedCountryData().iso2;
});
addressDropdown.addEventListener('change', function() {
    iti.setCountry(this.value);
});
</script>
<script>
$("#phonee").prop('value', '+1 ');
</script>


<script src="https://cdn.lordicon.com/lordicon.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>


<!-- BOOTSTRAP CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<!-- BOOTSTRAP CDN -->
<!--  -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!--  -->
<script src="https://cdn.lordicon.com/lordicon.js"></script>

<script src="index.js"></script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
$(document).ready(function() {
    var myAlert = $('#modalAlert');
    setTimeout(function() {
        myAlert.fadeOut('slow');
    }, 5000);
});

$(document).ready(function() {
    var myAlert = $('#myAlert');
    setTimeout(function() {
        myAlert.fadeOut('slow');
    }, 5000);
});
</script>

<script>
document.querySelectorAll('.nav-link').forEach(link => {
    if (link.href === window.location.href) {
        link.setAttribute('aria-current', 'page')
    }
})
</script>

</body>

</html>