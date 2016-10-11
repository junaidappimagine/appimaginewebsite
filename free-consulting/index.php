<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" contents="noindex, nofollow">
<meta name="description" content="Guranteed 40 hours free consultation on cloud services">
<title>Free cloud consultating</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href='css/fonts.css' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="images/favicon.png">
<script src="js/pace.js"></script>
</head>
<body>
<div class="preloader"></div>
<div id="top" class="masthead" role="main">
<div class="container">
<div class="logo"><a href="http://www.appimagine.com"><img src="images/appimagine-logo.png" width="100" height="100" alt="appiamgine-logo"></a> </div>
<h3 class="main-title">Guaranteed 40 Hours Free Consultation on Cloud Services</h3>
<h4 class="sub-title">we can help you define the road-map and migration plan in this session</h4>
<div class="row has-margin-top-lg">
<div class="col-sm-12 col-md-7 col-lg-6 col-lg-offset-1">
<div class="quick-features">
<div class="featues-single"> <img src="images/tick.png" alt="tick" class="pull-left">
<h5>Our Cloud Expert will give you a free 40 hours consultation</h5>
</div>
<div class="featues-single"> <img src="images/tick.png" alt="tick" class="pull-left">
<h5>We can measure your existing infrastructure and map it to the best cloud technologies</h5>
</div>
<div class="featues-single"> <img src="images/tick.png" alt="tick" class="pull-left">
<h5>Help you choose the top cloud computing companies that fit for your business and budget</h5>
</div>
</div>
</div>
<div class="col-lg-4 col-md-5 col-sm-12">
<div class="relative-block">
<div class="signup-block">
<h4 class="form-title has-margin-bottom-sm text-center" style="font-weight:bold">CLOUD CONSULTATION</h4>
<form class="form" role="form" method="POST">
<div class="form-group">
<label>Full Name</label>
<input class="form-control input-lg" name="name" type="text" placeholder="Enter Your Name" required>
</div>
<div class="form-group">
<label>Email ID</label>
<input class="form-control input-lg" name="email" type="email" placeholder="Enter Your Email" required>
</div>
<div class="form-group">
<label>Mobile Number</label>
<input class="form-control input-lg" name="mobile"  type="text" placeholder="Enter Mobile Number" required>
</div>
<div class="form-group last">
<input type="submit" name="Submit" class="btn btn-danger btn-block btn-lg" value="FREE CONSULTATION">
</div>
<p class="re-assure">We will not share your email. No spam. </p>
</form>

<?php
    include 'PHPMailer/class.phpmailer.php';
    include 'PHPMailer/PHPMailerAutoload.php';
    if(isset($_POST['Submit'])){
        $mail = new PHPMailer();     
        $mail->IsSMTP();
        $mail->Mailer = 'smtp';
        $mail->SMTPAuth = false;
        $mail->Host = 'secure180.servconfig.com'; 
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl';
        $mail->Username = "mail@appimagine.com";
        $mail->Password = "welcome123";
        $mail->Subject = "Free Consulting Request";
	$body = '<html>
            <body>
                Name:
                '.$_POST['name'].' ,<br>
                Email:
                '.$_POST['email'].' ,<br>
                PhoneNo:
                '.$_POST['mobile'].',<br>
            </body>
            </html>';
        $mail->MsgHTML($body);
        //$mail->addAddress("junaid@appimagine.com");
	$mail->addAddress("maithilyselvaraj.s@gmail.com");
    if(!$mail->Send()) {
       echo "Mailer Error: " . $mail->ErrorInfo;
    }
    else{
       echo "<script>alert('Submitted Successfully')</script>";
    }
    }

?>
</div>
</div>
</div>
</div>
 
</div>
 
<a href="#explore" class="scrollto">
<p class="scrollto--arrow"><img src="images/down_arrows.png" alt="scroll down arrow"></p>
</a>
 
</div>
<div class="container">
<div class="row">
<div class="col-md-7 col-lg-6 col-lg-offset-1">
<div class="as-seen-on">Happy Customers</div>
<div class="logos"> <img src="images/branbox lp.jpg" alt="logo"> <img src="images/qualitair.gif" alt="logo"> <img src="images/burtlan.png" alt="logo"> <img src="images/talent capital.png" alt="logo"> </div>
</div>
</div>
</div>
 
<div class="container">
 
