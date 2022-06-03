<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@if (isset($page_title))
        {{ $page_title }}
        @else
        Dashboard
        @endif | {{ env('APP_NAME') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- ========== Favicons ========== -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- ========== End: Favicons ========== -->

    <!-- ========== Links ========== -->
    @includeIf('backend.layout.links')
    <!-- ========== End: Links ========== -->

    <!-- ========== Livewire Styles ========== -->
    @livewireStyles()
    <!-- ========== End: Livewire Styles ========== -->

    <!-- ========== Dynamic Styles ========== -->
    @stack('add_css')

</head>

<body>

    <!-- ======= Header ======= -->
    @includeIf('backend.layout.topbar')
    <!-- ======= End Header ======= -->

    <!-- ======= Sidebar ======= -->
    @includeIf('backend.layout.left_sidebar')
    <!-- ======= End Sidebar ======= -->

    <main id="main" class="main">

        <div class="pagetitle d-flex justify-content-between">
            <div>
                <h1>
                    @if (isset($page_title))
                    {{ $page_title }}
                    @else
                    Dashboard
                    @endif
                </h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active">Blank</li>
                    </ol>
                    <!-- /.breadcrumb -->
                </nav>
                <!-- /nav -->
            </div>
            <div>
                <button type="button" class="btn btn-secondary pull-right" id="add_btn" data-bs-toggle="modal"
                    data-bs-target="#add_modal">
                    <i class="bi bi-plus me-1"></i>
                    Add New
                </button>
            </div>

        </div>
        <!-- /.pagetitle -->
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
    <!-- ========== Livewire Scripts ========== -->
    @livewireScripts()
    <!-- ========== End:Livewire Scripts ========== -->

    <!-- ========== Dynamic Scripts ========== -->
    @stack('add_js')

</body>

</html>
