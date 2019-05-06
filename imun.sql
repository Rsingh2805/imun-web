-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 02:35 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imun`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `conference_location` varchar(10) NOT NULL,
  `full_name` varchar(60) NOT NULL,
  `sex` varchar(10) NOT NULL DEFAULT 'M',
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `residence_country` varchar(50) NOT NULL,
  `enrolled_as` varchar(30) NOT NULL,
  `field_of_study` varchar(100) NOT NULL,
  `univ_name` varchar(200) NOT NULL,
  `food_preference` varchar(30) NOT NULL,
  `tshirt_size` varchar(20) NOT NULL,
  `funded_by` varchar(30) NOT NULL,
  `known_from` varchar(200) NOT NULL,
  `prev_experience` text NOT NULL,
  `referral_code` varchar(10) NOT NULL,
  `motivation_letter` text NOT NULL,
  `status` varchar(30) DEFAULT 'PEN',
  `submission_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `promo` varchar(200) NOT NULL,
  `payment` varchar(200) NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `conference_location`, `full_name`, `sex`, `dob`, `email`, `nationality`, `residence_country`, `enrolled_as`, `field_of_study`, `univ_name`, `food_preference`, `tshirt_size`, `funded_by`, `known_from`, `prev_experience`, `referral_code`, `motivation_letter`, `status`, `submission_time`, `promo`, `payment`) VALUES
