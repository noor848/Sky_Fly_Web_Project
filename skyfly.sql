-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 09:18 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skyfly`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id_B` int(11) NOT NULL,
  `Title` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `time` time NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `day` int(11) NOT NULL,
  `month` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id_B`, `Title`, `time`, `position`, `content`, `image`, `day`, `month`) VALUES
(24, 'Spontechnaity: How tech will drive travel', '00:58:00', 'Morocco', 'While travel behavior has been heavily impacted by the pandemic, the future of travel is looking bright. We’re changing the way we look at the world and how we explore it, choosing memories over miles and seeking happiness in meaningful connections.\r\n\r\nWe’re evolving into a new type of traveler, using technology to regain spontaneity, confidence, and to help us travel safely and responsibly.\r\n​More than half (64%) of travelers agree technology will play a key role in controlling health risks while traveling. When it comes to accommodations, 63% of global travelers believe that properties will need to use the latest technologies to make them feel safe.', '6001d6fbf0857.webp', 10, 'DEC'),
(25, 'Stay flexible', '23:00:00', 'Antalia', 'Flexibility is becoming increasingly important, with more than half (53%) of global wanderlusters craving convenient tech options to make last-minute restaurant reservations. Almost a quarter (21%) of travelers also want more self-service machines instead of ticket desks to move through stations and airports quicker and to minimize human touchpoints.', '6001d79837211.jpg', 20, 'NOV'),
(26, 'Technology Today', '12:03:00', 'Middle-East', '<p>Technology offers endless opportunities to help us find what we’re looking for more efficiently. That’s why more than half (55%) of travelers are excited about tech’s potential to further personalize their travel experiences in the near future. Its importance will only continue to grow as tech continues to prove its worth, becoming more and more integrated into our personal travel experiences.</p>', '6001d80e7ad46.jpg', 3, 'JAN'),
(35, 'Bridges', '17:54:00', 'Prague', '<p>The impressive capital of the Czech Republic, Prague is a perfect blend of old and new. Its flawless architecture dating back hundreds of years acts as the foundations for a place bustling with the activity of a modern city just waiting to be explored. Plenty to see and do ensures that every year, thousands of people flock here to immerse themselves in its culture and attractions.</p>', '6013e897588db.jpg', 19, 'OCT'),
(36, 'Walking through ancient walls of Dubrovnik', '15:54:00', 'America_Texas', '<p>Shewing met parties gravity husband sex pleased. On to no kind do next feel held walk. Last own loud and knew give gay four. Sentiments motionless or principles preference excellence am. Literature surrounded insensible at indulgence or to admiration remarkably. Matter future lovers desire marked boy use. Chamber reached do he nothing be.</p>', '6015d4b04243d.jpg', 5, 'DEC'),
(37, 'Top', '00:14:00', 'Europe', '<figure class=\"table\"><table><tbody><tr><td><br>Forfeited you engrossed but gay sometimes explained. Another as studied it to evident. Merry sense given he be arise. Conduct at an replied removal an amongst. Remaining determine few her two cordially admitting old. Sometimes strangers his ourselves her depending you boy. Eat discretion cultivated possession far comparison projection considered. And few fat interested discovered</td></tr></tbody></table></figure>', '6018448c4e37d.jpg', 20, 'FEB');

-- --------------------------------------------------------

--
-- Table structure for table `book_hotel`
--

CREATE TABLE `book_hotel` (
  `id_u` int(11) NOT NULL,
  `id_h` int(11) NOT NULL,
  `rooms` int(11) NOT NULL,
  `Depart` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book_hotel`
--

INSERT INTO `book_hotel` (`id_u`, `id_h`, `rooms`, `Depart`, `Days`) VALUES
(4454, 159, 5, '2021-04-18', 3),
(4454, 148, 8, '2021-04-06', 9),
(4454, 146, 1515, '2021-04-02', 5);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `price` int(11) NOT NULL,
  `fuel_consmption` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capacity` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idc` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`price`, `fuel_consmption`, `capacity`, `name`, `idc`, `image`) VALUES
