-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 09, 2021 at 12:34 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asrama`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `file` varchar(128) NOT NULL,
  `isi` text NOT NULL,
  `tgl_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `judul`, `file`, `isi`, `tgl_post`) VALUES
(1, 'Kunjungan', 'gambar1.jpg', 'Kunjungan pada hari pertama', '2021-02-06 17:00:00'),
(2, ' Kunjungan Kedua', 'personal1.png', 'Kunjungan pada kedua ', '2021-02-09 12:31:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id_galeri` int(11) NOT NULL,
  `file` varchar(128) NOT NULL,
  `judul_foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_galeri`, `file`, `judul_foto`) VALUES
(1, 'personal.png', '    gambar 1 adalah'),
(2, 'gambar2.jpg', 'gambar 2'),
(3, 'gambar3.jpg', 'gambar 3'),
(4, 'gambar4.jpg', 'gambar 4'),
(5, 'gambar5.jpg', 'gambar 5'),
(6, 'gambar6.jpg', 'gambar 6'),
(7, 'gambar7.jpg', 'gambar 7'),
(8, 'gambar8.jpg', 'gambar 8'),
(9, 'gambar9.jpg', 'gambar 9');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `subjek` varchar(128) NOT NULL,
  `pesan` text NOT NULL,
  `tgl_pesan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`id_pesan`, `nama`, `email`, `subjek`, `pesan`, `tgl_pesan`) VALUES
(1, 'Fadhil', 'fadhil@gmail.com', 'Saran', 'Memberikan saran', '2021-02-09 06:09:58'),
(3, 'Rama', 'rama@gmail.com', 'ngopi', 'enak', '2021-02-08 23:15:09'),
(4, 'Ramadddd', 'rama@gmail.com', 'ngopi', 'enak', '2021-02-08 23:15:32'),
(5, 'Ramadddd', 'rama@gmail.com', 'ngopi', 'enak', '2021-02-08 23:15:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site`
--

