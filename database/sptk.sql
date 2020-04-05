-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2020 at 02:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sptk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Darsih', '$2y$10$EJoD5o5Ofwvwpf0fOL.InOxaxdxdSXWuPf47YRP79eQjW3h839Kju');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `kode` varchar(8) NOT NULL,
  `gejala` varchar(256) NOT NULL,
  `kode_hamapenyakit` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`kode`, `gejala`, `kode_hamapenyakit`) VALUES
('GD001', 'Terdapat bintik-bintik putih pada keping biji, daun pertama atau kedua', 'H01'),
('GD002', 'Terdapat lubang kecil-kecil bekas gerekan bewarna coklat', 'H01'),
('GD003', 'Tanaman menjadi layu', 'H01'),
('GD004', 'Daun-daunnya menguning dan akhirnya mati', 'H01'),
('GD005', 'Terdapat bintik-bintik bekas tusukan alat peletak telur', 'H02'),
('GD006', 'Terdapat lubang gerekan larva pada batang dan dapat menyebabkan tanaman layu dan mati', 'H02'),
('GD007', 'Daun yang terserang berlubang-lubang tidak menentu ukurannya', 'H03'),
('GD008', 'Tanaman menjadi gundul', 'H03'),
('GD009', 'Serangan berat pada daun mengakibatkan yang tersisa tinggal tulang-tulang daunnya dan keadaan ini biasanya terjadi pada fase pengisian polong', 'H04'),
('GD010', 'Ulat makan daun muda dan tua sehingga daun berlubang', 'H04'),
('GD011', 'Serangan larva instar muda menyebabkan bercak-bercak putih pada daun, karna yang tertinggal hanya epidermis dan tulang daun', 'H04'),
('GD012', 'Merusak tanaman kedelai pada umur 3-6 minggu setelah tanam', 'H05'),
('GD013', 'Bagian daun digulung dan dimakan sampai tulang-tulang daunnya, sehingga daun menjadi rusak', 'H05'),
('GD014', 'Hama ini menyerang hampir seluruh bagian tanaman kedelai, terutama pucuk, tangkai daun muda, dan polong', 'H06'),
('GD015', 'Tanaman menajdi rusak tidak beraturan', 'H06'),
('GD016', 'Batang tanaman kedelai yang digerak menjadi rusak hingga tinggal lapisan kulitnya', 'H07'),
('GD017', 'Serangan lebih lanjut mengakibatkan pucuk-pucuk tanaman menjadi layu dan mengering', 'H07'),
('GD018', 'Serangan hama ini biasa terjadi pada waktu tanaman kedelai berumur 4-6 minggu setelah tanam', 'H07'),
('GD019', 'Terdapat lubang pada polong kedelai sehingga rusak', 'H08'),
('GD020', 'Kadang-kadang membusuk', 'H08'),
('GD021', 'Akibat serangan penggerek polong menyebabkan kerusakan pada polong muda maupun polong tua', 'H09'),
('GD022', 'Terjadi kerusakan pada bunga dan menyebabkan kegagalan pembentukan buah (polong)', 'H09'),
('GD023', 'Akibat dari serangan kepik hijau menyebabkan polong ataupun biji keriput', 'H10'),
('GD024', 'Terdapat bintik-bintik pada kacang', 'H10'),
('GD025', 'Polong gugur atau hampa, dan mengering', 'H11'),
('GD026', 'Biji berbintik-bintik dan akibatnya menadi busuk berwarna hitam', 'H11'),
('GD027', 'Infeksi awal dimulia dari daun-daun pada batang sebelah bawah dan terus menjalar kedaun-daun sebelah atas', 'H12'),
('GD028', 'Gejala pada daun yang terserang adalah terjadi perubahan warna dari hijau menjadi coklat, kemudain mengering dan akhirnya rotok', 'H12'),
('GD029', 'Ciri khas serangan penyakit karat adalah adanya bercak-bercak coklat pada pemukaan daun sebelah bawah', 'H12'),
('GD030', 'Akibat serangan penyakit ini menyebabkan biji-biji kedelai tidak berisi dan bahkan hampa', 'H12'),
('GD031', 'Tanaman kedelai yang terserang daun-daunnya mengecil', 'H13'),
('GD032', 'Ruas-ruasnya memendek', 'H13'),
('GD033', 'Tunas pada ketiak berkembang sehingga seperti sapu', 'H13'),
('GD034', 'Gejala serangannya adalah tanaman kerdil', 'H14'),
('GD035', 'Warna daun lebih hijau dibandingkan dengan daun yang normal', 'H14'),
('GD036', 'Pada daun-daun yang muda menampakkan lekuk (keriting) dan kasar dan berkeriput', 'H14'),
('GD037', 'Menunjukan perubahan warna daun dari hijau menjadi kuning-belang, terutama pada pucuk-pucuknya', 'H14'),
('GD038', 'Daun-daun menjadi belang-belang kuning, hijau muda atau hijau tidak merata', 'H14'),
('GD039', 'Gejala serangan yang khas adalah pada lapisan akar utama dan pangkal batang bewarna kecoklat-coklatan', 'H15'),
('GD040', 'Membentuk semacam kanker cekung bewarna coklat kemerah-merahan', 'H15'),
('GD041', 'Akibat membusuknya perakaran dan pangkal batang, maka tanaman menjadi layu dan akan mati', 'H15'),
('GD042', 'Gejala pada polong adalah terdapat bercak-bercak berwarna gelap kebasah-basahan dan tampak kempis', 'H15'),
('GD043', 'Gejala pada daun yang terserang adalah seperti tampak tersiram air panas', 'H15'),
('GD044', 'Perkecambaan biji terganggu', 'H16'),
('GD045', 'Tulang daun pada permukaan bawah pada tanaman yang terserang biasa menebal dengan warna kecoklatan', 'H16'),
('GD046', 'Pada batang akan timbul bintik-bintik hitam berupa duri-duri jamur', 'H16');

