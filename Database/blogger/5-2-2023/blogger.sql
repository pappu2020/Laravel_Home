-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2023 at 05:12 PM
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
-- Database: `blogger`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogger_post_models`
--

CREATE TABLE `blogger_post_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_desp` varchar(250) DEFAULT NULL,
  `description` longtext NOT NULL,
  `featured_img` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `readTime` int(11) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogger_post_models`
--

INSERT INTO `blogger_post_models` (`id`, `author_id`, `category_id`, `title`, `short_desp`, `description`, `featured_img`, `slug`, `status`, `readTime`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 24, 2, 'Some memories of World longest beach Cox\'s Bazar', 'As life gets monotonous with every passing day, the most incredible way to relax is to go somewhere completely different. The beach is as far away from work as feasible for those in the city.', '<p><span style=\"font-weight:400;font-size:14pt\">As life gets monotonous \r\nwith every passing day, the most incredible way to relax is to go \r\nsomewhere completely different. The beach is as far away from work as \r\nfeasible for those in the city. From the longest sandy beach in the \r\nworld to famous traditional food and seafood, Cox\'s Bazar has made \r\nitself one of Bangladesh\'s most prominent tourist destinations. Cox\'s \r\nBazar is located on the southwest coast of Bangladesh, about 150 km (90 \r\nmiles) south of the city of Chattogram (Chittagong).</span></p>\r\n<p><span style=\"font-weight:400;font-size:14pt\">A visit to Cox\'s Bazar \r\ncan undoubtedly provide a break from everything that is bothering your \r\nmental growth. So don\'t forget to check out this blog detailing Cox\'s \r\nBazar with everything you can explore while visiting Cox\'s Bazar.</span></p>\r\n<p>&nbsp;</p>\r\n<h2><strong>When to Visit Cox\'s Bazar?</strong></h2>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-weight:400;font-size:14pt\">When you plan a trip to a\r\n new destination, the first thing that comes to mind is when you should \r\ngo? Bangladesh is a six-season country; thus, each season offers \r\nvisitors a unique perspective and beauty. Cox\'s Bazar grows more \r\ndesirable and attractive with each passing season in Bangladesh. Summer \r\ndays are ideal for beach activities, while the monsoon brings the beach \r\nof Cox\'s Bazar to life. Moreover, Winter is the most beautiful season, \r\nwhen the sun isn\'t scorching hot, and the weather is gloomy and cool. \r\nSo, the beauty of Cox\'s Bazar will enchant you no matter what time of \r\nyear you visit.</span></p>\r\n<p>&nbsp;</p>\r\n<h2><strong>How to Travel to Cox\'s Bazar?</strong></h2>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-weight:400;font-size:14pt\">Cox\'s Bazar connects Bangladesh\'s central districts by road and air. If you live in Dhaka, you can <a href=\"https://sharetrip.net/\" target=\"_blank\" rel=\"noopener\">fly to Cox\'s Bazar</a>\r\n 50 minutes from Hazrat Shahjalal International Airport. This mode of \r\ntransportation is currently the most convenient and time-saving. \r\nFurthermore, some people prefer to go by car and bus rather than by \r\nflight. Moreover, some people enjoy long road trips and frequently \r\ntravel to Cox\'s Bazar in their vehicles. Hence, your current residing \r\nplace has no impact, and you\'ll be able to locate a suitable mode of \r\ntransportation to visit Cox\'s Bazar at any time.</span></p>\r\n<p>&nbsp;</p>\r\n<h2><strong>Cox\'s Bazar: Attraction &amp; Activities</strong></h2>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-weight:400;font-size:14pt\">At first glance, you can\r\n start with Cox\'s Bazar Beach to feel the sound of the waves and the \r\nbreeze. You may begin walking the coast from end to end at several beach\r\n points such as Suganda Beach, Laboni Beach and Kolatoli Beach. Don\'t \r\nforget to check out the coral beach named Inani Beach, about 32 km from \r\nDolphin Square. In addition, you should go on a drive along the Marine \r\nDrive Road of Cox\'s Bazar. This road offers the most scenic beauty that \r\ncovers the beautiful beaches of Cox\'s Bazar and the mountains on each \r\nside.</span></p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/blogx_06Lk0ukKPz8hZHVwYVPOfWicurWeKc.jpg\" alt=\"\" width=\"1100\" height=\"300\"></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-weight:400;font-size:14pt\">Moreover, you can also \r\nvisit the Himchori Falls on Marine Drive, and from the top of Himuchori \r\nFalls, you can see the sea as long as the eye meets. You may also visit \r\nthe Ramu Rubber Garden and Ramu Buddha Temple on the outskirts of Cox\'s \r\nBazar.&nbsp;</span></p>\r\n<p><span style=\"font-size:14pt\">&nbsp;</span></p>\r\n<p><img src=\"https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/blog_1v0Rmii32KYc4nLfYSb1kiWyFnHTU7l.jpg\" alt=\"\" width=\"1100\" height=\"300\"></p>\r\n<p><span style=\"font-size:14pt\">&nbsp;</span></p>\r\n<p><span style=\"font-weight:400;font-size:14pt\">To make your trip to \r\nCox\'s Bazar unforgettable, you may try out some of the best activities \r\nat Cox\'s Bazar. Startup your day by riding a JET SKi and experiencing \r\nthe waves in the middle of the ocean. Right after that, enjoy surfing on\r\n the incoming tides with the help of a professional. As surfing is an \r\nexcellent experience, you can ply through the incoming waves and \r\nexperience tides to the fullest. After that, you can also experience \r\nkayaking at Cox\'s Bazar. Kayaking lets you ride through the calm and \r\nbeautiful sea while enjoying the company of your dear ones.</span></p>\r\n<p><span style=\"font-size:14pt\">&nbsp;</span></p>\r\n<p><img src=\"https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/blogiCApWtZSG3aGaMe7c1Snd5rLM9430Gy7.jpg\" alt=\"\" width=\"1100\" height=\"300\"></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-weight:400;font-size:14pt\">Take your Cox\'s Bazar \r\ntrip to the next level with the famous parasailing activity. Ride \r\nparasailing and guarantee a lifetime experience of exploring the \r\nheavenly beaches and hilltop mountains of Cox\'s Bazar. In addition, you \r\ncan rent a scooter or bike and drive through the famous Marine Drive \r\nRoad with your friends and wife. What\'s more, you can enjoy family rides\r\n in the Aquaholic Tourist Caravan, which makes your family trip even \r\nmore enjoyable. This Caravan drives through the marine drive, which \r\nprovides sea and hill views on each side. Besides, you can explore \r\ndifferent cuisines while riding with your friends and family.</span></p>\r\n<p><span style=\"font-size:14pt\">&nbsp;</span></p>\r\n<p><img src=\"https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/blogw6e21YHD_ViA1BrrKevvWOa3pQkxoWWY.jpg\" alt=\"\" width=\"1100\" height=\"300\"></p>\r\n<p><span style=\"font-size:14pt\">&nbsp;</span></p>\r\n<p><span style=\"font-weight:400;font-size:14pt\">Radiant Fish World, a \r\nliving aquarium, is also available for children to enjoy. It is a new \r\naddition to Cox\'s Bazar that allows you to explore aquatic life in your \r\npalms. Squids, small sharks, octopuses, starfish, and other sea \r\ncreatures can all be found here. Radian Fish World is a fun destination \r\nto visit with your family because everyone is excited about the sea life\r\n and animals that live there, especially the kids. Taken from https://sharetrip.net/travel-guide/post/explore-coxs-bazar-complete-travel-guide</span></p><p></p>', '4563455-24.jpg', 'some-memories-of-world-longest-beach-cox\'s-bazar-1032072-Priyas Ghoose', 'Approved', 10, NULL, '2023-02-01 17:51:28', '2023-02-03 08:11:05'),
(2, 24, 6, '\'আমি সবকিছুই পেয়েছি\': বিশ্বকাপের পর প্রথম সাক্ষাৎকারে যা বললেন মেসি', 'বিশ্বকাপ জয়ের কেটে গেছে দুই মাসেরও বেশি। লিওনেল মেসি অবশেষে বিশ্বকাপের পর দিয়েছেন নিজের প্রথম সাক্ষাৎকার, আর্জেন্টাইন রেডিও আরবান প্লেকে খোলাখুলি বলেছেন নিজের অনেক কথা...', '<p><p style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;বিশ্বকাপ \r\nজয়ের কেটে গেছে দুই মাসেরও বেশি। লিওনেল মেসি অবশেষে বিশ্বকাপের পর দিয়েছেন\r\n নিজের প্রথম সাক্ষাৎকার, আর্জেন্টাইন&nbsp;রেডিও আরবান প্লেকে খোলাখুলি বলেছেন \r\nনিজের অনেক কথা...</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>পরিবার নিয়ে</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\">\'আমি আমার \r\nপরিবারকে বলেছি অবশেষে অনেক কষ্ট, অনেক সময়ের পর সবকিছু শেষ হয়েছে। এমন \r\nএকটা সময় ছিল যখন জাতীয় দলে আমার সময়টা ভালো কাটেনি। হতাশার অনেক মুহূর্ত \r\nএসেছে, কাছে গিয়েও অনেক কিছু হয়নি। আমি অনেক দিক থেকে লম্বা সময় ধরে \r\nসমালোচনা শুনে এসেছি। আমি জানি, আমার পরিবারও কমবেশি তা শুনেছে। তারা সবসময়\r\n আমাকে দেখাতে চেয়েছে তারা ভালো আছে। তারা মানসিকভাবে শক্ত আছে। তবে ভেতরে \r\nভেতরেও তারা অনেক কষ্ট পাচ্ছিল। কারণটা শুধু আমি পারিনি বলেই নয়, আমাকে \r\nএমনকি ফুটবলের বাইরেও যেসব অপ্রিয় কথা শুনতে হয়েছে সেসবের জন্যও। এই \r\nব্যাপারটা আমাকে অনেক বেশি আহত করেছিল। এরপর তো আমরা বৃত্তটা পূরণ করেছি। \r\nআমরা বিশ্বকাপ জিতেছি, কোপা আমেরিকা জিতেছি। এরপর আর কিছু বলার নেই।&nbsp;</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\">সৌদি আরবের \r\nসাথে ম্যাচের পর মাতেও অংক কষে হিসাব করছিল আমরা পরের পর্বে যেতে পারব কি \r\nনা। নেদারল্যান্ডসের সাথে জয়ের পর থিয়াগো কান্না করে দিয়েছিল। ওরা \r\nআর্জেন্টাইন ফ্যান হিসেবে বড় হচ্ছে, পুরোদমে উপভোগ করছে।</span></p><p style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>ফাইনালের পর কী মনে হচ্ছিল</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\">ওই সময় কী মনে\r\n হচ্ছিল সেটা আসলে আমার জন্য বোঝানো কঠিন। পরিবারের সাথে দেখা হওয়ার আগে \r\nঅনেক কিছুই আমার মনে হচ্ছিল, আবার কিছুই মনে হচ্ছিল না। যেন আমি আমার মাঝে \r\nআর নেই। ওই মুহূর্তে মনে হচ্ছিল আমি তখনো বিশ্বাস করতে পারছি না, শেষ \r\nপর্যন্ত এটা আমি করতে পেরেছি।</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\">আমি আবারও \r\nবলছি ওই সময় কী হয়েছে সেটা গুছিয়ে ব্যাখ্যা করা আমার জন্য খুব কঠিন। \r\nঅনুভূতিটা আসলে সব পেয়েছিরই, জাতীয় দলের হয়ে সবকিছুই হয়ে গেছে আমার। \r\nক্যারিয়ারে আর কিছুই পাওয়ার নেই। ব্যক্তিগতভাবে বার্সেলোনাতেই আমি সবকিছু \r\nপেয়েছিলাম। যখন আমি শুরু করেছিলাম তখন ভাবিনি এমন কিছু পাব। এটা আসলেই \r\nসোনায় সোহাগা যেটা বলে। আর যখন বিশ্বকাপ ট্রফিটা হাতে নেওয়ার সময় হলো, তখন \r\nমনে হচ্ছিল কাপটা যেন আমাকে বলছে, এবার তুমি আমাকে ছুঁয়ে দেখতে পার।</span></p>\r\n\r\n<span style=\"font-size:16px\">মন্টিয়েলের \r\nপেনাল্টির আগে আমি আকাশের দিকে তাকিয়ে মনে মনে ঈশ্বরকে বলছিলাম, আমি তো \r\nপুরো ক্যারিয়ারেই তাকে সাথে পেয়েছি। এখন আমার আর কোনো দুঃখ নেই। আমি কিন্তু\r\n পুরো ফাইনালটা এরপর আর দেখিনি। কিছু হাইলাইটস, কিছু ক্লিপ দেখেছি, কিন্তু \r\nপুরো ম্যাচটা দেখা হয়নি</span></p><p><span style=\"font-size:16px\">মজার ব্যাপার হচ্ছে, ফাইনালের পর আমার \r\nইন্সটাগ্রামে এত মেসেজ আসা শুরু করল, অ্যাকাউন্টই ব্লক হয়ে যায়। \r\nহোয়াটসঅ্যাপও মেসেজের জন্য ফ্রিজ হয়ে যায়। লাখ কোটির মতো মেসেজ এসেছিল। আমি\r\n জানতাম না আমার ছবিটা ইনস্টাগ্রামে সবচেয়ে বেশি লাইক পেয়েছে, তবে বুঝতে \r\nপেরেছি মানুষ বিশ্বকাপ হাতে আমাকে দেখতে চায়। আর আমার ইন্সটাগ্রাম \r\nঅ্যাকাউন্ট কিন্তু আমি নিজেই চালাই, কোনো কোম্পানি বা ম্যানেজার নয়। </span><br></p><p style=\"text-align:justify\"><span style=\"font-size:16px\">ডিয়েগো বেঁচে \r\nথাকলে তিনিই কাপটা আমাকে দিতেন।&nbsp;এটা খুব সুন্দর একটা ছবি হতো।&nbsp;আমার মনে হয় \r\nআমি ওপর থেকে ডিয়েগো ও আরও অনেকের শুভকামনা পেয়েছি, যে কারণে কাপটা আমাদের \r\nহয়েছে।</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>নেদারল্যান্ডসের বিপক্ষে ম্যাচ নিয়ে</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\">হ্যাঁ, \r\nনেদারল্যান্ডসের বিপক্ষে ম্যাচের আগে আমার টিমমেটরা বলেছিল ওরা আমাদের নিয়ে\r\n ম্যাচের আগে কী বলেছে। প্রতিক্রিয়াটা আসলে ওজন্যই। আমি আসলে ওই ব্যাপারটা \r\n(ম্যাচশেষে প্রতিপক্ষ খেলোয়াড়কে&nbsp;ইঙ্গিতপূর্ণ&nbsp;কথা বলা)&nbsp;মনে রাখতে চাই না, \r\nকিন্তু সেটা সহজাতভাবেই চলে এসেছিল। অনেক নার্ভাস ছিলাম সেসময়।</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>সবচেয়ে কঠিন ম্যাচ?</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\">আমার কাছে মনে\r\n হয়, বিশ্বকাপে মেক্সিকোর বিপক্ষে ম্যাচটা ছিল আমাদের জন্য সবচেয়ে কঠিন। \r\nকারণ ওই ম্যাচের আগে আমাদের পিঠ ছিল দেয়ালে। সব ম্যাচের আগে আমাদের \r\nপ্রস্তুতি ছিল ভালো, এজন্য প্রতিপক্ষের চেয়ে আমরা এগিয়ে ছিলাম।</span></p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:16px\">কোচিং স্টাফ নিয়ে</span></strong></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\">আমাদের কোচিং \r\nস্টাফ এক কথায় দুর্দান্ত। অনেকেই সাবেক ফুটবলার। আমাদের সাথে সকল \r\nচড়াই-উৎরাই তারা পেরিয়েছে। পরিস্থিতি অনুযায়ী তারা কাজ করতে জানে। \r\nবিশ্বকাপের পূর্ব অভিজ্ঞতা তাদের আছে, তাই ভালোমতোই&nbsp;জানত কখন কী করতে হবে \r\nবা বলতে হবে।&nbsp;</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>নিজেকে যা বলব...</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\">আমি তরুণ মেসিকে পেলে বলতাম, কখনো তোমার স্বপ্নের পেছনে ছোটা বন্ধ করে দিও না। কারণ দিন শেষে তার জন্য&nbsp;ভালো কিছুই অপেক্ষা করছে। TAKEN FROM https://pavilion.com.bd</span></p><p><p style=\"text-align:justify\"></p><p></p></p>', '4567455-24.jpg', '\'আমি-সবকিছুই-পেয়েছি\':-বিশ্বকাপের-পর-প্রথম-সাক্ষাৎকারে-যা-বললেন-মেসি-1744031-Priyas Ghoose', 'Approved', 15, NULL, '2023-02-02 07:38:22', '2023-02-03 08:23:58'),
(10, 1, 3, 'ঢাকার সেরা ৫ চা', 'শীতের সন্ধ্যায় ধোঁয়া ওঠা এক কাপ চা হাতে প্রকৃতি ও আবহাওয়া উপভোগ করতে যেমন বেশ লাগে, তেমনি অলস দুপুরে চাপের কাপ হাতে বন্ধুদের আড্ডারও তুলনা হয় না। ক্লান্তি দূর করে চনমনে হতে চাইলে চায়ের বিকল্প নেই। ‘চা-খোর’ যারা, তাদের কাছে তো চা একটি ভালোবাসার নাম! ঢ', '<p></p><h2 class=\"alignfull\">শীতের সন্ধ্যায় ধোঁয়া ওঠা এক কাপ চা হাতে প্রকৃতি ও \r\nআবহাওয়া উপভোগ করতে যেমন বেশ লাগে, তেমনি অলস দুপুরে চাপের কাপ হাতে \r\nবন্ধুদের আড্ডারও তুলনা হয় না। ক্লান্তি দূর করে চনমনে হতে চাইলে চায়ের \r\nবিকল্প নেই। ‘চা-খোর’ যারা, তাদের কাছে তো চা একটি ভালোবাসার নাম! ঢাকা \r\nশহরের অলিগলি, হোটেল-রেস্টুরেন্ট- সর্বত্র চা পাওয়া গেলেও কিছু চা আছে \r\nযেগুলো না খেলেই নয়। জেনে নিন ঢাকা শহরের সেরা কিছু চায়ের খোঁজ।</h2><p><br></p><p><strong>১। কাজীর চায়ের দোকান</strong><br>কাজীর চায়ের দোকানের বিখ্যাত \r\nজলপাই চা খেয়েছেন কি? শাহাজাহানপুর ঝিল থেকে আমতলা মসজিদের গলি ধর সোজা \r\nহাঁটলে পৌঁছে যাবেন খিলগাঁও বাগিচা জামে মসজিদে। ঠিক তার পাশেই রয়েছে কাজীর\r\n চায়ের দোকান। এখানকার টক আর মিষ্টির মিশেলে তৈরি জলপাই রঙ চা চাপ্রেমীদের \r\nকাছে ভীষণ জনপ্রিয়।</p><p><br></p><p><br></p><p class=\"alignfull\"><strong>২। টিএসসি ও পলাশী</strong><br>চায়ের কাপ \r\nহাতে টিএসসি কিংবা পলাশীর মোড়ে আড্ডা দেননি এমন চাপ্রেমী খুঁজে পাওয়াই \r\nমুশকিল। মাল্টা চা, তেঁতুল চা, মালাই চা, কাঁচা মরিচের চাসহ প্রায় ৪০ ধরনের\r\n চায়ের দেখা মেলে টিএসসি ও পলাশীতে। বিকেল থেকেই শিক্ষার্থী থেকে শুরু করে \r\nঅন্যান্যরা এখানে ভিড় জমাতে থাকেন।</p><a class=\"jw_media_holder media_image aligncenter pop-media-holder pop-active\" style=\"width: auto;\"><img alt=\"মরিচ চা \" src=\"https://cdn.banglatribune.net/contents/cache/images/640x0x1/uploads/media/2023/01/15/35990782_10204789779622074_8947301584996401152_n-ada6be5becd9e5e597ca53fb17e1cc6a.jpg\"></a><p></p><p><a class=\"jw_media_holder media_image aligncenter pop-media-holder pop-active\" style=\"width: auto;\"><span class=\"jw_media_caption\"><span class=\"tt\"></span></span></a></p><p><br></p><p><br></p><p></p><p class=\"alignfull\"><strong>৩। ক্যাফে ফাইভ এলিফেন্ট </strong><br>অথেনটিক\r\n শ্রীলংকান স্বাদের চা চেখে দেখতে চাইলে ক্যাফে ফাইভ এলিফেন্টে ঢুঁ মারতে \r\nপারেন। এলিফ্যান্ট রোডের হাতিরপুল মোড়েই রেস্টুরেন্টটির অবস্থান। ফল-মসলার \r\nবিভিন্ন স্বাদে প্রায় ২০ ধরনের শ্রীলঙ্কার চা পাওয়া যায় এই দোকানে।</p><p class=\"alignfull\"><br></p><p class=\"alignfull\"><br></p><p class=\"alignfull\"><strong>৪। নাসির মামার চা</strong><br>গুলশানের\r\n অফিস পাড়ায় অবস্থিত নাসির মামার চায়ের দোকানে সবসময় ভিড় লেগেই থাকে। \r\nগুলশান ১ পোস্ট অফিসের পাশের এই দোকান। একদম ভোর থেকেই এখানে চা বিক্রি \r\nশুরু হয়।</p><p class=\"alignfull\"><a class=\"jw_media_holder media_image aligncenter pop-media-holder pop-active\" style=\"width: auto;\"><img alt=\"রবীন্দ্র সরোবরের মটকা চা \" src=\"https://cdn.banglatribune.net/contents/cache/images/640x0x1/uploads/media/2023/01/15/159553741_10208749572854430_2280029793130408755_n-4c41cf9e4b599095520c7be1b42cadb1.jpg\"></a></p><p class=\"alignfull\"><br></p><p class=\"alignfull\"><br></p><strong>৫। রবীন্দ্র সরোবর, ধানমন্ডি</strong><br>ধানমন্ডি\r\n আট নাম্বার ব্রিজ পার হয়ে বাম দিকে গেলেই রবীন্দ্র সরোবরে প্রবেশের পথ। \r\nপ্রবেশ করে ডানের রাস্তা দিয়ে এক মিনিট হাঁটলেই গরম গরম কাবাবের পাশে দেখা \r\nমিলবে গরুর দুধের মালাই চায়ের। মটকা চা, রঙ চা, মালাই চা, দুধ চা পেয়ে \r\nযাবেন এখানে। এখানকার এলাচি দেওয়া ঘন দুধের মালাই চা এখনও পরখ না করলে ঢুঁ \r\nমারতে পারেন আজই। &nbsp; taken from https://www.banglatribune.com/lifestyle/781568/%E0%A6%A2%E0%A6%BE%E0%A6%95%E0%A6%BE%E0%A6%B0-%E0%A6%B8%E0%A7%87%E0%A6%B0%E0%A6%BE-%E0%A7%AB-%E0%A6%9A%E0%A6%BE&nbsp; <br><p></p><p></p><p></p>', '897799-1.jpg', 'ঢাকার-সেরা-৫-চা-478745-Pappu Saha', 'Approved', 10, NULL, '2023-02-04 10:39:03', '2023-02-04 10:39:03'),
(11, 20, 9, 'ডাক্তারের কাছে যাচ্ছেন? এই বিষয়গুলো খেয়াল করুন', 'শরীরের নাম মহাশয় বলা হলেও সব সময় শরীরে সবকিছু সয় না। নানা কারণেই আমাদের শরীরে হতে পারে গড়বড়। তাই ডাক্তারের কাছে যাওয়ার দরকার পড়ে। চিকিৎসকের পরামর্শ নিতে যাওয়া অনেকের কাছেই সুখকর কিছু নয়..', '<div class=\"entry-content entry-content-single\" itemprop=\"text\">\r\n<p>শরীরের নাম মহাশয় বলা হলেও সব সময় শরীরে সবকিছু সয় না। নানা কারণেই \r\nআমাদের শরীরে হতে পারে গড়বড়। তাই ডাক্তারের কাছে যাওয়ার দরকার পড়ে। \r\nচিকিৎসকের পরামর্শ নিতে যাওয়া অনেকের কাছেই সুখকর কিছু নয়। অনেকে এ নিয়ে\r\n চাপ বোধ করেন, আতঙ্কগ্রস্তও হয়ে পড়েন। অনেকে ডাক্তারের সামনে গিয়ে মন \r\nখুলে বলতে পারেন না, আবার অনেকে সঠিকভাবে নিজের সমস্যাটাও বোঝাতে পারেন না।\r\n এমনকি অনেকের এমনও হয় যে হাসপাতালে বা ডাক্তারের কাছে যাওয়া মাত্র \r\nরক্তচাপ বেড়ে যায়। আসলে ডাক্তারের কাছে অল্প সময়ের সাক্ষাৎকালীন অনেক \r\nকিছু বলতে হয়, বোঝাতে হয়, আবার বুঝে আসতেও হয়। অকারণ কথায় সময় নষ্ট \r\nকরাও চলবে না। তাই ডাক্তারখানায় যাওয়ার আগে অবশ্যই একটা প্রস্তুতি নিয়ে \r\nযাওয়া ভালো।</p>\r\n<p>ডাক্তারের কাছে যাওয়ার মূল উদ্দেশ্য হলো শারীরিক সমস্যাগুলোর কথা খুলে \r\nবলা। আর এটা করতে গিয়েই যত অসুবিধা। কেউ রাজ্যের সাতকাহন বলেও আসল কথাটি \r\nপ্রকাশ করতে পারেন না, কেউ ভুলে যান অনেক গুরুত্বপূর্ণ তথ্য, কেউ আবার কথাই\r\n খুঁজে পান না। তাই চিকিৎসকের কাছে যাওয়ার আগেই ভালো করে গুছিয়ে নিয়ে, \r\nঅল্প সময়ের ভেতর নিজের মূল সমস্যাগুলো সুন্দর করে সাজিয়ে নিয়ে গেলে রোগী\r\n বা ডাক্তার উভয়েরই বেশ সুবিধা হয়। সবচেয়ে ভালো হয় যদি গুরুত্বপূর্ণ \r\nতথ্যগুলো লিখে বা তালিকা করে নিয়ে যাওয়া যায়, তাহলে ভুলে যাওয়ার আশঙ্কা\r\n থাকে না।</p>\r\n<p>কারও যদি উচ্চ রক্তচাপ বা ডায়াবেটিসের মতো দীর্ঘস্থায়ী রোগ থাকে, \r\nতাহলে তা অবশ্যই প্রথমেই উল্লেখ করা ভালো। সেই সঙ্গে ক্রনিক এসব রোগের \r\nবর্তমান অবস্থা, এটি নিয়ন্ত্রণে আছে কি না, এর জন্য কী কী ওষুধ খাওয়া \r\nহচ্ছে, তার পূর্ণ এবং সঠিক বিবরণ খুবই দরকার।</p>\r\n<p>রোগী বর্তমানে কী কী ওষুধ খাচ্ছেন, তার নাম, পরিমাণ—এই সব তথ্যই \r\nচিকিৎসকের জানা খুব জরুরি। প্রেসক্রিপশন হাতের কাছে না থাকলে প্রয়োজনে \r\nওষুধের ছবি বা ওষুধের পাতা সঙ্গে করে নিয়েও যাওয়া যায়।</p>\r\n<p>বর্তমান সমস্যার সঙ্গে সঙ্গে রোগীর পূর্ব ইতিহাস, যেমন আগে কোনো জটিল \r\nরোগে ভুগেছিলেন কি না (যেমন যক্ষ্মা, ক্যানসার ইত্যাদি), ইতিপূর্বে কোনো \r\nঅপারেশন হয়েছিল কি না, এসব ইতিহাস জানানো দরকার। কিছু রোগের ক্ষেত্রে \r\nপারিবারিক ইতিহাস খুব গুরুত্বপূর্ণ, যেমন কিছু রক্তরোগ, কিডনিজনিত সমস্যা \r\nবা ডায়াবেটিস থাইরয়েডের সমস্যা। তাই পরিবারের কারও এমন সমস্যা থাকলে, তা \r\nচিকিৎসককে জানানো প্রয়োজন।</p>\r\n<p>কারও কারও ক্ষেত্রে কোনো কোনো ওষুধে অতি সংবেদনশীলতা থাকতে পারে, যেমন \r\nকোনো বিশেষ অ্যান্টিবায়োটিক বা ব্যথানাশক খেলে বিরূপ প্রতিক্রিয়া হয়, \r\nরোগী আগেই চিকিৎসককে তা অবহিত না করলে পরবর্তী সময়ে ওষুধের কারণে সমস্যা \r\nসৃষ্টি হতে পারে। এমনকি কেউ যদি জন্মনিয়ন্ত্রণ বড়ি বা এ–জাতীয় কোনো ওষুধ\r\n রোজ খেয়ে থাকেন, তা–ও জানাতে হবে।</p>\r\n<p>অতএব নিজের শারীরিক সমস্যা গুছিয়ে বলার পাশাপাশি অতীত ইতিহাস বা \r\nওষুধসংক্রান্ত তথ্যগুলোও প্রয়োজন। তবে সব রোগের বিস্তারিত তথ্য না–ও লাগতে\r\n পারে, অনেক সময় চিকিৎসক আনুষঙ্গিক প্রশ্ন করে থাকেন। সেই প্রশ্নগুলোর \r\nসঠিক ও সংক্ষিপ্ত উত্তর দিতে চেষ্টা করুন। অনেকেই রোগ বর্ণনা দিতে গিয়ে \r\nনানা অপ্রয়োজনীয় বিষয়ের অবতারণা করে ফেলেন, যেমন অন্য চিকিৎসকের দোষ-গুণ\r\n পর্যালোচনা, বিদেশে চিকিৎসার অপ্রয়োজনীয় বর্ণনা বা দেশের \r\nচিকিৎসাব্যবস্থা নিয়ে তাঁর অনীহা বা ক্ষোভ। এতে করে আপনার চিকিৎসক বিরক্ত \r\nবোধ করতে পারেন। সময়ও নষ্ট হয়। তাই প্রয়োজনীয় তথ্য সুন্দর করে গুছিয়ে \r\nবলাটা জরুরি। ডাক্তারের কাছে যাওয়ার সময় আগের ব্যবস্থাপত্র, \r\nপরীক্ষা-নিরীক্ষার কাগজপত্র ফাইল করে নিয়ে গেলে ভালো।</p>\r\n<p>সবশেষে, নতুন প্রেসক্রিপশন বা ব্যবস্থাপত্র হাতে পেলে ভালোভাবে বুঝে \r\nনেওয়া দরকার। অনেকেই রোগযন্ত্রণা বা দুশ্চিন্তার কারণে অস্থির হয়ে থাকেন,\r\n পূর্ণ মনোযোগসহকারে বলতে বা শুনতে পারেন না, সে ক্ষেত্রে সঙ্গে একজন \r\nপূর্ণবয়স্ক আত্মীয়পরিজন থাকলে ভালো হয়। তাড়াহুড়ো বা অকারণ দেরি \r\nকোনোটাই ভালো নয়। দুশ্চিন্তাগ্রস্ত বা অস্থির না হয়ে, বিরক্ত বা \r\nরাগান্বিত না হয়ে দরকারি কথাগুলো বোঝাতে পারলে সঠিক চিকিৎসা পাওয়া যায়।</p>\r\n<p><em><strong>ডা. শাহনূর শারমিন</strong>: সহযোগী অধ্যাপক, মেডিসিন বিভাগ, ঢাকা মেডিকেল কলেজ</em></p>\r\n<p>সূত্র : প্রথম আলো</p>\r\n<figure class=\"wp-block-image size-full\"><img src=\"https://health.b-cdn.net/wp-content/uploads/2023/02/going-to-the-doctors.webp\" alt=\"ডাক্তারের কাছে যাচ্ছেন? এই বিষয়গুলো খেয়াল করুন\" class=\"wp-image-15597\" width=\"640\" height=\"427\"></figure>\r\n</div><p></p>', '971677-20.webp', 'ডাক্তারের-কাছে-যাচ্ছেন?-এই-বিষয়গুলো-খেয়াল-করুন-1024315-Anup saha', 'Approved', NULL, NULL, '2023-02-03 11:34:22', '2023-02-03 11:39:11');

