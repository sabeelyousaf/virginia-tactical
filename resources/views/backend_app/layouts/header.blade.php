@php
    $user=Auth::user();
    $generalsetting=App\Models\SettingModel::where('id',1)->first();
@endphp

<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
            </ul>


        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">

            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">{{$user->name}}</span><span class="user-status">{{$user->role}}</span></div><span class="avatar"><img class="round" src="{{asset('assets/users/'.$user->img)}}" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item" href="{{route('edit-profile',['id'=>$user->id])}}"><i class="me-50" data-feather="user"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    @if(Auth::user()->role==="admin")<a class="dropdown-item" href="{{route('general-setting')}}"><i class="me-50" data-feather="settings"></i> Settings</a>@endif
                    <a class="dropdown-item" href="{{route('logout')}}"><i class="me-50" data-feather="power"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center"><a href="#">
            <h6 class="section-label mt-75 mb-0">Files</h6>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;256kb</small>
        </a></li>
    <li class="d-flex align-items-center"><a href="#">
            <h6 class="section-label mt-75 mb-0">Members</h6>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                </div>
            </div>
        </a></li>
</ul>
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start"><span class="me-75" data-feather="alert-circle"></span><span>No results found.</span></div>
        </a></li>
</ul>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">

        <ul class="row position-relative">
                <img src="{{asset('assets/images/logojpeg-removebg-preview.png')}}" class="w-50 m-auto d-block" alt="">
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            @if ($user->role==='admin')
            <li class=" nav-item {{ Request::routeIs('dashboard')  ? 'active' : ''}}"><a class="d-flex align-items-center" href="{{route('dashboard')}}"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span></a>
            </li>
            @else
            <li class=" nav-item {{ Request::routeIs('CustomerDashboard')  ? 'active' : ''}}"><a class="d-flex align-items-center" href="{{route('CustomerDashboard')}}"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span></a>
            </li>
            @endif
            @if ($user->role==='admin')


            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i data-feather="more-horizontal"></i>
            </li>

            <li class=" nav-item {{ Request::routeIs('products') || Request::routeIs('addproduct') ? 'active' : ''}}"><a class="d-flex align-items-center" href="#"><i data-feather="grid"></i><span class="menu-title text-truncate" data-i18n="grid">Products</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route('products')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Roles">All Products</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('addproduct')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Permission">Add Product</span></a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item {{ Request::routeIs('show-category') || Request::routeIs('add-category') ? 'active' : ''}}"><a class="d-flex align-items-center" href="#"><i data-feather="pause"></i><span class="menu-title text-truncate" data-i18n="pause">Categories</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route('show-category')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Roles">All Categories</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('add-category')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Permission">Add Category</span></a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item {{ Request::routeIs('show-brands') || Request::routeIs('add-brand') ? 'active' : ''}}"><a class="d-flex align-items-center" href="#"><i data-feather="disc"></i><span class="menu-title text-truncate" data-i18n="award">Brands</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route('show-brands')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Roles">All Brands</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('add-brand')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Permission">Add Brand</span></a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item {{ Request::routeIs('all-courses') || Request::routeIs('add-course') ? 'active' : ''}}"><a class="d-flex align-items-center" href="#"><i data-feather="book"></i><span class="menu-title text-truncate" data-i18n="award">Courses</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route('courses-sessions')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Roles">Courses Sessions</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('all-courses')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Roles">All Courses</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('add-course')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Permission">Add Course</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('all-staff')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Roles">All Staff</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('add-staff')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Permission">Add Staff</span></a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item {{ Request::routeIs('all-blogs') || Request::routeIs('add-blog') ? 'active' : ''}}"><a class="d-flex align-items-center" href="#"><i data-feather="align-justify"></i><span class="menu-title text-truncate" data-i18n="award">Blogs</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route('all-blogs')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Roles">All Blogs</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('add-blog')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Permission">Add Blog</span></a>
                    </li>
                </ul>
            </li>

            </li>

            <li class=" nav-item {{ Request::routeIs('all-orders') ? 'active' : ''}}"><a class="d-flex align-items-center" href="{{route('all-orders')}}"><i data-feather="shopping-bag"></i><span class="menu-title text-truncate" data-i18n="alert-triangle">Orders</span></a>
            </li>
            <li class=" nav-item {{ Request::routeIs('all-subscriptions') ? 'active' : ''}}"><a class="d-flex align-items-center" href="{{route('all-subscriptions')}}"><i data-feather="shopping-bag"></i><span class="menu-title text-truncate" data-i18n="alert-triangle">Subscriptions</span></a>
            </li>
            <li class=" nav-item {{ Request::routeIs('contact-forms') ? 'active' : ''}}"><a class="d-flex align-items-center" href="{{route('contact-forms')}}"><i data-feather="calendar"></i><span class="menu-title text-truncate" data-i18n="alert-triangle">Contact Froms</span></a>
            </li>
            <li class=" nav-item {{ Request::routeIs('all-users') ? 'active' : ''}}"><a class="d-flex align-items-center" href="{{route('all-users')}}"><i data-feather="users"></i><span class="menu-title text-truncate" data-i18n="alert-triangle">All Users</span></a>
            </li>

            <li class=" nav-item {{ Request::routeIs('hall-of-fame') || Request::routeIs('add-fame_member') ? 'active' : ''}}"><a class="d-flex align-items-center" href="#"><i data-feather="award"></i><span class="menu-title text-truncate" data-i18n="award">Hall of Fame</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route('hall-of-fame')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Roles">All Members</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('add-fame_member')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Permission">Add Member</span></a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item {{ Request::routeIs('all-certificates') || Request::routeIs('add-certificates') ? 'active' : ''}}"><a class="d-flex align-items-center" href="#"><i data-feather="layers"></i><span class="menu-title text-truncate" data-i18n="award">Certificates</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route('all-certificates')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Roles">All Certificate</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('add-certificates')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Permission">Add Certificate</span></a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item {{ Request::routeIs('general-setting') ? 'active' : ''}}"><a class="d-flex align-items-center" href="{{route('general-setting')}}"><i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="settings">General Settings</span></a>
            </li>
            <li class=" nav-item "><a class="d-flex align-items-center" href="{{route('home')}}"><i data-feather="arrow-right-circle"></i><span class="menu-title text-truncate" data-i18n="alert-triangle">Go To Website</span></a>
            </li>
            @else
            <li class=" nav-item {{ Request::routeIs('update-customer') ? 'active' : ''}}"><a class="d-flex align-items-center" href="{{route('edit-profile',['id'=>$user->id])}}"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="Dashboards">My Profile</span></a>
            </li>
            <li class=" nav-item {{ Request::routeIs('favourite-backend') ? 'active' : ''}}"><a class="d-flex align-items-center" href="{{route('favourite-backend')}}"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="Dashboards">My Favorites</span></a>
            </li>

            <li class=" nav-item {{ Request::routeIs('customer-orders') ? 'active' : ''}}"><a class="d-flex align-items-center" href="{{route('customer-orders')}}"><i data-feather="calendar"></i><span class="menu-title text-truncate" data-i18n="alert-triangle">My Orders</span></a>
            </li>
            <li class=" nav-item {{ Request::routeIs('customer-subscriptions') ? 'active' : ''}}"><a class="d-flex align-items-center" href="{{route('customer-subscriptions')}}"><i data-feather="shopping-bag"></i><span class="menu-title text-truncate" data-i18n="alert-triangle">My Subscriptions</span></a>
            </li>
            <li class=" nav-item "><a class="d-flex align-items-center" href="{{route('logout')}}"><i data-feather="alert-triangle"></i><span class="menu-title text-truncate" data-i18n="alert-triangle">Logout</span></a>
            </li>
            <li class=" nav-item "><a class="d-flex align-items-center" href="{{route('home')}}"><i data-feather="arrow-right-circle"></i><span class="menu-title text-truncate" data-i18n="alert-triangle">Go To Website</span></a>
            </li>
            @endif
            {{-- <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('mails')}}"><i data-feather="mail"></i><span class="menu-title text-truncate" data-i18n="Email">Mails</span></a>
            </li> --}}


        </ul>
    </div>
</div>
