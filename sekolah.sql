-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 23. Mei 2013 jam 22:35
-- Versi Server: 5.1.41
-- Versi PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` int(6) NOT NULL AUTO_INCREMENT,
  `NIP` char(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pendidikan` char(2) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `jabatan` char(1) NOT NULL,
  `no_telpon` varchar(30) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `id_user` int(8) NOT NULL,
  `agama` enum('islam','protestan','khatolik','hindu','budha') NOT NULL,
  PRIMARY KEY (`id_guru`),
  UNIQUE KEY `id_user` (`id_user`),
  KEY `id_guru` (`id_guru`),
  KEY `id_user_2` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `NIP`, `nama`, `tgl_lahir`, `pendidikan`, `jenis_kelamin`, `jabatan`, `no_telpon`, `alamat`, `id_user`, `agama`) VALUES
(1, '', 'pak jan', '2013-05-20', '', 'l', 'w', '08973715371', 'perumahan', 0, 'islam'),
(12, '', 'momon', '2013-05-20', '', 'p', 'w', '056237492749', 'gamping', 1, 'khatolik'),
(14, '1000', 'thomas', '2013-05-22', 'sa', 'l', 'w', '0856435807', 'jakal km5', 2, 'khatolik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(4) NOT NULL AUTO_INCREMENT,
  `id_guru` int(6) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `jumlah_siswa` int(10) NOT NULL,
  PRIMARY KEY (`id_kelas`),
  KEY `id_kelas` (`id_kelas`),
  KEY `id_kelas_2` (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `kelas`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_guru_history`
--

CREATE TABLE IF NOT EXISTS `kelas_guru_history` (
  `id_guru` int(6) NOT NULL,
  `id_kelas` int(4) NOT NULL,
  `tahun_ajaran` year(4) NOT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas_guru_history`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_siswa_history`
--

CREATE TABLE IF NOT EXISTS `kelas_siswa_history` (
  `id_siswa` int(6) NOT NULL,
  `id_kelas` int(4) NOT NULL,
  `tahun_ajaran` year(4) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas_siswa_history`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE IF NOT EXISTS `mapel` (
  `id_mapel` int(5) NOT NULL,
  `nama_mapel` varchar(20) NOT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`) VALUES
(0, 'bahasa indonesi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel_guru`
--

CREATE TABLE IF NOT EXISTS `mapel_guru` (
  `id_mapel` int(5) NOT NULL,
  `id_guru` int(6) NOT NULL,
  PRIMARY KEY (`id_mapel`),
  KEY `id_mapel` (`id_mapel`),
  KEY `id_guru` (`id_guru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel_guru`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel_siswa`
--

CREATE TABLE IF NOT EXISTS `mapel_siswa` (
  `id_mapel` int(5) NOT NULL,
  `id_siswa` int(6) NOT NULL,
  PRIMARY KEY (`id_mapel`),
  UNIQUE KEY `id_siswa` (`id_siswa`),
  KEY `id_siswa_2` (`id_siswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel_siswa`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(4) NOT NULL AUTO_INCREMENT,
  `id_mapel` int(4) NOT NULL,
  `id_guru` int(6) NOT NULL,
  `id_siswa` int(6) NOT NULL,
  `id_kelas` int(4) NOT NULL,
  `semester` char(1) NOT NULL,
  `nilai` double NOT NULL,
  PRIMARY KEY (`id_nilai`),
  KEY `id_nilai` (`id_nilai`),
  KEY `id_mapel` (`id_mapel`),
  KEY `id_guru` (`id_guru`),
  KEY `id_siswa` (`id_siswa`),
  KEY `id_kelas` (`id_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_mapel`, `id_guru`, `id_siswa`, `id_kelas`, `semester`, `nilai`) VALUES
(1, 0, 0, 0, 0, 'g', 80),
(2, 0, 0, 0, 0, '1', 80);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `id_petugas` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `no_telpon` varchar(20) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `id_user` int(8) NOT NULL,
  `agama` enum('islam','protestan','khatolik','hindu','budha') NOT NULL,
  PRIMARY KEY (`id_petugas`),
  KEY `id_user` (`id_user`),
  KEY `id_user_2` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama`, `jenis_kelamin`, `no_telpon`, `alamat`, `id_user`, `agama`) VALUES
(0, 'muhammad', 'l', '089034727817', 'surabaya', 0, 'islam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int(6) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(11) NOT NULL,
  `NIS` char(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `no_telpon` varchar(20) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `id_user` int(8) NOT NULL,
  `agama` enum('islam','protestan','khatolik','hindu','budha') NOT NULL,
  `tahun_masuk` varchar(4) NOT NULL,
  PRIMARY KEY (`id_siswa`),
  KEY `id_siswa` (`id_siswa`),
  KEY `id_kelas` (`id_kelas`),
  KEY `id_siswa_2` (`id_siswa`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_kelas`, `NIS`, `nama`, `tgl_lahir`, `jenis_kelamin`, `no_telpon`, `alamat`, `id_user`, `agama`, `tahun_masuk`) VALUES
(4, 0, '', 'thomas', '2013-05-18', 'l', '0856435807', 'jakal km5', 0, 'islam', ''),
(5, 0, '', 'thomas', '2013-05-20', 'l', '0856435807', 'jakal km5', 0, 'islam', ''),
(6, 0, '', 'anggi', '2013-05-20', 'p', '0749265298', 'gamping', 1, 'islam', ''),
(7, 0, '', 'alex', '2013-05-21', 'l', '09865372892', 'sleman', 2, 'islam', ''),
(8, 0, '1100', 'tika', '2013-05-22', 'p', '6025920', 'yogyakarta', 2, 'islam', '2009');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hak_akses` int(3) NOT NULL,
  `register` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `hak_akses`, `register`, `last_login`) VALUES
(1, 'admin', 'admin', 'admin@yahoo.com', 1, '2013-05-17 22:32:14', '2013-05-17 22:32:14'),
(2, 'jan', 'ganteng', 'jan@yahoo.com', 2, '2013-05-17 00:00:00', '2013-05-17 00:00:00'),
(3, 'momon', 'elek', 'momon@yahoo.com', 3, '2013-05-17 00:00:00', '2013-05-17 00:00:00'),
(4, 'admin', '123456', 'tomylaer@gmail.com', 3, '2013-05-20 00:00:00', '2013-05-20 00:00:00'),
(5, 'thomas', '123456', 'tomy@ymail.com', 1, '2013-05-20 00:00:00', '2013-05-20 00:00:00'),
(6, 'momon', 'cantik', 'monica.galihkusumaarum@facebook.com', 3, '2013-05-20 00:00:00', '2013-05-20 00:00:00');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mapel_guru`
--
ALTER TABLE `mapel_guru`
  ADD CONSTRAINT `mapel_guru_ibfk_3` FOREIGN KEY (`id_mapel`) REFERENCES `mapel_guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mapel_guru_ibfk_4` FOREIGN KEY (`id_guru`) REFERENCES `mapel_guru` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mapel_siswa`
--
ALTER TABLE `mapel_siswa`
  ADD CONSTRAINT `mapel_siswa_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `mapel_siswa` (`id_siswa`),
  ADD CONSTRAINT `mapel_siswa_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `mapel_siswa` (`id_mapel`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
