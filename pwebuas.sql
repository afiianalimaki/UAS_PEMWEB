-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2021 pada 11.26
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwebuas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biologix`
--

CREATE TABLE `biologix` (
  `id` int(11) NOT NULL,
  `namaMateri` varchar(100) NOT NULL,
  `penjelasan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biologix`
--

INSERT INTO `biologix` (`id`, `namaMateri`, `penjelasan`) VALUES
(3, 'Gen', '    <div class=\"embed-responsive embed-responsive-4by3\">\r\n      <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/k_7z6Q7So1k?rel=0\"></iframe>\r\n    </div>\r\nKarakter atau sifat (contoh: mata biru, rambut keriting) yang dimiliki oleh suatu individu didapatkan dari karakter yang dimiliki oleh induknya. Istilah gen pertama kali dijelaskan oleh Gregor Mendel pada tahun 1800-an. Gen adalah informasi genetik atau karakteristik yang diturunkan dari orangtua.\r\n\r\nGen terletak di inti sel dan tersusun atas DNA (Deoxyribonucleic acid) dimana sekumpulan DNA akan membentuk struktur padat yang disebut kromosom (Gambar 1). Molekul inilah (DNA) yang diturunkan dari orangtua kepada keturunannya.\r\n\r\nPada manusia dan banyak makhluk hidup lain, untuk setiap karakter akan mendapatkan dua salinan gen dari masing-masing orang tua sehingga disebut sebagai organisme diploid karena mewarisi 1 set kromosom dari masing-masing orangtua. Gen yang dimiliki oleh manusia merupakan percampuran antara gen dari ayah dan gen dari ibu, maka dari itu ketika seseorang memiliki ciri atau karakteristik tertentu ciri tersebut juga dapat dilihat dari orangtuanya.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `biologixi`
--

CREATE TABLE `biologixi` (
  `id` int(11) NOT NULL,
  `namaMateri` varchar(100) NOT NULL,
  `penjelasan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biologixi`
--

INSERT INTO `biologixi` (`id`, `namaMateri`, `penjelasan`) VALUES
(2, 'Gen', '    <div class=\"embed-responsive embed-responsive-4by3\">\r\n      <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/k_7z6Q7So1k?rel=0\"></iframe>\r\n    </div>\r\nKarakter atau sifat (contoh: mata biru, rambut keriting) yang dimiliki oleh suatu individu didapatkan dari karakter yang dimiliki oleh induknya. Istilah gen pertama kali dijelaskan oleh Gregor Mendel pada tahun 1800-an. Gen adalah informasi genetik atau karakteristik yang diturunkan dari orangtua.\r\n\r\nGen terletak di inti sel dan tersusun atas DNA (Deoxyribonucleic acid) dimana sekumpulan DNA akan membentuk struktur padat yang disebut kromosom (Gambar 1). Molekul inilah (DNA) yang diturunkan dari orangtua kepada keturunannya.\r\n\r\nPada manusia dan banyak makhluk hidup lain, untuk setiap karakter akan mendapatkan dua salinan gen dari masing-masing orang tua sehingga disebut sebagai organisme diploid karena mewarisi 1 set kromosom dari masing-masing orangtua. Gen yang dimiliki oleh manusia merupakan percampuran antara gen dari ayah dan gen dari ibu, maka dari itu ketika seseorang memiliki ciri atau karakteristik tertentu ciri tersebut juga dapat dilihat dari orangtuanya.\r\n\r\n ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `biologixii`
--

CREATE TABLE `biologixii` (
  `id` int(11) NOT NULL,
  `namaMateri` varchar(100) NOT NULL,
  `penjelasan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biologixii`
--

INSERT INTO `biologixii` (`id`, `namaMateri`, `penjelasan`) VALUES
(2, 'Gen', '    <div class=\"embed-responsive embed-responsive-4by3\">\r\n      <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/k_7z6Q7So1k?rel=0\"></iframe>\r\n    </div>\r\nKarakter atau sifat (contoh: mata biru, rambut keriting) yang dimiliki oleh suatu individu didapatkan dari karakter yang dimiliki oleh induknya. Istilah gen pertama kali dijelaskan oleh Gregor Mendel pada tahun 1800-an. Gen adalah informasi genetik atau karakteristik yang diturunkan dari orangtua.\r\n\r\nGen terletak di inti sel dan tersusun atas DNA (Deoxyribonucleic acid) dimana sekumpulan DNA akan membentuk struktur padat yang disebut kromosom (Gambar 1). Molekul inilah (DNA) yang diturunkan dari orangtua kepada keturunannya.\r\n\r\nPada manusia dan banyak makhluk hidup lain, untuk setiap karakter akan mendapatkan dua salinan gen dari masing-masing orang tua sehingga disebut sebagai organisme diploid karena mewarisi 1 set kromosom dari masing-masing orangtua. Gen yang dimiliki oleh manusia merupakan percampuran antara gen dari ayah dan gen dari ibu, maka dari itu ketika seseorang memiliki ciri atau karakteristik tertentu ciri tersebut juga dapat dilihat dari orangtuanya.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataguru`
--

