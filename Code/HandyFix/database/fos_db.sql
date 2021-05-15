-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 06:49 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fos_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(30) NOT NULL,
  `client_ip` varchar(20) NOT NULL,
  `user_id` int(30) NOT NULL,
  `product_id` int(30) NOT NULL,
  `qty` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category_list`
--

CREATE TABLE `category_list` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_list`
--

INSERT INTO `category_list` (`id`, `name`) VALUES
(6, 'Plumbing'),
(7, 'Electricity');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `user_id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`user_id`, `email`) VALUES
(1, 'sazz@gmail.com'),
(2, 'asd@gmail.com'),
(3, 'sd@gmail.com'),
(4, 'asaad@gmail.com'),
(5, 'sazeeez@gmail.com'),
(6, 'sawwwwzz@gmail.com'),
(7, 'sawwwwzz@gmail.com'),
(8, 'sazzad47ssss7sj@gmail.com'),
(9, 'asqqqqqqd@gmail.com'),
(10, 'sazscssfsz@gmail.com'),
(11, 'sazzad.hossain.sdssfsfesiam.joy@gmail.com'),
(12, 'sassssss@gmail.com'),
(13, 'sasdsdsdzz@gmail.com'),
(14, 'sasafdsfsfsf@gmail.com'),
(18, 'aaaaaa@gmail.com'),
(19, 'sazz@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `address`, `mobile`, `email`, `status`) VALUES
(3, 'sss aaa', 'Cha /4 A star adda', '123654', 'sazz@gmail.com', 1),
(4, 'sss aaa', 'Cha /4 A star adda', '123654', 'sazz@gmail.com', 1),
(5, 'sss aaa', 'Cha /4 A star adda', '123654', 'sazz@gmail.com', 0),
(6, 'sss aaa', 'Cha /4 A star adda', '123654', 'sazz@gmail.com', 0),
(7, 'sss aaa', 'Cha /4 A star adda', '123654', 'sazz@gmail.com', 0),
(8, 'sss aaa', 'Cha /4 A star adda', '123654', 'sazz@gmail.com', 0),
(9, 'sss aaa', 'Cha /4 A star adda', '123654', 'sazz@gmail.com', 0),
(10, 'sss aaa', 'Cha /4 A star adda', '123654', 'sazz@gmail.com', 0),
(11, 'sss aaa', 'Cha /4 A star adda', '123654', 'sazz@gmail.com', 0),
(12, 'sss aaa', 'Cha /4 A star Bannn', '123654', 'sazz@gmail.com', 0),
(13, 'sss aaa', 'Cha /4 A star adda', '123654', 'sazz@gmail.com', 0),
(14, 'sss aaa', 'Cha /4 A star addffwf', '123654', 'sazz@gmail.com', 1),
(15, 'sss aaa', 'jiewdi', '123654', 'sazz@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `id` int(30) NOT NULL,
  `order_id` int(30) NOT NULL,
  `product_id` int(30) NOT NULL,
  `qty` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`id`, `order_id`, `product_id`, `qty`) VALUES
(1, 1, 3, 1),
(2, 1, 5, 1),
(3, 1, 3, 1),
(4, 1, 6, 3),
(5, 2, 1, 2),
(6, 3, 1, 2),
(7, 4, 3, 1),
(8, 5, 6, 2),
(9, 6, 5, 2),
(10, 7, 5, 1),
(11, 8, 3, 1),
(12, 8, 4, 1),
(13, 9, 1, 2),
(14, 10, 1, 2),
(15, 11, 5, 1),
(16, 12, 4, 1),
(17, 13, 6, 1),
(18, 13, 4, 0),
(19, 14, 3, 3),
(20, 15, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `id` int(30) NOT NULL,
  `category_id` int(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL DEFAULT '0',
  `img_path` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0= unavailable, 2 Available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`id`, `category_id`, `name`, `description`, `price`, `img_path`, `status`) VALUES
(3, 7, 'Fixing Pipe Light', 'HandyFix install and repair any kind of light.', 2, '1614857580_4.jpg', 1),
(4, 7, 'Electricity Meter Repair', 'We repair and install electricity meter at low prices.', 2, '1614857640_9.jpg', 1),
(5, 7, 'Ceiling Chandelier Installation and Repair', 'We Repair and Install Ceiling Chandelier at a low price.', 2, '1614857880_5.jpg', 1),
(6, 7, 'Electric Switch Repair and Installation', 'We Repair and Install Electric Switch at a low price', 2, '1614857880_6.jpg', 1),
(7, 7, 'Electric Box Repair and Installation', 'We Repair and Install Electric Box at a low cost.', 2, '1614857760_4 (2).jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `serviceprovider`
--

CREATE TABLE `serviceprovider` (
  `id` int(100) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `gender` text NOT NULL,
  `contact` int(100) NOT NULL,
  `nid` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dept` text NOT NULL,
  `degree` text NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `cover_img` text NOT NULL,
  `about_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `cover_img`, `about_content`) VALUES
(1, 'HandyFix', 'handyfix@sample.com', '1234567', '1615087980_1.jpg', '&lt;p class=&quot;title-column&quot; style=&quot;box-sizing: inherit; margin-bottom: 0px; padding: 0px; border: none; outline: 0px; font-size: 12px; background-repeat: no-repeat; position: relative; order: 12; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif;&quot;&gt;&lt;/p&gt;&lt;p class=&quot;inner-column&quot; style=&quot;box-sizing: inherit; margin-bottom: 0px; padding: 0px; border: none; outline: 0px; font-size: 12px; background-repeat: no-repeat;&quot;&gt;&lt;/p&gt;&lt;p class=&quot;sec-title&quot; style=&quot;box-sizing: inherit; margin-bottom: 0px; padding: 0px; border: none; outline: 0px; font-size: 12px; background-repeat: no-repeat; position: relative;&quot;&gt;&lt;/p&gt;&lt;h2 style=&quot;box-sizing: inherit; margin-bottom: 0px; padding: 16px 0px; border: none; outline: 0px; font-size: 30px; background: 0px 0px; font-family: Rubik, sans-serif; line-height: 40px; color: rgb(47, 47, 47); position: relative;&quot;&gt;About HandyFix&lt;/h2&gt;&lt;p&gt;&lt;/p&gt;&lt;p class=&quot;text-box&quot; style=&quot;box-sizing: inherit; margin-bottom: 0px; padding: 0px; border: none; outline: 0px; font-size: 12px; background-repeat: no-repeat; position: relative;&quot;&gt;&lt;/p&gt;&lt;p class=&quot;text-justify&quot; style=&quot;box-sizing: inherit; margin-bottom: 30px; padding: 0px; border: none; outline: 0px; background-repeat: no-repeat; line-height: 30px; color: rgb(119, 119, 119); position: relative;&quot;&gt;HandyFix is an online-based service platform that offers home services in all areas of Dhaka City. We ensure quality service by providing training to our technicians which also emphasis safety and behavioral aspects. Apart from the domiciliary service, we also provide a one-time, periodical subscription for corporate houses. Our highly trained and professional technicians are always a CALL away to provide Electrical Services, Plumbing Services, Air Conditioner Services, CCTV Services, IT Services, Generator Services. servicing works at your doorstep. Contact us to request a service through our&amp;nbsp;&lt;span style=&quot;color: rgb(119, 119, 119);&quot;&gt;HandyFix&lt;/span&gt;&amp;nbsp;webpage, over the phone or social media pages. We are also open to provide our services during holidays/emergency hours / your free hours&lt;/p&gt;&lt;p class=&quot;text-justify&quot; style=&quot;box-sizing: inherit; margin-bottom: 30px; padding: 0px; border: none; outline: 0px; background-repeat: no-repeat; line-height: 30px; color: rgb(119, 119, 119); position: relative;&quot;&gt;&lt;span style=&quot;color: rgb(119, 119, 119);&quot;&gt;HandyFix&lt;/span&gt;&amp;nbsp;is a sister concern of SSG (Super Star Group), a renowned electrical &amp;amp; electronics conglomerate in Bangladesh, was founded on the principles of harmony, sincerity and pioneering spirit for more than two decades. SSG brand has become synonymous with lifestyle and household electrical products from lighting solutions to electrical accessories, fans to engineering products, properties to renewable energy. The group and its subsidiaries, have had a significant impact on society shaping the future for the 21st century and beyond. The strive for brighter future SSG introduces&amp;nbsp;&lt;span style=&quot;color: rgb(119, 119, 119);&quot;&gt;HandyFix&lt;/span&gt;.&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;p class=&quot;title-column&quot; style=&quot;box-sizing: inherit; margin-bottom: 0px; padding: 0px; border: none; outline: 0px; font-size: 12px; background-repeat: no-repeat; position: relative; order: 12; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif;&quot;&gt;&lt;/p&gt;&lt;p class=&quot;inner-column&quot; style=&quot;box-sizing: inherit; margin-bottom: 0px; padding: 0px; border: none; outline: 0px; font-size: 12px; background-repeat: no-repeat;&quot;&gt;&lt;/p&gt;&lt;p class=&quot;sec-title&quot; style=&quot;box-sizing: inherit; margin-bottom: 0px; padding: 0px; border: none; outline: 0px; font-size: 12px; background-repeat: no-repeat; position: relative;&quot;&gt;&lt;/p&gt;&lt;h2 style=&quot;box-sizing: inherit; margin-bottom: 0px; padding: 16px 0px; border: none; outline: 0px; font-size: 30px; background: 0px 0px; font-family: Rubik, sans-serif; line-height: 40px; color: rgb(47, 47, 47); position: relative;&quot;&gt;Purpose of Our Service&lt;/h2&gt;&lt;p&gt;&lt;/p&gt;&lt;p class=&quot;text-box&quot; style=&quot;box-sizing: inherit; margin-bottom: 0px; padding: 0px; border: none; outline: 0px; font-size: 12px; background-repeat: no-repeat; position: relative;&quot;&gt;&lt;/p&gt;&lt;p class=&quot;text-justify&quot; style=&quot;box-sizing: inherit; margin-bottom: 30px; padding: 0px; border: none; outline: 0px; background-repeat: no-repeat; line-height: 30px; color: rgb(119, 119, 119); position: relative;&quot;&gt;Technician is a common word in the service industry. But when it comes to an experienced service technician, it is really hard to find. There is no measurement policy to rate them, until you receive the service, experience them. Also, there is a huge question in security measures or the trustworthiness of unknown technicians. Should you let them in your perfect house, or not? To ease up this huge responsibility from your back to find a suitable and experienced service technician, we are here.&amp;nbsp;&lt;span style=&quot;color: rgb(119, 119, 119);&quot;&gt;HandyFix&lt;/span&gt;&amp;nbsp;is just one call away to make your troubled living perfect.&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;p class=&quot;title-column&quot; style=&quot;box-sizing: inherit; margin-bottom: 0px; padding: 0px; border: none; outline: 0px; font-size: 12px; background-repeat: no-repeat; position: relative; order: 12; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif;&quot;&gt;&lt;/p&gt;&lt;p class=&quot;inner-column&quot; style=&quot;box-sizing: inherit; margin-bottom: 0px; padding: 0px; border: none; outline: 0px; font-size: 12px; background-repeat: no-repeat;&quot;&gt;&lt;/p&gt;&lt;p class=&quot;sec-title&quot; style=&quot;box-sizing: inherit; margin-bottom: 0px; padding: 0px; border: none; outline: 0px; font-size: 12px; background-repeat: no-repeat; position: relative;&quot;&gt;&lt;/p&gt;&lt;h2 style=&quot;box-sizing: inherit; margin-bottom: 0px; padding: 16px 0px; border: none; outline: 0px; font-size: 30px; background: 0px 0px; font-family: Rubik, sans-serif; line-height: 40px; color: rgb(47, 47, 47); position: relative;&quot;&gt;Our Objective&lt;/h2&gt;&lt;p&gt;&lt;/p&gt;&lt;p class=&quot;text-box&quot; style=&quot;box-sizing: inherit; margin-bottom: 0px; padding: 0px; border: none; outline: 0px; font-size: 12px; background-repeat: no-repeat; position: relative;&quot;&gt;&lt;/p&gt;&lt;p class=&quot;text-justify&quot; style=&quot;box-sizing: inherit; margin-bottom: 30px; padding: 0px; border: none; outline: 0px; background-repeat: no-repeat; line-height: 30px; color: rgb(119, 119, 119); position: relative;&quot;&gt;&ldquo;Providing quality services with the best customer experience through developing and empowering the local skilled workforce.&rdquo;&lt;/p&gt;&lt;p class=&quot;text-justify&quot; style=&quot;box-sizing: inherit; margin-bottom: 30px; padding: 0px; border: none; outline: 0px; background-repeat: no-repeat; line-height: 30px; color: rgb(119, 119, 119); position: relative;&quot;&gt;All too often, consumers are forced to deal with appliance repair companies who send rude, inconsiderate, and just plain messy technicians to their homes. But not with&amp;nbsp;&lt;span style=&quot;color: rgb(119, 119, 119);&quot;&gt;HandyFix&lt;/span&gt;. We know just how awful of an experience that is, and we are committed to being different. That is why you can be confident knowing that when you hire our team, you will be working with technicians who are experts, trustworthy but also who are polite and respectful. Not only do they respect you and your time, but they also respect your home. All of our technicians abide by our commitment to leave no trace behind. In fact, it is our goal to always leave your home in better shape than it was when we arrived. Other than your fixed appliances, you shouldn&rsquo;t even notice we were there at all!&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;p class=&quot;title-column&quot; style=&quot;box-sizing: inherit; margin-bottom: 0px; padding: 0px; border: none; outline: 0px; font-size: 12px; background-repeat: no-repeat; position: relative; order: 12; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif;&quot;&gt;&lt;/p&gt;&lt;p class=&quot;inner-column&quot; style=&quot;box-sizing: inherit; margin-bottom: 0px; padding: 0px; border: none; outline: 0px; font-size: 12px; background-repeat: no-repeat;&quot;&gt;&lt;/p&gt;&lt;p class=&quot;sec-title&quot; style=&quot;box-sizing: inherit; margin-bottom: 0px; padding: 0px; border: none; outline: 0px; font-size: 12px; background-repeat: no-repeat; position: relative;&quot;&gt;&lt;/p&gt;&lt;h2 style=&quot;box-sizing: inherit; margin-bottom: 0px; padding: 16px 0px; border: none; outline: 0px; font-size: 30px; background: 0px 0px; font-family: Rubik, sans-serif; line-height: 40px; color: rgb(47, 47, 47); position: relative;&quot;&gt;What Do We Do&lt;/h2&gt;&lt;p&gt;&lt;/p&gt;&lt;p class=&quot;text-box&quot; style=&quot;box-sizing: inherit; margin-bottom: 0px; padding: 0px; border: none; outline: 0px; font-size: 12px; background-repeat: no-repeat; position: relative;&quot;&gt;&lt;/p&gt;&lt;p class=&quot;text-justify&quot; style=&quot;box-sizing: inherit; margin-bottom: 30px; padding: 0px; border: none; outline: 0px; background-repeat: no-repeat; line-height: 30px; color: rgb(119, 119, 119); position: relative;&quot;&gt;We are providing quality services with the best customer experience through developing and empowering the local skilled workforce. Currently, we are offering a variety of services udder six (6) major services. They are;&lt;/p&gt;&lt;ul style=&quot;box-sizing: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 0px 24px; border: none; outline: 0px; font-size: 12px; background-repeat: no-repeat; list-style: none;&quot;&gt;&lt;li style=&quot;box-sizing: inherit; margin: 0px; padding: 0px; border: none; outline: 0px; background-repeat: no-repeat; list-style: none; line-height: 30px; color: rgb(119, 119, 119);&quot;&gt;Air Conditioner Services&lt;/li&gt;&lt;li style=&quot;box-sizing: inherit; margin: 0px; padding: 0px; border: none; outline: 0px; background-repeat: no-repeat; list-style: none; line-height: 30px; color: rgb(119, 119, 119);&quot;&gt;Electrical Services&lt;/li&gt;&lt;li style=&quot;box-sizing: inherit; margin: 0px; padding: 0px; border: none; outline: 0px; background-repeat: no-repeat; list-style: none; line-height: 30px; color: rgb(119, 119, 119);&quot;&gt;Plumbing Services&lt;/li&gt;&lt;li style=&quot;box-sizing: inherit; margin: 0px; padding: 0px; border: none; outline: 0px; background-repeat: no-repeat; list-style: none; line-height: 30px; color: rgb(119, 119, 119);&quot;&gt;IT Services&lt;/li&gt;&lt;li style=&quot;box-sizing: inherit; margin: 0px; padding: 0px; border: none; outline: 0px; background-repeat: no-repeat; list-style: none; line-height: 30px; color: rgb(119, 119, 119);&quot;&gt;CCTV Services&lt;/li&gt;&lt;li style=&quot;box-sizing: inherit; margin: 0px; padding: 0px; border: none; outline: 0px; background-repeat: no-repeat; list-style: none; line-height: 30px; color: rgb(119, 119, 119);&quot;&gt;Generator Services&lt;/li&gt;&lt;/ul&gt;&lt;p class=&quot;text-justify&quot; style=&quot;box-sizing: inherit; margin-bottom: 30px; padding: 0px; border: none; outline: 0px; background-repeat: no-repeat; line-height: 30px; color: rgb(119, 119, 119); position: relative;&quot;&gt;When a service is required, the user can visit the&amp;nbsp;&lt;span style=&quot;color: rgb(119, 119, 119);&quot;&gt;HandyFix&lt;/span&gt;&amp;nbsp;website, call us on call center number or knock us on social media pages to get the service.&amp;nbsp;&lt;span style=&quot;color: rgb(119, 119, 119);&quot;&gt;HandyFix&lt;/span&gt;&amp;nbsp;respect your time more than anything. In fact, we promise we will always show up on time for your scheduled appointment and that we will deliver service that is fast, efficient, and detail-oriented. To take it a step further, the experts who arrive at your door will be wearing clean attire and will have an ID badge on them.&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;p class=&quot;title-column&quot; style=&quot;box-sizing: inherit; margin-bottom: 0px; padding: 0px; border: none; outline: 0px; font-size: 12px; background-repeat: no-repeat; position: relative; order: 12; color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif;&quot;&gt;&lt;/p&gt;&lt;p class=&quot;inner-column&quot; style=&quot;box-sizing: inherit; margin-bottom: 0px; padding: 0px; border: none; outline: 0px; font-size: 12px; background-repeat: no-repeat;&quot;&gt;&lt;/p&gt;&lt;p class=&quot;sec-title&quot; style=&quot;box-sizing: inherit; margin-bottom: 0px; padding: 0px; border: none; outline: 0px; font-size: 12px; background-repeat: no-repeat; position: relative;&quot;&gt;&lt;/p&gt;&lt;h2 style=&quot;box-sizing: inherit; margin-bottom: 0px; padding: 16px 0px; border: none; outline: 0px; font-size: 30px; background: 0px 0px; font-family: Rubik, sans-serif; line-height: 40px; color: rgb(47, 47, 47); position: relative;&quot;&gt;Why Choose Us&lt;/h2&gt;&lt;p&gt;&lt;/p&gt;&lt;p class=&quot;text-box&quot; style=&quot;box-sizing: inherit; margin-bottom: 0px; padding: 0px; border: none; outline: 0px; font-size: 12px; background-repeat: no-repeat; position: relative;&quot;&gt;&lt;/p&gt;&lt;p class=&quot;text-justify&quot; style=&quot;box-sizing: inherit; margin-bottom: 30px; padding: 0px; border: none; outline: 0px; background-repeat: no-repeat; line-height: 30px; color: rgb(119, 119, 119); position: relative;&quot;&gt;Why else should you work with&amp;nbsp;&lt;span style=&quot;color: rgb(119, 119, 119);&quot;&gt;HandyFix&lt;/span&gt;&amp;nbsp;technicians instead of regular technicians? Because we care. We care about your time, your privacy, your appliances.&amp;nbsp;&lt;span style=&quot;color: rgb(119, 119, 119);&quot;&gt;HandyFix&lt;/span&gt;&amp;nbsp;knows how much you rely on those machines every day to keep your home in working order, and we are committed to helping you get your house running smoothly again. However, we also know that who you hire to come to fix your appliances is equally important. That is why we are so proud to have expert technicians on our team. We provide fast, efficient services that pay attention to the details and get your appliances to prime condition.&lt;/p&gt;&lt;p class=&quot;text-justify&quot; style=&quot;box-sizing: inherit; margin-bottom: 30px; padding: 0px; border: none; outline: 0px; background-repeat: no-repeat; line-height: 30px; color: rgb(119, 119, 119); position: relative;&quot;&gt;We provide our services at your desired time. Which means any convenient time that the user demands. Holiday, late-night, even on emergency hours. Our service partners are committed to providing the service at your selected hour. With these services, we offer accurate and valid service charges to our customers. Individual service charges and service detail is given on the website, which clears out all the confusion of what you will get at what price. It reduces all the hustle of price negotiations.&lt;/p&gt;&lt;p class=&quot;text-justify&quot; style=&quot;box-sizing: inherit; margin-bottom: 30px; padding: 0px; border: none; outline: 0px; background-repeat: no-repeat; line-height: 30px; color: rgb(119, 119, 119); position: relative;&quot;&gt;You can expect the following from our qualified experts;&lt;/p&gt;&lt;ul style=&quot;box-sizing: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 0px 24px; border: none; outline: 0px; font-size: 12px; background-repeat: no-repeat; list-style: none;&quot;&gt;&lt;li style=&quot;box-sizing: inherit; margin: 0px; padding: 0px; border: none; outline: 0px; background-repeat: no-repeat; list-style: none; line-height: 30px; color: rgb(119, 119, 119);&quot;&gt;They will be polite and respectful.&lt;/li&gt;&lt;li style=&quot;box-sizing: inherit; margin: 0px; padding: 0px; border: none; outline: 0px; background-repeat: no-repeat; list-style: none; line-height: 30px; color: rgb(119, 119, 119);&quot;&gt;They will show up on time.&lt;/li&gt;&lt;li style=&quot;box-sizing: inherit; margin: 0px; padding: 0px; border: none; outline: 0px; background-repeat: no-repeat; list-style: none; line-height: 30px; color: rgb(119, 119, 119);&quot;&gt;They will be clean and in uniform.&lt;/li&gt;&lt;li style=&quot;box-sizing: inherit; margin: 0px; padding: 0px; border: none; outline: 0px; background-repeat: no-repeat; list-style: none; line-height: 30px; color: rgb(119, 119, 119);&quot;&gt;They will leave no trace behind.&lt;/li&gt;&lt;li style=&quot;box-sizing: inherit; margin: 0px; padding: 0px; border: none; outline: 0px; background-repeat: no-repeat; list-style: none; line-height: 30px; color: rgb(119, 119, 119);&quot;&gt;They are confident and that is why we guarantee all our services.&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '2' COMMENT '1=admin , 2 = staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`) VALUES
(1, 'Administrator', 'sazzad', 'cse499', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address`) VALUES
(1, 'sss', 'aaa', 'sazz@gmail.com', '202cb962ac59075b964b07152d234b70', '123654', 'Cha /4 A star adda'),
(2, 'Sazzad ', 'Hossain', 'sazzad@sample.com', '202cb962ac59075b964b07152d234b70', '1234569', '5/63 Basundhara, Dhaka'),
(3, 'a', 'a', 'asd@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'a', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_list`
--
ALTER TABLE `category_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serviceprovider`
--
ALTER TABLE `serviceprovider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_list`
--
ALTER TABLE `category_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_list`
--
ALTER TABLE `product_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `serviceprovider`
--
ALTER TABLE `serviceprovider`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
