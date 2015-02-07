-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Waktu pembuatan: 18. Agustus 2013 jam 21:23
-- Versi Server: 5.0.45
-- Versi PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `ci_series`
-- 
CREATE DATABASE `ci_series` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ci_series`;

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `admin`
-- 

CREATE TABLE `admin` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data untuk tabel `admin`
-- 

INSERT INTO `admin` VALUES (1, 'darul', 'ea403335569bdb5a7be022857083d3a5');
INSERT INTO `admin` VALUES (2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `anggota`
-- 

CREATE TABLE `anggota` (
  `id_anggota` int(10) NOT NULL auto_increment,
  `id_perusahaan` int(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `hub` varchar(25) NOT NULL,
  `periode` varchar(25) NOT NULL,
  PRIMARY KEY  (`id_anggota`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- 
-- Dumping data untuk tabel `anggota`
-- 

INSERT INTO `anggota` VALUES (11, 6, 'sukir', 'supir', 'supir', 'pekerja', '2004');
INSERT INTO `anggota` VALUES (9, 7, 'asd', '213', 'ketawa', 'sekarang', '123');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `costumer`
-- 

CREATE TABLE `costumer` (
  `id_cs` int(10) NOT NULL auto_increment,
  `id_perusahaan` int(10) NOT NULL,
  `userid` varchar(24) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY  (`id_cs`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- Dumping data untuk tabel `costumer`
-- 

INSERT INTO `costumer` VALUES (4, 8, 'usernameperusahaan6', 'e10adc3949ba59abbe56e057f');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `data_admin`
-- 

CREATE TABLE `data_admin` (
  `id_data_admin` int(10) NOT NULL auto_increment,
  `id` int(10) NOT NULL,
  `id_divisi` int(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `notelp` varchar(25) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  PRIMARY KEY  (`id_data_admin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data untuk tabel `data_admin`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `divisi`
-- 

CREATE TABLE `divisi` (
  `id_div` int(10) NOT NULL auto_increment,
  `nama_div` varchar(25) NOT NULL,
  `lantai` int(2) NOT NULL,
  PRIMARY KEY  (`id_div`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data untuk tabel `divisi`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `perusahaan`
-- 

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(10) NOT NULL auto_increment,
  `nama_perusahaan` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `jenis_sewa` varchar(25) NOT NULL,
  `nojar` int(25) NOT NULL,
  `lokasidc` int(1) NOT NULL,
  PRIMARY KEY  (`id_perusahaan`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- 
-- Dumping data untuk tabel `perusahaan`
-- 

INSERT INTO `perusahaan` VALUES (6, 'perusahaan4', 'bekasi', 'server', 123333, 1);
INSERT INTO `perusahaan` VALUES (7, 'perusahaan5', 'depok', 'server', 12321321, 1);
INSERT INTO `perusahaan` VALUES (8, 'perusahaan6', 'bandung', 'server', 321, 1);
INSERT INTO `perusahaan` VALUES (9, 'perusahaan1', 'jakarta', 'area/sekat', 321, 1);
INSERT INTO `perusahaan` VALUES (10, 'perusahaan2', 'tangerang', 'rak', 213, 1);
INSERT INTO `perusahaan` VALUES (11, 'perusahaan3', 'jakarta', 'area/sekat', 4444, 1);
