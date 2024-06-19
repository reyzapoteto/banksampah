<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
    data-../assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Tambah Produk</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/product/upnvjt.ico">


    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container" style="padding-left: 250px">

            @include('layouts.sidebar')

            <!-- / Menu -->

            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                @include('layouts.navbar')

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Ecommerce/</span> Tambah Barang</h4>

                        <!-- Basic Layout & Basic with Icons -->
                        <div class="row">
                            <!-- Basic Layout -->
                            <div class="col-xxl">
                                <div class="card mb-4">

                                    <div class="card-body">
                                        <form action="{{ route('simpan') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class=" row mb-3">
                                                <label for="gambar_barang" class="col-sm-2 col-form-label">Gambar
                                                    Barang</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="file" id="gambar_barang"
                                                        name="gambar_barang" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="nama_barang">Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="nama_barang"
                                                        name="nama_barang" placeholder="John Doe" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="deskripsi_barang">Deskripsi
                                                </label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="deskripsi_barang"
                                                        placeholder="deskripsi barang disini."
                                                        name="deskripsi_barang" />
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="harga_barang">harga Barang
                                                </label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="harga_barang"
                                                        placeholder="Harga barang kamu." name="harga_barang" />
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="kategori_produk"
                                                    class=" col-sm-2 col-form-label">kategori</label>
                                                <div class="col-sm-10">

                                                    <select id="kategori_produk" class="select2 col-sm-10  form-select"
                                                        name="kategori_barang">
                                                        <option value="">Pilih kategori</option>
                                                        <option value="bahan_basah">Produk Kering</option>
                                                        <option value="bahan_kering">Produk Basah</option>
                                                        <option value="bahan_plastik">Produk Plastik</option>
                                                        <option value="bahan_non_plastik">Produk Non plastk</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="stock_barang">Stok Barang
                                                </label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="stock_barang"
                                                        placeholder="stock barang." name="stock_barang" />
                                                </div>
                                            </div>


                                            <div class = "col">
                                                <div class="row justify-content-end col-sm-12">
                                                    <button type="submit" class="btn btn-primary">Tambahkan
                                                        Barang</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- / Content -->


                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js ../assets/vendor/js/core.js -->

    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
