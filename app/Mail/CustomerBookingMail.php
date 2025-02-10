<?php

namespace App\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomerBookingMail extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;

    public function __construct($booking)
    {
        $this->booking = $booking;
    }

    public function build()
    {
        // Retrieve required details
        $booking = $this->booking;
        $contactPerson = $this->booking->first_name . ' ' . $this->booking->last_name;

        // Retrieve booking details
        $bookingId = $this->booking->booking_id;
        $serviceName = $this->booking->propertyType;

        // Concatenate selectedDate and selectedTime from the database
        $dateTime = $this->booking->selectedDate . ' ' . $this->booking->selectedTime;

        // Additional data
        $location = $this->booking->address;
        $contactPerson = $this->booking->first_name . ' ' . $this->booking->last_name;
        $contactNumber = $this->booking->contact;

        // Build the email
        return $this->subject('Appointment Booking Received - Awaiting Confirmation')->view('components.email.customerEmail')
            ->with([
                'booking' => $booking,
                'contactPerson' => $contactPerson,
                'bookingId' => $bookingId,
                'dateTime' => Carbon::parse($booking->booking_date)->format('M d Y') . ' ' . Carbon::createFromFormat('H:i:s', $booking->start_time)->format('h:i A') . ' - to - ' . Carbon::createFromFormat('H:i:s', $booking->end_time)->format('h:i A'),
                'contactNumber' => $contactNumber,
            ]);
    }
}
