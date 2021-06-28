-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2021 at 02:12 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sia_peterpen`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_jenis`
--

CREATE TABLE `account_jenis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_code` int(11) NOT NULL,
  `account_jenis_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_jenis`
--

INSERT INTO `account_jenis` (`id`, `jenis_code`, `account_jenis_name`, `created_at`, `updated_at`) VALUES
(2, 1002, 'Kewajiban', '2021-06-19 17:29:48', '2021-06-19 17:29:48'),
(3, 1003, 'Modal', '2021-06-19 17:29:57', '2021-06-19 17:29:57'),
(4, 1004, 'Pendapatan', '2021-06-19 17:30:34', '2021-06-19 17:30:34'),
(5, 1005, 'Pendapatan lain', '2021-06-19 17:30:41', '2021-06-19 17:30:41'),
(6, 1006, 'Biaya Atas Pendapatan', '2021-06-19 17:31:05', '2021-06-19 17:31:05'),
(7, 1007, 'Pengeluaran Operasional', '2021-06-19 17:31:18', '2021-06-19 17:31:18'),
(8, 1008, 'Pengeluaran Lainnya', '2021-06-20 00:36:42', '2021-06-20 00:36:42'),
(9, 1001, 'Harta', '2021-06-20 00:42:09', '2021-06-20 00:42:09');

-- --------------------------------------------------------

--
-- Table structure for table `account_master`
--

CREATE TABLE `account_master` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account_code` int(11) NOT NULL,
  `account_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saldo_account` int(11) NOT NULL,
  `account_jenis_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `account_jenis_id` bigint(20) DEFAULT NULL,
  `account_type_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_master`
--

