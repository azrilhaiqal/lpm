-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 07 Apr 2021 pada 08.27
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `desa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_masyarakat`
--

CREATE TABLE IF NOT EXISTS `data_masyarakat` (
  `id_masarakat` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nik` char(16) NOT NULL,
  `alamat` text NOT NULL,
  `rt_rw` varchar(50) NOT NULL,
  PRIMARY KEY (`id_masarakat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data untuk tabel `data_masyarakat`
--

INSERT INTO `data_masyarakat` (`id_masarakat`, `nama`, `nik`, `alamat`, `rt_rw`) VALUES
(9, 'Asep Sunandar', '3601096709823090', 'Kp. Sinarjaya', '007/016'),
(10, 'Ujang', '3601045237890123', 'Kp. Sinarjaya', '007/016'),
(11, 'Faisal Muhammad', '3601087250098267', 'Kp Panca Tengah', '004/002'),
(12, 'Najmudin', '3601087229987625', 'Kp Panca Tengah', '009/002'),
(13, 'Haryono', '3601023667890120', 'Kp. Ranca', '004/003'),
(14, 'Tatang Sutarya', '3601026677890245', 'Kp. Sinarjaya', '007/016'),
(15, 'Andre ', '3601023456712356', 'Kp. Kaum Selatan', '009/006'),
(16, 'Muhamad Asro', '3601023456785400', 'kp Sukamaju', '004/003'),
(17, 'Rapinudin', '3601034523689324', 'Kp. Sinarjaya', '007/016'),
(18, 'Rohman Haetomi', '3601056238876543', 'Kp. Ranca', '004/003'),
(19, 'Burhanudin', '3601023489876123', 'Kp. Kaum Selatan', '002/006'),
(20, 'Lilis Amelia', '3601045556600987', 'Kp Sinarjaya', '002/016'),
(21, 'Maulana Ahmad', '3601023456789812', 'Kp. Sinarjaya', '008/016'),
(22, 'Miftahudin', '3601034900987654', 'Kp. Panca Tengah', '008/002'),
(23, 'Muhamad Aip', '3601034567898765', 'Kp. Panca Tengah', '007/002'),
(24, 'Abuyajid', '3601054367897653', 'Kp. Ranca', '002/003'),
(25, 'Siti Mardiah', '3601034567896432', 'Kp. Ranca', '002/003'),
(28, 'Solehudin', '3601023677654345', 'Kp. Sinarjaya', '008/016');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE IF NOT EXISTS `masyarakat` (
  `nik` char(16) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `rt_rw` varchar(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `tlp` varchar(13) NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `alamat`, `rt_rw`, `username`, `password`, `tlp`) VALUES
('2176226391098166', 'Muhamad Dayat', 'Galanggang', '7/8', 'dayat', '123', '0897896543572'),
('3601096709823090', 'Muhamad Saripudin', 'Kp. Umbulan', '008/002', 'sarip', 'sarip', '081617625748');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE IF NOT EXISTS `pengaduan` (
  `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_pengaduan` varchar(40) NOT NULL,
  `nama_pengadu` varchar(40) NOT NULL,
  `nik` char(16) NOT NULL,
  `isi_laporan` text NOT NULL,
  `tlp` varchar(13) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('Proses','Selesai') NOT NULL,
  PRIMARY KEY (`id_pengaduan`),
  KEY `nik` (`nik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nama_pengadu`, `nik`, `isi_laporan`, `tlp`, `foto`, `status`) VALUES
(85, '2021-04-02 (14:09:43)', 'Muhamad Dayat', '2176226391098166', 'kebakaran', '0897654676422', 'images (16).jpeg', 'Proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `id_petugas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_petugas` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `tlp` varchar(13) NOT NULL,
  `level` enum('admin','petugas') NOT NULL,
  PRIMARY KEY (`id_petugas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `tlp`, `level`) VALUES
(1, 'Azril', 'admin', 'admin', '0895346035755', 'admin'),
(2, 'Muhamad Haiqal', 'petugas', 'petugas', '081617898717', 'petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan`
--

CREATE TABLE IF NOT EXISTS `tanggapan` (
  `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` varchar(40) NOT NULL,
  `isi_laporan` text NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL,
  PRIMARY KEY (`id_tanggapan`),
  KEY `id_pengaduan` (`id_pengaduan`),
  KEY `id_petugas` (`id_petugas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data untuk tabel `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `isi_laporan`, `tanggapan`, `id_petugas`) VALUES
(9, 2, '2020-03-05 (21:49:23)', 'jalan ancurrrrr', 'jalan ancurrrr', 1),
(10, 3, '2020-03-05 (21:49:43)', 'longsor pak lurah', 'lonsor pak lurah', 1),
(11, 5, '2020-03-06 (01:06:33)', 'kebakaran rumah mewah', 'kebakaran rumah mewah', 1),
(12, 6, '2020-03-06 (01:22:16)', 'terjadi longsor di Kp. gadel', 'terjadi longsor di Kp. gadel kami siap membantu', 1),
(13, 7, '2020-03-06 (01:22:59)', 'Sawah kebanjiran di RT 008', 'Sawah kebanjiran di RT 008 kami siap membantu', 1),
(14, 8, '2020-03-06 (01:35:34)', 'tauran antar pelajar', 'tauran antar pelajar kami siap membantu', 1),
(15, 15, '2020-03-07 (11:01:43)', 'h', 'helem putih', 1),
(16, 0, '2020-03-07 (11:14:01)', 'a', 'aipp', 1),
(17, 13, '2020-03-07 (11:43:40)', 'e', 'sarip', 1),
(18, 23, '2020-03-07 (12:08:25)', 'm', 'm', 1),
(19, 21, '2020-03-07 (12:42:12)', 'h', 'h', 1),
(20, 25, '2020-03-07 (15:48:11)', 'Jembatan Roboh di Kp Barengkok', 'Sebelumya kami minta maaf, kami dari prangkat desa akan segera melakukan perbaikan jembatan tersebut sekian dan terimakasih', 1),
(21, 83, '2021-03-30 (14:07:23)', 'Quo fugiat ut possi', 'y', 1),
(22, 84, '2021-03-30 (14:09:23)', 'tes', 'sip', 1);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `masyarakat` (`nik`);

--
-- Ketidakleluasaan untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD CONSTRAINT `tanggapan_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
