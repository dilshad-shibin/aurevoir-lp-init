<?php
error_reporting(0);
$source = '';
$source = $_GET['utm_source'];
$medium = '';
$medium = $_GET['utm_medium'];
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title  -->
    <title>Aurevoir - The Existential Ayurveda Treatment Center</title>

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!--Cookie Alert-->
    <link rel="stylesheet" href="assets/css/cookiealert.css">


</head>

<body class="homepage-1">


    <div class="main">
        <!-- ***** Header Start ***** -->
        <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
            <div class="container position-relative">
                <a class="navbar-brand" href="index.php">
                    <img class="navbar-brand-regular" src="assets/img/logo/aurevoir-logo.png" alt="Aurevoir Malampuzha Palakkad logo">
                    <img class="navbar-brand-sticky" src="assets/img/logo/aurevoir-logo.png" alt="Aurevoir Malampuzha Palakkad logo">
                </a>

                <div class="navbar-inner">
                </div>
            </div>
        </header>

        <!-- ***** Welcome Area Start ***** -->
        <section class="section welcome-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-6">
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="form-area">
                            <div class="welcome-form">
                                <form name="form1" method="post" action="email.php">
                                    <div class="form-title">
                                        <h4>Get in touch with us</h4>
                                        <p>For the healing touch</p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Name" class="form-control" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <input placeholder="Phone" class="form-control" name="phone" required type="tel"
                                            pattern="[0-9]{10}" maxlength="10"
                                            oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')"
                                            onchange="this.setCustomValidity('')">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" placeholder="Email" class="form-control" name="email"
                                            required>
                                    </div>
                                    
                                    <div class="form-group form-group-btn">
                                        <input type="hidden" name="esource" value="<?php echo $source;?>">
                                        <input type="hidden" name="emedium" value="<?php echo $medium;?>">
                                        <input type="submit" value="Book Free Consultation" class="form-control" name="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Teatment center Start ***** -->
        <section class="treatment-center section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="treatment-box d-flex align-items-center">
                            <div class="logo">
                                <img src="assets/img/logo/aurevoir-vaidyam-logo.png" alt="Aurevoir Vaidyam logo">
                            </div>
                            <div class="text">
                                <h1>The Existential <br>
                                    Ayurveda Treatment Center</h1>
                                <p>is a specialty Ayurvedic rejuvenation center headed by a qualified and 
                                    highly-respected Vaidyan or physician. It is a live-in clinic where the assigned therapist monitors you daily. The medicines are prepared on site, all food is cooked to strict Ayurvedic principles and served at an exclusive restaurant that serves only vegetarian cuisine.</p>
                                <div class="btn-style">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal0">Book Free Consultation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Treatments Start ***** -->
        <section class="treatment-service section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="treat-head">
                            <h2>Treatments</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-p col-md-6">
                        <div class="treat-box">
                            <div class="icon">
                                <img src="assets/img/treatments/detox.png" alt="">
                            </div>
                            <div class="text">
                                <h3>Detox & Boost Immunity</h3>
                                <p>In order to preserve optimum health, efforts must be made to improve the natural mechanism of protection of the body, called immunity.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-p col-md-6">
                        <div class="treat-box">
                            <div class="icon">
                                <img src="assets/img/treatments/panchakarma.png" alt="">
                            </div>
                            <div class="text">
                                <h3>Panchakarma Therapy</h3>
                                <p>It is a formidable Ayurvedic therapy that eliminates accumulated toxins from the body, improves digestive fire, and balances all doshas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-p col-md-6">
                        <div class="treat-box">
                            <div class="icon">
                                <img src="assets/img/treatments/body-purification.png" alt="">
                            </div>
                            <div class="text">
                                <h3>Body Purification & Detox</h3>
                                <p>Cleansing of the body and mind by means of different Ayurvedic purification therapies helps the body to undergo rejuvenation naturally.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-p col-md-6">
                        <div class="treat-box">
                            <div class="icon">
                                <img src="assets/img/treatments/obesity-management.png" alt="">
                            </div>
                            <div class="text">
                                <h3>Obesity Management</h3>
                                <p>It includes specific Ayurvedic treatments to increase  Pitha dosha and Catabolism and decrease Anabolism, leading to healthy weight loss.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-p col-md-6">
                        <div class="treat-box">
                            <div class="icon">
                                <img src="assets/img/treatments/arthirities.png" alt="">
                            </div>
                            <div class="text">
                                <h3>Arthritis Treatments</h3>
                                <p>Various remedial treatments are provided based on the type of Arthritis and the immune system is boosted to prevent further impairment.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-p col-md-6">
                        <div class="treat-box">
                            <div class="icon">
                                <img src="assets/img/treatments/stress-strain.png" alt="">
                            </div>
                            <div class="text">
                                <h3>Remove Stress & Strain</h3>
                                <p>Different types of therapies are available for stress reduction and anxiety management, that relax the whole body and help you feel good.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-p col-md-6">
                        <div class="treat-box">
                            <div class="icon">
                                <img src="assets/img/treatments/beauty-care.png" alt="">
                            </div>
                            <div class="text">
                                <h3>Beauty Care</h3>
                                <p>We provide Ayurvedic beauty treatment, unique to each individual and their skin type, identifying the underlying factors of the ailment.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-p col-md-6">
                        <div class="treat-box treat-box2">
                            <h3>Let's heal you amidst tranquility </h3>
                            <div class="btn-style">
                                <a href="#" data-toggle="modal" data-target="#exampleModal0">Talk To Doctor</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** packages Start ***** -->
        <section class="packages-area section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="package-head">
                            <h1>Ayurveda Packages</h1>
                            <h3>Energistically syndicate team building synergy after efficient human capital. 
                                Assertively underwhelm sticky solutions.</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="pg-box">
                            <img src="assets/img/package/ayurveda-package-1.jpg" alt="">
                            <h2>Soukyayush <br> 
                                (Healing Process)</h2>
                            <p>Pandemic of this century has been touching major number of human being in this planet. Post Pandemic damages on the body is highly increased in recent days. 
                                Respiratory system (Lungs other parts of respiratory system) , Digestive system ( stomach, large intestine, small intestine, liver , pancreas etc) has been observed drastically low performance end. Ayurveda bhas the best way of treatment for Post Pandemic symptoms, as it contains natural remedies for swift healing on interior parts of body.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pg-box">
                            <img src="assets/img/package/ayurveda-package-2.jpg" alt="">
                            <h2>Prajnamrutham <br>
                                (Mind Rejuvenation)</h2>
                            <p>We care our body well with disciplined life style , diet etc. Mind is least cared thought we send maximum possible work load and stress to her. Managing and rejuvenating the mind to Stress Free standards are no happening.
                                "Prajnamrutham" is specifically designed for treating the Stress- Strain mind , which will bring people to a level of mind management. Both Meditational and Medicational therapy is used in Prajnamrutham  they are Sirodhara, Takradhara, Sirovasti, 
                                Thalapothichil, Nasyam, Thalam etc</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pg-box">
                            <img src="assets/img/package/ayurveda-package-3.jpg" alt="">
                            <h2>Swasthya <br>
                                (Preventive healthcare)</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="btn-style-pg">
                            <a href="#" data-toggle="modal" data-target="#exampleModal0">Book your packages</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <!-- ***** About Start ***** -->
         <section class="about-area section">
             <div class="container">
                 <div class="row">
                     <div class="col-12 text-center">
                         <div class="about-head">
                            <span>About</span>
                            <h1>Au Revoir Resort Palakkad</h1>
                            <p>Neatly tucked into a hillock, bang amidst a wildlife sanctuary and nature reserve along the Western Ghats or the Sahyadri Mountain (mountain of patience) ranges at the Palakkad Pass in Kerala and bordering the neighboring state of Tamil Nadu, one of the best Ayurvedic resorts in Kerala, Au Revoir Ayurvedic treatment center is a well-hidden getaway from the touristy trails of God's Own Country, yet easily accessible. With misty and often cloud-shrouded evergreen mountains in the foreground standing sentinel over a majestic lake with high-rising reserve forests in the background, the setting here is picture-perfect!</p>
                            <p class="last-child">This Wellness Retreat which is one of the topmost luxury Ayurvedic resorts in Kerala offers the best Ayurvedic packages that will help in relaxation and rejuvenation of your body, mind, and soul. Karkidaka Chikithsa is one of the main attractions.</p>
                            <div class="about-btn">
                                <a href="#" data-toggle="modal" data-target="#exampleModal0">Request A Call Back</a>
                            </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

         <!-- about-bg -->
         <section class="about-bg">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-12 p-0">
                         <img src="assets/img/bg/aurevoir-about-bg.jpg" alt="Aurevoir Malampuzha Palakkad">
                     </div>
                 </div>
             </div>
         </section>

         <!-- ***** Amenities Start ***** -->
         <section class="amenities-area section">
             <div class="container">
                 <div class="row">
                     <div class="col-12 text-center">
                         <h2 class="amn-head">Amenities</h2>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-12">
                         <div class="amenities-slider owl-carousel">
                             <div class="amn-item">
                                 <img src="assets/img/amenities/aurevoir-restaurant.jpg" alt="Aurevoir restaurant">
                                 <div class="text-amn">
                                     <h2>Multi Cuisine Restaurant</h2>
                                 </div>
                             </div>
                             <div class="amn-item">
                                <img src="assets/img/amenities/aurevoir-honeymoon-poolvilla.jpg" alt="Aurevoir restaurant Poolvilla">
                                <div class="text-amn">
                                    <h2>Honeymoon Pool View</h2>
                                </div>
                            </div>
                            <div class="amn-item">
                                <img src="assets/img/amenities/infinite-poolvilla.jpg" alt="Aurevoir Infinite Poolvilla">
                                <div class="text-amn">
                                    <h2>Infinity Pool</h2>
                                </div>
                            </div>
                            <div class="amn-item">
                                <img src="assets/img/amenities/delux-room.jpg" alt="Aurevoir Deluxe Room">
                                <div class="text-amn">
                                    <h2>Deluxe Room</h2>
                                </div>
                            </div>
                            <div class="amn-item">
                                <img src="assets/img/amenities/row-house.jpg" alt="Aurevoir row house">
                                <div class="text-amn">
                                    <h2>Row House</h2>
                                </div>
                            </div>
                            <div class="amn-item">
                                <img src="assets/img/amenities/banquet-hall.jpg" alt="Aurevoir Banquet Hall">
                                <div class="text-amn">
                                    <h2>Banquet Hall</h2>
                                </div>
                            </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

          <!-- ***** Testiminials Start ***** -->
          <section class="testi-area section">
              <div class="container">
                  <div class="row">
                      <div class="col-12 text-center">
                          <div class="testi-head">
                              <h2>Testimonials</h2>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12">
                          <div class="testi-slider owl-carousel">
                              <div class="testi-item">
                                  <div class="testi-box d-flex text-center align-items-center">
                                      <div class="img-testi">
                                          <img src="assets/img/female-testi.png" alt="">
                                          <h4>Tara</h4>
                                          <span>Mumbai</span>
                                      </div>
                                      <div class="text-testi">
                                          <img src="assets/img/quotes.png" alt="">
                                          <p>Au Revoir has highly dedicated doctors and therapists. Panchakarma therapy is extremely beneficial. Yoga sessions are highly energizing and fruitful.</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="testi-item">
                                    <div class="testi-box d-flex text-center align-items-center">
                                        <div class="img-testi">
                                            <img src="assets/img/male-testi.png" alt="">
                                            <h4>Karthik</h4>
                                            <span>Thrissur</span>
                                        </div>
                                        <div class="text-testi">
                                            <img src="assets/img/quotes.png" alt="">
                                            <p>Beautiful location, ideal resort to rewind and enjoy the benefits of Ayurveda right in nature's lap. I was quite benefited by Karkidaka Chikithsa.</p>
                                        </div>
                                    </div>
                               </div>
                               <div class="testi-item">
                                        <div class="testi-box d-flex text-center align-items-center">
                                            <div class="img-testi">
                                                <img src="assets/img/male-testi.png" alt="">
                                                <h4>Aryan</h4>
                                                <span>Chennai</span>
                                            </div>
                                            <div class="text-testi">
                                                <img src="assets/img/quotes.png" alt="">
                                                <p>Au Revoir offers the luxury of Ayurveda treatment in a scenic locale. The dedicated team and the amazing facilities make it a great wellness retreat.</p>
                                            </div>
                                        </div>
                                </div>
                                <div class="testi-item">
                                        <div class="testi-box d-flex text-center align-items-center">
                                            <div class="img-testi">
                                                <img src="assets/img/male-testi.png" alt="">
                                                <h4>Sathiyan</h4>
                                                <span>Kochi</span>
                                            </div>
                                            <div class="text-testi">
                                                <img src="assets/img/quotes.png" alt="">
                                                <p>I chose Au Revoir as it provides authentic treatment and one can also relax in the retreat/spa. The stay was memorable as our needs were addressed.</p>
                                            </div>
                                        </div>
                                </div>
                                <div class="testi-item">
                                        <div class="testi-box d-flex text-center align-items-center">
                                            <div class="img-testi">
                                                <img src="assets/img/female-testi.png" alt="">
                                                <h4>Christina</h4>
                                                <span>Germany</span>
                                            </div>
                                            <div class="text-testi">
                                                <img src="assets/img/quotes.png" alt="">
                                                <p>Au Revoir is a perfect place for healing and rejuvenation with its best packages and top-notch amenities.One truly wishes to come back for more.</p>
                                            </div>
                                        </div>
                                </div>
                          </div>
                      </div><!-- col close -->
                  </div><!-- row close -->
                  <div class="row">
                      <div class="col-12 text-center">
                          <div class="testi-btn">
                              <a href="#" data-toggle="modal" data-target="#exampleModal0">Talk To Doctor</a>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

          <!-- ***** Contact section Start ***** -->
          <section class="contact-area section">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="contact-vaidyam">
                              <div class="logo">
                                  <img src="assets/img/logo/aurevoir-vaidyam-logo.png" alt="">
                              </div>
                              <div class="text">
                                  <p>Vaidyam is a specialty Ayurvedic wellness and 
                                    rejuvenation center headed by a qualified and highly-respected Vaidyan or physician. It is a live-in clinic where the assigned 
                                    therapist monitors you daily. The medicines are prepared 
                                    on site, all food is cooked to strict Ayurvedic 
                                    principles and served at an exclusive restaurant that serves only vegetarian cuisine.</p>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="contact-form">
                            <form name="form2" method="post" action="email.php">
                                <div class="form-group">
                                    <input type="text" placeholder="Name" class="form-control" name="name" required>
                                </div>
                                <div class="form-group">
                                    <input placeholder="Phone" class="form-control" name="phone" required type="tel"
                                        pattern="[0-9]{10}" maxlength="10"
                                        oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')"
                                        onchange="this.setCustomValidity('')">
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Email" class="form-control" name="email"
                                        required>
                                </div>
                                
                                <div class="form-group form-group-btn">
                                    <input type="hidden" name="esource" value="<?php echo $source;?>">
                                    <input type="hidden" name="emedium" value="<?php echo $medium;?>">
                                    <input type="submit" value="Request A Call Back" class="form-control" name="submit">
                                </div>
                            </form>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

          <!-- ***** Footer section Start ***** -->
          <footer class="footer-area section">
              <div class="container">
                  <div class="row">
                      <div class="col-12 text-center">
                          <div class="footer-logo">
                              <img src="assets/img/logo/aurevoir-logo.png" alt="">
                              <ul class="social-btns">
                                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12">
                          <div class="copyright-area">
                              <p>Copyright @ 2022 AuRevoir Resort, Palakkad. All Rights Reserved. Designed by 
                                  <a href="#http://www.theviralmafia.com/?utm_source=aurevoir" target="_blank">
                                      <img src="assets/img/logo/viralmafia.png" alt="">
                                  </a>
                                </p>
                          </div>
                      </div>
                  </div>
              </div>
          </footer>


        <!-- ***** Popup Area Start ***** -->
        <div class="appoint-model">
            <div class="container">
                <div class="col-12">
                    <div class="row">
                        <div class="modal fade order-model" id="exampleModal0" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog log-sign modal-mookambika" role="document">
                                <div class="col-lg-6 p-0 text-center pp-left">
                                    <div class="popupleft-content">

                                    </div>
                                </div>
                                <div class="col-lg-6 p-0">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <a href="#" class="download-close" data-dismiss="modal"
                                                aria-label="Close"><span>X</span></a>
                                        </div>
                                        <div id="letter5">
                                            <div class="letter_inner">
                                                <div class="heading color-b">
                                                    <h2>Get in touch</h2>
                                                </div>
                                                <div class="model-project-details">
                                                    <div class="heading color-b">
                                                        <div class="tab-content">
                                                            <div role="tabpanel" class="tab-pane active tab-log"
                                                                id="profile2">
                                                                <form name="form3" method="post" action="email.php">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Name" name="name" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input class="form-control"
                                                                                    placeholder="Phone" name="phone"
                                                                                    required type="tel" pattern="[0-9]{10}"
                                                                                    maxlength="10"
                                                                                    oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')"
                                                                                    onchange="this.setCustomValidity('')">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="email" class="form-control"
                                                                                    placeholder="Email" name="email"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="hidden" name="esource"
                                                                                    value="<?php echo $source;?>">
                                                                                <input type="hidden" name="emedium"
                                                                                    value="<?php echo $medium;?>">
                                                                                <input type="submit" class="form-control"
                                                                                    value="Request A Call Back" name="submit">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side Bottom Fixed Buttons -->
        <div class="cont_link_box">

            <a id="" href="tel:+919778412247" title="Call Now" class="callnow_inte" target="">
                <i class="fas fa-phone-alt" aria-hidden="true"></i>
            </a>
            <a id="" href="https://wa.me/+919778412247" title="Whatsapp Now" class="whatsapp_inte" target="_blank">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>
        <div class="enq-side">
            <a href="#" class="vertical_btn" data-toggle="modal" data-target="#exampleModal0">Enquire</a>
        </div>

    </div>



    <!-- about Form-->
    <div class="modal fade popsec onload_pop" id="myModal3">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
                        <button type="button" class="btn-close pop_button" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="privacy_onload">

                            <div class="pop-privacy-box">

                                <h4>Privacy Policy</h4>

                                <p>This privacy policy applies to the website( name). We may collect personal information such as your name, address, phone number and email address. We use this information to offer services, deliver services on your request and inform you about events and promotions. We use "cookies" to personalize your online experience. We secure the personal information you provide.</p>

                                <h4>Cookies Policy</h4>

                                <p>We use cookies to improve your experience of our website and to analyze performance and traffic in our website.</p>

                            </div>

                        </div>    
                        
                    </div>

                </div>
            </div>
    </div>

    <!-- START Bootstrap-Cookie-Alert -->
    <div class="alert text-center cookiealert" role="alert">
        <b>Do you like cookies?</b> &#x1F36A; <a href="#" data-toggle="modal" data-target="#myModal3">Learn more</a>

        <button type="button" class="btn btn-primary btn-sm acceptcookies">
            I agree
        </button>
    </div>
    <!-- END Bootstrap-Cookie-Alert -->



    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/jquery/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Active js -->
    <script src="assets/js/active.js"></script>

    <script src="assets/js/cookiealert.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $("#exampleModal0").modal('show');
            }, 7000);
        });
    </script>

</body>

</html>