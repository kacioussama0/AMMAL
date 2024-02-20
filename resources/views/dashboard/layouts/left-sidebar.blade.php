<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="index.html" class="logo logo-light">
        <span class="logo-lg">
            <img src="{{asset('assets/images/logo/logo-white.svg')}}" alt="logo" style="height: 50px !important;">
        </span>
        <span class="logo-sm">
            <img src="{{asset('assets/images/logo/logo-white.svg')}}" alt="small logo" style="height: 50px !important;">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="index.html" class="logo logo-dark">
        <span class="logo-lg">
            <img src="{{asset('assets_dashboard/images/logo-dark.png')}}" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="{{asset('assets_dashboard/images/logo-sm.png')}}" alt="small logo">
        </span>
    </a>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title">Main</li>

            <li class="side-nav-item">
                <a href="index.html" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    <span class="badge bg-success float-end">9+</span>
                    <span> Dashboard </span>
                </a>
            </li>



            <li class="side-nav-item">
                <a href="{{url('dashboard/users')}}" class="side-nav-link">
                    <i class="ri-user-search-fill"></i>
                    <span> Users </span>
                </a>
            </li>


            <li class="side-nav-item">
                <a href="{{url('dashboard/categories')}}" class="side-nav-link">
                    <i class="ri-bookmark-2-fill"></i>
                    <span> Categories </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{url('dashboard/posts')}}" class="side-nav-link">
                    <i class="ri-file-paper-2-fill"></i>
                    <span> Posts </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{url('dashboard/tags')}}" class="side-nav-link">
                    <i class="ri-price-tag-2-fill"></i>
                    <span> Tags </span>
                </a>
            </li>



        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
<!-- ========== Left Sidebar End ========== -->
