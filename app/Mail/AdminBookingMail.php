<?php

namespace App\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminBookingMail extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;

    public function __construct($booking)
    {
        $this->booking = $booking;
    }

    public function build()
{
    // Retrieve booking details
    $bookingId = $this->booking->booking_id;
    $serviceName = $this->booking->propertyType;

    // Concatenate selectedDate and selectedTime from the database
    $dateTime = $this->booking->selectedDate . ' ' . $this->booking->selectedTime;

    // Additional data
    $location = $this->booking->address;
    $contactPerson = $this->booking->firstName . ' ' . $this->booking->lastName;
    $contactNumber = $this->booking->contact;

    // Build the email
    return $this->subject('New Booking Appointment')->view('components.email.adminEmail')

        ->with([
            'bookingId' => $bookingId,
            'serviceName' => $serviceName,
            'dateTime' => Carbon::parse($dateTime)->format('D - M d Y - h:ia'),
            'location' => $location,
            'contactPerson' => $contactPerson,
            'contactNumber' => $contactNumber,
        ]);
}

}
