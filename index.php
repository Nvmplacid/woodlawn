<?php session_start();
require "../DB/db.php";
$stmt = mysqli_stmt_init($conn);

?><!DOCTYPE html>
<html lang="en">


<!-- Mirrored from oppsworld.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jan 2025 09:55:41 GMT -->
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>woodlawnCapitalPartners</title>

     <!--=====FAB ICON=======-->
     <link rel="shortcut icon" href="newimg/wdlogo.jpg" type="image/x-icon">


     <!--=====CSS=======-->
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/fontawesome.css">
     <link rel="stylesheet" href="assets/css/magnific-popup.css">
     <link rel="stylesheet" href="assets/css/nice-select.css">
     <link rel="stylesheet" href="assets/css/slick-slider.css">
     <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
     <link rel="stylesheet" href="assets/css/aos.css">
     <link rel="stylesheet" href="unpkg.com/swiper%4011.1.10/swiper-bundle.min.html">
     <link rel="stylesheet" href="assets/css/mobile-menu.css">
     <link rel="stylesheet" href="assets/css/main.css">

     <!--=====JQUERY=======-->
     <script src="assets/js/jquery-3-7-1.min.js"></script>
    <style>
      /* Style for the popup notification */
      .popup {
        position: fixed;
        top: 20px;
        right: 20px;
        background-color: #333;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        font-family: Arial, sans-serif;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
        z-index: 1000;
      }
    
      .popup.active {
        opacity: 1;
        visibility: visible;
      }
    
      .popup-content {
        display: flex;
        align-items: center;
      }
    
      .popup-icon {
        margin-right: 10px;
      }
    
      .popup-close {
        background: none;
        border: none;
        color: white;
        margin-left: 10px;
        cursor: pointer;
        font-size: 16px;
      }
    </style>
</head>
<body class="body body2">

    <!--=====progress END=======-->

  <!-- Preloader Start -->
	<div class="preloader preloader2">
		<div class="loading-container">
			<div class="loading loading2"></div>
			<div id="loading-icon"><img src="newimg/wdlogo.jpg" alt=""></div>
		</div>
	</div>
	<!-- Preloader End -->

<div class="paginacontainer"> 

  <div class="progress-wrap progress-wrap2">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
  </div>

</div> 

<!--=====progress END=======-->

<!--=====HEADER START=======-->
    <header>
     <div class="header-area header-area2 single-header2 header-area-all d-none d-lg-block" id="header">
       <div class="container">
         <div class="row">
           <div class="col-12">
             <div class="header-elements">
               <div class="site-logo">
                 <a href="index-2.html" style="color: gainsboro;font-weight: bolder; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                  woodlawnCapitalPartners
                 </a>
               </div>


               <div class="main-menu-ex main-menu-ex1">
                <ul id="list-example">
                    <li><a href="#">Home </a></li>
                    <li><a class="list-group-item list-group-item-action" href="#about">About</a></li>
                    <li><a class="list-group-item list-group-item-action" href="#work">FAQ</a></li>
                    <li><a class="list-group-item list-group-item-action" href="#contact">Contact</a></li>
                    <li><a class="list-group-item list-group-item-action" href="#tes">Testimonial</a></li>
                 </ul>
               </div>



               <div class="header2-buttons">
                    <div class="button">
                        <a href="login.html" class="btn_theme btn_theme_active mt_40 wow fadeInDown" data-wow-duration="0.8s">Join Us Today <i class="fa-solid fa-arrow-right"></i><span></span></a>
                    </div>
               </div>

             </div>
           </div>
         </div>
       </div>
     </div>
   </header>
   <!--=====HEADER END=======-->

          <!--=====Mobile header start=======-->
    
          <!--=====Mobile header end=======-->

          <!--=====HERO AREA START=======-->

          <div class="hero-area2" style="background-image: url(assets/img/bg/hero2-bg.png);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="main-heading">
                            <span class="span" data-aos="fade-right" data-aos-duration="700">Invest In your Future Today</span>
                            <h1 data-aos="fade-right" data-aos-duration="900">Secure investment with woodlawnCapitalPartners</h1>
                            <div class="space16"></div>
                            <p data-aos="fade-right" data-aos-duration="1100">woodlawnCapitalPartners a comprehensive range of investment services tailored to meet the unique needs of our
                            clients.</p>
                            <div class="space30"></div>
                            <div class="buttons" data-aos="fade-right" data-aos-duration="1300">
                            <a href="login.html" class="btn_theme btn_theme_active mt_40 wow fadeInDown" data-wow-duration="0.8s">Get Started <i class="fa-solid fa-arrow-right"></i><span></span></a>

                            

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="images-area">
                        <div class="image1 reveal">
                          <img src="assets/img/hero/hero2-main-img.png" alt="">
                        </div>

                        <div class="image2 animate6">
                          <img src="assets/img/hero/hero2-coin.png" alt="">
                        </div>

                        <div class="image3 animate1 reveal">
                          <img src="assets/img/hero/hero2-dashboard1.png" alt="">
                        </div>

                        <div class="image4 animate3 reveal ">
                          <img src="assets/img/hero/hero2-dashboard2.png" alt="">
                        </div>

                      </div>
                    </div>
                </div>
            </div>
            <img src="assets/img/shapes/hero2-circle-shape1.png" alt="" class="circle-shape1">
            <img src="assets/img/shapes/hero2-circle-shape2.png" alt="" class="circle-shape2 shape-animaiton4">
            <img src="assets/img/shapes/hero2-bet-coin-shape.png" alt="" class="shape1 animate1">
            <img src="assets/img/shapes/hero2-bottom-shape.png" alt="" class="shape2 animate6">
          </div>

          <!--=====HERO AREA END=======-->  

