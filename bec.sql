-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Nov 2020 pada 19.16
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bec`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `No_pendaftaran` varchar(200) NOT NULL,
  `Nama` varchar(200) NOT NULL,
  `Tempat_lahir` varchar(200) NOT NULL,
  `Tanggal_lahir` varchar(200) NOT NULL,
  `Jenis_kelamin` varchar(10) NOT NULL,
  `Alamat` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `No_hp` varchar(200) NOT NULL,
  `Nama_orangtua` varchar(200) NOT NULL,
  `No_hp_orangtua` varchar(200) NOT NULL,
  `Tahun_masuk` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`No_pendaftaran`, `Nama`, `Tempat_lahir`, `Tanggal_lahir`, `Jenis_kelamin`, `Alamat`, `Email`, `No_hp`, `Nama_orangtua`, `No_hp_orangtua`, `Tahun_masuk`) VALUES
('A1', 'Niko', 'surabaya', '11/08/1990', 'Laki-Laki', 'surabaya', 'niko@gmail.com', '088676', 'gasjda', '765858', '2017');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tutor`
--

CREATE TABLE `tutor` (
  `Id` varchar(100) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `No_Hp` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tutor`
--

INSERT INTO `tutor` (`Id`, `Nama`, `Alamat`, `No_Hp`, `Email`, `Status`) VALUES
('A1', 'Siska', 'Banyuwangi', '08523517', 'siska@gmail.com', 'Aktif'),
('A2', 'Ahmad', 'Kediri', '08324258', 'ahmad12@gmail.com', 'Aktif'),
('55', 'mghk', 'yufii', '9696', 'jhsl', 'Aktif');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
