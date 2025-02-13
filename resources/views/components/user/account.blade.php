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

                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="nav-align-top">
                                    <ul class="nav nav-pills flex-column flex-md-row mb-6 gap-2 gap-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="/admin/user-account"
                                            ><i class="ti-sm ti ti-users me-1_5"></i> Account</a
                                            >
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/admin/user-security"
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
                                <div class="card mb-6">
                                    <!-- Account -->
                                    <div class="card-body">
                                        <div class="d-flex align-items-start align-items-sm-center gap-6">
                                            <img
                                                src="../../assets/img/avatars/1.png"
                                                alt="user-avatar"
                                                class="d-block w-px-100 h-px-100 rounded"
                                                id="uploadedAvatar" />
                                            <div class="button-wrapper">
                                                <label for="upload" class="btn btn-primary me-3 mb-4" tabindex="0">
                                                    <span class="d-none d-sm-block">Upload new photo</span>
                                                    <i class="ti ti-upload d-block d-sm-none"></i>
                                                    <input
                                                        type="file"
                                                        id="upload"
                                                        class="account-file-input"
                                                        hidden
                                                        accept="image/png, image/jpeg" />
                                                </label>
                                                <button type="button" class="btn btn-label-secondary account-image-reset mb-4">
                                                    <i class="ti ti-refresh-dot d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Reset</span>
                                                </button>

                                                <div>Allowed JPG, GIF or PNG. Max size of 800K</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-4">
                                        <form id="formAccountSettings" method="GET" onsubmit="return false">
                                            <div class="row">
                                                <div class="mb-4 col-md-6">
                                                    <label for="firstName" class="form-label">First Name</label>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        id="firstName"
                                                        name="firstName"
                                                        value="John"
                                                        autofocus />
                                                </div>
                                                <div class="mb-4 col-md-6">
                                                    <label for="lastName" class="form-label">Last Name</label>
                                                    <input class="form-control" type="text" name="lastName" id="lastName" value="Doe" />
                                                </div>
                                                <div class="mb-4 col-md-6">
                                                    <label for="email" class="form-label">E-mail</label>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        id="email"
                                                        name="email"
                                                        value="john.doe@example.com"
                                                        placeholder="john.doe@example.com" />
                                                </div>
                                                <div class="mb-4 col-md-6">
                                                    <label for="organization" class="form-label">Organization</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="organization"
                                                        name="organization"
                                                        value="Pixinvent" />
                                                </div>
                                                <div class="mb-4 col-md-6">
                                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text">US (+1)</span>
                                                        <input
                                                            type="text"
                                                            id="phoneNumber"
                                                            name="phoneNumber"
                                                            class="form-control"
                                                            placeholder="202 555 0111" />
                                                    </div>
                                                </div>
                                                <div class="mb-4 col-md-6">
                                                    <label for="address" class="form-label">Address</label>
                                                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" />
                                                </div>
                                                <div class="mb-4 col-md-6">
                                                    <label for="state" class="form-label">State</label>
                                                    <input class="form-control" type="text" id="state" name="state" placeholder="California" />
                                                </div>
                                                <div class="mb-4 col-md-6">
                                                    <label for="zipCode" class="form-label">Zip Code</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="zipCode"
                                                        name="zipCode"
                                                        placeholder="231465"
                                                        maxlength="6" />
                                                </div>
                                                <div class="mb-4 col-md-6">
                                                    <label class="form-label" for="country">Country</label>
                                                    <select id="country" class="select2 form-select">
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
                                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States">United States</option>
                                                    </select>
                                                </div>
                                                <div class="mb-4 col-md-6">
                                                    <label for="language" class="form-label">Language</label>
                                                    <select id="language" class="select2 form-select">
                                                        <option value="">Select Language</option>
                                                        <option value="en">English</option>
                                                        <option value="fr">French</option>
                                                        <option value="de">German</option>
                                                        <option value="pt">Portuguese</option>
                                                    </select>
                                                </div>
                                                <div class="mb-4 col-md-6">
                                                    <label for="timeZones" class="form-label">Timezone</label>
                                                    <select id="timeZones" class="select2 form-select">
                                                        <option value="">Select Timezone</option>
                                                        <option value="-12">(GMT-12:00) International Date Line West</option>
                                                        <option value="-11">(GMT-11:00) Midway Island, Samoa</option>
                                                        <option value="-10">(GMT-10:00) Hawaii</option>
                                                        <option value="-9">(GMT-09:00) Alaska</option>
                                                        <option value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
                                                        <option value="-8">(GMT-08:00) Tijuana, Baja California</option>
                                                        <option value="-7">(GMT-07:00) Arizona</option>
                                                        <option value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                                        <option value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
                                                        <option value="-6">(GMT-06:00) Central America</option>
                                                        <option value="-6">(GMT-06:00) Central Time (US & Canada)</option>
                                                        <option value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                                                        <option value="-6">(GMT-06:00) Saskatchewan</option>
                                                        <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                                                        <option value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
                                                        <option value="-5">(GMT-05:00) Indiana (East)</option>
                                                        <option value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
                                                        <option value="-4">(GMT-04:00) Caracas, La Paz</option>
                                                    </select>
                                                </div>
                                                <div class="mb-4 col-md-6">
                                                    <label for="currency" class="form-label">Currency</label>
                                                    <select id="currency" class="select2 form-select">
                                                        <option value="">Select Currency</option>
                                                        <option value="usd">USD</option>
                                                        <option value="euro">Euro</option>
                                                        <option value="pound">Pound</option>
                                                        <option value="bitcoin">Bitcoin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-primary me-3">Save changes</button>
                                                <button type="reset" class="btn btn-label-secondary">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /Account -->
                                </div>
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
