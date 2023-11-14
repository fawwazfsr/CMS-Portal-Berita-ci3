-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Okt 2023 pada 03.24
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `caraousel`
--

CREATE TABLE `caraousel` (
  `id_caraousel` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `caraousel`
--

INSERT INTO `caraousel` (`id_caraousel`, `judul`, `foto`) VALUES
(28, '1', '20230926060006.jpg'),
(29, '2', '20230926060014.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(9, 'Informasi'),
(10, 'Pengumuman'),
(12, 'Lowongan Kerja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `judul_website` varchar(220) NOT NULL,
  `profil_website` text NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_wa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `instagram`, `facebook`, `email`, `alamat`, `no_wa`) VALUES
(1, 'ATMO\'S PROPERTY', 'hh', 'instagram.com/atmos', 'Randue FACEBOOK', 'atmos@gmail.com', 'Popongan Karanganyar', '082265001257');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`) VALUES
(35, 'Yuk Pahami Siklus Bisnis Properti Supaya Dapat Timing Yang Tepat', 'Properti disebut sebagai investasi yang tidak  akan merugi karena anggapan tanah yang tidak bisa bertambah di sisi lain permintaan akibat dari pertambahan penduduk akan terus meningkat. Terlebih lagi di Indonesia, jumlah penduduk yang besar dan masih lebih sedikit porsi orang yang memiliki rumah dibanding yang belum membuat properti menjadi sektor yang pasti akan terus bertumbuh', '20230926060245.jpg', 'Yuk-Pahami-Siklus-Bisnis-Properti-Supaya-Dapat-Timing-Yang-Tepat', '9', '2023-09-26', 'admin'),
(36, 'Lowongan Marketing Property', 'Perusahaan lokal Kulon Progo yang sedang berkembang dan bergerak dalam bidang property, saat ini membutuhkan SEGERA 5 orang tenaga kerja untuk posisi berikut:\r\n\r\nPosisi Jabatan :  Marketing Property\r\n\r\n \r\n\r\nKualifikasi:\r\n\r\nWanita usia minimal 20 tahun\r\nPendidikan minimal SMA/SMK\r\nBerpenampilan menarik\r\nBisa bekerja dalam target\r\nBisa bekerja dalam team\r\nSehat jasmani dan rohani\r\nBerpengalaman di bidang sales\r\nBerkas yang dilampirkan:\r\n\r\nSurat lamaran dan CV (mencantumkan formasi dan No. HP yang dapat dihubungi)\r\nFotokopi KTP, ijazah dan transkrip nilai terakhir\r\nFotokopi Kartu AK/1 dari Disnaker setempat (dilegalisir)\r\nSurat keterangan kerja sebelumnya dan sertifikat keahlian/pelatihan (jika ada)\r\nPas foto berwarna ukuran 3x4 sebanyak 1 lembar\r\nBenefit bagi Karyawan:\r\n\r\nGaji pokok (kenaikan gaji dilihat dari prestasi)\r\nTunjangan pulsa\r\nTunjangan transport (setelah lolos masa percobaan)\r\nBonus tahunan + THR (setelah 1 tahun bekerja)\r\nPengiriman Berkas Lamaran:\r\n\r\nDokumen lamaran lengkap dikirim ke: CV. SIMBOK PROPERTY\r\n\r\nSanggrahan Lor, Bendungan, Wates, Kulon Progo\r\n\r\nNarahubung: 0856-0111-7473\r\n\r\nBatas waktu penyerahan berkas lamaran : s.d. 14 Oktober 2022\r\n\r\nHanya kandidat yang memenuhi syarat dan terpilih saja yang akan diwawancarai.\r\n\r\n ', '20230926061201.jpg', 'Lowongan-Marketing-Property', '12', '2023-09-26', 'admin'),
(37, 'Pengumuman! Rumah Subsidi Naik, Segini Harganya', 'Dengan PMK ini, setiap rumah mendapatkan fasilitas berupa pembebasan Pajak Pertambahan Nilai (PPN) sebesar 11 persen dari harga jual rumah tapak atau antara Rp16 juta hingga Rp24 juta untuk setiap unit rumah.\r\n \r\nSelain itu, dalam PMK tersebut diatur batasan harga jual maksimal rumah tapak yang diberikan pembebasan PPN, yakni menjadi antara Rp162 juta hingga Rp234 juta untuk 2023.', '20230926061558.jpg', 'Pengumuman!-Rumah-Subsidi-Naik,-Segini-Harganya', '10', '2023-09-26', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`) VALUES
(6, 'admin', 'SUTRIS', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(7, 'user', 'pp', 'ee11cbb19052e40b07aac0ca060c23ee', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `caraousel`
--
ALTER TABLE `caraousel`
  ADD PRIMARY KEY (`id_caraousel`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `caraousel`
--
ALTER TABLE `caraousel`
  MODIFY `id_caraousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
