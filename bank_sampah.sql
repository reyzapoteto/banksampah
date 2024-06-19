CREATE TABLE `barangs` (
  `id` int NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kategori_barang` varchar(255) NOT NULL,
  `deskripsi_barang` varchar(255) NOT NULL,
  `harga_barang` int NOT NULL,
  `stock_barang` int NOT NULL,
  `gambar_barang` longblob NOT NULL
);

--
-- Dumping data for table `barangs`
--
INSERT INTO
  `barangs` (
    `id`,
    `nama_barang`,
    `kategori_barang`,
    `deskripsi_barang`,
    `harga_barang`,
    `stock_barang`,
    `gambar_barang`
  )
VALUES
  (
    4,
    'pot bunga 2',
    'bahan_basah',
    'ini adalah barang makanan',
    20000,
    50,
    0x626172616e672f36326677494f56796d557454745032584f4e4c5658316879666551516d69634c4e4232456244767a2e6a7067
  ),
  (
    5,
    'olahan bentuk botol bekas',
    'bahan_plastik',
    'ini merupakan bahan botol bekas dengan botol sprite',
    10000,
    10,
    0x626172616e672f6441447a364433736b666a5243764e514f5a636e37744d76505a78654d734c54486f57356d4f64672e6a7067
  );

-- --------------------------------------------------------
--
-- Table structure for table `failed_jobs`
--
CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- --------------------------------------------------------
--
-- Table structure for table `migrations`
--
CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int NOT NULL
);

--
-- Dumping data for table `migrations`
--
INSERT INTO
  `migrations` (`id`, `migration`, `batch`)
VALUES
  (1, '2014_10_12_000000_create_users_table', 1),
  (
    2,
    '2014_10_12_100000_create_password_reset_tokens_table',
    1
  ),
  (
    3,
    '2014_10_12_100000_create_password_resets_table',
    1
  ),
  (
    4,
    '2019_08_19_000000_create_failed_jobs_table',
    1
  ),
  (
    5,
    '2019_12_14_000001_create_personal_access_tokens_table',
    1
  ),
  (
    7,
    '2024_06_18_120031_create_transaksis_table',
    2
  ),
  (
    8,
    '2024_06_18_175546_create_reportbugs_table',
    3
  );

-- --------------------------------------------------------
--
-- Table structure for table `modul`
--
CREATE TABLE `modul` (
  `id_modul` int NOT NULL,
  `judul_modul` varchar(255) NOT NULL,
  `deskripsi_modul` text NOT NULL,
  `jenis_konten` text NOT NULL
);

-- --------------------------------------------------------
--
-- Table structure for table `password_resets`
--
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
);

-- --------------------------------------------------------
--
-- Table structure for table `password_reset_tokens`
--
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
);

-- --------------------------------------------------------
--
-- Table structure for table `personal_access_tokens`
--
CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
);

-- --------------------------------------------------------
--
-- Table structure for table `reportbugs`
--
CREATE TABLE `reportbugs` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `bukti` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
);

--
-- Dumping data for table `reportbugs`
--
INSERT INTO
  `reportbugs` (
    `id`,
    `judul`,
    `pesan`,
    `bukti`,
    `created_at`,
    `updated_at`
  )
VALUES
  (
    1,
    'masalah',
    'disini',
    'barang/r359W58S2lpoVFNy5Gso2in2YlF0ObCdecLjUYOS.jpg',
    '2024-06-18 11:21:05',
    '2024-06-18 11:21:05'
  );

-- --------------------------------------------------------
--
-- Table structure for table `transaksis`
--
CREATE TABLE `transaksis` (
  `id` bigint UNSIGNED NOT NULL,
  `barang_id` int NOT NULL,
  `quantity` int NOT NULL,
  `total` int NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `bukti` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
);

--
-- Dumping data for table `transaksis`
--
INSERT INTO
  `transaksis` (
    `id`,
    `barang_id`,
    `quantity`,
    `total`,
    `note`,
    `bukti`,
    `created_at`,
    `updated_at`
  )
VALUES
  (
    1,
    4,
    20,
    40000,
    'yang bagus ya',
    'barang/e9ws29xBlxJpR6oytJRGH2Vnl13jdNv79MsTsVZ8.jpg',
    '2024-06-18 05:42:50',
    '2024-06-18 05:42:50'
  );

-- --------------------------------------------------------
--
-- Table structure for table `users`
--
CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL DEFAULT '',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
);

--
-- Dumping data for table `users`
--
INSERT INTO
  `users` (
    `id`,
    `name`,
    `email`,
    `email_verified_at`,
    `password`,
    `address`,
    `remember_token`,
    `created_at`,
    `updated_at`
  )
VALUES
  (
    2,
    'reyza',
    'reyza@gmail.com',
    NULL,
    '$2y$12$6grMoZqueDoFJi7i.a4Wk.SNwWXT2K8OAOplxgYc2v/3NSk4LXKW2',
    'Jl Wisma Lidah kulon bangkingan XH no 67',
    NULL,
    '2024-06-18 04:27:35',
    '2024-06-18 04:27:35'
  ),
  (
    3,
    'Reyza Reyznata',
    'reyzapoteto652@gmail.com',
    NULL,
    '$2y$12$.tn8jiZBQ0NkBhLmon.VaOSICxuH6bMzPfFNTwejWEwum1zQcdCo.',
    'Jl Wisma Lidah kulon bangkingan XH no 67',
    NULL,
    '2024-06-18 04:31:39',
    '2024-06-18 10:08:03'
  ),
  (
    4,
    'deva',
    'devanaufal@gmail.com',
    NULL,
    '$2y$12$zL6JRDnpWCypv45AQwxEt.T/LO06alp0VWEpJa8wERw7nszcaB9LW',
    'Jl Wisma Lidah kulon bangkingan XH no 67',
    NULL,
    '2024-06-18 19:12:58',
    '2024-06-18 19:12:58'
  );

--
-- Indexes for dumped tables
--
--
-- Indexes for table `barangs`
--
ALTER TABLE
  `barangs`
ADD
  PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE
  `failed_jobs`
ADD
  PRIMARY KEY (`id`),
ADD
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE
  `migrations`
ADD
  PRIMARY KEY (`id`);

--
-- Indexes for table `modul`
--
ALTER TABLE
  `modul`
ADD
  PRIMARY KEY (`id_modul`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE
  `password_resets`
ADD
  KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE
  `password_reset_tokens`
ADD
  PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE
  `personal_access_tokens`
ADD
  PRIMARY KEY (`id`),
ADD
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
ADD
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`, `tokenable_id`);

--
-- Indexes for table `reportbugs`
--
ALTER TABLE
  `reportbugs`
ADD
  PRIMARY KEY (`id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE
  `transaksis`
ADD
  PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE
  `users`
ADD
  PRIMARY KEY (`id`),
ADD
  UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE
  `barangs`
MODIFY
  `id` int NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE
  `failed_jobs`
MODIFY
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE
  `migrations`
MODIFY
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE
  `personal_access_tokens`
MODIFY
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reportbugs`
--
ALTER TABLE
  `reportbugs`
MODIFY
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 2;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE
  `transaksis`
MODIFY
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE
  `users`
MODIFY
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 5;

COMMIT;