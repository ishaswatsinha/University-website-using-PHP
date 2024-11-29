<?php
include '_dbconnect.php';

?>




<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <script src="https://kit.fontawesome.com/743643a49a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Tangerine">

    <title>RKU</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

  </head>

<body>   
  <!--header-->
 <?php
 include "additionals/nav.php";
 ?>
  
  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/img12.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>One university many dreams</h6>
              <h2><em>RK</em> University</h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="#section2">Discover more</a></div>
              </div>
          </div>
      </div>
  </section>

  <!-- ***** Main Banner Area End ***** -->


  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa-solid fa-chalkboard-user"></i></i>Faculty Login</h4>
              </div>
              <div class="content-hide">
                <p>
                  The module manages faculty info, schedules, communication, task assignments, leave requests, salary slips, and personal updates, offering comprehensive management.</p>
              
                <!-- <button class="login-btn scroll-to-section" role="button" id="" name="">Login</button> -->
                <div><a href="login/signup.php">login</a></div>
                
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>Student's Login</h4>
              </div>
              <div class="content-hide">
                <p>The Student Login Page offers secure access to academic resources, communication with faculty, grades viewing, event notifications, and campus news.</p>
                <div><a href="signup/signup.php">Login</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa-solid fa-school "></i>Admin Login</h4>
              </div>
              <div class="content-hide">
                <p>The Admin Login Page provides complete system control: user management, data administration, customization, analytics, and system configuration options.</p>
                <div> <a href="/project/admin/login/signup.php"> Login</a></div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Why choose Rk University?</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
              <li><a href='#tabs-1'>Quality Education</a></li>
              <li><a href='#tabs-2'>Top Management</a></li>
              <li><a href='#tabs-3'> Best Environment</a></li>
            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/choose-us-image-01.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Quality Education</h4>
                    <p>We believe that RKU is a place where “Change” happens. Our students are challenged and motivated to change their perspectives by our faculties. Our faculties constantly change their pedagogies and instructional approaches to match industry requirements and student needs. Our students go on to change the society with the knowledge they have acquired at RKU.</p>
                  </div>
                </div>
              </article>
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/choose-us-image-02.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Top Level</h4>
                    <p>RK University exemplifies stellar management, fostering success through strategic leadership. Administrators cultivate an environment of efficiency and innovation, empowering faculty and staff to excel. With seamless operations and unwavering support, RKU sets the standard for effective management in higher education, ensuring a thriving academic community.</p>
                  </div>
                </div>
              </article>
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/choose-us-image-03.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Best Environment</h4>
                    <p>
                      RK University cultivates an unparalleled environment for excellence. Amidst supportive surroundings, students thrive, turning challenges into opportunities. Faculty champions innovation, adapting methods to meet industry demands. Empowered, RKU students emerge as visionary leaders, ready to drive positive societal change.</p>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- GET CALL FROM EXPERT SECTION -->

  <section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-xs-12">
          <div class="continer centerIt">
            <div>
              <h4>Submit <em> your details </em> , our expert will get back to you!</h4>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="right-content">
            <div class="top-content">
              <h6>Get Expert Call</h6>
            </div>
            <form id="contact" action="" method="get">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" >
                    <span id="error1" class="error"></span>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" >
                    <span id="error2" class="error"></span>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    
                    <input name="phone-number" type="text" class="form-control" id="phone-number" placeholder="Your Phone Number" >
                    <span id="error3" class="error"></span>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <span id="error" class="error"></span>
                    <button type="submit" id="form-submit" class="button">Get it now</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- YOUTUBE VIDEOO SECTION -->

  <section class="section video" data-section="section5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <div class="left-content">
            <span>our presentation is for you</span>
            <h4>Watch the video to learn more <em>about Rk University</em></h4>
            <p>To be a leading educational organization imparting holistic education to help students become responsible world citizens who are sensitive to the needs of the society. You may <a rel="nofollow" href="#contact" target="_parent">contact</a> for details.
            <br><br>We believe that RKU is a place where “Change” happens. </p>
            <div class="main-button"><a rel="nofollow" href="https://rku.ac.in" target="_parent">External URL</a></div>
          </div>
        </div>
        <div class="col-md-6">
          <article class="video-item">
            <div class="video-caption">
              <h4>Life at Global Rku</h4>
            </div>
            <figure>

              <iframe width="560" height="315" src="https://www.youtube.com/embed/AOVibcKTpmY?si=-Vt5OdqKkAbt9e0x" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              <!-- <a href="https://youtu.be/DD1O-yX9dik?feature=shared" class="play"><img class="banner1" src="assets/images/campus.jpeg"></a> -->
            </figure>
          </article>
        </div>
      </div>
    </div>
  </section>

    <!-- Main Contact section -->
    
  <section class="section contact" data-section="section6">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Let’s Keep In Touch</h2>
          </div>
        </div>
        <div class="col-md-6">

      <!-- FORM START FROM HERE -->

          <form id="contact" action="" method="get">
            <div class="row">
              <div class="col-md-6">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" >
                    
                  </fieldset>
                  <span id="error4" class="error"></span>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" >
                    
                  </fieldset>
                  <span id="error5" class="error"></span>
                </div>
              <div class="col-md-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." ></textarea>
                  
                </fieldset>
                <span id="error6" class="error"></span>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" id="contact-submit" class="button">Send Message Now</button>
                
                </fieldset>
              </div>
            </div>
          </form>
        </div>
            <!-- MAP HERE -->
        <div class="col-md-6">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.9939550710706!2d70.89827967453138!3d22.240308145068713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959b4a660019ee9%3A0x3d6254f36ed0e794!2sRK%20University%20Main%20Campus!5e0!3m2!1sen!2sus!4v1708888865812!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- FOOTER HERE -->
  <footer  >
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2024 by Rk University 
          
           | Design: <a href="#" rel="sponsored" target="_parent">Shaswat sinha</a></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="assets/js/form.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
      
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
    
</body>
</html>