(49, 'China', 'vaibhav bhansari', 'Male', '2019-05-01', 'vbhansari@gmail.com', 'India', 'India', 'Graduate', 'COmputer ENg', 'sv', 'Veg', 'small', 'MYSELF', 'g', '2', 'y', 'hvjhvjh', 'ACCEPTED', '2019-05-05 06:50:26', 'nbbb', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `posted_by` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `content_1` varchar(9000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content_2` varchar(9000) NOT NULL,
  `content_3` varchar(9000) NOT NULL,
  `content_4` varchar(2000) NOT NULL,
  `content_5` varchar(9000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `subject`, `posted_by`, `date`, `content_1`, `content_2`, `content_3`, `content_4`, `content_5`) VALUES
(1, '1.png', 'Quality vs Quantity of delegates!\r\nWhat matters the most in a MUN?', 'Admin', 'Dec 12 2018', 'MUN or Model United Nations is typically a platform where students role-play as delegates to the United Nations in a simulated environment, much similar to the UN committees. This activity takes place at MUN conferences, of which International Model United Nations (IMUN) is a brilliant example. Much like the idea behind conducting a MUN, IMUN intends to bring forth the leaders and diplomats lying dormant inside the students. Every year, thousands of students all over the world participate in various MUNs to display their mettle in negotiations and consensus-building.', 'In a largely globalized world that we live today, it becomes imperative that we build positive relations with people belonging to different cultures from a multitude of geographical backgrounds. This not only nurtures our knowledge but encourages harmony in a world which is otherwise, fraught with grave mishappenings. It is only through building productive and positive relationships with other countries can we successfully curb global issues of terrorism, climate change, and a multitude of global crimes taking place over the world. And, it is none but the youth of today who are the torch-bearers to a better world. IMUN prepares a spectacular platform for such youth to display their concerns and discuss and debate on issues so that they can take a substantial part in making the world a better place to live in.', 'How IMUN aims to assist the youth with this platform is by allowing them to interact with fellow youths from various parts of the world. This helps them build relationships with people from places where they would’ve never thought of otherwise. This is an amazing experience for the young minds to nurture growth and help them open up to newer, more interesting environments. As we know that IMUN is a simulated environment of the UN, it is only but natural that we make sure we have the best delegates on board. And, when we speak about quality, it will always win over quantity. If we look at any good International MUN conference, we will notice one thing which is common to all of them and that is, that there aren’t too many delegates in one conference. There are just enough from different parts of the world to conduct quality discussions and debates.', '', ''),
(2, '2.jpg', 'IMUN: Where Your Voice Can Change the World', 'Admin', 'Nov 15 2018', 'International Model United Nations (IMUN) has taken a commendable step in providing a platform to the young generation to express their thoughts about the most contentious issues facing this planet. It is the youth who are the drivers of the economy, polity, governance, society, culture, and administration of a nation. In today’s date, when the world is facing grave issues like terrorism on a large scale and when climate change has reached unprecedented levels, it becomes imperative to give a voice to the young generation to come forth and take appropriate action. ', 'If we really want to see the world change for the better, we have to empower the nations’ youth. They have the potential, strength, and will to make this world a better place to live in. Otherwise, the youth, which comprises the most important strength of a nation will become its liability. In order to prevent such a situation, nations should do whatever they can in their capacity to empower their youth. Various nations should join hands to come together for this purpose. It is in this interest that IMUN has chosen to be an echo of the voices of the youth to change the world. ', 'As M. K. Gandhi quoted, “Be the change you want to see in the world”, the importance of the youth’s actions cannot be emphasized more. A platform like the IMUN does not only offer them the opportunity to discuss and debate about various issues facing the world today but also give them a new perspective of understanding the global problems. The opinions of people from various parts of the world are deemed to vary and when they are expressed and debated in one platform, it becomes a treasure chest of knowledge and wisdom. ', 'An experience offered by the IMUN would enable the delegates to achieve a new level of academic understanding. Besides building long-standing friendships with people from all around the globe, it also helps in expanding their network. When this happens, the youth of a nation learn to solve problems by joining hands together with other nations. At a time when the discussions about the United Nations Sustainable Development Goals (SDGs) 2030 Agenda is at its peak, nations are required to take suitable measures towards these goals. And the time cannot be riper than now for the youth to take charge and lead in achieving a more sustainable world by meeting the SDGs. ', 'IMUN enables the youth to try and understand the differences around them so they can find the commonalities that exist within them. This is the very essence of diplomacy which forms an important pillar of international relations. A better understanding of international relations would enable the youth to combat the fear and hate that the world faces today. Besides, it helps them in reevaluating the pillars and institutions of the contemporary international community. It develops skills of cultural competence which plays a significant role in establishing mutual trusts with the diplomats (delegates) of other nations. '),
(3, '3.jpg', 'Le Mode?le des Nations Unies \r\nou? Les Jeunes Se Pre?sentent', 'Admin', 'Oct 7 2018', 'Ce matin-là, au Bangkok Palace Hôtel, le hall semblait occupé par l’arrivée de délégués internationaux du Modèle des Nations Unies venus des pays différents. Beaucoup de délégués étaient arrivés à Bangkok la veille et avaient séjourné dans un autre hôtel avant de s’inscrire le 1er juin 2018. L’atmosphère tamisée et chaleureuse de Bangkok n’a pas freiné l’enthousiasme des participants et le comité a commencé l’événement prévu ce jour-là. . Alors, quel est le Modèle des Nations Unies ou communément appelé MNU? Peut-être, certains d’entre vous savent déjà ce que c’est MNU, peut-être que vous connaissez seulement la longueur de MNU, ou vous connaissez juste MNU de cet article? Ben, MNU est un endroit pour les jeunes intéressés par la formation des compétences diplomatiques et l’augmentation des connaissances sur les relations internationales, en particulier sur les questions traitées par les Nations Unies. Il y a plusieurs conseils des Nations Unies qui se concentrent sur la discussion principale et avec les différents membres des états. À cette occasion, le Modèle des Nations Unies International, organisé à Bangkok, en Thaïlande, du 1er au 3 juin 2018, offre des opportunités aux jeunes du monde entier qui souhaitent développer leur diplomatie tout en renforçant leurs relations avec les étrangers. Le Modèle des Nations Unies International (IMUN) 2018 est un pionnier pour des événements similaires qui auront lieu l’année prochaine et au-delà. Des centaines de participants des pays divers tels que la Thaïlande, les Philippines, l’Indonésie, le Cambodge, la Malaisie, la Turquie, l’Inde et l’Écosse. ', 'Si nous regardons le but de MNU, bien su?r ce genre d’e?ve?nement est tre?s bon pour vous qui e?tes inte?resse? a? perfectionner la capacite? de parler et de ne?gocier. Mais MNU offre-t-il vraiment des avantages comme ses objectifs? Selon Alfazal, un lyce?en qui est l’un des de?le?gue?s indone?siens, International Model United Nations 2018 a donne? une grande expe?rience dans sa vie: «Je me fais de bons amis me?me s’ils ont l’a?ge plus e?leve? que moi mais ils veulent e?tre amis avec moi et ils veulent partager leurs expe?riences et leurs connaissances avec moi. Je rec?ois aussi beaucoup de connaissances de tous les de?le?gue?s IMUN 2018 la? », dit cet e?tudiant de Pontianak. Il a e?galement ajoute?, en participant le Mode?le des Nations Unies International 2018, nous pouvons rechercher des connaissances et une expe?rience extraordinaire. Enoutre, les certificats obtenus peuvent e?galement e?tre utilise?s pour s’inscrire a? l’obtention du cheminement universitaire. En plus de la de?le?gation d’Indone?sie, il y a aussi une des nombreuses de?le?gations des Philippines qui veut partager l’impression qu’elle a eu apre?s IMUN 2018, elle s’appelle Janine. Selon Janine, a? la suite d’IMUN 2018 qui est son quatrie?me Mode?le des Nations Unies, elle a eu l’opportunite? de rencontrer des cultures diffe?rentes a? travers ses amis de la de?le?gation en Thai?lande. « Ses destinations touristiques incroyables, ses habitants sympathiques et sa bonne nourriture m’ont permis de vivre une expe?rience formidable a? un autre niveau », elle dit. Pour elle, e?tre faite partie du Mode?le des Nations Unies International cette anne?e est une expe?rience incroyable. « Vous pouvez rencontrer des gens qui ont des ide?es diffe?rentes », ajoute? la fille qui aime chanter. Alfazal et Janine, les deux de?le?gue?s des pays diffe?rents, mais ils peuvent rassembler leurs ide?es brillantes au Conseil des droits de l’homme des Nations Unies. Bien que ce soit le premier MNU d’Alfazal et c’est le quatrie?me MNU de Janine, mais tous les deux ont une expe?rience formidable en rejoignant International Model United Nations 2018. ', 'Le Mode?le des Nations Unies offre de nombreux avantages aux jeunes pour continuer a? perfectionner leurs compe?tences en matie?re de diplomatie. A? cette occasion, le Mode?le des Nations Unies International 2018 facilite les jeunes de cela. Cependant, toute activite? doit avoir des avantages et des inconve?nients. « J’espe?re que le Mode?le des Nations Unies International 2018 devrait ame?liorer la qualite? pour e?tre meilleur», Alfazal dit en re?ponse aux inconve?nients de cet e?ve?nement. « Mon conseil, IMUN devrait fournir des facilite?s suffisantes pour tous les participants pendant l’e?ve?nement, tels que les cahiers. C’est pour maximiser les facilite?s», ajoute-il. En concernant les facilite?s, avec un maximum prix de 360 USD, les participants be?ne?ficient les facilite?s comple?tes allant de l’assistance ae?roportuaire, l’ho?tel de 5 e?toiles pendant 3 nuits, 3 fois repas par jour, la visite de la ville et billet d’entre?e pour 3 destinations touristiques a? Bangkok, tote bag et t-shirt. C’est juste que, pour certains participants regrettent la marchandise uniquement sous la forme de sacs et de t-shirt. Une autre lacune dans le domaine technique est le retard de de?marrer les activite?s. Selon Janine, l’un des de?fauts de cet e?ve?nement est quand il a change? le lieu d’e?ve?nement d’origine a? l’Ho?tel Barkeley a? Bangkok Palace Ho?tel qui est estime? e?tre moins cher. Le comite? n’e?tait pas tre?s bien informe? de ce sujet, ce qui a de?c?u la plupart des participants. Ils ont e?te? de?c?us d’avoir paye? dans l’espoir que le lieu de l’e?ve?nement e?tait a? l’ho?tel Barkeley, mais s’est ave?re? e?tre un ho?tel moins cher sans leur consentement. Alors que tous les frais de?ja? paye?s ne peuvent pas e?tre rembourse?s. “Ils devraient accepter plus de pre?sident pour les comite?s. Je ne suis pas satisfait honne?tement que notre pre?sidente ait adopte? sa position de fac?on biaise?e. De plus, certaines proce?dures parlementaires n’ont pas e?te? suivies », Janine dit. « Puis, a? propos de la nourriture, le comite? devrait pre?parer des repas autres que de la nourriture thai?landaise puisqu’il est un e?ve?nement international ou? tout le monde n’est pas compatible avec la nourriture thai?landaise. Mais d’ailleurs, IMUN est bien pre?pare? “, ajoute-elle. ', 'Le Mode?le des Nations Unies International 2018 s’est de?roule? avec succe?s, me?me si quelques inconve?nients doivent e?tre ame?liore?s lors du prochain e?ve?nement. Les attentes des participants qui l’ont participe? sont une forme de pre?occupation, car il y a toujours l’esprit des jeunes pour continuer a? perfectionner leurs compe?tences dans cet e?ve?nement diplomatique au niveau international. Soit les participants nouvellement participe?s ou ceux qui ont de?ja? participe? des dizaines de fois, il n’y a pas de mal a? participer le Mode?le des Nations Unies, car c’est tout ce que vous pouvez faire pour chasser l’opportunite? qui existe devant vous. (Laras)', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `subject` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image`, `subject`, `content`, `url`) VALUES
(1, '1.jpg', 'Australia In Vietnam', 'Australian Deputy Ambassador, Rebecca Bryant, inspired young participants from around the world at the opening ceremony for International Model United Nations (IMUN) in Hanoi late February. IMUN is an amazing forum for young people to learn about diplomacy, international relations and the United Nations and importantly to share ideas with a diverse group of participants', 'https://www.facebook.com/AustralianEmbassyVietnam/photos/a.540749609273228/2558310880850414/?type=3&theater'),
(2, '2.jpg', 'Embassy of Pakistan, Ha Noi, Viet Nam', 'Deputy Ambassador of Pakistan Mr. Qamar Abbas Khokhar interacted with the young and talented participants of the International Model United Nations Conference held at the British University, Viet Nam. The young people belonging to various countries were extremely intelligent, enthusiastic and optimistic; meeting them was truly inspirational.', 'https://www.facebook.com/PakistaninHanoi/posts/1945957982197618'),
(3, '3.jpg', 'Diễn Đàn Quốc Tế Mô Phỏng Liên Hợp Quốc sẽ được tổ chức tại Đại Học Anh Quốc Việt Nam vào tháng 2/2019', 'Diễn Đàn Quốc tế Mô Phỏng Liên Hợp Quốc (International Model United Nations – International MUN) sẽ chính thức diễn ra từ ngày 21/2 đến 23/2 tại Hà Nội với sự tham gia của đông đảo bạn trẻ tới từ Việt Nam và quốc tế. Đây là cơ hội để bạn trẻ thể hiện sự quan tâm của mình và cùng nhau thảo luận về các vấn đề xã hội.', 'http://kenh14.vn/dien-dan-quoc-te-mo-phong-lien-hop-quoc-se-duoc-to-chuc-tai-dai-hoc-anh-quoc-viet-nam-vao-thang-2-2019-20190201101131796.chn'),
(4, '4.jpg', 'Xavier Ateneo International Studies seniors join IMUN’s first session in Thailand', 'From left to right: Xavier Ateneo International Studies seniors Yzander Gillegao, Clarissa Bautista, Francel Joy Gonzales, Angel Lica Peggy, Khezia Llutch Paz, Header May Carabanes, Abdul Rashid Balindong, and Nata Shaquil Manabilang. Supplied photo.', 'http://www.xu.edu.ph/xavier-news/140-2018-2019/3467-xavier-ateneo-international-studies-seniors-join-imun-s-first-session-in-thailand?fbclid=IwAR2vgX_pGtf0bNcnM_bRBwCuniKXE6hMnOzQgovMECUSgLYEG2nmtFYQDYo'),
(5, '5.jpg', '3 Silliman Students Earn Distinctions at International Model UN in Bangkok', 'Being adjudged Most Outstanding Delegate, having sponsored and passed a resolution on the environment, and earning a fellowship are the distinctions that the delegate from Silliman University bagged during the International Model United Nations (IMUN) held in Bangkok, Thailand last June 1 to 3.', 'http://www.xu.edu.ph/xavier-news/140-2018-2019/3467-xavier-ateneo-international-studies-seniors-join-imun-s-first-session-in-thailand?fbclid=IwAR2vgX_pGtf0bNcnM_bRBwCuniKXE6hMnOzQgovMECUSgLYEG2nmtFYQDYo'),
(6, '6.jpg', 'Ambasadorja Elvana Shala shpalosi historinë e Kosovës në IMUN', 'Nën melodinë e himnit të Kosovës dhe në mesin e mbi 200 të pranishmëve, ambasadorja e Vullnetit të Mirë për Kosovën, Elvana Shala, e përfaqësoi Kosovën në konferencën “International Model of United Nations”, në Tajlandë.', 'http://albfem.com/2018/06/04/ambasadorja-elvana-shala-shpalosi-historine-e-kosoves-ne-imun/?fbclid=IwAR3Xe_qL9-fHf-CWpXLUEddFXScoz6a1G8Hrn23uQjIwvg6TzzRSYHkMpQw');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`id`, `email`) VALUES
(5, ''),
(2, 'damn@gmail.com'),
(1, 'rsingh@cs.iitr.ac.in'),
(71, 'vbhansari@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'root@gmail.com', '000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
