-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Apr 2020 pada 07.49
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mustikasela`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `add_costs`
--

CREATE TABLE `add_costs` (
  `id` int(10) UNSIGNED NOT NULL,
  `ac_principal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ac_rate` double DEFAULT NULL,
  `ac_volume` double DEFAULT NULL,
  `ac_revenue` double DEFAULT NULL,
  `ac_expenses` double DEFAULT NULL,
  `id_realcost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `add_costs`
--

INSERT INTO `add_costs` (`id`, `ac_principal`, `ac_rate`, `ac_volume`, `ac_revenue`, `ac_expenses`, `id_realcost`, `created_at`, `updated_at`) VALUES
(4, '1', 1, 1, 1, 1, 'JR001', '2019-01-18 22:54:47', '2019-01-18 22:54:47'),
(5, NULL, NULL, NULL, NULL, NULL, 'JR002', '2019-01-19 02:24:22', '2019-01-19 02:24:22'),
(6, NULL, NULL, NULL, NULL, NULL, 'JR003', '2019-01-19 02:32:52', '2019-01-19 02:32:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agent1s`
--

CREATE TABLE `agent1s` (
  `id` int(10) UNSIGNED NOT NULL,
  `A1_principal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `A1_rate` double DEFAULT NULL,
  `A1_volume` double DEFAULT NULL,
  `A1_revenue` double DEFAULT NULL,
  `A1_expenses` double DEFAULT NULL,
  `id_realcost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `agent1s`
--

INSERT INTO `agent1s` (`id`, `A1_principal`, `A1_rate`, `A1_volume`, `A1_revenue`, `A1_expenses`, `id_realcost`, `created_at`, `updated_at`) VALUES
(4, '1', 1, 1, 1, 1, 'JR001', '2019-01-18 22:54:47', '2019-01-18 22:54:47'),
(5, NULL, NULL, NULL, NULL, NULL, 'JR002', '2019-01-19 02:24:22', '2019-01-19 02:24:22'),
(6, NULL, NULL, NULL, NULL, NULL, 'JR003', '2019-01-19 02:32:52', '2019-01-19 02:32:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agent2s`
--

CREATE TABLE `agent2s` (
  `id` int(10) UNSIGNED NOT NULL,
  `a2_principal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a2_rate` double DEFAULT NULL,
  `a2_volume` double DEFAULT NULL,
  `a2_revenue` double DEFAULT NULL,
  `a2_expenses` double DEFAULT NULL,
  `id_realcost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `agent2s`
--

INSERT INTO `agent2s` (`id`, `a2_principal`, `a2_rate`, `a2_volume`, `a2_revenue`, `a2_expenses`, `id_realcost`, `created_at`, `updated_at`) VALUES
(4, '1', 1, 2, 1, 1, 'JR001', '2019-01-18 22:54:47', '2019-01-18 22:54:47'),
(5, NULL, NULL, NULL, NULL, NULL, 'JR002', '2019-01-19 02:24:22', '2019-01-19 02:24:22'),
(6, NULL, NULL, NULL, NULL, NULL, 'JR003', '2019-01-19 02:32:52', '2019-01-19 02:32:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_muatan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_financial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id`, `nama_barang`, `jumlah_muatan`, `id_financial`, `created_at`, `updated_at`) VALUES
('BR001', 'TRG', 'TR', 'JF001', '2018-12-18 10:16:29', '2018-12-18 10:16:29'),
('BR002', 'teng', '1', 'JF002', '2018-12-18 18:51:00', '2018-12-18 18:51:00'),
('BR003', 'teng', '1', 'JF003', '2019-01-03 03:54:52', '2019-01-03 03:54:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bunkers`
--

CREATE TABLE `bunkers` (
  `id` int(10) UNSIGNED NOT NULL,
  `b_principal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_rate` double DEFAULT NULL,
  `b_volume` double DEFAULT NULL,
  `b_revenue` double DEFAULT NULL,
  `b_expenses` double DEFAULT NULL,
  `id_realcost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bunkers`
--

INSERT INTO `bunkers` (`id`, `b_principal`, `b_rate`, `b_volume`, `b_revenue`, `b_expenses`, `id_realcost`, `created_at`, `updated_at`) VALUES
(4, '2', 2, 2, 5, 4, 'JR001', '2019-01-18 22:54:47', '2019-01-18 22:54:47'),
(5, NULL, NULL, NULL, NULL, NULL, 'JR002', '2019-01-19 02:24:22', '2019-01-19 02:24:22'),
(6, NULL, NULL, NULL, NULL, NULL, 'JR003', '2019-01-19 02:32:52', '2019-01-19 02:32:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bunker_ws`
--

CREATE TABLE `bunker_ws` (
  `id` int(10) UNSIGNED NOT NULL,
  `bw_principal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bw_rate` double DEFAULT NULL,
  `bw_volume` double DEFAULT NULL,
  `bw_revenue` double DEFAULT NULL,
  `bw_expenses` double DEFAULT NULL,
  `id_realcost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bunker_ws`
--

INSERT INTO `bunker_ws` (`id`, `bw_principal`, `bw_rate`, `bw_volume`, `bw_revenue`, `bw_expenses`, `id_realcost`, `created_at`, `updated_at`) VALUES
(4, '1', 1, 1, 1, 1, 'JR001', '2019-01-18 22:54:47', '2019-01-18 22:54:47'),
(5, NULL, NULL, NULL, NULL, NULL, 'JR002', '2019-01-19 02:24:22', '2019-01-19 02:24:22'),
(6, NULL, NULL, NULL, NULL, NULL, 'JR003', '2019-01-19 02:32:52', '2019-01-19 02:32:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ceanings`
--

CREATE TABLE `ceanings` (
  `id` int(10) UNSIGNED NOT NULL,
  `c_principal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_rate` double DEFAULT NULL,
  `c_volume` double DEFAULT NULL,
  `c_revenue` double DEFAULT NULL,
  `c_expenses` double DEFAULT NULL,
  `id_realcost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ceanings`
--

INSERT INTO `ceanings` (`id`, `c_principal`, `c_rate`, `c_volume`, `c_revenue`, `c_expenses`, `id_realcost`, `created_at`, `updated_at`) VALUES
(4, '3', 3, 3, 9, 9, 'JR001', '2019-01-18 22:54:47', '2019-01-18 22:54:47'),
(5, NULL, NULL, NULL, NULL, NULL, 'JR002', '2019-01-19 02:24:22', '2019-01-19 02:24:22'),
(6, NULL, NULL, NULL, NULL, NULL, 'JR003', '2019-01-19 02:32:52', '2019-01-19 02:32:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detils`
--

CREATE TABLE `detils` (
  `id` int(10) UNSIGNED NOT NULL,
  `loading_time` int(11) DEFAULT NULL,
  `discharging` int(11) DEFAULT NULL,
  `port_of_loading` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port_of_descharging` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sailing_time` int(11) DEFAULT NULL,
  `assist` int(11) DEFAULT NULL,
  `add_cost` int(11) DEFAULT NULL,
  `id_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detils`
--

INSERT INTO `detils` (`id`, `loading_time`, `discharging`, `port_of_loading`, `port_of_descharging`, `sailing_time`, `assist`, `add_cost`, `id_barang`, `created_at`, `updated_at`) VALUES
(1, 5, 85, 'pp', 'kkik', 7, 8, 8, 'BR001', '2018-12-18 10:16:29', '2018-12-18 10:16:29'),
(2, 5, 8, 'perak', 'bandung', 7, 12, 8, 'BR002', '2018-12-18 18:51:00', '2018-12-18 18:51:00'),
(3, 5, 8, 'perak', 'bandung', 5, 2, 1, 'BR003', '2019-01-03 03:54:52', '2019-01-03 03:54:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `expenses`
--

CREATE TABLE `expenses` (
  `id` int(10) UNSIGNED NOT NULL,
  `invoice` int(11) DEFAULT NULL,
  `banker` int(11) DEFAULT NULL,
  `agent` int(11) DEFAULT NULL,
  `fresh_water_volume` int(11) DEFAULT NULL,
  `premi_crew` int(11) DEFAULT NULL,
  `time_charter` int(11) DEFAULT NULL,
  `reserved` int(11) DEFAULT NULL,
  `cleaning` int(11) DEFAULT NULL,
  `fee_marketing` int(11) DEFAULT NULL,
  `port_caption` int(11) DEFAULT NULL,
  `kas_kapal` int(11) DEFAULT NULL,
  `insentive` int(11) DEFAULT NULL,
  `id_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `expenses`
--

INSERT INTO `expenses` (`id`, `invoice`, `banker`, `agent`, `fresh_water_volume`, `premi_crew`, `time_charter`, `reserved`, `cleaning`, `fee_marketing`, `port_caption`, `kas_kapal`, `insentive`, `id_barang`, `created_at`, `updated_at`) VALUES
(1, 47, 8, 65, 69, 6, 6, 6, 65, 5, 6, 65, 5, 'BR001', '2018-12-18 10:16:29', '2018-12-18 10:16:29'),
(2, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 'BR002', '2018-12-18 18:51:00', '2018-12-18 18:51:00'),
(3, 8, 2, 4, 5, 6, 7, 55, 6, 66, 5, 5, 4, 'BR003', '2019-01-03 03:54:52', '2019-01-03 03:54:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `financials`
--

CREATE TABLE `financials` (
  `id_financial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `id_kondisi` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `financials`
--

INSERT INTO `financials` (`id_financial`, `project`, `customer_name`, `date`, `id_kondisi`, `created_at`, `updated_at`) VALUES
('JF001', 'as', 'sa', '2018-12-10', 1, '2018-12-18 10:16:29', '2018-12-18 10:16:29'),
('JF002', 'ass', 'sa', '2018-12-04', 2, '2018-12-18 18:51:00', '2018-12-18 18:51:00'),
('JF003', 'xyz', 'arief', '2019-01-03', 1, '2019-01-03 03:54:52', '2019-01-03 03:54:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas_kapals`
--

CREATE TABLE `kas_kapals` (
  `id` int(10) UNSIGNED NOT NULL,
  `kk_principal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kk_rate` double DEFAULT NULL,
  `kk_volume` double DEFAULT NULL,
  `kk_revenue` double DEFAULT NULL,
  `kk_expenses` double DEFAULT NULL,
  `id_realcost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kas_kapals`
--

INSERT INTO `kas_kapals` (`id`, `kk_principal`, `kk_rate`, `kk_volume`, `kk_revenue`, `kk_expenses`, `id_realcost`, `created_at`, `updated_at`) VALUES
(4, '2', 2, 2, 4, 4, 'JR001', '2019-01-18 22:54:47', '2019-01-18 22:54:47'),
(5, NULL, NULL, NULL, NULL, NULL, 'JR002', '2019-01-19 02:24:22', '2019-01-19 02:24:22'),
(6, NULL, NULL, NULL, NULL, NULL, 'JR003', '2019-01-19 02:32:52', '2019-01-19 02:32:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kondisis`
--

CREATE TABLE `kondisis` (
  `id` int(10) UNSIGNED NOT NULL,
  `kondisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kondisis`
--

INSERT INTO `kondisis` (`id`, `kondisi`, `created_at`, `updated_at`) VALUES
(1, 'proses', NULL, NULL),
(2, 'draft', NULL, NULL),
(3, 'simpan', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mediator_fees`
--

CREATE TABLE `mediator_fees` (
  `id` int(10) UNSIGNED NOT NULL,
  `m_principal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_rate` double DEFAULT NULL,
  `m_volume` double DEFAULT NULL,
  `m_revenue` double DEFAULT NULL,
  `m_expenses` double DEFAULT NULL,
  `id_realcost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mediator_fees`
--

INSERT INTO `mediator_fees` (`id`, `m_principal`, `m_rate`, `m_volume`, `m_revenue`, `m_expenses`, `id_realcost`, `created_at`, `updated_at`) VALUES
(3, '2', 2, 4, 4, 8, 'JR001', '2019-01-18 22:54:47', '2019-01-18 22:54:47'),
(4, NULL, NULL, NULL, NULL, NULL, 'JR002', '2019-01-19 02:24:22', '2019-01-19 02:24:22'),
(5, NULL, NULL, NULL, NULL, NULL, 'JR003', '2019-01-19 02:32:52', '2019-01-19 02:32:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_16_130801_create_kondisis_table', 2),
(4, '2018_12_15_063754_create_financials_table', 3),
(5, '2018_12_15_063919_create_barangs_table', 4),
(6, '2018_12_15_063941_create_volumes_table', 5),
(7, '2018_12_15_064530_create_rates_table', 5),
(8, '2018_12_15_064554_create_revenues_table', 5),
(9, '2018_12_15_064620_create_expenses_table', 5),
(10, '2018_12_15_064637_create_detils_table', 5),
(11, '2018_12_16_131137_create_spals_table', 5),
(12, '2018_12_16_131207_create_invoices_table', 5),
(13, '2019_01_05_073946_create_realcosts_table', 6),
(14, '2019_01_05_074722_create_rc_invoices_table', 6),
(15, '2019_01_05_074753_create_rc_time_charters_table', 6),
(16, '2019_01_05_074822_create_agent1s_table', 6),
(17, '2019_01_05_074836_create_agent2s_table', 7),
(18, '2019_01_05_074852_create_bunkers_table', 8),
(19, '2019_01_05_075206_create_tug_assists_table', 9),
(20, '2019_01_05_075226_create_ceanings_table', 9),
(21, '2019_01_05_075248_create_navigations_table', 9),
(22, '2019_01_05_075308_create_refunds_table', 9),
(23, '2019_01_05_075333_create_add_costs_table', 9),
(24, '2019_01_05_075415_create_kas_kapals_table', 9),
(25, '2019_01_05_075443_create_mediator_fees_table', 9),
(26, '2019_01_05_075519_create_port_captain_fees_table', 9),
(27, '2019_01_05_075538_create_totals_table', 9),
(28, '2019_01_05_075704_create_bunker_ws_table', 9),
(29, '2019_01_19_044643_create_profits_table', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `navigations`
--

CREATE TABLE `navigations` (
  `id` int(10) UNSIGNED NOT NULL,
  `n_principal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_rate` double DEFAULT NULL,
  `n_volume` double DEFAULT NULL,
  `n_revenue` double DEFAULT NULL,
  `n_expenses` double DEFAULT NULL,
  `id_realcost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `navigations`
--

INSERT INTO `navigations` (`id`, `n_principal`, `n_rate`, `n_volume`, `n_revenue`, `n_expenses`, `id_realcost`, `created_at`, `updated_at`) VALUES
(4, '2', 2, 2, 4, 4, 'JR001', '2019-01-18 22:54:47', '2019-01-18 22:54:47'),
(5, NULL, NULL, NULL, NULL, NULL, 'JR002', '2019-01-19 02:24:22', '2019-01-19 02:24:22'),
(6, NULL, NULL, NULL, NULL, NULL, 'JR003', '2019-01-19 02:32:52', '2019-01-19 02:32:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `port_captain_fees`
--

CREATE TABLE `port_captain_fees` (
  `id` int(10) UNSIGNED NOT NULL,
  `pc_principal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pc_rate` double DEFAULT NULL,
  `pc_volume` double DEFAULT NULL,
  `pc_revenue` double DEFAULT NULL,
  `pc_expenses` double DEFAULT NULL,
  `id_realcost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `port_captain_fees`
--

INSERT INTO `port_captain_fees` (`id`, `pc_principal`, `pc_rate`, `pc_volume`, `pc_revenue`, `pc_expenses`, `id_realcost`, `created_at`, `updated_at`) VALUES
(2, '3', 3, 2, 2, 6, 'JR001', '2019-01-18 22:54:47', '2019-01-18 22:54:47'),
(3, NULL, NULL, NULL, NULL, NULL, 'JR002', '2019-01-19 02:24:22', '2019-01-19 02:24:22'),
(4, NULL, NULL, NULL, NULL, NULL, 'JR003', '2019-01-19 02:32:52', '2019-01-19 02:32:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profits`
--

CREATE TABLE `profits` (
  `id` int(10) UNSIGNED NOT NULL,
  `pro_expenses` double DEFAULT NULL,
  `id_realcost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profits`
--

INSERT INTO `profits` (`id`, `pro_expenses`, `id_realcost`, `created_at`, `updated_at`) VALUES
(1, 22, 'JR001', '2019-01-18 22:54:47', '2019-01-18 22:54:47'),
(2, NULL, 'JR002', '2019-01-19 02:24:22', '2019-01-19 02:24:22'),
(3, NULL, 'JR003', '2019-01-19 02:32:52', '2019-01-19 02:32:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rates`
--

CREATE TABLE `rates` (
  `id` int(10) UNSIGNED NOT NULL,
  `invoice` int(11) DEFAULT NULL,
  `banker` int(11) DEFAULT NULL,
  `agent` int(11) DEFAULT NULL,
  `fresh_water_volume` int(11) DEFAULT NULL,
  `premi_crew` int(11) DEFAULT NULL,
  `time_charter` int(11) DEFAULT NULL,
  `reserved` int(11) DEFAULT NULL,
  `cleaning` int(11) DEFAULT NULL,
  `fee_marketing` int(11) DEFAULT NULL,
  `port_caption` int(11) DEFAULT NULL,
  `kas_kapal` int(11) DEFAULT NULL,
  `insentive` int(11) DEFAULT NULL,
  `id_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rates`
--

INSERT INTO `rates` (`id`, `invoice`, `banker`, `agent`, `fresh_water_volume`, `premi_crew`, `time_charter`, `reserved`, `cleaning`, `fee_marketing`, `port_caption`, `kas_kapal`, `insentive`, `id_barang`, `created_at`, `updated_at`) VALUES
(1, 4, 4, 4, 4, 4, 7, 4, 4, 4, 4, 4, 4, 'BR001', '2018-12-18 10:16:29', '2018-12-18 10:16:29'),
(2, 12, 11, 10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 'BR002', '2018-12-18 18:51:00', '2018-12-18 18:51:00'),
(3, 11, 12, 1, 3, 3, 2, 3, 4, 5, 55, 6, 4, 'BR003', '2019-01-03 03:54:52', '2019-01-03 03:54:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rc_invoices`
--

CREATE TABLE `rc_invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `i_principal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i_rate` double DEFAULT NULL,
  `i_volume` double DEFAULT NULL,
  `i_revenue` double DEFAULT NULL,
  `i_expenses` double DEFAULT NULL,
  `id_realcost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rc_invoices`
--

INSERT INTO `rc_invoices` (`id`, `i_principal`, `i_rate`, `i_volume`, `i_revenue`, `i_expenses`, `id_realcost`, `created_at`, `updated_at`) VALUES
(6, '1', 1, 1, 1, 2, 'JR001', '2019-01-18 22:54:47', '2019-01-18 22:54:47'),
(7, '1', 1, 1, 1, 2, 'JR002', '2019-01-19 02:24:22', '2019-01-19 02:24:22'),
(8, NULL, NULL, NULL, NULL, NULL, 'JR003', '2019-01-19 02:32:52', '2019-01-19 02:32:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rc_time_charters`
--

CREATE TABLE `rc_time_charters` (
  `id` int(10) UNSIGNED NOT NULL,
  `tc_principal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tc_rate` double DEFAULT NULL,
  `tc_volume` double DEFAULT NULL,
  `tc_revenue` double DEFAULT NULL,
  `tc_expenses` double DEFAULT NULL,
  `id_realcost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rc_time_charters`
--

INSERT INTO `rc_time_charters` (`id`, `tc_principal`, `tc_rate`, `tc_volume`, `tc_revenue`, `tc_expenses`, `id_realcost`, `created_at`, `updated_at`) VALUES
(6, '7', 7, 7, 25, 49, 'JR001', '2019-01-18 22:54:47', '2019-01-18 22:54:47'),
(7, NULL, NULL, NULL, NULL, NULL, 'JR002', '2019-01-19 02:24:22', '2019-01-19 02:24:22'),
(8, NULL, NULL, NULL, NULL, NULL, 'JR003', '2019-01-19 02:32:52', '2019-01-19 02:32:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `realcosts`
--

CREATE TABLE `realcosts` (
  `id_realcost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kapal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_costomer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `pelabuhan_asal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pelabuhan_tujuan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estimasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemilik` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_kondisi` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `realcosts`
--

INSERT INTO `realcosts` (`id_realcost`, `nama_kapal`, `nama_costomer`, `date`, `pelabuhan_asal`, `pelabuhan_tujuan`, `estimasi`, `pemilik`, `created_at`, `updated_at`, `id_kondisi`) VALUES
('JR001', 'as', 'arief setya', '2019-01-19', 'perak', 'semarang', '2', 'adam', '2019-01-18 22:54:47', '2019-01-18 22:54:47', 3),
('JR002', 'as', 'arief setya', '2019-01-02', 'perak', 'semarang', '2', 'adam', '2019-01-19 02:24:22', '2019-01-19 02:24:22', 2),
('JR003', 'as', 'arief setya', '2019-01-19', 'perak', 'semarang', '2', 'adam', '2019-01-19 02:32:52', '2019-01-19 02:32:52', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `refunds`
--

CREATE TABLE `refunds` (
  `id` int(10) UNSIGNED NOT NULL,
  `r_principal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `r_rate` double DEFAULT NULL,
  `r_volume` double DEFAULT NULL,
  `r_revenue` double DEFAULT NULL,
  `r_expenses` double DEFAULT NULL,
  `id_realcost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `refunds`
--

INSERT INTO `refunds` (`id`, `r_principal`, `r_rate`, `r_volume`, `r_revenue`, `r_expenses`, `id_realcost`, `created_at`, `updated_at`) VALUES
(4, '1', 1, 1, 2, 1, 'JR001', '2019-01-18 22:54:47', '2019-01-18 22:54:47'),
(5, NULL, NULL, NULL, NULL, NULL, 'JR002', '2019-01-19 02:24:22', '2019-01-19 02:24:22'),
(6, NULL, NULL, NULL, NULL, NULL, 'JR003', '2019-01-19 02:32:52', '2019-01-19 02:32:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `revenues`
--

CREATE TABLE `revenues` (
  `id` int(10) UNSIGNED NOT NULL,
  `invoice` int(11) DEFAULT NULL,
  `banker` int(11) DEFAULT NULL,
  `agent` int(11) DEFAULT NULL,
  `fresh_water_volume` int(11) DEFAULT NULL,
  `premi_crew` int(11) DEFAULT NULL,
  `time_charter` int(11) DEFAULT NULL,
  `reserved` int(11) DEFAULT NULL,
  `cleaning` int(11) DEFAULT NULL,
  `fee_marketing` int(11) DEFAULT NULL,
  `port_caption` int(11) DEFAULT NULL,
  `kas_kapal` int(11) DEFAULT NULL,
  `insentive` int(11) DEFAULT NULL,
  `id_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `revenues`
--

INSERT INTO `revenues` (`id`, `invoice`, `banker`, `agent`, `fresh_water_volume`, `premi_crew`, `time_charter`, `reserved`, `cleaning`, `fee_marketing`, `port_caption`, `kas_kapal`, `insentive`, `id_barang`, `created_at`, `updated_at`) VALUES
(1, 4, 4, 4, 4, 7, 74, 44, 8, 85, 4, 85, 4, 'BR001', '2018-12-18 10:16:29', '2018-12-18 10:16:29'),
(2, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 10, 10, 'BR002', '2018-12-18 18:51:00', '2018-12-18 18:51:00'),
(3, 7, 8, 8, 45, 7, 8, 6, 55, 6, 78, NULL, 7, 'BR003', '2019-01-03 03:54:52', '2019-01-03 03:54:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spals`
--

CREATE TABLE `spals` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_financial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemilik_kapal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keagenan_kapal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bendera_kapal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi_kapal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodisi_muatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uang_sewa` int(11) NOT NULL,
  `kesediaan_kapal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembayaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_transfer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengiriman_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerima_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asuransi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asuransi_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `denda_terlambat` int(11) NOT NULL,
  `syarat_tambahan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perselisihan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_kondisi` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `spals`
--

INSERT INTO `spals` (`id`, `id_financial`, `pemilik_kapal`, `keagenan_kapal`, `bendera_kapal`, `posisi_kapal`, `kodisi_muatan`, `uang_sewa`, `kesediaan_kapal`, `pembayaran`, `tujuan_transfer`, `pengiriman_barang`, `penerima_barang`, `asuransi`, `asuransi_barang`, `denda_terlambat`, `syarat_tambahan`, `perselisihan`, `catatan`, `created_at`, `updated_at`, `id_kondisi`) VALUES
(1, 'JF001', 'as', 'as', 'as', 'asd', 'sad', 1231, 'dsa', 'dasd', 'asd', 'ada', 'asd', 'sad', 'ads', 231, 'dasd', 'asd', 'asd', '2018-12-22 07:44:09', '2018-12-22 07:44:09', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `totals`
--

CREATE TABLE `totals` (
  `id` int(10) UNSIGNED NOT NULL,
  `tot_revenue` double DEFAULT NULL,
  `tot_expenses` double DEFAULT NULL,
  `id_realcost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `totals`
--

INSERT INTO `totals` (`id`, `tot_revenue`, `tot_expenses`, `id_realcost`, `created_at`, `updated_at`) VALUES
(2, 1, 96, 'JR001', '2019-01-18 22:54:47', '2019-01-18 22:54:47'),
(3, NULL, NULL, 'JR002', '2019-01-19 02:24:22', '2019-01-19 02:24:22'),
(4, NULL, NULL, 'JR003', '2019-01-19 02:32:52', '2019-01-19 02:32:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tug_assists`
--

CREATE TABLE `tug_assists` (
  `id` int(10) UNSIGNED NOT NULL,
  `ta_principal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ta_rate` double DEFAULT NULL,
  `ta_volume` double DEFAULT NULL,
  `ta_revenue` double DEFAULT NULL,
  `ta_expenses` double DEFAULT NULL,
  `id_realcost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tug_assists`
--

INSERT INTO `tug_assists` (`id`, `ta_principal`, `ta_rate`, `ta_volume`, `ta_revenue`, `ta_expenses`, `id_realcost`, `created_at`, `updated_at`) VALUES
(4, '1', 2, 3, 6, 6, 'JR001', '2019-01-18 22:54:47', '2019-01-18 22:54:47'),
(5, NULL, NULL, NULL, NULL, NULL, 'JR002', '2019-01-19 02:24:22', '2019-01-19 02:24:22'),
(6, NULL, NULL, NULL, NULL, NULL, 'JR003', '2019-01-19 02:32:52', '2019-01-19 02:32:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'arief setya', 'arief.setya57@gmail.com', NULL, '$2y$10$0PkL.gy6tZae6CfETDAaReCc4jp8Kp5DAVbA2QDlQeB116KqLtKJq', 'cDi1mgCvwp3KbISYqLlfDE5I2tpAYgkG2A7TTWdPOJonpZfJkizFFwpxoaEJ', '2019-03-22 09:38:30', '2019-03-22 09:38:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `volumes`
--

CREATE TABLE `volumes` (
  `id` int(10) UNSIGNED NOT NULL,
  `invoice` int(11) DEFAULT NULL,
  `banker` int(11) DEFAULT NULL,
  `agent` int(11) DEFAULT NULL,
  `fresh_water_volume` int(11) DEFAULT NULL,
  `premi_crew` int(11) DEFAULT NULL,
  `time_charter` int(11) DEFAULT NULL,
  `reserved` int(11) DEFAULT NULL,
  `cleaning` int(11) DEFAULT NULL,
  `fee_marketing` int(11) DEFAULT NULL,
  `port_caption` int(11) DEFAULT NULL,
  `kas_kapal` int(11) DEFAULT NULL,
  `insentive` int(11) DEFAULT NULL,
  `id_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `volumes`
--

INSERT INTO `volumes` (`id`, `invoice`, `banker`, `agent`, `fresh_water_volume`, `premi_crew`, `time_charter`, `reserved`, `cleaning`, `fee_marketing`, `port_caption`, `kas_kapal`, `insentive`, `id_barang`, `created_at`, `updated_at`) VALUES
(1, 85, 5, 5, 5, 5, 5, 45, 4, 8, 5, 78, 87, 'BR001', '2018-12-18 10:16:29', '2018-12-18 10:16:29'),
(2, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 'BR002', '2018-12-18 18:51:00', '2018-12-18 18:51:00'),
(3, 1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 4, 5, 'BR003', '2019-01-03 03:54:52', '2019-01-03 03:54:52');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `add_costs`
--
ALTER TABLE `add_costs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `add_costs_id_realcost_foreign` (`id_realcost`);

--
-- Indeks untuk tabel `agent1s`
--
ALTER TABLE `agent1s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agent1s_id_realcost_foreign` (`id_realcost`);

--
-- Indeks untuk tabel `agent2s`
--
ALTER TABLE `agent2s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agent2s_id_realcost_foreign` (`id_realcost`);

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangs_id_financial_foreign` (`id_financial`);

--
-- Indeks untuk tabel `bunkers`
--
ALTER TABLE `bunkers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bunkers_id_realcost_foreign` (`id_realcost`);

--
-- Indeks untuk tabel `bunker_ws`
--
ALTER TABLE `bunker_ws`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bunker_ws_id_realcost_foreign` (`id_realcost`);

--
-- Indeks untuk tabel `ceanings`
--
ALTER TABLE `ceanings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ceanings_id_realcost_foreign` (`id_realcost`);

--
-- Indeks untuk tabel `detils`
--
ALTER TABLE `detils`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detils_id_barang_foreign` (`id_barang`);

--
-- Indeks untuk tabel `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expenses_id_barang_foreign` (`id_barang`);

--
-- Indeks untuk tabel `financials`
--
ALTER TABLE `financials`
  ADD PRIMARY KEY (`id_financial`),
  ADD KEY `financials_id_kondisi_foreign` (`id_kondisi`);

--
-- Indeks untuk tabel `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kas_kapals`
--
ALTER TABLE `kas_kapals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kas_kapals_id_realcost_foreign` (`id_realcost`);

--
-- Indeks untuk tabel `kondisis`
--
ALTER TABLE `kondisis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mediator_fees`
--
ALTER TABLE `mediator_fees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mediator_fees_id_realcost_foreign` (`id_realcost`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `navigations`
--
ALTER TABLE `navigations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `navigations_id_realcost_foreign` (`id_realcost`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `port_captain_fees`
--
ALTER TABLE `port_captain_fees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `port_captain_fees_id_realcost_foreign` (`id_realcost`);

--
-- Indeks untuk tabel `profits`
--
ALTER TABLE `profits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profits_id_realcost_foreign` (`id_realcost`);

--
-- Indeks untuk tabel `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rates_id_barang_foreign` (`id_barang`);

--
-- Indeks untuk tabel `rc_invoices`
--
ALTER TABLE `rc_invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rc_invoices_id_realcost_foreign` (`id_realcost`);

--
-- Indeks untuk tabel `rc_time_charters`
--
ALTER TABLE `rc_time_charters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rc_time_charters_id_realcost_foreign` (`id_realcost`);

--
-- Indeks untuk tabel `realcosts`
--
ALTER TABLE `realcosts`
  ADD PRIMARY KEY (`id_realcost`),
  ADD KEY `realcost_id_kondisi` (`id_kondisi`);

--
-- Indeks untuk tabel `refunds`
--
ALTER TABLE `refunds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `refunds_id_realcost_foreign` (`id_realcost`);

--
-- Indeks untuk tabel `revenues`
--
ALTER TABLE `revenues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `revenues_id_barang_foreign` (`id_barang`);

--
-- Indeks untuk tabel `spals`
--
ALTER TABLE `spals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `spals_id_financial_foreign` (`id_financial`),
  ADD KEY `id_kondisi` (`id_kondisi`);

--
-- Indeks untuk tabel `totals`
--
ALTER TABLE `totals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `totals_id_realcost_foreign` (`id_realcost`);

--
-- Indeks untuk tabel `tug_assists`
--
ALTER TABLE `tug_assists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tug_assists_id_realcost_foreign` (`id_realcost`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `volumes`
--
ALTER TABLE `volumes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `volumes_id_barang_foreign` (`id_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `add_costs`
--
ALTER TABLE `add_costs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `agent1s`
--
ALTER TABLE `agent1s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `agent2s`
--
ALTER TABLE `agent2s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `bunkers`
--
ALTER TABLE `bunkers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `bunker_ws`
--
ALTER TABLE `bunker_ws`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `ceanings`
--
ALTER TABLE `ceanings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `detils`
--
ALTER TABLE `detils`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kas_kapals`
--
ALTER TABLE `kas_kapals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kondisis`
--
ALTER TABLE `kondisis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `mediator_fees`
--
ALTER TABLE `mediator_fees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `navigations`
--
ALTER TABLE `navigations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `port_captain_fees`
--
ALTER TABLE `port_captain_fees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `profits`
--
ALTER TABLE `profits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `rc_invoices`
--
ALTER TABLE `rc_invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `rc_time_charters`
--
ALTER TABLE `rc_time_charters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `refunds`
--
ALTER TABLE `refunds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `revenues`
--
ALTER TABLE `revenues`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `spals`
--
ALTER TABLE `spals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `totals`
--
ALTER TABLE `totals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tug_assists`
--
ALTER TABLE `tug_assists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `volumes`
--
ALTER TABLE `volumes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `add_costs`
--
ALTER TABLE `add_costs`
  ADD CONSTRAINT `add_costs_id_realcost_foreign` FOREIGN KEY (`id_realcost`) REFERENCES `realcosts` (`id_realcost`);

--
-- Ketidakleluasaan untuk tabel `agent1s`
--
ALTER TABLE `agent1s`
  ADD CONSTRAINT `agent1s_id_realcost_foreign` FOREIGN KEY (`id_realcost`) REFERENCES `realcosts` (`id_realcost`);

--
-- Ketidakleluasaan untuk tabel `agent2s`
--
ALTER TABLE `agent2s`
  ADD CONSTRAINT `agent2s_id_realcost_foreign` FOREIGN KEY (`id_realcost`) REFERENCES `realcosts` (`id_realcost`);

--
-- Ketidakleluasaan untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD CONSTRAINT `barangs_id_financial_foreign` FOREIGN KEY (`id_financial`) REFERENCES `financials` (`id_financial`);

--
-- Ketidakleluasaan untuk tabel `bunkers`
--
ALTER TABLE `bunkers`
  ADD CONSTRAINT `bunkers_id_realcost_foreign` FOREIGN KEY (`id_realcost`) REFERENCES `realcosts` (`id_realcost`);

--
-- Ketidakleluasaan untuk tabel `bunker_ws`
--
ALTER TABLE `bunker_ws`
  ADD CONSTRAINT `bunker_ws_id_realcost_foreign` FOREIGN KEY (`id_realcost`) REFERENCES `realcosts` (`id_realcost`);

--
-- Ketidakleluasaan untuk tabel `ceanings`
--
ALTER TABLE `ceanings`
  ADD CONSTRAINT `ceanings_id_realcost_foreign` FOREIGN KEY (`id_realcost`) REFERENCES `realcosts` (`id_realcost`);

--
-- Ketidakleluasaan untuk tabel `detils`
--
ALTER TABLE `detils`
  ADD CONSTRAINT `detils_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `barangs` (`id`);

--
-- Ketidakleluasaan untuk tabel `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `barangs` (`id`);

--
-- Ketidakleluasaan untuk tabel `financials`
--
ALTER TABLE `financials`
  ADD CONSTRAINT `financials_id_kondisi_foreign` FOREIGN KEY (`id_kondisi`) REFERENCES `kondisis` (`id`);

--
-- Ketidakleluasaan untuk tabel `kas_kapals`
--
ALTER TABLE `kas_kapals`
  ADD CONSTRAINT `kas_kapals_id_realcost_foreign` FOREIGN KEY (`id_realcost`) REFERENCES `realcosts` (`id_realcost`);

--
-- Ketidakleluasaan untuk tabel `mediator_fees`
--
ALTER TABLE `mediator_fees`
  ADD CONSTRAINT `mediator_fees_id_realcost_foreign` FOREIGN KEY (`id_realcost`) REFERENCES `realcosts` (`id_realcost`);

--
-- Ketidakleluasaan untuk tabel `navigations`
--
ALTER TABLE `navigations`
  ADD CONSTRAINT `navigations_id_realcost_foreign` FOREIGN KEY (`id_realcost`) REFERENCES `realcosts` (`id_realcost`);

--
-- Ketidakleluasaan untuk tabel `port_captain_fees`
--
ALTER TABLE `port_captain_fees`
  ADD CONSTRAINT `port_captain_fees_id_realcost_foreign` FOREIGN KEY (`id_realcost`) REFERENCES `realcosts` (`id_realcost`);

--
-- Ketidakleluasaan untuk tabel `profits`
--
ALTER TABLE `profits`
  ADD CONSTRAINT `profits_id_realcost_foreign` FOREIGN KEY (`id_realcost`) REFERENCES `realcosts` (`id_realcost`);

--
-- Ketidakleluasaan untuk tabel `rates`
--
ALTER TABLE `rates`
  ADD CONSTRAINT `rates_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `barangs` (`id`);

--
-- Ketidakleluasaan untuk tabel `rc_invoices`
--
ALTER TABLE `rc_invoices`
  ADD CONSTRAINT `rc_invoices_id_realcost_foreign` FOREIGN KEY (`id_realcost`) REFERENCES `realcosts` (`id_realcost`);

--
-- Ketidakleluasaan untuk tabel `rc_time_charters`
--
ALTER TABLE `rc_time_charters`
  ADD CONSTRAINT `rc_time_charters_id_realcost_foreign` FOREIGN KEY (`id_realcost`) REFERENCES `realcosts` (`id_realcost`);

--
-- Ketidakleluasaan untuk tabel `realcosts`
--
ALTER TABLE `realcosts`
  ADD CONSTRAINT `realcost_id_kondisi` FOREIGN KEY (`id_kondisi`) REFERENCES `kondisis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `refunds`
--
ALTER TABLE `refunds`
  ADD CONSTRAINT `refunds_id_realcost_foreign` FOREIGN KEY (`id_realcost`) REFERENCES `realcosts` (`id_realcost`);

--
-- Ketidakleluasaan untuk tabel `revenues`
--
ALTER TABLE `revenues`
  ADD CONSTRAINT `revenues_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `barangs` (`id`);

--
-- Ketidakleluasaan untuk tabel `spals`
--
ALTER TABLE `spals`
  ADD CONSTRAINT `id_kondisi` FOREIGN KEY (`id_kondisi`) REFERENCES `kondisis` (`id`),
  ADD CONSTRAINT `spals_id_financial_foreign` FOREIGN KEY (`id_financial`) REFERENCES `financials` (`id_financial`);

--
-- Ketidakleluasaan untuk tabel `totals`
--
ALTER TABLE `totals`
  ADD CONSTRAINT `totals_id_realcost_foreign` FOREIGN KEY (`id_realcost`) REFERENCES `realcosts` (`id_realcost`);

--
-- Ketidakleluasaan untuk tabel `tug_assists`
--
ALTER TABLE `tug_assists`
  ADD CONSTRAINT `tug_assists_id_realcost_foreign` FOREIGN KEY (`id_realcost`) REFERENCES `realcosts` (`id_realcost`);

--
-- Ketidakleluasaan untuk tabel `volumes`
--
ALTER TABLE `volumes`
  ADD CONSTRAINT `volumes_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `barangs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
