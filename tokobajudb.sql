-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 14, 2014 at 03:24 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tokobajudb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintbl`
--

CREATE TABLE IF NOT EXISTS `admintbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admintbl`
--

INSERT INTO `admintbl` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'fandi', 'fandi'),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `admintblcontoh`
--

CREATE TABLE IF NOT EXISTS `admintblcontoh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `admintblcontoh`
--


-- --------------------------------------------------------

--
-- Table structure for table `barangbaru`
--

CREATE TABLE IF NOT EXISTS `barangbaru` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `deskripsi` text NOT NULL,
  `warna` varchar(25) NOT NULL,
  `ukuran` varchar(15) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `harga` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangbaru`
--

INSERT INTO `barangbaru` (`id`, `nama`, `deskripsi`, `warna`, `ukuran`, `kategori`, `harga`, `stock`, `gambar`) VALUES
(30, 'Celana CBR', 'www.google.com', 'Hitam,Cokelat', 'S,M,L', 'Celana Pendek', 75000, 10, '22.jpg'),
(29, 'Celana Cargo', 'www.google.com', 'Abu-abu,Hitam,Biru', 'M,L,XL', 'Celana Pendek', 70000, 10, '21.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `barangtbl`
--

CREATE TABLE IF NOT EXISTS `barangtbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) NOT NULL,
  `deskripsi` text NOT NULL,
  `warna` varchar(25) NOT NULL,
  `ukuran` varchar(15) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `harga` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `barangtbl`
--

