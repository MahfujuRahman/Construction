
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta name="description" content="{{ $fav?->description }}">
	<meta name="author" content="{{ $fav?->author_name }}">
	<meta name="keywords" content="{{ $fav?->keywords }}"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>@yield('title', 'Admin Panel')</title>

    @stack('style')

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="{{ asset('asset/vendors/core/core.css') }}">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="{{ asset('asset/vendors/flatpickr/flatpickr.min.css') }}">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('asset/fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/vendors/flag-icon-css/css/flag-icon.min.css') }}">
	<!-- endinject -->

    {{-- Datatable Start --}}
    <link rel="stylesheet" href="{{ asset('asset/css/dataTable/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/dataTable/dataTables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/dataTable/responsive.bootstrap5.css') }}">
    {{-- Datatable End --}}

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('asset/css/demo1/style.css') }}">
    <link href="{{ asset('asset/css/sweetalert2.min.css') }}" rel="stylesheet">

    <!-- End layout styles -->
    @if (isset($fav->favicon))
        <link rel="icon" type="image/x-icon" href="{{ asset($fav->favicon) }}">
    @else
        <link rel="shortcut icon" href="{{ asset("images/favicon.png") }}" />
    @endif

    <!-- End layout styles -->
    @if (isset($fav->favicon))
    <link rel="icon" type="image/x-icon" href="{{ asset('uploads/settings/fav/' . $fav->favicon) }}">
    @else
    <link rel="shortcut icon" href="{{ asset("images/favicon.png") }}" />
    @endif

</head>
<body class="sidebar-light">
    {{-- @include('sweetalert::alert') --}}

<div class="main-wrapper">

    @include('backend.layout.asidebar')

    <div class="page-wrapper">

        @include('backend.layout.navbar')

        @yield('content')

        @include('backend.layout.footer')

    </div>

</div>

	<!-- core:js -->
    <script src="{{ asset('asset/vendors/core/core.js') }}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
    <script src="{{ asset('asset/vendors/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('asset/vendors/apexcharts/apexcharts.min.js') }}"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
    <script src="{{ asset('asset/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('asset/js/template.js') }}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
    <script src="{{ asset('asset/js/dashboard-light.js') }}"></script>
	<!-- End custom js for this page -->

    <script src="{{ asset('asset/js/dataTable/jquery-3.7.1.js') }}"></script>
    {{-- <script src="{{ asset('js/dataTable/bootstrap.bundle.min.js') }}"></script> --}}
    <script src="{{ asset('asset/js/dataTable/dataTables.js') }}"></script>
    <script src="{{ asset('asset/js/dataTable/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('asset/js/dataTable/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('asset/js/dataTable/responsive.bootstrap5.js') }}"></script>
    <script src="{{ asset('asset/js/sweetalert2.min.js') }}"></script>

    @stack('script')

</body>
</html>

