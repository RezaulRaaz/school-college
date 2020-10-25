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


        <li class=" @if(Route::is('admin.primaryEntry*')) sidebar-group-active @endif nav-item"><a href="#"><i class="feather icon-credit-card"></i><span class="menu-title" data-i18n="Card">Primary Entry</span></a>
            <ul class="menu-content">
                <li class="@if(Route::is('admin.primaryEntry.college')) active @endif" ><a href="{{route('admin.primaryEntry.college')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Basic">College Information</span></a></li>
                </li>
                <li class="@if(Route::is('admin.primaryEntry.type')) active @endif" ><a href="{{route('admin.primaryEntry.type')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Basic">Institute Types</span></a></li>
                </li>
            </ul>
        </li>


        </ul>
    </div>
</div>
