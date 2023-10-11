<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('backend/css/style.css') }} ">
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Dashboard</title>
</head>

<body>
    <nav id='header' class="navbar navbar-expand-md navbar-light bg-success ">
        <div class="container-fluid">
            <div class="">
                <a class="navbar-brand logo " href="/">Soft ERP</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="col-md-10 ">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#"> <i
                                    class="fa-solid fa-handshake-angle"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#"> <i class="fa-solid fa-clock"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link icons" aria-current="page" href="#"><i class="fa-solid fa-bell"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <div class="dropdown user">
                        <button class="btn user-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('images/avatar.png') }}" class="img-fluid" />
                        </button>
                        <ul class="dropdown-menu ">
                            <li class="dropdown-item">
                                <a class="dropdown-link" href="#"><i class="fas fa-user-tie"></i> My Profile
                                </a>
                            </li>
                            <li class="dropdown-item">
                                <a class="dropdown-link" href="#"><i class="fas fa-cog"></i> Manage Account
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
        </div>
    </nav>
    <div class="row rows">
        <div class="col-sm-4 col-md-3 col-lg-2">
            <div class="custom-scrollbar">
                <div class="scroll-content">
                    <div id='sidebar'>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item custom">
                                <button class="accordion-button collapsed" type="button">
                                    <i class="fa-solid fa-house">
                                        <a href="{{ route('dashboard') }}"> Dashboard</a></i>
                                </button>
                            </div>
                            <div class="accordion-item custom">
                                <button class="accordion-button collapsed" type="button">
                                    <i class="fa-solid fa-image">
                                        <a href="{{ route('dashboard') }}"> Banner</a></i>
                                </button>
                            </div>
                            <div class="accordion-item custom">
                                <button class="accordion-button collapsed" type="button">
                                    <i class="fa-solid fa-location-crosshairs">
                                        <a href="{{ route('dashboard') }}"> Location</a></i>
                                </button>
                            </div>
                            <div class="accordion-item custom">
                                <button class="accordion-button collapsed" type="button">
                                    <i class="fa-solid fa-gifts">
                                        <a href="{{ route('dashboard') }}"> Package</a></i>
                                </button>
                            </div>

                            <div class="accordion-item custom">
                                <button class="accordion-button collapsed" type="button">
                                    <i class="fa-solid fa-cart-arrow-down">
                                        <a href="{{ route('dashboard') }}"> Booking</a></i>
                                </button>
                            </div>
                            <div class="accordion-item custom">
                                <button class="accordion-button collapsed" type="button">
                                    <i class="fa-regular fa-credit-card">
                                        <a href="{{ route('dashboard') }}"> Payment</a></i>
                                </button>
                            </div>
                            <div class="accordion-item custom">
                                <button class="accordion-button collapsed" type="button">
                                    <i class="fa-solid fa-users">
                                        <a href="{{ route('dashboard') }}"> Add User</a></i>
                                </button>
                            </div>

                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse5" aria-expanded="false"
                                    aria-controls="flush-collapse5">
                                    <i class="fa-solid fa-chart-column">
                                        <a href="#"> Reoprt</a></i>
                                </button>
                                <div id="flush-collapse5" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"> <i class="fa-solid fa-plus">
                                            <a href="{{ route('dashboard') }}"> Add Expenses</a></i></div>
                                    <div class="accordion-body"> <i class="fa-solid fa-list">
                                            <a href="{{ route('dashboard') }}"> Collection list</a></i></div>
                                </div>
                            </div>
                            <div class="accordion-item custom">
                                <button class="accordion-button collapsed" type="button">
                                    <i class="fa-solid fa-building-columns">
                                        <a href="{{ route('dashboard') }}"> About Info</a></i>
                                </button>
                            </div>

                            <div class="accordion-item custom">
                                <button class="accordion-button collapsed" type="button">
                                    <i class="fa-solid fa-address-card">
                                        <a href="{{ route('dashboard') }}"> Contact Info</a></i>
                                </button>
                            </div>
                            <div class="accordion-item custom">
                                <button class="accordion-button collapsed" type="button">
                                    <i class="fa-solid fa-right-to-bracket">
                                        <a href="{{ route('dashboard') }}"> Logout</a></i>
                                </button>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-8 col-md-9 col-lg-10 dash">
            <div class="custom-scrollbar">
                <div class="scroll-content">

                    {{-- ------------content part-------------- --}}
                    @yield('content')
                    {{-- ------------content part-------------- --}}

                </div>
            </div>
        </div>
    </div>
    <div class="text-center bg-warning ">This is footer page</div>

    <script src="{{asset('bootstrap/bootstrap.bundle.min.js') }} "></script>
</body>

</html>
