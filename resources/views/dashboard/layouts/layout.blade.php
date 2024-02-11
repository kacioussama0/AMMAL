<!DOCTYPE html>
<html lang="en">

<head>
    @include('dashboard.layouts.head-meta')
    @include('dashboard.layouts.head-css')
</head>

<body>
<!-- Begin page -->
<div class="wrapper">


    @include('dashboard.layouts.topbar')
    @include('dashboard.layouts.left-sidebar')


    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                @include('dashboard.layouts.page-title')
                @yield('content')
            </div> <!-- container -->

        </div> <!-- content -->

        @include('dashboard.layouts.footer')

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->

@include('dashboard.layouts.right-sidebar')

@include('dashboard.layouts.footer-scripts')



</body>
</html>
