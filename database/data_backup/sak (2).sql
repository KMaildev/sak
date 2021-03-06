-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2022 at 10:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sak`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `title`, `description`, `photo`, `created_at`, `updated_at`, `category`) VALUES
(1, 'Sewing Training', 'Providing sewing training for workers prior to the departure to Thailand.', 'http://localhost/projects/sak/admin/uploads/files/1.jpg,http://localhost/projects/sak/admin/uploads/files/1.jpg,http://localhost/projects/sak/admin/uploads/files/2.jpg,http://localhost/projects/sak/admin/uploads/files/3.jpg,http://localhost/projects/sak/admin/uploads/files/4.jpg,http://localhost/projects/sak/admin/uploads/files/5.jpg\n', NULL, NULL, 'sak'),
(2, 'Sewing Training', 'Prior to departure, workers are given orientation in order for them to fit into the sending country’s culture , job requirement, rules and regulations.', 'http://localhost/projects/sak/admin/uploads/files/1.jpg,http://localhost/projects/sak/admin/uploads/files/2.jpg,http://localhost/projects/sak/admin/uploads/files/3.jpg,http://localhost/projects/sak/admin/uploads/files/4.jpg,http://localhost/projects/sak/admin/uploads/files/5.jpg\n', NULL, NULL, 'sak'),
(3, 'Sewing Training', 'Providing sewing training for workers prior to the departure to Thailand.', 'http://localhost/projects/sak/admin/uploads/files/1.jpg,http://localhost/projects/sak/admin/uploads/files/1.jpg,http://localhost/projects/sak/admin/uploads/files/2.jpg,http://localhost/projects/sak/admin/uploads/files/3.jpg,http://localhost/projects/sak/admin/uploads/files/4.jpg,http://localhost/projects/sak/admin/uploads/files/5.jpg\r\n', NULL, NULL, 'sak'),
(4, 'Sewing Training', 'Prior to departure, workers are given orientation in order for them to fit into the sending country’s culture , job requirement, rules and regulations.', 'http://localhost/projects/sak/admin/uploads/files/1.jpg,http://localhost/projects/sak/admin/uploads/files/2.jpg,http://localhost/projects/sak/admin/uploads/files/3.jpg,http://localhost/projects/sak/admin/uploads/files/4.jpg,http://localhost/projects/sak/admin/uploads/files/5.jpg\r\n', NULL, NULL, 'sak'),
(5, 'Sewing Training', 'Providing sewing training for workers prior to the departure to Thailand.', 'http://localhost/projects/sak/admin/uploads/files/1.jpg,http://localhost/projects/sak/admin/uploads/files/1.jpg,http://localhost/projects/sak/admin/uploads/files/2.jpg,http://localhost/projects/sak/admin/uploads/files/3.jpg,http://localhost/projects/sak/admin/uploads/files/4.jpg,http://localhost/projects/sak/admin/uploads/files/5.jpg\r\n', NULL, NULL, 'kanji'),
(6, 'Sewing Training', 'Prior to departure, workers are given orientation in order for them to fit into the sending country’s culture , job requirement, rules and regulations.', 'http://localhost/projects/sak/admin/uploads/files/1.jpg,http://localhost/projects/sak/admin/uploads/files/2.jpg,http://localhost/projects/sak/admin/uploads/files/3.jpg,http://localhost/projects/sak/admin/uploads/files/4.jpg,http://localhost/projects/sak/admin/uploads/files/5.jpg\r\n', NULL, NULL, 'kanji'),
(7, 'Sewing Training', 'Providing sewing training for workers prior to the departure to Thailand.', 'http://localhost/projects/sak/admin/uploads/files/1.jpg,http://localhost/projects/sak/admin/uploads/files/1.jpg,http://localhost/projects/sak/admin/uploads/files/2.jpg,http://localhost/projects/sak/admin/uploads/files/3.jpg,http://localhost/projects/sak/admin/uploads/files/4.jpg,http://localhost/projects/sak/admin/uploads/files/5.jpg\r\n', NULL, NULL, 'kanji'),
(8, 'Sewing Training', 'Prior to departure, workers are given orientation in order for them to fit into the sending country’s culture , job requirement, rules and regulations.', 'http://localhost/projects/sak/admin/uploads/files/1.jpg,http://localhost/projects/sak/admin/uploads/files/2.jpg,http://localhost/projects/sak/admin/uploads/files/3.jpg,http://localhost/projects/sak/admin/uploads/files/4.jpg,http://localhost/projects/sak/admin/uploads/files/5.jpg\r\n', NULL, NULL, 'kanji');

-- --------------------------------------------------------

--
-- Table structure for table `carrer_advice`
--

CREATE TABLE `carrer_advice` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_jp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_jp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carrer_advice`
--