(200, '1L/100km', 2, 'Hatchback', 1, 'hath.png'),
(250, '1.9L/100km', 4, 'sedan', 2, 'sedan.png'),
(400, '2L/100km', 8, 'MPV', 3, 'mpv.png'),
(555, '0.7L/100km', 7, 'SUV', 4, 'duv.png'),
(300, '2.2L/100km', 5, 'Crossover', 5, 'CRO.png'),
(600, '3L/100km', 7, 'coupe', 6, 'coup.png'),
(270, '2.5L/100km', 7, 'Land', 7, 'land.png'),
(800, '5L/100km', 8, 'BMW', 8, 'bmw.png'),
(550, '5.5L/100km', 4, 'Mercedes', 9, 'mercedec.png'),
(700, '9L/100km', 8, 'Kia', 10, 'kia.png'),
(400, '6.5L/100km', 2, 'Toyota', 11, 'toyota.png');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_u` int(11) NOT NULL,
  `id_B` int(11) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id_u`, `id_B`, `comment`) VALUES
(4454, 35, 'nice'),
(5865, 35, 'super!');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `idf` int(11) NOT NULL,
  `departd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `returnd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `departt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `returnt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `flocation` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`idf`, `departd`, `returnd`, `departt`, `returnt`, `price`, `flocation`) VALUES
(3, '5/10/2021', '11/12/2021', '5:45:00', '6:00:00', 725, 'america.png'),
(4, '7/4/2021', '13/8/2021', '10:00:00 am', '3:30:00 pm', 880, 'spain.png'),
(5, '9/9/2021', '30/10/2021', '5:10:00', '6:15:00', 320, 'spain.png'),
(6, '19/2/2021', '1/4/2021', '1:15:00 am', '12:00:00 pm', 900, 'france.png'),
(7, '16/4/2021', '7/8/2021', '5:45:00 pm', '4:10:00 pm', 580, 'france.png'),
(8, '10/9/2021', '15/12/2021', '6:10:00 am', '6:15:00 pm', 1100, 'france.png'),
(9, '20/3/2021', '8/4/2021', '2:30:00', '12:00:00', 600, 'turky.png'),
(10, '20/5/2021', '7/9/2021', '6:45:00 pm', '1:10:00 pm', 685, 'turky.png'),
(12, '10/3/2021', '19/4/2021', '1:00:00 am', '11:00:00 pm', 950, 'uae.png'),
(13, '10/4/2021', '8/8/2021', '3:30:00', '4:15:00', 575, 'uae.png'),
(14, '11/10/2021', '11/11/2021', '6:10:00 am', '6:15:00 pm', 1150, 'uae.png'),
(15, '20/4/2021', '8/6/2021', '2:30:00 pm', '11:00:00 pm', 620, 'egypt.png'),
(16, '2/5/2021', '7/8/2021', '6:45:00 pm', '1:10:00 pm', 680, 'egypt.png'),
(17, '4/9/2021', '22/12/2021', '4:15:00 am', '1:10:00 pm', 1220, 'egypt.png');

-- --------------------------------------------------------

--
-- Table structure for table `get_car`
--

