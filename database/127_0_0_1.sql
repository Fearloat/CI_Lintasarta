-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 19 Sep 2013 pada 20.02
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `ci_series`
--
CREATE DATABASE IF NOT EXISTS `ci_series` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ci_series`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id_anggota` int(10) NOT NULL AUTO_INCREMENT,
  `id_perusahaan` int(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `hub` varchar(25) NOT NULL,
  `periode` varchar(25) NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `id_perusahaan`, `nama`, `jabatan`, `pekerjaan`, `hub`, `periode`) VALUES
(11, 6, 'sukir', 'supir', 'supir', 'pekerja', '2004'),
(9, 7, 'asd', '213', 'ketawa', 'sekarang', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id_booking` int(11) NOT NULL AUTO_INCREMENT,
  `id_perusahaan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kode` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`id_booking`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id_booking`, `id_perusahaan`, `tanggal`, `kode`, `status`) VALUES
(10, 0, '2013-09-11', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `costumer`
--

CREATE TABLE IF NOT EXISTS `costumer` (
  `id_cs` int(10) NOT NULL AUTO_INCREMENT,
  `id_perusahaan` int(10) NOT NULL,
  `userid` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cs`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data untuk tabel `costumer`
--

INSERT INTO `costumer` (`id_cs`, `id_perusahaan`, `userid`, `password`) VALUES
(23, 9, 'perusahaan1', 'fc1101ededc7506243be80f0cea3ef1e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_admin`
--

CREATE TABLE IF NOT EXISTS `data_admin` (
  `id_data_admin` int(10) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `id_divisi` int(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `notelp` varchar(25) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  PRIMARY KEY (`id_data_admin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE IF NOT EXISTS `perusahaan` (
  `id_perusahaan` int(10) NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `jenis_sewa` varchar(25) NOT NULL,
  `nojar` int(25) NOT NULL,
  `lokasidc` int(1) NOT NULL,
  PRIMARY KEY (`id_perusahaan`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nama_perusahaan`, `alamat`, `jenis_sewa`, `nojar`, `lokasidc`) VALUES
(6, 'perusahaan4', 'bekasi', 'server', 123333, 1),
(7, 'perusahaan5', 'depok', 'server', 12321321, 1),
(8, 'perusahaan6', 'bandung', 'server', 321, 1),
(9, 'perusahaan1', 'jakarta', 'area/sekat', 321, 1),
(10, 'perusahaan2', 'tangerang', 'rak', 213, 1),
(11, 'perusahaan3', 'jakarta', 'area/sekat', 4444, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE IF NOT EXISTS `tamu` (
  `id_tamu` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota` int(11) NOT NULL,
  `id_booking` int(11) NOT NULL,
  PRIMARY KEY (`id_tamu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
