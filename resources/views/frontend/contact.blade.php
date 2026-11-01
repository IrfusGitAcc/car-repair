<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="favicon.ico">
	<title>Car Repair Services & Auto Mechanic HTML website template</title>
	<!-- Bootstrap core CSS -->
	<link href="assets/css/plugins/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/plugins/bootstrap-submenu.css" rel="stylesheet">
	<link href="assets/css/plugins/animate.min.css" rel="stylesheet">
	<link href="assets/css/plugins/slick.css" rel="stylesheet">
	<link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
	<link href="assets/css/plugins/bootstrap-datetimepicker.css" rel="stylesheet">	<link href="assets/css/custom.css" rel="stylesheet"><link href="assets/tools/tools.css" rel="stylesheet">	<link href="assets/css/color/color-green.css" rel="stylesheet"><link href="assets/css/color/color-orange.css" rel="stylesheet">
	<link href="assets/css/color/color-blue.css" rel="stylesheet">
  <link href="assets/css/color/color-red.css" rel="stylesheet">
  <link href="assets/css/color/color-indigo.css" rel="stylesheet">
  <link href="assets/css/color/color-turquoise.css" rel="stylesheet">

	<!-- Icon Font-->
	<link href="assets/iconfont/style.css" rel="stylesheet">
	<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Muli:100,100i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- Google map -->
	<script src="https://maps.googleapis.com/maps/api/js" type="text/javascript"></script>
</head>
<style>
/* center form */
.booking-wrapper{
    max-width:750px;
    margin:40px auto;
}

/* title */
.booking-title{
    text-align:center;
    margin-bottom:25px;
}

/* row layout */
.form-row{
    display:flex;
    gap:15px;
    margin-bottom:15px;
}

/* input container */
.input-box{
    display:flex;
    align-items:center;
    border:2px solid #dcdcdc;
    border-radius:8px;
    overflow:hidden;
    flex:1;
}

/* full width input */
.input-box.full{
    width:100%;
    margin-bottom:20px;
}

/* icon area */
.icon-box{
    background: #fede00;   /* yellow instead of blue */
    color:#000;
    width:55px;
    height:55px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:18px;
}

/* input */
.input-box input{
    border:none;
    outline:none;
    width:100%;
    padding:15px;
    font-size:16px;
}

/* button */
.quote-btn{
    width:100%;
    background: #f7b733;
    border:none;
    padding:16px;
    font-size:18px;
    font-weight:700;
    border-radius:6px;
    cursor:pointer;
}

.quote-btn:hover{
    background: #f4a600;
}

/* mobile */
@media(max-width:768px){

.form-row{
    flex-direction:column;
}

}

/* center step 2 */
.step2-wrapper{
max-width:600px;
margin:auto;
}

/* title */
.service-title{
text-align:center;
margin-bottom:20px;
}

/* service checkbox row */
.service-row-mot{
display:flex;
gap:20px;
justify-content:center;
margin-bottom:20px;
}

/* checkbox style */
.service-box{
display:block;
padding:12px;
border:1px solid #eee;
margin-bottom:10px;
cursor:pointer;
}
/* input rows */
.form-row{
display:flex;
gap:15px;
margin-bottom:15px;
}

/* input container */
.input-box{
flex:1;
}


/* confirm button */
.confirm-btn{
width:100%;
background: #f7b733;
border:none;
padding:16px;
font-size:17px;
font-weight:600;
border-radius:6px;
margin-top: 10px;
cursor:pointer;
}

.confirm-btn:hover{
background:#f4a600;
}

/* mobile */
@media(max-width:768px){

.form-row{
flex-direction:column;
}

.service-row-mot{
flex-direction:column;
align-items:center;
}

}
</style>
<body>	<div class="colorswatch layoutswatch">
		<div class="colorswatch-btn js-layoutswatch">

		</div>		<div class="colorswatch-inside">
			<a href="index.html" class="active"><img src="assets/tools/layout-1.png" alt="" class="img-responsive"></a>
<a href="../layout-2/index.html"><img src="assets/tools/layout-2.png" alt="" class="img-responsive"></a>
<a href="../layout-3/index.html"><img src="assets/tools/layout-3.png" alt="" class="img-responsive"></a>
			<div class="clearfix"></div>
			<div class="title">Choose layout</div>
		</div>
	</div>
	<div class="colorswatch">
		<div class="colorswatch-btn js-colorswatch">

		</div>
		<div class="colorswatch-inside">
			<a href="#" class="color-red"></a>
			<a href="#" class="color-orange"></a>
			<a href="#" class="color-yellow active"></a>
			<a href="#" class="color-green"></a>
			<a href="#" class="color-blue"></a>
			<a href="#" class="color-indigo"></a>
			<div class="clearfix"></div>
			<div class="title">Color</div>
		</div>
	</div>
	<!-- Loader -->
