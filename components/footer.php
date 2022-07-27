<footer>
    <div class="container">
         <div class="row">
              <div class="foot_top">
				   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="foot_box">
							<h3>Disclaimer</h3>
							<p>docoursehelps.com offers online class, course, exam and homework help to the students worldwide. We are a registered company and are not involved in any illegal activities.</p>
						</div>
				   </div>
				   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="foot_box">
							 <h3>Services</h3>
							 <ul>
								<li><a href="We-Cater-Online-Classes.php">We Cater Online Classes</a></li>
                                <li><a href="We-Provide-Homework-Assistance.php">We Provide Homework Assistance</a></li>
                                <li><a href="We-Provide-Exam-Help.php">We Provide Exam Help</a></li>  
                                 <li><a href="We-Provide-Online-Course-Help.php">We Do Online Course Help</a></li>
							 </ul>
						</div>
				   </div>
				   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="foot_box">
								<h3>Useful Links</h3>
								<ul>
									<li><a href="contact-us.php">Contact Us</a></li>
									<li><a href="terms-conditions.php">Terms &amp; Conditions</a></li>
									<!--<li><a href="blog">Blogs</a></li>-->
								</ul>
							</div>
							
               
               
               
               
					</div>
					
					
				
               
               </div>
               
               
               
               
               
               
               
               
               	 
               
               
               
               
             
               
               
               
               
               
               
               
               
               
               
               
               
               
               
               
               
	          
         </div>
    </div>
    <div class="foot_bot">
	     <div class="container">
		      <div class="row">
				 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					  <p>&copy; Copyright  2022 docoursehelps.com. All Rights Reserved.</p>
				 </div>
			  </div>
		 </div>
	</div>			 
</footer>
<!-- pop up window -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
         <div class="modal-content">
			  <div class="pop_heading">
			       <button type="button" class="close" data-dismiss="modal"></button>
				   <h4>Today's Special <br/>Get Upto 30% OFF</h4>
			  </div>
        	  <div class="modal-body ">
           		   <div id="popupform" class="inform">
                 	    <div class="row">
							 <form method="POST" action="mail.php" onsubmit="return checkform0(this);">
	             			       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					                     <div class="field">
											  <span class="pop_icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                      						  <input type="text" required="required" name="Lead_Name" onkeypress="return Validate_name(event);" placeholder="Name" class="form-control" >
                  						 </div>
								   </div>
								   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					                     <div class="field">
											  <span class="pop_icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                      						  <input type="email" required="required" name="Lead_Email" onkeypress="return Validate_email(event);" placeholder="Email" class="form-control" >
                  						 </div>
								   </div>
								   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					                     <div class="field">
											  <span class="pop_icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                      						  <input type="number" required="required" name="Lead_Phone" onkeypress="return Validate_number(event);"  placeholder="Phone Number" class="form-control" >
                  						 </div>
								   </div>
                                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					                     <div class="field">
											  <button type="submit" class="pop_btn" name="leads_sbmit_btn">Sign-Up Now</button>
                  						 </div>
								   </div>
                	         </form>
                 			 <p>T&C Apply*</p>
						</div>
                   </div>
              </div>
         </div>
    </div>
</div>
<!-- pop up -->

<script>
        function Validate_email(event) {
        var regex = new RegExp("^[a-z0-9.@_-]");
        var key = String.fromCharCode(event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    }
    function Validate_name(event) {
        var regex = new RegExp("^[a-z ]");
        var key = String.fromCharCode(event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    }
    function Validate_number(event) {
        var regex = new RegExp("^[0-9]");
        var key = String.fromCharCode(event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    }
    function Validate_message(event) {
        var regex = new RegExp("^[a-zA-Z0-9 ]");
        var key = String.fromCharCode(event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    }
    $(document).ready(function(){
       $('input').on("cut copy paste",function(e) {
          e.preventDefault();
       });
       $('textarea').on("cut copy paste",function(e) {
          e.preventDefault();
       });
    });
</script>