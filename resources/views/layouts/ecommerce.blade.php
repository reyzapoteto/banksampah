<!DOCTYPE html>

































<!-- =========================================================
* Sneat - Bootstrap Dashboard PRO | v1.0.0
==============================================================

* Product Page: https://themeselection.com/item/sneat-dashboard-pro-bootstrap/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->


<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Marketplace</title>
    <link rel="icon" type="image/x-icon" href="assets/img/product/upnvjt.ico">



    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 Admin Dashboard built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/sneat-dashboard-pro-bootstrap/">


    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
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
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

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
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>

</head>

<body>


  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">


<!-- Menu -->
@include('layouts.sidebar')

    <!-- Layout container -->
    <div class="layout-page">

        @include('layouts.navbar')

      <!-- Content wrapper -->
      <div class="content-wrapper">
        <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">



<h4 class="py-3 mb-4"><span class="text-muted fw-light">Dashboard/</span> Ecommerce</h4>

<div class="app-academy">
  <div class="card p-0 mb-4">
    <div class="card-body d-flex flex-column flex-md-row justify-content-between p-0 pt-4">
      <div class="app-academy-md-25 card-body py-0">
        <img src="assets/img/illustrations/man-with-laptop-light.png" class="img-fluid app-academy-img-height scaleX-n1-rtl" alt="Bulb in hand" data-app-light-img="illustrations/bulb-light.png" data-app-dark-img="illustrations/bulb-dark.png" height="90" />
      </div>
      <div class="app-academy-md-50 card-body d-flex align-items-md-center flex-column text-md-center">
        <h3 class="card-title mb-4 lh-sm px-md-5 text-center">
          Pemasaran, Penjualan dan Pembelian.
          <span class="text-primary fw-medium text-nowrap">Bank Sampah</span>.
        </h3>
        <p class="mb-4">
          Grow your skill with the most reliable online courses and certifications in marketing, information technology,
          programming, and data science.
        </p>
      </div>
      <div class="app-academy-md-25 d-flex align-items-end justify-content-end">
        <img src="assets/img/illustrations/girl-doing-yoga-light.png" alt="image" height="188" class="scaleX-n1-rtl" />
      </div>
    </div>
  </div>

  <div class="card mb-4">
    <div class="card-header d-flex flex-wrap justify-content-between gap-3">
      <div class="card-title mb-0 me-1">
        <h5 class="mb-1">Barang yang menarik</h5>
        <p class="text-muted mb-0">Total terdapat <span>{{ $totalbarang }}</span> barang yang tersedia </p>
      </div>
    </div>
    <div class="card-body">
      <div class="row gy-4 mb-4">
        @foreach ($barang as $dataBarang)
<div class="col-sm-6 col-lg-4">
          <div class="card p-2 h-100 shadow-none border">
            <div class="rounded-2 text-center mb-3">
              <a href="{{ route('transaksi', $dataBarang->id) }}"><img class="img-fluid" src= "{{ url('storage/' . $dataBarang->gambar_barang) }}" alt="tutor image 5" /></a>
            </div>
            <div class="card-body p-3 pt-2">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="badge bg-label-warning">{{ $dataBarang->kategori_barang }}</span>
                <h6 class="d-flex align-items-center justify-content-center gap-1 mb-0">
                    {{ $dataBarang->harga_barang }} <span class="text-warning"><i class="bx bxs-star me-1"></i></span><span class="text-muted"> {{ $dataBarang->stock_barang }}</span>
                </h6>
              </div>
              <a class="h5" href="{{ route('transaksi', $dataBarang->id) }}">{{ $dataBarang->nama_barang }}</a>
              <p class="mt-2">{{ $dataBarang->deskripsi_barang }}.</p>
              <a class="w-100 btn btn-label-primary mt-4" href="{{ route('transaksi', $dataBarang->id) }}"><i class="bx bx-cart-alt me-2"></i>Beli Sekarang</a>
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
