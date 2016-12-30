-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2016 at 03:28 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conchos_sisig`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(225) NOT NULL,
  `pass` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(0, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `cust_email` varchar(225) NOT NULL,
  `prod_id` varchar(225) NOT NULL,
  `qty` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `order_id` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `cust_email`, `prod_id`, `qty`, `status`, `order_id`) VALUES
(2, 'alakneth@gmail.com', '3', '6', '1', 'FKQHzi3GLb'),
(3, 'alakneth@gmail.com', '1', '13', '1', 'FKQHzi3GLb'),
(4, 'alakneth@gmail.com', '7', '1', '1', 'FKQHzi3GLb'),
(5, 'alakneth@gmail.com', '2', '2', '1', 'FKQHzi3GLb'),
(6, 'alakneth@gmail.com', '2', '4', '4', 'uKqkIBYmXa'),
(7, 'alakneth@gmail.com', '1', '2', '4', 'uKqkIBYmXa'),
(8, 'alakneth@gmail.com', '3', '1', '4', 'uKqkIBYmXa'),
(10, 'alakneth@gmail.com', '3', '1', '1', 'J3Q4he1IUn'),
(11, 'alakneth@gmail.com', '7', '1', '1', 'J3Q4he1IUn'),
(12, 'alakneth@gmail.com', '8', '1', '1', 'J3Q4he1IUn'),
(13, 'alakneth@gmail.com', '2', '1', '0', ''),
(14, 'kier.abenojar@gmail.com', '2', '1', '1', '8CylGXo93z'),
(15, 'kier.abenojar@gmail.com', '3', '1', '1', '8CylGXo93z'),
(16, 'test@gmail.com', '16', '3', '1', 'a6qP4jxi2X'),
(17, 'test@gmail.com', '39', '1', '1', 'a6qP4jxi2X'),
(18, 'test@gmail.com', '43', '5', '1', 'a6qP4jxi2X'),
(19, 'test@gmail.com', '5', '1', '4', 'PRMIdleFtr'),
(20, 'test@gmail.com', '7', '1', '4', 'PRMIdleFtr'),
(21, 'test@gmail.com', '12', '1', '4', 'PRMIdleFtr'),
(23, 'test@gmail.com', '13', '1', '4', 'PRMIdleFtr');

-- --------------------------------------------------------

--
-- Table structure for table `cart_orders`
--

CREATE TABLE `cart_orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(225) NOT NULL,
  `cust_email` varchar(225) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `total` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_orders`
--

INSERT INTO `cart_orders` (`id`, `order_id`, `cust_email`, `date`, `total`, `status`) VALUES
(1, 'FKQHzi3GLb', 'alakneth@gmail.com', '2016-04-05 01:58:14', 'P3970', '1'),
(2, 'uKqkIBYmXa', 'alakneth@gmail.com', '2016-04-05 01:57:57', 'P1910', '3'),
(3, 'J3Q4he1IUn', 'alakneth@gmail.com', '2016-09-22 09:55:54', 'P270', '1'),
(4, '8CylGXo93z', 'kier.abenojar@gmail.com', '2016-12-30 09:06:31', 'P500', '1'),
(5, 'a6qP4jxi2X', 'test@gmail.com', '2016-12-30 09:18:48', 'P670', '2'),
(6, 'PRMIdleFtr', 'test@gmail.com', '2016-12-30 09:19:20', 'P845', '4');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(225) NOT NULL,
  `contact` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `message` varchar(225) NOT NULL,
  `push` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `date`, `name`, `contact`, `email`, `message`, `push`) VALUES
(1, '2016-03-20 12:31:57', 'Kenneth abenojar', '09489101882', 'alakneth@gmail.com', 'Sino nag aabang ZRAT - LAN Hack\r\npopost ko ung link pag tapos at ready na.\r\nComment sa mga Beta Testers ng ZRAT - LAN HACK\r\nNOTE: NO NEED FUD CRYPTER di to madedetect.', ''),
(2, '2016-03-20 13:16:19', 'Dainae', '9481178', 'daiana@gmail.com', 'mga kaibigan, konting tulong naman oh.. nahihiya man akong lumapit wala na akong choice..\r\ndi kasi ako makapag import ng kahit anong file sa Visual basic 2012,..mapa image, mag open file, at mag connect ng ', ''),
(4, '2016-04-05 01:55:53', 'kenneth', '09489101882', 'alakneth@gmail.com', 'TEST', ''),
(5, '2016-04-05 01:56:55', 'asd', '41231', 'alakneth@gmail.com', 'asd', ''),
(6, '2016-04-05 01:57:26', 'asd', '41231', 'alakneth@gmail.com', 'asd', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cust_email` varchar(225) NOT NULL,
  `message` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `date`, `cust_email`, `message`, `status`) VALUES
