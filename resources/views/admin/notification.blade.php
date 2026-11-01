<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- css file -->
<link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/css/dashbord_navitaion.css') }}">
<!-- Add Font Awesome if not already included -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{ asset('admin/assets/css/responsive.css') }}">
<!-- Title -->
<title>car repair booking</title>
<!-- Favicon -->
<link href="{{ asset('admin/assets/images/') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="{{ asset('admin/assets/images/') }}" sizes="128x128" rel="shortcut icon" />

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
                                        <h2 class="breadcrumb_title">Notification</h2>
                                    </div>
                                </div>
						    </div>
                           
					    </div>
                        <div class="row">
                            
                            <div class="col-lg-12">
                                <div class="dashboard_favorites_contents dashboard_my_lising_tabs p10-520">
                                    <div class="row">
                                       
                                        <!-- Tab panes -->
                                        <div class="col-lg-12 mt20">
                                            <div class="tab-content row" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                     
                                                    <div class="row">
                                                        <!-- Booking Notifications Column -->
                                                        <div class="col-lg-6">
                                                            <div class="card mb-4">
                                                                <div class="card-header  bg-secondary text-black">
                                                                    <h5 class="mb-0">Booking Notifications</h5>
                                                                </div>
                                                                <div class="card-body">
                                                                    @if ($bookingNotifications->isNotEmpty())
                                                                        @foreach ($bookingNotifications as $notification) 
                                                                            @php
                                                                                $notify = json_decode($notification->data);
                                                                            @endphp
                                                                            
                                                                            <div class="notification-wrapper mb-4 p-3 border rounded">
                                                                                <p class="font-weight-bold">Hi Admin,</p>
                                                                                <p class="header text-black">You have received a new booking enquiry.</p>
                                                                                
                                                                                <div class="table-responsive">
                                                                                    <table class="table table-bordered table-striped table-hover">
                                                                                        <thead class="thead-light">
                                                                                            <tr>
                                                                                                <th width="30%">Field</th>
                                                                                                <th width="70%">Details</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>Name</td>
                                                                                                <td>{{ $notify->name ?? 'N/A' }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Email</td>
                                                                                                <td>{{ $notify->email ?? 'N/A' }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Phone</td>
                                                                                                <td>{{ $notify->mobile ?? 'N/A' }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Postcode</td>
                                                                                                <td>{{ $notify->pickup_postcode ?? 'N/A' }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Services</td>
                                                                                                <td>
                                                                                                    @if(!empty($notify->services))
                                                                                                        {{ implode(', ', (array)$notify->services) }}
                                                                                                    @else
                                                                                                        N/A
                                                                                                    @endif
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Message</td>
                                                                                                <td>{{ $notify->message ?? 'N/A' }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Booking Date</td>
                                                                                                <td>{{ $notify->booking_date ?? 'N/A' }}</td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                                
                                                                                <p class="mt-3">Thank you.</p>
                                                                                
                                                                                <div class="text-right">
                                                                                    <form method="POST" action="{{ route('admin.notification.read', $notification->id) }}" class="d-inline">
                                                                                        @csrf
                                                                                        <input type="hidden" name="id" value="{{ $notification->id }}">
                                                                                        <button type="submit" class="btn btn-sm btn-success">
                                                                                            <i class="fas fa-check"></i> Mark As Read
                                                                                        </button>
                                                                                    </form>
                                                                                </div>
                                                                                
                                                                                @if(!$loop->last)
                                                                                    <hr class="my-4">
                                                                                @endif
                                                                            </div>
                                                                        @endforeach
                                                                    @else
                                                                        <div class="alert alert-info mb-0">
                                                                            No new booking enquiries.
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Enquiry Notifications Column -->
                                                        <div class="col-lg-6">
                                                            <div class="card mb-4">
                                                                <div class="card-header bg-secondary text-black">
                                                                    <h5 class="mb-0">Enquiry Notifications</h5>
                                                                </div>
                                                                <div class="card-body">
                                                                    @if ($enquiryNotifications->isNotEmpty())
                                                                        @foreach ($enquiryNotifications as $notification) 
                                                                            @php
                                                                                $enquiry = json_decode($notification->data);
                                                                            @endphp
                                                                            
                                                                            <div class="notification-wrapper mb-4 p-3 border rounded">
                                                                                <p class="font-weight-bold">Hi Admin,</p>
                                                                                <p class="header text-black">You have received a new enquiry.</p>
                                                                                
                                                                                <div class="table-responsive">
                                                                                    <table class="table table-bordered table-striped table-hover">
                                                                                        <thead class="thead-light">
                                                                                            <tr>
                                                                                                <th width="30%">Field</th>
                                                                                                <th width="70%">Details</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>Make</td>
                                                                                                <td>{{ $enquiry->make ?? 'N/A' }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Registration</td>
                                                                                                <td>{{ $enquiry->registration ?? 'N/A' }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Year</td>
                                                                                                <td>{{ $enquiry->year ?? 'N/A' }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Model</td>
                                                                                                <td>{{ $enquiry->model ?? 'N/A' }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Submodel</td>
                                                                                                <td>{{ $enquiry->submodel ?? 'N/A' }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Service</td>
                                                                                                <td>{{ $enquiry->service ?? 'N/A' }}</td>
                                                                                            </tr>
                                                                                            @if(isset($enquiry->message))
                                                                                            <tr>
                                                                                                <td>Message</td>
                                                                                                <td>{{ $enquiry->message }}</td>
                                                                                            </tr>
                                                                                            @endif
                                                                                            @if(isset($enquiry->created_at))
                                                                                            <tr>
                                                                                                <td>Received</td>
                                                                                                <td>{{ \Carbon\Carbon::parse($enquiry->created_at)->format('d M Y H:i') }}</td>
                                                                                            </tr>
                                                                                            @endif
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                                
                                                                                <p class="mt-3">Thank you.</p>
                                                                                
                                                                                <div class="text-right">
                                                                                    <form method="POST" action="{{ route('admin.notification.read', $notification->id) }}" class="d-inline">
                                                                                        @csrf
                                                                                        <input type="hidden" name="id" value="{{ $notification->id }}">
                                                                                        <button type="submit" class="btn btn-sm btn-success">
                                                                                            <i class="fas fa-check"></i> Mark As Read
                                                                                        </button>
                                                                                    </form>
                                                                                </div>
                                                                                
                                                                                @if(!$loop->last)
                                                                                    <hr class="my-4">
                                                                                @endif
                                                                            </div>
                                                                        @endforeach
                                                                    @else
                                                                        <div class="alert alert-info mb-0">
                                                                            No new enquiries.
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
    <!-- Add Car Modal -->
<div class="modal fade" id="addCarModal" tabindex="-1" aria-labelledby="addCarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCarModalLabel">Add New </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               
            </div>
        </div>
    </div>
</div>
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
</body>
</html>