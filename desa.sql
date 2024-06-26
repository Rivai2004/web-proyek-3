-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2024 at 05:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desa`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertSurat` (IN `p_namauser` VARCHAR(255), IN `p_namasurat` VARCHAR(255), IN `p_file_path` VARCHAR(255))   BEGIN
    INSERT INTO surat (namauser, namasurat, file_path) 
    VALUES (p_namauser, p_namasurat, p_file_path);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `aduan_warga`
--

CREATE TABLE `aduan_warga` (
  `id_aduan` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_handphone` int(255) NOT NULL,
  `aduan` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aspirasi_warga`
--

CREATE TABLE `aspirasi_warga` (
  `id_aspirasi` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `aspirasi` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aspirasi_warga`
--

INSERT INTO `aspirasi_warga` (`id_aspirasi`, `nama`, `email`, `phone`, `alamat`, `aspirasi`, `waktu`) VALUES
(3, 'Muhamad Rivai', 'rivaimuhamad841@gmail.com', 2147483647, 'indonesia', 'Aini', '2023-05-19, 14:40:01'),
(4, 'Indra', 'rayya@gmail.com', 2147483647, 'Slaur', 'semoga pemerintah semakin berkembang', '2023-05-24, 12:50:29'),
(8, 'Rivai', 'rivai@gmail.com', 8552852, 'Lohceleng', 'Semoga pemerintah semakin jaya', '2023-05-29, 14:11:03'),
(9, 'Rivai', 'rivai@gmail.com', 852, 'Pasundan', 'Jalan ke patok besi, ketemu anak one poes', '2023-05-30, 13:19:49'),
(10, 'kartam', 'rizal@smail.com', 2147483647, 'lohbener', 'gablege gede', '2023-05-31, 14:42:53');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelembagaan`
--

CREATE TABLE `kelembagaan` (
  `id_kelembagaan` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelembagaan`
--

INSERT INTO `kelembagaan` (`id_kelembagaan`, `nama`, `image`) VALUES
(1, 'karto', 'asc1,1.png');

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `id_admin` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'rivai@gmail.com', '123456\r\n'),
(2, '123@gmail.com', '2345\r\n'),
(3, 'rizal@gmail.com', '123'),
(4, 'user1', '123456'),
(5, 'user2@gmail.com', '12345'),
(6, 'user', 'marni'),
(7, 'admin@gmail.com', '123'),
(8, 'karmad', '123'),
(9, 'karsiwan@gmail.com', '123'),
(10, 'user@gmail.com', '123'),
(11, 'farhan123@gmail.com', '123456'),
(12, 'raya123@gmail.com', 'marni');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nomor_telepon` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`id`, `nama`, `nik`, `email`, `password`, `nomor_telepon`) VALUES
(1, 'muhamad rivai', 1234567890, 'rivai123@gmail.com', 'joni123', 0),
(2, 'indra', 2147483647, 'rivaimuhamad841@gmail.com', 'raya123', 2147483647),
(3, 'aryamania', 2147483647, 'putrabalap123@gmail.com', 'bima123', 2147483647),
(4, 'bima', 2147483647, 'bima123@gmail.com', '123456', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `pemerintah_desa`
--

CREATE TABLE `pemerintah_desa` (
  `id_pemerintah_desa` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemerintah_desa`
--

INSERT INTO `pemerintah_desa` (`id_pemerintah_desa`, `image`, `nama`, `jabatan`) VALUES
(6, 'Cuplikan layar 2023-03-02 082343.png', 'kurnadi', 'sekretaris');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `image`, `judul`, `deskripsi`) VALUES
(2, 'rpl3.jpg', 'TELAH MELARIKAN DIRI DARI LAPAS INDRAMAYU', 'seorang pelaku bernama wawan kurniawan diduga melarikan diri dari lapas indramayu dikarenakan ngebet  untuk menikahi seorang gadis bernama hilal kurnia sapitri.'),
(3, 'or1.png', 'IRJEN FERDY SAMBO MENGAJUKAN KASASI', 'sambo masih belum terima atas keputusan hukuman mati yang telah diterimanya makadariitu ferdy sambo mengajukan kasasi di mahkamah agung jakarta'),
(4, 'Cuplikan layar 2023-03-02 082419.png', 'IRJEN FERDY SAMBO MENGAJUKAN KASASI', 'sambo masih belum terima atas keputusan hukuman mati yang telah diterimanya makadariitu ferdy sambo mengajukan kasasi di mahkamah agung jakarta'),
(5, 'anggota2nf.png', 'apasih', 'kunuh');

-- --------------------------------------------------------

--
-- Table structure for table `profil_kades`
--

CREATE TABLE `profil_kades` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profil_kades`
--

INSERT INTO `profil_kades` (`id`, `image`, `nama`, `deskripsi`) VALUES
(1, 'descending1.png', 'Karto', 'seorang pelaku bernama wawan kurniawan diduga melarikan diri dari lapas indramayu dikarenakan ngebet  untuk menikahi seorang gadis bernama hilal kurnia sapitri.');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id` int(255) NOT NULL,
  `sejarah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id`, `sejarah`) VALUES
(1, 'kayae mah');

-- --------------------------------------------------------

--
-- Table structure for table `slide_gambar`
--

CREATE TABLE `slide_gambar` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slide_gambar`
--

INSERT INTO `slide_gambar` (`id`, `image`, `judul`) VALUES
(2, '2.png', 'Gambar 1'),
(3, '10.png', 'konser html'),
(4, 'foto.jpg', 'LEUWIGEDE'),
(5, 'leuwi1.jpg', 'IRJEN  RIVAI');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id` int(11) NOT NULL,
  `namauser` varchar(255) NOT NULL,
  `namasurat` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `status` enum('proses','selesai') NOT NULL DEFAULT 'proses',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id`, `namauser`, `namasurat`, `file_path`, `status`, `created_at`) VALUES
(1, 'rivai123@gmail.com', 'Surat Kuasa', 'surat/karmad_1718005493.docx', 'selesai', '2024-06-10 07:44:53'),
(2, 'rivai123@gmail.com', 'Surat Kuasa', 'surat/karmad_1718006389.docx', 'selesai', '2024-06-10 07:59:49'),
(3, 'rivai123@gmail.com', 'Surat Kuasa', 'surat/karmad_1718006420.docx', 'selesai', '2024-06-10 08:00:20'),
(4, 'rivai123@gmail.com', 'Surat Kuasa', 'surat/karmad_1718006661.docx', 'selesai', '2024-06-10 08:04:21'),
(5, 'rivai123@gmail.com', 'Surat Online', 'surat/joni1718007335.docx', 'selesai', '2024-06-10 08:15:35'),
(6, 'rivai123@gmail.com', 'Surat Perubahan', 'surat/rivai_1718007505.docx', 'selesai', '2024-06-10 08:18:25'),
(7, 'rivai123@gmail.com', 'Surat Kuasa', 'surat/karmad_1718070665.docx', 'selesai', '2024-06-11 01:51:05'),
(8, 'bima123@gmail.com', 'Surat Online', 'surat/joni1718253697.docx', 'selesai', '2024-06-13 04:41:37'),
(16, 'rivai123@gmail.com', 'Surat Kuasa', 'surat/karmad_1719201702.docx', 'proses', '2024-06-24 04:01:42'),
(17, 'rivai123@gmail.com', 'Surat Kuasa', 'surat/SURAT KUASA DALAM PELAYANAN ADMINISTRASI KEPENDUDUKAN_1719201725.docx', 'proses', '2024-06-24 04:02:05'),
(18, 'rivai123@gmail.com', 'SURAT PERNYATAAN TIDAK MEMILIKI DOKUMEN KEPENDUDUKAN', 'surat/SURAT PERNYATAAN TIDAK MEMILIKI DOKUMEN KEPENDUDUKAN_1719323262.docx', 'proses', '2024-06-25 13:47:42'),
(19, 'rivai123@gmail.com', 'SURAT PERNYATAAN TIDAK MEMILIKI DOKUMEN KEPENDUDUKAN', 'surat/SURAT PERNYATAAN TIDAK MEMILIKI DOKUMEN KEPENDUDUKAN_1719323445.docx', 'proses', '2024-06-25 13:50:45'),
(20, 'rivai123@gmail.com', 'SURAT KUASA DALAM PELAYANAN ADMINISTRASI KEPENDUDUKAN', 'surat/SURAT KUASA DALAM PELAYANAN ADMINISTRASI KEPENDUDUKAN_1719323974.docx', 'selesai', '2024-06-25 13:59:34');

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `visi` varchar(255) NOT NULL,
  `misi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `image`, `visi`, `misi`) VALUES
(1, 'leuwi1.jpg', '1. Ketuhanan yang Maha Esa<br>\r\n2. Rivai<br>\r\n3. Rivai', 'asli beli sih');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aduan_warga`
--
ALTER TABLE `aduan_warga`
  ADD PRIMARY KEY (`id_aduan`);

--
-- Indexes for table `aspirasi_warga`
--
ALTER TABLE `aspirasi_warga`
  ADD PRIMARY KEY (`id_aspirasi`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `kelembagaan`
--
ALTER TABLE `kelembagaan`
  ADD PRIMARY KEY (`id_kelembagaan`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemerintah_desa`
--
ALTER TABLE `pemerintah_desa`
  ADD PRIMARY KEY (`id_pemerintah_desa`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `profil_kades`
--
ALTER TABLE `profil_kades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_gambar`
--
ALTER TABLE `slide_gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aduan_warga`
--
ALTER TABLE `aduan_warga`
  MODIFY `id_aduan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `aspirasi_warga`
--
ALTER TABLE `aspirasi_warga`
  MODIFY `id_aspirasi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelembagaan`
--
ALTER TABLE `kelembagaan`
  MODIFY `id_kelembagaan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id_admin` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pemerintah_desa`
--
ALTER TABLE `pemerintah_desa`
  MODIFY `id_pemerintah_desa` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profil_kades`
--
ALTER TABLE `profil_kades`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slide_gambar`
--
ALTER TABLE `slide_gambar`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
