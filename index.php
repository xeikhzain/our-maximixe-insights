<?php
include 'includes/header.php';
?>
  <!-- Nav bar -->
  <!-- <video src="Home Page Animation.mp4" loop autoplay muted class="back" alt=""> -->
  <video id="home-video" autoplay muted loop>
    <source src="./assets/Home Page Bg No Arrow.webm" type="video/mp4">
  </video>
  
  <!-- icons -->
  <div class="fixed-icons">
    <a href="#" title="Chat"><i class="fa fa-comments"></i></a>
    <a href="#" title="Call"><i class="fa fa-phone"></i></a>
  </div>
  <!-- icons -->

  <!-- HOME -->
  <div class="main">
    <div class="container">
      <div class="row h-main-content">
        <div class="col-lg-6 col-md-6 col-sm-12 h-heading-content">
          <h1 class="main_h mt-5">Dominate the Digital Landscape</h1>
          <img src="./assets/Home Page Right Animation-01.png" alt="" class="h-first-img">
          <p class="main_p" id="h-heain-para">At Maximise Insights, our services are meticulously crafted to guarantee you don't just exist in the digital landscape – you dominate it. Discover the best language for web development with us as
            your trusted front-end, Back-end, full-stack web development company.</p>
          <button class="Learn_more le_m" id="h-heain-para"> <a class="btn-a" href="about.php">Learn more!</a></button>
          <!-- <br><br>
          <div class="frame">
            <div class="spinner1">
            </div>
            <h3>99 99%</h3>
            <p>99% Dedication, 100% Impact – Your Digital Revolution Starts Here!</p>
          </div> -->
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 h-img-contain">
          <img class="hero-img" src="./assets/Home Page Right Animation-01.png" alt="">
        </div>
      </div>
    </div>
  </div>
  <!-- HOME -->
  <!-- <br> -->
  <!-- main2 -->
  <div class="box" data-aos="fade-right" data-aos-delay="100">
    <div class="num-indus">
      <div class="col-lg-4 col-md-5 mb-4 num1 mx-2"> 
        <div id="number-container-1">
          <h1 class="numbers" id="number-1"></h1>
        </div>
        <p class="stats-para">Digital Campaigns <br> Sparking Success</p>
      </div>

      <div class="col-lg-4 col-md-5 mb-4 num1 mx-2"> 
        <div id="number-container-2">
          <h1 class="numbers" id="number-2"></h1>
        </div>
        <p class="stats-para">Tailored Solutions <br> Redefining Industries</p>
      </div>

      <div class="col-lg-4 col-md-5 mb-4 num1 mx-2"> 
        <div id="number-container-3">
          <h1 class="numbers-3" id="number-3"></h1>
        </div>
        <p class="stats-para">Engaged Social <br> Media Audiences</p>
      </div>
    </div>
  </div>
  <!-- main2 -->
  <!-- Services -->
  <section>
    <div class="ser">
    <!-- <div class="container ser"> -->
      <div class="head" data-aos="fade-up" data-aos-delay="50">
        <!-- <br> -->
        <h1 class="text-center h1-test">Our Services</h1>
        <p class="para ">With a proven history of launching over 400 websites into the digital sphere, we bring a simplicity-first approach to every development project. </p>
      </div>
    </div>
    <div class="container our-service-sec">
      <div class="tab-container">
        <div class="tab-filter-container">
          <li class="filter-btn actives" data-tab="web-development">
            <ion-icon name="logo-nodejs"></ion-icon>
            Web Development
          </li>
          <li class="filter-btn " data-tab="web-design">
            <i class="fa-regular fa-object-ungroup"></i>
            Digital Marketing
          </li>
          <li class="filter-btn" data-tab="ux-design">
            <ion-icon name="desktop-outline"></ion-icon>
            Graphics Designing
          </li>
          <li class="filter-btn" data-tab="app-development">

            <ion-icon name="logo-react"></ion-icon>
            Software Development
          </li>
        </div>
        <div class="tab-filter-item-container">
          <div class="row tab-item web-development select_tab">
            <div class="col-md-5 tab-content-left">
              <img height="" width="50px" src="assets/web-development-removebg-preview.png" alt="web design" class="tab-img" />
            </div>
            <div class="col-md-7 tab-content-right">
              <h1 class="tab-heading">Web Development</h1>
              <p class="paragraph">
                Take a digital leap with us. We excel in creating functional websites that flawlessly exhibit your
                brand, translating your ideas into a unique online identity.
              </p>
              <button class="Learn_more le_m"> <a href="web.php" class="btn-a">Learn more!</a></button>
            </div>
          </div>

          <div class="row tab-item web-design ">

            <div class="col-md-5  tab-content-right">
              <img src="assets/Marketing-amico.png" alt="web development" class="tab-img" />
            </div>
            <div class="col-md-7  tab-content-left">
              <h1 class="tab-heading">Digital Marketing</h1>
              <p class="paragraph">
                Maximise Insights offers tailored digital marketing packages for your business growth. Our approach goes
                beyond conventional strategies, encompassing full-service marketing, technology marketing, and internet
                marketing to amplify your online presence
              </p>
              <button class="Learn_more le_m"><a href="seo.php" class="btn-a">Learn more!</a></button>
            </div>
          </div>
          <div class="row tab-item ux-design">
            <div class="col-md-5 tab-content-left">
              <img src="assets/UI-UX differences-rafiki.svg" alt="UI/UX Design" class="tab-img" />
            </div>
            <div class="col-md-7 tab-content-right">
              <h1 class="tab-heading">Graphics Designing</h1>
              <p class="paragraph">
                Explore our expertise in graphic art and boost your brand with a visual designer for a unique and
                captivating online identity. Whether you want a simple design that resonates with your brand philosophy
                or wish to stand out among other graphic websites, our graphics design service is dedicated to creating
                stunning and impactful designs.
              </p>
              <button class="Learn_more le_m"><a href="design.php" class="btn-a">Learn more!</a></button>
            </div>
          </div>
          <div class="container tab-item app-development">
            <div class="row tab-content-left">
              <div class="col-md-5 tab-content-right">
                <img src="./assets/Mobile development-amico.png" alt="UI/UX Design" class="tab-img" />
              </div>
              <div class="col-md-7">
                <div class="software-service">
                  <h1 class="tab-heading">Software <br> Development</h1>
                  <p class="paragraph ">
                    Have a vision for an application in mind? Our Software development expertise turns your ideas into
                    reality. From conceptualisation to execution, let us help you develop user-friendly applications
                    with the right functionalities.
                  </p>
                </div>
                  <button class="Learn_more le_m software-ser-btn"> Learn more!</button>
                  <br>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- our clients -->
  <!-- <div class="head" data-aos="fade-up" data-aos-delay="50">
    <br>
    <h1 class="text-center h1-test pt-3">Brands We Have Served </h1>
    <h4 class="pt-3">Innovative Digital Solutions with a Customized Approach </h4>
    <p class="para">Meet the brands that have experienced success after handing over <br> their development project to Maximise Insights. </p>
  </div>
  <div class="clients_img" >
    <img class="clients"  style="aspect-ratio: 3/2;object-fit: contain;" src="./assets/companies2-removebg-preview (1).png" alt="">
  </div>
  <br> -->

  <!-- TECH STACK -->
  <section class="tech-stack pb-5">
    <div class="tech-head">
      <h1 class="text-center h1-test">Explore Our Tech Stack Expertise</h1>
      <p class="para">From complex frameworks to cutting-edge technologies, our services offer a dynamic <br
          class="indus-br"> tech stack for unparalleled digital solutions. </p>


    </div>
    <div class="card tech-card shadow">
      <div class="logos">
        <div class="logos-slide">
          <img class="image" src="./assets/HTML.webp" />
          <img class="image" src="./assets/CSS.webp" />
          <img class="image" src="./assets/Bootstrap.webp" />
          <img class="image" src="./assets/Java Script.webp" />
          <img class="image" src="./assets/React.webp" />
          <img class="image" src="./assets/Java.webp" />
          <img class="image" src="./assets/Vue.webp" />
          <img class="image" src="./assets/Angluar.webp" />
          <img class="image" src="./assets/Express.webp" />
          <img class="image" src="./assets/PhP.webp" />
          <img class="image" src="./assets/laravel.webp" />
          <img class="image" src="./assets/MySql.webp" />
          <img class="image" src="./assets/Node.webp" />
          <img class="image" src="./assets/MongoDB.webp" />
          <img class="image" src="./assets/Wordpress.webp" />
        </div>
      </div>
    </div>
  </section>

  <!-- TECH STACK -->

  <!-- Industries -->
  <section style="position: relative;" class="industry">
    <div class="indus-head">
      <h1 class="text-center h1-test">Industries We Transform </h1>
      <p class="para">Discover how the award-winning development team at Maximise Insights <br class="indus-br"> leverages years of
        expertise to empower multiple businesses </p>
    </div>
    <div class="card-container">
      <!-- <div class="indus-main-1"> -->
      <a type="button" onclick="navigateAndHighlight('education')">
        <div class="cards">
          <img src="./assets/Industry Icons_Education.webp" alt="">
          <h1 class="icon-h1">Education</h1>
        </div>
      </a>

      <a type="button" onclick="navigateAndHighlight('finance')">
        <div class="cards">
          <img src="./assets/Industry Icons_Finance.webp" alt="">
          <h1 class="icon-h1">Finance</h1>
        </div>
      </a>

      <a type="button" onclick="navigateAndHighlight('transport')">
        <div class="cards">
          <img src="./assets/Industry Icons_Healthcare.webp" alt="">

          <h1 class="icon-h1">Transportation</h1>
        </div>
      </a>

      <a type="button" onclick="navigateAndHighlight('realestate')">
        <div class="cards">
          <img src="./assets/Industry Icons_Real Estate.webp" alt="">

          <h1 class="icon-h1">Real Estate</h1>
        </div>
      </a>
    <!-- </div> -->
    <!-- <div class="indus-main-1"> -->
      <a type="button" onclick="navigateAndHighlight('healthcare')">
        <div class="cards">
          <img src="./assets/Industry Icons_Retail.webp" alt="">
          <h1 class="icon-h1">Retail</h1>
        </div>
      </a>

      <a type="button" onclick="navigateAndHighlight('technology')">
        <div class="cards">
          <img src="./assets/Industry Icons_Technology.webp" alt="">

          <h1 class="icon-h1">Technology</h1>
        </div>
      </a>

      <a type="button" onclick="navigateAndHighlight('telecom')">
        <div class="cards">
          <img src="./assets/Industry Icons_Telecom.webp" alt="">

          <h1 class="icon-h1">Telecom</h1>
        </div>
      </a>

      <a type="button" onclick="navigateAndHighlight('retail')">
        <div class="cards">
          <img src="./assets/Industry Icons_Transport.webp" alt="">

          <h1 class="icon-h1">Transport</h1>
        </div>
      </a>
    <!-- </div> -->


    </div>
  </section>
  <!-- Industries -->

  <!-- Resources -->
  <!-- <div class="head" data-aos="fade-up" data-aos-delay="50">
    <br>
    <h1 class="text-center h1-test">Maximize Insights Resources</h1>

    <p class="para">Explore our comprehensive resources to gain insights into the latest digital trends,<br>industry
      best practices, and innovative solutions for your business. </p>
  </div>
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="blogs">
          <div class="b-con">
            <h1>Blogs</h1>
            <p>Discover the latest happenings, partnerships, and innovations at Maximise Insights.</p>
            <button class="Learn_more1 le_m"><a href="" class="l-m">Learn more!</a></button><br><br>
          </div>
          <div class="resource-img">
            <img src="assets/Fashion blogging-bro.svg" alt="">
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="blogs">
          <div class="b-con">
            <h1>News</h1>
            <p>Discover the latest happenings, partnerships, and innovations at Maximise Insights.</p>
            <button class="Learn_more1 le_m"><a href="" class="l-m">Learn more!</a></button><br><br>
          </div>
          <div class="resource-img">
            <img src="assets/News-bro.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- Resources -->

  <!-- START TESTIMONIAL -->
  <section style="position: relative;" id="testimonial_area" class="section_padding">
    <div class="test-text">
      <h1 class="text-center h1-test mt-5">Testimonials!</h1>
      <p class="para">Here are some testimonials from our previous web development projects <br class="indus-br">
        that left the clients satisfied with our services. </p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="testmonial_slider_area text-center owl-carousel">
            <div class="testimonial-card">
              <div class="box-area">
                <div class="img-area">
                  <img src="./assets/1.jpg" alt="">
                </div>
                <h5>Alan Thompson</h5>
                <span>Chief Executive Officer</span>
                <p class="contents">
                  “Maximise Insights has been a game-changer for our IT services company. Their commitment to
                  transforming our online presence was evident from day one. Their creativity and attention to detail
                  are truly exceptional. With precision and dedication, they reshaped our brand image, aligning it
                  seamlessly with our business values and goals.”
                </p>
                <h6 class="socials">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </h6>

              </div>
            </div>
            <!-- END SINGLE TESTIMONIALS -->
            <div class="testimonial-card">
              <div class="box-area">
                <div class="img-area">
                  <img src="./assets/2.jpg" alt="">
                </div>
                <h5>Sarah Johnson</h5>
                <span>Marketing Director</span>
                <p class="contents">
                  “Our experience working with Maximise Insights has been phenomenal. I needed a partner who could bring
                  our vision to life in the digital space. Maximise Insights did just that and more. Their team not only
                  delivered a dynamic website but also offered strategic insights that were a huge help for our team.”
                </p>
                <h6 class="socials">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>

                </h6>
              </div>
            </div>


            <!-- END SINGLE TESTIMONIALS -->
            <div class="testimonial-card">
              <div class="box-area">
                <div class="img-area">
                  <img src="./assets/3.jpg" alt="">
                </div>
                <h5> David Smith</h5>
                <span>Chief Operating Officer</span>
                <p class="contents">
                  “HealthTech Innovations owes a great deal of its success to Maximise Insights. Their innovative
                  strategies and commitment to delivering personalized solutions have been instrumental in elevating our
                  brand in the competitive healthcare industry. They designed innovative web applications Thank you to
                  all of you!”
                </p>
                <h6 class="socials">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>

                </h6>
              </div>
            </div>

            <!-- END SINGLE TESTIMONIALS -->
            <div class="testimonial-card">
              <div class="box-area">
                <div class="img-area">
                  <img src="./assets/4.jpg" alt="">
                </div>
                <h5>Beth Gomes</h5>
                <span> President</span>
                <p class="contents">
                  “I had a wonderful experience working with Maximize Insights on a recent project, and I couldn't be
                  more impressed with the results. From the initial concept to the final design, their team demonstrated
                  a deep understanding of our vision. I recommend Maximize Insights to anyone looking for professional
                  graphics designing.”
                </p>
                <h6 class="socials">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </h6>
              </div>
            </div>

            <!-- END SINGLE TESTIMONIALS -->
            <div class="testimonial-card">
              <div class="box-area">
                <div class="img-area">
                  <img src="./assets/5.jpg" alt="">
                </div>
                <h5>Allen Williams</h5>
                <span>Marketing Manager</span>
                <p class="contents">
                  “Our shipping company has worked with Maximize Insights on several projects, including our logo,
                  website, brochure, and business cards and they are simply the best! They more than exceeded our
                  expectations and it was truly a pleasure working with them. I highly recommend contacting Maximize
                  Insights for your next design project.”
                </p>
                <h6 class="socials">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                </h6>
              </div>
            </div>

            <!-- END SINGLE TESTIMONIALS -->
            <div class="testimonial-card">
              <div class="box-area">
                <div class="img-area">
                  <img src="./assets/6.jpg" alt="">
                </div>
                <h5>Michael Carter</h5>
                <span> Owner</span>
                <p class="contents">
                  “The digital marketing team at Maximize Insights has been a great help in driving our e-commerce
                  business forward. They helped me transform my business from having no social presence at all to now
                  fully optimized business pages and a strong presence on all major platforms. I am just loving the
                  process of getting social!”
                </p>
                <h6 class="socials">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </h6>
              </div>
            </div>

            <!-- END SINGLE TESTIMONIALS -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END TESTIMONIAL -->

  <script>
    const navigateAndHighlight = (tabName) => {
      // Save the selected tab in localStorage
      localStorage.setItem('selectedTab', tabName);
      localStorage.setItem('scrollToPage2', 'true');
      window.location.href = 'industries.php';
    };
  </script>
<?php
include 'includes/footer.php'
?>