INSERT INTO `account_master` (`id`, `account_code`, `account_name`, `saldo_account`, `account_jenis_name`, `account_type_name`, `created_at`, `updated_at`, `account_jenis_id`, `account_type_id`) VALUES
(1, 100001, 'Kas Kecil', 0, 'Harta', 'Kas', '2021-06-19 18:01:49', '2021-06-19 18:01:49', NULL, NULL),
(2, 100002, 'Kas', -5878000, 'Harta', 'Kas', '2021-06-19 18:09:00', '2021-06-20 19:31:21', NULL, NULL),
(3, 100003, 'Bank', 0, 'Harta', 'Bank', '2021-06-19 18:09:23', '2021-06-19 18:09:23', NULL, NULL),
(4, 100004, 'Piutang Usaha', 9000, 'Harta', 'Piutang Usaha', '2021-06-19 18:09:54', '2021-06-19 21:19:24', NULL, NULL),
(5, 100005, 'Deposit Supplier', 0, 'Harta', 'Piutang Usaha', '2021-06-19 18:10:19', '2021-06-19 18:10:19', NULL, NULL),
(6, 100006, 'Piutang Non Usaha', 0, 'Harta', 'Piutang Non Usaha', '2021-06-19 18:10:51', '2021-06-19 18:10:51', NULL, NULL),
(7, 100007, 'Persediaan Barang Dagang', 0, 'Harta', 'Persediaan', '2021-06-19 18:11:23', '2021-06-19 18:11:23', NULL, NULL),
(8, 100008, 'Asuransi Dibayar Dimuka', 9000, 'Harta', 'Biaya Dibayar Dimuka', '2021-06-19 18:11:56', '2021-06-20 00:52:25', NULL, NULL),
(9, 100009, 'Investasi Saham', 0, 'Harta', 'Investasi Jangka Panjang', '2021-06-19 18:12:28', '2021-06-19 18:12:28', NULL, NULL),
(10, 100010, 'Tanah', 0, 'Harta', 'Harta Tetap Berwujud', '2021-06-19 18:12:57', '2021-06-19 18:12:57', NULL, NULL),
(11, 100011, 'Hutang Usaha', 0, 'Kewajiban', 'Hutang Usaha', '2021-06-19 18:13:28', '2021-06-19 18:13:28', NULL, NULL),
(12, 100012, 'Hutang Non Usaha', 0, 'Kewajiban', 'Hutang Non Usaha', '2021-06-19 18:13:53', '2021-06-19 18:13:53', NULL, NULL),
(13, 100013, 'Penjualan', 4860000, 'Pendapatan', 'Pendapatan Usaha', '2021-06-19 18:14:23', '2021-06-20 19:31:21', NULL, NULL),
(14, 100014, 'Retur Penjualan', 0, 'Pendapatan', 'Pendapatan Usaha', '2021-06-19 18:14:46', '2021-06-19 18:14:46', NULL, NULL),
(15, 100015, 'Harga Pokok Penjualan', 0, 'Biaya Atas Pendapatan', 'Biaya Produksi', '2021-06-19 18:15:16', '2021-06-19 18:15:16', NULL, NULL),
(16, 100016, 'Gaji', 1000000, 'Pengeluaran Operasional', 'Biaya operasional', '2021-06-19 18:15:55', '2021-06-20 19:23:53', NULL, NULL),
(17, 100017, 'Listrik, Air, Telepon dan Internet', 0, 'Pengeluaran Operasional', 'Biaya operasional', '2021-06-19 18:16:41', '2021-06-19 18:16:41', NULL, NULL),
(18, 100018, 'Biaya Bunga', 0, 'Pengeluaran Lainnya', 'Pengeluaran Luar Usaha', '2021-06-19 18:17:00', '2021-06-19 18:17:00', NULL, NULL),
(19, 100019, 'Jasa Bank', 0, 'Pengeluaran Lainnya', 'Pengeluaran Luar Usaha', '2021-06-19 18:17:18', '2021-06-19 18:17:18', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `account_type`
--

CREATE TABLE `account_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_code` int(11) NOT NULL,
  `account_jenis_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `account_jenis_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_type`
--

INSERT INTO `account_type` (`id`, `type_code`, `account_jenis_name`, `account_type_name`, `created_at`, `updated_at`, `account_jenis_id`) VALUES
(1, 10001, 'Harta', 'Kas', '2021-06-19 17:53:20', '2021-06-19 17:53:20', NULL),
(2, 10002, 'Harta', 'Bank', '2021-06-19 17:53:44', '2021-06-19 17:53:44', NULL),
(3, 10003, 'Harta', 'Piutang Usaha', '2021-06-19 17:54:03', '2021-06-19 17:54:03', NULL),
(4, 10004, 'Harta', 'Piutang Non Usaha', '2021-06-19 17:54:44', '2021-06-19 17:54:44', NULL),
(5, 10005, 'Harta', 'Piutang Pajak', '2021-06-19 17:55:10', '2021-06-19 17:55:10', NULL),
(6, 10006, 'Harta', 'Persediaan', '2021-06-19 17:55:25', '2021-06-19 17:55:25', NULL),
(7, 10007, 'Harta', 'Biaya Dibayar Dimuka', '2021-06-19 17:56:13', '2021-06-19 17:56:13', NULL),
(8, 10008, 'Harta', 'Investasi Jangka Panjang', '2021-06-19 17:56:36', '2021-06-19 17:56:36', NULL),
(9, 10009, 'Harta', 'Harta Tetap Berwujud', '2021-06-19 17:57:03', '2021-06-19 17:57:03', NULL),
(10, 10010, 'Harta', 'Harta Tetap Tidak Berwujud', '2021-06-19 17:57:21', '2021-06-19 17:57:21', NULL),
(11, 10011, 'Kewajiban', 'Hutang Usaha', '2021-06-19 17:57:48', '2021-06-19 17:57:48', NULL),
(12, 10012, 'Kewajiban', 'Hutang Non Usaha', '2021-06-19 17:58:10', '2021-06-19 17:58:10', NULL),
(13, 10013, 'Pendapatan', 'Pendapatan Usaha', '2021-06-19 17:58:30', '2021-06-19 17:58:30', NULL),
(14, 10014, 'Pendapatan', 'Pendapatan Penjualan', '2021-06-19 17:58:49', '2021-06-19 17:58:49', NULL),
(15, 10015, 'Biaya Atas Pendapatan', 'Biaya Produksi', '2021-06-19 17:59:20', '2021-06-19 17:59:20', NULL),
(16, 10016, 'Pengeluaran Operasional', 'Biaya operasional', '2021-06-19 17:59:44', '2021-06-19 17:59:44', NULL),
(17, 10017, 'Pengeluaran Lainnya', 'Pengeluaran Luar Usaha', '2021-06-19 18:00:06', '2021-06-19 18:00:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `buys`
--

CREATE TABLE `buys` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `harga_product` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buys`
--

INSERT INTO `buys` (`id`, `product_id`, `supplier_id`, `harga_product`, `total`, `total_harga`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 150000, 1, 150000, NULL, '2021-06-19 00:27:07', '2021-06-19 00:27:07'),
(3, 2, 1, 100000, 1, 100000, NULL, '2021-06-20 19:19:29', '2021-06-20 19:19:29'),
(4, 2, 1, 100000, 1, 100000, NULL, '2021-06-20 19:19:50', '2021-06-20 19:19:50'),
(5, 3, 3, 5000, 5, 25000, NULL, '2021-06-20 19:21:25', '2021-06-20 19:21:25');

-- --------------------------------------------------------

--
-- Table structure for table `buy_product`
--

CREATE TABLE `buy_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `buy_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `costumers`
--

CREATE TABLE `costumers` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` tinyint(4) NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `costumers`
--

INSERT INTO `costumers` (`id`, `nama`, `jenis_kelamin`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Katon Wijaya', 2, '2974', 'Jl Patimura', '2021-06-18 22:19:40', '2021-06-18 22:19:40'),
(2, 'Jong Jek Siang', 1, '927', 'Jl Duri', '2021-06-18 22:21:28', '2021-06-18 22:21:28'),
(3, 'Lussy', 2, '2864', 'Jl Duri', '2021-06-19 05:09:03', '2021-06-19 05:09:03');

-- --------------------------------------------------------

--
-- Table structure for table `general_ledger`
--

CREATE TABLE `general_ledger` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gl_code` int(11) NOT NULL,
  `trans_date` date NOT NULL,
  `account_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trans_date` date NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `debit_account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kredit_account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `debit` int(11) NOT NULL,
  `kredit` int(11) NOT NULL,
  `posting` enum('no','yes') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`id`, `trans_date`, `reference`, `description`, `debit_account`, `kredit_account`, `debit`, `kredit`, `posting`, `created_at`, `updated_at`) VALUES
(1, '2021-06-19', 'jr/001', 'Penjualan', 'Penjualan', 'Kas', 80000, 80000, 'yes', '2021-06-19 20:47:50', '2021-06-19 21:03:23'),
(2, '2021-06-20', 'jr/002', 'piutang', 'Piutang Usaha', 'Kas', 9000, 9000, 'yes', '2021-06-19 21:19:21', '2021-06-19 21:19:24'),
(3, '2021-06-20', 'jr/003', 'Asuransi', 'Asuransi Dibayar Dimuka', 'Kas', 9000, 9000, 'yes', '2021-06-20 00:52:09', '2021-06-20 00:52:25'),
(4, '2021-06-21', 'jr/004', 'Penjualan', 'Penjualan', 'Kas', 60000, 60000, 'yes', '2021-06-20 01:50:13', '2021-06-20 01:50:16'),
(5, '2021-06-21', 'jr/005', 'Penjualan', 'Penjualan', 'Piutang usaha', 80000, 80000, 'no', '2021-06-20 07:24:18', '2021-06-20 07:24:18'),
(6, '2021-06-21', 'jr/007', 'Gaji', 'Gaji', 'Kas', 1000000, 1000000, 'yes', '2021-06-20 19:23:36', '2021-06-20 19:23:53'),
(7, '2021-06-21', 'jr/009', 'Penjualan', 'Penjualan', 'Kas', 5000000, 5000000, 'yes', '2021-06-20 19:31:18', '2021-06-20 19:31:21');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `nama_menu`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Nasi Goreng', 20000, '2021-06-18 22:20:01', '2021-06-18 22:20:01'),
(2, 'Nasi Padang', 25000, '2021-06-18 22:20:10', '2021-06-18 22:20:10'),
(3, 'Yamie Ayam', 15000, '2021-06-18 22:20:24', '2021-06-18 22:20:24'),
(4, 'Bakso', 12000, '2021-06-18 22:20:31', '2021-06-18 22:20:31'),
(5, 'Nasi Pecal', 17000, '2021-06-18 22:20:53', '2021-06-18 22:20:53'),
(6, 'Kwetiau', 13000, '2021-06-18 22:21:01', '2021-06-18 22:21:01'),
(7, 'Air Mineral', 5000, '2021-06-19 05:09:24', '2021-06-19 05:09:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_06_19_043021_create_menus_table', 1),
(4, '2021_06_19_043033_create_products_table', 1),
(5, '2021_06_19_043049_create_costumers_table', 1),
(6, '2021_06_19_043056_create_suppliers_table', 1),
(7, '2021_06_19_043105_create_orders_table', 1),
(8, '2021_06_19_043113_create_buys_table', 1),
(9, '2021_06_19_043134_create_order_menu_table', 1),
(10, '2021_06_19_043149_create_buy_product_table', 1),
(11, '2021_06_19_043159_create_transactions_table', 1),
(12, '2021_06_19_043218_add_payment_to_transactions', 1),
(13, '2021_06_19_082411_create_akuns_table', 2),
(14, '2021_06_19_082529_create_jurnal_manuals_table', 2),
(15, '2021_06_19_082543_create_kas_table', 2),
(16, '2021_06_19_082559_create_transaksi_jurnals_table', 2),
(17, '2021_06_19_082609_create_detail_transaksi_jurnals_table', 2),
(18, '2021_06_19_093914_create_akuns_table', 3),
(19, '2021_06_19_094719_create_jurnal_manuals_table', 4),
(20, '2021_06_19_104820_create_akuns_table', 5),
(21, '2021_06_19_104830_create_jurnal_manuals_table', 5),
(22, '2021_06_19_134146_create_asset_type_table', 6),
(23, '2021_06_19_134201_create_asset_group_table', 6),
(24, '2021_06_19_134215_create_account_master_table', 6),
(25, '2021_06_19_134230_create_account_type_table', 6),
(26, '2021_06_19_134456_create_account_jenis_table', 6),
(27, '2021_06_19_134931_create_general_ledger_table', 6),
(28, '2021_06_19_134944_create_journal_table', 6),
(29, '2021_06_19_134954_create_tax_groups_table', 6),
(30, '2021_06_19_135010_create_tax_types_table', 6),
(31, '2021_06_19_135055_create_cash_table', 6),
(32, '2021_06_19_135448_create_tax_transactions_details_table', 7),
(33, '2021_06_19_135558_create_asset_transactions_details_table', 7),
(34, '2021_06_19_140128_create_transactions_table', 7),
(35, '2021_06_20_111755_create_users_table', 8),
(36, '2021_06_20_111822_create_password_resets_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(11) NOT NULL,
  `costumer_id` int(11) NOT NULL,
  `harga_menu` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `menu_id`, `costumer_id`, `harga_menu`, `total`, `total_harga`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 4, 2, 12000, 1, 12000, NULL, '2021-06-18 22:22:56', '2021-06-18 22:22:56'),
(2, 2, 2, 25000, 3, 75000, NULL, '2021-06-18 22:23:25', '2021-06-18 22:23:25'),
(3, 4, 1, 12000, 1, 12000, NULL, '2021-06-19 00:29:12', '2021-06-19 00:29:12');

-- --------------------------------------------------------

--
-- Table structure for table `order_menu`
--

CREATE TABLE `order_menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `nama_product`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Sayuran', 150000, '2021-06-19 00:13:01', '2021-06-19 00:13:01'),
(2, 'Buah-buahan', 100000, '2021-06-19 00:13:34', '2021-06-19 00:13:34'),
(3, 'Aqua', 5000, '2021-06-19 05:11:01', '2021-06-19 05:11:01');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` tinyint(4) NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `nama`, `jenis_kelamin`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Lucinta Luna', 2, '29492746', 'Jl Bendungan', '2021-06-19 00:17:25', '2021-06-19 00:17:25'),
(3, 'Nanda', 2, '0283593', 'Jl Melati', '2021-06-20 19:21:05', '2021-06-20 19:21:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','kasir') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'kasir',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nanda Meliana', 'nandameliana@gmail.com', NULL, '$2y$10$vklKMQuSITCCI0N.ssfWgOvw8thIUEmAoIM.IMaBxOFkMuYsEZKmm', 'kasir', 'kZOTIMvAsO1VA0sjltUsoNbZLlrytRcDaB8X9bUzWAKsZIaGNdU0k9FNJ1yW', '2021-06-20 04:28:06', '2021-06-20 04:28:06'),
(2, 'Anisya Clara', 'anisya.clara@si.ukdw.ac.id', NULL, '$2y$10$Wp0ahHoz.GrcFj2xDc.BAeTgy7eTj62tgd5bSjZj.JqoYLuJu13Mm', 'admin', 'MMp286h9IEtO7E4ha4LP60pIOlWJV0p3q3VxTX5oxl1CRhjpEVBUiQpDVHqH', '2021-06-20 04:48:00', '2021-06-20 04:48:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_jenis`
--
ALTER TABLE `account_jenis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_jenis_jenis_code_unique` (`jenis_code`);

--
-- Indexes for table `account_master`
--
ALTER TABLE `account_master`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_master_account_code_unique` (`account_code`);

--
-- Indexes for table `account_type`
--
ALTER TABLE `account_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_type_type_code_unique` (`type_code`);

--
-- Indexes for table `buys`
--
ALTER TABLE `buys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buy_product`
--
ALTER TABLE `buy_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buy_product_buy_id_foreign` (`buy_id`),
  ADD KEY `buy_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `costumers`
--
ALTER TABLE `costumers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_ledger`
--
ALTER TABLE `general_ledger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_menu`
--
ALTER TABLE `order_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_menu_order_id_foreign` (`order_id`),
  ADD KEY `order_menu_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_jenis`
--
ALTER TABLE `account_jenis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `account_master`
--
ALTER TABLE `account_master`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `account_type`
--
ALTER TABLE `account_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `buys`
--
ALTER TABLE `buys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `buy_product`
--
ALTER TABLE `buy_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `costumers`
--
ALTER TABLE `costumers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `general_ledger`
--
ALTER TABLE `general_ledger`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_menu`
--
ALTER TABLE `order_menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buy_product`
--
ALTER TABLE `buy_product`
  ADD CONSTRAINT `buy_product_buy_id_foreign` FOREIGN KEY (`buy_id`) REFERENCES `buys` (`id`),
  ADD CONSTRAINT `buy_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `order_menu`
--
ALTER TABLE `order_menu`
  ADD CONSTRAINT `order_menu_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`),
  ADD CONSTRAINT `order_menu_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
