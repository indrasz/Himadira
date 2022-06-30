<!DOCTYPE html>
<html lang="en">

<head>
  @include('includes.admin.meta')

  <title>
    Argon Dashboard 2 by Creative Tim
  </title>

  @include('includes.admin.style')

</head>

<body class="g-sidenav-show   bg-gray-100">
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

  @include('includes.admin.script')

</body>

</html>
