-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 04 Mar 2022 pada 06.12
-- Versi server: 8.0.28-0ubuntu0.20.04.3
-- Versi PHP: 7.3.33-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diskominfo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aplikasi1`
--

CREATE TABLE `aplikasi1` (
  `id` int NOT NULL,
  `tgl_aplikasi1` date NOT NULL,
  `nama_aplikasi1` varchar(200) NOT NULL,
  `penggagas1` varchar(200) NOT NULL,
  `manual_book1` varchar(50) NOT NULL,
  `file_manualbook1` varchar(255) NOT NULL DEFAULT '',
  `jenis_aplikasi1` varchar(200) NOT NULL,
  `bahasa_pemograman1` varchar(300) NOT NULL,
  `deskripsi_aplikasi1` varchar(255) NOT NULL,
  `status_aplikasi1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `aplikasi1`
--

INSERT INTO `aplikasi1` (`id`, `tgl_aplikasi1`, `nama_aplikasi1`, `penggagas1`, `manual_book1`, `file_manualbook1`, `jenis_aplikasi1`, `bahasa_pemograman1`, `deskripsi_aplikasi1`, `status_aplikasi1`) VALUES
(1, '2022-01-04', 'Sistem Informasi Kinerja Pegawa Pemerintah Daearah', 'Badan Perencanaan Pendidikan dan Pelatihan (BKPP)', 'Ada', 'petunjuk.pdf', 'ClienServer', 'PHP', 'Sistem Informasi Kinerja Pegawa Pemerintah Daearah', ''),
(2, '2022-01-12', 'Etpp', 'BPKD', 'Ada', 'SURAT PERMOHONAN BOROKO TIMUR.pdf', 'ClienServer', 'Java', 'Sistem Informasi Pendapatan Tunjangan PNS', ''),
(21, '2022-01-05', 'Covid 132', 'dasdfsf', 'Ada', 'renew dalapuli.desa.id.jpeg', 'ClienServer', 'Java', 'dadad', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aplikasi2`
--

CREATE TABLE `aplikasi2` (
  `id` int NOT NULL,
  `nama_aplikasi2` varchar(200) NOT NULL,
  `penggagas2` varchar(200) NOT NULL,
  `manual_book2` varchar(20) NOT NULL,
  `file_aplikasi2` varchar(255) NOT NULL,
  `jenis_aplikasi2` varchar(100) NOT NULL,
  `bahasa_pemograman2` varchar(300) NOT NULL,
  `deskripsi_aplikasi2` varchar(255) NOT NULL,
  `status_aplikasi2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `aplikasi2`
--

INSERT INTO `aplikasi2` (`id`, `nama_aplikasi2`, `penggagas2`, `manual_book2`, `file_aplikasi2`, `jenis_aplikasi2`, `bahasa_pemograman2`, `deskripsi_aplikasi2`, `status_aplikasi2`) VALUES
(1, 'Layaan Surat', 'Dinas Kominfo', 'Ada', 'INVOCE.pdf', 'ClienServer', 'PHP', 'Layana Surat Masuk', 'Active'),
(2, 'e SPT', 'Dinas Kominfo', 'Ada', 'INVOCE.pdf', 'ClienServer', 'PHP', 'Layanan Surat Tugas', 'Active'),
(7, 'LAYANAN E TEBTATIF3', 'BAGIAN ORTAL DAN BKPP', 'Ada', '', 'Dekstop', 'PHP', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `domain_bolmut`
--

CREATE TABLE `domain_bolmut` (
  `id` int NOT NULL,
  `tgl_pembuatan` date NOT NULL,
  `nama_subdomain` varchar(255) NOT NULL DEFAULT '',
  `status_domain` varchar(50) NOT NULL,
  `pengelola` varchar(400) NOT NULL,
  `nama_pengelola` varchar(100) NOT NULL,
  `no_telpon` varchar(14) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `domain_bolmut`
--

INSERT INTO `domain_bolmut` (`id`, `tgl_pembuatan`, `nama_subdomain`, `status_domain`, `pengelola`, `nama_pengelola`, `no_telpon`, `deskripsi`, `link`) VALUES
(2, '2021-11-17', 'ettp.bpkd.bolmutkab.go.id', 'Active', 'Dinas Pengelola Keuangan daerah', 'Majid Pandialang, ST', '081244445555', 'Sistim Informasi Laporan pendapatan Tunjangan Kinerja Daerah', 'http://ettp.bpkd.bolmutkab.go.id'),
(19, '2022-01-12', 'jdih.bolmutkab.go.id', 'Active', 'Bagian Hukum SETDA Kabupaten Bolaang Mongondow Utara', 'Rachmat Pontoh, S.Kom', '085812542565', 'Sistim INformasi Produk Hukum Pemerintah Kabupaten Bolaang Mongondow Utara', 'http://jdih.bolmutkab.go.id'),
(20, '2022-01-12', 'e-kinerja.bkpp.bolmutkab.go.id', 'Active', 'Badan Kepegawaian Pendidikan dan Pelatihan', 'Badan Kepegawaian Pendidikan dan Pelatihan', '085812542565', 'Sistem Informasi Penilaian Kinerja Pegawai', 'http://e-kinerja.bkpp.bolmutkab.go.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `domain_desa`
--

CREATE TABLE `domain_desa` (
  `id` int NOT NULL,
  `nama_domain` varchar(100) NOT NULL,
  `domain_status` varchar(30) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `masa_aktif` varchar(30) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `domain_desa`
--

INSERT INTO `domain_desa` (`id`, `nama_domain`, `domain_status`, `tgl_daftar`, `tgl_akhir`, `masa_aktif`, `link`) VALUES
(1, 'dalapuli.desa.id', 'Active', '2021-11-03', '2022-02-23', '34 hari', 'http://dalapuli.desa.id/'),
(2, 'buko.desa.id', 'Active', '2021-11-02', '2023-07-27', '583 hari', 'http://buko.desa.id/'),
(3, 'dalapulibarat.desa.id', 'Active', '2021-07-27', '2023-07-27', '583 hari', 'http://dalapulibarat.desa.id/'),
(5, 'busato.desa.id', 'Active', '2021-11-02', '2023-07-30', '586 hari', 'http://busato.desa.id/'),
(6, 'dalapulitimur.desa.id', 'Active', '2021-11-03', '2023-08-02', '589 hari', 'http://dalapulitimur.desa.id/'),
(7, 'duini.desa.id', 'Active', '2021-11-02', '2023-08-05', '592 hari', 'http://duini.desa.id/'),
(8, 'bukoutara.desa.id', 'Active', '2021-11-03', '2023-08-06', '593 hari', 'http://bukoutara.desa.id/'),
(9, 'tombulangtimur.desa.id', 'Active', '2021-11-02', '2023-08-10', '597 hari', 'http://tombulangtimur.desa.id/'),
(10, 'inomungautara.desa.id', 'Active', '2021-12-01', '2023-11-16', '695 hari', 'http://inomungautara.desa.id/'),
(11, 'boroko.desa.id', 'Active', '2021-11-19', '2023-11-19', '698 hari', 'http://boroko.desa.id/'),
(12, 'bigoselatan.desa.id', 'Active', '2021-11-19', '2023-11-19', '698 hari', 'http://bigoselatan.desa.id/'),
(13, 'borokotimur.desa.id', 'Active', '2021-11-23', '2023-11-23', '702 hari', 'http://borokotimur.desa.id/'),
(14, 'gihang.desa.id', 'Active', '2022-01-07', '2023-01-07', '	351hari', 'http://gihang.desa.id/'),
(15, 'tontulowutara.desa.id', 'Active', '2022-01-07', '2023-01-07', '351hari', 'http://tontulowutara.desa.id/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `duk`
--

CREATE TABLE `duk` (
  `id` int NOT NULL,
  `pangkat` varchar(30) NOT NULL,
  `tmt_pangkat` date NOT NULL,
  `golongan` varchar(30) NOT NULL,
  `tmt_golongan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `file_berkas`
--

CREATE TABLE `file_berkas` (
  `id` int NOT NULL,
  `peserta_id` int NOT NULL,
  `id_berkas` int NOT NULL,
  `file_berkas` char(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `file_berkas`
--

INSERT INTO `file_berkas` (`id`, `peserta_id`, `id_berkas`, `file_berkas`) VALUES
(127, 19, 1, NULL),
(128, 19, 2, NULL),
(129, 19, 3, NULL),
(130, 19, 4, NULL),
(131, 19, 8, NULL),
(132, 19, 9, NULL),
(133, 19, 10, NULL),
(134, 20, 1, NULL),
(135, 20, 2, NULL),
(136, 20, 3, NULL),
(137, 20, 4, NULL),
(138, 20, 7, NULL),
(139, 20, 8, NULL),
(140, 20, 9, NULL),
(141, 20, 10, NULL),
(150, 22, 1, NULL),
(151, 22, 2, NULL),
(152, 22, 3, NULL),
(153, 22, 4, NULL),
(154, 22, 8, NULL),
(155, 22, 9, NULL),
(156, 22, 10, NULL),
(157, 23, 1, NULL),
(158, 23, 2, NULL),
(159, 23, 3, NULL),
(160, 23, 4, NULL),
(161, 23, 7, NULL),
(162, 23, 8, NULL),
(163, 23, 9, NULL),
(164, 23, 10, NULL),
(172, 25, 1, NULL),
(173, 25, 2, NULL),
(174, 25, 3, NULL),
(175, 25, 4, NULL),
(176, 25, 8, NULL),
(177, 25, 9, NULL),
(178, 25, 10, NULL),
(194, 28, 1, '1643846473_63d4195b2f8ea0b97fdb.pdf'),
(195, 28, 2, NULL),
(196, 28, 3, NULL),
(197, 28, 4, NULL),
(198, 28, 8, NULL),
(199, 28, 9, NULL),
(200, 28, 10, NULL),
(201, 29, 1, '1643853030_d3df269bce2d7254db97.pdf'),
(202, 29, 2, '1643813009_dd752657aa3e58b84f27.pdf'),
(203, 29, 3, '1643812803_e64149dfeacadf042c8a.jpg'),
(204, 29, 4, '1643812783_2b91e07edc04977d60a5.jpg'),
(205, 29, 7, '1643854306_282deec77638af29da4c.pdf'),
(206, 29, 8, NULL),
(207, 29, 9, NULL),
(208, 29, 10, '1643853038_3a82b7455c588c1fc7c8.pdf'),
(209, 30, 1, '1643810943_01acf6d02a9e01201970.pdf'),
(210, 30, 2, '1643811199_1c7d5968ae3d17ec8931.pdf'),
(211, 30, 3, '1643811233_cb03851a32a51b7df984.jpg'),
(212, 30, 4, '1643811265_d411321ce1b020335d21.jpg'),
(213, 30, 8, '1643811304_a49fb88f3084bd8fc83e.pdf'),
(214, 30, 9, '1643814965_9f928b1dfe26fbb86745.pdf'),
(215, 30, 10, '1643811336_47e67e57c6e1d60433e5.pdf'),
(216, 31, 1, '1643811200_d1bbbcc7d115c6811532.pdf'),
(217, 31, 2, '1643811219_e515b19875ba50bdb45b.pdf'),
(218, 31, 3, '1643811244_9e97e752bbaa9239b5e1.jpg'),
(219, 31, 4, '1643811273_7d801e615e8481a83708.jpg'),
(220, 31, 7, NULL),
(221, 31, 8, NULL),
(222, 31, 9, NULL),
(223, 31, 10, '1643811298_3165bdf61d8ab2ce2dc5.pdf'),
(224, 32, 1, '1643864184_59a1bb97d44a326446e6.pdf'),
(225, 32, 2, '1643863226_d572f91a753becc01718.pdf'),
(226, 32, 3, '1643865442_81d827e0a905c11f9d00.jpg'),
(227, 32, 4, '1643865644_9260ab0e836085b73284.jpeg'),
(228, 32, 7, NULL),
(229, 32, 8, NULL),
(230, 32, 9, NULL),
(231, 32, 10, '1643864297_69c83f8df64c5357e39f.pdf'),
(232, 33, 1, '1643963432_5b360d73790b615096f1.pdf'),
(233, 33, 2, '1643963896_204b1aeb3e4044068f37.pdf'),
(234, 33, 3, '1643963975_191c528f640fccfc6b21.jpeg'),
(235, 33, 4, '1643964416_fceda0ec0374dea92715.jpg'),
(236, 33, 8, NULL),
(237, 33, 9, NULL),
(238, 33, 10, '1643964001_2b0fd3de03ca805f46a7.pdf'),
(239, 34, 1, NULL),
(240, 34, 2, NULL),
(241, 34, 3, NULL),
(242, 34, 4, NULL),
(243, 34, 7, NULL),
(244, 34, 8, NULL),
(245, 34, 9, NULL),
(246, 34, 10, NULL),
(247, 35, 1, '1643977279_79e4699324bc031c991a.pdf'),
(248, 35, 2, '1643977721_1b969a2a93acc0b1c56c.pdf'),
(249, 35, 3, '1643977958_437834593785185121c4.jpg'),
(250, 35, 4, '1643977986_21ea45da5ab9542f6425.jpg'),
(251, 35, 7, NULL),
(252, 35, 8, '1643978415_1869d9f6bf67adb24f50.pdf'),
(253, 35, 9, NULL),
(254, 35, 10, '1643978988_d971fe618bae2eb7b2d8.pdf'),
(255, 36, 1, '1644058808_986382426c88488e829c.pdf'),
(256, 36, 2, '1644059381_e9115c1e18414b71373a.pdf'),
(257, 36, 3, '1644059752_69962afdcc0731c8ef44.jpg'),
(258, 36, 4, '1644059842_657d7d3475fb45945e1f.jpg'),
(259, 36, 8, NULL),
(260, 36, 9, NULL),
(261, 36, 10, '1644058945_4da8c075410c63188624.pdf'),
(262, 37, 1, '1644065742_4f61e7683214df823849.pdf'),
(263, 37, 2, '1644065771_b1de5b533229a95ac2c4.pdf'),
(264, 37, 3, '1644065784_f04146f2d2ab46172a24.jpg'),
(265, 37, 4, '1644067100_b5f55905393227a60baf.jpg'),
(266, 37, 8, NULL),
(267, 37, 9, NULL),
(268, 37, 10, '1644065801_35c1d4a17c1033e64f31.pdf'),
(269, 38, 1, NULL),
(270, 38, 2, NULL),
(271, 38, 3, NULL),
(272, 38, 4, NULL),
(273, 38, 7, NULL),
(274, 38, 8, NULL),
(275, 38, 9, NULL),
(276, 38, 10, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` mediumint UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'user', 'General User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hukum`
--

CREATE TABLE `hukum` (
  `id` int NOT NULL,
  `tgl_produkh` date NOT NULL,
  `nama_produkh` varchar(200) NOT NULL,
  `file_hukum` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `uraianh` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `hukum`
--

INSERT INTO `hukum` (`id`, `tgl_produkh`, `nama_produkh`, `file_hukum`, `status`, `uraianh`) VALUES
(1, '2018-10-25', 'Perbup TIK No 25 Tahun 2018', 'Perbup TIK No 25 Tahun 2018.pdf', 'Berlaku', 'Pengelolaan TIK Di Kabupaten Bolaang Mongondow Utara'),
(3, '2020-10-27', 'Surat Edaran Menteri Komunikasi dan Informatika Nomor 5 Tahun 2020', '1604899180-Surat_Edaran_Menteri_Kominfo_Nomor_5_Tahun_2020.pdf', 'Berlaku', 'Pelaksanaan Permintaan Clearance dari Kementerian/Lembaga atas Pengadaan Belanja Perangkat Teknologi Informasi dan Komunikasi Pemerintah Tahun Anggaran 2021'),
(7, '2020-02-11', 'Peraturan Bupati Nomor 8 Tahun 2020', 'Peraturan Bupati Nomor 8 Tahun 2020.pdf', 'Berlaku', 'Pendayagunaan Website Di Lingkungan Pemerintah Kabupaten Bolaang Mongondow Utara'),
(8, '2022-01-05', 'SOP Pengelolaaan TIK', 'SOP tik.pdf', 'Berlaku', 'Standar Pengelolan dan Pelayana TIK DI kabupaten Bolaang Mongondow Utara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` mediumint UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `time` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '20181211100537', 'IonAuth\\Database\\Migrations\\Migration_Install_ion_auth', '', 'App', 1614686816, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai_nonpns`
--

CREATE TABLE `pegawai_nonpns` (
  `id` int NOT NULL,
  `nama_pegawai` varchar(200) NOT NULL,
  `nip` varchar(21) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `tahun_terangkat` varchar(4) NOT NULL,
  `pendidikan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_pt` varchar(255) DEFAULT NULL,
  `jurusan_pt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pegawai_nonpns`
--

INSERT INTO `pegawai_nonpns` (`id`, `nama_pegawai`, `nip`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `agama`, `alamat`, `tahun_terangkat`, `pendidikan`, `nama_pt`, `jurusan_pt`) VALUES
(1, 'DEWI DATUELA', '65848', 'Perempuan', 'BOROKO', '1984-06-13', 'Islam', 'JLN. TRANS SULAWESI DESA Bigo KEC.KAIDIPANG', '2011', 'SMK', 'SMK NEGERI BOROKO', 'IPA'),
(2, 'YATIM PONTOH', '32548', 'Perempuan', 'BOLAANG MONGONDOW UTARA', '1987-06-13', 'Islam', 'JLN. TRANS SULAWESI DESA SONUO KEC. BOLANGITAN BARAT', '2014', 'S1', 'UNG', 'Pemerintahan'),
(3, 'HANIF SETIAWAN', '32514', 'laki-laki', 'KOTAMOBAGU', '2012-12-11', 'islam', 'JLN. TRANS SULAWESI DESA BOLANGITANG KEC. BOLANGITAN BARAT', '2016', 'S1', 'UNG', 'Pemerintahan'),
(4, 'DANDI LANTONG', '213124', 'Laki-laki', 'BOLANG MONGONDOW UTARA', '2000-06-14', 'Islam', 'JLN. TRANS SULAWESI DESA BOLANGITANG KEC. BOLANGITAN BARAT', '2012', 'S1', 'SMK NEGERI BOROKO', 'IPA'),
(5, 'SITTI SYAHPUTRI BUHANG', '021524', 'Perempuan', 'BOLANGITANG', '1997-08-11', 'Islam', 'Jln. Trans Sulawesi Bolangitang I Kecamatan Bolangitang Barat', '2019', 'S1', 'UNIVERSITAS NEGERI GORONTALO', 'PG-PAUD'),
(8, 'MOH.ECIP FRESLY PONTOH, SP', '2131242', 'Laki-laki', 'BOLANG MONGONDOW UTARA', '1999-01-03', 'Islam', 'JLN. TRANS SULAWESI DESA BOLANGITAN BARAT', '2019', 'S1', 'UNG', 'Pemerintahan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai_pns`
--

CREATE TABLE `pegawai_pns` (
  `id` int NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `nip` varchar(21) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `usia` varchar(4) NOT NULL,
  `cpns` date NOT NULL,
  `pns` date NOT NULL,
  `pangkat_gol` varchar(25) NOT NULL,
  `tmt_pangkat` date NOT NULL,
  `tahun` int NOT NULL,
  `bulan` int NOT NULL,
  `berkala_awal` date DEFAULT NULL,
  `berkala_akhir` date DEFAULT NULL,
  `jenis_pegawai` varchar(30) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status_kawin` varchar(25) NOT NULL,
  `nama_pt` varchar(200) NOT NULL,
  `tingkat_pendidikan` varchar(4) NOT NULL,
  `program_studi` varchar(75) NOT NULL,
  `tahun_lulus` int NOT NULL,
  `jabatan` varchar(150) NOT NULL,
  `eselon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pegawai_pns`
--

INSERT INTO `pegawai_pns` (`id`, `nama_pegawai`, `nip`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `alamat`, `usia`, `cpns`, `pns`, `pangkat_gol`, `tmt_pangkat`, `tahun`, `bulan`, `berkala_awal`, `berkala_akhir`, `jenis_pegawai`, `agama`, `status_kawin`, `nama_pt`, `tingkat_pendidikan`, `program_studi`, `tahun_lulus`, `jabatan`, `eselon`) VALUES
(4, 'AANG WARDIMAN., AK., CA', '196410241986031002', 'Laki-laki', 'GARUT', '2022-01-19', 'JLN. TRANS SULAWESI DESA BOLANGITANG KEC. BOLANGITAN BARAT', '65', '2022-01-18', '2022-01-18', 'Pembina Utama Muda/IVc', '2022-01-19', 25, 3, '2018-06-04', '2022-02-22', 'Struktural', 'Islam', 'Menikah', 'STAN JAKARTA', 'S1', 'AKUNTANSI', 1994, 'Kepala Dinas', 'II'),
(5, 'MIRWAN DATUKARAMAT, S.Kom', '198204192009021002', 'Laki-laki', 'BOLANG MONGONDOW UTARA', '2022-01-27', 'JLN. DESA, DESA MOHING KEC. KADIDPANG', '39', '2009-02-01', '2010-04-01', 'PENATA TKT I, III/d', '2018-04-01', 9, 2, '2020-04-06', '2021-10-01', 'Struktural', 'Islam', 'Menikah', 'STIMIK ICHSAN GORONTALO', 'S1', 'Manajemen Informatika', 2006, 'Sekretaris Dinas', 'III A'),
(6, 'ADLER TH MANGINSOA, S. ST., M.Si', '196906051991031015', 'Laki-laki', 'BOLANG MONGONDOW UTARA', '1969-06-05', 'JLN. TRANS SULAWESI DESA KOMUS II TIMUR KECAMATAN KAIDIPANG', '54', '1991-03-01', '1992-03-01', 'PEMBINA, IV/a', '2016-04-01', 10, 1, '2020-02-05', '2022-02-15', 'Struktural', 'Islam', 'Menikah', 'UNSRAT MANADO', 'S2', 'ILMU PERAIRAN', 2008, 'Kepala Bidang Sarana Komunikasi dan Desiminasi Informasi', 'IV.b'),
(7, 'PRITA A. DEWI PONONGOA, S.Kom', '198304042010012009', 'Perempuan', 'BOLANG MONGONDOW UTARA', '2022-01-27', NULL, '42', '2022-01-18', '2022-01-27', 'Penata Tkt. I/IIId', '2022-01-12', 12, 2, NULL, NULL, 'Struktural', 'Islam', 'Kawin', '', 'S1', 'Manajemen Informatika', 2008, 'Kepala Bidang Aplikasi Informatika, Persandian dan Statistik', 'IIIb'),
(8, 'SRI ZWESTI KAYA, SH', '198005082010012003', 'Perempuan', 'BOLANG MONGONDOW UTARA', '2022-01-12', NULL, '41', '2022-01-20', '2022-01-26', 'Penata/IIIc', '2022-01-11', 15, 2, NULL, NULL, 'Struktural', 'Islam', 'Kawin', '', 'S1', 'Hukum', 2008, 'Kepala Sub Bagian Umum dan Kepegawaian', 'IVa'),
(9, 'M. DITO P. BUNTUAN S.Farm.,Aptk', '198901092014031001', 'Laki_laki', 'Kotamobagu', '2014-01-13', NULL, '36', '2011-02-01', '2012-02-02', 'Penata Muda', '2016-04-12', 10, 2, NULL, NULL, 'Struktural', 'islam', 'kawin', 'UNIVERSITAD DUMOGA KOTAMOBAGU', 'S1', 'FARMASI', 2008, 'Kepala Sub Bagian Program,Pelaporan dan Keuangan', 'eselon IV'),
(10, 'RUDI DATUNSOLANG, S.Kom', '19730103 200803 1 001', 'LAKI-LAKI', 'BOLAANG MONGONDOW UTARA', '2021-11-02', NULL, '43', '2022-01-19', '2022-01-05', 'Penata Tkt.1, III/d', '2022-01-19', 23, 3, NULL, NULL, 'FUNGSIONAL', 'ISLAM', 'KAWIN', 'UNM', 'S1', 'SISTEM INFORMASI', 1989, 'Kepala Seksi Kelembagaan, Kemitraan Komunikasi dan Pengawasan Informasi', 'ESELON IV'),
(11, 'MUHAMMAD YUNUS, S.Pd.,ME', '19660705 199001 1 002', 'Laki_laki', 'BOLAANG MONGONDOW UTARA', '2011-12-13', NULL, '45', '2011-02-01', '2012-02-02', 'Pembina Tkt.I, IV/b', '2016-04-12', 26, 2, NULL, NULL, 'Struktural', 'islam', 'kawin', 'UNG', 'S1', 'PENDIDIKAN', 2008, 'Kepala Seksi Persandian dan Statistik', 'eselon IV'),
(12, 'FAUZIAH SURATINOYO, SE', '19730328 200604 2 004', 'Perempuan', 'BOLAANG MONGONDOW UTARA', '2011-12-13', NULL, '36', '2011-02-01', '2021-12-05', 'Penata Tkt.1, III/d', '2016-04-12', 26, 2, NULL, NULL, 'Struktural', 'islam', 'kawin', 'UNSRAT', 'S1', 'EKONOMI', 2008, 'Kepala Seksi E-Goverment, Aplikasi dan Pengembangan Informatika, Pelayanan Media dan Informasi Perfileman', 'eselon IV');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int NOT NULL,
  `user_id` mediumint UNSIGNED NOT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `full_name` char(255) NOT NULL DEFAULT '',
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_telpon` char(15) DEFAULT '',
  `nama_kampus` varchar(200) DEFAULT NULL,
  `pendidikan_terkahir` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program_study` varchar(50) DEFAULT NULL,
  `ipk` varchar(20) DEFAULT NULL,
  `email` char(100) NOT NULL DEFAULT '',
  `alamat` varchar(250) DEFAULT NULL,
  `rt` varchar(4) DEFAULT NULL,
  `rw` varchar(4) DEFAULT NULL,
  `kelurahan` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `kabupaten` varchar(80) NOT NULL,
  `status` char(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `user_id`, `nik`, `full_name`, `jenis_kelamin`, `agama`, `tempat_lahir`, `tanggal_lahir`, `no_telpon`, `nama_kampus`, `pendidikan_terkahir`, `program_study`, `ipk`, `email`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `kabupaten`, `status`) VALUES
(19, 45, '7108052408950001', 'Muhammad fajriansyah', 'Laki-Laki', 'Islam', 'Boroko', '1995-08-24', '082181482675', 'SMKN 1 KAIDIPANG', 'SLTA', 'TEHNIK KOMPUTER JARINGAN', '7', 'fajriansyachcreative@gmail.com', 'SANGKUB, KOMP PASAR LAMA', '01', '01', 'Sangkub', 'Sangkub', 'Bolaang Mongondow Utara', '2'),
(20, 46, '7108060207980001', 'Faisal Djukiro', 'Laki-Laki', 'Islam', 'Kayuogu', '1998-07-02', '082296715197', 'Politeknik Gorontalo', 'D3', 'Teknik Informatika', '3,16', 'faisaldjukiro98@gmail.com', 'Faisal Djukiro', '000', '002', 'Kec. Pinogaluman Desa.Kayuogu', 'Pinogaluman', 'Bolaang Mongondow Utara', '2'),
(22, 55, '7108051606940002', 'HUSAIN PATADJENU', 'Laki-Laki', 'Islam', 'BIGO', '1994-06-16', '082394907717', 'SMK NEGERI 1 KAIDIPANG', 'SMK', 'MULTIMEDIA', '7,3', 'patadjenuhusain06@gmail.com', 'DESA BIGO RT/RW 000/000, KEC.KAIDIPANG KAB.BOLAANG MONGONDOW UTARA', '00', '00', 'BIGO', 'Kaidipang', 'Bolaang Mongondow Utara', '2'),
(23, 60, '7571031105910005', 'Zulharman Paputungan', 'Laki-Laki', 'Islam', 'Ollot', '1991-05-11', '08111166911', 'Universitas Negeri Gorontalo', 'S1', 'Sistem Informasi', '3.29', 'zulharman.paputungan@gmail.com', 'Desa Ollot 2, Kecamatan Bolang Itang Barat', '00', '00', 'Desa Ollot', 'Bolangitang Barat', 'Bolaang Mongondow Utara', '2'),
(25, 66, '7108061607870001', 'Jenal Humagi', 'Laki-Laki', 'Islam', 'Rantau Kujang', '1989-03-21', '085395656598', 'SMA NEGERI 1 ATINGGOLA', 'SMA', 'ILMU ALAM', '19.4', 'jenalhumagi@gmail.com', 'Desa Dengi', '000', '000', 'Dengi ', 'Pinogaluman', 'Bolaang Mongondow Utara', '2'),
(28, 69, '7108060505890001', 'Hafid Akbar pangeran', NULL, NULL, NULL, '1989-05-05', '085256771664', NULL, NULL, NULL, NULL, 'hafitakbarpangeran@gmail.com', NULL, NULL, NULL, NULL, NULL, '', '3'),
(29, 56, '7501010901980001', 'mohamad syahrur mahani', 'Laki-Laki', 'Islam', 'gorontalo', '1998-01-09', '082292527141', 'STMIK ICHSAN GORONTALO', 'Strata Satu (S1)', 'Sistem Informasi', '3.64', 'sahrul.mahani@gmail.com', 'Prov. Gorontalo, Kab. Gorontalo, Kec. Limboto, Kel. Kayubulan', '009', '003', 'kayubulan', '', '', '3'),
(30, 70, '7108041908930001', 'Noval Mahani', 'Laki-Laki', 'Islam', 'OLLOT', '1993-08-18', '082293727536', 'SMK COKROAMINOTO KOTAMOBAGU', 'SMK/STM', 'TEKNIK ELEKTRONIKA/AUDIO VIDEO', '8,0', 'novalltesla@outlook.com', 'DESA OLLOT INDUK DUSUN SATU, KECEMATAN BOLANGITANG BARAT', '00', '00', '00', 'Bolangitang Barat', 'Bolaang Mongondow Utara', '3'),
(31, 72, '7108035911950001', 'Priola Lopulalan', 'Perempuan', 'Islam', 'Biontong', '1999-09-17', '085340089953', 'Universitas Negeri Manado', 'SI', 'Pgpaud', '3.94', 'olaxlopulalan@gmail.com', 'Desa Biontong I, Kec. Bolangitang Timur, Kab. Bolaang Mongondow Utara', '000', '000', 'Biontong I', 'Bolangitang Timur', 'Bolaang Mongondow Utara', '2'),
(32, 62, '7108056311880001', 'Devriana Tegela', 'Perempuan', 'Islam', 'Boroko', '1988-11-23', '082292737775', 'STMIK Ichsan Gorontalo', 'S1', 'Sistem Informasi', '3,29', 'devitegela@gmail.com', 'Desa Kuala Kecamatan Kaidipang', '2', '2', 'Desa Kuala', 'Kaidipang', 'Bolaang Mongondow Utara', '3'),
(33, 74, '7171070609930001', 'Kurviasni Sefanya Runtuwene', 'Laki-Laki', 'Kristen', 'Tumaluntung', '1996-09-04', '082349969596', 'SMA NEGERI 7 MANADO', 'SMA', 'IPA', '6,90', 'kurvisevanya04@gmail.com', 'Desa Boroko, Kec. Kaidipang, Kab. Bolaang Mongondow Utara', '000', '000', 'Boroko', '000', '000', '3'),
(34, 75, '75171030805920001', 'Rezky Pradana Budihartono', NULL, NULL, NULL, '1992-05-08', '085340778770', NULL, NULL, NULL, NULL, 'rh3zky@gmail.com', NULL, NULL, NULL, NULL, NULL, '', '2'),
(35, 77, '7571052712940004', 'Dendi Anjasmara Sahidu', 'Laki-Laki', 'Islam', 'Luwuk', '1994-12-27', '081354033789', 'Universitas Negeri Gorontalo', 'Strata I', 'Teknik Informatika, Prodi Sistem Informasi', '3.08', 'sapajoygngsuka@gmail.com', 'Desa Permata, Kecamatan Tilongkabila, Kabupaten Bone Bolango', '1', '1', 'Desa Permata', '0', '0', '3'),
(36, 76, '7108040205980001', 'Robin Suli', 'Laki-Laki', 'Islam', 'Jambusarang', '1996-12-09', '081347916977', 'SMK N 1 KAIDIPANG', 'SMK', 'Teknik Gambar Bangunan', '6,9', 'robinsuli96@gmail.com', 'Desa sonou Kec.Bolang Itang Barat Kab.Bolaang Mongondow Utara, Prov Sulawesi Utara', '000', '002', 'Desa', '000', '002', '3'),
(37, 78, '7108062202920001', 'SUBHAN DUDEPO', 'Laki-Laki', 'Islam', 'Dalapuli', '1992-02-22', '082349081244', 'SMA Negeri 1 Atinggola', 'SMA', 'IPS', '37,65', 'subhandestroyer@gmail.com', 'Desa Dalapuli Barat', '2', '1', 'Dalapuli Barat', 'Pinogaluman', 'Bolaang Mongondow Utara', '3'),
(38, 79, '7108051010890001', 'Ridwan Karim', 'Laki-Laki', 'Islam', 'Boroko', '1989-10-10', '082259022100', 'SMA N 1 BOLANGITANG', 'SMA', 'IPS', '54,97', 'karimridwan89@gmail.com', 'Jl.empang Dusun 2 Desa Buko Kec.Pinogaluman kab.Bolaang Mongondow utara', '001', '002', 'Buko', 'Pinogaluman', 'Bolaang Mongondow Utara', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `persyaratan_berkas`
--

CREATE TABLE `persyaratan_berkas` (
  `id` int NOT NULL,
  `judul` char(255) NOT NULL,
  `file` char(75) NOT NULL,
  `posisi` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `persyaratan_berkas`
--

INSERT INTO `persyaratan_berkas` (`id`, `judul`, `file`, `posisi`) VALUES
(1, 'Surat lamaran (Wajib)', '', '2'),
(2, 'Scan ijazah dan daftar nilai/transkrip nilai (Wajib)', '', '2'),
(3, 'Scan Kartu Tanda Penduduk (KTP); (Wajib)', '', '2'),
(4, 'Pas Foto berwarna latar merah ukuran 4x6; (Wajib)', '', '2'),
(5, 'Scan Surat Keterangan Catatan Kepolisian (SKCK)', '', '3'),
(6, 'Surat Keterangan Sehat dari Dokter Rumah Sakit Pemerintah/Puskesmas;', '', '3'),
(7, 'Portofolio Project/Aplikasi (Optional)', '', '1'),
(8, 'Sertifikat kegiatan Seminar/Workshop/Pelatihan (Optional)', '', '2'),
(9, 'Sertifikat Keahlian Bidang IT (Optional)', '', '2'),
(10, 'Surat Pernyataan (Wajib)', '', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `persyaratan_umum`
--

CREATE TABLE `persyaratan_umum` (
  `id` int NOT NULL,
  `item` varchar(500) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `persyaratan_umum`
--

INSERT INTO `persyaratan_umum` (`id`, `item`, `file`) VALUES
(1, 'Warga Negara Indonesia;', ''),
(2, 'Pria/Wanita, usia minimal 20 Tahun dan maksimal 35 Tahun;', ''),
(3, 'Memiliki integritas, perilaku terpuji, disiplin bekerja dan mampu bekerja dalam tekanan baik individu maupun dalam tim serta dapat menyelesaikan pekerjaan sesuai target;', ''),
(4, 'Bebas NAPZA (dibuktikan dengan Surat Keterangan Dokter /Rumah Sakit Pemerintah setelah dinyatakan “DITERIMA”);', ''),
(5, 'Pendidikan minimal Diploma (D3) Teknik Informatika/Sistem Informasi/Manajemen Informatika/dan atau Bidang Ilmu yang relevan untuk jabatan Junior Programmer;', ''),
(6, 'Pendidikan minimal SMA/SMK sederajat untuk jabatan Teknisi Muda Jaringan Komputer;', ''),
(7, 'Tidak pernah terlibat dalam kasus kriminal;', ''),
(8, 'Tidak buta warna;', ''),
(9, 'Memiliki Kemauan Besar untuk Belajar;', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `persyaratan_umum1`
--

CREATE TABLE `persyaratan_umum1` (
  `id` int NOT NULL,
  `item` varchar(500) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `persyaratan_umum1`
--

INSERT INTO `persyaratan_umum1` (`id`, `item`, `file`) VALUES
(1, 'Memahami Bahasa Pemrograman PHP, HTML, CSS, Javascript, dan Mysql (nilai plus jika menguasai pemrograman android);', ''),
(2, 'Memahami Framework Laravel/codeigniter;', ''),
(3, 'Memahami konsep Model-View-Controller (MVC);', ''),
(4, 'Memahami konsep source control (GIT).', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `persyaratan_umum2`
--

CREATE TABLE `persyaratan_umum2` (
  `id` int NOT NULL,
  `item` varchar(500) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `persyaratan_umum2`
--

INSERT INTO `persyaratan_umum2` (`id`, `item`, `file`) VALUES
(1, 'Memahami konsep dasar teknologi jaringan komputer;', ''),
(2, 'Memahami konsep dasar Fiber Optic;', ''),
(3, 'Tidak takut/phobia ketinggian;', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pilihan`
--

CREATE TABLE `pilihan` (
  `id` int NOT NULL,
  `pilihan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id` int NOT NULL,
  `visi` varchar(500) DEFAULT NULL,
  `misi` varchar(500) DEFAULT NULL,
  `judul1` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi1` varchar(500) DEFAULT NULL,
  `judul2` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi2` varchar(500) DEFAULT NULL,
  `judul3` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi3` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id`, `visi`, `misi`, `judul1`, `deskripsi1`, `judul2`, `deskripsi2`, `judul3`, `deskripsi3`) VALUES
(1, 'E-GOVERNMENT YANG PROFESIONAL, INOVATIF DAN TERINTEGRASI', 'Memperkuat tata kelola e-government', 'Sejarah Dinas', 'Berdiri Sejak tahun 2016 mekar dari DIHUBPARKOM dan di nyatakan mandiri', 'Letak Gegrafis', 'Garis lintang dan Garis Bujur', 'Demografis', 'DEMOGRAFI DINAS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `register`
--

CREATE TABLE `register` (
  `id` int NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pasword` varchar(255) NOT NULL,
  `pasword2` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `register`
--

INSERT INTO `register` (`id`, `full_name`, `username`, `pasword`, `pasword2`, `email`, `email2`) VALUES
(1, 'jamdin thalib', 'jamdin', '12345', '12345', 'jamdinthalib@gmail.com', 'jamdinthalib85@yahoo.co.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `seleksi_berkas`
--

CREATE TABLE `seleksi_berkas` (
  `id` int NOT NULL,
  `surat_lamaran` varchar(50) NOT NULL,
  `ktp` varchar(50) NOT NULL,
  `ijazah` varchar(50) NOT NULL,
  `skck` varchar(50) NOT NULL,
  `sehat` varchar(50) NOT NULL,
  `portofolio` varchar(50) NOT NULL,
  `sertifikat1` varchar(50) NOT NULL,
  `sertifikat2` varchar(50) NOT NULL,
  `pernyataan1` int NOT NULL,
  `pernyataan2` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `seleksi_data`
--

CREATE TABLE `seleksi_data` (
  `id` int NOT NULL,
  `nama_peserta` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_telpon` varchar(20) NOT NULL DEFAULT '',
  `nama_kampus` varchar(255) NOT NULL DEFAULT '',
  `pendidikan_terkahir` varchar(20) NOT NULL DEFAULT '',
  `program_study` varchar(255) NOT NULL DEFAULT '',
  `ipk` varchar(5) NOT NULL DEFAULT '',
  `email_aktif` varchar(255) NOT NULL DEFAULT '',
  `alamat` varchar(500) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_dpa`
--

CREATE TABLE `tabel_dpa` (
  `id` int NOT NULL,
  `tgl_pengesahan_dpa` date NOT NULL,
  `nama_dok_dpa` varchar(200) NOT NULL,
  `file_dpa` varchar(255) NOT NULL,
  `uraian_dpa` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_dpa`
--

INSERT INTO `tabel_dpa` (`id`, `tgl_pengesahan_dpa`, `nama_dok_dpa`, `file_dpa`, `uraian_dpa`) VALUES
(1, '2021-11-03', 'Dpa 2021', 'INVOCE.pdf', 'Daftar Penggunaan Anggaran 2021'),
(2, '2020-11-04', 'Dpa 2020', 'SURAT KUASA INOMUNGA UTARA.pdf', 'Daftar Penggunaan Anggaran 2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_rfk`
--

CREATE TABLE `tabel_rfk` (
  `id` int NOT NULL,
  `tgl_pengesahan_rfk` date NOT NULL,
  `nama_dok_rfk` varchar(200) NOT NULL,
  `file_rfk` varchar(255) NOT NULL,
  `uraian_rfk` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_rfk`
--

INSERT INTO `tabel_rfk` (`id`, `tgl_pengesahan_rfk`, `nama_dok_rfk`, `file_rfk`, `uraian_rfk`) VALUES
(1, '2021-12-15', 'Ricncian Finalisasi Kegiatan 2020', 'SURAT KUASA INOMUNGA UTARA.pdf', 'Singkronisasi data RFK 2020'),
(2, '2021-12-15', 'Ricncian Finalisasi Kegiatan 2022', '', 'Singkronisasi data RFK 2022'),
(3, '2021-12-22', 'Rincian Finalisasi Anggarana dan Kegiatan 2021', '', 'Singkronisasi RFK 2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_rka`
--

CREATE TABLE `tabel_rka` (
  `id` int NOT NULL,
  `tgl_pengesahan_rka` date NOT NULL,
  `nama_dok_rka` varchar(200) NOT NULL,
  `file_rka` varchar(100) NOT NULL,
  `uraian_rka` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_rka`
--

INSERT INTO `tabel_rka` (`id`, `tgl_pengesahan_rka`, `nama_dok_rka`, `file_rka`, `uraian_rka`) VALUES
(1, '2021-11-04', 'RKA 2021', 'SK PENGANGKATAN SANGADI BOROKO TIMUR.pdf', 'Rencana Kegiatan dan Anggaran 2021'),
(2, '2020-11-04', 'RKA 2020', 'SURAT PERMOHONAN BOROKO TIMUR.pdf', 'Rencana Kegiatan dan Anggaran 2020'),
(4, '2021-12-16', 'RKA 2021', 'SURAT PERMOHONAN BOROKO TIMUR.pdf', 'Dokumen Penganggaran Setiap Anggaran 2022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` mediumint UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int UNSIGNED NOT NULL,
  `last_login` int UNSIGNED DEFAULT NULL,
  `active` tinyint UNSIGNED DEFAULT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `posisi` char(2) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `nik` char(17) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `img` char(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `nama_user`, `posisi`, `phone`, `tgl_lahir`, `nik`, `img`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$gWbDUoIf7Pd5MFRfhxu6e.OvhhF6YlnYSdXMfGisWpjlcdOarRLzC', 'ace.develop21@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1646358417, 1, 'Admin', NULL, '085255528687', NULL, NULL, '1639401853_0ce0b2c5feab4ca0be48.jpg'),
(45, '120.188.79.77', 'fajriansyachcreative@gmail.com', '$2y$10$WzAP8el9l6K4ta2PU33NYuA/iGdD1On9m26mwBN2XzxHe2pOVuDDm', 'fajriansyachcreative@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1643761119, 1643761306, 1, 'Muhammad fajriansyah', '2', '082181482675', '1995-08-24', '7108052408950001', NULL),
(46, '36.85.220.208', 'faisaldjukiro98@gmail.com', '$2y$10$2nQq2227r.bOk8oE9.kqdejw3JzRWQZC4P1CJfn4u.tvS02Ks67OO', 'faisaldjukiro98@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1643764130, 1643765139, 1, 'Faisal Djukiro', '1', '082296715197', '1998-07-02', '7108060207980001', NULL),
(55, '114.125.175.0', 'patadjenuhusain06@gmail.com', '$2y$10$7t6M/A6Xut.vJ0jcFdsOy..KMpo9w8Vj1ev8TIlRtdKn9mO0117IC', 'patadjenuhusain06@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1643777866, 1643778186, 1, 'HUSAIN PATADJENU', '2', '082394907717', '1994-06-16', '7108051606940002', NULL),
(56, '180.240.57.139', 'sahrul.mahani@gmail.com', '$2y$10$u6EukFXsBbrxwTa3WTXCbuel22vi4XWxSa/vAow.B1vy6XRYsXV.a', 'sahrul.mahani@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1643784723, 1645519127, 1, 'mohamad syahrur mahani', '1', '082292527141', '1998-01-09', NULL, NULL),
(60, '36.85.219.14', 'zulharman.paputungan@gmail.com', '$2y$10$QNbRyUGjNBDXbbW8a.JB5uQR06llYWSkP9xAASuQxZzwldvzhb9Gy', 'zulharman.paputungan@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1643791445, 1644291901, 1, 'Zulharman Paputungan', '1', '08111166911', '1991-05-11', '7571031105910005', NULL),
(62, '114.125.196.64', 'devitegela@gmail.com', '$2y$10$8FnJisVCn02DmCCeMD3xreBNCzpcE0XxtDrE.NcZP8DVvBZQ0RweC', 'devitegela@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1643795578, 1645448897, 1, 'Devriana Tegela', '1', '082292737775', '1988-11-23', NULL, NULL),
(66, '182.1.137.152', 'jenalhumagi@gmail.com', '$2y$10$EZxjKH6LnmbZvEVn2v.nVuB2KFFxFH7Esr33Wxg3Y9UoOPHGlv4U.', 'jenalhumagi@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1643808410, 1643808525, 1, 'Jenal Humagi', '2', '085395656598', '1989-03-21', NULL, NULL),
(69, '192.168.100.66', 'hafitakbarpangeran@gmail.com', '$2y$10$qRv8ox7f8iNVqzaUfX0nIeEjkMnPCkAvp054wjtsfpmBhY8opL8Si', 'hafitakbarpangeran@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1643809525, 1644326839, 1, 'Hafid Akbar pangeran', '2', '085256771664', '1989-05-05', '7108060505890001', NULL),
(70, '182.1.148.39', 'novalltesla@outlook.com', '$2y$10$mDQxGEeT9UJBskjw9/31MuHbJOe3XNXfYZP6IYL93XeilPFbz0pmK', 'novalltesla@outlook.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1643810159, 1645204378, 1, 'Noval Mahani', '2', '082293727536', '1993-08-18', '7108041908930001', NULL),
(72, '114.5.109.180', 'olaxlopulalan@gmail.com', '$2y$10$AJgzAkGnS9IqTO4QLBFjVes9KoFC/pw3v63J9piZnCCPElc9G72Ne', 'olaxlopulalan@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1643810910, 1644327643, 1, 'Priola Lopulalan', '1', '085340089953', '1999-09-17', '7108035911950001', NULL),
(74, '114.79.39.239', 'kurvisevanya04@gmail.com', '$2y$10$FtdvLwUfS6FlbJPvm/3Qv.6KrSpMthv6wlIyS8M8KvIzcM3jhisNi', 'kurvisevanya04@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1643846819, 1643963323, 1, 'Kurviasni Sefanya Runtuwene', '2', '082349969596', '1996-09-04', '7171070609930001', NULL),
(75, '36.75.186.92', 'rh3zky@gmail.com', '$2y$10$F6SUlgNH2Df3H6/JweyJTOFElBE3yIA5nmGZYYnH08nG8AosKS3p6', 'rh3zky@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1643851041, 1643851094, 1, 'Rezky Pradana Budihartono', '1', '085340778770', '1992-05-08', '75171030805920001', NULL),
(76, '36.85.217.28', 'robinsuli96@gmail.com', '$2y$10$1abImboIS1STsjqSkvyw8ORAveEwn70KfQm9zHaIcLWD5iAOxu0CK', 'robinsuli96@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1643976292, 1645365566, 1, 'Robin Suli', '2', '081347916977', '1996-12-09', '7108040205980001', NULL),
(77, '125.167.143.25', 'sapajoygngsuka@gmail.com', '$2y$10$CxM.jwFU/nIXxUL6yKQzn.pXAKuh2c5GTDWrINppJ3.ww2dSJeEou', 'sapajoygngsuka@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1643976314, 1643976432, 1, 'Dendi Anjasmara Sahidu', '1', '081354033789', '1994-12-27', '7571052712940004', NULL),
(78, '36.85.220.112', 'subhandestroyer@gmail.com', '$2y$10$ebrguyMfb6BpVdi28v..VOJ9z1.3ntcrxnY3QyQ1WA0TxjHl4FAiS', 'subhandestroyer@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1644065154, 1644065374, 1, 'SUBHAN DUDEPO', '2', '082349081244', '1992-02-22', '7108062202920001', NULL),
(79, '182.1.149.4', 'karimridwan89@gmail.com', '$2y$10$qRv8ox7f8iNVqzaUfX0nIeEjkMnPCkAvp054wjtsfpmBhY8opL8Si', 'karimridwan89@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1644067288, 1644069267, 1, 'Ridwan Karim', '1', '082259022100', '1989-10-10', '7108051010890001', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE `users_groups` (
  `id` mediumint UNSIGNED NOT NULL,
  `user_id` mediumint UNSIGNED NOT NULL,
  `group_id` mediumint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(38, 45, 2),
(39, 46, 2),
(48, 55, 2),
(49, 56, 2),
(53, 60, 2),
(55, 62, 2),
(59, 66, 2),
(62, 69, 2),
(63, 70, 2),
(65, 72, 2),
(67, 74, 2),
(68, 75, 2),
(69, 76, 2),
(70, 77, 2),
(71, 78, 2),
(72, 79, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aplikasi1`
--
ALTER TABLE `aplikasi1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `aplikasi2`
--
ALTER TABLE `aplikasi2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `domain_bolmut`
--
ALTER TABLE `domain_bolmut`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `domain_desa`
--
ALTER TABLE `domain_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `duk`
--
ALTER TABLE `duk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `file_berkas`
--
ALTER TABLE `file_berkas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pes_ber` (`peserta_id`),
  ADD KEY `f_berkas` (`id_berkas`);

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `hukum`
--
ALTER TABLE `hukum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`,`nip`);

--
-- Indeks untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai_nonpns`
--
ALTER TABLE `pegawai_nonpns`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai_pns`
--
ALTER TABLE `pegawai_pns`
  ADD PRIMARY KEY (`id`,`nip`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_pendaf` (`user_id`);

--
-- Indeks untuk tabel `persyaratan_berkas`
--
ALTER TABLE `persyaratan_berkas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `persyaratan_umum`
--
ALTER TABLE `persyaratan_umum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `persyaratan_umum1`
--
ALTER TABLE `persyaratan_umum1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `persyaratan_umum2`
--
ALTER TABLE `persyaratan_umum2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pilihan`
--
ALTER TABLE `pilihan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `seleksi_berkas`
--
ALTER TABLE `seleksi_berkas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `seleksi_data`
--
ALTER TABLE `seleksi_data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_dpa`
--
ALTER TABLE `tabel_dpa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_rfk`
--
ALTER TABLE `tabel_rfk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_rka`
--
ALTER TABLE `tabel_rka`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `remember_selector` (`remember_selector`);

--
-- Indeks untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_groups_group_id_foreign` (`group_id`),
  ADD KEY `users_groups_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aplikasi1`
--
ALTER TABLE `aplikasi1`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `aplikasi2`
--
ALTER TABLE `aplikasi2`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `domain_bolmut`
--
ALTER TABLE `domain_bolmut`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `domain_desa`
--
ALTER TABLE `domain_desa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `duk`
--
ALTER TABLE `duk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `file_berkas`
--
ALTER TABLE `file_berkas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=277;

--
-- AUTO_INCREMENT untuk tabel `hukum`
--
ALTER TABLE `hukum`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` mediumint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT untuk tabel `pegawai_nonpns`
--
ALTER TABLE `pegawai_nonpns`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pegawai_pns`
--
ALTER TABLE `pegawai_pns`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `persyaratan_berkas`
--
ALTER TABLE `persyaratan_berkas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `persyaratan_umum`
--
ALTER TABLE `persyaratan_umum`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `persyaratan_umum1`
--
ALTER TABLE `persyaratan_umum1`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `persyaratan_umum2`
--
ALTER TABLE `persyaratan_umum2`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `register`
--
ALTER TABLE `register`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `seleksi_berkas`
--
ALTER TABLE `seleksi_berkas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_dpa`
--
ALTER TABLE `tabel_dpa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_rfk`
--
ALTER TABLE `tabel_rfk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tabel_rka`
--
ALTER TABLE `tabel_rka`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` mediumint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` mediumint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `file_berkas`
--
ALTER TABLE `file_berkas`
  ADD CONSTRAINT `f_berkas` FOREIGN KEY (`id_berkas`) REFERENCES `persyaratan_berkas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pes_ber` FOREIGN KEY (`peserta_id`) REFERENCES `pendaftaran` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD CONSTRAINT `jabatan_ibfk_1` FOREIGN KEY (`id`) REFERENCES `pegawai_pns` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `user_pendaf` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `users_groups_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_groups_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
