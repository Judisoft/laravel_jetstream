<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="generator" content="Hugo 0.87.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <meta name="description" content="Medxam is an online quiz platform for students preparing for Nationa entrance examination to study medecine">
    <title>Dashboard | Medxam</title>

    <!-- STYLESHEETS -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--- -->

    <!-- Fonts [ OPTIONAL ] -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;family=Ubuntu:wght@400;500;700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.75a07e3a3100a6fed983b15ad1b297c127a8c2335854b0efc3363731475cbed6.css">

    <link rel="stylesheet" href="assets/css/nifty.min.4d1ebee0c2ac4ed3c2df72b5178fb60181cfff43375388fee0f4af67ecf44050.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        .logo-img{
          height: 40px;
          width: 40px; 
          background-color: #4267B2;
          padding: 3px;
          border-radius: 10px;
          
        }
      </style>
  
</head>

<body class="jumping">

    <!-- PAGE CONTAINER -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div id="root" class="root mn--max hd--expanded">

        <!-- CONTENTS -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <section id="content" class="content">
            <div class="content__header content__boxed overlapping">
                <div class="content__wrap">

                    <!-- Page title and information -->
                    <h1 class="page-title mb-2">Dashboard</h1>
                    <h2 class="h5">Hello {{ Auth::user()->name }}</h2>
                    <!-- END : Page title and information -->

                </div>

            </div>

            <div class="content__boxed">
                <div class="content__wrap">
                    <div class="row">
                        <div class="col-xl-7 mb-3 mb-xl-0">
                            <div class="card h-100">
                                <div class="card-header d-flex align-items-center border-0">
                                    <div class="me-auto">
                                        <h3 class="h4 m-0">Users</h3>
                                    </div>
                                </div>

                                <!-- Users - Area Chart -->
                                <div class="card-body py-0" style="height: 250px; max-height: 250px">
                                    <canvas id="usersChart"></canvas>
                                </div>
                                <!-- END : Users- Area Chart -->
                                <!-- Simple state widget -->
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 p-3">
                                            <div class="card bg-info text-white overflow-hidden mb-3 pb-2">
                                                <div class="h4 display-3">{{ $users->count() }}</div>
                                            </div>
                                            <span class="h6">Total Users</span>
                                        </div>
                                        <div class="flex-grow-1 text-center ms-3">
                                            <button class="btn btn-lg btn-danger">View Details</button>

                                            <!-- Social media statistics -->
                                            <div class="mt-4 pt-3 d-flex justify-content-around border-top">
                                                <div class="text-center">
                                                    <h4 class="mb-1">{{ $premium_users->count() }}</h4>
                                                    <small class="text-muted">premium</small>
                                                </div>
                                                <div class="text-center">
                                                    <h4 class="mb-1">{{ $free_trial_users->count() }}</h4>
                                                    <small class="text-muted">Free</small>
                                                </div>
                                                <div class="text-center">
                                                    <h4 class="mb-1">{{ $unverified_accounts->count() }}</h4>
                                                    <small class="text-muted">Unverified</small>
                                                </div>
                                            </div>
                                            <!-- END : Social media statistics -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END : Simple state widget -->
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="row">
                                <div class="col-sm-6">

                                    <!-- Tile - HDD Usage -->
                                    <div class="card bg-success text-white overflow-hidden mb-3 pb-3">
                                        <div class="p-3 pb-2">
                                            <h5 class="mb-3"><i class="demo-pli-speech-bubble-5 text-reset text-opacity-75 fs-3 me-2"></i>Past Questions</h5>
                                            <ul class="list-group list-group-borderless">
                                                <li class="list-group-item p-0 text-reset d-flex justify-content-between align-items-start">
                                                    <div class="me-auto">Biology</div>
                                                    <span class="fw-bold">{{ $bio_quest->count() }}</span>
                                                </li>
                                                <li class="list-group-item p-0 text-reset d-flex justify-content-between align-items-start">
                                                    <div class="me-auto">Chemistry</div>
                                                    <span class="fw-bold">{{ $chem_quest->count() }}</span>
                                                </li>
                                                <li class="list-group-item p-0 text-reset d-flex justify-content-between align-items-start">
                                                    <div class="me-auto">French</div>
                                                    <span class="fw-bold">{{ $french_quest->count() }}</span>
                                                </li>
                                                <li class="list-group-item p-0 text-reset d-flex justify-content-between align-items-start">
                                                    <div class="me-auto">Chemistry</div>
                                                    <span class="fw-bold">{{ $gen_know_quest->count() }}</span>
                                                    <li class="list-group-item p-0 text-reset d-flex justify-content-between align-items-start">
                                                        <div class="me-auto">Pysics</div>
                                                        <span class="fw-bold">{{ $phy_quest->count() }}</span>
                                                    </li>
                                                </li>
                                            </ul>
                                            <div class="d-grid px-3 mt-3">
                                                <a href="#" class="btn btn-sm btn-light">View Details</a>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- END : Tile -  Usage -->

                                </div>
                                <div class="col-sm-6">

                                    <!-- Tile - Earnings -->
                                    <div class="card bg-info text-white overflow-hidden mb-3 pb-3">
                                        <div class="p-3 pb-2">
                                            <h5 class="mb-3"><i class="demo-psi-coin text-reset text-opacity-75 fs-2 me-2"></i> Earning</h5>
                                            <ul class="list-group list-group-borderless">
                                                <li class="list-group-item p-0 text-reset d-flex justify-content-between align-items-start">
                                                    <div class="me-auto">Today</div>
                                                    <span class="fw-bold">{{__('FCFA').' '.$today_earning }}</span>
                                                </li>
                                                <li class="list-group-item p-0 text-reset d-flex justify-content-between align-items-start">
                                                    <div class="me-auto">Last 7 Day</div>
                                                    <span class="fw-bold">{{ __('FCFA').' '.$last_seven_todays_earning }}</span>
                                                </li>
                                                <li class="list-group-item p-0 text-reset d-flex justify-content-between align-items-start">
                                                    <div class="me-auto">Last Month</div>
                                                    <span class="fw-bold">{{ __('FCFA').' '.$last_month_earning }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="d-grid px-3 mt-3 pt-4">
                                            <a href="#" class="btn btn-sm btn-light">View Details</a>
                                        </div>

                                    </div>
                                    <!-- END : Tile - Earnings -->

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">

                                    <!-- Tile - Sales -->
                                    <div class="card bg-purple text-white overflow-hidden mb-3 pb-2">
                                        <div class="p-3 pb-2">
                                            <h5 class="mb-3"><i class="demo-pli-male text-reset text-opacity-75 fs-2 me-2"></i>Weekly Best Students</h5>
                                            <ul class="list-group list-group-borderless">
                                                @foreach ($weekly_top_three as $top_three)
                                                    <li class="list-group-item p-0 text-reset d-flex justify-content-between align-items-start">
                                                        <div class="me-auto">{{ $top_three->user->name }}</div>
                                                        <span class="fw-bold">{{ $top_three->score }}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="d-grid px-3 mt-3">
                                            <a href="#" class="btn btn-sm btn-light">View Details</a>
                                        </div>
                                    </div>
                                    <!-- END : Tile - Sales -->

                                </div>
                                <div class="col-sm-6">

                                    <!-- Tile - Task Progress -->
                                    <div class="card bg-warning text-white overflow-hidden mb-3 pb-2">
                                        <div class="p-3 pb-2">
                                            <h5 class="mb-3"><i class="demo-pli-speech-bubble-5 text-reset text-opacity-75 fs-2 me-2"></i> Users' Questions</h5>
                                            <ul class="list-group list-group-borderless">
                                                <li class="list-group-item p-0 text-reset d-flex justify-content-between align-items-start">
                                                    <div class="me-auto">Total</div>
                                                    <span class="fw-bold">{{ $total_questions }}</span>
                                                </li>
                                                <li class="list-group-item p-0 text-reset d-flex justify-content-between align-items-start">
                                                    <div class="me-auto">Answered</div>
                                                    <span class="fw-bold">{{ $questions_answered }}</span>
                                                </li>
                                                <li class="list-group-item p-0 text-reset d-flex justify-content-between align-items-start">
                                                    <div class="me-auto">Unanswered</div>
                                                    <span class="fw-bold">{{ $questions_unanswered }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="d-grid px-3 mt-3">
                                            <a href="#" class="btn btn-sm btn-light">View Details</a>
                                        </div>
                                    </div>
                                    <!-- END : Tile - Task Progress -->

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="content__boxed">
                <div class="content__wrap">

                    <!-- Table with toolbar -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-3">Users Subscription Status</h5>
                            <div class="row">

                                <!-- Left toolbar -->
                                <div class="col-md-6 d-flex gap-1 align-items-center mb-3">
                                    <button class="btn btn-primary hstack gap-2 align-self-center">
                                        <i class="demo-psi-add fs-5"></i>
                                        <span class="vr"></span>
                                        Add New
                                    </button>
                                    <button class="btn btn-icon btn-outline-light" aria-label="Print table">
                                        <i class="demo-pli-printer fs-5"></i>
                                    </button>
                                    <div class="btn-group">
                                        <button class="btn btn-icon btn-outline-light" aria-label="Information"><i class="demo-pli-exclamation fs-5"></i></button>
                                        <button class="btn btn-icon btn-outline-light" aria-label="Remove"><i class="demo-pli-recycling fs-5"></i></button>
                                    </div>
                                </div>
                                <!-- END : Left toolbar -->

                                <!-- Right Toolbar -->
                                <div class="col-md-6 d-flex gap-1 align-items-center justify-content-md-end mb-3">
                                    <div class="form-group">
                                        <input type="text" id="myInput" placeholder="Search..." class="form-control" autocomplete="off">

                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-icon btn-outline-light" aria-label="Download"><i class="demo-pli-download-from-cloud fs-5"></i></button>
                                        <div class="btn-group dropdown">
                                            <button class="btn btn-icon btn-outline-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="visually-hidden">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- END : Right Toolbar -->

                            </div>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div>
                                    <div class="h5 text-danger">{{ __('Whoops! Something went wrong.') }}</div>
                                    <ul class="mt-3 small text-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if(Session::has('success'))
                                <div class="alert alert-success" >
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table">
                                    <thead>
                                        <tr>
                                            <th>Payment ID</th>
                                            <th>User</th>
                                            <th>Amount</th>
                                            <th>Payment date</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Payment ID</th>
                                            <th class="text-center">Transaction ID</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        @forelse($users_status as $user_status)
                                        <tr>
                                            <td><a href="#" class="btn-link">{{ $user_status->id }} </a></td>
                                            <td>{{ $user_status->user->name }}</td>
                                            <td>FCFA {{ $user_status->amount }}</td>
                                            <td>{{ $user_status->created_at }}</td>
                                            <td class="text-center fs-5">
                                                @if($user_status->user->is_premium == 1)
                                                    <div class="d-block badge bg-success">activated</div>
                                                @else
                                                    <form method="POST" action="{{ route('upgrade.user_status', $user_status->user_id) }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <a role="button" type="submit" class="d-block badge bg-warning" href="{{ route('upgrade.user_status', $user_status->user_id) }}">Upgrade </a>
                                                    </form>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $user_status->payment_method }}</td>
                                            <td class="text-center">{{ $user_status->transaction_id }}</td>
                                        </tr>
                                        @empty
                                        No data available <i class="fab fa-the-red-yeti"></i>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            <nav class="text-align-center mt-5" aria-label="Table navigation">
                                <ul class="pagination justify-content-center">
                                    {{ $users_status }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- END : Table with toolbar -->

                </div>
            </div>
            <div class="content__boxed bg-gray-500 my-3 pt-3">
                <div class="content__wrap">

                    <div class="row gx-5 gy-5 gy-md-0">
                        <div class="col-md-4">

                            <!-- TODO List -->
                            <h4 class="mb-3">To-do list</h4>
                            <ul class="list-group list-group-borderless">
                                <li class="list-group-item px-0">
                                    <div class="form-check ">
                                        <input id="_dm-todoList1" class="form-check-input" type="checkbox" checked>
                                        <label for="_dm-todoList1" class="form-check-label text-decoration-line-through">
                                            Find an idea <span class="badge bg-danger text-decoration-line-through">Important</span>
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item px-0">
                                    <div class="form-check">
                                        <input id="_dm-todoList2" class="form-check-input" type="checkbox">
                                        <label for="_dm-todoList2" class="form-check-label">
                                            Do some work
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item px-0">
                                    <div class="form-check">
                                        <input id="_dm-todoList3" class="form-check-input" type="checkbox">
                                        <label for="_dm-todoList3" class="form-check-label">
                                            Read the book
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item px-0">
                                    <div class="form-check">
                                        <input id="_dm-todoList4" class="form-check-input" type="checkbox">
                                        <label for="_dm-todoList4" class="form-check-label">
                                            Upgrade server <span class="badge bg-warning">Warning</span>
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item px-0">
                                    <div class="form-check">
                                        <input id="_dm-todoList5" class="form-check-input" type="checkbox">
                                        <label for="_dm-todoList5" class="form-check-label">
                                            Redesign my logo <span class="badge bg-info">2 Mins</span>
                                        </label>
                                    </div>
                                </li>
                            </ul>

                            <div class="input-group mt-3">
                                <input type="text" class="form-control form-control-sm" placeholder="Add new list" aria-label="Add new list" aria-describedby="button-addon">
                                <button id="button-addon" class="btn btn-sm btn-secondary hstack gap-2" type="button">
                                    <i class="demo-psi-add text-white-50 fs-4"></i> Add New
                                </button>
                            </div>
                            <!-- END : TODO List -->

                        </div>
                        <div class="col-md-4">

                            <!-- Service options -->
                            <h4 class="mb-3">Services</h4>
                            <div class="list-group list-group-borderless">
                                <div class="list-group-item px-0 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-check-label h5 mb-0" for="_dm-dbPersonalStatus">Show my personal status</label>
                                        <div class="form-check form-switch">
                                            <input id="_dm-dbPersonalStatus" class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group-item px-0 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-check-label h5 mb-0" for="_dm-dbOfflineContact">Show offline contact</label>
                                        <div class="form-check form-switch">
                                            <input id="_dm-dbOfflineContact" class="form-check-input" type="checkbox">
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group-item px-0 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-check-label h5 mb-0" for="_dm-dbMuteNotifications">Mute notifications</label>
                                        <div class="form-check form-switch">
                                            <input id="_dm-dbMuteNotifications" class="form-check-input" type="checkbox">
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group-item px-0 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-check-label h5 mb-0" for="_dm-dbInvisibleMode">Invisible Mode</label>
                                        <div class="form-check form-switch">
                                            <input id="_dm-dbInvisibleMode" class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END : Service options -->

                        </div>
                        <div class="col-md-4">

                            <!-- User quote  -->
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img class="img-lg rounded-circle" src="assets/img/profile-photos/3.png" alt="Profile Picture" loading="lazy">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <a href="#" class="d-block h5 text-decoration-none mb-0">Kum Jude B.</a>
                                    Developer
                                </div>
                            </div>

                            <figure class="d-flex flex-column align-items-center justify-content-center my-4">
                                <blockquote class="blockquote mb-0">
                                    <p class="quote">If you keep doing the same thing, sure you will get the same result(s).</p>
                                </blockquote>
                            </figure>

                            <div class="border-top pt-3">
                                <a href="#" class="btn btn-icon btn-link text-indigo" aria-label="Facebook button">
                                    <i class="demo-psi-facebook fs-4"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-link text-info" aria-label="Twitter button">
                                    <i class="demo-psi-twitter fs-4"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-link text-red" aria-label="Google plus button">
                                    <i class="demo-psi-google-plus fs-4"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-link text-orange" aria-label="Instagram button">
                                    <i class="demo-psi-instagram fs-4"></i>
                                </a>
                            </div>
                            <!-- END : User quote  -->

                        </div>
                    </div>

                </div>
            </div>
            <!-- FOOTER -->
            <footer class="content__boxed mt-auto">
                <div class="content__wrap py-3 py-md-1 d-flex flex-column flex-md-row align-items-md-center">
                    <div class="text-nowrap mb-4 mb-md-0">Copyright &copy; 2022 <a href="#" class="ms-1 btn-link fw-bold">Medxam v1.0</a></div>
                    <nav class="nav flex-column gap-1 flex-md-row gap-md-3 ms-md-auto" style="row-gap: 0 !important;">
                        <a class="nav-link px-0" href="#">Policy Privacy</a>
                        <a class="nav-link px-0" href="#">Terms and conditions</a>
                        <a class="nav-link px-0" href="#">Contact Us</a>
                    </nav>
                </div>
            </footer>
            <!-- END - FOOTER -->

        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- END - CONTENTS -->

        <!-- HEADER -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <header class="header">
            <div class="header__inner">

                <!-- Brand -->
                <div class="header__brand">
                    <div class="brand-wrap">

                        <!-- Brand logo -->
                        <div class="flex justify-center">
                            <img src="{{ asset('images/white-icon.png') }}" class="logo-img"/>
                        </div>

                        <!-- Brand title -->
                        <div class="brand-title">MEDXAM</div>

                    </div>
                </div>
                <!-- End - Brand -->

                <div class="header__content">

                    <!-- Content Header - Left Side: -->
                    <div class="header__content-start">

                        <!-- Navigation Toggler -->
                        <button type="button" class="nav-toggler header__btn btn btn-icon btn-sm" aria-label="Nav Toggler">
                            <i class="demo-psi-view-list"></i>
                        </button>

                        <!-- Searchbox -->
                        <div class="header-searchbox">

                            <!-- Searchbox toggler for small devices -->
                            <label for="header-search-input" class="header__btn d-md-none btn btn-icon rounded-pill shadow-none border-0 btn-sm" type="button">
                                <i class="demo-psi-magnifi-glass"></i>
                            </label>

                            <!-- Searchbox input -->
                            <form class="searchbox searchbox--auto-expand searchbox--hide-btn input-group">
                                <input id="header-search-input" class="searchbox__input form-control bg-transparent" type="search" placeholder="Type for search . . ." aria-label="Search">
                                <div class="searchbox__backdrop">
                                    <button class="searchbox__btn header__btn btn btn-icon rounded shadow-none border-0 btn-sm" type="button" id="button-addon2">
                                        <i class="demo-pli-magnifi-glass"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End - Content Header - Left Side -->

                    <!-- Content Header - Right Side: -->
                    <div class="header__content-end">

                        <!-- Mega Dropdown -->
                        <div class="dropdown">

                            <!-- Toggler -->
                            <button class="header__btn btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-label="Megamenu dropdown" aria-expanded="false">
                                <i class="demo-psi-layout-grid"></i>
                            </button>

                            <!-- Mega Dropdown Menu -->
                            <div class="dropdown-menu dropdown-menu-end p-3 mega-dropdown">
                                <div class="row">
                                    <div class="col-md-3">

                                        <!-- Pages List Group -->
                                        <div class="list-group list-group-borderless">
                                            <a href="#" class="list-group-item list-group-item-action">Profile</a>
                                            <a href="#" class="list-group-item list-group-item-action">Search Result</a>
                                            <a href="#" class="list-group-item list-group-item-action">FAQ</a>
                                            <a href="#" class="list-group-item list-group-item-action">Screen Lock</a>
                                            <a href="#" class="list-group-item list-group-item-action">Maintenance</a>
                                            <a href="#" class="list-group-item list-group-item-action">Invoices</a>
                                        </div>

                                    </div>
                                    <div class="col-md-3">

                                        <!-- Mailbox list group -->
                                        <div class="list-group list-group-borderless mb-3">
                                            <div class="list-group-item d-flex align-items-center border-bottom mb-2">
                                                <div class="flex-shrink-0 me-2">
                                                    <i class="demo-pli-mail fs-4"></i>
                                                </div>
                                                <h5 class="flex-grow-1 m-0">Mailbox</h5>
                                            </div>
                                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                                Inbox <span class="badge bg-danger rounded-pill">14</span>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">Read Messages</a>
                                            <a href="#" class="list-group-item list-group-item-action">Compose</a>
                                            <a href="#" class="list-group-item list-group-item-action">Template</a>
                                        </div>

                                        <!-- News -->
                                        <div class="list-group list-group-borderless">
                                            <div class="list-group-item d-flex align-items-center border-bottom">
                                                <div class="flex-shrink-0 me-2">
                                                    <i class="demo-pli-calendar-4 fs-4"></i>
                                                </div>
                                                <h5 class="flex-grow-1 m-0">News</h5>
                                            </div>
                                            <small class="list-group-item">
                                                News here
                                            </small>
                                        </div>

                                    </div>
                                    <div class="col-md-4">

                                        <!-- List Group -->
                                        <div class="list-group list-group-borderless">
                                            <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="demo-pli-data-settings fs-2"></i>
                                                </div>
                                                <div class="flex-grow-1 ">
                                                    <div class="d-flex justify-content-between align-items-start">
                                                        <a href="#" class="h6 d-block mb-1 stretched-link text-decoration-none">Data Backup</a>
                                                        <span class="badge bg-success rounded-pill ms-auto">40%</span>
                                                    </div>
                                                    <small class="text-muted">Current usage of disks for backups.</small>
                                                </div>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="demo-pli-support fs-2"></i>
                                                </div>
                                                <div class="flex-grow-1 ">
                                                    <a href="#" class="h6 d-block mb-1 stretched-link text-decoration-none">Support</a>
                                                    <small class="text-muted">Have any questions ? please don't hesitate to ask.</small>
                                                </div>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="demo-pli-computer-secure fs-2"></i>
                                                </div>
                                                <div class="flex-grow-1 ">
                                                    <a href="#" class="h6 d-block mb-1 stretched-link text-decoration-none">Security</a>
                                                    <small class="text-muted">Our devices are secure and up-to-date.</small>
                                                </div>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-start">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="demo-pli-map-2 fs-2"></i>
                                                </div>
                                                <div class="flex-grow-1 ">
                                                    <a href="#" class="h6 d-block mb-1 stretched-link text-decoration-none">Location</a>
                                                    <small class="text-muted">From our location up here, we kept in close touch.</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End - Mega Dropdown -->

                        <!-- Notification Dropdown -->
                        <div class="dropdown">

                            <!-- Toggler -->
                            <button class="header__btn btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-label="Notification dropdown" aria-expanded="false">
                                <span class="d-block position-relative">
                                    <i class="demo-psi-bell"></i>
                                    <span class="badge badge-super rounded bg-danger p-1">

                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </span>
                            </button>

                            <!-- Notification dropdown menu -->
                            <div class="dropdown-menu dropdown-menu-end w-md-300px">
                                <div class="border-bottom px-3 py-2 mb-3">
                                    <h5>Notifications</h5>
                                </div>

                                <div class="list-group list-group-borderless">

                                    <!-- List item -->
                                    <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                        <div class="flex-shrink-0 me-3">
                                            <i class="demo-psi-data-settings text-muted fs-2"></i>
                                        </div>
                                        <div class="flex-grow-1 ">
                                            <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Your storage is full</a>
                                            <small class="text-muted">Local storage is nearly full.</small>
                                        </div>
                                    </div>

                                    <!-- List item -->
                                    <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                        <div class="flex-shrink-0 me-3">
                                            <i class="demo-psi-file-edit text-blue-200 fs-2"></i>
                                        </div>
                                        <div class="flex-grow-1 ">
                                            <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Writing a New Article</a>
                                            <small class="text-muted">Wrote a news article for the John Mike</small>
                                        </div>
                                    </div>

                                    <!-- List item -->
                                    <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                        <div class="flex-shrink-0 me-3">
                                            <i class="demo-psi-speech-bubble-7 text-green-300 fs-2"></i>
                                        </div>
                                        <div class="flex-grow-1 ">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <a href="#" class="h6 mb-0 stretched-link text-decoration-none">Comment sorting</a>
                                                <span class="badge bg-info rounded ms-auto">NEW</span>
                                            </div>
                                            <small class="text-muted">You have 1,256 unsorted comments.</small>
                                        </div>
                                    </div>

                                    <!-- List item -->
                                    <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                        <div class="flex-shrink-0 me-3">
                                            <img class="img-xs rounded-circle" src="assets/img/profile-photos/7.png" alt="Profile Picture" loading="lazy">
                                        </div>
                                        <div class="flex-grow-1 ">
                                            <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Lucy Sent you a message</a>
                                            <small class="text-muted">30 minutes ago</small>
                                        </div>
                                    </div>

                                    <!-- List item -->
                                    <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                        <div class="flex-shrink-0 me-3">
                                            <img class="img-xs rounded-circle" src="assets/img/profile-photos/3.png" alt="Profile Picture" loading="lazy">
                                        </div>
                                        <div class="flex-grow-1 ">
                                            <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Jackson Sent you a message</a>
                                            <small class="text-muted">1 hours ago</small>
                                        </div>
                                    </div>

                                    <div class="text-center mb-2">
                                        <a href="#" class="btn-link">Show all Notifications</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End - Notification dropdown -->

                        <!-- User dropdown -->
                        <div class="dropdown">

                            <!-- Toggler -->
                            <button class="header__btn btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-label="User dropdown" aria-expanded="false">
                                <img class="img-sm rounded-2" src="{{ Auth::user()->profile_photo_url }}" alt="Profile Picture" loading="lazy">
                            </button>

                            <!-- User dropdown menu -->
                            <div class="dropdown-menu dropdown-menu-end w-md-450px">

                                <!-- User dropdown header -->
                                <div class="d-flex align-items-center border-bottom px-3 py-2">
                                    <div class="flex-shrink-0">
                                        <img class="img-sm rounded-circle" src="{{ Auth::user()->profile_photo_url }}" alt="Profile Picture" loading="lazy">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-0">{{ Auth::user()->name }}</h5>
                                        <span class="text-muted fst-italic"></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-7">

                                        <!-- Simple widget and reports -->
                                        <div class="list-group list-group-borderless mb-3">
                                            <div class="list-group-item text-center border-bottom mb-3">
                                                <p class="h1 display-1 text-green">0</p>
                                                <p class="h6 mb-0"><i class="demo-pli-basket-coins fs-3 me-2"></i> New orders</p>
                                                <small class="text-muted">You have new orders</small>
                                            </div>
                                            <div class="list-group-item py-0 d-flex justify-content-between align-items-center">
                                                Today Earning
                                                <small class="fw-bolder">$578</small>
                                            </div>
                                            <div class="list-group-item py-0 d-flex justify-content-between align-items-center">
                                                Tax
                                                <small class="fw-bolder text-danger">- $28</small>
                                            </div>
                                            <div class="list-group-item py-0 d-flex justify-content-between align-items-center">
                                                Total Earning
                                                <span class="fw-bold text-primary">$6,578</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End - User dropdown -->

                        <!-- Sidebar Toggler -->
                        <button class="sidebar-toggler header__btn btn btn-icon btn-sm" type="button" aria-label="Sidebar button">
                            <i class="demo-psi-dot-vertical"></i>
                        </button>

                    </div>
                </div>
            </div>
        </header>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- END - HEADER -->

        <!-- MAIN NAVIGATION -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <nav id="mainnav-container" class="mainnav">
            <div class="mainnav__inner">

                <!-- Navigation menu -->
                <div class="mainnav__top-content scrollable-content pb-5">

                    <!-- Profile Widget -->
                    <div class="mainnav__profile mt-3 d-flex3">

                        <div class="mt-2 d-mn-max"></div>

                        <!-- Profile picture  -->
                        <div class="mininav-toggle text-center py-2">
                            <img class="img-sm rounded-circle" src="{{ Auth::user()->profile_photo_url }}" alt="Profile Picture" loading="lazy">
                        </div>

                        <div class="mininav-content collapse d-mn-max">
                            <div class="d-grid">

                                <!-- User name and position -->
                                <button class="d-block btn shadow-none p-2" data-bs-toggle="collapse" data-bs-target="#usernav" aria-expanded="false" aria-controls="usernav">
                                    <span class="dropdown-toggle d-flex justify-content-center align-items-center">
                                        <h6 class="mb-0 me-3">{{ Auth::user()->name }}</h6>
                                    </span>
                                    <small class="text-muted">Administrator</small>
                                </button>

                                <!-- Collapsed user menu -->
                                <div id="usernav" class="nav flex-column collapse">
                                    <a href="#" class="nav-link d-flex justify-content-between align-items-center">
                                        <span><i class="demo-pli-mail fs-5 me-2"></i><span class="ms-1">Messages</span></span>
                                        <span class="badge bg-danger rounded-pill">0</span>
                                    </a>
                                    <a href="#" class="nav-link">
                                        <i class="demo-pli-male fs-5 me-2"></i>
                                        <span class="ms-1">Profile</span>
                                    </a>
                                    <a href="#" class="nav-link">
                                        <i class="demo-pli-gear fs-5 me-2"></i>
                                        <span class="ms-1">Settings</span>
                                    </a>
                                    <a href="#" class="nav-link">
                                        <i class="demo-pli-computer-secure fs-5 me-2"></i>
                                        <span class="ms-1">Lock screen</span>
                                    </a>
                                    <a href="#" class="nav-link">
                                        <i class="demo-pli-unlock fs-5 me-2"></i>
                                        <span class="ms-1">Logout</span>
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- End - Profile widget -->

                    <!-- Navigation Category -->
                    <div class="mainnav__categoriy py-3">
                        <ul class="mainnav__menu nav flex-column">
                            <li class="nav-item has-sub">

                                <a href="#" class="nav-link active"><i class="demo-pli-home fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Dashboard</span>
                                </a>

                            </li>
                        </ul>
                    </div>
                    <!-- END : Navigation Category -->

                    <!-- Widget -->
                    <div class="mainnav__profile">

                        <!-- Widget buttton form small navigation -->
                        <div class="mininav-toggle text-center py-2 d-mn-min">
                            <i class="demo-pli-monitor-2"></i>
                        </div>

                        <div class="d-mn-max mt-5"></div>

                        <!-- Widget content -->
                        <div class="mininav-content collapse d-mn-max">
                            <h6 class="mainnav__caption px-3 fw-bold">Server Status</h6>
                            <ul class="list-group list-group-borderless">
                                <li class="list-group-item text-reset">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <p class="mb-2 me-auto">CPU Usage</p>
                                        <span class="badge bg-info rounded">35%</span>
                                    </div>
                                    <div class="progress progress-md">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-label="CPU Progress" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li class="list-group-item text-reset">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <p class="mb-2 me-auto">Bandwidth</p>
                                        <span class="badge bg-warning rounded">73%</span>
                                    </div>
                                    <div class="progress progress-md">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 73%" aria-label="Bandwidth Progress" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                            </ul>
                            <div class="d-grid px-3 mt-3">
                                <a href="#" class="btn btn-sm btn-success">View Details</a>
                            </div>
                        </div>
                    </div>
                    <!-- End - Profile widget -->

                </div>
                <!-- End - Navigation menu -->

                <!-- Bottom navigation menu -->
                <div class="mainnav__bottom-content border-top pb-2">
                    <ul id="mainnav" class="mainnav__menu nav flex-column">
                        <li class="nav-item has-sub">
                            <a role="button" type="submit" class="nav-link mininav-toggle collapsed" aria-expanded="false">
                                <i class="demo-pli-unlock fs-5 me-2"></i>
                                <span class="nav-label ms-1">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End - Bottom navigation menu -->

            </div>
        </nav>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- END - MAIN NAVIGATION -->

    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - PAGE CONTAINER -->

    <!-- SCROLL TO TOP BUTTON -->
    <div class="scroll-container">
        <a href="#root" class="scroll-page rounded-circle ratio ratio-1x1" aria-label="Scroll button"></a>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - SCROLL TO TOP BUTTON -->

    <!-- JAVASCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script>
        const ctx = document.getElementById('usersChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Monday', 'Tuesday', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: 'Number of Users',
                    data: [2, 3, 5, 12, 19],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

<script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
        });
    });
</script>

</body>
</html>