-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2020 at 09:16 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_diskusi`
--

-- --------------------------------------------------------

--
-- Table structure for table `diskusi`
--

CREATE TABLE `diskusi` (
  `id_diskusi` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `file` text DEFAULT NULL,
  `kategori` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diskusi`
--

INSERT INTO `diskusi` (`id_diskusi`, `judul`, `deskripsi`, `file`, `kategori`, `tanggal`, `jumlah`) VALUES
(1, 'Update data pada form php yang sama (seperti excel)', 'Saya mau bikin form yang bisa nampilin data dari suatu tabel, yang mana nantinya dapat di update langsung di form tersebut, entah secara otomatis tersimpan atau dengan bantuan tombol\r\nberikut gambaran program yg coba sy buat', 'screencapture-localhost-Digimark-Home-index-2020-09-07-14_59_40.png', 'Jembatan', '2020-09-09', 2),
(2, 'Menampilkan data user yang sedang login', 'Umumnya yg disimpan di sesi itu id nya, bukan No KTP. Tapi bisa juga No KTP, nama user, foto profile disimpan di sesi, biar gak berulang-ulang manggil fungsi get_where nya.', 'screencapture-localhost-Digimark-Cv-tambah-cv-2020-09-07-14_33_31.png', 'Gedung', '2020-09-09', 1),
(3, 'Trying to get property of non-object di codeigniter 3', 'Ada yg bisa bantu ? saya ingin menampilkan tampilan ke halaman krs_list berupa nama_lengkap, nim, program studi, dan tahun akademik, tetapi tidak bisa mengambil datanya melalui controller.', 'screencapture-localhost-Digimark-Inisiasi-inisiasi-proyek2-2020-09-07-14_29_16.png', 'Jembatan', '2020-09-09', 3);

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `id_diskusi` int(11) NOT NULL,
  `jawaban` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id_jawaban`, `id_diskusi`, `jawaban`, `tanggal`) VALUES
(1, 1, 'Saya mau bikin form yang bisa nampilin data dari suatu tabel, yang mana nantinya dapat di update langsung di form tersebut, entah secara otomatis tersimpan atau dengan bantuan tombol\r\nberikut gambaran program yg coba sy buat', '2020-09-09'),
(2, 1, 'No KTPnya kan sudah disimpan di dalam sesi, jadi tinggal bikin fungsi get_where aja di modelnya, dengan wherenya adalah No KTP.', '2020-09-09'),
(3, 2, 'No KTPnya kan sudah disimpan di dalam sesi, jadi tinggal bikin fungsi get_where aja di modelnya, dengan wherenya adalah No KTP.\r\n', '2020-09-09'),
(4, 3, 'New to Bootstrap 4 is the Reboot, a new stylesheet that builds on Normalize with our own somewhat opinionated reset styles. Selectors appearing in this file only use elements—there are no classes here. This isolates our reset styles from our component styles for a more modular approach. Some of the most important resets this includes are the box-sizing: border-box change, moving from em to rem units on many elements, link styles, and many form element resets.', '2020-09-09'),
(5, 3, 'Coba di screenshot errornya yang lebih lengkap', '2020-09-09'),
(6, 3, 'Refactored nearly all components to use more un-nested class selectors instead of over-specific children selectors.', '2020-09-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diskusi`
--
ALTER TABLE `diskusi`
  ADD PRIMARY KEY (`id_diskusi`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diskusi`
--
ALTER TABLE `diskusi`
  MODIFY `id_diskusi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
