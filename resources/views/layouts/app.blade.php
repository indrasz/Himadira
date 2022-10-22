<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.admin.meta')

    <title>
        @yield('title') | HIMADIRA FIT Telkom University
    </title>

    @stack('before-style')

    @include('includes.admin.style')

    @stack('after-style')

</head>

<body class="g-sidenav-show bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>

    @include('includes.admin.sidebar')

    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        @include('includes.admin.navbar')
        <!-- End Navbar -->
        <div class="container-fluid py-4">

            @yield('content')

        </div>

    </main>

    @include('includes.admin.setting')

    @stack('before-script')

    @include('includes.admin.script')

    @stack('after-script')

</body>

</html>