INSERT INTO `barangtbl` (`id`, `nama`, `deskripsi`, `warna`, `ukuran`, `kategori`, `harga`, `stock`, `gambar`) VALUES
(1, 'Topi Bone', ' www.tokopedia.com                  ', 'Blue, Black, White, Green', '-', 'Accesories', 115000, 5, 'BE001.png'),
(2, 'Cardigan Sleveless', '  www.stuburt.com                           ', 'Abu-abu, Hitam, Biru', 'M, S, L, XL', 'Cardigan', 78500, 100, 'BC002.png'),
(3, 'Celana Boxer', '  WW.TOKOPEDIA.COM                  ', 'Merah, Hitam, Putih', 'M, L', 'Celana Pendek', 55000, 0, 'BB003.png'),
(4, 'LD Belissa Aubergine', '  www.theremedi.co.uk                  ', 'Biru, Ungu, Hitam, Merah', 'M, L, XL', 'Long Dress', 185000, 5, 'BL004.png'),
(5, 'Blythe Taper Jeans', '   www.tokopedia.com                           ', 'Blue, Black, White', 'L, XL', 'Jeans', 289000, 5, 'BJ005.png'),
(6, 'Polo Shirt', '   www.lokakmurah.com                           ', 'Putih, Hitam', 'L, XL', 'Kaos / T-Shirt', 75000, 0, 'Polo01.png'),
(7, 'Kaos Oblong', 'www.google.com', 'Putih', 'M,L,XL', 'Kaos / T-Shirt', 50000, 5, 'kaos4.jpg'),
(8, 'Kaos Sukses', 'www.google.com', 'hitam', 'M.L.XL', 'Kaos / T-Shirt', 60000, 5, 'kaos1.jpg'),
(9, 'Kaos Transformers', 'www.google.com', 'Putih', 'M,L,XL', 'Kaos / T-Shirt', 70000, 4, 'kaos3.jpg'),
(10, 'Topi Hip-hop', 'www.google.com', 'Hitam', 'L,XL', 'Accesories', 50000, 10, '12.jpg'),
(11, 'Jeans Pencil', 'www.google.com', 'biru', 'M,L', 'Jeans', 85000, 10, '1.jpg'),
(12, 'Jeansn Slim Fit', 'www.google.com', 'Biru', 'M,L,XL', 'Jeans', 90000, 10, '2.jpg'),
(13, 'DC Jeans', 'www.google.com', 'Hitam', 'M,L,XL', 'Jeans', 75000, 10, '3.jpg'),
(14, 'Jeans Pendek ', 'www.google.com', 'Pink', 'S,M,L', 'Jeans', 55000, 10, '4.jpg'),
(15, 'Cardigan Cokelat', 'www.google.com', 'Cokelat', 'M,L,XL', 'Cardigan', 80000, 10, '5.jpg'),
(16, 'Cardigan Hitam', 'www.google.com', 'Hitam', 'M,L,XL', 'Cardigan', 100000, 10, '6.jpg'),
(17, 'Cardigan Abu-abu', 'www.google.com', 'Abu-abu', 'M,L,XL', 'Cardigan', 95000, 10, '8.jpg'),
(18, 'Topi Cokelat', 'www.google.com', 'Cokelat', '-', 'Accesories', 40000, 10, '9.jpg'),
(19, 'Topi Vespa', 'www.google.com', 'Hitam', '-', 'Accesories', 45000, 10, '10.jpg'),
(20, 'Topi Abu-abu', 'www.google.com', 'Abu-abu', '-', 'Accesories', 40000, 10, '11.jpg'),
(21, 'Jaket Kulit Cokelat', 'www.google.com', 'Cokelat', 'M,L,XL', 'Jaket', 300000, 10, '13.jpg'),
(22, 'Jaket Harajuku ', 'www.google.com', 'Hitam,Cokelat,Merah', 'M,L,XL', 'Jaket', 130000, 10, '14.jpg'),
(23, 'Jekt Baseball Merah', 'www.google.com', 'Merah', 'M,L,XL', 'Jaket', 160000, 10, '15.jpg'),
(24, 'Jaket Baseball Biru', 'www.google.com', 'Biru', 'M,L,XL', 'Jaket', 160000, 10, '16.jpg'),
(25, 'Jaket Kulit Riding', 'www.google.com', 'Hitam,Cokelat', 'M,L,XL', 'Jaket', 350000, 10, '17.jpg'),
(26, 'Long Dress Rajut', 'www.google.com', 'Hijau & Hitam', 'S,M', 'Long Dress', 250000, 10, '18.jpg'),
(27, 'Beaded Long Dress ', 'www.google.com', 'Hitam,Putih,Merah', 'S,M,L', 'Long Dress', 300000, 10, '19.jpg'),
(28, 'Long Dress Pink', 'www.google.com', 'Pink', 'S,M,L', 'Long Dress', 250000, 10, '20.jpg'),
(29, 'Celana Cargo', 'www.google.com', 'Abu-abu,Hitam,Biru', 'M,L,XL', 'Celana Pendek', 70000, 10, '21.jpg'),
(30, 'Celana CBR', 'www.google.com', 'Hitam,Cokelat', 'S,M,L', 'Celana Pendek', 75000, 10, '22.jpg'),
(31, 'Hot Pants', 'www.google.com', 'Abu-abu,Hitam,Biru', 'S,M,L', 'Celana Pendek', 80000, 10, '22.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `downloadtbl`
--

CREATE TABLE IF NOT EXISTS `downloadtbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `url` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `downloadtbl`
--

INSERT INTO `downloadtbl` (`id`, `judul`, `deskripsi`, `url`) VALUES
(1, 'Katalog Produk 2013', 'Informasi mengenai produk - produk terbaru tahun 2013, lengkap beserta harga, merk tipe, dan lain - lain.', 'download/KATALOG.PDF'),
(2, 'Formulir Reseller', 'Anda dapat menjadi reseller di toko kami dengan mengisi formulir yang bisa Anda download, dan kirim melalui email !!!', 'download/FORMULIR.PDF');

-- --------------------------------------------------------

--
-- Table structure for table `kategoritbl`
--

CREATE TABLE IF NOT EXISTS `kategoritbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `kategoritbl`
--

INSERT INTO `kategoritbl` (`id`, `kategori`) VALUES
(1, 'Accesories'),
(2, 'Kaos / T-Shirt'),
(3, 'Jeans'),
(4, 'Celana Pendek'),
(5, 'Cardigan'),
(6, 'Long Dress'),
(7, 'Jaket Parasut');

-- --------------------------------------------------------

--
-- Table structure for table `newstbl`
--

CREATE TABLE IF NOT EXISTS `newstbl` (
  `tanggal` date NOT NULL,
  `judul` varchar(50) NOT NULL,
  `news` text NOT NULL,
  PRIMARY KEY (`judul`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newstbl`
--

INSERT INTO `newstbl` (`tanggal`, `judul`, `news`) VALUES
('2014-07-02', 'New Items', 'Fandi Collection membuka Shop baru diwilayah semarang'),
('2014-07-04', 'pameran', 'Akan Diadakan pameran Disemarang'),
('2014-07-01', 'Stock', 'Fandi Collection akan mengupload Stock baru ke website');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggantbl`
--

CREATE TABLE IF NOT EXISTS `pelanggantbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `email` text NOT NULL,
  `telepon` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `pelanggantbl`
--

INSERT INTO `pelanggantbl` (`id`, `nama`, `alamat`, `email`, `telepon`, `username`, `password`) VALUES
(1, 'admin', 'jalan baru', 'admin@yahoo.com', '-', 'admin', 'admin'),
(2, 'adham', 'plamongan', 'adham@rocketmail.com', '1234567', 'sojoyenjoy', 'sojoyenjoy'),
(17, 'fandiahmad', 'jalan kapas timur', 'fandiahmadrizal@gmail.com', '089667917114', 'fandi', 'fandi'),
(18, 'asd', 'asfasf', 'asd@gmail.com', '099999', 'asd', 'asd'),
(19, 'dfg', 'jalan', 'dfg@gmail.com', '09861287', 'dfg', '38d7355701b6f3760ee49852904319c1'),
(20, 'ahmad', 'jalan kapas timur', 'fandiahmadrizal@gmail.com', '6581783', 'ahmad', '61243c7b9a4022cb3f8dc3106767ed12'),
(21, 'joko', 'serang', 'joko@gmail.com', '089111123', 'joko', 'joko'),
(22, 'rizal', 'jalan kapas raya', 'rizal@gmail.com', '6583435', 'rizal', 'rizal'),
(23, 'qwertyuiop', 'kampung jaya', 'qwerty@gmail.com', '089888888888', 'qwertyuiop', 'qwertyuiop'),
(24, 'qaz', 'qwerty', 'qaz@gmail.com', '1234567', 'qaz', 'qaz'),
(25, 'po', 'asdf', 'po@gmail.com', '12345678', 'po', 'po'),
(26, 'kopet', 'jalan raya', 'kopet@gmail.com', '099999999', 'kopet', 'kopet'),
(27, 'candra', 'jalan merapi', 'candra@gmail.com', '089111123', 'candra', 'cndra');

-- --------------------------------------------------------

--
-- Table structure for table `testimonialtbl`
--

CREATE TABLE IF NOT EXISTS `testimonialtbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `testimonial` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `testimonialtbl`
--

INSERT INTO `testimonialtbl` (`id`, `nama`, `email`, `tanggal`, `testimonial`) VALUES
(2, 'ryanto widjaja wiguna', '-', '2013-05-16', 'Thanks ya, banbao nya sudah sampai, pelayanan ok, cepat tanggap juga, overall ga ush ragu belanja di sini untuk anak kesayangan...'),
(3, 'desi ariyanti', '-', '2013-05-03', 'Thanks buat maxi boutique barang ny bagus n memuaskan. Bakalan beli lg ni buat anak tercrnta :)'),
(4, 'martin kwang', '-', '2013-05-08', 'Thanks ya sis paketnya uda smpe..cpt ya..order kmrn hr ni uda dtg... Bgus barangnya...'),
(5, 'bundanya rakha', '-', '2013-05-15', 'Baru nemu web ini kemaren,barangnya bagus2 trus coba2 pesan ternyata responnya cepet loh.kemaren pesen eh hari ini paketnya udh sampe.makasi ya..pelayanannya bagus n cepet.well recomended deh buat bunda2 yg sedang cari brg buat anaknya drpd cape2 keluar rumah'),
(14, 'ryanto widjaja wiguna', '-', '2013-05-21', 'Thanks ya, banbao nya sudah sampai, pelayanan ok, cepat tanggap juga, overall ga ush ragu belanja di sini untuk anak kesayangan...');

-- --------------------------------------------------------

--
-- Table structure for table `transaksirincitbl`
--

CREATE TABLE IF NOT EXISTS `transaksirincitbl` (
  `notransaksi` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksirincitbl`
--

INSERT INTO `transaksirincitbl` (`notransaksi`, `username`, `id`, `nama`, `harga`, `jumlah`, `subtotal`) VALUES
('104', 'fandi', 2, 'Cardigan Sleveless', 78500, 1, 78500),
('104', 'fandi', 1, 'Topi Bone', 115000, 1, 115000),
('104', 'fandi', 6, 'Polo Shirt', 75000, 1, 75000),
('106', 'rizal', 3, 'Celana Boxer', 55000, 1, 55000),
('106', 'rizal', 2, 'Cardigan Sleveless', 78500, 1, 78500),
('107', 'fandi', 18, 'Topi Cokelat', 40000, 1, 40000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksitbl`
--

CREATE TABLE IF NOT EXISTS `transaksitbl` (
  `notransaksi` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`notransaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=108 ;

--
-- Dumping data for table `transaksitbl`
--

INSERT INTO `transaksitbl` (`notransaksi`, `username`, `status`) VALUES
(104, 'fandi', 1),
(105, 'joko', 0),
(106, 'rizal', 0),
(107, 'fandi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `visitortbl`
--

CREATE TABLE IF NOT EXISTS `visitortbl` (
  `ip` int(11) NOT NULL,
  `time` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`time`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1407857470 ;

--
-- Dumping data for table `visitortbl`
--

INSERT INTO `visitortbl` (`ip`, `time`) VALUES
(0, 1368498420),
(0, 1368498503),
(0, 1368498733),
(0, 1368499016),
(0, 1368499042),
(0, 1368499194),
(0, 1368499579),
(0, 1368499593),
(0, 1368499638),
(0, 1368499664),
(11, 1368500516),
(1, 1407857469);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
