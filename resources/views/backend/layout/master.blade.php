<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ env('META_DESCRIPTION') ?? 'Meta description' }}">
    <meta name="keywords" content="{{ env('META_KEYWORDS') ?? 'Meta keywords' }}">
    <meta name="author" content="{{ env('META_KEYWORDS') ?? 'sakil.diu.cse@gmail.com' }}">
    <title>
        @if (isset($page_title))
            {{ $page_title }}
        @else
            Dashboard
        @endif | {{ env('APP_NAME') }}
    </title>
    <!-- ========== Favicons ========== -->
    <link rel="icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <!-- ========== End: Favicons ========== -->

    <!-- ========== Links ========== -->
    @includeIf('backend.layout.links')
    <!-- ========== End: Links ========== -->

    <!-- ========== Dynamic Styles ========== -->
    @stack('css')

    <!-- ========== Livewire Styles ========== -->
    @livewireStyles()
    <!-- ========== End: Livewire Styles ========== -->

</head>

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        <!--========== Page Header Start ==========-->
        @includeIf('backend.layout.header')
        <!--========== Page Header Ends ==========-->

        <!--========== Page Body Start ==========-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->
            @includeIf('backend.layout.left_sidebar')
            <!-- End: Page Sidebar -->

            <!-- Right sidebar Start-->
            {{-- maybe unnecessary --}}
            <!-- Right sidebar Ends-->

            <!--========== Main content ==========-->
            <div class="page-body">
                {{ $slot }}
            </div>
            <!--========== End: Main content ==========-->

            <!--========== footer start ==========-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright">
                            <p class="mb-0">Copyright {{ date('Y') }} &copy; Octapia. All rights reserved</p>
                        </div>
                        <div class="col-md-6">
                            <p class="pull-right mb-0">
                                Developed By:
                                <a href="https://www.facebook.com/groups/websiteowner" target="_blank">Octapia</a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
            <!--========== footer end ==========-->

        </div>
        <!--========== End: Page Body ==========-->
    </div>

    <!--========== Page Body ==========-->
    @includeIf('backend.layout.scripts')
    <!--========== End: Page Body ==========-->

    <!-- ========== Livewire Scripts ========== -->
    @livewireScripts()
    <!-- ========== End:Livewire Scripts ========== -->



</body>

<!-- Mirrored from themes.pixelstrap.com/bigdeal/admin/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Oct 2021 09:52:45 GMT -->

</html>
