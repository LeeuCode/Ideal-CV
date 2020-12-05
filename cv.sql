-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 10, 2018 at 12:26 AM
-- Server version: 5.7.22-0ubuntu18.04.1
-- PHP Version: 7.1.18-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `section_title` varchar(255) NOT NULL,
  `section_content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `additional_id` text NOT NULL,
  `additional_title_block` varchar(255) NOT NULL,
  `additional_title` text NOT NULL,
  `additional_icon` text NOT NULL,
  `additional_description` text NOT NULL,
  `background_type` varchar(255) NOT NULL,
  `bakground_value` varchar(255) NOT NULL,
  `background_color` varchar(255) NOT NULL,
  `social_media` text NOT NULL,
  `socail_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `user_name`, `section_title`, `section_content`, `image`, `additional_id`, `additional_title_block`, `additional_title`, `additional_icon`, `additional_description`, `background_type`, `bakground_value`, `background_color`, `social_media`, `socail_url`) VALUES
(1, 'John Jones', 'ABOUT ME', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet sem sit amet dolor luctus pellentesque. Pellentesque eleifend tellus at interdum elementum. Nam egestas molestie elit. Vivamus sed accumsan quam, a mollis magna. Nam aliquet eros eget sapien consequat tincidunt at vel nibh. Duis ut turpis mi. Duis nec scelerisque urna, sit amet varius arcu. Aliquam aliquet sapien quis mauris semper suscipit. Maecenas pharetra dapibus posuere.', 'http://a.up-00.com/2018/07/153062551604481.jpg', 'a:3:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"3\";}', 'a:3:{i:1;s:13:\"Personal Info\";i:2;s:10:\"Contact Me\";i:3;s:8:\"Comments\";}', 'a:3:{i:1;a:3:{i:0;s:5:\"D.O.B\";i:1;s:9:\"JOB TITLE\";i:2;s:7:\"HOBBIES\";}i:2;a:3:{i:0;s:5:\"PHONE\";i:1;s:3:\"FAX\";i:2;s:7:\"ADDRESS\";}i:3;a:3:{i:0;s:6:\"E-MAIL\";i:1;s:7:\"WEBSITE\";i:2;s:7:\"TWITTER\";}}', 'a:3:{i:1;s:7:\"fa-user\";i:2;s:11:\"fa-envelope\";i:3;s:12:\"fa-share-alt\";}', 'a:3:{i:1;a:3:{i:0;s:10:\"23-06-1980\";i:1;s:12:\"Web Designer\";i:2;s:20:\"Reading and swimming\";}i:2;a:3:{i:0;s:16:\"+01 111 222 3333\";i:1;s:12:\"+15 555 5678\";i:2;s:23:\" 756 gb Place,NS Canada\";}i:3;a:3:{i:0;s:17:\" mail@example.com\";i:1;s:17:\" www.myresume.com\";i:2;s:15:\"example@twitter\";}}', 'img', 'http://a.up-00.com/2018/07/153062366389142.jpg', '#052d5d', 'a:6:{i:0;s:8:\"facebook\";i:1;s:7:\"twitter\";i:2;s:12:\"youtube-play\";i:3;s:8:\"linkedin\";i:4;s:7:\"behance\";i:5;s:14:\"stack-overflow\";}', 'a:6:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";i:4;s:1:\"#\";i:5;s:1:\"#\";}');

-- --------------------------------------------------------

--
-- Table structure for table `contact_me`
--

CREATE TABLE `contact_me` (
  `section_title` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `google_map` text NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `smtp_host` varchar(255) NOT NULL,
  `smtp_username` varchar(255) NOT NULL,
  `smtp_password` varchar(255) NOT NULL,
  `smtp_secure` varchar(225) NOT NULL,
  `smtp_port` varchar(255) NOT NULL,
  `background_type` varchar(255) NOT NULL,
  `bakground_value` varchar(255) NOT NULL,
  `background_color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_me`
--

INSERT INTO `contact_me` (`section_title`, `id`, `phone`, `email`, `google_map`, `country`, `city`, `street`, `smtp_host`, `smtp_username`, `smtp_password`, `smtp_secure`, `smtp_port`, `background_type`, `bakground_value`, `background_color`) VALUES
('CONTACT ME', 1, '+01 111 222 3333', 'ideal-cv@info.com', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555\" allowfullscreen></iframe>', 'Canada', 'North Sydney', '756 global Place', '', '', '', '', '', 'color', 'http://localhost/simple-cv/public/source/slide2.jpg', '#000000');

-- --------------------------------------------------------

--
-- Table structure for table `education_experience_projects`
--

CREATE TABLE `education_experience_projects` (
  `id` int(11) NOT NULL,
  `education_section_title` varchar(225) NOT NULL,
  `education_title` text NOT NULL,
  `education_name` text NOT NULL,
  `education_description` text NOT NULL,
  `experience_section_title` varchar(255) NOT NULL,
  `experience_title` text NOT NULL,
  `experience_name` text NOT NULL,
  `experience_description` text NOT NULL,
  `project_section_title` varchar(255) NOT NULL,
  `project_image` text NOT NULL,
  `project_title` text NOT NULL,
  `background_type` varchar(255) NOT NULL,
  `bakground_value` varchar(255) NOT NULL,
  `background_color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education_experience_projects`
--

INSERT INTO `education_experience_projects` (`id`, `education_section_title`, `education_title`, `education_name`, `education_description`, `experience_section_title`, `experience_title`, `experience_name`, `experience_description`, `project_section_title`, `project_image`, `project_title`, `background_type`, `bakground_value`, `background_color`) VALUES
(1, 'MY EDUCATION', 'a:2:{i:0;s:25:\"Master Degree (2010-2012)\";i:1;s:31:\"Diploma In Design - (2007-2010)\";}', 'a:2:{i:0;s:15:\"University Name\";i:1;s:15:\"University Name\";}', 'a:2:{i:0;s:101:\"Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit sed quia.\";i:1;s:101:\"Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit sed quia.\";}', 'WORK EXPERIENCE', 'a:3:{i:0;s:9:\"2014-2016\";i:1;s:10:\" 2013-2014\";i:2;s:10:\" 2012-2013\";}', 'a:3:{i:0;s:12:\"Company Name\";i:1;s:12:\"Company Name\";i:2;s:12:\"Company Name\";}', 'a:3:{i:0;s:101:\"Porro quisquam est neque, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit sed quia.\";i:1;s:101:\"Porro quisquam est neque, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit sed quia.\";i:2;s:101:\"Porro quisquam est neque, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit sed quia.\";}', 'MY PROJECTS', 'a:6:{i:0;s:46:\"http://c.up-00.com/2018/07/153066305228722.png\";i:1;s:46:\"http://c.up-00.com/2018/07/153066305131241.png\";i:2;s:46:\"http://d.up-00.com/2018/07/153066262467414.jpg\";i:3;s:46:\"http://d.up-00.com/2018/07/153066262399143.jpg\";i:4;s:46:\"http://d.up-00.com/2018/07/153066262335612.jpg\";i:5;s:46:\"http://d.up-00.com/2018/07/153066262286391.png\";}', 'a:6:{i:0;s:17:\"My Project Title \";i:1;s:17:\"My Project Title \";i:2;s:17:\"My Project Title \";i:3;s:17:\"My Project Title \";i:4;s:17:\"My Project Title \";i:5;s:17:\"My Project Title \";}', 'img', 'http://a.up-00.com/2018/07/153062892503541.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `site_description` text NOT NULL,
  `site_tags` text NOT NULL,
  `language` varchar(255) NOT NULL,
  `site_status` varchar(255) NOT NULL,
  `primary_color` varchar(255) NOT NULL,
  `secondary_color` varchar(255) NOT NULL,
  `headings_color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `favicon`, `site_name`, `admin_name`, `admin_password`, `site_description`, `site_tags`, `language`, `site_status`, `primary_color`, `secondary_color`, `headings_color`) VALUES
(1, 'https://covchurch.org/wp-content/uploads/sites/2/2012/04/cv-logo-shaded.png', '', '', '', '', 'cv,portfilio', 'en', '', '#94ca49', '#a9a9a9', '#ececec');

-- --------------------------------------------------------

--
-- Table structure for table `skills_services`
--

CREATE TABLE `skills_services` (
  `id` int(11) NOT NULL,
  `section_skill_title` varchar(255) NOT NULL,
  `section_skill_content` text NOT NULL,
  `skill_title` text NOT NULL,
  `skill_color` text NOT NULL,
  `skill_level` text NOT NULL,
  `section_service_title` varchar(255) NOT NULL,
  `service_icon` text NOT NULL,
  `service_title` text NOT NULL,
  `service_content` text NOT NULL,
  `background_type` varchar(255) NOT NULL,
  `bakground_value` varchar(255) NOT NULL,
  `background_color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skills_services`
--

INSERT INTO `skills_services` (`id`, `section_skill_title`, `section_skill_content`, `skill_title`, `skill_color`, `skill_level`, `section_service_title`, `service_icon`, `service_title`, `service_content`, `background_type`, `bakground_value`, `background_color`) VALUES
(1, 'MY SKILLS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet sem sit amet dolor luctus pellentesque. Pellentesque eleifend tellus at interdum elementum. Nam egestas molestie elit. Vivamus sed accumsan quam, a mollis magna. Nam aliquet eros eget sapien consequat tincidunt at vel nibh. Duis ut turpis mi. Duis nec scelerisque urna, sit amet varius arcu. Aliquam aliquet sapien quis mauris semper suscipit. Maecenas pharetra dapibus posuere. Praesent odio sem, varius quis dolor vel, maximus dapibus mi. Pellentesque mattis mauris neque. Nam aliquam turpis ante, at cursus massa ullamcorper ut. Proin id diam id nisi sagittis pellentesque sed sit amet eros.', 'a:4:{i:0;s:5:\"HTML5\";i:1;s:4:\"CSS3\";i:2;s:6:\"jQuery\";i:3;s:3:\"PHP\";}', 'a:4:{i:0;s:7:\"#2baf2b\";i:1;s:7:\"#00acee\";i:2;s:7:\"#ef5734\";i:3;s:7:\"#fab804\";}', 'a:4:{i:0;s:2:\"98\";i:1;s:2:\"97\";i:2;s:2:\"95\";i:3;s:2:\"55\";}', 'MY SERVICES', 'a:4:{i:0;s:11:\"fa-asterisk\";i:1;s:8:\"fa-heart\";i:2;s:14:\"fa-bar-chart-o\";i:3;s:9:\"fa-camera\";}', 'a:4:{i:0;s:15:\" Etiam pharetra\";i:1;s:13:\"Pharetra erat\";i:2;s:11:\"Nuncam erat\";i:3;s:10:\"Mtiam nunc\";}', 'a:4:{i:0;s:70:\"Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores.\";i:1;s:70:\"Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores.\";i:2;s:70:\"Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores.\";i:3;s:70:\"Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores.\";}', 'color', 'http://a.up-00.com/2018/07/153062892503541.jpg', '#130a0a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_me`
--
ALTER TABLE `contact_me`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education_experience_projects`
--
ALTER TABLE `education_experience_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills_services`
--
ALTER TABLE `skills_services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_me`
--
ALTER TABLE `contact_me`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `education_experience_projects`
--
ALTER TABLE `education_experience_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `skills_services`
--
ALTER TABLE `skills_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
