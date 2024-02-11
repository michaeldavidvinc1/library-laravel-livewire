-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 04:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library-laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `description`, `publisher`, `quantity`, `image`, `category_id`, `created_by`, `updated_by`, `deleted_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Veritatis qui totam quia porro.', 'Alessandro Bins DVM', 'Repellat non autem ex ad sit recusandae in. Doloremque soluta sunt eum hic sed numquam est. Qui perferendis rerum reprehenderit rem libero officia. Nihil nobis odit temporibus ut libero officia eos. Minima occaecati iure aut error natus provident. Voluptates autem laboriosam qui harum rerum exercitationem. Exercitationem et eos laborum officiis est ea. Recusandae impedit ut quo aliquid itaque quae doloribus. Voluptas aut sunt dolor qui perspiciatis voluptates exercitationem.', 'Bode-McKenzie', 1, 'public/photo/IrXC8dNR1vQRm4gqXRHxr0y9HodF9JqV5X0VfO7G.jpg', 4, NULL, 1, NULL, NULL, '2024-02-10 22:28:12', '2024-02-10 22:28:36'),
(2, 'Expedita unde rerum quia sint.', 'Caitlyn Wunsch', 'Sunt earum veritatis est nam quibusdam. Quis minima nisi et at ad quibusdam voluptatum. Omnis nulla sapiente inventore debitis natus aperiam vero non. Et qui sed et a iste voluptatum. Commodi beatae aut dolor voluptas veritatis enim. Dolorum voluptatem saepe quis in. Nihil cupiditate sunt et provident. Dolorem rerum est voluptatum voluptas aliquid recusandae molestias. Possimus rerum quod architecto nesciunt quod. Autem repudiandae est laudantium eos earum nam. Ab corrupti veniam hic non laudantium aliquam nostrum et. Ut soluta saepe quam doloribus alias.', 'Shields Ltd', 1, 'public/photo/j7zxOeYlbV3HAcFaVpw9MGFUVzd79Cre1rmZur4V.jpg', 1, NULL, 1, NULL, NULL, '2024-02-10 22:28:12', '2024-02-10 22:28:41'),
(3, 'Et ut et error ipsam laborum quidem perferendis.', 'Hayden Heaney', 'Autem omnis dolore accusantium laudantium accusantium autem ipsam. Eaque vel perspiciatis dolor et perferendis voluptatum facilis. Fuga deleniti est suscipit rerum sit quos qui. Voluptatibus beatae omnis ea totam. Id iure et sint deserunt minus sint totam. Sint quas nostrum beatae porro. Commodi quae itaque odit ad aut ducimus maiores laboriosam.', 'Hane, Littel and McDermott', 1, 'public/photo/jeyDb7jkRUXw9Beqi2wIXvOj4hJbTq0Froa14nva.jpg', 5, NULL, 1, NULL, NULL, '2024-02-10 22:28:12', '2024-02-10 22:30:36'),
(4, 'Quidem voluptatem illum aut architecto.', 'Earline Mueller Jr.', 'Velit aut perferendis voluptas voluptas voluptas laboriosam. Quibusdam quod et quae ab omnis culpa suscipit. Et exercitationem ut ratione deleniti veritatis. Est reiciendis quia tempora maiores ut. Itaque perferendis laudantium expedita nobis. Veritatis ea quo voluptas rerum esse et dolorum. Sed est deserunt ut ad. Similique esse doloremque omnis error ea at. Repudiandae natus perspiciatis velit est. Ut cumque totam repudiandae iusto labore. Explicabo quod veritatis ipsum nostrum quas totam. Veritatis eos molestias a voluptate placeat repellendus omnis.', 'Luettgen-Fadel', 3, 'public/photo/7v1lsnKdkqKXCikXjG1Ijpc71r5jFltdb9fkWhxq.jpg', 2, NULL, 1, NULL, NULL, '2024-02-10 22:28:12', '2024-02-10 22:28:50'),
(5, 'Qui ut et temporibus itaque vitae.', 'Ryan Johnson', 'Quia fugit cum qui dolores cupiditate velit. Voluptatem magnam quia sint nobis nesciunt. Et maiores mollitia harum. Natus eum eum est ut. Dicta voluptates adipisci molestiae repellat est sequi asperiores dolore. Voluptatibus ab enim amet aperiam enim eligendi aut repudiandae. Odio officiis porro et earum aut veritatis quibusdam. Eum est nam rerum ipsa quod vel. Est perferendis voluptatem excepturi molestiae consequatur at quia et. Qui amet qui dolores. A est non qui ad aut ratione.', 'Adams-Kiehn', 1, 'public/photo/6Xrllxo57afrT1C4iaRy7DbQ954kEDbRuuSe4XtU.jpg', 3, NULL, 1, NULL, NULL, '2024-02-10 22:28:12', '2024-02-10 22:28:56'),
(6, 'Consequatur et adipisci quos animi.', 'Daisha Brown', 'Ut vitae eveniet culpa non et odio voluptas. Rerum voluptatem enim et voluptatem. Necessitatibus dolorem sit et ullam doloribus quae dolorem. Qui est vitae est corrupti in. Amet fugit magnam hic sed quasi. In consequatur itaque aperiam et laborum. Eaque vel laboriosam voluptas quo. Ab sunt enim vel vel id nihil non. Ut ut exercitationem velit dicta est rerum tempore enim. Blanditiis asperiores veritatis sit fugiat cum qui. Autem odit reprehenderit earum corrupti. Odit mollitia aut dolor. Provident atque qui architecto saepe.', 'Zemlak-Stroman', 1, 'public/photo/nlL3NONt3NCPnF099scYOFa5A68kIhvjlK5xcjHQ.jpg', 3, NULL, 1, NULL, NULL, '2024-02-10 22:28:12', '2024-02-10 22:29:02'),
(7, 'Dolores illum temporibus error odit animi.', 'Stephan Lebsack', 'Explicabo praesentium eaque animi. Deserunt perferendis sit officia suscipit dolorem et accusantium cum. Totam occaecati quas non alias et rerum aliquam libero. Fugit magni sed suscipit laborum sit consectetur at voluptatem. Nihil omnis debitis similique provident. Nam qui ut rerum similique excepturi. Vitae sint suscipit voluptas. Sit fugiat reiciendis vel reiciendis labore ex voluptate iure. Quisquam voluptatem suscipit expedita iusto omnis harum.', 'Rath, Champlin and Weimann', 3, 'public/photo/y6odMMRrWd8fTF3fAOqe4HNuLYinz8nGeqkBXKhj.jpg', 1, NULL, 1, NULL, NULL, '2024-02-10 22:28:12', '2024-02-10 22:29:07'),
(8, 'Delectus minus illum quia labore asperiores.', 'Malika Cormier PhD', 'Non cum vel optio repudiandae sit. Ut sunt assumenda nam impedit excepturi consequatur blanditiis. Saepe facere totam perferendis commodi. Non mollitia libero possimus perspiciatis optio. Non omnis explicabo id ut. Aliquam alias perferendis excepturi. Sit facilis officiis eos occaecati cumque unde esse. Aut modi optio et totam officiis distinctio consequatur. Voluptates consequatur quia occaecati. Laudantium debitis ducimus aut non ea. Doloremque molestiae et dicta enim laborum. Nobis molestiae harum voluptatibus eius. Voluptas itaque doloribus rem porro est animi. Molestiae dolor sed voluptatem sit non unde aut.', 'Bruen, Collins and Waters', 1, 'public/photo/vRMFAk3gq7ZNxjTtyZ6i8fWNLAe1buhnqLhLHMet.jpg', 4, NULL, 1, NULL, NULL, '2024-02-10 22:28:12', '2024-02-10 22:29:13'),
(9, 'Consectetur consequuntur omnis labore necessitatibus et.', 'Paige Murazik', 'Voluptatem itaque non beatae vel consequatur reprehenderit laudantium. Similique est ducimus tempore quas ut qui aut. Impedit quidem unde veritatis voluptatum nihil et. Blanditiis eos harum nobis animi vitae qui. Magni doloribus qui ut aspernatur. Rerum facilis quos et est. Rerum animi sint repellendus sunt. Ut sit temporibus dolor commodi perspiciatis fugiat recusandae. Consectetur esse rerum voluptates aliquid architecto. Nulla soluta sed iusto quibusdam in accusantium possimus. Eligendi quis ut harum cumque reiciendis et. Dolores ab qui iure aut. Et quasi autem eveniet ut libero atque. Omnis natus sunt doloremque tenetur sapiente. Assumenda et architecto aliquid nihil.', 'Treutel Ltd', 1, 'public/photo/OS6s3crfxucnsaDahqPtZinHrGqlHmCnRBbXn9p0.jpg', 4, NULL, 1, NULL, NULL, '2024-02-10 22:28:12', '2024-02-10 22:30:42'),
(10, 'Itaque quisquam sit fugit rerum voluptate veritatis et.', 'Jayne O\'Connell', 'Minima aliquam temporibus omnis magni quia quaerat voluptatem. Et explicabo eum incidunt ratione nihil. Aspernatur ut iure ut quibusdam ipsum. At sed ipsam dolores est quas ad corporis. Iste officia illum qui culpa earum. Eligendi veritatis nobis sit ut dolorem architecto atque. Labore tenetur unde a voluptatibus consequuntur. Iure libero corporis eos itaque alias vel. Quod doloribus aut porro asperiores nihil.', 'Rutherford Ltd', 3, 'public/photo/s1SIrkK8rVjGdoVA5WqYgfyeLTtdTWDtgr1hl960.jpg', 4, NULL, 1, NULL, NULL, '2024-02-10 22:28:12', '2024-02-10 22:29:26'),
(11, 'Laborum eos corporis fuga eligendi aut.', 'Victor Parisian', 'Nobis non animi nulla eum ea. Voluptates delectus non repudiandae deserunt sit magni. Repellendus fuga sed et ut. Nesciunt voluptas qui omnis tempora ut. Quibusdam quidem omnis eos reiciendis. Itaque atque dolor reprehenderit consequatur explicabo quidem fuga. Illo assumenda saepe iusto excepturi et blanditiis voluptatum. Eligendi dolorum dicta mollitia fugit voluptas ut adipisci. Voluptatem dolor debitis quo voluptate.', 'Hamill-Bernier', 1, 'public/photo/W2SLYHgkCoIIsHDJ6YaFAwMpsbwslgvnB3svMw24.jpg', 3, NULL, 1, NULL, NULL, '2024-02-10 22:28:12', '2024-02-10 22:30:48'),
(12, 'Ab dolorum explicabo non non est aut vero minima.', 'Orval Hoeger MD', 'Ut eum aut quia eius. Provident explicabo molestiae amet ut voluptate quis. Illum dolor quidem facere dolor odio. Omnis distinctio minus ut ea quia. In doloremque aut ipsum. Soluta at itaque quis vitae. Similique esse incidunt fugit iusto optio accusamus autem. Voluptatibus atque sunt ut molestiae ut. Sit molestiae cum modi ut quasi.', 'Hagenes-Lowe', 1, 'public/photo/fnv660wSLl6zUaxgB1RzaQNhLRR4X1SwFkvkAhge.jpg', 1, NULL, 1, NULL, NULL, '2024-02-10 22:28:12', '2024-02-10 22:29:37'),
(13, 'Reprehenderit rerum velit et consequatur in.', 'Quinten Harvey', 'Assumenda est natus est. Consequuntur earum et quam suscipit consequuntur non quia soluta. Dolorem sed rem est fugit sint tempore. Corrupti impedit quas laboriosam mollitia illum. Assumenda dicta asperiores quo numquam ut at eligendi. At incidunt illum et qui quos. Sed dolor earum et soluta quas. Et fugiat doloremque fugiat quos ab. Dolores dolores sit aut sapiente eveniet expedita. Natus quae non sit debitis doloremque. Illum voluptas expedita ullam aut et. Rerum distinctio beatae excepturi sed autem molestiae nemo. Maxime et qui enim molestiae.', 'O\'Conner-Kiehn', 3, 'public/photo/GvF2R3i4D5n2VQEO6KetJNQmKa5QhwM2ZTtqMlXh.jpg', 4, NULL, 1, NULL, NULL, '2024-02-10 22:28:12', '2024-02-10 22:29:43'),
(14, 'Non placeat maxime harum quia.', 'Brent Hamill Sr.', 'Animi mollitia rerum aut quae. Repellendus totam facere non doloribus. Quo numquam labore necessitatibus. Similique corrupti quis aliquam dolorem vitae aliquam. Et officiis illo dignissimos quos commodi. Alias saepe consectetur ipsa dolorem consectetur quae minima eum. Minus porro libero ut aspernatur. Fugit repellat blanditiis totam mollitia excepturi. Qui a ducimus quis placeat. Nobis veritatis aspernatur accusantium.', 'Stark LLC', 3, 'public/photo/0P6LIDY5nNy2Nz18RB98Pt44VzqneCjgWU0hPmd0.jpg', 1, NULL, 1, NULL, NULL, '2024-02-10 22:28:12', '2024-02-10 22:29:49'),
(15, 'Voluptas pariatur eius voluptatem deleniti molestiae itaque aut.', 'Ms. Destiney Moore MD', 'Est quia dolor fuga beatae. Omnis quo et nulla nesciunt modi esse velit minus. Ipsa esse at omnis ratione aut minus delectus voluptatem. Et et autem rerum inventore. Id cum quod nobis sint odio consequatur adipisci. Voluptatem facere velit ratione est itaque sed et rem. Iure ut adipisci qui rerum dolores tempore aut vel. Eos delectus architecto voluptatem magnam. A harum hic explicabo repellendus laborum. Alias magnam in enim eligendi doloremque nihil dicta. Ratione est ut nulla modi.', 'Beier, Schimmel and Rempel', 3, 'public/photo/MuGnGp5RwWkw20vNx6NPnA8VKLdoPkKZAQMMirz5.jpg', 1, NULL, 1, NULL, NULL, '2024-02-10 22:28:12', '2024-02-10 22:30:04');

-- --------------------------------------------------------

--
-- Table structure for table `book_items`
--

CREATE TABLE `book_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('AVAILABLE','NONAVAILABLE','BROKEN') NOT NULL DEFAULT 'AVAILABLE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_items`
--

