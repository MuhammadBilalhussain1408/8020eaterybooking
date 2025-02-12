<!doctype html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
    data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-no-customizer"
    data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Appointment Booking | 80/20 Eatery</title>

    <meta name="description" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/tabler-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->

    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/@form-validation/form-validation.css') }}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/toastr/toastr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/spinkit/spinkit.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
    @include('components.booking.style')
</head>

<body>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- Layout container -->
            <div class="layout-page" style="padding-top: 0 !important;">

                <!-- Page Loader -->
                <div id="page-loader1"></div>
                <!-- Page Loader -->

                <!-- Content wrapper -->
                <div class="content-wrapper">

                    <!-- / Content -->

                    <div class="container-xxl flex-grow-1 container-p-y d-none" id="appointmentSec">
                        <div class="ribbon">
                            BOOK AN APPOINTMENT
                        </div>

                        <!-- Property Listing Wizard -->
                        <div class="d-none" id="loader">
                            <div class="d-flex justify-content-center text-center">
                                <div class="row py-sm-6 gy-3 gy-sm-0 position-absolute">
                                    <div class="col">
                                        <!-- Plane -->
                                        <div class="sk-plane sk-primary" style="width: 100px; height: 100px;"></div>
                                        <span>Loading...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="wizard-property-listing" class="bs-stepper vertical mt-2 d-none">

                            <div class="bs-stepper-header border-end">
                                <a href="javascript:void(0);" class="app-brand-link">
                                    <img src="{{ asset('assets/logo/logo.png') }}" width="150">
                                </a>
                                <h4 class="text-center m-0 pt-5 text-uppercase" style="font-weight: bold;">Visit Us
                                    Online At:</h4>
                                <a class="text-center" href="http://8020eatery.com/">
                                    <h5>www.8020eatery.com</h5>
                                </a>
                                <div class="step" data-target="#personal-details">
                                    <button type="button" class="step-trigger">
                                        <span class="bs-stepper-circle"><i class="fa-solid fa-calendar-days"></i></span>
                                        <span class="bs-stepper-label">
                                            <span class="bs-stepper-title">Calendar</span>
                                        </span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#time-zone">
                                    <button type="button" class="step-trigger">
                                        <span class="bs-stepper-circle"><i class="fa-solid fa-clock"></i></span>
                                        <span class="bs-stepper-label">
                                            <span class="bs-stepper-title">Time</span>
                                        </span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#property-details">
                                    <button type="button" class="step-trigger">
                                        <span class="bs-stepper-circle"><i class="fa-solid fa-globe"></i></span>
                                        <span class="bs-stepper-label">
                                            <span class="bs-stepper-title">Room Selection</span>
                                        </span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#property-features">
                                    <button type="button" class="step-trigger">
                                        <span class="bs-stepper-circle"><i class="fa-solid fa-file-pen"></i></span>
                                        <span class="bs-stepper-label">
                                            <span class="bs-stepper-title">Enter Details</span>
                                        </span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#price-details">
                                    <button type="button" class="step-trigger">
                                        <span class="bs-stepper-circle">
                                            <i class="fa-solid fa-square-check"></i></span>
                                        <span class="bs-stepper-label">
                                            <span class="bs-stepper-title">Booking Confirmation</span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="bs-stepper-content">
                                <form id="wizard-property-listing-form" onSubmit="return false">
                                    @csrf
                                    <!-- Calendar -->
                                    <div id="personal-details" class="content">
                                        <div class="row g-6">

                                            <div class="calendar">
                                                <header>
                                                    <pre class="left">◀</pre>

                                                    <div class="header-display">
                                                        <p class="display">""</p>
                                                    </div>

                                                    <pre class="right">▶</pre>

                                                </header>

                                                <div class="week">
                                                    <div>Su</div>
                                                    <div>Mo</div>
                                                    <div>Tu</div>
                                                    <div>We</div>
                                                    <div>Th</div>
                                                    <div>Fr</div>
                                                    <div>Sa</div>
                                                </div>
                                                <div class="days"></div>
                                                <p style="display: none;" class="selected"></p> <!-- Add this line -->

                                            </div>

                                            <div class="col-12 d-flex justify-content-between">
                                                <button class="btn btn-label-secondary btn-prev nxt-prev-btn"
                                                    type="button" disabled>
                                                    <i class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button class="btn btn-green btn-next nxt-prev-btn" disabled
                                                    id="calenderNextBtn" type="button">
                                                    <span
                                                        class="align-middle d-sm-inline-block d-none me-sm-2">Next</span>
                                                    <i class="ti ti-arrow-right ti-xs"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Time Format -->
                                    <div id="time-zone" class="content">
                                        <div class="row g-6">

                                            <div class="col-md-12 p-6">
                                                <h4 class="text-black">Select Time</h4>
                                                <div class="d-flex gap-4 flex-wrap mt-4" id="timeSlotContainerDIv">
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect timeBtn"
                                                        data-start_time="08:00:00" data-end_time="09:30:00">
                                                        8:00 AM - 9:30 AM
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect timeBtn"
                                                        data-start_time="10:00:00" data-end_time="11:30:00">
                                                        10:00 AM - 11:30 AM
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect timeBtn"
                                                        data-start_time="12:00:00" data-end_time="13:30:00">
                                                        12:00 PM - 1:30 PM
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect timeBtn"
                                                        data-start_time="14:00:00" data-end_time="15:30:00">
                                                        2:00 PM - 3:30 PM
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect timeBtn"
                                                        data-start_time="16:00:00" data-end_time="17:30:00">
                                                        4:00 PM - 5:30 PM
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect timeBtn"
                                                        data-start_time="18:00:00" data-end_time="19:30:00">
                                                        6:00 PM - 7:30 PM
                                                    </button>

                                                </div>
                                            </div>

                                            <div class="col-12 d-flex justify-content-between">
                                                <button class="btn btn-black btn-prev nxt-prev-btn" type="button">
                                                    <i class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button type="button" class="btn btn-green btn-next nxt-prev-btn"
                                                    id="timeNextBtn" onclick="getSelectedDateBooking()" disabled>
                                                    <span
                                                        class="align-middle d-sm-inline-block d-none me-sm-2">Next</span>
                                                    <i class="ti ti-arrow-right ti-xs"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Time Zone -->
                                    <div id="property-details" class="content">
                                        <div class="row g-6">
                                            <h4 class="text-black">Select Room</h4>
                                            <div class="col-md-6 mb-md-0 mb-5">
                                                <div class="form-check custom-option custom-option-icon roomCheckDiv">
                                                    <label class="form-check-label custom-option-content"
                                                        for="Podcastroom">
                                                        <span class="custom-option-body">
                                                            <i class="fa-solid fa-globe" style="color: black;"></i>
                                                            <span class="custom-option-title">
                                                                Content Room Or Podcast Room
                                                            </span>
                                                            <h5 class="fw-semibold text-black" id="podCastRoomTimer">
                                                                Room is Available <span><i
                                                                        class="fa-solid fa-square-check"
                                                                        style="color: green;"></i></span>
                                                            </h5>
                                                        </span>
                                                        <input class="form-check-input roomCheck" type="checkbox"
                                                            value="Podcastroom" id="Podcastroom" />
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-md-0 mb-5">
                                                <div class="form-check custom-option custom-option-icon roomCheckDiv">
                                                    <label class="form-check-label custom-option-content"
                                                        for="Conferenceroom">
                                                        <span class="custom-option-body">
                                                            <i class="fa-solid fa-globe" style="color: black;"></i>
                                                            <span class="custom-option-title">
                                                                Conference Room
                                                            </span>
                                                            <h5 class="fw-semibold text-black"
                                                                id="conferenceRoomTimer">
                                                                Room is Available <span><i
                                                                        class="fa-solid fa-square-check"
                                                                        style="color: green;"></i></span>
                                                            </h5>
                                                        </span>
                                                        <input class="form-check-input roomCheck" type="checkbox"
                                                            value="Conferenceroom" id="Conferenceroom" />
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 pt-3">
                                                <label class="form-label" for="plPodcast">Podcast Name</label>
                                                <input type="text" id="plPodcast" name="plPodcast"
                                                    class="form-control" placeholder="Enter Your Podcast Name"
                                                    required />
                                            </div>
                                            <div class="col-sm-6 pt-3">
                                                <label class="form-label" for="plShortDescription">Short
                                                    Description</label>
                                                <input type="text" id="plShortDescription"
                                                    name="plShortDescription" class="form-control"
                                                    placeholder="Short description of what your podcast is about"
                                                    required />
                                            </div>

                                            <div class="col-12 d-flex justify-content-between">
                                                <button class="btn btn-black btn-prev nxt-prev-btn" type="button">
                                                    <i class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button type="button" class="btn btn-green btn-next nxt-prev-btn"
                                                    id="roomNextBtn" disabled>
                                                    <span
                                                        class="align-middle d-sm-inline-block d-none me-sm-2">Next</span>
                                                    <i class="ti ti-arrow-right ti-xs"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Property Details -->
                                    <div id="property-features" class="content">
                                        <div class="row g-6">

                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-xl mb-xl-0 mb-6">
                                                        <div class="form-check custom-option custom-option-icon">
                                                            <label class="form-check-label custom-option-content"
                                                                for="customRadioSell">
                                                                <span class="custom-option-body">
                                                                    <svg width="41" height="40"
                                                                        viewBox="0 0 41 40" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M24.25 33.75V23.75H16.75V33.75H6.75002V18.0469C6.7491 17.8733 6.78481 17.7015 6.85482 17.5426C6.92482 17.3838 7.02754 17.2415 7.15627 17.125L19.6563 5.76562C19.8841 5.5559 20.1825 5.43948 20.4922 5.43948C20.8019 5.43948 21.1003 5.5559 21.3281 5.76562L33.8438 17.125C33.9696 17.2438 34.0703 17.3866 34.1401 17.5449C34.2098 17.7032 34.2472 17.8739 34.25 18.0469V33.75H24.25Z"
                                                                            fill="currentColor" opacity="0.2" />
                                                                        <path
                                                                            d="M33.25 33.75C33.25 34.3023 33.6977 34.75 34.25 34.75C34.8023 34.75 35.25 34.3023 35.25 33.75H33.25ZM34.25 18.0469H35.25C35.25 18.0415 35.25 18.0361 35.2499 18.0307L34.25 18.0469ZM33.8437 17.125L34.5304 16.398C34.5256 16.3934 34.5207 16.389 34.5158 16.3845L33.8437 17.125ZM21.3281 5.76562L20.6509 6.50143L20.656 6.50611L21.3281 5.76562ZM19.6562 5.76562L20.3288 6.5057L20.3335 6.50141L19.6562 5.76562ZM7.15625 17.125L7.82712 17.8666L7.82878 17.8651L7.15625 17.125ZM6.75 18.0469H7.75001L7.74999 18.0416L6.75 18.0469ZM5.75 33.75C5.75 34.3023 6.19772 34.75 6.75 34.75C7.30228 34.75 7.75 34.3023 7.75 33.75H5.75ZM3 32.75C2.44772 32.75 2 33.1977 2 33.75C2 34.3023 2.44772 34.75 3 34.75V32.75ZM38 34.75C38.5523 34.75 39 34.3023 39 33.75C39 33.1977 38.5523 32.75 38 32.75V34.75ZM23.25 33.75C23.25 34.3023 23.6977 34.75 24.25 34.75C24.8023 34.75 25.25 34.3023 25.25 33.75H23.25ZM15.75 33.75C15.75 34.3023 16.1977 34.75 16.75 34.75C17.3023 34.75 17.75 34.3023 17.75 33.75H15.75ZM35.25 33.75V18.0469H33.25V33.75H35.25ZM35.2499 18.0307C35.2449 17.7243 35.1787 17.422 35.0551 17.1416L33.225 17.9481C33.2409 17.9844 33.2495 18.0235 33.2501 18.0631L35.2499 18.0307ZM35.0551 17.1416C34.9316 16.8612 34.7531 16.6084 34.5304 16.398L33.1571 17.852C33.1859 17.8792 33.209 17.9119 33.225 17.9481L35.0551 17.1416ZM34.5158 16.3845L22.0002 5.02514L20.656 6.50611L33.1717 17.8655L34.5158 16.3845ZM22.0053 5.02984C21.5929 4.6502 21.0528 4.43948 20.4922 4.43948V6.43948C20.551 6.43948 20.6076 6.46159 20.6509 6.50141L22.0053 5.02984ZM20.4922 4.43948C19.9316 4.43948 19.3915 4.6502 18.979 5.02984L20.3335 6.50141C20.3767 6.46159 20.4334 6.43948 20.4922 6.43948V4.43948ZM18.9837 5.02556L6.48371 16.3849L7.82878 17.8651L20.3288 6.50569L18.9837 5.02556ZM6.48538 16.3834C6.25236 16.5942 6.06642 16.8518 5.93971 17.1393L7.76988 17.9459C7.78318 17.9157 7.80268 17.8887 7.82712 17.8666L6.48538 16.3834ZM5.93971 17.1393C5.813 17.4269 5.74836 17.7379 5.75001 18.0521L7.74999 18.0416C7.74981 18.0087 7.75659 17.976 7.76988 17.9459L5.93971 17.1393ZM5.75 18.0469V33.75H7.75V18.0469H5.75ZM3 34.75H38V32.75H3V34.75ZM25.25 33.75V25H23.25V33.75H25.25ZM25.25 25C25.25 24.4033 25.013 23.831 24.591 23.409L23.1768 24.8232C23.2237 24.8701 23.25 24.9337 23.25 25H25.25ZM24.591 23.409C24.169 22.987 23.5967 22.75 23 22.75V24.75C23.0663 24.75 23.1299 24.7763 23.1768 24.8232L24.591 23.409ZM23 22.75H18V24.75H23V22.75ZM18 22.75C17.4033 22.75 16.831 22.9871 16.409 23.409L17.8232 24.8232C17.8701 24.7763 17.9337 24.75 18 24.75V22.75ZM16.409 23.409C15.9871 23.831 15.75 24.4033 15.75 25H17.75C17.75 24.9337 17.7763 24.8701 17.8232 24.8232L16.409 23.409ZM15.75 25V33.75H17.75V25H15.75Z"
                                                                            fill="currentColor" />
                                                                    </svg>

                                                                    <span class="custom-option-title">New
                                                                        Customer</span>
                                                                </span>
                                                                <input name="plPropertySaleRent"
                                                                    class="form-check-input" type="radio"
                                                                    value="1" id="customRadioSell" checked
                                                                    onchange="handleRadioChange()" />
                                                            </label>
                                                        </div>
                                                    </div>
{{--                                                    <div class="col-xl">--}}
{{--                                                        <div class="form-check custom-option custom-option-icon">--}}
{{--                                                            <label class="form-check-label custom-option-content"--}}
{{--                                                                for="customRadioRent">--}}
{{--                                                                <span class="custom-option-body">--}}
{{--                                                                    <svg width="41" height="40"--}}
{{--                                                                        viewBox="0 0 41 40" fill="none"--}}
{{--                                                                        xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                                        <path--}}
{{--                                                                            d="M6.5 30C6.5 30.663 6.76339 31.2989 7.23223 31.7678C7.70107 32.2366 8.33696 32.5 9 32.5H34C34.3315 32.5 34.6495 32.3683 34.8839 32.1339C35.1183 31.8995 35.25 31.5815 35.25 31.25V13.75C35.25 13.4185 35.1183 13.1005 34.8839 12.8661C34.6495 12.6317 34.3315 12.5 34 12.5H9C8.33696 12.5 7.70107 12.2366 7.23223 11.7678C6.76339 11.2989 6.5 10.663 6.5 10V30Z"--}}
{{--                                                                            fill="currentColor" fill-opacity="0.2" />--}}
{{--                                                                        <path--}}
{{--                                                                            d="M6.5 10V30C6.5 30.663 6.76339 31.2989 7.23223 31.7678C7.70107 32.2366 8.33696 32.5 9 32.5H34C34.3315 32.5 34.6495 32.3683 34.8839 32.1339C35.1183 31.8995 35.25 31.5815 35.25 31.25V13.75C35.25 13.4185 35.1183 13.1005 34.8839 12.8661C34.6495 12.6317 34.3315 12.5 34 12.5H9C8.33696 12.5 7.70107 12.2366 7.23223 11.7678C6.76339 11.2989 6.5 10.663 6.5 10ZM6.5 10C6.5 9.33696 6.76339 8.70107 7.23223 8.23223C7.70107 7.76339 8.33696 7.5 9 7.5H30.25"--}}
{{--                                                                            stroke="currentColor" stroke-width="2"--}}
{{--                                                                            stroke-linecap="round"--}}
{{--                                                                            stroke-linejoin="round" />--}}
{{--                                                                        <path--}}
{{--                                                                            d="M28.375 24.375C29.4105 24.375 30.25 23.5355 30.25 22.5C30.25 21.4645 29.4105 20.625 28.375 20.625C27.3395 20.625 26.5 21.4645 26.5 22.5C26.5 23.5355 27.3395 24.375 28.375 24.375Z"--}}
{{--                                                                            fill="currentColor" />--}}
{{--                                                                    </svg>--}}

