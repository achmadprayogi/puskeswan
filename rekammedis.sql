-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2020 pada 05.03
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekammedis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `coba`
--

CREATE TABLE `coba` (
  `id` int(11) NOT NULL,
  `tanggal_periksa` date NOT NULL,
  `kecamatan_id` int(10) NOT NULL,
  `pemilik_id` int(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telepon` varchar(200) NOT NULL,
  `pasien_id` varchar(200) NOT NULL,
  `spesies` varchar(200) NOT NULL,
  `tanggal_lahir` varchar(200) NOT NULL,
  `warna` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `makan` varchar(200) NOT NULL,
  `minum` varchar(200) NOT NULL,
  `muntah` varchar(200) NOT NULL,
  `diare` varchar(200) NOT NULL,
  `vaksin` varchar(200) NOT NULL,
  `obat_cacing` varchar(200) NOT NULL,
  `lain_lain` varchar(200) NOT NULL,
  `berat` varchar(3) NOT NULL,
  `temperatur` varchar(3) NOT NULL,
  `pulsus` varchar(50) NOT NULL,
  `respirasi` varchar(50) NOT NULL,
  `mata` varchar(50) NOT NULL,
  `hidung` varchar(50) NOT NULL,
  `mulut` varchar(50) NOT NULL,
  `telinga` varchar(50) NOT NULL,
  `kulit` varchar(50) NOT NULL,
  `ekstrimitas` varchar(50) NOT NULL,
  `rongga_perut` varchar(50) NOT NULL,
  `rongga_dada` varchar(50) NOT NULL,
  `kelenjar` varchar(50) NOT NULL,
  `dehidrasi` varchar(50) NOT NULL,
  `diagnosa` varchar(50) NOT NULL,
  `prognosa` varchar(50) NOT NULL,
  `data_obat` text NOT NULL,
  `data_tindakan` text NOT NULL,
  `keterangan` text NOT NULL,
  `data_resep` text NOT NULL,
  `data_dokter` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `coba`
--

INSERT INTO `coba` (`id`, `tanggal_periksa`, `kecamatan_id`, `pemilik_id`, `alamat`, `telepon`, `pasien_id`, `spesies`, `tanggal_lahir`, `warna`, `jenis_kelamin`, `makan`, `minum`, `muntah`, `diare`, `vaksin`, `obat_cacing`, `lain_lain`, `berat`, `temperatur`, `pulsus`, `respirasi`, `mata`, `hidung`, `mulut`, `telinga`, `kulit`, `ekstrimitas`, `rongga_perut`, `rongga_dada`, `kelenjar`, `dehidrasi`, `diagnosa`, `prognosa`, `data_obat`, `data_tindakan`, `keterangan`, `data_resep`, `data_dokter`) VALUES
(20, '2020-11-12', 5, 16, 'Kendalpayak', '081333404040', '22', 'Ular', '2020-07-01', 'Hijau', 'Betina', 'Makan sedikit', 'Normal', 'Tidak', 'Tidak', 'Sudah', 'Sudah', 'Kurus', '5', '36', '50', '10', 'Berair', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Tidak', 'Abses', 'Fausta', '[{\"obat\":\"Gatau\",\"jumlah\":\"12\"},{\"obat\":\"Paracetamol\",\"jumlah\":\"10\"}]', '[{\"tindakan_id\":\"Suntik\"},{\"tindakan_id\":\"Jahit\"}]', '5 Kali  Sehari', '[{\"resep_id\":\"Paramex\",\"jumlahh\":\"100\"}]', '[{\"dokter_id\":\"drh. Anton Pramujiono\"}]'),
(18, '2020-11-12', 2, 12, 'Malang', '081333404141', '20', 'Anjing', '2020-07-07', 'Ijo', 'Jantan', 'Normal', 'Normal', 'Tidak', 'Tidak', 'Sudah', 'Sudah', 'tidak ada', '20', '30', '50', '12', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Ya', 'Abses', 'Infausta', '[{\"obat\":\"Paracetamol\",\"jumlah\":\"12\"}]', '[{\"tindakan_id\":\"Jahit\"}]', 'sehari sekali', '[{\"resep_id\":\"Paramex\",\"jumlahh\":\"21\"}]', '[{\"dokter_id\":\"drh. David Cahya Putra\"}]'),
(19, '2020-11-12', 6, 11, 'Malang', '08134567890', '21', 'Ikan', '2020-04-06', 'Pink', 'Betina', 'Normal', 'Normal', 'Tidak', 'Tidak', 'Sudah', 'Sudah', 'Tidak', '10', '11', '12', '14', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Tidak', 'Abses', 'Fausta', '[{\"obat\":\"Gatau\",\"jumlah\":\"12\"}]', '[{\"tindakan_id\":\"Jahit\"},{\"tindakan_id\":\"Suntik\"}]', 'sehari sekali', '[{\"resep_id\":\"Paramex\",\"jumlahh\":\"12\"}]', '[{\"dokter_id\":\"drh. Hilda Sari\"}]');

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosa`
--

CREATE TABLE `diagnosa` (
  `diagnosa_id` int(11) NOT NULL,
  `kode` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `alternative` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `diagnosa`
--

INSERT INTO `diagnosa` (`diagnosa_id`, `kode`, `name`, `alternative`) VALUES
(1, 'AB', 'Abses', 'Abses'),
(2, 'ACR', 'Acariasis\r\n', 'Acariasis\r\n'),
(3, 'ACB\r\n', 'Actinobacillosis\r\n', 'Actinobacillosis\r\n'),
(4, 'ATM\r\n', 'Actinomycosis\r\n', 'Actinomycosis\r\n'),
(5, 'ADOV', 'Adhesi Ovari', 'Adhesi Ovari'),
(6, 'AHS', 'African horse sickness', 'African horse sickness'),
(7, 'ASF', 'African swine fever', 'African swine fever'),
(8, 'AGL', 'Agalaksia', 'Agalactia'),
(9, 'AGV', 'Agenesis Ovaria', 'Ovarian Agenesi'),
(10, 'AKA', 'Akabane', 'Akabane'),
(11, 'AFB', 'American Foulbrood', 'American Foulbrood'),
(12, 'AN', 'Anaplasmosis', 'Anaplasmosis'),
(13, 'ANC', 'Ancylostomiasis', 'Ancylostomiasis'),
(14, 'AHD', 'Anhidrosis', 'Anhidrosis'),
(15, 'AT', 'Anthraks', 'Anthrax'),
(16, 'APO', 'Aplasia Ovaria', 'Aplasia Ovaria');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `dokter_id` int(11) NOT NULL,
  `nama_dokter` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`dokter_id`, `nama_dokter`) VALUES
(1, 'drh. David Cahya Putra'),
(2, 'drh. Anton Pramujiono'),
(3, 'drh. Hilda Sari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `kecamatan_id` int(11) NOT NULL,
  `kota_id` int(11) NOT NULL,
  `kode` varchar(200) NOT NULL,
  `nama_kecamatan` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`kecamatan_id`, `kota_id`, `kode`, `nama_kecamatan`) VALUES
(1, 1, '35.73.05', 'Lowokwaru'),
(2, 1, '35.73.04', 'Sukun'),
(4, 1, '35.73.02', 'Klojen'),
(5, 1, '35.73.03', 'Kedungkandang'),
(6, 1, '35.73.01', 'Blimbing'),
(8, 3, '35.73a', 'Pendem'),
(9, 3, '62.81.11111', 'Emboh'),
(10, 2, '12121', 'Kendalpayak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelurahan`
--

CREATE TABLE `kelurahan` (
  `kelurahan_id` int(11) NOT NULL,
  `kecamatan_id` int(11) NOT NULL,
  `kota_id` int(11) NOT NULL,
  `kode` varchar(200) NOT NULL,
  `nama_kelurahan` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelurahan`
--

INSERT INTO `kelurahan` (`kelurahan_id`, `kecamatan_id`, `kota_id`, `kode`, `nama_kelurahan`) VALUES
(1, 1, 1, '35.73.05.1002', 'Merjosari'),
(2, 2, 1, '35.73.04.1009', 'Karangbesuki'),
(3, 1, 1, '35.73.05.1004', 'Dinoyo'),
(4, 1, 1, '35.73.05.1007', 'Jatimulyo'),
(5, 1, 1, '35.73.05.1006', 'Ketawanggede'),
(6, 1, 1, '35.73.05.1009', 'Mojolangu'),
(7, 1, 1, '35.73.05.1005', 'Sumbersari'),
(8, 6, 1, '35.73.01.1001', 'Balearjosari'),
(9, 6, 1, '35.73.01.1002', 'Arjosari'),
(10, 6, 1, '35.73.01.1003', 'Polowijen'),
(11, 6, 1, '35.73.01.1004', 'Purwodadi'),
(12, 6, 1, '35.73.01.1005', 'Blimbing'),
(13, 6, 1, '35.73.01.1006', 'Pandanwangi'),
(14, 6, 1, '35.73.01.1007', 'Purwantoro'),
(15, 6, 1, '35.73.01.1008', 'Bunulrejo'),
(16, 6, 1, '35.73.01.1009', 'Kesatrian'),
(17, 6, 1, '35.73.01.1010', 'Polehan'),
(24, 4, 1, '35.73.02.1001', 'Klojen'),
(25, 4, 1, '35.73.02.1002', 'Rampalcelaket'),
(26, 4, 1, '35.73.02.1003', 'Samaan'),
(27, 4, 1, '35.73.02.1004', 'Kiduldalem'),
(28, 4, 1, '35.73.02.1005', 'Sukoharjo'),
(29, 4, 1, '35.73.02.1006', 'Kasin'),
(1918, 1, 1, '35.73.05.1001', 'Tunggulwulung'),
(1919, 1, 1, '35.73.05.1003', 'Tlogomas'),
(1920, 1, 1, '35.73.05.1008', 'Tunjungsekar'),
(1930, 6, 1, '35.73.01.1011', 'Jodipan'),
(1922, 1, 1, '35.73.05.1010', 'Tulusrejo'),
(1923, 1, 1, '35.73.05.1011', 'Lowokwaru'),
(1924, 1, 1, '35.73.05.1012', 'Tasik Madu'),
(1925, 4, 1, '35.73.02.1007', 'Kauman'),
(1926, 4, 1, '35.73.02.1008', 'Oro-oro Dowo'),
(1927, 4, 1, '35.73.02.1009', 'Bareng'),
(1928, 4, 1, '35.73.02.1010', 'Gading Kasri'),
(1929, 4, 1, '35.73.02.1011', 'Penanggungan'),
(1931, 5, 1, '35.73.03.1001', 'Kotalama'),
(1932, 5, 1, '35.73.03.1002', 'Mergosono'),
(1933, 5, 1, '35.73.03.1003', 'Bumiayu'),
(1934, 5, 1, '35.73.03.1004', 'Wonokoyo'),
(1935, 5, 1, '35.73.03.1005', 'Buring'),
(1936, 5, 1, '35.73.03.1006', 'Kedungkandang'),
(1937, 5, 1, '35.73.03.1007', 'Lesanpuro'),
(1938, 5, 1, '35.73.03.1008', 'Sawojajar'),
(1939, 5, 1, '35.73.03.1009', 'Madyopuro'),
(1940, 5, 1, '35.73.03.1010', 'Cemorokandang'),
(1941, 5, 1, '35.73.03.1011', 'Arjowinangun'),
(1942, 5, 1, '35.73.03.1012', 'Tlogowaru'),
(1943, 2, 1, '35.73.04.1001', 'Ciptomulyo'),
(1944, 2, 1, '35.73.04.1002', 'Gadang'),
(1945, 2, 1, '35.73.04.1003', 'Kebonsari'),
(1946, 2, 1, '35.73.04.1004', 'Bandungrejosari'),
(1947, 2, 1, '35.73.04.1005', 'Sukun'),
(1948, 2, 1, '35.73.04.1006', 'Tanjungrejo'),
(1949, 2, 1, '35.73.04.1007', 'Pisangcandi'),
(1950, 2, 1, '35.73.04.1008', 'Bandulan'),
(1951, 2, 1, '35.73.04.1010', 'Mulyorejo'),
(1952, 2, 1, '35.73.04.1011', 'Bakalankrajan'),
(1953, 8, 3, '62.81', 'karang'),
(1954, 9, 3, '35.73.909090909090', 'Gatau');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `kota_id` int(11) NOT NULL,
  `kode` varchar(200) NOT NULL,
  `nama_kota` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`kota_id`, `kode`, `nama_kota`) VALUES
(1, '35.73', 'Malang'),
(2, '35.07', 'Kab. Malang'),
(3, '35.79', 'Batu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `obat_id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `satuan` varchar(80) NOT NULL,
  `dosis` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`obat_id`, `nama`, `satuan`, `dosis`) VALUES
(1, 'Paracetamol', 'Butir', '12'),
(2, 'Neuralgin', 'Tablet', '10'),
(3, 'Gatau', 'Pil', '10'),
(4, 'Abcde', 'tablet', '12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `pasien_id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `spesies_id` int(11) NOT NULL,
  `jenis_kelamin` enum('Jantan','Betina') NOT NULL,
  `warna` varchar(200) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` varchar(200) NOT NULL,
  `pemilik_id` int(11) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`pasien_id`, `nama`, `spesies_id`, `jenis_kelamin`, `warna`, `tanggal_lahir`, `umur`, `pemilik_id`, `alamat`, `telepon`) VALUES
(16, 'lili', 1, 'Betina', 'HITam', '2020-11-01', '0 Tahun 0 Bulan', 1, 'Malang', '08131323'),
(13, 'Lulut', 2, 'Betina', 'Abu', '2018-03-07', '2 Tahun 7 Bulan', 1, 'Malang', '8131323'),
(12, 'Lilis', 14, 'Jantan', 'Pink', '2020-06-10', '0 Tahun 4 Bulan', 2, 'Jakarta', '9090909'),
(22, 'Bubu', 3, 'Betina', 'Hijau', '2020-07-01', '0 Tahun 4 Bulan', 16, 'Kendalpayak', '081333404040'),
(21, 'Iwak', 5, 'Betina', 'Hitam', '2020-04-06', '0 Tahun 7 Bulan', 15, 'Rampal', '0506940421'),
(20, 'Asu', 1, 'Jantan', 'Ijo', '2020-07-07', '0 Tahun 4 Bulan', 12, 'Malang', '081333404141');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pdf`
--

CREATE TABLE `pdf` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `kategori` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `pdf_url` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `pdf_icon` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pdf`
--

INSERT INTO `pdf` (`id`, `nama`, `kategori`, `deskripsi`, `pdf_url`, `pdf_icon`, `author`) VALUES
(1, 'Tahapan Siklus Akuntansi Perusahaan Jasa', 'Materi', 'Iyaa', 'pdfs/1. Tahapan Siklus Akuntansi Perusahaan Jasa.pdf', 'icon/1.PNG', 'aku'),
(2, 'Pencatatan Dokumen Transaksi', 'Materi', 'Hehehe', 'pdfs/2. Pencatatan Dokumen Transaksi.pdf', 'icon/2.PNG', 'Saya'),
(3, 'Mencatat Transaksi ke Dalam Jurnal', 'Materi', 'gdsg', 'pdfs/3. Mencatat Transaksi ke Dalam Jurnal.pdf ', 'icon/3.PNG', 'ssg'),
(4, 'Melakukan Posting ke Buku Besar ', 'Materi', 'Emboh', 'pdfs/4. Melakukan Posting ke Buku Besar.pdf ', 'icon/4.PNG', 'Friska'),
(5, 'Menyelesaikan Siklus Akuntansi', 'Materi', 'Emboh', 'pdfs/5. Menyelesaikan siklus akuntansi.pdf ', 'icon/5.PNG', 'Friska'),
(6, 'Rangkuman', 'Materi', 'Emboh', 'pdfs/6. Rangkuman.pdf', 'icon/6.PNG', 'Friska'),
(7, 'Siklus Akuntansi Perusahaan Jasa', 'Materi', 'Baru', 'pdfs/7. Siklus Akuntansi Perusahaan Jasa.pdf', 'icon/7.PNG', 'Friska');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik`
--

CREATE TABLE `pemilik` (
  `pemilik_id` int(11) NOT NULL,
  `nik` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kota_id` int(11) NOT NULL,
  `kecamatan_id` int(11) NOT NULL,
  `kelurahan_id` int(11) NOT NULL,
  `telepon` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilik`
--

INSERT INTO `pemilik` (`pemilik_id`, `nik`, `nama`, `alamat`, `kota_id`, `kecamatan_id`, `kelurahan_id`, `telepon`) VALUES
(13, '90876859978', 'Rina', 'Malang', 3, 8, 1953, '0894573215555'),
(12, '3571234560987656', 'Yogi', 'Malang', 1, 2, 2, '081333404141'),
(4, '357301123456789', 'Sutiaji', 'Teluk Cendrawasih No. 200', 1, 6, 8, '08134567890'),
(11, '124234', 'RIni', 'Malang', 1, 6, 11, '08134567890'),
(14, '124234', 'Sinta', 'Jakarta', 3, 8, 1953, '909090'),
(15, '1234567890', 'pupi', 'Rampal', 1, 5, 1932, '0506940421'),
(16, '555555555555555', 'Azizah', 'Kendalpayak', 1, 5, 1933, '081333404040');

-- --------------------------------------------------------

--
-- Struktur dari tabel `periksa`
--

CREATE TABLE `periksa` (
  `periksa_id` int(11) NOT NULL,
  `tanggal_periksa` date NOT NULL,
  `pemilik_id` int(11) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kecamatan_id` int(11) NOT NULL,
  `telepon` int(20) NOT NULL,
  `pasien_id` int(11) NOT NULL,
  `spesies` varchar(200) NOT NULL,
  `warna` varchar(200) NOT NULL,
  `jenis_kelamin` enum('Jantan','Betina') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `makan` varchar(200) NOT NULL,
  `minum` varchar(200) NOT NULL,
  `muntah` varchar(200) NOT NULL,
  `diare` varchar(200) NOT NULL,
  `vaksin` varchar(200) NOT NULL,
  `obat_cacing` varchar(200) NOT NULL,
  `lain_lain` varchar(200) NOT NULL,
  `berat` varchar(200) NOT NULL,
  `temperatur` varchar(200) NOT NULL,
  `pulsus` varchar(200) NOT NULL,
  `respirasi` varchar(200) NOT NULL,
  `mata` varchar(200) NOT NULL,
  `hidung` varchar(200) NOT NULL,
  `mulut` varchar(200) NOT NULL,
  `telinga` varchar(200) NOT NULL,
  `kulit` varchar(200) NOT NULL,
  `ekstrimitas` varchar(200) NOT NULL,
  `rongga_perut` varchar(200) NOT NULL,
  `rongga_dada` varchar(200) NOT NULL,
  `kelenjar` varchar(200) NOT NULL,
  `dehidrasi` enum('Ya','Tidak') NOT NULL,
  `diagnosa` varchar(200) NOT NULL,
  `prognosa` enum('Fausta','Infausta','Dubius') NOT NULL,
  `obat` varchar(200) NOT NULL,
  `jumlah` varchar(200) NOT NULL,
  `data_tindakan` text NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `data_resep` varchar(200) NOT NULL,
  `data_dokter` text NOT NULL,
  `data_obat` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `periksa`
--

INSERT INTO `periksa` (`periksa_id`, `tanggal_periksa`, `pemilik_id`, `alamat`, `kecamatan_id`, `telepon`, `pasien_id`, `spesies`, `warna`, `jenis_kelamin`, `tanggal_lahir`, `makan`, `minum`, `muntah`, `diare`, `vaksin`, `obat_cacing`, `lain_lain`, `berat`, `temperatur`, `pulsus`, `respirasi`, `mata`, `hidung`, `mulut`, `telinga`, `kulit`, `ekstrimitas`, `rongga_perut`, `rongga_dada`, `kelenjar`, `dehidrasi`, `diagnosa`, `prognosa`, `obat`, `jumlah`, `data_tindakan`, `keterangan`, `data_resep`, `data_dokter`, `data_obat`) VALUES
(16, '2020-10-05', 2, 'Jakarta', 1, 9090909, 12, 'Hamster', 'Pink', 'Jantan', '2020-06-10', 'tidak mau makan', 'Normal', 'sering muntah', 'Tidak', 'Sudah', 'Sudah', '-', '2', '12', '23', '12', 'berair', 'Normal', 'Normal', 'kotor', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Tidak', 'Abses', 'Fausta', '', '', '[{\"tindakan_id\":\"Jahit\"}]', 'asdf', '[{\"resep_id\":\"Paramex\",\"jumlahh\":\"2\"}]', '[{\"dokter_id\":\"Dr. Iyo\"}]', '[{\"obat\":\"Neuralgin\",\"jumlah\":\"2\"},{\"obat\":\"Paracetamol\",\"jumlah\":\"3\"}]'),
(15, '2020-10-05', 1, 'Malang', 1, 8131323, 0, '', '', '', '0000-00-00', 'tidak mau makan', 'Normal', 'sering muntah', 'Tidak', 'Sudah', 'Sudah', '', '10', '30', '12', '12', 'berair', 'Normal', 'Normal', 'kotor', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Tidak', 'Abses', 'Infausta', '', '', '[{\"tindakan_id\":\"Jahit\"}]', '', '[{\"resep_id\":\"Paramex\",\"jumlah4\":\"12\"}]', '[{\"dokter_id\":\"Dr. Iyo\"}]', '[{\"obat\":\"Paracetamol\",\"jumlah\":\"12\"}]');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `resep_id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`resep_id`, `nama`) VALUES
(1, 'Paramex');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spesies`
--

CREATE TABLE `spesies` (
  `spesies_id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spesies`
--

INSERT INTO `spesies` (`spesies_id`, `nama`) VALUES
(1, 'Anjing'),
(2, 'Kucing'),
(3, 'Ular'),
(4, 'Burung'),
(5, 'Ikan'),
(6, 'Sapi'),
(7, 'Kambing'),
(8, 'Kerbau'),
(10, 'Kuda'),
(11, 'Kelinci');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tindakan`
--

CREATE TABLE `tindakan` (
  `tindakan_id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tindakan`
--

INSERT INTO `tindakan` (`tindakan_id`, `nama`) VALUES
(1, 'Jahit'),
(2, 'Suntik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `level` enum('admin','dokter') NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `nama`, `password`, `alamat`, `level`, `email`) VALUES
(1, 'admin', 'Yogi', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Malang', 'admin', 'admin@gmail.com'),
(2, 'dokter', 'Dokter', '9d2878abdd504d16fe6262f17c80dae5cec34440', 'Malang', 'dokter', 'dokter@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `coba`
--
ALTER TABLE `coba`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`diagnosa_id`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`dokter_id`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`kecamatan_id`),
  ADD KEY `kota_id` (`kota_id`);

--
-- Indeks untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`kelurahan_id`),
  ADD KEY `kecamatan_id` (`kecamatan_id`),
  ADD KEY `kota_id` (`kota_id`);

--
-- Indeks untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`kota_id`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`obat_id`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`pasien_id`),
  ADD KEY `spesies_id` (`spesies_id`),
  ADD KEY `pemilik_id` (`pemilik_id`);

--
-- Indeks untuk tabel `pdf`
--
ALTER TABLE `pdf`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`pemilik_id`),
  ADD KEY `kota_id` (`kota_id`),
  ADD KEY `kecamatan_id` (`kecamatan_id`),
  ADD KEY `kelurahan_id` (`kelurahan_id`);

--
-- Indeks untuk tabel `periksa`
--
ALTER TABLE `periksa`
  ADD PRIMARY KEY (`periksa_id`),
  ADD KEY `pemilik_id` (`pemilik_id`),
  ADD KEY `pasien_id` (`pasien_id`),
  ADD KEY `kecamatan_id` (`kecamatan_id`);

--
-- Indeks untuk tabel `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`resep_id`);

--
-- Indeks untuk tabel `spesies`
--
ALTER TABLE `spesies`
  ADD PRIMARY KEY (`spesies_id`);

--
-- Indeks untuk tabel `tindakan`
--
ALTER TABLE `tindakan`
  ADD PRIMARY KEY (`tindakan_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `coba`
--
ALTER TABLE `coba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `diagnosa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `dokter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `kecamatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `kelurahan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1955;

--
-- AUTO_INCREMENT untuk tabel `kota`
--
ALTER TABLE `kota`
  MODIFY `kota_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `obat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `pasien_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `pdf`
--
ALTER TABLE `pdf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `pemilik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `periksa`
--
ALTER TABLE `periksa`
  MODIFY `periksa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `resep`
--
ALTER TABLE `resep`
  MODIFY `resep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `spesies`
--
ALTER TABLE `spesies`
  MODIFY `spesies_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tindakan`
--
ALTER TABLE `tindakan`
  MODIFY `tindakan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