<div class="section-title">
<h2>Benefits on adopting cloud platform</h2>
</div>
<div class="zigzag">
<div class="row">
<div class="col-md-6">
<div class="row has-margin-bottom-sm">
<div class="col-sm-4">
<div class="icon-wrap"> <img src="images/icon_1.png" alt="img" class="img-responsive center-block"></div>
</div>
<div class="col-sm-8">
<h4 class="zigzag-lead">Ultimate performance</h4>
<p>Ultimate performance and reliability that can handle your intensive applications and data. </p>
</div>
</div>
</div>
<div class="col-md-6">
<div class="row has-margin-bottom-sm">
<div class="col-sm-4">
<div class="icon-wrap"><img src="images/icon_2.png" alt="img" class="img-responsive center-block"></div>
</div>
<div class="col-sm-8">
<h4 class="zigzag-lead">Pay as you go</h4>
<p>You can easily scale up or down to match demand, so only pay for what you use. </p>
</div>
</div>
</div>
</div>
 
<div class="row has-margin-top">
<div class="col-md-6">
<div class="row has-margin-bottom-sm">
<div class="col-sm-4">
<div class="icon-wrap"> <img src="images/security.png" alt="img" class="img-responsive center-block"></div>
</div>
<div class="col-sm-8">
<h4 class="zigzag-lead">Data Protection</h4>
<p> You own your data with complete privacy with high-end security measures that compliance global standards. </p>
</div>
</div>
</div>
<div class="col-md-6">
<div class="row">
<div class="col-sm-4">
<div class="icon-wrap"><img src="images/icon_4.png" alt="img" class="img-responsive center-block"></div>
</div>
<div class="col-sm-8">
<h4 class="zigzag-lead">Run your apps anywhere</h4>
<p> Achieve mobility using your business applications across the globe. </p>
</div>
</div>
</div>
</div>
</div>
 
 
</div>

 
<div class="highlight testimonials">
<div class="container">
 
<div class="section-title">
<h2>See the words from our satisfied customers</h2>
</div>
<section class="row breath">
<div class="col-md-6">
<div class="testblock">Appimagine helped us to implement a complete custom application for our business and the amazing part of it is we don’t own a physical server for the application but we use it across our Middle East offices. All our files are backed up every day and making it impossible to lose anything. They are very pro-active and flexible in solving our technical issues; I would recommend Appimagine to any business regardless of its size.</div>
<div class="clientblock"> <img src="images/testimonial_1.png" alt=".">
<p><strong>Michael Jeff</strong> <br>
Operational Manager, Manufacturing Company <a href="#"></a></p>
</div>
</div>
<div class="col-md-6">
<div class="testblock" style="min-height: 235px;">The partnership with Appimagine turned out to be very helpful and instrumental in a successful transition, all the way from the scoping process through implementation of ERP system on Amazon Web Services. Now we only pay for what we use and we really thankful to Appimagine for guiding us in cost cutting of our operation activities.</div>
<div class="clientblock"> <img src="images/testimonial_2.png" alt=".">
<p><strong>Susanne Philip</strong> <br>
Director, Leading Retail Chain<a href="#"></a></p>
</div>
</div>
</section>
 
</div>
</div>
 
 
<div class="footercta" role="main">
<div class="container">
 
<div class="section-title">
<h2>Interested?</h2>
<h4>Then fill up the form and one of or cloud expert will reach you in short time</h4>
</div>

</div>
</div>
 
 
<div class="container">
<section class="row breath footercontent">
<div class="col-sm-4"> <a href="https://www.linkedin.com/company/appimagine" target="_blank" class="social"><img src="images/linked_ico.jpg" alt="twitter"></a> </div>
<div class="col-sm-4 madeby">

</div>
<div class="col-sm-4 copyinfo">
<p>Copyright © 2016 Appimagine. All rights reserved</p>
</div>
</section>
 
</div>
 
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/easing.js"></script>
<script src="js/nicescroll.js"></script>
<script src="js/contact_form.js"></script>
 
<script>


 $(function() {
    $('.scrollto, .gototop').bind('click',function(event){
                var $anchor = $(this);
                $('html, body').stop().animate({
         scrollTop: $($anchor.attr('href')).offset().top
          }, 1500,'easeInOutExpo');
     event.preventDefault();
      });
  });
        

</script>
</body>
</html>
