<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.frontend.meta')

    <title>
        @yield('title') | Himadira
    </title>

    @stack('before-style')

    @include('includes.frontend.style')

    @stack('after-style')

</head>

<body>

    @include('includes.frontend.navbar')

    @yield('content')

    @stack('before-script')

    @include('includes.frontend.script')

    @stack('after-script')

</body>

</html>
