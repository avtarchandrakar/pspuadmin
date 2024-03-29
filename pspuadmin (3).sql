-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 07:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pspuadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_settings`
--

CREATE TABLE `application_settings` (
  `m_app_id` int(11) NOT NULL,
  `m_app_name` varchar(200) NOT NULL,
  `m_app_title` varchar(200) NOT NULL,
  `m_app_icon` varchar(200) NOT NULL,
  `m_app_logo` varchar(200) NOT NULL,
  `m_app_banner` varchar(200) NOT NULL,
  `m_app_email` varchar(200) NOT NULL,
  `m_app_mobile` varchar(20) NOT NULL,
  `m_app_keywords` text NOT NULL,
  `m_app_description` text NOT NULL,
  `m_app_fb` varchar(200) NOT NULL,
  `m_app_insta` varchar(200) NOT NULL,
  `m_app_youtube` varchar(200) NOT NULL,
  `m_app_twitter` varchar(200) NOT NULL,
  `m_app_whatsapp` varchar(200) DEFAULT NULL,
  `m_app_status` double NOT NULL,
  `m_app_version` double NOT NULL,
  `m_agent_app_version` double NOT NULL,
  `m_app_website` varchar(200) NOT NULL,
  `m_app_address` text NOT NULL,
  `m_app_timezone` varchar(200) NOT NULL,
  `m_app_date_format` varchar(200) NOT NULL,
  `m_app_time_format` varchar(200) NOT NULL,
  `m_app_language` varchar(200) NOT NULL,
  `m_app_currency` varchar(200) NOT NULL,
  `paid_listing_added_amt` double NOT NULL,
  `agent_daily_milestone` double NOT NULL,
  `daily_milestone_amount` double NOT NULL,
  `agent_order_commision` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `application_settings`
--

INSERT INTO `application_settings` (`m_app_id`, `m_app_name`, `m_app_title`, `m_app_icon`, `m_app_logo`, `m_app_banner`, `m_app_email`, `m_app_mobile`, `m_app_keywords`, `m_app_description`, `m_app_fb`, `m_app_insta`, `m_app_youtube`, `m_app_twitter`, `m_app_whatsapp`, `m_app_status`, `m_app_version`, `m_agent_app_version`, `m_app_website`, `m_app_address`, `m_app_timezone`, `m_app_date_format`, `m_app_time_format`, `m_app_language`, `m_app_currency`, `paid_listing_added_amt`, `agent_daily_milestone`, `daily_milestone_amount`, `agent_order_commision`) VALUES
(1, 'PSPU Admin Panel', 'PSPU Admin Panel', 'logo2.png', 'logo1.png', 'logo3.png', 'PSPU Admin Panel', '+91 9425234990,+91 9', 'PolyBond', 'Durg', '', '', '', '', '', 0, 5, 1, '', 'Central Office\r\nMadhariya Complex, Maharaja Chowk, Mukt Nagar, District- Durg (Chhattisgarh) Pin – 491001\r\nContact Mobile – 9425234990,9303650593', 'Asia/Kolkata', 'DD/MM/YY', '24 Hours', '', '', 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `data` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `user_agent`, `timestamp`, `data`) VALUES
('7s8ia8ntkl4r1f4t4gpa86oau0neaqe9', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664788552;is_user_in|b:1;user_id|s:1:\"1\";'),
('k84rsqritcntr1ovufk2r5o8rvaorq4u', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664789034;is_user_in|b:1;user_id|s:1:\"1\";'),
('9fr2nkfou20g7fatsmh1ej5e4btj8er7', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664789354;is_user_in|b:1;user_id|s:1:\"1\";'),
('q6b76us5ulipc5d1a41k08jlevdr03m9', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664789781;is_user_in|b:1;user_id|s:1:\"1\";'),
('i2qkrbdr4quklvnfv4lq54bu858j5f0r', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664790943;is_user_in|b:1;user_id|s:1:\"1\";'),
('f1ea7688nieb7iec57pi9bu4n1n966r7', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664791598;is_user_in|b:1;user_id|s:1:\"1\";'),
('17dvohe9i4l8do53s7a6sub0ev7mbig6', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664793143;is_user_in|b:1;user_id|s:1:\"1\";'),
('9aklpcfte9o98m1s0s454ad05hqtgca6', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664794645;is_user_in|b:1;user_id|s:1:\"1\";'),
('6brqf1oi58isr5hkc80jt55vudpehu27', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664795532;is_user_in|b:1;user_id|s:1:\"1\";'),
('6oqn3nrprtb5tn6npcpjhs8re6sirkpp', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664795851;is_user_in|b:1;user_id|s:1:\"1\";'),
('59clath8jq04rhif602cf86cfd39r512', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664796157;is_user_in|b:1;user_id|s:1:\"1\";'),
('gt37loo0m3hnenafuojp7c8lmoiib1nv', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664796567;is_user_in|b:1;user_id|s:1:\"1\";'),
('9av4n0lgabi92j7fv55s7ql8m8ohksmr', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664797293;is_user_in|b:1;user_id|s:1:\"1\";'),
('3vkdf46ugl1gbc17p5ke5jbi98n6i2bi', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664797652;is_user_in|b:1;user_id|s:1:\"1\";'),
('0iel67v2mk7ugnh1nfhc8t6shkq3p8dm', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664797978;is_user_in|b:1;user_id|s:1:\"1\";'),
('u8n5fpmgkrho5emp74ph6iojgi4dnq0l', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664798594;is_user_in|b:1;user_id|s:1:\"1\";'),
('41hmqr976070vk7h1fi6l286c7vd2iul', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664799100;is_user_in|b:1;user_id|s:1:\"1\";'),
('ds9dgckdu0pdd138s0j9mcac405d6ps1', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664799473;is_user_in|b:1;user_id|s:1:\"1\";'),
('b0o9lbnk6lr4gg9d9chf4vkj05ac426l', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664799909;is_user_in|b:1;user_id|s:1:\"1\";'),
('888ajpb305hfocuq2jdb61h72pojuqmj', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664800918;is_user_in|b:1;user_id|s:1:\"1\";'),
('a6v9g2bbej9lmv502asjtgehpqj5gppd', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664801322;is_user_in|b:1;user_id|s:1:\"1\";'),
('cplf4vtm7f0dlb4kjjrbrmp4bjjr9mc2', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664801665;is_user_in|b:1;user_id|s:1:\"1\";'),
('5fui9hfd2dupu7o3u419bp441di54mhm', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664802032;is_user_in|b:1;user_id|s:1:\"1\";'),
('bvaochrdeg6husg8sdl2nao3p3jfpl7v', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664802032;is_user_in|b:1;user_id|s:1:\"1\";'),
('n4scj44mulblf3qo658m1oh6vp4dbk4n', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664860675;is_user_in|b:1;user_id|s:1:\"1\";'),
('8iddm5meke25hm8uftvcp6sjnn37n9bb', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664869521;is_user_in|b:1;user_id|s:1:\"1\";'),
('0ctjmdbhr7bqv8np17ugcb5ngqf1bjcp', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664869521;is_user_in|b:1;user_id|s:1:\"1\";'),
('slebhg2vf3klt0bq2na9clnotbkg67i5', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664885108;is_user_in|b:1;user_id|s:1:\"1\";'),
('ttmveqp0up5c0dbo3ir37354c7di9sg4', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664886282;is_user_in|b:1;user_id|s:1:\"1\";'),
('8eg1o9kkf09ckkv807ucabgnbsvnhdr7', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664887093;is_user_in|b:1;user_id|s:1:\"1\";'),
('4tgcii8528fvudhseif8n8apfka5i5nd', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664887419;is_user_in|b:1;user_id|s:1:\"1\";'),
('r2t7f8t8j6ai7rpfqppoigknigrmpgej', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664887811;is_user_in|b:1;user_id|s:1:\"1\";'),
('pqci20ijsa9tv8iradoir6fmddkq6f26', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664888218;is_user_in|b:1;user_id|s:1:\"1\";'),
('f6u7h89eatllg8oitd0bblbrmb5kj6nd', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664888218;is_user_in|b:1;user_id|s:1:\"1\";'),
('95429dr32u4e4klj0ntgb50kt25hldfc', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664958926;is_user_in|b:1;user_id|s:1:\"1\";'),
('dv8ifvtrq69mgole57r1orb7s98q5uhl', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664959319;is_user_in|b:1;user_id|s:1:\"1\";'),
('0grhj9mrlaekod4p1pkuk7r57pc48vi9', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664959626;is_user_in|b:1;user_id|s:1:\"1\";'),
('2t2e25n31k23blvdfkkhbnp3gvn95c76', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664961647;is_user_in|b:1;user_id|s:1:\"1\";'),
('hg0il9e5s7r4bqag9kgtl8b0iqtflqkt', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664962049;is_user_in|b:1;user_id|s:1:\"1\";'),
('3p9b87jjd8f95mobifjeogtajp57ed3n', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664962533;is_user_in|b:1;user_id|s:1:\"1\";'),
('3juliqfseujn40v9797dha0q6q446pif', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664962853;is_user_in|b:1;user_id|s:1:\"1\";'),
('eumh8neequ9u9a5md967m3ppbi211lkp', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664962853;is_user_in|b:1;user_id|s:1:\"1\";'),
('9p188nrs3qglbg3hv4hvtjcqhiqc81a5', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1664994321;'),
('so2abiif1ltkttbe11bh2gsvsffis43m', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667744051;is_user_in|b:1;user_id|s:1:\"1\";'),
('8kpq7bl82citrioqbls9e55o2os6r1dm', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667744353;is_user_in|b:1;user_id|s:1:\"1\";'),
('ddpi55ccnh3d5io5m3n7qi6h4611d2kb', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667745151;is_user_in|b:1;user_id|s:1:\"1\";'),
('9o4foodvsfvdju8qu8418e0ejhrq9cku', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667745490;is_user_in|b:1;user_id|s:1:\"1\";'),
('udvmu9kvu73722hq1achkd6lclglsvbj', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667745838;is_user_in|b:1;user_id|s:1:\"1\";'),
('siq7f4fl6gbii4rkgjnqq9pnu5s9f4e9', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667746709;is_user_in|b:1;user_id|s:1:\"1\";'),
('p6g4f95l3hi8q7e3kcnjvilekgb39djv', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667747098;is_user_in|b:1;user_id|s:1:\"1\";'),
('flbo9iculukgsptuju5q8jc5pjm80ff3', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667747381;is_user_in|b:1;user_id|s:1:\"1\";'),
('27aim8qb7q5npk5etiisdtg8nho37kp8', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667802797;is_user_in|b:1;user_id|s:1:\"1\";'),
('prirk97b1315tahrava2fr4ovvtdqfpg', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667803169;is_user_in|b:1;user_id|s:1:\"1\";'),
('lm5adrh1rrpalefm8ovpfl4mdv3i1l5r', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667803517;is_user_in|b:1;user_id|s:1:\"1\";'),
('ds7qvbpa1br09734padeqgvi2b7kn1km', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667804623;is_user_in|b:1;user_id|s:1:\"1\";'),
('htot7rqptglpa2ofrcsfor8qn2eq2q7t', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667809000;is_user_in|b:1;user_id|s:1:\"1\";'),
('vevddqmkurp0065n757psms3jm6mr8s8', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667809722;is_user_in|b:1;user_id|s:1:\"1\";'),
('osqn4klnqduc6srjtsbie6v2shjp6lab', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667810068;is_user_in|b:1;user_id|s:1:\"1\";'),
('orgb8e3savvkpgsu9b2dn26tov89m6u5', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667810850;is_user_in|b:1;user_id|s:1:\"1\";'),
('smc2f0g3b97dlgh5krcqv81hvqer98si', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667812525;is_user_in|b:1;user_id|s:1:\"1\";'),
('sbvbbc7s59b9kskle7hhcolvb1o3bdi8', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667813588;is_user_in|b:1;user_id|s:1:\"1\";'),
('kcuvqvma4sn5faiqefsijnicqkb4lf65', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667814138;is_user_in|b:1;user_id|s:1:\"1\";'),
('cvqa608vgqkfjgbe0ovohpst53pni4oa', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667815201;is_user_in|b:1;user_id|s:1:\"1\";'),
('bsblplcpmm2pd62a0jdshe19efvjbfkb', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667815663;is_user_in|b:1;user_id|s:1:\"1\";'),
('2bubvmp1vfqhbnumq5a66b3u01f2d0t2', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667816057;is_user_in|b:1;user_id|s:1:\"1\";'),
('ved5p8pve8jg8hq3hr8cs51lb28v9ltt', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667816641;is_user_in|b:1;user_id|s:1:\"1\";'),
('tcog5cfbfdps5g9juurnp4tpm2skiie5', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667817832;is_user_in|b:1;user_id|s:1:\"1\";'),
('9d98fvcj9cjuv3r5fog314l8huk19o4j', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667818227;is_user_in|b:1;user_id|s:1:\"1\";'),
('ehfiu3ds02gqjc3c78cv5bv5s1ci3ehh', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667819460;is_user_in|b:1;user_id|s:1:\"1\";'),
('vunt7n2l6bmgmdb37ukhrpqh8hkm42mi', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667820399;is_user_in|b:1;user_id|s:1:\"1\";'),
('bl4olhvvm2763lvjgmj4qefi2khdsi0d', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667822177;is_user_in|b:1;user_id|s:1:\"1\";'),
('d1388t7pla6pjgtvgvmutc23qq4rof1n', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667823810;is_user_in|b:1;user_id|s:1:\"1\";'),
('lrpelnmecn7u37hbtb9d90gnrvan3su4', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667824225;is_user_in|b:1;user_id|s:1:\"1\";'),
('58dkh6pul1fb7k2uf2b3h3brmtsc9pb9', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667824225;is_user_in|b:1;user_id|s:1:\"1\";'),
('rqsf3ra6tu7j3gd79tfla932nvj80a75', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667884136;is_user_in|b:1;user_id|s:1:\"1\";'),
('g8pdq1vk4ghrqm35g9q4s365uu4gklu0', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667884452;is_user_in|b:1;user_id|s:1:\"1\";'),
('27ngqq43e18jrjd3q51f1rsl8tjnaro5', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667885006;is_user_in|b:1;user_id|s:1:\"1\";'),
('v3r260v0rmt7i7adr6ceiv720oma7p49', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667885998;is_user_in|b:1;user_id|s:1:\"1\";'),
('ps4n1e94vl8f3623k2h08uh8rv5lgqbt', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667886585;is_user_in|b:1;user_id|s:1:\"1\";'),
('oer282641iq3ftup7e5vau8bfksrrsre', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667888176;is_user_in|b:1;user_id|s:1:\"1\";'),
('4mfi59voa53n5c6k0qd3p5kad65insuc', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667888512;is_user_in|b:1;user_id|s:1:\"1\";'),
('8bc9v0980bnbclqcf5vqkcghlq281ebc', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667889007;is_user_in|b:1;user_id|s:1:\"1\";'),
('0lgvgad9oe180v31jkujrmk15jqne9ud', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667889363;is_user_in|b:1;user_id|s:1:\"1\";'),
('vscp4fdf885bopuunt0kic62osjbe1mg', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667890390;is_user_in|b:1;user_id|s:1:\"1\";'),
('rkir4shk0fbhag3pbkhvre7biqccop8s', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667890881;is_user_in|b:1;user_id|s:1:\"1\";'),
('bv529d1e5fctig9n1puferd9kmsa4opo', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667891226;is_user_in|b:1;user_id|s:1:\"1\";'),
('5gnadiu639huutnn6vicvg1th6tf1v20', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667891875;is_user_in|b:1;user_id|s:1:\"1\";'),
('r7nu5aimdsukomblkjatom7s6b6eqql1', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667892199;is_user_in|b:1;user_id|s:1:\"1\";'),
('fh79rnpijmsjfnel3cd4mmp066u1uk0s', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667892860;is_user_in|b:1;user_id|s:1:\"1\";'),
('07gkvigtgqgmb5odiv02nrsnr36jag8m', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667893191;is_user_in|b:1;user_id|s:1:\"1\";'),
('eie8duf75aj9358as9t66v97i15vl32m', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667893961;is_user_in|b:1;user_id|s:1:\"1\";'),
('7ueg3mnrhv97avvo0jabf90lfhhakmbu', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667894576;is_user_in|b:1;user_id|s:1:\"1\";'),
('nkk23klsnmh115e5c1djo89uvl7f8one', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667895247;is_user_in|b:1;user_id|s:1:\"1\";'),
('8dbtcpf41olbibg9it0j65pa0msuu2hk', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667895564;is_user_in|b:1;user_id|s:1:\"1\";'),
('g65n1ivcv7hbhu71785q881f0839d1o2', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667895956;is_user_in|b:1;user_id|s:1:\"1\";'),
('rome6tuunklj5gk4catq3o23eq2f5c6n', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667897475;is_user_in|b:1;user_id|s:1:\"1\";'),
('3ih8ghdtjdav1ighhcj4of9eeppoon7u', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667899832;is_user_in|b:1;user_id|s:1:\"1\";'),
('9fblkfur11daq85qbkp5bosuamrlcd8e', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667900351;is_user_in|b:1;user_id|s:1:\"1\";'),
('cao162rb52i9uvq11jpf6bfh8kfejeqh', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667900680;is_user_in|b:1;user_id|s:1:\"1\";'),
('q590pkhfk1tjujsag8bmhqfioj6vrvbi', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667900987;is_user_in|b:1;user_id|s:1:\"1\";'),
('o3m6u6d50hlk0j3mt1ac63ea5healu07', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667902327;is_user_in|b:1;user_id|s:1:\"1\";'),
('7tsvtq65g779fgkcae5qt1aho93n1tbt', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667902327;is_user_in|b:1;user_id|s:1:\"1\";'),
('fa6b3bd232l3pmh7kj2tvifbpt91dpn1', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667910160;is_user_in|b:1;user_id|s:1:\"1\";'),
('ctkej279cog7gpb69sfnjmtd96lrjt0p', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667910160;is_user_in|b:1;user_id|s:1:\"1\";'),
('d8rs13ed7igd0a2d806008j83nrrjnjd', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667970215;is_user_in|b:1;user_id|s:1:\"1\";'),
('nfbb6rg7t1godsefv7iejml4iet3143m', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667971133;is_user_in|b:1;user_id|s:1:\"1\";'),
('la412j0lltod8v8fmtn2u6pq6dtj0ejj', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667972276;is_user_in|b:1;user_id|s:1:\"1\";'),
('dj00q1rk6c2vt3e9hkmvi12qtagcipk5', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667972611;is_user_in|b:1;user_id|s:1:\"1\";'),
('cgeeqha8fkgtcp163avepjc65mbhguns', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667973812;is_user_in|b:1;user_id|s:1:\"1\";'),
('qno5hl7nirl2jgc3tc4olqg2v6n5f2t6', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667977692;is_user_in|b:1;user_id|s:1:\"1\";'),
('aeefn741oqmtc9fsgo3majkf9bvrqu2g', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667978117;is_user_in|b:1;user_id|s:1:\"1\";'),
('6d2nat2bbo727rfl0m8nd33sf7kb4uku', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667978506;is_user_in|b:1;user_id|s:1:\"1\";'),
('56eqq9nmcgt8vcg1kogpk59mlldn5p6k', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667978846;is_user_in|b:1;user_id|s:1:\"1\";'),
('0sdc9lto784gmr4ch7sal02rac928dqv', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667979611;is_user_in|b:1;user_id|s:1:\"1\";'),
('291mdib1757h7h5m34mplu626o1c9jnn', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667980291;is_user_in|b:1;user_id|s:1:\"1\";'),
('074tcv25r9mtrvhla17kj9o4f8h9q41q', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667980291;is_user_in|b:1;user_id|s:1:\"1\";'),
('j6ohgjjs8hja3ua1jhi14pt12dovub1k', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667990084;is_user_in|b:1;user_id|s:1:\"1\";'),
('b5jlk7k7l0r2ktjcluq3ctptnock7pm4', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667990702;is_user_in|b:1;user_id|s:1:\"1\";'),
('plrbou7dju0b96bek6263ne5trqpb5lm', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667991151;is_user_in|b:1;user_id|s:1:\"1\";'),
('5rm1gp7p2r0gul0vqrgsuesvu3vscf91', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667992092;is_user_in|b:1;user_id|s:1:\"1\";'),
('eqe7e06u88c2kcnajp7ig1tu7mrmrtsk', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1667992092;is_user_in|b:1;user_id|s:1:\"1\";'),
('22vo0mrrc7uolmvoq3pkbnrsn6sj8p8b', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668057609;is_user_in|b:1;user_id|s:1:\"1\";'),
('ai5inuf55lg04nam25f3e62je6qvr2qn', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668058488;is_user_in|b:1;user_id|s:1:\"1\";'),
('4m3i56ujfpgos037iuj6dsuffe5i0ant', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668058964;is_user_in|b:1;user_id|s:1:\"1\";'),
('4pvc4br2ugkpl27448c423gs7mbjk1s2', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668062789;is_user_in|b:1;user_id|s:1:\"1\";'),
('odvb6hhi82ok9qcd084jolreoj7gj6t4', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668059840;is_user_in|b:1;user_id|s:1:\"1\";'),
('nmq4mcpkhrbllb7vt344qsf1fvq6eel0', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668060449;is_user_in|b:1;user_id|s:1:\"1\";'),
('dn25ag51865ofeqggv4rh2vefiuc8irh', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668061878;is_user_in|b:1;user_id|s:1:\"1\";'),
('ich12rppvitre0dc8dshdb466v3gfjp8', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668062269;is_user_in|b:1;user_id|s:1:\"1\";'),
('kra9iarukb13lqfb66egi0oav86nlde2', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668062575;is_user_in|b:1;user_id|s:1:\"1\";'),
('pt0lh32dp1cldkl7hb1nbuoq5k7cjef3', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668062980;is_user_in|b:1;user_id|s:1:\"1\";'),
('alqvkp45t9v6fh1rank66euuka6dqqh6', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668063917;is_user_in|b:1;user_id|s:1:\"1\";'),
('oeaf083615pfkhhhv0sprnu5nbqjrrs0', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668063467;is_user_in|b:1;user_id|s:1:\"1\";'),
('scs6rephrls3vdojgh9ka1h3pkds46js', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668063817;is_user_in|b:1;user_id|s:1:\"1\";'),
('2261766acqf6853g51unt16nh95q9g6e', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668063817;is_user_in|b:1;user_id|s:1:\"1\";'),
('ni6ea4p154m79rm5450okgmt713igqd6', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668064629;is_user_in|b:1;user_id|s:1:\"1\";'),
('9d77ckjp806862qidd8n38g06126cl2n', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668065023;is_user_in|b:1;user_id|s:1:\"1\";'),
('tqun24cgsnfpbujtrt2e64mrj3ho2jie', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668065467;is_user_in|b:1;user_id|s:1:\"1\";'),
('apvqud2gctbdlnfs7ma3u2jkdnl1fvhc', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668066987;is_user_in|b:1;user_id|s:1:\"1\";'),
('5q8tut26v7he4i7fgra92tdvk4cqlc1d', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668067392;is_user_in|b:1;user_id|s:1:\"1\";'),
('81h60d9e6ojeoca9lps33tnvfm550s06', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668067776;is_user_in|b:1;user_id|s:1:\"1\";'),
('sn31j3rtklflkgep1gk2netfoqm40sjb', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668068119;is_user_in|b:1;user_id|s:1:\"1\";'),
('qouc6mhddmnjd54i6con6sfbfmbist97', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668068441;is_user_in|b:1;user_id|s:1:\"1\";'),
('i3rnb340qdddm5vmo96f9hbbecd3eifj', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668069090;is_user_in|b:1;user_id|s:1:\"1\";'),
('s3ka0d0uifinlboafjpibe8n2vi9j6ed', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668069409;is_user_in|b:1;user_id|s:1:\"1\";'),
('uobq0aep66gmvpt873db3g7acib0n76b', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668069725;is_user_in|b:1;user_id|s:1:\"1\";'),
('ghahrhb1n21nqpojjviohas79g8a00b2', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668071717;is_user_in|b:1;user_id|s:1:\"1\";'),
('b6a9bihf5e9sics1h6nfqhb4ad11dkel', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668072207;is_user_in|b:1;user_id|s:1:\"1\";'),
('b6p5999siorqu2k3di6tgmmrv015l8ng', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668073842;is_user_in|b:1;user_id|s:1:\"1\";'),
('ksltnb3452dgvioeerqr8pdmq04ur7rm', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668075012;is_user_in|b:1;user_id|s:1:\"1\";'),
('u5t4jk2pq08p6amf965avt8vr57pu11c', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668075659;is_user_in|b:1;user_id|s:1:\"1\";'),
('kcut8ickbda2ec9iuth5lh8sccuhifm4', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668076731;is_user_in|b:1;user_id|s:1:\"1\";'),
('jahlhtgosl8qlam40jm8r26om95jac11', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668077033;is_user_in|b:1;user_id|s:1:\"1\";'),
('8p1j9fkte6vg74p17umpumhr1ug67oa6', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668078642;is_user_in|b:1;user_id|s:1:\"1\";'),
('shh8d8nh5b4gl0ovmkounrdbif10c9m2', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668079070;is_user_in|b:1;user_id|s:1:\"1\";'),
('m7lv4qpc2oh6fb0laf0c106vh7cna0ar', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668079385;is_user_in|b:1;user_id|s:1:\"1\";'),
('oq85iljol9rs16imapmkn53efju6in0m', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668079725;is_user_in|b:1;user_id|s:1:\"1\";'),
('bh9kdgk8qiijurnl08go67f0ufdhb7oa', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668080164;is_user_in|b:1;user_id|s:1:\"1\";'),
('3phoaihosibf0b31csn449fie246mf2k', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668080470;is_user_in|b:1;user_id|s:1:\"1\";'),
('3ajeavf5lcskdtv32ol5athdhfn3cpmo', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668082308;is_user_in|b:1;user_id|s:1:\"1\";'),
('4drcnnh2f0k9a5l6edgpfj5877d2vdrh', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668082308;is_user_in|b:1;user_id|s:1:\"1\";'),
('857eng56cahs339a12gkg8d1j7f02boa', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668229036;is_user_in|b:1;user_id|s:1:\"1\";'),
('62dg7mts9it56tfudf3ia7v7ouapie85', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668229396;is_user_in|b:1;user_id|s:1:\"1\";'),
('gp2ahabadr208og2hcal63nk3simdco0', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668232355;is_user_in|b:1;user_id|s:1:\"1\";'),
('pf5tpcigl3ka4a4s1saipgjptl4k4fku', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668233170;is_user_in|b:1;user_id|s:1:\"1\";'),
('p3lhvbe517bapa1n6er9pn3cl2qvfpbp', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668233486;is_user_in|b:1;user_id|s:1:\"1\";'),
('sloeuoqia5rihepb70er98194q4gkmni', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668234023;is_user_in|b:1;user_id|s:1:\"1\";'),
('hhf11cpcvl80plafj512ibolhru3oop3', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668236493;is_user_in|b:1;user_id|s:1:\"1\";'),
('4slbs025itlvms5jf7kcv3p4hj5r89up', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668237600;is_user_in|b:1;user_id|s:1:\"1\";'),
('nbotct0ua7ebl90m725rn0nmbonhrr48', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668237978;is_user_in|b:1;user_id|s:1:\"1\";'),
('75iipj8hlrvf1jto2q41om29k11cabud', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668238387;is_user_in|b:1;user_id|s:1:\"1\";'),
('tvdmpo0sltd2sbbsucvgqlgodjd3dp6m', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668239463;is_user_in|b:1;user_id|s:1:\"1\";'),
('l0u7fdu5gqaee7kv09krjc5nkkc49drr', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668241350;is_user_in|b:1;user_id|s:1:\"1\";'),
('bnmvtmh89puvo3at2n7rrel2bka42cdq', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668246425;is_user_in|b:1;user_id|s:1:\"1\";'),
('t3fflseposd6birj1i8v3p2p6i6ro5cd', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668247036;is_user_in|b:1;user_id|s:1:\"1\";'),
('jubejl6lnavgaveccep1lh53karvcebj', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668247570;is_user_in|b:1;user_id|s:1:\"1\";'),
('jd67eshkiqejej2bkke4g9n2im71jahd', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668247916;is_user_in|b:1;user_id|s:1:\"1\";'),
('ssl17dkp38n2jshqhj0ckft1v0jhlcen', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668248251;is_user_in|b:1;user_id|s:1:\"1\";'),
('20tj5j1uoqp5md89dsaaviqn8gv8bja2', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668248954;is_user_in|b:1;user_id|s:1:\"1\";'),
('tvn8lvd0jq14mrmj70m5g4qqj322fep0', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668249345;is_user_in|b:1;user_id|s:1:\"1\";'),
('n9qt109lqfm5fcldetppgu1j5u8jjgmk', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668250011;is_user_in|b:1;user_id|s:1:\"1\";'),
('cusadc099l6jri8bqep4h55cgkdpa7do', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668250370;is_user_in|b:1;user_id|s:1:\"1\";'),
('bss9ukn52ep8pdn5h5hloj7s42b93bhc', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668250885;is_user_in|b:1;user_id|s:1:\"1\";'),
('fr4bc74arqffdom51n13vr9k6eouoa32', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668252453;is_user_in|b:1;user_id|s:1:\"1\";'),
('kb37ksiugbeist4cfjif2tj2k0valkdo', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668254371;is_user_in|b:1;user_id|s:1:\"1\";'),
('msf3bo9lk3bovdenqudm5g7fmj6f094e', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668257839;is_user_in|b:1;user_id|s:1:\"1\";'),
('6oicpdfii1g876feacerflv2hbcgqt3s', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668257839;is_user_in|b:1;user_id|s:1:\"1\";'),
('rpumunvuri7pqsopdm1va02qmlbt2rcs', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668401682;'),
('2iocd1qi33u865bul36ebcqm8bo24a62', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668402145;is_user_in|b:1;user_id|s:1:\"1\";'),
('2p9m7k0td6lgc06lrqt1507fd2c48qic', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668402635;is_user_in|b:1;user_id|s:1:\"1\";'),
('qlafq85tieubh479mrj0a2vljchvrudk', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668402635;is_user_in|b:1;user_id|s:1:\"1\";'),
('9i269d1b4bdk9ljhd1jdgvefk6kied4m', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668404327;is_user_in|b:1;user_id|s:1:\"1\";'),
('vo3tstgdta8modlnfkcdu1bis970nobg', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668404629;is_user_in|b:1;user_id|s:1:\"1\";'),
('9k1eof2hvrfbsfmmnmj0evseaf40cism', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668405138;is_user_in|b:1;user_id|s:1:\"1\";'),
('ldmjgjspfvt83uhq380gcdc9rpjj959o', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668405613;is_user_in|b:1;user_id|s:1:\"1\";'),
('2l577ncethan18nsov89j405ngs2gs22', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668406192;is_user_in|b:1;user_id|s:1:\"1\";'),
('fil63tfqr4pj4h8ffe7tkirh9rjirud3', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668406518;is_user_in|b:1;user_id|s:1:\"1\";'),
('8io17a6973n382mpf8o94inss763j6vb', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668407325;is_user_in|b:1;user_id|s:1:\"1\";'),
('9l68smli2rkfic81th51btp0brprshfe', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668407721;is_user_in|b:1;user_id|s:1:\"1\";'),
('hn6u7tjrvoqg4h8h7lfinaij2ukacqb1', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668408023;is_user_in|b:1;user_id|s:1:\"1\";'),
('smchirtf822k3kemfasigqpqqj24nor6', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668408685;is_user_in|b:1;user_id|s:1:\"1\";'),
('srgkpbcvbq36sqr52e3gincfbj5mv7s5', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668409023;is_user_in|b:1;user_id|s:1:\"1\";'),
('tqo0s9rlbeqjfh5g280bat786ve49a8e', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668409382;is_user_in|b:1;user_id|s:1:\"1\";'),
('luqc7bj8tehmmg7pmdlgqskhhjahita7', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668409728;is_user_in|b:1;user_id|s:1:\"1\";'),
('jscnikg8lonp082fqq3b2jjqi155rkqq', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668409728;is_user_in|b:1;user_id|s:1:\"1\";'),
('k4i9rfr4g00evuhggatqnqee9dja7smk', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668414876;'),
('egrttd41ec0n3n0up0c7oj76l2g2eb3a', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668419319;is_user_in|b:1;user_id|s:1:\"1\";'),
('poes9v3nm2paqs42t0lv63cb7g5krp96', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668419782;is_user_in|b:1;user_id|s:1:\"1\";'),
('f4e3c7lu9k9e4dqrcvrbui0p97rcv3pc', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668420162;is_user_in|b:1;user_id|s:1:\"1\";'),
('nj6curldb53afau7q6er8jlo7b3hnagd', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668420720;is_user_in|b:1;user_id|s:1:\"1\";'),
('1978bh21sdtqr1u56dv1mh4ba5jhvbuq', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668421028;is_user_in|b:1;user_id|s:1:\"1\";'),
('77gd7c8a1lqjl1heqberfh1bjepma9in', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668421860;is_user_in|b:1;user_id|s:1:\"1\";'),
('cc8q2tr676p6n5ei4268qp302k3mcfl1', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668422244;is_user_in|b:1;user_id|s:1:\"1\";'),
('58ccjr5gct0ibbl24cuusbj2609npjlf', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668423026;is_user_in|b:1;user_id|s:1:\"1\";'),
('enq2rqi4mn70iov10facmtrmvo5bdjr3', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668423352;is_user_in|b:1;user_id|s:1:\"1\";'),
('objqd88nqlpfr0gm8lihu9t0ggsoveh0', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668423884;is_user_in|b:1;user_id|s:1:\"1\";'),
('6akc14i6kherstdsvkeskm0348g0plbs', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668425566;is_user_in|b:1;user_id|s:1:\"1\";'),
('606beto324epf9adoivae85u8gq1op58', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668425924;is_user_in|b:1;user_id|s:1:\"1\";'),
('k1dlcl83idq4une4isg5b0t9jlu7vvdl', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668426236;is_user_in|b:1;user_id|s:1:\"1\";'),
('jrnk9bgjtqm7dgspbd7chv5oei122o4d', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668426705;is_user_in|b:1;user_id|s:1:\"1\";'),
('maleiv2b2r02be232vuhq4199v6s1p5c', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668427095;is_user_in|b:1;user_id|s:1:\"1\";'),
('03gbhh2e1vcltns20jv398a7p6m8eh95', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668428598;is_user_in|b:1;user_id|s:1:\"1\";'),
('ms6j23itfj0vcfl8gip7m7h8ugu3rbbg', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668428919;is_user_in|b:1;user_id|s:1:\"1\";'),
('67tfn9pe4m5ne5n6550dj2tscrqsba6b', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668428919;is_user_in|b:1;user_id|s:1:\"1\";'),
('2o5qdtfvlf25g1v8uilfv7959un0qbqk', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668488201;is_user_in|b:1;user_id|s:1:\"1\";'),
('mqlstg7vdrh62nsr3jtaaic7puj1110n', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668495305;is_user_in|b:1;user_id|s:1:\"1\";'),
('alo541ea15g6b696vv1467bnvlja7ehv', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668495305;is_user_in|b:1;user_id|s:1:\"1\";'),
('f4dumc4rmvqi7curc6itni9vnk5glmkj', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668496972;'),
('lb4cf13cvhj4lkscn0vv5d3vfqsi2f69', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668500063;is_user_in|b:1;user_id|s:1:\"1\";'),
('i5mbpemdd67c6k779i8p779jp2tcsgms', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668500413;is_user_in|b:1;user_id|s:1:\"1\";'),
('4t359dc7fj39cel999jtb3q5kfgec3kl', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668500413;is_user_in|b:1;user_id|s:1:\"1\";'),
('9nr1pnf7nv5qnrq0gqd9l8t6ega11gvm', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668518533;is_user_in|b:1;user_id|s:1:\"1\";'),
('e5p2e8jipu4fltea2caiqjvdt2thmq10', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668518847;is_user_in|b:1;user_id|s:1:\"1\";'),
('4as79onh51eortdkr401d33k2kdka0ss', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668518847;is_user_in|b:1;user_id|s:1:\"1\";'),
('jju28ri48et34v9cf07gaq0f62bhcve5', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668574492;is_user_in|b:1;user_id|s:1:\"1\";'),
('3hekbaddf042jdipvgtq2ead20sotc8f', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668575869;is_user_in|b:1;user_id|s:1:\"1\";'),
('qp4npjmli465j99fopcf7pnc7g5o19o9', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668576689;is_user_in|b:1;user_id|s:1:\"1\";'),
('krjq6go81c9u63k4npqsfjegpkmo40u3', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668577132;is_user_in|b:1;user_id|s:1:\"1\";'),
('94a2l7n2aiijm81imjbj0d02p3ugv8ea', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668599579;is_user_in|b:1;user_id|s:1:\"1\";'),
('8vtbfac383dfne4227cj2j164gv7raaa', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668601845;is_user_in|b:1;user_id|s:1:\"1\";'),
('clulhm334s8v1ucrh5uielm5a49063in', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668601845;is_user_in|b:1;user_id|s:1:\"1\";'),
('cdlmnc7ouvm0chqcpajjleu7k4jfunoe', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668669475;is_user_in|b:1;user_id|s:1:\"1\";'),
('ff86mt3sfmtvdmuif4egunajmj1ec44o', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668678065;is_user_in|b:1;user_id|s:1:\"1\";'),
('olkmt0tot6dcsvrohpn31g11b8e1r8lo', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668678065;is_user_in|b:1;user_id|s:1:\"1\";'),
('05q43adbl21spn1ivn0angu5tqaqnpi1', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668854706;is_user_in|b:1;user_id|s:1:\"1\";'),
('nm6qgu6o1sspvpsl231cm1q9t8qf7ieu', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1668855116;is_user_in|b:1;user_id|s:1:\"1\";'),
('sfoj6736rfqc3rp6176f56695nl5b83b', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669033743;is_user_in|b:1;user_id|s:1:\"1\";'),
('2tlpdb5fo7re2c66tkrbsrnacdtdat35', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669096372;is_user_in|b:1;user_id|s:1:\"1\";'),
('ch2ce83do9k1oe52tgveom4dmp0l4p78', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669102469;is_user_in|b:1;user_id|s:1:\"1\";'),
('c71msni1ef06f1i4cd0p38riehuff7o8', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669102912;is_user_in|b:1;user_id|s:1:\"1\";'),
('ms0vclp03ssd143ai2p710ds7733kokv', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669102912;is_user_in|b:1;user_id|s:1:\"1\";'),
('3g6tgojo2g033vfnaaej32v4rr3tdds3', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669269549;is_user_in|b:1;user_id|s:1:\"1\";'),
('a64nb5se65d0pqs1p2d3a496oq2hk4u2', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669270289;is_user_in|b:1;user_id|s:1:\"1\";'),
('qab7ko8rblfrqd1hr73pdhb795lgmqgr', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669270760;is_user_in|b:1;user_id|s:1:\"1\";'),
('ghngl9vn7njek8d39ufeijc4f2op9r9l', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669272563;is_user_in|b:1;user_id|s:1:\"1\";'),
('nudh9k6bsr522hkv5o4f50id02a5hheo', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669273187;is_user_in|b:1;user_id|s:1:\"1\";'),
('j7lu9ksgqfqkkfge88u7mhrvnp2dl5po', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669273580;is_user_in|b:1;user_id|s:1:\"1\";'),
('cf1inpc6gegh50ktvjgsrl64up3ik76h', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669274640;is_user_in|b:1;user_id|s:1:\"1\";'),
('505p2brpv1grcpc3oschjj9ud9oqf2qr', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669275013;is_user_in|b:1;user_id|s:1:\"1\";'),
('sr0l3g37hokpe2ch3tb3gu1oj9rh7mtf', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669275456;is_user_in|b:1;user_id|s:1:\"1\";'),
('qjvqdn91ksoar81v6gq970adn8geiu3p', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669275775;is_user_in|b:1;user_id|s:1:\"1\";'),
('hdpqf0u6pfb75bvhthbg0imk1ncunop3', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669276087;is_user_in|b:1;user_id|s:1:\"1\";'),
('6thrut35m78vfp6o2e59hnf04qhdvcrs', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669276619;is_user_in|b:1;user_id|s:1:\"1\";'),
('jdre2livnpo8g6h4u2d5rumjkl4v9ei2', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669276998;is_user_in|b:1;user_id|s:1:\"1\";'),
('68nlv28f4e4jupa47891mh2eldutke4b', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669277359;is_user_in|b:1;user_id|s:1:\"1\";'),
('q25mvmb9nfll2rl2rkpd3fc1mhv75rkj', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669277660;is_user_in|b:1;user_id|s:1:\"1\";'),
('9eclhhvithivpatjgncu062du6fbi826', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669278016;is_user_in|b:1;user_id|s:1:\"1\";'),
('gb8hloh5o3oap8eea5sj09dj0732udum', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669278482;is_user_in|b:1;user_id|s:1:\"1\";'),
('hj5v0bh8r35qkqlf842jq3071j9pqqiv', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669279234;is_user_in|b:1;user_id|s:1:\"1\";'),
('763p822lubim2cusalh9q31ten7i2njn', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669282537;is_user_in|b:1;user_id|s:1:\"1\";'),
('h50v0oh6i6k5ftn24d1mftdtp9ibkf5g', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669282849;is_user_in|b:1;user_id|s:1:\"1\";'),
('o2769k3rfobnoa3hsb8du9smg3f8qn8k', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669283195;is_user_in|b:1;user_id|s:1:\"1\";'),
('8bkd03qf2lq2fg224c10pk7l1n8ujbe8', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669284367;is_user_in|b:1;user_id|s:1:\"1\";'),
('g0k37o1op5rhvhbp9i6stee16sruoc4m', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669285439;is_user_in|b:1;user_id|s:1:\"1\";'),
('d93n2qb7b9vqqa46qlfsrs8ccnaakfh0', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669286074;is_user_in|b:1;user_id|s:1:\"1\";'),
('1er7pflshfgc0a72h1v1oqj6pgs1e08v', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669286482;is_user_in|b:1;user_id|s:1:\"1\";'),
('9q4uoo48tk9g14ct3kstq7b2524cg7v6', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669287189;is_user_in|b:1;user_id|s:1:\"1\";'),
('5p7d6qjiv79gg7g95o2qsco6rhisqqji', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669287520;is_user_in|b:1;user_id|s:1:\"1\";'),
('3q0kldrgpbbphsjrvkq0iv3hbg8802js', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669287943;is_user_in|b:1;user_id|s:1:\"1\";'),
('emovpmkqf0p4mom9atd2bf06tqjnfin9', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669288937;is_user_in|b:1;user_id|s:1:\"1\";'),
('m7b2u3m0no803eopai0c0tfc36b8ud72', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669289395;is_user_in|b:1;user_id|s:1:\"1\";'),
('9k4jhceas53psce9eveso6hifopqsi7l', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669289789;is_user_in|b:1;user_id|s:1:\"1\";'),
('374dhk9aulft3rd8ah6jp5t761dv3hhe', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669290142;is_user_in|b:1;user_id|s:1:\"1\";'),
('g2qkuqflhlif7lmbj3uot8nm62in0dha', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669291109;is_user_in|b:1;user_id|s:1:\"1\";'),
('2dnrd45h6jeo8846384ibudp94vhhbkb', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669291487;is_user_in|b:1;user_id|s:1:\"1\";'),
('9q4rk7dcald3mjg1g72bj73rigrotrge', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1669291487;is_user_in|b:1;user_id|s:1:\"1\";'),
('lfmib9spfvm15t3nahin02bd3kt20bd6', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1681833003;is_user_in|b:1;user_id|s:1:\"1\";'),
('llrs07idcr20a6e3aatfusipn1dlan89', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1681833581;is_user_in|b:1;user_id|s:1:\"1\";'),
('m4rs2gl61pagahb26nk5sbeh4gi7lpnh', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695182088;is_user_in|b:1;user_id|s:1:\"1\";'),
('lfmocm08b0mvf3d4rtjd58u88jhtrg0f', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695182406;is_user_in|b:1;user_id|s:1:\"1\";'),
('a1tqcma6ubs976u46shg0i94g1bdd3ti', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695183984;is_user_in|b:1;user_id|s:1:\"1\";'),
('u8oja8jcml4upjacf5cknc9memdp6edc', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695183984;is_user_in|b:1;user_id|s:1:\"1\";'),
('lgi48e6v7ro0i46u6en9k4foppcornsd', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695780223;is_user_in|b:1;user_id|s:1:\"1\";'),
('bu09qnvlg0fces8osb56l1q0u94ma2o3', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695780590;is_user_in|b:1;user_id|s:1:\"1\";'),
('09rgmjmroj10td7fh5bp9dc1cmuk12la', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695780976;is_user_in|b:1;user_id|s:1:\"1\";'),
('jn5si70jesonb37cv9d8fujnvfdss152', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695782469;is_user_in|b:1;user_id|s:1:\"1\";'),
('gu69rdv4318ltgi70l5q07opnjpugkn9', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695784121;is_user_in|b:1;user_id|s:1:\"1\";'),
('ikvpm05juisjdt9im6ff416docsv7ql6', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695784422;is_user_in|b:1;user_id|s:1:\"1\";'),
('akqcotjjonqi9o41149umi57b6c4k0il', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695784726;is_user_in|b:1;user_id|s:1:\"1\";'),
('qn4qdsut1083hplmdvsnshtelqk2t2b3', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695785118;is_user_in|b:1;user_id|s:1:\"1\";'),
('n4johrmdcpdn55oa6sm6ddo29k789hck', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695785429;is_user_in|b:1;user_id|s:1:\"1\";'),
('qgq34mplaim1rvidd5lqjh57ono4l1nv', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695785887;is_user_in|b:1;user_id|s:1:\"1\";'),
('tqgdls4o083d1dvb3hmv0i2r3svfqaga', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695786525;is_user_in|b:1;user_id|s:1:\"1\";'),
('3l2pc1q10svt29j1dc0eq0csclsad99a', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695786525;is_user_in|b:1;user_id|s:1:\"1\";'),
('031cqm9tbsdus65oqlvgt52aa3dva2jn', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695830059;is_user_in|b:1;user_id|s:1:\"1\";'),
('s9grtc885nrkg52439fldv3mpk7cbl4c', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695830499;is_user_in|b:1;user_id|s:1:\"1\";'),
('7vei1it06b5sk44ojotaer3t6r0vltal', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695832492;is_user_in|b:1;user_id|s:1:\"1\";'),
('1gvvnrebg5v4qbjos9etkqs9t00b18jg', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695832975;is_user_in|b:1;user_id|s:1:\"1\";'),
('i0f66q8st5qhhgib0rrk38g8ld5i3qm2', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695833349;is_user_in|b:1;user_id|s:1:\"1\";'),
('7omcflanufrreu3lue9at755me362ujm', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695834338;is_user_in|b:1;user_id|s:1:\"1\";'),
('g1iscg0sojit7k78goqhb38gmn5u84rr', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695834649;is_user_in|b:1;user_id|s:1:\"1\";'),
('h532gv15o7vg5e2v0kalvr9n97pk00am', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695834978;is_user_in|b:1;user_id|s:1:\"1\";'),
('2orv4he731msbo78p7to9qsgs54ki15b', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695835419;is_user_in|b:1;user_id|s:1:\"1\";'),
('etqg0d4fetju73eaa6d4qgp3caeu7u1a', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695835748;is_user_in|b:1;user_id|s:1:\"1\";'),
('e8p8lapspi24jue6fi2kcsnuovrtpunv', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695835748;is_user_in|b:1;user_id|s:1:\"1\";'),
('brbuduvh1rqfkda7ba2ugq01pdhk3g6u', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695871077;is_user_in|b:1;user_id|s:1:\"1\";'),
('g5oa6off3cjjgllo60vubroikhsv221f', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695871432;is_user_in|b:1;user_id|s:1:\"1\";'),
('85nlj8d4oqqhoscdbihang90ljfhuu42', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695871989;is_user_in|b:1;user_id|s:1:\"1\";'),
('h3nca5srucu3njpilp0cdu8no9pqhtu4', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695872298;is_user_in|b:1;user_id|s:1:\"1\";'),
('833f0kum371ker46u9pqihnitq4pfjc3', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695872866;is_user_in|b:1;user_id|s:1:\"1\";'),
('326ruhh67296396hn0tmt4pj2lk8i8nr', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695873422;is_user_in|b:1;user_id|s:1:\"1\";'),
('9u4s6fbch6a0436magjv6mrmmob0qls5', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695873422;is_user_in|b:1;user_id|s:1:\"1\";'),
('p1g53038cs1770lqp1a0v3l0a5o6vhad', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695919637;is_user_in|b:1;user_id|s:1:\"1\";'),
('ffqokm1i6l5rf0166gib6odko7qqudde', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695920531;is_user_in|b:1;user_id|s:1:\"1\";'),
('uaggguotb1j3l6s7ohpv9fmnrf1mfp9b', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695921104;is_user_in|b:1;user_id|s:1:\"1\";'),
('7muhq8b77hp0rvl6f850f0tiepp0stk6', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695921595;is_user_in|b:1;user_id|s:1:\"1\";'),
('f2east8gnfdlg5enseon6mkgj7s462rf', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695921926;is_user_in|b:1;user_id|s:1:\"1\";'),
('9oup6v1ilsdt3ioc9uqrrfpnkf9kj5l1', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695922385;is_user_in|b:1;user_id|s:1:\"1\";'),
('cddi2ctck2qs7m1bep8vqf6evndj49f8', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695922771;is_user_in|b:1;user_id|s:1:\"1\";'),
('6v3rb6buq22hqvql35ftqgna8jldokrc', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695923170;is_user_in|b:1;user_id|s:1:\"1\";'),
('neag3gn1p73rl2ljt2dl2qufgu6beefc', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695923500;is_user_in|b:1;user_id|s:1:\"1\";'),
('cm8i731ptd5trtj9oij6r2vjv6shj7eg', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1695923500;is_user_in|b:1;user_id|s:1:\"1\";');

-- --------------------------------------------------------

--
-- Table structure for table `master_admin_tbl`
--

CREATE TABLE `master_admin_tbl` (
  `m_admin_id` int(11) NOT NULL,
  `m_admin_login_id` tinytext DEFAULT NULL,
  `m_admin_pass` tinytext DEFAULT NULL,
  `m_admin_name` tinytext DEFAULT NULL,
  `m_admin_email` tinytext DEFAULT NULL,
  `m_admin_contact` varchar(200) DEFAULT NULL,
  `m_admin_img` tinytext DEFAULT NULL,
  `m_admin_status` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `master_admin_tbl`
--

INSERT INTO `master_admin_tbl` (`m_admin_id`, `m_admin_login_id`, `m_admin_pass`, `m_admin_name`, `m_admin_email`, `m_admin_contact`, `m_admin_img`, `m_admin_status`) VALUES
(1, 'admin', '123456', 'PSPU', 'pspunational@gmail.com', '9425234990,9303650593', 'logo.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_area_tbl`
--