(1, '2016-04-04 18:45:54', 'alakneth@gmail.com', 'Hi there', '1'),
(2, '2016-04-04 18:45:54', 'alakneth@gmail.com', 'asd', '1'),
(3, '2016-04-05 01:13:14', 'alakneth@gmail.com', 'asdasd', '1'),
(4, '2016-04-05 01:13:14', 'alakneth@gmail.com', 'asdasdasd', '1'),
(5, '2016-09-22 09:56:29', 'alakneth@gmail.com', 'TEST', '1'),
(6, '2016-12-30 09:15:29', 'alakneth@gmail.com', 'test', '0');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `action` varchar(225) NOT NULL,
  `push` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `name`, `date`, `action`, `push`) VALUES
(1, 'kenneth abenojar', '2016-03-20 10:46:35', 'Registered a new account', ''),
(2, 'Rick ordingan magadan', '2016-03-20 10:46:35', 'Added Sisig to his cart', ''),
(3, 'Iris landingin', '2016-03-20 12:21:24', 'Nagbasketball sa kanto ng pinto', ''),
(4, 'kenneth abenojar', '2016-04-04 22:13:33', 'Logout from Conchos online ordering site', '0'),
(5, 'reyna ', '2016-04-04 22:03:54', 'Logout from Conchos online ordering site', '0'),
(6, 'kennethabenojar', '2016-04-04 22:13:18', 'Logout from Conchos online ordering site', '0'),
(7, 'kennethabenojar', '2016-04-04 22:13:58', 'Logged In', '0'),
(8, 'kennethabenojar', '2016-04-04 22:14:06', 'Logged In', '0'),
(9, 'kennethabenojar', '2016-04-04 22:14:41', 'Logged In', '0'),
(10, 'kennethabenojar', '2016-04-04 22:15:25', 'Logged In', '0'),
(11, 'kennethabenojar', '2016-04-04 22:15:54', 'Logged In', '0'),
(12, 'kennethabenojar', '2016-04-04 22:16:24', 'Logged In', '0'),
(13, 'kennethabenojar', '2016-04-04 22:16:40', 'Logout from Conchos online ordering site', '0'),
(14, 'kennethabenojar', '2016-04-04 22:16:51', 'Logged In', '0'),
(15, 'kennethabenojar', '2016-04-04 22:17:41', 'Checkout orders', '0'),
(16, 'kennethabenojar', '2016-04-04 22:18:20', 'Canceled Order', '0'),
(17, 'kennethabenojar', '2016-04-04 23:15:59', 'Logged In', '0'),
(18, 'kennethabenojar', '2016-04-05 03:36:36', 'Checkout orders', '0'),
(19, 'kennethabenojar', '2016-04-05 03:53:16', 'Logout from Conchos online ordering site', '0'),
(20, 'kennethabenojar', '2016-04-05 01:11:44', 'Logged In', '0'),
(21, 'kennethabenojar', '2016-04-05 01:13:26', 'Checkout orders', '0'),
(22, 'kennethabenojar', '2016-04-05 01:13:41', 'Canceled Order', '0'),
(23, 'kennethabenojar', '2016-04-05 01:14:47', 'Logout from Conchos online ordering site', '0'),
(24, 'kennethabenojar', '2016-04-05 01:37:54', 'Logged In', '0'),
(25, 'kennethabenojar', '2016-04-05 01:48:59', 'Logged In', '0'),
(26, 'kennethabenojar', '2016-04-05 01:49:27', 'Checkout orders', '0'),
(27, 'kennethabenojar', '2016-04-05 01:49:50', 'Checkout orders', '0'),
(28, 'kennethabenojar', '2016-04-05 01:50:01', 'Canceled Order', '0'),
(29, 'kennethabenojar', '2016-04-05 01:50:15', 'Logout from Conchos online ordering site', '0'),
(30, 'kennethabenojar', '2016-09-22 09:54:50', 'Logged In', '0'),
(31, 'kennethabenojar', '2016-09-22 09:55:54', 'Checkout orders', '0'),
(32, 'kennethabenojar', '2016-09-22 09:58:45', 'Logout from Conchos online ordering site', '0'),
(33, 'test', '2016-09-22 11:00:55', 'Logged In', '0'),
(34, 'kennethabenojar', '2016-09-23 07:31:00', 'Logged In', '0'),
(35, 'kennethabenojar', '2016-10-17 05:10:18', 'Logged In', '0'),
(36, 'kennethabenojar', '2016-12-28 08:25:36', 'Logged In', '0'),
(37, 'kennethabenojar', '2016-12-28 08:25:55', 'Logout from Conchos online ordering site', '0'),
(38, 'kier', '2016-12-30 08:56:07', 'Logged In', '0'),
(39, 'kier', '2016-12-30 09:05:14', 'Logout from Conchos online ordering site', '0'),
(40, 'kier', '2016-12-30 09:05:28', 'Logged In', '0'),
(41, 'kier', '2016-12-30 09:06:31', 'Checkout orders', '0'),
(42, 'kier', '2016-12-30 09:07:01', 'Logout from Conchos online ordering site', '0'),
(43, 'test', '2016-12-30 09:16:39', 'Logged In', '0'),
(44, 'test', '2016-12-30 09:17:26', 'Checkout orders', '0'),
(45, 'test', '2016-12-30 09:18:06', 'Checkout orders', '0'),
(46, 'test', '2016-12-30 09:19:20', 'Canceled Order', '0'),
(47, 'test', '2016-12-30 09:19:35', 'Logout from Conchos online ordering site', '0'),
(48, 'test', '2016-12-30 09:19:35', 'Logout from Conchos online ordering site', '0');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `category` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `image`, `status`) VALUES
(1, 'Bbq Chicken', 'Main-Meals', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', '180', 'baked bbq chicken.jpg', 'unavailable'),
(2, 'Beef Salpicao', 'Main-Meals', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', '350', 'beef salpicao.JPG', 'unavailable'),
(3, 'Beef Tapa', 'Main-Meals', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', '150', 'beef tapa.jpg', 'available'),
(5, 'Boneless Bangus', 'Main-Meals', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', '180', 'boneless bangus.png', 'available'),
(7, 'Bottled Water', 'Drinks', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', '30', 'bottled water.jpg', 'available'),
(8, 'Buko Pandan(spe)', 'Desserts', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', '90', 'buko pandan large.jpg', 'available'),
(11, 'Calamares', 'Main-Meals', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', '175', 'calamares.jpg', 'available'),
(12, 'Crispy Pata', 'Main-Meals', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', '600', 'chrispy pata.jpg', 'available'),
(13, 'Coke zero', 'Drinks', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', '35', 'coke zero.jpg', 'available'),
(15, 'Coke', 'Drinks', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', '35', 'coke.png', 'available'),
(16, 'Sisig super meal', 'Sisig', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', '170', 'conchos sisig super meal.jpg', 'available'),
(20, 'Conchos Sisig', 'Sisig', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', '145', 'images.jpg', 'available'),
(23, 'Sisig wrap', 'Sisig', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', '115', 'conchossisigwrap.jpg', 'available'),
(24, 'Dynamite', 'Main-Meals', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', '130', 'dynamite.JPG', 'available'),
(25, 'Egg', 'Extras', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', '15', 'egg.jpg', 'available'),
(26, 'Fish  chips', 'Main-Meals', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', '160', 'fish and chips.JPG', 'available'),
(28, 'Garlic Rice', 'Extras', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', '25', 'garlic rices.jpg', 'available'),
(29, 'Herb Potatoes', 'Extras', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', '30', 'herb potatoes.jpg', 'available'),
(36, 'Icedtea(bottomless)', 'Drinks', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', '55', 'icetea bottomless.jpg', 'available'),
(37, 'Icedtea', 'Drinks', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', '35', 'icetea.jpg', 'available'),
(38, 'Mac n Cheese', 'For-Kids', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', '120', 'mac chees.jpg', 'available'),
(39, 'Mango Sago(reg)', 'Desserts', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', '60', 'mango sago large.jpg', 'available'),
(40, 'Mango Sago', 'Desserts', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', '90', 'l.jpg', 'available'),
(41, 'Plain Rice', 'Extras', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', '20', 'rices.jpg', 'available'),
(42, 'Sprite', 'Drinks', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', '35', 'sprite.jpg', 'available'),
(43, 'Tortilla Wrap', 'Extras', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', '20', 'tortilla.jpg', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `contact` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `pass` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contact`, `address`, `pass`) VALUES
(1, 'kennethabenojar', 'alakneth@gmail.com', '09489101882', '061 DAO ST MARIKINA HIEGHTS MARIKINA CITY', '1234'),
(2, 'reyna', 'ar80kawasakininja@yahoo.com', '09489101882', '061 dao st marikina heights marikina city', '123'),
(3, 'test', 'test@gmail.com', '1234', 'test', '1234'),
(4, 'kier', 'kier.abenojar@gmail.com', '09993628811', 'marikina', '1234'),
(5, 'test', 'test@gmail.com', '099999999', 'Manila', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_orders`
--
ALTER TABLE `cart_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `cart_orders`
--
ALTER TABLE `cart_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