INSERT INTO `carrer_advice` (`id`, `title_eng`, `title_jp`, `description_eng`, `description_jp`, `upload_date`, `created_at`, `updated_at`, `photo`) VALUES
(1, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1/1/2022', NULL, NULL, 'http://localhost/projects/sak/admin/uploads/files/1.jpg'),
(2, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1/1/2022', NULL, NULL, 'http://localhost/projects/sak/admin/uploads/files/2.jpg'),
(3, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1/1/2022', NULL, NULL, 'http://localhost/projects/sak/admin/uploads/files/3.jpg'),
(4, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1/1/2022', NULL, NULL, 'http://localhost/projects/sak/admin/uploads/files/4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'asdf', 'asdf', 'asdf', 'asdf', 'sdfasdf', '2022-05-09 10:40:54', '2022-05-09 10:40:54');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `country` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Japan', 'https://photos.smugmug.com/Kyoto/Kyoto-Romantic-Cherry-Blossom-Itinerary/i-dQdfWJD/0/4575e10a/L/shutterstock_1017748132-L.jpg', NULL, NULL),
(2, 'Singapore', 'https://imageio.forbes.com/i-forbesimg/media/lists/places/singapore_416x416.jpg?format=jpg&height=416&width=416&fit=bounds', NULL, NULL),
(3, 'Thailand', 'https://www.planetware.com/wpimages/2020/01/thailand-bangkok-best-temples-wat-arun.jpg', NULL, NULL),
(4, 'Malaysia', 'https://www.traveldailymedia.com/assets/2019/12/malaysia.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enrollment_requests`
--

CREATE TABLE `enrollment_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_job` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_job` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_date_of_issue` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_height` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_class` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrollment_requests`
--

INSERT INTO `enrollment_requests` (`id`, `name`, `education`, `date_of_birth`, `father_job`, `mother_job`, `gender`, `nationality`, `nrc_no`, `passport_date_of_issue`, `weight_height`, `contact_address`, `permanent_address`, `phone_no`, `email`, `entry_number`, `other_class`, `photo`, `code`, `created_at`, `updated_at`) VALUES
(1, 'adsf', 'asdf', 'asdf', 'asdf', 'asdf', 'Male', 'asdf', 'adsf', 'adsf', 'adsf', 'adsf', 'adf', 'asdf', 'asdfasd', 'asdfasdf', '', '', '', '2022-05-09 13:32:01', '2022-05-09 13:32:01'),
(2, 'asdf', 'asdf', 'asfd', 'asdf', 'asfsd', 'Male', 'asdfasd', 'asdf', 'asdfasdf', 'asdf', 'asdfa', 'adsf', 'asdf', NULL, 'adsf', '', '8 copy.jpg', '', '2022-05-09 13:33:00', '2022-05-09 13:33:00'),
(3, 'asdf', 'asdf', 'asdfa', 'sdfa', 'sdf', 'Male', 'asdfasd', 'asdfasdf', 'asdf', 'asdfasd', 'fasdf', 'asdfasdf', 'asdf', 'asdf', 'asdf', '', 'public/photo/og95icqRCYItKDuP4wNvB03nToPrL4DkMHlQOYyw.jpg8 copy.jpg', '', '2022-05-09 13:33:43', '2022-05-09 13:33:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `question_eng` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_eng` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_jp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_jp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question_eng`, `answer_eng`, `question_jp`, `answer_jp`, `created_at`, `updated_at`) VALUES
(1, 'Q. Can any foreigner work in Japan?', 'Foreigners must have a workable status of residence in order to work in Japan. This status of residence can be confirmed with your passport or residence card.\nStatus of residence that allows you to work regardless of occupation or industry Japanese spouse, permanent resident, permanent resident spouse, long- term resident ・ Persons with the above qualifications must work in any occupation Is possible.', 'Q. Can any foreigner work in Japan?', 'Foreigners must have a workable status of residence in order to work in Japan. This status of residence can be confirmed with your passport or residence card. Status of residence that allows you to work regardless of occupation or industry Japanese spouse, permanent resident, permanent resident spouse, long- term resident ・ Persons with the above qualifications must work in any occupation Is possible.', NULL, NULL),
(2, 'Q. Is there a cost to introduce a job?', 'There is no registration fee or referral fee. Please apply with confidence.', 'Q. Is there a cost to introduce a job?', 'There is no registration fee or referral fee. Please apply with confidence.', NULL, NULL),
(3, 'Q. Is it possible to apply in languages ​​other than those listed in the title?', 'Basically, we are recruiting in the language described in the title, but if you contact us, we will check if there is recruitment in other languages, so please contact us.', 'Q. Is it possible to apply in languages ​​other than those listed in the title?', 'Basically, we are recruiting in the language described in the title, but if you contact us, we will check if there is recruitment in other languages, so please contact us.', NULL, NULL),
(4, 'Q. I don\'t know what I want to apply for, but ...', 'You can register from this form and introduce the project that suits the candidate. Please feel free to contact us about what kind of industry you are interested in and the conditions for changing jobs. The recruitment coordinator of Goodman Service will consult with you.', 'Q. I don\'t know what I want to apply for, but ...', 'You can register from this form and introduce the project that suits the candidate. Please feel free to contact us about what kind of industry you are interested in and the conditions for changing jobs. The recruitment coordinator of Goodman Service will consult with you.', NULL, NULL),
(5, 'Q. What kind of photo can I use for my resume?', 'The photo of your resume is an important material to judge the impression of the candidate on the document. The photo of your resume will be an important material to use for the selection, so please register the photo suitable for the selection of the company.', 'Q. What kind of photo can I use for my resume?', 'The photo of your resume is an important material to judge the impression of the candidate on the document. The photo of your resume will be an important material to use for the selection, so please register the photo suitable for the selection of the company.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_enquiries`
--

CREATE TABLE `job_enquiries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expire_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment_file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kanji_faqs`
--

CREATE TABLE `kanji_faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `question_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_jp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer_jp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kanji_faqs`
--

INSERT INTO `kanji_faqs` (`id`, `question_eng`, `answer_eng`, `question_jp`, `answer_jp`, `created_at`, `updated_at`) VALUES
(1, 'Q. Can any foreigner work in Japan?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, NULL),
(2, 'Q. Can any foreigner work in Japan?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, NULL),
(3, 'Q. Can any foreigner work in Japan?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, NULL),
(4, 'Q. Can any foreigner work in Japan?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, NULL),
(5, 'Q. Can any foreigner work in Japan?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, NULL),
(6, 'Q. Can any foreigner work in Japan?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, NULL),
(7, 'Q. Can any foreigner work in Japan?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, NULL),
(8, 'Q. Can any foreigner work in Japan?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, NULL);

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
(4, '2022_04_27_182445_create_contacts_table', 1),
(5, '2022_05_02_021718_create_teams_table', 2),
(6, '2022_05_03_160312_create_job_enquiries_table', 3),
(7, '2022_05_03_163406_add_paid_to_job_enquiries_table', 4),
(8, '2022_05_03_164106_create_training_photos_table', 5),
(9, '2022_05_06_045332_create_faqs_table', 6),
(10, '2022_05_06_054042_create_countries_table', 7),
(11, '2022_05_06_074318_create_overseas_jobs_table', 8),
(12, '2022_05_08_051243_create_carrer_advice_table', 9),
(13, '2022_05_08_051642_add_photo_to_carrer_advice_table', 10),
(14, '2022_05_08_070301_create_activities_table', 11),
(15, '2022_05_08_153743_create_partners_table', 12),
(16, '2022_05_09_171422_create_news_table', 13),
(17, '2022_05_09_171753_add_title_jp_to_news_table', 14),
(18, '2022_05_09_173944_create_kanji_faqs_table', 15),
(19, '2022_05_09_175856_add_category_to_activities_table', 16),
(20, '2022_05_09_180708_create_teachers_table', 17),
(21, '2022_05_09_181738_create_enrollment_requests_table', 18);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_jp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title_jp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title_eng`, `description_eng`, `description_jp`, `upload_date`, `photo`, `created_at`, `updated_at`, `title_jp`) VALUES
(1, 'Why do we use it?\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1/1/2020', 'http://localhost/projects/sak/admin/uploads/files/1.jpg', NULL, NULL, 'Why do we use it?\n'),
(2, 'Why do we use it?\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1/1/2020', 'http://localhost/projects/sak/admin/uploads/files/1.jpg', NULL, NULL, 'Why do we use it?\r\n'),
(3, 'Why do we use it?\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1/1/2020', 'http://localhost/projects/sak/admin/uploads/files/1.jpg', NULL, NULL, 'Why do we use it?\r\n'),
(4, 'Why do we use it?\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1/1/2020', 'http://localhost/projects/sak/admin/uploads/files/1.jpg', NULL, NULL, 'Why do we use it?\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `overseas_jobs`
--

CREATE TABLE `overseas_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `job_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `overseas_jobs`
--

INSERT INTO `overseas_jobs` (`id`, `country_id`, `job_title`, `created_at`, `updated_at`) VALUES
(1, 1, 'Counstruction', NULL, NULL),
(2, 1, 'Office Staff', NULL, NULL),
(3, 1, 'Electronic Factory', NULL, NULL),
(4, 1, 'Super Market', NULL, NULL),
(5, 1, 'Restaurants', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_logo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_website` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `company_logo`, `company_website`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'http://localhost/projects/sak/admin/uploads/files/22.jpeg', 'https://kmailsoftware.com', '3', NULL, NULL),
(2, 'http://localhost/projects/sak/admin/uploads/files/24.jpeg', 'https://kmailsoftware.com', '3', NULL, NULL),
(3, 'http://localhost/projects/sak/admin/uploads/files/25.jpeg', 'https://kmailsoftware.com', '4', NULL, NULL),
(4, 'http://localhost/projects/sak/admin/uploads/files/28.jpeg', 'https://kmailsoftware.com', '4', NULL, NULL),
(5, 'http://localhost/projects/sak/admin/uploads/files/22.jpeg', 'https://kmailsoftware.com', '1', NULL, NULL),
(6, 'http://localhost/projects/sak/admin/uploads/files/24.jpeg', 'https://kmailsoftware.com', '1', NULL, NULL),
(7, 'http://localhost/projects/sak/admin/uploads/files/25.jpeg', 'https://kmailsoftware.com', '1', NULL, NULL),
(8, 'http://localhost/projects/sak/admin/uploads/files/28.jpeg', 'https://kmailsoftware.com', '1', NULL, NULL),
(9, 'http://localhost/projects/sak/admin/uploads/files/22.jpeg', 'https://kmailsoftware.com', '3', NULL, NULL),
(10, 'http://localhost/projects/sak/admin/uploads/files/24.jpeg', 'https://kmailsoftware.com', '3', NULL, NULL),
(11, 'http://localhost/projects/sak/admin/uploads/files/25.jpeg', 'https://kmailsoftware.com', '3', NULL, NULL),
(12, 'http://localhost/projects/sak/admin/uploads/files/28.jpeg', 'https://kmailsoftware.com', '3', NULL, NULL),
(13, 'http://localhost/projects/sak/admin/uploads/files/22.jpeg', 'https://kmailsoftware.com', '1', NULL, NULL),
(14, 'http://localhost/projects/sak/admin/uploads/files/24.jpeg', 'https://kmailsoftware.com', '2', NULL, NULL),
(15, 'http://localhost/projects/sak/admin/uploads/files/25.jpeg', 'https://kmailsoftware.com', '2', NULL, NULL),
(16, 'http://localhost/projects/sak/admin/uploads/files/28.jpeg', 'https://kmailsoftware.com', '2', NULL, NULL);

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
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whats_app` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `position`, `facebook_link`, `twitter_link`, `whats_app`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Mg Mg', 'Teacher', NULL, NULL, NULL, 'https://wac-cdn.atlassian.com/dam/jcr:ba03a215-2f45-40f5-8540-b2015223c918/Max-R_Headshot%20(1).jpg?cdnVersion=322', NULL, NULL),
(2, 'Mg Mg', 'Teacher', NULL, NULL, NULL, 'https://wac-cdn.atlassian.com/dam/jcr:ba03a215-2f45-40f5-8540-b2015223c918/Max-R_Headshot%20(1).jpg?cdnVersion=322', NULL, NULL),
(3, 'Mg Mg', 'Teacher', NULL, NULL, NULL, 'https://wac-cdn.atlassian.com/dam/jcr:ba03a215-2f45-40f5-8540-b2015223c918/Max-R_Headshot%20(1).jpg?cdnVersion=322', NULL, NULL),
(4, 'Mg Mg', 'Teacher', NULL, NULL, NULL, 'https://wac-cdn.atlassian.com/dam/jcr:ba03a215-2f45-40f5-8540-b2015223c918/Max-R_Headshot%20(1).jpg?cdnVersion=322', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whats_app` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `position`, `facebook_link`, `twitter_link`, `whats_app`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Mg Mg', 'Developer', 'https://www.facebook.com/', 'twitter.com', NULL, 'https://wac-cdn.atlassian.com/dam/jcr:ba03a215-2f45-40f5-8540-b2015223c918/Max-R_Headshot%20(1).jpg?cdnVersion=322', NULL, NULL),
(2, 'Aung Aung', 'Web Developer', 'facebook.com', 'twitter.com', NULL, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPDH3bE9nGAhkxAYOvE849tQhs8Xp6tvnLNvDQwSFub11yrxaKo5ksBO9XuLnBBec-_7g&usqp=CAU', NULL, NULL),
(3, 'Toe Toe', 'Developer', 'facebook.com', 'twitter.com', NULL, 'https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dXNlcnxlbnwwfHwwfHw%3D&w=1000&q=80', NULL, NULL),
(4, 'Moe Moe', 'Web Developer', 'facebook.com', 'twitter.com', NULL, 'https://wac-cdn.atlassian.com/dam/jcr:ba03a215-2f45-40f5-8540-b2015223c918/Max-R_Headshot%20(1).jpg?cdnVersion=322', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `training_photos`
--

CREATE TABLE `training_photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `training_photos`
--

INSERT INTO `training_photos` (`id`, `photo`, `category`, `created_at`, `updated_at`) VALUES
(1, 'http://localhost/projects/sak/admin/uploads/files/1.jpg,http://localhost/projects/sak/admin/uploads/files/2.jpg,http://localhost/projects/sak/admin/uploads/files/3.jpg,http://localhost/projects/sak/admin/uploads/files/4.jpg,http://localhost/projects/sak/admin/uploads/files/5.jpg\n', 'caregiver_training', NULL, NULL),
(3, 'http://localhost/projects/sak/admin/uploads/files/1.jpg\r\n', 'caregiver_training', NULL, NULL),
(4, 'http://localhost/projects/sak/admin/uploads/files/1.jpg,http://localhost/projects/sak/admin/uploads/files/2.jpg,http://localhost/projects/sak/admin/uploads/files/3.jpg,http://localhost/projects/sak/admin/uploads/files/4.jpg,http://localhost/projects/sak/admin/uploads/files/5.jpg\r\n', 'tailoring_training', NULL, NULL),
(5, 'http://localhost/projects/sak/admin/uploads/files/1.jpg,http://localhost/projects/sak/admin/uploads/files/2.jpg,http://localhost/projects/sak/admin/uploads/files/3.jpg,http://localhost/projects/sak/admin/uploads/files/4.jpg,http://localhost/projects/sak/admin/uploads/files/5.jpg\r\n', 'language_training', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carrer_advice`
--
ALTER TABLE `carrer_advice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollment_requests`
--
ALTER TABLE `enrollment_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_enquiries`
--
ALTER TABLE `job_enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kanji_faqs`
--
ALTER TABLE `kanji_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overseas_jobs`
--
ALTER TABLE `overseas_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_photos`
--
ALTER TABLE `training_photos`
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
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `carrer_advice`
--
ALTER TABLE `carrer_advice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enrollment_requests`
--
ALTER TABLE `enrollment_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_enquiries`
--
ALTER TABLE `job_enquiries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kanji_faqs`
--
ALTER TABLE `kanji_faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `overseas_jobs`
--
ALTER TABLE `overseas_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `training_photos`
--
ALTER TABLE `training_photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
