-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2018 pada 13.08
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_perpus1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fact_tbl_transaksi`
--

CREATE TABLE IF NOT EXISTS `fact_tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_buku` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_tgl_pinjam` int(11) NOT NULL,
  `id_tgl_kembali` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `id_buku_2` (`id_buku`),
  KEY `id_anggota_2` (`id_anggota`),
  KEY `id_tgl_pinjam_2` (`id_tgl_pinjam`),
  KEY `id_tgl_kembali_2` (`id_tgl_kembali`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=251 ;

--
-- Dumping data untuk tabel `fact_tbl_transaksi`
--

INSERT INTO `fact_tbl_transaksi` (`id_transaksi`, `id_buku`, `id_anggota`, `id_tgl_pinjam`, `id_tgl_kembali`, `denda`) VALUES
(140, 1, 1, 111, 121, 0),
(141, 2, 2, 112, 122, 0),
(142, 3, 3, 113, 123, 0),
(143, 4, 4, 114, 124, 0),
(144, 3, 5, 115, 125, 0),
(145, 3, 6, 116, 126, 3000),
(146, 1, 7, 117, 127, 0),
(147, 2, 8, 118, 128, 0),
(148, 1, 9, 119, 129, 3000),
(149, 3, 10, 1110, 130, 3000),
(240, 1, 11, 211, 221, 0),
(241, 4, 12, 212, 222, 0),
(242, 4, 13, 213, 223, 0),
(243, 1, 14, 214, 224, 3000),
(244, 2, 15, 215, 225, 0),
(245, 4, 16, 114, 124, 3000),
(246, 1, 17, 217, 227, 0),
(247, 4, 18, 218, 228, 3000),
(248, 1, 19, 219, 229, 3000),
(249, 3, 20, 220, 230, 0),
(250, 4, 6, 116, 226, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_anggota`
--

CREATE TABLE IF NOT EXISTS `tbl_anggota` (
  `id_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `thn_masuk` varchar(50) NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`id_anggota`, `nim`, `nama`, `tempat_lahir`, `tgl_lahir`, `jk`, `prodi`, `thn_masuk`) VALUES
(1, 'E1E115026', 'Mamta Culkari', 'KENDARI', '1997-11-07', 'P', 'TEKNIK INFORMATIKA', '2015'),
(2, 'E1E115057', 'Alisya Utriani Demaga', 'KENDARI', '1998-01-07', 'P', 'TEKNIK INFORMATIKA', '2015'),
(3, 'E1E115050', 'Wafiqoh Muslimin Sabbi', 'TANGERANG', '1997-12-26', 'P', 'TEKNIK INFORMATIKA', '2015'),
(4, 'E1E115074', 'MUAZHARIN ALFAN', 'RAHA', '1997-11-07', 'L', 'TEKNIK SIPIL', '2014'),
(5, 'E1E115044', 'RICKY RAMADHAN', 'KONAWE SELATAN', '1998-01-11', 'L', 'TEKNIK ELEKTRO', '2016'),
(6, 'E1E115042', 'RAGIL MANGGALANING', 'KAMBARA', '1997-06-08', 'L', 'TEKNIK ARSITEK', '2013'),
(7, 'E1E11585', 'PRISKA KHUSNULKHOTIMAH', 'BUTON', '1997-07-03', 'P', 'TEKNIK MESIN', '2012'),
(8, 'E1E115092', 'NUR ICKSAN', 'WAKATOBI', '1998-08-17', 'L', 'TEKNIK ARSITEK', '2015'),
(9, 'E1E115020', 'INDRI ANASTASYA', 'CINA', '1996-08-15', 'P', 'TEKNIK SIPIL', '2014'),
(10, 'E1E115035', 'ACHMAD ILHAM NUGROHO', 'KABAWO', '1997-12-09', 'L', 'TEKNIK MESIN', '2007'),
(11, 'B1C112009', 'FARID FACHRONI', 'RAHA', '1995-09-24', 'L', 'TEKNIK ARSITEK', '2012'),
(12, 'B1C112010', 'CHAERIL AKSAN', 'PONDIDAHA', '1996-02-13', 'L', 'TEKNIK ARSITEK', '2014'),
(13, 'B1C112011', 'BUDI DHARMAWAN PRAKOSO', 'POSO', '1990', 'L', 'TEKNIK SIPIL', '2007'),
(14, 'A1C112012', 'SAIPUL JAMIL', 'KABAWO', '1992-01-20', 'L', 'TEKNIK ARSITEK', '2013'),
(15, 'A1C112013', 'RAISA INDRIYANI', 'MORAMO', '1995-12-24', 'P', 'TEKNIK SIPIL', '2012'),
(16, 'A1C112014', 'LAILA HUSEN', 'KUPANG', '1990-1-11', 'P', 'TEKNIK MESIN', '2012'),
(17, 'B1C112012', 'YUKI KATO', 'LALODATI', '1995-12-24', 'P', 'TEKNIK ELEKTRO', '2013'),
(18, 'A1C112015', 'SAPRIL', 'KALIMANTAN', '1992-01-10', 'L', 'TEKNIK INFORMATIKA', '2016'),
(19, 'A1C112018', 'INDAH LUGIANTI', 'BAU-BAU', '1992-09-10', 'P', 'TEKNIK MESIN', '2007'),
(20, 'A1C1120120', 'JAYA SAPUTRA', 'NTB', '1995-07-11', 'L', 'TEKNIK ARSITEK', '2013');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_buku`
--

CREATE TABLE IF NOT EXISTS `tbl_buku` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `thn_terbit` varchar(5) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `jumlah_buku` int(11) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `tgl_input` datetime NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tbl_buku`
--

INSERT INTO `tbl_buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `thn_terbit`, `isbn`, `jumlah_buku`, `lokasi`, `tgl_input`) VALUES
(1, 'Laravel Advance', 'Artono Dwi Ramadhan', 'ADR Studio', '2001', '223ER', 10, 'RAK1', '2018-01-02 09:16:00'),
(2, 'Bahasa Indonesia', 'Rudy', 'Erlangga', '2002', '89HJ56', 20, 'RAK2', '2018-01-01 09:08:00'),
(3, 'KALKULUS', 'Susan', 'Gramedia', '1999', '345LS', 30, 'RAK1', '2017-12-13 15:04:00'),
(4, 'Artikel kesehatan', 'Muslimah', 'Muslimah', '2007', '1290LW', 10, 'RAK3', '2017-12-06 03:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tgl_kembali`
--

CREATE TABLE IF NOT EXISTS `tbl_tgl_kembali` (
  `id_tgl_kembali` int(11) NOT NULL AUTO_INCREMENT,
  `hari` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  PRIMARY KEY (`id_tgl_kembali`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=231 ;

--
-- Dumping data untuk tabel `tbl_tgl_kembali`
--

INSERT INTO `tbl_tgl_kembali` (`id_tgl_kembali`, `hari`, `bulan`, `tahun`) VALUES
(121, 24, 12, 2017),
(122, 28, 12, 2017),
(123, 15, 12, 2018),
(124, 12, 12, 2018),
(125, 3, 12, 2018),
(126, 19, 11, 2018),
(127, 10, 12, 2018),
(128, 21, 12, 2018),
(129, 2, 1, 2018),
(130, 2, 1, 2018),
(221, 10, 2, 2016),
(222, 21, 3, 2016),
(223, 7, 7, 2016),
(224, 9, 12, 2016),
(225, 7, 1, 2016),
(226, 10, 8, 2016),
(227, 28, 2, 2016),
(228, 7, 9, 2016),
(229, 15, 9, 2016),
(230, 21, 12, 2016);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tgl_pinjam`
--

CREATE TABLE IF NOT EXISTS `tbl_tgl_pinjam` (
  `id_tgl_pinjam` int(11) NOT NULL AUTO_INCREMENT,
  `hari` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  PRIMARY KEY (`id_tgl_pinjam`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1111 ;

--
-- Dumping data untuk tabel `tbl_tgl_pinjam`
--

INSERT INTO `tbl_tgl_pinjam` (`id_tgl_pinjam`, `hari`, `bulan`, `tahun`) VALUES
(111, 21, 12, 2017),
(112, 26, 12, 2017),
(113, 12, 12, 2017),
(114, 9, 12, 2017),
(115, 1, 12, 2017),
(116, 3, 11, 2018),
(117, 7, 12, 2018),
(118, 19, 12, 2018),
(119, 1, 1, 2018),
(211, 7, 2, 2016),
(212, 18, 3, 2016),
(213, 4, 7, 2016),
(214, 29, 11, 2016),
(215, 4, 1, 2016),
(216, 7, 8, 2016),
(217, 21, 2, 2016),
(218, 31, 8, 2016),
(219, 9, 9, 2016),
(220, 19, 12, 2016),
(1110, 1, 1, 2018);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `fact_tbl_transaksi`
--
ALTER TABLE `fact_tbl_transaksi`
  ADD CONSTRAINT `fact_tbl_transaksi_ibfk_1` FOREIGN KEY (`id_tgl_kembali`) REFERENCES `tbl_tgl_kembali` (`id_tgl_kembali`),
  ADD CONSTRAINT `fact_tbl_transaksi_ibfk_2` FOREIGN KEY (`id_anggota`) REFERENCES `tbl_anggota` (`id_anggota`),
  ADD CONSTRAINT `fact_tbl_transaksi_ibfk_3` FOREIGN KEY (`id_tgl_pinjam`) REFERENCES `tbl_tgl_pinjam` (`id_tgl_pinjam`),
  ADD CONSTRAINT `fact_tbl_transaksi_ibfk_4` FOREIGN KEY (`id_buku`) REFERENCES `tbl_buku` (`id_buku`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