<div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">

              <!--=====ABOUT AREA START=======-->  

              <div class="about2 sp" id="about">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6 m-auto text-center">
                      <div class="heading2">
                        <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><span>what is  woodlawnCapitalPartners ?</span></span>
                        <h2 class="text-anime-style-3">What We Do At WCP </h2>
                      </div>
                    </div>
                  </div>
    
                  <div class="space60"></div>
                  <div class="row align-items-center">
                    <div class="col-lg-6">
                      <div class="space30"></div>
                      <div class="about2-images">
                        <div class="image1">
                          <img src="assets/img/bg/about2-bg-shape.png" alt="">
                        </div>
                        <div class="image2">
                          <img src="assets/img/about/about2-main-img.png" alt="">
                        </div>
                        <div class="image3 animate6">
                          <img src="assets/img/hero/hero2-coin.png" alt="">
                        </div>
                      </div>
                    </div>
    
                    <div class="col-lg-6">
                      <div class="about2-boxs">
                        <div class="single-box" data-aos="fade-up" data-aos-duration="700">
                          <div class="">
                            <div class="icon">
                              <img src="assets/img/icons/about2-icon1.svg" alt="">
                            </div>
                          </div>
                          <div class="heading2">
                            <h4><a href="#">Who We Are</a></h4>
                            <div class="space16"></div>
                            <p>woodlawnCapitalPartners is a premier investment company dedicated to empowering individuals and institutions to achieve their financial goals.</p>
                          </div>
                        </div>
    
                        <div class="single-box" data-aos="fade-up" data-aos-duration="900">
                          <div class="">
                            <div class="icon">
                              <img src="assets/img/icons/about2-icon2.svg" alt="">
                            </div>
                          </div>
                          <div class="heading2">
                            <h4><a href="#">Our Vision</a></h4>
                            <div class="space16"></div>
                            <p>At  woodlawnCapitalPartners, our vision is to be a leading force in the investment landscape, driving sustainable growth and creating lasting value for our clients. </p>
                          </div>
                        </div>
    
                        <div class="single-box" data-aos="fade-up" data-aos-duration="1100">
                          <div class="">
                            <div class="icon">
                              <img src="assets/img/icons/about2-icon3.svg" alt="">
                            </div>
                          </div>
                          <div class="heading2">
                            <h4><a href="#">Our Services</a></h4>
                            <div class="space16"></div>
                            <p> woodlawnCapitalPartners offers a comprehensive range of investment services tailored to meet the unique needs of our
                            clients. </p>
                          </div>
                        </div>
    
                      </div>
                    </div>
                  </div>
                </div>
                <img src="assets/img/shapes/about2-shape.png" alt="" class="sec-shape">
              </div>
    
              <!--=====ABOUT AREA END=======--> 
    
               
    <br><br><br>
              <!--===== WORK AREA START=======-->  
    
              <div class="work2 pb120" id="work">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6 m-auto text-center">
                      <div class="heading2">
                        <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><span>Getting started is easy!</span></span>
                        <h2 class="text-anime-style-3">FAQs</h2>
                      </div>
                    </div>
                  </div>
    
                  <div class="space30"></div>
                  <div class="row">
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1100">
                      <div class="work2-box-area">
                        <div class="icon-area">
                          <div class="icon">
                            <img src="assets/img/icons/work2-icon1.svg" alt="">
                          </div>
                        </div>
                        <div class="single-box">
                          <div class="heading2">
                            <h4><a href="#">How do I get started with investing?</a></h4>
                            <div class="space16"></div>
                            <p>Getting started is easy. Simply sign up on our website, complete your profile, and fund your account. Our team is here to guide you through every step.</p>
                          </div>
                        </div>
                      </div>
                    </div>
    
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="900">
                      <div class="work2-box-area active">
                        <div class="icon-area">
                          <div class="icon">
                            <img src="assets/img/icons/work2-icon2.svg" alt="">
                          </div>
                        </div>
                        <div class="single-box">
                          <div class="heading2">
                            <h4><a href="#">What investment options are available?</a></h4>
                            <div class="space16"></div>
                            <p>We provide a range of investment options including stocks, bonds, mutual funds, ETFs, and real estate investments to diversify your portfolio. </p>
                          </div>
                        </div>
                      </div>
                    </div>
    
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="700">
                      <div class="work2-box-area">
                        <div class="icon-area">
                          <div class="icon">
                            <img src="assets/img/icons/work2-icon3.svg" alt="">
                          </div>
                        </div>
                        <div class="single-box">
                          <div class="heading2">
                            <h4><a href="#">Can I track my investment performance?</a></h4>
                            <div class="space16"></div>
                            <p>Our platform provides real-time tracking and detailed reports on your investment performance, accessible from your
                            account dashboard at any time.</p>
                          </div>
                        </div>
                      </div>
                    </div>
    
                  </div>
                </div>
                <img class="shape" src="assets/img/shapes/work2-shape.png" alt="">
              </div>
    
              <!--===== WORK AREA END=======-->  
    
              <!--===== ROADMAP AREA START=======-->  
    
              <div class="roadmap pb120 _relative" id="roadmap">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                      <div class="heading2">
                        <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><span>Our Pricing Plan</span></span>
                        <h2 class="text-anime-style-3">INVESTMENT PROPOSALS</h2>
                      </div>
                    </div>
                  </div>
    
                  <div class="space30"></div>
                  <div class="row">
                    <div class="col-lg-10 m-auto">
                      <div class="roadmap-boxs">
                        
                        <div class="row align-items-center parent-area active">
                          <div class="col-lg-6">
                            <div class="circle-box-area">
                              <div class="circle-box">
                                <p>Regular</p>
                                <h3>15%</h3>
                              </div>
                              <img src="assets/img/shapes/roadmap-shape.png" alt="" class="line-shape">
                            </div>
                          </div>
    
                          <div class="col-lg-6" data-aos="fade-up" data-aos-duration="800">
                            <div class="roadmap-box heading2">
                              <h2 class="text-anime-style-3">$1000 - $3000</h2>
                              <br>
                              <h2 class="text-anime-style-3">$2000 - $4000</h2>
                              <br>
                              <p>Per ----------- Period</p>
                              <p>15% ----------- 1 MONTH</p>
                              <div class="space16"></div>
                            </div>
                          </div>
                        </div>
    
                        <div class="row align-items-center parent-area">
                          <div class="col-lg-6" data-aos="fade-up" data-aos-duration="800">
                            <div class="roadmap-box heading2">
                              <h2 class="text-anime-style-3">$3000 - $12,000</h2>
                              <br>
                              <h2 class="text-anime-style-3">$4000 - $16,000</h2>
                              <br>
                              <h2 class="text-anime-style-3">$5000 - $20,000</h2>
                              <br>
                              <p>Per ----------- Period</p>
                              <p>15% ----------- 1 MONTH</p>
                              <div class="space16"></div>
                            </div>
                          </div>
    
                          <div class="col-lg-6">
                            <div class="circle-box-area right">
                              <div class="circle-box">
                                <p>Standard</p>
                                <h3>15%</h3>
                              </div>
                              <img src="assets/img/shapes/roadmap-shape.png" alt="" class="line-shape">
                            </div>
                          </div>
                        </div>

                        <div class="row align-items-center parent-area active">
                          <div class="col-lg-6">
                            <div class="circle-box-area">
                              <div class="circle-box">
                                <p>VIP</p>
                                <h3>20%</h3>
                              </div>
                              <img src="assets/img/shapes/roadmap-shape.png" alt="" class="line-shape">
                            </div>
                          </div>
                        
                          <div class="col-lg-6" data-aos="fade-up" data-aos-duration="800">
                            <div class="roadmap-box heading2">
                              <h2 class="text-anime-style-3">$10,000 - $50,000</h2>
                              <br>
                              <h2 class="text-anime-style-3">$20,000 - $100,000</h2>
                              <br>
                              <p>Per ----------- Period</p>
                              <p>20% ----------- 1 MONTH</p>
                              <div class="space16"></div>
                            </div>
                          </div>
                        </div>
                        
                        <div class="row align-items-center parent-area">
                          <div class="col-lg-6" data-aos="fade-up" data-aos-duration="800">
                            <div class="roadmap-box heading2">
                              <h2 class="text-anime-style-3">$50,000 - $250,000</h2>
                              <br>
                              <p>Per ----------- Period</p>
                              <p>20% ----------- 1 MONTH</p>
                              <div class="space16"></div>
                            </div>
                          </div>
                        
                          <div class="col-lg-6">
                            <div class="circle-box-area right">
                              <div class="circle-box">
                                <p>Premium</p>
                                <h3>20%</h3>
                              </div>
                              <img src="assets/img/shapes/roadmap-shape.png" alt="" class="line-shape">
                            </div>
                          </div>
                        </div>
                        
                       
    
                      </div>
                    </div>
                  </div>
                
    
              <!--===== ROADMAP AREA END=======-->  
              
              <!--=====ABOUT AREA START=======-->  

              <div class="about2 sp" id="about">
                <div class="container">
                  
                  <div class="space60"></div>
                  <div class="row align-items-center">
                    <div class="col-lg-6">
                      
                      <div class="about2-images">
                        
                        <div class="image2">
                          <img src="newimg/WDLOGO.jpeg" alt="">
                        </div>
                      </div>
                    </div>
                   
    
                    
                  </div>
                </div>
              </div>
    
              <!--=====ABOUT AREA END=======-->
    
              <!--===== OTHERS AREA START=======-->  
    
              <div class="others2" style="background-image: url(assets/img/bg/others2-bg.png);" id="contact">
                <div class="container">
                  <div class="row align-items-center">
                    <div class="col-lg-6">
                      <div class="heading">
                        
                        <h2 class="text-anime-style-3">contact us</h2>
                        <div class="space16"></div>
                        <p data-aos="fade-right" data-aos-duration="800"><b>ADDRESS:</b>
                        444 W Lake St Ste 3200, Chicago, IL 60606, USA </p>
                        <p data-aos="fade-right" data-aos-duration="800"><b>EMAIL:</b>
                        support@woodlawnCapitalPartners.net</p>
                        <div class="space30"></div>
                        <div class="buttons" data-aos="fade-right" data-aos-duration="1000">
                          <a href="#"><img src="assets/img/others/others2-btn1.png" alt=""></a>
                          <a href="#"><img src="assets/img/others/others2-btn2.png" alt=""></a>
                          <p data-aos="fade-right" data-aos-duration="800"><b>COMING SOON</b></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="main-image" data-aos="fade-left" data-aos-duration="1000"  data-aos-offset="100">
                        <img src="assets/img/others/others2-main-img.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <!--===== OTHERS AREA END=======-->  
    
              <!--===== TESTIMONIAL AREA START=======-->
    
              <div class="tes2 sp2" id="tes">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6 m-auto text-center">
                      <div class="heading2">
                        <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><span>TESTIMONIALS</span></span>
                        <h2 class="text-anime-style-3">From Our Investor</h2>
                      </div>
                    </div>
                  </div>
    
                  <div class="space30"></div>
                  <div class="row align-items-center">
                    <div class="col-lg-5">
                      <div class="space40"></div>
                      <div class="main-image image-anime" data-aos="flip-right" data-aos-duration="800">
                        <img src="assets/img/testimonial/tes2-img.png" alt="">
                      </div>
    
                    </div>
    
                    <div class="col-lg-7 _relative">
                      <div class="tes2-slider" data-aos="fade-up" data-aos-duration="800">
                        <div class="single-slider">
                          <div class="icon">
                            <img src="assets/img/icons/tes2-qute.png" alt="">
                          </div>
                          <div class="space20"></div>
                          <p class="pera">"Our experience with woodlawnCapitalPartners exceeded expectations. The teams expertise, transparency, and consistent returns gave us peace of mind and solid financial growth. Highly recommend for reliable investment opportunities"</p>
    
                          <div class="bottom-area">
                            
                            <div class="heading">
                              <h5><a href="#">Jeff Dominic</a></h5>
                              
                            </div>
                          </div>
                        </div>
                        
                        <div class="single-slider">
                          <div class="icon">
                            <img src="assets/img/icons/tes2-qute.png" alt="">
                          </div>
                          <div class="space20"></div>
                          <p class="pera">"We've seen consistent growth with woodlawnCapitalPartners. Their professionalism and commitment to client success are unmatched. Couldn't be happier with our investment journey."</p>
    
                          <div class="bottom-area">
                            
                            <div class="heading">
                              <h5><a href="#">Sandra L Turner </a></h5>
                              
                            </div>
                          </div>
                        </div>
                        
                        <div class="single-slider">
                          <div class="icon">
                            <img src="assets/img/icons/tes2-qute.png" alt="">
                          </div>
                          <div class="space20"></div>
                          <p class="pera">"Reliable, transparent, and profitable woodlawnCapitalPartners delivered exactly what they promised. We feel secure and satisfied with the returns on our investment.”</p>
    
                          <div class="bottom-area">
                            
                            <div class="heading">
                              <h5><a href="#">Rodrigo Perez</a></h5>
                              
                            </div>
                          </div>
                        </div>
                        
                        <div class="single-slider">
                          <div class="icon">
                            <img src="assets/img/icons/tes2-qute.png" alt="">
                          </div>
                          <div class="space20"></div>
                          <p class="pera">"Our experience with woodlawnCapitalPartners has been fantastic. They prioritize transparency and client success, and we’ve seen great results. Highly recommend!”</p>
    
                          <div class="bottom-area">
                            
                            <div class="heading">
                              <h5><a href="#">Alexander Mdelslovic</a></h5>
                              
                            </div>
                          </div>
                        </div>
    
                        <div class="single-slider">
                          <div class="icon">
                            <img src="assets/img/icons/tes2-qute.png" alt="">
                          </div>
                          <div class="space20"></div>
                          <p class="pera">"Choosing woodlawnCapitalPartners was the best decision. The returns and personalized approach truly impressed us. Highly recommend for anyone seeking steady growth and trustworthy service”</p>
    
                          <div class="bottom-area">
                            
                            <div class="heading">
                              <h5><a href="#">Rowland Briggs </a></h5>
                              
                            </div>
                          </div>
                        </div>
    
                      </div>
    
                        <div class="nav-area">
                          <button class="arrow-left"><i class="fa-solid fa-angle-left"></i></button>
                          <button class="arrow-right"><i class="fa-solid fa-angle-right"></i></button>
                        </div>
                     </div>
    
                  </div>
                </div>
                <img src="assets/img/shapes/tes2-shape.png" alt="" class="sec-shape animate3">
              </div>
    
              <!--===== TESTIMONIAL AREA END =======-->  
    
               

