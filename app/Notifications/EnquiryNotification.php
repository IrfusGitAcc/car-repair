<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class EnquiryNotification extends Notification
{
    use Queueable;

    public $enquiry;

    public function __construct($enquiry)
    {
        $this->enquiry = $enquiry;
    }

    public function via(object $notifiable): array
    {
        return ['database'];
    }

    public function toArray(object $notifiable): array
    {
        return [
            'type' => 'enquiry',
            'registration' => $this->enquiry->registration,
            'make' => $this->enquiry->make,
            'year' => $this->enquiry->year,
            'model' => $this->enquiry->model,
            'submodel' => $this->enquiry->submodel,
            'service' => $this->enquiry->service,
            'created_at'=> $this->enquiry->created_at,
            'message' => 'New Service enquiry received'
        ];
    }
}