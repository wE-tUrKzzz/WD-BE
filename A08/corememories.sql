-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2024 at 05:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(600) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'gaming1.jpg', 'This is the start of my introduction to gaming. I had some small consoles, but most of the time, I played on emulators all day without worrying about the next day. This set the stage for my interest in games, shaping who I am today. In a way, I’m a bit sad and jealous of my past self because of the simpler times, when the only problems I ever thought about were what to eat, what to play, or how to entertain myself for the day.', '#A2CAED'),
(2, 1, 'gaming2.jpg', 'MLBB (Mobile Legends Bang Bang) is the game that made me competitive in gaming. It was the very first game where I grinded for hours every day during my high school days, consistently playing my main hero to reach the top of the leaderboards. Aside from the gaming, this game helped me make friends, who, although we no longer hang out as much as before, are still in touch and talking, which makes me happy that I invested time in this game.', '#D7DA3F'),
(3, 1, 'gaming3.jpg', 'This game pushed me to my limits. Dark Souls 2, though considered the easiest in the series, was the game that made me want to quit. For instance, due to my rage quit, my save got corrupted, causing me to lose a week’s progress. Despite my frustrations, this game was very rewarding, teaching me that perseverance is essential to achieving any goal. It not only shaped my gaming experience but also helped me apply this mindset to other aspects of my life.\n\n', '#F97931'),
(4, 1, 'gaming4.jpg', 'Now in college, I managed to be part of a team to compete. The game was Valorant, a team-based 5v5 class shooter. Although I was only the sixth member (substitute) of the team, through our efforts, we placed 3rd. I enjoyed playing the game, which made me happy, but it also made me sad at times, as I always felt I could perform better and contribute more to our success.', '#44785'),
(5, 1, 'gaming5.jpg', 'During my free time, I’ve enjoyed relaxing games like Stardew Valley. The game’s calming farming life and cozy community have always drawn me in. Although I may not be the most efficient farmer, I find joy in tending to my crops, raising animals, and building connections with the townsfolk. While I appreciate the game and the tranquility it brings, there are times when I wish I could manage my farm more effectively and accomplish more in the game.', '#D7DA3F'),
(6, 2, 'music1.jpg', 'Rock was the first genre that introduced me to music, thanks to my father, who was a guitarist in a rock band. Growing up, I was constantly surrounded by rock songs, which naturally sparked my interest and made me develop a deep appreciation for the genre. The various subgenres of rock, from classic to alternative, inspired me to pick up the guitar. Though I’m not the most skilled player, I still enjoy strumming away during my free time, as it continues to bring me joy and a sense of connection to the music.', '#D7DA3F'),
(7, 2, 'music2.jpg', 'Since I am Filipino (Tagalog ako), it goes without saying that Filipino music holds a special place in my life. In this section, I mostly listened to mainstream music due to its popularity. However, lately, I’ve become more interested in discovering underrated songs, often as a way to pass the time. Besides that, I also enjoy old and patriotic songs, as they evoke a sense of pride in being Filipino and make me feel connected to my roots.', '#069F78'),
(8, 2, 'music3.jpg', 'EDM is where I tap into my wild side. My taste for this genre developed after hearing a song by the artist Skrillex in the game Far Cry 3. It made me feel energetic and free, like I couldn’t help but bop my head with every beat drop. Even though the music tends to be loud, I’ve grown accustomed to it, enjoying every track as long as I like or know it.', '#F2393D'),
(9, 2, 'music4.jpg', 'Hiphop is a genre that resonates deeply with me. My appreciation for it grew after discovering Gloc 9, especially through his powerful lyrics and thought-provoking storytelling. His music made me feel connected to the struggles and experiences often reflected in Philippine culture, inspiring me to dive deeper into the genre. Even now, I’m drawn to the energy and narrative of hiphop, which continues to shape my musical taste.', '#E4C1A3'),
(10, 2, 'music5.jpg', 'A close friend who shares a passion for music introduced me to Conan Gray, and his songs quickly became some of my favorites. Tracks like \"People Watching,\" \"Checkmate,\" \"Final Flight,\" and \"Never Ending Song\" have struck a deep chord with me. Conan’s introspective lyrics and melancholic yet mesmerizing melodies resonate strongly, creating a sense of connection and nostalgia. His music captures raw emotions and experiences, making it easy to immerse myself in his world.', '#D7DA3F'),
(11, 2, 'music6.jpg', 'Last but not the least, my favorite band and genre: JP rock, specifically UNISON SQUARE GARDEN. This band has become my all-time favorite due to their unique style of songwriting and captivating performances, which fascinate me for some reason. Even though the lyrics are in a foreign language, I feel their passion and energy in every note and melody. No matter what, UNISON SQUARE GARDEN will always hold a special place as one of my favorite bands.', '#1185D7'),
(12, 3, 'family1.jpg', 'My Ate, Liah, although occasionally has a strong attitude, is very lively and engaging in close-knit settings with familiar people. However, in the presence of strangers, she tends to become more reserved or distant when speaking to unfamiliar faces.', '#8680C6'),
(13, 3, 'family2.jpg', 'My mama, though strict and overly cautious at times, has always shown unwavering care and concern for us. Her quiet strength and sacrifice have shaped our family, teaching us the value of responsibility and hard work. Despite her reserved nature, her love and dedication are evident in everything she does. She has always prioritized our well-being, often putting others before herself, which makes her one of her best qualities. Her wisdom and selflessness are qualities I deeply admire and will always cherish.', '#8680C6'),
(14, 3, 'family3.jpg', 'My father, though quiet and reserved, is incredibly intelligent, especially when it comes to computers. His expertise in the field has always been a source of inspiration for me. As an overseas Filipino worker (OFW), he has faced countless challenges, sacrificing time and comfort to provide for our family. Despite the distance, his dedication and hard work have always driven him to ensure our future is secure. His resilience and determination are qualities I deeply respect and strive to carry forward.', '#8680C6'),
(15, 3, 'family4.jpg', 'My friends have always been an important part of my life. They bring laughter, support, and companionship, making even the toughest moments more manageable. Each of them has their own unique personality and strengths, whether it’s their loyalty, kindness, or humor. They’ve been there to celebrate the highs and offer a shoulder to lean on during the lows. Through shared experiences, conversations, and countless adventures, they’ve become more than just friends—they’re family. Their presence has enriched my life in ways I’ll always be grateful for.', '#8680C6'),
(16, 4, 'pet1.jpg', 'Meow! (I’m Kuro, the quiet and sleek one with all-black fur. I enjoy watching from the shadows and keeping to myself.)', '#d0ddf5'),
(17, 4, 'pet2.jpg', 'Meow Meow! (Hi, I’m Luna! I’m a sweet and gentle cat with half black and white fur. I love curling up in the bed of my owner.)', NULL),
(18, 4, 'pet3.jpg', 'Woof woof! (I’m Ellie, the playful and energetic pup! I love running around, wagging my tail, and keeping everyone on their toes.)', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Gaming', 'A vibrant hub of fun and adventure, filled with thrilling video games and exciting challenges that spark creativity and excitement.\n', 'The Gaming Island represents the feelings that I come across when I specifically play in the virtual world of gaming. Puzzles, action, challenges, and many more fuel my desires in gaming. It’s a place where imagination runs wild, filled with moments of triumph, teamwork, and fun. Whether it’s mastering new skills, engaging in friendly competition, or simply escaping into an adventurous storyline, Gaming Island is a vibrant and dynamic part of your personality. It’s where every victory, no matter how small, feels monumental, and every loss drives a deeper hunger to improve. This island is not just a pastime but a sanctuary where creativity and strategy collide to create unforgettable experiences.', '#B7E2EB', 'gamingIsland.svg', NULL),
(2, 'Music', 'A soulful retreat where melodies, rhythms, and songs bring joy, inspire creativity, and create lasting emotional connections.', 'Music is one of the things I can’t imagine living without. Through music, I express what I truly feel—my emotions feel more authentic, as though the right song has the power to bring out the real me. Whether I’m feeling sad or happy, music has a unique ability to make me feel what I truly want to feel. It elevates my world, lifting me out of boredom during long commutes or quiet evenings. Music also brings people together, whether through shared playlists or discovering new artists. These connections have not only enriched my life but also led to lasting friendships.', '#069F78', 'musicIsland.svg', NULL),
(3, 'Family', 'The foundation of love and togetherness, where bonds are strengthened, memories are cherished, and support is always present.', '\nFamily is the foundation of my life. We’ve grown together through every season, sharing countless moments that have shaped who we are. Alongside family, my friends have played an essential role in my life. They bring laughter, support, and encouragement, enriching my journey. Together, we celebrate both the joys and challenges life brings. Our bonds—whether with family or friends—have created lasting memories, fostering a sense of trust, love, and connection that will always remain. Through every milestone, their unwavering presence reminds me of the strength found in unity. These relationships are my anchor, grounding me with warmth and purpose as I navigate life’s path.', '#622D50', 'familyIsland.svg', NULL),
(4, 'Pet', 'A warm and lively space celebrating the unconditional love and joy that pets bring, creating a special bond of companionship and happiness.', 'My pets have brought immense joy and comfort to my life. Whether it’s the playful antics of my dog or the soothing presence of my cat, they have become cherished members of our family. Their unconditional love and loyalty brighten even the dullest days. Pets teach us the importance of patience, care, and companionship. From cuddles to playful moments, they’ve been a constant source of happiness, reminding me of the simple joys in life. Their presence has created countless memories that I hold dear.', '#7C3764', 'petIsland.svg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
