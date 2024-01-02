-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 20 Okt 2023 pada 09.32
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ektg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confir_password` varchar(255) NOT NULL,
  `poto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `confir_password`, `poto`, `created_at`, `updated_at`) VALUES
('98c928a3-78e3-4b13-8b3c-ad06e6042395', 'Admin Base', 'admin', '$2y$10$w6s5ttC.zCCGtY7XoBEyEe0ecDQF9GsBLBaZo7OuBmQfLp6/gg0sm', 'bolehbise', 'app/user/1679897376-fbAJq.jpg', '2023-09-17 15:32:56', '2023-09-17 15:32:56'),
('9a664e09-9d35-490f-89ac-468bd73ddbbe', 'Pengelola Wisata', 'admin', '$2y$10$86IxB1TOJyws5jvJiLjnBeEq4JR7x4D3rJb1pTwFd41oSpYDHSVIK', '111', 'app/user/1697641864-SidyC.png', '2023-10-18 08:11:05', '2023-10-18 08:11:05'),
('9a664e3c-d217-4ce5-afd9-d12dbd1edbe3', 'Pelaku Usaha', 'admin', '$2y$10$OlSCbTcpFfIPZ9h/zi/mP.lK5NOsmlIVH7I96XhPYt/XZPTFa5EwS', '222', 'app/user/1697641899-HgT3T.png', '2023-10-18 08:11:39', '2023-10-18 08:11:39'),
('9a664e72-1c51-4360-adb1-7efc29db7b0c', 'Dinas', 'admin', '$2y$10$VN4m1kIv428fXAxcZkls1uLrTr8pQ5yw2gXkrKNJkhfAa3DKCL.5.', '333', 'app/user/1697641934-tF4i1.png', '2023-10-18 08:12:14', '2023-10-18 08:12:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `atraksi_wisata`
--

CREATE TABLE `atraksi_wisata` (
  `id` char(36) NOT NULL,
  `id_kategori` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `destinasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `deskripsi` text,
  `nama_pengelola` varchar(255) DEFAULT NULL,
  `no_pengelola` varchar(15) DEFAULT NULL,
  `hari_buka` varchar(255) DEFAULT NULL,
  `jam_buka` time DEFAULT NULL,
  `jam_tutup` time DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `sumber_foto` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `rekomendasi` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `atraksi_wisata`
--

INSERT INTO `atraksi_wisata` (`id`, `id_kategori`, `nama`, `alamat`, `destinasi`, `deskripsi`, `nama_pengelola`, `no_pengelola`, `hari_buka`, `jam_buka`, `jam_tutup`, `foto`, `sumber_foto`, `lat`, `lng`, `rekomendasi`, `created_at`, `updated_at`) VALUES
('98db15ad-6819-4fe1-b6e1-dea57e72ff7b', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Laman Randu', 'Desa Laman Satong, Kec. MHU', '-', 'Desa Wisata Laman Satong adalah kawasan wisata perdesaan yang berada di Kecamatan Matan Hilir Utara, Kab. Ketapang - Kalimantan Barat, yang memiliki lebih dari 7 destinasi wisata alam-budaya yang dikelola bersama oleh masyarakat desa, taman nasional, sektor swasta dan pemerintah daerah.\r\nDengan jarak relatif dekat dari kota dan mengangkat tema wisata rimba dan budaya, desa Laman Satong menawarkan petualangan penuh pengalaman baru di Kabupaten Ketapang.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680667289-ihyt1.jpg', 'Jadesta', '-1.423812938709199', '110.24775793844907', 2, '2023-10-16 04:08:34', '2023-10-16 04:08:34'),
('98db16c8-38b2-4dd1-80d3-4e655a48ea7a', '98c9bfd4-8172-4516-8f61-40e214a22cae', 'Taman Batu Menanti', 'Desa Jelayan, Kec. Tumbang Titi', '-', 'Objek Wisata TamanBatu Menanti Terletak di Desa Jelayan Kecamatan Tumbang Titi Kabupaten Ketapang Propinsi Kalimantan Barat yang dikelola langsung oleh Pemerintah Desa Jelayan dan Pokdarwis. Menawarkan Wahana Permainan Sepeda Air; Wisatawan dapat bekeliling di Danau seluas 5.625 meter persegi, Wisata Alam; Wisatawan dapat mendaki bukit dan dapat menikmati pemandangan alam sekitar ketika berada di puncak, Wisata Budaya; Wisatawan dapat melihat, menikmati dan mengikuti kegiatan Adat, seni dan budaya-Susur Sungai-Pengrajin-kuliner, dls. Objek wisata ini berjarak 2 KM dari pusat kecamatan, 98 KM dari Kabupaten', '-', '-', 'Senin - Minggu', '08:00:00', '17:00:00', 'app/Atraksi-Wisata/1680667474-GtHDB.jpg', 'Masata', '-1.8112969318946333', '110.62717457322107', 2, '2023-10-16 04:10:07', '2023-10-16 04:10:07'),
('98db42a2-0605-4d54-a7d3-f4202608d119', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Taman Suci Khaluad', 'Desa Tanjungpura Kec. Muara Pawan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680674831-Q3XBD.jpg', 'Negeri Kayong', '-1.722821439713343', '110.18934130301257', 2, '2023-10-16 04:21:19', '2023-10-15 21:21:19'),
('98db4912-2ccb-4d1a-9291-f2bccc158230', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Makam Tanjungpura', 'Desa Tanjungpura Kec. Muara Pawan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680675911-uPq6x.jpg', 'Borneotribun.com', '-1.7241270929663823', '110.20792927062296', 2, '2023-10-16 04:21:26', '2023-10-15 21:21:26'),
('98db4bbe-883d-4210-89ec-de70db5dd216', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Masjid Agung Al Ikhlas Ketapang', 'Jl. H.Agus Salim, Kec. Delta Pawan', '-', 'Pengunjung dapat menikmati seni arsitektur khas Melayu pada ukiran masjid, spot foto yang menarik dan tentunya beribadah.', '-', '-', 'Senin - Minggu', '00:00:00', '00:00:00', 'app/Atraksi-Wisata/1680676360-gwEfD.jpg', 'Anugrahkubah.com', '-1.8382450053503234', '109.97418226214754', 1, '2023-10-17 07:48:57', '2023-10-17 00:48:57'),
('98db4cac-71bf-4d70-9cd3-632ce02f149f', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Gereja Katedral St. Gemma Galgani', 'Jl. Ahmad Yani, Kec. Delta Pawan', '-', 'Pengunjung dapat menikmati ukiran di seluruh bagian gereja dan ceritanya, serta melihat langsung proses pembuatan ukiran di bagian belakang gereja.', '-', '-', 'Senin - Minggu', '00:00:00', '00:00:00', 'app/Atraksi-Wisata/1680676516-mFqCX.jpg', 'kompas.id', '-1.8487749168707486', '109.97367021171252', 1, '2023-10-17 07:48:54', '2023-10-17 00:48:54'),
('98db4d6a-3548-4f7c-933b-a1ef867584ba', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Kleteng Tua Pek Kong', 'Jl. Merdeka, Kel. Kantor, Kec. Delta Pawan', '-', '-', '-', '-', 'Senin - Minggu', '00:00:00', '00:00:00', 'app/Atraksi-Wisata/1680676640-22bNM.jpg', 'celebes.co', '-1.8472674554613786', '109.97024942469514', 1, '2023-10-17 07:48:50', '2023-10-17 00:48:50'),
('98db4e2c-dc6f-40ef-a739-eaa09fe55b4a', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Wisma Hulu Sungai', 'Kelurahan Mulia Baru, Kec. Delta Pawan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680676768-7Siis.jpg', 'facebook ex Bertus', '-1.8586552430793988', '109.97858343663006', 1, '2023-10-16 04:10:40', '2023-10-16 04:10:40'),
('98db4f45-803b-49f5-a341-b878b51f17f3', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Tugu Perdamaian', 'Jl. Ahmad Yani, Kel. Kantor, Kec. Delta Pawan', '-', 'Pengunjung dapat menikmati ukiran dan maknanya, serta melihat mengabadikan moment dengan berfoto.', '-', '-', 'Senin - Minggu', '00:00:00', '00:00:00', 'app/Atraksi-Wisata/1680676952-RQq41.jpg', 'diLokasi.com', '-1.8490942401662078', '109.97059570986515', 1, '2023-10-16 04:10:45', '2023-10-16 04:10:45'),
('98db4fe8-53e4-4342-995a-88179e8537c1', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Tugu Ale-Ale', 'Kelurahan Tengah, Delta Pawan', '-', '-', '-', '-', 'Senin - Minggu', '00:00:00', '00:00:00', 'app/Atraksi-Wisata/1680677058-Jfb0d.jpg', 'direktoripariwisata.id', '-1.8431344790116748', '109.96941526753585', 1, '2023-10-16 04:10:50', '2023-10-16 04:10:50'),
('98db50f1-d0f2-4d96-a4a7-8b72dc683e12', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Gua Maria Manjau', 'Laman Satong, Kec. Matan Hilir Utara', '-', 'Pengunjung bisa berziarah, berdoa, melakukan jalan salib di track yang tersedia, dan menikmati keindahan alam serta kesegaran dari air gunung yang mengalir, tentunya spot foto yang sayang untuk dilewatkan.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680677232-al4Vw.jpg', 'soamaps.com', '-1.3817799131200124', '110.18134423625315', 1, '2023-10-16 04:10:54', '2023-10-16 04:10:54'),
('98db520a-0649-4bd2-88d9-67eb95e022fe', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Gua Maria Bukit Kuri', 'Desa Sinar Kuri, Kec. Sungai laur', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680677416-YmXcq.jpg', 'facebook Riko Kayong', '-0.9626194531160215', '110.4943487368334', 1, '2023-10-16 04:10:59', '2023-10-16 04:10:59'),
('98db5364-f50b-4595-bbb8-302bebd22c73', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Keraton Kerajaan Matan Tanjungpura', 'Kelurahan Mulia Kerta, Kec, Benua Kayong', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680677643-205h0.jpg', 'kompas.com', '-1.8616001383488767', '109.98084817440514', 1, '2023-10-16 04:11:03', '2023-10-16 04:11:03'),
('98db540d-b64b-4db7-b92b-951ac2525ad9', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Makam Keramat 7', 'Kelurahan Mulia Kerta, Kec, Benua Kayong', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680677754-ga96N.jpg', 'google.com', '-1.8500480332713611', '109.9931378810298', 1, '2023-10-16 04:11:08', '2023-10-16 04:11:08'),
('98db54a0-f349-47dc-815f-2d5e6c19a804', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Makam Keramat 9', 'Desa Negeri Baru, Kec. Benua Kayong', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680677850-L4DmE.jpg', 'kemdikbud1', '-1.8577678677203264', '110.01839882501497', 1, '2023-10-16 04:11:12', '2023-10-16 04:11:12'),
('98db5523-5ecf-4138-b37e-03bb8e81caae', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Makam Pangeran Iranata', 'Desa Negeri Baru, Kec. Benua Kayong', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680677936-xjS21.jpg', 'kemdikbud', '-1.8438170498070194', '-110.00910139308189', 1, '2023-10-16 04:12:07', '2023-10-16 04:12:07'),
('98db5635-b00b-49d5-934c-4883be6506ae', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Makam Gusti Muhammad Sabran', 'Kelurahan Mulia Kerta, Kec. Benua Kayong', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680678116-bHV4G.jpg', 'kebudayaan.kemendikbud.com-bpcdkaltim', '-1.8612223440467408', '109.98234364144432', 1, '2023-10-16 04:24:47', '2023-10-15 21:24:47'),
('98db5736-e1f0-4f84-92d8-fe30c2a03bb3', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Candi Negeri Baru', 'Desa Negeri Baru, Kec, Benua Kayong', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680678284-uIEqY.jpg', 'googlereview-Dr.Simon Liem', '-1.8443066333432976', '110.00960884033138', 1, '2023-10-16 04:12:01', '2023-10-16 04:12:01'),
('98db5844-2d49-472b-be2c-f93af6e554b4', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Makam Ratu Elok', 'Desa Ratu Elok, Kec, Manis Mata', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680678461-UJGeW.jpg', 'facebook Eko Susanto', '-2.480394164180033', '111.04573676972441', 1, '2023-10-16 04:11:58', '2023-10-16 04:11:58'),
('98db59b9-bb71-4e63-9c0b-eb78accf4bcf', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pantai Tanjung Belandang', 'Desa Sungai Awan Kiri, Kec, Muara Pawan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1697532506-0aPBC.jpg', 'flickr Sukadi Karmono', '-1.7212012143406952', '109.99488585219383', 2, '2023-10-17 08:48:26', '2023-10-17 01:48:26'),
('98db5dc6-5f45-48ee-af45-4cd465a859bc', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pantai Air Mata Permai', 'Desa Sungai Awan Kanan, Kec, Muara Pawan', '-', 'Pengunjung dapat menikmati view mangrove, bermain sepeda listrik, susur sungai dan minuman serta hidangan khas khususnya ale-ale', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680679385-0P3wc.jpg', 'google.com', '-1.744037978077842', '109.98067457441739', 2, '2023-10-16 05:03:50', '2023-10-15 22:03:50'),
('98db5f01-f0f0-42dc-9839-2aec3a292890', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Danau Ulak Medang', 'Desa Ulak Medang, Kec, Muara Pawan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680679592-ywWZE.jpg', 'yayasan IAR ktg', '-1.6649344936540111', '110.25096950780429', 2, '2023-10-16 05:03:53', '2023-10-15 22:03:53'),
('98db604e-1d1a-451e-b603-8095ad6d2b0c', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Wisata Hutan Mangrove', 'Desa Kuala Satong, Kec, Matan Hilir Utara', '-', 'Pengunjung bisa menikmati suguhan minuman kuliner terbuat dari gedabu, berkeliling mengamati manggrove, memancing , atau memanen kepiting  bakau.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680679809-FzpZm.jpg', 'yayasan IAR Indonesia', '-1.4054833864226137', '110.07507712520396', 1, '2023-10-16 04:11:41', '2023-10-16 04:11:41'),
('98db60d3-09e0-4fd2-9fd5-884ecf417979', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pulau Sempadi', 'Desa Kuala Satong, Kec, Matan Hilir Utara', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680679897-iaT0P.jpg', 'facebook Setra', '-1.4321545994922746', '110.01803707038779', 1, '2023-10-16 04:11:37', '2023-10-16 04:11:37'),
('98db62c4-81db-4aeb-8d84-10086d2b8923', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Riam Berasap', 'Laman Satong, Kec. Matan Hilir Utara', '-', 'Pengunjung bisa menikmati tanaman khas hutan tropis dan fauna yang ada di dalamnya, serta keindahan sungai berbatu dan riamnya yang eksotik', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680680223-urXOz.jpg', 'ketapangcityku.blogspot', '-1.3769880843855626', '110.17558998928764', 1, '2023-10-16 04:11:33', '2023-10-16 04:11:33'),
('98db63e1-ffe2-4eee-8dfe-7b0074506c55', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Gua Mentawai', 'Desa Sinar Kuri, Kec. Sungai laur', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680680410-E2xlI.png', 'istimewa danis', '-0.9555948029295401', '110.48776907344094', 1, '2023-10-16 04:13:07', '2023-10-16 04:13:07'),
('98db6484-f846-4182-a38d-fd61fac3e796', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Bukit Kuri', 'Desa Sinar Kuri, Kec. Sungai laur', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680680516-8rMCC.jpg', 'Googlemaps Angga Dennis', '-0.9377613421400599', '110.47205870355586', 1, '2023-10-16 04:13:16', '2023-10-16 04:13:16'),
('98db658b-8515-4a35-91e0-274f34414433', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Kawasan Wisata Mangrove Pantai Celincing', 'Desa Sukabaru, Kec, Banua Kayong', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680680689-NHf4l.jpg', 'tribun pontianak', '-1.8260067836347789', '109.90782523870024', 1, '2023-10-16 04:13:13', '2023-10-16 04:13:13'),
('98db6635-8d5a-46ea-8de0-f059080534aa', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Wisata Air Kanal', 'Desa Negeri Baru, Kec. Benua Kayong', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680680800-VYprb.png', 'istimewa jelajah ketapang', '-1.8633947743160082', '110.0242432320027', 1, '2023-10-16 04:13:42', '2023-10-16 04:13:42'),
('98db66c9-1ad7-4d16-b2f8-7437446455ba', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Riam Inam Kelima', 'Desa Sungai Melayu, Kec, Sungai Melayu Rayak', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680680897-bZNdF.jpg', 'impianclub.com', '-1.7819520027455689', '110.46113247692195', 1, '2023-10-16 04:13:38', '2023-10-16 04:13:38'),
('98db6770-30c0-4189-bd7b-4ba9bd6ea5b7', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Bukit Bepampang', 'Kecamatan Sungai Melayu Rayak', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680681006-sG94J.jpg', 'soamaps.com', '-1.782769551114326', '110.45252248871736', 1, '2023-10-16 04:13:35', '2023-10-16 04:13:35'),
('98db67e3-25f7-44df-b21e-b9a43c52033c', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Bukit Jelayan', 'Kecamatan Sungai Melayu Rayak', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680681081-uqsiM.png', 'facebook Matius Bruto', '-1.8080229805801147', '110.6335539085302', 1, '2023-10-16 04:13:32', '2023-10-16 04:13:32'),
('98db691e-d2c3-4ea8-ab1d-bdfdf66076bf', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Bukit Lalang Panjang', 'Desa Pebihingan, Kec. Pemahan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680681288-TKjUW.jpg', 'soamaps.com', '-1.7570247141443502', '110.56275112828263', 1, '2023-10-16 04:13:28', '2023-10-16 04:13:28'),
('98db6a13-6c30-4531-99e9-5e5dca4243cc', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Bukit Batu Menanti', 'Dusun Bekapas, Desa Jelayan, Kec. Tumbang Titi', '-', 'Objek Wisata Bukit Batu Menanti  Terletak di Desa Jelayan Kecamatan Tumbang Titi Kabupaten Ketapang Propinsi Kalimantan Barat  yang dikelola langsung oleh Pemerintah Desa Jelayan dan Pokdarwis. Menawarkan Wahana Permainan Sepeda Air; Wisatawan dapat bekeliling di Danau seluas 5.625 meter persegi, Wisata Alam; Wisatawan dapat mendaki bukit dan dapat menikmati pemandangan alam sekitar ketika berada di puncak, Wisata Budaya; Wisatawan dapat melihat, menikmati dan mengikuti kegiatan Adat, seni dan budaya-Susur Sungai-Pengrajin-kuliner, dls. Objek wisata ini berjarak 2 KM dari pusat kecamatan, 98 KM dari Kabupaten', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680681449-Duxcs.jpg', 'masata', '-1.8095074274977305', '110.62673456014325', 1, '2023-10-16 04:13:22', '2023-10-16 04:13:22'),
('98db6aac-6b98-4df3-8ef7-af597a18d9e7', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Kolam Wisata Pagung Alam', 'Dusun Bekapas, Desa Jelayan, Kec. Tumbang Titi', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680681549-QjcDA.jpg', 'facebook Dolang', '-1.8104458878269223', '110.62718874406642', 1, '2023-10-16 04:14:24', '2023-10-16 04:14:24'),
('98db6b53-1568-4d3a-b061-a34dd839b7f7', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Wisata Riam Salahadan', 'Dusun Batu Bulan, Desa Tanjung Beulang, Kec. Tumbang Titi', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680681658-rWy86.jpg', 'helpmecovid', '-', '-', 1, '2023-10-16 04:14:20', '2023-10-16 04:14:20'),
('98db6bdb-811f-4ff2-8c13-3c002a641e27', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Bukit Kengkodang', 'Desa Batu Tajam 1, Kec. Tumbang Titi', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680681748-YQcUu.png', 'facebook Kec. Tumbang Titi', '-', '-', 1, '2023-10-16 04:14:16', '2023-10-16 04:14:16'),
('98db6c78-1e94-4bc8-a1f6-61286e3633c6', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Riam Rayo', 'Desa Beringin Rayo, Kec. Tumbang Titi', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680681850-ly9E1.jpg', 'facebook Riki Arian E', '-', '-', 1, '2023-10-16 04:14:13', '2023-10-16 04:14:13'),
('98db6d0b-ce91-4f84-8dc9-931e856b7d39', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Wisata Air Terjun Karang Dangin', 'Desa Karang Dangin, Kec. Jelai Hulu', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680681947-hoKwU.jpg', 'monga', '-', '-', 1, '2023-10-16 04:14:09', '2023-10-16 04:14:09'),
('98db6da3-8eb7-45fc-b9d5-bb2fad836353', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Air Terjun Silingan Begondum', 'Kecamatan Jelai Hulu', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680682046-bYCv9.jpg', 'Super Apps-kompas.com', '-', '-', 1, '2023-10-16 04:14:05', '2023-10-16 04:14:05'),
('98db6e5e-a3b4-4787-898c-c4950b4a3f10', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pantai Penage', 'Desa Sungai Jawi, Kec. Matan Hilir Selatan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680682169-A8ulW.jpg', 'youtube Satya Anggriawan', '-', '-', 1, '2023-10-16 04:14:02', '2023-10-16 04:14:02'),
('98db6f48-7399-4794-8da9-2b6c293912dc', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pantai Tanjung Batu', 'Desa Sungai Nanjung, Kec. Matan Hilir Selatan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680682322-fNO1y.jpg', 'indonesia kaya', '-2.1379207234841204', '110.11035517598157', 1, '2023-10-16 04:13:59', '2023-10-16 04:13:59'),
('98db6ff8-69a5-453a-a2e2-cf55a6a588ce', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pantai Pagar Mentimun', 'Desa Pagar Mentimun, Kec. Matan Hilir Selatan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680682438-Yz3HE.jpg', 'youtube backpacker nekat', '-2.239755975938', '110.08194261466691', 1, '2023-10-16 04:13:55', '2023-10-16 04:13:55'),
('98db70ec-d468-4f2c-abab-cd6a77b1a6ae', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pantai Sisik (Tanjung Gangse)', 'Desa Mekar Utama, Kec. Kendawangan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680682598-o0bu8.jpg', 'Anggun Safitri', '-2.427491500824495', '110.1532745297574', 1, '2023-10-16 04:13:51', '2023-10-16 04:13:51'),
('98db724f-6bc5-4e52-937c-cdf9f6831fca', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pantai Lagoon Belanda', 'Kecamatan Kendawangan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680682830-B892d.png', 'vibizmedia.com', '-', '-', 1, '2023-10-16 04:14:50', '2023-10-16 04:14:50'),
('98db731a-29ba-4e92-9a2c-d7bf56252087', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Air Terjun Batu Arang', 'Desa Klukup Blantak, Kec. Kendawangan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680682963-fodBJ.jpg', 'facebook Asep WM', '-2.353682946568706', '110.28691966293765', 1, '2023-10-16 04:14:46', '2023-10-16 04:14:46'),
('98db73b4-beac-4def-91d8-446b0c4b9597', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pantai Pasir Putih', 'Desa Sungai Tengar, Kec. Kendawangan', '-', 'Kawasan wisata di dusun Sungai Gantang ini menawarkan suasana yang nyaman dan fasilitas yang lengkap untuk berkumpul bersama keluarga.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680683064-YXSE5.jpg', 'teraju.id', '-2.4062221476218966', '110.15310263956736', 1, '2023-10-16 04:14:43', '2023-10-16 04:14:43'),
('98db74a5-8912-4b0f-b39f-6c15b4bfa192', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pulau sawi', 'Desa Mekar Utama, Kec. Kendawangan', '-', 'Di pulau ini kamu tidak akan hanya melihat keindahan alam saja, namun juga bisa menemukan wisata pendidikan cinta bahari yang telah dikelola oleh masyarakat dan Pemerintah setempat. Di sini terdapat pula cagar alam dan areal konservasi yang bisa menjadi tujuan wisata menarik. Pulau Sawi ini berlokasi di desa Sungai Tengar, Kecamatan Kendawangan, sekitar 70 Km dari Kota Ketapang.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680683222-31LhU.jpg', 'masata', '-2.3720878718844887', '110.07118792589013', 1, '2023-10-16 04:14:40', '2023-10-16 04:14:40'),
('98db7546-1aa9-4457-b789-35b947f93455', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pulau Cempedak', 'Desa Mekar Utama, Kec. Kendawangan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680683327-MjBq2.png', 'istimewa Setra', '-2.6325809284710973', '110.12366133073512', 1, '2023-10-16 04:14:36', '2023-10-16 04:14:36'),
('98db75c2-92af-445d-a92b-1567b075a116', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pulau Bawal', 'Desa Mekar Utama, Kec. Kendawangan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680683409-umqjM.jpg', 'istimewa jelajah ketapang', '-2.702735421973933', '110.09226224932522', 1, '2023-10-16 04:14:32', '2023-10-16 04:14:32'),
('98db777d-f279-4501-9f49-5f50b691e661', '98c9bfd4-8172-4516-8f61-40e214a22cae', 'Hutan Kota Ketapang', 'Kelurahan Sukaharja, Kec. Delta Pawan', '-', 'Pengunjung dapat menikmati pemandangan  tumbuhan khas hutan tropis dan sungai pawan , serta macaca yang banyak dijumpai di sepanjang track. Bagi yang memiliki hobi memancing hutan kota menjadi salah satu pilihan spot memancing.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680683700-y2DsG.jpg', 'facebook Teluk Akar Begantung', '-', '-', 1, '2023-10-16 04:15:52', '2023-10-16 04:15:52'),
('98db790e-5b92-4c07-a980-ecc2f8184629', '98c9bfd4-8172-4516-8f61-40e214a22cae', 'Taman Kota Tanjung Pura', 'Jl. Urip Sumarjo, Kel. Kantor, Kec. Delta Pawan', '-', 'Pengunjung dapat berolah raga, atau sekedar menikmati suasana taman bersama teman dan keluarga, banyak pilihan jajanan yang bisa dinikmati', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680683962-5D68G.jpg', 'facebook sorot10news', '-1.8455120815681887', '109.97782633972605', 1, '2023-10-16 04:17:38', '2023-10-16 04:17:38'),
('98db799f-0c35-420c-9492-647691a44e2a', '98c9bfd4-8172-4516-8f61-40e214a22cae', 'Taman Kota Merdeka', 'Jl. Merdeka, Kel. Kantor, Kec. Delta Pawan', '-', 'Pengunjung dapat menikmati view sungai pawan dan menikmati jajanan, serta melihat - lihat lokasi pasar dengan nuansa kota lama.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680684057-yDo84.jpg', 'tribunpontianak-istimewa', '-1.8495312090827718', '109.97018806872826', 1, '2023-10-16 04:17:33', '2023-10-16 04:17:33'),
('98db7a50-db01-463b-bae2-04e807c61074', '98c9bfd4-8172-4516-8f61-40e214a22cae', 'Desa Wisata Manjau Laman Satong', 'Laman Satong, Kec. Matan Hilir Utara', '-', 'Pengunjung dapat menikmati aktifitas warga yang masih kental dengan budaya dan alamnya yang masih terjaga', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680684173-qNHuL.jpg', 'nasional tempo.co', '-', '-', 1, '2023-10-16 04:17:28', '2023-10-16 04:17:28'),
('98db7b06-c09d-4771-9c0a-95b35017663c', '98c9bfd4-8172-4516-8f61-40e214a22cae', 'Kolam Renang Bambu', 'Kecamatan Sungai Melayu Rayak', '-', NULL, '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680684292-DpL7s.jpg', 'facebook titik', '-', '-', 1, '2023-10-16 04:17:24', '2023-10-16 04:17:24'),
('98db7b84-2540-4a31-a3d3-745a91f75c86', '98c9bfd4-8172-4516-8f61-40e214a22cae', 'Tropical Waterpark', 'Jl. H. Agus Salim, Sampit, Kec. Delta Pawan, Kabupaten Ketapang, Kalimantan Barat 78813', '-', 'Tropical Waterpark adalah kolam renang, taman air yang berlokasi  di Ketapang. Disini anda bisa menikmati berenang sekaligus berekreasi dengan teman maupun keluarga anda.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680684375-pj2u0.jpg', 'helpmecovid', '-1.832456076230178', '109.973738682823', 1, '2023-10-16 04:17:21', '2023-10-16 04:17:21'),
('98db7c57-d3d9-4e1f-896d-ca14f0388576', '98c9bfd4-8172-4516-8f61-40e214a22cae', 'Taman Kedondong', 'Bundaran Tsanawiyah Jalan S. Parman,  Kec. Delta Pawan, Kabupaten Ketapang', '-', 'TAMAN Kedondong di pertigaan Tsyanawiyah Ketapang yang berhadapan langsung dengan Tugu Kedondong merupakan salah satu ikon kota ketapang yang didesain berbentuk pohon kedondong karena merupakan ciri khas Kota Ketapang.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1697170051-nmFZ6.jpg', 'Youtube Sorot10news', '-1.838529291400942', '109.97797440508845', 1, '2023-10-16 04:17:17', '2023-10-16 04:17:17'),
('98db7efb-65cc-4d78-b8b5-4e819e35d26c', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Hutan Desa Jelayan', 'Desa Jelayan, Kec. Tumbang Titi', '-', 'Desa Sungai Jelayan merupakan salah satu Desa yang ada di Kecamatan Kendawangan Kabupaten Ketapang yang masih mempunyai potensi untuk dilakukan pengelolaan berkelanjutan. Evaluasi Kemampuan lahan merupakan salah satu upaya untuk mengatasi penurunan degradasi lahan. Kemampuan lahan adalah penilaian atas satuan lahan untuk penggunaan tertentu yang dinilai dari masing-masing faktor penghambat. Penelitian ini bertujuan untuk mengetahui karakteristik lahan sesuai parameter kemampuan lahan, menilai sub kelas kemampuan lahan dan memberikan saran penggunaan lahan berdasarkan sub kelas kemampuan lahan di Desa Sungai Jelayan. Tahapan penelitian dimulai dari persiapan, survei pendahuluan, penentuan lokasi penelitian berdasarkan satuan lahan yang terdiri dari jenis tanah, kelas lereng, penggunaan lahan dan terdapat 9 satuan lahan, dan  penentuan titik pengamatan, serta pengamatan dilapangan dan pengambilan sampel tanah, analisis laboratorium, pengolahan data dan penyajian hasil. Hasil penelitian diperoleh 2 ordo tanah yaitu Entisols dan Inceptisols. Hasil evaluasi kemampuan lahan terbagi menjadi lima kelas kemampuan lahan dan sub kelas yaitu kelas II-s, III-s, IV-w, V-w dan VIII-es. Usaha perbaikan atau upaya penggunaan lahan secara lestari dapat dilakukan dengan 5 upaya yaitu garapan intensif, garapan sedang, garapan terbatas, cagar alam/hutan lindung, dan pengembalaan intensif.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680684956-ebWGM.webp', 'the palm scribe', '-1.809247930310821', '110.62470621834788', 1, '2023-10-16 04:17:13', '2023-10-16 04:17:13'),
('98db8046-6dd5-4345-b3c4-18804104036f', '98c9bfd4-8172-4516-8f61-40e214a22cae', 'Gua Maria Kederon', 'Desa Laman Satong, Kec. MHU', '-', 'Gua Maria menjadi salah satu destinasi primadona bukan hanya bagi umat Kristiani namun juga masyarakat umum lainnya. Karena memiliki nuansa alam yang sejuk dan rindang. Lebih dari 1000 pengunjung yang mendatangi tempat ini setiap tahunnya.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680685173-TaM9I.jpg', 'jadesta', '-1.3880199580954775', '110.18124379848508', 1, '2023-10-16 04:17:09', '2023-10-16 04:17:09'),
('98db8183-8559-45b2-8ca3-2c43e79b1507', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Rumah Adat Melayu', 'Jl. Kiyai Mangku Negeri', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680685381-JUjge.png', 'travel.detik.com', '-1.8286452613539632', '110.0034133368606', 1, '2023-10-16 04:17:06', '2023-10-16 04:17:06'),
('98db8220-9529-44e1-bf43-1acee5ceb5be', '98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Rumah Adat Dayak', 'Jl. Kiyai Mangku Negeri', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680685484-GxAl8.png', 'kalbar.inews.id', '-1.8382216549928347', '109.9900599569193', 1, '2023-10-16 04:17:01', '2023-10-16 04:17:01'),
('98db8365-0ead-46c1-9ada-4aa8f54fc3e2', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Sawah Kinjil', 'Desa Kinjil Pesisir, Kec. Benua Kayong', '-', 'Pantai Sungai Kinjil Desa Kinjil Pesisir Kecamatan Benua Kayong Ketapang. Jarak ke lokasi ini sekitar puluhan kilometer dari Ibu Kota Ketapang dengan waktu tempuh ½ atau 1  jam menggunakan sepeda motor atau mobil.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680685696-7CYxr.jpg', 'masata', '-1.8733437268630242', '109.96284853699393', 1, '2023-10-16 04:16:57', '2023-10-16 04:16:57'),
('98db84c2-1196-454b-a1ea-c9813316cd0b', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Laman Besolek', 'Desa Laman Satong, Kec. MHU', 'Hiking, jungle tracking, tubing', 'Berwisata di dalam taman nasional Gunung Palung, menikmati beragam tantangan alam mulai dari hiking, camping, tubie rafting (tubing) dan pengamatan satwa liar', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680685925-w1sRZ.jpg', 'masata', '-1.3712731565827647', '110.22614651023154', 1, '2023-10-16 04:16:53', '2023-10-16 04:16:53'),
('98db8556-7260-4b72-9807-4ba590e0165b', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Kalas Kumpang', 'Desa Laman Satong, Kec. MHU', 'Jungle tracking, camping', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680686022-BiXC1.jpg', 'masata', '-1.3969213340349593', '110.17723864241378', 1, '2023-10-16 04:16:49', '2023-10-16 04:16:49'),
('98db8616-a24e-48fc-a3f1-aa7aa3b5b660', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Tanjung Sekunting', 'Desa Laman Satong, Kec. MHU', 'Pengamatan orang utan, jungle tracking', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680686148-tf4t6.jpg', 'web gitinesia', '-1.4101678166891038', '110.17288152997058', 1, '2023-10-16 04:16:44', '2023-10-16 04:16:44'),
('98dd1e5c-c89d-401d-9c93-285c1db9e616', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Batu Besampak', 'Desa Laman Satong, Kec. MHU', '-', 'Menikmati pemandangan hampir 360 derajat di atas puncak desa Laman Satong.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680754645-OP7kz.jpg', 'Jadesta', '-1.3903025806566431', '110.17835021936591', 1, '2023-10-16 04:16:40', '2023-10-16 04:16:40'),
('98dd1f39-f97e-482a-9b0d-8db1a2f9c080', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Riam Selinsing', 'Desa Laman Satong, Kec. MHU', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680754790-kCIOe.png', 'instagram By @amelia110022', '-1.3649407986157378', '110.25971009263081', 1, '2023-10-16 04:16:36', '2023-10-16 04:16:36'),
('98dd1fd0-da25-4a52-9fb7-365ecdd50e87', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Riam Jerunjung', 'Desa Laman Satong, Kec. MHU', '-', 'Riam Jerunjung adalah kawasan yang berada dalam kawasan TNGP, secara administratif masuk dalam kawasan Desa Laman Satong. Riam Jerunjung berada di Zona Pemanfaatan TNGP. Oleh pihak desa, kawasan ini dijadikan daerah tujuan baru (tempat wisata baru) berbasis alam.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680754889-azlDJ.jpg', 'Jadesta', '-1.344567254022313', '110.1902298222293', 1, '2023-10-16 04:16:31', '2023-10-16 04:16:31'),
('98dd2097-e46a-4904-9db4-a0490cf88f76', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Pantai Sisik', 'Desa Mekar Utama, Kec. Kendawangan', '-', 'Pantai Pasir Sisik Kendawangan terletak di Kabupaten Ketapang, Indonesia. Peringkat Pantai Pasir Sisik Kendawangan adalah 4,3 bintang dari 5 bintang, berdasarkan 7 ulasan pada profil bisnis mereka di Google Maps.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680755020-fLDUB.jpg', 'Instagram @dumpdump', '-2.4311374672272166', '110.15328820537745', 1, '2023-10-16 04:16:26', '2023-10-16 04:16:26'),
('98dd216d-8ca2-4108-84c8-7cdd29d50063', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Sungai Tengar', 'Desa Mekar Utama, Kec. Kendawangan', '-', 'Menjadi salah satu destinasi wisata yang cukup wajib ketika kamu mengunjungi Kabupaten Ketapang, yakni Sungai Tengar. Kamu bisa menyusuri Sungai Tengar dengan menggunakan perahu nelayan sembari menikmati keindahan pinggiran sungai. Ada salah satu aktifitas yang dilakukan wisatawan di tempat wisata di Kalbar ini, yakni memancing. Buat kamu yang memiliki hobi memancing, Sungai Tengar bisa menjadi spot terbaik untuk menyaurkan hobi memancing, terutam lebih ke arah hulu Sungai Tengar. Atau kamu juga bisa di muara Sungai Tengar yang begitu banyak pondokan yang menyajikan kuliner khas Kabupaten Ketapang.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680755160-KakLZ.jpg', 'direktori pariwisata', '-2.3562159860030456', '110.14727708191084', 1, '2023-10-16 04:16:21', '2023-10-16 04:16:21'),
('98dd2264-43ed-4ebf-90c4-30d8668925b4', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Air Terjun Kelukup Blantak', 'Desa Mekar Utama, Kec. Kendawangan', '-', 'Kecamatan Kendawangan yang terletak paling selatan Kabupaten Ketapang, merupakan Kecamatan yang banyak menawarkan beragam keindahan alam menakjubkan. Selain pasir putih disepanjang pantai, kali ini muncul Destinasi tujuan wisata yang tidak kalah menarik. Distinasi yang dimaksud adalah Air Terjun Tujuh Tingkat.', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680755321-Qbv1P.jpg', 'Instagram @ernaktp1608', '-2.35439529092276', '110.28703913940468', 1, '2023-10-16 04:16:13', '2023-10-16 04:16:13'),
('98dd254a-108d-4e26-9103-11680605df77', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Hutan Desa Pematang Gadung', 'Desa Pematang Gadung, Kec. Matan Hilir Selatan', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680755808-uiKLc.png', 'facebook Setra', '-2.000485318164039', '110.14139868132898', 1, '2023-10-16 04:16:10', '2023-10-16 04:16:10'),
('98dd26f5-27b9-4f22-a83c-bb0102ba0df6', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Riam Batu Hitam', 'Simpang Tiga Sembelangaan, Kec. Nanga Tayap, Kab. Ketapang', '-', 'Air Terjun Batu Hitam kini menjadi salah satu pilihan objek wisata di Ketapang, dengan pemandangan alam yang indah, pengunjung bakal disuguhi lingkungan yang asri dan terdapat kebun buah yang bisa dikunjungi. Hadirnya objek wisata ternyata tidak terlepas dari hasil kerjasama antara Kelompok Usaha Perhutanan Sosial Agrowisata (KUPS), LPHD Sembelangaan dengan Bumitama Gunajaya Agro (BGA Grup).', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680756087-hVFoU.jpg', 'istimewa Setra', '-1.495761987856', '110.32726954059532', 1, '2023-10-16 04:16:05', '2023-10-16 04:16:05'),
('98dd27d8-4136-4c53-96fb-ea28020bf065', '98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Air Terjun Lembah Hijau', 'Desa Lembah Hijau Kecamatan Nanga Tayap, Kab. Ketapang', '-', '-', '-', '-', 'Senin - Minggu', '08:00:00', '18:00:00', 'app/Atraksi-Wisata/1680756236-CVGFj.png', 'facebook Ketapang Informasi', '-', '-', 1, '2023-10-16 04:16:02', '2023-10-16 04:16:02'),
('9a552fb4-8ec5-40bb-91b0-b84bd0cbac21', '98c9bfd4-8172-4516-8f61-40e214a22cae', 'Cinepolis Citimall Ketapang', 'Citimall Ketapang Lantai Dasar, Jl. Gatot Subroto, Paya Kumang - Delta Pawan, Kab. Ketapang', 'Bioskop', 'Bioskop Hits dari Meksiko, Satu-satunya tempat menonton berbagai film terbaru di Kabupaten Ketapang dengan fasilitas yang nyaman dan menyenangkan bersama keluarga dan orang-orang tersayang.', 'Handri Karsih', '085245010202', 'Setiap Hari', '11:00:00', '22:00:00', 'app/Atraksi-Wisata/1697170222-2sL0o.jpg', 'Cinepolis Ketapang', '-1.824877', '109.970923', 1, '2023-10-16 04:15:58', '2023-10-16 04:15:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` char(36) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
('99d8c76c-6275-4235-8a92-f59cccdff975', 'Napak Tilas Kabupaten Ketapang 2023', 'Napak Tilas Adalah kilas balik/menelusiri kembali sejarah sebagai upaya mengingat perjuangan para pejuang dan mengenalkan budaya serta dalam rangka akselerasi pembangunan Kabupaten Ketapang.', 'app/Berita/1691563377-sFVM0.jpg', '2023-08-09 06:42:57', '2023-08-09 07:21:35'),
('99d8ce8c-83a9-4f87-9c3c-aad846fe76ed', 'Kejuaraan Sepak Bola Bupati Ketapang Cup 2023 Ditutup', 'Bupati Ketapang Martin Rantan, SH.,M.Sos resmi menutup Kejuaraan sepak bola Piala Bupati Ketapang Cup tahun 2023. Penutupan dilaksanakan saat pertandingan final antara tim Forsas versus Mandau Putra pada Jum’at (28/07/2023) di Stadion Tentemak Ketapang. upati dalam sambutannya menyampaikan penghargaan dan ucapan terima kasih kepada masyarakat, Dispora Ketapang, Panitia Penyelenggara dan pihak-pihak yang terlibat sehingga Piala Bupati 2023 dapat terlaksana dengan sukses.\r\n\r\nBupati Ketapang Martin Rantan, SH.,M.Sos resmi menutup Kejuaraan sepak bola Piala Bupati Ketapang Cup tahun 2023. Penutupan dilaksanakan saat pertandingan final antara tim Forsas versus Mandau Putra pada Jum’at (28/07/2023) di Stadion Tentemak Ketapang.Bupati dalam sambutannya menyampaikan penghargaan dan ucapan terima kasih kepada masyarakat, Dispora Ketapang, Panitia Penyelenggara dan pihak-pihak yang terlibat sehingga Piala Bupati 2023 dapat terlaksana dengan sukses.\r\n\r\n“Yang pertama Kabupaten Ketapang, kemudian Jelai Kendawangan Raya, Matan Hulu dan Hulu Air. Ini untuk mewakili embrio rencana Kabupaten tersebut dalam memupuk bakat keolahragaan sekaligus memastikan perjuangan DOB berjalan baik,” ungkap Martin.\r\n\r\nBupati juga menegaskan bahwa ada pelajaran yang dapat dipetik dari kejuaraan Piala Bupati 2023 ini. Menurutnya tim yang memiliki persiapan dan performa yang maksimal, dapat sukses dan meraih juara.\r\n\r\n“Saya ucapkan selamat bagi yang melangkah ke final. Prestasi ini adalah buah dari perjuangan saudara – saudara. Kepada yang belum berhasil, berlatih maksimalkan untuk mencapai prestasi di event berikutnya,” tutupnya. Tim Mandau Putra berhasil mengalahkan tim Forsas pada pertandingan semifinal. Tim Mandau Putra juga berhasil melalui semua tahapan dari total 48 tim sepakbola yang bertanding di Kejuaraan Sepak Bola Bupati Ketapang Cup 2023.', 'app/Berita/1691564573-C56WP.jpg', '2023-08-09 07:02:53', '2023-08-09 07:21:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bulan`
--

CREATE TABLE `bulan` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `bulan`
--

INSERT INTO `bulan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
('98cce379-39dc-4667-8a60-defb455e8996', 'Januari', '2023-03-28 19:39:31', '2023-03-28 19:39:31'),
('98cce9d1-7d7b-4f74-b032-17f4f422051c', 'Februari', '2023-03-28 19:57:15', '2023-03-28 19:57:15'),
('98d18436-c397-418b-ab66-4488dce4c2fb', 'Maret', '2023-03-31 02:52:17', '2023-03-31 02:52:17'),
('98db2308-0daa-4f29-9c6c-ec6121bf2cc2', 'April', '2023-04-04 21:38:49', '2023-04-04 21:38:49'),
('98db2313-129e-46ca-9d28-aa0ad5db7642', 'Mei', '2023-04-04 21:38:57', '2023-04-04 21:38:57'),
('98db231c-44a5-485a-9804-6b994165e4f9', 'Juni', '2023-04-04 21:39:03', '2023-04-04 21:39:03'),
('98db2327-e9a1-42e8-b818-a40e2efaa464', 'Juli', '2023-04-04 21:39:10', '2023-04-04 21:39:10'),
('98db2331-2cb7-46a9-9f9c-826a7d76ed5d', 'Agustus', '2023-04-04 21:39:16', '2023-04-04 21:39:16'),
('98db2350-06c6-477c-8454-d90459ff03bc', 'September', '2023-04-04 21:39:37', '2023-04-04 21:39:37'),
('98db2359-cc65-4b7f-bbe3-e994391e3269', 'Oktober', '2023-04-04 21:39:43', '2023-04-04 21:39:43'),
('98db2366-d9f8-425b-9caf-ce57a8ee1f8a', 'November', '2023-04-04 21:39:52', '2023-04-04 21:39:52'),
('98db2370-129c-4884-8e94-329aa1cb6568', 'Desember', '2023-04-04 21:39:58', '2023-04-04 21:39:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa_wisata`
--

CREATE TABLE `desa_wisata` (
  `id` char(36) NOT NULL,
  `nama_desa_wisata` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `link_jadesta` varchar(255) DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `foto1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `foto2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `lat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lng` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `desa_wisata`
--

INSERT INTO `desa_wisata` (`id`, `nama_desa_wisata`, `deskripsi`, `link_jadesta`, `foto`, `foto1`, `foto2`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
('98db06bb-8cfc-47a8-b2e0-7e20fbde8381', 'Desa Kendawangan Kiri', 'Petualang 100 pantai', 'https://jadesta.kemenparekraf.go.id/desa/cempedak_jaya', 'app/Desa-Wisata/1697530482-1oisO.jpg', 'app/Desa-Wisata/1697530483-PWrR6.jpg', 'app/Desa-Wisata/1697530483-zjqzd.jpg', '-2.516090028897877', '110.19905363875796', '2023-10-17 08:14:43', '2023-10-17 01:14:43'),
('98db0b02-9c3b-47fc-b0db-426c13373ed6', 'Laman Satong', 'Jelajah Rimba dan Budaya', 'https://jadesta.kemenparekraf.go.id/desa/laman_satong', 'app/Desa-Wisata/1685416897-Y7WuC.jpg', 'app/Desa-Wisata/1686282594-6YvLb.jpg', 'app/Desa-Wisata/1686282594-qFzzc.jpg', '-1.387746527108794', '110.16901156806455', '2023-06-09 03:49:54', '2023-06-09 03:49:54'),
('98db1bff-1690-4a60-b66f-2df430042584', 'Mekar Utama', 'Pertualangan Pulau Sawi', 'https://jadesta.kemenparekraf.go.id/desa/mekar_utama', 'app/Desa-Wisata/1680668349-ekkpg.jpg', 'app/Desa-Wisata/1686280264-Cq52D.jpg', 'app/Desa-Wisata/1686280264-Fd8xp.jpg', '-2.3583044689783392', '110.14772646913491', '2023-06-09 03:11:04', '2023-06-09 03:11:04'),
('98e90dd2-8498-4273-8736-534472004649', 'Sinar Kuri', 'Jelajah Rimba Kuri', 'https://jadesta.kemenparekraf.go.id/desa/sinar_kuri', 'app/Desa-Wisata/1683777036-UnoJJ.jpg', 'app/Desa-Wisata/1686280444-i5IO4.jpg', 'app/Desa-Wisata/1686280444-x0JLM.jpg', '-0.9444381245910761', '110.45705985249035', '2023-06-09 03:14:04', '2023-06-09 03:14:04'),
('98e91b6e-0117-4aa7-b427-4420a9a2414a', 'Suka Baru', 'Hutan Mangrove Celincing', 'https://jadesta.kemenparekraf.go.id/desa/celincing_suka_baru', 'app/Desa-Wisata/1683778795-ZVz9O.jpg', 'app/Desa-Wisata/1686282657-NoRpd.jpg', 'app/Desa-Wisata/1686282657-MqBLr.jpg', '-1.856364584850278', '109.93984480758998', '2023-06-09 03:50:57', '2023-06-09 03:50:57'),
('98e91c28-d804-4799-963a-7ee6710a88a3', 'Sungai Awan Kanan', 'Wisata Pantai', 'https://jadesta.kemenparekraf.go.id/desa/sungai_awan_kanan', 'app/Desa-Wisata/1683778844-uAxpL.jpg', 'app/Desa-Wisata/1686283639-Vh4Sl.jpg', 'app/Desa-Wisata/1686283639-BHqbA.jpg', '-1.7554778427162019', '109.99443183372664', '2023-06-09 04:07:19', '2023-06-09 04:07:19'),
('98e91cee-2f65-455a-8aff-257ac7198d7f', 'Kinjil Pesisir', 'Wisata Santai Pantai Pecal', 'https://jadesta.kemenparekraf.go.id/desa/kinjil_pesisir', 'app/Desa-Wisata/1683778943-JhgI8.jpg', 'app/Desa-Wisata/1686283383-sSsB1.jpg', 'app/Desa-Wisata/1686283727-VJSiK.jpg', '-1.869747094306019', '109.9645630580743', '2023-06-09 04:08:47', '2023-06-09 04:08:47'),
('98e91e0d-df5a-4048-8613-f5438e42f785', 'Jelayan', 'Jelajah Budaya Jelayan', 'https://jadesta.kemenparekraf.go.id/desa/jelayan', 'app/Desa-Wisata/1683778993-Cbksa.jpg', 'app/Desa-Wisata/1686283776-hYz9v.jpg', 'app/Desa-Wisata/1686283776-RcGmv.jpg', '-1.8096965844979593', '110.63524333597859', '2023-06-09 04:09:36', '2023-06-09 04:09:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail`
--

CREATE TABLE `detail` (
  `id` char(36) NOT NULL,
  `nama` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `detail`
--

INSERT INTO `detail` (`id`, `nama`, `created_at`, `updated_at`) VALUES
('98cf0a42-47d8-4503-adfa-ac40b688065b', 'ELECTRONIC KETAPANG TRAVEL GUIDE, e-KTG (beta 2.1), adalah portal resmi informasi pariwisata dan desa wisata di Kabupaten Ketapang yang terintegrasi dengan sistem JADESTA (Jaringan Desa Wisata) Kemenparekraf RI. ​Website ini dikelola bersama oleh DPC MASATA Ketapang, Prodi Teknologi Informasi Politeknik Negeri Ketapang, dan Pemerintah Daerah Kabupaten Ketapang melalui Dinas Pariwisata dan Kebudayaan, serta didukung penuh oleh Dinas Komunikasi dan Informatika', '2023-05-11 03:09:06', '2023-05-11 03:09:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dinas`
--

CREATE TABLE `dinas` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmasi_password` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nomor_telpon` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `dinas`
--

INSERT INTO `dinas` (`id`, `nama`, `username`, `password`, `confirmasi_password`, `alamat`, `nomor_telpon`, `foto`, `created_at`, `updated_at`) VALUES
('9a681481-614c-43cd-88a2-a892184d4d5c', 'DIY Resin Art', 'dinas', '$2y$10$HPH88V/0HvWYKI3OlbG/R.2HyyTCJ1LAcSTiUAbi3iqr.6l8MXXvu', 'admin', 'Jl. Letkol Moh. Thohir No. 29, Delta Pawan, Ketapang, Kalimantan Barat, Indonesia, 78811', '0', 'app/dinas/1697718112-o30Fo.jpg', '2023-10-19 05:21:52', '2023-10-19 05:21:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` char(36) NOT NULL,
  `id_kategori_fasilitas` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `deskripsi` text,
  `nama_pengelola` varchar(255) DEFAULT NULL,
  `no_pengelola` varchar(15) DEFAULT NULL,
  `hari_buka` varchar(255) DEFAULT NULL,
  `jam_buka` time DEFAULT NULL,
  `jam_tutup` time DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `foto1` varchar(255) DEFAULT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `link` text,
  `rating` int DEFAULT NULL,
  `fasilitas` varchar(255) DEFAULT NULL,
  `sumber_foto` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `id_kategori_fasilitas`, `nama`, `alamat`, `deskripsi`, `nama_pengelola`, `no_pengelola`, `hari_buka`, `jam_buka`, `jam_tutup`, `foto`, `foto1`, `foto2`, `link`, `rating`, `fasilitas`, `sumber_foto`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
('9968a220-6e69-4b93-ba83-91fee5bfb243', '99641898-4341-45fa-a93a-5a47421becb0', 'ASTON Ketapang City Hotel', 'Jalan R Suprapto 68A, Delta Pawan, Ketapang, Kalimantan Barat, Indonesia, 78851', 'Aston City Hotel terletak di pusat kota Ketapang, berjarak beberapa menit berkendara dari Bandara Ketapang/Rahadi Osman. Hotel ini dekat dengan berbagai pilihan berbelanja dan bersantap. Tersedia Wi-Fi gratis.\r\nKamar-kamar di ASTON Ketapang City Hotel menampilkan dekorasi kontemporer dan berbagai fasilitas modern seperti AC dan TV layar datar.', '-', '-', 'Setiap Hari', '00:00:00', '00:59:00', 'app/Fasilitas/1692611622-PnuPf.jpg', 'app/Fasilitas/1691562662-bLyiI.webp', 'app/Fasilitas/1691562473-KSGx5.webp', 'https://www.traveloka.com/en-id/hotel/detail?spec=13-06-2023.14-06-2023.1.1.HOTEL.178113.ASTON%20Ketapang%20City%20Hotel.1&contexts=%7B%22inventoryRateKey%22%3A%22povEwB3ZzsU2C6pd%2B6MdU2B9D%2BXTtnp8xBPheXkh8zdM0tKsNUio4Rxug1zOzHJilcvZa8YdqqIySdppe7dolTIewZlxfjiOGz6oXLTucMvN0%2BgQ3yZPvZcoHwUFNN%2BZpcr%2F%2FNa8o9ElfN8zOYhzzZeg0X586laFpeUViPi9rxCokQG%2FHSVw7w%2FpQicKpWGgmhLDdV0WLeT%2FFKfQ0QL8LH02Dvlx%2F8PjYogEE5yzx6g6yOKyKeIDf7jO3GM45O1o1hmSkmz3HiZNSbS8gXb3CDW9nmlhkqLKa4lLkAkZpAEeBcIrWK2i9CBMejZge3F%2Fqr5Ov2QSm2AvCfOdBe9Oy%2Fvnzag3zLIuKsio2qc%2FE%2BJE%2B%2Bwh5K1%2Bwq63%2B1AW5LQHjTE%2FGsBKQXKjBtgZDhjE4K%2F35N4JimckmivCb80U7zzi42A4Bx%2BAVZlB2OJQoCeizHaEIke4gLKBu993M9y7827HBXiXvvsHN9BhHd%2FKWGjIWGULNNq2kq01LGJS4cUO6IoMhVKT4w7TwrTxbp%2FQ2iMn1qdaM1viWqCGwU1siX1ZIegdsZIo1sjlWnbsTcjefS6Pj3RtIU6lROCEB6QAgiS1WJabPNVEO7waQAXksTDyQHUY2wqyAfRzb44KOjG0poBVHSJ1fq5iJGt%2Fs2ROyG2r1yuKaZ4GSAmh5BaCjz8%3D%22%7D&prevSearchId=1768478037493438918&loginPromo=1', 3, 'AC, Restaurant, 24-Hour Front Desk, Parking, Elevator, WiFi', 'Booking.com', '-1.8348874314610322', '109.9669773215118', '2023-08-21 09:53:42', '2023-08-21 09:53:42'),
('99f13c70-486f-4e3e-b781-f3c224218105', '99641898-4341-45fa-a93a-5a47421becb0', 'Nevada Ketapang Hotel', 'Jalan R Suprapto 116, Delta Pawan, Ketapang, Kalimantan Barat, Indonesia, 78811Barat', 'Letak yg strategis ,dipusat Jalan Raya Kota,mudah di jangkau,dekat dengan Bandara Rahadi Oesman', 'Kiki Andrian (General Manager)', '091335000035', 'Setiap Hari', '00:00:00', '00:59:00', 'app/Fasilitas/1692614099-7Wozu.jpg', 'app/Fasilitas/1692613801-1VXGE.jpg', 'app/Fasilitas/1692613801-noSUZ.jpg', 'https://wa.me/+6291335000035', 4, 'Akomodasi Room,Room Meeting,Restaurant,Denver Coffee shop,Greenville Skylounge,Karaoke Room,Gym', 'Nevada Ketapang Hotel', '-1.8375130543534157', '109.96793412328945', '2023-10-04 05:25:41', '2023-10-04 05:25:41'),
('99f1474f-c3d5-4e1f-a85d-297332133cca', '99641898-4341-45fa-a93a-5a47421becb0', 'GRAND ZURI Ketapang City Hotel', 'Jalan DI Panjaitan 88, Delta Pawan, Ketapang, Kalimantan Barat, Indonesia, 78811', 'Grand Zuri Hotel terletak di pusat kota Ketapang. Menginap di Grand Zuri Ketapang tak hanya memberikan kemudahan untuk mengeksplorasi destinasi petualangan Anda, tapi juga menawarkan kenyamanan bagi istirahat Anda.\r\n\r\nGrand Zuri Ketapang merupakan hotel rekomendasi untuk Anda, seorang backpacker yang tak hanya mengutamakan bujet, tapi juga kenyamanan saat beristirahat setelah menempuh petualangan seharian penuh.', '-', '-', 'Setiap Hari', '00:00:00', '00:59:00', 'app/Fasilitas/1692616021-EA6mK.jpg', 'app/Fasilitas/1692616253-d4Y2P.jpg', 'app/Fasilitas/1692615625-z3WUW.jpg', 'https://www.traveloka.com/id-id/hotel/indonesia/grand-zuri-ketapang-9000000753029', 3, 'AC, Restoran, Respsionis 24 jam, Area Parkir, Lift, WiFi', 'Pancurajipost', '-1.8298071777213305', '109.97147731534211', '2023-08-21 13:23:51', '2023-08-21 13:23:51'),
('99f14efa-7572-4cae-9cf5-0950e4515c55', '99641898-4341-45fa-a93a-5a47421becb0', 'Borneo Emerald Hotel', 'Jalan Dr Sutomo 68, Delta Pawan, Ketapang, Kalimantan Barat, Indonesia, 78821', 'Letak Strategis , Fasilitas Lengkap , Dekat dengan pusat kuliner , Dekat dengan area perkantoran pemerintahaan .', 'PT. Satria Wijaya', '081227777268', 'Setiap Hari', '00:00:00', '00:59:00', 'app/Fasilitas/1696393715-397fG.jpg', 'app/Fasilitas/1696393664-SF7xv.jpg', 'app/Fasilitas/1692618018-At51Z.jpg', 'https://wa.me/+62081227777268', 3, 'Akomodasi Room , Grand Ballroom , Meeting Room , Emerald Club , Karoke Room , Restaurant', 'Borneo Emerland Hotel', '-1.8509406947055078', '109.97453026931578', '2023-10-04 04:28:35', '2023-10-04 04:28:35'),
('99f1613c-d00b-40ab-bdb5-544a8fa33da1', '99641898-4341-45fa-a93a-5a47421becb0', 'OLIVE Ketapang City Hotel', 'Jalan DI Panjaitan 68, Delta Pawan, Ketapang, Kalimantan Barat, Indonesia, 78811', 'favehotel Ketapang merupakan hotel rekomendasi untuk Anda, seorang backpacker yang tak hanya mengutamakan bujet, tapi juga kenyamanan saat beristirahat setelah menempuh petualangan seharian penuh.Bagi Anda yang menginginkan kualitas pelayanan oke dengan harga yang ramah di kantong, favehotel Ketapang adalah pilihan yang tepat. Karena meski murah, akomodasi ini menyediakan fasilitas memadai dan pelayanan yang tetap terjaga mutunya.', '-', '-', 'Setiap Hari', '00:00:00', '00:59:00', 'app/Fasilitas/1692620674-Bzmu0.png', 'app/Fasilitas/1692620656-R8PnD.png', 'app/Fasilitas/1692620656-kVa3K.png', 'https://www.traveloka.com/id-id/hotel/indonesia/olive-hotel-ketapang-3000020010631', 3, 'AC,\r\nWifi,\r\nArea Parkir,\r\nResepsionis 24 jam,\r\nLaundry.', 'Tiket.com', '-1.8295173972494343', '109.97272446192102', '2023-08-21 13:17:40', '2023-08-21 13:17:40'),
('99f169b3-f952-4103-82df-30364c48d573', '99641898-4341-45fa-a93a-5a47421becb0', 'ONYX Ketapang City Hotel', 'Jl. Letkol Moh. Thohir No. 29, Delta Pawan, Ketapang, Kalimantan Barat, Indonesia, 78811', 'Jika Anda memiliki agenda kegiatan yang membutuhkan ruangan besar, maka Onix Hotel Bangkok adalah pilihan yang tepat. Hotel ini memiliki ruang pertemuan yang luas dan dilengkapi dengan berbagai fasilitas penunjang.', '-', '-', 'Setiap Hari', '02:00:00', '00:59:00', 'app/Fasilitas/1692623062-oMX5S.jpg', 'app/Fasilitas/1692622223-eTsvx.jpg', 'app/Fasilitas/1692622495-inKqa.jpg', 'https://www.traveloka.com/id-id/hotel/indonesia/onix-hotel-bangkok-3000010001343', 3, 'AC, Restoran, Kolam Renang, Resepsionis 24 Jam, Parkir, Lift, WiFi', 'Hotelmix.id', '-1.8435873324344865', '109.97544504602632', '2023-08-21 13:17:04', '2023-08-21 13:17:04'),
('99f16af2-39ac-4981-8cb1-5bf73cbec511', '99641898-4341-45fa-a93a-5a47421becb0', 'FAVEHOTEL Ketapang City', 'Jalan Gatot Subroto, Payah Kumang, Delta Pawan, Ketapang, Kalimantan Barat, Indonesia, 78851', 'FAVEHOTEL Ketapang merupakan hotel rekomendasi untuk Anda, seorang backpacker yang tak hanya mengutamakan bujet, tapi juga kenyamanan saat beristirahat setelah menempuh petualangan seharian penuh.', '-', '-', 'Setiap Hari', '00:00:00', '00:59:00', 'app/Fasilitas/1692621857-P8A6O.jpg', 'app/Fasilitas/1692621604-wzfz0.jpg', 'app/Fasilitas/1692621604-sP3jg.jpg', 'https://www.traveloka.com/id-id/hotel/indonesia/favehotel-ketapang-9000000653616', 3, 'AC, Resepsionis 24 jam, Parkir, Lift, Wifi', 'Tiket.com', '-1.824174700807138', '109.97016698465791', '2023-08-25 11:32:49', '2023-08-25 11:32:49'),
('9a2d5a7a-6eaa-4384-b037-ab52cdf2b1c7', '996418b1-1a98-47cf-8313-b99e31b962cb', 'Aming Coffee Ketapang', 'Jalan Letkol Jl. M. Tohir, Tengah, Delta Pawan, Ketapang Regency, West Kalimantan', 'Gerai kopi legendaris asal Kota Pontianak yang hadir di Kabupaten Ketapang. Yang hadir dengan mengusung konsep semi outdoor. Tak hanya menyediakan ruang terbuka, Gerai Aming Coffee Ketapang juga menyiapkan indoor full AC.', 'Fise Adhi Prasetio', '-', 'Setiap Hari', '06:30:00', '22:00:00', 'app/Fasilitas/1695195947-jlzee.jpg', 'app/Fasilitas/1695195821-S0GME.jpg', 'app/Fasilitas/1695195821-LI63E.jpg', 'https://wa.me/+6282112673752', NULL, 'Parkiran yang luas di belakang kafe, Area Outdor, Area Indor full AC, Free Wifi, Mushola, Area Wudhu', 'amingcoffeeketapang', '-1.8427678250333905', '109.97444578465857', '2023-09-20 08:09:41', '2023-09-20 08:09:41'),
('9a2d6150-d81f-4aab-84bc-0f5a6aebb6fd', '996418b1-1a98-47cf-8313-b99e31b962cb', 'Daun Teh', 'Jl. Sisingamangaraja No.27, Sampit, Kec. Delta Pawan, Kabupaten Ketapang, Kalimantan Barat 78821', 'Mengusung tema Instagramable yang menarik banyak perhatian kaum milelineal yang ada di Ketapang. Ini merupakan cabang kedua dari Cafe Daun Teh di Ketapang.', 'Admin Daun Teh', '-', 'Setiap Hari', '10:00:00', '22:00:00', 'app/Fasilitas/1695197414-B5Gxq.jpg', 'app/Fasilitas/1695196968-Bxi1W.jpg', 'app/Fasilitas/1695196968-Rp66g.jpg', 'https://wa.me/+6285388125930', NULL, 'Area Indor full AC, Area Outdor, Lapangan parkir luas, WC, Free Wifi', 'GoogleMapsDaunTeh', '-1.833786573415419', '109.96031817406647', '2023-09-20 08:10:14', '2023-09-20 08:10:14'),
('9a493459-d8d0-4036-b4e9-0c7865f1a0bf', '99641898-4341-45fa-a93a-5a47421becb0', 'Hotel Golden Cendrawasih', 'Jalan MT Haryono, Gg Merpati no 6, Deltapawan, Ketapang, Kalbar', 'Lokasi Strategis Tengah Kota, Fasilitas Lengkap, terjangkau, Bersih dan Nyaman', 'Sudarso', '085348227117', 'Setiap Hari', '23:00:00', '23:59:00', 'app/Fasilitas/1696392091-gl84l.jpg', 'app/Fasilitas/1696392015-Rptac.jpg', 'app/Fasilitas/1696392015-FchjS.jpg', 'https://wa.me/+6285348227117', 4, 'Menginap Mewah, Harga Murah', 'Penginapan Cendrawasih', '-1.8457072374995587', '109.972283234536', '2023-10-04 04:01:31', '2023-10-04 04:01:31'),
('9a493a6d-cc5d-4f52-af27-d0a6087cc058', '996418b1-1a98-47cf-8313-b99e31b962cb', 'Rumah Makan Semarang', 'Jln . K.H. Mansyur no 115 b . Ketapang , Kalimantan barat', 'Bersih dan nyaman', 'Ngarfin / Henah', '\'081352333303', 'Setiap Hari', '11:00:00', '22:00:00', 'app/Fasilitas/1696393048-gQaaP.jpg', 'app/Fasilitas/1696393035-auIoA.jpg', 'app/Fasilitas/1696393035-CtYMj.jpg', 'https://wa.me/+6281352333303', NULL, 'In door dan outdoor', 'Rumah Makan Semarang', '-1.8392441081475235', '109.9709448566283', '2023-10-04 04:17:28', '2023-10-04 04:17:28'),
('9a50cf29-e77a-4491-852a-80bfe0b40947', '996418b1-1a98-47cf-8313-b99e31b962cb', 'Restoran Tambak Udang', 'Jl. Brigjend Katamso no 173. Sukaharja Ketapang', 'Tersedia makanan seafood segar', 'Budi halim', '081345344466', 'Setiap Hari', '10:00:00', '21:00:00', 'app/Fasilitas/1696718662-8UOxM.jpg', 'app/Fasilitas/1696718636-IL9Wu.jpg', 'app/Fasilitas/1696718636-2o7VE.jpg', 'https://wa.me/+6281345344466', NULL, 'Restoran Seafood', 'restoran tambak udang', '-1.8003578667399172', '109.97944285805838', '2023-10-07 22:44:22', '2023-10-07 22:44:22'),
('9a552845-8133-4145-a9b4-b24c5a629eba', '99641898-4341-45fa-a93a-5a47421becb0', 'Tropical Waterpark', 'Jl. H. Agus Salim, Sampit, Kec. Delta Pawan, Kabupaten Ketapang, Kalimantan Barat', 'Menjadi salah satu tempat wisata kolam berenang di kabupaten ketapang yang memiliki fasilitas lengkap seperti cafe&resto, gym, hotel dan penginapan(kost).', 'Richo Sanada', '085821019766', 'Setiap Hari', '06:30:00', '10:30:00', 'app/Fasilitas/1696907359-iwFmZ.jpg', 'app/Fasilitas/1696905385-B97Yj.jpg', 'app/Fasilitas/1696905385-IGddA.jpg', 'https://wa.me/+625821019766', 3, 'Kolam berenang, Hotel, penginapan&kost, gym, cafe&resto', 'Tropical Waterpark', '-1.832216', '109.973803', '2023-10-10 03:09:19', '2023-10-10 03:09:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kalender_wisata`
--

CREATE TABLE `kalender_wisata` (
  `id` char(36) NOT NULL,
  `id_bulan` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `tempat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `sumber_foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kalender_wisata`
--

INSERT INTO `kalender_wisata` (`id`, `id_bulan`, `nama`, `deskripsi`, `tempat`, `tanggal`, `foto`, `sumber_foto`, `created_at`, `updated_at`) VALUES
('98db18a8-0f93-4d53-87d1-b1592e58bf65', '98cce9d1-7d7b-4f74-b032-17f4f422051c', 'Festival Gendang Tar', 'Festival ini merupakan tradisi adat suku Melayu diketapang yang menggunakan  alat musik gendang. Begendang disebut juga dengan berhadrah dimana mengungkapkan segala pujian dan doa kepada Allah SWT yang dilakukan secara bergiliran oleh kelompok masyarakat. Peralatan yang dipakai dalam bergendang ini adalah gendang tar, surah harah, perapian, tempat sirih. tempayan tempat air dan tempat untuk burdat.', 'Ketapang', NULL, 'app/Kalender-Wisata/1686838789-UwQxq.jpg', 'Borneo Tribun.com', '2023-04-04 21:09:49', '2023-06-15 14:19:49'),
('98db2827-b086-4d0a-8697-ed595b106670', '98cce9d1-7d7b-4f74-b032-17f4f422051c', 'Ketapang Music Fest 2023', 'Festival musik digelar di pentas seni budaya pendopo Bupati Ketapang. Festival musik seperti ini menjadi sarana para pemuda untuk mengasah bakatnya dalam bermusik. Dengan semakin banyak festival musik maka mampu menyuntikkan semangat kepada para pemuda dalam meningkatkan kemampuan mereka.', 'Ketapang', NULL, 'app/Kalender-Wisata/1680670389-CAB9e.jpg', 'monga.id', '2023-04-04 21:53:09', '2023-04-04 21:53:09'),
('98db28cc-9ee2-41bb-a7a2-8f6bd889c4e5', '98cce9d1-7d7b-4f74-b032-17f4f422051c', 'Cap Go Meh 2023', 'Cap Go Meh adalah akhir dari rangkaian perayaan tahun baru Imlek yang dilakukan tiap tanggal 15 pada bulan pertama penanggalan Tionghoa atau 2 minggu setelah Tahun Baru Imlek. Perayaannya diawali dengan berdoa di wihara, kemudian dilanjutkan dengan iringan kenong dan simbal serta pertunjukan barongsai dan pertunjukan tradisional Tionghoa.', 'Ketapang', NULL, 'app/Kalender-Wisata/1680670497-3KRip.jpg', 'suara kalbar', '2023-04-04 21:54:57', '2023-04-04 21:54:57'),
('98db296c-323f-4af9-b64c-e38e47de70d3', '98d18436-c397-418b-ab66-4488dce4c2fb', 'Pekan Budaya Ikatan Keluarga Besar Madura', 'Ikatan Keluarga Besar Madura (IKBM) Ketapang menyelenggarakan Pekan Budaya Madura. Pekan budaya ini pada tahun 2022 yang lalu dihadiri sekitar 300 orang dan berlangsung selama dua hari untuk memperkenalkan budaya-budaya yang berasal dari Madura seperti atraksi kesenian budaya dan berbagai makanan khas Madura.', 'Ketapang', NULL, 'app/Kalender-Wisata/1680670602-7Mhwz.jpg', 'radarblambangan.com', '2023-04-04 21:56:42', '2023-04-04 21:56:42'),
('98db2b86-8ad9-4d15-aa93-8c143e7dbf2e', '98d18436-c397-418b-ab66-4488dce4c2fb', 'Pagelaran Budaya Batak “SAHATA”', 'Pagelaran Budaya Batak “SAHATA” adalah perkumpulan suku batak di daerah ketapang guna melestarikan budaya batak dan membina kesatuan masyarakat batak di daerah ketapang.', 'Ketapang', NULL, 'app/Kalender-Wisata/1680670954-zZJou.jpg', '-', '2023-04-04 22:02:34', '2023-04-04 22:02:34'),
('98db314b-2dc5-4bab-92e2-1710bd891c0f', '98d18436-c397-418b-ab66-4488dce4c2fb', 'Ziarah Akbar Makam Keramat 9', 'Ziarah ini merupakan refleksi sejarah dan peradaban Ketapang Tanah Kayong Negeri Betuah yang dilaksanakan bertepatan pada hari jadi Ketapang yang ditetapkan pada tanggal 11 Maret setiap tahunnya.', 'Ketapang', NULL, 'app/Kalender-Wisata/1680671922-SvaaE.jpg', 'rakyatboreo.com', '2023-04-04 22:18:42', '2023-04-04 22:18:42'),
('98dd2ae3-cebd-437f-a7f9-65925613412a', '98db2313-129e-46ca-9d28-aa0ad5db7642', 'Pagelaran Budaya Paguyuban Pasundan', 'Pagelaran kebudayaan Sunda dan bakti sosial yang diselenggarakan oleh komunitas orang Sunda yang bertempat tinggal di Ketapang.', 'Ketapang', NULL, 'app/Kalender-Wisata/1680756747-qgkgp.jpg', 'facebook Muhammad Abduh', '2023-04-05 21:52:27', '2023-04-05 21:52:27'),
('98dd2c18-c500-4f7d-a0ed-d19e1c7963e8', '98db2313-129e-46ca-9d28-aa0ad5db7642', 'Acara Adat Bejunjong', 'Pagelaran kebudayaan Sunda dan bakti sosial yang diselenggarakan oleh komunitas orang Sunda yang bertempat tinggal di Ketapang.', 'Ketapang', NULL, 'app/Kalender-Wisata/1680756950-jGf5k.jpg', 'ketapang.suarakalbar', '2023-04-05 21:55:50', '2023-04-05 21:55:50'),
('98dd5e6b-c291-49c8-8bc3-ccace9802102', '98db2313-129e-46ca-9d28-aa0ad5db7642', 'Acara Adat Sapat Tohon', 'Tak hanya sebagai warisan secara turun temurun, acara ada Nyapat Tohon ini juga menjadi cara masyarakat adat dalam menghidupkan nilai-nilai posifit dari tradisi dan nilai-nilai luhur adat budaya itu sendiri.', 'Kecamatan Tayap', NULL, 'app/Kalender-Wisata/1680765392-sH07X.jpg', 'suarakalbar.co.id', '2023-04-06 00:16:33', '2023-04-06 00:16:33'),
('98dd5fa1-2e91-4fbf-9870-96bf30be6818', '98db231c-44a5-485a-9804-6b994165e4f9', 'Acara Adat Meruba Kerajaan Hulu Air', 'Meruba ini merupakan serangkaian acara buang sial dan bayar niat oleh suku dayak.', 'Kabupaten Ketapang Hulu Sungai', NULL, 'app/Kalender-Wisata/1680765595-qVfSN.jpg', 'kalbar65news.com', '2023-04-06 00:19:55', '2023-04-06 00:19:55'),
('98dd60b9-6fcd-4cf0-8da3-c042a5a9e713', '98db231c-44a5-485a-9804-6b994165e4f9', 'Acara Adat Tentobos Serongkah Onam', 'Tentobos Serongkah Onam merupakan ritual adat sebagai bentuk rasa syukur atas hasil panen dan persiapan menjelang masa tanam padi berikutnya yang dilakukan masyarakat Serongkah Onam.', 'Tumbang Titi', NULL, 'app/Kalender-Wisata/1680765779-TDwTx.jpg', 'facebook kec. tumbang titi', '2023-04-06 00:22:59', '2023-04-06 00:22:59'),
('98dd6177-7d80-49e5-9911-93490eafe8e7', '98db231c-44a5-485a-9804-6b994165e4f9', 'Acara Adat Tentobos Kengkubang Tigo', 'Tentobos Kengkubang Tigo merupakan ritual adat sebagai bentuk rasa syukur atas hasil panen dan persiapan menjelang masa tanam padi berikutnya yang dilakukan masyarakat Kengkubang Tigo', 'Tumbang Titi', NULL, 'app/Kalender-Wisata/1680765904-0LLSN.jpg', 'facebook kec. tumbang titi', '2023-04-06 00:25:04', '2023-04-06 00:25:04'),
('98dd67d6-0632-44cb-8724-4a4337088e1f', '98db231c-44a5-485a-9804-6b994165e4f9', 'Gawai Adat Nungkat Gumi', 'Gawai adat nungkat gumi adalah menyangga dan menopang bumi agar tidak roboh, tidak rusak, tidak longsor yakni dengan cara ritual adat agar keseimbangan antara manusia dan alam tetap terjaga.', 'Simpang Hulu', NULL, 'app/Kalender-Wisata/1680766972-huIQ1.jpg', 'facebook dayu rompe', '2023-04-06 00:42:52', '2023-04-06 00:42:52'),
('98dd6889-f5ef-4842-9bc5-cb3b677e3c95', '98db231c-44a5-485a-9804-6b994165e4f9', 'Gawai Adat Dayak Nyapat Taunt', 'Gawai nyapat taunt merupakan agenda tahunan masyarakat adat dayak Simpang Hulu. Nyapat taun artinya menutup tahun perladangan dan membuka tahun perladangan berikutnya.', 'Simpang Hulu', NULL, 'app/Kalender-Wisata/1680767090-LrfzX.jpg', 'facebook mateus yudi', '2023-04-06 00:44:50', '2023-04-06 00:44:50'),
('98dd69b1-9823-4953-9eb2-934167950331', '98db2327-e9a1-42e8-b818-a40e2efaa464', 'Festival Keraton Matan Tanjung Pura', 'Festival Keraton Matan Tanjungpura digelar bertujuan memperkenalkan adat istiadat dan budaya keraton Melayu di Ketapang kepada masyarakat luas, Dalam Festival Budaya Keraton Matan Tanjungpura ini juga dimeriahkan oleh sejumlah perlombaan kesenian dan olahraga, seperti perlombaan tepung tawar, pangkak gasing, lomba sampan, hadrah, qasidah, sair gulung,lomba menyumpit dan lomba menombak.', 'Ketapang', NULL, 'app/Kalender-Wisata/1680767284-gOBue.jpg', 'ketapangnews.com', '2023-04-06 00:48:04', '2023-04-06 00:48:04'),
('98dd6a26-0e58-4d71-a9f9-702b28f92fd6', '98db2331-2cb7-46a9-9f9c-826a7d76ed5d', 'Pentas Seni Budaya Dayak Dan Pameran DAD', 'Pentas Seni Budaya Dayak dan pameran dewan adat Dayak ini menjadi even tahunan yang dilakukan di kabupaten ketapang tepatnya di pondopo bupati kab.ketapang yang bertujuan untuk mengenalkan sekaligus melestarikan adat Dayak yang merupakan suku asli di kab.ketapang.', 'Ketapang', NULL, 'app/Kalender-Wisata/1680767360-MMsNd.jpg', 'monga.id', '2023-04-06 00:49:20', '2023-04-06 00:49:20'),
('98dd6aa6-fb54-4a0a-b52c-013a259a74e7', '98db2350-06c6-477c-8454-d90459ff03bc', 'Acara Adat Robo-Robo', 'Robo-robo yang merupakan tradisi Bugis-Melayu kian melekat di masyarakat Melayu Kecamatan Sungai Laur Kabupaten Ketapang. Adapun kegiatan ini dilakukan secara rutin setiap tahunnya untuk menjaga adat tradisi supaya tidak punah ditelan oleh zaman. Kegiatan yang biasa dilakukan pada hari Rabu terakhir dibulan safar dalam kalender Islam ini dilakukan secara serentak.', 'Sungai Laur', NULL, 'app/Kalender-Wisata/1680767445-FAW7Y.jpg', 'delikcom.com', '2023-04-06 00:50:45', '2023-04-06 00:50:45'),
('98dd6b88-6991-4ed3-97a7-5e6916803338', '98db2350-06c6-477c-8454-d90459ff03bc', 'Perayaan Budaya Robo-Robo', 'Sama dengan deskripsi sebelumnya tapi bedanya perayaan ini di adakan di Kauman yang selanjutnya akan menjadi pusat perayaan tradisi robo-robo di kabupaten Ketapang.', 'Kampung Wisata Kauman', NULL, 'app/Kalender-Wisata/1680767592-5wSeF.jpg', 'ketapang.suarakalbar.co.id', '2023-04-06 00:53:12', '2023-04-06 00:53:12'),
('98dd6c37-6d1d-4f5c-9c46-734afd0f086a', '98db2350-06c6-477c-8454-d90459ff03bc', 'Pagelaran Budaya Komunitas Keluarga Sulawesi Selatan', 'Yaitu kegiatan yang diadakan oleh Kerukunan Keluarga Sulawesi Selatan (KKSS) yang didalamnya terdapat adat dan tarian khas daerah Sulawesi Selatan seperti adat suku bugis.', 'Ketapang', NULL, 'app/Kalender-Wisata/1680767707-hFoWJ.jpg', 'facebook tien nurseha nurseha', '2023-04-06 00:55:07', '2023-04-06 00:55:07'),
('98dd6ddd-9f68-45af-b873-a7faa4a7dae6', '98db2359-cc65-4b7f-bbe3-e994391e3269', 'Napak Tilas Sejarah, Pembangunan Dan Budaya', 'Napak tilas adalah kilas balik / menelusuri kembali sejarah sebagai upaya mengingat perjuangan para pejuang dan mengenalkan budaya serta dalam rangka akselerasi pembangunan kabupaten ketapang.\r\nPemerintahan mengedepankan upaya kolaborasi dengan semua pihak, yaitu Pemerintahan, Masyarakat, dan Dunia Usaha', 'Delta Pawan, Tumbang Titi, Matan Hilir Selatan, Benua Kayong', '2023-10-23', 'app/Kalender-Wisata/1680767984-CLl3P.jpg', 'facebook prokopim setda ketapang', '2023-04-06 00:59:44', '2023-06-15 07:53:39'),
('98dd6e49-3437-4006-84fb-16374580bfea', '98db2359-cc65-4b7f-bbe3-e994391e3269', 'Pentas Seni Dan Budaya Melayu (MABM)', 'Acara pagelaran adat budaya melayu kabupaten ketapang ini dimeriahkan dengan arak-arakan “hastegune” raksasa yang ditujukan untuk pelestarian adat dan budaya melayu untuk diwariskan kepada anak cucu kelak.', 'Ketapang', NULL, 'app/Kalender-Wisata/1680768054-VkaG0.jpg', 'kalbarnews.co.id', '2023-04-06 01:00:54', '2023-04-06 01:00:54'),
('98dd6f44-fab9-402f-a31f-4ff6f76c23ce', '98db2366-d9f8-425b-9caf-ce57a8ee1f8a', 'Gawai Adat Bepalas Benua', 'Upacara ini dilakukan sebagai ungkapan rasa syukur yang telah dianugerahkan oleh Sang Pencipta kepada para petani desa sekaligus sebagai media tolak bala terhadap roh-roh jahat yang diadakan di Kendawangan.', 'Kendawangan', NULL, 'app/Kalender-Wisata/1680768219-VDnuM.jpg', '-', '2023-04-06 01:03:39', '2023-04-06 01:03:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `created_at`, `updated_at`) VALUES
('98c9bfa5-bb4f-42db-9c93-5d7369192445', 'Wisata Alam', '2023-03-27 06:11:51', '2023-03-27 06:11:51'),
('98c9bfc2-2fde-46fd-9808-54b7eed6a754', 'Wisata Budaya dan Religi', '2023-04-05 03:04:24', '2023-04-05 03:04:24'),
('98c9bfd4-8172-4516-8f61-40e214a22cae', 'Wisata Buatan', '2023-03-27 13:15:37', '2023-03-27 06:15:37'),
('9a5b34bd-4693-4f09-9e31-b5696072403c', 'Wisata Kuliner', '2023-10-12 19:46:15', '2023-10-12 19:46:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_fasilitas`
--

CREATE TABLE `kategori_fasilitas` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kategori_fasilitas`
--

INSERT INTO `kategori_fasilitas` (`id`, `nama`, `created_at`, `updated_at`) VALUES
('99641898-4341-45fa-a93a-5a47421becb0', 'Hotel & Penginapan', '2023-06-12 06:38:04', '2023-06-12 06:38:04'),
('996418b1-1a98-47cf-8313-b99e31b962cb', 'Warkop & Resto', '2023-06-12 06:38:34', '2023-06-12 06:38:34'),
('996418d6-9706-4f3b-8383-f5deeaf34620', 'Travel', '2023-06-12 06:38:44', '2023-06-12 06:38:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak_wisata`
--

CREATE TABLE `kontak_wisata` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `link_wa` varchar(255) NOT NULL,
  `link_fb` varchar(255) NOT NULL,
  `link_ig` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kontak_wisata`
--

INSERT INTO `kontak_wisata` (`id`, `nama`, `jabatan`, `link_wa`, `link_fb`, `link_ig`, `foto`, `created_at`, `updated_at`) VALUES
('98d15455-6233-4711-9379-8ee95e873d13', 'EKA WAHYUDI, S.PD., M.CS', 'Ketua Program Studi Teknologi Informasi Politeknik Negeri Ketapang', '+62 821-5591-3491', 'https://www.facebook.com/eka.wahyudi2', 'https://www.instagram.com/yudii_algebra/', 'app/Kontak/1687239365-T9VfX.jpg', '2023-06-20 05:36:05', '2023-06-20 05:36:05'),
('98f531aa-542f-41cd-871b-ca6f9a2b4cac', 'Setra Kusumardana', 'Ketua DPC Masata Ketapang', '08128090253', 'https://www.facebook.com/setraku', 'https://www.instagram.com/thesetra/?hl=id', 'app/Kontak/1687239379-Cs5z3.png', '2023-06-20 05:36:19', '2023-06-20 05:36:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra`
--

CREATE TABLE `mitra` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmasi_password` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nomor_telpon` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `kategori` enum('pengelola wisata','pelaku usaha') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `mitra`
--

INSERT INTO `mitra` (`id`, `nama`, `username`, `password`, `confirmasi_password`, `alamat`, `nomor_telpon`, `foto`, `kategori`, `created_at`, `updated_at`) VALUES
('9a68199f-1c34-41d6-bb56-7e8171512c6e', 'u', 'admin', '$2y$10$m5Ke0Uob9aQhcCCi2N89EuXHxbpYqsXp0o67N6nnSB9qHb1/dcLQ.', 'admin', 'd', '0', 'app/mitra/1697718971-u309y.jpg', 'pelaku usaha', '2023-10-19 05:36:11', '2023-10-19 05:36:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `atraksi_wisata`
--
ALTER TABLE `atraksi_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `desa_wisata`
--
ALTER TABLE `desa_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dinas`
--
ALTER TABLE `dinas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kalender_wisata`
--
ALTER TABLE `kalender_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_fasilitas`
--
ALTER TABLE `kategori_fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak_wisata`
--
ALTER TABLE `kontak_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
