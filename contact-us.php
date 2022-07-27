<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="icon/iconfinder-icon.png">
	<metaname="robots" content="follow, index"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">

<title>Contact Us| docoursehelps.com</title>
<meta name="description" content="">
<meta name="Keywords" content="">
<link rel="canonical" href="https://docoursehelps.com/contact-us.php"/> 
<link rel="alternate" href="https://docoursehelps.com/contact-us.php" hreflang="en-us" />
       
</head>
<body>

<?php include_once 'components/header.php' ?>



<!-- GetButton.io widget -->
<script type="text/javascript">
(function () {
var options = {
whatsapp: "", // WhatsApp number
call_to_action: "Message us", // Call to action
position: "left", // Position may be 'right' or 'left'
pre_filled_message: "yes", // WhatsApp pre-filled message
};
var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();
</script>
<!-- /GetButton.io widget -->















<link rel="shortcut icon" href="icon/iconfinder-icon.png">

<div class="inner_page_banner">
	 <div class="container">
          <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <br><br>
          	       <h3 class="con123">contact us</h3>
               </div>
          </div>  
      </div>

<div class="inerpage_section1">
	 <div class="container">
		  <div class="row">
		       <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
			   <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"> 
                    <div class="terms_section">
						<form method="POST" action="mail.php" onsubmit="return checkform0(this);">
						   <div class="form-group">
							  <label>Your Name *</label>
							 <input type="text" class="form-control" required="required" name="Lead_Name" onkeypress="return Validate_name(event);" style="background: black;color: white;">
						   </div>
							<div class="form-group">
							   <label>Your Email Address *</label>
							   <input type="email" class="form-control" required="required" name="Lead_Email" onkeypress="return Validate_email(event);" style="background: black;color: white;">
							</div>
							<div class="form-group">
							   <label>Phone Number *</label>
							   <input class="form-control" type="number" required="required" name="Lead_Phone" onkeypress="return Validate_number(event);" style="background: black;color: white;">
							</div>
							<div class="form-group">
							   <label>Message *</label>
							   <textarea class="form-control" rows="3" name="Lead_Message" onkeypress="return Validate_message(event);" style="background: black;color: white;"></textarea>
							</div>
							<button type="submit" class="cont_but" name="leads_sbmit_btn">Submit</button>
						</form>
				   </div>
			   </div>
			   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
	      </div>
	  </div>
</div>
</div>

<?php include_once 'components/footer.php' ?>

<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script> 


<script>
  /* owl review*/
$(document).ready(function() {
     	$('ul.nav li.dropdown').hover(function() {
	  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
	}, function() {
	  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
	});

});	 

</script> 

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61e7e29af7cf527e84d2ea61/1fposqcc4';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<script>
	 $(document).ready(function() {
     $("#owl-demo1").owlCarousel({
      autoplay: true,
      autoPlay: 5000, 
      items : 3,
	   itemsDesktop: [1000, 2],
       itemsDesktopSmall: [900, 2],
       itemsTablet: [600,1],
	  center: true,
      loop:true,
	  autoplayHoverPause:true,
	  martSpeed : 1200,
	 navigation : true,pagination:false,
		 
  });
 });
</script>
<script>
	 $(document).ready(function() {
     $("#owl-demo2").owlCarousel({
      autoplay: true,
      autoPlay: 5000, 
      items : 5,
	   itemsDesktop: [1000, 4],
       itemsDesktopSmall: [900, 2],
       itemsTablet: [600,1],
	  center: true,
      loop:true,
	  autoplayHoverPause:true,
	  martSpeed : 1200,
	 navigation : true,
		 pagination:false,
		 
  });
 });
</script>
<script>
	 $(document).ready(function() {
     $("#owl-demo3").owlCarousel({
      autoplay: true,
      autoPlay: 5000, 
      items : 3,
	   itemsDesktop: [1000, 2],
       itemsDesktopSmall: [900, 2],
       itemsTablet: [600,1],
	  center: true,
      loop:true,
	  autoplayHoverPause:true,
	  martSpeed : 1200,
	 navigation : true,
		 pagination:false,
		 
  });
 });
</script>



</body>
</html>