-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 06:07 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edustage_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_acadmies`
--

CREATE TABLE `about_acadmies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_acadmies`
--

INSERT INTO `about_acadmies` (`id`, `title`, `description`, `media`, `status`, `created_at`, `updated_at`) VALUES
(17, 'نشأتنا', '<ol>\r\n	<li>\r\n	<p><span dir=\"rtl\">بناء جسر من الثقة والأمان بيننا وبين أولياء الأمور في مصر والوطن العربي بفضل جودة خدماتنا ومصداقيتنا.</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span dir=\"rtl\">زيادة عدد الطلاب المنضمين لأكاديمية EduStage في العام الدراسي &nbsp;2017-2018 عن العام الدراسي الطلبه من العام 2016-2017 بنسبة 60 %.</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span dir=\"rtl\">زيادة نسبة عدد الطلاب المنضمين في العام الدراسي الجديد 2018-2019 إلى 200%.</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span dir=\"rtl\">الوصول إلى 25 دولة في مختلف العالم، وبناء ثقة متبادلة مع أولياء الأمور والطلاب دوليًا.</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span dir=\"rtl\">الوصول إلى أكبر فئة من الطلاب المصريين المقيمين بالخارج والمفتقدين للخبرات التعليمية، وتقديم أفضل الخدمات إليهم.</span></p>\r\n	</li>\r\n</ol>', '616.mexico_flag-2560x1600.jpg|816.paris_eiffel_tower-2560x1440.jpg', 1, NULL, NULL),
(18, 'من نحن', '<p><span dir=\"rtl\">أكاديمية&nbsp;<strong>EduStage</strong>&nbsp;هي مشروع تعليمي متخصص في التعليم عن بعد من خلال الإنترنت.<br />\r\nانطلقت الأكاديمية بشكل رسمي في مايو 2016 وبدأ العمل الفعلي في أغسطس 2016 قُبيل العام الدراسي 2016-2017</span></p>\r\n\r\n<p><br />\r\n<span dir=\"rtl\"><strong>نشاط المشروع:</strong></span></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><span dir=\"rtl\">تدريس المناهج الدراسية عن بعد، من خلال فصول تعليمية افتراضية، تجمع بين المعلم والطالب.</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span dir=\"rtl\">شرح جميع المناهج الدراسية الخاصة بالتعليم المصري العام والأزهري واللغات والإنترناشيونال.</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span dir=\"rtl\">تدريس جميع مناهج الدول العربية على يد خبراء ومعلمين محترفين.</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span dir=\"rtl\">تدريس المناهج الدراسية للمراحل من الإبتدائية حتى الثانوية ويوجد قسم خاص بتأسيس الأطفال مرحلة الـ KG.</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span dir=\"rtl\">تدريس بعض العلوم الدينية مثل علوم الشريعة للأزهريين والقرآن والتجويد.</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span dir=\"rtl\">تقديم المحتوى التعليمي بأفضل الطرق المتطورة تكنولوجيًا.</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span dir=\"rtl\">تقديم كورسات صيفية لتنمية مهارات الطالب.</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span dir=\"rtl\">دمج التعليم التزامني &ldquo;التعليم داخل الفصول&rdquo;، مع التعليم اللاتزامني الذي يعتمد على التدريس عن بُعد.</span></p>\r\n	</li>\r\n</ul>\r\n\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: 22px; top: 69.3906px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '146.abu_simbel_temples_egypt-1920x1080.jpg', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nat_id` int(11) DEFAULT NULL,
  `birth_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'df_image.png',
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` tinyint(4) NOT NULL DEFAULT 1,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `address`, `nat_id`, `birth_date`, `image`, `note`, `gender`, `status`, `created_at`, `updated_at`) VALUES
(14, '22', 'cairo el mokatem', NULL, NULL, 'df_image.png', NULL, 1, 1, '2023-06-10 05:32:37', '2023-06-10 05:32:37');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_13_150445_create_product_units_table', 1),
(6, '2023_06_06_194750_create_admins_table', 1),
(7, '2023_06_08_091035_add_new_columns_to_users_table', 1),
(9, '2023_06_11_090334_create_table_prices_table', 2),
(10, '2023_06_11_122153_create_packages_tables_table', 2),
(11, '2023_06_11_123740_create_lessons_table_arabic_and_langs_table', 2),
(12, '2023_06_10_135458_create_settings_table', 3),
(13, '2023_06_21_101921_create_about_acadmies_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `app_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ar',
  `footer_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accept_cookies` tinyint(1) NOT NULL DEFAULT 0,
  `logo_website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_dashboard` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fav_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_driver` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `host` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `encryption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linked_in` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `app_name`, `description`, `lang`, `footer_text`, `address`, `city`, `zip_code`, `email`, `phone1`, `phone2`, `accept_cookies`, `logo_website`, `logo_dashboard`, `fav_icon`, `mail_driver`, `from`, `to`, `host`, `port`, `encryption`, `username`, `password`, `facebook`, `twitter`, `linked_in`, `google`, `tiktok`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'Edustage new', 'منصه تعليم اونلاين ggg', 'en', 'جميع الحقوق محفوظه ( فريد نجم ) ggg', 'النزهه 2 شارع 27 ggggg', 'القاهرهgggg', 'gggggg', 'faridnegm44@gmail.comggggg', '010127757045555', '555555555', 1, '2.قيمه الاشتراكوجدول الحصص.jpg', '170.IMG20230303142158.jpg', '262.IMG20230303152508.jpg', 'mailgun', 'from; wwwwww;', 'towwwwwww', 'hostwwwwww', 'portwwwwwww', 'encryptionwwwwwwww', 'username..wwwwww', NULL, 'facebookwwww', 'twitterwwwwww', 'linked_inwwwww', 'googlewwww', 'tiktokwwww', 'youtubewwww', NULL, '2023-06-19 05:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `table_prices`
--

CREATE TABLE `table_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_room_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `all_mat_heading_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `all_mat_body_desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `all_mat_body_desc_status` tinyint(4) NOT NULL DEFAULT 0,
  `all_mat_img_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `all_mat_img_desc_status` tinyint(4) NOT NULL DEFAULT 1,
  `all_mat_video_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `all_mat_video_desc_status` tinyint(4) NOT NULL DEFAULT 0,
  `all_mat_footer_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `all_mat_counter_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `all_mat_counter_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `all_mat_counter_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `one_mat_heading_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `one_mat_table_prices` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `one_mat_body_desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `one_mat_counter_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `one_mat_counter_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `one_mat_counter_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arabic_lessons_time` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `english_lessons_time` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_prices`
--

INSERT INTO `table_prices` (`id`, `class_room_name`, `all_mat_heading_desc`, `all_mat_body_desc`, `all_mat_body_desc_status`, `all_mat_img_desc`, `all_mat_img_desc_status`, `all_mat_video_desc`, `all_mat_video_desc_status`, `all_mat_footer_desc`, `all_mat_counter_heading`, `all_mat_counter_from`, `all_mat_counter_to`, `one_mat_heading_desc`, `one_mat_table_prices`, `one_mat_body_desc`, `one_mat_counter_heading`, `one_mat_counter_from`, `one_mat_counter_to`, `arabic_lessons_time`, `english_lessons_time`, `created_at`, `updated_at`) VALUES
(15, 'الأول الابتدائي', 'باقة كل المواد تسمح لك بتوفير مبلغ 628 جنيه عن السعر الاصلي', '<h2><strong><span dir=\"rtl\">زمن الحصة 60 دقيقة</span></strong></h2>\r\n\r\n<ol>\r\n	<li>\r\n	<pre>\r\n<strong><span dir=\"rtl\">الاستمتاع بالخصم الإضافي لباقة كل المواد مشروط بالاستمرار طوال العام الدراسي في جميع المواد</span></strong></pre>\r\n	</li>\r\n	<li>\r\n	<pre>\r\n<strong><span dir=\"rtl\">في حالة انسحاب الطالب من مادة واحدة على الاقل، يطبق للطالب خصومات باقة الاشتراك بالمادة طوال العام الدراسي</span></strong></pre>\r\n	</li>\r\n	<li>\r\n	<pre>\r\n<strong><span dir=\"rtl\">تستطيع الاستمتاع بقيمة الخصم طول العام الدراسي في حالة الاشتراك المبكر قبل انتهاء فتره العرض</span></strong></pre>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 1, '1686990213.123-ب.png', 1, '1686990213.أن تكون رجل هو أن تفعل ما تقول - فيديو تحفيزي   BDM.mp4', 1, NULL, 'مده الخصم اسبوع', '2023-06-17T11:14', '2023-06-24T11:14', 'الاشتراك هنا بالماده الواحده فقط', '<table align=\"center\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"row\"><strong>المادة</strong></th>\r\n			<th scope=\"col\"><strong>عدد الحصص</strong></th>\r\n			<th scope=\"col\"><strong>قيمه الاشتراك قبل الخصم</strong></th>\r\n			<th scope=\"col\"><strong>قيمه الاشتراك بعد الخصم</strong></th>\r\n			<th scope=\"col\"><strong>مبلغ التوفير عن السعر الأصلي</strong></th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">عربي</th>\r\n			<td>8</td>\r\n			<td>400</td>\r\n			<td>350</td>\r\n			<td>50</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Math</th>\r\n			<td>10</td>\r\n			<td>400</td>\r\n			<td>370</td>\r\n			<td>30</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">English</th>\r\n			<td>7</td>\r\n			<td>300</td>\r\n			<td>260</td>\r\n			<td>40</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">علوم</th>\r\n			<td>11</td>\r\n			<td>350</td>\r\n			<td>300</td>\r\n			<td>50</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '<h2><strong><big>&nbsp;زمن الحصة 60 دقيقة</big></strong></h2>\r\n\r\n<pre>\r\n<span dir=\"rtl\"><strong><big><ins>يمكنك الاشتراك في مادة واحدة على الأقل</ins>\r\n<ins>تستطيع الاستمتاع بقيمة الخصم طول العام الدراسي في حالة الاشتراك المبكر قبل انتهاء فترة العرض</ins></big></strong></span></pre>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: 139px; top: 111.188px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', NULL, '2023-06-01T11:19', '2023-06-17T11:19', '<table align=\"center\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"row\">&nbsp;</th>\r\n			<th scope=\"col\">من 3 الي 4</th>\r\n			<th scope=\"col\">من 4.15 الي 5.15</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">السبت</th>\r\n			<td>إكتسف</td>\r\n			<td>connect</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">الأحد</th>\r\n			<td>لغه عربيه</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">الإثنين</th>\r\n			<td>اكتشف</td>\r\n			<td>حساب</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">الثلاثاء</th>\r\n			<td>&nbsp;</td>\r\n			<td>لغه عربيه</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">الأربعاء</th>\r\n			<td>connect</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">الخميس</th>\r\n			<td>&nbsp;</td>\r\n			<td>Math</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '<table align=\"center\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"row\">&nbsp;</th>\r\n			<th scope=\"col\">من 3 الي 4</th>\r\n			<th scope=\"col\">من 4.15 الي 5.15</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">السبت</th>\r\n			<td>علوم</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">الأحد</th>\r\n			<td>أحياء</td>\r\n			<td>English</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">الإثنين</th>\r\n			<td>&nbsp;</td>\r\n			<td>حساب</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">الثلاثاء</th>\r\n			<td>&nbsp;</td>\r\n			<td>لغه عربيه</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">الأربعاء</th>\r\n			<td>connect</td>\r\n			<td>France</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">الخميس</th>\r\n			<td>دراسات</td>\r\n			<td>Math</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '2023-06-17 05:23:33', '2023-06-17 05:26:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_lang` tinyint(4) DEFAULT NULL,
  `user_theme` tinyint(4) DEFAULT NULL,
  `last_login_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `user_name`, `user_phone`, `user_role`, `user_lang`, `user_theme`, `last_login_time`) VALUES
(22, 'farid negm', 'faridnegm44@gmail.com', NULL, '$2y$10$cPxnIpWw.jTNgVl0G1.WiuUpB.J1Rq2L1bXyfLZww078RipgDpZSe', NULL, '2023-06-10 05:32:36', NULL, 'ahmed@gmail.com', '01117903055', '0', 1, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_acadmies`
--
ALTER TABLE `about_acadmies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_prices`
--
ALTER TABLE `table_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_acadmies`
--
ALTER TABLE `about_acadmies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_prices`
--
ALTER TABLE `table_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
