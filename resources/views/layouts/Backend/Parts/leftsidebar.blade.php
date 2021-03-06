<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
        <li class="nav-item mr-auto"><a class="navbar-brand" href="{{asset(url('/'))}}">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">Vuexy</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

          <li  class="@if(Route::is('admin.dashboard')) active  @endif nav-item"><a href="{{route('admin.dashboard')}}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
        </li>

        <li class="@if(Route::is('admin.post*')) sidebar-group-active open @endif nav-item"><a href="#"><i class="feather icon-credit-card"></i><span class="menu-title" data-i18n="Card">Posts & Notices</span></a>
            <ul class="menu-content">
                <li class="@if(Route::is('admin.post')) active @endif" ><a href="{{route('admin.post')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Basic">Add New</span></a></li>
                </li>
                <li class="@if(Route::is('admin.post.list')) active @endif" ><a href="{{route('admin.post.list')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Basic">Post List</span></a></li>
                <li class="@if(Route::is('admin.post.notice.list')) active @endif" ><a href="{{route('admin.post.notice.list')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Basic">Notice List</span></a></li>
            </li>
            </ul>
        </li>




        <li class="@if(Route::is('admin.primaryEntry*')) sidebar-group-active open @endif nav-item"><a href="#"><i class="feather icon-credit-card"></i><span class="menu-title" data-i18n="Card">Primary Entry</span></a>
            <ul class="menu-content">
                <li class="@if(Route::is('admin.primaryEntry.college')) active @endif" ><a href="{{route('admin.primaryEntry.college')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Basic">Institute Add</span></a></li>
                </li>
                <li class="@if(Route::is('admin.primaryEntry.type')) active @endif" ><a href="{{route('admin.primaryEntry.type')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Basic">Institute Types</span></a></li>
                </li>

                <li class="@if(Route::is('admin.primaryEntry.category')) active @endif" ><a href="{{route('admin.primaryEntry.category')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Basic">Category</span></a></li>
            </li>
            </ul>
        </li>



        <li class="@if(Route::is('admin.mark*')) sidebar-group-active open @endif nav-item"><a href="#"><i class="feather icon-credit-card"></i><span class="menu-title" data-i18n="Card">Result</span></a>
            <ul class="menu-content">
                <li class="@if(Route::is('admin.mark.result')) active @endif" ><a href="{{route('admin.mark.result')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Basic">Add Markshet</span></a>
                </li>
            </ul>
        </li>

        <li class="@if(Route::is('admin.subject*')) sidebar-group-active open @endif nav-item"><a href="#"><i class="feather icon-credit-card"></i><span class="menu-title" data-i18n="Card">Subjects</span></a>
            <ul class="menu-content">
                <li class="@if(Route::is('admin.subject.list')) active @endif" ><a href="{{route('admin.subject.list')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Basic">All Subjets</span></a>
                </li>
            </ul>
        </li>


        <li class="@if(Route::is('admin.user*')) sidebar-group-active open @endif nav-item"><a href="#"><i class="feather icon-credit-card"></i><span class="menu-title" data-i18n="Card">Users</span></a>
            <ul class="menu-content">
                <li class="@if(Route::is('admin.user.add')) active @endif" ><a href="{{route('admin.user.add')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Basic">Add New User</span></a></li>
                </li>

                <li class="@if(Route::is('admin.user.list')) active @endif" ><a href="{{route('admin.user.list')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Basic">User list</span></a></li>
                </li>
            </li>
            </ul>
        </li>

        </ul>
    </div>
</div>
