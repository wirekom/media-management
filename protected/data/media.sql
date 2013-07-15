-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 15, 2013 at 01:50 PM
-- Server version: 5.5.31-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `media`
--
CREATE DATABASE `media` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `media`;

-- --------------------------------------------------------

--
-- Table structure for table `media_authassignment`
--

CREATE TABLE IF NOT EXISTS `media_authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media_authassignment`
--

INSERT INTO `media_authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('Admin', '1', NULL, 'N;'),
('Authenticated', '2', NULL, 'N;'),
('Editor', '4', NULL, 'N;'),
('PostUpdateOwn', '3', NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `media_authitem`
--

CREATE TABLE IF NOT EXISTS `media_authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media_authitem`
--

INSERT INTO `media_authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('Admin', 2, NULL, NULL, 'N;'),
('Authenticated', 2, 'Authenticated user', NULL, 'N;'),
('Blog.Comment.*', 1, 'Access all comment actions', NULL, 'N;'),
('Blog.Comment.Approve', 0, 'Approve comments', NULL, 'N;'),
('Blog.Comment.Delete', 0, 'Delete comments', NULL, 'N;'),
('Blog.Comment.Update', 0, 'Update comments', NULL, 'N;'),
('Blog.Post.*', 1, 'Access all post actions', NULL, 'N;'),
('Blog.Post.Admin', 0, 'Administer posts', NULL, 'N;'),
('Blog.Post.Create', 0, 'Create posts', NULL, 'N;'),
('Blog.Post.Delete', 0, 'Delete posts', NULL, 'N;'),
('Blog.Post.Update', 0, 'Update posts', NULL, 'N;'),
('Blog.Post.View', 0, 'View posts', NULL, 'N;'),
('CommentAdministration', 1, 'Administration of comments', NULL, 'N;'),
('Editor', 2, 'Editor', NULL, 'N;'),
('Guest', 2, 'Guest user', NULL, 'N;'),
('PostAdministrator', 1, 'Administration of posts', NULL, 'N;'),
('PostUpdateOwn', 0, 'Update own posts', 'return Yii::app()->user->id==$params["userid"];', 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `media_authitemchild`
--

CREATE TABLE IF NOT EXISTS `media_authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media_authitemchild`
--

INSERT INTO `media_authitemchild` (`parent`, `child`) VALUES
('Editor', 'Authenticated'),
('CommentAdministration', 'Blog.Comment.Approve'),
('CommentAdministration', 'Blog.Comment.Delete'),
('CommentAdministration', 'Blog.Comment.Update'),
('PostAdministrator', 'Blog.Post.Admin'),
('PostAdministrator', 'Blog.Post.Create'),
('PostAdministrator', 'Blog.Post.Delete'),
('PostAdministrator', 'Blog.Post.Update'),
('Guest', 'Blog.Post.View'),
('CommentAdministration', 'Comment.*'),
('Editor', 'CommentAdministration'),
('Authenticated', 'CommentUpdateOwn'),
('Authenticated', 'Guest'),
('PostAdministrator', 'Post.*'),
('PostAdministrator', 'Post.Admin'),
('Authenticated', 'Post.Create'),
('PostAdministrator', 'Post.Create'),
('PostAdministrator', 'Post.Delete'),
('PostAdministrator', 'Post.Update'),
('Guest', 'Post.View'),
('Editor', 'PostAdministrator'),
('Authenticated', 'PostUpdateOwn');

-- --------------------------------------------------------

--
-- Table structure for table `media_category`
--

CREATE TABLE IF NOT EXISTS `media_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `media_category`
--

INSERT INTO `media_category` (`id`, `name`, `description`, `created`, `updated`) VALUES
(1, 'Education', '<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at,</p>\r\n\r\n<p style="text-align: justify;">ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>\r\n', '2013-07-15 13:10:24', '2013-07-15 13:34:18'),
(2, 'Social', '<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus</p>\r\n\r\n<p style="text-align: justify;">faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>\r\n', '2013-07-15 13:32:29', '2013-07-15 13:34:49');

-- --------------------------------------------------------

--
-- Table structure for table `media_comment`
--

CREATE TABLE IF NOT EXISTS `media_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `status` int(11) NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `author` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `url` varchar(128) DEFAULT NULL,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_comment_post` (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `media_comment`
--

INSERT INTO `media_comment` (`id`, `content`, `status`, `create_time`, `author`, `email`, `url`, `post_id`) VALUES
(1, 'This is a test comment. fafaf', 2, 1230952187, 'Tester', 'tester@example.com', '', 2),
(2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing eli', 2, 1368826495, 'widodo', 'wid.pangestu@gmail.com', 'http://widodo.com', 2),
(3, 'testing comment hell', 2, 1373347265, 'test', 'test@test.com', 'http://test.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `media_lookup`
--

CREATE TABLE IF NOT EXISTS `media_lookup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `code` int(11) NOT NULL,
  `type` varchar(128) NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `media_lookup`
--

INSERT INTO `media_lookup` (`id`, `name`, `code`, `type`, `position`) VALUES
(1, 'Draft', 1, 'PostStatus', 1),
(2, 'Published', 2, 'PostStatus', 2),
(3, 'Archived', 3, 'PostStatus', 3),
(4, 'Pending Approval', 1, 'CommentStatus', 1),
(5, 'Approved', 2, 'CommentStatus', 2);

-- --------------------------------------------------------

--
-- Table structure for table `media_picture`
--

CREATE TABLE IF NOT EXISTS `media_picture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  `day` int(11) NOT NULL,
  `file_name` varchar(45) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `category_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_media_picture_media_user1` (`author_id`),
  KEY `fk_media_picture_media_category1` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `media_picture`
--

INSERT INTO `media_picture` (`id`, `title`, `description`, `day`, `file_name`, `document`, `created`, `updated`, `category_id`, `author_id`) VALUES
(1, 'test', '<p>hkjh</p>\r\n', 1, '4292ee6a28211b1a6b4c7a4df7083562bd494a9b.jpg', '2012-01-22 12.37.44.jpg', '2013-07-15 13:20:18', '2013-07-15 13:20:18', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `media_post`
--

CREATE TABLE IF NOT EXISTS `media_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `content` text NOT NULL,
  `tags` text,
  `status` int(11) NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `author_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_media_post_media_user1` (`author_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `media_post`
--

INSERT INTO `media_post` (`id`, `title`, `content`, `tags`, `status`, `create_time`, `update_time`, `author_id`) VALUES
(1, 'Welcome!', 'This blog system is developed using Yii. It is meant to demonstrate how to use Yii to build a complete real-world application. Complete source code may be found in the Yii releases.\r\n\r\nFeel free to try this system by writing new posts and posting comments.', 'yii, blog', 2, 1230952187, 1230952187, 1),
(2, 'A Test Post', '<p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p style="margin-left: 120px;"><img alt="" src="http://localhost:82/media-management/uploads/post/1373605641_image.jpg" style="float:left; height:377px; margin:5px; width:377px" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam.</p>\r\n\r\n<p style="text-align:right">Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor.</p>\r\n\r\n<p style="text-align:justify">Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>\r\n', 'test', 2, 1230952187, 1373606703, 2),
(3, 'Testing', 'The trick here is the call to beginContent(). Remember how the layout file echoes the page-specific content in the correct place? Well, this call to beginContent() says that we鈥檙e about to start rendering the content. The method is provided with the primary layout file to use as the parent (i.e., the layout that encapsulates this content). All that鈥檚 happened here is that the content has been hijacked and replaced with slightly modified content. So the content in views/site/login.php gets pulled into column.php, where it鈥檚 wrapped within other content, and the combination of that content gets passed to main.php.\r\n\r\nThere are two tricks to this: first, beginContent() must point to //layouts/main.php. (The // just says to start in the Views directory.) Second, the layout that the Controller thinks it鈥檚 using is column1.php, not main.php. I personally think this approach is a bit complicated, particularly for the Yii newbie (yiibie?), but it is useful in situations where the content around the page-specific content needs to be adjusted dynamically.', 'test, hello, apa', 2, 1368819443, 1368819443, 3),
(4, 'asdad', 'sadas', '', 1, 1368820541, 1368820541, 4),
(5, 'Pangestu Testing', '<p style="text-align:justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus</p>\r\n\r\n<blockquote>\r\n<p>faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor.</p>\r\n</blockquote>\r\n\r\n<p style="text-align:justify">Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>\r\n\r\n<p style="text-align:justify">Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>\r\n', 'test, help, hello, apa', 2, 1373347406, 1373347475, 1);

-- --------------------------------------------------------

--
-- Table structure for table `media_rights`
--

CREATE TABLE IF NOT EXISTS `media_rights` (
  `itemname` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) DEFAULT NULL,
  PRIMARY KEY (`itemname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media_rights`
--

INSERT INTO `media_rights` (`itemname`, `type`, `weight`) VALUES
('Authenticated', 2, 1),
('Editor', 2, 0),
('Guest', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `media_tag`
--

CREATE TABLE IF NOT EXISTS `media_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `frequency` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `media_tag`
--

INSERT INTO `media_tag` (`id`, `name`, `frequency`) VALUES
(1, 'yii', 1),
(2, 'blog', 1),
(3, 'test', 3),
(4, 'hello', 2),
(5, 'apa', 2),
(6, 'help', 1);

-- --------------------------------------------------------

--
-- Table structure for table `media_user`
--

CREATE TABLE IF NOT EXISTS `media_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `lastvisit` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `media_user`
--

INSERT INTO `media_user` (`id`, `username`, `password`, `email`, `activkey`, `lastvisit`, `superuser`, `status`, `created`, `updated`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '9a24eff8c15a6a141ece27eb6947da0f', '2013-07-15 05:44:55', 1, 1, '0000-00-00 00:00:00', '2013-07-15 12:44:55'),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example.com', '099f825543f7850cc038b90aaff39fac', '2013-07-09 05:20:32', 0, 1, '0000-00-00 00:00:00', '2013-07-09 12:20:32'),
(3, 'widodopangestu', 'aa57bc4eee32968f4887688c87df9c0d', 'wid.pangestu@gamail.com', '2c3fd2f83ceecdbf28abc58650fb3c19', '0000-00-00 00:00:00', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'pangestu', 'aa57bc4eee32968f4887688c87df9c0d', 'wid_pangestu@yahoo.co.id', '36df6adda071c7575a062e1a3f3e2d8a', '2013-07-09 05:25:16', 0, 1, '0000-00-00 00:00:00', '2013-07-09 12:25:16');

-- --------------------------------------------------------

--
-- Table structure for table `media_video`
--

CREATE TABLE IF NOT EXISTS `media_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  `file_name` varchar(45) NOT NULL,
  `document` varchar(255) NOT NULL,
  `view_count` mediumtext,
  `like_count` mediumtext,
  `dislike_count` mediumtext,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `category_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_media_video_media_category1` (`category_id`),
  KEY `fk_media_video_media_user1` (`author_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `media_video`
--

INSERT INTO `media_video` (`id`, `title`, `description`, `file_name`, `document`, `view_count`, `like_count`, `dislike_count`, `created`, `updated`, `category_id`, `author_id`) VALUES
(1, 'test', '<p>test</p>\r\n', '2cca0095e50b53fafd311ac880e1a706a45bc557.mp4', 'bung tomo.mp4', NULL, NULL, NULL, '2013-07-15 13:26:28', '2013-07-15 13:26:28', 1, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `media_authassignment`
--
ALTER TABLE `media_authassignment`
  ADD CONSTRAINT `media_authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `media_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `media_picture`
--
ALTER TABLE `media_picture`
  ADD CONSTRAINT `fk_media_picture_media_user1` FOREIGN KEY (`author_id`) REFERENCES `media_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_media_picture_media_category1` FOREIGN KEY (`category_id`) REFERENCES `media_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `media_post`
--
ALTER TABLE `media_post`
  ADD CONSTRAINT `fk_media_post_media_user1` FOREIGN KEY (`author_id`) REFERENCES `media_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `media_video`
--
ALTER TABLE `media_video`
  ADD CONSTRAINT `fk_media_video_media_category1` FOREIGN KEY (`category_id`) REFERENCES `media_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_media_video_media_user1` FOREIGN KEY (`author_id`) REFERENCES `media_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
