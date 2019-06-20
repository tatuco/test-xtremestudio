-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2019 at 07:07 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yoplanifico`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesses`
--

CREATE TABLE `accesses` (
  `id` int(11) NOT NULL,
  `closed` tinyint(1) NOT NULL DEFAULT '0',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employe_id` int(25) NOT NULL,
  `date_output` datetime DEFAULT NULL,
  `date_input` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `access_details`
--

CREATE TABLE `access_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` enum('input','output') COLLATE utf8_unicode_ci NOT NULL,
  `access_id` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slogan` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `logo`, `slogan`, `name`, `description`, `deleted`, `created_at`, `updated_at`) VALUES
('000-000-000', NULL, NULL, 'Company Test', 'test company', 0, '2019-06-06 22:05:45', '2019-06-06 22:05:45'),
('24356393', '', '', 'DEVELOPMENT LUIS RAMIREZ CA.', '', 0, '2019-06-06 22:05:45', '2019-06-06 22:05:45'),
('761325930', '', '', 'MSH SERVICIOS A LA MINERIA SPA', '', 0, '2019-06-06 22:05:45', '2019-06-06 22:05:45'),
('772762801', '', '', 'INDUSTRIAL SUPPORT COMPANY LTDA.', '', 0, '2019-06-06 22:05:45', '2019-06-06 22:05:45'),
('930770000', '', '', 'METSO CHILE SPA', '', 0, '2019-06-06 22:05:45', '2019-06-06 22:05:45'),
('93534124214', '', '', 'ZIPPYTTECHA.', '', 0, '2019-06-06 22:05:45', '2019-06-06 22:05:45');

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `cod_contract` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `endowment` int(11) NOT NULL,
  `company_id` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `adm_aux_id` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `admec_id` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `admec_aux_id` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`cod_contract`, `description`, `start_date`, `end_date`, `endowment`, `company_id`, `user_id`, `adm_aux_id`, `admec_id`, `admec_aux_id`, `deleted`, `created_at`, `updated_at`) VALUES
('4540002870', ' MA1020035916/30 SERVICIOS DE MANTENIMIENTO MECÁNICO Y PROGRAMACIÓN DE CARÁCTER PERMANENTE Y SPOTS EN ÁREAS DE FLOTACIÓN Y RELAVES.', '2018-04-27', '2021-06-30', 30, '761325930', '012691151-3', '017387633-5', '014457421-4', '000000000-0', 0, '2019-06-06 22:05:51', '2019-06-06 22:05:51'),
('4540002892', '\" MA1020035916/20-40 SERVICIOS DE MANTENIMIENTO MECÁNICO Y PROGRAMACIÓN DE CARÁCTER PERMANENTE Y SPOTS EN ÁREAS DE MOLIENDA CIRCUITO CORREAS DE PEBBLES REMOLIENDA CONCENTRADO Y PLANTA DE MOLIBDENO.\"', '2018-04-27', '2021-06-30', 50, '772762801', '012691151-3', '017387633-5', '007367179-5', '000000000-0', 0, '2019-06-06 22:05:51', '2019-06-06 22:05:51'),
('4540002894', ' MA1020035916/10 SERVICIOS DE MANTENIMIENTO MECÁNICO Y PROGRAMACIÓN DE CARÁCTER PERMANENTE Y SPOTS EN ÁREAS DE CHANCADO PRIMARIO Y PLANTA CHANCADO SECUNDARIO Y TERCIARIO.', '2018-04-27', '2021-06-30', 30, '930770000', '012691151-3', '017387633-5', '013426315-6', '016051322-5', 0, '2019-06-06 22:05:50', '2019-06-06 22:05:50'),
('4540003012', '\" MA1020035916/20-40 SERVICIOS DE PROGRAMACIÓN DE CARÁCTER PERMANENTE Y SPOTS EN ÁREAS DE MOLIENDA CIRCUITO CORREAS DE PEBBLES REMOLIENDA CONCENTRADO Y PLANTA DE MOLIBDENO.\"', '2018-04-27', '2021-06-30', 50, '24356393', '012691151-3', '017387633-5', '007367179-5', '000000000-0', 0, '2019-06-06 22:05:51', '2019-06-06 22:05:51'),
('4540003013', '\" MA1020035916/20-40 SERVICIOS DE PROGRAMACIÓN DE CARÁCTER PERMANENTE Y SPOTS EN ÁREAS DE MOLIENDA CIRCUITO CORREAS DE PEBBLES REMOLIENDA CONCENTRADO Y PLANTA DE MOLIBDENO.\"', '2018-04-27', '2021-06-30', 50, '93534124214', '012691151-3', '017387633-5', '007367179-5', '000000000-0', 0, '2019-06-06 22:05:51', '2019-06-06 22:05:51');

-- --------------------------------------------------------

--
-- Table structure for table `detentions`
--

