<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Booking;
use App\Models\Enquiry;

class AdminController extends Controller
{

    public function showLoginForm(){
         
        return view('admin.login-form'); 
    }

    // Handle login action
    public function login(Request $request){
        
        // Validate input
        $credentials = $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        // Find user by name
        $user = User::where('name', $credentials['name'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            // Login the user
            Auth::login($user);
            

            // Redirect after login
            return redirect()->route('dashboard')->with('success', 'Login successful!');
        }

        // If credentials invalid
        return back()->withErrors(['error' => 'Invalid username or password.']);
    }
    
    public function logout(Request $request){
        
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Logged out successfully!');
    }
    public function dashboard(){
        $bookings = Booking::latest()->paginate(10);
        return view('admin.dashboard',compact('bookings'));
    }
    public function enquiries(){
        $enquiries = Enquiry::latest()->paginate(10);
        return view('admin.enquiries-view',compact('enquiries'));
    }

    public function notification()
    {
        $notifications = DB::table('notifications')
            ->orderBy('created_at','desc')->whereNull('read_at')
            ->get();
        $unreadNotifications = DB::table('notifications')
            ->whereNull('read_at')
            ->count(); 
    
        $bookingNotifications = $notifications->filter(function ($notification) {
            $data = json_decode($notification->data);
            return isset($data->type) && $data->type == 'booking';
        });
    
        $enquiryNotifications = $notifications->filter(function ($notification) {
            $data = json_decode($notification->data);
            return isset($data->type) && $data->type == 'enquiry';
        });
    
        return view('admin.notification', compact('bookingNotifications','enquiryNotifications','unreadNotifications'));
    }
    public function bookPlan(){
        return view('admin.eventviewer');
    }


    public function calendar(Request $request)
    {
        $bookings = Booking::all();
    
        $events = [];
    
        foreach ($bookings as $booking) {
        
            $services = $booking->services ?? [];
            $color = '#3788d8';
        
            if(in_array('MOT', $services)){
                $color = '#dc3545';
            }
    
            if(in_array('Full Service', $services)){
                $color = '#28a745';
            }
    
            $events[] = [
                'title' => $booking->name,
                'start' => $booking->booking_date,
                'backgroundColor' => $color,
                'borderColor' => $color,
                'extendedProps' => [
                    'service' => implode(', ', $services),
                    'car' => $booking->car_reg,
                    'email' => $booking->email,
                    'mobile' => $booking->mobile,
                    'postcode' => $booking->postcode
                ]
            ];
        }
    
        return response()->json($events);
    }

    public function markAsRead($id){

        DB::table('notifications')
            ->where('id', $id)
            ->update([
                'read_at' => now()
            ]);
    
        return back()->with('success', 'Notification marked as read successfully.');
    }




}
