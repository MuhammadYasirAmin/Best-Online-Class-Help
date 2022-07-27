<?php
    $title = 'Our Experts  | ';
    $description = 'Best Online Class Helps.com has an objective to provide the best online educational platform to help the aspiring students build their futures. NCA has brought on board a well-versed, experienced, and committed team of professionals. Visit our website now and get your self registered.';
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

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Our Experts</h2>
        <p>Following our vision, BestOnlineClassHelps.com has taken on board well versed, experienced and dedicated team of professionals to conduct online classes and shape the future of aspiring students.</p>
        <p>
            “It is the supreme art of the teacher to awaken joy in creative expression and knowledge” 
- Albert Einstein

        </p>
      </div>
    </div><!-- End Breadcrumbs -->

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
                <div class="col-md-12 form-group mt-3 mt-md-0">
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
</div>

  <script>
      var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
          keyboard: false
        })
        myModal.show();
  </script>

    <!-- End Pop-up Section -->
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/610c0fe0d6e7610a49aec78a/1fcbhs1iq';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <?php include_once 'assets/components/footer.php'; ?>
   <!-- Vendor JS Files -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
</body>

</html>