CREATE TABLE `detentions` (
  `id` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `type_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `detentions`
--

INSERT INTO `detentions` (`id`, `name`, `description`, `deleted`, `type_id`, `created_at`, `updated_at`) VALUES
('1123123', 'd-0129312', 'descrip', 0, 1, '2019-06-15 06:38:31', '2019-06-15 06:38:31'),
('24242', 'detencion prueba', 'descrip', 0, 1, '2019-06-14 11:14:02', '2019-06-14 11:14:02');

-- --------------------------------------------------------

--
-- Table structure for table `detention_types`
--

CREATE TABLE `detention_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `detention_types`
--

INSERT INTO `detention_types` (`id`, `name`, `description`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'Shutdown', '', 0, '2019-06-06 22:05:57', '2019-06-06 22:05:57'),
(2, 'PM', '', 0, '2019-06-06 22:05:57', '2019-06-06 22:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `employes`
--

CREATE TABLE `employes` (
  `id` int(11) NOT NULL,
  `people_id` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `company_id` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `position_company` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `contract_id` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employes`
--

INSERT INTO `employes` (`id`, `people_id`, `company_id`, `position_company`, `contract_id`, `deleted`, `created_at`, `updated_at`) VALUES
(1, '233598327', '24356393', '2', '4540003012', 0, NULL, NULL),
(2, '3423412', '761325930', '2', '4540002870', 0, NULL, NULL),
(3, '34235352', '930770000', '3', '4540002894', 0, NULL, NULL),
(4, '394823742', '24356393', '2', '4540003012', 0, NULL, NULL),
(5, '8767', '761325930', '2', '4540002870', 0, NULL, NULL),
(6, '87576', '24356393', '2', '4540003012', 0, NULL, NULL),
(7, '24356393', '772762801', '1', '4540002892', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `out_of_time` tinyint(1) NOT NULL DEFAULT '0',
  `type_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `check` tinyint(1) NOT NULL DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `detention_id` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `description`, `date`, `out_of_time`, `type_id`, `status_id`, `check`, `deleted`, `detention_id`, `created_at`, `updated_at`) VALUES
(7, 'pivote', 'descrip del evento pivote', '2019-06-20', 0, 1, 3, 0, 0, '24242', '2019-06-14 11:14:02', '2019-06-14 11:14:02'),
(8, 'evento pivote bebe', 'descrip del evento pivote', '2019-06-19', 0, 1, 3, 0, 0, '1123123', '2019-06-15 06:38:31', '2019-06-15 06:38:31');

-- --------------------------------------------------------

--
-- Table structure for table `event_types`
--

CREATE TABLE `event_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `event_types`
--

INSERT INTO `event_types` (`id`, `name`, `description`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'Pivote', 'Evento Principal de la Detencion.', 0, '2019-06-06 22:05:58', '2019-06-06 22:05:58'),
(2, 'Critico', 'Evento con gran importancia en la Detencion.', 0, '2019-06-06 22:05:58', '2019-06-06 22:05:58'),
(3, 'Normal', '', 0, '2019-06-06 22:05:58', '2019-06-06 22:05:58');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `directory` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `type_id` int(11) NOT NULL,
  `detention_id` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `directory`, `deleted`, `type_id`, `detention_id`, `created_at`, `updated_at`) VALUES
(28, '1560493226_diagrama cargo.PNG', 'http://192.168.1.219/yoplanifico-api/storage/app/detentions/1560493226_diagrama cargo.PNG', 0, 2, '24242', '2019-06-14 11:20:26', '2019-06-14 11:20:26'),
(29, '1560493226_cargos.PNG', 'http://192.168.1.219/yoplanifico-api/storage/app/detentions/1560493226_cargos.PNG', 0, 3, '24242', '2019-06-14 11:20:26', '2019-06-14 11:20:26'),
(30, '1560548821_holaquehace.docx', 'http://192.168.1.219/yoplanifico-api/storage/app/detentions/1560548821_holaquehace.docx', 0, 2, '24242', '2019-06-15 02:47:01', '2019-06-15 02:47:01'),
(31, '1560548835_holaquehace.docx', 'http://192.168.1.219/yoplanifico-api/storage/app/detentions/1560548835_holaquehace.docx', 0, 2, '24242', '2019-06-15 02:47:15', '2019-06-15 02:47:15'),
(32, '1560559094_holaquehace2.pdf', 'http://192.168.1.219/yoplanifico-api/storage/app/detentions/1560559094_holaquehace2.pdf', 0, 2, '24242', '2019-06-15 05:38:14', '2019-06-15 05:38:14'),
(33, '1560559339_diagrama cargo.PNG', 'http://192.168.1.219/yoplanifico-api/storage/app/detentions/1560559339_diagrama cargo.PNG', 0, 2, '24242', '2019-06-15 05:42:19', '2019-06-15 05:42:19'),
(34, '1560559413_cedulave.png', 'http://192.168.1.219/yoplanifico-api/storage/app/detentions/1560559413_cedulave.png', 0, 2, '24242', '2019-06-15 05:43:33', '2019-06-15 05:43:33'),
(35, '1560559473_cedulave.png', 'http://192.168.1.219/yoplanifico-api/storage/app/detentions/1560559473_cedulave.png', 0, 3, '24242', '2019-06-15 05:44:33', '2019-06-15 05:44:33'),
(36, '1560565114_cargos.PNG', 'http://192.168.1.219/yoplanifico-api/storage/app/detentions/1560565114_cargos.PNG', 0, 2, '24242', '2019-06-15 07:18:34', '2019-06-15 07:18:34'),
(39, '1560866639_cargos.PNG', 'http://192.168.1.219/yoplanifico-api/storage/app/detentions/1560866639_cargos.PNG', 0, 2, '24242', '2019-06-18 19:03:59', '2019-06-18 19:03:59'),
(40, '1560868188_cargos.PNG', 'http://yoplanifico.s3-us-west-2.amazonaws.com/detenciones/1560868188_cargos.PNG', 0, 2, '24242', '2019-06-18 19:29:48', '2019-06-18 19:29:48');

-- --------------------------------------------------------

--
-- Table structure for table `file_types`
--

CREATE TABLE `file_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `file_types`
--

INSERT INTO `file_types` (`id`, `name`, `description`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'pdf', '', 0, '2019-06-06 22:05:57', '2019-06-06 22:05:57'),
(2, 'xls', '', 0, '2019-06-06 22:05:58', '2019-06-06 22:05:58'),
(3, 'docs', '', 0, '2019-06-06 22:05:58', '2019-06-06 22:05:58');

-- --------------------------------------------------------

--
-- Table structure for table `fingers_people`
--

CREATE TABLE `fingers_people` (
  `id` int(10) UNSIGNED NOT NULL,
  `person_id` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `finger` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fingers_people`
--

INSERT INTO `fingers_people` (`id`, `person_id`, `deleted`, `created_at`, `updated_at`, `finger`) VALUES
(1, '233598327', 0, NULL, NULL, NULL),
(2, '3423412', 0, NULL, NULL, NULL),
(3, '34235352', 0, NULL, NULL, NULL),
(4, '394823742', 0, NULL, NULL, NULL),
(5, '8767', 0, NULL, NULL, NULL),
(6, '87576', 0, NULL, NULL, NULL),
(7, '24356393', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_02_17_124115_create_roles_table', 1),
(4, '2018_02_17_124518_create_role_user_table', 1),
(5, '2018_02_17_124618_create_permissions_table', 1),
(6, '2018_02_17_124647_create_permission_role_table', 1),
(7, '2018_02_17_125421_create_permission_user_table', 1),
(8, '2018_08_28_233915_create_params_table', 1),
(9, '2019_01_30_144402_create_company_table', 1),
(10, '2019_01_30_155915_create_person_type_table', 1),
(11, '2019_01_30_155918_create_people_table', 1),
(12, '2019_01_30_213139_create_person_user_table', 1),
(13, '2019_01_31_004911_create_access_table', 1),
(14, '2019_02_13_151804_create_contracts_table', 1),
(15, '2019_02_13_170254_create_position_company_table', 1),
(16, '2019_02_13_173654_create_people_company_table', 1),
(17, '2019_02_13_221226_create_turn_table', 1),
(18, '2019_02_13_223641_create_requirements_company_table', 1),
(19, '2019_02_13_225929_create_requirements_people_table', 1),
(20, '2019_02_27_220132_create_access_details_table', 1),
(21, '2019_05_15_193716_drop_columns_contract_company_position_company_table', 1),
(22, '2019_05_16_144520_rename_position_companies_to_position_contracts', 1),
(23, '2019_05_16_150247_create_position_company_pivot_contracts_table', 1),
(24, '2019_05_22_192455_rename_people_companies_to_employes_tables', 1),
(25, '2019_05_22_230500_drop_column_finger_to_people_table', 1),
(26, '2019_05_22_230900_change_person_id_for_employe_id_in_accesses_table', 1),
(27, '2019_05_22_245436_rename_id_rut_employe_table', 1),
(28, '2019_05_22_245437_create_fingers_people_table', 1),
(29, '2019_05_25_033810_add_columns_accesses_table', 1),
(30, '2019_05_25_195027_change_primary_contracts_table', 1),
(31, '2019_05_30_000204_create_file_type_table', 1),
(32, '2019_05_30_003049_create_detention_type_table', 1),
(33, '2019_05_30_003050_create_detention_table', 1),
(34, '2019_05_30_003051_create_status_event_table', 1),
(35, '2019_05_30_003052_create_event_type_table', 1),
(36, '2019_05_30_003053_create_event_table', 1),
(37, '2019_05_30_003054_create_sub_event_table', 1),
(38, '2019_05_30_003423_create_file_table', 1),
(39, '2019_06_04_011854_create_update_check_event_trigger', 1);

-- --------------------------------------------------------

--
-- Table structure for table `params`
--

CREATE TABLE `params` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `key` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `params`
--

INSERT INTO `params` (`id`, `code`, `title`, `key`, `value`, `description`, `created_at`, `updated_at`) VALUES
(1, 'P-001', 'DIR_DOWNLOAD_REPORT', 'DIR_DOWNLOAD_REPORT', '/home', 'directorio donde se guardaran los reportes', '2019-06-06 22:05:36', '2019-06-06 22:05:36'),
(2, 'P-003', 'LOGO', 'LOGO', '../storage/app/public/tatuco.png', 'logotipo de la empresa', '2019-06-06 22:05:37', '2019-06-06 22:05:37'),
(3, 'P-004', 'IP_SYSTEM', 'IP_SYSTEM', 'http://localhost:8000', 'direccion ip del sistema', '2019-06-06 22:05:37', '2019-06-06 22:05:37');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name_p` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last_name_m` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `date_birth` date DEFAULT NULL,
  `civil_status` enum('single','married','divorced') COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` enum('male','female') COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `image`, `name`, `last_name_p`, `last_name_m`, `date_birth`, `civil_status`, `sex`, `address`, `email`, `deleted`, `created_at`, `updated_at`) VALUES
('000000000-0', NULL, '--', '--', '--', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:50', '2019-06-06 22:05:50'),
('007367179-5', NULL, 'Hector Jaime', 'Santibañez', 'Tapia', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:50', '2019-06-06 22:05:50'),
('007440720K', NULL, 'Juan', 'Sainz', 'Pardo', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:47', '2019-06-06 22:05:47'),
('012691151-3', NULL, 'Fernando andres', 'Melo', 'miranda', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:50', '2019-06-06 22:05:50'),
('013426315-6', NULL, 'Gonzalo', 'Lago', 'Perez', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:50', '2019-06-06 22:05:50'),
('014457421-4', NULL, 'Ruben Jaime', 'Santa Cruz', 'Cabezas', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:50', '2019-06-06 22:05:50'),
('015763433K', NULL, 'Enrique Ignacio', 'Hidalgo', 'Palavicino', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:48', '2019-06-06 22:05:48'),
('016051322-5', NULL, 'Lixy Jaqueline', 'Ortiz', 'Chavez', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:50', '2019-06-06 22:05:50'),
('016348109K', NULL, 'Cristian', 'Solis', 'Salvo', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:46', '2019-06-06 22:05:46'),
('016436156K', NULL, 'Paula', 'Araya', 'Iturra', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:47', '2019-06-06 22:05:47'),
('017094299K', NULL, 'Manuel', 'Collao', 'Gutierrez', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:46', '2019-06-06 22:05:46'),
('017387633-5', NULL, 'Carlos', 'Gomez', 'galdames', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:50', '2019-06-06 22:05:50'),
('018235323K', NULL, 'Jhon', 'Gonzalez', 'Lagos', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:49', '2019-06-06 22:05:49'),
('101516970', NULL, 'Carlos Eduardo ', 'Araya ', 'Garay', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:50', '2019-06-06 22:05:50'),
('105229038', NULL, 'Fernando Alberto', 'Sanchez', 'Lillo', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:50', '2019-06-06 22:05:50'),
('105310013', NULL, 'Felix', 'Vega', 'Fernandez', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:47', '2019-06-06 22:05:47'),
('109367753', NULL, 'Angel', 'Diaz', 'Humeres', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:50', '2019-06-06 22:05:50'),
('112195335', NULL, 'RAUL', 'RIVADENEIRA', 'CONTRERAS', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:48', '2019-06-06 22:05:48'),
('115183133', NULL, 'Omar Nelson', 'Tejos', 'Silva', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:49', '2019-06-06 22:05:49'),
('116148358', NULL, 'Claudio', 'Aguilar', 'Rodriguez', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:47', '2019-06-06 22:05:47'),
('119019397', NULL, 'Marcelo', 'Gutierres', 'Mardones', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:47', '2019-06-06 22:05:47'),
('119046750', NULL, 'RICARDO ', 'MARIN', 'SALAZAR', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:47', '2019-06-06 22:05:47'),
('122159302', NULL, 'Nasslo', 'Altamirano', 'Leposte', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:47', '2019-06-06 22:05:47'),
('122389928', NULL, 'Claudio', 'Muñoz', 'Maldonado', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:50', '2019-06-06 22:05:50'),
('123478134', NULL, 'Alejandro', 'Cortes', 'Gallardo ', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:50', '2019-06-06 22:05:50'),
('123957172', NULL, 'Luis', 'Barrera', 'Silva', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:49', '2019-06-06 22:05:49'),
('124247977', NULL, 'Hector Vladimir', 'Antiquera', 'Cortes', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:48', '2019-06-06 22:05:48'),
('124261643', NULL, 'Francisco Fabian', 'Rivera', 'Araos', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:47', '2019-06-06 22:05:47'),
('124415594', NULL, 'Marco', 'Meza', 'Antunez', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:47', '2019-06-06 22:05:47'),
('125763774', NULL, 'Francisco', 'Torres', 'Fernandez', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:46', '2019-06-06 22:05:46'),
('126094531', NULL, 'Paul ', 'Pierola', 'Mesina', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:49', '2019-06-06 22:05:49'),
('128053905', NULL, 'Carlos Francisco ', 'Pinto ', 'Reyes ', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:49', '2019-06-06 22:05:49'),
('128363203', NULL, 'Ronaldo Jose', 'Tapia', 'Lopez', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:50', '2019-06-06 22:05:50'),
('129430435', NULL, 'Mauro', 'Ardiles', 'Gloria', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:46', '2019-06-06 22:05:46'),
('129733063', NULL, 'Ricardo Andres', 'Cerda', 'Crisostomo', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:50', '2019-06-06 22:05:50'),
('131362617', NULL, 'Cristian Alexis', 'Perez', 'Perez', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:46', '2019-06-06 22:05:46'),
('131785356', NULL, 'PAOLO', 'VIVAR', 'ARAYA', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:50', '2019-06-06 22:05:50'),
('131785763', NULL, 'Ema Isabel ', 'Gallardo ', 'Saavedra', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:47', '2019-06-06 22:05:47'),
('132193320', NULL, 'Jose', 'Chavez', 'Valencia', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:47', '2019-06-06 22:05:47'),
('132249431', NULL, 'Rodrigo Alexis', 'Jorquera', 'Lamas', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:48', '2019-06-06 22:05:48'),
('134263156', NULL, 'Gonzalo', 'Lago', 'Perez', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:49', '2019-06-06 22:05:49'),
('138671151', NULL, 'Fernando Ariel', 'Silva', 'Godoy', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:45', '2019-06-06 22:05:45'),
('139905598', NULL, 'Hector ', 'Vera', 'Morales', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:47', '2019-06-06 22:05:47'),
('140077445', NULL, 'Jose', 'Lopez', 'Tobar', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:48', '2019-06-06 22:05:48'),
('143797090', NULL, 'FRANCISCO JAVIER', 'NILO', 'GALLARDO', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:46', '2019-06-06 22:05:46'),
('145939402', NULL, 'Milton Cuper', 'Calahuana', 'Muñoz', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:49', '2019-06-06 22:05:49'),
('150145805', NULL, 'JUAN', 'CORTES', 'ACUÑA', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:50', '2019-06-06 22:05:50'),
('150440882', NULL, 'Cristian', 'Araya', 'Robles', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:48', '2019-06-06 22:05:48'),
('155144173', NULL, 'Raul Osman', 'Ojeda', 'Rojas', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:47', '2019-06-06 22:05:47'),
('155145153', NULL, 'Andrés Antonio', 'Avalos', 'Muñoz', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:48', '2019-06-06 22:05:48'),
('155192712', NULL, 'DAMO', 'BENITEZ', 'VERGARA', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:48', '2019-06-06 22:05:48'),
('155750472', NULL, 'Annie Paulina', 'Herrera', 'Molina', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:48', '2019-06-06 22:05:48'),
('156919802', NULL, 'Marco', 'Cortes', 'Garcia', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:46', '2019-06-06 22:05:46'),
('156925683', NULL, 'VICTOR ALBERTO', 'VILLCA', 'ALAVE', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:47', '2019-06-06 22:05:47'),
('156946664', NULL, 'Exequiel', 'Carrizo', 'Diaz', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:46', '2019-06-06 22:05:46'),
('158101122', NULL, 'Rodrigo', 'Lopez', 'Jimenez', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:50', '2019-06-06 22:05:50'),
('159113930', NULL, 'Flavio', 'Saez', 'Chandia', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:45', '2019-06-06 22:05:45'),
('160513225', NULL, 'Lixy Jaqueline', 'Ortiz', 'Chavez', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:49', '2019-06-06 22:05:49'),
('160860316', NULL, 'Juan Francisco ', 'Coñoman', 'Briones', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:46', '2019-06-06 22:05:46'),
('161359858', NULL, 'Juan Manuel', 'Veliz', 'Medero', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:46', '2019-06-06 22:05:46'),
('162343696', NULL, 'Jesus', 'Vera', 'Puentes', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:47', '2019-06-06 22:05:47'),
('162427989', NULL, 'Dany', 'Prieto', 'Campos', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:48', '2019-06-06 22:05:48'),
('162585401', NULL, 'Manuel', 'Callpa', 'Carrazana', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:47', '2019-06-06 22:05:47'),
('163508435', NULL, 'Hernan Rodrigo', 'Avila', 'Mena', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:50', '2019-06-06 22:05:50'),
('165494768', NULL, 'Jessica', 'Arias', 'Castillo', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:49', '2019-06-06 22:05:49'),
('166142261', NULL, 'Nataly Alejandra ', 'Rebolledo', 'Ardiles', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:49', '2019-06-06 22:05:49'),
('166875331', NULL, 'Bastián ', 'Torres ', 'Varas ', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:47', '2019-06-06 22:05:47'),
('167235166', NULL, 'Abelardo', 'Cortes', 'Araya', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:48', '2019-06-06 22:05:48'),
('168055854', NULL, 'ELIAS GABRIEL ', 'JARA', 'MARTINEZ', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:46', '2019-06-06 22:05:46'),
('169269157', NULL, 'FERNANDO', 'TAPIA', '-', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:48', '2019-06-06 22:05:48'),
('170930010', NULL, 'Julio Alejandro', 'Contreras', 'Coria', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:49', '2019-06-06 22:05:49'),
('170968808', NULL, 'Carlos Francisco', 'Saa', 'Gonzalez', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:48', '2019-06-06 22:05:48'),
('172775853', NULL, 'Cristobal', 'Robledo', 'Medalla', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:49', '2019-06-06 22:05:49'),
('174326657', NULL, 'Borys Patricio', 'Rojas', 'Salazar', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:46', '2019-06-06 22:05:46'),
('175537031', NULL, 'Daniel Alejandro', 'Garcia', 'Maldonado', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:46', '2019-06-06 22:05:46'),
('176551607', NULL, 'Maykel Andres', 'Aguirre', 'Trigo', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:50', '2019-06-06 22:05:50'),
('177360767', NULL, 'Diego Andres', 'Campos ', 'Contreras', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:48', '2019-06-06 22:05:48'),
('182391425', NULL, 'Susana', 'Bracho', 'Rosas', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:47', '2019-06-06 22:05:47'),
('183173006', NULL, 'Diego Alexis', 'Rivera', 'Gallardo', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:46', '2019-06-06 22:05:46'),
('184048264', NULL, 'Felipe Camilo', 'Calfin', 'Morales', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:46', '2019-06-06 22:05:46'),
('184214954', NULL, 'Ivan', 'Betancourt', 'Valencia', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:46', '2019-06-06 22:05:46'),
('187918596', NULL, 'Cesar ', 'Ferrer', 'Vega', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:47', '2019-06-06 22:05:47'),
('187934265', NULL, 'Agustin', 'Pizarro', 'Navea', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:48', '2019-06-06 22:05:48'),
('190989836', NULL, 'Darién', 'Araya', 'López', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:48', '2019-06-06 22:05:48'),
('233598327', NULL, 'Luis', 'Ramirez', 'Mendez', '1995-08-23', NULL, NULL, NULL, NULL, 0, NULL, NULL),
('24356393', NULL, 'luis', 'ramirez', 'mendez', '1995-08-23', NULL, NULL, NULL, NULL, 0, NULL, NULL),
('3423412', NULL, 'laura', 'chacon', 'garcia', '1994-11-20', NULL, NULL, NULL, NULL, 0, NULL, NULL),
('34235352', NULL, 'fabio', 'silva', 'caceres', '1990-06-13', NULL, NULL, NULL, NULL, 0, NULL, NULL),
('394823742', NULL, 'Mariangel', 'Ramirez', 'MEndez', '2004-11-20', NULL, NULL, NULL, NULL, 0, NULL, NULL),
('78612819', NULL, 'Ivan', 'Alvayay', 'Ossandon', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:48', '2019-06-06 22:05:48'),
('81601771', NULL, 'Jorge', 'Vera', 'Oyarzun', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:48', '2019-06-06 22:05:48'),
('84022012', NULL, 'Guillermo', 'Avalos', ' ', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:46', '2019-06-06 22:05:46'),
('84961566', NULL, 'Armando', 'Quezada', 'Pizarro', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:47', '2019-06-06 22:05:47'),
('86985365', NULL, 'Belarmino', 'Ramirez', 'Avalos', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:49', '2019-06-06 22:05:49'),
('87576', NULL, 'kfjsdhkjfsdh', 'jhgjhg', 'jhghjg', '2019-06-13', NULL, NULL, NULL, NULL, 0, NULL, NULL),
('8767', NULL, 'dasd', 'kjhj', 'jhgj', '2019-06-15', NULL, NULL, NULL, NULL, 0, NULL, NULL),
('90978764', NULL, 'Marco', 'Rebolledo', 'Romero', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:48', '2019-06-06 22:05:48'),
('93190556', NULL, 'Eleacin Omar', 'Alegria', 'Fabrega', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:49', '2019-06-06 22:05:49'),
('93381807', NULL, 'Juan Carlos', 'Valdivia', 'Contreras', NULL, NULL, NULL, NULL, NULL, 0, '2019-06-06 22:05:48', '2019-06-06 22:05:48');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` char(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `code`, `name`, `slug`, `description`, `deleted`, `created_at`, `updated_at`) VALUES
(1, NULL, 'index users', 'index.users', 'list users', 0, '2019-06-06 22:05:43', '2019-06-06 22:05:43'),
(2, NULL, 'update user', 'update.users', 'update user', 0, '2019-06-06 22:05:44', '2019-06-06 22:05:44'),
(3, NULL, 'show user', 'show.users', 'show user', 0, '2019-06-06 22:05:45', '2019-06-06 22:05:45'),
(4, NULL, 'delete user', 'delete.users', 'delete user', 0, '2019-06-06 22:05:45', '2019-06-06 22:05:45'),
(5, NULL, 'backup bd', 'run.backup', 'runing backup database', 0, '2019-06-06 22:05:45', '2019-06-06 22:05:45');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-06-06 22:05:44', '2019-06-06 22:05:44'),
(2, 2, 1, '2019-06-06 22:05:44', '2019-06-06 22:05:44'),
(3, 3, 1, '2019-06-06 22:05:45', '2019-06-06 22:05:45'),
(4, 5, 1, '2019-06-06 22:05:45', '2019-06-06 22:05:45'),
(5, 4, 1, '2019-06-06 22:05:45', '2019-06-06 22:05:45');

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `person_types`
--

CREATE TABLE `person_types` (
  `id` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `person_types`
--

INSERT INTO `person_types` (`id`, `name`, `description`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'User', 'Employees of the Company with Income to the system.', 0, '2019-06-06 22:05:54', '2019-06-06 22:05:54'),
(2, 'Personal', 'Employees of the Company', 0, '2019-06-06 22:05:54', '2019-06-06 22:05:54');

-- --------------------------------------------------------

--
-- Table structure for table `person_user`
--

CREATE TABLE `person_user` (
  `id` int(11) NOT NULL,
  `person_id` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `person_user`
--

INSERT INTO `person_user` (`id`, `person_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '017387633-5', 1, '2019-06-06 22:05:55', '2019-06-06 22:05:55');

-- --------------------------------------------------------

--
-- Table structure for table `position_companies`
--

CREATE TABLE `position_companies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `position_companies`
--

INSERT INTO `position_companies` (`id`, `name`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'Mecanico', 0, '2019-06-06 22:05:51', '2019-06-06 22:05:51'),
(2, 'Informatico', 0, '2019-06-06 22:05:51', '2019-06-06 22:05:51'),
(3, 'Garzon', 0, '2019-06-06 22:05:51', '2019-06-06 22:05:51'),
(4, 'Auxiliar', 0, '2019-06-06 22:05:51', '2019-06-06 22:05:51'),
(5, 'Enfermero', 0, '2019-06-06 22:05:51', '2019-06-06 22:05:51');

-- --------------------------------------------------------

--
-- Table structure for table `position_company_pivot_contracts`
--

CREATE TABLE `position_company_pivot_contracts` (
  `id` int(10) UNSIGNED NOT NULL,
  `contract_id` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `position_id` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `position_company_pivot_contracts`
--

INSERT INTO `position_company_pivot_contracts` (`id`, `contract_id`, `position_id`, `deleted`, `created_at`, `updated_at`) VALUES
(1, '4540002894', 3, 0, '2019-06-06 22:05:55', '2019-06-06 22:05:55'),
(2, '4540002870', 2, 0, '2019-06-06 22:05:56', '2019-06-06 22:05:56'),
(3, '4540002892', 1, 0, '2019-06-06 22:05:56', '2019-06-06 22:05:56'),
(4, '4540003012', 2, 0, '2019-06-06 22:05:56', '2019-06-06 22:05:56'),
(5, '4540003013', 1, 0, '2019-06-06 22:05:56', '2019-06-06 22:05:56');

-- --------------------------------------------------------

--
-- Table structure for table `requirements_company`
--

CREATE TABLE `requirements_company` (
  `id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_id` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `contract_id` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `check` enum('active','disabled') COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `requirements_company`
--

INSERT INTO `requirements_company` (`id`, `description`, `company_id`, `contract_id`, `check`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'Se agragaran campos segun cantidad de requisitos', '930770000', '4540002894', 'active', 0, '2019-06-06 22:05:53', '2019-06-06 22:05:53'),
(2, 'Se agragaran campos segun cantidad de requisitos', '930770000', '4540002894', 'active', 0, '2019-06-06 22:05:53', '2019-06-06 22:05:53'),
(3, 'Se agragaran campos segun cantidad de requisitos', '930770000', '4540002894', 'active', 0, '2019-06-06 22:05:53', '2019-06-06 22:05:53'),
(4, 'Se agragaran campos segun cantidad de requisitos', '930770000', '4540002894', 'active', 0, '2019-06-06 22:05:54', '2019-06-06 22:05:54');

-- --------------------------------------------------------

--
-- Table structure for table `requirements_people`
--

CREATE TABLE `requirements_people` (
  `id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `people_id` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `company_id` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `contract_id` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `check` enum('active','disabled') COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `requirements_people`
--

INSERT INTO `requirements_people` (`id`, `description`, `people_id`, `company_id`, `contract_id`, `check`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'Se agragaran campos segun cantidad de requisitos', '128363203', '930770000', '4540002894', 'active', 0, '2019-06-06 22:05:54', '2019-06-06 22:05:54');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `code`, `name`, `slug`, `description`, `deleted`, `created_at`, `updated_at`) VALUES
(1, NULL, 'sysadmin', 'sysadmin', 'root of the system', 0, '2019-06-06 22:05:41', '2019-06-06 22:05:41'),
(2, NULL, 'admin', 'admin', 'system administrator', 0, '2019-06-06 22:05:41', '2019-06-06 22:05:41'),
(3, NULL, 'operador', 'operator', 'system operator', 0, '2019-06-06 22:05:42', '2019-06-06 22:05:42'),
(4, NULL, 'guest', 'guest', 'public user of the system', 0, '2019-06-06 22:05:42', '2019-06-06 22:05:42');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-06-06 22:05:41', '2019-06-06 22:05:41'),
(2, 2, 2, '2019-06-06 22:05:41', '2019-06-06 22:05:41'),
(3, 3, 3, '2019-06-06 22:05:42', '2019-06-06 22:05:42'),
(4, 4, 4, '2019-06-06 22:05:43', '2019-06-06 22:05:43'),
(5, 2, 1, '2019-06-06 22:05:43', '2019-06-06 22:05:43'),
(6, 3, 1, '2019-06-06 22:05:43', '2019-06-06 22:05:43'),
(7, 4, 1, '2019-06-06 22:05:43', '2019-06-06 22:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `status_events`
--

CREATE TABLE `status_events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `status_events`
--

INSERT INTO `status_events` (`id`, `name`, `description`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'Dentro de Plazo', '', 0, '2019-06-06 22:05:59', '2019-06-06 22:05:59'),
(2, 'Fuera de Plazo', '', 0, '2019-06-06 22:05:59', '2019-06-06 22:05:59'),
(3, 'Pendiente', '', 0, '2019-06-06 22:05:59', '2019-06-06 22:05:59');

-- --------------------------------------------------------

--
-- Table structure for table `sub_events`
--

CREATE TABLE `sub_events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `check` tinyint(1) NOT NULL DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `event_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Triggers `sub_events`
--
DELIMITER $$
CREATE TRIGGER `check_update_event` AFTER UPDATE ON `sub_events` FOR EACH ROW BEGIN
                        DECLARE eventos_completados INT;
                        DECLARE cantidad_eventos INT;
                        DECLARE fecha DATE;
                        DECLARE hoy DATE;
                        SET cantidad_eventos = (SELECT COUNT(*) FROM sub_events WHERE event_id = NEW.event_id);
                        SET eventos_completados = (SELECT COUNT(*) FROM sub_events WHERE event_id = NEW.event_id AND `check` = 1);
                        IF (cantidad_eventos = eventos_completados)  THEN
                            SET fecha = (SELECT date FROM events WHERE id = NEW.event_id);
                            SET hoy = (SELECT CURDATE());
                            IF (hoy <= fecha) THEN
                                UPDATE events SET status_id = 1,`check` = 1 WHERE id = NEW.event_id;
                            ELSE
                                UPDATE events SET status_id = 2, `check` = 1 WHERE id = NEW.event_id;
                            END IF;
                        END IF;
                    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `turns`
--

CREATE TABLE `turns` (
  `id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `working_days` int(11) DEFAULT NULL,
  `break_days` int(11) DEFAULT NULL,
  `shift` enum('diurnal','night') COLLATE utf8_unicode_ci NOT NULL,
  `company_id` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `contract_id` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `turns`
--

INSERT INTO `turns` (`id`, `description`, `working_days`, `break_days`, `shift`, `company_id`, `contract_id`, `deleted`, `created_at`, `updated_at`) VALUES
(1, '5x2', 5, 2, 'diurnal', '930770000', '4540002894', 0, '2019-06-06 22:05:51', '2019-06-06 22:05:51'),
(2, '4x3', 4, 3, 'diurnal', '930770000', '4540002894', 0, '2019-06-06 22:05:52', '2019-06-06 22:05:52'),
(3, '7x7', 7, 7, 'diurnal', '930770000', '4540002894', 0, '2019-06-06 22:05:52', '2019-06-06 22:05:52'),
(4, '15x15', 15, 15, 'diurnal', '930770000', '4540002894', 0, '2019-06-06 22:05:52', '2019-06-06 22:05:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `code`, `name`, `email`, `email_verified_at`, `password`, `deleted`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Carlos Gomez', 'Carlosgomez@mcentinela.cl', NULL, '$2y$10$WVb1Y9jwgP30SZBgPU6HCeb3u2hODmEA9BTEeAFZMH7hWnwUOjya.', 0, NULL, '2019-06-06 22:05:38', '2019-06-06 22:05:38'),
(2, NULL, 'Admin M-Centinela', 'admin@mcentinela.cl', NULL, '$2y$10$3leDbAINFkHsnwdyYyG1mOPg87VeRSucyOuXuXj.hyMbBShX7RgHu', 0, NULL, '2019-06-06 22:05:38', '2019-06-06 22:05:38'),
(3, NULL, 'Miguel plaza', 'miguel.plaza@plazfer.cl', NULL, '$2y$10$YVGIqGtvFdhlae6bewnO8.Ks8BNcHhzgjDciZVfZtxC3YXG5AbDl2', 0, NULL, '2019-06-06 22:05:39', '2019-06-06 22:05:39'),
(4, NULL, 'Ysrael Mendez', 'ysrael.mendez@plazfer.cl', NULL, '$2y$10$gdHAnjAfiA24XvSHIt5i9eVJkcSPL91R0pK7JSvAuEWzeSd.upol.', 0, NULL, '2019-06-06 22:05:40', '2019-06-06 22:05:40'),
(5, NULL, 'Sysadmin', 'sysadmin@plazfer.cl', NULL, '$2y$10$nCSIGXN4wzaCOhsUJc8PWumkr1v1tfotUh01Hadr1T6ck0xVjeBI.', 0, NULL, '2019-06-06 22:05:41', '2019-06-06 22:05:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accesses`
--
ALTER TABLE `accesses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accesses_employes_id_fk` (`employe_id`);

--
-- Indexes for table `access_details`
--
ALTER TABLE `access_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `access_details_access_id_foreign` (`access_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_name_unique` (`name`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`cod_contract`),
  ADD UNIQUE KEY `contracts_cod_contract_unique` (`cod_contract`),
  ADD KEY `contracts_company_id_foreign` (`company_id`),
  ADD KEY `contracts_user_id_foreign` (`user_id`),
  ADD KEY `contracts_adm_aux_id_foreign` (`adm_aux_id`),
  ADD KEY `contracts_admec_id_foreign` (`admec_id`),
  ADD KEY `contracts_admec_aux_id_foreign` (`admec_aux_id`);

--
-- Indexes for table `detentions`
--
ALTER TABLE `detentions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detentions_type_id_foreign` (`type_id`);

--
-- Indexes for table `detention_types`
--
ALTER TABLE `detention_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `people_companies_people_id_foreign` (`people_id`),
  ADD KEY `people_companies_company_id_foreign` (`company_id`),
  ADD KEY `people_companies_contract_id_foreign` (`contract_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_type_id_foreign` (`type_id`),
  ADD KEY `events_status_id_foreign` (`status_id`),
  ADD KEY `events_detention_id_foreign` (`detention_id`);

--
-- Indexes for table `event_types`
--
ALTER TABLE `event_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `event_types_name_unique` (`name`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `files_name_unique` (`name`),
  ADD KEY `files_type_id_foreign` (`type_id`),
  ADD KEY `files_detention_id_foreign` (`detention_id`);

--
-- Indexes for table `file_types`
--
ALTER TABLE `file_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `file_types_name_unique` (`name`);

--
-- Indexes for table `fingers_people`
--
ALTER TABLE `fingers_people`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fingers_people_person_id_foreign` (`person_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `params`
--
ALTER TABLE `params`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `params_key_unique` (`key`),
  ADD UNIQUE KEY `params_code_unique` (`code`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `people_email_unique` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`),
  ADD UNIQUE KEY `permissions_code_unique` (`code`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user_permission_id_index` (`permission_id`),
  ADD KEY `permission_user_user_id_index` (`user_id`);

--
-- Indexes for table `person_types`
--
ALTER TABLE `person_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `person_types_name_unique` (`name`);

--
-- Indexes for table `person_user`
--
ALTER TABLE `person_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `person_user_person_id_foreign` (`person_id`),
  ADD KEY `person_user_user_id_index` (`user_id`);

--
-- Indexes for table `position_companies`
--
ALTER TABLE `position_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position_company_pivot_contracts`
--
ALTER TABLE `position_company_pivot_contracts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `position_company_pivot_contracts_contract_id_foreign` (`contract_id`),
  ADD KEY `position_company_pivot_contracts_position_id_foreign` (`position_id`);

--
-- Indexes for table `requirements_company`
--
ALTER TABLE `requirements_company`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requirements_company_company_id_foreign` (`company_id`),
  ADD KEY `requirements_company_contract_id_foreign` (`contract_id`);

--
-- Indexes for table `requirements_people`
--
ALTER TABLE `requirements_people`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requirements_people_people_id_foreign` (`people_id`),
  ADD KEY `requirements_people_company_id_foreign` (`company_id`),
  ADD KEY `requirements_people_contract_id_foreign` (`contract_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`),
  ADD UNIQUE KEY `roles_code_unique` (`code`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

--
-- Indexes for table `status_events`
--
ALTER TABLE `status_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_events`
--
ALTER TABLE `sub_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_events_event_id_foreign` (`event_id`);

--
-- Indexes for table `turns`
--
ALTER TABLE `turns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `turns_company_id_foreign` (`company_id`),
  ADD KEY `turns_contract_id_foreign` (`contract_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_code_unique` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accesses`
--
ALTER TABLE `accesses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `access_details`
--
ALTER TABLE `access_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detention_types`
--
ALTER TABLE `detention_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `event_types`
--
ALTER TABLE `event_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `file_types`
--
ALTER TABLE `file_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fingers_people`
--
ALTER TABLE `fingers_people`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `params`
--
ALTER TABLE `params`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `person_types`
--
ALTER TABLE `person_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `person_user`
--
ALTER TABLE `person_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `position_companies`
--
ALTER TABLE `position_companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `position_company_pivot_contracts`
--
ALTER TABLE `position_company_pivot_contracts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `requirements_company`
--
ALTER TABLE `requirements_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `requirements_people`
--
ALTER TABLE `requirements_people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `status_events`
--
ALTER TABLE `status_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_events`
--
ALTER TABLE `sub_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `turns`
--
ALTER TABLE `turns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accesses`
--
ALTER TABLE `accesses`
  ADD CONSTRAINT `accesses_employes_id_fk` FOREIGN KEY (`employe_id`) REFERENCES `employes` (`id`);

--
-- Constraints for table `access_details`
--
ALTER TABLE `access_details`
  ADD CONSTRAINT `access_details_access_id_foreign` FOREIGN KEY (`access_id`) REFERENCES `accesses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contracts`
--
ALTER TABLE `contracts`
  ADD CONSTRAINT `contracts_adm_aux_id_foreign` FOREIGN KEY (`adm_aux_id`) REFERENCES `people` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contracts_admec_aux_id_foreign` FOREIGN KEY (`admec_aux_id`) REFERENCES `people` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contracts_admec_id_foreign` FOREIGN KEY (`admec_id`) REFERENCES `people` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contracts_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `contracts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `people` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `detentions`
--
ALTER TABLE `detentions`
  ADD CONSTRAINT `detentions_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `detention_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employes`
--
ALTER TABLE `employes`
  ADD CONSTRAINT `people_companies_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `people_companies_contract_id_foreign` FOREIGN KEY (`contract_id`) REFERENCES `contracts` (`cod_contract`),
  ADD CONSTRAINT `people_companies_people_id_foreign` FOREIGN KEY (`people_id`) REFERENCES `people` (`id`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_detention_id_foreign` FOREIGN KEY (`detention_id`) REFERENCES `detentions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `events_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `status_events` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `events_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `event_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_detention_id_foreign` FOREIGN KEY (`detention_id`) REFERENCES `detentions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `files_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `file_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fingers_people`
--
ALTER TABLE `fingers_people`
  ADD CONSTRAINT `fingers_people_person_id_foreign` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `person_user`
--
ALTER TABLE `person_user`
  ADD CONSTRAINT `person_user_person_id_foreign` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `person_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `position_company_pivot_contracts`
--
ALTER TABLE `position_company_pivot_contracts`
  ADD CONSTRAINT `position_company_pivot_contracts_contract_id_foreign` FOREIGN KEY (`contract_id`) REFERENCES `contracts` (`cod_contract`),
  ADD CONSTRAINT `position_company_pivot_contracts_position_id_foreign` FOREIGN KEY (`position_id`) REFERENCES `position_companies` (`id`);

--
-- Constraints for table `requirements_company`
--
ALTER TABLE `requirements_company`
  ADD CONSTRAINT `requirements_company_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `requirements_company_contract_id_foreign` FOREIGN KEY (`contract_id`) REFERENCES `contracts` (`cod_contract`);

--
-- Constraints for table `requirements_people`
--
ALTER TABLE `requirements_people`
  ADD CONSTRAINT `requirements_people_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `requirements_people_contract_id_foreign` FOREIGN KEY (`contract_id`) REFERENCES `contracts` (`cod_contract`),
  ADD CONSTRAINT `requirements_people_people_id_foreign` FOREIGN KEY (`people_id`) REFERENCES `people` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_events`
--
ALTER TABLE `sub_events`
  ADD CONSTRAINT `sub_events_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `turns`
--
ALTER TABLE `turns`
  ADD CONSTRAINT `turns_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `turns_contract_id_foreign` FOREIGN KEY (`contract_id`) REFERENCES `contracts` (`cod_contract`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
