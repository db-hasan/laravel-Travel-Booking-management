<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('backend/css/style.css') }} ">
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <title>Dashboard</title>
</head>

<body>
    <!--------------- Navigation ------------->
    <div class="sidebar">
        <ul>
            <div class="custom-scrollbar-sidebar py-2">
                <li class="mt-3">
                    <a href="{{ route('dashboard') }}">
                        <span class="icon">
                            <i class="fa-solid fa-house fa-lg"></i>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{url('/admin/package')}}">
                        <span class="icon">
                            <i class="fa-regular fa-folder-open fa-lg"></i>
                        </span>
                        <span class="title">Package</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{url('/admin/booking')}}">
                        <span class="icon">
                            <i class="fa-solid fa-cart-arrow-down fa-lg"></i>
                        </span>
                        <span class="title">Booking</span>
                    </a>
                </li>
                <li class="">
                    <a href="">
                        <span class="icon">
                            <i class="fa-regular fa-credit-card fa-lg"></i>
                        </span>
                        <span class="title">Payment</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{url('/admin/promo')}}">
                        <span class="icon">
                            <i class="fa-solid fa-percent fa-lg"></i>
                        </span>
                        <span class="title">Promo</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{url('/admin/bundle')}}">
                        <span class="icon">
                            <i class="fa-solid fa-layer-group fa-lg"></i>
                        </span>
                        <span class="title">Bundle</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{url('/admin/expense')}}">
                        <span class="icon">
                            <i class="fa-solid fa-baby-carriage fa-lg"></i>
                        </span>
                        <span class="title">Expense</span>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-chart-column fa-lg"></i>
                        </span>
                        <span class="title">Report</span>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-house-circle-check fa-lg"></i>
                        </span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-layer-group fa-lg"></i>
                        </span>
                        <span class="title">Service</span>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-hand-holding-medical fa-lg"></i>
                        </span>
                        <span class="title">Facilities</span>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-building-columns fa-lg"></i>
                        </span>
                        <span class="title">About Us</span>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-address-card fa-lg"></i>
                        </span>
                        <span class="title">Contact Us</span>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-users fa-lg"></i>
                        </span>
                        <span class="title">Users</span>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-right-from-bracket fa-lg"></i>
                        </span>
                        <span class="title">Logout</span>
                    </a>
                </li>
            </div>
        </ul>
    </div>


    <!-------------------- Main -------------------->
    <div class="main">
        <div class="header d-flex fixed-top">
            <div class="logo text-center">
                <h3><a href="#">HelpsxIT</a></h3>
            </div>
            <div class="toggle">
                <i class="fa-solid fa-bars"></i>
            </div>
            <!-------------------- Design -------------------->
            <div class="header_right" style="width: 70%;">
            </div>
            <!-------------------- Design -------------------->

            <div class="text-end">
                <div class="user">
                    <button class="btn user_btn" type="button">
                        <div class="user_icon">
                            <i class="fa-solid fa-magnifying-glass fa-xl"></i>
                        </div>
                    </button>
                </div>
            </div>

            <div class="text-end">
                <div class="user">
                    <button class="btn user_btn" type="button">
                        <div class="user_icon">
                            <i class="fa-solid fa-circle-plus fa-xl"></i>
                        </div>
                    </button>
                </div>
            </div>

            <div class="text-end">
                <div class="user">
                    <button class="btn user_btn" type="button">
                        <div class="user_icon">
                            <i class="fa-solid fa-cart-plus fa-xl"></i>
                        </div>
                    </button>
                </div>
            </div>

            <div class="text-end">
                <div class="dropdown user">
                    <button class="btn user_btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user_icon">
                            <i class="fa-regular fa-comments fa-xl"></i>
                        </div>
                    </button>
                    <ul class="dropdown-menu " style="width: 250px;">
                        <li class="dropdown-item text-end">
                            <a class="dropdown-link" href="#">15 Notifications</a>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex justify-content-between">
                                <a class="dropdown-link" href="#"><i class="fa-solid fa-chart-column"></i> Stock Report
                                </a>
                                <small>3 mins</small>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex justify-content-between">
                                <a class="dropdown-link" href="#"><i class="fa-solid fa-heart-circle-minus"></i> User
                                    message
                                </a>
                                <small>3 mins</small>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex justify-content-between">
                                <a class="dropdown-link" href="#"><i class="fa-solid fa-cart-plus"></i> Sales Report
                                </a>
                                <small>3 mins</small>
                            </div>
                        </li>
                        <li class="dropdown-item text-center">
                            <a class="dropdown-link" href="#">See All Notifications</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="text-end">
                <div class="dropdown user">
                    <button class="btn user_btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user_icon">
                            <i class="fa-regular fa-bell fa-xl"></i>
                        </div>
                    </button>
                    <ul class="dropdown-menu " style="width: 250px;">
                        <li class="dropdown-item text-end">
                            <a class="dropdown-link" href="#">15 Notifications</a>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex justify-content-between">
                                <a class="dropdown-link" href="#"><i class="fa-solid fa-chart-column"></i> Stock Report
                                </a>
                                <small>3 mins</small>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex justify-content-between">
                                <a class="dropdown-link" href="#"><i class="fa-solid fa-heart-circle-minus"></i> User
                                    message
                                </a>
                                <small>3 mins</small>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex justify-content-between">
                                <a class="dropdown-link" href="#"><i class="fa-solid fa-cart-plus"></i> Sales Report
                                </a>
                                <small>3 mins</small>
                            </div>
                        </li>
                        <li class="dropdown-item text-center">
                            <a class="dropdown-link" href="#">See All Notifications</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="text-end pe-5">
                <div class="dropdown user">
                    <button class="btn dropdown-toggle user_btn" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="{{asset('images/user.jpg') }}" class="img-fluid" />
                        <span> Ross C. Lopez</span>
                    </button>
                    <ul class="dropdown-menu ">
                        <li class="dropdown-item">
                            <a class="dropdown-link" href="#"><i class="fas fa-cog"></i> Manage Account
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a class="dropdown-link" href="#"><i class="fas fa-user-tie"></i> My Profile
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a class="dropdown-link" href="#"><i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="px-4 pt-4" style="margin-top: 50px;">

            {{-- ------------content part-------------- --}}
                @yield('content')
            {{-- ------------content part-------------- --}}
            
        </div>

    </div>

    <script src="{{asset('bootstrap/bootstrap.bundle.min.js') }} "></script>
    <script src="{{asset('backend/js/custom.js') }} "></script>
    
    
</body>

</html>