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
    public function getSelectedDateBooking(Request $request)
    {
        $selectedDate = Carbon::parse($request->booking_date);
        $start_time = $request->start_time;
        $end_time = $request->end_time;
        $podCastBooking = Booking::whereDate('booking_date', $selectedDate)
        // ->where('start_time', $start_time)->where('end_time', $end_time)
        ->where('booking_room', 'Podcastroom')->first();
        $conferenceBooking = Booking::whereDate('booking_date', $selectedDate)
        // ->where('start_time', $start_time)->where('end_time', $end_time)
        ->where('booking_room', 'Conferenceroom')->first();
        $podCastRoomRemainingTime = 0;
        $podCastRoomRemainingTimeSec = 0;
        $conferenceroomRoomRemainingTime = 0;
        $conferenceroomRoomRemainingTimeSec = 0;
        if ($podCastBooking) {
            $startTime = Carbon::createFromFormat('H:i:s', $podCastBooking->start_time);
            $endTime = Carbon::createFromFormat('H:i:s', $podCastBooking->end_time);
            $currentTime = Carbon::now()->format('H:i:s'); // Get current time
            $current = Carbon::createFromFormat('H:i:s', $currentTime);
            if ($current->lt($endTime)) {
                $podCastRoomRemainingTime = $current->diffInMinutes($endTime);
                $podCastRoomRemainingTimeSec = $current->diffInSeconds($endTime);
            }
        }
        if ($conferenceBooking) {
            $startTime = Carbon::createFromFormat('H:i:s', $conferenceBooking->start_time);
            $endTime = Carbon::createFromFormat('H:i:s', $conferenceBooking->end_time);
            $currentTime = Carbon::now()->format('H:i:s'); // Get current time
            $current = Carbon::createFromFormat('H:i:s', $currentTime);
            if ($current->lt($endTime)) {
                $conferenceroomRoomRemainingTime = $current->diffInMinutes($endTime);
                $conferenceroomRoomRemainingTimeSec = $current->diffInSeconds($endTime);
            }
            // dd($podCastBooking, $conferenceBooking, $current, $current->lt($endTime), $endTime->diffInMinutes($current));
        }

        return response()->json([
            'cRemainingTime' => $conferenceroomRoomRemainingTime,
            'cRemainingTimeSec' => $conferenceroomRoomRemainingTimeSec,
            'pRemainingTime' => $podCastRoomRemainingTime,
            'pRemainingTimeSec' => $podCastRoomRemainingTimeSec
        ]);
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
            $arr = $request->all();
            $arr['booking_date'] = Carbon::parse($request->booking_date);
            $oldLatestBooking = Booking::latest()->first();
            if ($oldLatestBooking) {
                $arr['booking_id'] = 'ETRY-' . sprintf('%04d', $oldLatestBooking->id);
            } else {
                $arr['booking_id'] = 'ETRY-' . sprintf('%04d', 1);
            }
            // Create a new booking entry
            $booking = Booking::create($arr);
            // dd($booking);
            Mail::to($booking->email)->send(new CustomerBookingMail($booking));

            // // Send email to admin with booking details
            Mail::to('manibahi321@gmail.com')->send(new AdminBookingMail($booking));
            Mail::to('info@8020eatery.com')->send(new AdminBookingMail($booking));
            // $dateTime = $booking->selectedDate . ' ' . $booking->selectedTime;
            return response()->json([
                'success' => true,
                'bookingId' => $booking->booking_id,
                'dateTime' => Carbon::parse($booking->booking_date)->format('M d Y') . ' ' . Carbon::createFromFormat('H:i:s', $booking->start_time)->format('h:i A') . ' - to - ' . Carbon::createFromFormat('H:i:s', $booking->end_time)->format('h:i A'), // or any relevant date/time
                'contactPerson' => $booking->first_name . ' ' . $booking->last_name,
                'contactNumber' => $booking->contact,
                'contactEmail' => $booking->email,
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