-- --------------------------------------------------------

--
-- Table structure for table `category_models`
--

CREATE TABLE `category_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoryName` varchar(255) NOT NULL,
  `categoryImg` varchar(255) DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_models`
--

INSERT INTO `category_models` (`id`, `categoryName`, `categoryImg`, `added_by`, `created_at`, `updated_at`) VALUES
(2, 'Travellling', 'travellling-248126.png', 1, '2023-01-29 13:15:14', '2023-01-29 13:15:14'),
(3, 'Food', 'food-620339.png', 1, '2023-01-29 13:26:23', '2023-01-29 13:26:23'),
(4, 'Place', 'place-511624.png', 1, '2023-01-29 13:27:46', '2023-01-29 13:27:46'),
(5, 'Hobby', 'hobby-988861.png', 1, '2023-01-29 13:28:48', '2023-01-29 13:28:48'),
(6, 'Sports', 'sports-695840.png', 1, '2023-01-29 13:29:35', '2023-01-29 13:29:35'),
(7, 'Branding', 'branding-976616.png', 1, '2023-01-29 13:30:29', '2023-01-29 13:30:29'),
(8, 'Lifestyle', 'lifestyle-642391.png', 1, '2023-01-29 13:32:36', '2023-01-29 13:32:36'),
(9, 'Health', 'health-596542.png', 1, '2023-01-29 13:33:10', '2023-01-29 13:33:10');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_29_114403_create_category_models_table', 2),
(6, '2023_01_31_134139_create_tag_models_table', 3),
(7, '2023_01_31_151548_create_permission_tables', 4),
(8, '2023_02_01_225327_create_blogger_post_models_table', 5),
(9, '2023_02_01_234037_create_tag_post_models_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 18),
(3, 'App\\Models\\User', 20),
(4, 'App\\Models\\User', 19),
(5, 'App\\Models\\User', 1),
(5, 'App\\Models\\User', 18),
(5, 'App\\Models\\User', 19),
(5, 'App\\Models\\User', 20),
(5, 'App\\Models\\User', 24),
(5, 'App\\Models\\User', 26),
(5, 'App\\Models\\User', 27),
(5, 'App\\Models\\User', 30);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'show_user_list', 'web', '2023-01-31 09:22:39', '2023-01-31 09:22:39'),
(2, 'user_delete', 'web', '2023-01-31 09:23:19', '2023-01-31 09:23:19'),
(3, 'category_add', 'web', '2023-01-31 09:23:34', '2023-01-31 09:23:34'),
(4, 'category_delete', 'web', '2023-01-31 09:23:44', '2023-01-31 09:23:44'),
(5, 'category_update', 'web', '2023-01-31 09:23:56', '2023-01-31 09:23:56'),
(6, 'tag_add', 'web', '2023-01-31 09:24:10', '2023-01-31 09:24:10'),
(7, 'tag_delete', 'web', '2023-01-31 09:24:19', '2023-01-31 09:24:19'),
(8, 'tag_update', 'web', '2023-01-31 09:24:29', '2023-01-31 09:24:29'),
(9, 'show_tag_list', 'web', '2023-01-31 09:24:45', '2023-01-31 09:24:45'),
(10, 'show_category_list', 'web', '2023-01-31 09:25:07', '2023-01-31 09:25:07'),
(11, 'show_role_list', 'web', '2023-01-31 09:25:17', '2023-01-31 09:25:17'),
(12, 'show_permission_list', 'web', '2023-01-31 09:25:35', '2023-01-31 09:25:35'),
(13, 'can post', 'web', '2023-02-01 13:40:46', '2023-02-01 13:40:46'),
(14, 'Can delete post', 'web', '2023-02-01 13:41:02', '2023-02-01 13:41:02'),
(15, 'can update post', 'web', '2023-02-01 13:41:19', '2023-02-01 13:41:19'),
(16, 'show post', 'web', '2023-02-01 13:42:04', '2023-02-01 13:42:04'),
(17, 'role add', 'web', '2023-02-01 14:07:29', '2023-02-01 14:07:29'),
(18, 'blogger_post_management', 'web', '2023-02-03 06:57:12', '2023-02-03 06:57:12');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2023-01-31 09:34:04', '2023-01-31 09:34:04'),
(2, 'Admin', 'web', '2023-01-31 09:48:50', '2023-01-31 09:48:50'),
(3, 'Moderator', 'web', '2023-01-31 09:50:41', '2023-01-31 09:50:41'),
(4, 'General Officer', 'web', '2023-01-31 09:51:07', '2023-01-31 09:51:07'),
(5, 'Author', 'web', '2023-02-01 13:42:40', '2023-02-01 13:42:40');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(3, 2),
(3, 3),
(4, 1),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(6, 3),
(7, 1),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(9, 3),
(9, 4),
(10, 1),
(10, 2),
(10, 3),
(10, 4),
(11, 1),
(11, 2),
(11, 4),
(12, 1),
(12, 2),
(13, 1),
(13, 5),
(14, 1),
(14, 5),
(15, 1),
(15, 5),
(16, 1),
(16, 5),
(17, 1),
(18, 1),
(18, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tag_models`
--

