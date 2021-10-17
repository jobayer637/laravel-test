<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <title>Welcome To My Test__App</title>
    <!-- css sources -->
    @include('layouts.backend.css')
</head>

<body class="theme-red">
    @include('sweetalert::alert')

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->

    <!-- Top Bar -->
    @include('layouts.backend.topbar')
    <!-- #Top Bar -->

    <!-- sidebar     -->
    <section>
        @include('layouts.backend.sidebar')
    </section>
    <!-- sidebar -->

    <!-- main content     -->
    <section class="content">
        <div class="container-fluid">
            @yield('admin-content')
        </div>
    </section>
    <!-- main content -->


    <!-- js source -->
    @include('layouts.backend.js')
</body>

</html>