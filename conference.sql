-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 Mar 2019 pada 18.10
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
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `realname` varchar(100) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `group_session` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `realname`, `password`, `group_session`) VALUES
('Admin', 'SIMPUSDA', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('jerry', 'Jerry Permana', '574623b164e885df47f21d2ea7672575', 'admin');

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
(1, 'computer', '2019-03-14', '2019-03-14'),
(2, 'matematika', '2019-03-14', '2019-03-14'),
(3, 'Sosiologi', '2019-03-14', '2019-03-14'),
(4, 'Kimia', '2019-03-14', '2019-03-14'),
(16, 'TES', '2019-03-14', '2019-03-14'),
(17, 'INFORMASI', '2019-03-15', '2019-03-15'),
(18, 'TERAPAN', '2019-03-18', '2019-03-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_ruang`
--

CREATE TABLE `mst_ruang` (
  `ruang_id` int(11) NOT NULL,
  `nama_ruang` varchar(255) NOT NULL,
  `input_date` date NOT NULL,
  `last_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `paper`
--

CREATE TABLE `paper` (
  `paper_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `judul` text NOT NULL,
  `abstrak` text NOT NULL,
  `file_paper` varchar(255) NOT NULL,
  `v_paper` smallint(1) NOT NULL,
  `loa` smallint(1) NOT NULL,
  `lol` smallint(1) NOT NULL,
  `input_date` date NOT NULL,
  `last_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paper`
--

INSERT INTO `paper` (`paper_id`, `username`, `judul`, `abstrak`, `file_paper`, `v_paper`, `loa`, `lol`, `input_date`, `last_update`) VALUES
(27, 'jerryper ', '  Matematika Terapan 2', 'abstrak saja yakan', '17.04.141_dp.pdf', 0, 0, 0, '2019-03-18', '2019-03-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paper_jadwal`
--

CREATE TABLE `paper_jadwal` (
  `jadwal_id` int(11) NOT NULL,
  `paper_id` int(11) NOT NULL,
  `day` varchar(25) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(26, 2),
(26, 17),
(27, 2),
(27, 4),
(27, 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paper_subject`
--

CREATE TABLE `paper_subject` (
  `paper_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `presenter`
--

CREATE TABLE `presenter` (
  `username` varchar(50) NOT NULL,
  `realname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
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

INSERT INTO `presenter` (`username`, `realname`, `email`, `afiliasi`, `negara_afiliasi`, `alamat_afiliasi`, `url_orcid`, `url_profil`, `no_hp`, `image`, `password`, `group_session`, `input_date`, `last_update`) VALUES
('andre ', 'Andre', 'andre@gmail.com', 'Jakarta ', 'Jakarta ', 'JAkarta Selatan', '-', 'http://localhost/phpmyadmin/db_structure.php?server=1&db=conference&table=member', '+6285277734567', '-', 'e10adc3949ba59abbe56e057f20f883e', 'presenter', '2019-03-18', '2019-03-18'),
('jerryper ', 'Muhammad Jerry Permana, S.Kom', 'jerrypermanaa@gmail.com', '12344444', 'Indonesia ', 'Banda Aceh', 'http://localhost/phpmyadmin/tbl_structure.php?db=akasia&table=member', 'http://localhost/phpmyadmin/db_structure.php?server=1&db=conference&table=member', '+6285277772698', 'IMAGE_jerryper .jpg', '827ccb0eea8a706c4c34a16891f84e7b', 'presenter', '2019-03-14', '2019-03-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

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
-- Indexes for table `presenter`
--
ALTER TABLE `presenter`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_keyword`
--
ALTER TABLE `mst_keyword`
  MODIFY `keyword_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
  MODIFY `paper_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
