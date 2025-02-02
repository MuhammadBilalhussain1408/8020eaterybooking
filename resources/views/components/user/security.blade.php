@extends('layouts.master')
@section('content')
    <style>

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

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="nav-align-top">
                                    <ul class="nav nav-pills flex-column flex-md-row mb-6 gap-2 gap-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/admin/user-account"
                                            ><i class="ti-sm ti ti-users me-1_5"></i> Account</a
                                            >
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="/admin/user-security"
                                            ><i class="ti-sm ti ti-lock me-1_5"></i> Security</a
                                            >
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages-account-settings-notifications.html"
                                            ><i class="ti-sm ti ti-bell me-1_5"></i> Notifications</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                                <!-- Change Password -->
                                <div class="card mb-6">
                                    <h5 class="card-header">Change Password</h5>
                                    <div class="card-body pt-1">
                                        <form id="formAccountSettings" method="GET" onsubmit="return false">
                                            <div class="row">
                                                <div class="mb-6 col-md-6 form-password-toggle">
                                                    <label class="form-label" for="currentPassword">Current Password</label>
                                                    <div class="input-group input-group-merge">
                                                        <input
                                                            class="form-control"
                                                            type="password"
                                                            name="currentPassword"
                                                            id="currentPassword"
                                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-6 col-md-6 form-password-toggle">
                                                    <label class="form-label" for="newPassword">New Password</label>
                                                    <div class="input-group input-group-merge">
                                                        <input
                                                            class="form-control"
                                                            type="password"
                                                            id="newPassword"
                                                            name="newPassword"
                                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                                    </div>
                                                </div>

                                                <div class="mb-6 col-md-6 form-password-toggle">
                                                    <label class="form-label" for="confirmPassword">Confirm New Password</label>
                                                    <div class="input-group input-group-merge">
                                                        <input
                                                            class="form-control"
                                                            type="password"
                                                            name="confirmPassword"
                                                            id="confirmPassword"
                                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-body">Password Requirements:</h6>
                                            <ul class="ps-4 mb-0">
                                                <li class="mb-4">Minimum 8 characters long - the more, the better</li>
                                                <li class="mb-4">At least one lowercase character</li>
                                                <li>At least one number, symbol, or whitespace character</li>
                                            </ul>
                                            <div class="mt-6">
                                                <button type="submit" class="btn btn-primary me-3">Save changes</button>
                                                <button type="reset" class="btn btn-label-secondary">Reset</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!--/ Change Password -->

                                <!-- Two-steps verification -->
                                <div class="card mb-6">
                                    <div class="card-body">
                                        <h5 class="mb-6">Two-steps verification</h5>
                                        <h5 class="mb-4 text-body">Two factor authentication is not enabled yet.</h5>
                                        <p class="w-75">
                                            Two-factor authentication adds an additional layer of security to your account by requiring more
                                            than just a password to log in.
                                            <a href="javascript:void(0);">Learn more.</a>
                                        </p>
                                        <button class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#enableOTP">
                                            Enable Two-Factor Authentication
                                        </button>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <!-- Enable OTP Modal -->
                                <div class="modal fade" id="enableOTP" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                <div class="text-center mb-6">
                                                    <h4 class="mb-2">Enable One Time Password</h4>
                                                    <p>Verify Your Mobile Number for SMS</p>
                                                </div>
                                                <p>
                                                    Enter your mobile phone number with country code and we will send you a verification code.
                                                </p>
                                                <form id="enableOTPForm" class="row g-5" onsubmit="return false">
                                                    <div class="col-12">
                                                        <label class="form-label" for="modalEnableOTPPhone">Phone Number</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text">US (+1)</span>
                                                            <input
                                                                type="text"
                                                                id="modalEnableOTPPhone"
                                                                name="modalEnableOTPPhone"
                                                                class="form-control phone-number-otp-mask"
                                                                placeholder="202 555 0111" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary me-3">Submit</button>
                                                        <button
                                                            type="reset"
                                                            class="btn btn-label-secondary"
                                                            data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Enable OTP Modal -->

                                <!-- /Modal -->

                                <!--/ Two-steps verification -->

                                <!-- Recent Devices -->
                                <div class="card mb-6">
                                    <h5 class="card-header">Recent Devices</h5>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="text-truncate">Browser</th>
                                                <th class="text-truncate">Device</th>
                                                <th class="text-truncate">Location</th>
                                                <th class="text-truncate">Recent Activities</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-truncate text-heading fw-medium">
                                                    <i class="ti ti-brand-windows ti-md align-top text-info me-2"></i>Chrome on Windows
                                                </td>
                                                <td class="text-truncate">HP Spectre 360</td>
                                                <td class="text-truncate">Switzerland</td>
                                                <td class="text-truncate">10, July 2021 20:07</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate text-heading fw-medium">
                                                    <i class="ti ti-device-mobile ti-md align-top text-danger text-success me-2"></i>Chrome on
                                                    iPhone
                                                </td>
                                                <td class="text-truncate">iPhone 12x</td>
                                                <td class="text-truncate">Australia</td>
                                                <td class="text-truncate">13, July 2021 10:10</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate text-heading fw-medium">
                                                    <i class="ti ti-brand-android ti-md align-top text-success me-2"></i>Chrome on Android
                                                </td>
                                                <td class="text-truncate">Oneplus 9 Pro</td>
                                                <td class="text-truncate">Dubai</td>
                                                <td class="text-truncate">14, July 2021 15:15</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate text-heading fw-medium">
                                                    <i class="ti ti-brand-apple ti-md align-top me-2"></i>Chrome on MacOS
                                                </td>
                                                <td class="text-truncate">Apple iMac</td>
                                                <td class="text-truncate">India</td>
                                                <td class="text-truncate">16, July 2021 16:17</td>
                                            </tr>
                                            <tr>
                                                <td class="text-truncate text-heading fw-medium">
                                                    <i class="ti ti-brand-windows ti-md align-top text-warning me-2"></i>Chrome on Windows
                                                </td>
                                                <td class="text-truncate">HP Spectre 360</td>
                                                <td class="text-truncate">Switzerland</td>
                                                <td class="text-truncate">20, July 2021 21:01</td>
                                            </tr>
                                            <tr class="border-transparent">
                                                <td class="text-truncate text-heading fw-medium">
                                                    <i class="ti ti-brand-android ti-md align-top text-success me-2"></i>Chrome on Android
                                                </td>
                                                <td class="text-truncate">Oneplus 9 Pro</td>
                                                <td class="text-truncate">Dubai</td>
                                                <td class="text-truncate">21, July 2021 12:22</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--/ Recent Devices -->
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/js/pages-account-settings-account.js') }}"></script>

@endsection
