<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>
        @if (isset($page_title))
            {{ $page_title }}
        @else
            Dashboard
        @endif | {{ env('APP_NAME') }}
    </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- ========== Favicons ========== -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- ========== End: Favicons ========== -->

    <!-- ========== Links ========== -->
    @includeIf('backend.layout.links')
    <!-- ========== End: Links ========== -->

    <!-- ========== Dynamic Styles ========== -->
    @stack('add_css')


    <!-- ========== Livewire Styles ========== -->
    @livewireStyles()
    <!-- ========== End: Livewire Styles ========== -->

</head>

<body>

    <!-- ======= Header ======= -->
    @includeIf('backend.layout.topbar')
    <!-- ======= End Header ======= -->

    <!-- ======= Sidebar ======= -->
    @includeIf('backend.layout.left_sidebar')
    <!-- ======= End Sidebar ======= -->

    <main id="main" class="main">


        <!-- ========== Main Content Area ========== -->
        {{ $slot }}
        <!-- ========== End:Main Content Area ========== -->


    </main>
    <!-- End /.main -->

    <!-- ========== Footer ========== -->
    @includeIf('backend.layout.footer')
    <!-- ========== End Footer ========== -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- ========== Scripts ========== -->
    @includeIf('backend.layout.scripts')
    <!-- ========== End Scripts ========== -->

    <!-- ========== Dynamic Scripts ========== -->
    @stack('js')

    <!-- ========== Livewire Scripts ========== -->
    @livewireScripts()
    <!-- ========== End:Livewire Scripts ========== -->


</body>

</html>