{{--                                                                    <span class="custom-option-title">Existing--}}
{{--                                                                        Customer</span>--}}
{{--                                                                </span>--}}
{{--                                                                <input name="plPropertySaleRent"--}}
{{--                                                                    class="form-check-input" type="radio"--}}
{{--                                                                    value="2" id="customRadioRent"--}}
{{--                                                                    onchange="handleRadioChange()" />--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
                                                </div>
                                            </div>

                                            {{-- Existing Customer Fetch Details --}}

{{--                                            <div class="col-sm-12 d-none" id="wi_div">--}}
{{--                                                <label class="form-label pb-2" for="plContact">Enter Your Previous--}}
{{--                                                    Booking--}}
{{--                                                    Code</label>--}}
{{--                                                <div class="input-group input-group-merge">--}}
{{--                                                    <span--}}
{{--                                                        style="background: black;border: black;padding: 15px;font-size: 19px;color: white;font-weight: 500;"--}}
{{--                                                        class="input-group-text">WI — </span>--}}
{{--                                                    <input type="text" name=""--}}
{{--                                                        style="padding-left: 7px !important;font-size: 19px;"--}}
{{--                                                        class="form-control contact-number-mask" placeholder="0000"--}}
{{--                                                        id="wi_input_data" required />--}}
{{--                                                    <button class="btn btn-green" type="button"--}}
{{--                                                        style="font-size: 19px;font-weight: bolder;"--}}
{{--                                                        id="button-addon2" onclick="fetchExistingRecord()">Fetch Data--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                            <div class="row pt-5" id="existngCustomer">
                                                {{-- Existing Customer Fetch Details --}}
                                                <div class="col-sm-6 pt-3">
                                                    <label class="form-label" for="plFirstName">First Name</label>
                                                    <input type="text" id="plFirstName" name="plFirstName"
                                                        class="form-control" placeholder="John" required />
                                                </div>
                                                <div class="col-sm-6 pt-3">
                                                    <label class="form-label" for="plLastName">Last Name</label>
                                                    <input required type="text" id="plLastName" name="plLastName"
                                                        class="form-control" placeholder="Doe" />
                                                </div>
                                                <div class="col-sm-6 pt-3">
                                                    <label class="form-label" for="plEmail">Email</label>
                                                    <input type="text" id="plEmail" name="plEmail"
                                                        class="form-control" placeholder="john.doe@example.com"
                                                        required />
                                                </div>
                                                <div class="col-sm-6 pt-3">
                                                    <label class="form-label" for="plContact">Contact</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text">US (+1)</span>
                                                        <input style="border-right: 1px solid #00000038;"
                                                            type="text" id="plContact" name="plContact"
                                                            class="form-control contact-number-mask"
                                                            placeholder="202 555 0111" required />
                                                    </div>
                                                </div>
                                                <input type="hidden" id="status" name="status">
                                                <div class="col-md-12 pt-5 pb-5">
                                                    <div class="form-check my-2 ms-2">
                                                        <input class="form-check-input" required type="checkbox"
                                                            name="plOtherCharges" id="plOtherCharges" />
                                                        <label class="form-check-label" for="plOtherCharges">
                                                            By proceeding, you confirm that you have read and agree to
                                                            <span class="fw-bold">
                                                                <a href="https://8020eatery.com/terms-and-conditions"
                                                                   target="_blank">Terms of Use</a>
                                                            </span>
                                                            &
                                                            <span class="fw-bold">
                                                                <a href="https://8020eatery.com/privacy-policy"
                                                                   target="_blank">
                                                                Privacy Policy.
                                                            </a>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-between">
                                                <button class="btn btn-black btn-prev nxt-prev-btn" type="button">
                                                    <i class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>

                                                <button id="socialMediaButton"
                                                    class="btn btn-success btn-submit btn-next nxt-prev-btn">
                                                    Submit
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Booking Confirmation -->
                                    <div id="price-details" class="content">
                                        <div class="row g-6" id="bookingDetails" style="display: none;">
                                            <!-- Initially hidden -->
                                            <div class="col-md-12 col-lg-12">
                                                <div class="card text-center">
                                                    <div class="card-body">
                                                        <h2 class="card-title" style="font-weight: bold;">Appointment
                                                            Booked Successfully!</h2>
                                                        <p class="booking-text">
                                                            Dear <span class="fw-bold" id="contactPersonMain"
                                                                style="color: #e1612e;">[Contact Name]</span>,
                                                            <br>
                                                            Thank you for scheduling a booking with us! We are excited
                                                            to confirm your appointment and look forward to providing
                                                            you with a great experience.
                                                        </p>
                                                        <h4 class="text-black fw-bold">
                                                            Booking Confirmation Details:
                                                        </h4>
                                                        <div class="table-responsive pb-10">
                                                            <table class="table table-bordered"
                                                                style="text-align: left; border-color: #b3b3b3;">
                                                                <tbody class="table-border-bottom-0">
                                                                    <tr>
                                                                        <td><span class="fw-bold"
                                                                                style="font-weight: bold; color: black; font-size: 20px; width: 25%;">Booking
                                                                                ID</span></td>
                                                                        <td
                                                                            style="font-size: 20px; color: black; font-weight: 400; width: 75%;">
                                                                            <span id="bookingId">[Booking ID]</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><span class="fw-bold"
                                                                                style="font-weight: bold; color: black; font-size: 20px; width: 25%;">Date
                                                                                & Time</span></td>
                                                                        <td
                                                                            style="font-size: 20px; color: black; font-weight: 400; width: 75%;">
                                                                            <span id="dateTime">[Date and Time]</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><span class="fw-bold"
                                                                                style="font-weight: bold; color: black; font-size: 20px; width: 25%;">Contact
                                                                                Person</span></td>
                                                                        <td
                                                                            style="font-size: 20px; color: black; font-weight: 400; width: 75%;">
                                                                            <span id="contactPerson">[Contact
                                                                                Name]</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><span class="fw-bold"
                                                                                style="font-weight: bold; color: black; font-size: 20px; width: 25%;">Contact
                                                                                Number</span></td>
                                                                        <td
                                                                            style="font-size: 20px; color: black; font-weight: 400; width: 75%;">
                                                                            <span id="contactNumber">[Contact
                                                                                Number]</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><span class="fw-bold"
                                                                                style="font-weight: bold; color: black; font-size: 20px; width: 25%;">Contact
                                                                                Email</span></td>
                                                                        <td
                                                                            style="font-size: 20px; color: black; font-weight: 400; width: 75%;">
                                                                            <span id="contactEmail">[Contact
                                                                                Email]</span>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <a href="/appointment/booking"
                                                            class="btn w-50 btn-green nxt-prev-btn">Go Back</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--/ Property Listing Wizard -->
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
    </div>
    <!-- Core JS -->

    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/@form-validation/popular.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/@form-validation/bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/@form-validation/auto-focus.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/toastr/toastr.js') }}"></script>
    <script src="{{ asset('assets/js/ui-toasts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->

    <script src="{{ asset('assets/js/wizard-ex-property-listing.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        toastr.options = {
            maxOpened: 1,
            autoDismiss: true,
            closeButton: true,
            debug: true,
            newestOnTop: true,
            progressBar: true,
            positionClass: 'toast-top-right',
            preventDuplicates: false,
            onclick: null,
            rtl: isRtl
        };
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            let display = document.querySelector(".display");
            let days = document.querySelector(".days");
            let previous = document.querySelector(".left");
            let next = document.querySelector(".right");
            let selectedDateElement = document.querySelector(".selected");

            let date = new Date();
            let year = date.getFullYear();
            let month = date.getMonth();
            let selectedDate = null; // To track the currently selected date
            const statusField = document.getElementById('status');
            const checkbox = document.getElementById('plOtherCharges');
            const submitButton = document.getElementById('socialMediaButton');

            function toggleSubmitButton() {
                submitButton.disabled = !checkbox.checked;
            }

            // Initial check in case the checkbox is already checked
            toggleSubmitButton();

            // Add event listener to checkbox
            checkbox.addEventListener('change', toggleSubmitButton);
            document.querySelectorAll('.form-check-input').forEach(radio => {
                radio.addEventListener('change', (event) => {
                    const selectedRadio = event.target;
                    const label = document.querySelector(`label[for="${selectedRadio.id}"]`);
                    if (label) {
                        statusField.value = label.textContent.trim();
                        // console.log('Selected Status:', statusField.value); // Debugging
                    }
                });
            });

            function displayCalendar() {
                const firstDay = new Date(year, month, 1);
                const lastDay = new Date(year, month + 1, 0);
                const firstDayIndex = firstDay.getDay();
                const numberOfDays = lastDay.getDate();

                let formattedDate = date.toLocaleString("en-US", {
                    month: "long",
                    year: "numeric"
                });

                display.innerHTML = `${formattedDate}`;
                days.innerHTML = "";

                // Fill initial empty days
                for (let x = 1; x <= firstDayIndex; x++) {
                    const div = document.createElement("div");
                    days.appendChild(div);
                }

                // Display days of the month
                for (let i = 1; i <= numberOfDays; i++) {
                    let div = document.createElement("div");
                    let currentDate = new Date(year, month, i);
                    div.dataset.date = currentDate.toDateString();
                    div.innerHTML += i;
                    days.appendChild(div);

                    // Disable past dates
                    if (currentDate < new Date(new Date().setHours(0, 0, 0, 0))) {
                        div.classList.add("disabled");
                        div.style.pointerEvents = "none"; // Disable clicks on past dates
                    }

                    // Add special class to current date without highlighting it
                    if (
                        currentDate.getFullYear() === new Date().getFullYear() &&
                        currentDate.getMonth() === new Date().getMonth() &&
                        currentDate.getDate() === new Date().getDate()
                    ) {
                        div.classList.add("current-date");
                    }

                    // Highlight previously selected date
                    if (selectedDate && selectedDate.dataset.date === currentDate.toDateString()) {
                        div.classList.add("selected-date");
                    }
                }

                // Disable 'previous' button if on the current month
                previous.style.pointerEvents = (year === new Date().getFullYear() && month === new Date()
                    .getMonth()) ? "none" : "auto";

                addDateSelectionHandler();
            }

            function addDateSelectionHandler() {
                const dayElements = document.querySelectorAll(".days div:not(.disabled)");
                dayElements.forEach((day) => {
                    day.addEventListener("click", (e) => {
                        let day = e.target.dataset.date.substring(0, 3)
                        if (selectedDate) {
                            selectedDate.classList.remove("selected-date");
                        }

                        // Highlight the newly selected date
                        e.target.classList.add("selected-date");
                        selectedDate = e.target; // Update the selectedDate to the new one

                        // Display selected date
                        const selectedDateStr = e.target.dataset.date;
                        selectedDateElement.innerHTML = `Selected Date: ${selectedDateStr}`;
                    });
                });
            }

            // Initial display of calendar and selection handler
            displayCalendar();

            // Navigate to the previous month
            previous.addEventListener("click", () => {
                if (month === 0) {
                    month = 11;
                    year -= 1;
                } else {
                    month -= 1;
                }

                date.setMonth(month);
                displayCalendar();

            });

            // Navigate to the next month
            next.addEventListener("click", () => {
                if (month === 11) {
                    month = 0;
                    year += 1;
                } else {
                    month += 1;
                }

                date.setMonth(month);
                displayCalendar();
                enableCalendarBtn();
            });



            const previousButton = document.querySelector(".btn-prev");
            const nextButton = document.querySelector(".btn-next");
            const nextButtonForm = document.querySelector(".btn-next-form");

            const timeSlots = [
                "08:00am-09:30am", "10:00am-11:30pm", "12:00pm-01:30pm", "02:00pm-03:30pm", "04:00pm-5:30pm",
                "06:00pm-07:30pm"
            ];

            function updateCurrentIndex(isNext) {
                if (isNext) {
                    if (currentIndex + 1 < timeSlots.length) {
                        currentIndex += 1;
                    }
                } else {
                    if (currentIndex - 1 >= 0) {
                        currentIndex -= 1;
                    }
                }

                enableDateBtn()
            }

            function getCustomerType(value) {
                switch (value) {
                    case '1':
                        return 'New Customer';
                    case '2':
                        return 'Existing Customer';
                    default:
                        return 'Unknown';
                }
            }

            // Function to validate form fields
            function validateFormFields() {
                var firstName = document.getElementById('plFirstName').value.trim();
                var lastName = document.getElementById('plLastName').value.trim();
                var email = document.getElementById('plEmail').value.trim();
                var contact = document.getElementById('plContact').value.trim();
                var propertyType = document.getElementById('plPropertyType').value.trim();
                var zipCode = document.getElementById('plZipCode').value.trim();
                var country = document.getElementById('plCountry').value.trim();
                var state = document.getElementById('plState').value.trim();

                // Return true if all fields are filled
                return firstName && lastName && email && contact && propertyType && zipCode && country && state;
            }


            let currentIndex = null;
            let selectedTime = null; // To track the currently selected time

            previousButton.addEventListener("click", () => {
                updateCurrentIndex(false);
            });

            nextButton.addEventListener("click", () => {
                updateCurrentIndex(true);
            });

            if (nextButtonForm) {
                nextButtonForm.addEventListener("click", (event) => {
                    updateCurrentIndex(true); // Replace this with the appropriate function if needed
                });
            }


            window.submitFun =  (e) => {
                showloader();
                const dateDiv = document.querySelector('[data-date].selected-date');
                let booking_data = dateDiv.getAttribute('data-date');
                let TimeSelected = document.querySelector('.timeBtn.selected');
                let start_time = TimeSelected?.getAttribute('data-start_time')
                let end_time = TimeSelected?.getAttribute('data-end_time');
                let booking_room = $('.roomCheck:checked').val();
                let podcast_name = $('#plPodcast').val();
                let short_description = $('#plShortDescription').val();
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                var formData = {
                    _token: csrfToken, // Include CSRF token
                    first_name: $('#plFirstName').val(),
                    last_name: $('#plLastName').val(),
                    email: $('#plEmail').val(),
                    contact: $('#plContact').val(),
                    start_time: start_time,
                    end_time: end_time,
                    booking_date: booking_data,
                    booking_room: booking_room,
                    podcast_name: podcast_name,
                    short_description: short_description,
                };

                console.log('Form Data:', formData);

                $.ajax({
                    url: '/booking/store',
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        console.log('Response:', response);

                        if (response.success) {
                            toastr.success('Your Booking Added Successfully');
                            // Update the booking details section
                            $('#bookingId').text(response.bookingId);
                            $('#dateTime').text(response.dateTime);
                            $('#contactPerson').text(response.contactPerson);
                            $('#contactPersonMain').text(response.contactPerson);
                            $('#contactNumber').text(response.contactNumber);
                            $('#contactEmail').text(response.contactEmail);

                            // Show the booking details section
                            $('#bookingDetails').show();
                        } else {
                            // Handle booking failure (if needed)
                            toastr.error('Booking failed. Please try again.');
                        }
                        hideloader()
                    },
                    error: function(xhr, status, error) {
                        toastr.error('An error occurred. Please try again.');
                        hideloader()
                    }
                });
            }


            function enableCalendarBtn() {
                // Select the div with the data-date attribute
                const dateDiv = document.querySelectorAll('[data-date]');

                dateDiv.forEach(ele => {
                    // Add an onclick event listener
                    ele.addEventListener('click', function() {
                        const selectedDate = ele.classList.contains('selected-date');
                        if (selectedDate) {
                            let calenderNextBtn = document.getElementById('calenderNextBtn');
                            calenderNextBtn.removeAttribute('disabled')
                        }
                    });
                })
            }

            enableCalendarBtn()

            function enableDateBtn() {
                // Select the div with the data-date attribute
                const dateDiv = document.querySelectorAll('.timeBtn');
                let now = new Date();
                dateDiv.forEach(ele => {
                    let slotText = ele.innerText.trim();
                    let slotTime = slotText.split(" - ")[0]; // Extract start time
                    let slotDate = new Date();

                    // Convert 12-hour format to 24-hour format
                    let timeParts = slotTime.match(/(\d+):(\d+) (\wM)/);
                    if (timeParts) {
                        let hours = parseInt(timeParts[1], 10);
                        let minutes = parseInt(timeParts[2], 10);
                        let amPm = timeParts[3];

                        if (amPm === "PM" && hours !== 12) hours += 12;
                        if (amPm === "AM" && hours === 12) hours = 0;

                        slotDate.setHours(hours, minutes, 0, 0);

                        // if (slotDate < now) {
                        //     ele.disabled = true;
                        //     ele.style.opacity = "0.5"; // Optional styling for disabled slots
                        //     // ele.style.pointerEvents = "none"; // Prevent clicks
                        // }
                    }
                    // Add an onclick event listener
                    ele.addEventListener('click', function() {
                        if (!ele.classList.contains('selected')) {
                            $('.timeBtn').removeClass('selected');
                            ele.classList.add('selected');
                        }
                        let timeNextBtn = document.getElementById('timeNextBtn');
                        timeNextBtn.removeAttribute('disabled')
                    });
                })
            }
            enableDateBtn()

            function selectRoom(e) {
                let checkedBox = document.querySelector('.roomCheck:checked');
                $('.roomCheckDiv').removeClass('checked');
                document.querySelectorAll('.roomCheck').forEach(checkbox => {
                    if (checkbox !== e.target) {
                        checkbox.checked = false;
                    }
                });

                e.target.parentElement.parentElement.classList.add('checked')
                let roomNextBtn = document.getElementById('roomNextBtn');
                if (checkedBox) {
                    console.log(currentIndex);
                    roomNextBtn.removeAttribute('disabled')
                } else {
                    roomNextBtn.setAttribute('disabled', true);
                }
            }
            let rooms = document.querySelectorAll('.roomCheck');
            rooms.forEach(ele => {
                ele.addEventListener('change', selectRoom);
            })
        });

        function showloader(loaderId = null) {
            $('#wizard-property-listing').addClass('d-none');
            if (loaderId) {
                $('#page-loader1').removeClass('d-none');
            } else {
                $('#loader').removeClass('d-none');
            }
        }

        function hideloader(loaderId = null) {
            $('#wizard-property-listing').removeClass('d-none');
            if (loaderId) {
                $('#page-loader1').addClass('d-none');
                $('#appointmentSec').removeClass('d-none');
            } else {
                $('#loader').addClass('d-none');
            }
        }

        window.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                hideloader(1)
            }, 1500);
        });

        function handleRadioChange() {
            const tab = document.querySelector('input[name="plPropertySaleRent"]:checked');
            if (tab.value == 2) {
                $('#existngCustomer').addClass('d-none');
                $('#wi_div').removeClass('d-none');
            } else {
                $('#existngCustomer').removeClass('d-none');
                $('#wi_div').addClass('d-none');
            }
        }

        function fetchExistingRecord() {
            // e.preventDefault();
            showloader()
            let id = $('#wi_input_data').val()?.replace(/\s+/g, '');
            $.ajax({
                url: '/existing-booking/' + id,
                method: 'GET',
                data: {},
                success: function(response) {
                    $('#wi_div').removeClass('d-none');
                    console.log('Response:', response);
                    let data = response.data;
                    if (data) {
                        $('#existngCustomer').removeClass('d-none');
                        $('#plFirstName').val(data.firstName);
                        $('#plLastName').val(data.lastName);
                        $('#plEmail').val(data.email);
                        $('#plContact').val(data.contact);
                        $('#plPropertyType').val(data.propertyType);
                        $('#select2-plPropertyType-container').text(data.propertyType);
                        $('#plZipCode').val(data.zipCode);
                        // $('#plCountry').val(data.country),
                        $('#plCountry').val(data.country).trigger('change');
                        $('#select2-plCountry-container').text(data.country);
                        $('#plState').val(data.state);
                        $('#plweb').val(data.website);
                        $('#plbrand').val(data.businessName);
                        $('#plAddress').val(data.address);
                        let radios = document.querySelectorAll('input[name="status"]');
                        for (const radio of radios) {
                            radio.checked = (radio.value === data
                                .status); // Check the radio if its value matches
                        }
                        toastr.success('Record Fetched Successfully');
                    } else {
                        toastr.error('No data found');
                    }
                    hideloader()
                },
                error: function(xhr, status, error) {
                    $('#wi_div').removeClass('d-none');
                    // console.error('Error:', error);
                    // $('#success').text("An error occurred. Please try again.");
                    toastr.error('An error occurred. Please try again.');
                    hideloader()

                }
            });
        }

        function getSelectedDateBooking() {
            const dateDiv = document.querySelector('[data-date].selected-date');
            let booking_data = dateDiv.getAttribute('data-date');
            let TimeSelected = document.querySelector('.timeBtn.selected');
            let start_time = TimeSelected?.getAttribute('data-start_time');
            let end_time = TimeSelected?.getAttribute('data-end_time');
            $.ajax({
                url: "{{ url('selected-date-booking') }}",
                method: 'POST',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'booking_data': booking_data,
                    'start_time': start_time,
                    'end_time': end_time,
                },
                success: function(response) {
                    console.log(response);
                    if (response.cRemainingTime > 0) {
                        $('#Conferenceroom').attr('disabled', true);
                        $('#conferenceRoomTimer').html(`
                            Room is Not Available: <span>
                                <i class="fa-solid fa-square-xmark" style="color: #e91e63;"></i>
                                    </span>
                            <input type="hidden" id="setconferenceRemaningTime" value="0" />
                            <div class="mt-2" id="countdown">
                                <div id='conferenceTiles' class="color-full"></div>
                                <div id ="left" class="countdown-label">
                                    Time Remaining
                                </div>
                            </div>`);
                        // setInterval(function() {
                        //     getCountdown(response.cRemainingTime, 'conferenceTiles');
                        // }, 1000);
                        startCountdown(response.cRemainingTime, 'conferenceTiles');
                    } else {
                        $('#Conferenceroom').attr('disabled', false);
                        $('#conferenceRoomTimer').html(`Room is Available <span>
                            <i class="fa-solid fa-square-check"
                                style="color: green;"></i></span>`);
                    }
                    if (response.pRemainingTime > 0) {
                        $('#Podcastroom').attr('disabled', true);
                        $('#podCastRoomTimer').html(`
                            Room is Not Available: <span>
                                <i class="fa-solid fa-square-xmark" style="color: #e91e63;"></i>
                                    </span>
                            <input type="hidden" id="setconferenceRemaningTime" value="${response.pRemainingTime}" />
                            <div class="mt-2" id="countdown">
                                <div id='podCastTiles' class="color-full"></div>
                                <div id ="left" class="countdown-label">
                                    Time Remaining
                                </div>
                            </div>`);
                        // setInterval(function() {
                        //     getCountdown(response.pRemainingTime, 'podCastTiles');
                        // }, 1000);
                        startCountdown(response.pRemainingTimeSec, 'podCastTiles');
                    } else {
                        $('#Podcastroom').attr('disabled', false);
                        $('#podCastRoomTimer').html(`Room is Available <span>
                            <i class="fa-solid fa-square-check"
                                style="color: green;"></i></span>`);
                    }
                },
            });
        }

        // var minutes = $('#set-time').val();

        var target_date = new Date().getTime() + ((minutes * 60) * 1000); // set the countdown date
        // //set actual timer
        // setTimeout(
        //     function() {
        //         document.getElementById("left").innerHTML = "Timer Stopped";
        //     }, time_limit);

        var days, hours, minutes, seconds; // variables for time units


        // getCountdown();


        function getCountdown(remMinute, sec) {
            console.log('function is running', sec);

            var time_limit = ((remMinute * 60) * 1000);
            console.log(time_limit);

            var countdown = document.getElementById(sec); // get tag element
            // find the amount of "seconds" between now and target
            var current_date = new Date().getTime();
            var seconds_left = (target_date - current_date) / 1000;

            if (seconds_left >= 0) {
                if ((seconds_left * 1000) < (time_limit / 2)) {
                    $('#' + sec).removeClass('color-full');
                    $('#' + sec).addClass('color-half');

                }
                if ((seconds_left * 1000) < (time_limit / 4)) {
                    $('#' + sec).removeClass('color-half');
                    $('#' + sec).addClass('color-empty');
                }

                days = pad(parseInt(seconds_left / 86400));
                seconds_left = seconds_left % 86400;

                hours = pad(parseInt(seconds_left / 3600));
                seconds_left = seconds_left % 3600;

                minutes = pad(parseInt(seconds_left / 60));
                seconds = pad(parseInt(seconds_left % 60));

                // format countdown string + set tag value
                countdown.innerHTML = "<span>" + hours + ":</span><span>" + minutes + ":</span><span>" + seconds +
                    "</span>";
            }
        }

        function pad(n) {
            return (n < 10 ? '0' : '') + n;
        }

        function startCountdown(duration, sec) {
            let timer = duration;
            let countdownElement = document.getElementById(sec);

            function updateCountdown() {
                if (timer >= 0) {
                    let hours = Math.floor(timer / 3600);
                    let minutes = Math.floor((timer % 3600) / 60);
                    let seconds = timer % 60;
                    if (hours > 0) {
                        countdownElement.innerHTML = `${hours}h ${minutes}m ${seconds}s`;
                    } else {
                        countdownElement.innerHTML = `${minutes}m ${seconds}s`;

                    }
                    timer--;
                    setTimeout(updateCountdown, 1000);
                } else {
                    countdownElement.innerHTML = "Time is up!";
                }
            }

            updateCountdown();
        }
    </script>
</body>

</html>
