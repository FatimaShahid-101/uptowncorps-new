<?php
if(!isset($name)){
    $name="";
}
?>

<!DOCTYPE html>
<html lang="zxx">
   <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="UpTownCorps is the number one trusted fleet provider in UAE with affordable packages, suitable for your logistics and transport requirement. ">
        <link rel="shortcut icon" href="images/logo-black.png" type="image/x-icon">
        <title>UpTownCorps - Service Management</title>

                                <!--Bootsrap scripts-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
                            
                                <!--CSS stylesheet-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="vendors/fontawesome-free-5.15.2-web/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    </head>

    <body>        
        <div class="navigation">
            <a href="#navigation-nav" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </a>
            <div class="navigation__nav" id="navigation-nav">
                <div class="navigation__list">
                    <a href="#index.html" class="navigation__close">&times;</a>
                    <ul>
                    <li class="navigation__item"><a href="index.php" class="navigation__link">Home</a></li>
                    <li class="navigation__item"><a href="#section-about" class="navigation__link">About Us</a></li>
                    <li class="navigation__item"><a href="#section-features" class="navigation__link">Features</a></li>
                    <li class="navigation__item"><a href="#section-services" class="navigation__link">Our Services</a></li>
                    <li class="navigation__item"><a href="#section-quote" class="navigation__link">Get a Quote</a></li>
                    <li class="navigation__item"><a href="#section-contact" class="navigation__link">Contact Us</a></li>
                </ul>
                </div>
            </div>
        </div>                                                                       
        <header class="header">
            <div class="header__logo-box">
                <img class="header__logo" src="images/logo-white.png" alt="brand"> 
            </div>
            <section class="header__section">
            <div class="header__text-box">
                <h1 class="heading-primary">
                    <span class="heading-primary--main">UpTownCorps</span>
                    <span class="heading-primary--sub">Service Management</span>
                </h1>
                <a href="#section-quote" class="btn btn--white btn--animated js--scroll-to-quote">Request a Quote</a>
            </div> 
        </section>
        </header> 
        <main>
            <section class="section-about" id="section-about">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">About uptowncorps</h2>
                </div>  
                <div class="row">
                    <div class="col-lg-6 composition__details">
                        <h3 class="heading-tertiary u-margin-bottom-small">YOU'RE GOING TO FALL IN LOVE WITH US</h3>
                        <p class="paragraph">Uptowncorps UAE provides extensive heavy/light trucks transport services to different kinds of SMBs. 
                         We are professionals when it comes to providing fleet to Restaurants, Hotels, or Catering Businesses. 
                       .</p>
                         <h3 class="heading-tertiary u-margin-bottom-small">SERVICE LIKE YOU NEVER HAD BEFORE</h3>
                         <p class="paragraph">
                          We have an experienced team of drivers, skilled staff and management who are professionals and 
                          ensure that our customers are satisfied with our services.</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="composition">
                            <img src="images/photo2.jpg" alt="photo 1" class="composition__photo composition__photo--p1">
                            <img src="images/CargoVan.jpg" alt="photo 2" class="composition__photo composition__photo--p2">
                            <img src="images/photo.jpg" alt="photo 3" class="composition__photo composition__photo--p3">
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-features" id="section-features">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-box">
                            <ion-icon name="cash" class="feature-box__icon"></ion-icon>
                            <h3 class="heading-tertiary u-margin-bottom-small">Affordable Prices</h3>
                            <p class="feature-box__text">
                                We offer reasonable rates and best customer service. 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-box">
                            <ion-icon name="person" class="feature-box__icon"></ion-icon>
                            <h3 class="heading-tertiary u-margin-bottom-small">Professional Drivers</h3>
                            <p class="feature-box__text">
                                 We have highly skilled and professional drivers.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-box">
                            <ion-icon name="sync" class="feature-box__icon"></ion-icon>
                            <h3 class="heading-tertiary u-margin-bottom-small">Regular Maintenance</h3>
                            <p class="feature-box__text">
                                Our fleet is regularly serviced to optimize the consumption.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-box">
                            <ion-icon name="map" class="feature-box__icon"></ion-icon>
                            <h3 class="heading-tertiary u-margin-bottom-small">Customizable package</h3>
                            <p class="feature-box__text">
                                We offer customizable packages as per the requirement.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-services" id="section-services">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">Our Services</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-12 card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--1">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--1">Chiller Van</span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>Deep Freezer Van</li>
                                    <li>Chiller Van</li>
                                    <li>With or Without driver</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back">
                            <div class="card__cta">
                                <a href="#popup1" class="btn btn--white">Book Now!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--2">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--2">Chiller Canter</span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>Temperature Controlled</li>
                                    <li>Heavy Vehicle</li>
                                    <li>Air Conditioning</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back">
                            <div class="card__cta">
                                <a href="#popup2" class="btn btn--white">Book Now!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--3">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--3">Cargo Van</span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>Compartment Available</li>
                                    <li>Cargo trucks</li>
                                    <li>Customizable packages</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back">
                            <div class="card__cta">
                                <a href="#popup3" class="btn btn--white">Book Now!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--4">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--4">Delivery Bike</span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>Customizable packages</li>
                                    <li>With Driver</li>
                                    <li>With Storage box</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back">
                            <div class="card__cta">
                                <a href="#popup4" class="btn btn--white">Book Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-testimonials">
                <div class="bg-video">
                    <video class="bg-video__content" autoplay muted loop>
                        <source src="images/bg-video.mp4" type="video/mp4">
                        This video is not supported!
                    </video>
                </div>
                <div class="testimonials-div">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">What our customers say about us!</h2>
                </div>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner testimonials">
                        <div class="carousel-item active">
                            <figure class="testimonials__shape">
                                <img src="images/Mohammad-jamshed.jpeg" alt="customer1" class="testimonials__image">
                                <figcaption class="testimonials__captiion">Muhammad Jamsheer</figcaption>
                            </figure>
                            <div class="testimonials__text">
                                <h3 class="heading-tertiary ">Muhammad Jamsheer</h3>
                            <h3 class="heading-tertiary u-margin-bottom-small">IT Head at Abeer Al Noor Poly Clinics</h3>
                                <p>Vehicles provided by Uptowncorps are amazing and the drivers are very professional.
                                    They have customizable packages and a number of Vehicles according to your need.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <figure class="testimonials__shape">
                                <img src="images/Bassam-Kabariti.jpeg" alt="customer2" class="testimonials__image">
                                <figcaption class="testimonials__captiion">Bassam Kabariti</figcaption>
                            </figure>
                            <div class="testimonials__text">
                                <h3 class="heading-tertiary">Bassam Kabariti</h3>
                                <h3 class="heading-tertiary u-margin-bottom-small">Owner and Founder of Phillipine Hut Restaurant</h3>
                                <p>The services offered by UPTOWNCORPS is very nice and customizable. I highly recommend them for any logistics work. </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <figure class="testimonials__shape">
                                <img src="images/Syed-Mustafa.jpeg" alt="customer3" class="testimonials__image">
                                <figcaption class="testimonials__captiion">Syed Mustafa</figcaption>
                            </figure>
                            <div class="testimonials__text">
                                <h3 class="heading-tertiary ">Syed Mustafa</h3>
                                <h3 class="heading-tertiary u-margin-bottom-small">Manager at Al Zaki Engineering</h3>
                                <p>UPTOWNCORPS has the best customer service I have experienced so far, I found their drivers very professional. 
                                    I will surely book them next time also.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <figure class="testimonials__shape">
                                <img src="images/Naushad-Karpi.jpeg" alt="customer4" class="testimonials__image">
                                <figcaption class="testimonials__captiion">Naushad Karpi</figcaption>
                            </figure>
                            <div class="testimonials__text">
                                <h3 class="heading-tertiary ">Naushad Karpi</h3>
                                <h3 class="heading-tertiary u-margin-bottom-small">Manager at Fakih IVF Fertility Center</h3>
                                <p>My experience with UPTOWNCORPS was amazing. I would give a five star to them for 
                                    their professional work and amazing customer service.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <figure class="testimonials__shape">
                                <img src="images/Merhy-mansour.jpeg" alt="customer5" class="testimonials__image">
                                <figcaption class="testimonials__captiion">Merhy Mansour</figcaption>
                            </figure>
                            <div class="testimonials__text">
                                <h3 class="heading-tertiary ">Merhy Mansour</h3>
                                <h3 class="heading-tertiary u-margin-bottom-small">Fashion Head at COMO MODA</h3>
                                <p>I was satisfied with their work.
                                    The fleet, the drivers and the customer service, everything is perfect and very professional.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <figure class="testimonials__shape">
                                <img src="images/Zaiyad-ahmed.jpeg" alt="customer6" class="testimonials__image">
                                <figcaption class="testimonials__captiion">Zaiyad Ahmed Karpi</figcaption>
                            </figure>
                            <div class="testimonials__text">
                                <h3 class="heading-tertiary ">Zaiyad Ahmed Karpi</h3>
                                <h3 class="heading-tertiary u-margin-bottom-small">Manager at Sharaf DG</h3>
                                <p>A friend recommended me UPTOWNCORPS, and I would say that I am glad he did!
                                    I will surely further recommend this for any logistics requirement as they have amazing service.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <figure class="testimonials__shape">
                                <img src="images/mohammad-kazim.jpeg" alt="customer7" class="testimonials__image"> 
                                <figcaption class="testimonials__captiion">Muhammad Kazim</figcaption>
                            </figure>
                            <div class="testimonials__text">
                                <h3 class="heading-tertiary ">Muhammad Kazim</h3>
                                <h3 class="heading-tertiary u-margin-bottom-small">Fleet Manager at Aramax</h3>
                                <p>I had a really good experience with UPTOWNCORPS. They have an amazing team. 
                                    The best thing that I liked was that they have customizable packages according to your requirements.</p>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            </section>
            <section id="section-quote" class="section-quote">
                <div class="quote">
                    <div class="quote__form" id="form">
                        <form action="mailer-new.php" method="POST" class="form">
                            <div class="u-margin-bottom-medium">
                                <h2 class="heading-secondary">Get a Quote!</h2>
                            </div>
                            <div class="form__group">
                                <input type="text" class="form__input" placeholder="Full Name" id="name" name="name" required>
                                <label for="name" class="form__label">Full Name</label>
                            </div>
                            <div class="form__group">
                                <input type="text" class="form__input" placeholder="Your Company" id="company" name="company" required>
                                <label for="company" class="form__label">Your Company</label>
                            </div>
                            <div class="form__group">
                                <input type="text" class="form__input" placeholder="Service Required" id="service" name="service" required>
                                <label for="service" class="form__label">Service Required</label>
                            </div>
                            <div class="form__group">
                                <input type="text" class="form__input" placeholder="Contract Duration" id="duration" name="duration" required>
                                <label for="duration" class="form__label">Contract Duration</label>
                            </div>
                            <div class="form__group">
                                <input type="email" class="form__input" placeholder="Email Address" id="email" name="email" required>
                                <label for="email" class="form__label">Email Addresss</label>
                            </div>
                            <div class="form__group">
                                <input type="text" class="form__input" placeholder="Phone Number" id="number" name="number" required>
                                <label for="number" class="form__label">Phone Number</label>
                            </div>
                            <div class="form__group">
                                <div class="form__radio-group">
                                    <input type="radio" class="form__radio-input" id="radio1" name="driver">
                                    <label for="radio1" class="form__radio-label">
                                        <span class="form__radio-button"></span>
                                        Driver Required
                                    </label>
                                </div>
                                <div class="form__radio-group">
                                    <input type="radio" class="form__radio-input" id="radio2" name="driver">
                                    <label for="radio2" class="form__radio-label">
                                        <span class="form__radio-button"></span>
                                        Driver Not Required
                                    </label>
                                </div>
                                <div class="form__button u-margin-top-large">
                                    <button class="btn btn--green">Get a Quote</button>
                                </div>
                            </div>
                            <?php
                            if (isset($_GET['success'])) {
                            if ($_GET['success'] == 1) {
                                echo "<div class=\"form-messages success\">Thank you! Your message has been sent.</div>";
                            }
                            if ($_GET['success'] == -1) {
                                echo "<div class=\"form-messages error\">Oops! Something went wrong, please try again.</div>";
                            }
                        } ?>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        <footer class="footer">
            <section id="section-contact">
                <div class="socials-div">
                    <ul class="socials">
                        <li class="socials-li"><a href="https://www.facebook.com/uptowncorps/" ><ion-icon class="ion-social-facebook" name="logo-facebook"></ion-icon></a></li>
                        <li class="socials-li"><a href="https://www.instagram.com/uptowncorps/" ><ion-icon class="ion-social-instagram" name="logo-instagram"></ion-icon></a></li>
                        <li class="socials-li"><a href="https://twitter.com/uptowncorps" ><ion-icon class="ion-social-twitter" name="logo-twitter"></ion-icon></a></li>
                        <li class="socials-li"><a href="https://www.linkedin.com/company/uptowncorps" ><ion-icon class="ion-social-linkedin" name="logo-linkedin"></ion-icon></a></li>
                    </ul>
               </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 contact">
                    <ul class="footer-contact">
                        <li id="first-li">CONTACT US</li>
                        <li>SMBA0115, Compass building, Al Shohada Road, Al Hamra Industrial Zone-FZ, Ras Al Khaimah, United Arab Emirates
                        </li>
                        <li>8000185295</li>
                        <li><a>info@uptowncorps.com</a></li>
                        <li>www.uptowncorps.com</li>
                    </ul>
                </div>
                <div id="subscribe" class="col-lg-6 col-md-12">
                    <h3>Subscribe</h3>
                    <p>Subscribe to our newsletter and never miss an update.</p>
                    <form>
                        <input type="email" placeholder="Enter Your Email"  id="email1"><button type="button" class="btn btn-primary btn-lg last-button">Subscribe</button>
                    </form>
                </div>
            </div>
        </section>
        </footer>                                                   
        <div id="copyright">
            <p>Copyright © 2021 UpTownCorps</p>
        </div>
        <div class="popup" id="popup1">
            <div class="popup__content">
                <div class="popup__left">
                    <img src="images/ChillerVan1.jpg" alt="Chiller van" class="popup__img">
                    <img src="images/ChillerVan2.jpg" alt="Chiller Van" class="popup__img">
                </div>
                <div class="popup__right">
                    <a href="#section-tours" class="popup__close">&times;</a>
                    <h2 class="heading-secondary u-margin-bottom-medium">Chiller Van</h2>
                    <p class="popup__text">Chiller vans are the most popular and widely used for the purpose of chiller 
                        and refrigerated items transportation with controlled temperature of +5 C° to 0 C°. These vans are Specially equipped with appropriate refrigeration system, 
                        its temperature can be adjusted according to your goods’ storage temperature requirement..</p>
                    <a href="#section-quote" class="btn btn--green">Book Now!</a>
                </div>
            </div>
        </div>
        <div class="popup" id="popup2">
            <div class="popup__content">
                <div class="popup__left">
                    <img src="images/main-bg.jpg" alt="Chiller Canter" class="popup__img">
                    <img src="images/Chiller-canter.jpg" alt="Chiller Canter" class="popup__img">
                </div>
                <div class="popup__right">
                    <a href="#section-tours" class="popup__close">&times;</a>
                    <h2 class="heading-secondary u-margin-bottom-medium">Chiller Canter</h2>
                    <p class="popup__text">Chiller truck are used for bigger quantities, larger sizes and more heavier goods and products with controlled temperature from +0 to -5 C°.
                         There are different sizes and lengths of the cabin depends upon requirements. 
                        The carrying capacity of the transported products are started from 2 ton to 10 Ton available with us.</p>
                    <a href="#section-quote" class="btn btn--green">Book Now!</a>
                </div>
            </div>
        </div>
        <div class="popup" id="popup3">
            <div class="popup__content">
                <div class="popup__left">
                    <img src="images/photo.jpg" alt="Cargo Van" class="popup__img">
                    <img src="images/chiller_van.jpg.jpg" alt="Cargo Van" class="popup__img">
                </div>
                <div class="popup__right">
                    <a href="#section-tours" class="popup__close">&times;</a>
                    <h2 class="heading-secondary u-margin-bottom-medium">Cargo Van</h2>
                    <p class="popup__text">Cargo Vans or Cargo trucks are available as per the requirement for the logistics.
                        These are vans without any refrigerated units for the back cabin. 
                        These are the vans which are used for the products which does not requires any controlled temperature.
                        Customizable packages are available if the van/truck is required with or without the compartments to optimize the utilization of the vehicle.
                         </p>
                    <a href="#section-quote" class="btn btn--green">Book Now!</a>
                </div>
            </div>
        </div>
        <div class="popup" id="popup4">
            <div class="popup__content">
                <div class="popup__left">
                    <img src="images/bike1.jpg" alt="Delivery Bike" class="popup__img">
                    <img src="images/bike2.jpg" alt="Delivery Bike" class="popup__img">
                </div>
                <div class="popup__right">
                    <a href="#section-tours" class="popup__close">&times;</a>
                    <h2 class="heading-secondary u-margin-bottom-medium">Delivery Bike</h2>
                    <p class="popup__text">We provide the delivery bikes along with the riders as an all inclusive packages the SMEs as per the requirement. 
                        Delivery bikes are with or without the storage box depending upon the requirement. 
                        We offer highly professional riders with complete knowledge of the routes and having a command over customer dealing.</p>
                    <a href="#section-quote" class="btn btn--green">Book Now!</a>
                </div>
            </div>
        </div>
        
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    </body>
</html>     
                                
                                                                                       
                            