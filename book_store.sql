-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 04:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book_image` varchar(255) DEFAULT NULL,
  `book_description` longtext NOT NULL,
  `book_category` varchar(255) DEFAULT NULL,
  `book_type` varchar(255) DEFAULT NULL,
  `book_price` varchar(255) NOT NULL,
  `book_sale_price` varchar(255) DEFAULT NULL,
  `book_author_name` varchar(255) DEFAULT NULL,
  `book_pdf_file` varchar(255) DEFAULT NULL,
  `book_index_file` varchar(255) DEFAULT NULL,
  `book_demo_vedio` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `book_image`, `book_description`, `book_category`, `book_type`, `book_price`, `book_sale_price`, `book_author_name`, `book_pdf_file`, `book_index_file`, `book_demo_vedio`, `created_at`, `updated_at`) VALUES
(1, 'A Clinical Guideline To Surgery', 'book-images/1669838670.png', 'মেডিকেলে তৃতীয় বর্ষের শুরুতে সবার যখন বিভিন্ন ওয়ার্ডে প্লেসমেন্ট চলে তখন History, clinical examination করতে হয় নিয়মিত। এই clinical examination করতে হয় মূল বই অবলম্বনে । তবে মূল বইতে যে ধাপে ধাপে বর্ণনা থাকে ঠিক সরাসরি ওই ধাপ ফলো না করে , সহজ করে সম্পন্ন করার জন্য আমাদের সম্মানিত শিক্ষকগণ শিখিয়ে থাকেন। যেমন ধরেন Examination of Ulcer. এই Short case সম্পন্ন করার জন্য Inspection, Palpation, Percussion এবং ক্ষেত্রবিশেষে Auscultation করতে হয়। তবে শুধুমাত্র যে কোন একটি মূল বই ফলো করে প্রচলিত পরীক্ষা পদ্ধতির গ্রহণযোগ্য উপায়ে করা আসলেই কঠিন । এই জন্য প্রয়োজন হয় বইয়ের কম্বিনেশন । অধিকাংশ ক্ষেত্রেই আমরা ক্লাসে তৈরি করা খাতা অথবা sheet ফলো করেই উপরিউক্ত পদ্ধতি সম্পন্ন করে থাকি। আমরা চেষ্টা করেছি সর্বোচ্চ গ্রহণযোগ্য উপায় কয়েকটি বইয়ের কম্বিনেশনে আপনাদের কাছে উপস্থাপন করার। General Surgery, Eye, ENT এর Short case almost Cover করা আছে।  Long case শুরু হয় History দিয়ে এবং শেষ হয় Management এবং সাথে থাকে Cross & Relevant question.কমন Long case পূর্ণাঙ্গরূপে এই বইতে উপস্থাপন করার চেষ্টা করা হয়েছে। OSPE A clini', 'Clinical', 'Clinical', '420', '200', 'author name', 'book-pdf/1669838670.html', 'book-index-pdf/1669838675.html', 'book-demo-vedio/1669838680.mov', '2022-11-30 14:04:45', '2022-11-30 14:04:45'),
(2, 'Master The Clinical Medicine', 'book-images/1669838912.png', 'আমাদের দেশে examination procedure গুলো গতানুগতিক টেক্সটবুক থেকে অনেকটাই আলাদা, examiner স্যার ম্যাডামগন textbook এর কিছু ক্লিনিক্যাল মেথড accept করেন এবং কিছু কিছু accept করেন না। আবার ইংরেজিতে textbook পড়তে এবং বুঝতে তেমন সমস্যা না হলেও examination procedure গুলো টেক্সটবুক পড়ে বুঝতে আমাদের অনেকেরই বেশ সময় লাগে বা বুঝতে সমস্যা হয়। এজন্য আমরা অনেকেই ওয়ার্ডে স্যারদের বাংলায় বলে বলে দেখানো examination procedure বা classmates দের বাংলায় দেয়া ডেমোর উপর অনেকখানি নির্ভর করি। এই বিষয়টাকে সামনে রেখে আমরা এমনভাবে examination procedure গুলো Present করেছি যেন পড়ে আপনার কাছে মনে হয় আপনি এই মুহূর্তে বাংলায় একটি ডেমো নিলেন। Examination শেখার শুরুতে আমাদের মাথায় যেটা বেশি রাখতে হয় সেটা হলো কোন procedure টা কিভাবে করতে হয় সেটা। কিন্তু পরীক্ষার আগে আমাদের সব procedure শেখা হয়ে যায় কিন্তু চিন্তার বিষয় হয় কেন স্টেপ এক পর কোন স্টেপ, কোন স্টেপ মিস যেন না হয়, কোন স্টেপে স্যার কি প্রশ্ন করতে পারেন সেগুলোর answer রেডি করে রাখা। এই সমস্যার সমাধানে সব procedure পর সম্ভাব্য সব প্রশ্ন উত্তরসহ দেয়া হয়েছে। সব শেষে ‘at a glance’ নামে কুইক রিভিশন পার্ট দেয়া আছে। আমার Clinical Guideline to Surgery বইয়ের প্রেজেন্টেশন দেখে অনেকেই আমাকে বলেছিলেন মেডিসিনের জন্য এমন কিছু করা যায় কি না। বইয়ের জন্য আমি সবচেয়ে বেশি প্রত্যক্ষ ও পরোক্ষ সহযোগিতে পেয়েছি সবার প্রিয় Md Shamol স্যারের। বইয়ের বেশিরভাগ অংশে স্যার নিজে examination করছেন এমন ছবি দেয়া আছে। Medicine এর Short case. এর জন্য আর কোথাও কোনরকম ঘাটাঘাটি করতে হবে না আশা করি।', 'Medicine', 'free', '420', '200', 'author name', 'book-pdf/1669838912.html', 'book-index-pdf/1669838915.html', 'book-demo-vedio/1669838918.mov', '2022-11-30 14:08:43', '2022-11-30 14:08:43'),
(3, 'Master The Medicine', 'book-images/1669839085.png', 'আমাদের দেশে examination procedure গুলো গতানুগতিক টেক্সটবুক থেকে অনেকটাই আলাদা, examiner স্যার ম্যাডামগন textbook এর কিছু ক্লিনিক্যাল মেথড accept করেন এবং কিছু কিছু accept করেন না। আবার ইংরেজিতে textbook পড়তে এবং বুঝতে তেমন সমস্যা না হলেও examination procedure গুলো টেক্সটবুক পড়ে বুঝতে আমাদের অনেকেরই বেশ সময় লাগে বা বুঝতে সমস্যা হয়। এজন্য আমরা অনেকেই ওয়ার্ডে স্যারদের বাংলায় বলে বলে দেখানো examination procedure বা classmates দের বাংলায় দেয়া ডেমোর উপর অনেকখানি নির্ভর করি। এই বিষয়টাকে সামনে রেখে আমরা এমনভাবে examination procedure গুলো Present করেছি যেন পড়ে আপনার কাছে মনে হয় আপনি এই মুহূর্তে বাংলায় একটি ডেমো নিলেন। Examination শেখার শুরুতে আমাদের মাথায় যেটা বেশি রাখতে হয় সেটা হলো কোন procedure টা কিভাবে করতে হয় সেটা। কিন্তু পরীক্ষার আগে আমাদের সব procedure শেখা হয়ে যায় কিন্তু চিন্তার বিষয় হয় কেন স্টেপ এক পর কোন স্টেপ, কোন স্টেপ মিস যেন না হয়, কোন স্টেপে স্যার কি প্রশ্ন করতে পারেন সেগুলোর answer রেডি করে রাখা। এই সমস্যার সমাধানে সব procedure পর সম্ভাব্য সব প্রশ্ন উত্তরসহ দেয়া হয়েছে। সব শেষে ‘at a glance’ নামে কুইক রিভিশন পার্ট দেয়া আছে। আমার Clinical Guideline to Surgery বইয়ের প্রেজেন্টেশন দেখে অনেকেই আমাকে বলেছিলেন মেডিসিনের জন্য এমন কিছু করা যায় কি না। বইয়ের জন্য আমি সবচেয়ে বেশি প্রত্যক্ষ ও পরোক্ষ সহযোগিতে পেয়েছি সবার প্রিয় Md Shamol স্যারের। বইয়ের বেশিরভাগ অংশে স্যার নিজে examination করছেন এমন ছবি দেয়া আছে। Medicine এর Short case. এর জন্য আর কোথাও কোনরকম ঘাটাঘাটি করতে হবে না আশা করি।', 'Medicine', 'free', '420', '200', 'author name', 'book-pdf/1669838950.html', 'book-index-pdf/1669838952.pdf', 'book-demo-vedio/1669838955.mov', '2022-11-30 14:09:20', '2022-11-30 14:11:25'),
(4, 'Master The Chamber ', 'book-images/1669839241.png', 'Dr.Md.Mehedi Hasan Lemon Dr.Mohammad Rasel জিপি প্র‍্যাক্টিস বা আউটডোর ট্রিটমেন্ট দিতে গিয়ে প্রতিনিয়ত আমরা অনেকেই বিভিন্ন সমস্যার সম্মুখীন হয়ে থাকি। কোন সমস্যা নিয়ে রুগী আসলেঃ -হিস্ট্রি কি কি নিতে হবে -এক্সামিনেশন কী করব এবং ফাইন্ডিং কী এক্সপেক্ট করব -ইনভেস্টিগেশন কি দিবো এবং ফাইন্ডিং কি পেতে পারি -ট্রিটমেন্ট কিভাবে দিতে হবে -কোন ওষুধ কোন ডোজ কত দিন দিতে হবে -ফলোআপে কতদিন পর আসতে বলব – উপদেশ কি কি দিব – কখন কোথায় রেফার করতে হবে -কখন হাসপাতালে ভর্তির কথা বলব', 'Master The Chamber ', 'paid', '500', '300', 'author name', 'book-pdf/1669839241.html', 'book-index-pdf/1669839243.html', 'book-demo-vedio/1669839245.mp4', '2022-11-30 14:14:08', '2022-11-30 14:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `thread_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2014_10_28_175635_create_threads_table', 1),
(5, '2014_10_28_175710_create_messages_table', 1),
(6, '2014_10_28_180224_create_participants_table', 1),
(7, '2014_11_03_154831_add_soft_deletes_to_participants_table', 1),
(8, '2014_12_04_124531_add_softdeletes_to_threads_table', 1),
(9, '2017_03_30_152742_add_soft_deletes_to_messages_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2022_09_17_071230_create_sessions_table', 1),
(13, '2022_09_19_104742_create_books_table', 1),
(14, '2022_09_23_041046_add_utype_to_users_table', 1),
(15, '2022_09_24_135144_create_subscriptions_table', 1),
(16, '2022_10_01_045628_add_user_profile_info', 1);

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` int(10) UNSIGNED NOT NULL,
  `thread_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `last_read` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('HN3lTlgMd31JCZWZ6emCoM72TQncF9DSKIPZeSGH', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUEkyWjIwcmxYU0R5RjhRNTZqeDJPRk9kUzJWMHVPUjhGdG1WMUs0USI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1674746793),