CREATE TABLE `tag_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tagName` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tag_models`
--

INSERT INTO `tag_models` (`id`, `tagName`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Travel', 1, '2023-01-31 08:00:11', NULL),
(2, 'Nature', 1, '2023-01-31 08:01:09', NULL),
(3, 'Fashion', 1, '2023-01-31 08:01:23', NULL),
(4, 'Web', 1, '2023-01-31 08:01:34', NULL),
(5, 'Health', 1, '2023-01-31 08:01:40', NULL),
(6, 'Food', 1, '2023-01-31 08:01:49', NULL),
(7, 'Animal', 1, '2023-01-31 08:02:03', NULL),
(8, 'Cricket', 1, '2023-01-31 08:02:11', NULL),
(9, 'Football', 1, '2023-01-31 08:02:17', NULL),
(10, 'Swimming', 1, '2023-01-31 08:02:24', NULL),
(11, 'Technology', 1, '2023-01-31 08:02:36', NULL),
(12, 'Innovation', 1, '2023-01-31 08:02:43', NULL),
(13, 'Science', 1, '2023-01-31 08:02:53', NULL),
(14, 'Human fact', 1, '2023-01-31 08:03:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tag_post_models`
--

CREATE TABLE `tag_post_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` varchar(255) NOT NULL,
  `post_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tag_post_models`
