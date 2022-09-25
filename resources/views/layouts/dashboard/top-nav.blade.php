<div class="responsive-header">
    <div class="res-logo">Logo</div>
    
    <div class="user-avatar mobile">
        <a href="#" title="View Profile"><img src="{{ auth()->user()->profile_photo_url }}" alt="{{ auth()->user()->name }}"></a>
        <div class="name">
            <h4>Saim Turan</h4>
            <span>Antalaya, Turky</span>
        </div>
    </div>
    <div class="right-compact">
        <div class="menu-area">
            <div id="nav-icon3">
                <i>
                    <svg class="feather feather-grid" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><rect height="7" width="7" y="3" x="3"/><rect height="7" width="7" y="3" x="14"/><rect height="7" width="7" y="14" x="14"/><rect height="7" width="7" y="14" x="3"/></svg>
                    </i>
            </div>
            <ul class="drop-menu">
                  <li><a title="profile.html" href="profile.html"><i class="icofont-user-alt-1"></i>Your Profile</a></li>
                <li><a title="" href="#"><i class="icofont-question-circle"></i>Help</a></li>
                <li><a title="" href="#"><i class="icofont-gear"></i>Setting</a></li>
                <li><a class="dark-mod" title="" href="#"><i class="icofont-moon"></i>Dark Mode</a></li>
                <li><a title="" href="login-register.html" class="logout"><i class="icofont-logout"></i>Logout</a></li>
            </ul>
        </div>
        <div class="res-search">
            <span><i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></i></span>
        </div>
    </div>
    <div class="restop-search">
        <span class="hide-search"><i class="icofont-close-circled"></i></span>
        <form method="post">
            <input type="text" placeholder="Search...">
        </form>
    </div>
</div><!-- responsive header -->

<header class="">
    <div class="topbar stick">
        <div class="logo"><span>Logo</span></div>
        <div class="searches">
            <form method="post">
                <input type="text" placeholder="Search...">
                <button type="submit"><i class="icofont-search"></i></button>
            </form>
        </div>
        <ul class="web-elements">
            <li>
                <div class="user-dp">
                    <a href="profile-page2.html" title="">
                        <img src="{{ auth()->user()->profile_photo_url }}" alt="{{ auth()->user()->name }}">
                        <div class="name">
                            <h4>{{auth()->user()->name}}</h4>
                        </div>
                    </a>	
                </div>
            </li>
            <li>
                <a title="" href="#">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                    </i>
                </a>
                <ul class="dropdown">
                    <li><a href="profile.html" title=""><i class="icofont-user-alt-3"></i> Your Profile</a></li>
                    <li><a href="add-new-course.html" title=""><i class="icofont-plus"></i> New Question</a></li>
                    <li><a class="invite-new" href="#" title=""><i class="icofont-brand-slideshare"></i> Invite Collegue</a></li>
                    <li><a href="pay-out.html" title=""><i class="icofont-price"></i> Payout</a></li>
                    <li><a href="price-plan.html" title=""><i class="icofont-flash"></i> Upgrade</a></li>
                    <li><a href="help-faq.html" title=""><i class="icofont-question-circle"></i> Help</a></li>
                    <li><a href="settings.html" title=""><i class="icofont-gear"></i> Setting</a></li>
                    <li><a href="privacy-n-policy.html" title=""><i class="icofont-notepad"></i> Privacy</a></li>
                    <li><a class="dark-mod" title="" href="#"><i class="icofont-moon"></i> Dark Mode</a></li>
                    <li class="logout"><a href="sign-in.html" title=""><i class="icofont-power"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
    
</header><!-- header -->

<div class="top-sub-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="menu-btn">
                    <i class="">
                    <svg id="menu-btn" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></i>
                </div>
                <div class="page-title">
                    <h4>Dashboard</h4>
                </div>
                @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <ul class="breadcrumb">
                    <li><a href="#" title="">Home</a></li>
                    <li><a href="#" title="">Dashboard</a></li>
                </ul>
            </div>
        </div>
    </div>	
</div><!-- top sub bar -->