-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2018 at 03:51 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aninfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anime`
--

CREATE TABLE `tb_anime` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `year` varchar(4) NOT NULL,
  `genre` text NOT NULL,
  `description` text NOT NULL,
  `cover` varchar(200) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_anime`
--

INSERT INTO `tb_anime` (`id`, `title`, `year`, `genre`, `description`, `cover`, `username`) VALUES
(2, 'Boku no Hero Academia', '2014', 'Action, Comedy, School, Shounen, Super Power', 'One day, a four-year-old boy came to a sudden realization: the world is not fair. Eighty percent of the world\'s population wield special abilities, known as \"quirks,\" which have given many the power to make their childhood dreams of becoming a superhero a reality. Unfortunately, Izuku Midoriya was one of the few born without a quirk, suffering from discrimination because of it. Yet, he refuses to give up on his dream of becoming a hero; determined to do the impossible, Izuku sets his sights on the elite hero training academy, UA High.', '03072018033646209370.jpg', 'katzura'),
(3, 'One-Punch Man', '2012', 'Action, Comedy, Parody, Sci-Fi, Super Power, Supernatural', 'After rigorously training for three years, the ordinary Saitama has gained immense strength which allows him to take out anyone and anything with just one punch. He decides to put his new skill to good use by becoming a hero. However, he quickly becomes bored with easily defeating monsters, and wants someone to give him a challenge to bring back the spark of being a hero.', '0307201802225580661.jpg', 'katzura'),
(7, 'Katekyo Hitman Reborn!', '2004', 'Action, Comedy, School, Shounen, Super Power', 'The life of Tsunayoshi \"No-Good Tsuna\" Sawada is a complete wreck. Terrible grades, horrible fitness, and a non-existent social life means he has no reason to attend school, especially after discovering that his crush, Kyouko Sasagawa, is already seeing someone. Unbeknownst to him however, the blood of Giotto, the great Vongola the First, runs through his veins.', '0307201803374932291.jpg', 'katzura'),
(8, 'Nurarihyon no Mago', '2008', 'Action, Demons, Horror, Shounen, Supernatural', 'Rikuo Nura appears to be an ordinary middle school student. Appearances, however, can be deceiving. In reality, the young boy has one-fourth of youkai blood and is the heir to a large clan of youkai led by his grandfather, Nurarihiyon. As a small child, he was told that youkai often perform evil deeds, leading to his reluctance to succeed the Nura Clan and doing whatever he could to avoid his destiny.', '03072018033837157584.jpg', 'katzura'),
(9, 'Kimi no Na wa', '2016', 'Supernatural, Drama, Romance, School', 'Mitsuha Miyamizu, a high school girl, yearns to live the life of a boy in the bustling city of Tokyoâ€”a dream that stands in stark contrast to her present life in the countryside. Meanwhile in the city, Taki Tachibana lives a busy life as a high school student while juggling his part-time job and hopes for a future in architecture.', '0307201803414487048.jpg', 'katzura'),
(10, 'Steins;Gate Movie: Fuka Ryouiki no DÃ©jÃ  vu', '2013', 'Sci-Fi, Drama', 'After a year in America, Kurisu Makise returns to Akihabara and reunites with Rintarou Okabe. However, their reunion is cut short when Okabe begins to experience recurring flashes of other timelines as the consequences of his time traveling start to manifest. These side effects eventually culminate in Okabe suddenly vanishing from the world, and only the startled Kurisu has any memory of his existence.', '0307201803432150317.jpg', 'katzura'),
(13, 'Gintama Movie 2: Kanketsu-hen - Yorozuya yo Eien N', '2013', 'Action, Sci-Fi, Comedy, Historical, Parody, Samurai, Shounen', 'When Gintoki apprehends a movie pirate at a premiere, he checks the camera\'s footage and finds himself transported to a bleak, post-apocalyptic version of Edo, where a mysterious epidemic called the \"White Plague\" has ravished the world\'s population. It turns out that the movie pirate wasn\'t a pirate after allâ€”it was an android time machine, and Gintoki has been hurtled five years into the future! Shinpachi and Kagura, his Yorozuya cohorts, have had a falling out and are now battle-hardened solo vigilantes and he himself has been missing for years, disappearing without a trace after scribbling a strange message in his journal.', '0307201804052551723.jpg', 'katzura'),
(14, 'No Game No Life: Zero', '2017', 'Game, Supernatural, Drama, Romance, Fantasy', 'In ancient Disboard, Riku is an angry, young warrior intent on saving humanity from the warring Exceed, the sixteen sentient species, fighting to establish the \"One True God\" amongst the Old Deus. In a lawless land, humanity\'s lack of magic and weak bodies have made them easy targets for the other Exceed, leaving the humans on the brink of extinction. One day, however, hope returns to humanity when Riku finds a powerful female Ex-machina, whom he names Schwi, in an abandoned elf city. Exiled from her Cluster because of her research into human emotions, Schwi is convinced that humanity has only survived due to the power of these feelings and is determined to understand the human heart. Forming an unlikely partnership in the midst of the overwhelming chaos, Riku and Schwi must now find the answers to their individual shortcomings in each other, and discover for themselves what it truly means to be human as they fight for their lives together against all odds. Each with a powerful new ally in tow, it is now up to them to prevent the extinction of the human race and establish peace throughout Disboard!', '0307201806104190759.jpg', 'katzura'),
(15, 'Tengen Toppa Gurren Lagann', '2007', 'Action, Adventure, Comedy, Mecha, Sci-Fi', 'Simon and Kamina were born and raised in a deep, underground village, hidden from the fabled surface. Kamina is a free-spirited loose cannon bent on making a name for himself, while Simon is a timid young boy with no real aspirations. One day while excavating the earth, Simon stumbles upon a mysterious object that turns out to be the ignition key to an ancient artifact of war, which the duo dubs Lagann. Using their new weapon, Simon and Kamina fend off a surprise attack from the surface with the help of Yoko Littner, a hot-blooded redhead wielding a massive gun who wanders the world above.\r\n', '030720180938195123.jpg', 'redberry6'),
(16, '3-gatsu no Lion 2nd Season', '2018', 'Drama, Game, Seinen, Slice of Life', 'Now in his second year of high school, Rei Kiriyama continues pushing through his struggles in the professional shogi world as well as his personal life. Surrounded by vibrant personalities at the shogi hall, the school club, and in the local community, his solitary shell slowly begins to crack. Among them are the three Kawamoto sistersâ€”Akari, Hinata, and Momoâ€”who forge an affectionate and familial bond with Rei. Through these ties, he realizes that everyone is burdened by their own emotional hardships and begins learning how to rely on others while supporting them in return. ', '0307201814453392119.jpg', 'redberry6'),
(17, 'Koe no Katachi', '2016', 'Drama, School, Shounen', 'As a wild youth, elementary school student Shouya Ishida sought to beat boredom in the cruelest ways. When the deaf Shouko Nishimiya transfers into his class, Shouya and the rest of his class thoughtlessly bully her for fun. However, when her mother notifies the school, he is singled out and blamed for everything done to her. With Shouko transferring out of the school, Shouya is left at the mercy of his classmates. He is heartlessly ostracized all throughout elementary and middle school, while teachers turn a blind eye.', '0307201814483080136.jpg', 'redberry6'),
(18, 'Sen to Chihiro no Kamikakushi', '2001', 'Adventure, Supernatural, Drama', 'Stubborn, spoiled, and naÃ¯ve, 10-year-old Chihiro Ogino is less than pleased when she and her parents discover an abandoned amusement park on the way to their new house. Cautiously venturing inside, she realizes that there is more to this place than meets the eye, as strange things begin to happen once dusk falls. Ghostly apparitions and food that turns her parents into pigs are just the startâ€”Chihiro has unwittingly crossed over into the spirit world. Now trapped, she must summon the courage to live and work amongst spirits, with the help of the enigmatic Haku and the cast of unique characters she meets along the way.', '0307201814575279597.jpg', 'redberry6'),
(19, 'Kizumonogatari III: Reiketsu-hen', '2017', 'Action, Mystery, Supernatural, Vampire', 'After helping revive the legendary vampire Kiss-shot Acerola-orion Heart-under-blade, Koyomi Araragi has become a vampire himself and her servant. Kiss-shot is certain she can turn him back into a human, but only once regaining her full power. \r\n\r\nAraragi has hunted down the three vampire hunters that defeated Kiss-shot and retrieved her limbs to return her to full strength. However, now that Araragi has almost accomplished what heâ€™s been fighting for this whole time, he has to consider if this is what he really wants. Once he revives this powerful immortal vampire, there is no telling what she might do, and there would be no way of stopping her.', '0307201815153082911.jpg', 'redberry6');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(32) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `nama`, `password`, `level`) VALUES
('katzura', 'Denny', '$2y$10$pmF0nUDxEQY2lFDYUcDlXersY.HRwHDq63wiASpuKZrOSI52sxewi', 1),
('redberry6', 'rudi', '$2y$10$4lsGehhA0hwrQviE3nMXyu0b1yo9jAmJ5lgYH7r.Gt5W3juJg30lK', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anime`
--
ALTER TABLE `tb_anime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anime`
--
ALTER TABLE `tb_anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
