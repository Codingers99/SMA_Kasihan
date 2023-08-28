-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 05:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pelajaran`
--

CREATE TABLE `jadwal_pelajaran` (
  `id_jadpel` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `NIP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `kode_mapel` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `enroll_key` varchar(50) NOT NULL,
  `guru` varchar(50) NOT NULL,
  `pertemuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kode_mapel`, `gambar`, `enroll_key`, `guru`, `pertemuan`) VALUES
(1, 'A-9', 'A-1', 'http://localhost/Clone/gitclone/Upload/zikySBV_pic', 'zikySBV', 'dwad', 0),
(2, 'A-9', 'A-2', 'http://localhost/Clone/gitclone/Upload/2vLTs3C_pic', '2vLTs3C', 'dwadw', 0),
(3, 'A-9', 'mapel', 'http://localhost/Clone/gitclone/Upload/_pic.Png', 'qngayfL', '7j', 0),
(4, 'A-9', 'mapel', 'http://localhost/Clone/gitclone/Upload/_pic.Png', 'MyFzAK5', '7j', 0),
(5, 'y7iu', 'mapel', 'http://localhost/Clone/gitclone/Upload/_pic.Png', 'QPjY8XS', 'tuy', 0),
(6, 'uigug', 'mapel', 'http://localhost/Clone/gitclone/Upload/AKDLc8v_pic', 'AKDLc8v', 'uihjojop', 0),
(7, 'A-9', 'mapel', 'http://localhost/Clone/gitclone/Upload/7Q5Xk6d_pic', '7Q5Xk6d', 'dwadwa', 0),
(8, 'dwa', 'mapel', 'http://localhost/Clone/gitclone/Upload/7MQWSpR_pic', '7MQWSpR', 'dwa', 0),
(9, 'dawd', 'mapel', 'http://localhost/Clone/gitclone/Upload/iJP1vfw_pic', 'iJP1vfw', 'wadawdaw', 0),
(10, 'da', 'mapel', 'http://localhost/Clone/gitclone/rcD7dqN_pic.Png', 'rcD7dqN', 'kjij', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mapel` int(11) NOT NULL,
  `kode_mapel` varchar(11) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `guru_mapel` varchar(50) NOT NULL,
  `desc_mapel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mapel`, `kode_mapel`, `nama_mapel`, `guru_mapel`, `desc_mapel`) VALUES
(1, 'A-1', 'IPA', 'Iskandar', 'Ini adalah deskripsi'),
(2, 'A-2', 'MTK', 'Joni', 'Deskrips');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `tangga_posting` date NOT NULL,
  `judul` varchar(50) NOT NULL,
  `NIP` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id_tugas` int(11) NOT NULL,
  `NIS` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `Nilai` int(11) NOT NULL,
  `jadwal_pembuatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kode_user` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_telp` int(20) NOT NULL,
  `alamat` text NOT NULL,
  `acc_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `kode_user`, `nama`, `password`, `no_telp`, `alamat`, `acc_status`) VALUES
(1, 'd', 12345678, 'Guru', 'guru12345678', 0, 'e', 2),
(2, 'DD', 2000018309, 'Siswa', 'user12345678', 0, 'EE', 1),
(4, 'difidoblackwight@gmail.com', 2000018300, 'Nama', 'Password', 853213232, 'Rejokusuman Jl. Pasopati No.3, Sokowaten, Tamanan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55191', 1),
(5, '4', 1, '2', '3', 6, '5', 1),
(6, 'mdifido@gmail.com', 2000018301, 'Rizki', 'password', 2147483647, 'Rejokusuman Jl. Pasopati No.3, Sokowaten, Tamanan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55191', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_kelas`
--

CREATE TABLE `user_kelas` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_enroll` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_tugas`
--

CREATE TABLE `user_tugas` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_tugas` int(11) NOT NULL,
  `jadwal_selesai` varchar(50) NOT NULL,
  `status` enum('Selesai','Terlambat','Kosong') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  ADD PRIMARY KEY (`id_jadpel`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_kelas`
--
ALTER TABLE `user_kelas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  MODIFY `id_jadpel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_kelas`
--
ALTER TABLE `user_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
