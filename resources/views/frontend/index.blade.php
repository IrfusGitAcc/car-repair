<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="favicon.ico">
	<title>Car Repair Services </title>
    <script>if ( top !== self && ['iPad', 'iPhone', 'iPod'].indexOf(navigator.platform) >= 0 ) top.location.replace( self.location.href );</script>
	<!-- Bootstrap core CSS -->
	<link href="assets/css/plugins/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/plugins/bootstrap-submenu.css" rel="stylesheet">
	<link href="assets/css/plugins/animate.min.css" rel="stylesheet">
	<link href="assets/css/plugins/slick.css" rel="stylesheet">
	<link href="assets/css/plugins/bootstrap-datetimepicker.css" rel="stylesheet">
    
	<link href="assets/css/custom.css" rel="stylesheet">
    <link href="assets/tools/tools.css" rel="stylesheet">
	<link href="assets/css/color/color-green.css" rel="stylesheet">
    <link href="assets/css/color/color-orange.css" rel="stylesheet">
	<link href="assets/css/color/color-blue.css" rel="stylesheet">
    <link href="assets/css/color/color-red.css" rel="stylesheet">
    <link href="assets/css/color/color-indigo.css" rel="stylesheet">
    <link href="assets/css/color/color-turquoise.css" rel="stylesheet">
	
	<!-- Icon Font-->
	<link href="assets/iconfont/style.css" rel="stylesheet">
	<!-- Google Fonts -->
	<link href="../../../css?family=Muli:100,100i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- Google map --><script src="https://maps.googleapis.com/maps/api/js" type="text/javascript"></script>
</head>

<body class="home">	<div class="colorswatch layoutswatch">
		<div class="colorswatch-btn js-layoutswatch">
