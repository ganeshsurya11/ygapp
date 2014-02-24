-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2013 at 03:59 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cakephp`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `category_name`, `category_image`) VALUES
(1, 0, 'Electronics', ''),
(2, 0, 'Fashion', ''),
(3, 0, 'Cloths', ''),
(4, 0, 'Footwear', ''),
(5, 1, 'Appliances', 'panasonic3611 BX.JPG'),
(6, 1, 'Computer Accessories', 'logitech-mk200-media-combo.jpg'),
(7, 2, 'Sun Glasses', '2013-01-17 16-40-04Van-Heusen-Unisex-Black-Sunglasses_947dcdc5a07bb325fdbcacdaed8c70fe_images_360_480_mini.jpg'),
(8, 2, 'Wallets', '2013-01-17 16-43-23Sher-Singh-Men-Wallets_f203f97e2aba498a2062f981da8d8ffd_images_360_480_mini.jpg'),
(9, 2, 'Watches', '2013-01-17 16-47-11Tommy-Hilfiger-Men-Watches_bee035da640debf1b9b4110fa30dc185_images_360_480_mini.jpg'),
(10, 3, 'Casual shirts', '2013-01-17 16-26-27Puma-Men-Shirts_30d5978277314f30bbb421a3d7df811b_images_360_480_mini.jpg'),
(11, 3, 'Formal shirts', '2013-01-17 16-32-35Reid-&-Taylor-Men-White-Shirt_a5f35872572d582567aa3b815ebd9d07_images_360_480_mini.jpg'),
(12, 3, 'Ethnic Clothing', '2013-01-17 16-34-37Shree-Men-RedBeige-100-Per-Cotton-Kurta_ae84aa5c5c43549faea31ed86b6dcd63_images_360_480_mini.jpg'),
(13, 4, 'Casual Shoes', '2013-01-17 15-52-19Puma-Men-Black-Mid-Biz-Shoes_3a9eeb96ce43b7c7f9d449567da0ba82_images_360_480_mini.jpg'),
(14, 4, 'Formal Shoes', '2013-01-17 16-03-37Lee-Cooper-Men-Black-Oxford-Formal-Shoes_6f83b73086b97e2a1baba68cde7ee3df_images_360_480_mini.jpg'),
(15, 4, 'Sandals', '2013-01-17 16-16-061f8fc59e19d359bdeb69728cbc2b8079_images_360_480_mini.jpg'),
(16, 4, 'Sports shoes', '2013-01-17 16-11-0946dc62eb4f4446c70ab53d0deae8464d_images_360_480_mini.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`) VALUES
(1, 'India'),
(2, 'Russia'),
(3, 'USA'),
(4, 'UK'),
(5, 'Canada'),
(6, 'NewZealand');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL DEFAULT 'male',
  `city` varchar(100) NOT NULL DEFAULT 'mumbai',
  `country` varchar(100) NOT NULL DEFAULT 'india',
  `information` varchar(150) NOT NULL DEFAULT 'tretde',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `gender`, `city`, `country`, `information`) VALUES
