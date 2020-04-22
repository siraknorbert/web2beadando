-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3308
-- Létrehozás ideje: 2020. Ápr 21. 21:51
-- Kiszolgáló verziója: 8.0.18
-- PHP verzió: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `web2beadando`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `content` varchar(1200) NOT NULL,
  `poster` varchar(64) NOT NULL,
  `topic` varchar(64) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `likes` int(10) NOT NULL DEFAULT '0',
  `dislikes` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=119 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- A tábla adatainak kiíratása `posts`
--

INSERT INTO `posts` (`id`, `content`, `poster`, `topic`, `date`, `likes`, `dislikes`) VALUES
(101, 'Aliquam erat volutpat. Nunc sodales vulputate feugiat. Curabitur pharetra dolor eros, id rhoncus mi pharetra fringilla. Cras condimentum risus at ultrices ornare. Morbi at iaculis velit. Nulla tincidunt nibh ut dui laoreet, at aliquet mi porttitor. Phasellus consequat mi aliquet, tempor sem in, auctor lectus. Donec dapibus nec felis sollicitudin facilisis. Fusce luctus, lectus ut aliquet scelerisque, purus nisl hendrerit neque, in gravida enim nisi sed justo.', 'Karesz', 'Topic of a random member', '2020-04-21 20:41:41', 0, 0),
(100, 'Aliquam erat volutpat. Nunc sodales vulputate feugiat. Curabitur pharetra dolor eros, id rhoncus mi pharetra fringilla. Cras condimentum risus at ultrices ornare. Morbi at iaculis velit. Nulla tincidunt nibh ut dui laoreet, at aliquet mi porttitor. Phasellus consequat mi aliquet, tempor sem in, auctor lectus. Donec dapibus nec felis sollicitudin facilisis. Fusce luctus, lectus ut aliquet scelerisque, purus nisl hendrerit neque, in gravida enim nisi sed justo.', 'Karesz', 'What is up with that search for it stuff anyways', '2020-04-21 20:41:20', 0, 1),
(99, 'Nunc tristique enim lorem, non gravida diam facilisis quis. In congue nunc non nulla vestibulum consequat. Nunc commodo elit orci, sed facilisis justo accumsan ultricies. Nunc ex metus, placerat at velit non, bibendum venenatis mi. Donec mattis risus sed est consectetur, ut vehicula sem euismod. Nullam felis velit, ultricies quis tellus eget, tempus mattis enim. Aliquam elit ligula, pretium sed ullamcorper sit amet, vulputate eget erat. Fusce in nulla sed augue placerat finibus non eget turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse tristique tortor lectus, at ornare dolor pulvinar at.', 'member', 'Topic of a random member', '2020-04-21 20:39:07', 0, 3),
(98, 'Cras search for this nec dui sed lorem iaculis semper. Duis in quam dignissim, faucibus felis ut, convallis ligula. Donec id massa enim.', 'member', 'This is the main topic on the forum!', '2020-04-21 20:25:27', 0, 0),
(95, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum congue diam ac quam malesuada, nec facilisis ipsum commodo. Morbi id est dictum, interdum elit quis, commodo nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce nunc massa, consequat at mauris sit amet, dictum efficitur mi. Cras nec dui sed lorem iaculis semper. Duis in quam dignissim, faucibus felis ut, convallis ligula. Donec id massa enim.', 'admin', 'This is the main topic on the forum!', '2020-04-21 20:05:38', 8, 1),
(96, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum congue diam ac quam malesuada, nec facilisis ipsum commodo. Morbi id est dictum, interdum elit quis, commodo nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce nunc massa, consequat at mauris sit amet, dictum efficitur mi. Cras nec dui sed lorem iaculis semper. Duis in quam dignissim, faucibus felis ut, convallis ligula. Donec id massa enim.', 'admin', 'This is the main topic on the forum!', '2020-04-21 20:05:45', 2, 0),
(97, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum congue diam ac quam malesuada, nec facilisis ipsum commodo. Morbi id est dictum, interdum elit quis, commodo nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce nunc massa, consequat at mauris sit amet, dictum efficitur mi. Cras nec dui sed lorem iaculis semper. Duis in quam dignissim, faucibus felis ut, convallis ligula. Donec id massa enim.', 'member', 'This is the main topic on the forum!', '2020-04-21 20:06:32', 0, 2),
(102, 'Aliquam erat volutpat. Nunc sodales vulputate feugiat. Curabitur pharetra dolor eros, id rhoncus mi pharetra fringilla. Cras condimentum risus at ultrices ornare. Morbi at iaculis velit. Nulla tincidunt nibh ut dui laoreet, at aliquet mi porttitor. Phasellus consequat mi aliquet, tempor sem in, auctor lectus. Donec dapibus nec felis sollicitudin facilisis. Fusce luctus, lectus ut aliquet scelerisque, purus nisl hendrerit neque, in gravida enim nisi sed justo.', 'Karesz', 'This is the main topic on the forum!', '2020-04-21 20:41:51', 0, 0),
(103, 'Maecenas mollis consectetur urna, vel feugiat lectus. Donec tristique vel ligula a auctor. Vivamus semper, est et sodales gravida, libero elit efficitur nulla, quis hendrerit metus massa sit amet lorem. In gravida elit non mattis suscipit. Aliquam accumsan eu purus non mattis. Duis efficitur ipsum sapien, eget ornare magna scelerisque a. Curabitur ac nunc mollis, euismod sem at, tempor leo. Suspendisse dolor elit, dapibus sed gravida facilisis, accumsan eget risus. Praesent vestibulum libero in ante elementum blandit. Ut eget risus ac enim accumsan pulvinar. Curabitur et lectus in mi maximus auctor id quis dui. Etiam molestie vestibulum leo, nec euismod ligula bibendum non. Ut cursus, orci a feugiat lobortis, nisi lectus consectetur massa, in egestas dui orci ut nisi. Quisque sit amet nisi quis lectus malesuada lacinia non in nunc. Nunc sit amet hendrerit leo, id tincidunt nunc. Curabitur pharetra lacinia massa, eu luctus est.', 'Jacquelinne', 'Other topics are crap, so search for this instead', '2020-04-21 20:44:20', 1, 0),
(104, 'Maecenas search for this mollis consectetur urna, vel feugiat lectus. Donec tristique vel ligula a auctor. Vivamus semper, est et sodales gravida, libero elit efficitur nulla, quis hendrerit metus massa sit amet lorem. In gravida elit non mattis suscipit. Aliquam accumsan eu purus non mattis. Duis efficitur ipsum sapien, eget ornare magna scelerisque a. Curabitur ac nunc mollis, euismod sem at, tempor leo. Suspendisse dolor elit, dapibus sed gravida facilisis, accumsan eget risus. Praesent vestibulum libero in ante elementum blandit. Ut eget risus ac enim accumsan pulvinar. Curabitur et lectus in mi maximus auctor id quis dui. Etiam molestie vestibulum leo, nec euismod ligula bibendum non. Ut cursus, orci a feugiat lobortis, nisi lectus consectetur massa, in egestas dui orci ut nisi. Quisque sit amet nisi quis lectus malesuada lacinia non in nunc. Nunc sit amet hendrerit leo, id tincidunt nunc. Curabitur pharetra lacinia massa, eu luctus est.', 'Jacquelinne', 'This is the main topic on the forum!', '2020-04-21 20:44:40', 0, 0),
(105, 'Maecenas mollis consectetur urna, vel feugiat lectus. Donec tristique vel ligula a auctor. Vivamus semper, est et sodales gravida, libero elit efficitur nulla, quis hendrerit metus massa sit amet lorem. In gravida elit non mattis suscipit. Aliquam accumsan eu purus non mattis. Duis efficitur ipsum sapien, eget ornare magna scelerisque a. Curabitur ac nunc mollis, euismod sem at, tempor leo. Suspendisse dolor elit, dapibus sed gravida facilisis, accumsan eget risus. Praesent vestibulum libero in ante elementum blandit. Ut eget risus ac enim accumsan pulvinar. Curabitur et lectus in mi maximus auctor id quis dui. Etiam molestie vestibulum leo, nec euismod ligula bibendum non. Ut cursus, orci a feugiat lobortis, nisi lectus consectetur massa, in egestas dui orci ut nisi. Quisque sit amet nisi quis lectus malesuada lacinia non in nunc. Nunc sit amet hendrerit leo, id tincidunt nunc. Curabitur pharetra lacinia massa, eu luctus est.', 'Jacquelinne', 'Topic of a random member', '2020-04-21 20:44:58', 0, 0),
(106, 'Maecenas mollis consectetur urna, vel feugiat lectus. Donec tristique vel ligula a auctor. Vivamus semper, est et sodales gravida, libero elit efficitur nulla, quis hendrerit metus massa sit amet lorem. In gravida elit non mattis suscipit. Aliquam accumsan eu purus non mattis. Duis efficitur ipsum sapien, eget ornare magna scelerisque a. Curabitur ac nunc mollis, euismod sem at, tempor leo. Suspendisse dolor elit, dapibus sed gravida facilisis, accumsan eget risus. Praesent vestibulum libero in ante elementum blandit. Ut eget risus ac enim accumsan pulvinar. Curabitur et lectus in mi maximus auctor id quis dui. Etiam molestie vestibulum leo, nec euismod ligula bibendum non. Ut cursus, orci a feugiat lobortis, nisi lectus consectetur massa, in egestas dui orci ut nisi. Quisque sit amet nisi quis lectus malesuada lacinia non in nunc. Nunc sit amet hendrerit leo, id tincidunt nunc. Curabitur pharetra lacinia massa, eu luctus est.', 'Jacquelinne', 'What is up with that search for it stuff anyways', '2020-04-21 20:45:07', 0, 0),
(107, 'Vestibulum search for this id aliquam lectus. Duis tempor blandit quam. Proin at iaculis sapien. Nullam laoreet mollis luctus. Proin vulputate nunc nisl, eu hendrerit nunc consequat at. Nam imperdiet posuere ligula, vitae tempus dolor luctus a. Nunc quis nisi et sem dapibus accumsan non in ligula. Vestibulum luctus nisl ac massa euismod mollis. Maecenas in ligula dolor. Aenean quis malesuada quam. Nulla a ultricies quam, in imperdiet felis. Proin eu justo suscipit, aliquam ante sed, semper dui. Integer ut blandit lacus. Nullam vestibulum orci urna.', 'moderator', 'RULES OF THE FORUM!', '2020-04-21 20:47:51', 2, 0),
(108, 'Vestibulum id aliquam lectus. Duis tempor blandit quam. Proin at iaculis sapien. Nullam laoreet mollis luctus. Proin vulputate nunc nisl, eu hendrerit nunc consequat at. Nam imperdiet posuere ligula, vitae tempus dolor luctus a. Nunc quis nisi et sem dapibus accumsan non in ligula. Vestibulum luctus nisl ac massa euismod mollis. Maecenas in ligula dolor. Aenean quis malesuada quam. Nulla a ultricies quam, in imperdiet felis. Proin eu justo suscipit, aliquam ante sed, semper dui. Integer ut blandit lacus. Nullam vestibulum orci urna.', 'moderator', 'RULES OF THE FORUM!', '2020-04-21 20:47:59', 0, 0),
(109, 'Vestibulum id aliquam lectus. Duis tempor blandit quam. Proin at iaculis sapien. Nullam laoreet mollis luctus. Proin vulputate nunc nisl, eu hendrerit nunc consequat at. Nam imperdiet posuere ligula, vitae tempus dolor luctus a. Nunc quis nisi et sem dapibus accumsan non in ligula. Vestibulum luctus nisl ac massa euismod mollis. Maecenas in ligula dolor. Aenean quis malesuada quam. Nulla a ultricies quam, in imperdiet felis. Proin eu justo suscipit, aliquam ante sed, semper dui. Integer ut blandit lacus. Nullam vestibulum orci urna.', 'moderator', 'RULES OF THE FORUM!', '2020-04-21 20:48:07', 0, 0),
(110, 'Vestibulum id aliquam lectus. Duis tempor blandit quam. Proin at iaculis sapien. Nullam laoreet mollis luctus. Proin vulputate nunc nisl, eu hendrerit nunc consequat at. Nam imperdiet posuere ligula, vitae tempus dolor luctus a. Nunc quis nisi et sem dapibus accumsan non in ligula. Vestibulum luctus nisl ac massa euismod mollis. Maecenas in ligula dolor. Aenean quis malesuada quam. Nulla a ultricies quam, in imperdiet felis. Proin eu justo suscipit, aliquam ante sed, semper dui. Integer ut blandit lacus. Nullam vestibulum orci urna.', 'moderator', 'RULES OF THE FORUM!', '2020-04-21 20:48:16', 0, 0),
(111, 'Vestibulum id aliquam lectus. Duis tempor blandit quam. Proin at iaculis sapien. Nullam laoreet mollis luctus. Proin vulputate nunc nisl, eu hendrerit nunc consequat at. Nam imperdiet posuere ligula, vitae tempus dolor luctus a. Nunc quis nisi et sem dapibus accumsan non in ligula. Vestibulum luctus nisl ac massa euismod mollis. Maecenas in ligula dolor. Aenean quis malesuada quam. Nulla a ultricies quam, in imperdiet felis. Proin eu justo suscipit, aliquam ante sed, semper dui. Integer ut blandit lacus. Nullam vestibulum orci urna.', 'moderator', 'RULES OF THE FORUM!', '2020-04-21 20:48:22', 0, 0),
(112, 'Quisque search for this eu varius tortor, ac aliquam dolor. Praesent hendrerit justo at nulla lobortis interdum. Duis ullamcorper, lacus ac ornare accumsan, tellus libero consequat velit, a dignissim est quam nec elit. Pellentesque a tortor sed quam vulputate tempus. Etiam sed mi eu massa luctus ullamcorper. Ut tincidunt non lectus ornare scelerisque. Praesent congue bibendum nisl nec ultricies. Pellentesque rhoncus sodales dui, quis pulvinar sem iaculis eget. Ut felis nibh, molestie in elementum at, ullamcorper et ligula. Praesent sed eros vitae quam tincidunt imperdiet. Cras et aliquet lorem, sit amet luctus nunc. Curabitur odio sapien, hendrerit et tincidunt et, tincidunt auctor urna. Donec nec dignissim mauris, eu pretium odio. Donec quis pellentesque justo. Aliquam libero felis, suscipit id sodales vel, blandit vitae turpis.', 'Szokero', 'This is the main topic on the forum!', '2020-04-21 20:50:04', 0, 0),
(113, 'Quisque eu varius tortor, ac aliquam dolor. Praesent hendrerit justo at nulla lobortis interdum. Duis ullamcorper, lacus ac ornare accumsan, tellus libero consequat velit, a dignissim est quam nec elit. Pellentesque a tortor sed quam vulputate tempus. Etiam sed mi eu massa luctus ullamcorper. Ut tincidunt non lectus ornare scelerisque. Praesent congue bibendum nisl nec ultricies. Pellentesque rhoncus sodales dui, quis pulvinar sem iaculis eget. Ut felis nibh, molestie in elementum at, ullamcorper et ligula. Praesent sed eros vitae quam tincidunt imperdiet. Cras et aliquet lorem, sit amet luctus nunc. Curabitur odio sapien, hendrerit et tincidunt et, tincidunt auctor urna. Donec nec dignissim mauris, eu pretium odio. Donec quis pellentesque justo. Aliquam libero felis, suscipit id sodales vel, blandit vitae turpis.', 'Szokero', 'Topic of a random member', '2020-04-21 20:50:12', 0, 0),
(114, 'Quisque eu varius tortor, ac aliquam dolor. Praesent hendrerit justo at nulla lobortis interdum. Duis ullamcorper, lacus ac ornare accumsan, tellus libero consequat velit, a dignissim est quam nec elit. Pellentesque a tortor sed quam vulputate tempus. Etiam sed mi eu massa luctus ullamcorper. Ut tincidunt non lectus ornare scelerisque. Praesent congue bibendum nisl nec ultricies. Pellentesque rhoncus sodales dui, quis pulvinar sem iaculis eget. Ut felis nibh, molestie in elementum at, ullamcorper et ligula. Praesent sed eros vitae quam tincidunt imperdiet. Cras et aliquet lorem, sit amet luctus nunc. Curabitur odio sapien, hendrerit et tincidunt et, tincidunt auctor urna. Donec nec dignissim mauris, eu pretium odio. Donec quis pellentesque justo. Aliquam libero felis, suscipit id sodales vel, blandit vitae turpis.', 'Szokero', 'What is up with that search for it stuff anyways', '2020-04-21 20:50:21', 0, 0),
(115, 'Quisque eu varius tortor, ac aliquam dolor. Praesent hendrerit justo at nulla lobortis interdum. Duis ullamcorper, lacus ac ornare accumsan, tellus libero consequat velit, a dignissim est quam nec elit. Pellentesque a tortor sed quam vulputate tempus. Etiam sed mi eu massa luctus ullamcorper. Ut tincidunt non lectus ornare scelerisque. Praesent congue bibendum nisl nec ultricies. Pellentesque rhoncus sodales dui, quis pulvinar sem iaculis eget. Ut felis nibh, molestie in elementum at, ullamcorper et ligula. Praesent sed eros vitae quam tincidunt imperdiet. Cras et aliquet lorem, sit amet luctus nunc. Curabitur odio sapien, hendrerit et tincidunt et, tincidunt auctor urna. Donec nec dignissim mauris, eu pretium odio. Donec quis pellentesque justo. Aliquam libero felis, suscipit id sodales vel, blandit vitae turpis.', 'Szokero', 'Other topics are crap, so search for this instead', '2020-04-21 20:50:27', 0, 0),
(116, 'Quisque eu varius tortor, ac aliquam dolor. Praesent hendrerit justo at nulla lobortis interdum. Duis ullamcorper, lacus ac ornare accumsan, tellus libero consequat velit, a dignissim est quam nec elit. Pellentesque a tortor sed quam vulputate tempus. Etiam sed mi eu massa luctus ullamcorper. Ut tincidunt non lectus ornare scelerisque. Praesent congue bibendum nisl nec ultricies. Pellentesque rhoncus sodales dui, quis pulvinar sem iaculis eget. Ut felis nibh, molestie in elementum at, ullamcorper et ligula. Praesent sed eros vitae quam tincidunt imperdiet. Cras et aliquet lorem, sit amet luctus nunc. Curabitur odio sapien, hendrerit et tincidunt et, tincidunt auctor urna. Donec nec dignissim mauris, eu pretium odio. Donec quis pellentesque justo. Aliquam libero felis, suscipit id sodales vel, blandit vitae turpis.', 'Szokero', 'Man, search for this here!', '2020-04-21 20:50:45', 0, 1),
(117, 'Donec search for this blandit ultricies diam. Maecenas a nisl quis leo ornare imperdiet. Nam vehicula dolor dui. Nullam bibendum elementum ante ac lacinia. Duis pharetra ligula maximus enim tincidunt dignissim. Fusce ultrices purus turpis, ac efficitur massa fermentum eu. Nullam dignissim risus turpis, vitae malesuada leo elementum in. Maecenas accumsan, erat a convallis fringilla, dolor turpis volutpat tellus, ut sagittis nulla enim quis felis. Aenean at aliquam dolor. Aenean arcu odio, fermentum quis euismod porttitor, rhoncus eget lacus. Cras aliquet eleifend lorem in tincidunt. Nullam finibus rutrum nisl, at gravida neque elementum sed.', 'Jacquelinne', 'My password is jacq!', '2020-04-21 20:52:01', 3, 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `topics`
--

DROP TABLE IF EXISTS `topics`;
CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL,
  `who_started` varchar(64) NOT NULL,
  `post_number` int(10) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- A tábla adatainak kiíratása `topics`
--

INSERT INTO `topics` (`id`, `title`, `who_started`, `post_number`, `date`) VALUES
(82, 'What is up with that search for it stuff anyways', 'Karesz', 3, '2020-04-21 20:41:20'),
(81, 'Topic of a random member', 'member', 4, '2020-04-21 20:39:07'),
(80, 'This is the main topic on the forum!', 'admin', 7, '2020-04-21 20:05:38'),
(83, 'Other topics are crap, so search for this instead', 'Jacquelinne', 2, '2020-04-21 20:44:20'),
(84, 'RULES OF THE FORUM!', 'moderator', 5, '2020-04-21 20:47:51'),
(85, 'Man, search for this here!', 'Szokero', 1, '2020-04-21 20:50:45'),
(86, 'My password is jacq!', 'Jacquelinne', 1, '2020-04-21 20:52:01');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(64) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `permission` int(1) NOT NULL DEFAULT '1',
  `reported_times` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `permission`, `reported_times`) VALUES
(12, 'Karesz', 'karesz@gmail.com', 'f8b21d3a3ae3e5256cde3ac6f23b1ec5d2a3d079', 1, 0),
(11, 'Szokero', 'szoszi@asd.hu', '0e1ac10e838b7a32d99ed88d1feb06589bdb632f', 1, 1),
(4, 'moderator', 'mod@gmail.com', '79f52b5b92498b00cb18284f1dcb466bd40ad559', 2, 0),
(7, 'muted', 'muted@gmail.com', 'e4b074a036fcdaa716be36f4e93f268ffe1befb9', 0, 7),
(13, 'Jacquelinne', 'jacq@gmail.com', '8b72b4afa813896e9fcffea79e4ef67eb2640104', 1, 0),
(8, 'banned', 'banned@gmail.com', 'f702775542adefab834a1f25d8456bec8b7abfd9', -1, 14),
(9, 'admin', 'admin@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 3, 0),
(10, 'member', 'member@gmail.com', '6467baa3b187373e3931422e2a8ef22f3e447d77', 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
