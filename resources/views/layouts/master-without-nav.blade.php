<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') | Semapor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('build/images/images-landing/ssc-logo-only-biru.svg') }}">

    <!-- include head css -->
    @include('layouts.head-css')
</head>

<body>
    
    @yield('content')

    <!-- vendor-scripts -->
    @include('layouts.vendor-scripts')

</body>

</html>
