-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2025 at 01:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bengkel-kusmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `advantages`
--

CREATE TABLE `advantages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `advantages`
--

INSERT INTO `advantages` (`id`, `title`, `description`) VALUES
(1, 'Quality Servicing', 'High-quality maintenance to ensure your vehicle is always in top condition.'),
(2, 'Expert Workers', 'Experienced professionals ready to provide the best solutions for your vehicle needs.'),
(3, 'Modern Equipment', 'Equipped with modern tools for fast, efficient, and precise service.');

-- --------------------------------------------------------

--
-- Table structure for table `contact_user`
--

CREATE TABLE `contact_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_user`
--

INSERT INTO `contact_user` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'Surya', 'surya@gmail.com', 'Service', 'Ingin service mobil ', '2024-11-18 07:20:31');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `section` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `section`, `title`, `description`, `value`) VALUES
(1, 'about', 'Bengkel Kusmin', 'Solusi Terbaik untuk Perawatan Kendaraan Anda', NULL),
(2, 'about', 'Professional & Expert', 'Teknisi berpengalaman yang siap memberikan layanan terbaik untuk kendaraan Anda.', NULL),
(3, 'about', 'Quality Servicing Center', 'Pusat layanan berkualitas tinggi untuk semua kebutuhan kendaraan Anda.', NULL),
(4, 'about', 'Awards Winning Workers', 'Tim teknisi pemenang penghargaan yang bekerja dengan dedikasi dan keahlian.', NULL),
(5, 'fact', 'Years Experience', 'Pengalaman selama bertahun-tahun dalam bidang perbaikan kendaraan.', 49),
(6, 'fact', 'Expert Technicians', 'Teknisi ahli yang siap membantu kebutuhan Anda.', 20),
(7, 'fact', 'Satisfied Clients', 'Pelanggan yang puas dengan layanan kami.', 8394),
(8, 'fact', 'Complete Projects', 'Proyek kendaraan yang telah selesai dikerjakan.', 8394);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `title`, `description`) VALUES
(1, 'Autobody Repair', 'Perbaikan bodi kendaraan yang presisi untuk mengembalikan tampilan sempurna kendaraan Anda.'),
(2, 'Service', 'Perawatan rutin dan menyeluruh untuk memastikan kendaraan Anda selalu dalam kondisi terbaik.'),
(3, 'Scan', 'Pemeriksaan canggih dengan alat scan terkini untuk mendeteksi masalah tersembunyi pada kendaraan Anda.'),
(4, 'Overhaul', 'Pulihkan performa dan tampilan kendaraan Anda dengan layanan overhaul menyeluruh untuk pengalaman berkendara yang lebih optimal.');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `testimonial` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `job_title`, `testimonial`) VALUES
(1, 'Farrel Wildan Waliyyudin', 'Pengusaha', 'Pelayanan di Bengkel Kusmin luar biasa! Mobil saya kembali seperti baru setelah perbaikan bodi. Teknisi sangat profesional dan ramah. Pasti akan kembali lagi!'),
(2, 'Leonard Obadias Zeke', 'Dosen', 'Saya sangat puas dengan pemasangan kaca film di Bengkel Kusmin. Kabin mobil jadi lebih sejuk, dan kualitasnya sangat memuaskan. Highly recommended!'),
(3, 'Arif Dwi Nugroho', 'Pengusaha', 'Mesin mobil saya sempat bermasalah, tapi berkat diagnostic scan di Bengkel Kusmin, masalah cepat teratasi. Teknologinya canggih dan pengerjaannya cepat!'),
(4, 'Ricky Saputra', 'Mahasiswa', 'Pelayanan servis di Bengkel Kusmin sangat memuaskan. Mobil saya kembali prima setelah perawatan rutin. Sangat profesional dan terpercaya!'),
(5, 'Agatha Dhiya Atsal', 'Mahasiswa', 'Pelayanan di Bengkel Kusmin sangat memuaskan! Teknisi yang profesional dan peralatan modern membuat mobil saya kembali seperti baru. Sangat direkomendasikan!'),
(6, 'Whindi Insania', 'PNS', 'Pengerjaan di Bengkel Kusmin begitu cepat dan akurat. Saya selalu mendapatkan pelayanan yang baik disini.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advantages`
--
ALTER TABLE `advantages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_user`
--
ALTER TABLE `contact_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advantages`
--
ALTER TABLE `advantages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_user`
--
ALTER TABLE `contact_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
