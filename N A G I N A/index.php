<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Certified Assistance On Your Online Classes | Bestonlineclasshelps</title>
    <!--<link rel="icon" href="https://techsolvvo.com/assets/images/logo1.png" type="image/icon">-->
    <!-- Builtin Bootstrap -->
     <!-- Favicons -->
      <!--<link href="https://onlineclassgeeks.com/img/fav.png" rel="icon">-->
      <!--<link href="https://onlineclassgeeks.com/img/fav.png" rel="apple-touch-icon">-->
    
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;500;700&display=swap" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    
      <!-- Vendor CSS Files -->
      <link href="https://onlineclassgeeks.com/CSS/bootstrap.min.css" rel="stylesheet">
      <link href="https://onlineclassgeeks.com/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    
      <!-- Template Main CSS File -->
      <link href="https://onlineclassgeeks.com/CSS/style.css" rel="stylesheet">
      <link rel="stylesheet" href="https://onlineclassgeeks.com/CSS/owl.carousel.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    
</head>
<body>
    
    <?php  
    
        //login.php
        session_start();
        if(isset($_SESSION["name"]))
        {
         header('location: table.php');
        }
    
    ?>  
    
    <!--==========================
  Header
  ============================-->
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          <div class="logo">
            <a href="https://bestonlineclasshelps.com/">
              <img src="https://cruiserstec.com/assets/images/logo-light-icon.png" alt="BestOnlineClassHelps.com" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="top_right">
            <a href="tel:+1-315-207-4642"><span class="top_icon"><i class="fa fa-phone" aria-hidden="true"></i>+1(845)397-27-20</span> </a> 
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="top_right">
            <a href="mailto:info@bestonlineclasshelps.com"><span class="top_icon"><i class="fa fa-envelope-o"
                  aria-hidden="true"></i></span>info@bestonlineclasshelps.com</a>
          </div>
        </div>
      </div>
    </div>
  </div>

    <section class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="https://cruiserstec.com/assets/images/logo-light-icon.png" alt="Logo">
				</div>
                
				<form method="post" class="login100-form validate-form" id="login_form">
					<span class="login100-form-title" id="error_message">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" name="submit" id="submit" value="submit" class="login100-form-btn">
							Login to Database
						</button>
					</div>
				</form>
			</div>
		</div>
	</section>

  <!--==========================
    Footer
  ============================-->
 <section id="footer" class="footer">
    
    <div class="foot_bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p>©2020 Bestonlineclasshelps.com All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  
    <!-- Vendor JS Files -->
  <script src="https://onlineclassgeeks.com/JS/jquery.min.js"></script>
  <script src="https://onlineclassgeeks.com/JS/jquery.easing.min.js"></script>
  <script src="https://onlineclassgeeks.com/JS/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
	<script>
    $(document).ready(function(){
     $('#login_form').on('submit', function(event){
      event.preventDefault();
      $.ajax({
       url:"check_login.php",
       method:"POST",
       data:$(this).serialize(),
       success:function(data){
        if(data != '')
        {
            
            window.location = 'table.php';
        }
        else
        {
            $('#error_message').html(data);
        }
       }
      })
     });
    });
    </script>
      
</body>
</html>