('wfeRKiVgfj8TqXNalJBJKxsMOVhBrwX72ajqHVS7', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY0JxdjA3bDZyNU12NnZIclpFdVRRaFNsbURDOExvTHBpUlJlY001eSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9ib29rX2RldGFpbHMvdG9nbGVkaXYuY3NzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1671215985);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subscription_email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `utype` varchar(255) NOT NULL DEFAULT 'STD' COMMENT 'ATR for Admin and STD for User',
  `institution_name` varchar(255) DEFAULT NULL,
  `academic_qualification` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `alternative_email` varchar(255) DEFAULT NULL,
  `alternative_phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `utype`, `institution_name`, `academic_qualification`, `address`, `alternative_email`, `alternative_phone`) VALUES
(1, 'Author', 'author@gmail.com', '01718863771', NULL, '$2y$10$akEmbcWw8miMNqqOIr1aauo6Hh.nZIt5SMmWHWc.sHxwEH5Q2CFHe', NULL, NULL, NULL, NULL, NULL, 'profile-photos/1667710447.jpg', '2022-11-05 22:54:07', '2022-11-05 22:54:07', 'ATR', NULL, NULL, NULL, NULL, NULL),
(2, 'User', 'user@gmail.com', '01718863770', NULL, '$2y$10$GR0yubiQKjrXrmZSpreEp.wkXxRH/NV4rtPdJxgPN1IATNwsVvKBi', NULL, NULL, NULL, NULL, NULL, 'profile-photos/1667711032.png', '2022-11-05 23:03:52', '2022-11-05 23:03:52', 'STD', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
