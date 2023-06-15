-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 12:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mecube`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `regdate` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `name`, `brand`, `image`, `regdate`) VALUES
(1, 'Grader', 'Alka-Seltzer Heartburn Plus Gas ReliefChews Tropical Punch', 'http://dummyimage.com/189x100.png/dddddd/000000', '2023-05-28'),
(2, 'Dump Truck', 'Humira', 'http://dummyimage.com/141x100.png/dddddd/000000', '2023-05-28'),
(3, 'Dump Truck', 'galantamine', 'http://dummyimage.com/208x100.png/dddddd/000000', '2023-05-28'),
(4, 'Backhoe', 'Hand Saver', 'http://dummyimage.com/132x100.png/dddddd/000000', '2023-05-28'),
(5, 'Compactor', 'Hand-E XL', 'http://dummyimage.com/177x100.png/cc0000/ffffff', '2023-05-28'),
(6, 'Dump Truck', 'flu and severe cold and cough', 'http://dummyimage.com/228x100.png/cc0000/ffffff', '2023-05-28'),
(7, 'Backhoe', 'Naproxen', 'http://dummyimage.com/230x100.png/ff4444/ffffff', '2023-05-28'),
(8, 'Grader', 'Cetirizine Hydrochloride', 'http://dummyimage.com/194x100.png/ff4444/ffffff', '2023-05-28'),
(9, 'Compactor', 'Rust, Wheat', 'http://dummyimage.com/140x100.png/5fa2dd/ffffff', '2023-05-28'),
(10, 'Skid-Steer', 'GOONG MAHN GEUM', 'http://dummyimage.com/221x100.png/ff4444/ffffff', '2023-05-28'),
(11, 'Crawler', 'GALANTAMINE HYDROBROMIDE', 'http://dummyimage.com/212x100.png/5fa2dd/ffffff', '2023-05-28'),
(12, 'Dump Truck', 'Remedy with Phytoplex Antifungal Clear', 'http://dummyimage.com/189x100.png/ff4444/ffffff', '2023-05-28'),
(13, 'Compactor', 'Levofloxacin', 'http://dummyimage.com/149x100.png/5fa2dd/ffffff', '2023-05-28'),
(14, 'Compactor', 'Isopropyl alcohol Swabsticks', 'http://dummyimage.com/147x100.png/cc0000/ffffff', '2023-05-28'),
(15, 'Crawler', 'Meprobamate', 'http://dummyimage.com/129x100.png/dddddd/000000', '2023-05-28'),
(16, 'Skid-Steer', 'Pamidronate Disodium', 'http://dummyimage.com/161x100.png/ff4444/ffffff', '2023-05-28'),
(17, 'Dump Truck', 'BareMinerals Tan Matte', 'http://dummyimage.com/225x100.png/cc0000/ffffff', '2023-05-28'),
(18, 'Trencher', 'Osmitrol', 'http://dummyimage.com/154x100.png/dddddd/000000', '2023-05-28'),
(19, 'Excavator', 'Love Hand Sanitizer', 'http://dummyimage.com/132x100.png/ff4444/ffffff', '2023-05-28'),
(20, 'Scraper', 'ibandronate sodium', 'http://dummyimage.com/245x100.png/5fa2dd/ffffff', '2023-05-28'),
(21, 'Dump Truck', 'Hydrocodone Bitartrate and Ibuprofen', 'http://dummyimage.com/231x100.png/dddddd/000000', '2023-05-28'),
(22, 'Dump Truck', 'Hydromorphone HCl', 'http://dummyimage.com/230x100.png/dddddd/000000', '2023-05-28'),
(23, 'Trencher', 'REFRESH OPTIVE Advanced', 'http://dummyimage.com/208x100.png/cc0000/ffffff', '2023-05-28'),
(24, 'Excavator', 'Fungal Plus', 'http://dummyimage.com/216x100.png/5fa2dd/ffffff', '2023-05-28'),
(25, 'Bulldozer', 'BABY ANBESOL', 'http://dummyimage.com/146x100.png/5fa2dd/ffffff', '2023-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `gender` varchar(5) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `rid` int(11) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `regdate` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `firstname`, `lastname`, `gender`, `email`, `username`, `password`, `rid`, `sid`, `regdate`) VALUES
(1, 'Billye', 'Van der Velden', 'F', 'bvandervelden0@phoca.cz', 'bvandervelden0', 'nIzVGJBZGVa', 2, 2, '2023-05-23'),
(2, 'AllenIv', 'McLaughlin', 'M', 'amclaughlin1@qq.com', 'amclaughlin1', 'Psf6dH1gFfRL', 2, 2, '2023-05-23'),
(3, 'Ritchie', 'Oldred', 'M', 'roldred2@unc.edu', 'roldred2', 'bR9Uzh', 2, 2, '2023-05-23'),
(4, 'Kenton', 'Cassel', 'M', 'kcassel3@icq.com', 'kcassel3', 'YcWkMIOdKQ', 2, 2, '2023-05-23'),
(6, 'Quentin', 'Stut', 'M', 'qstut5@yahoo.com', 'qstut5', 'ze6ktD', 2, 1, '2023-05-23'),
(7, 'Daisey', 'Waker', 'F', 'dwaker6@gmpg.org', 'dwaker6', '521iUAPKV5J', 2, 1, '2023-05-23'),
(8, 'Wendie', 'Sonley', 'F', 'wsonley7@ucoz.com', 'wsonley7', 'tSpyCQN', 2, 2, '2023-05-23'),
(9, 'Mirna', 'Beak', 'F', 'mbeak8@chron.com', 'mbeak8', 'ncT8i7vrceF', 2, 2, '2023-05-23'),
(10, 'Lauralee', 'Gumley', 'F', 'lgumley9@addthis.com', 'lgumley9', '4jVahGNN1L', 2, 2, '2023-05-23'),
(11, 'Brittni', 'Boobier', 'F', 'bboobiera@dagondesign.com', 'bboobiera', 'lwvqT5gWKIke', 2, 2, '2023-05-23'),
(12, 'Allie', 'Pigram', 'F', 'apigramb@latimes.com', 'apigramb', 'zbICZ0', 2, 2, '2023-05-24'),
(13, 'Jandy', 'Rappport', 'F', 'jrappportc@un.org', 'jrappportc', 'mxsqeSF5MT5q', 2, 2, '2023-05-24'),
(14, 'Georgiana', 'Vernay', 'F', 'gvernayd@gnu.org', 'gvernayd', 'CLtnHwH2', 2, 1, '2023-05-24'),
(15, 'Linzy', 'Hurdedge', 'F', 'lhurdedgee@google.ru', 'lhurdedgee', 'hJnWAfqRu', 2, 1, '2023-05-24'),
(16, 'Herman', 'Demaine', 'M', 'hdemainef@webeden.co.uk', 'hdemainef', '31shGrC1qF', 2, 1, '2023-05-24'),
(17, 'Mattias', 'Simonin', 'M', 'msimoning@arizona.edu', 'msimoning', '20twAEouFxfJ', 2, 2, '2023-05-24'),
(18, 'Daryl', 'Dobing', 'M', 'ddobingh@ft.com', 'ddobingh', 'Cwxy5ph', 2, 2, '2023-05-24'),
(19, 'Laryssa', 'Dary', 'F', 'ldaryi@ovh.net', 'ldaryi', 'rVW8ATINc', 2, 2, '2023-05-24'),
(20, 'Violet', 'Brant', 'F', 'vbrantj@sun.com', 'vbrantj', 'pQGhEow', 2, 1, '2023-05-24'),
(21, 'Jacinta', 'Cakes', 'F', 'jcakesk@smugmug.com', 'jcakesk', 'iRnrBvod', 2, 2, '2023-05-24'),
(22, 'Ransell', 'Blackater', 'M', 'rblackaterl@admin.ch', 'rblackaterl', 'oVYJZ51QMe8n', 2, 2, '2023-05-25'),
(23, 'Lazaro', 'Pellingar', 'M', 'lpellingarm@google.de', 'lpellingarm', 'dkjVHsl', 2, 2, '2023-05-25'),
(24, 'Dominik', 'Neillans', 'M', 'dneillansn@hubpages.com', 'dneillansn', 'z76V97HUKH', 2, 2, '2023-05-25'),
(25, 'Aaron', 'Toomey', 'M', 'atoomeyo@youtu.be', 'atoomeyo', 'Qa1gqo73e', 2, 2, '2023-05-25'),
(26, 'Taite', 'Mogie', 'M', 'tmogiep@admin.ch', 'tmogiep', 'Jn949Peg', 2, 2, '2023-05-25'),
(27, 'Dorette', 'Andrez', 'F', 'dandrezq@dailymail.co.uk', 'dandrezq', 'KHTWbDOhX', 2, 2, '2023-05-25'),
(28, 'Cristine', 'Scimonelli', 'F', 'cscimonellir@a8.net', 'cscimonellir', 'FSsd5X', 2, 1, '2023-05-25'),
(29, 'Geoffrey', 'Broadley', 'M', 'gbroadleys@theguardian.com', 'gbroadleys', '1nRtqdNa', 2, 1, '2023-05-26'),
(30, 'Helaine', 'Thulborn', 'F', 'hthulbornt@tripadvisor.com', 'hthulbornt', 'e4QonLHOVmR3', 2, 1, '2023-05-26'),
(31, 'Elyn', 'Jeromson', 'F', 'ejeromsonu@blogspot.com', 'ejeromsonu', 'EUYIHdWb', 2, 1, '2023-05-26'),
(32, 'Abbott', 'Cape', 'M', 'acapev@un.org', 'acapev', 'kOXX0Sy', 2, 2, '2023-05-26'),
(33, 'Dominique', 'Gullis', 'F', 'dgullisw@adobe.com', 'dgullisw', 'g15FhMqI', 2, 1, '2023-05-26'),
(34, 'Brena', 'Hubbucks', 'F', 'bhubbucksx@paginegialle.it', 'bhubbucksx', 'WH8sme', 2, 2, '2023-05-28'),
(35, 'Roth', 'Skains', 'M', 'rskainsy@free.fr', 'rskainsy', 'JboFiGTXdv', 2, 1, '2023-05-28'),
(36, 'Adria', 'Engelbrecht', 'F', 'aengelbrechtz@thetimes.co.uk', 'aengelbrechtz', 'WZLGT1wGfa', 2, 1, '2023-05-28'),
(37, 'Judie', 'Pond', 'F', 'jpond10@wordpress.com', 'jpond10', 'jVSvlz01', 2, 2, '2023-05-28'),
(38, 'Germain', 'Pache', 'F', 'gpache11@prnewswire.com', 'gpache11', 'hpY2AcqmE', 2, 1, '2023-05-28'),
(39, 'Jorge', 'Haresnape', 'M', 'jharesnape12@taobao.com', 'jharesnape12', 'B8VSGr36I9', 2, 1, '2023-05-28'),
(40, 'Leontyne', 'Folomin', 'F', 'lfolomin13@blinklist.com', 'lfolomin13', 'Tvff0Z', 2, 2, '2023-05-28'),
(41, 'Andrew', 'Twopenny', 'M', 'atwopenny14@uol.com.br', 'atwopenny14', 'wKE8yztJJr', 2, 2, '2023-05-28'),
(42, 'Johnathon', 'Dict', 'M', 'jdict15@yandex.ru', 'jdict15', 'BzA3NM', 2, 1, '2023-05-28'),
(43, 'Husein', 'Brandom', 'M', 'hbrandom16@dion.ne.jp', 'hbrandom16', 'qV2c0yzemO', 2, 2, '2023-05-28'),
(44, 'Bessie', 'Huddles', 'F', 'bhuddles17@ameblo.jp', 'bhuddles17', 'yaDwQ9', 2, 1, '2023-05-28'),
(45, 'Lincoln', 'Hinz', 'M', 'lhinz18@amazonaws.com', 'lhinz18', 'aWq1DB6sr7', 2, 2, '2023-05-28'),
(46, 'Minnaminnie', 'Abbatt', 'F', 'mabbatt19@devhub.com', 'mabbatt19', 'P34gUlEwnk', 2, 1, '2023-05-29'),
(47, 'Felita', 'Pingston', 'F', 'fpingston1a@prlog.org', 'fpingston1a', 'nJUiTVU', 2, 1, '2023-05-29'),
(48, 'Sheilakathryn', 'Sitwell', 'F', 'ssitwell1b@vkontakte.ru', 'ssitwell1b', 'hpiN8V', 2, 1, '2023-05-29'),
(49, 'Coral', 'Goburn', 'F', 'cgoburn1c@blogger.com', 'cgoburn1c', 'j2gbk1H', 2, 1, '2023-05-29'),
(50, 'Harcourt', 'Stanbro', 'M', 'hstanbro1d@example.com', 'hstanbro1d', 'xevDbG2tT', 2, 2, '2023-05-29'),
(52, 'MandlaKing', 'Mkhombe', 'M', 'mkhombe.me@gmail.com', 'starz', '12345', 1, 1, '2023-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

CREATE TABLE `noticeboard` (
  `id` int(11) NOT NULL,
  `header` varchar(255) DEFAULT NULL,
  `paragraph` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `eid` int(11) DEFAULT NULL,
  `regdate` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `noticeboard`
--

INSERT INTO `noticeboard` (`id`, `header`, `paragraph`, `image`, `eid`, `regdate`) VALUES
(1, 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros.', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', 'http://dummyimage.com/198x100.png/ff4444/ffffff', 1, '2023-05-28'),
(2, 'Fusce posuere felis sed lacus.', 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', 'http://dummyimage.com/237x100.png/ff4444/ffffff', 1, '2023-05-28'),
(3, 'Integer non velit.', 'Phasellus in felis. Donec semper sapien a libero. Nam dui.', 'http://dummyimage.com/195x100.png/cc0000/ffffff', 1, '2023-05-28'),
(4, 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo.', 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.', 'http://dummyimage.com/194x100.png/5fa2dd/ffffff', 1, '2023-05-28'),
(5, 'Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.', 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.', 'http://dummyimage.com/188x100.png/ff4444/ffffff', 1, '2023-05-28'),
(6, 'Nunc rhoncus dui vel sem. Sed sagittis.', 'Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', 'http://dummyimage.com/188x100.png/5fa2dd/ffffff', 1, '2023-05-28'),
(7, 'Proin eu mi. Nulla ac enim.', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', 'http://dummyimage.com/177x100.png/5fa2dd/ffffff', 1, '2023-05-28'),
(8, 'Donec posuere metus vitae ipsum. Aliquam non mauris.', 'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.', 'http://dummyimage.com/164x100.png/5fa2dd/ffffff', 1, '2023-05-28'),
(9, 'In blandit ultrices enim.', 'Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.', 'http://dummyimage.com/168x100.png/cc0000/ffffff', 1, '2023-05-28'),
(10, 'Duis mattis egestas metus. Aenean fermentum.', 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.', 'http://dummyimage.com/216x100.png/dddddd/000000', 1, '2023-05-28'),
(11, 'Duis mattis egestas metus.', 'Integer ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.', 'http://dummyimage.com/152x100.png/ff4444/ffffff', 1, '2023-05-28'),
(12, 'Duis bibendum.', 'Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.', 'http://dummyimage.com/174x100.png/ff4444/ffffff', 1, '2023-05-28'),
(13, 'In est risus, auctor sed, tristique in, tempus sit amet, sem.', 'In congue. Etiam justo. Etiam pretium iaculis justo.', 'http://dummyimage.com/229x100.png/5fa2dd/ffffff', 1, '2023-05-28'),
(14, 'In congue.', 'Sed ante. Vivamus tortor. Duis mattis egestas metus.', 'http://dummyimage.com/178x100.png/cc0000/ffffff', 1, '2023-05-28'),
(15, 'Quisque ut erat.', 'Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.', 'http://dummyimage.com/228x100.png/5fa2dd/ffffff', 1, '2023-05-28'),
(16, 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.', 'http://dummyimage.com/108x100.png/5fa2dd/ffffff', 1, '2023-05-28'),
(17, 'Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.', 'Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.', 'http://dummyimage.com/129x100.png/dddddd/000000', 1, '2023-05-28'),
(18, 'Nunc nisl.', 'In congue. Etiam justo. Etiam pretium iaculis justo.', 'http://dummyimage.com/143x100.png/dddddd/000000', 1, '2023-05-28'),
(19, 'Fusce posuere felis sed lacus.', 'Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', 'http://dummyimage.com/167x100.png/dddddd/000000', 1, '2023-05-28'),
(20, 'Donec vitae nisi. Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla.', 'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.', 'http://dummyimage.com/109x100.png/ff4444/ffffff', 1, '2023-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` decimal(6,2) DEFAULT NULL,
  `discount` decimal(6,2) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `psid` int(11) DEFAULT NULL,
  `regdate` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `fullname`, `description`, `price`, `discount`, `image`, `psid`, `regdate`) VALUES
