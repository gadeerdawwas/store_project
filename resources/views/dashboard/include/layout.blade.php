<!DOCTYPE html>
<html lang="en">

<head>
    @include('dashboard.include.head')
    @stack('plugin-styles')

</head>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header">
        @include('dashboard.include.header')
    </header>
    <!-- Sidebar menu-->
    @include('dashboard.include.sidebar')
    @include('sweet::alert')

    @yield('content')
    <!-- Essential javascripts for application to work-->
    @include('dashboard.include.footer')
    @stack('custom-scripts')

</body>

</html>
