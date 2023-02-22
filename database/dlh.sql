/*
 Navicat Premium Data Transfer

 Source Server         : local mysql
 Source Server Type    : MariaDB
 Source Server Version : 100903 (10.9.3-MariaDB-1:10.9.3+maria~ubu2204)
 Source Host           : localhost:3306
 Source Schema         : dlh

 Target Server Type    : MariaDB
 Target Server Version : 100903 (10.9.3-MariaDB-1:10.9.3+maria~ubu2204)
 File Encoding         : 65001

 Date: 22/02/2023 11:44:58
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for artikels
-- ----------------------------
DROP TABLE IF EXISTS `artikels`;
CREATE TABLE `artikels` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of artikels
-- ----------------------------
BEGIN;
INSERT INTO `artikels` (`id`, `judul`, `deskripsi`, `tipe`, `foto`, `created_at`, `updated_at`) VALUES (1, 'DLH Kota Serang lakukan penyegelan perusahaan oli bekas', '<header class=\"post-header\" style=\"position: relative; margin: 0px 0px 20px; caret-color: rgb(85, 85, 85); color: rgb(85, 85, 85); font-family: Roboto, Arial, sans-serif; font-size: 15px;\"><div class=\"wp-caption\" style=\"padding: 0px; text-align: center;\"><p class=\"wp-caption-text\" style=\"font-size: 13px; line-height: 17px; font-style: italic; color: rgb(187, 187, 187); padding: 5px 0px;\">Tim pengawas DLH Kota Serang saat sidak gabungan di PT Raja Goedang Mas di wilayah Kelurahan Sumur Pecung Kecamatan Serang Kota Serang. ANTARA/Istimewa</p></div><div class=\"clearfix\"></div><div class=\"quote_old\" style=\"border-left-width: 2px; border-left-style: solid; border-left-color: rgb(255, 102, 0); font-style: italic; font-stretch: normal; font-size: 1.5em; font-family: Georgia, &quot;Times New Roman&quot;, Times, serif; line-height: 1.5em; padding: 20px 10px 0px; margin: 0px 0px 10px;\">Dari hasil investigasi telah disepakati bahwa lokasi kegiatan tidak layak untuk beroperasi</div></header><div class=\"post-content clearfix\" style=\"caret-color: rgb(85, 85, 85); color: rgb(85, 85, 85); font-family: Roboto, Arial, sans-serif; font-size: 17px;\">Serang, Banten (ANTARA) - Dinas Lingkungan Hidup (DLH) Kota Serang bersama Dinas Lingkungan Hidup Kehutanan (DLHK) Provinsi Banten serta Ditreskrimsus Polda Banten melakukan sidak gabungan terkait pengaduan warga akibat pencemaran lingkungan oleh PT Raja Goedang Mas yang melaksanakan kegiatan usaha pengumpul oli bekas atau limbah B3 di wilayah Kelurahan Sumur Pecung Kecamatan Serang Kota Serang.<br><br>Kepala Dinas Lingkungan Hidup Kota Serang Farach Richi di Serang, Jumat (21/10) mengatakan, dari hasil investigasi tim gabungan tersebut menyatakan bahwa telah terjadi pelanggaran penyalahgunaan ijin dan &nbsp;pembakaran kemasan oli bekas sehingga menimbulkan pencemaran udara di wilayah sekitarnya.<br><br>\"Dari hasil investigasi telah disepakati bahwa lokasi kegiatan tidak layak untuk beroperasi, sehingga pengawas DLH Kota Serang merekomendasikan untuk di lakukan penyegelan serta pemberhentian aktivitas kegiatan usaha pada PT Raja Goedang Mas sampai dilakukan pemenuhan perijinan serta perbaikan dan pembenahan di lokasi kegiatan usaha,\" kata Farach.<br><br>Sementara itu Pengawas Lingkungan Hidup DLH Kota Serang Nasirulllah&nbsp;menambahkan, selain pencemaran udara, hasil investigasi pada perusahaan tersebut juga terjadi&nbsp;dampak pencemaran kontaminasi tanah akibat ceceran oli bekas di sekitaran lokasi kegiatan.<br><br>Untuk selanjutnya kata Nasirulllah, selama penyegelan akan dilakukan pengawasan oleh Tim Pengawas Dinas Lingkungan Hidup Kota Serang.<br><br>Nasirulllah mengemukakan, penyegelan tersebut berawal dari hasil pengawasan reguler oleh tim pengawas DLH Kota Serang pada &nbsp;29 Juli 2022 lalu bahwa telah ditemukan pelanggaran baik dari perijinan yang tidak sesuai serta pencemaran tanah dan air permukaan.<br><br>\"Sehingga kami dari Dinas Lingkungan Hidup Kota Serang pada 08 Agustus 2022 melayangkan surat rekomendasi kepada DLHK Provinsi Banten untuk diberikan sanksi sesuai dengan temuan dari pengawas DLH Kota Serang,\" katanya.&nbsp;</div><footer class=\"post-meta\" style=\"caret-color: rgb(85, 85, 85); color: rgb(85, 85, 85); font-family: Roboto, Arial, sans-serif; font-size: 15px;\"><div class=\"tags-wrapper\" style=\"margin: 10px 0px 20px;\">Pewarta: Lukman Hakim<br>Editor :&nbsp;<br>COPYRIGHT © ANTARA 2023</div></footer>', '1', '2023-2-21_6-17-23_20221021_070947.jpg.webp', '2023-02-21 06:17:23', '2023-02-21 06:17:23');
COMMIT;

-- ----------------------------
-- Table structure for banks
-- ----------------------------
DROP TABLE IF EXISTS `banks`;
CREATE TABLE `banks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeniskegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlahnasabah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of banks
-- ----------------------------
BEGIN;
INSERT INTO `banks` (`id`, `nama`, `alamat`, `jeniskegiatan`, `jumlahnasabah`, `tahun`, `foto`, `created_at`, `updated_at`) VALUES (1, 'Bank Sampah Alam Lestari', 'Kel. Lontar Baru No. 31 RT/RW 01/04, Kec. Serang', '1. Kreasi Daur Ulang Koran\r\n2. Bros Kain Perca\r\n3. Pupuk Organik Cair (POC) Air Leri\r\n4. Pestisida Nabati dari Bawang Merah dan Nasi\r\n5. MOL Salak', '130', '2014', '2023-2-21_2-14-39_almlestari.jpg', '2023-02-21 02:14:39', '2023-02-21 02:14:39');
INSERT INTO `banks` (`id`, `nama`, `alamat`, `jeniskegiatan`, `jumlahnasabah`, `tahun`, `foto`, `created_at`, `updated_at`) VALUES (2, 'Bank Sampah Barokah (Cipete)', 'Kp. Buah Kel. Cipete RT/RW 01/01, Kec. Curug', 'Membuat Kerajinan Tangan dari Kertas Seperti Keranjang dan Vas Bunga', '52', '2019', '2023-2-21_2-17-10_barokah.jpg', '2023-02-21 02:17:10', '2023-02-21 02:17:10');
INSERT INTO `banks` (`id`, `nama`, `alamat`, `jeniskegiatan`, `jumlahnasabah`, `tahun`, `foto`, `created_at`, `updated_at`) VALUES (3, 'CIS Green', 'Perumnas Ciracas RT/RW 08/12, Serang', '1. Aksesoris Kalung dari Kalender Bekas\r\n2. Miniatur Sepeda dan Becak dari Koran Bekas\r\n3. Bunga dari Plastik Kresek', '32', '2019', '2023-2-21_4-27-17_cisgreen.jpg', '2023-02-21 04:27:17', '2023-02-21 04:27:17');
INSERT INTO `banks` (`id`, `nama`, `alamat`, `jeniskegiatan`, `jumlahnasabah`, `tahun`, `foto`, `created_at`, `updated_at`) VALUES (4, 'Bank Sampah Citra Mandiri', 'Komp. Mandala Citra Indah Kec. Serang', 'Membuat Hidroponik atau Taman Vertikal', '35', '2016', '2023-2-21_4-28-51_citramandiri.jpg', '2023-02-21 04:28:51', '2023-02-21 04:28:51');
INSERT INTO `banks` (`id`, `nama`, `alamat`, `jeniskegiatan`, `jumlahnasabah`, `tahun`, `foto`, `created_at`, `updated_at`) VALUES (5, 'Bank Sampah Dewaruci', 'Taman Pipitan Indah Blok F1 Kel. Pipitan, Kec. Walantaka', '1. Pupuk Kompos dari Sampah Organik\r\n2. Membuat Tas dari Bungkus Kopi\r\n3. Taplak Meja dari Kain Bekas', '50', '2018', '2023-2-21_4-30-45_dewaruci.jpg', '2023-02-21 04:30:45', '2023-02-21 04:30:45');
INSERT INTO `banks` (`id`, `nama`, `alamat`, `jeniskegiatan`, `jumlahnasabah`, `tahun`, `foto`, `created_at`, `updated_at`) VALUES (6, 'Bank Sampah Genpilar', 'Link. Cigebug RT/RW 02/01, Kel. Banjar Agung, Kec. Cipocok Jaya', 'Pembuatan BBM dari Sampah Plastik', '60', '2019', '2023-2-21_4-32-37_genpilar.jpg', '2023-02-21 04:32:37', '2023-02-21 04:32:37');
INSERT INTO `banks` (`id`, `nama`, `alamat`, `jeniskegiatan`, `jumlahnasabah`, `tahun`, `foto`, `created_at`, `updated_at`) VALUES (7, 'Bank Sampah Lestari 25', 'Taman Banten Lestari B.F4C No. 42 RT/RW 10/25, Kel. Unyur, Kec. Serang', 'Kerajinan Tangan dari bungkus minuman (Kopi, Jasjus, dll) dan Deterjen Seperti : Tas, Dompet, dll', '65', '2014', '2023-2-21_4-34-33_lestari25.jpg', '2023-02-21 04:34:33', '2023-02-21 04:34:33');
INSERT INTO `banks` (`id`, `nama`, `alamat`, `jeniskegiatan`, `jumlahnasabah`, `tahun`, `foto`, `created_at`, `updated_at`) VALUES (8, 'Permata Mandiri (Safira)', 'Permata Safira Regency RT/RW 01/06, Kel. Sepang, Kec. Taktakan', '1. Kerajinan Tempat Tusukan Jarum dari Kain Bekas\r\n2. Keset dari kain bekas\r\n3. Bros dari kain bekas\r\n4. Karpet plastik yang dipanaskan dengan setrika\r\n5. Media tanam dari sampah organik (Sampah organik ditimbun selama 1 bulan dan dicampur dengan tanah)', '60', '2018', '2023-2-21_4-38-5_permatamandiri.jpg', '2023-02-21 04:38:05', '2023-02-21 04:38:05');
INSERT INTO `banks` (`id`, `nama`, `alamat`, `jeniskegiatan`, `jumlahnasabah`, `tahun`, `foto`, `created_at`, `updated_at`) VALUES (9, 'MCI', 'Link. Cimoyan RW. 04, Ds. Sepang Kec. Taktakan', '1. Botol cantik yang dihias dengan kain bekas\r\n2. Tas dari bungkus kopi\r\n3. Gantungan kunci dari bungkus kopi\r\n4. Lampion dari palaron bekas', '55', '2019', '2023-2-21_4-39-30_mci.jpg', '2023-02-21 04:39:30', '2023-02-21 04:39:30');
COMMIT;

-- ----------------------------
-- Table structure for data
-- ----------------------------
DROP TABLE IF EXISTS `data`;
CREATE TABLE `data` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `files` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of data
-- ----------------------------
BEGIN;
INSERT INTO `data` (`id`, `nama`, `files`, `created_at`, `updated_at`) VALUES (1, 'Perda Kota Serang', '2023-2-18_6-53-3_perdakotaserang_3_2012.pdf', '2023-02-18 06:53:03', '2023-02-18 06:53:03');
INSERT INTO `data` (`id`, `nama`, `files`, `created_at`, `updated_at`) VALUES (2, 'Perwal Kota Serang Tahun 2019', '2023-2-18_6-53-42_Perwalkotserang_29_2019.pdf', '2023-02-18 06:53:42', '2023-02-18 07:02:22');
INSERT INTO `data` (`id`, `nama`, `files`, `created_at`, `updated_at`) VALUES (3, 'UU 32 Tahun 2009', '2023-2-18_6-54-5_UU 32 Tahun 2009-Perlindungan dan Pengelolaan Lingkungan Hidup.pdf', '2023-02-18 06:54:05', '2023-02-18 06:54:05');
INSERT INTO `data` (`id`, `nama`, `files`, `created_at`, `updated_at`) VALUES (4, 'Perwal Kota Serang Tahun 2017', '2023-2-18_7-2-50_PerwalKota Serang_15_2017.pdf', '2023-02-18 07:02:50', '2023-02-18 07:02:50');
INSERT INTO `data` (`id`, `nama`, `files`, `created_at`, `updated_at`) VALUES (5, 'UU 32 Tahun 2004', '2023-2-18_7-3-12_uu32_2004_pemerintahandaerah.pdf', '2023-02-18 07:03:12', '2023-02-18 07:03:12');
COMMIT;

-- ----------------------------
-- Table structure for diawasis
-- ----------------------------
DROP TABLE IF EXISTS `diawasis`;
CREATE TABLE `diawasis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `temuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlahperusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of diawasis
-- ----------------------------
BEGIN;
INSERT INTO `diawasis` (`id`, `temuan`, `kategori`, `jumlahperusahaan`, `tahun`, `created_at`, `updated_at`) VALUES (2, 'Perijinan Dokumen Lingkungan', 'Memiliki:Tidak Memiliki', '75:5', '2019', '2023-02-21 08:05:56', '2023-02-21 08:16:56');
INSERT INTO `diawasis` (`id`, `temuan`, `kategori`, `jumlahperusahaan`, `tahun`, `created_at`, `updated_at`) VALUES (3, 'Pengendalian Pencemaran Air', 'Memiliki:Tidak Memiliki', '65:15', '2019', '2023-02-21 08:06:46', '2023-02-21 08:17:48');
INSERT INTO `diawasis` (`id`, `temuan`, `kategori`, `jumlahperusahaan`, `tahun`, `created_at`, `updated_at`) VALUES (4, 'Pengendalian Pencemaran udara dan House Keeping', 'Taat:Tidak Taat', '11:69', '2019', '2023-02-21 08:18:44', '2023-02-21 08:18:44');
INSERT INTO `diawasis` (`id`, `temuan`, `kategori`, `jumlahperusahaan`, `tahun`, `created_at`, `updated_at`) VALUES (5, 'Pengendalian Limbah Padat/Limbah B3', 'Taat:Tidak Taat', '6:74', '2019', '2023-02-21 08:19:34', '2023-02-21 08:19:34');
COMMIT;

-- ----------------------------
-- Table structure for dokirs
-- ----------------------------
DROP TABLE IF EXISTS `dokirs`;
CREATE TABLE `dokirs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `dokling` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of dokirs
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for doklings
-- ----------------------------
DROP TABLE IF EXISTS `doklings`;
CREATE TABLE `doklings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of doklings
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for fotos
-- ----------------------------
DROP TABLE IF EXISTS `fotos`;
CREATE TABLE `fotos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of fotos
-- ----------------------------
BEGIN;
INSERT INTO `fotos` (`id`, `judul`, `file`, `created_at`, `updated_at`) VALUES (1, 'Aplikasi Siherang Di Playstore', '2023-2-18_7-7-22_UP.jpg', '2023-02-18 07:07:22', '2023-02-18 07:07:22');
COMMIT;

-- ----------------------------
-- Table structure for jenisangkuts
-- ----------------------------
DROP TABLE IF EXISTS `jenisangkuts`;
CREATE TABLE `jenisangkuts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of jenisangkuts
-- ----------------------------
BEGIN;
INSERT INTO `jenisangkuts` (`id`, `jenis`, `unit`, `keterangan`, `created_at`, `updated_at`) VALUES (1, 'Dump Truck', '21', 'Baik', '2023-02-20 14:50:41', '2023-02-20 14:50:41');
INSERT INTO `jenisangkuts` (`id`, `jenis`, `unit`, `keterangan`, `created_at`, `updated_at`) VALUES (2, 'Amroll', '8', 'Baik', '2023-02-20 14:50:56', '2023-02-20 14:50:56');
INSERT INTO `jenisangkuts` (`id`, `jenis`, `unit`, `keterangan`, `created_at`, `updated_at`) VALUES (3, 'Pick Up', '5', 'Baik', '2023-02-20 14:51:04', '2023-02-20 14:51:04');
INSERT INTO `jenisangkuts` (`id`, `jenis`, `unit`, `keterangan`, `created_at`, `updated_at`) VALUES (4, 'Motor Roda Tiga (CATOR)', '46', 'Baik', '2023-02-20 14:51:22', '2023-02-20 14:51:22');
INSERT INTO `jenisangkuts` (`id`, `jenis`, `unit`, `keterangan`, `created_at`, `updated_at`) VALUES (5, 'Sepeda Motor Roda Dua', '7', 'Baik', '2023-02-20 14:51:38', '2023-02-20 14:51:38');
INSERT INTO `jenisangkuts` (`id`, `jenis`, `unit`, `keterangan`, `created_at`, `updated_at`) VALUES (6, 'Grobak Sampah', '46', 'Baik', '2023-02-20 14:51:47', '2023-02-20 14:51:47');
COMMIT;

-- ----------------------------
-- Table structure for jenistps
-- ----------------------------
DROP TABLE IF EXISTS `jenistps`;
CREATE TABLE `jenistps` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `jenistps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of jenistps
-- ----------------------------
BEGIN;
INSERT INTO `jenistps` (`id`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (1, 'TPSS', '47', '2023-02-20 14:45:54', '2023-02-20 14:52:05');
INSERT INTO `jenistps` (`id`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (5, 'TPS Container', '40', '2023-02-20 14:47:15', '2023-02-20 14:52:22');
INSERT INTO `jenistps` (`id`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (11, 'TPST', '9', '2023-02-20 14:48:51', '2023-02-20 14:52:36');
INSERT INTO `jenistps` (`id`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (12, 'TPS Bata', '18', '2023-02-20 14:49:03', '2023-02-20 14:52:48');
INSERT INTO `jenistps` (`id`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (14, 'TPS 3R', '12', '2023-02-20 14:49:31', '2023-02-20 14:52:59');
INSERT INTO `jenistps` (`id`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (15, 'Outdoor Tanam', '400', '2023-02-20 14:49:51', '2023-02-20 14:49:51');
COMMIT;

-- ----------------------------
-- Table structure for limbahs
-- ----------------------------
DROP TABLE IF EXISTS `limbahs`;
CREATE TABLE `limbahs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of limbahs
-- ----------------------------
BEGIN;
INSERT INTO `limbahs` (`id`, `nama`, `forms`, `created_at`, `updated_at`) VALUES (1, 'Formulir Permohonan TPSLB3', '2023-2-18_6-59-24_BLANKO_FORMULIR PERMOHONAN TPSLB3.docx', '2023-02-18 06:59:24', '2023-02-18 06:59:24');
INSERT INTO `limbahs` (`id`, `nama`, `forms`, `created_at`, `updated_at`) VALUES (2, 'Format Administrasi Izin Pembuangan Air Limbah', '2023-2-21_6-11-8_Format Administrasi Izin Pembuangan Air Limbah.docx', '2023-02-21 06:11:08', '2023-02-21 06:11:08');
INSERT INTO `limbahs` (`id`, `nama`, `forms`, `created_at`, `updated_at`) VALUES (3, 'Format Administrasi Pengumpulan TPSLB3', '2023-2-21_6-11-33_Format Administrasi Izin Pengumpulan.docx', '2023-02-21 06:11:33', '2023-02-21 06:11:33');
INSERT INTO `limbahs` (`id`, `nama`, `forms`, `created_at`, `updated_at`) VALUES (4, 'Format Administrasi Penyimpanan TPSLB3', '2023-2-21_6-11-56_Format Administrasi Izin Penyimpanan.docx', '2023-02-21 06:11:56', '2023-02-21 06:11:56');
INSERT INTO `limbahs` (`id`, `nama`, `forms`, `created_at`, `updated_at`) VALUES (5, 'Format Izin SIPAL', '2023-2-21_6-12-14_Format Izin SIPAL.doc', '2023-02-21 06:12:14', '2023-02-21 06:12:14');
COMMIT;

-- ----------------------------
-- Table structure for lokasitps
-- ----------------------------
DROP TABLE IF EXISTS `lokasitps`;
CREATE TABLE `lokasitps` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keldesa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenistps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of lokasitps
-- ----------------------------
BEGIN;
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (3, 'Jl. Ujair Yahya', 'Cipare', 'Serang', 'TPSS', '1', '2023-02-20 15:47:31', '2023-02-20 15:47:31');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (4, 'Kp. Benggala RSU', 'Cipare', 'Serang', 'TPSS', '1', '2023-02-20 15:48:57', '2023-02-20 15:48:57');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (5, 'Komplek Satria Dalam', 'Cipare', 'Serang', 'TPSS', '1', '2023-02-20 15:49:20', '2023-02-20 15:49:20');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (6, 'SMAN 2 Nancang', 'Karundang', 'Cipocok Jaya', 'TPSS', '1', '2023-02-20 15:51:27', '2023-02-20 15:51:27');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (7, 'Komp. ABRI/Bayangkara', 'Cipocok Jaya', 'Cipocok Jaya', 'TPSS', '1', '2023-02-20 15:52:01', '2023-02-20 15:52:01');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (8, 'Depan Kel. Cipocok', 'Cipocok Jaya', 'Cipocok Jaya', 'TPSS', '1', '2023-02-20 15:52:36', '2023-02-20 15:52:36');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (9, 'Komplek P&K Penancangan', 'Penancangan', 'Cipocok Jaya', 'TPSS', '1', '2023-02-20 15:53:06', '2023-02-20 15:53:06');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (10, 'Prisma', 'Penancangan', 'Cipocok Jaya', 'TPSS', '1', '2023-02-20 15:53:27', '2023-02-20 15:53:27');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (11, 'STIE Bina Bangsa', 'Penancangan', 'Cipocok Jaya', 'TPSS', '1', '2023-02-20 15:54:14', '2023-02-20 15:54:14');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (12, 'Komp. Untirta', 'Penancangan', 'Cipocok Jaya', 'TPSS', '2', '2023-02-20 15:54:54', '2023-02-20 15:54:54');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (13, 'Perum Bumi Serang Timur', 'Penancangan', 'Cipocok Jaya', 'TPSS', '1', '2023-02-20 15:57:44', '2023-02-20 15:57:44');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (14, 'Perum Bumi Mutiara Serang', 'Penancangan', 'Cipocok Jaya', 'TPSS', '1', '2023-02-20 15:58:26', '2023-02-20 15:58:26');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (15, 'Perum. Griya Lopang', 'Lopang', 'Serang', 'TPSS', '1', '2023-02-20 15:59:01', '2023-02-20 15:59:01');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (16, 'Jl. Raya Banten', 'Unyur', 'Serang', 'TPSS', '6', '2023-02-20 15:59:22', '2023-02-20 15:59:22');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (17, 'Perum. Mandala Citra', 'Cimuncang', 'Serang', 'TPSS', '1', '2023-02-20 16:00:16', '2023-02-20 16:00:16');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (18, 'Perum. Bumi Sari (Kasemen)', 'Kasemen', 'Kasemen', 'TPSS', '1', '2023-02-20 16:00:44', '2023-02-20 16:00:44');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (19, 'Perum. Puri Citra', 'Pipitan', 'Walantaka', 'TPSS', '2', '2023-02-20 16:01:23', '2023-02-20 16:01:23');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (20, 'Perum. Taman Pipitan Indah', 'Pipitan', 'Walantaka', 'TPSS', '1', '2023-02-20 16:01:51', '2023-02-20 16:01:51');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (21, 'Perum. Graha Walantaka', 'Walantaka', 'Walantaka', 'TPSS', '1', '2023-02-20 16:02:19', '2023-02-20 16:02:19');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (22, 'Perum Persada', '-', 'Walantaka', 'TPSS', '1', '2023-02-20 16:02:44', '2023-02-20 16:02:44');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (23, 'Perum. Lopang Indah', 'Lopang', 'Serang', 'TPSS', '1', '2023-02-20 16:03:04', '2023-02-20 16:03:04');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (24, 'Full Armada', 'Kaligandu', 'Serang', 'TPSS', '1', '2023-02-20 16:03:32', '2023-02-20 16:03:32');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (25, 'Jl. Saleh Baimin', 'Cimuncang', 'Serang', 'TPSS', '4', '2023-02-20 16:04:12', '2023-02-20 16:04:12');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (26, 'Depan Kantor PM', 'Cimuncang', 'Serang', 'TPSS', '1', '2023-02-20 16:04:38', '2023-02-20 16:04:38');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (27, 'Kp. Pegantungan', 'Cimuncang', 'Serang', 'TPSS', '2', '2023-02-20 16:05:01', '2023-02-20 16:05:01');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (28, 'RUTAN (Magersari)', 'Kota Baru', 'Serang', 'TPSS', '1', '2023-02-20 16:05:37', '2023-02-20 16:05:37');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (29, 'Asrama Brimob', 'Lontar Baru', 'Serang', 'TPSS', '2', '2023-02-20 16:08:52', '2023-02-20 16:08:52');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (30, 'Kp. Kebon Sayur', 'Kota Baru', 'Serang', 'TPSS', '1', '2023-02-20 16:09:16', '2023-02-20 16:09:16');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (31, 'Perum. Ciracas', 'Serang', 'Serang', 'TPSS', '1', '2023-02-20 16:09:37', '2023-02-20 16:09:37');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (32, 'Kp. Tanggul', 'Cimuncang', 'Serang', 'TPSS', '1', '2023-02-20 16:10:13', '2023-02-20 16:10:13');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (33, 'IAIN (Ciceri)', 'Sumur Pecung', 'Serang', 'TPSS', '1', '2023-02-20 16:10:37', '2023-02-20 16:10:37');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (34, 'Pemkot Lama', 'Sumur Pecung', 'Serang', 'TPSS', '1', '2023-02-20 16:10:54', '2023-02-20 16:10:54');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (35, 'SMKN', 'Sumur Pecung', 'Serang', 'TPSS', '1', '2023-02-20 16:11:25', '2023-02-20 16:11:25');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (36, 'SMK PGRI', 'Serang', 'Serang', 'TPSS', '1', '2023-02-20 16:12:31', '2023-02-20 16:12:31');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (37, 'SMP 1 Negeri', 'Ciceri', 'Serang', 'TPSS', '1', '2023-02-20 16:12:48', '2023-02-20 16:12:48');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (38, 'Banten Lama Rel Kereta', 'Banten', 'Kasemen', 'TPS Container', '2', '2023-02-20 16:13:25', '2023-02-20 16:13:25');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (39, 'Pasar Karangantu', 'Banten', 'Kasemen', 'TPS Container', '1', '2023-02-20 16:13:47', '2023-02-20 16:13:47');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (40, 'Perum. Banjar Asri', 'Banjar Sari', 'Cipocok Jaya', 'TPS Container', '1', '2023-02-20 16:15:01', '2023-02-20 16:15:01');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (41, 'Terminal Cipocok', 'Cipocok Jaya', 'Cipocok Jaya', 'TPS Container', '7', '2023-02-20 16:15:27', '2023-02-20 16:15:27');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (42, 'Terminal Pakupatan', 'Penancangan', 'Cipocok Jaya', 'TPS Container', '2', '2023-02-20 16:29:24', '2023-02-20 16:29:24');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (43, 'RUSNAWA', 'Serang', 'Serang', 'TPS Container', '1', '2023-02-20 16:29:46', '2023-02-20 16:29:46');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (44, 'Penancangan', 'Penancangan', 'Cipocok Jaya', 'TPS Container', '3', '2023-02-20 16:30:57', '2023-02-20 16:30:57');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (45, 'Perum Bumi Agung 1 RW 12', 'Unyur', 'Serang', 'TPS Container', '1', '2023-02-20 16:31:36', '2023-02-20 16:31:36');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (46, 'Perum Bumi Agung 1 RW 8', 'Unyur', 'Serang', 'TPS Container', '1', '2023-02-20 16:33:43', '2023-02-20 16:33:43');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (47, 'Terminal Kepandean', 'Lontar Baru', 'Serang', 'TPS Container', '3', '2023-02-20 16:34:10', '2023-02-20 16:34:10');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (48, 'Lingk. Kantor Pemkot KSB', 'Banjar Agung', 'Cipocok Jaya', 'TPS Container', '1', '2023-02-20 16:34:59', '2023-02-20 16:34:59');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (49, 'Perum KSB', 'Banjar Agung', 'Cipocok Jaya', 'TPS Container', '1', '2023-02-20 16:35:41', '2023-02-20 16:35:41');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (50, 'Pasar Karangantu', 'Banten', 'Kasemen', 'TPS Container', '1', '2023-02-20 16:36:07', '2023-02-20 16:36:07');
INSERT INTO `lokasitps` (`id`, `lokasi`, `keldesa`, `kecamatan`, `jenistps`, `unit`, `created_at`, `updated_at`) VALUES (51, 'Asrama POLDA', 'Banjarsari', 'Cipocok Jaya', 'TPS Container', '1', '2023-02-20 16:36:40', '2023-02-20 16:36:40');
COMMIT;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (4, '2019_12_03_140736_create_pengaduan_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (5, '2019_12_05_171606_create_pelakus_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (6, '2019_12_05_171739_create_diawasis_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (7, '2019_12_05_173833_create_doklings_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (8, '2019_12_05_174051_create_limbahs_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (9, '2019_12_05_174642_create_scas_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (10, '2019_12_05_174654_create_snas_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (11, '2019_12_05_174945_create_scatingkats_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (12, '2019_12_05_175824_create_banks_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (13, '2019_12_05_180505_create_tps_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (14, '2019_12_05_181335_create_timbulans_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (15, '2019_12_05_181523_create_smphliars_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (16, '2019_12_05_181927_create_lokasitps_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (17, '2019_12_05_182041_create_jenistps_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (18, '2019_12_05_182145_create_jenisangkuts_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (19, '2019_12_05_182729_create_data_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (20, '2019_12_05_183603_create_artikels_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (21, '2019_12_05_184025_create_pengumumen_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (22, '2019_12_05_184234_create_pjkwargas_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (23, '2020_01_30_141426_create_dokirs_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (24, '2020_02_05_142614_create_notifs_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (25, '2020_02_24_151553_create_notif_users_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (26, '2020_02_24_152415_create_notif_admins_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (27, '2020_02_26_161728_create_fotos_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (28, '2020_02_26_161835_create_videos_table', 1);
COMMIT;

-- ----------------------------
-- Table structure for notif_admins
-- ----------------------------
DROP TABLE IF EXISTS `notif_admins`;
CREATE TABLE `notif_admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `dokling` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pelaporan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banksampah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of notif_admins
-- ----------------------------
BEGIN;
INSERT INTO `notif_admins` (`id`, `dokling`, `data`, `pelaporan`, `banksampah`, `created_at`, `updated_at`) VALUES (1, '0', '0', '0', '0', '2023-02-16 16:28:50', '2023-02-21 08:21:08');
COMMIT;

-- ----------------------------
-- Table structure for notif_users
-- ----------------------------
DROP TABLE IF EXISTS `notif_users`;
CREATE TABLE `notif_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `amdal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uklupl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sppl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengaduan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banksampah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `warta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengumuman` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of notif_users
-- ----------------------------
BEGIN;
INSERT INTO `notif_users` (`id`, `user_id`, `amdal`, `uklupl`, `sppl`, `foto`, `video`, `pengaduan`, `banksampah`, `data`, `warta`, `pengumuman`, `created_at`, `updated_at`) VALUES (1, 1, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2023-02-16 16:28:50', '2023-02-21 08:30:16');
COMMIT;

-- ----------------------------
-- Table structure for notifs
-- ----------------------------
DROP TABLE IF EXISTS `notifs`;
CREATE TABLE `notifs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_menu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `on` int(11) DEFAULT NULL,
  `db` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of notifs
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for pelakus
-- ----------------------------
DROP TABLE IF EXISTS `pelakus`;
CREATE TABLE `pelakus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `jeniskegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlahperusahaan` int(11) NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of pelakus
-- ----------------------------
BEGIN;
INSERT INTO `pelakus` (`id`, `jeniskegiatan`, `jumlahperusahaan`, `tahun`, `created_at`, `updated_at`) VALUES (1, 'Puskesmas', 16, '2019', '2023-02-20 16:53:37', '2023-02-20 16:53:37');
INSERT INTO `pelakus` (`id`, `jeniskegiatan`, `jumlahperusahaan`, `tahun`, `created_at`, `updated_at`) VALUES (2, 'RS (Pemerintah dan Swasta)', 12, '2019', '2023-02-20 16:53:57', '2023-02-20 16:53:57');
INSERT INTO `pelakus` (`id`, `jeniskegiatan`, `jumlahperusahaan`, `tahun`, `created_at`, `updated_at`) VALUES (3, 'Laboratorium', 8, '2019', '2023-02-21 02:06:06', '2023-02-21 02:06:06');
INSERT INTO `pelakus` (`id`, `jeniskegiatan`, `jumlahperusahaan`, `tahun`, `created_at`, `updated_at`) VALUES (4, 'Klinik Umum dan Kecantikan', 136, '2019', '2023-02-21 02:06:35', '2023-02-21 02:06:35');
INSERT INTO `pelakus` (`id`, `jeniskegiatan`, `jumlahperusahaan`, `tahun`, `created_at`, `updated_at`) VALUES (5, 'Hotel', 15, '2019', '2023-02-21 02:06:51', '2023-02-21 02:06:51');
INSERT INTO `pelakus` (`id`, `jeniskegiatan`, `jumlahperusahaan`, `tahun`, `created_at`, `updated_at`) VALUES (6, 'Restaurant', 2, '2019', '2023-02-21 02:07:06', '2023-02-21 02:07:06');
INSERT INTO `pelakus` (`id`, `jeniskegiatan`, `jumlahperusahaan`, `tahun`, `created_at`, `updated_at`) VALUES (7, 'Peternakan', 10, '2019', '2023-02-21 02:07:18', '2023-02-21 02:07:18');
INSERT INTO `pelakus` (`id`, `jeniskegiatan`, `jumlahperusahaan`, `tahun`, `created_at`, `updated_at`) VALUES (8, 'Showroom dan Bengkel', 9, '2019', '2023-02-21 02:07:38', '2023-02-21 02:07:38');
INSERT INTO `pelakus` (`id`, `jeniskegiatan`, `jumlahperusahaan`, `tahun`, `created_at`, `updated_at`) VALUES (9, 'Perumahan', 80, '2019', '2023-02-21 02:07:48', '2023-02-21 02:07:48');
INSERT INTO `pelakus` (`id`, `jeniskegiatan`, `jumlahperusahaan`, `tahun`, `created_at`, `updated_at`) VALUES (10, 'SPBU', 14, '2019', '2023-02-21 02:08:01', '2023-02-21 02:08:01');
COMMIT;

-- ----------------------------
-- Table structure for pengaduans
-- ----------------------------
DROP TABLE IF EXISTS `pengaduans`;
CREATE TABLE `pengaduans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notelp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamatkejadian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jeniskegiatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namakegiatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uraiankejadian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dampak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penyelesaian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namainstansi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of pengaduans
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for pengumumen
-- ----------------------------
DROP TABLE IF EXISTS `pengumumen`;
CREATE TABLE `pengumumen` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of pengumumen
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for pjkwargas
-- ----------------------------
DROP TABLE IF EXISTS `pjkwargas`;
CREATE TABLE `pjkwargas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of pjkwargas
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for scas
-- ----------------------------
DROP TABLE IF EXISTS `scas`;
CREATE TABLE `scas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `namasekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepalasekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of scas
-- ----------------------------
BEGIN;
INSERT INTO `scas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (1, 'SDN Bhayangkari', 'Jl. Jendral A. Yani No. 66 Serang', '002.6/Kep.211-Huk/2014', 'Hj. Umi Prasetyawati', '2014', '2023-02-18 07:29:12', '2023-02-18 07:29:12');
INSERT INTO `scas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (2, 'SDIT Al-Izzah', 'Jl. Tb. Husni Qodir Pabuaran Unyur', '660.1/Kep.442-Huk/2015', 'Muhammadd Arifin, S.Ag', '2015', '2023-02-18 07:30:40', '2023-02-18 07:30:40');
INSERT INTO `scas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (3, 'SDN Pager Agung', 'Kp. Simangu Cilik', '660.1/Kep.442-Huk/2015', 'Yuyun Yuningsih', '2015', '2023-02-18 07:31:37', '2023-02-18 07:31:37');
INSERT INTO `scas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (4, 'SDN Kubang', '-', '-', 'Yuyun Yuningsih', '2015', '2023-02-18 07:32:57', '2023-02-18 07:32:57');
INSERT INTO `scas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (5, 'SDN Cipocok Jaya 3', 'Lingk. Sumur Putat Kec. Cipocok Jaya', '-', 'Yuyun Yuningsih', '2015', '2023-02-18 07:37:26', '2023-02-18 07:37:26');
INSERT INTO `scas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (6, 'SDN Serang 3', 'Jl. Karya Bhakti II', '-', 'Salmi, M. Pd', '2016', '2023-02-18 07:38:21', '2023-02-18 07:38:21');
INSERT INTO `scas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (7, 'SDN Cinanggung', 'Jl. Pandawa Komp. Pemda', '861/Kep.137-Huk/2016', 'Ponirahati, S.Pd', '2016', '2023-02-18 07:39:05', '2023-02-18 07:41:33');
INSERT INTO `scas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (8, 'SDN Ciceri', 'Jl. Kh. Abdul Latief No. 36 Sumur Pecung', '861/Kep.137-Huk/2016', 'Nurudin, S.Pd', '2016', '2023-02-18 07:43:30', '2023-02-18 07:43:30');
INSERT INTO `scas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (9, 'SDN Kesatrian', 'Jl. Terminal Baru Banten Lama', '861/Kep.137-Huk/2016', '-', '2016', '2023-02-18 07:44:26', '2023-02-18 07:44:26');
INSERT INTO `scas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (10, 'SDN Serang 2', 'Jl. Kimasjong No. 1 Serang', '861/Kep.225-Huk/2017', 'Salmi, M.Pd', '2017', '2023-02-18 07:45:23', '2023-02-18 07:45:23');
INSERT INTO `scas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (11, 'SDN Kelapa Dua', 'Jl. Kelapa Dua', '861/Kep.225-Huk/2017', 'Hj. Iis Sumarni, S.Pd', '2017', '2023-02-18 07:47:53', '2023-02-18 07:47:53');
INSERT INTO `scas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (12, 'SDN Unyur', 'Jl. Raya Banten No. 85 Serang', '861/kep.225-Huk/2017', 'Hj. Oom Kuraesin, S.Pd', '2017', '2023-02-18 07:53:36', '2023-02-18 07:53:36');
INSERT INTO `scas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (13, 'SDN Melandang', 'Kp. Melandang Ds. Kalodran', '861/Kep.225-Huk/2017', 'Hj. Dedeh', '2017', '2023-02-18 07:54:33', '2023-02-18 07:54:33');
INSERT INTO `scas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (14, 'SDN Pamarican 1', 'Kp. Pamarican', '-', 'Hj. Dedeh', '2017', '2023-02-18 07:55:13', '2023-02-18 07:55:13');
INSERT INTO `scas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (15, 'SDN Gowok', '-', '-', 'Hj. Dedeh', '2017', '2023-02-18 07:55:32', '2023-02-18 07:58:55');
INSERT INTO `scas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (16, 'SDN Karundang 2', 'Jl. Raya Pandeglang Km. 4 Serang', '-', 'Yani', '2017', '2023-02-18 07:56:10', '2023-02-18 07:58:29');
INSERT INTO `scas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (17, 'SDN Banjar Agung 1', 'Jl. Kh. Sadeli Banjaragung Cipocok', '2017', 'Hj. Dedeh', '2017', '2023-02-18 07:57:19', '2023-02-18 07:57:19');
INSERT INTO `scas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (18, 'SDN Karundang 1', 'Jl. Raya Pandeglang Km. 4 Serang', '-', '-', '2018', '2023-02-18 07:59:53', '2023-02-18 07:59:53');
INSERT INTO `scas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (19, 'SDN Banjar Sari 5', 'Perumahan Permata Banjar Asri', '-', 'Hj. Dedeh', '2018', '2023-02-18 08:01:33', '2023-02-18 08:01:33');
INSERT INTO `scas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (20, 'SDN Serang 11', 'Jl. Komplek Perumnas Ciracas', '861/Kep.117-Huk/2018', 'Entin Agustini, M.Pd', '2018', '2023-02-18 08:02:50', '2023-02-18 08:02:50');
INSERT INTO `scas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (21, 'SDN Serang 2', 'Jl. Kimasjong No.1 Serang', '861/Kep.117-Huk/2018', 'Salmi, M.Pd', '2018', '2023-02-18 08:03:50', '2023-02-18 08:03:50');
INSERT INTO `scas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (22, 'SDN Nyapah 3', 'Kp. Nyapaha Ds. Nyapah', '-', '-', '2018', '2023-02-18 08:04:41', '2023-02-18 08:04:41');
INSERT INTO `scas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (23, 'SDN Cisangku', 'Kp. Cigemuk Ds. Curug', '2018', '-', '2018', '2023-02-18 08:05:20', '2023-02-18 08:05:20');
INSERT INTO `scas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (24, 'SDN Gadaraha', 'Curug', '-', 'Madnur, S.Pd', '2019', '2023-02-18 08:06:01', '2023-02-18 08:06:01');
INSERT INTO `scas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (25, 'SDN Kesaud', 'Kesaud Ds. Sawah Luhur', '-', 'Tb.Samsudin', '2019', '2023-02-18 08:06:32', '2023-02-18 08:06:32');
COMMIT;

-- ----------------------------
-- Table structure for scatingkats
-- ----------------------------
DROP TABLE IF EXISTS `scatingkats`;
CREATE TABLE `scatingkats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `namasekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepalasekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penghargaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of scatingkats
-- ----------------------------
BEGIN;
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (1, 'SDN Bhayangkari', 'Jl. Jendral A. Yani No. 66 Serang', '660.1/Kep.352-Huk/2013', 'HJ. Umi Prasetyawati', 'Tingkat Kota', '2013', '2023-02-18 08:08:56', '2023-02-18 08:08:56');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (2, 'SDIT Al-Izzah', 'Jl. Tb. Husni Qodir Pabuaran Unyur', '660.1/Kep.442-Huk/2015', 'Muhammad Arifin, S.Ag', 'Tingkat Kota', '2015', '2023-02-18 08:09:56', '2023-02-18 08:09:56');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (3, 'SDN Pager Agung', 'Kp. Simangu Cilik', '660.1/Kep.442-Huk/2015', 'Yuyun Yuningsih', 'Tingkat Kota', '2015', '2023-02-18 08:10:53', '2023-02-18 08:10:53');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (4, 'SDN Kubang', '-', '-', 'Yuyun Yuningsih', 'Tingkat Kota', '2015', '2023-02-18 08:11:30', '2023-02-18 08:11:30');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (5, 'SDN Cipocok Jaya 3', 'Lingk. Sumur Putat Kec. Cipocok Jaya', '660.1/Kep.442-Huk/2015', 'Yuyun Yuningsih', 'Tingkat Kota', '2015', '2023-02-18 08:12:32', '2023-02-18 08:12:32');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (6, 'SDN Serang 3', 'Jl. Karya Bhakti II', '861/Kep.137-Huk/2016', 'Salmi, M.Pd', 'Tingkat Kota', '2016', '2023-02-18 08:13:54', '2023-02-18 08:13:54');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (7, 'SDN Cinanggung', 'Jl. Pandawa Komp. Pemda', '861/Kep.137-Huk/2016', 'Ponirahati, S.Pd', 'Tingkat Kota', '2016', '2023-02-18 08:15:06', '2023-02-18 08:15:06');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (8, 'SDN Ciceri', 'Jl. Kh. Abdul Latief No. 36 Sumur Pecung', '861/Kep.225-Huk/2017', 'Nurudin, S.Pd', 'Tingkat Kota', '2017', '2023-02-18 08:17:27', '2023-02-18 08:17:27');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (9, 'SDN Serang 2', 'Jl. Kimasjong No.1 Serang', '861/Kep.225-Huk/2017', 'Salmi, M.Pd', 'Tingkat Kota', '2017', '2023-02-18 08:18:38', '2023-02-18 08:18:38');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (10, 'SDN Kelapa dua', 'Jl. Kelapa Dua', '861/Kep.225-Huk/2017', 'Hj. Iis Sumarni, S.Pd', 'Tingkat Kota', '2017', '2023-02-18 08:20:01', '2023-02-18 08:20:01');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (11, 'SDN Unyur', 'Jl. Raya Banten No. 85 Serang', '861/Kep.225-Huk/2017', 'Hj. Oom Kuraesin, S.Pd', 'Tingkat Kota', '2017', '2023-02-18 08:21:09', '2023-02-18 08:21:09');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (12, 'SDN Melandang', 'Kp. Melandang Ds. Kalodran', '861/Kep.225-Huk/2017', 'Hj. Dedeh', 'Tingkat Kota', '2017', '2023-02-18 08:22:27', '2023-02-18 08:22:27');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (13, 'SDN Gowok', '-', '861/Kep.225-Huk/2017', 'Hj. Dedeh', 'Tingkat Kota', '2017', '2023-02-18 08:23:12', '2023-02-18 08:23:12');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (14, 'SDN Pamarican 1', 'Kp. Pamarican', '861/Kep.225-Huk/2017', '-', 'Tingkat Kota', '2017', '2023-02-18 08:24:04', '2023-02-18 08:24:04');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (15, 'SDN Pamarican 1', 'Kp. Pamarican', '861/Kep.225-Huk/2017', '-', 'Tingkat Kota', '2017', '2023-02-18 08:25:44', '2023-02-18 08:27:08');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (16, 'SDN Karundang 2', 'Jl. Raya Pandeglang Km. 4 Serang', '861/Kep.225-Huk/2017', 'Yani', 'Tingkat Kota', '2017', '2023-02-18 08:26:55', '2023-02-18 08:26:55');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (17, 'SDN Banjar Agung 1', 'Jl. Kh. Sadeli Banjaragung Cipocok', '861/Kep.225-Huk/2017', 'Hj. Dedeh', 'Tingkat Kota', '2017', '2023-02-18 08:28:22', '2023-02-18 08:28:22');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (18, 'SDN Serang 11', 'Jl. Komplek Perumnas Ciracas', '861/Kep.117-Huk/2018', 'Entin Agustini, M.Pd', 'Tingkat Kota', '2018', '2023-02-18 08:30:05', '2023-02-18 08:30:05');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (19, 'SDN Nyapah 3', 'Kp. Nyapah Ds. Nyapah', '-', '-', 'Tingkat Kota', '2018', '2023-02-18 08:31:04', '2023-02-18 08:31:04');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (20, 'SDN Cisangku', 'Kp. Cigemuk Ds. Cigemuk', '-', '-', 'Tingkat Kota', '2018', '2023-02-18 08:31:45', '2023-02-18 08:31:45');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (21, 'SDN Gadaraha', 'Curug', '861/Kep.154-Huk/2019', 'Madnur, S.Pd', 'Tingkat Kota', '2018', '2023-02-18 08:32:22', '2023-02-18 08:34:07');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (22, 'SDN Kesaud', 'Kesaud Ds. Sawah Luhur', '861/Kep.154-Huk/2019', 'Tb. Samsudin', 'Tingkat Kota', '2019', '2023-02-18 08:33:23', '2023-02-18 08:34:19');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (23, 'SDN Taktakan 1', 'Jl. Takari Km. 7 Ds. Taktakan', '-', '-', 'Tingkat Kota', '2019', '2023-02-18 08:35:18', '2023-02-18 08:35:18');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (24, 'SDN Jakung', 'Jl. Takari Km. 10 Ds. Cilowong', '-', '-', 'Tingkat Kota', '2019', '2023-02-18 08:36:05', '2023-02-18 08:36:05');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (25, 'SMP IT AL-IZZAH', '-', '-', '-', 'Tingkat Kota', '2019', '2023-02-18 08:36:40', '2023-02-18 08:36:40');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (26, 'SMK 3 Kota Serang', '-', '-', '-', 'Tingkat Kota', '2019', '2023-02-18 08:37:07', '2023-02-18 08:37:07');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (27, 'SMAN 4 Kota Serang', 'Jl. Raya Banten Km. 5 Kasemen, Kota Serang, Provinsi Banten', '-', '-', 'Tingkat Kota', '2015', '2023-02-18 08:37:49', '2023-02-18 08:37:49');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (28, 'SDN Bhayangkari', 'Jl. Jendral A. Yani No. 66 Serang', '002.6/Kep.211-Huk/2014', 'Hj. Umi Prasetyawati', 'Tingkat Provinsi', '2014', '2023-02-18 08:39:11', '2023-02-18 08:39:11');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (29, 'SDN Banjar Sari 5', 'Perumahan Permata Banjar Asri', '861/Kep. 117-Huk/2018', 'Hj. Dedeh', 'Tingkat Provinsi', '2018', '2023-02-18 08:39:54', '2023-02-18 08:39:54');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (30, 'SDN Karundang 1', 'Jl. Raya Pandeglang Km. 4 Serang', '861/Kep.117-Huk/2018', '-', 'Tingkat Provinsi', '2018', '2023-02-18 08:40:43', '2023-02-18 08:40:43');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (31, 'SDN Serang 2', 'Jl. Kimasjong No. 1 Serang', '861/Kep.117-Huk/2018', 'Salmi, M.Pd', 'Tingkat Provinsi', '2018', '2023-02-18 08:41:31', '2023-02-18 08:41:31');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (32, 'SMPN 1 Serang', '-', '-', '-', 'Tingkat Provinsi', '2019', '2023-02-18 08:42:02', '2023-02-18 08:42:02');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (33, 'SDN Kelapa 2', '-', '-', '-', 'Tingkat Provinsi', '2017', '2023-02-18 08:42:25', '2023-02-18 08:42:25');
INSERT INTO `scatingkats` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `penghargaan`, `tahun`, `created_at`, `updated_at`) VALUES (34, 'SMAN 4 Kota Serang', 'Jl. Raya Banten Km. 5 Kasemen, Kota Serang, Provinsi Banten', '-', '-', 'Tingkat Provinsi', '2015', '2023-02-18 08:43:01', '2023-02-18 08:43:01');
COMMIT;

-- ----------------------------
-- Table structure for smphliars
-- ----------------------------
DROP TABLE IF EXISTS `smphliars`;
CREATE TABLE `smphliars` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ritasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapasitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlahrit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of smphliars
-- ----------------------------
BEGIN;
INSERT INTO `smphliars` (`id`, `lokasi`, `ritasi`, `kapasitas`, `jumlahrit`, `created_at`, `updated_at`) VALUES (1, 'Kagungan Pekarungan', '24', '6', '144', '2023-02-20 14:33:47', '2023-02-20 14:33:47');
INSERT INTO `smphliars` (`id`, `lokasi`, `ritasi`, `kapasitas`, `jumlahrit`, `created_at`, `updated_at`) VALUES (2, 'Cimuncang', '27', '6', '162', '2023-02-20 14:34:01', '2023-02-20 14:34:01');
INSERT INTO `smphliars` (`id`, `lokasi`, `ritasi`, `kapasitas`, `jumlahrit`, `created_at`, `updated_at`) VALUES (3, 'Stadion (Jumsih)', '10', '6', '60', '2023-02-20 14:34:16', '2023-02-20 14:34:16');
INSERT INTO `smphliars` (`id`, `lokasi`, `ritasi`, `kapasitas`, `jumlahrit`, `created_at`, `updated_at`) VALUES (4, 'Penancangan Cipocok (Jumsih)', '17', '6', '102', '2023-02-20 14:34:36', '2023-02-20 14:34:36');
INSERT INTO `smphliars` (`id`, `lokasi`, `ritasi`, `kapasitas`, `jumlahrit`, `created_at`, `updated_at`) VALUES (5, 'Banten', '15', '6', '90', '2023-02-20 14:35:08', '2023-02-20 14:35:08');
INSERT INTO `smphliars` (`id`, `lokasi`, `ritasi`, `kapasitas`, `jumlahrit`, `created_at`, `updated_at`) VALUES (6, 'Kp. Kenari Kasunyatan', '15', '6', '90', '2023-02-20 14:35:21', '2023-02-20 14:35:21');
INSERT INTO `smphliars` (`id`, `lokasi`, `ritasi`, `kapasitas`, `jumlahrit`, `created_at`, `updated_at`) VALUES (7, 'Kp. Sukadana', '12', '6', '72', '2023-02-20 14:35:36', '2023-02-20 14:35:36');
INSERT INTO `smphliars` (`id`, `lokasi`, `ritasi`, `kapasitas`, `jumlahrit`, `created_at`, `updated_at`) VALUES (8, 'Kp. Cibongkok Pancur', '2', '6', '12', '2023-02-20 14:36:00', '2023-02-20 14:36:00');
INSERT INTO `smphliars` (`id`, `lokasi`, `ritasi`, `kapasitas`, `jumlahrit`, `created_at`, `updated_at`) VALUES (9, 'Kp. Ciolang Taktakan', '4', '6', '24', '2023-02-20 14:36:13', '2023-02-20 14:36:13');
INSERT INTO `smphliars` (`id`, `lokasi`, `ritasi`, `kapasitas`, `jumlahrit`, `created_at`, `updated_at`) VALUES (10, 'Walantaka (SMP)', '16', '6', '96', '2023-02-20 14:36:29', '2023-02-20 14:36:29');
INSERT INTO `smphliars` (`id`, `lokasi`, `ritasi`, `kapasitas`, `jumlahrit`, `created_at`, `updated_at`) VALUES (11, 'Kaligandu (Jumsih)', '5', '6', '30', '2023-02-20 14:36:49', '2023-02-20 14:36:49');
INSERT INTO `smphliars` (`id`, `lokasi`, `ritasi`, `kapasitas`, `jumlahrit`, `created_at`, `updated_at`) VALUES (12, 'Panggung Jati (Jumsih)', '7', '6', '42', '2023-02-20 14:37:30', '2023-02-20 14:37:30');
INSERT INTO `smphliars` (`id`, `lokasi`, `ritasi`, `kapasitas`, `jumlahrit`, `created_at`, `updated_at`) VALUES (13, 'Kel. Cigoong Walantaka (Jumsih)', '5', '6', '30', '2023-02-20 14:37:50', '2023-02-20 14:37:50');
INSERT INTO `smphliars` (`id`, `lokasi`, `ritasi`, `kapasitas`, `jumlahrit`, `created_at`, `updated_at`) VALUES (14, 'Kel. Terumbu Kasemen (Jumsih)', '4', '6', '24', '2023-02-20 14:38:16', '2023-02-20 14:38:16');
COMMIT;

-- ----------------------------
-- Table structure for snas
-- ----------------------------
DROP TABLE IF EXISTS `snas`;
CREATE TABLE `snas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `namasekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepalasekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of snas
-- ----------------------------
BEGIN;
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (1, 'SDN Serang 1', 'Jl. Tb. Bakti No. 139 Kota Baru', '-', '-', '0', '2023-02-18 08:56:53', '2023-02-18 09:03:41');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (2, 'SDN Serang 4', 'Jl. Ustad Uzeir Yahya No. 6', '-', '-', '0', '2023-02-18 09:04:06', '2023-02-18 09:04:06');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (3, 'SDN Serang 5', 'Jl. Tb. Bakti No. 141 Kota Baru', '-', '-', '0', '2023-02-18 09:04:26', '2023-02-18 09:04:26');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (4, 'SDN Serang 6', 'Jl. Jiwantaka 1 No. 3 Serang', '-', '-', '0', '2023-02-18 09:06:25', '2023-02-18 09:06:25');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (5, 'SDN Serang 7', 'Jl. Kh. Jamhari No. 1 Serang', '-', '-', '0', '2023-02-18 09:06:54', '2023-02-18 09:06:54');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (6, 'SDN Serang 8', 'Jl. Ustad Uzeir Yahya No. 2', '-', '-', '0', '2023-02-18 09:07:16', '2023-02-18 09:07:16');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (7, 'SDN Serang 9', 'Jl. Kitapa 44 C Kel. Lopang', '-', '-', '0', '2023-02-18 09:07:50', '2023-02-18 09:07:50');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (8, 'SDN Serang 10', 'Jl. Jiwawntaka II Kagungan Serang', '-', '-', '0', '2023-02-18 09:08:12', '2023-02-18 09:08:12');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (9, 'SDN Serang 12', 'Jl. Lontar Baru Serang', '-', '-', '0', '2023-02-18 09:08:52', '2023-02-18 09:08:52');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (10, 'SDN Serang 13', 'Jl. Kh. abdul Latif No. 38 Serang', '-', '-', '0', '2023-02-18 09:09:27', '2023-02-18 09:09:27');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (11, 'SDN Serang 14', 'Jl. Juhdi No. 186 Serang', '-', '-', '0', '2023-02-18 09:09:54', '2023-02-18 09:09:54');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (12, 'SDN Serang 15', 'Jl. Banten No. 73 Serang', '-', '-', '0', '2023-02-18 09:10:20', '2023-02-18 09:10:20');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (13, 'SDN Serang 16', 'Jl. Ustad Uzeir Yahya', '-', '-', '0', '2023-02-18 09:10:44', '2023-02-18 09:12:20');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (14, 'SDN Serang 17', 'Jl. Ki Sahal Lopang', '-', '-', '0', '2023-02-18 09:11:09', '2023-02-18 09:13:37');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (15, 'SDN Serang 18', 'Jl. Tb. Bakti No. 140', '-', '-', '0', '2023-02-18 09:18:59', '2023-02-18 09:18:59');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (16, 'SDN Serang 19', 'Jl. Jiwantaka 1 Serang', '-', '-', '0', '2023-02-18 09:19:23', '2023-02-18 09:19:23');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (17, 'SDN Serang 20', 'Jl. Yumaga No. 6A', '-', '-', '0', '2023-02-18 09:19:49', '2023-02-18 09:19:49');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (18, 'SDN Serang 21', 'Jl. Bhayangkara no. 119', '-', '-', '0', '2023-02-18 09:21:26', '2023-02-18 09:21:26');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (19, 'SDN Panca Marga', 'Jl. Raya Ciwaru No. 119', '-', '-', '0', '2023-02-18 09:21:48', '2023-02-18 09:21:48');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (20, 'SDN Cimuncang', 'Jl. Garuda Cimuncang Serang', '-', '-', '0', '2023-02-18 09:22:09', '2023-02-18 09:22:09');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (21, 'SDN Rawu', 'Jl. Kh. Abdul Latif No. 31 Serang', '-', '-', '0', '2023-02-18 09:22:37', '2023-02-18 09:22:37');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (22, 'SDN Sumber Agung', 'Jl. Bhayangkara No. 48 Kel. S. Pecung', '-', '-', '0', '2023-02-18 09:23:12', '2023-02-18 09:23:12');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (23, 'SDN Lontar Baru', 'Jl. Lontar Baru No. 31', '-', '-', '0', '2023-02-18 09:23:36', '2023-02-18 09:23:36');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (24, 'SDN Kemang', 'Jl. Jiwantaka II Kagungan Serang', '-', '-', '0', '2023-02-18 09:24:15', '2023-02-18 09:24:15');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (25, 'SDN Lopang Domba', 'Jl. Samau Bakri', '-', '-', '0', '2023-02-18 09:24:38', '2023-02-18 09:24:38');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (26, 'SDN Kebon Jahe', 'Jl. Kh. Abdul Hadi Serang', '-', '-', '0', '2023-02-18 09:25:15', '2023-02-18 09:25:15');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (27, 'SDN Batok Bali', 'Jl. Ciracas Lama No. 42 Serang', '-', '-', '0', '2023-02-18 09:25:38', '2023-02-18 09:25:38');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (28, 'SDN Kaligandu', 'Jl. Trip Jamaksari', '-', '-', '0', '2023-02-18 09:30:30', '2023-02-18 09:30:30');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (29, 'SDN Kebanyakan', 'Kp. Kebanyakan Kel. Sukawana', '-', '-', '0', '2023-02-18 09:31:04', '2023-02-18 09:31:04');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (30, 'SDN Cimuncang Cilik', 'Jl. Garudda No. 37 Cimuncang Serang', '-', '-', '0', '2023-02-18 09:31:25', '2023-02-18 09:31:25');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (31, 'SDN Sempu 1', 'Jl. Raya Pandeglang', '-', '-', '0', '2023-02-18 09:31:43', '2023-02-18 09:31:43');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (32, 'SDN Sempu 1', 'Jl. Raya Pandeglang', '-', '-', '0', '2023-02-18 09:32:13', '2023-02-18 09:32:13');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (33, 'SDN Kubang Apu', 'Jl. Kubang Apu', '-', '-', '0', '2023-02-18 09:32:32', '2023-02-18 09:32:32');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (34, 'SDN Cilampang', 'Komp. Banten Lestari', '-', '-', '0', '2023-02-18 09:33:00', '2023-02-18 09:33:00');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (35, 'SDN Cikulur', 'Jl. Lingkar Selatan', '-', '-', '0', '2023-02-18 09:33:28', '2023-02-18 09:33:28');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (36, 'SDN Sukalila', 'Jl. Kelapa Dua Ling. Sukalila', '-', '-', '0', '2023-02-18 09:33:58', '2023-02-18 09:33:58');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (37, 'SDN Lopang Cilik', 'Jl. Ki Sahal Lopang Cilik Serang', '-', '-', '0', '2023-02-18 09:38:57', '2023-02-18 09:38:57');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (38, 'SDN Neglasari', 'Jl. Km. iddris No. 10 RT/RW 02/13', '-', '-', '0', '2023-02-20 10:40:38', '2023-02-20 10:40:38');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (39, 'SDN Kebaharan 1', 'Jl. Ayip Usman', '-', '-', '0', '2023-02-20 10:41:03', '2023-02-20 10:41:03');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (40, 'SDN Buah Gede', 'Kaujon Kidul Serang', '-', '-', '0', '2023-02-20 10:41:27', '2023-02-20 10:41:27');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (41, 'SDN Kampung Baru', 'Jl. Jiwantaka I Lingkungan Baru', '-', '-', '0', '2023-02-20 10:41:49', '2023-02-20 10:41:49');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (42, 'SDN Ciwaktu', 'Jl. Ahmad Yani No. 159 Serang', '-', '-', '0', '2023-02-20 10:42:19', '2023-02-20 10:42:19');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (43, 'SDN Kaloran', 'Jl. Rm. Jayadiningrat Serang', '-', '-', '0', '2023-02-20 10:42:36', '2023-02-20 10:42:36');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (44, 'SDN Cipare Tegal', 'Cipare Ranjeng Jaya Kel. Cipare', '-', '-', '0', '2023-02-20 10:43:04', '2023-02-20 10:43:04');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (45, 'SDN Pamindangan', 'Jl. Banten No. 212 Serang', '-', '-', '0', '2023-02-20 10:43:44', '2023-02-20 10:43:44');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (46, 'SDN Kota Baru', 'Jl. Ki Sahal Lopang Serang', '-', '-', '0', '2023-02-20 10:44:05', '2023-02-20 10:44:05');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (47, 'SDN Kaliwadas', 'Jl. Samaun Bakri Kaliwadas Serang', '-', '-', '0', '2023-02-20 10:44:32', '2023-02-20 10:44:32');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (48, 'SDN Terondol', 'Kp. Kesawon Kel. Trondol', '-', '-', '0', '2023-02-20 10:44:52', '2023-02-20 10:44:52');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (49, 'SDN Pabuaran Unyur', 'Jl. Raya Banten Lingk. Unyur Serang', '-', '-', '0', '2023-02-20 10:45:26', '2023-02-20 10:45:26');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (50, 'SDN Sayabulu', 'Jl. Adikara Sayabulu Serang', '-', '-', '0', '2023-02-20 10:45:52', '2023-02-20 10:45:52');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (51, 'SDN Secang', 'Jl. Cikepuh Kp. Widara', '-', '-', '0', '2023-02-20 10:46:13', '2023-02-20 10:46:13');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (52, 'SDN Kubang Kemiri', 'Jl. Sukawana Serang', '-', '-', '0', '2023-02-20 10:46:57', '2023-02-20 10:51:56');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (53, 'SDN Sempu 2', 'Jl. Ki Ajurum Sempu', '-', '-', '0', '2023-02-20 10:47:29', '2023-02-20 10:47:29');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (54, 'SDN Sepang', 'Jl. Raya Serang', '-', '-', '0', '2023-02-20 10:47:51', '2023-02-20 10:47:51');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (55, 'SDN Kaloran Kidul', 'Jl. Kh. Jamhari', '-', '-', '0', '2023-02-20 10:48:10', '2023-02-20 10:48:10');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (56, 'SDN Kelanggaran Unyur', 'Jl. Raya Banten', '-', '-', '0', '2023-02-20 10:48:27', '2023-02-20 10:48:27');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (57, 'SDN Gempol', 'Kp. Gempol Kel. Unyur', '-', '-', '0', '2023-02-20 10:48:57', '2023-02-20 10:48:57');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (58, 'SDN Seroja', 'Jl. Raya Pandeglang', '-', '-', '0', '2023-02-20 10:49:16', '2023-02-20 10:49:16');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (59, 'SDN Ciceri Indah', 'Jl. Kh. Sokhari Kel. Sumur Pecung', '-', '-', '0', '2023-02-20 10:52:15', '2023-02-20 10:52:15');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (60, 'SDN Ciputat', 'Jl. Warung Jaud Kel. Kaligandu', '-', '-', '0', '2023-02-20 10:52:39', '2023-02-20 10:52:39');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (61, 'SDN Cipare', 'Cijawa Gede', '-', '-', '0', '2023-02-20 10:52:56', '2023-02-20 10:52:56');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (62, 'SDN Sumur Sana', 'Jl. Warung Jaud Kel. Kaligandu', '-', '-', '0', '2023-02-20 10:53:29', '2023-02-20 10:53:29');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (63, 'SDN Kebaharan 2', 'Jl. Samaun Bakri Lopang Gede', '-', '-', '0', '2023-02-20 10:53:51', '2023-02-20 10:53:51');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (64, 'SDN Kubang', 'Jl. Km. Idris Serang', '-', '-', '0', '2023-02-20 10:54:22', '2023-02-20 10:54:22');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (65, 'SDN Cijawa', 'Jl. Ciwaru Raya No. 1 Kel. Cipare', '-', '-', '0', '2023-02-20 10:54:54', '2023-02-20 10:54:54');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (66, 'SDS Muhammadiyah', 'Jl. Jayadiningrat No. 13 Serang', '-', '-', '0', '2023-02-20 10:55:21', '2023-02-20 10:55:21');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (67, 'SDS Persis', 'Jl. Raya Banten Kebaharan Serang', '-', '-', '0', '2023-02-20 10:55:39', '2023-02-20 10:55:39');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (68, 'SD Islam Al-Azhar 10', 'Jl. Kh. Ma\'Mun No. 17 Kaujon Serang', '-', '-', '0', '2023-02-20 10:56:07', '2023-02-20 10:56:07');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (69, 'SDS Al-Munawaroh', 'Jl. Lingkar Selatan Widya Asri Blok A1', '-', '-', '0', '2023-02-20 10:56:28', '2023-02-20 10:56:28');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (70, 'SDS Peradaban', 'Jl. Raya Sepang Ciracas Kel. Serang', '-', '-', '0', '2023-02-20 10:56:54', '2023-02-20 10:56:54');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (71, 'SDIT Widya Cendekia', 'Jl. Lingkar Selatan Widya Asri Blok A1', '-', '-', '0', '2023-02-20 10:57:29', '2023-02-20 10:57:29');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (72, 'SDS Mardiyuana', 'Jl. Kh. Samaun No. 1 Serang', '-', '-', '0', '2023-02-20 10:57:49', '2023-02-20 10:57:49');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (73, 'SDS BPK Penabur', 'Jl. Diponegoro No. 4 Serang', '-', '-', '0', '2023-02-20 10:58:11', '2023-02-20 10:58:11');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (74, 'SDS EvFia LAND', 'Jl. Yusuf Martadilaga No. 50 Serang', '-', '-', '0', '2023-02-20 10:58:35', '2023-02-20 10:58:35');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (75, 'SD Iqra', 'Taman Graha Asri', '-', '-', '0', '2023-02-20 10:58:51', '2023-02-20 10:58:51');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (76, 'SD Khalifah 2', 'Hm. M. Muslich Lingkar Selatan', '-', '-', '0', '2023-02-20 10:59:13', '2023-02-20 10:59:13');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (77, 'SDN Walantaka 1', 'Kp. Walantaka', '-', '-', '0', '2023-02-20 11:16:43', '2023-02-20 11:16:43');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (78, 'SDN Walantaka 2', 'Kp. Bangkalok Ds. Pasuluhan', '-', '-', '0', '2023-02-20 11:17:03', '2023-02-20 11:17:03');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (79, 'SDN Walantaka 3', 'Kp. Winong Ds. Walantaka', '-', '-', '0', '2023-02-20 11:17:43', '2023-02-20 11:17:43');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (80, 'SDN Nyapah 1', 'Jl. Ciruas-Petir Km. 5 Kp. Cimareng', '-', '-', '0', '2023-02-20 11:18:25', '2023-02-20 11:18:25');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (81, 'SDN Nyapah 2', 'Kp. Nyapah Kantor', '-', '-', '0', '2023-02-20 11:19:38', '2023-02-20 11:19:38');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (82, 'SDN Cigoong 1', 'Jl. Stasiun KA Turus Ds. Tegalsari', '-', '-', '0', '2023-02-20 11:22:32', '2023-02-20 11:22:32');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (83, 'SDN Cigoong 2', 'Jl. Cilingsir Kel. Tegalsari', '-', '-', '0', '2023-02-20 11:30:26', '2023-02-20 11:30:26');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (84, 'SDN Cigoong 3', 'Kp. Pengasinan', '-', '-', '0', '2023-02-20 11:30:44', '2023-02-20 11:30:44');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (85, 'SDN Simangu', 'Kp. Simangu Ds. Pager Agung', '-', '-', '0', '2023-02-20 11:31:06', '2023-02-20 11:31:06');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (86, 'SDN Jami', 'Ds. Kalodran', '-', '-', '0', '2023-02-20 11:31:23', '2023-02-20 11:31:23');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (87, 'SDN Kewunen', 'Kp. Kewunen Ds. Teritih', '-', '-', '0', '2023-02-20 11:31:58', '2023-02-20 11:31:58');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (88, 'SDN Kepuren 1', 'Kp. Kepuren Ds. Kepuren', '-', '-', '0', '2023-02-20 11:32:20', '2023-02-20 11:33:07');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (89, 'SDN Kepuren 2', 'Kp. Andiwung Ds. Kepuren', '-', '-', '0', '2023-02-20 11:32:51', '2023-02-20 11:32:51');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (90, 'SDN Jengkol', 'Kp. Jengkol Ds. Teritih', '-', '-', '0', '2023-02-20 11:33:35', '2023-02-20 11:33:35');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (91, 'SDN Citerep', 'Kp. Citerep Ds. Kiara', '-', '-', '0', '2023-02-20 11:34:09', '2023-02-20 11:34:09');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (92, 'SDN Ampel', 'Kp. Ampel Ds. Pengampelan', '-', '-', '0', '2023-02-20 11:37:41', '2023-02-20 11:37:41');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (93, 'SDN Pengampelan', 'Kp. Ampel Ds. Pengampelan', '-', '-', '0', '2023-02-20 11:38:05', '2023-02-20 11:38:05');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (94, 'SDN Pabuaran', 'Kp. Kemanggisan', '-', '-', '0', '2023-02-20 11:38:19', '2023-02-20 11:38:19');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (95, 'SDN Pasuluhan', 'Jl. Nangka Bugang Ds. Pasuluhan', '-', '-', '0', '2023-02-20 11:38:49', '2023-02-20 11:38:49');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (96, 'SDN Tegal Kembang', 'Jl. Ciruas-Petir Km. 3 Kp. Tegal Kembang', '-', '-', '0', '2023-02-20 11:40:20', '2023-02-20 11:40:20');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (97, 'SDN Kiara', 'Kp. Kiara Ds. Kiara', '-', '-', '0', '2023-02-20 11:40:59', '2023-02-20 11:40:59');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (98, 'SDN Jaha', 'Kp. Jaha', '-', '-', '0', '2023-02-20 11:41:25', '2023-02-20 11:41:25');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (99, 'SDN Sindang Raksa', 'Kp. Kubang Semar Ds. Teritih', '-', '-', '0', '2023-02-20 11:41:45', '2023-02-20 11:41:45');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (100, 'SDN Pipitan', 'Ds. Pipitan', '-', '-', '0', '2023-02-20 11:42:01', '2023-02-20 11:42:01');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (101, 'SDN Cibonteng', 'Jl. Kimara Ds. Lebak Wangi', '-', '-', '0', '2023-02-20 11:42:22', '2023-02-20 11:42:22');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (102, 'SDN Cibadak', 'Kp. Cibadak', '-', '-', '0', '2023-02-20 11:42:43', '2023-02-20 11:42:43');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (103, 'SDN Insan Cendekia', 'Komp. Persada Banten', '-', '-', '0', '2023-02-20 11:43:07', '2023-02-20 11:43:07');
INSERT INTO `snas` (`id`, `namasekolah`, `alamat`, `sk`, `kepalasekolah`, `tahun`, `created_at`, `updated_at`) VALUES (104, 'SDN Cahaya La Royba', 'Jl. Raya Jakarta Km. 6.5 Ds. Kalodran', '-', '-', '0', '2023-02-20 11:43:39', '2023-02-20 11:43:39');
COMMIT;

-- ----------------------------
-- Table structure for timbulans
-- ----------------------------
DROP TABLE IF EXISTS `timbulans`;
CREATE TABLE `timbulans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `namajalur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlahtitik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ratavolume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of timbulans
-- ----------------------------
BEGIN;
INSERT INTO `timbulans` (`id`, `namajalur`, `jumlahtitik`, `ratavolume`, `jumlah`, `created_at`, `updated_at`) VALUES (1, 'KP3B s.d Lampu Merah Parung', '10', '3', '30', '2023-02-20 11:47:25', '2023-02-20 11:47:25');
INSERT INTO `timbulans` (`id`, `namajalur`, `jumlahtitik`, `ratavolume`, `jumlah`, `created_at`, `updated_at`) VALUES (2, 'Lampu Merah Parung s.d Kalodran', '5', '3', '15', '2023-02-20 11:47:58', '2023-02-20 11:47:58');
INSERT INTO `timbulans` (`id`, `namajalur`, `jumlahtitik`, `ratavolume`, `jumlah`, `created_at`, `updated_at`) VALUES (3, 'Patung-Moss s.d Tol Lama Kaligandu', '3', '3', '9', '2023-02-20 14:28:09', '2023-02-20 14:28:09');
INSERT INTO `timbulans` (`id`, `namajalur`, `jumlahtitik`, `ratavolume`, `jumlah`, `created_at`, `updated_at`) VALUES (4, 'Kaligandu s.d Warung Jaud', '10', '3', '30', '2023-02-20 14:28:39', '2023-02-20 14:28:39');
INSERT INTO `timbulans` (`id`, `namajalur`, `jumlahtitik`, `ratavolume`, `jumlah`, `created_at`, `updated_at`) VALUES (5, 'Lopang s.d Jl. Banten Karangantu', '15', '3', '45', '2023-02-20 14:29:16', '2023-02-20 14:29:16');
INSERT INTO `timbulans` (`id`, `namajalur`, `jumlahtitik`, `ratavolume`, `jumlah`, `created_at`, `updated_at`) VALUES (6, 'Lampu Merah Pandean s.d Taman', '4', '2', '8', '2023-02-20 14:29:38', '2023-02-20 14:29:38');
INSERT INTO `timbulans` (`id`, `namajalur`, `jumlahtitik`, `ratavolume`, `jumlah`, `created_at`, `updated_at`) VALUES (7, 'Lampu Merah Sempu s.d Lampu Merah Cipocok Jalan Polda', '3', '2', '6', '2023-02-20 14:30:05', '2023-02-20 14:30:05');
INSERT INTO `timbulans` (`id`, `namajalur`, `jumlahtitik`, `ratavolume`, `jumlah`, `created_at`, `updated_at`) VALUES (8, 'Jl. Jayadiningrat-Kaujon Singandaru', '2', '2', '4', '2023-02-20 14:30:29', '2023-02-20 14:30:29');
INSERT INTO `timbulans` (`id`, `namajalur`, `jumlahtitik`, `ratavolume`, `jumlah`, `created_at`, `updated_at`) VALUES (9, 'Jl. Taktakan s.d Cilowong', '5', '2', '10', '2023-02-20 14:30:47', '2023-02-20 14:30:47');
INSERT INTO `timbulans` (`id`, `namajalur`, `jumlahtitik`, `ratavolume`, `jumlah`, `created_at`, `updated_at`) VALUES (10, 'Kebaharan s.d Armada Kaligandu', '5', '3', '15', '2023-02-20 14:31:04', '2023-02-20 14:31:04');
INSERT INTO `timbulans` (`id`, `namajalur`, `jumlahtitik`, `ratavolume`, `jumlah`, `created_at`, `updated_at`) VALUES (11, 'Jl. Kesawon', '3', '3', '9', '2023-02-20 14:31:21', '2023-02-20 14:31:21');
INSERT INTO `timbulans` (`id`, `namajalur`, `jumlahtitik`, `ratavolume`, `jumlah`, `created_at`, `updated_at`) VALUES (12, 'Jl. 45 Muntil s.d Pancur', '3', '3', '9', '2023-02-20 14:31:34', '2023-02-20 14:31:34');
INSERT INTO `timbulans` (`id`, `namajalur`, `jumlahtitik`, `ratavolume`, `jumlah`, `created_at`, `updated_at`) VALUES (13, 'Lampu Merah Cipocok s.d Curug', '3', '3', '9', '2023-02-20 14:31:55', '2023-02-20 14:31:55');
INSERT INTO `timbulans` (`id`, `namajalur`, `jumlahtitik`, `ratavolume`, `jumlah`, `created_at`, `updated_at`) VALUES (14, 'Penancangan-Dishub-Kp.Dangder', '3', '3', '9', '2023-02-20 14:32:43', '2023-02-20 14:32:43');
INSERT INTO `timbulans` (`id`, `namajalur`, `jumlahtitik`, `ratavolume`, `jumlah`, `created_at`, `updated_at`) VALUES (15, 'Jalan Walantaka', '4', '3', '12', '2023-02-20 14:32:54', '2023-02-20 14:32:54');
COMMIT;

-- ----------------------------
-- Table structure for tps
-- ----------------------------
DROP TABLE IF EXISTS `tps`;
CREATE TABLE `tps` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namapengurus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kendala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tps
-- ----------------------------
BEGIN;
INSERT INTO `tps` (`id`, `nama`, `namapengurus`, `alamat`, `status`, `alat`, `kendala`, `keterangan`, `foto`, `created_at`, `updated_at`) VALUES (1, 'Dewa Ruci', 'Dedy (Ketua), Neneng (Sekretaris), Nurleli (Bendahara)', 'Kec. Walantaka', 'TPS 3R Aktif, Tanah Aset Pemkot', 'Mesin Pencacah, Mesin Pengayak, Cator 2 Unit', '2017', '-', '2023-2-21_5-51-36_dewaruci.jpg', '2023-02-21 05:51:36', '2023-02-21 05:51:36');
INSERT INTO `tps` (`id`, `nama`, `namapengurus`, `alamat`, `status`, `alat`, `kendala`, `keterangan`, `foto`, `created_at`, `updated_at`) VALUES (2, 'Sumber Rejeki Tegal Sari', '-', 'Kecamatan Walantaka', 'Tidak Aktif, Tanah Milik Sendiri', 'Mesin Pencacah, Mesin Pengayak, Motor Cator 1', '2014', 'Alasan tidak aktif karena tidak ada pembinaan sama sekali sejak serah terima bangunan dan peralatan yang diberikan', '2023-2-21_5-53-14_sumberrejeki.jpg', '2023-02-21 05:53:14', '2023-02-21 05:53:14');
INSERT INTO `tps` (`id`, `nama`, `namapengurus`, `alamat`, `status`, `alat`, `kendala`, `keterangan`, `foto`, `created_at`, `updated_at`) VALUES (3, 'Citra Gading (Komp. Citra Gading)', 'Pengurus belum bisa ditemui', 'Kec. Cipocok', 'Tidak Aktif', 'Alat tidak ada di tempat', '-', 'TPS3R di jadikan tempat penampungan sampah tanpa adanya pengolahan', '2023-2-21_5-54-50_citragading.jpg', '2023-02-21 05:54:50', '2023-02-21 05:54:50');
INSERT INTO `tps` (`id`, `nama`, `namapengurus`, `alamat`, `status`, `alat`, `kendala`, `keterangan`, `foto`, `created_at`, `updated_at`) VALUES (4, 'Mandiri Dwikarya Priyayi Masjid', '-', 'Kec. Kasemen', 'Tidak Aktif', 'Mesin Pencacah, Mesin Pengayak', '2017', 'Sempat berjalan beberapa bulan tapi terkendala dengan modal dan adanya pro kontra dari masyarakat karena tidak ada sosialisasi dan pembinaan', '2023-2-21_5-56-34_mandiridwikari.jpg', '2023-02-21 05:56:34', '2023-02-21 05:56:34');
INSERT INTO `tps` (`id`, `nama`, `namapengurus`, `alamat`, `status`, `alat`, `kendala`, `keterangan`, `foto`, `created_at`, `updated_at`) VALUES (5, 'Samboja Kilasah', '-', 'Kec. Kasemen', 'Tidak Aktif', 'Mesin Pencacah, Mesin Kompos, Cator 3 Unit', '2015', 'Tidak aktif karena terkenddala modal dan akses jalan menuju lokasi sangat sempit', '2023-2-21_5-58-43_sambojakilasih.jpg', '2023-02-21 05:58:43', '2023-02-21 05:58:43');
INSERT INTO `tps` (`id`, `nama`, `namapengurus`, `alamat`, `status`, `alat`, `kendala`, `keterangan`, `foto`, `created_at`, `updated_at`) VALUES (6, 'Mekar Bersama Kasemen', '-', 'Kec. Kasemen', 'Tidak Aktif', 'Mesin Pencacah, Mesin Pengayak/Kompos', '2014', 'Pengurus belum bisa ditemui, di gedung tidak terurus dan terbengkalai', '2023-2-21_6-0-1_mekarbersama.jpg', '2023-02-21 06:00:01', '2023-02-21 06:00:01');
INSERT INTO `tps` (`id`, `nama`, `namapengurus`, `alamat`, `status`, `alat`, `kendala`, `keterangan`, `foto`, `created_at`, `updated_at`) VALUES (7, 'Karya Mandiri Trondol', '-', 'Kec. Serang', 'Tidak Aktif', 'Mesin Pencacah, Mesin Pengayak, Torn Air', '2014', 'Gedung tidak terurus dan terbengkalai', '2023-2-21_6-0-55_karyamandiri.jpg', '2023-02-21 06:00:55', '2023-02-21 06:00:55');
INSERT INTO `tps` (`id`, `nama`, `namapengurus`, `alamat`, `status`, `alat`, `kendala`, `keterangan`, `foto`, `created_at`, `updated_at`) VALUES (8, 'Surya Mandiri Kasunyatan', 'Didik Sumarna (Pengurus), Warah (Sekretaris), Pendi (Bendahara), Anggota (10 Orang)', 'Kec. Kasemen', 'Tidak Akti / Tanah (Hibah)', 'Mesin Pencacah, Mesin Kompos, Cator 3 Unit', '2017', 'Tidak beroperasi karena terkendala dengan modal, tidak ada pembinaan dan pelatihan', '2023-2-21_6-2-44_suryamandiri.jpg', '2023-02-21 06:02:44', '2023-02-21 06:02:44');
INSERT INTO `tps` (`id`, `nama`, `namapengurus`, `alamat`, `status`, `alat`, `kendala`, `keterangan`, `foto`, `created_at`, `updated_at`) VALUES (9, 'Sumber Makmur', 'Hikmat (Ketua), Mahmud (Sekretaris), Heriyati (Bendahara)', 'Buah Laler Taktakan', 'Tidak Aktif / Tanah (Hibah)', 'Mesin Pengayak, Cator 3 Unit, Mesin Pencacah', '2015', 'Tidak beroperasi karena terkendala modal, tidak ada bimbingan berkelanjutan, dan tidak ada pelatihan', '2023-2-21_6-4-9_sumbermakmur.jpg', '2023-02-21 06:04:09', '2023-02-21 06:04:09');
INSERT INTO `tps` (`id`, `nama`, `namapengurus`, `alamat`, `status`, `alat`, `kendala`, `keterangan`, `foto`, `created_at`, `updated_at`) VALUES (10, 'Pancur', 'Ridho (Ketua)', 'Pancur Taktakan', 'Tidak Aktif', 'Mesin Pengayak, Cator 3 Unit, Mesin Pencacah', '2015', 'Tidak beroperasi karena terkenddala modal, tidak ada bimbingan berkelanjutan, dan tidak adanya pelatihan', '2023-2-21_6-5-30_pancur.jpg', '2023-02-21 06:05:30', '2023-02-21 06:05:30');
INSERT INTO `tps` (`id`, `nama`, `namapengurus`, `alamat`, `status`, `alat`, `kendala`, `keterangan`, `foto`, `created_at`, `updated_at`) VALUES (11, 'Sehati', 'Maman (Ketua)', 'Serang', 'Tidak Aktif, Tanah Pemda', 'Mesin Pengayak, Cator 3 Unit, Mesin Pencacah', '2010', 'Tidak beroperasi karena terkendala modal, tidak ada bimbingan berkelanjutan dan tidak adanya pelatihan', '2023-2-21_6-6-43_sehati.jpg', '2023-02-21 06:06:43', '2023-02-21 06:06:43');
INSERT INTO `tps` (`id`, `nama`, `namapengurus`, `alamat`, `status`, `alat`, `kendala`, `keterangan`, `foto`, `created_at`, `updated_at`) VALUES (12, 'Sukajaya Abadi', 'Imanudin (Ketua)', 'Lowong Curug', 'Tidak Aktif, Tanah Pemda', 'Mesin Pengayak, Cator 3 Unit, Mesin Pencacah', '2015', 'Tidak beroperasi karena terkendala modal, tidak ada bimbingan berkelanjutan, dan tidak adanya pelatihan', '2023-2-21_6-8-10_sukajayabadi.jpg', '2023-02-21 06:08:10', '2023-02-21 06:08:10');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `name`, `email`, `level`, `email_verified_at`, `nohp`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (1, 'awaludin ramdani', 'awal.eilmo@gmail.com', 'admin', '2023-02-16 16:28:50', '085157712096', '$2y$10$UIXdwgx4UM8vC1Usvh4xqeQgmEJdlpkCxHp0TgOy.tON7V6fUEMZi', NULL, '2023-02-16 16:28:50', '2023-02-16 16:28:50');
COMMIT;

-- ----------------------------
-- Table structure for videos
-- ----------------------------
DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of videos
-- ----------------------------
BEGIN;
INSERT INTO `videos` (`id`, `judul`, `link`, `created_at`, `updated_at`) VALUES (1, 'Mesin Bakar Pengolahan Sampah Residu', '45F5Yu0S4es', '2023-02-18 07:12:48', '2023-02-18 07:13:19');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