(1, 'Pear - Prickly', 'Morbi a ipsum. Integer a nibh.', '81.38', '1.86', 'http://dummyimage.com/213x100.png/5fa2dd/ffffff', 2, '2023-05-28'),
(2, 'Lemonade - Strawberry, 591 Ml', 'Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem. Integer tincidunt ante vel ipsum.', '80.63', '1.03', 'http://dummyimage.com/113x100.png/ff4444/ffffff', 2, '2023-05-28'),
(3, 'Beef - Rib Roast, Capless', 'Phasellus in felis.', '11.39', '0.90', 'http://dummyimage.com/220x100.png/ff4444/ffffff', 2, '2023-05-28'),
(4, 'Cheese - Shred Cheddar / Mozza', 'In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem. Duis aliquam convallis nunc.', '47.17', '1.08', 'http://dummyimage.com/128x100.png/ff4444/ffffff', 1, '2023-05-28'),
(5, 'Chocolate - Milk, Callets', 'Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem. Integer tincidunt ante vel ipsum.', '7.66', '0.24', 'http://dummyimage.com/146x100.png/ff4444/ffffff', 2, '2023-05-28'),
(6, 'Crackers - Water', 'Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est.', '84.99', '2.97', 'http://dummyimage.com/153x100.png/dddddd/000000', 2, '2023-05-28'),
(7, 'Foam Dinner Plate', 'Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue.', '77.95', '1.22', 'http://dummyimage.com/108x100.png/ff4444/ffffff', 1, '2023-05-28'),
(8, 'Lobster - Tail 6 Oz', 'Duis bibendum.', '21.22', '2.21', 'http://dummyimage.com/179x100.png/5fa2dd/ffffff', 2, '2023-05-28'),
(9, 'Nori Sea Weed - Gold Label', 'Aliquam quis turpis eget elit sodales scelerisque.', '29.75', '2.98', 'http://dummyimage.com/153x100.png/5fa2dd/ffffff', 1, '2023-05-28'),
(10, 'Pepper - Red Chili', 'Nullam molestie nibh in lectus.', '80.57', '0.43', 'http://dummyimage.com/124x100.png/dddddd/000000', 1, '2023-05-28'),
(11, 'Appetizer - Spring Roll, Veg', 'Praesent blandit.', '50.77', '2.49', 'http://dummyimage.com/215x100.png/dddddd/000000', 2, '2023-05-28'),
(12, 'Juice - Happy Planet', 'In hac habitasse platea dictumst. Maecenas ut massa quis augue luctus tincidunt.', '82.29', '2.00', 'http://dummyimage.com/155x100.png/dddddd/000000', 1, '2023-05-28'),
(13, 'Beer - Upper Canada Light', 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo.', '39.00', '2.40', 'http://dummyimage.com/248x100.png/5fa2dd/ffffff', 1, '2023-05-28'),
(14, 'Muffin - Mix - Creme Brule 15l', 'Morbi non quam nec dui luctus rutrum. Nulla tellus.', '45.92', '1.44', 'http://dummyimage.com/113x100.png/dddddd/000000', 2, '2023-05-28'),
(15, 'Pail - 15l White, With Handle', 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo.', '18.45', '1.84', 'http://dummyimage.com/153x100.png/cc0000/ffffff', 1, '2023-05-28'),
(16, 'Lotus Leaves', 'Aliquam erat volutpat. In congue.', '25.23', '2.74', 'http://dummyimage.com/200x100.png/ff4444/ffffff', 2, '2023-05-28'),
(17, 'Ranchero - Primerba, Paste', 'Proin risus.', '96.87', '2.03', 'http://dummyimage.com/133x100.png/cc0000/ffffff', 2, '2023-05-28'),
(18, 'Soup Campbells Beef With Veg', 'Vivamus in felis eu sapien cursus vestibulum.', '45.21', '0.01', 'http://dummyimage.com/155x100.png/dddddd/000000', 2, '2023-05-28'),
(19, 'Bread - Bagels, Plain', 'Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.', '72.33', '1.45', 'http://dummyimage.com/240x100.png/dddddd/000000', 2, '2023-05-28'),
(20, 'Oil - Coconut', 'Maecenas pulvinar lobortis est. Phasellus sit amet erat.', '37.76', '1.68', 'http://dummyimage.com/125x100.png/cc0000/ffffff', 1, '2023-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `id` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `mid` int(11) DEFAULT NULL,
  `regdate` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`id`, `pid`, `quantity`, `mid`, `regdate`) VALUES
(1, 1, 5, 52, '2023-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `state` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state`) VALUES
(1, 'available'),
(2, 'unavailable');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'active'),
(2, 'inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rid` (`rid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `noticeboard`
--
ALTER TABLE `noticeboard`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eid` (`eid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `psid` (`psid`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pid` (`pid`),
  ADD KEY `mid` (`mid`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `noticeboard`
--
ALTER TABLE `noticeboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `role` (`id`),
  ADD CONSTRAINT `member_ibfk_2` FOREIGN KEY (`sid`) REFERENCES `status` (`id`);

--
-- Constraints for table `noticeboard`
--
ALTER TABLE `noticeboard`
  ADD CONSTRAINT `noticeboard_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `member` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`psid`) REFERENCES `state` (`id`);

--
-- Constraints for table `receipt`
--
ALTER TABLE `receipt`
  ADD CONSTRAINT `receipt_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `receipt_ibfk_2` FOREIGN KEY (`mid`) REFERENCES `member` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
