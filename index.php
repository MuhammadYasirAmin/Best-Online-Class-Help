<?php
    $title = 'Home | ';
    $description = 'Need online Help?. Best Online Class Helps.com (BOCH) is a place that caters to all of your educational needs. We aim to provide you the best services.';
    $keywords = 'online assignment help, online assignment, online need assistance, Best Online Class Helps, online assignment writing services, online assignment writing, take my online class for me, pay someone to take my online class,pay someone to take online class,take online classes for me,Online Class Help, Online Course Help, Online Class Takers, Online Course Takers, Best Online Class Takers, Best Online Course Takers, Help with Online Classes, Help with Online Courses, Online Homework Takers,We Cater Online Classes, We Do Online Exam Help, We Take Online Quizzes & Assignments';
    $author = '';
     
?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once 'assets/components/meta-tags.php'; ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-203994724-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-203994724-1');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2NP47LYKWS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2NP47LYKWS');
</script>
<!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
 <?php include_once 'assets/components/header.php'; ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
          <div class="col-md-7 col-lg-7 d-flex align-items-center">
          <div>
              <h1>Bring Focus,<br>Bring Clarity</h1>
              <!--<h2>Focus, Commitment and Implementation are the key components to any team’s success, at BestOnlineClassHelps.com, these three components fuse together to create the perfect recipe of success.</h2>-->
              <h2>We provides customers with dependable assistance through online courses.Because we always offer the best services to our clients, we are known as the best service in online courses.</h2>
              <a href="courses" class="btn-get-started">Get Started</a>
          </div>
      </div>
      <div class="col-md-5 col-lg-5">
          <div class="contact" style="padding: 30px; border-radius: 5px; border: 3px solid #5fcf80;">
               <form method="POST" action="/assets/php/mail.php" class="php-email-form"  style="padding: 30px; border: 3px solid #5fcf80;">
                   <h3 style="color:#50D050">Order Now & Get 6O% Discount</h3>
                   <!--<h3 >Order Now & Get 6O% Discount.</h3>-->
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="text" name="Lead_Name" class="form-control" id="name" placeholder="Your Name" required onkeypress="return Validate_name(event);" data-rule="minlen:3" data-msg="Please enter at least 3 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group mt-3">
                  <input type="email" class="form-control" name="Lead_Email" id="email" placeholder="Your Email" >
                </div>
              
              <div class="col-md-12 form-group mt-3">
                <input type="number" class="form-control" name="Lead_Phone" id="subject" placeholder="Phone Number" required onkeypress="return Validate_num(event);" data-rule="minlen:5" data-msg="Please enter correct Contact Number">
                <div class="validate"></div>
              </div>
              <div class="col-md-12 form-group mt-3">
                <textarea class="form-control" name="Lead_Message" rows="5" placeholder="Write Something For Us"></textarea>
              </div>
              </div>
              <div class="text-center"><button type="submit" name="leads_sbmit_btn" style="width:100%;">Send Message</button></div>
            </form>
            </div>
      </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <div class="contact">
               <form method="POST" action="/assets/php/mail.php" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="Lead_Name" class="form-control" id="name" placeholder="Your Name" required onkeypress="return Validate_name(event);" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="Lead_Email" id="email" placeholder="Your Email" >
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="number" class="form-control" name="Lead_Phone" id="subject" placeholder="Phone Number" required onkeypress="return Validate_num(event);" data-rule="minlen:5" data-msg="Please enter correct Contact Number">
                <div class="validate"></div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="Lead_Message" rows="5" placeholder="Write Something For Us"></textarea>
              </div>
              <div class="text-center"><button type="submit" name="leads_sbmit_btn">Send Message</button></div>
            </form>
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Welcome to Best Online Class Helps</h3>
            <p class="font-italic">
              Welcome to Best Online Class Helps where all your Educational requirements are nurtured and all your queries will be cleared.
            </p>
            <br>
            <ul>
              <li><i class="bi bi-check-circle"></i>Highly qualified experts are available round the clock to provide online class Help</li>
              <li><i class="bi bi-check-circle"></i>We hire professionals from all around the world who know how to deal with technical subjects.</li>
              <li><i class="bi bi-check-circle"></i>Our faculty is appointed through a detailed competitive process</li>
              <li><i class="bi bi-check-circle"></i>Our teams remain committed to providing our users with the best and timely Determination to the theoretical issues</li>
            </ul>
            <p>
              At Best Online Class Helps, commitment is the utmost priority and the basic rule for success. Your guidance in the right direction is our duty.
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Trainers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose Us?</h3>
              <p>
                In the most competitive and thriving market of online tutors,  We are inclined to provide the best possible and highly tangible outcomes in the swiftly developing world of education. Our highly qualified teams are masters of their discipline with years of proven academic skills, we are determined to explore the potential of individuals who are keen to impart their skills but do not have not found the right path to pursue their goals. 
              </p>
              
              <!--Best Online Class Helps strives to set the bar higher, as we become the most exclusive and avant-garde academic solution center for thousands of aspirants across the globe.-->
              <div class="text-center">
                <a href="about" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <!--<h4> Online Classes Tutoring</h4>-->
                    <h4>Online classes Support</h4>
                    <p>The only Goal we have is to get you better marks when you pay for online class.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <!--<h4> Online Examination Tutoring</h4>-->
                    <h4>Online examination support</h4>
                    <p>Our experts interact with you for online exam help to get A Grade.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <!--<h4> Online Quizzes & Assignments Tutoring</h4>-->
                    <h4>Online Quizzes & Assignment support</h4>
                    <p> We serve online quiz help answers to school, high-school, college, and university students. Our experts are used to use several quiz portal platforms like Blackboard, Canvas, and Moodle</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box">
              <i class="ri-store-line" style="color: #ffbb2c;"></i>
              <h3><a href="">ALL ROUNDED HELP</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <h3><a href="">QUALIFIED PROFESSIONALS</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
              <h3><a href="">QUALITY ASSURANCE</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
              <h3><a href="">ON TIME DELIVERY</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #47aeff;"></i>
              <h3><a href="">HIGH GRADES</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
              <h3><a href="">SAFETY GUARANTEED</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
              <h3><a href="">REFUND POLICIES</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
              <h3><a href="">SMOOTH DELIVERY</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-anchor-line" style="color: #b2904f;"></i>
              <h3><a href="">CHEAP PRICES</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-disc-line" style="color: #b20969;"></i>
              <h3><a href="">MOTION IDEAL</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-base-station-line" style="color: #ff5828;"></i>
              <h3><a href="">100% CUSTOMER SATISFIED</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
              <h3><a href="">24/7 SUPPORTS</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Courses</h2>
          <p>Popular Courses</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

           <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Mathematics</h4>
                </div>

                <h3><a href="course-details">Mathematics</a></h3>
                <p>Mathematics is one of the most fundamental and core subjects that are being tutored at BestOnlineClassHelps.com. Hence we have made sure that we have hired a highly qualified and well versed faculty to make sure your basics stay strong and your number game gets even stronger. Qualified and experienced BOCH tutors will be able to assist you in sharpening your analytical tools, working on your Algebraic equations while help you to reshape the diagrams of geometry and trigonometry for you.</p>
                
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Statistics</h4>
                </div>

                <h3><a href="course-details">Statistics</a></h3>
                <p>Statistics is one of the most highly south after and practical courses being offered at BOCH. The industrial need of analyzing numerical data of enormous quantities. Statistics is of high importance during the research projects, it helps to evaluate journal articles while enhancing in analytical skills and critical thinks methodologies.  Our faculty of the course are active industry veterans in descriptive and inferential statistics, the possess skills beyond comprehension, and will be able to nurture the pupil in best possible ways in order to impart implementable skills. </p>
                
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Physics</h4>
                </div>

                <h3><a href="course-details">Physics</a></h3>
                <p>Physics is one of the most importance branches of science as it discusses the forms, structures and qualities of all forms matter. Our faculty is committed to ensure that the aspiring pupil become efficient in the implementations and usage of all important laws of physics ranging from the basic Newton’s Law to Bernoulli’s principle while climbing up to quantum physics and the theory of relativity. Science remains a crucial component of our daily life hence, at BOCH we have made sure that our subscriber know it all.</p>
                
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Popular Courses Section -->

    <!-- ======= Trainers Section ======= -->
    <?php include_once 'assets/components/experts.php';?>
    <!-- End Trainers Section -->
    
    <!-- ======= Pop-up Section ======= -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Order Now & Get 6O% Discount.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="contact">
               <form method="POST" action="/assets/php/mail.php" class="php-email-form">
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="text" name="Lead_Name" class="form-control" id="name" placeholder="Your Name" required onkeypress="return Validate_name(event);" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group mt-3">
                  <input type="email" class="form-control" name="Lead_Email" id="email" placeholder="Your Email" >
                </div>
              
              <div class="col-md-12 form-group mt-3">
                <input type="number" class="form-control" name="Lead_Phone" id="subject" placeholder="Phone Number" required onkeypress="return Validate_num(event);" data-rule="minlen:5" data-msg="Please enter correct Contact Number">
                <div class="validate"></div>
              </div>
              
              <div class="col-md-12 form-group mt-3">
                <input type="text" class="form-control" name="Lead_Subject" id="subject" placeholder="Enter Subject" required>
                <div class="validate"></div>
              </div>
              
              <div class="col-md-12 form-group mt-3">
                <textarea class="form-control" name="Lead_Message" rows="5" placeholder="Write Something For Us"></textarea>
              </div>
              </div> 
              <div class="text-center"><button type="submit" name="leads_sbmit_btn" style="width:100%;">Send Message</button></div>
            </form>
            </div>
      </div>
    </div>
  </div>
</div>
  
  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
    <?php include_once 'assets/components/footer.php'; ?>
<!--<script src="assets/js/php-validate-form.js"></script>-->
  <script src="assets/js/Script.js"></script>
  
  
  <!-- Vendor JS Files -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
      var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
          keyboard: false
        })
        myModal.show();
  </script>
  
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61b8f75dc82c976b71c16f07/1fmt8chn6';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  
</body>

</html>