<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once 'assets/components/meta-tags.php'; ?>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q61SYFRX9B"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Q61SYFRX9B');
</script>

<meta name="google-site-verification" content="4LMx2-4qJ_QY1jW7TM8cquhu5-tde71SMVj4zJawYDk" />
</head>

<body>

<!-- ======= Header ======= -->
<?php include_once 'assets/components/header.php'; ?>
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
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Contact Us</h2>
        <p>We Are Always Looking Forward To Get In Touch With New People Every Day. Send In Your Queries And One Of Our Skilled Representatives Will Connect With You Shortly.</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>818 Ringold St, Houston, TX 77088, United States</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@BestOnlineClassHelps.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1(917) 636-1519</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form method="post" action="/assets/php/mail.php" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="Lead_Name" class="form-control" id="name" placeholder="Your Name" required onkeypress="return Validate_name(event);" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="Lead_Email" id="email" placeholder="Your Email" >
                  <div class="validate"></div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6 form-group mt-3">
                    <input type="number" class="form-control" name="Lead_Phone" id="subject" placeholder="Phone Number" required onkeypress="return Validate_num(event);" data-rule="minlen:11" data-msg="Please enter correct Contact Number">
                    <div class="validate"></div>
                  </div>
                  <div class="col-md-6 form-group mt-3">
                    <input type="text" class="form-control" name="Lead_Subject" id="subject" placeholder="Enter Subject" required>
                    <div class="validate"></div>
                  </div>
                </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="Lead_Message" rows="5" placeholder="Write Something For Us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="text-center"><button type="submit" name="leads_sbmit_btn">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    
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
    <!-- End Pop-up Section -->

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
  
  <script>
      var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
          keyboard: false
        })
        myModal.show();
  </script>
</body>

</html>