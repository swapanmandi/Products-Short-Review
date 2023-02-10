-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql306.byetcluster.com
-- Generation Time: Jul 28, 2022 at 03:08 PM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_29813720_tsr`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('swapan', '12345'),
('ss', '11');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `img_title` varchar(255) NOT NULL,
  `img_desc` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `p_id`, `name`, `link`, `image`, `description`, `category`, `img_title`, `img_desc`) VALUES
(63, '2', 'Electric Vacuum Duster', 'https://amzn.to/3uGS0Yy', 'upload/2.jpg', 'A powerful 500 watt duster keeps  keyboards, computers, and other technological equipment clean.The dry clean air helps to dust-free your home and office electric gear regular and running gently.It looks white-black and is made of steel to last.', 'electronics', 'Electric Vacuum Duster', 'A powerful 500 watt duster keeps  keyboards, computers, and other technological equipment clean.'),
(65, '3', 'Dark Stars Projector Night Lights ', 'https://amzn.to/3FfkJsu', 'upload/3.jpg', 'It changes colors has a time setting. Useable as a night light for toddlers room. Battery operated it has a plastic hardcover on it to take in and off to use as a projector. There are different options for power, batteries or just plugged in.', 'electronics', 'Dark Stars Projector Night Lights ', 'It changes colors has a time setting. Useable as a night light for toddlers room. Battery operated it has a plastic hardcover on it to take in and off'),
(67, '4', 'Hyper Chiller Fast Iced Coffee Maker', 'https://amzn.to/3uHNol8', 'upload/4.jpg', 'has clear instructions of how to fill the compartments to what level to prevent spilling, you just keep it in the freezer and anytime you need any drink cooled quickly a hot coffee by up to 130 degrees in just 60 seconds without dilutions.', 'gifts', 'Hyper Chiller Fast Iced Coffee Maker', 'You just keep it in the freezer and anytime you need any drink cooled quickly a hot coffee by up to 130 degrees in just 60 seconds without dilutions.'),
(69, '5', 'Egg Skelter Dispenser Rack', 'https://amzn.to/3a8vVJi', 'upload/5.jpg', 'This is great and holds about 22-25 eggs. Makes it easy to track which eggs are the oldest and newest eggs. Made of sturdy powder-coated steel, this sleek and modern space-saving design fits virtually any size egg.', 'kitchen', 'Egg Skelter Dispenser Rack', 'This is great and holds about 22-25 eggs. Makes it easy to track which eggs are the oldest and newest eggs'),
(70, '6', 'Electric Grinder Coffee, Nuts, Spices ', 'https://amzn.to/3DgXZ9w', 'upload/6.jpg', 'It grinds so quickly that it isnâ€™t a bother at all to do a few batches. Itâ€™s super easy to clean and very compact to store. The stainless steel matches our other kitchen appliances. It grinds all of my coffee beans evenly in just a few seconds.', 'appliances', 'Electric Grinder Coffee, Nuts, Spices ', 'It grinds so quickly that it isnâ€™t a bother at all to do a few batches. Itâ€™s super easy to clean and very compact to store.'),
(75, '7', 'French Press Coffee Maker', 'https://amzn.to/3FtASuk', 'upload/7.jpg', 'The French Press works great except for the faulty plunger. The quality of this french press is excellent. Stainless steel components, measuring lines etched on inside of canister, double filter screens to keep coffee grinds separate from the coffee.', 'kitchen', 'French Press Coffee Maker', 'The French Press works great except for the faulty plunger. The quality of this french press is excellent.'),
(77, '8', 'Hand Crafted Sunflower', 'https://amzn.to/3iIa9k1', 'upload/8.jpg', 'Beautiful piece for the garden. Staked in the bushes and provides a visual interest point during the day. Holds enough lamp fuel for about 2-3 hours. Durable steel construction stands up to the elements and comes out the other side still looking fresh.', 'h&g', 'Hand Crafted Sunflower', 'Beatiful piece for the garden. Staked in the bushes and provides a visual interest point during the day. Holds enough lamp fuel for about 2-3 hours. '),
(78, '9', 'mClassic Video Game Console', 'https://www.amazon.com/dp/B07X6KDQ98?ascsubtag=v7_3_3_2q15_60mc_0_x01_-srt1-&linkCode=ll1&tag=dream210b-20&linkId=4361a94adfe0006bc30e061adfed2472&language=en_US&ref_=as_li_ss_tl', 'upload/9.jpg', ' The mClassic is here to be the first add-on 3rd generation graphics post graphics processor for video game consoles.It does a pretty great job of smoothing out the images, with graphics being much less pixelated, and helped remove some ghosting as well.', 'tech', 'mClassic Video Game Console', ' The mClassic is here to be the first add-on 3rd generation graphics post graphics processor for video game consoles.'),
(79, '10', 'Bunk Disc-O-Bed', 'https://amzn.to/3DkFhhn', 'upload/10.jpg', 'It comes in a well-made case, takes less than ten minutes to put up or dismantle, and is fairly easy to store when not needed. A bit heavy to carry but a lot lighter than a suitcase when you travel. Turns sofa style for when weather prevents outdoor evenings.', 'outdoors', 'Bunk Disc-O-Bed', 'It comes in a well-made case, takes less than ten minutes to put up or dismantle, and is fairly easy to store when not needed.'),
(80, '11', 'WiFi Touch Screen Voice Control Camera', 'https://amzn.to/3mCvzQZ', 'upload/11.jpg', 'The Eliteâ€™s image stabilization is much better, as is its low light and sound recording quality. The ability to zoom is also a nice improvement on the Elite. 2-inch responsive touch screen with IPS display. You can dive up to 40m/131ft to discover underwater.', 'tech', 'WiFi Touch Screen Voice Control Camera', 'The ability to zoom is also a nice improvement on the Elite. 2-inch responsive touch screen with IPS display.'),
(81, '12', 'Dancing symphonies of color and light', 'https://amzn.to/3mBuSak', 'upload/12.jpg', 'They light up your room with awesome color patterns and dance to your music. They were fairly easy to mount and set up.Goes great with the rest of the smart home and lighting. Explore different panel layouts with the Layout Assistant in the Nanoleaf App.', 'appliances', 'Dancing symphonies of color and light', 'Goes great with the rest of the smart home and lighting. Explore different panel layouts with the Layout Assistant in the Nanoleaf App.'),
(82, '13', 'Microfiber Spray Dual-Sided Mop Head', 'https://amzn.to/3oPxILT', 'upload/13.jpg', 'You can use one side to clean the hardwood floor then flip it over to help buff and dry the floor right after cleaning it.The mop pad cleans so quickly and easily in soap and water after use too.The mop itself is sturdy, rotates, the pad flips over and handle.', 'appliances', 'Microfiber Spray Dual-Sided Mop Head', 'You can use one side to clean the hardwood floor then flip it over to help buff and dry the floor right after cleaning it.'),
(83, '14', 'Comfortable Yoga Wheel Set', 'https://amzn.to/30zFwqX', 'upload/81ASCH+3iML._AC_SL1500_.jpg', 'The wheels feel sturdy and clearly well thought out design. The curved sides make it easy and comfortable to hand onto. No slipping at all and the foam was not too thick or too thin. Its superior quality & design cushions your palms, feet, and back.', 'h&f', 'Comfortable Yoga Wheel Set', 'The wheels feel sturdy and clearly well thought out design. The curved sides make it easy and comfortable to hand onto.'),
(84, '15', 'Yoga Trapeze Swing with Fire', 'https://amzn.to/3aJ6wG7', 'upload/71etlo7x4NL._AC_SL1500_.jpg', ' It is also great to take away on camping trips and hang it from solid rubber handle grips, adjustable straps, gym-grade carabiners, stylish carrying bag. tree branch. the great thing about the trapeze is that it is ultra-portable and can be set up in many pl', 'h&f', 'Yoga Trapeze Pro ', ' It is also great to take away on camping trips and hang it from solid rubber handle grips, adjustable straps, gym-grade carabiners.'),
(85, '16', 'Home Smart Plug Wi-Fi with Alexa, Google', 'https://amzn.to/2Zg3Iyo', 'upload/51j980zl6ML._AC_SL1000_.jpg', 'It is well built and has some better software functionality. These plugs work seamlessly with Alexa. These devices are simply on or off and do not pass a lot of data through the WiFi connection. The 2.4 GHz WiFi is actually a good fit for this product.', 'electronics', 'Home Smart Plug Wi-Fi with Alexa, Google', 'It is well built and has some better software functionality. These plugs work seamlessly with Alexa. These devices are simply on or off'),
(90, '', 'Security Camera for Car with Parking Mode', 'https://amzn.to/3H1UuWf', 'upload/71FTHutgEuL._AC_SL1500_.jpg', 'Whenever you drive it will take footage around your car and the Nexer app will be saved and you can easily access your mobile anytime.', 'tech,electronics,', 'Security Camera for Car with Parking Mode', 'Security Camera for Car with Parking Mode');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
