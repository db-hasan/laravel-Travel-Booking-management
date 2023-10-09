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
                <a class="navbar-brand logo " href="#">Soft ERP</a>
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
                                        <a href="#"> Dashboard</a></i>
                                </button>
                            </div>

                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse1" aria-expanded="false"
                                    aria-controls="flush-collapse1">
                                    <i class="fa-solid fa-tags">
                                        <a href="#"> Category</a></i>
                                </button>
                                <div id="flush-collapse1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"> <i class="fa-solid fa-tag">
                                            <a href="#"> Brands</a></i></div>
                                    <div class="accordion-body"> <i class="fa-solid fa-layer-group">
                                            <a href="#"> Category</a></i></div>
                                    <div class="accordion-body"> <i class="fa-solid fa-box">
                                            <a href="#"> SubCategory</a></i></div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse9" aria-expanded="false"
                                    aria-controls="flush-collapse9">
                                    <i class="fa-solid fa-layer-group">
                                        <a href="#"> Product</a></i>
                                </button>
                                <div id="flush-collapse9" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"> <i class="fa-solid fa-plus">
                                            <a href="#"> Add Product</a></i></div>
                                    <div class="accordion-body"> <i class="fa-solid fa-truck-fast">
                                            <a href="#"> Add Supplier</a></i></div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse2" aria-expanded="false"
                                    aria-controls="flush-collapse2">
                                    <i class="fa-solid fa-warehouse ">
                                        <a href="#"> Stock</a></i>
                                </button>
                                <div id="flush-collapse2" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"> <i class="fa-solid fa-baby-carriage">
                                            <a href="#"> Purchaes Stock</a></i></div>
                                    <div class="accordion-body"> <i class="fa-solid fa-right-left">
                                            <a href="#"> Retrun Stock</a></i></div>
                                    <div class="accordion-body"> <i class="fa-solid fa-trash-can">
                                            <a href="#"> Damage Stock</a></i></div>
                                    <div class="accordion-body"> <i class="fa-solid fa-file-invoice-dollar">
                                            <a href="#"> Stock Invioce</a></i></div>
                                    <div class="accordion-body"> <i class="fa-solid fa-retweet">
                                            <a href="#"> Retrun Invioce</a></i></div>
                                    <div class="accordion-body"> <i class="fa-solid fa-file-invoice">
                                            <a href="#"> Damage Invioce</a></i></div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse3" aria-expanded="false"
                                    aria-controls="flush-collapse3">
                                    <i class="fa-solid fa-cart-shopping">
                                        <a href="#"> Sales</a></i>
                                </button>
                                <div id="flush-collapse3" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"> <i class="fa-solid fa-cart-shopping">
                                            <a href="#"> Sales Product</a></i></div>
                                    <div class="accordion-body"> <i class="fa-solid fa-right-left">
                                            <a href="#"> Retrun Product</a></i></div>
                                    <div class="accordion-body"> <i class="fa-solid fa-file-invoice-dollar">
                                            <a href="#"> Sales Invioce</a></i></div>
                                    <div class="accordion-body"> <i class="fa-solid fa-file-invoice">
                                            <a href="#"> Retrun Invioce</a></i></div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse4" aria-expanded="false"
                                    aria-controls="flush-collapse4">
                                    <i class="fa-solid fa-chart-simple">
                                        <a href="#"> Report</a></i>
                                </button>
                                <div id="flush-collapse4" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"> <i class="fa-solid fa-cart-shopping">
                                            <a href="#"> Sales Report</a></i></div>
                                    <div class="accordion-body"> <i class="fa-solid fa-layer-group">
                                            <a href="#"> Stock Report</a></i></div>
                                    <div class="accordion-body"> <i class="fa-solid fa-truck-fast">
                                            <a href="#"> Supplier</a></i></div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse5" aria-expanded="false"
                                    aria-controls="flush-collapse5">
                                    <i class="fa-solid fa-chart-column">
                                        <a href="#"> Collection</a></i>
                                </button>
                                <div id="flush-collapse5" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"> <i class="fa-solid fa-plus">
                                            <a href="#"> Add Collection</a></i></div>
                                    <div class="accordion-body"> <i class="fa-solid fa-list">
                                            <a href="#"> Collection list</a></i></div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse6" aria-expanded="false"
                                    aria-controls="flush-collapse6">
                                    <i class="fa-solid fa-street-view">
                                        <a href="#"> Accounts</a></i>
                                </button>
                                <div id="flush-collapse6" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"> <i class="fa-solid fa-plus">
                                            <a href="#"> Add Collection</a></i></div>
                                    <div class="accordion-body"> <i class="fa-solid fa-list">
                                            <a href="#"> Collection list</a></i></div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse8" aria-expanded="false"
                                    aria-controls="flush-collapse8">
                                    <i class="fa-solid fa-users">
                                        <a href="#"> Users</a></i>
                                </button>
                                <div id="flush-collapse8" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"> <i class="fa-solid fa-users">
                                            <a href="#"> Add User</a></i></div>
                                    <div class="accordion-body"> <i class="fa-solid fa-address-card">
                                            <a href="#"> Contact</a></i></div>
                                </div>
                            </div>

                            <div class="accordion-item custom">
                                <button class="accordion-button collapsed" type="button">
                                    <i class="fa-solid fa-house">
                                        <a href="#"> Developer Info</a></i>
                                </button>
                            </div>

                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item custom">
                                    <button class="accordion-button collapsed" type="button">
                                        <i class="fa-solid fa-right-to-bracket">
                                            <a to="#accordionFlushExample"> Logout</a></i>
                                    </button>
                                </div>
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