CREATE TABLE `get_car` (
  `id_u` int(11) NOT NULL,
  `id_c` int(11) NOT NULL,
  `Receiving_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Days` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Time` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `get_car`
--

INSERT INTO `get_car` (`id_u`, `id_c`, `Receiving_date`, `Days`, `Time`) VALUES
(4454, 7, '2021-04-01', '2', '14:08');

-- --------------------------------------------------------

--
-- Table structure for table `get_plane`
--

CREATE TABLE `get_plane` (
  `id_u` int(11) NOT NULL,
  `id_p` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `get_plane`
--

INSERT INTO `get_plane` (`id_u`, `id_p`) VALUES
(4454, 4),
(4454, 3);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idh` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `long_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`name`, `idh`, `price`, `image`, `flag`, `description`, `long_desc`, `area`) VALUES
('Three Corners Fayrouz Plaza', 146, 500, '601c561959ab3.webp', '601c56195999d.png', '<p>Neighbouring the Port Ghalib International Marina, this exclusive resort enjoys amazing views of the Red Sea, perfect for those seeking sun, sea and solitude.Next to the new port of Ghalib, The Three Corners Fayrouz Plaza Beach Resort offers you the most modern comforts and sports and leisure facilities.</p>', '<p>This 5-star hotel in Alexandria offers an outdoor pool, a spa and a gym. It features modern accommodation with views of the sea or city. Free Wi-Fi is available in public areas.</p><p>Air-conditioned rooms are equipped with a minibar and flat-screen satellite TV. Each suite comes with a living room and a dining table. Featuring a bathtub and shower, private bathrooms are stocked with free toiletries. All rooms have a balcony.</p><p>Guests can choose to dine at any of the hotel’s 9 dining outlets, which serve a <strong>variety</strong> of cuisine ranging from local to international. The pool bars are an ideal place for relaxation.</p><p>The hotel is 400 m from Al-Salam Theatre and Stanley Bridge, and is 1.5 km from Sidi Gaber Railway Station. Borg el Arab International Airport is 42 km away. The property offers parking at an extra cost.</p><p>Couples particularly like the location — they rated it <strong>8.8</strong> for a two-person trip.</p><p>We speak your language!</p><p><strong>Tolip Hotel Alexandria has been welcoming &nbsp;guests since 13 Nov 2013</strong></p>', 'Egypt'),
('Five Jumeirah Village ', 147, 1500, '601c5a16cdb8a.webp', '601c5a16cda74.png', '<p>Situated in Dubai, 8 km from Dubai Autodrome, Five Jumeirah Village features accommodation with a restaurant, free private parking, an outdoor swimming pool and a fitness centre. With a bar, the 5-star hotel has air-conditioned rooms with free WiFi, each with a private bathroom.At the hotel, rooms include a wardrobe and a flat-screen TV.</p>', '<p>Situated in Dubai, 8 km from Dubai Autodrome, Five Jumeirah Village features accommodation with a restaurant, free private parking, an outdoor swimming pool and a fitness centre. With a bar, the 5-star hotel has air-conditioned rooms with free WiFi, each with a private bathroom.</p><p>At the hotel, rooms include a wardrobe and a flat-screen TV.</p><p>Five Jumeirah Village offers a continental or buffet breakfast.</p><p>The wellness area at the accommodation is comprised of a hot tub and a sauna. The accommodation also provides a 24-hour front desk, room service and organising tours for guests.</p><p>Mall of the Emirates is 10 km from Five Jumeirah Village, while Burj Al Arab Tower is 14 km from the property. The nearest airport is Dubai International Airport, 32 km from the hotel.</p><p>We speak your language!</p>', 'UAE'),
('Atlantis', 148, 852, '601c604123e8f.webp', '601c604123d97.png', '<p>FIVE Palm Jumeirah Dubai boasts its own private beach as well as 5 outdoor swimming pools, including a 55 m long option, running through the heart of the resort. Guests can enjoy free WiFi throughout the property.The hotel has 470 guest rooms and suites, spread across 16 floors, decorated in a simple yet elegant style with views of the Arabian Gulf.</p>', '<p>FIVE Palm Jumeirah Dubai boasts its own private beach as well as 5 outdoor swimming pools, including a 55 m long option, running through the heart of the resort. Guests can enjoy free WiFi throughout the property.</p><p>The hotel has 470 guest rooms and suites, spread across 16 floors, decorated in a simple yet elegant style with views of the Arabian Gulf.</p><p>The resort has an array of facilities, including dining venues hosted by world-class chefs, a modern spa and a karaoke room at Maiden Shanghai.</p><p>A landmark on the trunk of the iconic Palm Jumeirah, FIVE Palm Jumeirah Dubai is strategically located for convenient access to Dubai’s business districts, as well as the city’s many exciting tourist and entertainment attractions.</p><p>The resort is also accessible from Dubai International Airport (DXB), which is 32.6 km away and Al Maktoum International Airport (DWC), which 42.3 km away. Mall of Emirates is 11.2 km away, while Dubai Mall is 22.7 km from the property. Dubai Parks and Resorts is 34.4 km away.</p><p>Couples particularly like the location — they rated it <strong>8.7</strong> for a two-person trip.</p><p>We speak your language!</p>', 'UAE'),
('Heliopic', 150, 320, '601c62dab8680.png', '601c62dab8594.png', '<p>The Ibis Paris Coeur d\'Orly Airport is located just 300 m from Orly Airport and 8 km from Paris. The hotel offers free WiFi internet access, an on-site restaurant and a 24-hour reception.\r\n\r\nThe guest rooms at Ibis Paris Coeur d\'Orly Airport are simply decorated and include a TV and a work desk. They each have a private bathroom with a shower and a hairdryer.</p>', '<p>The Ibis Paris Coeur d\'Orly Airport is located just 300 m from Orly Airport and 8 km from Paris. The hotel offers free WiFi internet access, an on-site restaurant and a 24-hour reception.\r\n\r\nThe guest rooms at Ibis Paris Coeur d\'Orly Airport are simply decorated and include a TV and a work desk. They each have a private bathroom with a shower and a hairdryer.\r\n\r\nA buffet breakfast available from 04:00 and composed of sweet and savoury dishes such as eggs, fruit salad, yogurts and juices is served every day. Pastries baked on site and fresh French Madeleine cakes are also on offer, as well as a hot beverage and a piece of fruit to take away. The restaurant is open for lunch and dinner and the hotel proposes a luggage storage room and free newspapers.\r\n\r\nThe closest tram stop is Coeur d\'Orly, 190 m from the hotel. It is a 5-minute walk to Terminal 4 via a moving walkway, while the centre of Orly is 2 km away. The property is 24 km from the Château de Versailles and 18 km from the Parc des Princes football stadium.\r\n\r\nCouples particularly like the location — they rated it 9.0 for a two-person trip.\r\n\r\nWe speak your language!</p>', 'Paris'),
('Swissotel', 151, 200, '601c65f3dfafc.webp', '601c65f3df9ef.png', '<p>Having Safe Hotels Executive Level Certificate for 2016 - 2017, Swissotel The Bosphorus Istanbul offers five-star luxury accommodation with its exclusive rooftop pool and award-winning spa. By the outstanding Bosphorus view, this property is within walking distance to Nisantasi where the main luxury shopping area is.Tastefully&nbsp;</p>', '<p>astefully decorated by world-renowned designer Khuan Chew with the touch of Swiss design and warmth of Turkish culture, all units in Swissotel The Bosphorus Istanbul feature state-of-the-art technology and exclusive amenities. Along with free WiFi throughout the property, working desk and seating area are available in all rooms for your comfort. Drinks and refreshments can be found in the minibars. Some rooms feature a walk-in shower while some have a bath tub.</p><p>Swissotel The Bosphorus Istanbul is also a hot spot with its stylish restaurants serving the exclusive tastes of world cuisine. Café Swiss is known especially for its weekend brunches and serves Turkish, Swiss and world cuisines with a healthy touch. Guests can fancy a drink or cocktail and have dinner in 16 ROOF restaurant and bar on the roof top while gazing at beautiful Bosphorus view.</p><p>Decorated with authentic mountain lodge style, Chalet invites you to Swiss tradition accompanied by the fireplace. Les Ambassadeurs Bar allows its guest to savor their drinks while listening to jazz music. Purovel Spa &amp; Sport offers luxurious holistic spa treatments including 14 treatment rooms, fitness centre, indoor and outdoor pools. Guests can chill and enjoy the full range of hotel services including a tennis court.</p><p>Many designer shops, exclusive restaurants, brands and lively bars are within walking distance. Istanbul’s historic area with the Topkapi Palace, Grand Bazaar and Blue Mosque is only a 15-minute drive from Swissotel The Bosphorus. Sabiha Gokcen International Airport is 42 km away. Istanbul Airport is 42.1 km away from Swissotel The Bosphorus.</p>', 'Turkey'),
('Riu', 153, 880, '601c69b112627.webp', '601c69b112242.png', '<p>Located 160 metres’ walk from the beach, this Miami Beach hotel features an outdoor swimming pool and sun terrace. The hotel is 9 minutes’ drive from the shops and restaurants of Lincoln Road and offers free WiFi to guests. A flat-screen TV, ironing facilities, and coffee-making facilities are available in Hotel Riu Plaza Miami Beach&nbsp;</p>', '<p>Riu Sri Lanka All Inclusive features themed restaurants and offers 24-hour services. Featuring free WiFi throughout the property, it offers accommodation in Bentota. Free private parking is available on site.</p><p>Each room is fitted with a flat-screen TV. Certain rooms have a seating area for your convenience. You will find a kettle in the room. Every room includes a private bathroom. For your comfort, you will find free toiletries and a hairdryer.</p><p>There is a 24-hour front desk at the property.</p><p>Lunuganga is 11 km from Riu Sri Lanka All Inclusive, while Bentota Lake is 13 km from the property.</p><p>Couples particularly like the location — they rated it <strong>9.1</strong> for a two-person trip.</p>', 'Spain'),
('Trump International', 154, 875, '601c6d6a141ce.webp', '601c6d6a13ce3.png', 'This beach front resort, situated on the beaches of Sunny Isles, is 10 minutes\' drive to Aventura Mall. It boasts private beach access, a luxury spa, a gourmet restaurant, and rooms with views.Rooms at Trump International Beach Resort feature a private balcony and 42-inch flat-screen TV. ', 'This beach front resort, situated on the beaches of Sunny Isles, is 10 minutes\' drive to Aventura Mall. It boasts private beach access, a luxury spa, a gourmet restaurant, and rooms with views.  Rooms at Trump International Beach Resort feature a private balcony and 42-inch flat-screen TV. Every room includes a microwave, seating area, and marble bathroom with bathrobes.  Trump Beach Resort offers both a lap pool and a pool with hot tubs and waterfalls. Aquanox Spa provides massages and body and beauty treatments. Planet Kids is an onsite program for children that offers a variety of educational activities.  Guests can enjoy gourmet dining at Neomi\'s which serves contemporary American cuisine and happy hour specials. Fresh sushi is served at the Sushi Lounge and Restaurant.  International Trump Beach Resort is a 10-minute drive from Gulfstream Park Race Track and a 30-minute drive from South Beach. The property is a 5-minute drive from Haulover Marina, where guests can enjoy water sport activities and charter fishing trips.  This is our guests\' favourite part of Sunny Isles Beach, according to independent reviews.', 'USA'),
('MOXY', 155, 574, '601c7068efd3b.webp', '601c7068ef962.png', '<p>Marino Beach Colombo has a restaurant, outdoor swimming pool, a fitness centre and bar in Colombo. 2.4 km from Galle Face Beach and 1.7 km from U.S. Embassy, the property offers a garden and a terrace. The accommodation features a 24-hour front desk, room service and currency exchange for guests.</p>', '<p>Marino Beach Colombo has a restaurant, outdoor swimming pool, a fitness centre and bar in Colombo. 2.4 km from Galle Face Beach and 1.7 km from U.S. Embassy, the property offers a garden and a terrace. The accommodation features a 24-hour front desk, room service and currency exchange for guests.</p><p>The rooms are fitted with air conditioning, a flat-screen TV with cable channels, a kettle, a bidet, a hairdryer and a desk. Featuring a private bathroom with a shower and free toiletries, rooms at the hotel also boast free WiFi. The units have a wardrobe.</p><p>Guests at Marino Beach Colombo can enjoy a continental breakfast.</p><p>The accommodation offers a hot tub.</p><p>Khan Clock Tower is 5 km from Marino Beach Colombo, while R Premadasa Stadium is 7 km from the property. The nearest airport is Ratmalana International Airport, 9 km from the hotel.</p><p>Couples particularly like the location — they rated it <strong>8.9</strong> for a two-person trip.</p><p>We speak your language!</p>', 'USA'),
('Tolip', 159, 350, '608afd52c642c.webp', '608afd52c5a14.png', '<p>This 5-star hotel in Alexandria offers an outdoor pool, a spa and a gym. It features modern accommodation with views of the sea or city. Free Wi-Fi is available in public areas, Air-conditioned rooms are equipped with a minibar and flat-screen satellite TV. Each suite comes with a living room and a dining table. Featuring a bathtub and</p>', '<p>This 5-star hotel in Alexandria offers an outdoor pool, a spa and a gym. It features modern accommodation with views of the sea or city. Free Wi-Fi is available in public areas.</p><p>Air-conditioned rooms are equipped with a minibar and flat-screen satellite TV. Each suite comes with a living room and a dining table. Featuring a bathtub and shower, private bathrooms are stocked with free toiletries. All rooms have a balcony.</p><p>Guests can choose to dine at any of the hotel’s 9 dining outlets, which serve a variety of cuisine ranging from local to international. The pool bars are an ideal place for relaxation.</p><p>The hotel is 400 m from Al-Salam Theatre and Stanley Bridge, and is 1.5 km from Sidi Gaber Railway Station. Borg el Arab International Airport is 42 km away. The property offers parking at an extra cost.</p><p>Couples particularly like the location — they rated it 8.8 for a two-person trip.</p><p>We speak your language!</p><p>Tolip Hotel Alexandria has been welcoming &nbsp;guests since 13 Nov 2013</p><p>&nbsp;</p>', 'Eygpt');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_description`
--

CREATE TABLE `hotel_description` (
  `id_i` int(11) NOT NULL,
  `id_h1` int(11) NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hotel_description`
--

INSERT INTO `hotel_description` (`id_i`, `id_h1`, `images`) VALUES
(112, 146, '601c566543f69.webp'),
(113, 146, '601c583d69ed4.webp'),
(114, 146, '601c5853154dd.webp'),
(115, 146, '601c5860cd450.webp'),
(116, 146, '601c586b9dea6.webp'),
(117, 146, '601c587ba8f50.webp'),
(118, 146, '601c58889fa9e.webp'),
(119, 147, '601c5a25ad1a0.webp'),
(120, 147, '601c5a317b5b4.webp'),
(121, 147, '601c5a3d23750.webp'),
(122, 147, '601c5a4c45c74.webp'),
(123, 147, '601c5a5d1e84d.webp'),
(124, 147, '601c5d945da44.webp'),
(125, 147, '601c5db439baa.webp'),
(126, 148, '601c60501c8ee.webp'),
(127, 148, '601c605d91619.webp'),
(128, 148, '601c606958608.webp'),
(129, 148, '601c609b9fb5a.webp'),
(130, 148, '601c60a61b955.webp'),
(131, 148, '601c60c34e41a.webp'),
(132, 148, '601c612ee2152.webp'),
(133, 150, '601c64c1214ef.webp'),
(134, 150, '601c64cc39c84.webp'),
(135, 150, '601c64d7671ce.webp'),
(136, 150, '601c64e23ef42.webp'),
(137, 150, '601c6507960a8.webp'),
(138, 150, '601c651da010d.webp'),
(139, 150, '601c652c3f161.webp'),
(140, 151, '601c66ead7200.webp'),
(141, 151, '601c67190ff1f.webp'),
(142, 151, '601c6729b94e4.webp'),
(143, 151, '601c6739ac9c5.webp'),
(144, 151, '601c674bea387.webp'),
(145, 151, '601c6763c4d53.webp'),
(146, 151, '601c67aba9a5e.webp'),
(147, 153, '601c6a3e0f0b1.webp'),
(148, 153, '601c6a52e77e2.webp'),
(149, 153, '601c6a6572077.webp'),
(150, 153, '601c6a7493a7b.webp'),
(151, 153, '601c6a84a68f6.webp'),
(152, 153, '601c6a953f5de.webp'),
(153, 153, '601c6ab5ba178.webp'),
(154, 154, '601c6e617b3db.webp'),
(155, 154, '601c6e79ba699.webp'),
(156, 154, '601c6e91407dd.webp'),
(157, 154, '601c6ea17094d.webp'),
(158, 154, '601c6eb2eb186.webp'),
(159, 154, '601c6ec2cdbf3.webp'),
(160, 154, '601c6ed6b2095.webp'),
(161, 155, '601c7186c38b5.webp'),
(162, 155, '601c7194bbf09.webp'),
(163, 155, '601c71a6aa1ff.webp'),
(164, 155, '601c71ba68fa9.webp'),
(165, 155, '601c71ccbd044.webp'),
(166, 155, '601c71e7724ba.webp'),
(167, 155, '601c71fa23573.webp'),
(168, 159, '608afdc319a32.webp'),
(169, 159, '608afdd83d585.webp'),
(170, 159, '608afe32a7a36.webp'),
(171, 159, '608afe53e8658.webp'),
(172, 159, '608afe84f388a.webp'),
(173, 159, '608afea224863.webp'),
(174, 159, '608afeea1c119.webp');

-- --------------------------------------------------------

--
-- Table structure for table `user_u`
--

CREATE TABLE `user_u` (
  `id_u` int(11) NOT NULL,
  `Fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passport` int(11) NOT NULL,
  `M_card` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_u`
--

INSERT INTO `user_u` (`id_u`, `Fname`, `Lname`, `Email`, `password`, `passport`, `M_card`, `image`) VALUES
(0, 'Libby', 'Whitaker', 'bije@mailinator.com', '$2y$10$o/ZfhbiQnrUJOyhRizW0mubibyQgeJkt1iBe3Xdk2wXVmlO.GCIfm', 0, 57086, '608765d10ad39.'),
(4454, 'Demetria', 'Waters', 'noor.braik4@gmail.com', '$2y$10$p8t/7al050UUmMno0Y9s2eGc4zGvUIgIzw3xYuugjNnBjb9hE0wRm', 54, 66765, '608b0e3e6d831.jpg'),
(5865, 'Walker', 'Sanford', 'goqatoxa@mailinator.com', '$2y$10$PEjJEV75i35E0U091DDpJ.ItpVUQmNn1OG9setyN0KD.eH2ZgWpUK', 6969, 42876, '608b11fe0077a.jpg'),
(9589, 'Quinn', 'Arnold', 'qopivotig@mailinator.com', '$2y$10$7MQAIrz55GVNCfapH/mE7uqkereLI51KapEUWEukCnevlS4q.3lhm', 0, 59980, '60876928055ec.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id_B`);

--
-- Indexes for table `book_hotel`
--
ALTER TABLE `book_hotel`
  ADD KEY `id_h` (`id_h`),
  ADD KEY `book_hotel_ibfk_2` (`id_u`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`idc`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD KEY `id_u` (`id_u`),
  ADD KEY `comments_ibfk_2` (`id_B`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`idf`);

--
-- Indexes for table `get_car`
--
ALTER TABLE `get_car`
  ADD KEY `id_u` (`id_u`),
  ADD KEY `id_c` (`id_c`);

--
-- Indexes for table `get_plane`
--
ALTER TABLE `get_plane`
  ADD KEY `get_plane_ibfk_1` (`id_u`),
  ADD KEY `get_plane_ibfk_2` (`id_p`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`idh`);

--
-- Indexes for table `hotel_description`
--
ALTER TABLE `hotel_description`
  ADD PRIMARY KEY (`id_i`),
  ADD KEY `id_h1` (`id_h1`);

--
-- Indexes for table `user_u`
--
ALTER TABLE `user_u`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id_B` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `idc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `idf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `idh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `hotel_description`
--
ALTER TABLE `hotel_description`
  MODIFY `id_i` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_hotel`
--
ALTER TABLE `book_hotel`
  ADD CONSTRAINT `book_hotel_ibfk_1` FOREIGN KEY (`id_h`) REFERENCES `hotels` (`idh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_hotel_ibfk_2` FOREIGN KEY (`id_u`) REFERENCES `user_u` (`id_u`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `user_u` (`id_u`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_B`) REFERENCES `blogs` (`id_B`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `get_car`
--
ALTER TABLE `get_car`
  ADD CONSTRAINT `get_car_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `user_u` (`id_u`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `get_car_ibfk_2` FOREIGN KEY (`id_c`) REFERENCES `cars` (`idc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `get_plane`
--
ALTER TABLE `get_plane`
  ADD CONSTRAINT `get_plane_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `user_u` (`id_u`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `get_plane_ibfk_2` FOREIGN KEY (`id_p`) REFERENCES `flight` (`idf`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hotel_description`
--
ALTER TABLE `hotel_description`
  ADD CONSTRAINT `hotel_description_ibfk_1` FOREIGN KEY (`id_h1`) REFERENCES `hotels` (`idh`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
