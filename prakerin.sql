-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2020 pada 08.17
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakerin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `approval_firewall`
--

CREATE TABLE `approval_firewall` (
  `id_approval` int(255) NOT NULL,
  `id_request` char(100) NOT NULL,
  `nik` int(100) NOT NULL,
  `user_name_approval` varchar(255) NOT NULL,
  `status_approval` varchar(100) NOT NULL,
  `command` text NOT NULL,
  `valid` int(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `approve_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `dissaprove_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `approval_firewall`
--

INSERT INTO `approval_firewall` (`id_approval`, `id_request`, `nik`, `user_name_approval`, `status_approval`, `command`, `valid`, `email`, `approve_date`, `dissaprove_date`, `created_at`, `updated_at`) VALUES
(1, 'REQ01', 12345678, 'Aditya Dwi', 'pending', '-', 1, 'imelda@gmail.com', '2020-11-29 13:56:39', '2020-11-29 13:56:39', '2020-11-29 13:56:07', '2020-11-29 06:56:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `checked_firewall`
--

CREATE TABLE `checked_firewall` (
  `id_checked` int(255) NOT NULL,
  `id_request` char(100) NOT NULL,
  `nik` int(100) NOT NULL,
  `user_name_checker` varchar(255) NOT NULL,
  `status_check` varchar(100) NOT NULL,
  `valid` int(100) NOT NULL,
  `checked_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dissaprove_check_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `checked_firewall`
--

INSERT INTO `checked_firewall` (`id_checked`, `id_request`, `nik`, `user_name_checker`, `status_check`, `valid`, `checked_date`, `dissaprove_check_date`, `created_at`, `updated_at`) VALUES
(1, 'REQ01', 12345678, 'Aditya Dwi', 'pending', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-11-26 04:00:06', '0000-00-00 00:00:00'),
(2, 'REQ02', 12345678, 'Aditya Dwi', 'pending', 2, '2020-11-29 14:05:00', '0000-00-00 00:00:00', '2020-11-29 14:05:00', '2020-11-29 07:05:00'),
(4, 'REQ03', 11276689, 'Bunga Zivana', 'pending', 1, '2020-11-26 05:03:51', '2020-11-25 17:00:00', '2020-11-26 10:12:25', '2020-11-25 22:03:51'),
(5, 'REQ02', 12345678, 'Aditya Dwi', 'approved', 1, '2020-11-26 10:09:47', '2020-11-26 10:09:47', '2020-11-26 10:10:00', '2020-11-26 03:10:00'),
(6, 'REQ03', 11276689, 'Aditya Dwi', 'approved', 3, '2020-11-26 10:17:05', '2020-11-26 10:15:51', '2020-11-26 10:17:05', '2020-11-26 03:17:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `doing_firewall`
--

CREATE TABLE `doing_firewall` (
  `id_doing` int(255) NOT NULL,
  `id_request` char(100) NOT NULL,
  `nik` int(100) NOT NULL,
  `user_name_doing` varchar(255) NOT NULL,
  `status_doing` varchar(100) NOT NULL,
  `valid` int(100) NOT NULL,
  `worked_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `dissaprove_work_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `doing_firewall`
--

INSERT INTO `doing_firewall` (`id_doing`, `id_request`, `nik`, `user_name_doing`, `status_doing`, `valid`, `worked_date`, `dissaprove_work_date`, `created_at`, `updated_at`) VALUES
(1, 'REQ01', 12345678, 'Aditya Dwi', 'pending', 2, '2020-11-29 14:53:39', '2020-11-29 14:53:39', '2020-11-29 07:53:39', '2020-11-29 07:53:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_10_09_073851_create_model_users_table', 1),
(2, '2020_10_09_074549_create_model_roles_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `periode_firewall`
--

CREATE TABLE `periode_firewall` (
  `id_periode` int(100) NOT NULL,
  `id_request` char(100) NOT NULL,
  `date_request` datetime NOT NULL,
  `expired_date` datetime NOT NULL,
  `periode` varchar(255) NOT NULL,
  `valid` int(100) NOT NULL,
  `status_request` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `project`
--

CREATE TABLE `project` (
  `id_project` char(255) NOT NULL,
  `nama_project` varchar(255) NOT NULL,
  `nik` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `project`
--

INSERT INTO `project` (`id_project`, `nama_project`, `nik`) VALUES
('P01', 'Online Payment Solution', 12345678),
('P02', 'Bill Payment', 12345678),
('P03', 'Online Payment', 11276689);

-- --------------------------------------------------------

--
-- Struktur dari tabel `request_firewall`
--

CREATE TABLE `request_firewall` (
  `id_request` char(100) NOT NULL,
  `nik` int(255) NOT NULL,
  `id_project` char(100) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `port` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `chde` int(100) NOT NULL,
  `status_check` varchar(100) NOT NULL,
  `status_doing` varchar(100) NOT NULL,
  `status_approval` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `request_firewall`
--

INSERT INTO `request_firewall` (`id_request`, `nik`, `id_project`, `user_name`, `email`, `source`, `destination`, `port`, `keterangan`, `chde`, `status_check`, `status_doing`, `status_approval`, `created_at`, `updated_at`) VALUES
('REQ01', 12345678, 'P01', 'Imelda Zahwa', 'imelda@gmail.com', '192.168.0.18', '192.168.121.1', '8000', 'akses db', 1111, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('REQ02', 12345678, 'P02', 'Imelda Zahwa', 'imelda@gmail.com', '192.0.0.21', '192.168.6.3', '80', 'akses db', 9999, '', '', '', '2020-11-17 22:10:28', '2020-11-17 22:10:28'),
('REQ03', 11276689, 'P03', 'Nafarras Ayu', 'farras@gmail.com', '17.0.0.12', '192.0.4.5', '8000', '-', 1212, '', '', '', '2020-11-26 05:02:43', '0000-00-00 00:00:00'),
('REQ04', 12345678, 'P02', 'Imelda', 'imelda@gmail.com', '192.100.68.1', '192.200.60.2', '8080', '-', 2222, 'pending', 'pending', 'pending', '2020-11-29 08:59:41', '2020-11-29 08:59:41'),
('REQ05', 12345678, 'P02', 'Imelda Zahwa', 'imelda@gmail.com', '192.100.68.1', '192.200.60.2', '8080', 'akses apache', 0, 'pending', 'pending', 'pending', '2020-11-29 20:35:06', '2020-11-29 20:35:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `roleId` int(50) NOT NULL,
  `roleName` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`roleId`, `roleName`, `createdAt`) VALUES
(1, 'Admin', '2020-10-13 06:14:12'),
(2, 'Manager', '2020-10-13 12:15:15'),
(3, 'So', '2020-10-13 06:13:14'),
(4, 'User', '2020-10-13 09:15:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nik` int(255) NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roleId` int(10) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nik`, `user_name`, `password`, `roleId`, `status`, `created_at`, `updated_at`) VALUES
(9999999, 'Joko', '827ccb0eea8a706c4c34a16891f84e7b', 2, 'aktif', '2020-11-29 20:23:54', '2020-11-29 20:23:54'),
(11276689, 'Nafarras Ayu', 'ab56b4d92b40713acc5af89985d4b786', 4, 'aktif', '2020-11-26 03:25:25', '2020-11-26 06:24:23'),
(12345678, 'Imelda', '827ccb0eea8a706c4c34a16891f84e7b', 4, 'aktif', '2020-11-16 22:06:35', '2020-11-16 22:06:35'),
(19687754, 'Bunga Zivana', '3bad6af0fa4b8b330d162e19938ee981', 2, 'aktif', '2020-11-22 20:19:18', '2020-11-22 20:19:18'),
(33333333, 'Zara Zeva', '827ccb0eea8a706c4c34a16891f84e7b', 2, 'aktif', '2020-11-29 20:21:00', '2020-11-29 20:21:00'),
(321456789, 'Aditya Dwi', '202cb962ac59075b964b07152d234b70', 2, 'aktif', '2020-11-24 21:20:28', '2020-11-24 21:20:28');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `approval_firewall`
--
ALTER TABLE `approval_firewall`
  ADD PRIMARY KEY (`id_approval`),
  ADD KEY `id_request` (`id_request`);

--
-- Indeks untuk tabel `checked_firewall`
--
ALTER TABLE `checked_firewall`
  ADD PRIMARY KEY (`id_checked`),
  ADD KEY `id_request` (`id_request`);

--
-- Indeks untuk tabel `doing_firewall`
--
ALTER TABLE `doing_firewall`
  ADD PRIMARY KEY (`id_doing`),
  ADD KEY `id_request` (`id_request`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `periode_firewall`
--
ALTER TABLE `periode_firewall`
  ADD PRIMARY KEY (`id_periode`);

--
-- Indeks untuk tabel `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `request_firewall`
--
ALTER TABLE `request_firewall`
  ADD PRIMARY KEY (`id_request`),
  ADD KEY `id_project` (`id_project`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleId`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `roleId` (`roleId`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `approval_firewall`
--
ALTER TABLE `approval_firewall`
  MODIFY `id_approval` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `checked_firewall`
--
ALTER TABLE `checked_firewall`
  MODIFY `id_checked` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `doing_firewall`
--
ALTER TABLE `doing_firewall`
  MODIFY `id_doing` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `periode_firewall`
--
ALTER TABLE `periode_firewall`
  MODIFY `id_periode` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `roleId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `approval_firewall`
--
ALTER TABLE `approval_firewall`
  ADD CONSTRAINT `approval_firewall_ibfk_1` FOREIGN KEY (`id_request`) REFERENCES `request_firewall` (`id_request`);

--
-- Ketidakleluasaan untuk tabel `checked_firewall`
--
ALTER TABLE `checked_firewall`
  ADD CONSTRAINT `checked_firewall_ibfk_1` FOREIGN KEY (`id_request`) REFERENCES `request_firewall` (`id_request`);

--
-- Ketidakleluasaan untuk tabel `doing_firewall`
--
ALTER TABLE `doing_firewall`
  ADD CONSTRAINT `doing_firewall_ibfk_1` FOREIGN KEY (`id_request`) REFERENCES `request_firewall` (`id_request`);

--
-- Ketidakleluasaan untuk tabel `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `user` (`nik`);

--
-- Ketidakleluasaan untuk tabel `request_firewall`
--
ALTER TABLE `request_firewall`
  ADD CONSTRAINT `request_firewall_ibfk_1` FOREIGN KEY (`id_project`) REFERENCES `project` (`id_project`),
  ADD CONSTRAINT `request_firewall_ibfk_2` FOREIGN KEY (`nik`) REFERENCES `user` (`nik`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`roleId`) REFERENCES `role` (`roleId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
