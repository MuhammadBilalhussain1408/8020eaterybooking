@extends('layouts.master')
@section('content')
    <style>
        .form-label, .col-form-label {
            color: #000000;
            font-size: 18px;
            font-weight: 500;
        }

        .form-control {
            font-size: 19px;
            font-weight: 600;
            padding: 11px 10px 11px 10px;
        }

        .form-control {
            font-size: 17px;
            font-weight: 600;
            padding: 7px 10px 7px 10px;
            color: black;
        }
    </style>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

        @include('include.menu')

        <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

            @include('include.nav')

            <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="app-ecommerce">
                            <!-- Add Product -->
                            <div
                                class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">
                                <div class="d-flex flex-column justify-content-center">
                                    <h4 class="card-tile mb-0 fw-bold text-uppercase">Appointment Details</h4>
                                    <p class="mb-0 fw-medium text-capitalize" style="color: #058283;">{{$booking->firstName}} {{$booking->lastName}} Appointment
                                        Details</p>
                                </div>
                                <div class="d-flex align-content-center flex-wrap gap-4">
                                    <div class="btn-group" id="dropdown-icon-demo">
                                        <button
                                            type="button"
                                            class="btn btn-green dropdown-toggle"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="ti ti-menu-2 ti-xs me-1"></i> Action
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="javascript:void(0);"
                                                   class="dropdown-item d-flex align-items-center"
                                                ><i class="ti ti-chevron-right scaleX-n1-rtl"></i>Approved</a
                                                >
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"
                                                   class="dropdown-item d-flex align-items-center"
                                                ><i class="ti ti-chevron-right scaleX-n1-rtl"></i>Canceled</a
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- First column-->
                                <div class="col-12 col-lg-12">
                                    <!-- Product Information -->
                                    <div class="card mb-6">
                                        <div class="card-body row">

                                            <div class="table-responsive pt-10 pb-10">
                                                <table class="table table-bordered"
                                                       style="text-align: left; border-color: #b3b3b3;">
                                                    <tbody class="table-border-bottom-0">
                                                        <tr>
                                                            <td>
                                                                <span class="fw-bold" style="font-weight: bold; color: black; font-size: 20px; width: 25%;">
                                                                    Appointment ID
                                                                </span>
                                                            </td>
                                                            <td style="font-size: 20px; color: black; font-weight: 400; width: 75%;">
                                                                <span id="bookingId">
                                                                    {{$booking->booking_id}}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-bold" style="font-weight: bold; color: black; font-size: 20px; width: 25%;">
                                                                    Date
                                                                </span>
                                                            </td>
                                                            <td style="font-size: 20px; color: black; font-weight: 400; width: 75%;">
                                                                <span id="bookingId">
                                                                    {{$booking->selectedDate}}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-bold" style="font-weight: bold; color: black; font-size: 20px; width: 25%;">
                                                                    Time
                                                                </span>
                                                            </td>
                                                            <td style="font-size: 20px; color: black; font-weight: 400; width: 75%;">
                                                                <span id="bookingId">
                                                                    {{$booking->selectedTime}}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-bold" style="font-weight: bold; color: black; font-size: 20px; width: 25%;">
                                                                    TimeZone
                                                                </span>
                                                            </td>
                                                            <td style="font-size: 20px; color: black; font-weight: 400; width: 75%;">
                                                                <span id="bookingId">

                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-bold" style="font-weight: bold; color: black; font-size: 20px; width: 25%;">
                                                                    Customer Type
                                                                </span>
                                                            </td>
                                                            <td style="font-size: 20px; color: black; font-weight: 400; width: 75%;">
                                                                <span id="bookingId">
                                                                    {{$booking->plPropertySaleRent}}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-bold" style="font-weight: bold; color: black; font-size: 20px; width: 25%;">
                                                                    First Name
                                                                </span>
                                                            </td>
                                                            <td style="font-size: 20px; color: black; font-weight: 400; width: 75%;">
                                                                <span id="bookingId">
                                                                    {{$booking->firstName}}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-bold" style="font-weight: bold; color: black; font-size: 20px; width: 25%;">
                                                                    Last Name
                                                                </span>
                                                            </td>
                                                            <td style="font-size: 20px; color: black; font-weight: 400; width: 75%;">
                                                                <span id="bookingId">
                                                                    {{$booking->lastName}}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-bold" style="font-weight: bold; color: black; font-size: 20px; width: 25%;">
                                                                    Email
                                                                </span>
                                                            </td>
                                                            <td style="font-size: 20px; color: black; font-weight: 400; width: 75%;">
                                                                <span id="bookingId">
                                                                    {{$booking->email}}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-bold" style="font-weight: bold; color: black; font-size: 20px; width: 25%;">
                                                                    Contact
                                                                </span>
                                                            </td>
                                                            <td style="font-size: 20px; color: black; font-weight: 400; width: 75%;">
                                                                <span id="bookingId">
                                                                    {{$booking->contact}}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-bold" style="font-weight: bold; color: black; font-size: 20px; width: 25%;">
                                                                    Service Type
                                                                </span>
                                                            </td>
                                                            <td style="font-size: 20px; color: black; font-weight: 400; width: 75%;">
                                                                <span id="bookingId">
                                                                    {{$booking->propertyType}}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-bold" style="font-weight: bold; color: black; font-size: 20px; width: 25%;">
                                                                    Service Type
                                                                </span>
                                                            </td>
                                                            <td style="font-size: 20px; color: black; font-weight: 400; width: 75%;">
                                                                <span id="bookingId">
                                                                    {{$booking->propertyType}}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-bold" style="font-weight: bold; color: black; font-size: 20px; width: 25%;">
                                                                    Zip Code
                                                                </span>
                                                            </td>
                                                            <td style="font-size: 20px; color: black; font-weight: 400; width: 75%;">
                                                                <span id="bookingId">
                                                                    {{$booking->zipCode}}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-bold" style="font-weight: bold; color: black; font-size: 20px; width: 25%;">
                                                                    Country
                                                                </span>
                                                            </td>
                                                            <td style="font-size: 20px; color: black; font-weight: 400; width: 75%;">
                                                                <span id="bookingId">
                                                                    {{$booking->country}}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-bold" style="font-weight: bold; color: black; font-size: 20px; width: 25%;">
                                                                    State
                                                                </span>
                                                            </td>
                                                            <td style="font-size: 20px; color: black; font-weight: 400; width: 75%;">
                                                                <span id="bookingId">
                                                                    {{$booking->state}}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-bold" style="font-weight: bold; color: black; font-size: 20px; width: 25%;">
                                                                    Current Website or Social Media Page
                                                                </span>
                                                            </td>
                                                            <td style="font-size: 20px; color: black; font-weight: 400; width: 75%;">
                                                                <span id="bookingId">
                                                                    {{$booking->website}}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-bold" style="font-weight: bold; color: black; font-size: 20px; width: 25%;">
                                                                    Name Of Business or Brand
                                                                </span>
                                                            </td>
                                                            <td style="font-size: 20px; color: black; font-weight: 400; width: 75%;">
                                                                <span id="bookingId">
                                                                    {{$booking->businessName}}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-bold" style="font-weight: bold; color: black; font-size: 20px; width: 25%;">
                                                                    Address
                                                                </span>
                                                            </td>
                                                            <td style="font-size: 20px; color: black; font-weight: 400; width: 75%;">
                                                                <span id="bookingId">
                                                                    {{$booking->address}}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="fw-bold" style="font-weight: bold; color: black; font-size: 20px; width: 25%;">
                                                                    Are You Looking To
                                                                </span>
                                                            </td>
                                                            <td style="font-size: 20px; color: black; font-weight: 400; width: 75%;">
                                                                <span id="bookingId">
                                                                    {{$booking->status}}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>


                                        </div>
                                    </div>
                                    <!-- /Product Information -->
                                </div>
                                <!-- /First column -->

                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                </div>
                <!-- Content wrapper -->

            </div>

            <!-- / Layout page -->

        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

@endsection
