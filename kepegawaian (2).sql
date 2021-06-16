-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jun 2021 pada 16.40
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kepegawaian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `acuan_kredit`
--

CREATE TABLE `acuan_kredit` (
  `idAcuan` int(11) NOT NULL,
  `golongan` varchar(20) NOT NULL,
  `terampil` varchar(20) DEFAULT NULL,
  `ahli` varchar(20) DEFAULT NULL,
  `kredit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `acuan_kredit`
--

INSERT INTO `acuan_kredit` (`idAcuan`, `golongan`, `terampil`, `ahli`, `kredit`) VALUES
(1, 'II/a', 'pemula', NULL, 25),
(2, 'II/b', 'terampil', NULL, 46),
(3, 'II/c', 'terampil', NULL, 60),
(4, 'II/d', 'terampil', NULL, 80),
(5, 'III/a', 'Mahir', 'Ahli Pertama', 100),
(6, 'III/b', 'Mahir', 'Ahli Pertama', 150),
(7, 'III/c', NULL, 'Ahl Muda', 200),
(8, 'III/d', NULL, 'Ahli Muda', 300),
(9, 'IV/a', NULL, 'Ahli Madya', 400),
(10, 'IV/b', NULL, 'Ahli Madya', 550),
(11, 'IV/c', NULL, 'Ahli Madya', 700),
(12, 'IV/d', NULL, 'Ahli Utama', 850),
(13, 'IV/e', NULL, 'Ahli Utama', 1000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip`
--

CREATE TABLE `arsip` (
  `id_arsip` int(11) NOT NULL,
  `arsip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `arsip`
--

INSERT INTO `arsip` (`id_arsip`, `arsip`) VALUES
(1, '2019_Peraturan LIPI_20.pdf'),
(2, 'JF Arsiparis (Permenpan Nomor 13 Tahun 2016).pdf'),
(3, 'PERKA-BKN-NOMOR-7-TAHUN-2015-PEDOMAN-PENILAIAN-BUTIR-KEGIATAN-JABATAN-ANALIS-KEPEGAWAIAN-DAN-ANGKA-KREDITNYA.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_nilai`
--

CREATE TABLE `data_nilai` (
  `nip` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tugas` varchar(100) NOT NULL,
  `poin` int(11) NOT NULL,
  `bukti` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_nilai`
--

INSERT INTO `data_nilai` (`nip`, `nama`, `tugas`, `poin`, `bukti`, `status`, `created_at`) VALUES
('200004152018071601', 'Bethania Dwi Rossyanti', 'Mengelola data', 40, 'Pengumuman_UAS_mhs_+_Jadwal_print1.pdf', 1, '2021-06-14'),
('200004152018071601', 'Bethania Dwi Rossyanti', 'aaaa', 42, 'Pengumuman_UAS_mhs_+_Jadwal_print2.pdf', 1, '2021-06-14'),
('200004152018071601', 'Bethania Dwi Rossyanti', 'Mengelola data', 4, 'Pengumuman_UAS_mhs_+_Jadwal_print3.pdf', 1, '2021-06-14'),
('200004152018071601', 'Bethania Dwi Rossyanti', 'bbbb', 1231, 'kepegawaian(4).pdf', 1, '2021-06-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pangkat_gol`
--

CREATE TABLE `pangkat_gol` (
  `nip` varchar(50) NOT NULL,
  `pangkat` varchar(20) NOT NULL,
  `Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pangkat_gol`
--

INSERT INTO `pangkat_gol` (`nip`, `pangkat`, `Id`) VALUES
('200004152018071601', 'III/b', 0),
('200005312018071602', 'III/a', 0),
('200003112018071603', 'III/c', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(50) NOT NULL DEFAULT '',
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `golongan` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `divisi`, `jabatan`, `pendidikan`, `golongan`, `email`) VALUES
('1234567899', 'abcde', 'I', 'Peneliti Madya', 'SMA', 'df', 'bethaniadr15@gmail.com'),
('195502191982031002', 'Ir. Teger Basuki, MP', 'Kelompok Peneliti Ento dan Fito', 'Peneliti Madya', '', '', 'sssir@gmail.com'),
('195604121989031002', 'Ir. Untung Setyobudi, MP', 'Kelompok Peneliti Pemuliaan Tanaman', 'Peneliti Madya', '', '', 'ooo@gmail.com'),
('195712121985031003', 'Ir. Budi Santoso, MP', 'Kelompok Peneliti Ekofisiologi', 'Peneliti Utama', '', '', 'bbb@gmail.com'),
('195805021985032002', 'Dr. Ir. Rully Dyah Purwati, MPHIL', 'Kelompok Peneliti Pemuliaan Tanaman', 'Peneliti Utama', '', '', 'hhh@gmail.com'),
('195901311983031002', 'Ir. Joko Hartono', 'Kelompok Peneliti Pemuliaan Tanaman', 'Peneliti Utama', '', '', 'iii@gmail.com'),
('195902151985031002', 'Prof. Dr. Drs. Subiyakto, MP', 'Kelompok Peneliti Ento dan FITO', 'Peneliti Utama', '', '', 'aaa@gmail.com'),
('195904241984032001', 'Ir. Fitriningdyah Tk., MS', 'Kelompok Peneliti Ekofisiologi', 'Peneliti Utama', '', '', 'ggg@gmail.com'),
('195911201986032002', 'Ir. I Gusti Ag Ayu Indrayani, MP', 'Kelompok Peneliti Ento dan Fito', 'Peneliti Utama', '', '', 'eee@gmail.com'),
('196005251989031001', 'Ir. Moch.Machfud,Mp', 'Kelompok Peneliti Pemuliaan Tanaman ', 'Peneliti', '', '', 'sdjh@gmail.com'),
('196102141986031001', 'Ir. Djajadi, M.SC.PHD', 'Kelompok Peneliti Ekofisiologi', 'Peneliti Utama', '', '', 'kkk@gmail.com'),
('196106171993032002', 'Ir. Sri Yulaikah', 'Kelompok Peneliti Pemuliaan Tanaman ', 'Peneliti Madya', '', '', 'gsaj1@gmail.com'),
('196106231986032001', 'Prof. Ir. Nurindah, PHd', 'Kelompok Peneliti Ento dan Fito', 'Peneliti Utama', '', '', 'ccc@gmail.com'),
('196107201985032002', 'Ir. Titiek Yulianti, MAG, SC.PHD', 'Kelompok Peneliti Ento dan Fito', 'Peneliti Utama', '', '', 'jjj@gmail.com'),
('196109221987031002', 'Ir. Lestari', 'Kelompok Peneliti Ekofisiologi', 'Peneliti Madya', '', '', 'dhg@gmail.com'),
('196112061985031004', 'Mochammad Machfud, S.IP', 'Sub Bagian Tata Usaha', 'Arsiparis Ahli Madya', '', '', 'www@gmail.com'),
('196201171986032001', 'Ir. Anik Herwati, MP', 'Kelompok Peneliti Pemuliaan Tanaman', 'Peneliti Utama', '', '', 'mmm@gmail.com'),
('196202021985031004', 'Ir. Fatkhur Rochman', 'Kelompok Peneliti Pemuliaan Tanaman', 'Peneliti Madya', '', '', 'ttt@gmail.com'),
('196202091993031001', 'Mochammad Untung', 'Sub Bagian Tata Usaha', 'Pengadministrasi Umum', '', '', 'jiaj@gmail.com'),
('196202101999031011', 'Rustam', 'KP Muktiharjo dan Ngemplak', 'Pekarya Kebun Rumput Pertanian', '', '', 'jibl@gmail.com'),
('196202111985031003', 'Kukuh Sudiarto', 'KP Muktiharjo dan Ngemplak', 'Teknisi Penelitian dan Perekayasaan', '', '', 'jhot@gmail.com'),
('196203052006041010', 'suwarto', 'KP Karangploso', 'Pekarya Kebun Rumput Pertanian', '', '', 'jibn@gmail.com'),
('196206111993031001', 'Sudiran', 'KP Sumberejo', 'Pengadministrasi Kepegawaian Umum', '', '', 'jhoy@gmail.com'),
('196206131986031003', 'Dr. Ir. Bambang Heliyanto, MSC', 'Kelompok Peneliti Pemuliaan Tanaman', 'Peneliti Utama', '', '', 'fff@gmail.com'),
('196206132006041003', 'Bachtiar Achmad Rudiyanto', 'KP Asembagus', 'Pengemudi (Supir)', '', '', 'jiam@gmail.com'),
('196206171985032001', 'Dra. Esti Sunaryuni', 'Seksi Jasa Penelitian ', 'Kepala Seksi Jasa Penelitian', '', '', 'gf@gmail.com'),
('196206221987031002', 'Edi Purlani, Sp', 'Kelompok Peneliti Ekofisiologi', 'Pengelola Lahan Praktek', '', '', 'jsdhg@gmail.ccom'),
('196208181987031001', 'Dr. Drs. Marjani, MP', 'Kelompok Peneliti Pemuliaan Tanaman', 'Peneliti Madya', '', '', 'xxx@gmail.com'),
('196210031986031001', 'Suwono', 'KP Muktiharjo dan Ngemplak', 'Teknisi Litkayasa Penyelia', '', '', 'djkh@gmail.com'),
('196211261987031001', 'Dr. Ir. Djumali, MP', 'Kelompok Peneliti Ekofisiologi', 'Peneliti Utama', '', '', 'lll@gmail.com'),
('196212311991031003', 'Mudawi ', 'KP Asembagus', 'Pemegang Kas', '', '', 'jhg@gmail.com'),
('196302201988031001', 'Agus Salim', 'Sub Bagian Tata Usaha', 'Bendaharawan Khusus Penerimaan', '', '', 'jhov@gmail.com'),
('196303181991022001', 'Sri Martini Rahayuningsih', 'Sub Bagian Tata Usaha', 'Pembuat Daftar Gaji', '', '', 'jhow@gmail.com'),
('196303311989031001', 'Dudut Sunardi, SP', 'Kelompok Peneliti Pemulyaan Tanaman', 'Pengelola Lahan Praktek', '', '', 'jhg@gmail.com'),
('196304072007011001', 'Tukiman', 'Sub Bagian Tata Usaha', 'Penjaga Keamanan', '', '', 'jibi@gmail.com'),
('196304121998031001', 'Subakat', 'Sub Bagian Tata Usaha', 'Caraka', '', '', 'jiow@gmail.com'),
('196304171989031002', 'Ir. Mochammad Sholeh', 'Seksi Pelayanan Teknik ', 'Pengumpul dan Pengolah Data', '', '', 'rrr@gmail.com'),
('196305061985091001', 'Sartana,S.Sos', 'Sub Bagian Tata Usaha', 'Pengelola Data Kepegawaian', '', '', 'jhgk@gmail.com'),
('196305131992032001', 'Ir. Sri Mulyanignsih', 'Kelompok Peneliti Ekofisiologi', 'Peneliti Muda', '', '', 'djsh@gmail.com'),
('196305231989032001', 'Dr. Ir. Sesanti Basuki, M.PHIL', 'Kelompok Peneliti Pemuliaan Tanaman', 'Peneliti Madya', '', '', 'uuu@gmail.com'),
('196305272007012006', 'Wiwik Rahayu', 'KP Asembagus', 'Teknisi Litkayasa Pelaksana Lanjutan', '', '', 'jiac@gmail.com'),
('196306011993031001', 'Sucipto', 'Seksi Jasa Penelitian', 'Pengadministrasi Keuangan', '', '', 'jioa@gmail.com'),
('196306021986032022', 'Titik Damiyati', 'Sub Bagian Tata Usaha', 'Verifikator Keuangan', '', '', 'jhos@gmail.com'),
('196306091994031001', 'Mohammad Safi\'', 'KP Asembagus', 'Teknisi Litkayasa Penyelia', '', '', 'jhf@gmail.com'),
('196307171992031002', 'Muchamad Rifa\'i, Sp', 'KP Muktiharjo dan Ngemplak', 'Koordinator Lapangan', '', '', 'djh@gmail.com'),
('196308161989032001', 'Ir. Prima Diarini Riajaya, M.PHIL', 'Kelompok Peneliti Ekofisiologi', 'Peneliti Madya', '', '', 'ppp@gmail.com'),
('196308262006041005', 'Sukarman', 'KP Pasirian', 'Pekarya Kebun Rumput Pertanian', '', '', 'jibc@gmail.com'),
('196309121989031001', 'Dr. Ir. Budi Hariyono, MP', 'Kelompok Peneliti Ekofisiologi', 'Peneliti Madya', '', '', 'qqq@gmail.com'),
('196309232002121001', 'Nur Mustofa', 'Sub Bagian Tata Usaha', 'Pengemudi (Supir)', '', '', 'jial@gmail.com'),
('196312011991021001', 'Triono, Sp', 'KP Muktiharjo dan Ngemplak', 'Pengelola Lahan Praktek', '', '', 'hdsjg@gmail.com'),
('196312161989031003', 'Dr. Ir. Mohammad Cholid, M.SC', 'Balittas', 'Peneliti Madya', '', '', 'vvv@gmail.com'),
('196401032006041006', 'Agus Suwisnu', 'Sub Bagian Tata Usaha', 'Pengemudi (Supir)', '', '', 'jiap@gmail.com'),
('196401231992031002', 'Ir. Cece Suhara,Mp', 'Kelompok Peneliti Ento dan Fito', 'Peneliti', '', '', 'aaaf@gmail.com'),
('196406112007011001', 'Mochammad Muchdor', 'Sub Bagian Tata Usaha', 'Pengemudi (Supir)', '', '', 'jibj@gmail.com'),
('196406152006041013', 'Suyatno', 'KP Sumberejo', 'Teknisi Litkayasa Pelaksana Lanjutan', '', '', 'jion@gmail.com'),
('196406281992032002', 'Asiayati', 'KP Asembagus', 'Pengadministrasi Umum', '', '', 'jhox@gmail.com'),
('196408091992031001', 'Ir. Nunung Sudibyo', 'Sub Bagian Tata Usaha', 'Pengadministrasi Keuangan', '', '', 'dhjsg@gmail.com'),
('196409031990032001', 'Ir. RR. Erna Nur Djajati,M.Sc', 'Sub Bagian Tata Usaha', 'Kepala Sub Bagian Tata Usaha', '', '', 'asd@gmail.com'),
('196409111992031001', 'Sujak,Sp', 'Kelompok Peneliti Ento dan Fito', 'Peneliti Madya', '', '', 'jsdj@gmail.com'),
('196410181994032002', 'Tri Setyowati', 'KP Muktiharjo dan Ngemplak', 'Pemegang Kas', '', '', 'jioe@gmail.com'),
('196411071993031002', 'Ribun', 'KP Muktiharjo dan Ngemplak', 'Operator Traktor', '', '', 'jiba@gmail.com'),
('196412061986031001', 'Matsirat', 'Sub Bagian Tata Usaha', 'Pramugudang', '', '', 'jioi@gmail.com'),
('196503121991021001', 'Heri Istiana,Sp', 'KP Karangploso', 'Teknisi Litkayasa Penyelia', '', '', 'sjh@gmail.com'),
('196503292006041005', 'Sujari', 'Sub Bagian Tata Usaha', 'Pengemudi (Supir)', '', '', 'jiih@gmail.com'),
('196505022007011001', 'Suhadi', 'Kelompok Peneliti Pemuliaan Tanaman', 'Teknisi Litkayasa Pelaksana Lanjutan', '', '', 'jiab@gmail.com'),
('196507032001121001', 'Abdurakhman , SP', 'Kelompok Peneliti Pemulyaan Tanaman', 'Peneliti Muda ', '', '', 'jhgf@gmail.com'),
('196507091991021001', 'Diwang Hadi Parmono', 'KP Karangploso', 'Pengelola Lahan Praktek', '', '', 'jhoz@gmail.com'),
('196508141998032001', 'Stepania Kristiani Da Silva', 'KP Muktiharjo dan Ngemplak', 'Operator Telekonikasi', '', '', 'jiou@gmail.com'),
('196509111994022001', 'Indriati , SP', 'Seksi Jasa Penelitian', 'Pengadministrasi Umum', '', '', 'jhg@gmail.com'),
('196510221993031001', 'Drs. Dwi Adi Sunarto, MP', 'Kelompok Peneliti Ento dan Fito', 'Peneliti Utama', '', '', 'nnn@gmail.com'),
('196512191994031001', 'Ir. Gatot Suharto Abdul Fatah, Mp', 'Kelompok Peneliti Ekofisiolofi', 'Peneliti Madya', '', '', 'fgsd@gmal.com'),
('196512192006041008', 'Bambang Suwasono Widodo, Sh', 'Sub Bagian Tata Usaha ', 'Pengadministrasi Umum Kepegawaian', '', '', 'jhg@gmail.com'),
('196512252006042007', 'Eka Setyawati, SE', 'Sub Bagian Tata Usaha ', 'Penata Usaha Penerimaan Barang', '', '', 'jhg@gmail.com'),
('196604012007011001', 'Sutomo', 'KP Pasirian', 'Teknisi Litkayasa Pelaksana ', '', '', 'jiaq@gmail.com'),
('196605131993031001', 'Ir. Supriono', 'Kelompok Peneliti Ento dan Fito', 'Peneliti madya', '', '', 'djhg@gmail.com'),
('196606041997031001', 'Moh. Zaini', 'Sub Bagian Tata Usaha', 'Pengadministrasi Umum', '', '', 'jiok@gmail.com'),
('196608291998031001', 'Imam Santoso , SP', 'Kelompok Peneliti Pemulyaan Tanaman', 'Teknisi Litkayasa Penyelia', '', '', 'jkhf@gmail.com'),
('196609301992031001', 'Suhadi , Sp', 'KP Asembagus', 'Teknisi Litkayasa Penyelia', '', '', 'jhg@gmail.com'),
('196612551993031002', 'Hadi Sunarko , SE', 'Sub Bagian Tata Usaha ', 'Bedaharawan Gaji', '', '', 'kjhg@gmail.com'),
('196701172006042009', 'Setyo Herowati', 'Kelompok Peneliti Pemuliaan Tanaman', 'Pengadministrasi Umum', '', '', 'jian@gmail.com'),
('196704042000031001', 'Puryono', 'KP Muktiharjo dan Ngemplak', 'Teknisi Penelitian Dan Perekayasaan', '', '', 'jini@gmail.com'),
('196704112007011001', 'Zainul Arifin, Drs', 'Sub Bagian Tata Usaha', 'Pengadministrasi Keuangan', '', '', 'jhoq@gmail.com'),
('196704262006042009', 'Umi Kulsum', 'KP Asembagus', 'Pramu dokumen', '', '', 'jias@gmail.com'),
('196801052006042015', 'Siti Mariyah', 'KP Muktiharjo dan Ngemplak', 'Pengadministrasi Kepegawaian Umum', '', '', 'jiao@gmail.com'),
('196802092007011002', 'Sumade', 'KP Sumberejo', 'Teknisi Litkayasa Pelaksana ', '', '', 'jibd@gmail.com'),
('196802101993031002', 'Kurnia', 'KP Muktiharjo dan Ngemplak', 'Teknisi Penelitian dan Perekayasaan', '', '', 'jioc@gmail.com'),
('196804102007011001', 'Hariyanto', 'KP Asembagus', 'Teknisi Litkayasa Pelaksana Lanjutan', '', '', 'jiag@gmail.com'),
('196806151994021001', 'Adriyas Sugiantoro', 'Sub Bagian Tata Usaha', 'Pengadministrasi Umum', '', '', 'jiob@gmail.com'),
('196808072006041025', 'Dian Harianto', 'KP Karangploso', 'Teknisi Litkayasa Pelaksana Lanjutan', '', '', 'jiov@gmail.com'),
('196808202007011001', 'Sukarjo', 'KP Asembagus', 'Teknisi Litkayasa Pelaksana ', '', '', 'jikl@gmail.com'),
('196809252007011001', 'Sucipto', 'KP Sumberejo', 'Teknisi Litkayasa Pelaksana Lanjutan', '', '', 'jiaf@gmail.com'),
('196811201996022001', 'Sri Mulyani', 'Kelompok Peneliti Pemulyaan Tanaman', 'Teknisi Litkayasa Penyelia', '', '', 'hkg@gmail.com'),
('196811261998032002', 'Dr. Ir. Titik Sundari, MP', 'Balittas', 'Kepala Balittas', '', '', 'ddd@gmai.com'),
('196904262005011011', 'Impron Sadikin. SP', 'KP Sumberejo', 'Teknisi Litkayasa Penyelia', '', '', 'jhol@gmail.com'),
('196904262006041006', 'Slamet', 'Kelompok Peneliti Pemulyaan Tanaman', 'Teknisi Litkayasa Pelaksana Lanjutan', '', '', 'jiol@gmail.com'),
('196904272006041009', 'Munir', 'Sub Bagian Tata Usaha', 'Penjaga Keamanan', '', '', 'jibb@gmail.com'),
('196906272007011001', 'Hariyanto', 'KP Asembagus', 'Teknisi Litkayasa Pelaksana ', '', '', 'jiak@gmail.com'),
('197004012006042006', 'Sri Muntiasih, S.Sos', 'Sub Bagian Tata Usaha', 'Pengadministrasi Keuangan', '', '', 'kjh@gmail.com'),
('197004142006041019', 'Sokeh', 'Sub Bagian Tata Usaha', 'Penjaga Keamanan', '', '', 'jiar@gmail.com'),
('197006042006041012', 'Abdul Haris', 'KP Sumberejo', 'Teknisi Litkayasa Pelaksana Lanjutan', '', '', 'jiad@gmail.com'),
('197008112006042011', 'Dwi Sulistiyowati, S.AP', 'Sub Bagian Tata Usaha', 'Bendaharawan Rutin', '', '', 'jiot@gmail.com'),
('197012242006042009', 'Laili Rachmawati, SP', 'Seksi Pelayanan Teknik ', 'Pengadministrasi Umum', '', '', 'jioy@gmail.com'),
('197106032007011001', 'Suprab Bandari', 'KP Karangploso', 'Pekarya Kebun Rumput Pertanian', '', '', 'jipo@gmail.com'),
('197107051999031001', 'Nur Asbani , Sp.Msi', 'Kelompok Peneliti Ento dan Fito', 'Peneliti Muda', '', '', 'jhg@gmail.com'),
('197111152007011002', 'Sri Hardono', 'Sub Bagian Tata Usaha', 'Penjaga Keamanan', '', '', 'jiav@gmail.com'),
('197209132006042015', 'Dewi Utari , Sp', 'Kelompok Peneliti Pemuliaan Tanaman', 'Teknisi Litkayasa Pelaksanan Lanjutan', '', '', 'jhf@gmail.com'),
('197210212007012001', 'Miatun, SP', 'Seksi Jasa Penelitian ', 'Teknisi Litkayasa Penyelia', '', '', 'jioh@gmail.com'),
('197312202007011002', 'Syamsul Arifin', 'KP Asembagus', 'Teknisi Litkayasa Pelaksana Lanjutan', '', '', 'jiah@gmail.com'),
('197406042008012009', 'Sulis Nur Hidayati, Sp , Mp', 'Kelompok Peneliti Ekofisiologi', 'Peneliti Muda', '', '', 'hgf@gmail.com'),
('197410242007011001', 'Aries Sunarto', 'Sub Bagian Tata Usaha', 'Penjaga Keamanan', '', '', 'jiaw@gmail.com'),
('197412062007011001', 'Syaiful Bahri', 'Seksi Jasa Penelitian', 'Pustakawan Pelaksana', '', '', 'jiau@gmail.com'),
('197501262007101001', 'Andi Sugmana', 'KP Asembagus', 'Pengadministrasi Umum', '', '', 'jiaz@gmail.com'),
('197502152005011001', 'Mochammad Sohri, SP', 'KP Karangploso ', 'Teknisi Rekayasa Penyelia', '', '', 'jhgo@gmail.com'),
('197504032007012001', 'Dewi Rahayu, SP', 'KP Karangploso', 'Pengadministrasi Evaluasi dan Pelaporan', '', '', 'jioz@gmail.com'),
('197510072007011001', 'Sunandar', 'KP Asembagus', 'Pramutamu', '', '', 'jibm@gmail.com'),
('197704222008012010', 'Farida Rahayu, MP', 'Kelompok Peneliti Ekofisiologi', 'Peneliti Pertama', '', '', 'jhou@gmail.com'),
('197706162007011001', 'Adi Supomo', 'Sub Bagian Tata Usaha', 'Penjaga Keamanan', '', '', 'jiay@gmail.com'),
('197707122007011001', 'Erfan Dwi Wahyudi', 'Sub Bagian Tata Usaha', 'Penjaga Keamanan', '', '', 'jiax@gmail.com'),
('197801142007012001', 'Nuril Hidayah', 'KP Pasirian', 'Teknisi Litkayasa Pelaksana Lanjutan', '', '', 'jiai@gmail.com'),
('197802192008012010', 'Nunik Ekadiana, SP', 'Kelompok Peneliti Ekofisiologi', 'Peneliti Pertama', '', '', 'jiom@gmail.com'),
('197807282001122001', 'Lia Verona, SE, Mp', 'Kelompok Pertanian Ekofisiologi', 'Peneliti Muda', '', '', 'sjhd@gmail.com'),
('197810042011012007', 'Mala Murianingrum, SP', 'Kelompok Peneliti Pemulyaan Tanaman', 'Peneliti Pertama', '', '', 'jioq@gmail.com'),
('197908252011011003', 'Supriyadi, SP', 'Kelompok Peneliti Ekofisiologi', 'Peneliti Pertama', '', '', 'jiop@gmail.com'),
('197912302003122001', 'Nurul Hidayah, SP.MSi', 'Kelompok Peneliti Ento dan Fito', 'Peneliti Muda', '', '', 'djh@gmail.com'),
('198007292005012001', 'Sri Adikadarsih, Sp.Msc', 'Seksi Pelayanan Teknik ', 'Peneliti Pertama', '', '', 'jhfg@gmail.com'),
('198009172008011006', 'Roni Syahputra, SP', 'Kelompok Peneliti Ekofisiologi', 'Peneliti Muda', '', '', 'jhor@gmail.com'),
('198010022009012003', 'Tantri Diah Ayu Anggraeni, SP.MSC', 'Kelompok Peneliti Pemulyaan Tanaman', 'Peneliti Pertama', '', '', 'jhon@gmail.com'),
('198203042011011011', 'Parnidi, M.SI', 'Kelompok Peneliti Ento dan Fito', 'Peneliti Pertama', '', '', 'jhop@gmail.com'),
('198203172007011001', 'Budi Lasiyanto', 'Sub Bagian Tata Usaha', 'Pemegang Kas', '', '', 'jibk@gmail.com'),
('198211222008012019', 'Elda Nurnasari, S.SI. MP', 'Kelompok Peneliti Ekofisiologi', 'Peneliti Muda', '', '', 'jho@gmail.com'),
('198212102009122006', 'Kristiana Sri Wijayanti, SP.MP', 'Kelompok Peneliti Ento dan Fito', 'Peneliti Pertama', '', '', 'jioo@gmail.com'),
('198304112011012009', 'Suminar Diyah Nurgraheni, S.TP', 'Kelompok Peneliti Ekofisiologi', 'Peneliti Pertama', '', '', 'jior@gmail.com'),
('198304182014032001', 'Aprilia Ridhawati, MP', 'Kelompok Peneliti Pemulyaan Tanaman', 'Peneliti Pertama', '', '', 'jiod@gmail.com'),
('198307202011011008', 'Ahmad Dhiaul Khuluq, S.TP.MP', 'Kelompok Peneliti Ekofisiologi', 'Peneliti Muda', '', '', 'jhok@gmail.com'),
('198402162008011006', 'Heri Prabowo, SI.MSC', 'Kelompok Peneliti Ento dan Fito', 'Peneliti Madya', '', '', 'jhom@gmail.com'),
('198402232009122003', 'Fitri Setya Puspa Rini, A.MD', 'Sub Bagian Tata Usaha', 'Arsiparis Mahir', '', '', 'jiox@gmail.com'),
('198405112019022001', 'Indah Candrarini, A.MD', 'Seksi Pelayanan Teknik', 'Teknisi Penelitian Dan Perekayasaan', '', '', 'jibe@gmail.com'),
('198409182011012013', 'Ruly Hamidah , SSi. Msc', 'Kelompok Peneliti Pemulyaan Tanaman', 'Peneliti Muda', '', '', 'jhv@gmail.com'),
('198503112009122003', 'Isni Tri Lestari, S.I.KOM', 'Seksi Jasa Penelitian', 'Pranata Humas Pertama', '', '', 'jhoo@gmail.com'),
('198509212009121003', 'Yoga Angangga Yogi, S.TP', 'KP Sumberejo', 'Peneliti Pertama', '', '', 'jiof@gmail.com'),
('198602162015031001', 'Mochammad Afifudin, A.MD', 'Kelompok Peneliti Ekofisiologi', 'Teknisi Litkayasa Pelaksana ', '', '', 'jiki@gmail.com'),
('198708082009122003', 'Agnestiyan Putri Ilmawati, SE', 'Sub Bagian Tata Usaha', 'Analis Kepegawaian Ahli Pertama', '', '', 'jiog@gmail.com'),
('198710292015031001', 'Taufik Hidayat RS, M.SI', 'Kelompok Peneliti Pemulyaan Tanaman', 'Peneliti Pertama', '', '', 'jioj@gmail.com'),
('198902242014032001', 'Arini Hidayati Jamil, SP', 'Kelompok Peneliti Ekofisiologi', 'Peneliti Pertama', '', '', 'jios@gmail.com'),
('198911152014031001', 'Hasanudin, AMD', 'Kelompok Peneliti Ekofisiologi', 'Teknisi Litkayasa Pelaksana ', '', '', 'jiat@gmail.com'),
('199010052018012001', 'Garusti, S.TP', 'Kelompok Peneliti Ekofisiologi', 'Peneliti Pertama', '', '', 'jiaa@gmail.com'),
('199306052019022002', 'Haning Puput Swastika, A.MD', 'Seksi Pelayanan Teknik', 'Teknisi Penelitian Dan Perekayasaan', '', '', 'jibf@gmail.com'),
('199502262019022001', 'Luthfi Ayunawati, A.md', 'Seksi Pelayanan Teknik', 'Teknisi Penelitian Dan Perekayasaan', '', '', 'jibg@gmail.com'),
('199703262019021001', 'Agung Pangesti Aji, A.MD', 'Seksi Pelayanan Teknik', 'Teknisi Penelitian Dan Perekayasaan', '', '', 'jibh@gmail.com'),
('200003112018071603', 'Agistya Ildha Nur Latifa', 'Divisi 1', 'Mahasiswa Magang', '', '', 'agistyaildha@gmail.com'),
('200004152018071601', 'Bethania Dwi Rossyanti', 'Divisi 1', 'Mahasiswa Magang', '', '', 'bethaniadr15@gmail.com'),
('200004152018071604', 'Liviana Indah Pusparini', 'Divisi 1', 'Mahasiswa Magang', '', '', 'devintaevendi@gmail.com'),
('200004152018071605', 'AAAA', 'Divisi 1', 'Mahasiswa Magang', '', '', 'zrtrans.office@gmail.com'),
('200005312018071602', 'Mey Ndita Nur Aini', 'Divisi 1', 'Mahasiswa Magang', '', '', 'nditamei@gmail.com'),
('64723879', 'dwi', 'divisi 2', 'magang', '', '', 'asd@gmail.com'),
('888000', 'Faris E', 'Pengembangan', 'Team Lead', 'SMA', 'Dara', 'faris@devwithrun.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id_pelatihan` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama_pelatihan` varchar(100) NOT NULL,
  `tgl_pelatihan` date NOT NULL,
  `deskripsi` text NOT NULL,
  `sertifikat` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelatihan`
--

INSERT INTO `pelatihan` (`id_pelatihan`, `nip`, `nama_pelatihan`, `tgl_pelatihan`, `deskripsi`, `sertifikat`, `status`) VALUES
(1, '196811261998032002', 'Workshop Pelaporan Program Supervisi dan Pendampingan Provinsi Jateng', '2020-03-06', 'dimulai pada tanggal 6 Maret 2020 s/d 7 Maret 2020', '', 1),
(2, '200004152018071601', 'PKL Polinema', '2020-12-24', 'pkl sebulan', '', 1),
(3, '200003112018071603', 'PKL Polinema', '2020-12-24', 'pkl sebulan', '', 1),
(4, '199010052018012001', 'Diklat Fungsional Peneliti', '2019-02-26', 'dimulai dari tanggal 26 Februari sampai tanggal 1 maret 2019', '', 1),
(5, '198902242014032001', 'Peningkatan Kompetensi Peneliti ( Lokakarya Konsorsium Rami Indonesia dan Seminar Tekstil Indonesia)', '2019-07-26', 'Dimulai dari tanggal 26 sampai dengan 27 Juli 2019', '', 1),
(6, '198710292015031001', 'Peningkatan Kompetensi Peneliti ( Lokakarya Konsorsium Rami Indonesia dan Seminar Tekstil Indonesia)', '2019-07-26', 'Dimulai dari tanggal 26 sampai dengan 27 Juli 2019', '', 1),
(7, '198307202011011008', 'Workshop Kalibrasi Alat Laboratorium', '2019-03-28', '', '', 1),
(8, '197008112006042011', 'Kursus Bendahara ( Penerimaan )', '2019-07-22', 'Dimulai dari tanggal 22 sampai dengan 24 Juli 2019', '', 1),
(9, '198203172007011001', 'Kursus Bendahara ( Penerimaan )', '2019-07-22', 'Dimulai dari tanggal 22 sampai dengan 24 Juli 2019', '', 1),
(10, '196704112007011001', 'Pelatihan Keuangan ( Pembuatan Laporan Keuangan)', '2019-03-26', 'Dimulai dari tanggal 26 sampai dengan 28 Maret 2019', '', 1),
(11, '197004012006042006', 'Pelatihan Keuangan ( Pembuatan Laporan Keuangan)', '2019-03-26', 'Dimulai dari tanggal 26 sampai dengan 28 Maret 2019', '', 1),
(12, '198708082009122003', 'Mengikuti WBK ( Wilayah Bebas dari Korupsi dan Sistem Pengendalian Internal)', '2019-03-25', 'dimulai dari tanggal 25 sampai dengan 27 Maret 2019', '', 1),
(13, '198602162015031001', 'Mengikuti WBK ( Wilayah Bebas dari Korupsi dan Sistem Pengendalian Internal)', '2019-03-25', 'dimulai dari tanggal 25 sampai dengan 27 Maret 2019', '', 1),
(14, '198402232009122003', 'Pelatihan Arsiparis ( Pengelolahan Surat atau TNDE)', '2019-03-25', 'dimulai dari tanggal 25 sampai dengan 27 Maret 2019', '', 1),
(15, '196409031990032001', 'Pelatihan Kepegawaian ( Aplikasi E-Kinerja)', '2019-03-07', 'dimulai dari tanggal 7 sampai dengan 9 Maret 2019', '', 1),
(16, '197210212007012001', 'Pelatihan/Bintek PPID (Pejabat Pengelola Informasi dan Dokumentasi)', '2019-03-13', 'dimulai drai tanggal 13 sampai dengan 15 Maret 2019', '', 1),
(17, '197412062007011001', 'Pelatihan/Bintek PPID (Pejabat Pengelola Informasi dan Dokumentasi)', '2019-03-13', 'dimulai drai tanggal 13 sampai dengan 15 Maret 2019', '', 1),
(18, '198602162015031001', 'Pelatihan SMM ISO 17025.2.2017', '2019-04-22', 'dimulai dari tanggal 22 samapai dengan 24 April 2019', '', 1),
(19, '197004012006042006', 'Bimbingan Teknis Aplikasi CALK Tingkat satker TA 2020', '2020-07-10', '', '', 1),
(20, '196512252006042007', 'Bimbingan Teknis Aplikasi CALK Tingkat satker TA 2020', '2020-07-10', '', '', 1),
(21, '198405112019022001', 'Undangan Bimbingan Teknis Aplikasi Tingkat kesiapterapan Teknologi Online Balitbangtan', '2020-07-07', '', '', 1),
(22, '196510221993031001', 'Workshop Produksi Agensia Hayati dan Pupuk Organik', '2020-10-09', '', '', 1),
(23, '198409182011012013', 'Workshop Produksi Agensia Hayati dan Pupuk Organik', '2020-10-09', '', '', 1),
(24, '196409111992031001', 'Workshop Produksi Agensia Hayati dan Pupuk Organik', '2020-10-09', '', '', 1),
(26, '888000', 'Pengembangan Website', '2021-03-01', 'Pengembangan Websiteeeeeee 2', '', 1),
(28, '888000', 'Pengembangan Website 3', '2021-03-28', 'Pengembangan Website 3', '', 1),
(29, '888000', 'Frontend', '2021-05-06', 'Pengembangan Website', '', 1),
(30, '888000', 'Pengembangan Website 32', '2021-04-29', 'Pengembangan Website', '', 1),
(31, '888000', 'Pengembangan Website', '2021-04-16', 'Pengembangan Websiteeeeeee 2', '.jpg', 1),
(32, '888000', 'Pengembangan Website 3', '2021-04-01', 'Pengembangan Websi', '888000-Pengembangan_Website_3.jpg', 1),
(33, '888000', 'Workshop Pelaporan Program Supervisi dan Pendampingan Provinsi Jaten', '2021-04-29', 'Pengembangan Websiteeeeeee', '888000-Workshop_Pelaporan_Program_Supervisi_dan_Pendampingan_Provinsi_Jaten.png', 1),
(34, '888000', 'Frontend 2222', '2021-04-20', 'Pengembangan Websiteeeeeee 2', '888000-Frontend_2222.png', 1),
(35, '200004152018071601', 'testing kok', '2020-12-12', 'testing', 'default.jpg', 1),
(36, '196811261998032002', 'testing', '2021-06-12', 'tesitng', '196811261998032002-testing.pdf', 1),
(37, '196811261998032002', 'etslur', '2021-06-12', 'testig', '196811261998032002-etslur.pdf', 1),
(38, '200004152018071601', 'Progra kerja', '2021-06-01', 'aaaa', 'default.jpg', 0),
(39, '195502191982031002', 'aaaaa', '2021-01-05', 'sdsds', 'default.jpg', 0),
(40, '195902151985031002', 'Program kerja', '2021-01-06', 'abcs', 'default.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reset_password`
--

CREATE TABLE `reset_password` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `reset_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `reset_password`
--

INSERT INTO `reset_password` (`id`, `id_user`, `reset_key`) VALUES
(1, 2, '7cQAIZdWzehLjN3FbDam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_jabatan`
--

CREATE TABLE `riwayat_jabatan` (
  `id_riwayat_jabatan` int(11) NOT NULL,
  `nip` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `jabatan` enum('Peneliti','Peneliti Utama','Peneliti Madya','Peneliti Muda','Kepala Balittas','Pengumpul dan Pengolah Data','Arsiparis Ahli Madya','Kepala Seksi Jasa Penelitian','Pengadministrasi Keuangan','Teknisi Litkayasa Penyelia','Teknisi Litkayasa Pelaksana Lanjutan','Pengelola Data Kepegawaian','Koordinator Lapangan','Bendaharawan Gaji','Pengelola Lahan Praktek','Penata Usaha Penerimaan Barang','Kepala Pengembangan') NOT NULL,
  `tmt` date NOT NULL,
  `angka_kredit` varchar(50) CHARACTER SET latin1 NOT NULL,
  `angka_kredit_acuan` int(11) NOT NULL,
  `bukti` text DEFAULT NULL,
  `buktiDua` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_jabatan`
--

INSERT INTO `riwayat_jabatan` (`id_riwayat_jabatan`, `nip`, `nama`, `jabatan`, `tmt`, `angka_kredit`, `angka_kredit_acuan`, `bukti`, `buktiDua`) VALUES
(1, '195902151985031002', 'Prof. Dr. Drs. Subiyakto, MP', 'Peneliti Utama', '2008-10-01', '15167500', 0, '2019_Peraturan_LIPI_202.pdf', 'JF_Arsiparis_(Permenpan_Nomor_13_Tahun_2016).pdf'),
(2, '888000', 'Faris E', 'Kepala Pengembangan', '2021-03-20', '10', 0, '3__MEMAHAMI_ROUTING2.pdf', '12__CRUD_(DELETE)2.pdf'),
(11, '195502191982031002', 'Ir. Teger Basuki, MP', 'Peneliti Madya', '0000-00-00', '150', 200, NULL, NULL),
(12, '1234567899', 'abcde', 'Peneliti Madya', '0000-00-00', '100', 150, NULL, NULL),
(13, '200004152018071601', 'BETHANIA DWI ROSSYANTI', '', '0000-00-00', '100', 150, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_pegawai`
--

CREATE TABLE `user_pegawai` (
  `Id` int(10) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Level` enum('admin','pegawai') NOT NULL,
  `Active` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_pegawai`
--

INSERT INTO `user_pegawai` (`Id`, `Username`, `Email`, `Password`, `Level`, `Active`) VALUES
(1, 'Admin', 'admin@gmail.com', 'Admin', 'admin', 1),
(2, 'user', 'faris.perwira@gmail.com', 'user', 'pegawai', 1),
(3, '111222333444555', 'ahshasha@gmail.com', '111222333444555', 'pegawai', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `acuan_kredit`
--
ALTER TABLE `acuan_kredit`
  ADD PRIMARY KEY (`idAcuan`);

--
-- Indeks untuk tabel `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id_arsip`);

--
-- Indeks untuk tabel `data_nilai`
--
ALTER TABLE `data_nilai`
  ADD KEY `nip` (`nip`);

--
-- Indeks untuk tabel `pangkat_gol`
--
ALTER TABLE `pangkat_gol`
  ADD KEY `nip` (`nip`),
  ADD KEY `pangkat` (`pangkat`),
  ADD KEY `Id` (`Id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `nama` (`nama`),
  ADD KEY `divisi` (`divisi`),
  ADD KEY `email` (`email`),
  ADD KEY `jabatan` (`jabatan`),
  ADD KEY `nip` (`nip`),
  ADD KEY `nama_2` (`nama`),
  ADD KEY `nip_2` (`nip`),
  ADD KEY `nama_3` (`nama`),
  ADD KEY `nama_4` (`nama`),
  ADD KEY `nip_3` (`nip`),
  ADD KEY `nama_5` (`nama`);

--
-- Indeks untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id_pelatihan`),
  ADD KEY `FK_pelatihan_pegawai` (`nip`);

--
-- Indeks untuk tabel `reset_password`
--
ALTER TABLE `reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `riwayat_jabatan`
--
ALTER TABLE `riwayat_jabatan`
  ADD PRIMARY KEY (`id_riwayat_jabatan`),
  ADD KEY `jabatan` (`jabatan`),
  ADD KEY `nip` (`nip`);

--
-- Indeks untuk tabel `user_pegawai`
--
ALTER TABLE `user_pegawai`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `acuan_kredit`
--
ALTER TABLE `acuan_kredit`
  MODIFY `idAcuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id_arsip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id_pelatihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `reset_password`
--
ALTER TABLE `reset_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `riwayat_jabatan`
--
ALTER TABLE `riwayat_jabatan`
  MODIFY `id_riwayat_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user_pegawai`
--
ALTER TABLE `user_pegawai`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pangkat_gol`
--
ALTER TABLE `pangkat_gol`
  ADD CONSTRAINT `FK_pangkat_gol_pegawai` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD CONSTRAINT `FK_pelatihan_pegawai` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `riwayat_jabatan`
--
ALTER TABLE `riwayat_jabatan`
  ADD CONSTRAINT `riwayat_jabatan_ibfk_3` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
