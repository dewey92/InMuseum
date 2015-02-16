-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2015 at 06:00 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita_museum`
--

CREATE TABLE IF NOT EXISTS `berita_museum` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `id_museum` int(11) DEFAULT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `tgl_berita` date NOT NULL,
  `foto_berita` varchar(100) NOT NULL,
  PRIMARY KEY (`id_berita`),
  UNIQUE KEY `id_berita` (`id_berita`),
  KEY `id_museum` (`id_museum`),
  KEY `id_museum_2` (`id_museum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `berita_museum`
--

INSERT INTO `berita_museum` (`id_berita`, `id_museum`, `judul_berita`, `isi_berita`, `tgl_berita`, `foto_berita`) VALUES
(1, 1, 'Pengembangan Dokumentasi Museum Nasional melalui Kajian Teknik Fotografi Koleksi', '<p>Bidang Dokumentasi dan Registrasi MNI menyelenggarakan kegiatan Kajian Teknik Fotografi Koleksi, dengan mengusung tema "Pengembangan Dokumentasi Museum Nasional Melalui Kajian Teknik Fotografi Koleksi" di Auditorium Gedung A, Museum Nasional Indonesia, Selasa (30/09). Kegiatan kajian ini di ikuti 30 peserta terdiri dari karyawan dilingkungan Museum Nasional Indonesia dan tamu undangan dari museum diwilayah Jakarta.</p>\r\n\r\n\r\n<p>Kepala Seksi Dokumentasi MNI, Junaidi, mengatakan kegiatan ini bertujuan untuk meningkatkan pengetahuan dan keterampilan dalam bidang fotografi.</p>\r\n\r\n<p>“Dengan adanya Kajian seperti ini diharapkan dapat memberikan nilai tambah kepada peserta serta meningkatkan kepekaan sebagai fotografer dari sudut pandang yang baik,” jelas Junaidi.</p>\r\n\r\n<p>Kegiatan Bimtek digelar selama tiga hari, mulai dari tanggal 30 september hingga 2  Oktober 2014 di Auditorium gedung A,  Museum Nasional Indonesia, dan pada hari terkahir akan dilanjutkan praktek pemotretan koleksi yang bertempat di Museum Zoologi bogor. Dalam kegiatan Kajian ini turut hadir Setiadi Darmawan (kiat) dari Tim Fotografi Kementerian Pariwisata dan Ekonomi Kreatif sebagai  narasumber, beserta Tim.</p>\r\n\r\n<p>Pembekalan materi kepada peserta menerangkan berbagai hal berkaitan dengan teknis penggunaan kamera secara profesional  yang sesuai dengan teknik pengambilan gambar pada momen tertentu, khusnya teknik dalam pengambilan gambar pada koleksi Museum Nasional.</p>', '2014-10-16', 'no_image.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_kota`
--

CREATE TABLE IF NOT EXISTS `daftar_kota` (
  `id_kota` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kota` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `daftar_kota`
--

INSERT INTO `daftar_kota` (`id_kota`, `nama_kota`) VALUES
(1, 'Banda Aceh'),
(2, 'Bandar Lampung'),
(3, 'Bengkulu'),
(4, 'Palembang'),
(5, 'Padang'),
(6, 'Pekanbaru'),
(7, 'Medan'),
(8, 'Jakarta'),
(9, 'Tangerang'),
(10, 'Bogor'),
(11, 'Depok'),
(12, 'Bekasi'),
(13, 'Bandung'),
(14, 'Sukabumi'),
(15, 'Semarang'),
(16, 'Yogyakarta'),
(17, 'Surakarta'),
(18, 'Magelang'),
(19, 'Kudus'),
(20, 'Cianjur'),
(21, 'Malang'),
(22, 'Kediri'),
(23, 'Surabaya'),
(24, 'Tegal'),
(25, 'Purwokerto'),
(26, 'Garut'),
(27, 'Gresik'),
(28, 'Pacitan'),
(29, 'Sumenep'),
(30, 'Probolinggo');

-- --------------------------------------------------------

--
-- Table structure for table `event_museum`
--

CREATE TABLE IF NOT EXISTS `event_museum` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `id_museum` int(11) DEFAULT NULL,
  `id_kategori_event` int(11) DEFAULT NULL,
  `nama_event` varchar(100) NOT NULL,
  `deskripsi_event` text,
  `tgl_mulai_event` date NOT NULL,
  `tgl_selesai_event` date DEFAULT NULL,
  `foto_event` varchar(100) DEFAULT 'no_image.jpg',
  PRIMARY KEY (`id_event`),
  UNIQUE KEY `id_event` (`id_event`),
  KEY `id_museum` (`id_museum`),
  KEY `id_kategori_event` (`id_kategori_event`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `event_museum`
--

INSERT INTO `event_museum` (`id_event`, `id_museum`, `id_kategori_event`, `nama_event`, `deskripsi_event`, `tgl_mulai_event`, `tgl_selesai_event`, `foto_event`) VALUES
(1, 1, 1, 'dewe', 'DPP Ikatan Pembuat Hantaran Indonesia Pancawati bekerjasama dengan LSK Hantaran, Konsorsius Hantaran dan Museum Nasional.Dengan bangga mempersembahkan berbagai kegiatan Lomba dan juga Bazaar, yang akan diselenggarakan di Museum Nasional pada tanggal 22-23 Agustus 2014.', '2014-08-22', '2014-08-22', 'hahaa.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_event`
--

CREATE TABLE IF NOT EXISTS `kategori_event` (
  `id_kategori_event` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori_event` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kategori_event`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kategori_event`
--

INSERT INTO `kategori_event` (`id_kategori_event`, `nama_kategori_event`) VALUES
(1, 'Exhibition'),
(2, 'Seminar'),
(3, 'Competition'),
(4, 'Kids Only'),
(5, 'Family');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_koleksi`
--

CREATE TABLE IF NOT EXISTS `kategori_koleksi` (
  `id_kategori_koleksi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori_koleksi` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kategori_koleksi`),
  UNIQUE KEY `id_kategori` (`id_kategori_koleksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `kategori_koleksi`
--

INSERT INTO `kategori_koleksi` (`id_kategori_koleksi`, `nama_kategori_koleksi`) VALUES
(1, 'History'),
(2, 'Pre-history'),
(3, 'Geography'),
(4, 'Ethnography'),
(5, 'Numismatic'),
(6, 'Archeology'),
(7, 'Philology'),
(8, 'Art and Paintings'),
(9, 'Technology');

-- --------------------------------------------------------

--
-- Table structure for table `koleksi_museum`
--

CREATE TABLE IF NOT EXISTS `koleksi_museum` (
  `id_koleksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_museum` int(11) DEFAULT NULL,
  `id_kategori_koleksi` int(11) DEFAULT NULL,
  `nama_koleksi` varchar(50) NOT NULL,
  `deskripsi_koleksi` text NOT NULL,
  `tempat_asal_koleksi` varchar(50) NOT NULL DEFAULT '-',
  `tempat_temuan_koleksi` varchar(50) NOT NULL DEFAULT '-',
  `tahun_pemakaian_koleksi` varchar(50) NOT NULL DEFAULT '-',
  `foto_koleksi` varchar(100) NOT NULL DEFAULT 'no_image.jpg',
  PRIMARY KEY (`id_koleksi`),
  UNIQUE KEY `id_koleksi` (`id_koleksi`),
  KEY `id_museum` (`id_museum`),
  KEY `id_kategori` (`id_kategori_koleksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `koleksi_museum`
--

INSERT INTO `koleksi_museum` (`id_koleksi`, `id_museum`, `id_kategori_koleksi`, `nama_koleksi`, `deskripsi_koleksi`, `tempat_asal_koleksi`, `tempat_temuan_koleksi`, `tahun_pemakaian_koleksi`, `foto_koleksi`) VALUES
(1, 1, 5, 'Porcelain Vase', 'With peony design which was influenced from China and they appreciate very much, which make have a lot of meaning, such as a symbol of spring season, king of flowers, love, richness, honor, and good luck. In Indonesia, a vase like this often probably as an heirloom that heritage generation to generation.', 'Vietnam', 'Jakarta', '15th Century', 'Porcelain_Vase.jpg'),
(2, 4, 4, 'Singosari Head', 'Of the heavily damaged image only the head and part of the body remain. Near the left shoulder is what looks to be a fly whisk (camara). The inscription on the upper left part of the back support reads: ‘Bhagavan Marici Maharshi 1’, which identifies the figure as the Great Sage Marici, one of seven sages known from Indian mythology. It is possible that all seven sages were represented at Singosari and that this is number 1.', 'Singosari, East Java', 'Malang,East Java', '13th Century', 'singosari_head.jpg'),
(3, 4, 2, 'Sitting Diety', 'Statue of a deity or Bodhisattva sitting cross-legged on a lotus seat with hands in the gesture of meditation (dhyanamudra). The deity is richly decorated with a crown, a diadem, ear ornaments, necklaces, armbands, bracelets, a sacred cord with five strings of pearls and a belt.', 'Singosari, East Java', 'Malang,East Java', '13th Century', 'sitting_diety.jpg'),
(4, 2, 5, 'Surya Pedestal', 'Rectangular pedestal with seven horses, the heads of which have been chopped off. On the sides of the pedestal are the wheels of the carriage they are supposed to draw. A lotus flower with four large petals and four smaller ones in between is depicted in the centre of the wheels instead of spokes. The horses are wearing strings of pearls around their necks. The ones on the sides have manes and long outstretched tails. Between the legs of the horses are foliate motifs.', 'Singosari, East Java', 'Malang,East Java', '13th Century', 'surya_pedestal.jpg'),
(5, 1, 6, 'Kendi', 'Kendi ini ditemukan di tanah Britania Raya', '-', '-', '-', 'kendi.jpg'),
(6, 4, 9, 'Stone Head', 'Yaya ya namanya stone head', '-', '-', '-', 'stone_head.jpg'),
(7, 1, 8, 'Spirit Ship', 'Kapal ini dijual mahal lho', '-', '-', '-', 'spirit_ship.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `partisipan_museum`
--

CREATE TABLE IF NOT EXISTS `partisipan_museum` (
  `id_museum` int(11) NOT NULL AUTO_INCREMENT,
  `username_museum` varchar(50) NOT NULL,
  `pass_museum` varchar(32) NOT NULL,
  PRIMARY KEY (`id_museum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `partisipan_museum`
--

INSERT INTO `partisipan_museum` (`id_museum`, `username_museum`, `pass_museum`) VALUES
(1, 'nasional_indonesia', '93c085457f3632f044414e0f57e311d0'),
(2, 'bank_indonesia', '761a7ff93a6480dc30a2931f86d6ef17'),
(3, 'seni_rupa_dan_keramik', 'a9bfa55f1bf1a67b54f664460ce19361'),
(4, 'brawijaya', '86b5e79f3fad25cad9a0b5456cb7cd3a'),
(5, 'vredeburg', '280843c75b26c54b907dc1963726d2b3'),
(6, 'pangeran_diponegoro', '19cb1d016ddb9b9aa88f62fad0ce1a5d'),
(7, 'biologi_ugm', '512d4bab5a93ec1e2d0e2cc3310b8fea');

-- --------------------------------------------------------

--
-- Table structure for table `profil_museum`
--

CREATE TABLE IF NOT EXISTS `profil_museum` (
  `id_museum` int(11) NOT NULL,
  `nama_museum` varchar(100) NOT NULL,
  `deskripsi_museum` text,
  `alamat_museum` varchar(100) NOT NULL DEFAULT '-',
  `akses_ke_museum` text,
  `telp_museum` varchar(20) NOT NULL DEFAULT '-',
  `fax_museum` varchar(20) NOT NULL DEFAULT '-',
  `email_museum` varchar(50) NOT NULL DEFAULT '-',
  `url_museum` varchar(50) NOT NULL DEFAULT '-',
  `twitter_museum` varchar(30) NOT NULL DEFAULT '-',
  KEY `id_museum` (`id_museum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_museum`
--

INSERT INTO `profil_museum` (`id_museum`, `nama_museum`, `deskripsi_museum`, `alamat_museum`, `akses_ke_museum`, `telp_museum`, `fax_museum`, `email_museum`, `url_museum`, `twitter_museum`) VALUES
(1, 'Museum Nasional', 'Museum Nasional Indonesia merupakan museum yang merepresentasikan seluruh budaya dan peninggalan sejarah di Indonesia. Berdiri pada tahun 1950, Museum Indonesia telah mencatat lebih dari 100.000 artifak yang masih terawat dengan baik.', 'Jalan Medan Merdeka Barat 12, Jakarta Pusat', '', '+62-21-3811551', '3447778', 'museumnasional@yahoo.co.id', 'museumnasional.or.id', 'MuseumNasional'),
(2, 'Museum Bank Indonesia', 'Museum yang menyimpan record sejarah perkembangan mata uang di Indonesia', 'Pokoknya deket sama kota tua', NULL, '-', '-', '-', '-', '-'),
(3, 'Museum Seni Rupa dan Keramik', NULL, '-', NULL, '-', '-', '-', '-', '-'),
(4, 'Museum Brawijaya', NULL, '-', NULL, '-', '-', '-', '-', '-'),
(5, 'Museum Vredeburg', NULL, '-', NULL, '-', '-', '-', '-', '-'),
(6, 'Museum Pangeran Diponegoro', NULL, '-', NULL, '-', '-', '-', '-', '-'),
(7, 'Museum Biologi UGM', NULL, '-', NULL, '-', '-', '-', '-', '-');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita_museum`
--
ALTER TABLE `berita_museum`
  ADD CONSTRAINT `berita_museum_ibfk_1` FOREIGN KEY (`id_museum`) REFERENCES `partisipan_museum` (`id_museum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event_museum`
--
ALTER TABLE `event_museum`
  ADD CONSTRAINT `event_museum_ibfk_1` FOREIGN KEY (`id_museum`) REFERENCES `partisipan_museum` (`id_museum`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `event_museum_ibfk_2` FOREIGN KEY (`id_kategori_event`) REFERENCES `kategori_event` (`id_kategori_event`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `koleksi_museum`
--
ALTER TABLE `koleksi_museum`
  ADD CONSTRAINT `koleksi_museum_ibfk_1` FOREIGN KEY (`id_museum`) REFERENCES `partisipan_museum` (`id_museum`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `koleksi_museum_ibfk_2` FOREIGN KEY (`id_kategori_koleksi`) REFERENCES `kategori_koleksi` (`id_kategori_koleksi`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `profil_museum`
--
ALTER TABLE `profil_museum`
  ADD CONSTRAINT `profil_museum_ibfk_1` FOREIGN KEY (`id_museum`) REFERENCES `partisipan_museum` (`id_museum`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
