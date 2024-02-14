<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maximize Insights</title>
    <!-- OwlCarousel -->
    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- BOOTSTRAP CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
    <!-- OwlCarousel -->
    <!-- CSS links -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/services.css">
    <link rel="stylesheet" href="./css/industries.css">
    <link rel="stylesheet" href="./css/pricing.css">
    <!-- CSS links -->
    <!-- Icons Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Icons Link-->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;300;400;500;600;700&family=Poppins:wght@100;200;300;500;600;700;800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,400;1,900&display=swap"
        rel="stylesheet">
    <!-- Fonts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css" crossorigin="anonymous" />
    <style>
        .navbar-nav .nav-link.active {
            color: #ff9600;
        }
    </style>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var navLinks = document.querySelectorAll('.navbar-nav .nav-link');

        function removeActiveClass() {
            navLinks.forEach(function(link) {
                link.classList.remove('active');
            });
        }

        function setCurrentLink(link) {
            removeActiveClass();
            currentLink = link;
            localStorage.setItem('currentLink', link);
            document.querySelector('a[data-link="' + link + '"]').classList.add('active');
        }

        var currentLink = localStorage.getItem('currentLink') || 'home';
        setCurrentLink(currentLink);

        function refreshPage() {
            location.reload();
        }

       
        navLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                setCurrentLink(link.getAttribute('data-link'));
            });
        });

        
        var servicesDropdownLinks = document.querySelectorAll('.dropdown-menu .dropdown-item');

        servicesDropdownLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                setCurrentLink('services'); 
            });
        });
    });
</script>


</head>

<body>
    <?php
        if(isset($_SESSION['status'])){
    ?>
    <div id="modalAlert" class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> <?php echo $_SESSION['status'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
        unset($_SESSION['status']);
        }
    ?>
    
    <nav class="navbar navbar-expand-lg p-0 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" onclick="refreshPage()"><img src="./assets/logo-removebg-preview (1).png" class="logo" alt=""></a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="toggler-icon top-bar"></span>
                <span class="toggler-icon middle-bar"></span>
                <span class="toggler-icon bottom-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" onclick="setCurrentLink('home')" data-link="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php" onclick="setCurrentLink('about')" data-link="about">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="close" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="hoverableDropdown">
                            <li><a class="dropdown-item" href="web.php">Website Development</a></li>
                            <li><a class="dropdown-item" href="seo.php">Social Media Marketing</a></li>
                            <li><a class="dropdown-item" href="design.php">Graphic Designing</a></li>
                            <li><a class="dropdown-item" href="services.php">Search Engine Optimization</a></li>
                            <li><a class="dropdown-item" href="content-writing.php">Content Writing</a></li>
                            <li><a class="dropdown-item" href="video-editing.php">Video Editing</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="industries.php" onclick="setCurrentLink('industries')" data-link="industries">Industries</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pricing.php" onclick="setCurrentLink('pricing')" data-link="pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php" onclick="setCurrentLink('contactus')" data-link="contactus">Contact Us</a>
                    </li>
                </ul>
                <a href="" class="con me-2"><i class="fa fa-phone"></i> +44 (7547) 754836</a>
                <div class="btn-conteiner me-2">
                    <a class="btn-content" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <span class="btn-title">Estimate Project</span>
                        <span class="icon-arrow">
                            <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <path id="arrow-icon-one"
                                        d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                        fill="#FFFFFF"></path>
                                    <path id="arrow-icon-two"
                                        d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                                        fill="#FFFFFF"></path>
                                    <path id="arrow-icon-three"
                                        d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                                        fill="#FFFFFF"></path>
                                </g>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Nav bar -->
</body>

</html>