--

INSERT INTO `tag_post_models` (`id`, `tag_id`, `post_id`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '2023-02-01 17:51:28', NULL),
(2, '2', '1', '2023-02-01 17:51:28', NULL),
(3, '9', '2', '2023-02-02 07:38:22', NULL),
(4, '1', '3', '2023-02-02 10:03:31', NULL),
(5, '1', '4', '2023-02-02 10:31:04', NULL),
(6, '2', '4', '2023-02-02 10:31:04', NULL),
(7, '11', '5', '2023-02-02 13:53:08', '2023-02-02 13:53:08'),
(8, '11', '5', '2023-02-02 13:53:08', '2023-02-02 13:53:08'),
(9, '11', '5', '2023-02-02 13:53:08', '2023-02-02 13:53:08'),
(10, '1', '6', '2023-02-02 14:05:57', NULL),
(11, '2', '6', '2023-02-02 14:05:57', NULL),
(12, '11', '6', '2023-02-02 14:05:57', NULL),
(13, '1', '7', '2023-02-02 16:07:04', NULL),
(14, '4', '7', '2023-02-02 16:07:04', NULL),
(15, '6', '7', '2023-02-02 16:07:04', NULL),
(16, '8', '7', '2023-02-02 16:07:04', NULL),
(17, '9', '7', '2023-02-02 16:07:04', NULL),
(18, '10', '7', '2023-02-02 16:07:04', NULL),
(19, '12', '7', '2023-02-02 16:07:04', NULL),
(20, '14', '7', '2023-02-02 16:07:04', NULL),
(21, '3', '8', '2023-02-02 16:11:23', NULL),
(22, '2', '9', '2023-02-02 16:16:07', NULL),
(23, '6', '10', '2023-02-04 10:39:03', '2023-02-04 10:39:03'),
(24, '5', '11', '2023-02-03 11:34:22', NULL),
(25, '14', '11', '2023-02-03 11:34:22', NULL),
(26, '1', '12', '2023-02-04 06:08:48', NULL),
(27, '3', '12', '2023-02-04 06:08:48', NULL),
(28, '5', '12', '2023-02-04 06:08:48', NULL),
(29, '7', '12', '2023-02-04 06:08:48', NULL),
(30, '13', '12', '2023-02-04 06:08:48', NULL),
(31, '14', '12', '2023-02-04 06:08:48', NULL),
(32, '2', '13', '2023-02-04 07:29:35', NULL),
(33, '3', '13', '2023-02-04 07:29:35', NULL),
(34, '4', '13', '2023-02-04 07:29:35', NULL),
(35, '5', '13', '2023-02-04 07:29:35', NULL),
(36, '7', '13', '2023-02-04 07:29:35', NULL),
(37, '11', '13', '2023-02-04 07:29:35', NULL),
(38, '13', '13', '2023-02-04 07:29:35', NULL),
(39, '14', '13', '2023-02-04 07:29:35', NULL),
(40, '1', '14', '2023-02-04 07:40:08', NULL),
(41, '5', '14', '2023-02-04 07:40:08', NULL),
(42, '6', '14', '2023-02-04 07:40:08', NULL),
(43, '7', '14', '2023-02-04 07:40:08', NULL),
(44, '9', '14', '2023-02-04 07:40:08', NULL),
(45, '14', '14', '2023-02-04 07:40:08', NULL),
(46, '3', '15', '2023-02-04 07:49:39', NULL),
(47, '5', '15', '2023-02-04 07:49:39', NULL),
(48, '6', '15', '2023-02-04 07:49:39', NULL),
(49, '8', '15', '2023-02-04 07:49:39', NULL),
(50, '9', '15', '2023-02-04 07:49:39', NULL),
(51, '11', '15', '2023-02-04 07:49:39', NULL),
(52, '12', '15', '2023-02-04 07:49:39', NULL),
(53, '13', '15', '2023-02-04 07:49:39', NULL),
(54, '4', '16', '2023-02-04 07:50:19', NULL),
(55, '5', '16', '2023-02-04 07:50:19', NULL),
(56, '6', '16', '2023-02-04 07:50:19', NULL),
(57, '8', '16', '2023-02-04 07:50:19', NULL),
(58, '11', '16', '2023-02-04 07:50:19', NULL),
(59, '12', '16', '2023-02-04 07:50:19', NULL),
(60, '13', '16', '2023-02-04 07:50:19', NULL),
(61, '1', '17', '2023-02-04 08:29:46', NULL),
(62, '3', '17', '2023-02-04 08:29:46', NULL),
(63, '7', '17', '2023-02-04 08:29:46', NULL),
(64, '9', '17', '2023-02-04 08:29:46', NULL),
(65, '11', '17', '2023-02-04 08:29:46', NULL),
(66, '13', '17', '2023-02-04 08:29:46', NULL),
(67, '1', '18', '2023-02-04 08:36:38', NULL),
(68, '2', '18', '2023-02-04 08:36:38', NULL),
(69, '6', '18', '2023-02-04 08:36:38', NULL),
(70, '9', '18', '2023-02-04 08:36:38', NULL),
(71, '10', '18', '2023-02-04 08:36:38', NULL),
(72, '14', '18', '2023-02-04 08:36:38', NULL),
(73, '2', '19', '2023-02-04 08:44:06', NULL),
(74, '4', '19', '2023-02-04 08:44:06', NULL),
(75, '5', '19', '2023-02-04 08:44:06', NULL),
(76, '7', '19', '2023-02-04 08:44:06', NULL),
(77, '8', '19', '2023-02-04 08:44:06', NULL),
(78, '10', '19', '2023-02-04 08:44:06', NULL),
(79, '12', '19', '2023-02-04 08:44:06', NULL),
(80, '13', '19', '2023-02-04 08:44:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `photo`, `email_verified_at`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Pappu Saha', 'sahapappu018@gmail.com', '1-2138115708.jpg', NULL, '$2y$10$COvKOnkliItpqqdGB63Fveav73fCxNAwcvI3DDXPSztEdV21D6asm', NULL, NULL, '2023-01-29 00:46:32', '2023-01-29 00:46:32'),
(2, 'Raymundo Satterfield', 'lauriane.deckow@example.net', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4ijdV3FgLl', '2023-02-05 14:28:38', '2023-01-28 23:57:54', '2023-02-05 14:28:38'),
(3, 'Mr. Casper Balistreri PhD', 'sporer.demond@example.com', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ngLTmzKCn2', '2023-02-05 14:28:38', '2023-01-28 23:57:54', '2023-02-05 14:28:38'),
(4, 'Elsa Grady', 'katarina.cassin@example.org', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HX2JMWAKOU', '2023-02-05 14:28:38', '2023-01-28 23:57:54', '2023-02-05 14:28:38'),
(5, 'Prof. Arnold Smith', 'hettinger.margarett@example.com', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'v5lSYwuDaj', '2023-01-31 13:33:04', '2023-01-28 23:57:54', '2023-01-31 13:33:04'),
(6, 'Hilton Hirthe', 'ortiz.miguel@example.net', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'eqMZeQ6S8H', '2023-02-05 14:28:12', '2023-01-28 23:57:54', '2023-02-05 14:28:12'),
(7, 'Prof. Sigrid Rowe V', 'cassie.kuhn@example.org', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'iwxk84Z7Wi', '2023-01-31 13:33:23', '2023-01-28 23:57:54', '2023-01-31 13:33:23'),
(8, 'Nora Lowe', 'jones.treva@example.com', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YE33dqggpZ', '2023-01-31 13:33:13', '2023-01-28 23:57:54', '2023-01-31 13:33:13'),
(9, 'Elouise Hettinger I', 'predovic.alanna@example.net', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'OZpI6iFL8I', '2023-01-31 13:33:23', '2023-01-28 23:57:54', '2023-01-31 13:33:23'),
(10, 'Prof. Jamir Keebler', 'erick.gutkowski@example.com', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FXpfNYwLRc', '2023-01-31 13:33:23', '2023-01-28 23:57:54', '2023-01-31 13:33:23'),
(11, 'Mustafa Jacobi', 'blick.maegan@example.com', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5L6Vh3San5', '2023-01-31 13:33:23', '2023-01-28 23:57:54', '2023-01-31 13:33:23'),
(12, 'Abdullah Bartell', 'chester.legros@example.org', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BVhPFnojcX', '2023-02-05 14:28:12', '2023-01-28 23:57:54', '2023-02-05 14:28:12'),
(13, 'Mrs. Aryanna Reichel', 'rutherford.autumn@example.com', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'huzbbVeZ26', '2023-02-05 14:28:12', '2023-01-28 23:57:54', '2023-02-05 14:28:12'),
(14, 'Mrs. Hollie Huel', 'ashtyn.veum@example.com', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mJIDyQ4iHO', '2023-02-05 14:28:12', '2023-01-28 23:57:54', '2023-02-05 14:28:12'),
(15, 'Dr. Annetta Jaskolski V', 'abigayle04@example.net', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pX11wUnEwF', '2023-02-05 14:28:12', '2023-01-28 23:57:54', '2023-02-05 14:28:12'),
(16, 'Noe Botsford', 'lucinda.legros@example.org', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ldU1fLjjLL', '2023-02-01 06:17:18', '2023-01-28 23:57:54', '2023-02-01 06:17:18'),
(17, 'locap', 'suwem@mailinator.com', '17-1749253757.png', NULL, '$2y$10$jXF7yMnQoQ3PR6bd9ZSUh.yqPK.7ouzdyAURxDSiNCOM.71.oPXz2', NULL, '2023-02-05 14:28:12', '2023-01-29 00:45:59', '2023-02-05 14:28:12'),
(18, 'Ritu', 'ritu@gmail.com', NULL, NULL, '$2y$10$bWnuusDsQa2aiSgPlCMy7eAwd.4moXWG55akIKpDDXnUBWFgOd2Zy', NULL, NULL, '2023-01-31 10:25:19', '2023-01-31 10:25:19'),
(19, 'Bishal saha', 'bishal@gmail.com', NULL, NULL, '$2y$10$rGA30lLFQnnLbeCfyAOxsuvnI6cABJKQzivFq8uwcVhEJzOE92XQC', NULL, NULL, '2023-01-31 10:25:48', '2023-01-31 10:25:48'),
(20, 'Anup saha', 'anup@gmail.com', '20-539495485.jpg', NULL, '$2y$10$R/g.x2sOGDTK5Msn/TaUDOKKZF8LDkjzjSt.abzBkLI0tNOS70aAi', NULL, NULL, '2023-02-03 11:38:09', '2023-02-03 11:38:09'),
(21, 'Akash saha', 'akash@gmail.com', NULL, NULL, '$2y$10$a6MsckEowZweE01DX.hr9.dSSd1swRTmAg65pWuMUhF/rPXpAFEmi', NULL, NULL, '2023-01-31 10:26:41', '2023-01-31 10:26:41'),
(22, 'maboxy', 'zihodimyna@mailinator.com', NULL, NULL, '$2y$10$kLisMMrrTR6/GjqrhYEB/Op2YhjjX2dz4rWhS4Qf3KW.tz2j5cJqm', NULL, '2023-02-05 14:28:21', '2023-02-01 08:10:07', '2023-02-05 14:28:21'),
(23, 'zusoge', 'febesozem@mailinator.com', NULL, NULL, '$2y$10$mitu3KnVEhZ9dOlaQlASyuokDWGr2.n4AldaIOEdxMzZDcNhBeLja', NULL, '2023-02-05 14:28:21', '2023-02-01 13:56:36', '2023-02-05 14:28:21'),
(24, 'Priyas Ghoose', 'priyas@gmail.com', '24-1461698652.jpg', NULL, '$2y$10$CkotLjqedFQXL4AQZ6ynxur7tdM.2chCRMAbG3tzYdsvBfPChQGXO', NULL, NULL, '2023-02-01 14:13:33', '2023-02-01 14:13:33'),
(25, 'qagofe', 'qogu@mailinator.com', NULL, NULL, '$2y$10$uFDVp7I.suB6fvmp.2kM6.SS1ui6NIDu7wAb9f0qxHenIIQSHt8rm', NULL, '2023-02-05 14:28:39', '2023-02-05 14:02:54', '2023-02-05 14:28:39'),
(26, 'basaq', 'nazyzites@mailinator.com', NULL, NULL, '$2y$10$5LisnbeLMkaf2x0/O1FSJeneNZQCM/Cd/a4G7RI/LjIcLH6vr/6PC', NULL, '2023-02-05 14:28:39', '2023-02-05 14:16:08', '2023-02-05 14:28:39'),
(27, 'Ridoy', 'ridoy@gmail.com', NULL, NULL, '$2y$10$Xl.Oxbnk5khOSyqDnj1CbuMiyodU7JxHwmC/OsDxDTRmXpz3xhfi2', NULL, NULL, '2023-02-05 14:20:09', '2023-02-05 14:20:09'),
(28, 'Ridoy', 'ridoybiswas@gmail.com', NULL, NULL, '$2y$10$G/AkIwx1zVkg.VVic/5cZOAZuEm1cJfn4v7sVirY1q5cMjWVYk7Tm', NULL, '2023-02-05 14:29:13', '2023-02-05 14:22:08', '2023-02-05 14:29:13'),
(29, 'Priyanka Roy', 'priyanka@gmail.com', NULL, NULL, '$2y$10$sQZYN5eV4vcdB8FuG3iVK.i0ARgQ4PpgqQ.VwYGUze88plTJy0IMu', NULL, NULL, '2023-02-05 14:34:17', '2023-02-05 14:34:17'),
(30, 'Tinni saha', 'tinni@gmail.com', NULL, NULL, '$2y$10$Jk612I8vaE1CJzvYntMBC.9u/83KmTjcHMapUylrR/kPd1kwy3jHG', NULL, NULL, '2023-02-05 14:37:46', '2023-02-05 14:37:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogger_post_models`
--
ALTER TABLE `blogger_post_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_models`
--
ALTER TABLE `category_models`
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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `tag_models`
--
ALTER TABLE `tag_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag_post_models`
--
ALTER TABLE `tag_post_models`
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
-- AUTO_INCREMENT for table `blogger_post_models`
--
ALTER TABLE `blogger_post_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `category_models`
--
ALTER TABLE `category_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tag_models`
--
ALTER TABLE `tag_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tag_post_models`
--
ALTER TABLE `tag_post_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