CREATE TABLE `dataguru` (
  `id` int(11) NOT NULL,
  `namaGuru` varchar(100) NOT NULL,
  `NIG` bigint(20) NOT NULL,
  `jenisKelamin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dataguru`
--

INSERT INTO `dataguru` (`id`, `namaGuru`, `NIG`, `jenisKelamin`) VALUES
(1, 'Isyanto S.pd,', 987251, 'Pria'),
(2, 'Dr. H. Nandi S.Pd, ', 124432, 'Pria');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datasiswa`
--

CREATE TABLE `datasiswa` (
  `id` int(11) NOT NULL,
  `namaSiswa` varchar(100) NOT NULL,
  `NIS` bigint(20) NOT NULL,
  `jenisKelamin` varchar(50) NOT NULL,
  `tanggalLahir` varchar(100) NOT NULL,
  `alamatRumah` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datasiswa`
--

INSERT INTO `datasiswa` (`id`, `namaSiswa`, `NIS`, `jenisKelamin`, `tanggalLahir`, `alamatRumah`) VALUES
(14, 'Afian Azhar Alimakki', 192410101049, 'Pria', '11 Juli 2001', 'Jalan Bungur no 1'),
(15, 'Achmad Ichwan Zaky', 192410101055, 'Pria', '10 September 2000', 'Jalan Gajah Mada no 21'),
(16, 'Cecep Yudha', 19241010101113, 'Pria', '24 Maret 2000', 'Jalan Pegangsaan Timur no 12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fisikax`
--

CREATE TABLE `fisikax` (
  `id` int(11) NOT NULL,
  `namaMateri` varchar(100) NOT NULL,
  `penjelasan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fisikax`
--

INSERT INTO `fisikax` (`id`, `namaMateri`, `penjelasan`) VALUES
(2, 'Momentum', '  <div class=\"embed-responsive embed-responsive-4by3\">\r\n      <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/iEI5L5Ldw6A&t=21s?rel=0\"></iframe>\r\n   </div>\r\nDalam ilmu fisika, momentum didefinisikan sebagai besaran yang dimiliki oleh benda yang bergerak. Besarnya momentum akan bergantung kepada massa dan kecepatan dari benda tersebut. Secara matematis momentum dapat dituliskan sebagai p = mv, dengan p adalah momentum (kg m/s), m adalah massa benda (kg) dan v adalah kecepatan benda (m/s).\r\n\r\nBerdasarkan rumus tersebut, maka bisa diketahui bahwa momentum sebanding dengan kecepatan bendanya. Dengan demikian, arah momentum sama dengan arah kecepatannya, selain itu semakin besar kecepatan suatu benda akan semakin besar momentumnya.\r\n\r\nSedangkan impuls adalah hasil kali antara gaya rata-rata dan selang waktu gaya tersebut bekerja. Secara matematis impuls dapat dituliskan sebagai I=FΔt, dengan I adalah impuls dalam ns, F adalah gaya yang diberikan dalam newton, dan Δt adalah selang waktu dalam sekon.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fisikaxi`
--

CREATE TABLE `fisikaxi` (
  `id` int(11) NOT NULL,
  `namaMateri` varchar(100) NOT NULL,
  `penjelasan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fisikaxi`
--

INSERT INTO `fisikaxi` (`id`, `namaMateri`, `penjelasan`) VALUES
(2, 'Momentum', '  <div class=\"embed-responsive embed-responsive-4by3\">\r\n      <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/iEI5L5Ldw6A&t=21s?rel=0\"></iframe>\r\n   </div>\r\nDalam ilmu fisika, momentum didefinisikan sebagai besaran yang dimiliki oleh benda yang bergerak. Besarnya momentum akan bergantung kepada massa dan kecepatan dari benda tersebut. Secara matematis momentum dapat dituliskan sebagai p = mv, dengan p adalah momentum (kg m/s), m adalah massa benda (kg) dan v adalah kecepatan benda (m/s).\r\n\r\nBerdasarkan rumus tersebut, maka bisa diketahui bahwa momentum sebanding dengan kecepatan bendanya. Dengan demikian, arah momentum sama dengan arah kecepatannya, selain itu semakin besar kecepatan suatu benda akan semakin besar momentumnya.\r\n\r\nSedangkan impuls adalah hasil kali antara gaya rata-rata dan selang waktu gaya tersebut bekerja. Secara matematis impuls dapat dituliskan sebagai I=FΔt, dengan I adalah impuls dalam ns, F adalah gaya yang diberikan dalam newton, dan Δt adalah selang waktu dalam sekon.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fisikaxii`
--

CREATE TABLE `fisikaxii` (
  `id` int(11) NOT NULL,
  `namaMateri` varchar(100) NOT NULL,
  `penjelasan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fisikaxii`
--

INSERT INTO `fisikaxii` (`id`, `namaMateri`, `penjelasan`) VALUES
(2, 'Momentum', '  <div class=\"embed-responsive embed-responsive-4by3\">\r\n      <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/iEI5L5Ldw6A&t=21s?rel=0\"></iframe>\r\n   </div>\r\nDalam ilmu fisika, momentum didefinisikan sebagai besaran yang dimiliki oleh benda yang bergerak. Besarnya momentum akan bergantung kepada massa dan kecepatan dari benda tersebut. Secara matematis momentum dapat dituliskan sebagai p = mv, dengan p adalah momentum (kg m/s), m adalah massa benda (kg) dan v adalah kecepatan benda (m/s).\r\n\r\nBerdasarkan rumus tersebut, maka bisa diketahui bahwa momentum sebanding dengan kecepatan bendanya. Dengan demikian, arah momentum sama dengan arah kecepatannya, selain itu semakin besar kecepatan suatu benda akan semakin besar momentumnya.\r\n\r\nSedangkan impuls adalah hasil kali antara gaya rata-rata dan selang waktu gaya tersebut bekerja. Secara matematis impuls dapat dituliskan sebagai I=FΔt, dengan I adalah impuls dalam ns, F adalah gaya yang diberikan dalam newton, dan Δt adalah selang waktu dalam sekon.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kimiax`
--

CREATE TABLE `kimiax` (
  `id` int(11) NOT NULL,
  `namaMateri` varchar(100) NOT NULL,
  `penjelasan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kimiax`
--

INSERT INTO `kimiax` (`id`, `namaMateri`, `penjelasan`) VALUES
(2, 'Ikatan Kimia', '   <div class=\"embed-responsive embed-responsive-4by3\">\r\n      <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/vjxoQ8CMmo8&t=4s?rel=0\"></iframe>\r\n   </div>\r\nIkatan kimia merupakan gaya yang mengikat dua atom atau lebih untuk membuat senyawa atau molekul kimia. Ikatan itulah yang akan menjaga atom tetap bersama dalam suatu senyawa yang dihasilkan. Namun, ikatan tersebut berbeda-beda lho, guys. Ada ikatan kuat seperti yang terjadi pada ikatan kovalen, ionik, dan logam. Ada juga ikatan lemah yang terjadi pada interaksi dipol-dipol, gaya dispersi London, dan ikatan hidrogen.\r\n\r\nSemakin kuat ikatan kimia yang terjadi, maka akan semakin stabil senyawa yang dihasilkannya. Sebaliknya, semakin lemah ikatan kimia yang terjadi, akan semakin tidak stabil senyawa yang dihasilkannya, dan dapat mengalami reaksi lain untuk membuatnya lebih stabil. Dalam pembentukannya, ikatan tersebut dipengaruhi oleh elektron valensi. Apa itu elektron valensi? Yaitu elektron yang berada pada kulit terluar suatu atom.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kimiaxi`
--

CREATE TABLE `kimiaxi` (
  `id` int(11) NOT NULL,
  `namaMateri` varchar(100) NOT NULL,
  `penjelasan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kimiaxi`
--

INSERT INTO `kimiaxi` (`id`, `namaMateri`, `penjelasan`) VALUES
(2, 'Ikatan Kimia', '   <div class=\"embed-responsive embed-responsive-4by3\">\r\n      <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/vjxoQ8CMmo8&t=4s?rel=0\"></iframe>\r\n   </div>\r\nIkatan kimia merupakan gaya yang mengikat dua atom atau lebih untuk membuat senyawa atau molekul kimia. Ikatan itulah yang akan menjaga atom tetap bersama dalam suatu senyawa yang dihasilkan. Namun, ikatan tersebut berbeda-beda lho, guys. Ada ikatan kuat seperti yang terjadi pada ikatan kovalen, ionik, dan logam. Ada juga ikatan lemah yang terjadi pada interaksi dipol-dipol, gaya dispersi London, dan ikatan hidrogen.\r\n\r\nSemakin kuat ikatan kimia yang terjadi, maka akan semakin stabil senyawa yang dihasilkannya. Sebaliknya, semakin lemah ikatan kimia yang terjadi, akan semakin tidak stabil senyawa yang dihasilkannya, dan dapat mengalami reaksi lain untuk membuatnya lebih stabil. Dalam pembentukannya, ikatan tersebut dipengaruhi oleh elektron valensi. Apa itu elektron valensi? Yaitu elektron yang berada pada kulit terluar suatu atom.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kimiaxii`
--

CREATE TABLE `kimiaxii` (
  `id` int(11) NOT NULL,
  `namaMateri` varchar(100) NOT NULL,
  `penjelasan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kimiaxii`
--

INSERT INTO `kimiaxii` (`id`, `namaMateri`, `penjelasan`) VALUES
(2, 'Ikatan Kimia', '   <div class=\"embed-responsive embed-responsive-4by3\">\r\n      <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/vjxoQ8CMmo8&t=4s?rel=0\"></iframe>\r\n   </div>\r\nIkatan kimia merupakan gaya yang mengikat dua atom atau lebih untuk membuat senyawa atau molekul kimia. Ikatan itulah yang akan menjaga atom tetap bersama dalam suatu senyawa yang dihasilkan. Namun, ikatan tersebut berbeda-beda lho, guys. Ada ikatan kuat seperti yang terjadi pada ikatan kovalen, ionik, dan logam. Ada juga ikatan lemah yang terjadi pada interaksi dipol-dipol, gaya dispersi London, dan ikatan hidrogen.\r\n\r\nSemakin kuat ikatan kimia yang terjadi, maka akan semakin stabil senyawa yang dihasilkannya. Sebaliknya, semakin lemah ikatan kimia yang terjadi, akan semakin tidak stabil senyawa yang dihasilkannya, dan dapat mengalami reaksi lain untuk membuatnya lebih stabil. Dalam pembentukannya, ikatan tersebut dipengaruhi oleh elektron valensi. Apa itu elektron valensi? Yaitu elektron yang berada pada kulit terluar suatu atom.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matematikax`
--

CREATE TABLE `matematikax` (
  `id` int(11) NOT NULL,
  `namaMateri` varchar(100) NOT NULL,
  `penjelasan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matematikax`
--

INSERT INTO `matematikax` (`id`, `namaMateri`, `penjelasan`) VALUES
(2, 'Perpangkatan', '   <div class=\"embed-responsive embed-responsive-4by3\">\r\n      <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/IhZBkl01LQM&t=11s?rel=0\"></iframe>\r\n   </div>\r\nPerpangkatan adalah operasi matematika untuk perkalian berulang suatu bilangan sebanyak pangkatnya. Pangkat suatu bilangan adalah angka yang ditulis lebih kecil dan terletak agak ke atas. Berdasarkan semantik penulisan huruf disebut dengan superscript, contoh: 2², 3², 4³, dan lainnya. Dalam bahasa inggris, perpangkatan disebut dengan \"power\" atau \"exponent\". Berikut dijelaskan mengenai cara menghitung perpangkatan, sifat, tabel pangkat 2, 3, dan 4.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matematikaxi`
--

CREATE TABLE `matematikaxi` (
  `id` int(11) NOT NULL,
  `namaMateri` varchar(100) NOT NULL,
  `penjelasan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matematikaxi`
--

INSERT INTO `matematikaxi` (`id`, `namaMateri`, `penjelasan`) VALUES
(2, 'Perpangkatan', '   <div class=\"embed-responsive embed-responsive-4by3\">\r\n      <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/IhZBkl01LQM&t=11s?rel=0\"></iframe>\r\n   </div>\r\nPerpangkatan adalah operasi matematika untuk perkalian berulang suatu bilangan sebanyak pangkatnya. Pangkat suatu bilangan adalah angka yang ditulis lebih kecil dan terletak agak ke atas. Berdasarkan semantik penulisan huruf disebut dengan superscript, contoh: 2², 3², 4³, dan lainnya. Dalam bahasa inggris, perpangkatan disebut dengan \"power\" atau \"exponent\". Berikut dijelaskan mengenai cara menghitung perpangkatan, sifat, tabel pangkat 2, 3, dan 4.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matematikaxii`
--

CREATE TABLE `matematikaxii` (
  `id` int(11) NOT NULL,
  `namaMateri` varchar(100) NOT NULL,
  `penjelasan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matematikaxii`
--

INSERT INTO `matematikaxii` (`id`, `namaMateri`, `penjelasan`) VALUES
(2, 'Perpangkatan', '   <div class=\"embed-responsive embed-responsive-4by3\">\r\n      <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/IhZBkl01LQM&t=11s?rel=0\"></iframe>\r\n   </div>\r\nPerpangkatan adalah operasi matematika untuk perkalian berulang suatu bilangan sebanyak pangkatnya. Pangkat suatu bilangan adalah angka yang ditulis lebih kecil dan terletak agak ke atas. Berdasarkan semantik penulisan huruf disebut dengan superscript, contoh: 2², 3², 4³, dan lainnya. Dalam bahasa inggris, perpangkatan disebut dengan \"power\" atau \"exponent\". Berikut dijelaskan mengenai cara menghitung perpangkatan, sifat, tabel pangkat 2, 3, dan 4.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biologix`
--
ALTER TABLE `biologix`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `biologixi`
--
ALTER TABLE `biologixi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `biologixii`
--
ALTER TABLE `biologixii`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dataguru`
--
ALTER TABLE `dataguru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datasiswa`
--
ALTER TABLE `datasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fisikax`
--
ALTER TABLE `fisikax`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fisikaxi`
--
ALTER TABLE `fisikaxi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fisikaxii`
--
ALTER TABLE `fisikaxii`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kimiax`
--
ALTER TABLE `kimiax`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kimiaxi`
--
ALTER TABLE `kimiaxi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kimiaxii`
--
ALTER TABLE `kimiaxii`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `matematikax`
--
ALTER TABLE `matematikax`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `matematikaxi`
--
ALTER TABLE `matematikaxi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `matematikaxii`
--
ALTER TABLE `matematikaxii`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biologix`
--
ALTER TABLE `biologix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `biologixi`
--
ALTER TABLE `biologixi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `biologixii`
--
ALTER TABLE `biologixii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `dataguru`
--
ALTER TABLE `dataguru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `datasiswa`
--
ALTER TABLE `datasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `fisikax`
--
ALTER TABLE `fisikax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `fisikaxi`
--
ALTER TABLE `fisikaxi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `fisikaxii`
--
ALTER TABLE `fisikaxii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kimiax`
--
ALTER TABLE `kimiax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kimiaxi`
--
ALTER TABLE `kimiaxi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kimiaxii`
--
ALTER TABLE `kimiaxii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `matematikax`
--
ALTER TABLE `matematikax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `matematikaxi`
--
ALTER TABLE `matematikaxi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `matematikaxii`
--
ALTER TABLE `matematikaxii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
