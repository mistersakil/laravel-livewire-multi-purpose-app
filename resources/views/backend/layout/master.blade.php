<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Octapia, Sakil, Sakil Jomadder, Sakil Mahmud">

    <title>{{ isset($meta_title) ? $meta_title : 'Dashboard' }} | {{ env('APP_NAME') }}</title>

    <link rel="apple-touch-icon" href="{{ asset('backend') . '/' }}app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('backend') . '/' }}app-assets/images/ico/apple-icon-120.png">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CMuli:300,400,500,700"
        rel="stylesheet">
    <!-- Include styles -->
    @includeIf('backend.layout.styles')
    <!-- End: Include styles -->
    @livewireStyles
</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu" data-col="2-columns">

    <!-- Fixed-top-->
    @includeIf('backend.layout.topbar')
    <!--End: fixed-top-->

    <!-- Left sidebar -->
    @includeIf('backend.layout.left_sidebar')
    <!--End: Left sidebar -->



    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                @includeIf('backend.layout.breadcrumb')
            </div>
            <div class="content-body">
                {{ $slot }}
            </div>
        </div>
    </div>
    <!-- Footer -->
    @includeIf('backend.layout.footer')
    <!--End: Footer -->

    <!-- Scripts -->
    @includeIf('backend.layout.scripts')
    <!--End: Scripts -->
    @livewireScripts

</body>

</html>
