<!DOCTYPE html>
<html lang="en">

<head>
    @include('dashboard.include.head')

</head>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header">
        @include('dashboard.include.header')
    </header>
    <!-- Sidebar menu-->
    @include('dashboard.include.sidebar')
    @yield('content')
    <!-- Essential javascripts for application to work-->
    @include('dashboard.include.footer')
</body>

</html>