CREATE TABLE `tbl_site` (
  `id_site` int(11) NOT NULL,
  `file` varchar(128) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_site`
--

INSERT INTO `tbl_site` (`id_site`, `file`, `judul`, `isi`) VALUES
(1, '', '   Tentang', 'Berawal pada cerita di tahun 1950. Masa dimana masih berupa gundukan tanah nan tak berpenghuni. Masa itu KPKS (Keluarga Pelajar Kalimantan Selatan) memutuskan untuk membeli sebidang tanah di Samirono Baru Yogyakarta. Sebidang tanah itu hampir saja hilang status kepemilikannya gara - gara ketiadaan sertifikat.Untuk itu, KAKABAYO (Karukunan Tatuha Banjar Yogyakarta) melalui Bapak H.A. Basuni memberitahukan kepada Pemerintah Daerah Tingkat I Kalimantan Selatan. Atas usaha Wakil Gubernur Bapak Ir. H.M. Said sertifikat bisa diperoleh, bahkan setelah ditinjau oleh Biro Kesejahteraan Rakyat, disetujui tanah tersebut akan didirikan sebuah Asrama Mahasiswa Kalimantan Selatan, seharga lebih kurang Rp. 100 Juta yang dikerjakan oleh pemborong dari Surabaya. Selama proses pembangunan AMKS Pangeran Antasari ini, pengawasan diserahkan kepada KATABAYO bersama-sama dengan PMKS (Perhimpunan Mahasiswa Kalimantan Selatan) Konsulat Yogyakarta. Setelah selesai, Asrama yang peletakkan batu pertamanya oleh Wakil Gubernur Kalimantan Selatan Bapak Ir. H.M. Said itu, pada tanggal 29 Oktober 1983 diresmikan penggunaannya oleh Gubernur Kepala Daerah Tingkat I Kalimantan Selatan Bapak Mistar Tjokro Koesoemo. Sebelumnya, nama Pangeran Antasari pernah pula dipakai untuk Asrama Mahasiswa Kalimantan Selatan yang terletak di seberang bioskop Permata di Jalan Sultan Agung Yogyakarta. Tetapi kemudian Asrama itu bubar, karena dibeli oleh Pemerintah Daerah Tingkat I Sulawesi Selatan.Sementara itu Asrama Mahasiswa Kalimantan Selatan di Jalan Gambir No. 4 dan Jalan Krasak No. 1, juga telah berkali-kali digugat orang-orang tertentu. Rentetan kejadian itu mendorong Pemerintah daerah Tingkat I Kalimantan Selatan untuk segera membangun Asrama Mahasiswa Kalimantan Selatan Pangeran Antasari ini. Sedangkan nama Asrama di atas diusulkan oleh KATABAYO bersama PMKS Konsulat Yogyakarta kepada Pemerintah Daerah Tingkat I Kalimantan Selatan, oleh Pemda usul tersebut disetujui. Dengan demikian resmilah nama Pahlawan Nasional Pangeran Antasari menjadi nama Asrama Mahasiswa kalimantan Selatan yang terletak di jalan Samirono Baru No. 46 Yogyakarta. Perlu juga diketahui selama tanah bakal Asrama ini belum jelas statusnya, telah berjasa seorang tatuha Banjar untuk mempertahankan tanah tersebut sebagai milik Kalimantan Selatan, beliau adalah Bapak Sarpin, yang beralamat di Jalan Samirono baru No. 4 Yogyakarta. Kepemimpinan terus bergilir dan telah berpindah dari generasi ke generasi dari dari Mandataris ke-I Periode 1983-1984) hingga era Mandataris ke XXXVI 2019-2020). Telah 36 tahun lamanya sejak keorganisasian terbentuk, AMKS Pangeran Antasari Yogyakarta menjadi saksi lahirnya para putra daerah Kalimantan Selatan.Tempat mereka berkumpul dan saling berbagi seputar isu yang berkembang di tanah kelahiran Kalimantan Selatan tercinta.Semoga AMKS Pangeran Antasari Yogyakarta semakin mantap memberikan pencerahan bagi penghuninya ketika mengabdi pada daerah mereka. Aamien'),
(2, 'struktur.png', 'Struktur Organisasi', ''),
(3, '', 'Program Kerja', 'PROGRAM KERJA SEKRETARIS Mengelola sekretariat asrama Mengelola papan informasi asrama Meneglola perpustakkan dan perpustakaan mini asrama Mengarsipkan dokumentasi asrama Mengarsipkan surat masuk, keluar dan engumuman Membuat dan mencetak time schedule tiap departemen/bidang Membuat struktur kepengurusan Membuat buku profil anggota asrama Memebuat buku saku asrama Membuat kartu tanda anggota asrama Membuat pdh Sosialisasi sop Memperbaharui data base alumni Membuat daftar mandataris asrama Membuat dan mencetak foto keluarga asrama mengelola inventaris sekretaris BENDAHARA Menerima Pemasukan Keuangan Dari: 1. Uang Pangkal Anggota Asrama 2. Iuran Bulanan Kesra 3. Departemen Humas 4. Pengelola Petugas Konsumsi 5. Penjualan Koran Asrama, dsb 6. Nol spot Mengalokasikan Dana Kebutuhan Asrama: 1. Gaji Asisten Asrama 2. Pembayaran Listrik 3. Tagihan Telkom 4. Kegiatan/Kebutuhan Setiap DEPT 5. Iuran Kampung Samirono 6. Retribusi Sampah 7. Koran Kompas Membuat Laporan Bulanan Membuat Rekapitulasi Anggaran Penagihan Piutang Menerima Laporan Keuangan dari luar Bendahara Mengelola Estimasi Anggaran HUMAS Mengkoordinir warga asrama dalam kegiatan eksternal asrama Membantu menyelesaikan permasalahan dalam territorial asrama Mengadakan penerimaan anggota baru Administrasi Tamu Asrama 1. Mengkoordinir tamu 1. B. Mengaktifkan buku tamu 2. C. Melakukan pelaporan tamu ke aparat desa 3. D. Melaporkan jumlah uang dari tamu setiap bulannya 4. E. Membuat database tamu Pemberian Informasi asrama 1. Pengelolaan sosial media asrama 2. Pemberian informasi asrama melalui media cetak Mengelola inventaris Humas Kunjungan Alumni Asrama KESRA Mengadakan forum diskusi Latihan Maulid Habsyi Pembacaan Maulid Habsyi Tahsin Mengadakan pembacaan surah yasin tahlil serta asmaul husna dan tahsin Mengadakan english corner. Mengadakan hiburan bulanan. Mengelola inventaris kesra. Mengadakan ldk. Mengupayakan pemenuhan kebutuhan hiburan dan rekreasi untuk anggota asrama. Mengusahakan untuk memelihara dan melengkapi fasilitas peralatan kesehatan, olahraga, seni/budaya, agama, dan pendidikan. Hikmah Subuh KALINGKA Menjaga Kebersihan Dan Keindahan Lingkungan Asrama 1. Mengelola taman asrama 2. Mengelola kolam ikan 3. Mengkoordinir kebersihan WC dan kamar mandi asrama 4. Mengkoordinir piket kebersihan 5. Mengelola gudang asrama 6. Mengadakan kerja bakti kerja bakti 7. Mengadakan Kerja bakti akbar Menjaga Stabilitas Keamanan Dan Ketertiban Asrama 1. Mengkoordinir jaga malam 2. Memperbaiki peraturan tertulis dan mengoptimalkannya 3. Mengelola cctv asrama Mengelola, Melengkapi Dan Melaporkan Inventarisasi Asrama 1. Mengecek kondisi inventaris asrama 2. Merawat inventaris asrama 3. Mengkoordinir perbaikan inventaris asrama 4. Melengkapi perlengkapan inventaris kalingka 5. Membuat penomoran iventaris KEGIATAN TAHUNAN Diesnatalies AMKS Pangeran Antasari Ramadhan Hari jadi Provnsi Kalimantan Selatan Maulidul Rasul MAA AMKS Pangeran Antasari');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`) VALUES
(2, 'admin', '$2y$10$s1GQ.76WFvQfdMLwK2h/4u6sYmdnSMA8jfJ5qbAGgFKBd6XxQCsjS'),
(4, 'user', '$2y$10$/76D3nlJPPWdk7t0T.CMzuSe/efTfruMTTXSQv7aVASFoILliXXUS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tbl_site`
--
ALTER TABLE `tbl_site`
  ADD PRIMARY KEY (`id_site`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_site`
--
ALTER TABLE `tbl_site`
  MODIFY `id_site` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
