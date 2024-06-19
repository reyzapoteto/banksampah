<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr"
    data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Pesanan Anda</title>
    <link rel="icon" type="image/x-icon" href="assets/img/product/upnvjt.ico">



    <meta name="description"
        content="Most Powerful &amp; Comprehensive Bootstrap 5 Admin Dashboard built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/sneat-dashboard-pro-bootstrap/">


    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="assets/vendor/libs/plyr/plyr.css" />

    <!-- Page CSS -->

    <link rel="stylesheet" href="assets/vendor/css/pages/app-academy.css" />

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>

</head>

<body>


    <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">


            <!-- Menu -->
            @include('layouts.sidebarpengguna')

            <!-- Layout container -->
            <div class="layout-page">

                @include('layouts.navbar')

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">



                        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Produk/</span> Pesanan Saya</h4>

                        <div class="app-academy">
                            <div class="card p-0 mb-4">
                                <div class="card mb-4">

                                    <div class="card-body">
                                        <div class="row gy-4 mb-4">
                                            @foreach ($transaksi as $transaksiBarang)
                                                <div class="col-sm-6 col-lg-4">

                                                    <div class="card p-2 h-100 shadow-none border">
                                                        <div class="rounded-2 text-center mb-3">
                                                            <a href="{{ route('transaksi', $transaksiBarang->id) }}"><img
                                                                    class="img-fluid"
                                                                    src= "{{ url('storage/' . $transaksiBarang->barang->gambar_barang) }}"
                                                                    alt="tutor image 5" /></a>
                                                        </div>
                                                        <div class="card-body p-3 pt-2">
                                                            <div
                                                                class="d-flex justify-content-between align-items-start mb-3">
                                                                <span
                                                                    class="badge bg-label-warning">{{ $transaksiBarang->barang->kategori_barang }}</span>
                                                                <span class="badge bg-label-primary">Barang Bekas</span>
                                                                <span class="badge bg-label-success">Terbayar</span>
                                                            </div>
                                                            <a
                                                                class="h5">{{ $transaksiBarang->barang->nama_barang }}</a>
                                                            <p class="mt-2">
                                                                {{ $transaksiBarang->barang->deskripsi_barang }}.</p>
                                                            <p class="mt-0"> Total Pembayaran : Rp
                                                                {{ $transaksiBarang->total }}.</p>
                                                            <p class="mt-0"> Kuantitas :
                                                                {{ $transaksiBarang->quantity }} produk.</p>

                                                            <a class="w-100 btn btn-label-success mt-4"
                                                                href="https://api.whatsapp.com/send?phone=6281227533806"><i
                                                                    class="bx bx-phone-call me-2"></i>Hubungi
                                                                Penujual</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                            <div class="content-backdrop fade"></div>
                                        </div>
                                        <!-- Content wrapper -->
                                    </div>
                                    <!-- / Layout page -->
                                </div>



                                <!-- Overlay -->
                                <div class="layout-overlay layout-menu-toggle"></div>


                                <!-- Drag Target Area To SlideIn Menu On Small Screens -->
                                <div class="drag-target"></div>

                            </div>
                            <!-- / Layout wrapper -->





                            <!-- Core JS -->
                            <!-- build:js assets/vendor/js/core.js -->

                            <script src="assets/vendor/libs/jquery/jquery.js"></script>
                            <script src="assets/vendor/libs/popper/popper.js"></script>
                            <script src="assets/vendor/js/bootstrap.js"></script>
                            <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
                            <script src="assets/vendor/libs/hammer/hammer.js"></script>
                            <script src="assets/vendor/libs/i18n/i18n.js"></script>
                            <script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>
                            <script src="assets/vendor/js/menu.js"></script>

                            <!-- endbuild -->

                            <!-- Vendors JS -->
                            <script src="assets/vendor/libs/select2/select2.js"></script>
                            <script src="assets/vendor/libs/plyr/plyr.js"></script>

                            <!-- Main JS -->
                            <script src="assets/js/main.js"></script>


                            <!-- Page JS -->
                            <script src="assets/js/app-academy-course.js"></script>

</body>

</html>

<!-- beautify ignore:end -->
