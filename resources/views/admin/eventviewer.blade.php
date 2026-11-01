<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- css file -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/css/dashbord_navitaion.css') }}">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{ asset('admin/assets/css/responsive.css') }}">
<!-- Title -->
<title>car repair booking</title>
<!-- Favicon -->
<link href="{{ asset('admin/assets/images/') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="{{ asset('admin/assets/images/') }}" sizes="128x128" rel="shortcut icon" />

<!-- calendar css -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
<style>

    .fc-daygrid-event {
    overflow: hidden;
}
    .calendar-event-line {
    display: flex;
    gap: 5px;
    font-size: 11px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.calendar-event-line span {
    overflow: hidden !important;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.event-time {
    font-weight: 600;
}

.event-owner {
    font-weight: 600;
}



.fc-daygrid-event:hover {
    transform: scale(1.05);
    z-index: 999;
    overflow: visible !important;
    white-space: normal;
    background: #333 !important;
    padding: 3px 5px;
    border-radius: 4px;
    position: relative;
}
</style>

</head>
<body>
    <div class="wrapper">
        <!-- header top -->
        <div class="header_top home3_style dashbord_style dn-992">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-xl-7">
                        
                    </div>
                    <div class="col-lg-4 col-xl-5">
                        <div class="header_top_social_widgets text-center text-md-end">
                            <ul class="m0">
                                <li class="list-inline-item"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="fab fa-twitter"></span></a></li>
                              
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
        <!-- Main Header Nav -->
        <header class="header-nav menu_style_home_one home3_style dashbord_style main-menu">
            <!-- Ace Responsive Menu -->
            <nav class="posr"> 
                <div class="container-fluid"> 
                    <!-- Menu Toggle btn-->
                    <div class="menu-toggle">
                        <button type="button" id="menu-btn">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <a href="{{ route('home') }}" class="navbar_brand float-start dn-md">
                        <img class="logo1 img-fluid" style="max-width: 26%;"
                            src="{{ asset('admin/assets/images/.png') }}" 
                            alt="prestige_logo.png">
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger " style="float: right;margin-top: 14px;">
                            <i class="flaticon-logout"></i> Log Out
                        </button>
                    </form>
                </div>
            </nav>
        </header>
        <!-- Main Header Nav For Mobile -->
  <div id="page" class="stylehome1 h0">
    <div class="mobile-menu">
      <div class="header stylehome1">
        
        <div class="mobile_menu_main_logo"><img class="nav_logo_img img-fluid" 
         src="assets/images/prestige_logo_white.png" alt="prestige_logo_white.png"></div>
      </div>
    </div>
        <!-- Our Dashbord -->
	    <section class="our-dashbord dashbord bgc-f9">
	    	<div class="container-fluid">
	    		<div class="row">
	    	        <div class="col-xxl-10 offset-xxl-2 dashboard_grid_space">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="extra-dashboard-menu dn-lg">
                                    <div class="ed_menu_list">
                                        <ul>
                                           <li><a class="active" href="{{ route('dashboard') }}"><span class="flaticon-list"></span> Bookings</a></li>
                                            <li><a class="active" href="{{ route('enquiries') }}"><span class="flaticon-list"></span> Enquiries</a></li>
                                            <li><a  class="active" href="{{ route('notification') }}">
                                                    <span class="flaticon-list"></span> 
                                                    Notifications
                                                        @if($unreadNotifications > 0)
                                                            <span class="badge badge-danger ml-2">
                                                                {{ $unreadNotifications }}
                                                            </span>
                                                        @endif
                                                </a>
                                            </li>
                                            <li><a class="active" href="{{ route('book.plan') }}"><span class="flaticon-list"></span> Calendar</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
	    				@if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif 
                         <div class="row">
                           
						<div class="col-lg-12">
							<div class="dashboard_navigationbar dn db-lg mt50">
								<div class="dropdown">
									<button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
									
									<ul id="myDropdown" class="dropdown-content">
                                        <li><a class="active" href="{{ route('dashboard') }}"><span class="flaticon-list"></span> Bookings</a></li>
                                        <li><a class="active" href="{{ route('enquiries') }}"><span class="flaticon-list"></span> Enquiries</a></li>
                                        <li><a  class="active" href="{{ route('notification') }}">
                                                    <span class="flaticon-list"></span> 
                                                    Notifications
                                                        @if($unreadNotifications > 0)
                                                            <span class="badge badge-danger ml-2">
                                                                {{ $unreadNotifications }}
                                                            </span>
                                                        @endif
                                                </a>
                                            </li>
                                        <li><a class="active" href="{{ route('book.plan') }}"><span class="flaticon-list"></span> Calendar</a></li>
                                         
                                    </ul>
								</div>
							</div>
						</div>
					</div>
					    <div class="row">
						    <div class="col-xl-8">
                                <div class="col-lg-12 mb20">
                                    <div class="breadcrumb_content">
                                        <h2 class="breadcrumb_title">Booking Viewer</h2>
                                    </div>
                                </div>
						    </div>
                           
					    </div>
                        <div class="row">
                            
                            <div class="col-lg-12">
                                <div class="dashboard_favorites_contents dashboard_my_lising_tabs p10-520">
                                    <div class="row">
                                        <div class="container mt-4">
                                            <div id="calendar"></div>
                                        </div>
                                       
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
				    </div>
			    </div>
		    </div>  
	    </section>
        <a class="scrollToHome" href="#"><i class="fas fa-arrow-up"></i></a>
    </div>
    <!-- Booking Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
    
                <div class="modal-header">
                    <h5 class="modal-title" id="bookingModalLabel">Booking Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
    
                <div class="modal-body">
    
                    <p><b>Customer:</b> <span id="modal_name"></span></p>
                    <p><b>Car Reg:</b> <span id="modal_car"></span></p>
                    <p><b>Service:</b> <span id="modal_service"></span></p>
                    <p><b>Date:</b> <span id="modal_date"></span></p>
                    <p><b>Email:</b> <span id="modal_email"></span></p>
                    <p><b>Mobile:</b> <span id="modal_mobile"></span></p>
                    <p><b>Postcode:</b> <span id="modal_pc"></span></p>
    
                </div>
    
            </div>
        </div>
    </div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',

        eventDisplay: 'block',

        dayMaxEvents: true,
        
        

        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },

        events: "/admin/bookings/calendar", // route that returns JSON

        eventContent: function(arg) {

            let service = arg.event.extendedProps.service;
            let time = arg.timeText;
            let owner = arg.event.title;

            return {
                html: `
                    <div style="font-size:12px;padding:2px">
                        <span class="event-time">${time}</span>
                        <span class="event-owner">${owner}</span>
                        <span class="event-service">${service}</span>
                    </div>
                `
            };
        },
        eventClick: function(info) {

            let name = info.event.title;
            let service = info.event.extendedProps.service;
            let car = info.event.extendedProps.car;
            let email = info.event.extendedProps.email;
            let mobile = info.event.extendedProps.mobile;
            let postcode = info.event.extendedProps.postcode;
            let date = info.event.start.toLocaleDateString();
        
            document.getElementById('modal_name').innerText = name;
            document.getElementById('modal_car').innerText = car;
            document.getElementById('modal_service').innerText = service;
            document.getElementById('modal_email').innerText = email;
            document.getElementById('modal_mobile').innerText = mobile;
            document.getElementById('modal_date').innerText = date;
            document.getElementById('modal_pc').innerText = postcode;
        
            var modal = new bootstrap.Modal(document.getElementById('bookingModal'));
            modal.show();
        }
        
        

    });

    calendar.render();
});
</script>


    <!-- Wrapper End -->
    <script src="{{ asset('admin/assets/js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('admin/assets/js/jquery.mmenu.all.js') }}"></script>
    <script src="{{ asset('admin/assets/js/ace-responsive-menu.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/snackbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/simplebar.js') }}"></script>
    <script src="{{ asset('admin/assets/js/parallax.js') }}"></script>
    <script src="{{ asset('admin/assets/js/scrollto.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery-scrolltofixed-min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.counterup.js') }}"></script>
    <script src="{{ asset('admin/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/progressbar.js') }}"></script>
    <script src="{{ asset('admin/assets/js/slider.js') }}"></script>
    <script src="{{ asset('admin/assets/js/timepicker.js') }}"></script>
    <script src="{{ asset('admin/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/dashboard-script.js') }}"></script>
    <!-- Custom script for all pages --> 
    <script src="{{ asset('admin/assets/js/script.js') }}"></script>

    <!-- calendar js -->

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

</body>
</html>