CREATE TABLE `master_area_tbl` (
  `m_area_id` bigint(20) NOT NULL,
  `m_area_name` varchar(250) NOT NULL,
  `m_area_country` bigint(20) NOT NULL COMMENT 'item_category tbl se',
  `m_area_state` bigint(20) NOT NULL,
  `m_area_city` bigint(20) NOT NULL,
  `m_area_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0- inactive , 1-active',
  `m_area_added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `master_area_tbl`
--

INSERT INTO `master_area_tbl` (`m_area_id`, `m_area_name`, `m_area_country`, `m_area_state`, `m_area_city`, `m_area_status`, `m_area_added_on`) VALUES
(1, 'Kohka', 1, 1, 1, 1, '2022-09-26 12:16:14'),
(2, 'Risali', 1, 1, 1, 1, '2022-09-26 12:16:14'),
(3, 'Sector 1', 1, 1, 1, 1, '2022-09-26 12:16:14');

-- --------------------------------------------------------

--
-- Table structure for table `master_category_tbl`
--

CREATE TABLE `master_category_tbl` (
  `m_category_id` bigint(20) NOT NULL,
  `m_category_title` varchar(200) NOT NULL,
  `m_category_image` text NOT NULL,
  `m_category_des` varchar(300) NOT NULL,
  `m_category_added_on` datetime NOT NULL,
  `m_category_status` int(11) NOT NULL COMMENT '0 = Pending, 1 = Active, 3 = Blocked'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_category_tbl`
--

INSERT INTO `master_category_tbl` (`m_category_id`, `m_category_title`, `m_category_image`, `m_category_des`, `m_category_added_on`, `m_category_status`) VALUES
(1, 'NEWS', 'logo6.jpg', 'NEWS', '2023-09-27 08:40:21', 1),
(3, 'Blog', 'logo8.jpg', 'Blog', '2023-09-27 08:40:37', 1),
(4, 'Event', 'logo9.jpg', 'Event', '2023-09-27 08:40:53', 1),
(5, 'Press', '', ' Press', '2023-09-27 08:41:07', 1),
(6, 'Popular', '', ' Popular', '2023-09-27 08:41:23', 1),
(7, 'Upcoming Event', '', ' Upcoming  Event', '2023-09-27 08:41:52', 1),
(8, 'What People Say', '', ' What People Say', '2023-09-27 08:42:12', 1),
(9, 'Leadership Details', '', ' Leadership Details ', '2023-09-27 08:42:45', 1),
(10, 'Morcha', '', ' Morcha', '2023-09-27 08:42:57', 1),
(11, 'Election', '', ' Election', '2023-09-27 08:43:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_city_tbl`
--

CREATE TABLE `master_city_tbl` (
  `m_city_id` bigint(11) NOT NULL,
  `m_city_name` varchar(250) NOT NULL,
  `m_city_country` bigint(20) NOT NULL,
  `m_city_state` bigint(20) NOT NULL,
  `m_city_status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0- inactive , 1-active',
  `m_city_added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `master_city_tbl`
--

INSERT INTO `master_city_tbl` (`m_city_id`, `m_city_name`, `m_city_country`, `m_city_state`, `m_city_status`, `m_city_added_on`) VALUES
(1, 'Bhilai', 1, 1, 1, '2022-09-26 12:15:56'),
(2, 'Durg', 1, 1, 1, '2022-09-29 06:58:40'),
(3, 'Raipur', 1, 1, 1, '2022-09-29 06:58:40'),
(4, 'Bilaspur', 1, 1, 1, '2022-09-29 06:59:05'),
(6, 'Raigarh', 1, 1, 1, '2022-11-06 20:40:00'),
(8, 'patana', 1, 0, 1, '2022-11-10 10:37:00');

-- --------------------------------------------------------

--
-- Table structure for table `master_country_tbl`
--

CREATE TABLE `master_country_tbl` (
  `m_country_id` int(11) NOT NULL,
  `m_country_name` varchar(255) NOT NULL,
  `m_country_code` varchar(250) NOT NULL,
  `m_country_icon` text NOT NULL,
  `m_country_img` varchar(200) NOT NULL,
  `m_country_status` int(11) NOT NULL,
  `m_country_added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_country_tbl`
--

INSERT INTO `master_country_tbl` (`m_country_id`, `m_country_name`, `m_country_code`, `m_country_icon`, `m_country_img`, `m_country_status`, `m_country_added_on`) VALUES
(1, 'India', 'IN', 'india.png', 'tajmahal.jpg', 1, '2022-08-21 13:36:00'),
(3, 'Russia', 'RU', 'russiaflag1.png', 'russ1.jpg', 1, '2022-08-23 13:32:00'),
(4, 'United States', 'USA', 'index.png', 'tt.jpg', 1, '2022-09-06 14:33:00'),
(6, 'China', 'CH', 'Flag_of_the_Peoples_Republic_of_China_svg_.png', 'china-top-attractions-hangzhou-west-lake8.jpg', 1, '2022-09-12 23:45:00'),
(7, 'Nepal', 'NE', 'np-flag.jpg', 'the-krishna-temple-is.jpg', 1, '2022-09-12 23:45:00'),
(8, 'Pakistan', 'PAK', 'pk-flag.jpg', 'pakistan-places-09-1024x683.jpg', 1, '2022-09-25 20:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `master_designation_tbl`
--

CREATE TABLE `master_designation_tbl` (
  `m_designation_id` bigint(20) NOT NULL,
  `m_designation_title` varchar(200) NOT NULL,
  `m_designation_added_on` datetime NOT NULL,
  `m_designation_status` int(11) NOT NULL COMMENT '0 = Pending, 1 = Active, 3 = Blocked'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_designation_tbl`
--

INSERT INTO `master_designation_tbl` (`m_designation_id`, `m_designation_title`, `m_designation_added_on`, `m_designation_status`) VALUES
(1, 'wdasdxasd', '2022-11-09 16:22:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_officer_tbl`
--

CREATE TABLE `master_officer_tbl` (
  `m_officer_id` bigint(20) NOT NULL,
  `m_officer_name` varchar(200) NOT NULL,
  `m_officer_mobile` varchar(200) NOT NULL,
  `m_officer_image` text NOT NULL,
  `m_officer_email` varchar(200) NOT NULL,
  `m_officer_gender` varchar(200) NOT NULL,
  `m_officer_state` bigint(20) NOT NULL,
  `m_officer_des` tinyint(1) NOT NULL,
  `m_officer_address` text NOT NULL,
  `m_officer_added_on` datetime NOT NULL,
  `m_officer_status` int(11) NOT NULL COMMENT '0 = Pending, 1 = Active, 3 = Blocked'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_officer_tbl`
--

INSERT INTO `master_officer_tbl` (`m_officer_id`, `m_officer_name`, `m_officer_mobile`, `m_officer_image`, `m_officer_email`, `m_officer_gender`, `m_officer_state`, `m_officer_des`, `m_officer_address`, `m_officer_added_on`, `m_officer_status`) VALUES
(5, 'DAMAN', '6266107525', 'logo4.jpg', 'daman@gmail.com', 'Male', 0, 1, 'raipur', '2022-11-07 16:13:51', 0),
(7, 'lily', '6266107525', '7bcd6b57-dc62-4d5c-b5da-fad41a68b96e.png', 'lily2@gmail.com', 'Male', 2, 1, '   raipur  ', '2023-09-27 07:49:23', 1),
(9, 'RADHESHYAM CHANDRAKAR', '7470632201', 'logo2.png', 'RADHECHANDRAKAR1975@GMAIL.COM', 'Male', 1, 1, '74 KA\r\nLAXMANPUR\r\nCHHUIKHADAN', '2023-09-27 07:39:48', 1),
(10, 'CHANDRAKAR', '6261447765', 'Blue_Festive_Sweet_Seventeen_Birthday_Invitation_(4).png', 'ac20030203@gmail.com', 'Female', 2, 1, 'LAXMANPUR\r\nPOST BUN  ', '2023-09-27 07:48:28', 1),
(11, 'BHUPESH DEWANGAN', '6266441310', 'footer.jpg', 'bhupesh20192019@gmail.com', 'Male', 1, 1, 'PANDARIYA, POST BUNDELI, TEH\r\nPOST BUNDELI', '2023-09-27 07:41:57', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_post_tbl`
--

CREATE TABLE `master_post_tbl` (
  `id` bigint(20) NOT NULL,
  `category` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `visibility` varchar(200) NOT NULL,
  `right_column` varchar(200) NOT NULL,
  `addtoslider` varchar(200) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `comments` varchar(200) NOT NULL,
  `mainhead` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `short_description` text NOT NULL,
  `created_time` time NOT NULL,
  `description` varchar(200) NOT NULL,
  `m_post_added_on` datetime NOT NULL,
  `m_post_status` int(11) NOT NULL COMMENT '0 = Pending, 1 = Active, 3 = Blocked'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_post_tbl`
--

INSERT INTO `master_post_tbl` (`id`, `category`, `title`, `image`, `slug`, `visibility`, `right_column`, `addtoslider`, `created_date`, `comments`, `mainhead`, `location`, `short_description`, `created_time`, `description`, `m_post_added_on`, `m_post_status`) VALUES
(12, '3', 'hfh', '', 'fh', 'Yes', 'Yes', 'Yes', '2023-09-28 00:00:00', 'fgh', 'vncfgbx', 'Raipur', 'Summary & Description (Meta Tag)', '01:40:00', ' Description', '2023-09-28 23:10:37', 1),
(14, '4', '4566', '2022-11-04.jpg', '56544', 'Yes', 'Yes', 'Yes', '2023-09-27 00:00:00', '35345', 'vncfgbx', '', '', '01:20:00', ' ghgfdsghn ', '2023-09-28 23:09:44', 0),
(15, '5', '4566', '2022-11-04.jpg', '56544', 'Yes', 'Yes', 'Yes', '2023-09-27 00:00:00', '35345', 'vncfgbx', '', '', '01:50:00', ' ghgfdsghn    ', '2023-09-28 23:09:59', 1),
(16, '4', 'tyjgfdrfgh', '2022-11-041.jpg', 'rtjkrth', 'No', 'No', 'Yes', '2023-09-28 00:00:00', '454545', 'vncfgbx', 'Raipur', 'retert', '05:30:00', 'ertret', '2023-09-28 22:34:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_shop_tbl`
--

CREATE TABLE `master_shop_tbl` (
  `m_shop_id` bigint(20) NOT NULL,
  `m_shop_name` varchar(200) NOT NULL,
  `m_shop_contact` varchar(200) NOT NULL,
  `m_shop_alt_contact` varchar(200) NOT NULL,
  `m_shop_image` text NOT NULL,
  `m_shop_email` varchar(200) NOT NULL,
  `m_shop_address` varchar(200) NOT NULL,
  `m_shop_category` int(11) NOT NULL,
  `m_shop_state` int(11) NOT NULL,
  `m_shop_city` int(11) NOT NULL,
  `m_shop_adhar_no` varchar(100) NOT NULL,
  `m_shop_adhar_f` text NOT NULL,
  `m_shop_adhar_b` text NOT NULL,
  `m_shop_pan_no` varchar(100) NOT NULL,
  `m_shop_pan_img` text NOT NULL,
  `m_shop_cheque_img` text NOT NULL,
  `m_shop1` varchar(100) NOT NULL,
  `m_shop_pincode` bigint(20) NOT NULL,
  `m_shop_open` time NOT NULL,
  `m_shop_close` time NOT NULL,
  `m_shop_added_on` datetime NOT NULL,
  `m_shop_status` int(11) NOT NULL COMMENT '0 = inactive, 1 = active, 3 = Blocked'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_shop_tbl`
--

INSERT INTO `master_shop_tbl` (`m_shop_id`, `m_shop_name`, `m_shop_contact`, `m_shop_alt_contact`, `m_shop_image`, `m_shop_email`, `m_shop_address`, `m_shop_category`, `m_shop_state`, `m_shop_city`, `m_shop_adhar_no`, `m_shop_adhar_f`, `m_shop_adhar_b`, `m_shop_pan_no`, `m_shop_pan_img`, `m_shop_cheque_img`, `m_shop1`, `m_shop_pincode`, `m_shop_open`, `m_shop_close`, `m_shop_added_on`, `m_shop_status`) VALUES
(25, 'medical', '2423435324', '6266107525', 'Screenshot_(7)4.png', 'fdgdfgb@gmail.com', ' \r\n                                 \r\n                                 jwnqdjwqd   ', 1, 1, 2, '34333333333', '6201f8b14655a04c95349dbf1.jpg', '1672288927_9db470d8dcd572b26ab7_(2)1.jpeg', '21312312321', '1672288927_9db470d8dcd572b26ab7.jpeg', '', '', 254326, '15:16:00', '15:17:00', '2022-11-24 16:32:24', 1),
(26, 'medical', '2423435324', '6266107525', 'Screenshot_(7)4.png', 'fdgdfgb@gmail.com', ' \r\n                                 \r\n                                 \r\n                                 jwnqdjwqd    ', 1, 1, 2, '34333333333', 'Screenshot_(5)1.png', 'Screenshot_(4)4.png', '21312312321', 'Screenshot_(6)18.png', '', '', 254326, '15:16:00', '15:17:00', '2022-11-24 16:59:54', 1),
(27, 'dgfdgfd', '7979797965', '6767868687', '', 'ghfghfgh@hgh.j', ' \r\n                                 jhjkhkj', 1, 1, 3, '', '', '', '', '', '', '', 490023, '19:02:00', '20:02:00', '2022-11-24 17:02:44', 0),
(28, 'medical', '2423435324', '6266107525', 'Screenshot_(7)4.png', 'fdgdfgb@gmail.com', ' jwnqdjwqd    ', 1, 1, 2, '34333333333', 'Screenshot_(6)19.png', 'Screenshot_(6)20.png', '21312312321', 'Screenshot_(6)21.png', '', '', 254326, '15:16:00', '15:17:00', '2022-11-24 17:13:55', 1),
(29, 'medical', '2423435324', '6266107525', 'Screenshot_(7)4.png', 'fdgdfgb@gmail.com', '  jwnqdjwqd    ', 1, 1, 2, '34333333333', 'Screenshot_(4)3.png', 'Screenshot_(4)4.png', '21312312321', 'Screenshot_(6)22.png', '', '', 254326, '15:16:00', '15:17:00', '2022-11-24 17:33:08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_shop_working_day`
--

CREATE TABLE `master_shop_working_day` (
  `m_working_day_id` int(11) NOT NULL,
  `m_working_shop` bigint(200) NOT NULL,
  `m_working_shop_day` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_shop_working_day`
--

INSERT INTO `master_shop_working_day` (`m_working_day_id`, `m_working_shop`, `m_working_shop_day`, `created_at`) VALUES
(1, 0, 0, '2022-11-12 09:21:46'),
(2, 0, 0, '2022-11-12 09:21:46'),
(3, 0, 0, '2022-11-12 09:28:25'),
(4, 0, 0, '2022-11-12 09:28:25'),
(5, 0, 0, '2022-11-12 09:28:55'),
(6, 0, 0, '2022-11-12 09:28:55'),
(7, 0, 0, '2022-11-12 09:29:27'),
(8, 1, 3, '2022-11-24 16:56:00'),
(9, 1, 4, '2022-11-24 16:56:00'),
(10, 1, 5, '2022-11-24 16:56:00'),
(11, 26, 3, '2022-11-24 16:59:00'),
(12, 26, 4, '2022-11-24 16:59:00'),
(13, 26, 5, '2022-11-24 16:59:00'),
(14, 27, 5, '2022-11-24 17:02:00'),
(15, 27, 6, '2022-11-24 17:02:00'),
(16, 27, 7, '2022-11-24 17:02:00'),
(17, 29, 2, '2022-11-24 17:33:00'),
(18, 29, 3, '2022-11-24 17:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `master_slider_tbl`
--

CREATE TABLE `master_slider_tbl` (
  `m_slider_id` bigint(20) NOT NULL,
  `m_slider_title` varchar(250) NOT NULL,
  `m_slider_title_upper` text NOT NULL,
  `m_slider_title_sub` text NOT NULL,
  `m_slider_image` text NOT NULL,
  `m_slider_order` int(11) NOT NULL,
  `m_slider_status` int(11) NOT NULL,
  `m_slider_added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `master_slider_tbl`
--

INSERT INTO `master_slider_tbl` (`m_slider_id`, `m_slider_title`, `m_slider_title_upper`, `m_slider_title_sub`, `m_slider_image`, `m_slider_order`, `m_slider_status`, `m_slider_added_on`) VALUES
(1, 'Main Head Title', 'Upper Head Title', 'Sub Head Title', 'slider1.jpeg', 1, 1, '0000-00-00 00:00:00'),
(2, 'Main Head Title', 'Upper Head Title', 'Sub Head Title', 'logo.png', 2, 1, '0000-00-00 00:00:00'),
(3, 'Main Head Title', 'Upper Head Title', 'Sub Head Title', 'slider1.jpeg', 3, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `master_state_tbl`
--

CREATE TABLE `master_state_tbl` (
  `m_state_id` bigint(11) NOT NULL,
  `m_state_name` varchar(250) NOT NULL,
  `m_state_country` bigint(20) NOT NULL,
  `m_state_status` int(11) NOT NULL,
  `m_state_added_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `master_state_tbl`
--

INSERT INTO `master_state_tbl` (`m_state_id`, `m_state_name`, `m_state_country`, `m_state_status`, `m_state_added_on`) VALUES
(0, 'bihar', 1, 1, '2022-11-08 10:42:00'),
(1, 'Chhattisgarh', 1, 1, '2022-09-26 17:44:44'),
(2, 'Maharashtra', 1, 1, '2022-09-30 13:05:00'),
(5, 'Mahasamund', 1, 1, '2022-09-30 14:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `master_students_tbl`
--

CREATE TABLE `master_students_tbl` (
  `m_student_id` bigint(20) NOT NULL,
  `m_student_name` varchar(200) NOT NULL,
  `m_student_mobile` varchar(200) NOT NULL,
  `m_student_password` text NOT NULL,
  `m_student_image` text NOT NULL,
  `m_student_email` varchar(200) NOT NULL,
  `m_student_gender` varchar(200) NOT NULL,
  `m_student_dob` date NOT NULL,
  `m_student_adhar_no` varchar(250) NOT NULL,
  `m_student_adhar_f` text NOT NULL,
  `m_student_adhar_b` text NOT NULL,
  `m_student_state` bigint(20) NOT NULL,
  `m_student_city` bigint(20) NOT NULL,
  `m_student_address` text NOT NULL,
  `m_student_otp` varchar(200) NOT NULL,
  `m_otp_verified` int(11) NOT NULL,
  `m_student_fcm` text NOT NULL,
  `m_student_mship` bigint(20) NOT NULL,
  `m_student_mship_is_active` bigint(20) NOT NULL,
  `m_student_start_date` date NOT NULL,
  `m_student_end_date` date NOT NULL,
  `m_student_added_on` datetime NOT NULL,
  `m_student_status` int(11) NOT NULL COMMENT '0 = Pending, 1 = Active, 3 = Blocked'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_students_tbl`
--

INSERT INTO `master_students_tbl` (`m_student_id`, `m_student_name`, `m_student_mobile`, `m_student_password`, `m_student_image`, `m_student_email`, `m_student_gender`, `m_student_dob`, `m_student_adhar_no`, `m_student_adhar_f`, `m_student_adhar_b`, `m_student_state`, `m_student_city`, `m_student_address`, `m_student_otp`, `m_otp_verified`, `m_student_fcm`, `m_student_mship`, `m_student_mship_is_active`, `m_student_start_date`, `m_student_end_date`, `m_student_added_on`, `m_student_status`) VALUES
(5, 'raj', '7987327166', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'download_(1).jpg', 'SS@df.dsf', 'male', '2002-05-15', '', '81nia28xsOL__SL1500_2.jpg', '', 1, 1, '', '619500', 1, 'ABABSBDKDAHDKHewrwe3453453453535', 2, 1, '2022-10-01', '2022-10-30', '2022-10-05 14:06:44', 1),
(6, 'Mukul Agrawal', '7909951312', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', 'mukul@gmail.com', 'male', '2002-06-16', '', '', '', 0, 0, '', '210030', 1, '', 0, 0, '0000-00-00', '0000-00-00', '2022-10-03 10:28:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_user_tbl`
--

CREATE TABLE `master_user_tbl` (
  `m_user_id` bigint(20) NOT NULL,
  `m_user_name` varchar(200) NOT NULL,
  `m_user_mobile` varchar(200) NOT NULL,
  `m_user_image` text NOT NULL,
  `m_user_email` varchar(200) NOT NULL,
  `m_user_gender` varchar(200) NOT NULL,
  `m_user_city` bigint(20) NOT NULL,
  `m_user_des` tinyint(1) NOT NULL,
  `m_user_address` text NOT NULL,
  `m_user_added_on` datetime NOT NULL,
  `m_user_status` int(11) NOT NULL COMMENT '0 = Pending, 1 = Active, 3 = Blocked'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_user_tbl`
--

INSERT INTO `master_user_tbl` (`m_user_id`, `m_user_name`, `m_user_mobile`, `m_user_image`, `m_user_email`, `m_user_gender`, `m_user_city`, `m_user_des`, `m_user_address`, `m_user_added_on`, `m_user_status`) VALUES
(2, 'DAMAN', '6266107525', 'logo1.jpg', 'daman@gmail.com', 'Male', 3, 1, ' \r\n                                             \r\n                                            ckndasda  ', '2022-11-21 17:59:39', 1),
(5, 'DAMAN', '6266107525', 'logo4.jpg', 'daman@gmail.com', 'Male', 0, 1, 'raipur', '2022-11-07 16:13:51', 0),
(7, 'lily', '6266107525', 'logo9.jpg', 'lily2@gmail.com', 'Male', 2, 1, '   raipur ', '2022-11-10 14:46:42', 1),
(8, 'daman', '6266107525', 'logo10.jpg', 'daman@gmail.com', 'Male', 3, 1, 'ckn', '2022-11-10 15:21:49', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_settings`
--
ALTER TABLE `application_settings`
  ADD PRIMARY KEY (`m_app_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_admin_tbl`
--
ALTER TABLE `master_admin_tbl`
  ADD PRIMARY KEY (`m_admin_id`);

--
-- Indexes for table `master_area_tbl`
--
ALTER TABLE `master_area_tbl`
  ADD PRIMARY KEY (`m_area_id`);

--
-- Indexes for table `master_category_tbl`
--
ALTER TABLE `master_category_tbl`
  ADD PRIMARY KEY (`m_category_id`);

--
-- Indexes for table `master_city_tbl`
--
ALTER TABLE `master_city_tbl`
  ADD PRIMARY KEY (`m_city_id`);

--
-- Indexes for table `master_country_tbl`
--
ALTER TABLE `master_country_tbl`
  ADD PRIMARY KEY (`m_country_id`);

--
-- Indexes for table `master_designation_tbl`
--
ALTER TABLE `master_designation_tbl`
  ADD PRIMARY KEY (`m_designation_id`);

--
-- Indexes for table `master_officer_tbl`
--
ALTER TABLE `master_officer_tbl`
  ADD PRIMARY KEY (`m_officer_id`);

--
-- Indexes for table `master_post_tbl`
--
ALTER TABLE `master_post_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_shop_tbl`
--
ALTER TABLE `master_shop_tbl`
  ADD PRIMARY KEY (`m_shop_id`);

--
-- Indexes for table `master_shop_working_day`
--
ALTER TABLE `master_shop_working_day`
  ADD PRIMARY KEY (`m_working_day_id`);

--
-- Indexes for table `master_slider_tbl`
--
ALTER TABLE `master_slider_tbl`
  ADD PRIMARY KEY (`m_slider_id`);

--
-- Indexes for table `master_state_tbl`
--
ALTER TABLE `master_state_tbl`
  ADD PRIMARY KEY (`m_state_id`);

--
-- Indexes for table `master_students_tbl`
--
ALTER TABLE `master_students_tbl`
  ADD PRIMARY KEY (`m_student_id`);

--
-- Indexes for table `master_user_tbl`
--
ALTER TABLE `master_user_tbl`
  ADD PRIMARY KEY (`m_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_settings`
--
ALTER TABLE `application_settings`
  MODIFY `m_app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_admin_tbl`
--
ALTER TABLE `master_admin_tbl`
  MODIFY `m_admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_area_tbl`
--
ALTER TABLE `master_area_tbl`
  MODIFY `m_area_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `master_category_tbl`
--
ALTER TABLE `master_category_tbl`
  MODIFY `m_category_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `master_city_tbl`
--
ALTER TABLE `master_city_tbl`
  MODIFY `m_city_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `master_country_tbl`
--
ALTER TABLE `master_country_tbl`
  MODIFY `m_country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `master_designation_tbl`
--
ALTER TABLE `master_designation_tbl`
  MODIFY `m_designation_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `master_officer_tbl`
--
ALTER TABLE `master_officer_tbl`
  MODIFY `m_officer_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `master_post_tbl`
--
ALTER TABLE `master_post_tbl`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `master_shop_tbl`
--
ALTER TABLE `master_shop_tbl`
  MODIFY `m_shop_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `master_shop_working_day`
--
ALTER TABLE `master_shop_working_day`
  MODIFY `m_working_day_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `master_students_tbl`
--
ALTER TABLE `master_students_tbl`
  MODIFY `m_student_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `master_user_tbl`
--
ALTER TABLE `master_user_tbl`
  MODIFY `m_user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
