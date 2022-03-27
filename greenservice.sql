-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 27, 2022 lúc 02:21 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `greenservice`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_30_105849_tbl_admin', 1),
(5, '2020_12_03_143056_tbl_category_news', 2),
(6, '2020_12_03_160823_tbl_category_service', 3),
(7, '2020_12_04_123753_tbl_post_service', 4),
(8, '2020_12_06_111932_tbl_post_news', 5),
(9, '2020_12_06_135752_tbl_post_criteria', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_position` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_phone`, `admin_email`, `admin_password`, `admin_position`) VALUES
(12, 'Trần Thị Mỹ Lệ', '09170054 93', 'admin@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Giám đốc công ty Khánh Huy'),
(14, 'Trần Quốc Nguyên', '0819682325', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Quản lý Admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_company_profile`
--

CREATE TABLE `tbl_company_profile` (
  `company_profile_id` int(11) NOT NULL,
  `company_profile_manager` varchar(255) NOT NULL,
  `company_profile_email` varchar(225) NOT NULL,
  `company_profile_phone` varchar(225) NOT NULL,
  `company_profile_position` varchar(225) NOT NULL,
  `company_profile_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_company_profile`
--

INSERT INTO `tbl_company_profile` (`company_profile_id`, `company_profile_manager`, `company_profile_email`, `company_profile_phone`, `company_profile_position`, `company_profile_desc`) VALUES
(1, ' Huỳnh Thị Mỹ Lệ', 'khanhhuycompany@gmail.com', '0917005493 - 0912090313', 'Giám đốc công ty', 'Công ty TNHH Dịch vụ vệ sinh và Chăm sóc Khánh Huy là một công ty chuyên ngành về dịch vụ vệ sinh công nghiệp; trồng và duy trì cảnh quang,..Được thành lập theo giấy phép số 4001168316 của Sở Kế hoạch và Đầu tư Quảng Nam, trong các lĩnh vực vệ sinh công nghiệp; Dịch vụ chăm sóc và duy trì cảnh quang, tư vấn trong lĩnh vực môi trường,...\nCông ty TNHH Dịch vụ vệ sinh và Chăm sóc Khánh Huy là tập hợp một đội ngủ có kinh , với hơn 50 nhân viên có kinh nghiệm nhiều năm, có năng lực và luôn làm việc tận tâm, có trách nhiệm, công ty chúng tôi đã và đang đáp ứng nhu cầu đa dạng của Khách hàng với chất lượng và chi phí hợp lý nhất.\n\nThành lập:\nTheo giấy chứng nhận đăng ký kinh doanh và đăng ký thuế số 4001168316 do phòng đăng ký kinh doanh - Sở Kế hoạch và Đầu tư tỉnh Quảng Nam cấp vào ngày 03 tháng 01 năm 2019.  Thông tin giao dịch:\n+ Tài khoản số:  7747057 tại ngân hàng ACB  chi nhánh Quảng Nam\n+ Tên tài khoản: Công ty TNHH Dịch vụ vệ sinh và Chăm sóc Khánh Huy\n\nTrụ sở chính:\n- Tổ 3, Khối phố Mỹ Thạch Bắc, phường Tân Thạnh, thành phố Tam Kỳ, tỉnh Quảng Nam.\n\nĐiện thoại: 0917 00 54 93 - 0912 090 313.\n\nMã số thuế: 4001168316');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_manage_slider`
--

CREATE TABLE `tbl_manage_slider` (
  `slider_id` int(10) UNSIGNED NOT NULL,
  `slider_name` text NOT NULL,
  `slider_img` varchar(255) NOT NULL,
  `slider_status` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_manage_slider`
--

INSERT INTO `tbl_manage_slider` (`slider_id`, `slider_name`, `slider_img`, `slider_status`) VALUES
(13, 'Chúng tôi sử dụng các sản phẩm chất lượng cao nhất được ứng dụng dựa trên nhu cầu cụ thể của bãi cỏ, cây cối và tình trạng đất của bạn', '240_F_142162259_ghAI3Tnn5bXGNb6ca6pM1vk4oB6wjLHF(69).jpg', 1),
(18, 'Các dịch vụ xanh của Khánh Huy hỗ trợ các Doanh nghiệp và Tổ chức trong việc thực hiện các hành động, từ lập kế hoạch đến thực hiện, áp dụng các giải pháp và thực hành tôn trọng môi trường và mang lại lợi ích kinh tế đáng kể.', '240_F_252991152_dlrwVmW0CKrxvt6zlCkQSLNKJHlODaJg(99).jpg', 1),
(19, 'DNA của chúng tôi là tiếp cận gần hơn với các bạn. Chúng tôi là một công ty chuyên cung cấp các sản phẩm và dịch vụ vệ sinh công nghiệp, với đội ngũ nhân viên có trình độ chuyên môn cao, thông qua tư vấn toàn diện, cho phép khách hàng của chúng tôi có được sự hài lòng nhất', '240_F_326799418_wcAyVWfJ44skwUHe2B6YgfNx6thZZwsL(43).jpg', 1),
(20, 'Thêm mô tả cho slider này', '240_F_139961347_G0D905S79DruUqG7xmwd73dUblz16j6C(99).jpg', 0),
(21, 'Thêm mô tả cho slider này', '240_F_327495001_CRghwWn4JYhOp34HWgs8B7O4jLCACBmF(46).jpg', 0),
(22, 'Thêm mô tả cho slider này', '240_F_340298830_J3bIrdYo4CEGF24HeBkhj7b1LuRrywI8(63).jpg', 0),
(23, 'Thêm mô tả cho slider này', '240_F_344253502_TujOhg0Gn9MOxcML2x2UfAPvzigtMHJf(33).jpg', 0),
(24, 'Thêm mô tả cho slider này', '240_F_355827816_9v1oNAEJkEgHgIv4Ng3XkoHNYfOyOaSN(39).jpg', 0),
(25, 'Thêm mô tả cho slider này', '240_F_357082941_1uSVOM6yK5B7MrQx61jCGalEoiZwzDNr(32).jpg', 0),
(26, 'Thêm mô tả cho slider này', '240_F_359572231_Vg2biENgMokp1RzsVuetXFT5NupHHk6c(9).jpg', 0),
(27, 'Thêm mô tả cho slider này', '240_F_361814921_vxDb6hLc1sJVRqK90PJYQqv953v03lHo(45).jpg', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_post_about_us`
--

CREATE TABLE `tbl_post_about_us` (
  `post_about_us_id` int(10) UNSIGNED NOT NULL,
  `post_about_us_content` text NOT NULL,
  `post_about_us_img` varchar(255) NOT NULL,
  `post_about_us_status` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_post_about_us`
--

INSERT INTO `tbl_post_about_us` (`post_about_us_id`, `post_about_us_content`, `post_about_us_img`, `post_about_us_status`) VALUES
(1, '<p style=\"text-align:justify\">C&ocirc;ng ty TNHH Dịch vụ vệ sinh &amp; Chăm s&oacute;c c&acirc;y xanh Kh&aacute;nh Huy chuy&ecirc;n cung cấp c&aacute;c dịch vụ vệ sinh c&ocirc;ng nghiệp v&agrave; dịch vụ vệ sinh l&agrave;m sạch cho c&aacute;c c&ocirc;ng tr&igrave;nh sau x&acirc;y dựng; c&aacute;c t&ograve;a nh&agrave;; c&aacute;c kh&aacute;ch sạn; c&aacute;c bệnh viện v&agrave; c&aacute;c khu c&ocirc;ng nghiệp v&agrave; khu c&ocirc;ng cộng.....</p>\r\n\r\n<p style=\"text-align:justify\">C&ocirc;ng ty TNHH Dịch vụ vệ sinh v&agrave; Chăm s&oacute;c Kh&aacute;nh Huy tự h&agrave;o l&agrave; c&ocirc;ng ty cung cấp dịch vụ vệ sinh c&ocirc;ng nghiệp, l&agrave;m sạch tuyến đường uy t&iacute;n tại khu vực. Với hơn 50 nh&acirc;n vi&ecirc;n c&oacute; kinh nghiệm nhiều năm, c&oacute; năng lực về chuy&ecirc;n m&ocirc;n v&agrave; lu&ocirc;n l&agrave;m việc tận t&acirc;m, c&oacute; tr&aacute;ch nhiệm, c&ocirc;ng ty ch&uacute;ng t&ocirc;i đ&atilde; v&agrave; đang đ&aacute;p ứng nhu cầu đa dạng của Kh&aacute;ch h&agrave;ng với chất lượng ng&agrave;y c&agrave;ng cao.</p>\r\n\r\n<p style=\"text-align:justify\">Trong thời gian qua, C&ocirc;ng ty ch&uacute;ng t&ocirc;i đ&atilde; thực hiện vệ sinh l&agrave;m sạch c&ocirc;ng tr&igrave;nh như: Khu Staff Village-Khu ph&aacute;t triển Nam Hội An; Kh&aacute;ch sạn The Blues Hotel Đ&agrave; Nẵng; C&ocirc;ng tr&igrave;nh Dự &aacute;n BIDV 65 Hải Ph&ograve;ng, th&agrave;nh phố Đ&agrave; Nẵng; Kh&aacute;ch sạn th&agrave;nh phố Tam Kỳ; C&ocirc;ng tr&igrave;nh Bảo hiểm Bảo Việt tỉnh Quảng Nam; ......Ngo&agrave;i ra, ch&uacute;ng t&ocirc;i đang x&uacute;c tiến cung cấp dịch vụ vệ sinh l&agrave;m sạch v&agrave; trồng cỏ cho Kh&aacute;ch sạn Tui Blue Tam Tiến; Khu nghỉ m&aacute;t B&igrave;nh Minh, Thăng B&igrave;nh; Khu chung cư cao tầng H&ograve;a Kh&aacute;nh, Đ&agrave; Nẵng.</p>\r\n\r\n<p style=\"text-align:justify\">Với phương ch&acirc;m đặt chất lượng l&ecirc;n h&agrave;ng đầu, ch&uacute;ng t&ocirc;i cố gắng mang đến cho qu&yacute; kh&aacute;ch h&agrave;ng những sản phẩm c&oacute; chất lượng cao, dịch vụ tốt v&agrave; mang lại cho qu&yacute; kh&aacute;ch sự h&agrave;i l&ograve;ng tiện lợi, kinh tế.</p>', 'Untitled(37)(152021-09-0912).png', 0),
(2, '<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>1/ Giới thiệu:</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"background-color:white\">C&ocirc;ng ty TNHH Dịch vụ vệ sinh v&agrave; Chăm s&oacute;c Kh&aacute;nh Huy</span></strong><span style=\"background-color:white\">&nbsp;l&agrave; một c&ocirc;ng ty chuy&ecirc;n ng&agrave;nh về dịch vụ vệ sinh c&ocirc;ng nghiệp; trồng v&agrave; duy tr&igrave; cảnh quang,..Được th&agrave;nh lập theo giấy ph&eacute;p số 4001168316 của Sở Kế hoạch v&agrave; Đầu tư Quảng Nam, trong c&aacute;c lĩnh vực vệ sinh c&ocirc;ng nghiệp; Dịch vụ chăm s&oacute;c v&agrave; duy tr&igrave; cảnh quang, tư vấn trong lĩnh vực m&ocirc;i trường,....</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"background-color:white\">C&ocirc;ng ty TNHH Dịch vụ vệ sinh v&agrave; Chăm s&oacute;c Kh&aacute;nh Huy</span></strong><span style=\"background-color:white\">&nbsp;l&agrave; tập hợp một đội ngủ c&oacute; kinh , với hơn 50 nh&acirc;n vi&ecirc;n c&oacute; kinh nghiệm nhiều năm, c&oacute; năng lực v&agrave; lu&ocirc;n l&agrave;m việc tận t&acirc;m, c&oacute; tr&aacute;ch nhiệm, c&ocirc;ng ty ch&uacute;ng t&ocirc;i đ&atilde; v&agrave; đang đ&aacute;p ứng nhu cầu đa dạng của Kh&aacute;ch h&agrave;ng với chất lượng v&agrave; chi ph&iacute; hợp l&yacute; nhất.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>2/ Th&ocirc;ng tin:</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">- Trụ sở ch&iacute;nh:</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">+ Tổ 3, Khối phố Mỹ Thạch Bắc, phường T&acirc;n Thạnh, th&agrave;nh phố Tam Kỳ, tỉnh Quảng Nam</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">+ Điện thoại: 0917 00 54 93; 0912 090 313.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">+ Trang web:</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">+ M&atilde; số thuế: <span style=\"background-color:white\">4001168316</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"background-color:white\">- Th&agrave;nh lập: </span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"background-color:white\">Theo giấy chứng nhận đăng k&yacute; kinh doanh v&agrave; đăng k&yacute; thuế số 4001168316 do ph&ograve;ng đăng k&yacute; kinh doanh - Sở Kế hoạch v&agrave; Đầu tư tỉnh Quảng Nam cấp v&agrave;o ng&agrave;y 03 th&aacute;ng 01 năm 2019.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"background-color:white\">- Th&ocirc;ng tin giao dịch: </span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; + T&agrave;i khoản số:&nbsp; </span><span style=\"color:black\">7747057 tại ng&acirc;n h&agrave;ng ACB&nbsp; chi nh&aacute;nh Quảng Nam</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; + T&ecirc;n t&agrave;i khoản: </span><strong><span style=\"background-color:white\">C&ocirc;ng ty TNHH Dịch vụ vệ sinh v&agrave; Chăm s&oacute;c Kh&aacute;nh Huy</span></strong>&nbsp;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"background-color:white\">- Người đại diện ph&aacute;p luật:</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; + Họ v&agrave; t&ecirc;n: Huỳnh Thị Mỹ Lệ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - </span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; + Chức danh: Gi&aacute;m&nbsp; đốc</span><em>&nbsp; </em><span style=\"color:black\">c&ocirc;ng ty</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; + Điện thoại: <em>&nbsp;</em></span>0917.00 54 93; 0912.090 313.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>3/ Lĩnh vực hoạt động:</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size:16px\">- Vệ sinh c&ocirc;ng nghiệp cho c&aacute;c c&ocirc;ng tr&igrave;nh;</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Vệ sinh đ&igrave;nh kỳ cho c&aacute;c nh&agrave; m&aacute;y, c&ocirc;ng ty, bệnh viện;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Chống thấm v&agrave; bắn silicon c&aacute;c t&ograve;a nh&agrave; cao tầng;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - B&aacute;n v&agrave; tư vấn d&ugrave;ng thiết bị vệ sinh c&ocirc;ng nghiệp, th&ugrave;ng r&aacute;c,..</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Cung cấp c&ocirc;ng nhật c&ocirc;ng tr&igrave;nh;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Trồng v&agrave; duy tr&ugrave;y cảnh quang;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Tư vấn trong lĩnh vực m&ocirc;i trường;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>4/ Chứng chỉ iso:</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"\" src=\"http://localhost:1311/GreenService3/./public/uploads/PostsAboutUsImg/IMGckeditor/Untitled(37)_1608746067.png\" /><img alt=\"\" src=\"http://localhost:8080/GreenService/./public/uploads/PostsAboutUsImg/IMGckeditor/Untitled(37)_1608746067.png\" style=\"height:300px; width:219px\" /></p>', 'logo(11)(862021-09-0956).jpeg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_post_criteria`
--

CREATE TABLE `tbl_post_criteria` (
  `post_criteria_id` int(10) UNSIGNED NOT NULL,
  `post_criteria_content` text CHARACTER SET utf8 NOT NULL,
  `post_criteria_img` varchar(255) CHARACTER SET utf8 NOT NULL,
  `post_criteria_status` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_post_criteria`
--

INSERT INTO `tbl_post_criteria` (`post_criteria_id`, `post_criteria_content`, `post_criteria_img`, `post_criteria_status`) VALUES
(16, '<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"background-color:white\">&nbsp;<span style=\"color:#080808\">Kể từ ng&agrave;y th&agrave;nh lập cho đến nay c&ocirc;ng ty Kh&aacute;nh Huy li&ecirc;n tục ph&aacute;t triển được kh&aacute;ch h&agrave;ng t&iacute;n nhiệm với h&agrave;ng loạt c&aacute;c c&ocirc;ng tr&igrave;nh, dự &aacute;n lớn nhỏ kh&aacute;c nhau. Trong thời gian tới C&ocirc;ng ty Kh&aacute;nh Huy cam kết sẽ tiếp tục đổi mới để ng&agrave;y một phục vụ tốt hơn cho kh&aacute;ch h&agrave;ng.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"background-color:white\"><span style=\"color:#080808\">Dự &aacute;n ti&ecirc;u biểu đ&atilde; v&agrave; đang thực hiện:</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"background-color:white\"><span style=\"color:#080808\">- Khu nghỉ dưỡng Nam Hội An - C&ocirc;ng ty TNHH Ph&aacute;t triển Nam Hội An thuộc x&atilde; Duy Hải, huyện Duy Xuy&ecirc;n, tỉnh Quảng Nam, Việt Nam.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">*<span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">C&aacute;c hợp đồng thi c&ocirc;ng c&ocirc;ng tr&igrave;nh:</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">1/Hợp đồng cung cấp dịch vụ vệ sinh k&iacute;nh cao tầng C&ocirc;ng ty TNHH Nh&ocirc;m v&agrave; k&iacute;nh kiến tr&uacute;c Qu&acirc;n Đạt tại c&ocirc;ng tr&igrave;nh The Blues Hotel, tp Đ&agrave; Nẵng;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">2/Hợp đồng v&agrave; c&aacute;c phụ lục hợp đồng về cung cấp v&agrave; thi c&ocirc;ng gạch trồng cỏ, vệ sinh c&ocirc;ng nghiệp - C&ocirc;ng ty Cổ phần Đầu tư x&acirc;y dựng Newtecons tại c&ocirc;ng tr&igrave;nh Tui Blue Nam Hội An, th&agrave;nh phố Tam Kỳ, tỉnh Quảng Nam;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">3/Hợp đồng cung cấp dịch vụ vệ sinh c&ocirc;ng nghiệp k&iacute;nh cao tầng - C&ocirc;ng ty Cổ phần Eurowindow tại C&ocirc;ng tr&igrave;nh ph&aacute;t triển Nam Hội An g&oacute;i P2 v&agrave; P3, th&ocirc;n T&acirc;y Sơn Đ&ocirc;ng, x&atilde; Duy Hải, huyện Duy Xuy&ecirc;n, tỉnh Quảng Nam;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">4/Hợp đồng vệ sinh c&ocirc;ng nghiệp - C&ocirc;ng ty Cổ phần Đầu tư x&acirc;y dựng Cotecons tại c&ocirc;ng tr&igrave;nh Nam Hội An - Staff Village, dự &aacute;n Nam Hội An, th&ocirc;n T&acirc;y Sơn Đ&ocirc;ng, x&atilde; Duy Hải, huyện Duy Xuy&ecirc;n, tỉnh Quảng Nam;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">5/Hợp đồng vệ sinh c&ocirc;ng nghiệp - C&ocirc;ng ty Cổ BM Window tại c&ocirc;ng tr&igrave;nh Nh&agrave; Xưởng Quốc Quang, KCN Điện Nam- Điện Ngọc, thị x&atilde; Điện B&agrave;n, tỉnh Quảng Nam;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">6/Hợp đồng vệ sinh c&ocirc;ng nghiệp - C&ocirc;ng ty TNHH X&acirc;y dựng - Thương mại Tam Hữu tại c&ocirc;ng tr&igrave;nh H&amp;M Vincom, đường Ng&ocirc; Quyền, th&agrave;nh phố Đ&agrave; Nẵng.</span></span></p>', 'image-20201224012022-1_1608747623(92)(52021-09-0937).jpeg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_post_news`
--

CREATE TABLE `tbl_post_news` (
  `post_news_id` int(10) UNSIGNED NOT NULL,
  `post_news_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `post_news_slug` varchar(255) CHARACTER SET utf8 NOT NULL,
  `post_news_desc` text CHARACTER SET utf8 NOT NULL,
  `post_news_content` text CHARACTER SET utf8 NOT NULL,
  `post_news_img` varchar(255) CHARACTER SET utf8 NOT NULL,
  `post_news_metakeyword` varchar(255) CHARACTER SET utf8 NOT NULL,
  `post_news_status` int(11) UNSIGNED NOT NULL,
  `post_news_views` int(100) DEFAULT NULL,
  `post_news_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_post_news`
--

INSERT INTO `tbl_post_news` (`post_news_id`, `post_news_title`, `post_news_slug`, `post_news_desc`, `post_news_content`, `post_news_img`, `post_news_metakeyword`, `post_news_status`, `post_news_views`, `post_news_date`) VALUES
(1, 'Mùi hôi trong nhà', 'mui-hoi-trong-nha', 'Mùi hôi trong nhà luôn có thể phát sinh vì một số nguyên nhân như môi trường ẩm thấp, thông gió kém. Đây là một vài mẹo giữ cho ngôi nhà luôn thơm tho và sạch sẽ.', '<p><em>Nhiều người trong ch&uacute;ng ta thường kh&ocirc;ng nhận ra nh&agrave; m&igrave;nh c&oacute; m&ugrave;i h&ocirc;i như thế n&agrave;o v&agrave; nguy&ecirc;n nh&acirc;n chủ yếu l&agrave; do cơ chế th&iacute;ch ứng của c&aacute;c gi&aacute;c quan. Về cơ bản, đ&acirc;y l&agrave; qu&aacute; tr&igrave;nh m&agrave; n&atilde;o cuối c&ugrave;ng cũng th&iacute;ch nghi với một m&ugrave;i hương li&ecirc;n tục v&agrave; kh&ocirc;ng c&ograve;n để &yacute; đến n&oacute; nữa miễn l&agrave; n&oacute; kh&ocirc;ng g&acirc;y hại cho ch&uacute;ng ta.</em></p>\r\n\r\n<p>Hiện tượng n&agrave;y l&agrave; l&yacute; do tại sao khi bạn ở ngo&agrave;i một thời gian v&agrave; trở về nh&agrave;, l&uacute;c n&agrave;y bạn sẽ c&oacute; xu hướng ph&aacute;t hiện ra m&ugrave;i h&ocirc;i trong nh&agrave; r&otilde; rệt hơn. Những ai kh&ocirc;ng c&oacute; cảm gi&aacute;c th&iacute;ch nghi với m&ugrave;i nh&agrave; bạn đều sẽ ngửi thấy khi họ lần đầu ti&ecirc;n bước v&agrave;o trong nh&agrave;. Để tr&aacute;nh những t&igrave;nh huống xấu hổ c&oacute; thể xảy ra, điều quan trọng l&agrave; bạn phải lu&ocirc;n giữ cho ng&ocirc;i nh&agrave; của m&igrave;nh được thơm tho v&agrave; sạch sẽ. Vậy n&ecirc;n h&atilde;y đọc tiếp v&igrave; đ&acirc;y l&agrave; c&aacute;c bước sẽ gi&uacute;p bạn đạt được mục ti&ecirc;u n&agrave;y.</p>', 'giu-mui-huong(43).jpg', 'Giữ mùi hương cho nhà, giu mui huong cho nha, mui huong nha', 1, 18, '2021-09-09'),
(2, 'Vệ sinh nhà cửa', 've-sinh-nha-cua', 'Vệ sinh nhà cửa không phải là việc yêu thích của nhiều người nhưng bạn vẫn phải làm thường xuyên để đảm bảo sự sạch sẽ cho ngôi nhà của mình. Những mẹo nhỏ dưới đây sẽ giúp cho công việc vệ sinh nhà cửa của bạn trở nên dễ dàng hơn.', '<p>Để vệ sinh nh&agrave; cửa bao giờ cũng cần dụng cụ v&agrave; đặc biệt vệ sinh nh&agrave; ở sau x&acirc;y dựng th&igrave; cần rất nhiều. Để vệ sinh nh&agrave; sau x&acirc;y dựng h&atilde;y chuẩn bị c&aacute;c c&aacute;c sản phẩm vệ sinh nh&agrave; cửa sau:</p>\r\n\r\n<ul>\r\n	<li><em><strong>Gang tay cao su</strong></em></li>\r\n	<li><em><strong>Miếng bọt biển</strong></em></li>\r\n	<li><em><strong>C&acirc;y vệ sinh nh&agrave; cửa</strong></em></li>\r\n	<li><em><strong>Khăn giấy, vải vụn hoặc vải sợi nhỏ để lau bụi</strong></em></li>\r\n	<li><em><strong>Chổi, x&ocirc;</strong></em></li>\r\n	<li><em><strong>Nước, h&oacute;a chất vệ sinh nh&agrave; cửa</strong></em></li>\r\n	<li><em><strong>C&aacute;c dụng cụ vệ sinh nh&agrave; cửa th&ocirc;ng minh: m&aacute;y h&uacute;t bụi, m&aacute;y ch&agrave; s&agrave;n (m&aacute;y lau ch&ugrave;i s&agrave;n nh&agrave;) để vệ sinh s&agrave;n nh&agrave; sau x&acirc;y dựng&hellip;</strong></em></li>\r\n</ul>\r\n\r\n<p><em>Chuẩn bị dụng cụ vệ sinh nh&agrave; mới đầy đủ gi&uacute;p c&ocirc;ng việc thực hiện nhanh v&agrave; hiệu quả</em></p>\r\n\r\n<h3><u><strong>C&aacute;ch vệ sinh nh&agrave; mới x&acirc;y đ&uacute;ng c&aacute;ch</strong></u></h3>\r\n\r\n<p>Sau khi chuẩn bị c&aacute;c dụng cụ tr&ecirc;n h&atilde;y bắt đầu bắt tay v&agrave;o c&ocirc;ng việc vệ sinh nh&agrave; mới sau x&acirc;y dựng, sửa chữa đ&uacute;ng quy tr&igrave;nh.&nbsp;Việc vệ sinh nh&agrave; mới x&acirc;y xong cần phải biết c&aacute;ch để c&oacute; thể nhanh ch&oacute;ng l&agrave;m sạch triệt để c&aacute;c vết bẩn ở mọi kh&ocirc;ng gian. V&igrave; vậy nắm r&otilde; quy tr&igrave;nh vệ sinh nh&agrave; mới x&acirc;y, nh&agrave; sửa cần phải đảm bảo vệ sinh rồi kh&ocirc;ng phải l&agrave;m lại tức l&agrave; phải l&agrave; từ trần nh&agrave;, tường nh&agrave; rồi đến khu vực để đồ, tủ... từ tr&ecirc;n xuống dưới v&agrave; vệ sinh s&agrave;n nh&agrave; l&agrave; bước cuối c&ugrave;ng được thực hiện gi&uacute;p đảm bảo vệ sinh nh&agrave; đẹp sạch v&agrave; tiết kiệm thời gian, c&ocirc;ng sức nhất.</p>', 'disinfecting-home_155003-9130_1608745575(582021-09-0985).jpg', 'Mẹo vệ sinh nhà sạch, ve sinh nha sach, meo ve sinh nha', 1, 17, '2021-09-09'),
(10, 'Biện pháp an toàn trong đu dây', 'bien-phap-an-toan-trong-du-day', 'Đối với việc vệ sinh làm sạch kính trên cao giàn giáo vẫn là phương pháp truyền thống được ưu tiên hàng đầu. Tuy nhiên hiện nay ở các công trình đã sử dụng phương pháp mới khi làm việc trên cao đó là đu dây lau kính. Vậy, để công việc diễn ra thuận lợi thì đội đu dây cần phải tuân thủ nghiêm ngặt quy tắc an toàn khi đu dây như thế nào? Hãy cùng chúng tôi tìm hiểu qua bài viết này nhé!!', '<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>I. Y&ecirc;u cầu nh&acirc;n vi&ecirc;n lau k&iacute;nh:</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">- Kh&ocirc;ng sợ độ cao</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">- C&oacute; khả năng thi c&ocirc;ng trong thời tiết khắc nghiệt (nắng, lạnh,..)</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">- C&oacute; khả năng giải quyết vấn đền nhanh...</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>II. Về sức khỏe:&nbsp;&nbsp;&nbsp; </strong></span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">- Chịu đựng thời tiết khắc nghiệt</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">- L&agrave;m việc trong tư thế lơ lửng</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">- Khối lượng cơ thể kh&ocirc;ng vượt qu&aacute; 100kg</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">- Tim mạch ở trạng thải ổn định khi leo 50 bậc cầu thang</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">- Kh&ocirc;ng bị khuyết tật</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>III. Kiểm tra:</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trước khi tiến h&agrave;nh c&ocirc;ng việc leo tr&egrave;o phải kiểm tra đặc t&iacute;nh an to&agrave;n của thiết bị: Gi&aacute;m s&aacute;t/kỹ thuật vi&ecirc;n c&oacute; tr&aacute;ch nhiệm, kiểm tra tất cả c&aacute;c thiết bị;</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - D&acirc;y đu v&agrave; ghế đu phải c&oacute; kiểm định.</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>&nbsp;3.1. Kiểm tra d&acirc;y thừng:</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - D&acirc;y thừng để đu ở trạng thải mới, kh&ocirc;ng trầy, tưa, ..đường k&iacute;nh d&acirc;y thừng từ 10-16mm; Chiều d&agrave;i th&ocirc;ng thường khoảng 200m.</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - D&acirc;y thừng kh&ocirc;ng sử dụng qu&aacute; 2 năm;</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Đối với d&acirc;y thừng xử d&ugrave;ng nhiều sẽ đươc thải bỏ sau 01 năm sử dụng</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - D&acirc;y v&agrave; m&acirc;m ngồi phải được kiểm định;</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Trước khi leo phải thử tải d&acirc;y trong v&ograve;ng 4 tiếng (tải thử 200kg)</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>3.2. Kiểm tra đai an to&agrave;n:</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Đai đảm bảo, mang đ&uacute;ng, chặt v&agrave; kết nối ph&ugrave; hợp;</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Kh&ocirc;ng sử dụng d&acirc;y đai c&oacute; dấu hiệu hỏng</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>3.3. Mũ bảo hộ:</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - </strong>Chọn lựa mũ bảo hộ ph&ugrave; hợp với mỗi người v&agrave; c&oacute; quai th&iacute;ch hợp. Mũ bảo hộ sử dụng cho leo tr&egrave;o l&agrave; loại mũ đặc biệt kh&ocirc;ng c&oacute; t&aacute;n ở ph&iacute;a trước, cũng như lắp đặt c&aacute;c thiết bị phụ trợ đi k&egrave;m.</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>3.4. Kiểm tra phần cứng:</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - </strong>Kiểm tra chức năng c&aacute;c kh&oacute;a kết nối, c&aacute;c thiết bị l&agrave;m việc.</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Đảm bảo c&aacute;c kh&oacute;a kết nối sử dụng kh&ocirc;ng bị hư hỏng, m&eacute;o m&oacute;, m&ograve;n.</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Phải c&oacute; phanh h&atilde;m v&agrave; d&ugrave;ng tốt.</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>IV. C&aacute;c y&ecirc;u cầu an to&agrave;n khi đu d&acirc;y</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>4.1. Trước khi tiến h&agrave;nh c&ocirc;ng việc:</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - </strong>Tiến h&agrave;nh nhận diện v&agrave; ph&acirc;n t&iacute;ch mối nguy hiểm để t&igrave;m phương &aacute;n tốt nhất</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Chuẩn bị sự cố cho phương &aacute;n sấu nhất</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Thực hiện c&aacute;c biện ph&aacute;p c&ocirc; lập về đường d&acirc;y điện ảnh hưởng đến c&ocirc;ng việc tr&ecirc;n cao</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">- Chuẩn bị c&aacute;c trang thiết bị v&agrave; nguồn lực ph&ugrave; hợp</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">- Kiểm tra an to&agrave;n tất cả dụng cụ, thiết bị</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">- Chuẩn bị t&uacute;i để vận chuyển vật liệu, dụng cụ</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">- Khoanh v&ugrave;ng l&agrave;m việc, c&oacute; biển cảnh b&aacute;o để tr&aacute;nh người v&ocirc; phận sự đi v&agrave;o</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">- Kiểm tra điều kiện thời tiết như gi&oacute;, mưa</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">- Lắp đặt thiết bị chống t&eacute; ng&atilde; tại c&aacute;c vị tr&iacute; tiếp cận với neo</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>4.2. Bắt đầu c&ocirc;ng viện đu d&acirc;y k&iacute;nh:</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Tiến h&agrave;nh đo huyết &aacute;p trước khi leo</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">- Kiểm tra t&igrave;nh trạng của c&aacute;c d&acirc;y thừng</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Đảm bảo mỗ người l&agrave;m việc c&oacute; 2 d&acirc;y thừng được neo độc lập</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Thắt n&uacute;t dừng ở mỗ cuối d&acirc;y thừng</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Người gi&aacute;m s&aacute;t kiểm tra đu d&acirc;y lau k&iacute;nh </span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - </strong>Kiểm tra v&agrave; v&agrave; lắp đặt tấm l&oacute;t bảo vệ d&acirc;y thừng ở những vị tr&iacute; tiếp x&uacute;c với cạch c&oacute; nguy cơ l&agrave;m hỏng d&acirc;y thừng</span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>4.3. Trong qua tr&igrave;nh đu d&acirc;y:</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *Di chuyển xuống:</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Trước khi di chuyển xuống&nbsp; phải kết nối đảm bảo thiết bị an to&agrave;n v&agrave; hoạt động tốt, khi di chuyển xuống phải kiểm tra đảm bảo, c&aacute;c kh&oacute;a, h&atilde;m c&oacute; hoạt động tốt hay kh&ocirc;ng v&agrave; đ&uacute;ng hướng chưa.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Trước khi di chuyển qua khỏi một gờ hoặc chướng ngại vật cần phải ch&uacute; &yacute; phải đủ d&acirc;y thừng. Khi qua từng gờ phải kh&oacute;a </span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - D&acirc;y thừng phải được kiểm so&aacute;t trong to&agrave;n bộ qu&aacute; tr&igrave;nh l&agrave;m vi.</span></span></p>\r\n\r\n<div style=\"page-break-after:always\"><span style=\"display:none\">&nbsp;</span></div>', 'd(94)(102021-09-0932).jpeg', 'an toan du day, biện pháp an toàn khi đu dây, đu dây lau kính, du day lau kinh', 1, 25, '2021-09-09'),
(16, 'TỰ VỆ SINH NHÀ SAU KHI XÂY DỰNG', 'tu-ve-sinh-nha-sau-khi-xay-dung', 'Một công trình nhà ở hoàn thiện trước khi dọn vào sẽ cần phải vệ sinh nhà sau xây dựng. Đây là bước quan trọng để vệ sinh loại toàn bộ ngôi nhà và sẽ cực kỳ mất thời gian, công sức. Tuy nhiên nếu bạn biết cách vệ sinh nhà ở sau xây dưng đúng thì việc dọn dẹp sẽ trở nên cực kỳ nhanh chóng. Hãy cùng theo dõi bài viết sau đây để biết làm thế nào vệ sinh nh...', '<p>Một c&ocirc;ng tr&igrave;nh nh&agrave; ở ho&agrave;n thiện trước khi dọn v&agrave;o sẽ cần phải&nbsp;<a href=\"http://thientan.com.vn/tu-ve-sinh-nha-sau-xay-dung.html\"><strong>vệ sinh nh&agrave; sau x&acirc;y dựng</strong></a>. Đ&acirc;y l&agrave; bước quan trọng để vệ sinh loại to&agrave;n bộ ng&ocirc;i nh&agrave; v&agrave; sẽ cực kỳ mất thời gian, c&ocirc;ng sức. Tuy nhi&ecirc;n nếu bạn biết c&aacute;ch vệ sinh nh&agrave; ở sau x&acirc;y dưng đ&uacute;ng th&igrave; việc dọn dẹp sẽ trở n&ecirc;n cực kỳ nhanh ch&oacute;ng. H&atilde;y c&ugrave;ng theo d&otilde;i b&agrave;i viết sau đ&acirc;y để biết l&agrave;m thế n&agrave;o vệ sinh nh&agrave; sau x&acirc;y dựng nhanh gọn v&agrave; đơn giản nhất.</p>\r\n\r\n<p><img alt=\"tự vệ sinh nhà sau xây dựng\" src=\"http://thientan.com.vn/upload/tham/3(1).png\" /></p>\r\n\r\n<h2><strong>NẮM R&Otilde; NGUY&Ecirc;N TẮC KHI TỰ VỆ SINH NH&Agrave; SAU X&Acirc;Y DỰNG.</strong></h2>\r\n\r\n<p>Bất cứ một c&ocirc;ng việc n&agrave;o cũng c&oacute; những nguy&ecirc;n tắc nhất định,&nbsp;<a href=\"http://thientan.com.vn/tin-tuc.html\"><strong>tự</strong>&nbsp;<strong>vệ sinh nh&agrave; sau x&acirc;y dựng</strong></a>&nbsp;cũng tương tự như vậy. B&ecirc;n cạnh phải chuẩn bị c&aacute;c vật dụng để tiến h&agrave;nh vệ sinh, bạn cũng cần nắm r&otilde; nguy&ecirc;n tắc tối thiểu nhất để tiến h&agrave;nh&nbsp;<strong><em>vệ sinh nh&agrave; mới x&acirc;y dựng&nbsp;</em></strong>khoa học v&agrave; nhanh gọn đ&oacute; ch&iacute;nh l&agrave; &ldquo;từ tr&ecirc;n xuống dưới, từ trong ra ngo&agrave;i&rdquo;. Điều n&agrave;y c&oacute; nghĩa l&agrave; bạn n&ecirc;n tiến h&agrave;nh vệ sinh từ tầng cao nhất xuống tầng thấp nhất nếu nh&agrave; c&oacute; nhiều tầng, trong từng gian ph&ograve;ng phải l&agrave;m từ tr&ecirc;n trần xướng nền, vệ sinh to&agrave;n bộ từ trong nh&agrave; rồi mới tiến h&agrave;nh vệ sinh ngo&agrave;i s&acirc;n. B&ecirc;n cạnh đ&oacute; trước khi vệ sinh bạn cần phải c&oacute; bước dọn th&ocirc; c&aacute;c vật liệu, chuyển vật dụng kh&ocirc;ng cần thiết ra b&ecirc;n ngo&agrave;i.</p>\r\n\r\n<p><img alt=\"tự vệ sinh nhà sau xây dựng\" src=\"http://thientan.com.vn/upload/tham/1(1).png\" /></p>\r\n\r\n<h2><strong>C&Aacute;C BƯỚC TỰ VỆ SINH NH&Agrave; SAU X&Acirc;Y DỰNG CẦN NẮM</strong></h2>\r\n\r\n<p>Khi đ&atilde; r&otilde; quy tắc&nbsp;<a href=\"http://thientan.com.vn/dich-vu-ve-sinh-cong-nghiep.html\"><strong>tự</strong>&nbsp;<strong>vệ sinh nh&agrave; sau x&acirc;y dựng</strong></a>, bạn h&atilde;y tiến h&agrave;nh tuần tự c&aacute;c bước vệ sinh sau đ&acirc;y. Đ&acirc;y l&agrave; c&aacute;c bước m&agrave; bất cứ một dịch vụ vệ sinh nh&agrave; ở sau x&acirc;y dựng n&agrave;o cũng tu&acirc;n thủ theo. C&aacute;c bước n&agrave;y bao gồm:</p>\r\n\r\n<p>Chuẩn bị vật dụng: bạn h&atilde;y chuẩn bị c&aacute;c vật dụng cần nhất cho việc vệ sinh nh&agrave; ở sau x&acirc;y dựng như m&aacute;y h&uacute;t bụi, m&aacute;y đ&aacute;nh vết bẩn, chổi lau đa năng hay ch&iacute; &iacute;t l&agrave; c&aacute;c h&oacute;a chất chuy&ecirc;n dụng cho việc tẩy rửa. C&aacute;c h&oacute;a chất n&agrave;y sẽ l&agrave; trợ thủ đắc lựa nhất cho bạn khi&nbsp;<strong><em>vệ sinh nh&agrave; mới x&acirc;y dựng</em></strong>, gi&uacute;p tẩy mọi vết bẩn do c&aacute;c vật dụng x&acirc;y dựng g&acirc;y ra.</p>\r\n\r\n<p>Vệ sinh th&ocirc;: l&agrave; việc dọn dẹp sơ bằng chổi nhằm qu&eacute;t bụi, h&uacute;t bụi, dọn r&aacute;c c&ocirc;ng tr&igrave;nh trước khi&nbsp;<a href=\"http://thientan.com.vn/ve-sinh-cong-nghiep.html\"><strong>tự</strong>&nbsp;<strong>vệ sinh nh&agrave; sau x&acirc;y dựng</strong></a>.</p>\r\n\r\n<p>&nbsp;Tiến h&agrave;nh vệ sinh chi tiết: bạn h&atilde;y thực hiện vệ sinh nh&agrave; ở sau x&acirc;y dựng theo nguy&ecirc;n tắc n&oacute;i tr&ecirc;n. Bắt đầu với việc vệ sinh c&aacute;c thiết bị tr&ecirc;n cao như điều h&ograve;a, b&oacute;ng đen, cửa, khung cửa sổ, k&iacute;nh t&ograve;a nh&agrave;. Đối với mỗi loại vật dụng c&oacute; chất liệu kh&aacute;c nhau như nh&ocirc;m, th&eacute;p, k&iacute;nh&hellip; h&atilde;y cẩn trọng trong việc lựa chọn dung dịch tẩy rửa hay &aacute;p dụng c&aacute;c phương thức vệ sinh kh&aacute;c nhau để tr&aacute;nh ăn m&ograve;n.</p>\r\n\r\n<p>Vệ sinh s&agrave;n: c&aacute;c bước vệ sinh nh&agrave; ở sau x&acirc;y dựng đ&atilde; ho&agrave;n tất bạn h&atilde;y tiến h&agrave;nh vệ sinh lại to&agrave;n bộ s&agrave;n nh&agrave;. Cũng tương tư như tr&ecirc;n t&ugrave;y chất liệu s&agrave;n l&agrave; gạch men, ốp gỗ hay s&agrave;n b&ecirc; t&ocirc;ng&hellip; để tiến h&agrave;nh vệ sinh sao cho ph&ugrave; hợp nhất.</p>\r\n\r\n<p>Kiểm tra c&ocirc;ng tr&igrave;nh trước khi đưa v&agrave;o sử dụng: thực hiện c&aacute;c bước&nbsp;<a href=\"http://thientan.com.vn/\"><strong>tự</strong>&nbsp;<strong>vệ sinh nh&agrave; sau x&acirc;y dựng</strong></a>&nbsp;n&oacute;i tr&ecirc;n bạn cần phải tiến h&agrave;nh kiểm tra lần cuối. N&ecirc;n xem x&eacute;t kỹ c&aacute;c ng&oacute;c ng&aacute;ch trong nh&agrave; đặc biệt c&aacute;c khu vực cao, toilet, k&iacute;nh&hellip; để xem việc vệ sinh đ&atilde; ho&agrave;n thiện hay chưa.</p>\r\n\r\n<p>Nếu mọi thứ đ&atilde; ổn thỏa, việc tự vệ sinh nh&agrave; sau x&acirc;y dựng ho&agrave;n th&agrave;nh l&uacute;c n&agrave;y bạn c&oacute; thể bắt đầu chuyển đồ đạc v&agrave;o v&agrave; sử dụng c&ocirc;ng tr&igrave;nh. C&aacute;c bước vệ sinh n&oacute;i tr&ecirc;n sẽ gi&uacute;p bạn thực hiện đơn giản v&agrave; nhanh ch&oacute;ng hơn c&ocirc;ng việc&nbsp;<strong><em>vệ sinh nh&agrave; mới x&acirc;y dựng</em></strong>&nbsp;m&agrave; kh&ocirc;ng cần đến qu&aacute; nhiều sự trợ gi&uacute;p.</p>', '240_F_127353315_5ygc3LuNF0nsr4ujTWFpAvxRP91bverq_1608745489(622021-09-0969).jpg', 'tin tuc', 1, 27, '2021-09-10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_post_project`
--

CREATE TABLE `tbl_post_project` (
  `post_project_id` int(10) UNSIGNED NOT NULL,
  `post_project_title` varchar(255) NOT NULL,
  `post_project_slug` varchar(255) NOT NULL,
  `post_project_desc` text NOT NULL,
  `post_project_content` text NOT NULL,
  `post_project_metakeyword` varchar(255) NOT NULL,
  `post_project_status` int(10) UNSIGNED NOT NULL,
  `post_project_img` varchar(255) NOT NULL,
  `post_project_views` int(100) DEFAULT NULL,
  `post_project_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_post_project`
--

INSERT INTO `tbl_post_project` (`post_project_id`, `post_project_title`, `post_project_slug`, `post_project_desc`, `post_project_content`, `post_project_metakeyword`, `post_project_status`, `post_project_img`, `post_project_views`, `post_project_date`) VALUES
(8, 'DỰ ÁN TECCO HOME1', 'du-an-tecco-home', 'Tecco Home thừa hưởng trọn vẹn các dịch vụ tiện ích phục vụ cho nhu cầu thiết yếu của cuộc sống; tạo nên một phong cách sống hoàn mỹ, đủ đầy và tiện nghi cho cả gia đình', '<h2><a href=\"https://teccohome.vn/trang-mau/vi-tri-tecco-home-an-phu/\">VỊ TR&Iacute; &ndash; KẾT NỐI GIAO TH&Ocirc;NG</a></h2>\r\n\r\n<p><em><strong>Tecco Home An Ph&uacute;</strong></em>&nbsp;c&oacute; vị tr&iacute; kết nối giao th&ocirc;ng đa hướng khi tọa lạc tại V&ograve;ng xoay An Ph&uacute;, ngay mặt tiền đường DT743, Khu phố 1A, P.An Ph&uacute;, Th&agrave;nh phố Thuận An, Tỉnh B&igrave;nh Dương. Cạnh Khu c&ocirc;ng nghiệp Vsip1, tiếp gi&aacute;p trục Đường 22 th&aacute;ng mười hai, Cao tốc Mỹ phước T&acirc;n vạn, B&ugrave;i Thị Xu&acirc;n; C&aacute;ch Th&agrave;nh phố Thủ dầu Một, Th&agrave;nh phố Bi&ecirc;n H&ograve;a, TPHCM từ 4 &ndash; 8km.</p>\r\n\r\n<ul>\r\n	<li>Cạnh Khu c&ocirc;ng nghiệp Vsip 1; Khu c&ocirc;ng nghiệp S&oacute;ng Thần, Việt Hương, T&acirc;n Đ&ocirc;ng Hiệp A, T&acirc;n Đ&ocirc;ng Hiệp B từ 4 &ndash; 7km</li>\r\n	<li>Trường mầm non v&agrave; trường học c&aacute;c cấp chỉ 700m &ndash; 3km;</li>\r\n	<li>Bệnh viện Đa khoa An ph&uacute; 500m;</li>\r\n	<li>Gần ngay c&aacute;c chợ lớn trong khu vực như Chợ Ho&agrave; L&acirc;n (3,3km); Chợ Vsip1 (1,7km); Chợ Ph&uacute; Phong (3km)</li>\r\n	<li>Si&ecirc;u thị AEON Mall, Lotte Mart, Vincom Dĩ An từ 4 Km;</li>\r\n</ul>\r\n\r\n<p>Từ&nbsp;<em><strong>Chung cư T</strong><strong>ecco Home</strong>&nbsp;</em>c&oacute; thể di chuyển nhanh đến c&aacute;c trung t&acirc;m Kinh tế, Văn ho&aacute;, Ch&iacute;nh trị với những tuyến giao th&ocirc;ng huyết mạch của hai th&agrave;nh phố Thuận An v&agrave; Dĩ An</p>', 'can ho tecco home, Dự án Căn hộ Tecco Home', 1, 'tecco-home-an-phú(63)(22021-09-0933).jpg', 3, '2021-09-10'),
(15, 'DỰ ÁN TECCO HOME2', 'du-an-tecco-home1', 'Tecco Home thừa hưởng trọn vẹn các dịch vụ tiện ích phục vụ cho nhu cầu thiết yếu của cuộc sống; tạo nên một phong cách sống hoàn mỹ, đủ đầy và tiện nghi cho cả gia đình', '<h2><a href=\"https://teccohome.vn/trang-mau/vi-tri-tecco-home-an-phu/\">VỊ TR&Iacute; &ndash; KẾT NỐI GIAO TH&Ocirc;NG</a></h2>\r\n\r\n<p><em><strong>Tecco Home An Ph&uacute;</strong></em>&nbsp;c&oacute; vị tr&iacute; kết nối giao th&ocirc;ng đa hướng khi tọa lạc tại V&ograve;ng xoay An Ph&uacute;, ngay mặt tiền đường DT743, Khu phố 1A, P.An Ph&uacute;, Th&agrave;nh phố Thuận An, Tỉnh B&igrave;nh Dương. Cạnh Khu c&ocirc;ng nghiệp Vsip1, tiếp gi&aacute;p trục Đường 22 th&aacute;ng mười hai, Cao tốc Mỹ phước T&acirc;n vạn, B&ugrave;i Thị Xu&acirc;n; C&aacute;ch Th&agrave;nh phố Thủ dầu Một, Th&agrave;nh phố Bi&ecirc;n H&ograve;a, TPHCM từ 4 &ndash; 8km.</p>\r\n\r\n<ul>\r\n	<li>Cạnh Khu c&ocirc;ng nghiệp Vsip 1; Khu c&ocirc;ng nghiệp S&oacute;ng Thần, Việt Hương, T&acirc;n Đ&ocirc;ng Hiệp A, T&acirc;n Đ&ocirc;ng Hiệp B từ 4 &ndash; 7km</li>\r\n	<li>Trường mầm non v&agrave; trường học c&aacute;c cấp chỉ 700m &ndash; 3km;</li>\r\n	<li>Bệnh viện Đa khoa An ph&uacute; 500m;</li>\r\n	<li>Gần ngay c&aacute;c chợ lớn trong khu vực như Chợ Ho&agrave; L&acirc;n (3,3km); Chợ Vsip1 (1,7km); Chợ Ph&uacute; Phong (3km)</li>\r\n	<li>Si&ecirc;u thị AEON Mall, Lotte Mart, Vincom Dĩ An từ 4 Km;</li>\r\n</ul>\r\n\r\n<p>Từ&nbsp;<em><strong>Chung cư T</strong><strong>ecco Home</strong>&nbsp;</em>c&oacute; thể di chuyển nhanh đến c&aacute;c trung t&acirc;m Kinh tế, Văn ho&aacute;, Ch&iacute;nh trị với những tuyến giao th&ocirc;ng huyết mạch của hai th&agrave;nh phố Thuận An v&agrave; Dĩ An</p>', 'can ho tecco home, Dự án Căn hộ Tecco Home', 1, 'tecco-home-an-phú(63)(642021-09-090).jpg', 5, '2021-09-10'),
(16, 'DỰ ÁN TECCO HOME3', 'du-an-tecco-home', 'Tecco Home thừa hưởng trọn vẹn các dịch vụ tiện ích phục vụ cho nhu cầu thiết yếu của cuộc sống; tạo nên một phong cách sống hoàn mỹ, đủ đầy và tiện nghi cho cả gia đình', '<h2><a href=\"https://teccohome.vn/trang-mau/vi-tri-tecco-home-an-phu/\">VỊ TR&Iacute; &ndash; KẾT NỐI GIAO TH&Ocirc;NG</a></h2>\r\n\r\n<p><em><strong>Tecco Home An Ph&uacute;</strong></em>&nbsp;c&oacute; vị tr&iacute; kết nối giao th&ocirc;ng đa hướng khi tọa lạc tại V&ograve;ng xoay An Ph&uacute;, ngay mặt tiền đường DT743, Khu phố 1A, P.An Ph&uacute;, Th&agrave;nh phố Thuận An, Tỉnh B&igrave;nh Dương. Cạnh Khu c&ocirc;ng nghiệp Vsip1, tiếp gi&aacute;p trục Đường 22 th&aacute;ng mười hai, Cao tốc Mỹ phước T&acirc;n vạn, B&ugrave;i Thị Xu&acirc;n; C&aacute;ch Th&agrave;nh phố Thủ dầu Một, Th&agrave;nh phố Bi&ecirc;n H&ograve;a, TPHCM từ 4 &ndash; 8km.</p>\r\n\r\n<ul>\r\n	<li>Cạnh Khu c&ocirc;ng nghiệp Vsip 1; Khu c&ocirc;ng nghiệp S&oacute;ng Thần, Việt Hương, T&acirc;n Đ&ocirc;ng Hiệp A, T&acirc;n Đ&ocirc;ng Hiệp B từ 4 &ndash; 7km</li>\r\n	<li>Trường mầm non v&agrave; trường học c&aacute;c cấp chỉ 700m &ndash; 3km;</li>\r\n	<li>Bệnh viện Đa khoa An ph&uacute; 500m;</li>\r\n	<li>Gần ngay c&aacute;c chợ lớn trong khu vực như Chợ Ho&agrave; L&acirc;n (3,3km); Chợ Vsip1 (1,7km); Chợ Ph&uacute; Phong (3km)</li>\r\n	<li>Si&ecirc;u thị AEON Mall, Lotte Mart, Vincom Dĩ An từ 4 Km;</li>\r\n</ul>\r\n\r\n<p>Từ&nbsp;<em><strong>Chung cư T</strong><strong>ecco Home</strong>&nbsp;</em>c&oacute; thể di chuyển nhanh đến c&aacute;c trung t&acirc;m Kinh tế, Văn ho&aacute;, Ch&iacute;nh trị với những tuyến giao th&ocirc;ng huyết mạch của hai th&agrave;nh phố Thuận An v&agrave; Dĩ An</p>', 'can ho tecco home, Dự án Căn hộ Tecco Home', 1, 'tecco-home-an-phú(63)(692021-09-0912).jpg', 13, '2021-09-10'),
(20, 'DỰ ÁN TECCO HOME4', 'du-an-tecco-home', 'Tecco Home thừa hưởng trọn vẹn các dịch vụ tiện ích phục vụ cho nhu cầu thiết yếu của cuộc sống; tạo nên một phong cách sống hoàn mỹ, đủ đầy và tiện nghi cho cả gia đình', '<h2><a href=\"https://teccohome.vn/trang-mau/vi-tri-tecco-home-an-phu/\">VỊ TR&Iacute; &ndash; KẾT NỐI GIAO TH&Ocirc;NG</a></h2>\r\n\r\n<p><em><strong>Tecco Home An Ph&uacute;</strong></em>&nbsp;c&oacute; vị tr&iacute; kết nối giao th&ocirc;ng đa hướng khi tọa lạc tại V&ograve;ng xoay An Ph&uacute;, ngay mặt tiền đường DT743, Khu phố 1A, P.An Ph&uacute;, Th&agrave;nh phố Thuận An, Tỉnh B&igrave;nh Dương. Cạnh Khu c&ocirc;ng nghiệp Vsip1, tiếp gi&aacute;p trục Đường 22 th&aacute;ng mười hai, Cao tốc Mỹ phước T&acirc;n vạn, B&ugrave;i Thị Xu&acirc;n; C&aacute;ch Th&agrave;nh phố Thủ dầu Một, Th&agrave;nh phố Bi&ecirc;n H&ograve;a, TPHCM từ 4 &ndash; 8km.</p>\r\n\r\n<ul>\r\n	<li>Cạnh Khu c&ocirc;ng nghiệp Vsip 1; Khu c&ocirc;ng nghiệp S&oacute;ng Thần, Việt Hương, T&acirc;n Đ&ocirc;ng Hiệp A, T&acirc;n Đ&ocirc;ng Hiệp B từ 4 &ndash; 7km</li>\r\n	<li>Trường mầm non v&agrave; trường học c&aacute;c cấp chỉ 700m &ndash; 3km;</li>\r\n	<li>Bệnh viện Đa khoa An ph&uacute; 500m;</li>\r\n	<li>Gần ngay c&aacute;c chợ lớn trong khu vực như Chợ Ho&agrave; L&acirc;n (3,3km); Chợ Vsip1 (1,7km); Chợ Ph&uacute; Phong (3km)</li>\r\n	<li>Si&ecirc;u thị AEON Mall, Lotte Mart, Vincom Dĩ An từ 4 Km;</li>\r\n</ul>\r\n\r\n<p>Từ&nbsp;<em><strong>Chung cư T</strong><strong>ecco Home</strong>&nbsp;</em>c&oacute; thể di chuyển nhanh đến c&aacute;c trung t&acirc;m Kinh tế, Văn ho&aacute;, Ch&iacute;nh trị với những tuyến giao th&ocirc;ng huyết mạch của hai th&agrave;nh phố Thuận An v&agrave; Dĩ An</p>', 'can ho tecco home, Dự án Căn hộ Tecco Home', 1, 'tecco-home-an-phú(63)(612021-09-0961).jpg', 2, '2021-09-10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_post_service`
--

CREATE TABLE `tbl_post_service` (
  `post_service_id` int(10) UNSIGNED NOT NULL,
  `post_service_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `post_service_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_service_desc` text CHARACTER SET utf8 NOT NULL,
  `post_service_content` text CHARACTER SET utf8 NOT NULL,
  `post_service_img` varchar(255) CHARACTER SET utf8 NOT NULL,
  `post_service_metakeyword` varchar(255) CHARACTER SET utf8 NOT NULL,
  `post_service_status` int(11) NOT NULL,
  `post_service_views` int(100) DEFAULT NULL,
  `post_service_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_post_service`
--

INSERT INTO `tbl_post_service` (`post_service_id`, `post_service_title`, `post_service_slug`, `post_service_desc`, `post_service_content`, `post_service_img`, `post_service_metakeyword`, `post_service_status`, `post_service_views`, `post_service_date`) VALUES
(7, 'Dịch vụ vệ sinh văn phòng', 'dich-vu-ve-sinh-van-phong', 'Bạn đã nghĩ đến việc thuê một nhân viên làm vệ sinh (được tính như một nhân viên trong công ty) nhưng thực tế bạn sẽ mất thời gian thêm chỉ để quản lý một đến vài người, khâu kiểm tra tiến độ vệ sinh hay đôi khi bạn phải nhắc nhở việc dọn kho.', '<p>&nbsp;</p>\r\n\r\n<p>Vệ sinh văn ph&ograve;ng mang lại nhiều lợi &iacute;ch cho bạn v&agrave; c&ocirc;ng ty như mang lại gia tăng hiệu quả c&ocirc;ng việc, h&agrave;i l&ograve;ng kh&aacute;ch h&agrave;ng, văn ph&ograve;ng trở n&ecirc;n chuy&ecirc;n nghiệp hơn,&hellip;thế n&ecirc;n sử dụng dịch vụ vệ sinh văn ph&ograve;ng với rất nhiều lợi &iacute;ch kh&aacute;c nhau. Kh&aacute;c biệt với lại địa chỉ kh&aacute;c nhau th&igrave;&nbsp;<a href=\"https://yesoffice.com.vn/van-phong-ao/\">văn ph&ograve;ng l&agrave;m việc</a>&nbsp;c&oacute; những đặc ph&ugrave; ri&ecirc;ng m&agrave; ch&uacute;ng t&ocirc;i khuy&ecirc;n rằng chỉ c&oacute; sử dụng dịch vụ vệ sinh ri&ecirc;ng biệt cho văn ph&ograve;ng th&igrave; c&ocirc;ng ty bạn sẽ l&agrave;m h&agrave;i l&ograve;ng từ trong ra ngo&agrave;i.</p>\r\n\r\n<ul>\r\n	<li>Những văn ph&ograve;ng c&oacute; nhiều ph&ograve;ng ốc, cơ quan ban ng&agrave;nh kh&aacute;c nhau.</li>\r\n	<li>T&ograve;a nh&agrave; c&ocirc;ng ty, tập đo&agrave;n với số lượng khủng như ng&acirc;n h&agrave;ng, bất động sản,&hellip;</li>\r\n	<li>Kh&ocirc;ng gian l&agrave;m việc chung (coworking space) của nhiều c&ocirc;ng ty, start up,&hellip;</li>\r\n</ul>\r\n\r\n<p>Nhưng tất cả những văn ph&ograve;ng d&ugrave; quy m&ocirc; lớn hay nhỏ th&igrave; ch&uacute;ng t&ocirc;i phục vụ dịch vụ văn ph&ograve;ng tối ưu nhất khiến bạn h&agrave;i l&ograve;ng.</p>\r\n\r\n<p>Bạn sẽ tốn chi ph&iacute; để chuẩn bị những dụng cụ phục vụ cho qu&aacute; tr&igrave;nh vệ sinh văn ph&ograve;ng. Ch&uacute;ng t&ocirc;i hiểu được những băn khoăn lo lắng của bạn thế n&ecirc;n dịch vụ vệ sinh văn ph&ograve;ng ra đời v&agrave; HouseCare tự h&agrave;o l&agrave;m h&agrave;i l&ograve;ng bạn trong mọi dịch vụ vệ sinh văn ph&ograve;ng.</p>', 'vi-sao-chon-ve-sinh-van-phong(11)(462021-09-0996).jpg', 've sinh van phong, Vệ sinh văn phòng', 1, 15, '2021-09-09'),
(8, 'Vệ sinh trên công trường xây dựng', 've-sinh-tren-cong-truong-xay-dung', 'Vệ sinh trên công trường xây dựng ở đây chủ yếu đề cập tới vấn đề rác thải của công trường như: đất, gỗ vụn, giấy rác hoặc dầu, mỡ phế thải,....', '<p><strong>Biện ph&aacute;p giữ vệ sinh tr&ecirc;n c&ocirc;ng trường</strong></p>\r\n\r\n<p>- Đất bẩn cần được vận chuyển đi ngay sau khi được đ&agrave;o l&ecirc;n.</p>\r\n\r\n<p>- Gỗ vụn, giấy r&aacute;c hoặc vữa kh&ocirc; phế liệu,.... tr&ecirc;n c&aacute;c tầng phải được đưa xuống v&agrave; tập kết ở một vị tr&iacute; được qu&acirc;y k&iacute;n ở tầng một th&ocirc;ng qua c&aacute;c đường ống k&iacute;n bằng gỗ hoặc bằng nhựa. Sau đ&oacute;, ch&uacute;ng phải được vận chuyển ra ngo&agrave;i c&ocirc;ng trường.</p>\r\n\r\n<p>- Dầu, mỡ của c&aacute;c m&aacute;y thi c&ocirc;ng x&acirc;y dựng kh&ocirc;ng được cho chảy ra m&ocirc;i trường tự nhi&ecirc;n. Phải c&oacute; c&aacute;c biện ph&aacute;p như đậy k&iacute;n can, th&ugrave;ng phuy để đề ph&ograve;ng ch&uacute;ng bị đổ. Kiểm tra thường xuy&ecirc;n vỏ th&ugrave;ng chứa xem c&oacute; bị thủng hay han rỉ kh&ocirc;ng để c&oacute; phương &aacute;n chuyển dầu, mỡ sang th&ugrave;ng kh&aacute;c.</p>\r\n\r\n<p>- Tại c&aacute;c xưởng gia c&ocirc;ng phụ trợ: xưởng mộc, xưởng gia c&ocirc;ng&nbsp; cốt th&eacute;p,.... cần được dọn dẹp sau mỗi ca l&agrave;m việc.</p>\r\n\r\n<p>- Tại văn ph&ograve;ng l&agrave;m việc: Cần thường xuy&ecirc;n lau ch&ugrave;i sạch sẽ, tạo kh&ocirc;ng gian l&agrave;m việc tốt cho c&aacute;n bộ.</p>\r\n\r\n<p>- Tr&ecirc;n c&ocirc;ng trường phải c&oacute; c&aacute;c khu vệ sinh ri&ecirc;ng cho nam, nữ. Ngo&agrave;i ra phải c&oacute; c&aacute;c khu vực tắm rửa cho c&ocirc;ng nh&acirc;n v&agrave; c&aacute;n bộ sau mỗi ca l&agrave;m việc.</p>', '240_F_189368283_BBhxKAcoSHhVRsjRR255mpCd9Dqsqf1s(93)(612021-09-0951).jpg', 've sinh cong trong, Vệ sinh công trường', 1, 14, '2021-09-09'),
(17, 'Chuẩn bị thi công', 'chuan-bi-thi-cong', '1. Sắp xếp nhân sự, dụng cụ và hóa chất\r\n2. Số lượng nhân viên vệ sinh\r\n3. Trang thiết bị máy móc\r\n4. Hóa chất', '<ol>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><strong><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Sắp xếp nh&acirc;n sự, dụng cụ v&agrave; h&oacute;a chất</span></span></strong></span></span></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Sau khi đ&atilde; khảo s&aacute;t cụ thể về hiện trạng c&ocirc;ng tr&igrave;nh v&agrave; y&ecirc;u cầu của kh&aacute;ch h&agrave;ng, ch&uacute;ng ta sẽ đưa ra c&aacute;c ti&ecirc;u ch&iacute; cụ thể như sau:</span></span></p>\r\n\r\n<ol start=\"2\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><strong><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Số lượng nh&acirc;n vi&ecirc;n vệ sinh</span></span></strong></span></span></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Với thời gian v&agrave; y&ecirc;u cầu vệ sinh của kh&aacute;ch h&agrave;ng, t&iacute;nh to&aacute;n được khối lượng c&ocirc;ng việc d&agrave;nh cho nh&acirc;n vi&ecirc;n của m&igrave;nh. Từ đ&oacute; đưa ra số lượng nh&acirc;n vi&ecirc;n ph&ugrave; hợp c&acirc;n đối sao cho hợp l&yacute; nhất. Tr&aacute;nh trường hợp dư thừa nh&acirc;n vi&ecirc;n kh&ocirc;ng cần thiết hoặc thiếu nh&acirc;n vi&ecirc;n khiến chất lượng c&ocirc;ng tr&igrave;nh của kh&aacute;ch h&agrave;ng bị ảnh hưởng do l&agrave;m qu&aacute; vội v&agrave;ng dễ bị thiếu s&oacute;t.</span></span></p>\r\n\r\n<ol start=\"3\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><strong><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Trang thiết bị m&aacute;y m&oacute;c</span></span></strong></span></span></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Trong qu&aacute; tr&igrave;nh khảo s&aacute;t bạn sẽ c&oacute; được diện t&iacute;ch s&agrave;n, loại s&agrave;n, mức độ bẩn của c&ocirc;ng tr&igrave;nh từ đ&oacute; đưa ra c&oacute; cần thiết d&ugrave;ng đến m&aacute;y ch&agrave; s&agrave;n hay kh&ocirc;ng. N&ecirc;n sử dụng m&aacute;y h&uacute;t bụi cầm tay hay loại 2 m&ocirc; tơ hoặc 3 m&ocirc; tơ.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Đối với c&aacute;c c&ocirc;ng tr&igrave;nh c&oacute; nhiều vị tr&iacute; tr&ecirc;n cao (quạt trần, đ&egrave;n tường, n&oacute;c tủ đồ,&hellip;) cần l&agrave;m sạch bạn sẽ cần ghế hoặc thang để c&ocirc;ng việc vệ sinh diễn ra tốt v&agrave; nhanh hơn.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Ngo&agrave;i ra c&ograve;n c&aacute;c dụng cụ cơ bản kh&aacute;c như dao trổ, c&acirc;y lau nh&agrave;, khăn sạch, bộ lau k&iacute;nh chuy&ecirc;n dụng,&hellip;</span></span></p>\r\n\r\n<ol start=\"4\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><strong><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">H&oacute;a chất</span></span></strong></span></span></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">H&oacute;a chất rất quan trọng trong qu&aacute; tr&igrave;nh vệ sinh c&ocirc;ng nghiệp, việc lựa chọn h&oacute;a chất như thế n&agrave;o cho ph&ugrave; hợp đ&ograve;i hỏi người khảo s&aacute;t phải c&oacute; kinh nghiệm. V&iacute; dụ: Sơn, keo ta c&oacute; thể sử dụng xăng thơm, bồn cầu th&igrave; sử dụng Vim, xi măng th&igrave; sử dụng h&oacute;a chất G200 hoặc Axit HCL, chất tẩy sơn, Q-Inox, h&oacute;a chất tẩy ố v..v&hellip;</span></span></p>', '240_F_266541166_eFwh9j94ID5fEfoMOEeEW8G4OToADrih_1608738953(37)(202021-09-0914).jpg', 've sinh cong nghiep, quy trinh ve sinh cong nghiep, vệ sinh công nghiệp, quy trình vệ sinh công nghiệp', 1, 9, '2021-09-09'),
(18, 'Thi công vệ sinh công nghiệp', 'thi-cong-ve-sinh-cong-nghiep', '1. Quy trình vệ sinh công nghiệp phần thô.\r\n2. Quy trình vệ sinh công nghiệp phần tinh.\r\n3. Kiểm soát chất lượng.\r\n4. Bàn giao công trình và nhận thanh toán', '<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Sau khi đ&atilde; chuẩn bị được nh&acirc;n vi&ecirc;n, trang thiết bị, h&oacute;a chất cần thiết cho một c&ocirc;ng tr&igrave;nh cần vệ sinh. Ch&uacute;ng ta sẽ tiến h&agrave;nh l&agrave;m vệ sinh với một quy tr&igrave;nh chuẩn với nguy&ecirc;n tắc lu&ocirc;n l&agrave;m sạch từ tr&ecirc;n xuống dưới v&agrave; từ trong ra ngo&agrave;i. Với 3 qu&aacute; tr&igrave;nh cơ bản đ&oacute; l&agrave;&nbsp;vệ sinh th&ocirc;, vệ sinh tinh v&agrave; kiểm so&aacute;t chất lượng, Ch&uacute;ng ta cũng n&ecirc;n lưu &yacute;&nbsp;chia nh&acirc;n vi&ecirc;n theo tổ đội&nbsp;để l&agrave;m việc tốt hơn.</span></span></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><strong><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Quy tr&igrave;nh vệ sinh c&ocirc;ng nghiệp phần th&ocirc;</span></span></strong></span></span></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Bước 1:</strong>&nbsp;Sắp xếp c&aacute;c đồ nội thất trong nh&agrave; sao cho c&ocirc;ng việc vệ sinh diễn ra thuận lợi nhất, c&oacute; nhiều lựa chọn sắp xếp. Nhưng thường ph&acirc;n ra l&agrave;m 2 loại đ&oacute; l&agrave;: dọn dẹp đồ gọn l&agrave;m sạch từng khu vực sau đ&oacute; lại chuyển đồ nội thất lại, lựa chọn thứ 2 l&agrave; l&agrave;m sạch tại chỗ m&agrave; kh&ocirc;ng di chuyển qu&aacute; nhiều đồ nội thất.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Bước 2:</strong>&nbsp;Thu gom c&aacute;c loại r&aacute;c thải, vật liệu thừa trong c&ocirc;ng tr&igrave;nh kh&ocirc;ng cần thiết như: T&uacute;i nilon, b&igrave;a cotton, gạch, gỗ vụn, nhựa, bao b&igrave;,&hellip; Bỏ v&agrave;o nơi để r&aacute;c đ&uacute;ng quy định hoặc tập kết v&agrave;o một khu vực để chuyển đi.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Bước 3:</strong>&nbsp;Tiến h&agrave;nh h&uacute;t bụi sạch sẽ từ tr&ecirc;n xuống dưới, từ trong ra ngo&agrave;i to&agrave;n bộ c&ocirc;ng tr&igrave;nh, lưu &yacute; mức độ sạch bụi sau khi h&uacute;t xong phải sạch từ 80% trở l&ecirc;n.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Bước 4:</strong>&nbsp;Tiến h&agrave;nh xử l&yacute; c&aacute;c vết bẩn kh&oacute; sạch như keo, sơn, xi măng tr&ecirc;n to&agrave;n bộ c&ocirc;ng tr&igrave;nh sao cho c&aacute;c vết bẩn c&ograve;n lại chỉ bao gồm bụi hoặc c&aacute;c vết dễ l&agrave;m sạch.</span></span></p>\r\n\r\n<ol start=\"2\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><strong><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Quy tr&igrave;nh vệ sinh c&ocirc;ng nghiệp phần tinh</span></span></strong></span></span></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Vệ sinh tinh l&agrave; bước thứ 2 trong quy tr&igrave;nh vệ sinh c&ocirc;ng nghiệp, ở giai đoạn n&agrave;y ch&uacute;ng ta sẽ l&agrave;m sạch tổng thể từ A &ndash; Z. Trong giai đoạn n&agrave;y ch&uacute;ng ta cũng c&oacute; nhiều lựa chọn l&agrave;m sạch đ&oacute; l&agrave; vệ sinh cuốn chiếu l&agrave;m sạch từng ph&ograve;ng 1 rồi đ&oacute;ng cửa. Lựa chọn kh&aacute;c đ&oacute; l&agrave; vệ sinh từng h&agrave;ng mục một như k&iacute;nh, tường, đồ nội thất, s&agrave;n,&hellip;.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Bước 1:</strong>&nbsp;Ph&acirc;n chia nh&acirc;n vi&ecirc;n theo chuy&ecirc;n m&ocirc;n, ai giỏi việc g&igrave; th&igrave; chịu tr&aacute;ch nhiệm ch&iacute;nh với c&ocirc;ng việc đ&oacute; như: Lau k&iacute;nh, l&agrave;m sạch nh&agrave; vệ sinh, lau đồ nội thất, l&agrave;m sạch s&agrave;n,&hellip;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Bước 2:</strong>&nbsp;L&agrave;m sạch sẽ từng ph&ograve;ng một với chất lượng đạt y&ecirc;u cầu của kh&aacute;ch h&agrave;ng sau đ&oacute; đ&oacute;ng cửa chuyển sang khu vực kh&aacute;c để l&agrave;m sạch.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong>Bước 3:</strong>&nbsp;L&agrave;m sạch tổng thể to&agrave;n bộ c&ocirc;ng tr&igrave;nh từ tr&ecirc;n xuống dưới v&agrave; từ trong ra ngo&agrave;i một c&aacute;ch sạch sẽ nhất.</span></span></p>\r\n\r\n<ol start=\"3\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><strong><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Kiểm so&aacute;t chất lượng</span></span></strong></span></span></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Mỗi c&ocirc;ng tr&igrave;nh cần c&oacute; một gi&aacute;m s&aacute;t vệ sinh, sau khi nh&acirc;n vi&ecirc;n đ&atilde; th&ocirc;ng b&aacute;o ho&agrave;n th&agrave;nh c&ocirc;ng việc vệ sinh, bạn cần phải đi kiểm so&aacute;t lại một lượt c&ocirc;ng tr&igrave;nh xem đ&atilde; đạt y&ecirc;u cầu chất lượng hay chưa, nếu c&ograve;n thiếu x&oacute;t g&igrave; cần phải l&agrave;m sạch lại ngay sao cho đạt y&ecirc;u cầu của chủ nh&agrave;.</span></span></p>\r\n\r\n<ol start=\"4\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Arial,sans-serif\"><strong><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">B&agrave;n giao c&ocirc;ng tr&igrave;nh v&agrave; nhận thanh to&aacute;n</span></span></strong></span></span></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Sau khi kh&aacute;ch h&agrave;ng đ&atilde; kiểm tra to&agrave;n bộ c&ocirc;ng tr&igrave;nh, mọi thứ đ&atilde; đạt chất lượng, gi&aacute;m s&aacute;t sẽ k&yacute; nhận b&agrave;n giao c&ocirc;ng tr&igrave;nh tới chủ nh&agrave; hoặc người c&oacute; tr&aacute;ch nhiệm được chủ nh&agrave; ủy quyền.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Tiếp theo sẽ nhận thanh to&aacute;n như hợp đồng đ&atilde; k&yacute; hoặc thỏa thuận ban đầu, nếu c&oacute; bất kỳ c&acirc;u hỏi n&agrave;o từ ph&iacute;a chủ nh&agrave; sẽ giải đ&aacute;p, cuối c&ugrave;ng kết th&uacute;c hợp đồng đ&atilde; ho&agrave;n th&agrave;nh từ 2 ph&iacute;a.</span></span></p>', '240_F_241629658_wpbGGy5M06J1qVs8eMzRuVeSC8BGYznL_1608738906(45)(352021-09-0943).jpg', 've sinh cong nghiep, quy trinh ve sinh cong nghiep, vệ sinh công nghiệp, quy trình vệ sinh công nghiệp', 1, 12, '2021-09-10'),
(20, 'Dịch vụ chăm sóc cỏ nhung', 'dich-vu-cham-soc-co-nhung', '1. Chuẩn bị bề mặt trồng cỏ\r\n2. Chuẩn bị cỏ nhung Nhật\r\n3. Cách chăm sóc cây cỏ nhung nhật.', '<p style=\"margin-left:11px; margin-right:11px; text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><em><span style=\"color:black\">1. Chuẩn bị bề mặt trồng cỏ:</span></em></strong></span></span></p>\r\n\r\n<p style=\"margin-left:19px; margin-right:11px; text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">- Trước ti&ecirc;n l&agrave;m sạch cỏ dại, tưới nước thật nhiều v&agrave; đầm kỹ để đất kh&ocirc;ng c&ograve;n l&uacute;n.<br />\r\n- L&agrave;m đất tơi xốp lớp mặt, tạo hệ thống tho&aacute;t nước tốt..</span></span></span></p>\r\n\r\n<p style=\"margin-right:11px; text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">-&nbsp; Rải lớp ph&acirc;n hỗn hợp (ph&acirc;n b&ograve;+tro trấu+ m&ugrave;n cưa+đất m&ugrave;n) d&agrave;y mỏng t&ugrave;y đất nền xấu hay tốt.</span></span></span></p>\r\n\r\n<p style=\"margin-right:11px; text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">- Sau đ&oacute; d&ugrave;ng c&agrave;o trộn lẫn ph&acirc;n với lớp đất nền.</span></span></span></p>\r\n\r\n<p style=\"margin-right:11px; text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><em><span style=\"color:black\">2. Chuẩn bị cỏ nhung nhật:</span></em></strong></span></span></p>\r\n\r\n<p style=\"margin-right:11px; text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><em><span style=\"color:black\">*Trồng cỏ nhung Nhật bằng trải thảm:</span></em></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Bước 1: Chuẩn bị xong bề mặt đất m&agrave;u mỡ, bạn trải th&ecirc;m lớp tro trấu l&ecirc;n tr&ecirc;n, xới tơi xốp. Nếu đất c&ograve;n kh&ocirc; cằn hay nhiều ph&egrave;n th&igrave; bạn đổ th&ecirc;m ph&acirc;n l&acirc;n.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Bước 2: Trải thảm cỏ nhung theo quy c&aacute;ch 0,5 x 1m, bạn trải đều tay nhẹ nh&agrave;ng sao cho c&aacute;c c&acirc;y kh&iacute;t v&agrave;o nhau. Tốt hơn hết bạn n&ecirc;n d&ugrave;ng thước đo chuẩn x&aacute;c k&iacute;ch thước v&ugrave;ng đất cần thi c&ocirc;ng cỏ. C&aacute;c vị tr&iacute; cong, gấp kh&uacute;c th&igrave; trải xong c&oacute; thể d&ugrave;ng k&eacute;o cắt c&aacute;c phần thừa ra cho đẹp mắt.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Bước 3: Trải thảm cỏ nhung Nhật xong bạn d&ugrave;ng v&ograve;i phun nước đẫm để cho rễ c&acirc;y b&aacute;m chắc v&agrave;o đất để lấy dinh dưỡng. Sau đ&oacute; bạn d&ugrave;ng đầm gỗ nhẹ nh&agrave;ng dặm v&agrave;o đ&aacute;m cỏ để cỏ b&aacute;m s&acirc;u hơn.</span></span></span></p>\r\n\r\n<p style=\"margin-right:11px; text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><em><span style=\"color:black\">*Trồng cỏ nhung nhật bằng c&aacute;ch cấy:</span></em></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Bước 1: Sau khi&nbsp;<strong>l&agrave;m đất trồng cỏ nhung nhật</strong>&nbsp;th&igrave; bạn rải th&ecirc;m lớp tro trấu b&ecirc;n tr&ecirc;n. Đối với đất trồng bị nhiễm ph&egrave;n nhiều th&igrave; bạn n&ecirc;n b&oacute;n th&ecirc;m ph&acirc;n l&acirc;n để c&acirc;n bằng chất.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Bước 2: Bạn xếp cỏ nhung đất, x&eacute; nhỏ c&aacute;c cụm lớn th&agrave;nh từng miếng c&oacute; đường k&iacute;nh từ 5-8cm. Tiếp theo bạn trải đều c&aacute;c miếng cỏ l&ecirc;n vị tr&iacute; x&aacute;c định l&agrave;m cỏ, khoảng c&aacute;ch cỏ đảm bảo t&iacute;nh thẩm mỹ.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Bước 3: Sau khi trải thảm xong, bạn để &yacute; lại lượt nữa xem s&acirc;n vườn đ&atilde; đẹp chưa. Sau đ&oacute; th&igrave; tưới nước l&ecirc;n to&agrave;n bộ bề mặt thảm, lấy đầm gỗ nhấn nhẹ v&agrave;o thảm để rễ cỏ b&aacute;m chặt v&agrave;o đất.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Theo<strong>&nbsp;kinh nghiệm trồng cỏ nhung nhật,&nbsp;</strong>nếu bạn trồng cỏ với phương ph&aacute;p x&eacute; th&igrave; n&ecirc;n trồng d&agrave;y, khi ch&uacute;ng lớn lan nhanh sẽ đẹp hơn. Trồng c&acirc;y khoảng c&aacute;ch xa, thưa qu&aacute; th&igrave; c&acirc;y mọc theo chỏm kh&ocirc;ng đều n&ecirc;n mất vẻ đẹp thẩm mỹ. Sau khi trồng c&acirc;y tầm 1 th&aacute;ng sau nếu bạn chăm s&oacute;c kỹ lưỡng th&igrave; cỏ sẽ mọc tươi tốt, xanh mướt. Nếu cỏ trồi l&ecirc;n cao qu&aacute; th&igrave; bạn dặm lại cho dễ b&aacute;m đất.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"color:black\">3. C&aacute;ch chăm s&oacute;c c&acirc;y cỏ nhung nhật:</span></strong></span></span></p>\r\n\r\n<p style=\"margin-right:11px; text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><em><span style=\"color:black\">3.1 Th&aacute;ng đầu ti&ecirc;n:</span></em></strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Khi bạn thực hiện đ&uacute;ng theo&nbsp;<strong>hướng dẫn trồng cỏ nhung nhật</strong>&nbsp;th&igrave; qu&aacute; tr&igrave;nh sinh trưởng của c&acirc;y sẽ ổn định. Ở th&aacute;ng đầu ti&ecirc;n bạn cần lưu &yacute; chăm s&oacute;c cẩn thận để c&acirc;y lớn đều, kh&ocirc;ng mất d&aacute;ng. Đảm bảo đất đủ chất dinh dưỡng nu&ocirc;i c&acirc;y, tưới nước thường xuy&ecirc;n. X&acirc;y dựng đường tho&aacute;t nước để thảm cỏ kh&ocirc;ng bị ngập &uacute;ng l&acirc;u dễ bị hỏng.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Bạn b&oacute;n ph&acirc;n cho thảm cỏ chia th&agrave;nh 2 đợt, đợt 1 l&agrave; khoảng 1 tuần sau khi l&agrave;m với 2kg DAP/100m2. Sau khoảng 25 ng&agrave;y th&igrave; bạn b&oacute;n th&ecirc;m 2kg ph&acirc;n NPK/100m2. Bạn n&ecirc;n để &yacute; tỉa cỏ nếu thấy thảm ph&aacute;t triển kh&ocirc;ng đồng đều, nhỏ cỏ dại. &nbsp;</span></span></span></p>\r\n\r\n<p style=\"margin-right:11px; text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><em><span style=\"color:black\">3.2 Những th&aacute;ng sau:</span></em></strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:black\">Bạn thực hiện việc tưới nước cho thảm cỏ đều đặn, ch&uacute; &yacute; kh&ocirc;ng để c&acirc;y kh&ocirc; h&eacute;o hay &uacute;ng nước. B&oacute;n ph&acirc;n định kỳ với lượng vừa phải đất đủ chất nu&ocirc;i c&acirc;y tươi tốt, cắt tỉa c&acirc;y. Tr&aacute;nh việc qu&aacute; nhiều người dẫm đạp mạnh l&ecirc;n thảm cỏ l&agrave;m dập v&agrave; g&atilde;y cỏ ho&agrave;n to&agrave;n. Đồng thời, bạn n&ecirc;n ngăn ngừa c&aacute;c loại s&acirc;u bệnh với thuốc Bassa, Fenbis, Vibasu 10H.</span></span></span></p>', 'Untitled(38)(30)(702021-09-0999).png', 'cham soc co nhung, dich vu cham soc co nhung, chăm sóc cỏ nhung Nhật, dịch vụ chăm sóc cỏ nhung', 1, 34, '2021-09-10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_company_profile`
--
ALTER TABLE `tbl_company_profile`
  ADD PRIMARY KEY (`company_profile_id`);

--
-- Chỉ mục cho bảng `tbl_manage_slider`
--
ALTER TABLE `tbl_manage_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Chỉ mục cho bảng `tbl_post_about_us`
--
ALTER TABLE `tbl_post_about_us`
  ADD PRIMARY KEY (`post_about_us_id`);

--
-- Chỉ mục cho bảng `tbl_post_criteria`
--
ALTER TABLE `tbl_post_criteria`
  ADD PRIMARY KEY (`post_criteria_id`);

--
-- Chỉ mục cho bảng `tbl_post_news`
--
ALTER TABLE `tbl_post_news`
  ADD PRIMARY KEY (`post_news_id`);

--
-- Chỉ mục cho bảng `tbl_post_project`
--
ALTER TABLE `tbl_post_project`
  ADD PRIMARY KEY (`post_project_id`);

--
-- Chỉ mục cho bảng `tbl_post_service`
--
ALTER TABLE `tbl_post_service`
  ADD PRIMARY KEY (`post_service_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_company_profile`
--
ALTER TABLE `tbl_company_profile`
  MODIFY `company_profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_manage_slider`
--
ALTER TABLE `tbl_manage_slider`
  MODIFY `slider_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `tbl_post_about_us`
--
ALTER TABLE `tbl_post_about_us`
  MODIFY `post_about_us_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_post_criteria`
--
ALTER TABLE `tbl_post_criteria`
  MODIFY `post_criteria_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tbl_post_news`
--
ALTER TABLE `tbl_post_news`
  MODIFY `post_news_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tbl_post_project`
--
ALTER TABLE `tbl_post_project`
  MODIFY `post_project_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbl_post_service`
--
ALTER TABLE `tbl_post_service`
  MODIFY `post_service_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
