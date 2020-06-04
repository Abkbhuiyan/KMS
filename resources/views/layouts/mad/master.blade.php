<!doctype html>
<html class="no-js" lang="">

<head>
    @include('layouts.mad._head')
</head>

<body>
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">

    <!-- ====== Header Menu/Top Nav Start ====== -->
@include('layouts.mad._topNav')

<!-- Page Area Start Here -->
    <div class="dashboard-page-one">

        <!-- ====== Sidebar Area Start ====== -->
        @include('layouts.mad._leftNav')

        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
        @yield('content')
        <!-- Footer Area Start Here -->
        @include('layouts.mad._footer')
        <!-- Footer Area End Here -->
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
<!-- jquery-->
@include('layouts.mad._scripts')
</body>

</html>
