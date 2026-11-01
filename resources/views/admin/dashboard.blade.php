<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
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

</head>
<style>
    .badge{
    padding:4px 8px;
    border-radius:4px;
    font-size:12px;
    color:#fff;
}

.bg-success{
    background:#28a745;
}

.bg-danger{
    background:#dc3545;
}
</style>
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
                                        <h2 class="breadcrumb_title">Booking Listing</h2>
                                    </div>
                                </div>
						    </div>
                            <div class="col-12 col-md-4 col-xl-4 text-md-end">
                                
                            </div>
					    </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="dashboard_favorites_contents dashboard_my_lising_tabs p10-520">
                                    <div class="row">
                                        <div class="col-lg-12"></div>
                                        <!-- Tab panes -->
                                        <div class="col-lg-12 mt20">
                                            <div class="tab-content row" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                    <div class="col-lg-12">
                                                        <div class="table-responsive my_lisging_table">
                                                            <table class="table">
                                                                <thead class="table-light">
                                                                    <tr class="thead_row">
                                                                        <th class="thead_title" scope="col">Sl No</th>
                                                                        <th class="thead_title pl20" scope="col">Name</th>
                                                                        <th class="thead_title" scope="col">Registration</th>
                                                                        <th class="thead_title" scope="col">Postcode</th>
                                                                        <th class="thead_title" scope="col">Email</th>
                                                                        <th class="thead_title" scope="col">Mobile</th>
                                                                        <th class="thead_title" scope="col">Services</th>
                                                                        <th class="thead_title" scope="col">Service Date</th>
                                                                        <th class="thead_title" scope="col">Pickup postcode</th>
                                                                        <th class="thead_title" scope="col">Created Date</th>
                                                                    </tr>
                                                                </thead>
                                                            
                                                                <tbody>
                                                                    @foreach ($bookings as $index=>$booking)
                                                                        <tr>
                                                                            <td>{{ ($bookings->currentPage() - 1) * $bookings->perPage() + $index + 1 }}</td>
                                                                            <td class="align-middle">{{ $booking->name }}</td>
                                                                            <td class="align-middle">{{ $booking->car_reg }}</td>
                                                                            <td class="align-middle">{{ $booking->postcode }}</td>
                                                                            <td class="align-middle">{{ $booking->email }}</td>
                                                                            <td class="align-middle">{{ $booking->mobile }}</td>
                                                                            <td>
                                                                               @foreach($booking->services as $service)
                                                                                   @php
                                                                                       $serviceClass = match($service) {
                                                                                           'Full Service' => 'badge bg-success',
                                                                                           'MOT' => 'badge bg-danger',
                                                                                           default => 'badge bg-secondary'
                                                                                       };
                                                                                   @endphp
                                                                           
                                                                                   <span class="{{ $serviceClass }}">{{ ucfirst($service) }}</span>
                                                                               @endforeach
                                                                            </td>
                                                            
                                                                            <td class="align-middle">{{ $booking->booking_date ? $booking->booking_date->format('d M Y') : 'N/A' }}</td>
                                                                            <td class="align-middle">{{ $booking->pickup_postcode }}</td>
                                                                            <td class="align-middle">{{ $booking->created_at ? $booking->created_at->format('d M Y') : 'N/A' }}</td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="mbp_pagination mt10">
                                                        {{-- Laravel pagination links --}}
                                                            <div class="d-flex justify-content-center">
                                                                 {{ $bookings->links('pagination::bootstrap-4')}}
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