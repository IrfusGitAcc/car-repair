<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AdminDashboardNotification extends Notification
{
    use Queueable;

    public $booking;
    public function __construct($booking)
    {
        $this->booking = $booking;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    
    public function toArray(object $notifiable): array
    {
        
        return [

            'type' => 'booking',
            'car_reg' => $this->booking->car_reg,
            'name' => $this->booking->name,
            'email' => $this->booking->email,
            'mobile' => $this->booking->mobile,
            'booking_date' => $this->booking->booking_date,
            'pickup_postcode' => $this->booking->pickup_postcode,
            'services' => $this->booking->services,
            'created_at'=> $this->booking->created_at,
            'message' => 'New MOT/Service booking received'
        ];
    }
    
}
