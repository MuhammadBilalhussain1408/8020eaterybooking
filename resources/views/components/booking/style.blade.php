
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
        background: #e1612e;
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
        background-color: #3fbf50;
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
        background-color: #3fbf50 !important;
        border-color: #3fbf50;
        color: white;
    }

    body {
        width: 100%;
        transform-origin: bottom center;
        transform: scale(84%);
        max-height: 10vh;
    }

    .custom-btn-outline.timeBtn {
        color: #000000;
        border-color: #000000;
        background: transparent;
        font-size: 20px;
        font-weight: 600;
        padding: 14px 45px 14px 45px;
        width: 437px;
        margin-top: 6px;
        margin-bottom: 6px;
    }

    .custom-btn-outline.timeBtn:hover {
        color: #ffffff;
        border-color: #e1612e;
        background: #e1612e;
        font-weight: 600;
    }
    .custom-btn-outline.timeBtn.selected {
        color: #ffffff;
        border-color: #e1612e;
        background: #e1612e;
        font-weight: 600;
    }

    .btn-green {
        color: #fff !important;
        background-color: #e1612e !important;
        border-color: #e1612e !important;
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
        font-size: 22px;
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
        background-color: #e1612e;
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

    button.timeBtn {
        text-transform: uppercase;
    }

    .countdown-label {
        color: white;
        text-align: center;
        text-transform: uppercase;
        display: inline-block;
        letter-spacing: 2px;
        margin-top: 9px
    }

    #countdown {
        box-shadow: 0 1px 2px 0 rgba(1, 1, 1, 0.4);
        width: 200px;
        height: 108px;
        text-align: center;
        background: #000000;
        border-radius: 5px;
        margin: auto;

    }

    #countdown #tiles {
        color: #fff;
        position: relative;
        z-index: 1;
        text-shadow: 1px 1px 0px #ccc;
        text-align: center;
        padding: 20px;
        border-radius: 5px 5px 0 0;
        font-size: 30px;
        font-weight: bold;
        display: block;

    }

    .color-full {
        background: #e1612e;
    }

    .color-half {
        background: #ebc85d;
    }

    .color-empty {
        background: #e5554e;
    }

    #countdown #tiles>span {
        width: 70px;
        max-width: 70px;

        padding: 18px 0;
        position: relative;
    }

    #countdown .labels {
        width: 100%;
        height: 25px;
        text-align: center;
        position: absolute;
        bottom: 8px;
    }

    #countdown .labels li {
        width: 102px;
        font: bold 15px 'Droid Sans', Arial, sans-serif;
        color: #f47321;
        text-shadow: 1px 1px 0px #000;
        text-align: center;
        text-transform: uppercase;
        display: inline-block;
    }



    /*For Mobiles*/

    @media only screen and (min-width: 360px) and (max-width: 740px),
    only screen and (min-width: 412px) and (max-width: 915px),
    only screen and (min-width: 767px) and (max-width: 991px) {

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

        .custom-btn-outline.timeBtn {
            color: #000000;
            border-color: #000000;
            background: transparent;
            font-size: 19px;
            font-weight: 600;
            padding: 8px 62px 8px 62px;
            width: 100%;
            margin-top: 6px;
            margin-bottom: 6px;
        }
    }
</style>
