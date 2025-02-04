<!doctype html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
    data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-no-customizer"
    data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Appointment Booking | WeIncentivize</title>

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

    <style>
        .layout-menu-fixed:not(.layout-menu-collapsed) .layout-page,
        .layout-menu-fixed-offcanvas:not(.layout-menu-collapsed) .layout-page {
            padding-left: 0;
        }

        .layout-navbar-fixed .layout-wrapper:not(.layout-without-menu) .layout-page {
            padding-top: 0 !important;
        }

        .layout-navbar-fixed .layout-wrapper:not(.layout-horizontal) .layout-page:before {
            display: none;
        }

        .app-brand-link {
            text-align: center;
            display: block;
        }

        .abr-heading {
            color: black;
            text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaa, 0 6px 1px rgba(0, 0, 0, .1), 0 0 5px rgba(0, 0, 0, .1), 0 1px 3px rgba(0, 0, 0, .3), 0 3px 5px rgba(0, 0, 0, .2), 0 5px 10px rgba(0, 0, 0, .25), 0 10px 10px rgba(0, 0, 0, .2), 0 20px 20px rgba(0, 0, 0, .15);
            text-transform: capitalize;
        }

        /*Calendar CSS*/

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background: #058283;
            color: white;
        }

        .header-display {
            display: flex;
            align-items: center;
        }

        .header-display p {
            margin: 5px;
            word-spacing: 0.5rem;
            font-size: 29px;
            font-weight: 600;
        }

        pre {
            padding: 10px;
            margin: 0;
            cursor: pointer;
            font-size: 25px;
        }

        .days,
        .week {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            margin: auto;
            padding: 0px 20px 0px 20px;
            justify-content: space-between;
        }

        .week div,
        .days div {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 45px;
            width: 53px;
            border-radius: 100%;
            color: black;
            font-weight: bold;
            font-size: 21px;
            margin: 13px;
        }

        .days div:hover {
            background: black;
            color: white !important;
            cursor: pointer;
        }

        .week div {
            opacity: 0.5;
        }

        /* .current-date {
            background-color: #058283;
            color: white !important;
        } */
        .display-selected {
            margin-bottom: 10px;
            padding: 20px 20px;
            text-align: center;
        }

        .calendar {
            box-shadow: 0 0.125rem 0.5rem 0 rgb(0 0 0 / 19%);
            padding: 0;
        }

        /*Ribbon CSS*/

        .ribbon {
            width: 400px;
            height: 60px;
            margin: 0px auto 61px;
            position: relative;
            color: #fff;
            font: 28px/60px sans-serif;
            text-align: center;
            text-transform: uppercase;
            background: #282828;

            -webkit-animation: main 250ms;
            -moz-animation: main 250ms;
            -ms-animation: main 250ms;
            animation: main 250ms;
        }

        .ribbon i {
            position: absolute;
        }

        .ribbon i:first-child,
        .ribbon i:nth-child(2) {
            position: absolute;
            left: -20px;
            bottom: -20px;
            z-index: -1;
            border: 20px solid transparent;
            border-right-color: #6a6a6a;

            -webkit-animation: edge 500ms;
            -moz-animation: edge 500ms;
            -ms-animation: edge 500ms;
            animation: edge 500ms;
        }

        .ribbon i:nth-child(2) {
            left: auto;
            right: -20px;
            border-right-color: transparent;
            border-left-color: #6a6a6a;
        }

        .btn.selected {
            background-color: #058283;
            color: white;
            border: 1px solid #058283;
            /* Optional border */
        }

        .btn:disabled {
            background-color: #e0e0e0;
            /* Disabled color */
            color: #9e9e9e;
            cursor: not-allowed;
        }

        .ribbon i:nth-child(3),
        .ribbon i:last-child {
            width: 20px;
            bottom: -20px;
            left: -60px;
            z-index: -2;
            border: 30px solid black;
            border-left-color: transparent;

            -webkit-animation: back 600ms;
            -moz-animation: back 600ms;
            -ms-animation: back 600ms;
            animation: back 600ms;

            -webkit-transform-origin: 100% 0;
            -moz-transform-origin: 100% 0;
            -ms-transform-origin: 100% 0;
            transform-origin: 100% 0;
        }

        .ribbon i:last-child {
            bottom: -20px;
            left: auto;
            right: -60px;
            border: 30px solid black;
            border-right-color: transparent;

            -webkit-transform-origin: 0 0;
            -moz-transform-origin: 0 0;
            -ms-transform-origin: 0 0;
            transform-origin: 0 0;
        }

        /* animations */

        @-webkit-keyframes main {
            0% {
                -webkit-transform: scaleX(0);
            }

            100% {
                -webkit-transform: scaleX(1);
            }
        }

        @-webkit-keyframes edge {

            0%,
            50% {
                -webkit-transform: scaleY(0);
            }

            100% {
                -webkit-transform: scaleY(1);
            }
        }

        @-webkit-keyframes back {

            0%,
            75% {
                -webkit-transform: scaleX(0);
            }

            100% {
                -webkit-transform: scaleX(1);
            }
        }


        @-moz-keyframes main {
            0% {
                -moz-transform: scaleX(0);
            }

            100% {
                -moz-transform: scaleX(1);
            }
        }

        @-moz-keyframes edge {

            0%,
            50% {
                -moz-transform: scaleY(0);
            }

            100% {
                -moz-transform: scaleY(1);
            }
        }

        @-moz-keyframes back {

            0%,
            75% {
                -moz-transform: scaleX(0);
            }

            100% {
                -moz-transform: scaleX(1);
            }
        }


        @keyframes main {
            0% {
                transform: scaleX(0);
            }

            100% {
                transform: scaleX(1);
            }
        }

        @keyframes edge {

            0%,
            50% {
                transform: scaleY(0);
            }

            100% {
                transform: scaleY(1);
            }
        }

        @keyframes back {

            0%,
            75% {
                transform: scaleX(0);
            }

            100% {
                transform: scaleX(1);
            }
        }

        .bs-stepper.vertical .bs-stepper-header {
            min-width: 20rem;
        }

        .bs-stepper .step.active .bs-stepper-circle {
            background-color: #058283;
        }

        .light-style .bs-stepper .bs-stepper-header .bs-stepper-title,
        .light-style .bs-stepper .bs-stepper-header .bs-stepper-label {
            color: black;
            font-size: 21px;
        }

        .light-style .bs-stepper:not(.wizard-modern) {
            box-shadow: 0px 0px 15px 2px rgb(0 0 0 / 14%);
            margin-left: 3rem;
            margin-right: 3rem;
        }

        .btn-black {
            background-color: #000000;
            border-color: black;
            color: white;
        }

        .btn-black:hover {
            background-color: #058283 !important;
            border-color: #058283;
            color: white;
        }

        body {
            width: 100%;
            transform-origin: bottom center;
            transform: scale(84%);
            max-height: 10vh;
        }

        .custom-btn-outline {
            color: #000000;
            border-color: #000000;
            background: transparent;
            font-size: 20px;
            font-weight: 600;
            padding: 14px 62px 14px 62px;
            width: 136px;
            margin-top: 6px;
            margin-bottom: 6px;
        }

        .custom-btn-outline:hover {
            color: #ffffff;
            border-color: #058283;
            background: #058283;
            font-weight: 600;
        }

        .btn-green {
            color: #fff !important;
            background-color: #058283 !important;
            border-color: #058283 !important;
        }

        .btn-green:hover {
            color: #fff !important;
            background-color: #000000 !important;
            border-color: #000000 !important;
        }

        .nxt-prev-btn {
            padding: 12px;
            font-size: 19px;
            width: 16%;
        }

        .custom-option-icon .custom-option-body .custom-option-title {
            font-size: 20px;
            color: #000000;
        }

        .custom-option.checked {
            border: 2px solid #000000 !important;
            margin: 0;
        }

        .form-check-input:checked {
            background-color: #000000;
            border-color: #000000;
        }

        .custom-option-icon .custom-option-body svg {
            height: 37px;
            width: 37px;
        }

        .custom-option-icon.checked i,
        .custom-option-icon.checked svg {
            color: #008282;
        }

        .form-label,
        .col-form-label {
            color: #000000;
            font-size: 20px;
            font-weight: 500;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #058283 !important;
        }

        .form-control {
            font-size: 17px;
            font-weight: 600;
            padding: 11px 10px 11px 10px;
        }

        .form-control:focus {
            padding: 11px 10px 11px 10px;
        }

        .input-group:focus-within .form-control,
        .input-group:focus-within .form-select {
            padding: 11px 10px 11px 10px;
            border-color: #058283 !important;
        }

        .input-group:focus-within .form-control,
        .input-group:focus-within .input-group-text {
            border-color: #058283 !important;
        }

        .light-style .select2-container--default .select2-selection--single {
            height: 51px !important;
        }

        .light-style .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 51px !important;
            color: #000000;
        }

        .light-style .select2-container--default.select2-container--open .select2-selection--single .select2-selection__rendered {
            line-height: 51px !important;
            padding-inline-start: calc(0.9375rem - 2px);
            padding-inline-end: calc(2.25rem - 2px);
        }

        .light-style .select2-search__field {
            color: #000000;
        }

        .select2-search--dropdown .select2-search__field {
            padding: 10px;
        }

        .light-style .select2-container--default .select2-results__option {
            color: #000000;
            font-size: 18px;
            font-weight: 500;
        }

        .select2-container--default .select2-results__option--highlighted:not([aria-selected=true]) {
            background-color: rgb(5 130 131) !important;
            color: #ffffff !important;
        }

        .select2-container--default.select2-container--focus .select2-selection,
        .select2-container--default.select2-container--open .select2-selection {
            border-color: #058283 !important;
        }

        .light-style .select2-container--default .select2-selection--single .select2-selection__clear {
            color: #000000;
            font-size: 20px;
            right: 4px;
            bottom: 3px;
        }

        .select2-container .select2-selection--single .select2-selection__rendered {
            font-weight: 600;
            font-size: 17px;
        }

        .form-control::-webkit-input-placeholder {
            font-size: 18px;
            color: #8d8d8d !important;
        }

        .light-style .select2-container--default .select2-selection__placeholder {
            font-size: 18px;
            color: #8d8d8d !important;
        }

        .form-check-label {
            color: #000000;
            font-size: 18px;
        }

        .booking-text {
            font-size: 20px;
            color: black;
            font-weight: 500;
        }

        ul.book-list {
            color: black;
            font-weight: 600;
            font-size: 19px;
            line-height: 36px;
            list-style: none;
        }

        #price-details {
            display: block !important;
            visibility: visible !important;
        }

        .selected-date {
            background-color: #058283;
            color: #fff !important;
            border-radius: 50%;
        }

        .disabled {
            color: #cccccc;
            /* Lighter color for past dates */
            background-color: #f0f0f0;
            /* Light background to visually distinguish */
            pointer-events: none;
            /* Prevent clicks */
        }

        #page-loader1 {
            background-color: #2c3e50;
            width: 100px;
            height: 100px;
            position: absolute;
            top: 340px;
            left: calc(50% - 50px);
            transition: all 0.2s ease;
            -webkit-animation: page-loader 2s infinite;
            animation: page-loader 2s infinite;
        }

        @-webkit-keyframes page-loader {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        @keyframes page-loader {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .bs-stepper .step.crossed .step-trigger .bs-stepper-circle {
            background-color: #f7f7f8 !important;
            color: #00000063 !important;
        }

        .light-style .bs-stepper .bs-stepper-header .step:not(.active) .bs-stepper-circle {
            background-color: rgb(0 0 0);
            color: #ffffff;
        }

        .was-validated .form-control:invalid,
        .was-validated .form-control:valid,
        .form-control.is-invalid,
        .form-control.is-valid {
            padding: 11px 10px 11px 10px;
        }

        .input-group:focus-within {
            box-shadow: none;
        }

        .invalid-feedback {
            font-size: 17px;
            font-weight: 600;
        }

        .input-group-text {
            font-size: 17px;
            font-weight: 600;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            top: 3px;
        }

        .custom-option-icon .custom-option-body i::before {
            font-size: 2.75rem;
        }

        .custom-option-icon .custom-option-body .custom-option-title {
            font-size: 24px;
            color: #000000;
        }

        .custom-option {
            border: 1px solid #9d9d9d;
        }

        /*MOBILE DEVICES CSS START*/

        @media only screen and (min-width: 992px) and (max-width: 1199px),
        only screen and (min-width: 768px) and (max-width: 991px),
        (max-width: 767px) {
            .ribbon {
                width: 339px;
                font-size: 22px;
            }

            .light-style .bs-stepper:not(.wizard-modern) {
                margin-left: 0;
                margin-right: 0;
            }

            .container-xxl {
                padding-right: 0;
                padding-left: 0;
            }

            .week div,
            .days div {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 34px;
                width: 32px;
                border-radius: 100%;
                color: black;
                font-weight: bold;
                font-size: 21px;
                margin: 10px;
            }

            .custom-btn-outline {
                color: #000000;
                border-color: #000000;
                background: transparent;
                font-size: 19px;
                font-weight: 600;
                padding: 8px 62px 8px 62px;
                width: 170px;
                margin-top: 6px;
                margin-bottom: 6px;
            }
        }
    </style>

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
                                    <img src="{{ asset('assets/abr/logo.png') }}" width="250">
                                </a>
                                <h4 class="text-center m-0 pt-5 text-uppercase" style="font-weight: bold;">Visit Us
                                    Online At:</h4>
                                <a class="text-center" href="https://weincentivize.com/">
                                    <h5>www.weincentivize.com</h5>
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
                                        <span class="bs-stepper-circle"><i class="fa-solid fa-globe"></i></span>
                                        <span class="bs-stepper-label">
                                            <span class="bs-stepper-title">Time Zone</span>
                                        </span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#property-details">
                                    <button type="button" class="step-trigger">
                                        <span class="bs-stepper-circle"><i class="fa-solid fa-clock"></i></span>
                                        <span class="bs-stepper-label">
                                            <span class="bs-stepper-title">Time</span>
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
                                <div class="step" data-target="#property-area">
                                    <button type="button" class="step-trigger">
                                        <span class="bs-stepper-circle"><i class="fa-solid fa-thumbs-up"></i></span>
                                        <span class="bs-stepper-label">
                                            <span class="bs-stepper-title">Social Media</span>
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
                                                <button class="btn btn-label-secondary btn-prev nxt-prev-btn" type="button" disabled>
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

                                    <!-- Time Zone -->
                                    <div id="time-zone" class="content">
                                        <div class="row g-6">
                                            <h4 class="text-black">Select Time Zone</h4>
                                            <div class="col-md-6 mb-md-0 mb-5">
                                                <div class="form-check custom-option custom-option-icon">
                                                    <label class="form-check-label custom-option-content"
                                                        for="zone1">
                                                        <span class="custom-option-body">
                                                            <i class="fa-solid fa-globe" style="color: black;"></i>
                                                            <span class="custom-option-title"> Eastern Standard Time
                                                                (EST) </span>
                                                            <h5>
                                                                Select this option if you are located in the Eastern
                                                                Standard Time (EST) zone
                                                            </h5>
                                                        </span>
                                                        <input onclick="check(this);" class="form-check-input timeZoneCheck" type="checkbox"
                                                            value="+3" id="zone1" />
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-md-0 mb-5">
                                                <div class="form-check custom-option custom-option-icon">
                                                    <label class="form-check-label custom-option-content"
                                                        for="zone2">
                                                        <span class="custom-option-body">
                                                            <i class="fa-solid fa-globe" style="color: black;"></i>
                                                            <span class="custom-option-title"> Central Standard Time
                                                                (CST) </span>
                                                            <h5>
                                                                Select this option if you are located in the Central
                                                                Standard Time (CST) zone
                                                            </h5>
                                                        </span>
                                                        <input onclick="check(this);" class="form-check-input timeZoneCheck" type="checkbox"
                                                            value="+2" id="zone2" />
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-md-0 mb-5">
                                                <div class="form-check custom-option custom-option-icon">
                                                    <label class="form-check-label custom-option-content"
                                                        for="zone3">
                                                        <span class="custom-option-body">
                                                            <i class="fa-solid fa-globe" style="color: black;"></i>
                                                            <span class="custom-option-title"> Mountain Standard Time
                                                                (MST) </span>
                                                            <h5>
                                                                Select this option if you are located in the Mountain
                                                                Standard Time (MST) zone
                                                            </h5>
                                                        </span>
                                                        <input onclick="check(this);" class="form-check-input timeZoneCheck" type="checkbox"
                                                            value="+1" id="zone3" />
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-md-0 mb-5">
                                                <div class="form-check custom-option custom-option-icon">
                                                    <label class="form-check-label custom-option-content"
                                                        for="zone4">
                                                        <span class="custom-option-body">
                                                            <i class="fa-solid fa-globe" style="color: black;"></i>
                                                            <span class="custom-option-title"> Pacific Standard Time
                                                                (PST) </span>
                                                            <h5>
                                                                Select this option if you are located in the Pacific
                                                                Standard Time (PST) zone
                                                            </h5>
                                                        </span>
                                                        <input onclick="check(this);" class="form-check-input timeZoneCheck" type="checkbox"
                                                            value="0" id="zone4" />
                                                    </label>
                                                </div>
                                            </div>


                                            <div class="col-12 d-flex justify-content-between">
                                                <button class="btn btn-black btn-prev nxt-prev-btn" type="button">
                                                    <i class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button type="button" class="btn btn-green btn-next nxt-prev-btn"
                                                    id="timeZoneNextBtn" disabled>
                                                    <span
                                                        class="align-middle d-sm-inline-block d-none me-sm-2">Next</span>
                                                    <i class="ti ti-arrow-right ti-xs"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Time Format -->
                                    <div id="property-details" class="content">
                                        <div class="row g-6">

                                            <div class="col-md-12 p-6">
                                                <h4 class="text-black">Select Time</h4>
                                                <div class="d-flex gap-4 flex-wrap mt-4" id="timeSlotContainerDIv">
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect">
                                                        12:00am
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect">
                                                        12:30am
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect">
                                                        1:00am
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect">
                                                        1:30am
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect">
                                                        2:00am
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect">
                                                        2:30am
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect">
                                                        3:00am
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect">
                                                        3:30am
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect">
                                                        4:00am
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect">
                                                        4:30am
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect">
                                                        5:00am
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect">
                                                        5:30am
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect">
                                                        6:00pm
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect">
                                                        6:30pm
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect">
                                                        7:00pm
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect">
                                                        7:30pm
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect">
                                                        8:00pm
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect">
                                                        8:30pm
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect">
                                                        9:00pm
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect">
                                                        9:30pm
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect">
                                                        10:00pm
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect">
                                                        10:30pm
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect">
                                                        11:00pm
                                                    </button>
                                                    <button type="button"
                                                        class="btn custom-btn-outline waves-effect">
                                                        11:30pm
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="col-12 d-flex justify-content-between">
                                                <button class="btn btn-black btn-prev nxt-prev-btn" type="button">
                                                    <i class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button type="button" class="btn btn-green btn-next nxt-prev-btn"
                                                    id="timeNextBtn" disabled>
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
                                                    <div class="col-xl">
                                                        <div class="form-check custom-option custom-option-icon">
                                                            <label class="form-check-label custom-option-content"
                                                                for="customRadioRent">
                                                                <span class="custom-option-body">
                                                                    <svg width="41" height="40"
                                                                        viewBox="0 0 41 40" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M6.5 30C6.5 30.663 6.76339 31.2989 7.23223 31.7678C7.70107 32.2366 8.33696 32.5 9 32.5H34C34.3315 32.5 34.6495 32.3683 34.8839 32.1339C35.1183 31.8995 35.25 31.5815 35.25 31.25V13.75C35.25 13.4185 35.1183 13.1005 34.8839 12.8661C34.6495 12.6317 34.3315 12.5 34 12.5H9C8.33696 12.5 7.70107 12.2366 7.23223 11.7678C6.76339 11.2989 6.5 10.663 6.5 10V30Z"
                                                                            fill="currentColor" fill-opacity="0.2" />
                                                                        <path
                                                                            d="M6.5 10V30C6.5 30.663 6.76339 31.2989 7.23223 31.7678C7.70107 32.2366 8.33696 32.5 9 32.5H34C34.3315 32.5 34.6495 32.3683 34.8839 32.1339C35.1183 31.8995 35.25 31.5815 35.25 31.25V13.75C35.25 13.4185 35.1183 13.1005 34.8839 12.8661C34.6495 12.6317 34.3315 12.5 34 12.5H9C8.33696 12.5 7.70107 12.2366 7.23223 11.7678C6.76339 11.2989 6.5 10.663 6.5 10ZM6.5 10C6.5 9.33696 6.76339 8.70107 7.23223 8.23223C7.70107 7.76339 8.33696 7.5 9 7.5H30.25"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M28.375 24.375C29.4105 24.375 30.25 23.5355 30.25 22.5C30.25 21.4645 29.4105 20.625 28.375 20.625C27.3395 20.625 26.5 21.4645 26.5 22.5C26.5 23.5355 27.3395 24.375 28.375 24.375Z"
                                                                            fill="currentColor" />
                                                                    </svg>

                                                                    <span class="custom-option-title">Existing
                                                                        Customer</span>
                                                                </span>
                                                                <input name="plPropertySaleRent"
                                                                    class="form-check-input" type="radio"
                                                                    value="2" id="customRadioRent"
                                                                    onchange="handleRadioChange()" />
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- Existing Customer Fetch Details --}}

                                            <div class="col-sm-12 d-none" id="wi_div">
                                                <label class="form-label pb-2" for="plContact">Enter Your Previous
                                                    Booking
                                                    Code</label>
                                                <div class="input-group input-group-merge">
                                                    <span
                                                        style="background: black;border: black;padding: 15px;font-size: 19px;color: white;font-weight: 500;"
                                                        class="input-group-text">WI — </span>
                                                    <input type="text" name=""
                                                        style="padding-left: 7px !important;font-size: 19px;"
                                                        class="form-control contact-number-mask" placeholder="0000"
                                                        id="wi_input_data" required />
                                                    <button class="btn btn-green" type="button"
                                                        style="font-size: 19px;font-weight: bolder;"
                                                        id="button-addon2" onclick="fetchExistingRecord()">Fetch Data
                                                    </button>
                                                </div>
                                            </div>
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
                                                <div class="col-sm-6 pt-3">
                                                    <label class="form-label" for="plPropertyType">Select
                                                        Service</label>
                                                    <select required id="plPropertyType" name="plPropertyType"
                                                        class="select2 form-select" data-allow-clear="true">
                                                        <option value="">Select Service Type</option>
                                                        <option value="Cost Segregation">Cost Segregation</option>
                                                        <option value="Research & Development">Research & Development
                                                        </option>
                                                        <option value="45L Tax Credits">45L Tax Credits</option>
                                                        <option value="Section 179D Tax Deduction">Section 179D Tax
                                                            Deduction
                                                        </option>
                                                        <option value="Grant Services">Grant Services</option>
                                                        <option value="CFO Services">CFO Services</option>
                                                        <option value="CFO Services">Business Tax Credit</option>
                                                        <option value="CFO Services">Incentives Advisory</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 pt-3">
                                                    <label class="form-label" for="plZipCode">Zip Code</label>
                                                    <input required type="number" id="plZipCode" name="plZipCode"
                                                        class="form-control" placeholder="99950" />
                                                </div>
                                                <div class="col-sm-6 pt-3">
                                                    <label class="form-label" for="plCountry">Country</label>
                                                    <select required id="plCountry" name="plCountry"
                                                        class="select2 form-select" data-allow-clear="true">
                                                        <option value="">Select</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="China">China</option>
                                                        <option value="France">France</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Korea">Korea, Republic of</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="Russia">Russian Federation</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates
                                                        </option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States">United States</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 pt-3">
                                                    <label class="form-label" for="plState">State</label>
                                                    <input required type="text" id="plState" name="plState"
                                                        class="form-control" placeholder="California" />
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-between">
                                                <button class="btn btn-black btn-prev nxt-prev-btn" type="button">
                                                    <i class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button class="btn btn-green btn-next btn-next-form nxt-prev-btn"
                                                    id="nextButtonForm">
                                                    <span
                                                        class="align-middle d-sm-inline-block d-none me-sm-2">Next</span>
                                                    <i class="ti ti-arrow-right ti-xs"></i>
                                                </button>
                                                <!-- <button  class="btn btn-green btn-next-form nxt-prev-btn" id="nextButtonForm">
                                            <span class="align-middle d-sm-inline-block d-none me-sm-2">Next</span>
                                            <i class="ti ti-arrow-right ti-xs"></i>
                                        </button> -->
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Social Media Details -->
                                    <div id="property-area" class="content">
                                        <div class="row g-6">

                                            <div class="col-md-6">
                                                <label class="form-label" for="plweb">Current Website or Social
                                                    Media Page</label>
                                                <input type="text" id="plweb" name="plweb"
                                                    class="form-control" placeholder="Website or Social Media Page" />
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label" for="plbrand">Name Of Business or
                                                    Brand</label>
                                                <input type="text" id="plbrand" name="plbrand"
                                                    class="form-control" placeholder="Business or Brand Name" />
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label" for="plAddress">Address</label>
                                                <textarea required id="plAddress" name="plAddress" class="form-control" rows="3"
                                                    placeholder="12, Business Park"></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <p class="mb-2 form-label">Are You Looking To</p>
                                                <div style="display: grid; grid-template-columns: 1fr 1fr;">
                                                    <div class="form-check my-2 ms-2">
                                                        <input class="form-check-input" type="radio" name="status"
                                                            id="plUnderConstruction" value="Schedule Consultation" />
                                                        <label class="form-check-label"
                                                            for="plUnderConstruction">Schedule Consultation</label>
                                                    </div>
                                                    <div class="form-check my-2 ms-2">
                                                        <input class="form-check-input" type="radio" name="status"
                                                            id="plReadyToMoveRadio" value="Join Our Team" />
                                                        <label class="form-check-label" for="plReadyToMoveRadio">Join
                                                            Our Team</label>
                                                    </div>
                                                    <div class="form-check my-2 ms-2">
                                                        <input class="form-check-input" type="radio" name="status"
                                                            id="plNewProperty" value="Inquire About Partnering" />
                                                        <label class="form-check-label" for="plNewProperty">Inquire
                                                            About Partnering</label>
                                                    </div>
                                                    <div class="form-check my-2 ms-2">
                                                        <input class="form-check-input" type="radio" name="status"
                                                            id="plResaleProperty" value="Learn More" />
                                                        <label class="form-check-label" for="plResaleProperty">Learn
                                                            More</label>
                                                    </div>
                                                </div>
                                            </div>


                                            <input type="hidden" id="status" name="status">
                                            <div class="col-md-12 pt-5 pb-5">
                                                <div class="form-check my-2 ms-2">
                                                    <input class="form-check-input" required type="checkbox"
                                                        name="plOtherCharges" id="plOtherCharges" />
                                                    <label class="form-check-label" for="plOtherCharges">
                                                        By proceeding, you confirm that you have read and agree to <a
                                                            href="https://weincentivize.com/terms-and-conditions"
                                                            target="_blank">Terms of Use</a> & <a
                                                            href="https://weincentivize.com/privacy-policy"
                                                            target="_blank">
                                                            Privacy Notice.</a>
                                                    </label>
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
                                                            Dear <span id="contactPersonMain">[Contact Name]</span>,
                                                            <br>
                                                            Thank you for scheduling a booking with us! We are excited
                                                            to confirm your appointment and look forward to providing
                                                            you with a great experience.
                                                        </p>
                                                        <h4 style="font-weight: 600; color: black;">
                                                            Booking Confirmation:
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
                                                                                style="font-weight: bold; color: black; font-size: 20px; width: 25%;">Service
                                                                                Name</span></td>
                                                                        <td
                                                                            style="font-size: 20px; color: black; font-weight: 400; width: 75%;">
                                                                            <span id="serviceName">[Service
                                                                                Name]</span>
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
                                                                                style="font-weight: bold; color: black; font-size: 20px; width: 25%;">Location</span>
                                                                        </td>
                                                                        <td
                                                                            style="font-size: 20px; color: black; font-weight: 400; width: 75%;">
                                                                            <span id="location">[Location
                                                                                Address]</span>
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
    <!-- buiassets/vendor/js/core.js -->

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
                    if(day != 'Sun' & day != 'Sat'){
                        // const InputDate = new Date(selectedDate);
                        // const day = InputDate.getDay(); // Get the day of the week (0 = Sunday, 6 = Saturday)

                        // // If the selected date is Saturday (6) or Sunday (0)
                        // if (day === 0 || day === 6) {
                        //     alert('Weekends are not allowed. Please select a weekday.');
                        //     selectedDate.value = ''; // Clear the input
                        //     return
                        // }
                        // Remove highlight from the previously selected date
                        if (selectedDate) {
                            selectedDate.classList.remove("selected-date");
                        }

                        // Highlight the newly selected date
                        e.target.classList.add("selected-date");
                        selectedDate = e.target; // Update the selectedDate to the new one

                        // Display selected date
                        const selectedDateStr = e.target.dataset.date;
                        selectedDateElement.innerHTML = `Selected Date: ${selectedDateStr}`;
                    } else {
                        toastr.error('Weekends Are Not Allowed For Booking');
                    }
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
                "08:00am-09:30am", "10:00am-11:30pm", "12:00pm-01:30pm", "02:00pm-03:30pm", "04:00pm-5:30pm", "06:00pm-07:30pm"
            ];

            function timeToMinutes(time) {
                const [hoursMinutes, period] = time.split(/(am|pm)/);
                let [hours, minutes] = hoursMinutes.split(":").map(Number);
                if (period === "pm" && hours < 12) hours += 12;
                if (period === "am" && hours === 12) hours = 0;
                return hours * 60 + minutes;
            }

            function getCurrentTimeIndex() {
                let timezone = document.querySelector('.timeZoneCheck:checked')?.value;
                let nowZ = new Date();
                const utcOffset = parseInt(timezone);
                console.log(utcOffset);

                const now = new Date(nowZ.getTime() + (utcOffset * 3600000));
                console.log(now);

                const hours = nowZ.getHours();
                const minutes = nowZ.getMinutes();
                const period = hours >= 12 ? "pm" : "am";
                const adjustedHours = hours % 12 || 12;
                const currentTime = `${adjustedHours}:${minutes >= 30 ? '30' : '00'}${period}`;

                let slot =  timeSlots.findIndex(time => timeToMinutes(time) >= timeToMinutes(currentTime));
                if(slot > 12){
                    return 0;
                }
                return slot;
            }

            function displayTimeSlots() {
                const timeSlotsContainer = document.querySelector("#timeSlotContainerDIv");
                timeSlotsContainer.innerHTML = "";

                timeSlots.forEach(i=>{
                    let button = document.createElement("button");
                    button.type = "button";
                    button.className = "btn custom-btn-outline waves-effect timeBtn";
                    button.textContent = i;
                    timeSlotsContainer.appendChild(button);
                })

                previousButton.style.pointerEvents = currentIndex === 0 ? "none" : "auto";
            }
            function formatTime(date) {
                return date.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', hour12: true });
            }
            function handleTimeSelection(button) {
                // Remove highlight from any previously selected button
                const selectedButton = document.querySelector(".btn.selected");
                if (selectedButton) {
                    selectedButton.classList.remove("selected");
                }

                // Highlight the clicked button
                button.classList.add("selected");

                // Extract and clean the time value
                const rawTimeValue = button.textContent.trim(); // Get and trim the text content

                // Update formData with cleaned time value
                // formData.selectedTime = rawTimeValue;

                // console.log("Selected Time:", formData.selectedTime); // Debugging
            }

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
                    // Check if the form fields are valid
                    // if (validateFormFields()) {
                    // Perform the action if valid
                    updateCurrentIndex(true); // Replace this with the appropriate function if needed
                    // } else {
                    //     event.preventDefault(); // Prevent default action if validation fails
                    //     alert("Please fill out all required fields."); // Optionally, show an error message
                    // }
                });
            }
            // displayTimeSlots();

            // AJAX Form Submission Script


            $('#socialMediaButton').on('click', function(e) {
                e.preventDefault();
                if($('#plAddress').val().trim() == ''){
                    console.log('here');

                    return;
                }
                showloader()
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                var formData = {
                    _token: csrfToken, // Include CSRF token
                    firstName: $('#plFirstName').val(),
                    lastName: $('#plLastName').val(),
                    email: $('#plEmail').val(),
                    contact: $('#plContact').val(),
                    propertyType: $('#plPropertyType').val(),
                    zipCode: $('#plZipCode').val(),
                    country: $('#plCountry').val(),
                    state: $('#plState').val(),
                    website: $('#plweb').val(),
                    businessName: $('#plbrand').val(),
                    address: $('#plAddress').val(),
                    status: $('input[name="status"]:checked')
                        .val(), // Fetch the selected radio button's value
                    otherCharges: $('#plOtherCharges').is(':checked') ? 'Yes' :
                    'No', // Convert boolean to string
                    selectedDate: selectedDate ? selectedDate.dataset.date :
                    null, // Ensure selectedDate is set
                    selectedTime: document.querySelector(".btn.selected") ? document.querySelector(
                        ".btn.selected").textContent : null, // Ensure selectedTime is set
                    plPropertySaleRent: getCustomerType($('input[name="plPropertySaleRent"]:checked')
                        .val()) // Map the radio button value
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
                            $('#serviceName').text(response.serviceName);
                            $('#dateTime').text(response.dateTime);
                            $('#location').text(response.location ||
                                'N/A'); // Use 'N/A' if location is null
                            $('#contactPerson').text(response.contactPerson);
                            $('#contactPersonMain').text(response.contactPerson);
                            $('#contactNumber').text(response.contactNumber);

                            // Show the booking details section
                            $('#bookingDetails').show();
                        } else {
                            // Handle booking failure (if needed)
                            toastr.error('Booking failed. Please try again.');
                            // $('#success').text("Booking failed. Please try again.");
                        }
                        hideloader()
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                        // $('#success').text("An error occurred. Please try again.");
                        toastr.error('An error occurred. Please try again.');
                        hideloader()

                    }
                });
            });


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

                dateDiv.forEach(ele => {
                    // Add an onclick event listener
                    ele.addEventListener('click', function() {
                        const selectedDate = ele.classList.contains('selected');
                        if (selectedDate) {
                            let timeNextBtn = document.getElementById('timeNextBtn');
                            timeNextBtn.removeAttribute('disabled')
                            // updateCurrentIndex(true);
                        }
                    });
                })
            }

            let timeZoneCurrentIndex;
            function selectTimeZone() {
                // let timeZones = document.querySelectorAll('.timeZoneCheck');
                // timeZones.forEach(ele => {
                //     ele.checked = false;
                // })
                let checkedBox = document.querySelector('.timeZoneCheck:checked');

                let timeZoneNextBtn = document.getElementById('timeZoneNextBtn');
                if (checkedBox) {
                    // currentIndex = getCurrentTimeIndex();
                    console.log(currentIndex);

                    timeZoneNextBtn.removeAttribute('disabled')
                } else {
                    timeZoneNextBtn.setAttribute('disabled', true);
                }
                displayTimeSlots();
                enableDateBtn()
            }
            let timeZones = document.querySelectorAll('.timeZoneCheck');
            timeZones.forEach(ele => {
                ele.addEventListener('change', selectTimeZone);
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
    </script>

    <script>
        function check(input)
        {

            var checkboxes = document.getElementsByClassName("timeZoneCheck");

            for(var i = 0; i < checkboxes.length; i++)
            {
                //uncheck all
                if(checkboxes[i].checked == true)
                {
                    checkboxes[i].checked = false;
                }
            }

            //set checked of clicked object
            if(input.checked == true)
            {
                input.checked = false;
            }
            else
            {
                input.checked = true;
            }
        }
    </script>

</body>

</html>