(2, 'ganesh', 'male', 'mumbai', 'india', 'tretde'),
(3, 'ganesh', 'male', 'mumbai', 'india', 'tretde'),
(4, 'Vilas', 'male', 'mumbai', 'india', 'tretde'),
(5, 'Vilas', 'male', 'mumbai', 'india', 'tretde'),
(6, 'Priya', 'male', 'mumbai', 'india', 'tretde'),
(7, 'Priya', 'male', 'mumbai', 'india', 'tretde'),
(8, 'Amit', 'male', 'pune', 'india', 'test evn'),
(9, 'Yogesh', 'male', 'mumbai', 'india', 'tetse');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `menu_name`) VALUES
(1, 0, 'cloths'),
(2, 0, 'mobiles'),
(3, 1, 'cadual'),
(4, 1, 'formal'),
(5, 3, 't-shirt'),
(6, 3, 'fancy shirt'),
(7, 2, 'L.G'),
(8, 2, 'Nokia'),
(9, 5, 'T-shirt Large'),
(10, 5, 'T-shirt Small'),
(11, 4, 'shirt'),
(13, 0, 'cloths'),
(14, 0, 'mobiles'),
(15, 1, 'cadual'),
(16, 1, 'formal'),
(17, 3, 't-shirt'),
(18, 3, 'fancy shirt'),
(19, 2, 'L.G'),
(20, 2, 'Nokia'),
(21, 5, 'T-shirt Large'),
(22, 5, 'T-shirt Small'),
(23, 4, 'shirt');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE IF NOT EXISTS `product_images` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=118 ;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`product_id`, `category_id`, `product_name`, `price`, `image_name`) VALUES
(1, 1, 'electronic device', '1400', 'panasonic3611 BX.JPG'),
(2, 1, 'electronic device', '1400', 'logitech-mk200-media-combo.jpg'),
(3, 1, 'electronic device', '1400', 'Multimedia_2.1.png'),
(4, 5, 'Appliances', '100', 'panasonic3611 BX.JPG'),
(5, 6, 'simple mobile', '30', 'logitech-mk200-media-combo.jpg'),
(6, 6, 'Computer Accessories', '120', 'Multimedia_2.1.png'),
(7, 6, 'Computer Accessories', '150', 'MULTIMEDIA-SPEAKERS.jpg'),
(22, 7, 'Sun Glasses', '300', '2013-01-17 16-40-04Van-Heusen-Unisex-Black-Sunglasses_8d3c16fff449bae7df091c3c24d79130_images_360_480_mini.jpg'),
(21, 7, 'Sun Glasses', '300', '2013-01-17 16-41-42Van-Heusen-Unisex-Brown-Sunglasses_fd4d40f3cfbf6cf3037671e4ec9316f0_images_360_480_mini.jpg'),
(20, 2, 'Fashion', '220', '2013-01-17 16-49-09Fossil-Men-Black-Dial-Watch_50c781da9e3946744d1906aea8e20395_images_360_480_mini.jpg'),
(19, 2, 'Fashion', '140', '2013-01-17 16-48-10Tommy-Hilfiger-Men-Black-Dial-Watch_5768406582e2d8304324c061d9455459_images_360_480_mini.jpg'),
(18, 2, 'Fashion', '336', '2013-01-17 16-44-36US-Polo-Assn-Men-Beige-and-Brown-Sling-Bag_6d14135bfe57024a501b9a6c01ef832c_images_360_480_mini.jpg'),
(17, 2, 'Fashion', '145', '2013-01-17 16-43-23Sher-Singh-Men-Wallets_a76653fe3f34ed2455316c0b7d0ed0bd_images_360_480_mini.jpg'),
(16, 2, 'Fashion', '450', '2013-01-17 16-41-42Van-Heusen-Unisex-Brown-Sunglasses_b02555fb8ed7ff4e22212c38207d4a7b_images_360_480_mini.jpg'),
(23, 7, 'Sun Glasses', '300', '2013-01-17 16-40-04Van-Heusen-Unisex-Black-Sunglasses_947dcdc5a07bb325fdbcacdaed8c70fe_images_360_480_mini.jpg'),
(24, 7, 'Sun Glasses', '300', '2013-01-17 16-40-04Van-Heusen-Unisex-Black-Sunglasses_c0dfc68e8055db33e3342303b3156483_images_360_480_mini.jpg'),
(25, 7, 'Sun Glasses', '300', '2013-01-17 16-40-04Van-Heusen-Unisex-Black-Sunglasses_e649b5cee8b0a446314cb488f9917ea4_images_360_480_mini.jpg'),
(26, 7, 'Sun Glasses', '300', '2013-01-17 16-41-42Van-Heusen-Unisex-Brown-Sunglasses_b02555fb8ed7ff4e22212c38207d4a7b_images_360_480_mini.jpg'),
(27, 7, 'Sun Glasses', '300', '2013-01-17 16-41-42Van-Heusen-Unisex-Brown-Sunglasses_ccec2e00ccadc467318aaa399ed994f8_images_360_480_mini.jpg'),
(28, 8, 'Wallet', '300', '2013-01-17 16-43-23Sher-Singh-Men-Wallets_f203f97e2aba498a2062f981da8d8ffd_images_360_480_mini.jpg'),
(29, 8, 'Wallet', '300', '2013-01-17 16-44-36US-Polo-Assn-Men-Beige-and-Brown-Sling-Bag_6d14135bfe57024a501b9a6c01ef832c_images_360_480_mini.jpg'),
(30, 8, 'Wallet', '300', '2013-01-17 16-44-36US-Polo-Assn-Men-Beige-and-Brown-Sling-Bag_4363c37866ae1e104a64d3e5fa5eb0ba_images_360_480_mini.jpg'),
(31, 8, 'Wallet', '300', '2013-01-17 16-44-36US-Polo-Assn-Men-Beige-and-Brown-Sling-Bag_140494ba0eb1ac47f71be230c14925fe_images_360_480_mini.jpg'),
(32, 8, 'Wallet', '300', '2013-01-17 16-43-23Sher-Singh-Men-Wallets_6b7e52fefe6062bf1d4ed2c068c3f668_images_360_480_mini.jpg'),
(33, 8, 'Wallet', '300', '2013-01-17 16-43-23Sher-Singh-Men-Wallets_a76653fe3f34ed2455316c0b7d0ed0bd_images_360_480_mini.jpg'),
(34, 9, 'Watch', '800', '2013-01-17 16-48-10Tommy-Hilfiger-Men-Black-Dial-Watch_6978809fc71c53cf7f78b794a7dfba4c_images_360_480_mini.jpg'),
(35, 9, 'Watch', '800', '2013-01-17 16-48-10Tommy-Hilfiger-Men-Black-Dial-Watch_d88a24a1bc2661086ae790485d0f9064_images_360_480_mini.jpg'),
(36, 9, 'Watch', '800', '2013-01-17 16-49-09Fossil-Men-Black-Dial-Watch_50c781da9e3946744d1906aea8e20395_images_360_480_mini.jpg'),
(37, 9, 'Watch', '800', '2013-01-17 16-49-09Fossil-Men-Black-Dial-Watch_7134cee9e32c2e6f2a6656c01f459799_images_360_480_mini.jpg'),
(38, 9, 'Watch', '800', '2013-01-17 16-49-09Fossil-Men-Black-Dial-Watch_b5c8d701980cd01ab12a41bea5bfe899_images_360_480_mini.jpg'),
(39, 9, 'Watch', '800', '2013-01-17 16-47-11Tommy-Hilfiger-Men-Watches_50b0e7d94de2903acf6d75f7ee57125a_images_360_480_mini.jpg'),
(40, 9, 'Watch', '800', '2013-01-17 16-47-11Tommy-Hilfiger-Men-Watches_bee035da640debf1b9b4110fa30dc185_images_360_480_mini.jpg'),
(41, 9, 'Watch', '800', '2013-01-17 16-47-11Tommy-Hilfiger-Men-Watches_c547cf7ab6aa487930a3cffb71c23960_images_360_480_mini.jpg'),
(42, 3, '', '', '2013-01-17 16-28-35Van-Heusen-Men-Blue-Shirt_570a677d61aea275d8f51f039c0afd57_images_360_480_mini.jpg'),
(43, 3, '', '', '2013-01-17 16-28-35Van-Heusen-Men-Blue-Shirt_c3b63f8549eb01495c25efa09a7887f0_images_360_480_mini.jpg'),
(44, 3, '', '', '2013-01-17 16-30-09Wills-Lifestyle-Men-Maroon-Shirt_28806369433d306db3d6e5c2bc842c3a_images_360_480_mini.jpg'),
(45, 3, '', '', '2013-01-17 16-34-37Shree-Men-RedBeige-100-Per-Cotton-Kurta_ae84aa5c5c43549faea31ed86b6dcd63_images_360_480_mini.jpg'),
(46, 3, '', '', '2013-01-17 16-34-37Shree-Men-RedBeige-100-Per-Cotton-Kurta_df8fe37f17b4c6c72a8af1f3e33b53f2_images_360_480_mini.jpg'),
(47, 3, '', '', '2013-01-17 16-36-54Shree-Men-Green100-Per-Cotton-Kurta_5565134c329d92121c9524851219eda4_images_360_480_mini.jpg'),
(48, 3, '', '', '2013-01-17 16-26-27Puma-Men-Shirts_30d5978277314f30bbb421a3d7df811b_images_360_480_mini.jpg'),
(85, 13, 'Casual Shoe', '2500', '2013-01-17 15-50-16Puma-Men-Black-Mid-Biz-Shoes_2b275c9c8a2c8b36868514a6d1ba6571_images_360_480_mini.jpg'),
(84, 13, 'Casual Shoe', '2500', '2013-01-17 15-57-22Converse-Unisex-Grey-Oxford-Shoes_c9835db22a24cccd8855cd39aa619234_images_360_480_mini.jpg'),
(52, 12, 'Ethnic Cloth', '950', '2013-01-17 16-34-37Shree-Men-RedBeige-100-Per-Cotton-Kurta_ae84aa5c5c43549faea31ed86b6dcd63_images_360_480_mini.jpg'),
(53, 12, 'Ethnic Cloth', '950', '2013-01-17 16-35-43Shree-Men-Pink-100-Per-Cotton-Kurta_4d514ccd19bc255a811e3d6f7ac68ae3_images_360_480_mini.jpg'),
(54, 12, 'Ethnic Cloth', '950', '2013-01-17 16-36-54Shree-Men-Green100-Per-Cotton-Kurta_eef7919743a4f8d0b1dd1c86a7430602_images_360_480_mini.jpg'),
(114, 14, 'Formal Shoe', '1800', '2013-01-17 16-03-37Lee-Cooper-Men-Black-Oxford-Formal-Shoes_e6b4df17d47ab8fe87cd6aec10ea599f_images_360_480_mini.jpg'),
(113, 14, 'Formal Shoe', '1800', '2013-01-17 16-09-21GAS-Men-Casual-Shoes_cf72e664a976f1e09c425c155766e3a7_images_360_480_mini.jpg'),
(112, 14, 'Formal Shoe', '1800', '2013-01-17 16-05-26Lee-Cooper-Men-Brown-Shoes_87aee629d3f06cdfa297e8e634cda889_images_360_480_mini.jpg'),
(111, 14, 'Formal Shoe', '1800', '2013-01-17 16-09-21GAS-Men-Casual-Shoes_9bd203a24e1ff7d7f38d92e8089972e4_images_360_480_mini.jpg'),
(59, 4, '', '', '2013-01-17 16-17-44Puma-Men-Black-Helium-Sports-Sandals_e2047a6409c6c76f4c0dd7ef5255d16d_images_360_480_mini.jpg'),
(60, 4, '', '', '2013-01-17 15-50-16Puma-Men-Black-Mid-Biz-Shoes_5470a784a52028ba38db8d232b0cd8e2_images_360_480_mini.jpg'),
(61, 4, '', '', '2013-01-17 16-01-54GAS-Men-Casual-Shoes_9bd203a24e1ff7d7f38d92e8089972e4_images_360_480_mini.jpg'),
(62, 4, '', '', '2013-01-17 16-11-09502a98348e123fa6fd92d0dddec13021_images_360_480_mini.jpg'),
(81, 11, 'Formal Shirt', '750', '2013-01-17 16-28-35Van-Heusen-Men-Blue-Shirt_48afd05a7c7afca588d70c658257a6ea_images_360_480_mini.jpg'),
(82, 11, 'Formal Shirt', '750', '2013-01-17 16-28-35Van-Heusen-Men-Blue-Shirt_570a677d61aea275d8f51f039c0afd57_images_360_480_mini.jpg'),
(83, 11, 'Formal Shirt', '750', '2013-01-17 16-32-35Reid-&-Taylor-Men-White-Shirt_a5f35872572d582567aa3b815ebd9d07_images_360_480_mini.jpg'),
(80, 11, 'Formal Shirt', '750', '2013-01-17 16-32-35Reid-&-Taylor-Men-White-Shirt_c5bb4dd062c8c860ed95f4d58683c998_images_360_480_mini.jpg'),
(79, 10, 'Cadual Shirt', '1200', '2013-01-17 16-20-43Puma-Men-Shirts_2bed5ee7337be86643eb0e7d48974888_images_360_480_mini.jpg'),
(78, 10, 'Cadual Shirt', '1200', '2013-01-17 16-26-27Puma-Men-Shirts_58124d728f0aac27d7df9b3672a9e5e1_images_360_480_mini.jpg'),
(77, 10, 'Cadual Shirt', '1200', '2013-01-17 16-26-27Puma-Men-Shirts_30d5978277314f30bbb421a3d7df811b_images_360_480_mini.jpg'),
(117, 14, 'Formal Shoe', '1800', '2013-01-17 16-07-42Red-Tape-Men-Dark-Brown-Formal-Shoes_f6fdb8cb2ab31127688e81efbdd6be60_images_360_480_mini.jpg'),
(116, 14, 'Formal Shoe', '1800', '2013-01-17 16-07-42Red-Tape-Men-Dark-Brown-Formal-Shoes_4c41eb97f289865ab8afcb4c79105862_images_360_480_mini.jpg'),
(115, 14, 'Formal Shoe', '1800', '2013-01-17 16-05-26Lee-Cooper-Men-Brown-Shoes_7bbfef1417737009e7682bc7168509ac_images_360_480_mini.jpg'),
(86, 13, 'Casual Shoe', '2500', '2013-01-17 15-55-29Puma-Limnos-II-Ind-Olive-Shoes_3c654f62ffadfa277ef73662a3774896_images_360_480_mini.jpg'),
(87, 13, 'Casual Shoe', '2500', '2013-01-17 15-57-22Converse-Unisex-Grey-Oxford-Shoes_93f921e81bcbc719b5fddde3ca421741_images_360_480_mini.jpg'),
(88, 15, 'Sandal', '450', '2013-01-17 16-16-061f8fc59e19d359bdeb69728cbc2b8079_images_360_480_mini.jpg'),
(89, 15, 'Sandal', '450', '2013-01-17 16-16-062fa204a58feb9f40e9c92783df4a9a7c_images_360_480_mini.jpg'),
(90, 15, 'Sandal', '450', '2013-01-17 16-16-068b3d5020858c2b0d158f0f6871cc19cc_images_360_480_mini.jpg'),
(91, 15, 'Sandal', '450', '2013-01-17 16-16-0642a9709701ab29c22c1988d191ae5e80_images_360_480_mini.jpg'),
(92, 15, 'Sandal', '450', '2013-01-17 16-17-44Puma-Men-Black-Helium-Sports-Sandals_3bfaf88f01dfa82df18ca00037f71e09_images_360_480_mini.jpg'),
(93, 15, 'Sandal', '450', '2013-01-17 16-17-44Puma-Men-Black-Helium-Sports-Sandals_64a796e3e3dbde1de56f21054a7f0104_images_360_480_mini.jpg'),
(94, 15, 'Sandal', '450', '2013-01-17 16-17-44Puma-Men-Black-Helium-Sports-Sandals_887caa5af02267f59c5028c96ea60b8f_images_360_480_mini.jpg'),
(95, 15, 'Sandal', '450', '2013-01-17 16-17-44Puma-Men-Black-Helium-Sports-Sandals_e2047a6409c6c76f4c0dd7ef5255d16d_images_360_480_mini.jpg'),
(96, 15, 'Sandal', '450', '2013-01-17 16-18-55Puma-Men-Black-K-9000-Sandals_19e770f301d2f9992b496c869138bca2_images_360_480_mini.jpg'),
(97, 15, 'Sandal', '450', '2013-01-17 16-18-55Puma-Men-Black-K-9000-Sandals_70409c4f1cace73cf4bb0329292c1aeb_images_360_480_mini.jpg'),
(98, 15, 'Sandal', '450', '2013-01-17 16-18-55Puma-Men-Black-K-9000-Sandals_a7b712855d287e79b48d002bc6c5a192_images_360_480_mini.jpg'),
(99, 15, 'Sandal', '450', '2013-01-17 16-18-55Puma-Men-Black-K-9000-Sandals_f7435721d3272bc30d1f10619d89f4b3_images_360_480_mini.jpg'),
(100, 16, 'Sport Shoe', '1150', '2013-01-17 16-11-09c416c94d974579c13ef46ea8b97cacab_images_360_480_mini.jpg'),
(101, 16, 'Sport Shoe', '1150', '2013-01-17 16-14-36FILA-Men-Black-&-Black-Casual-Shoes_96d33518faaa4fd07374fa391689a46f_images_360_480_mini.jpg'),
(102, 16, 'Sport Shoe', '1150', '2013-01-17 16-11-0946dc62eb4f4446c70ab53d0deae8464d_images_360_480_mini.jpg'),
(103, 16, 'Sport Shoe', '1150', '2013-01-17 16-11-0953aed14b39e1b09a0c9e6cf49065f144_images_360_480_mini.jpg'),
(104, 16, 'Sport Shoe', '1150', '2013-01-17 16-11-09502a98348e123fa6fd92d0dddec13021_images_360_480_mini.jpg'),
(105, 16, 'Sport Shoe', '1150', '2013-01-17 16-11-09244944bac3c8e108cee391fe8d663974_images_360_480_mini.jpg'),
(106, 16, 'Sport Shoe', '1150', '2013-01-17 16-13-06Fila-Men-White-Casual-Shoes_0a033ee8d4886f07fa2182ed90b56f3b_images_360_480_mini.jpg'),
(107, 16, 'Sport Shoe', '1150', '2013-01-17 16-13-06Fila-Men-White-Casual-Shoes_6c861adb1fd1fd6b95f9160321499800_images_360_480_mini.jpg'),
(108, 16, 'Sport Shoe', '1150', '2013-01-17 16-13-06Fila-Men-White-Casual-Shoes_0225278491bfba4cae9aea8915338338_images_360_480_mini.jpg'),
(109, 16, 'Sport Shoe', '1150', '2013-01-17 16-13-06Fila-Men-White-Casual-Shoes_807334782a937606ef39702b5abcb739_images_360_480_mini.jpg'),
(110, 16, 'Sport Shoe', '1150', '2013-01-17 16-14-36FILA-Men-Black-&-Black-Casual-Shoes_4fc3cb9cad9cd280734babf8f4d94bc0_images_360_480_mini.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `profiles`
--


-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE IF NOT EXISTS `registers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `registers`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `username`, `password`, `phone`, `gender`, `city`, `country`, `role`, `created`, `modified`) VALUES
(3, 'Ganesh', 'admin', '21232f297a57a5a743894a0e4a801fc3', '9221284640', 'male', 'Mumbai,Nasik', 'usa', 'admin', '2013-04-08 23:01:54', '0000-00-00 00:00:00'),
(4, 'Vilas', 'vilas', '91c8cfb27cb18154148ff55ec9b65334', '9779798795', 'male', 'Mumbai', 'usa', 'user', '2013-04-09 23:36:30', '0000-00-00 00:00:00'),
(5, 'John', 'John', '202cb962ac59075b964b07152d234b70', '9797979879', 'male', 'Mumbai', 'india', 'user', '2013-04-09 23:36:59', '0000-00-00 00:00:00'),
(6, 'afhalsjfal', 'aflashlf', 'f74f5eae4e5febeb1a6d9c4e09d7ff56', 'alf', 'male', 'Mumbai', 'usa', 'user', '2013-04-09 23:37:20', '0000-00-00 00:00:00'),
(7, 'Pradip', 'pradi', '03a7f80ad0ba6bca630bf0d43e4a82bc', '449979', 'male', 'Mumbai', 'usa', 'user', '2013-04-11 01:14:21', '0000-00-00 00:00:00'),
(8, '', 'Mahesh', '', '98746546', NULL, NULL, NULL, 'user', '2013-04-16 09:05:48', '0000-00-00 00:00:00'),
(9, '', 'Pravin', '', '987165468', NULL, NULL, NULL, 'user', '2013-04-16 09:05:48', '0000-00-00 00:00:00'),
(10, '', 'Kailas', '', '165456', NULL, NULL, NULL, 'user', '2013-04-16 09:05:48', '0000-00-00 00:00:00'),
(11, '', 'Kumar', '', '46464', NULL, NULL, NULL, 'user', '2013-04-16 09:05:48', '0000-00-00 00:00:00');