INSERT INTO `book_items` (`id`, `book_id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, 'BROKEN', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(2, 9, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(3, 1, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:34:32'),
(4, 8, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(5, 12, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(6, 9, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(7, 11, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(8, 9, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(9, 5, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(10, 12, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(11, 7, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(12, 2, NULL, 'NONAVAILABLE', '2024-02-10 22:28:12', '2024-02-11 06:08:30'),
(13, 5, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(14, 15, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(15, 15, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(16, 6, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(17, 5, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(18, 6, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(19, 12, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(20, 11, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(21, 15, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(22, 1, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(23, 14, NULL, 'NONAVAILABLE', '2024-02-10 22:28:12', '2024-02-11 06:08:39'),
(24, 7, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(25, 10, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(26, 5, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(27, 14, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(28, 1, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(29, 12, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(30, 9, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(31, 14, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(32, 2, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(33, 13, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:34:33'),
(34, 13, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(35, 12, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(36, 1, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(37, 14, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(38, 5, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(39, 10, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(40, 6, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(41, 3, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(42, 3, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(43, 7, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(44, 9, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12'),
(45, 15, NULL, 'AVAILABLE', '2024-02-10 22:28:12', '2024-02-10 22:28:12');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Mistery', 'mistery', '2024-02-10 22:28:14', '2024-02-10 22:28:14'),
(2, 'Romance', 'romance', '2024-02-10 22:28:14', '2024-02-10 22:28:14'),
(3, 'Education', 'education', '2024-02-10 22:28:14', '2024-02-10 22:28:14'),
(4, 'Novel', 'novel', '2024-02-10 22:28:14', '2024-02-10 22:28:14'),
(5, 'Drama', 'drama', '2024-02-10 22:28:14', '2024-02-10 22:28:14');

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
-- Table structure for table `fines`
--

CREATE TABLE `fines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `loan_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `status` enum('PAID','UNPAID') NOT NULL DEFAULT 'UNPAID',
  `deadline` datetime NOT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `date_return` datetime NOT NULL,
  `status` enum('RETURNED','NOTRETURNED') NOT NULL DEFAULT 'NOTRETURNED',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `transaction_id`, `user_id`, `date_return`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2024-02-10 05:34:24', 'NOTRETURNED', 1, NULL, NULL, '2024-02-07 22:34:24', '2024-02-10 22:34:32'),
(2, 2, 1, '2024-02-18 05:34:26', 'RETURNED', 1, NULL, NULL, '2024-02-07 22:34:26', '2024-02-10 22:34:33'),
(4, 4, 8, '2024-02-10 13:13:05', 'NOTRETURNED', 1, NULL, NULL, '2024-02-11 06:13:05', '2024-02-11 06:13:05');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_07_105340_create_books_table', 1),
(6, '2024_02_07_105346_create_book_items_table', 1),
(7, '2024_02_07_105351_create_categories_table', 1),
(8, '2024_02_09_094350_create_transactions_table', 1),
(9, '2024_02_09_144215_create_loans_table', 1),
(10, '2024_02_10_025315_create_fines_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_item_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('WAITING','APPROVE','DECLINE') NOT NULL DEFAULT 'WAITING',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `book_item_id`, `user_id`, `status`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'APPROVE', 1, NULL, NULL, '2024-02-10 22:31:07', '2024-02-10 22:34:24'),
(2, 33, 1, 'APPROVE', 1, NULL, NULL, '2024-01-09 22:31:17', '2024-02-10 22:34:26'),
(3, 12, 8, 'WAITING', 8, NULL, NULL, '2024-01-11 06:08:30', '2024-02-11 06:08:30'),
(4, 23, 8, 'APPROVE', 8, NULL, NULL, '2024-02-11 06:08:39', '2024-02-11 06:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('ADMIN','USER') NOT NULL DEFAULT 'USER',
  `status` enum('ACTIVE','NONACTIVE') NOT NULL DEFAULT 'ACTIVE',
  `remember_token` varchar(100) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `phone`, `email`, `email_verified_at`, `password`, `role`, `status`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL, 'admin@gmail.com', NULL, '$2y$12$gBWBOgFVxX0v82VPyVc.GuWoLBTJe.XzROrze3ZVE6b2FVQ7dpt7.', 'ADMIN', 'ACTIVE', '3AiCJyao73F5XATvLVU0jirCBBjkchLnK81KvWUclQX6CyI2Gq3PlppvZaku', NULL, '2024-02-10 22:28:16', '2024-02-10 22:28:16'),
(2, 'User', NULL, NULL, 'user@gmail.com', NULL, '$2y$12$yDNg68VkPAF8mcT4xHbZM.4YCAlZwNiGCJW8ErQQj8qiHZJUTVWsi', 'USER', 'ACTIVE', NULL, NULL, '2024-02-09 22:28:16', '2024-02-10 22:28:16'),
(3, 'Luca', NULL, NULL, 'luca@gmail.com', NULL, '$2y$12$HuiGv5zqrbSELRlep7sT6.PKtKfVTzHsAm.ocJ950DB5RhT0jOgbS', 'USER', 'ACTIVE', 'OQzegIWwQpiXueIj5InsoVG7k8xKRDr5bADVAbd6N36DeCc6Tt9O9D8WayVy', NULL, '2024-01-10 23:32:25', '2024-02-10 23:32:25'),
(5, 'Andi', NULL, NULL, 'andi@gmail.com', NULL, '$2y$12$5InLjc3ZJWAyrOBSQdPLU.F3Afes.6sSNPGAus1w9hZi4JHSlHhOi', 'USER', 'ACTIVE', NULL, NULL, '2024-02-11 05:57:55', '2024-02-11 05:57:55'),
(6, 'Ruby', NULL, NULL, 'ruby@gmail.com', NULL, '$2y$12$h5nFAU8C3EGtuxbuTj5Qpu9lk.40gGQI1ftvEmEr8r52dvkYItaPa', 'USER', 'ACTIVE', NULL, NULL, '2024-01-11 05:58:16', '2024-02-11 05:58:16'),
(7, 'Fanny', NULL, NULL, 'fanny@gmail.com', NULL, '$2y$12$j8SCW9pNuhieNNsC15mh3u5EAWLYNXzi6B.10VERsFUnW2V8Knzsu', 'USER', 'ACTIVE', NULL, NULL, '2024-02-11 05:58:30', '2024-02-11 05:58:30'),
(8, 'Karina', NULL, NULL, 'karina@gmail.com', NULL, '$2y$12$LcK.VyspZbwaTxHoTm5Vie8LU/l8ty8NWBY8jujp0SU4pt0h7qSGy', 'USER', 'ACTIVE', 'CLXFe70cAAK7q24dDyZp62ywM3aBTd2gXlR2UfqFCVraYg3DohOmXmaLfWCd', NULL, '2024-01-11 05:58:46', '2024-02-11 05:58:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_items`
--
ALTER TABLE `book_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fines`
--
ALTER TABLE `fines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `book_items`
--
ALTER TABLE `book_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fines`
--
ALTER TABLE `fines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