<!-- Loader -->
	<div id="loader-wrapper">
		<div class="loader">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
			<div class="subline"></div>
			<div class="subline"></div>
			<div class="subline"></div>
			<div class="subline"></div>
			<div class="subline"></div>
			<div class="loader-circle-1">
				<div class="loader-circle-2"></div>
			</div>
			<div class="needle"></div>
			<div class="loading">Loading</div>
		</div>
	</div>
	<!-- //Loader -->
	<!-- Header -->
	<header class="page-header header-sticky">
		<nav class="navbar" id="slide-nav">
			<div class="container">
				<div class="header-info-mobile">
					<div class="header-info-mobile-inside">
						<p><i class="icon icon-locate"></i>2605 Caton Hill Road, Woodbridge, VA 22192</p>
						<p><i class="icon icon-phone"></i>1-800-123-4567,  Fax: 123-456-7890</p>
						<p><i class="icon icon-clock"></i>Mon-Sat: 7:00 am – 6:00 pm</p>
						<p><i class="icon icon-email"></i><a href="mailto:officeone@youremail.com">officeone@youremail.com</a></p>
					</div>
				</div>
				<div class="header-row">
					<div class="header-info-toggle"><i class="icon-arrow_down js-info-toggle"></i></div>
					<div class="logo">
						<a href="index.html">
                            <img src="assets/images/logo.png" alt="Logo" class="site-logo">
						</a>
					</div>

					<div class="header-right">
						<button type="button" class="navbar-toggle"><i class="icon icon-lines-menu"></i></button>
						<div class="header-right-top">
							<div class="address">
								Monday-Saturday <span class="custom-color">7:00AM - 6:00PM</span>
							</div>
							<a href="#" class="appointment" data-toggle="modal" data-target="#appointmentForm"><i class="icon-shape icon"></i><span>Appointment</span></a>
						</div>
						<div class="header-right-bottom">
							<div class="header-phone"><span class="text">SCHEDULE YOUR APPOINTMENT TODAY</span><span class="phone-number">1-<span class="code">800</span>-123-4567</span>
							</div>
						</div>
					</div>
				</div>
				<div id="slidemenu">
					<div class="row">
						<div class="col-md-11">
							<div class="close-menu"><i class="icon-close-cross"></i></div>
							<ul class="nav navbar-nav">
								<li class="active"><a href="{{ route('home') }}"><span>Home</span></a></li>
								<li><a href="about.html"><span>About Us</span></a></li>
								<li class="dropdown">
									<a href="services.html" data-toggle="dropdown" data-submenu="">
									    <span>Services</span><span class="ecaret"></span></a>
								</li>
								<li><a href="shop.html"><span>Shop</span></a></li>
								<li><a href="{{ route('contact') }}"><span>Contacts</span></a></li>
							</ul>
						</div>
						<div class="col-md-1">
							<div class="search-container">
								<input placeholder="search" type="text">
								<a class="button">
									<i class="icon icon-search"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<!-- // Header -->
	<!-- Content  -->
	
    <div id="pageTitle">
        <div class="container">
    
            <div class="breadcrumbs">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Contacts</li>
                </ul>
            </div>
    
            <h1>Contacts</h1>
    
        </div>
    </div>


    <div id="pageContent">
        <div class="block offset-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3>Call: 1-800-123-4567</h3>
                    </div>
                    <div class="col-md-8">
                        If you have any questions or comments regarding us or your vehicle, please fill out a contact request form below.
                    </div>
                </div>
                <div class="row row-grey">
                    <div class="col-sm-4">
                        <div class="contact-info">
                            <h5>Post Address</h5>
                                <i class="icon icon-locate"></i>
                                    2605 Caton Hill Road, Woodbridge, VA 22192
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="contact-info">
                           <h5>Working Hours</h5>
                                <i class="icon icon-clock"></i>
                                    Monday-Saturday 7:00AM - 6:00PM
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="contact-info">
                           <h5>Follow Us</h5>

                            <div class="social-links">
                                <ul>
                                    <li><a class="icon icon-facebook-logo" href="#"></a></li>
                                    <li><a class="icon icon-twitter-logo" href="#"></a></li>
                                    <li><a class="icon icon-instagram-logo" href="#"></a></li>
                                    <li><a class="icon icon-google-plus-logo" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <h2 class="booking-title text-center">Book MOT / Service</h2>

                <div class="booking-wrapper">

                    <form id="bookingForm" action="{{ route('store.booking') }}" method="post">

                        @csrf
                        <!-- STEP 1 -->
                        <div id="step1">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-box">
                                        <span class="icon-box">
                                            <i class="icon icon-transport"></i>
                                        </span>
                                        <input type="text"
                                        name="car_reg"
                                        id="car_reg"
                                        placeholder="Car Registration"
                                        required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-box">
                                        <span class="icon-box">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </span>
                                        <input type="text"
                                        name="postcode"
                                        id="postcode"
                                        placeholder="Postcode"
                                        required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="margin-top: 8px;">
                                    <div class="input-box full">
                                        <span class="icon-box">
                                            <i class="fa-solid fa-envelope"></i>
                                        </span>
                                        <input type="email"
                                        name="email"
                                        id="email"
                                        placeholder="Email Address"
                                        required>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="button" id="getQuoteBtn" class="quote-btn">
                                GET A FREE QUOTE
                                </button>
                            </div>
                        </div>
                        <!-- STEP 2 -->
                        <div id="step2" style="display:none;margin-top:40px;">
                            <h4 class="service-title">Select Service</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="service-box">
                                        <input type="checkbox" name="services[]" value="Full Service">
                                        Full Service
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <label class="service-box">
                                        <input type="checkbox" name="services[]" value="MOT">
                                        MOT
                                    </label>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-box">
                                        <input type="text" name="name" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-box">
                                        <input type="text" name="mobile" placeholder="Mobile Number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
									<label for="booking_date" class="input-label">
                                        When do you want booking ?
                                    </label>
                                    <div class="input-box">
                                        <input type="datetime-local" name="booking_date" required>
                                    </div>
                                </div>
                                <div class="col-md-6" style="margin-top: 29px;">
                                    <div class="input-box">
                                        <input type="text" name="pickup_postcode" placeholder="Pickup Postcode" required>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="confirm-btn">
                                    Confirm Booking
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
	<!-- // Content  -->
	<!-- Footer -->
	<div class="page-footer">
		<div class="footer-content">
			<div class="footer-col-left">
				<div class="inside">
					<div class="footer-phone">
						<h2 class="h-phone">Call: <span class="number">1-800-1234567</span></h2>
					</div>
					<div class="contact-info"><i class="icon icon-locate"></i>2605 Caton Hill Road, Woodbridge,
						<br> VA 22192
					</div>					<div class="contact-info"><i class="icon icon-clock"></i>Monday-Saturday <span class="color">7:00AM - 6:00PM</span>
						 Sunday Closed
					</div>
					<div class="contact-info"><i class="icon icon-email"></i><a href="mailto:officeone@youremail.com">officeone@youremail.com</a>
					</div>
          <div class="social-links">
						<ul>
							<li>
								<a class="icon icon-facebook-logo" href="#"></a>
							</li>
							<li>
								<a class="icon icon-twitter-logo" href="#"></a>
							</li>
							<li>
								<a class="icon icon-instagram-logo" href="#"></a>
							</li>
							<li>
								<a class="icon icon-google-plus-logo" href="#"></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-col-right">
				<div id="footer-map" class="footer-map"></div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="copyright">© 2017 Car Repair Services, <span class="clearfix visible-xs"></span>All Rights Reserved</div>
			</div>
		</div>
	</div>	<div class="back-to-top"><a href="#top"><span class="icon icon-transport"></span></a></div>
	<!-- //Footer --><div class="darkout-menu"></div>
	<!-- Appointment Form -->
	<div class="modal fade" id="appointmentForm">
		<div class="modal-dialog container">
			<div class="modal-content">
				<div class="modal-header"><a href="#" class="appointment" data-toggle="modal" data-target="#appointmentForm"><i class="icon-shape icon"></i><span>Appointment</span></a>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<h2>Schedule <span class="color">Auto Service</span></h2>
						<p>To schedule an appointment with your friendly neighborhood experts at Car Repair Services, give us a call at 1-800-123-4567 or fill out the form below with your information and requested services. One of our team members will get back to you as soon as possible to confirm your appointment. </p>
						<div class="divider"></div>
						<form id="appointment-form" class="contact-form form-horizontal" name="contactform" method="post">
							<div id="successAppointment" class="successform">
								<p>Your message was sent successfully!</p>
							</div>
							<div id="errorAppointment" class="errorform">
								<p>Something went wrong, try refreshing and submitting the form again.</p>
							</div>
							<h5>Contact information</h5>
							<div class="form-inline">
								<div>
									<input type="text" name="name" class="form-control input-custom" value="" placeholder="First name">
								</div>
								<div>
									<input type="text" name="lastname" class="form-control input-custom" value="" placeholder="Last name">
								</div>
							</div>
							<div class="form-inline">
								<div>
									<input type="text" name="phone" class="form-control input-custom" value="" placeholder="Phone number">
								</div>
								<div>
									<input type="text" name="email" class="form-control input-custom" value="" placeholder="Your E-mail">
								</div>
							</div>
							<div class="divider"></div>
							<h5>Appointment details</h5>
							<div class="form-inline">
								<div class="datetimepicker-wrap">
									<input type="text" name="date" class="form-control input-custom datetimepicker" placeholder="">
								</div>
								<div class="timepicker-wrap">
									<input type="text" name="time" class="form-control input-custom timepicker" placeholder="">
								</div>
							</div>
							<div class="form-inline">
								<div>
									<input name="autoinfo" type="text" class="form-control input-custom" value="" placeholder="Vehicle Year, Make and Model">
								</div>
								<div class="form-inline">
									<div class="select-wrapper">
										<select name="select1" class="input-custom">
											<option value="2000">2000</option>
											<option value="2001">2001</option>
											<option value="2002">2002</option>
											<option value="2003">2003</option>
											<option value="2004">2004</option>
											<option value="2005">2005</option>
											<option value="2006">2006</option>
											<option value="2007">2007</option>
											<option value="2008">2008</option>
											<option value="2009">2009</option>
											<option value="2010">2010</option>
										</select>
									</div>
									<div>
										<input name="kilometers" type="text" class="form-control input-custom" value="" placeholder="Current Kilometers">
									</div>
								</div>
							</div>
							<div class="form-inline">
								<textarea name="message" class="form-control textarea-custom" placeholder="Service Required"></textarea>
							</div>
							<div class="divider"></div>
							<div class="row">
								<div class="col-sm-4 col-md-3 bootstrap-datetimepicker-widget">
									<button type="submit" id="submit" class="btn btn-lg"><span>SUBMIT</span></button>
								</div>
								<div class="divider visible-xs"></div>
								<div class="col-sm-8 col-md-9">
									<p><i>Please note that the date and time you requested may not be available. We will contact you to confirm your actual appointment details.</i></p>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Appointment Form -->

	<!-- External JavaScripts -->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/plugins/bootstrap.min.js"></script>
	<script src="assets/js/plugins/slick.min.js"></script>
	<script src="assets/js/plugins/jquery.form.js"></script>
	<script src="assets/js/plugins/jquery.validate.min.js"></script>
	<script src="assets/js/plugins/moment.js"></script>
	<script src="assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
	<script src="assets/js/plugins/jquery.waypoints.min.js"></script>
	<script src="assets/js/plugins/jquery.countTo.js"></script>
	<script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
	<script src="assets/js/plugins/isotope.pkgd.min.js"></script>
	<!-- Custom JavaScripts -->
	<script src="assets/js/custom.js"></script>
    <script src="assets/tools/tool.js"></script>
	<script src="assets/js/forms.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
        
            const step1 = document.getElementById("step1");
            const step2 = document.getElementById("step2");
            const getQuoteBtn = document.getElementById("getQuoteBtn");
            const form = document.getElementById("bookingForm");
        
            getQuoteBtn.addEventListener("click", function () {
        
                // Get Step 1 Fields
                const carReg = document.getElementById("car_reg").value.trim();
                const postcode = document.getElementById("postcode").value.trim();
                const email = document.getElementById("email").value.trim();
        
                // Basic Validation
                if (!carReg || !postcode || !email) {
                    alert("Please fill all required fields.");
                    return;
                }
        
                // Simple Email Validation
                //const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
                //if (!email.match(emailPattern)) {
                //    alert("Please enter a valid email address.");
                  //  return;
                //}
        
                // If everything valid → Show Step 2
                step1.style.display = "none";
                step2.style.display = "block";
        
                // Optional smooth scroll
                step2.scrollIntoView({ behavior: "smooth" });
            });
        
        
            // Prevent submit if no service selected
            form.addEventListener("submit", function (e) {
        
                const services = document.querySelectorAll('input[name="services[]"]:checked');
        
                if (services.length === 0) {
                    alert("Please select at least one service.");
                    e.preventDefault();
                }
            });
        
        });
    </script>
</body>

</html>