<svg enable-background="new 0 0 24 24" height="24px" id="Layer_1" version="1.1" viewbox="0 0 24 24" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M23,8h-3V5c0-0.6-0.4-1-1-1h-3V1c0-0.6-0.4-1-1-1H1C0.4,0,0,0.4,0,1v14c0,0.6,0.4,1,1,1h3v3c0,0.6,0.4,1,1,1h3v3  c0,0.6,0.4,1,1,1h14c0.6,0,1-0.4,1-1V9C24,8.4,23.6,8,23,8z M4,5v9H2V2h12v2H5C4.4,4,4,4.4,4,5z M8,9v9H6V6h12v2H9C8.4,8,8,8.4,8,9z   M22,22H10V10h12V22z"></path></svg>
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
<svg height="1792" viewbox="0 0 1792 1792" width="1792" xmlns="http://www.w3.org/2000/svg"><path d="M1615 0q70 0 122.5 46.5t52.5 116.5q0 63-45 151-332 629-465 752-97 91-218 91-126 0-216.5-92.5t-90.5-219.5q0-128 92-212l638-579q59-54 130-54zm-909 1034q39 76 106.5 130t150.5 76l1 71q4 213-129.5 347t-348.5 134q-123 0-218-46.5t-152.5-127.5-86.5-183-29-220q7 5 41 30t62 44.5 59 36.5 46 17q41 0 55-37 25-66 57.5-112.5t69.5-76 88-47.5 103-25.5 125-10.5z"></path></svg>
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
						<a href="{{ route('home') }}">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="320px" height="105px" viewbox="0 0 320 105" enable-background="new 0 0 320 105" xml:space="preserve">
                            <g>
                                <path fill="#FFFFFF" d="M120.235,54.889c0.694,1.301,1.493,2.39,1.988,3.689c0.896,2.29,1.592,4.584,2.393,6.972
                                    c-2.493,0-4.78,0-7.271,0c-0.799-2.495-1.594-5.084-2.393-7.674c-0.596-1.794-0.996-2.092-2.787-2.092c-0.699,0-1.396,0-2.292,0
                                    c-0.3,3.283-0.496,6.471-0.795,9.766c-2.196,0-4.386,0-6.775,0c0.699-8.473,1.296-16.938,1.993-25.5c3.584,0,7.071,0,10.458,0
                                    c1.593,0,3.282,0,4.877,0.291c3.188,0.597,5.48,3.196,5.677,6.086c0.304,4.477-1.195,7.067-4.776,8.355
                                    C120.432,54.781,120.235,54.889,120.235,54.889z M110.572,45.23c-0.101,1.791-0.196,3.486-0.4,5.277c1.993,0,3.886,0,5.777,0
                                    c0.494,0,0.996-0.095,1.494-0.307c1.195-0.492,1.694-1.687,1.396-3.082c-0.201-1.1-0.997-1.791-2.292-1.791
                                    C114.654,45.23,112.662,45.23,110.572,45.23z"></path>
                                <path fill="#FFFFFF" d="M151.706,65.441c-0.795-2.587-1.59-5.17-2.389-7.77c-0.497-1.694-0.999-1.983-2.688-2.087
                                    c-0.799,0-1.497,0-2.292,0c-0.101,1.693-0.298,3.281-0.4,4.977c-0.1,1.598-0.297,3.198-0.399,4.785c-2.19,0-4.382,0-6.769,0
                                    c0.692-8.465,1.29-16.939,1.987-25.5c3.485,0,6.973,0,10.363,0c1.494,0,3.085,0,4.482,0.2c3.486,0.601,5.873,2.987,6.172,5.972
                                    c0.4,4.585-1.195,7.173-5.079,8.571c-0.101,0-0.101,0.096-0.197,0.096c2.788,2.892,2.889,6.976,4.578,10.554
                                    C156.491,65.441,154.198,65.441,151.706,65.441z M145.033,45.23c-0.099,1.791-0.198,3.486-0.396,5.277c1.892,0,3.683,0,5.48,0
                                    c0.597,0,1.195-0.095,1.691-0.307c1.194-0.492,1.695-1.589,1.498-3.082c-0.203-1.195-0.997-1.791-1.994-1.791
                                    C149.216,45.125,147.128,45.23,145.033,45.23z"></path>
                                <path fill="#FFFFFF" d="M248.719,55.689c-0.295,3.282-0.5,6.471-0.787,9.756c-2.196,0-4.394,0-6.779,0
                                    c0.69-8.464,1.289-16.931,1.993-25.396c0.2,0,0.392-0.096,0.491-0.096c4.295,0,8.569,0,12.96,0
                                    c3.775,0.096,6.762,2.188,7.462,5.471c0.801,4.179-0.49,7.974-4.88,9.357c-0.097,0-0.193,0.107-0.397,0.309
                                    c2.091,1.391,2.295,3.682,3.091,5.778c0.6,1.485,1.102,3.085,1.592,4.682c-2.293,0-4.479,0-6.576,0
                                    c-0.292,0-0.696-0.404-0.792-0.701c-0.798-2.391-1.503-4.787-2.294-7.177c-0.501-1.59-0.903-1.885-2.588-1.982
                                    C250.419,55.689,249.625,55.689,248.719,55.689z M249.125,50.507c2.09,0,3.879,0,5.779,0c0.5,0,1.098-0.203,1.587-0.404
                                    c1.099-0.5,1.494-1.492,1.302-2.889c-0.104-1.097-0.903-1.79-1.899-1.887c-2.089-0.097-4.285,0-6.478,0
                                    C249.316,47.021,249.224,48.717,249.125,50.507z"></path>
                                <path fill="#FFFFFF" d="M163.762,40.048c6.174,0,12.149,0,18.319,0c-0.094,1.696-0.287,3.391-0.392,5.182
                                    c-3.886,0-7.673,0-11.553,0c-0.102,1.589-0.201,3.083-0.398,4.681c3.682,0,7.17,0,10.863,0c-0.213,1.886-0.31,3.582-0.502,5.372
                                    c-3.689,0-7.175,0-10.863,0c-0.195,1.698-0.297,3.295-0.394,5.088c3.881,0,7.668,0,11.652,0c-0.106,1.789-0.297,3.481-0.396,5.179
                                    c-6.08,0-12.158,0-18.328,0C162.467,56.981,163.165,48.514,163.762,40.048z"></path>
                                <path fill="#FFFFFF" d="M72.322,65.55c2.094-3.889,4.083-7.475,6.078-11.056c2.488-4.487,4.977-9.07,7.369-13.654
                                    c0.401-0.694,0.796-0.992,1.595-0.887c0.795,0.096,1.594,0,2.389,0c2.095,0,2.095,0,2.789,1.888
                                    c2.887,7.471,5.777,14.84,8.666,22.301c0.202,0.404,0.298,0.905,0.5,1.408c-2.19,0-4.285,0-6.577,0
                                    c-0.598-1.698-1.194-3.391-1.892-5.181c-3.584,0-7.07,0-10.655,0c-0.298,0-0.7,0.394-0.895,0.691
                                    c-0.698,1.29-1.298,2.591-1.994,3.785c-0.197,0.298-0.596,0.704-0.894,0.704C76.703,65.55,74.613,65.55,72.322,65.55z
                                     M91.347,55.09c-0.897-2.6-1.791-5.083-2.789-7.875c-1.396,2.792-2.589,5.276-3.887,7.875C86.964,55.09,89.056,55.09,91.347,55.09z
                                    "></path>
                                <path fill="#FFFFFF" d="M229.797,65.55c-2.182,0-4.283,0-6.576,0c-0.597-1.697-1.192-3.39-1.887-5.179c-3.584,0-7.069,0-10.661,0
                                    c-0.297,0-0.701,0.393-0.896,0.69c-0.691,1.292-1.292,2.591-1.992,3.787c-0.201,0.297-0.492,0.701-0.799,0.701
                                    c-2.091,0.1-4.179,0-6.472,0c0.192-0.501,0.405-0.8,0.597-1.193c4.286-7.782,8.571-15.64,12.751-23.421
                                    c0.403-0.79,0.894-1.087,1.79-0.983c0.694,0.096,1.398,0,2.194,0c2.197,0,2.197,0,2.888,1.984
                                    c2.89,7.375,5.684,14.744,8.574,22.109C229.401,64.453,229.597,64.952,229.797,65.55z M219.54,55.09
                                    c-0.902-2.6-1.787-5.083-2.791-7.875c-1.396,2.792-2.589,5.276-3.889,7.875C215.15,55.09,217.253,55.09,219.54,55.09z"></path>
                                <path fill="#FFFFFF" d="M184.576,40.146c4.883,0,9.561-0.298,14.241,0.096c4.49,0.406,6.876,3.485,6.58,7.771
                                    c-0.203,4.189-3.19,7.175-7.366,7.471c-2.102,0.204-4.295,0.099-6.482,0.204c-0.394,0-0.896,0-1.398,0
                                    c-0.289,3.283-0.498,6.471-0.786,9.753c-2.294,0-4.489,0-6.78,0C183.274,56.981,183.872,48.514,184.576,40.146z M191.058,45.23
                                    c-0.106,1.791-0.312,3.486-0.404,5.374c2.195-0.097,4.38-0.097,6.469-0.404c1.398-0.193,1.992-1.389,1.901-2.784
                                    c-0.107-1.195-0.898-2.089-2.293-2.186C194.832,45.125,193.04,45.23,191.058,45.23z"></path>
                                <path fill="#FFFFFF" d="M74.813,42.438c-0.794,1.696-1.593,3.188-2.389,4.583c-1.594-0.693-3.091-1.5-4.583-1.791
                                    c-4.979-0.903-8.467,1.984-8.764,7.068c-0.102,1.005-0.102,1.984,0.096,2.984c0.698,4.284,3.688,6.079,7.97,4.886
                                    c1.496-0.396,2.887-1.197,4.385-1.791c0.495,1.492,1.094,3.089,1.792,4.979c-1.397,0.69-2.691,1.492-4.085,1.885
                                    c-2.785,0.905-5.674,1.004-8.469,0.204c-4.281-1.089-7.067-3.784-8.064-8.062c-0.896-3.891-0.697-7.675,1.295-11.266
                                    c2.79-5.075,7.372-6.665,12.847-6.471C69.636,39.741,72.322,40.648,74.813,42.438z"></path>
                                <path fill="#FFFFFF" d="M237.473,65.441c-2.293,0-4.488,0-6.78,0c0.696-8.46,1.29-16.928,1.994-25.489c2.293,0,4.48,0,6.865,0
                                    C238.764,48.514,238.168,56.981,237.473,65.441z"></path>
                            </g>
                            <path class="color" fill="#FBDE00" d="M119.238,30.585c-1.097,0-2.191,0.105-3.288,0c-13.247-1.195-26.395-2.593-39.742-2.294
                                c-3.586,0.106-6.876,0.703-10.064,2.089c-4.082,1.695-8.166,3.199-12.547,3.891c-0.298,0-0.598,0.192-0.799,0.098
                                c-3.486-0.194-5.277,2.195-6.87,4.775c-1.994,3.091-2.89,6.481-2.692,10.266c0.1,1.291,0.1,2.589,0,3.987
                                c0,0.286-0.3,0.597-0.496,0.886c-0.299-0.192-0.597-0.291-0.795-0.6c-0.998-1.289-1.295-2.781-0.998-4.572
                                c0.198-1.205,0.299-2.495,0-3.688c-0.598-2.591,0.098-4.682,1.493-6.568c1.594-2.196,3.289-4.393,5.08-6.481
                                c1.594-1.791,2.99-3.785,5.478-4.787c0.7-0.287,0.598-0.885,0.097-1.386c-0.298-0.2-0.692-0.404-0.793-0.597
                                c-0.198-0.406-0.298-1.195-0.102-1.396c1.098-0.801,2.191-1.589,3.785-1.589c3.988,0.095,7.874-0.106,11.757-1.097
                                c7.069-1.793,14.142-3.583,21.114-5.586c6.971-1.984,14.045-2.985,21.118-3.881c1.691-0.203,3.686-0.597,5.28-0.702
                                c7.967-0.79,10.056-0.984,17.13-0.79c8.665,0.097,14.941,1.193,22.414,2.89c6.469,1.385,12.845,3.292,19.122,5.48
                                c4.984,1.683,9.952,3.378,14.941,5.169c2.986,1.097,5.971,2.505,8.861,3.794c0.405,0.193,0.597,0.693,0.802,1.098
                                c-0.396,0-0.897,0.192-1.304,0.097c-3.581-1.194-7.163-2.389-10.745-3.689c-6.579-2.292-13.148-4.478-19.926-5.777
                                c-0.298-0.096-0.595-0.096-0.895-0.096c-0.801,0-1.099,0.596-0.598,1.193c0.394,0.598,0.992,1.088,1.492,1.493
                                c3.189,2.697,6.274,5.374,9.563,7.975c0.897,0.692,2.191,0.991,3.284,0.991c8.367-0.105,16.84-0.393,25.204-0.701
                                c5.371-0.195,10.86-0.386,16.233-0.494c7.569-0.105,15.236-0.2,22.804-0.2c7.878,0,15.545,1.395,22.92,4.285
                                c6.874,2.782,12.653,7.172,16.831,13.452c0.693,0.992,0.992,2.186,1.6,3.177c1.887,2.794,0.79,5.875,0.886,8.865
                                c0,1.199-0.886,2.496-1.493,3.69c-0.096,0.292-0.598,0.396-0.994,0.598c-0.096-0.306-0.4-0.689-0.4-1.001
                                c0-1.6,0.095-3.178,0.095-4.777c-0.095-4.882-1.791-9.07-5.375-12.449c-0.597-0.599-1.597-1.099-2.387-1.205
                                c-3.581-0.288-6.375-1.984-9.071-4.18c-1.287-0.993-2.484-1.984-3.679-2.985c-2.194-1.79-4.775-2.695-7.473-3.186
                                c-5.472-0.897-11.056-1.493-16.631-1.397c-9.367,0.098-18.826,0.098-28.186,0.298c-11.162,0.3-22.313,0.801-33.468,1.203
                                c-10.66,0.289-21.222,0.194-31.876-0.5c-1.097-0.095-2.093-0.501-3.186-0.704c0-0.097,0-0.298,0-0.393
                                c0.399-0.098,0.793-0.204,1.294-0.204c8.065,0,16.135,0,24.203,0c0.396,0,0.897-0.298,1.297-0.396
                                c-0.203-0.5-0.203-1.097-0.798-1.289c-2.89-1.002-5.48-2.792-6.777-5.585c-1.986-4.489-3.083-5.874-5.574-5.971
                                c-4.779-0.202-9.461-0.703-14.146-0.905c-10.357-0.289-20.817-0.193-31.076,1.193c-3.385,0.5-6.674,1.194-10.058,1.898
                                c-0.896,0.202-1.795,0.491-2.59,0.895c-0.896,0.406-1.994,0.501-2.097,1.696c0,0.791,1.697,2.292,2.691,2.484
                                c4.979,0.907,10.061,1.79,15.042,2.697c2.092,0.394,4.083,0.895,6.174,1.289C119.238,30.286,119.238,30.381,119.238,30.585z
                                 M129.297,13.048c-2.692,0-4.082,0.105-8.764,0.309c-6.674,0.597-12.355,1.385-18.43,2.387c-5.082,0.896-10.16,1.984-15.14,3.391
                                c-9.358,2.676-18.827,5.374-28.686,5.468c-0.096,0-0.3,0-0.396,0c-0.303,0.205-0.5,0.405-0.799,0.597
                                c0.297,0.308,0.496,0.703,0.799,0.802c0.496,0.104,0.992,0.104,1.493,0.104c4.681-0.308,9.265-1,13.945-0.906
                                c6.476,0.108,12.849,0.906,19.322,1.3c0.598,0,1.296-0.202,1.891-0.298c-0.195-0.596-0.393-1.195-0.696-1.792
                                c-0.096-0.096-0.197-0.308-0.298-0.403c-0.796-1.292-0.796-1.985,0.602-2.687c1.193-0.598,2.387-1.088,3.683-1.397
                                c6.773-1.597,13.645-2.387,20.516-2.887c3.39-0.29,6.877-0.396,10.363-0.396c4.482-0.104,8.963-0.201,13.447,0
                                c4.279,0.204,8.565,0.8,12.847,1.195c0.798,0.106,1.594,0.201,1.797-0.895c0.197-1.001-0.399-1.791-1.5-1.888
                                C146.328,14.242,138.663,13.048,129.297,13.048z"></path>
                            <g>
                                <path class="color" fill="#FBDE00" d="M140.155,74.218h-1.594v2.079h1.695c0.596,0,0.991-0.099,1.194-0.288c0.298-0.205,0.394-0.407,0.394-0.799
                                    c0-0.398-0.096-0.706-0.394-0.801C141.151,74.312,140.751,74.218,140.155,74.218z"></path>
                                <path class="color" fill="#FBDE00" d="M272.428,66.648c-3.675-3.198-7.973-3.891-12.555-2.292c-3.68,1.291-7.166,2.784-10.844,4.179
                                    c-2.293,0.897-4.584,1.495-7.079,1.495c-51.8,0-103.687,0-155.48,0c-3.69,0-7.278-0.301-10.764-1.101
                                    c-3.283-0.799-6.374-1.897-9.36-3.583c-2.093-1.3-4.284-2.492-6.475-3.686c-1.194-0.6-2.489-1.195-3.886-1.6
                                    c-1.791-0.387-2.986-0.191-4.478,0.107c-6.076,1.298-10.761,4.581-14.046,9.861c-0.202,0.396-0.596,0.987-0.296,1.297
                                    c0.394,0.6,0.996,0.396,1.392,0.291c3.688-0.692,7.472-1.387,11.157-2.185c0.996-0.204,1.993-0.108,2.691,0.597
                                    c0.896,0.8,1.791,1.693,2.489,2.688c2.292,3.193,2.489,6.679,1.694,10.358c-0.502,2.291-1.594,3.784-4.087,4.181
                                    c-3.188,0.501-6.275,1.097-9.361,1.695c-0.598,0.098-1.296,0.098-1.296,0.906c0,0.69,0.698,0.786,1.195,0.991
                                    c2.89,1.193,5.283,1.685,8.865,2.281c0.501,0.107,0.799,0.107,1.892,0.214c1.499,0.095,1.499,0,2.489-0.106
                                    c0.602-0.106,0.902-0.106,1.497-0.303c1.69-0.594,3.485-0.995,5.081-1.788c3.282-1.597,6.47-3.388,9.76-4.987
                                    c3.783-1.792,7.67-2.677,11.854-2.677c26.097,0,52.09,0,78.188,0l0,0c2.59,0,5.183,0,7.773,0c23.798,0,47.604,0,71.312,0
                                    c3.189,0,6.185,0.791,9.17,1.791c3.58,1.292,7.066,2.581,10.757,3.486c4.081,0.991,7.768-0.202,10.851-2.986
                                    C278.006,81.187,278.506,71.924,272.428,66.648z M112.662,81.476c-0.795,0.597-1.79,0.802-3.185,0.802
                                    c-0.701,0-1.494-0.099-2.194-0.299c-0.697-0.193-1.295-0.503-1.789-0.792l0.795-1.897c0.5,0.301,0.994,0.494,1.496,0.707
                                    c0.498,0.191,1.093,0.191,1.594,0.191c0.597,0,0.998-0.098,1.296-0.191c0.298-0.214,0.394-0.406,0.394-0.707
                                    c0-0.295-0.095-0.498-0.394-0.596c-0.298-0.202-0.8-0.297-1.499-0.499c-0.894-0.203-1.689-0.396-2.191-0.704
                                    c-0.494-0.289-0.896-0.594-1.093-0.981c-0.203-0.403-0.302-0.81-0.302-1.405c0-0.599,0.2-1.196,0.5-1.593
                                    c0.3-0.391,0.795-0.893,1.492-1.094c0.598-0.3,1.296-0.396,2.095-0.396c0.7,0,1.392,0.097,2.091,0.299
                                    c0.697,0.204,1.192,0.492,1.591,0.801l-0.792,1.886c-0.4-0.299-0.901-0.501-1.396-0.694c-0.495-0.202-0.996-0.202-1.494-0.202
                                    c-0.5,0-0.9,0.108-1.098,0.3c-0.296,0.202-0.398,0.404-0.398,0.693c0,0.2,0.103,0.308,0.203,0.402
                                    c0.096,0.098,0.298,0.194,0.597,0.299c0.297,0.105,0.697,0.205,1.296,0.299c0.895,0.193,1.592,0.405,2.089,0.691
                                    c0.501,0.311,0.896,0.599,1.098,1.002c0.198,0.396,0.299,0.79,0.299,1.29C113.86,80.188,113.46,80.883,112.662,81.476z
                                     M128.499,74.218h-4.581v1.888h4.283v1.99h-4.283v1.994h4.581v1.982h-7.068v-9.955h7.068V74.218z M141.845,82.179l-1.291-3.283
                                    c-0.102-0.404-0.5-0.595-1.096-0.595h-0.998v3.878h-2.59v-9.967h4.583c1.196,0,2.09,0.312,2.688,0.808
                                    c0.602,0.491,0.901,1.292,0.901,2.19c0,0.699-0.204,1.298-0.502,1.686c-0.399,0.497-0.896,0.809-1.493,0.999
                                    c0.298,0.097,0.496,0.201,0.795,0.406c0.201,0.19,0.399,0.49,0.501,0.785l1.193,2.986h-2.691V82.179L141.845,82.179z
                                     M157.387,82.179h-2.095l-4.48-9.967h2.69l2.89,6.684l2.889-6.684h2.589L157.387,82.179z M171.229,82.179h-2.589v-9.967h2.589
                                    V82.179z M182.187,79.495c0.396,0.501,0.995,0.787,1.794,0.787c0.893,0,1.694-0.286,2.495-0.886l0.788,1.89
                                    c-0.395,0.296-0.885,0.595-1.492,0.787c-0.598,0.205-1.195,0.31-1.899,0.31c-0.979,0-1.885-0.2-2.675-0.598
                                    c-0.809-0.404-1.406-1.001-1.803-1.789c-0.394-0.809-0.594-1.694-0.594-2.694c0-1.005,0.2-1.89,0.594-2.689
                                    c0.396-0.8,0.994-1.396,1.803-1.801c0.79-0.395,1.695-0.597,2.675-0.597c0.704,0,1.302,0.106,1.899,0.309
                                    c0.607,0.191,1.098,0.498,1.492,0.786l-0.788,1.901c-0.801-0.599-1.697-0.896-2.495-0.896c-0.801,0-1.398,0.297-1.794,0.788
                                    c-0.393,0.499-0.597,1.302-0.597,2.293C181.59,78.194,181.794,78.994,182.187,79.495z M201.908,74.218h-4.583v1.888h4.287v1.99
                                    h-4.287v1.994h4.583v1.982h-7.076v-9.955h7.076V74.218z M216.058,81.476c-0.802,0.597-1.793,0.802-3.199,0.802
                                    c-0.692,0-1.482-0.099-2.186-0.299c-0.701-0.193-1.3-0.503-1.792-0.792l0.802-1.897c0.502,0.301,0.99,0.494,1.49,0.707
                                    c0.491,0.191,1.091,0.191,1.592,0.191c0.598,0,1.001-0.098,1.289-0.191c0.309-0.214,0.406-0.406,0.406-0.707
                                    c0-0.295-0.098-0.498-0.406-0.596c-0.291-0.202-0.79-0.297-1.482-0.499c-0.906-0.203-1.692-0.396-2.195-0.704
                                    c-0.501-0.289-0.897-0.594-1.098-0.981c-0.19-0.403-0.299-0.81-0.299-1.405c0-0.599,0.202-1.196,0.499-1.593
                                    c0.301-0.391,0.802-0.893,1.495-1.094c0.597-0.3,1.291-0.396,2.101-0.396c0.691,0,1.386,0.097,2.078,0.299
                                    c0.703,0.204,1.195,0.492,1.599,0.801l-0.788,1.886c-0.407-0.299-0.904-0.501-1.406-0.694c-0.501-0.202-0.993-0.202-1.482-0.202
                                    c-0.503,0-0.907,0.108-1.1,0.3c-0.308,0.202-0.404,0.404-0.404,0.693c0,0.2,0.097,0.308,0.2,0.402
                                    c0.099,0.098,0.301,0.194,0.599,0.299c0.3,0.105,0.705,0.205,1.301,0.299c0.887,0.193,1.59,0.405,2.08,0.691
                                    c0.501,0.311,0.907,0.599,1.1,1.002c0.204,0.396,0.306,0.79,0.306,1.29C217.153,80.188,216.847,80.883,216.058,81.476z
                                     M272.428,80.784c0.3,0.896-0.19,1.697-1.195,2.099c-1.095,0.384-1.693,1.089-2.098,2.08c-0.29,0.811-0.885,1.193-1.887,1.098
                                    c-1.098-0.499-2.09-0.096-2.985,0.8c-0.599,0.598-1.503,0.49-2.099-0.105c-0.791-0.788-1.686-0.98-2.786-0.886
                                    c-1.096,0.192-1.691-0.2-2.088-1.194c-0.402-1.001-1.001-1.599-1.991-2.001c-1.199-0.491-1.495-1.092-1.199-2.39
                                    c0.205-0.888,0-1.59-0.604-2.293c-0.886-1.095-0.886-1.694,0-2.687c0.604-0.692,0.81-1.396,0.703-2.283
                                    c-0.203-1.403,0-1.797,1.301-2.291c0.885-0.406,1.588-0.904,1.983-1.896c0.404-1.204,1.193-1.494,2.388-1.204
                                    c0.907,0.211,1.503,0,2.196-0.489c1.291-0.995,1.597-0.995,2.889,0c0.692,0.597,1.396,0.797,2.292,0.597
                                    c1.097-0.203,1.695,0.103,2.099,1.097c0.49,0.992,1.09,1.792,2.188,2.184c1.084,0.501,1.394,1.194,1.084,2.292
                                    c-0.287,0.8-0.094,1.396,0.408,1.993c0.193,0.202,0.298,0.396,0.402,0.606c0.692,0.887,0.692,1.39,0,2.187
                                    C272.525,78.791,272.131,79.59,272.428,80.784z"></path>
                            </g>
                            </svg>
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
								<li class="active"><a href="index.html"><span>Home</span></a></li>
								<li><a href="about.html"><span>About Us</span></a></li>
								<li class="dropdown">
									<a href="services.html" data-toggle="dropdown" data-submenu=""><span>Services</span><span class="ecaret"></span></a>
									
								</li>
								
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
	<!-- Slider -->
	<div id="mainSliderWrapper">
		<div id="mainSlider">
			<div class="slide">
				<div class="img--holder" style="background-image: url(assets/images/slider/slide1.jpg);"></div>
				<div class="slide-content center">
					<div class="vert-wrap container">
						<div class="vert">
							<div class="container">
								<h4 data-animation="zoomIn" data-animation-delay="0.5s">Looking for Right Vehicle</h4>
								<h3 data-animation="scaleOut" data-animation-delay="0.2s">Repair Service?</h3>
								<p class="hidden-xs" data-animation="fadeIn" data-animation-delay="0.9s">Get your fair-price repair estimates</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slide">
				<div class="img--holder" style="background-image: url(assets/images/slider/slide2.jpg);"></div>
				<div class="slide-content container left">
					<div class="vert-wrap">
						<div class="vert">
							<div class="container">
								<h4 data-animation="fadeInLeft" data-animation-delay="0.2s">Full Service of</h4>
								<h3 data-animation="flipInX" data-animation-delay="0.8s">Auto Repair</h3>
								<h3 data-animation="flipInX" data-animation-delay="1.2s">& Maintenance</h3>
								<p class="hidden-xs" data-animation="fadeIn" data-animation-delay="1.5s">Over 35 Years Of Quality Auto Service</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slide">
				<div class="img--holder" style="background-image: url(assets/images/slider/slide3.jpg);"></div>
				<div class="slide-content container center">
					<div class="vert-wrap">
						<div class="vert">
							<div class="container">
								<h4 data-animation="zoomIn" data-animation-delay="0.8s">Trust Your Vehicle to</h4>
								<h3 data-animation="fadeInUp" data-animation-delay="0.2s">Certified</h3>
								<h3 data-animation="fadeInUp" data-animation-delay="0.5s">Technicians</h3>
								<p class="hidden-xs" data-animation="fadeIn" data-animation-delay="1.2s">SERVICE, MAINTENANCE & REPAIR BY THE CERTIFIED SERVICE EXPERTS</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Slider -->
	<!-- Content  -->
	<div id="pageContent">
		<!-- Under Slider Banner -->
		<div class="block banner-under-slider hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-sm-7 col-md-6">
						<div class="row row-flex">
							<div class="col-sm-5 col-md-6 col-title">
								<h2>After Hours</h2>
								<h2 class="h-lg text-right"><span class="color">Drop-OFF</span></h2>
							</div>
							<div class="col-sm-7 col-md-6">
								<p>We realize that you lead a busy life, so we've made it easy for you to drop off your vehicle 24/7.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-5 col-md-6">
						<div class="row row-flex">
							<div class="col-md-6 col-lg-8 col-img">
								<div class="negative-margin"><img src="assets/images/banner-key.png" class="img-responsive" alt=""></div>
							</div>
							<div class="col-md-6 col-lg-4 action hidden-xs">
								<a href="services.html" class="btn btn-full btn-border"><span>Know more</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- // Under Slider Banner -->
		<!-- Services Banner Block -->
		<div class="block">
			<div class="container">
				<div class="text-center">
					<h2 class="h-lg">What We Do</h2>
					<p class="info">We offer full service auto repair & maintenance</p>
				</div>
				<div class="services-block services-carousel hidden-xs">
					<div class="service">
						<div class="image"><img src="assets/images/service-1-bg.png" alt="#"></div>
						<div class="caption">
							<div class="vert-wrap">
								<div class="vert">
									<h3>Preventative</h3>
									<h2>Maintenance</h2>
									<div class="text">The best way to minimize breakdowns is doing routine maintenance
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="service">
						<a href="services-1.html" class="image image-scale"><img src="assets/images/service-2-bg.jpg" alt="#"></a>
					</div>
					<div class="service">
						<div class="image"><img src="assets/images/service-3-bg.jpg" alt="#"></div>
						<div class="caption">
							<div class="vert-wrap">
								<div class="vert">
									<h3>Common</h3>
									<h2>Repairs</h2>
									<div class="text">We have over 30 common car
										<br>repairsand the list is growing</div>
								</div>
							</div>
						</div>
					</div>
					<div class="service">
						<a href="services-2.html" class="image image-scale"><img src="assets/images/service-4-bg.jpg" alt="#"></a>
					</div>
					<div class="service dark">
						<div class="image"><img src="assets/images/service-5-bg.jpg" alt="#"></div>
						<div class="caption">
							<div class="vert-wrap">
								<div class="vert">
									<h3>Brake</h3>
									<h2>Repair & Service</h2>
									<div class="text">Brake maintenance is important
										<br> in helping ensure the safety of you
										<br> and your passengers
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="service">
						<a href="services-3.html" class="image image-scale"><img src="assets/images/service-6-bg.jpg" alt="#"></a>
					</div>
				</div>
				<div class="services-block services-carousel visible-xs">
					<div class="service">
						<div class="image"><img src="assets/images/service-1-bg.png" alt="#"></div>
						<div class="caption">
							<div class="vert-wrap">
								<div class="vert">
									<h3>Preventative</h3>
									<h2>Maintenance</h2>
									<div class="text">The best way to minimize breakdowns is doing routine maintenance
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="service">
						<div class="image"><img src="assets/images/service-3-bg.jpg" alt="#"></div>
						<div class="caption">
							<div class="vert-wrap">
								<div class="vert">
									<h3>Common</h3>
									<h2>Repairs</h2>
									<div class="text">We have over 30 common car
										<br>repairsand the list is growing</div>
								</div>
							</div>
						</div>
					</div>
					<div class="service dark">
						<div class="image"><img src="assets/images/service-5-bg.jpg" alt="#"></div>
						<div class="caption">
							<div class="vert-wrap">
								<div class="vert">
									<h3>Brake</h3>
									<h2>Repair & Service</h2>
									<div class="text">Brake maintenance is important
										<br> in helping ensure the safety of you
										<br> and your passengers
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Services Banner Block -->
		<!-- Services List Block -->
		<div class="block bg-1">
			<div class="container">
				<h2 class="h-lg text-center">Our <span class="color">Services</span></h2>
				<p class="info text-center">Below are some of the many auto repair services we offer:</p>
				<div class="row" id="slideMobile">
					<div class="col-sm-6 col-md-4">
						<ul class="marker-list">
							<li>FREE Loaner Cars</li>
							<li>FREE Shuttle Service</li>
							<li>General Auto Repair & Maintenance</li>
							<li>Transmission Repair & Replacement</li>
							<li>Manufacturer Recommended Service</li>
							<li>Brake Repair and Replacement</li>
							<li>Air Conditioning A/C Repair</li>
							<li>Tire Repair and Replacement</li>
						</ul>
					</div>
					<div class="col-sm-6 col-md-4 view-more-mobile">
						<ul class="marker-list">
							<li>Fuel System Repair</li>
							<li>Exhaust System Repair</li>
							<li>Engine Cooling System Maintenance</li>
							<li>Electrical Diagnostics</li>
							<li>Starting and Charging Repair</li>
							<li>Wheel Alignment</li>
							<li>CV Axles</li>
							<li>Computer Diagnostic Testing
							</li>
						</ul>
					</div>
					<div class="col-sm-6 col-md-4 view-more-mobile view-more-tablet">
						<ul class="marker-list">
							<li>Vehicle Preventative Maintenance</li>
							<li>State Emissions Inspection</li>
							<li>Emission Repair Facility</li>
							<li>Tune Up</li>
							<li>Oil Change</li>
							<li>Brake Job / Brake Service</li>
							<li>Engine Cooling System Flush &amp; Repair</li>
							<li>Steering and Suspension Work</li>
						</ul>
					</div>
				</div>
				<div class="text-center"><a href="#slideMobile" class="view-more-link color"><span class="more">All Services</span><span class="less">Hide All Services</span></a>
				</div>
			</div>
		</div>
		<!-- //Services List Block -->
		<!-- Block -->
		@if(session('success'))
            <script>
                alert("{{ session('success') }}");
            </script>
        @endif
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-5">
						<div class="vertical-tab-container" id="tabForm">
                            <!-- LEFT SERVICE MENU -->
                            <div class="vertical-tab-menu">
                                <div class="list-group">
                        
                                    <a href="#" class="list-group-item active service-btn text-center" data-service="Tires">
                                        <span>TIRES</span>
                                        <i class="icon icon-car-wheel"></i>
                                    </a>
                        
                                    <a href="#" class="list-group-item service-btn text-center" data-service="Oil Change">
                                        <span>OIL CHANGE</span>
                                        <i class="icon icon-oil"></i>
                                    </a>
                        
                                    <a href="#" class="list-group-item service-btn text-center" data-service="Battery">
                                        <span>BATTERIES</span>
                                        <i class="icon icon-power"></i>
                                    </a>
                        
                                    <a href="#" class="list-group-item service-btn text-center" data-service="Brakes">
                                        <span>BRAKES</span>
                                        <i class="icon icon-disc-brake"></i>
                                    </a>
                        
                                    <a href="#" class="list-group-item service-btn text-center" data-service="Alignment">
                                        <span>ALIGNMENT</span>
                                        <i class="icon icon-balance"></i>
                                    </a>
                        
                                </div>
                            </div>
                        
                        
                            <!-- RIGHT SIDE FORM - SINGLE FORM FOR ALL SERVICES -->
                            <div class="vertical-tab">
                                
                                <div class="vertical-tab-content active">
                                    
                                    <h3 id="serviceTitle">Tires Service</h3>
                                    
                                    <p class="comment">All fields are required</p>
                                    
                                    <form method="POST" action="{{ route('service.enquiry') }}" id="bookingForm">
                                    @csrf
                                        
                                        <input type="hidden" name="service" id="serviceInput" value="Tires">
                                        
                                        <div class="form-group">
                                            <input type="text" name="year" class="input-custom" placeholder="Year">
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" name="make" class="input-custom" placeholder="Make">
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" name="model" class="input-custom" placeholder="Model">
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" name="submodel" class="input-custom" placeholder="Submodel">
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" name="registration" class="input-custom" placeholder="Registration Number">
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" name="mileage" class="input-custom" placeholder="Mileage">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-lg btn-full" id="submitBtn">
                                            GET PRICING
                                        </button>
                                        
                                    </form>
                                    
                                </div>
                                
                            </div>
                        
                        </div>
                        
                        <style>
                        /* Basic styling to ensure form visibility */
                        .vertical-tab-content {
                            display: block !important; /* Force display */
                        }
                        
                        .service-btn.active {
                            background-color: #007bff;
                            color: white;
                        }
                        </style>
                        
                        <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const serviceBtns = document.querySelectorAll('.service-btn');
                            const serviceInput = document.getElementById('serviceInput');
                            const serviceTitle = document.getElementById('serviceTitle');
                            const submitBtn = document.getElementById('submitBtn');
                            
                            // Track the last selected service for submission
                            let lastSelectedService = 'Tires';
                            
                            // Update UI when service button is clicked
                            serviceBtns.forEach(btn => {
                                btn.addEventListener('click', function(e) {
                                    e.preventDefault();
                                    
                                    // Remove active class from all buttons
                                    serviceBtns.forEach(b => b.classList.remove('active'));
                                    
                                    // Add active class to clicked button
                                    this.classList.add('active');
                                    
                                    // Get selected service
                                    const selectedService = this.getAttribute('data-service');
                                    
                                    // Update title to show current selection
                                    serviceTitle.textContent = selectedService + ' Service';
                                    
                                    // Update the hidden input with the selected service
                                    serviceInput.value = selectedService;
                                    
                                    // Update the last selected service
                                    lastSelectedService = selectedService;
                                    
                                    // Optional: Update button text to show which service they're booking
                                    submitBtn.textContent = 'GET ' + selectedService.toUpperCase() + ' PRICING';
                                    
                                    console.log('Service selected:', selectedService); // For debugging
                                });
                            });
                            
                            // Handle form submission
                            document.getElementById('bookingForm').addEventListener('submit', function(e) {
                                // The hidden input already has the currently selected service
                                console.log('Form submitting with service:', serviceInput.value);
                                
                                // You can add validation here if needed
                                // return false; // Uncomment to prevent actual submission for testing
                            });
                            
                            // Initialize with Tires selected
                            serviceInput.value = 'Tires';
                            serviceTitle.textContent = 'Tires Service';
                            submitBtn.textContent = 'GET TIRES PRICING';
                        });
                        </script>
					</div>
					<div class="divider-lg visible-sm visible-xs"></div>
					<div class="col-md-6 col-lg-7">
						<h2 class="text-center-md">About Car Repair Services</h2>
						<p class="text-center-md">Our service facility is independently owned and operated providing full-service repair and maintenance services. We use the latest diagnostic equipment to guarantee your vehicle is repaired or serviced properly and in a timely fashion. We are a member of Professional Auto Service, an elite performance network, where independent service facilities share common goals of being world-class automotive service centers.</p>
						<ul class="marker-list-sm column-sm-2">
							<li>24 Month / 24,000km Nationwide Warranty</li>
							<li>ASE Certified Technicians</li>
							<li>Customer Rewards Program</li>
							<li>24-Hour Roadside Assistance</li>
							<li>Courtesy Local Shuttle Service</li>
							<li>Courtesy Loaner Vehicle</li>
						</ul>
							<!--<div class="coupon">
						<div class="coupon-row">
								<div class="coupon-col-left text-center">
									
								</div>
								<div class="coupon-col-right text-center">
									<div class="coupon-text4">Our Latest Specials</div>
									<div class="coupon-text5">Any Servcie of $250 or More</div>
									<a href="coupon.html" class="coupon-all">SEE ALL COUPONS<span></span></a>
								</div>
							</div>
						</div>-->
					</div>
				</div>
			</div>
		</div>
		<!-- //Block -->
		<!-- How It Works -->
		<div class="block bg-2">
			<div class="container">
				<h2 class="h-lg text-center">How It <span class="color">Works</span></h2>
				<div class="row how-works-row how-works-carousel shifted">
					<div class="col-sm-3 col-md-3">
						<div class="how-works-block">
							<div class="image">
								<div class="image-scale"><img src="assets/images/how-works-img-1.jpg" alt=""></div>
							</div>
							<div class="caption">
								<div class="inside">
									<div class="number"><span>1</span></div>
									<div class="text">
										<h5>Make an Appointment</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-md-3">
						<div class="how-works-block">
							<div class="image">
								<div class="image-scale"><img src="assets/images/how-works-img-2.jpg" alt=""></div>
							</div>
							<div class="caption">
								<div class="inside">
									<div class="number"><span>2</span></div>
									<div class="text">
										<h5>Select Services</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-md-3">
						<div class="how-works-block">
							<div class="image">
								<div class="image-scale"><img src="assets/images/how-works-img-3.jpg" alt=""></div>
							</div>
							<div class="caption">
								<div class="inside">
									<div class="number"><span>3</span></div>
									<div class="text">
										<h5>Select Quote, Confirm Request</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-md-3">
						<div class="how-works-block">
							<div class="image">
								<div class="image-scale"><img src="assets/images/how-works-img-4.jpg" alt=""></div>
							</div>
							<div class="caption">
								<div class="inside">
									<div class="number"><span>4</span></div>
									<div class="text">
										<h5>GET YOUR CAR</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //How It Works -->
		<!-- Services Block -->
		<div class="block">
			<div class="container">
				<h2 class="h-lg text-center">Why Choose Certified Service?</h2>
				<p class="info text-center">We partnered with RepairPal to bring you the most sophisticated fair-price estimates </p>
				<div class="row">
					<div class="col-sm-4 col-md-4">
						<div class="text-icon">
							<div class="icon-wrapper"><span><i class="icon icon-technology"></i><span class="icon-hover"></span></span>
							</div>
							<h3 class="title">Estimates</h3>
							<p class="text">We bring you the most accurate and fair-price service estimates</p>
						</div>
					</div>
					<div class="col-sm-4 col-md-4">
						<div class="text-icon">
							<div class="icon-wrapper"><span><i class="icon icon-tool"></i><span class="icon-hover"></span></span>
							</div>
							<h3 class="title">Trusted</h3>
							<p class="text">Trusted Service Centers
								<br> are certified for high quality
							</p>
						</div>
					</div>
					<div class="col-sm-4 col-md-4">
						<div class="text-icon">
							<div class="icon-wrapper"><span><i class="icon icon-diploma"></i><span class="icon-hover"></span></span>
							</div>
							<h3 class="title">Guarantees</h3>
							<p class="text">Covers parts and labor on qualifying repairs and services for
								<br>24 months/24,000 miles
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Services Block -->
		<!-- Testimonials Block -->
		<div class="block bg-3">
			<div class="container-fluid">
				<h2 class="h-lg text-center">What <span class="color">Our Clients</span> Say</h2>
				<div class="testimonials-carousel">
					<div class="testimonials">
						<div class="testimonials-item">
							<div class="inside">
								<div class="meta"><span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span><span class="username">Joseph C. Lane</span></div>
								<div class="text">Yesterday's crown preparation went great. I expected the same level of discomfort that I had experienced with another crown done by different dentist. Technique caused so much less difficulty that I went away with a smile on my face.</div>
							</div>
							<div class="bg-image" style="background-image: url(assets/images/testimonial-bg-1.jpg);"></div>
						</div>
						<div class="testimonials-item testimonials-item--dark">
							<div class="inside">
								<div class="meta"><span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span><span class="username">Joseph M. Fischer</span></div>
								<div class="text">Fast and painless service, very happy with this establishment. I Highly Recommend them. I had my semiannual cleaning and checkup. And as always, it was an excellent experience.</div>
							</div>
							<div class="bg-image" style="background-image: url(assets/images/testimonial-bg-2.jpg);"></div>
						</div>
					</div>
					<div class="testimonials">
						<div class="testimonials-item testimonials-item--dark">
							<div class="inside">
								<div class="meta"><span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span><span class="username">Joseph C. Lane</span></div>
								<div class="text">Yesterday's crown preparation went great. I expected the same level of discomfort that I had experienced with another crown done by different dentist. Technique caused so much less difficulty that I went away with a smile on my face.</div>
							</div>
							<div class="bg-image" style="background-image: url(assets/images/testimonial-bg-2.jpg);"></div>
						</div>
						<div class="testimonials-item">
							<div class="inside">
								<div class="meta"><span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span><span class="username">Joseph M. Fischer</span></div>
								<div class="text">Fast and painless service, very happy with this establishment. I Highly Recommend them. I had my semiannual cleaning and checkup. And as always, it was an excellent experience.</div>
							</div>
							<div class="bg-image" style="background-image: url(assets/images/testimonial-bg-1.jpg);"></div>
						</div>
					</div>
					<div class="testimonials">
						<div class="testimonials-item">
							<div class="inside">
								<div class="meta"><span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span><span class="username">Joseph C. Lane</span></div>
								<div class="text">Yesterday's crown preparation went great. I expected the same level of discomfort that I had experienced with another crown done by different dentist. Technique caused so much less difficulty that I went away with a smile on my face.</div>
							</div>
							<div class="bg-image" style="background-image: url(assets/images/testimonial-bg-1.jpg);"></div>
						</div>
						<div class="testimonials-item testimonials-item--dark">
							<div class="inside">
								<div class="meta"><span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span><span class="username">Joseph M. Fischer</span></div>
								<div class="text">Fast and painless service, very happy with this establishment. I Highly Recommend them. I had my semiannual cleaning and checkup. And as always, it was an excellent experience.</div>
							</div>
							<div class="bg-image" style="background-image: url(assets/images/testimonial-bg-2.jpg);"></div>
						</div>
					</div>
					<div class="testimonials">
						<div class="testimonials-item testimonials-item--dark">
							<div class="inside">
								<div class="meta"><span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span><span class="username">Joseph C. Lane</span></div>
								<div class="text">Yesterday's crown preparation went great. I expected the same level of discomfort that I had experienced with another crown done by different dentist. Technique caused so much less difficulty that I went away with a smile on my face.</div>
							</div>
							<div class="bg-image" style="background-image: url(assets/images/testimonial-bg-2.jpg);"></div>
						</div>
						<div class="testimonials-item">
							<div class="inside">
								<div class="meta"><span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span><span class="username">Joseph M. Fischer</span></div>
								<div class="text">Fast and painless service, very happy with this establishment. I Highly Recommend them. I had my semiannual cleaning and checkup. And as always, it was an excellent experience.</div>
							</div>
							<div class="bg-image" style="background-image: url(assets/images/testimonial-bg-1.jpg);"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Testimonials Block -->
		<!-- Statistics Block -->
		<div class="block">
			<div class="container">
				<h2 class="h-lg text-center">Some Statistics <span class="color">About Us</span></h2>
				<p class="info text-center">Auto Repair Technical Statistics You Must Know</p>
				<div class="row" id="counterBlock">
					<div class="col-sm-3 col-md-3">
						<div class="stat-box">
							<div><span class="number"><span class="count" data-to="10" data-speed="1000">10</span></span><span class="icon"><i class="icon-rocket"></i></span></div>
							<div class="text">
								<h5>Years of experience</h5>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-md-3">
						<div class="stat-box">
							<div><span class="number"><span class="count" data-to="32" data-speed="1000">32</span></span><span class="icon"><i class="icon-people-1"></i></span></div>
							<div class="text">
								<h5>Technicians & workers</h5>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-md-3">
						<div class="stat-box">
							<div><span class="number"><span class="count" data-to="2500" data-speed="1000">2500</span></span><span class="icon"><i class="icon-people"></i></span></div>
							<div class="text">
								<h5>Satisfied customers</h5>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-md-3">
						<div class="stat-box">
							<div><span class="number"><span class="count" data-to="1900" data-speed="1000">1900</span></span><span class="icon"><i class="icon-transport"></i></span></div>
							<div class="text">
								<h5>Vehicle Repaired</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Statistics Block -->
		<!-- Recalls Block -->
		<div class="block bg-dark full-block pad-sm">
			<div class="container">
				<div class="text-center">
					<h2 class="h-lg">Safety <span class="color">&</span> Recalls</h2>
					<p class="info">Are there any recalls on your car? Find out!
					</p>
				</div>
				<form action="#" class="form-table">
					<div class="form-group form-group-cell">
						<div class="select-wrapper">
							<select class="input-custom">
								<option value="">Enter make</option>
								<option value="">Enter make</option>
							</select>
						</div>
					</div>
					<div class="form-group form-group-cell">
						<div class="select-wrapper">
							<select class="input-custom">
								<option value="">Enter model</option>
								<option value="">Enter model</option>
							</select>
						</div>
					</div>
					<div class="form-group form-group-cell sm">
						<div class="select-wrapper">
							<select class="input-custom">
								<option value="">Year</option>
								<option value="">2015</option>
							</select>
						</div>
					</div>
					<div class="form-group form-group-cell sm">
						<input type="text" class="form-control input-custom" placeholder="ZIP">
					</div>
					<div class="form-group form-group-cell action">
						<a class="btn btn-full btn-invert" data-toggle="modal" data-target="#getRecallsModal"><span>Get Recalls</span></a>
					</div>
				</form>
			</div>
		</div>
		<!-- //Recalls Block -->
		<!-- Appointment Block -->
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="text-appointment">
							<h2 class="h-lg">Schedule <span class="color">Your Appointment</span> Today</h2>
							<p class="info">Your Automotive Repair & Maintenance Service Specialist</p>
							<h2 class="h-phone">Call: 1-800-123-4567</h2>
							<div class="btn-inline">
								<a class="btn btn-invert" href="#" data-toggle="modal" data-target="#appointmentForm"><span>Appointment</span></a>
								<div class="form-popup-wrap">
									<a class="btn form-popup-link" href="#"><span>Get Quote</span></a>
									<div class="form-popup"><div class="form-popup-close"><i class="icon-close-cross"></i></div>
										<form id="quote-form" method="post">
											<div id="successQuote" class="successform">
												<p>Your message was sent successfully!</p>
											</div>
											<div id="errorQuote" class="errorform">
												<p>Something went wrong, try refreshing and submitting the form again.</p>
											</div>
											<div class="form-inline">
												<input type="text" name="name" class="form-control input-custom" value="" placeholder="Your Name">
											</div>
											<div class="form-inline">
												<div>
													<input type="text" name="email" class="form-control input-custom" value="" placeholder="Your E-mail">
												</div>
												<div>
													<input type="text" name="phone" class="form-control input-custom" value="" placeholder="Phone number">
												</div>
											</div>
											<div class="form-inline">
												<div class="select-wrapper">
													<select name="select1" class="input-custom">
														<option value="Vehicle">Vehicle</option>
														<option value="Car">Car</option>
														<option value="Bike">Bike</option>
													</select>
												</div>
												<div class="select-wrapper">
													<select name="select2" class="input-custom">
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
											</div>
											<div class="form-inline">
												<div class="select-wrapper">
													<select name="select3" class="input-custom">
														<option value="">Choose service</option>
														<option value="Preventative Maintenance">Preventative Maintenance</option>
														<option value="Brake Repair">Brake Repair & Service</option>
														<option value="Transmission Service">Transmission Service & Repair</option>
													</select>
												</div>
											</div>
											<div class="form-inline">
												<textarea name="message" class="form-control textarea-custom" placeholder="Your comment"></textarea>
											</div>
											<button type="submit" id="submit" class="btn btn-lg btn-full"><span>get a quote</span></button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="img-move animation" data-animation="fadeInRight" data-animation-delay="0s">
							<img src="assets/images/img-car-move.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Appointment Block -->
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
						 VA 22192
					</div>
					<div class="contact-info"><i class="icon icon-clock"></i>Monday-Saturday <span class="color">7:00AM - 6:00PM</span>
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
				<div class="copyright">© 2017 Car Repair Services, All Rights Reserved</div>
				<div class="footer-bottom-right hidden-xs"><a href="#">Privacy Policy</a></div>
			</div>
		</div>
	</div>
	<div class="back-to-top"><a href="#top"><span class="icon icon-transport"></span></a></div>
	<!-- //Footer -->
	<div class="darkout-menu"></div>
	<!--Get Form Info-->
	<div class="modal modal-info fade" id="tab1Modal">
		<div class="modal-dialog container">
			<div class="modal-content">
				<div class="modal-header">
					<div class="row">
						<div class="col-xs-9">
							<h3>The Tires Price</h3>
						</div>
						<div class="col-xs-3">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
						</div>
					</div>
				</div>
				<div class="modal-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
					<ul class="marker-list-sm marker-list-italic">
						<li><b>Price:</b> $49.95</li>
						<li><b>Your discount:</b> -20%</li>
						<li><b>Total Price:</b> $39.95</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- //Get Form Info -->
	<!--Get Form Info-->
	<div class="modal modal-info fade" id="tab2Modal">
		<div class="modal-dialog container">
			<div class="modal-content">
				<div class="modal-header">
					<div class="row">
						<div class="col-xs-9">
							<h3>Oil Change Price</h3>
						</div>
						<div class="col-xs-3">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
						</div>
					</div>
				</div>
				<div class="modal-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
					<ul class="marker-list-sm marker-list-italic">
						<li><b>Price:</b> $49.95</li>
						<li><b>Your discount:</b> -20%</li>
						<li><b>Total Price:</b> $39.95</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- //Get Form Info -->
	<!--Get Form Info-->
	<div class="modal modal-info fade" id="tab3Modal">
		<div class="modal-dialog container">
			<div class="modal-content">
				<div class="modal-header">
					<div class="row">
						<div class="col-xs-9">
							<h3>Batteries Price</h3>
						</div>
						<div class="col-xs-3">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
						</div>
					</div>
				</div>
				<div class="modal-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
					<ul class="marker-list-sm marker-list-italic">
						<li><b>Price:</b> $49.95</li>
						<li><b>Your discount:</b> -20%</li>
						<li><b>Total Price:</b> $39.95</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- //Get Form Info -->
	<!--Get Form Info-->
	<div class="modal modal-info fade" id="tab4Modal">
		<div class="modal-dialog container">
			<div class="modal-content">
				<div class="modal-header">
					<div class="row">
						<div class="col-xs-9">
							<h3>Brakes Price</h3>
						</div>
						<div class="col-xs-3">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
						</div>
					</div>
				</div>
				<div class="modal-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
					<ul class="marker-list-sm marker-list-italic">
						<li><b>Price:</b> $49.95</li>
						<li><b>Your discount:</b> -20%</li>
						<li><b>Total Price:</b> $39.95</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- //Get Form Info -->
	<!--Get Form Info-->
	<div class="modal modal-info fade" id="tab5Modal">
		<div class="modal-dialog container">
			<div class="modal-content">
				<div class="modal-header">
					<div class="row">
						<div class="col-xs-9">
							<h3>Aligment Price</h3>
						</div>
						<div class="col-xs-3">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
						</div>
					</div>
				</div>
				<div class="modal-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
					<ul class="marker-list-sm marker-list-italic">
						<li><b>Price:</b> $49.95</li>
						<li><b>Your discount:</b> -20%</li>
						<li><b>Total Price:</b> $39.95</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- //Get Form Info -->
	<!--Get Recalls-->
	<div class="modal modal-info fade" id="getRecallsModal">
		<div class="modal-dialog container">
			<div class="modal-content">
				<div class="modal-header">
					<div class="row">
						<div class="col-xs-9">
							<h3>Recalls, Investigations & Complaints</h3>
						</div>
						<div class="col-xs-3">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
						</div>
					</div>
				</div>
				<div class="modal-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
					<ul class="marker-list-sm marker-list-italic">
						<li>Lorem ipsum dolor sit amet, consectetur</li>
						<li>Repellendus alias unde tempore assumenda fugiat</li>
						<li>Blanditiis impedit repellat, quos minus dolorem autem</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- //Get Recalls -->
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
	 @if(session('success'))
<script>
Swal.fire({
    icon: 'success',
    title: 'Success',
    text: '{{ session("success") }}',
});
</script>
@endif
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
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!-- Custom JavaScripts -->
	<script src="assets/js/custom.js"></script><script src="assets/tools/tool.js"></script>
	<script src="assets/js/forms.js"></script>
</body>

</html>