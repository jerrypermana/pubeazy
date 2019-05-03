-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Mei 2019 pada 07.11
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conference`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account_bank`
--

CREATE TABLE `account_bank` (
  `kode_bank` int(3) NOT NULL,
  `rekening` int(50) NOT NULL,
  `nama_bank` varchar(100) NOT NULL,
  `atas_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `account_bank`
--

INSERT INTO `account_bank` (`kode_bank`, `rekening`, `nama_bank`, `atas_nama`) VALUES
(1, 861213121, 'Bank Mandiri', 'Muhammad Jerry Permana '),
(2, 32432422, 'Bank BNI', 'PubEazy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `conference`
--

CREATE TABLE `conference` (
  `konferensi_id` int(11) NOT NULL,
  `nama_konferensi` varchar(250) NOT NULL,
  `penyelenggara` varchar(250) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `ruang_id` int(11) NOT NULL,
  `show_dashboard` smallint(1) NOT NULL DEFAULT '0',
  `input_date` date NOT NULL,
  `last_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `conference`
--

INSERT INTO `conference` (`konferensi_id`, `nama_konferensi`, `penyelenggara`, `start_date`, `end_date`, `ruang_id`, `show_dashboard`, `input_date`, `last_update`) VALUES
(5, 'Strategi Modal ', 'Universitas Indonesia', '2019-04-17', '2019-04-19', 2, 0, '2019-04-02', '2019-04-05'),
(6, '1 St  Letter Of Acceptance   International Conference On Economics, Business, Accounting & Management (ICEBAM) 2018', 'Ekonomi Bisnis Universitas Syiah Kuala', '2019-04-19', '2019-04-23', 4, 1, '2019-04-05', '2019-04-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `download`
--

CREATE TABLE `download` (
  `download_id` smallint(2) NOT NULL,
  `deskripsi_atas` text NOT NULL,
  `deksripsi_bawah` text NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_jam`
--

CREATE TABLE `jadwal_jam` (
  `jam_id` int(11) NOT NULL,
  `jam` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_jam`
--

INSERT INTO `jadwal_jam` (`jam_id`, `jam`) VALUES
(1, '08.00-10.00 WIB'),
(2, '10.00-12.00 WIB'),
(3, '12.00-14.00 WIB'),
(4, '14.00-16.00 WIB'),
(5, '16.00-18.00 WIB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `loa`
--

CREATE TABLE `loa` (
  `loa_id` int(11) NOT NULL,
  `paper_id` int(11) NOT NULL,
  `status` smallint(1) NOT NULL DEFAULT '0',
  `tanggal_verifikasi` date NOT NULL,
  `input_date` date NOT NULL,
  `last_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `loa`
--

INSERT INTO `loa` (`loa_id`, `paper_id`, `status`, `tanggal_verifikasi`, `input_date`, `last_update`) VALUES
(1, 55, 1, '2019-04-30', '2019-04-30', '2019-04-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `realname` varchar(100) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `group_session` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`admin_id`, `email`, `realname`, `password`, `group_session`) VALUES
(1, 'admin@gmail.com', 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, '', 'Jerry Permana', '574623b164e885df47f21d2ea7672575', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `loi`
--

CREATE TABLE `loi` (
  `id_loi` int(11) NOT NULL,
  `paper_id` int(11) NOT NULL,
  `status` smallint(1) NOT NULL,
  `tanggal_verifikasi` date NOT NULL,
  `input_date` date NOT NULL,
  `last_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `loi`
--

INSERT INTO `loi` (`id_loi`, `paper_id`, `status`, `tanggal_verifikasi`, `input_date`, `last_update`) VALUES
(2, 55, 1, '2019-04-30', '2019-04-29', '2019-04-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_email`
--

CREATE TABLE `mst_email` (
  `email_id` smallint(1) NOT NULL,
  `SMTP_Host` varchar(100) NOT NULL,
  `SMTP_User` varchar(100) NOT NULL,
  `SMTP_Pass` varchar(100) NOT NULL,
  `SMTP_Port` int(11) NOT NULL,
  `Mail_Protocol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mst_email`
--

INSERT INTO `mst_email` (`email_id`, `SMTP_Host`, `SMTP_User`, `SMTP_Pass`, `SMTP_Port`, `Mail_Protocol`) VALUES
(1, 'smtp.gmail.com', 'pubeazy.conf@gmail.com', 'blackberry123456', 465, 'smtp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_keyword`
--

CREATE TABLE `mst_keyword` (
  `keyword_id` int(11) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `input_date` date NOT NULL,
  `last_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mst_keyword`
--

INSERT INTO `mst_keyword` (`keyword_id`, `keyword`, `input_date`, `last_update`) VALUES
(29, 'ACCOUNTING', '2019-04-02', '2019-04-02'),
(30, 'BUSINESS', '2019-04-02', '2019-04-02'),
(31, 'MANAGEMENT', '2019-04-06', '2019-04-06'),
(35, 'ECONOMIC', '2019-04-13', '2019-04-13'),
(36, 'DISTRIBUSI', '2019-04-25', '2019-04-25'),
(37, 'MODA TRANSPORTASI', '2019-04-25', '2019-04-25'),
(38, 'EXCEL', '2019-04-25', '2019-04-25'),
(39, 'LPG 3 KG', '2019-04-25', '2019-04-25'),
(40, 'TES', '2019-04-25', '2019-04-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_ruang`
--

CREATE TABLE `mst_ruang` (
  `ruang_id` int(11) NOT NULL,
  `nama_ruang` varchar(255) NOT NULL,
  `kuota` int(5) NOT NULL,
  `input_date` date NOT NULL,
  `last_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mst_ruang`
--

INSERT INTO `mst_ruang` (`ruang_id`, `nama_ruang`, `kuota`, `input_date`, `last_update`) VALUES
(1, 'Ruang A', 100, '2019-03-14', '2019-03-14'),
(2, 'Ruang B', 50, '2019-03-14', '2019-03-14'),
(3, 'Ruang C', 20, '2019-03-14', '2019-03-14'),
(4, 'Ruang Theater', 50, '2019-03-14', '2019-03-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_subject`
--

CREATE TABLE `mst_subject` (
  `subject_id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `input_date` date NOT NULL,
  `last_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mst_subject`
--

INSERT INTO `mst_subject` (`subject_id`, `subject`, `input_date`, `last_update`) VALUES
(9, 'ACCOUNTING', '2019-04-02', '2019-04-02'),
(10, 'MANAGEMENT', '2019-04-02', '2019-04-02'),
(11, 'ECONOMICS ', '2019-04-06', '2019-04-06'),
(12, 'TES', '2019-04-18', '2019-04-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_konferensi`
--

CREATE TABLE `paket_konferensi` (
  `paket_id` int(11) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `biaya` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket_konferensi`
--

INSERT INTO `paket_konferensi` (`paket_id`, `nama_paket`, `biaya`) VALUES
(1, 'Full Package Konferensi', '1.000.000'),
(2, 'Half Package Konferensi', '700.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paper`
--

CREATE TABLE `paper` (
  `paper_id` int(11) NOT NULL,
  `konferensi_id` int(11) NOT NULL,
  `id_presenter` bigint(11) NOT NULL,
  `judul` text NOT NULL,
  `abstrak` text NOT NULL,
  `komentar` text NOT NULL,
  `file_paper` varchar(255) NOT NULL,
  `file_fullpaper` varchar(255) NOT NULL,
  `full_paper` smallint(1) NOT NULL DEFAULT '0',
  `v_paper` smallint(1) NOT NULL,
  `v_akhir` smallint(1) NOT NULL DEFAULT '0',
  `input_date` date NOT NULL,
  `last_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paper`
--

INSERT INTO `paper` (`paper_id`, `konferensi_id`, `id_presenter`, `judul`, `abstrak`, `komentar`, `file_paper`, `file_fullpaper`, `full_paper`, `v_paper`, `v_akhir`, `input_date`, `last_update`) VALUES
(55, 6, 7, 'ANALISIS BIAYA PASOKAN LIQUIFIED PETROLEUM GAS 3 KG BERSUBSIDI MENGGUNAKAN METODE PROGRAMA LINIER.', 'Sistem distribusi liquified petroleum gas (lpg) tabung 3 kg dikendalikan oleh kebijakan pemerintah yang mengatur setiap entitas rantai pasok, dimana pelaksanaannya selalu dikendalikan dan diawasi. sistem ini didistribusikan dengan sistem tertutup (outbound chanel), terdiri atas stasiun pengangkutan dan pengisian bulk elpiji (sppbe), serta distribution channel (agen dan pangkalan/ sub agen). tingginya biaya transportasi lpg tabung 3 kg bersubsidi saat ini menjadi penyebab terjadinya lonjakan harga pada konsumen akhir. umumnya dikarenakan ketidakteraturan distribusi sehingga mempengaruhi faktor jarak pendistribusian. penelitian ini bertujuan untuk menganalisis biaya minimum transportasi yang feasibel berdasarkan banyaknya unit tabung yang akan didistribusikan dari supply point oleh agen/penyalur ke pangkalan/sub penyalur di wilayah kabupaten aceh jaya. hasil analisis data pada penelitian ini menggunakan metode programa linier pada excel solver. dengan metode tersebut menunjukkan bahwa biaya minimum total yang feasible adalah sebesar rp. 190.453.083,-, dari yang sebelumnya sebesar rp. 499.134.625,- dan membentuk suatu keteraturan pendistribusian lpg tabung 3 kg bersubsidi di wilayah kabupaten aceh jaya. ', 'Upload Full Paper', 'Abstrak_2019-04-25_RJI-1-0001.pdf', 'FullPaper_2019-04-30_ RJI-1-0001.docx', 1, 1, 1, '2019-04-25', '2019-04-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paper_jadwal`
--

CREATE TABLE `paper_jadwal` (
  `jadwal_id` int(11) NOT NULL,
  `paper_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `jam_id` int(11) NOT NULL,
  `kuota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paper_jadwal`
--

INSERT INTO `paper_jadwal` (`jadwal_id`, `paper_id`, `date`, `jam_id`, `kuota`) VALUES
(4, 55, '2019-04-20', 2, 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paper_keyword`
--

CREATE TABLE `paper_keyword` (
  `paper_id` int(11) NOT NULL,
  `keyword_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paper_keyword`
--

INSERT INTO `paper_keyword` (`paper_id`, `keyword_id`) VALUES
(53, 36),
(53, 37),
(53, 38),
(53, 39),
(54, 36),
(54, 37),
(54, 38),
(54, 39),
(55, 36),
(55, 38),
(55, 39);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paper_subject`
--

CREATE TABLE `paper_subject` (
  `paper_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paper_subject`
--

INSERT INTO `paper_subject` (`paper_id`, `subject_id`) VALUES
(55, 10),
(55, 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(11) NOT NULL,
  `member_id` varchar(20) NOT NULL,
  `realname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `gender` smallint(1) NOT NULL,
  `instansi` varchar(250) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `group_session` varchar(25) NOT NULL,
  `input_date` date NOT NULL,
  `last_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `member_id`, `realname`, `email`, `address`, `gender`, `instansi`, `no_hp`, `password`, `image`, `group_session`, `input_date`, `last_update`) VALUES
(1, 'RJI-2-0001', 'Saiful', 'jerrypermana@unsyiah.ac.id', 'Banda Aceh', 1, 'Unsyiah ', '085277772698', '827ccb0eea8a706c4c34a16891f84e7b', '', 'peserta', '2019-05-03', '2019-05-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `presenter`
--

CREATE TABLE `presenter` (
  `id_presenter` int(11) NOT NULL,
  `member_id` varchar(20) NOT NULL,
  `realname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` smallint(1) NOT NULL,
  `address` varchar(250) NOT NULL,
  `instansi` varchar(250) NOT NULL,
  `afiliasi` varchar(50) NOT NULL,
  `negara_afiliasi` varchar(50) NOT NULL,
  `alamat_afiliasi` varchar(250) NOT NULL,
  `url_orcid` varchar(250) NOT NULL,
  `url_profil` varchar(250) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `image` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `group_session` varchar(25) NOT NULL,
  `input_date` date NOT NULL,
  `last_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `presenter`
--

INSERT INTO `presenter` (`id_presenter`, `member_id`, `realname`, `email`, `gender`, `address`, `instansi`, `afiliasi`, `negara_afiliasi`, `alamat_afiliasi`, `url_orcid`, `url_profil`, `no_hp`, `image`, `password`, `group_session`, `input_date`, `last_update`) VALUES
(7, 'RJI-1-0001', 'Muhammad Jerry Permana', 'jerrypermanaa@gmail.com', 1, 'Banda Aceh Kuta alam', 'Universitas Syiah Kuala', 'Jakarta', 'Indonesia', 'Banda Aceh', 'http://localhost/pubeazy/pages/index.php?p=edit-presenter', 'http://localhost/pubeazy/pages/index.php?p=edit-presenter', '085277772698', 'IMAGE_RJI-1-0001.jpg', 'c20ad4d76fe97759aa27a0c99bff6710', 'presenter', '2019-04-25', '2019-05-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `speakers`
--

CREATE TABLE `speakers` (
  `speaker_id` smallint(2) NOT NULL,
  `speaker_name` varchar(100) NOT NULL,
  `institution` varchar(100) NOT NULL,
  `about_speaker` text NOT NULL,
  `image_speaker` varchar(100) NOT NULL,
  `input_date` date NOT NULL,
  `last_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `status_id` int(2) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`status_id`, `status`) VALUES
(1, 'Accepted'),
(2, 'Reject'),
(3, 'Revision Required');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_peserta`
--

CREATE TABLE `transaksi_peserta` (
  `transfer_id` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `konferensi_id` int(11) NOT NULL,
  `paket_id` int(11) NOT NULL,
  `nama_transfer` varchar(250) NOT NULL,
  `jumlah_transfer` varchar(50) NOT NULL,
  `kode_bank` int(4) NOT NULL,
  `tgl_transfer` date NOT NULL,
  `v_transfer` smallint(1) NOT NULL DEFAULT '0',
  `file_bukti` varchar(250) NOT NULL,
  `input_date` date NOT NULL,
  `last_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_presenter`
--

CREATE TABLE `transaksi_presenter` (
  `transfer_id` int(11) NOT NULL,
  `paper_id` int(11) NOT NULL,
  `biaya_conf` varchar(50) NOT NULL,
  `nama_transfer` varchar(250) NOT NULL,
  `jumlah_transfer` varchar(50) NOT NULL,
  `from_bank` varchar(50) NOT NULL,
  `kode_bank` int(4) NOT NULL,
  `tgl_transfer` date NOT NULL,
  `v_transfer` smallint(1) NOT NULL DEFAULT '0',
  `file_bukti` varchar(250) NOT NULL,
  `input_date` date NOT NULL,
  `last_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi_presenter`
--

INSERT INTO `transaksi_presenter` (`transfer_id`, `paper_id`, `biaya_conf`, `nama_transfer`, `jumlah_transfer`, `from_bank`, `kode_bank`, `tgl_transfer`, `v_transfer`, `file_bukti`, `input_date`, `last_update`) VALUES
(26, 55, '800.000', 'Jerry', '800.000', 'BNI', 1, '2019-04-29', 1, 'Transfer_2019-04-29_RJI-1-0001.jpg', '2019-04-25', '2019-04-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_bank`
--
ALTER TABLE `account_bank`
  ADD PRIMARY KEY (`kode_bank`);

--
-- Indexes for table `conference`
--
ALTER TABLE `conference`
  ADD PRIMARY KEY (`konferensi_id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`download_id`);

--
-- Indexes for table `jadwal_jam`
--
ALTER TABLE `jadwal_jam`
  ADD PRIMARY KEY (`jam_id`);

--
-- Indexes for table `loa`
--
ALTER TABLE `loa`
  ADD PRIMARY KEY (`loa_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `loi`
--
ALTER TABLE `loi`
  ADD PRIMARY KEY (`id_loi`);

--
-- Indexes for table `mst_email`
--
ALTER TABLE `mst_email`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `mst_keyword`
--
ALTER TABLE `mst_keyword`
  ADD PRIMARY KEY (`keyword_id`);

--
-- Indexes for table `mst_ruang`
--
ALTER TABLE `mst_ruang`
  ADD PRIMARY KEY (`ruang_id`);

--
-- Indexes for table `mst_subject`
--
ALTER TABLE `mst_subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `paket_konferensi`
--
ALTER TABLE `paket_konferensi`
  ADD PRIMARY KEY (`paket_id`);

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`paper_id`);

--
-- Indexes for table `paper_jadwal`
--
ALTER TABLE `paper_jadwal`
  ADD PRIMARY KEY (`jadwal_id`);

--
-- Indexes for table `paper_keyword`
--
ALTER TABLE `paper_keyword`
  ADD PRIMARY KEY (`paper_id`,`keyword_id`);

--
-- Indexes for table `paper_subject`
--
ALTER TABLE `paper_subject`
  ADD PRIMARY KEY (`paper_id`,`subject_id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `presenter`
--
ALTER TABLE `presenter`
  ADD PRIMARY KEY (`id_presenter`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `transaksi_peserta`
--
ALTER TABLE `transaksi_peserta`
  ADD PRIMARY KEY (`transfer_id`);

--
-- Indexes for table `transaksi_presenter`
--
ALTER TABLE `transaksi_presenter`
  ADD PRIMARY KEY (`transfer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_bank`
--
ALTER TABLE `account_bank`
  MODIFY `kode_bank` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `conference`
--
ALTER TABLE `conference`
  MODIFY `konferensi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `download_id` smallint(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal_jam`
--
ALTER TABLE `jadwal_jam`
  MODIFY `jam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loa`
--
ALTER TABLE `loa`
  MODIFY `loa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loi`
--
ALTER TABLE `loi`
  MODIFY `id_loi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mst_email`
--
ALTER TABLE `mst_email`
  MODIFY `email_id` smallint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mst_keyword`
--
ALTER TABLE `mst_keyword`
  MODIFY `keyword_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `mst_ruang`
--
ALTER TABLE `mst_ruang`
  MODIFY `ruang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mst_subject`
--
ALTER TABLE `mst_subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `paket_konferensi`
--
ALTER TABLE `paket_konferensi`
  MODIFY `paket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
  MODIFY `paper_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `paper_jadwal`
--
ALTER TABLE `paper_jadwal`
  MODIFY `jadwal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `presenter`
--
ALTER TABLE `presenter`
  MODIFY `id_presenter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi_peserta`
--
ALTER TABLE `transaksi_peserta`
  MODIFY `transfer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_presenter`
--
ALTER TABLE `transaksi_presenter`
  MODIFY `transfer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