-- --------------------------------------------------------

--
-- Table structure for table `hama_penyakit`
--

CREATE TABLE `hama_penyakit` (
  `kode` varchar(4) NOT NULL,
  `nama_hamapenyakit` varchar(128) NOT NULL,
  `pengendalian` text DEFAULT NULL,
  `penanggulangan` text DEFAULT NULL,
  `waktu` int(11) NOT NULL,
  `kode_kategori` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hama_penyakit`
--

INSERT INTO `hama_penyakit` (`kode`, `nama_hamapenyakit`, `pengendalian`, `penanggulangan`, `waktu`, `kode_kategori`) VALUES
('H01', 'Lalat Kacang', 'Melakukan pergiliran (rotasi) tanaman yang bukan sefamili, Melakukan tanaman serempak dengan selisih waktu lebih dari 10 hari, pemasangan mulsa jerami, Melakukan pencampuran insektisida pada benih sebelum tanam, Penaburan furadan, indofuran atau curater pada saat tanam.', 'Penyemprotan insektisida azrodin 15 WSC atau bassa 50 EC atau decis 2,5 EC dan lainnya, Penyemprotan dilakukan apabila ditemukan intensitas serangan rata-rata 2% pada umur kurang dari 10 hari setelah tanam.', 1584369315, 'K01'),
('H02', 'Lalat Batang', 'Menggunakan mulsa jerami, perlakuan benih pada daerah andemik, menyemprotkan insektisida pada tanaman berumur 12 hari, jika popilasi lalat batang mencapai ambang kendali (1 imago/rumpun) menyemprotkan dengan insektisida yang dianjurkan.', '', 1584369443, 'K02'),
('H03', 'Ulat Grayak', 'Melakukan pergiliran (rotasi) tanaman yang bukan sefamili, mengatur waktu tanam secara serempak, mengumpulkan kelompok telur dan nimfanuntuk dimusnahkan, menyemprotkan insektisida apabila populasi hama mencapai ambang ekonomi, yaitu 50 ekor instar 1 atau 32 ekor instar 2 atau 17 ekor instar 3 per 12 tanaman, jenis insektisida yang digunakan antara lain ambush 2 EC, Cascade 50 EC, Decis 2,5 EC dan jenis insektisida lainnya yang dianjurkan.', '', 1584393346, 'K03'),
('H04', 'Ulat Jengkal', 'Melakukan pergiliran (rotasi) tanaman yang bukan sefamili, mengatur waktu tanam secara serempak pada areal sehamparan, mengumpulkan larva untuk dimusnahkan.', 'Menyemprotkan insektisida apabila populasi hama mencapai ambang ekonomi, yaitu 58 ekor instar 1 atau 32 ekor instar 2 atau 17 ekor instar 3 per 12 tanaman, jenis insektisida yang mangkus antara lain adalah Dekasulfan 350 EC folimat 50 SI, gusadrin 150 WSC, atau Motador 25 EC pada kebutuhan yang dianjurkan.', 1584393989, 'K03'),
('H05', 'Penggulung Daun', 'Melakukan pergiliran (rotasi) tanaman yang bukan sefamili, mengumpulkan ulat untuk dimusnahkan serta mengatur tanaman secara serempak.', 'Menyemprotkan insektisida apabila populasi hama mencapai ambang ekonomi, yaitu 58 ekor instar 1 atau 32 ekor instar 2 atau 17 ekor instar 3 per 12 tanaman, jenis insektisida yang digunakan antara lain adalah matador 25 EC, meotrhrin 50 EC, dan sevin 85 S sesuai dosis yang dianjurkan.', 1584634585, 'K03'),
('H06', 'Kumbang Kedelai', 'Melakukan pergiliran (rotasi) tanaman yang bukan sefamili, mengatur tanaman secara serempak, mengumpulkan imago pada pagi dan sore hari ketika tanaman tumbuh umur 30 hari setelah tanam, kemudian imago tersebut dimusnahkan, menyemprotkan insektisida yang mangkus apabila pada umur 45 hari setelah tanam.', 'Melakukan penyemprotan dengan insektisida sevin 85 S, sumithion 50 EC, thiodan 35 EC dan insektisida lainnya.', 1584635469, 'K04'),
('H07', 'Lalat Pucuk', 'Melakukan pergiliran (rotasi) tanaman yang bukan sefamili, mengatur tanaman secara serempak, memotong pucuk-pucuk yang layu untuk dibakar.', 'Menyemprotkan insektisida yang mangkus dan selektif pada waktu tanaman kedelai berumur 18-21 hari setelah tanam. Penyemprotan hanya dilakukan apabila tanaman ditemukan adanya serangan hama, jenis insektisida yang dapat digunakan antara lain confidor 70 WS ataupun folimat 500 SL sesuai yang dianjurkan.', 1584635553, 'K04'),
('H08', 'Ulat Polong', 'Melakukan pergiliran (rotasi) tanaman yang bukan sefamili, mengatur tanaman secara serempak, mengumpulan ulat untuk dimusnahkan.', 'Melakukan penyemprotan dengan insektisida yang mangkus dan ampuh, jenis insektisida yang dapat digunakan antara lain adalah dursban 20 EC atau dipel WP sesuai dosis yang dianjurkan.', 1584635810, 'K05'),
('H09', 'Penggerek Polong', 'Melakukan pergiliran (rotasi) tanaman, mengatur tanaman secara serempak, bersihkan kebun dari gulma (rumput) untuk menghilangkan sumber serangan.', 'Menyemprotkan insektisida yang mangkus dan sangkil, jenis insektisida yang dianjurkan adalah buldok 25 EC, thiodan 35 EC, matador 25 EC atau fastac 15 EC  sesuai ketentuan yang dianjurkan.', 1584635867, 'K05'),
('H10', 'Kepik Hijau', 'Melakukan pergiliran (rotasi) tanaman, mengatur tanaman secara serempak, menyemprotkan insektisida pada waktu tanam kedelai berumur 45-50 hari setelah tanam.', 'Mengumpulkan imago ataupun nimfah untuk segera dimusnahkan , apabila ditemukan sepasang iago di tanaman kedelai, jenis insektisida yang digunakan yang mangkus antara lain atabron 50 EC dan dimilin 25 WP pada konsentrasi yang ditentukan.', 1584635907, 'K05'),
('H11', 'Kepik Coklat', 'Melakukan pergiliran (rotasi) tanaman yang bukan sefamili, mengatur tanaman secara serempak, menjaga kebersihan kebun dari rumput-rumput liar (gulma), disempriotkan insektisida pada waktu tanaman berumur 45 hari setelah tanam.', 'Mengummpulkan kepik untuk dimusnahkan. Apabila ditemukan sepasang kepik coklat dikebun kedelai, maka disemprotkan menggunakan insektisida yang mnagkus, jenis insektisida yang mangkus adalah ofunack 40 EC, mipein 50 WP atau monitor 200 LC dan lain-lain sesuai kebutuhan yang ditetapkan.', 1584635947, 'K05'),
('H12', 'Karat Daun', 'Penggunaan varietas yang tahan terhadap penyakit karat daun misalnya varietas wilis, merbabu, raung, dempo, krakatau, tampomas, cikurai. Melakukan pergiliran (rotasi) tanaman yang bukan sefamili, mengatur tanaman secara serempak pada awal musim kemarau, menghindari tanaman kacang-kacangan didekat kebun kacang kedelai. Perlakuan benih dengan fungsida benlate T 20. Menjaga kebersihan kebun dari rumput-rumput liar. Penyemprotan tanaman dengan fungsida yang mangkus antara lain alto 100 SL, anvil 50 SC, orthocide 50 WP, boycor 300 EC, dan bayfidan 250 EC pada tanaman berumur 30 hari setelah tanaman.', '', 1584635612, 'K04'),
('H13', 'Sapu', 'Melakukan pergiliran (rotasi) tanaman yang bukan sefamili.', 'Pencabutan tanaman yang sakit. Penyemprotan dengan insektisida apabila ditemukan serangan (kutu) penular.', 1584635652, 'K04'),
('H14', 'Kerdil', 'Menanam varietas kedelai yang tahan (resisten) terhadap serangan penularan seperti varietas Orba dan Wilis. Penggunaan benih yang bebas virus. Melakukan pergiliran (rotasi) tanaman yang bukan famili kacang-kacangan.', 'Pencabutan dan pemusnahan tanaman yang terserang. Penyemprotan dengan insektisida yang mangkus, misalnya basuddin 60 EC dosis 1 lt/hektar untuk pengendalian Aphis.sp atau serangan penularan virus.', 1584635384, 'K03'),
('H15', 'Busuk Rhizoctonia', 'Perbaikan drainase dengan pembuatan parit agar tanah tidak basah (lembab). Pengapuran tanah agar PH tanah menjadi netral. Penggunaan benih sehat. Mengatur waktu tanam secara serempak pada awal musim kemarau. Mengurangi kelembaban tanah (kebun) dengan cara memperlebar jarak tanam.', 'Penyemprotan fungsida yang mangkus dan sangkil seperti delsene MX-200 pada dosis 0,5-1,0 lt/hektar setelah ditemukan gejala pada tanaman.', 1584635708, 'K04'),
('H16', 'Antraknose', 'Pemilihan dan penggunaan benih yang bebas cendawan antraknose. Melakukan pergiliran (rotasi) tanaman.', 'Mencabut tanaman yang sakit. Menyemprot dengan fungsida yang mengandung bahan aktif karbendazim atau mankozeb seperti vitigram blue dan Derosal 60 WP, serta delsene MX 200 pada konsentrasi yang dianjurkan.', 1584635758, 'K04');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kode` varchar(4) NOT NULL,
  `nama_kategori` varchar(64) NOT NULL,
  `waktu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kode`, `nama_kategori`, `waktu`) VALUES
('K01', 'Kerusakan Pada Daun Dan Biji', 1584367355),
('K02', 'Kerusakan Pada Batang', 1584639604),
('K03', 'Kerusakan Pada Daun', 1584405031),
('K04', 'Kerusakan Pada Seluruh Bagian Tanaman', 1584365976),
('K05', 'Kerusakan Pada Polong', 1584366008);

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id` varchar(16) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `kode_hamapenyakit` varchar(4) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `waktu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `hama_penyakit`
--
ALTER TABLE `hama_penyakit`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
