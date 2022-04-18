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

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6257d7167b967b11798ab257/1g0ji0coh';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

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

         <!-- ***** client videos ***** -->
         <section class="client-videos section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="client-head">
                            <h2>Let's Hear Some Au Revoir Experiences</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="video-testi owl-carousel">
                            <div class="item">
                                <div class="video-block text-center">
                                    <div class="img">
                                        <div class="img-hover"></div>
                                        <img src="assets/img/bg/kadhal-sandya.jpg" alt="" class="testii-img">
                                        <a href="assets/videos/kadhal.mp4" data-fancybox class="center-btn"><img src="assets/img/play-btn.png" alt=""></a>
                                    </div>
                                    <div class="details">
                                        <h3>Kaadhal Sandhya</h3>
                                        <p>Actress</p>
                                    </div>
                                </div>
                            </div><!-- item close -->
                            <div class="item">
                                <div class="video-block text-center">
                                    <div class="img">
                                        <div class="img-hover"></div>
                                        <img src="assets/img/bg/arushi.jpg" alt="" class="testii-img"> 
                                        <a href="assets/videos/arushi.mp4" data-fancybox class="center-btn"><img src="assets/img/play-btn.png" alt=""></a>
                                    </div>
                                    <div class="details">
                                        <h3>Arushi Baradwaj</h3>
                                        <p>Mumbai</p>
                                    </div>
                                </div>
                            </div><!-- item close -->
                            <div class="item">
                                <div class="video-block text-center">
                                    <div class="img">
                                        <div class="img-hover"></div>
                                        <img src="assets/img/bg/seib.jpg" alt="" class="testii-img"> 
                                        <a href="assets/videos/seib-mostert.mp4" data-fancybox class="center-btn"><img src="assets/img/play-btn.png" alt=""></a>
                                    </div>
                                    <div class="details">
                                        <h3>Mr.Seib Mostert</h3>
                                        <p>France</p>
                                    </div>
                                </div>
                            </div><!-- item close -->
                            <div class="item">
                                <div class="video-block text-center">
                                    <div class="img">
                                        <div class="img-hover"></div>
                                        <img src="assets/img/bg/sreekrishna.jpg" alt="" class="testii-img"> 
                                        <a href="assets/videos/sreekrihna-kumar.mp4" data-fancybox class="center-btn"><img src="assets/img/play-btn.png" alt=""></a>
                                    </div>
                                    <div class="details">
                                        <h3>Bregadier H S Sreekrishna Kumar & Ratna Madhuri</h3>
                                        <p>Hyderabad</p>
                                    </div>
                                </div>
                            </div><!-- item close -->
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
                            <p>The pandemic of this century has been touching a major number of human beings on this planet. As Post Pandemic damage to the body is highly increased in recent days, Ayurveda offers the best way of treatment for Post Pandemic symptoms, as it owns natural remedies for swift healing on interior parts of the body. Treatment principles for the Post-covid symptoms encompass a good set of concepts that focus on bodily humor, digestive fire, bodily constitution, and site of disease which aids to reinforce the impaired circulation of body fluids, metabolism, and nutrition. A "Goodbye" package for these symptoms - Soukhyayush  - contains different types of purificatory treatments and external treatments like Abhyangam, Dhanyamla Dhara, Urovasti, Rooksh pinda swedam, etc. Embrace our customized Ayurveda package, for experiencing the potential of this traditional method of treatment.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pg-box">
                            <img src="assets/img/package/ayurveda-package-2.jpg" alt="">
                            <h2>Prajnamrutham <br>
                                (Mind Rejuvenation)</h2>
                            <p>Ensuring to keep a balance of mind and body is necessary for healthy well-being.  People are facing various types of stress and work-related tensions in their daily life. Sometimes it turns out to be difficult to manage by them. We are introducing a new customized package – Prajnamrutham, for ensuring your mental health and rejuvenation. Prajnamrutham is specifically designed for treating the Stress-Strain mind, which can bring people to a level of mind management. Both meditational and medicational therapies like Sirodhara, Takradhara, Sirovasti, Thalapothichil, Nasyam, Thalam, etc are included in Prajnamrutham. Our package combined with meditational practices and Ayurvedic therapies helps you to experience a symbiotic relationship between mental, bodily, and spiritual well-being.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pg-box">
                            <img src="assets/img/package/ayurveda-package-3.jpg" alt="">
                            <h2>Swasthya <br>
                            Chikitsa</h2>
                            <p>Living an Ayurveda lifestyle by following a daily routine - Dinacharya is a simple solution to any health-related problems and is vital to promoting a harmonious balance between mind, body, and soul.  Swasthya Chikitsa is a preventive healthcare package with an outlook of enabling the prevention of disease and the promotion of health through diet and lifestyle management. Ayurveda provides a singular set of guidelines in Dinacharya, to assist us to achieve optimum health. Today’s fast lifestyle leads us to the negligence of healthy habits and gives chances to many lifestyle-related diseases. The principles of Dinacharya are most relevant at this point. External Oleation/Abhyangam is the most vital daily routine in Ayurveda. It is an Ayurvedic ritual massage therapy to warm up muscles, loosen trapped endogenous toxins, and improve circulation. We, through this customized package, ensure you complete preventive health care.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pg-box">
                            <img src="assets/img/package/detox.jpg" alt="">
                            <h2>Detox &  <br>
                            Boost Immunity</h2>
                            <p>All human beings have a basic immune system. Efforts to improve the natural mechanism of immunity of the body play a key role in preserving optimum health. A natural way of prevention to fight off diseases and strengthen our immune system is needed in this world. A healthy lifestyle following proper health guidelines will help you to get a good immune system naturally. It is very important to detoxify oneself and remove body toxins to get rid of the diseases and make one’s immunity strong and sturdy. We seek to understand the root causes of the problem, helping you to get relieved through our detox treatment. We focus to enhance your immunity with this effective package that includes ayurvedic medications, medicated water, external treatments along with lifestyle and dietary modifications. With our Detox & Body Immunity package, we will help you to acquire a healthy life.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pg-box">
                            <img src="assets/img/package/ayurveda-body-purification.jpg" alt="">
                            <h2>Panchakarma  <br>
                            Therapy</h2>
                            <p>Panchakarma is a unique five-fold line of treatment in Ayurveda that helps you to cleanse and get rid of the accumulated toxins or unwanted materials from the body. The five treatments included in Panchakarma are Vamana, Virechana, Nasya, Vasthi and Raktamokshana. With its oleation and fomentation treatments incorporated with other therapies and ayurvedic medicines, Panchakarma purifies and rejuvenates your body. It can often be used for both preventive and curative purposes. With this package, we ensure to keep your mind, body, and spirit in harmony with the universe to procure good health. The feeling of rejuvenation with the support of our experts will help you to get rid of all your ailments and relax your body and mind, in a great natural ambiance of our resort.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pg-box">
                            <img src="assets/img/package/obesity-management.jpg" alt="">
                            <h2>Obesity   <br>
                            Management</h2>
                            <p>Overweight and Obesity are terms that refer to bodyweight that is higher than what is healthy. Being overweight is a result of extra body fat, muscle, bone, or water. Ayurveda deals with Obesity management in different ways, including specific Ayurveda treatments that include different types of powder massages, herbal baths, steams, etc. The line of treatment can contain fasting, oral use of digestives to augment the fat metabolism, dry medicated powder massage, heavy and non-nourishing diet, advised physical and mental relaxation exercises, etc. Besides, Ayurveda treatments and internal medications, specific individual diet and lifestyle modification, Yoga, Surya-namaskaram, meditation, etc. are often helpful in maximizing the effect of this healthy Ayurvedic weight loss. Experience the support from experts in obesity management/weight reduction with our special package and live your life to the fullest!</p>
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
                                            <img src="assets/img/testis/arushi.jpg" alt="">
                                            <h4>Arushi</h4>
                                            <!-- <span>Thrissur</span> -->
                                        </div>
                                        <div class="text-testi">
                                            <img src="assets/img/quotes.png" alt="">
                                            <h3>Lovely Experience!</h3>
                                            <p class="addReadMore showlesscontent">I came to this beautiful resort to spend time with my mother and also spend time with nature. The resort definitely exceeded expectations with such lovely and hospitable staff members, beautiful scenery, and amazing treatments. I felt completely relaxed and rejuvenated after my Ayurvedic health treatments. I also had an amazing time in the swimming pool which has a scenic view overlooking the mountains of Kerala. Overall, I had an incredible experience here and look forward to coming back as soon as possible. Highly recommend.</p>
                                        </div>
                                    </div>
                               </div>

                              <div class="testi-item">
                                  <div class="testi-box d-flex text-center align-items-center">
                                      <div class="img-testi">
                                          <img src="assets/img/testis/loredhana.jpg" alt="">
                                          <h4>Loredana H</h4>
                                          <!-- <span>Mumbai</span> -->
                                      </div>
                                      <div class="text-testi">
                                          <img src="assets/img/quotes.png" alt="">
                                          <h3>The perfect cocktail of Magic!</h3>
                                          <p class="addReadMore showlesscontent">
                                          Saddly my holiday has come to an end, but I really want to say a few words about the magic experience I lived in this place and have come from Italy for an official visit.
                                          Au Revoir is a new wellness resort located on the Malambuzha Dam resorvoir with a breath-taking sightseeing of nature and water.
                                          The area is safe and quiet, surrounded by the nature but at a short distance from the city, just about 20 min drive.
                                          I had a marvelous and huge delux room with a private balcony. I found the room to be very clean, comfortable and I was very surprised to find so many accessories available to the client for its stay. As an example, they provide the hair comb, toothbrush, hair drier, blade and shaving gel and more; so if you forgot anything, don't worry, they will assist with any small needs.
                                          There is another very important thing to say their dedication to the customer goes beyond what a 5 star hotel can give in many parts of Italy. I felt very highly looked after, and I could see that they have the same approach with every customer.
                                          Shyni, who is the administration manager of this place,  would kindly take care of my meals and made sure I had the best experience of what real local food is! A true delight!
                                          Least but not last, don't miss their special massage therapy! I treated myself with a 2 hour therapy, made of a body restoring massage and a full body coconut scrub. This is a must-try and it's called Abhyangam and Kerakarshanam.
                                          2 hours of pure wellness for the body and soul. I wish they'd be closer to my country!
                                          I highly recommend Au Revoir because of its honesty, kindness, human touch, cleanliness, fair prices, amazing view, quietness, it has it all! Many thanks to the proprietor who made this wonderful naturally blended Magic called Au Revoir!
                                          Special thanks to Shyni and entire team of the Aurevoir for making my stay memorable!!
                                          </p>
                                      </div>
                                  </div>
                              </div>
                              
                               <div class="testi-item">
                                        <div class="testi-box d-flex text-center align-items-center">
                                            <div class="img-testi">
                                                <img src="assets/img/testis/bhawna.jpg" alt="">
                                                <h4>Bhawna B</h4>
                                                <!-- <span>Chennai</span> -->
                                            </div>
                                            <div class="text-testi">
                                                <img src="assets/img/quotes.png" alt="">
                                                <h3>A Taste of Ayurveda/Kerala</h3>
                                                <p class="addReadMore showlesscontent">Au Revoir, “Goodbye Until We Meet again!” What a lovely name, I thought before I stepped into this magical place.
                                                The location is breathtaking with the mountains in the background and the scenic view of the backwaters stretching the entire road to its entrance.
                                                This is my second visit in less than two months. Au Revoir is all praise for its hospitality, Ayurvedic treatments and exquisite cuisine.
                                                I took a ten-day rejuvenation treatment here and left refreshed and happy.
                                                The Ayurvedic center run by Dr. Chitra with her team of therapists and staff is amazing!!!
                                                Thanks to all these lovely people, Malathi, Sheeja, Amal, Shyju and Pradeep (the Ayurvedic chef) whose passion to create such a wonderful menu makes this resort very special.
                                                Not to forget Mr. Khalid who is the M.D. and the visionary of this place. I was really humbled to meet him and learn about his great vision. His desire to offer people the experience of Ayurveda, amidst this pristine beauty is soulful.
                                                This is a place not only for Ayurvedic treatments but also to create beautiful memories.
                                                A bientot, j’espere!!! (Hope to see you soon!!!)
                                                </p>
                                            </div>
                                        </div>
                                </div>
                                <div class="testi-item">
                                        <div class="testi-box d-flex text-center align-items-center">
                                            <div class="img-testi">
                                                <img src="assets/img/testis/shaji-kumar.jpg" alt="">
                                                <h4>Shaji Kumar</h4>
                                                <!-- <span>Kochi</span> -->
                                            </div>
                                            <div class="text-testi">
                                                <img src="assets/img/quotes.png" alt="">
                                                <h3>Gods own place</h3>
                                                <p class="addReadMore showlesscontent">Gods own resort...tucked away 6kms away from malampuzha dam near palakkad , this resort is a perfect gem...the road is less travelled hence full of gravel and mud...but once u get inside the gate , the world chnges...wow...just wow. We were a family of around 23 people and we thoroughly enjoyed the ambience and the stay at Au revoir.. 
                                                After reaching malampuzha garden u have to drive towards the ropeway and just before that there is a small road going left..which brings us to the resort. The drive is also wonderful as we driveby the backwaters and nature is at its best there. 
                                                They have an infinity pool...so be prepared to bring in some nylon clothes to dive in...huge expanse of a resort. Nice spacious rooms , with a huge washroom and a good balcony. Dinner was arranged for us in the hall , lip smacking non veg food. The bfast had a good spread too. There are cycles also available which can be used for a quick round around...though they also employ battery driven carts for seniors and required required guests. Overall a wonderful experience.
                                                </p>
                                            </div>
                                        </div>
                                </div>
                                <div class="testi-item">
                                        <div class="testi-box d-flex text-center align-items-center">
                                            <div class="img-testi">
                                                <img src="assets/img/testis/niyas.jpg" alt="">
                                                <h4>Niyas M</h4>
                                                <!-- <span>Germany</span> -->
                                            </div>
                                            <div class="text-testi">
                                                <img src="assets/img/quotes.png" alt="">
                                                <h3>Ayurvedic Treatment</h3>
                                                <p class="addReadMore showlesscontent">Very good service and woderfull ambience, we got varieties of vegetable soups, ayurvedic food at ayuvedha treatment ayurvedic Doctor and team very Expirienced and dedicated ,we got delicious and so yummy food in normal restaurant. rooms are spacious and can enjoy scenic beuty.they Maintain good customer relashionahip also......... 🙏🙏🙏</p>
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
                                                                                    value="Book Free Consultation" name="submit">
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
    <script>
       function AddReadMore() {
                //This limit you can set after how much characters you want to show Read More.
                var carLmt = 280;
                // Text to show when text is collapsed
                var readMoreTxt = " ... Read More";
                // Text to show when text is expanded
                var readLessTxt = " Read Less";


                //Traverse all selectors with this class and manupulate HTML part to show Read More
                $(".addReadMore").each(function() {
                    if ($(this).find(".firstSec").length)
                        return;

                    var allstr = $(this).text();
                    if (allstr.length > carLmt) {
                        var firstSet = allstr.substring(0, carLmt);
                        var secdHalf = allstr.substring(carLmt, allstr.length);
                        var strtoadd = firstSet + "<span class='SecSec'>" + secdHalf + "</span><span class='readMore'  title='Click to Show More'>" + readMoreTxt + "</span><span class='readLess' title='Click to Show Less'>" + readLessTxt + "</span>";
                        $(this).html(strtoadd);
                    }

                });
                //Read More and Read Less Click Event binding
                $(document).on("click", ".readMore,.readLess", function() {
                    $(this).closest(".addReadMore").toggleClass("showlesscontent showmorecontent");
                });
            }
            $(function() {
                //Calling function after Page Load
                AddReadMore();
        });

    </script>

</body>

</html>