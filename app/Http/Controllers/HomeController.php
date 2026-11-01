<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use App\Models\Booking;
use App\Models\Enquiry;
use App\Models\User;
use App\Mail\AdminNotifyMail;
use App\Mail\AdminEnquiryMailView;
use App\Mail\UserReplyMail;
use App\Notifications\AdminDashboardNotification;
use App\Notifications\EnquiryNotification;
class HomeController extends Controller
{
    public function home(){
        return view('frontend.index');
    }
    public function contact(){
        return view('frontend.contact');
    }

    public function storeBooking(Request $request){
        $bookingData = $request->validate([
            'car_reg' => 'required|string|max:20',
            'postcode' => 'required|string|max:10',
            'email' => 'required|email',
            'services' => 'required|array|min:1',
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:20',
            'booking_date' => 'required|date',
            'pickup_postcode' => 'required|string|max:10',
        ]);

        $booking = Booking::create([
            'car_reg' => $request->car_reg,
            'postcode' => $request->postcode,
            'email' => $request->email,
            'services' => $request->services,
            'name' => $request->name,
            'mobile' => $request->mobile,
            'booking_date' => $request->booking_date,
            'pickup_postcode' => $request->pickup_postcode,
        ]);

        
        Mail::to('saheedkp1234@gmail.com')->send(new AdminNotifyMail($booking));
        Mail::to($booking->email)->send(new UserReplyMail($booking));
        $admin = User::first();
        Notification::send($admin,new AdminDashboardNotification($booking));
        return back()->with('success', 'Booking submitted successfully!');



    }

    public function serviceEnquiry(Request $request){
         $enquiryData = $request->validate([
            'service' => 'required|string',
            'year' => 'nullable|string',
            'make' => 'nullable|string',
            'model' => 'nullable|string',
            'submodel' => 'nullable|string',
            'registration' => 'nullable|string',
            'mileage' => 'nullable|string',
        ]);

        $enquiry = Enquiry::create([
            'service' => $request->service,
            'year' => $request->year,
            'make' => $request->make,
            'model' => $request->model,
            'submodel' => $request->submodel,
            'registration' => $request->registration,
            'mileage' => $request->mileage,
        ]);

         Mail::to('saheedkp1234@gmail.com')->send(new AdminEnquiryMailView($enquiry));
          $admin = User::first();
        Notification::send($admin,new EnquiryNotification($enquiry));

        return redirect()->back()->with('success','Booking Submitted Successfully');
    }
}
