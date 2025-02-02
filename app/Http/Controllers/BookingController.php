<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking; // Ensure the path is correct
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomerBookingMail;
use App\Mail\AdminBookingMail;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;

class BookingController extends Controller
{
    function allBookings(Request $request)
    {
        // dd($request);
        $bookings = Booking::all();
        // dd($bookings);
        return Datatables::of($bookings)
            ->addIndexColumn()
            ->addColumn('name', function ($row) {
                $btn = $row->firstName . ' ' . $row->lastName;
                return $btn;
            })
            ->addColumn('booking_status', function ($row) {
                $btn = $row->booking_status;
                return $btn;
            })
            ->addColumn('created_at', function ($row) {
                $btn = $row->created_at->format('Y-m-d H:i');
                return $btn;
            })
            ->addColumn('action', function ($row) {
                // <li><a type="button"data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="reason('.$row->id.')" class="dropdown-item">Approve</a></li>
                $btn = '<div class="d-inline-block">
              <a href="javascript:;" class="btn btn-sm btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-md"></i></a>
              <ul class="dropdown-menu dropdown-menu-end m-0">
              <li><a href="/admin/appointment-list/detail/' . $row->id . '" class="dropdown-item">Details</a></li>
              <div class="dropdown-divider"></div>
              <li><a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a></li>
              </ul>
              </div>';
                // $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    function details($id)
    {
        // dd($id);
        $booking = Booking::where('id', $id)->first();
        return view('components.booking.booking-detail', compact('booking'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('components.booking.booking');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Handle the request data
        try {
            // dd($request);
            // Validate the incoming request
            $validated = $request->validate([
                'firstName' => 'required|string',
                'lastName' => 'required|string',
                'email' => 'required|email',
                'contact' => 'required|string',
                'propertyType' => 'required|string',
                'zipCode' => 'required|integer',
                'country' => 'required|string',
                'state' => 'required|string',
                'website' => 'nullable|string',
                'businessName' => 'nullable|string',
                'address' => 'nullable|string',
                'status' => 'nullable|string',
                'otherCharges' => 'nullable',

            ]);
            $arr = $request->all();
            $oldLatestBooking = Booking::latest()->first();
            if ($oldLatestBooking) {
                $arr['booking_id'] = 'WI-' . sprintf('%04d', $oldLatestBooking->id);
            } else {
                $arr['booking_id'] = 'WI-' . sprintf('%04d', 1);
            }
            // Create a new booking entry
            $booking = Booking::create($arr);


            $email = $validated['email']; // customer's email address


            // Send email to customer with booking details

            Mail::to($email)->send(new CustomerBookingMail($booking));


            // Send email to admin with booking details
            Mail::to('manibahi321@gmail.com')->send(new AdminBookingMail($booking));
            Mail::to('info@weincentivize.com')->send(new AdminBookingMail($booking));
            $dateTime = $booking->selectedDate . ' ' . $booking->selectedTime;
            return response()->json([
                'success' => true,
                'bookingId' => $booking->booking_id,
                'serviceName' => $booking->propertyType,
                'dateTime' => Carbon::parse($dateTime)->format('D - M d Y - h:ia'), // or any relevant date/time
                'location' => $booking->address,
                'contactPerson' => $booking->firstName . ' ' . $booking->lastName,
                'contactNumber' => $booking->contact,
            ]);
        } catch (\Exception $e) {
            // Handle exceptions
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function existingBooking($id)
    {
        // dd($id);
        $booking = Booking::where('booking_id', 'WI-' . $id)->first();
        return response()->json(['data' => $booking]);
    }
}