</div>

          <!--=====CTA AREA START=======-->  

          <div class="cta2">
            <div class="container">
              <div class="row">
                <div class="col-lg-7 m-auto text-center">
                  <div class="heading">
                    <span class="span">COMMUNITY-OWNED AND OPERATED</span>
                    <h2>Ready  Embrace The Future
                      Of Investing With ICOs?</h2>
                      <div class="space30"></div>
                      <div class="buttons">
                        <a href="login.html" class="btn_theme2 btn_theme_active2 mt_40 wow fadeInDown" data-wow-duration="0.8s">Discover Opportunities <i class="fa-solid fa-arrow-right"></i><span></span></a>
                        <a href="login.html" class="btn_theme2 btn_theme_active2 mt_40 wow fadeInDown" data-wow-duration="0.8s">Invest Today <i class="fa-solid fa-arrow-right"></i><span></span></a>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <img src="assets/img/shapes/cta2-circle1.png" alt="" class="circle1">
            <img src="assets/img/shapes/cta2-circle2.png" alt="" class="circle2 shape-animaiton4">
          </div>
          <!--=====CTA AREA END=======-->  

          <!--=====CTA IMAGE AREA START=======-->  

          <div class="cta2-images">
            <div class="container">
              <div class="row">
                <div class="col-lg-10 m-auto text-center">
                  <div class="images-area">
                    <div class="image1">
                      <img src="assets/img/others/cta2-dashboard.png" alt="">
                    </div>

                    <div class="image2">
                      <img src="assets/img/shapes/cta2-coin.png" alt="">
                    </div>
                    <div class="image3">
                      <img src="assets/img/shapes/cta2-shape.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--=====CTA IMAGE AREA END=======-->  

          

            <!--===== FOOTER AREA START =======-->

                <div class="footer2 _relative">
                  <div class="container">
                       <div class="footer-bg">
                        <div class="row">
                          <div class="col-lg-4 col-md-6 col-12">
                               <div class="footer-logo-area">
                                <a href="index-2.html" class="logo">
                                  
                                </a>
                                <div class="space20"></div>
                                <h5>Join Our woodlawnCapitalPartners Channel</h5>
                                <div class="space30"></div>
                                <a href="" class="btn_theme2 btn_theme_active2 mt_40 wow fadeInDown" data-wow-duration="0.8s">Coming Soon <i class="fa-solid fa-arrow-right"></i><span></span></a>
                               </div>
                          </div>
      
                          

                          
      
                          
      
      
                          <div class="col-lg-2 col-md-4 col-12">
                               <div class="single-footer-items">
                                    <h3>Need Help?</h3>
  
                                    <ul class="contact-info">
                                      <li><a href="tel: +1(804)613-7241">+1(804)613-7241</a></li>
                                      <li><a href=""> 444 W Lake St Ste 3200, Chicago, IL 60606, USA</a>support@woodlawnCapitalPartners.net</li>
                                      <li><a href="#">woodlawnCapitalPartners.net</a></li>
                                    </ul>
      
                                    <ul class="icons">
                                      <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                                    </ul>
                               </div>
                          </div>
      
                     </div>
                       </div>
        
                       <div class="space70"></div>
                  </div>

                  <div class="copyright-area _relative">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 text-center">
                             <div class="coppyright">
                               <p>Copyright 2024 woodlawnCapitalPartners.net. All rights reserved.</p>
                             </div>
                        </div>
                   </div>
                  </div>
                    
               </div>

               <img src="assets/img/shapes/footer2-element.png" alt="" class="shape">
      
            </div>
            
        
                <!--===== FOOTER AREA END =======-->



     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/aos.js"></script>
     <script src="assets/js/fontawesome.js"></script>
     <script src="assets/js/mobile-menu.js"></script>
     <script src="assets/js/jquery.magnific-popup.js"></script>
     <script src="assets/js/owl.carousel.min.js"></script>
     <script src="assets/js/jquery.countup.js"></script>
     <script src="assets/js/slick-slider.js"></script>
     <script src="assets/js/gsap.min.js"></script>
     <script src="assets/js/jquery.nice-select.js"></script>
     <script src="assets/js/ScrollTrigger.min.js"></script>
     <script src="assets/js/Splitetext.js"></script>
     <script src="assets/js/SmoothScroll.js"></script>
     <script src="assets/js/text-animation.js"></script>
     <script src="assets/js/switchmode.js"></script>
     <script src="cdn.jsdelivr.net/gh/hilios/jQuery.countdown%402.2.0/dist/jquery.countdown.min.html"></script>
     <script src="assets/js/swiper.js"></script>
     <script src="assets/js/jquery.lineProgressbar.js"></script>
     <script src="assets/js/tilt.jquery.js"></script>
     <script src="assets/js/animation.js"></script>
     <script src="assets/js/main.js"></script>
     <script>
      // Function to display the popup
      function showPopup(message) {
        const popup = document.getElementById("popupNotification");
        const messageElement = document.getElementById("popupMessage");
        messageElement.textContent = message;
        popup.classList.add("active");

        // Hide the popup after 5 seconds
        setTimeout(function () {
          popup.classList.remove("active");
        }, 5000);
      }

      // Function to close the popup manually
      function closePopup() {
        const popup = document.getElementById("popupNotification");
        popup.classList.remove("active");
      }

      // Example of triggering the popup with a custom message
      setTimeout(function () {
        showPopup("John from Texas has just earned $4560!");
      }, 2000); // Trigger popup after 2 seconds
    </script>
    <script src="../code.tidio.co_443/pha2txtajs9jaxh0x2g0f4baqabk2ych.js" async></script>



    
</body>


<!-- Mirrored from oppsworld.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jan 2025 09:55:41 GMT -->
</html>