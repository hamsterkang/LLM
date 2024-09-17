-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2024 at 02:21 PM
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
-- Database: `academaidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `academai`
--

CREATE TABLE `academai` (
  `creation_id` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `middle_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academai`
--

INSERT INTO `academai` (`creation_id`, `first_name`, `middle_name`, `last_name`, `email`, `password`) VALUES
(86, 'Marky', 'A.', 'Tan', 'mat@gmail.com', '$2y$10$333iI5Kc7xN.UA5qesU1e.czpgdSAOzkMue1p2daKndBUh8I/rgJu'),
(87, 'lucky', 'blue', 'smith', 'smith@gmail.com', '$2y$10$eSHbpzbFrb09Ij4tpqF7ZO2421U4mnwKcZzF/NmgGzdOHEATMvvjC'),
(88, 'SZZ', 'AZZZ', 'AZZZZ', 'azzc@gmail.com', '$2y$10$tf9JbnfpXCGexSsPSytEIOp.xhFfOeFf3BF/URdgUKFvqSoW.REZa'),
(91, 'mark jan', 'ambet', 'tan', 'mariajanaanatana@gmail.com', '$2y$10$0RWRecawVz182JXIjJGA7uOGVySB7cZTRE4MfYi4Z.Mqq5WbEQQaq'),
(93, 'dddddddd', 'dddddddddddd', 'ddddddddddddddddddd', 'c@gmail.com', '$2y$10$8nRJ.qx8z68y/oKbIGnxwesTuXQhfvoAxW6rwiFsrTucBRFZG9tYm'),
(99, 'dddddddd', 'dddddddddddd', 'ddddddddddddddddddd', 'ca@gmail.com', '$2y$10$TDPade/NBCwSsunffba1ou3riNVgA5yiM0PZsQjtnMso1dBg4W.LG'),
(142, 'dddddddd', 'dddddddddddd', 'ddddddddddddddddddd', 'ac@gmail.com', '$2y$10$Oi.aTakL1ukwK.82w/iR0uoTl9XhqgUamJrzTz/TtssoIu0VK.7Nu'),
(144, 'dddddddd', 'dddddddddddd', 'ddddddddddddddddddd', 'acc@gmail.com', '$2y$10$JYUxOvnPkx/JDPSaaI6L9eokDtt98JdIQebahgmtoKa1Jm7TxrKmu'),
(146, 'dddddddd', 'dddddddddddd', 'ddddddddddddddddddd', 'acck@gmail.com', '$2y$10$TyGs3EM0cwBUsEce.C6hgOYa0YcRMphIaj3TnUQDpfIOLvIQ9dTUi'),
(147, 'dddddddd', 'dddddddddddd', 'ddddddddddddddddddd', 'acckl@gmail.com', '$2y$10$X5kavKmA22/6I3ZP0r/cSeMPLavw221tqySs.es8hUDxAPA5X3VHu'),
(148, 'a', 'a', 'a', 'toyou@gmail.com', '$2y$10$muP4i8m/kYvrs/oyz/MquuEZKRSoOx77r41PHaUYR2YusFy6nT0OK'),
(150, 'a', 'a', 'a', 'toyou1@gmail.com', '$2y$10$xOykYlVCSjDdaBKs5QBNYuT/KMBNSmdHUO6BtRzzfK08sbg42JR4C'),
(156, 'qqq', 'qqq', 'qqq', 'qqq@gmail.com', '$2y$10$BTThzpvEaOMok2fvh3VBg.7cJAmKTe8R4udVAORPxtWvYMJ/JLgNm'),
(157, 'mark', 'ambet', 'tan', 'mark@gmail.com', '$2y$10$W934YeVqHzBO2qyktI03p.dENs6yU3zSTPW9baIDp/cPhebt5cPme'),
(158, 'Kathleen', 'Aquino', 'Santiago', 'kai@gmail.com', '$2y$10$0PBFSrZwoZc.6KQONXJxQOpVDXYMdm6Jv1cwSYRhepUxPBdD4zzUe'),
(159, 'Sairly', 'Werta', 'Lubguban', 'sai@gmail.com', '$2y$10$MSmSe6d/j1uhTpfxRmasC.Xh08AMmRdFoaKWpOB.89N310xbKEese'),
(160, 'Rhea', 'Jenn', 'Santiago', 'rhei@gmail.com', '$2y$10$4mE.heMU3N4ugr8xHW1hjeS0A95YDP7TIl23vuCAEv7Nm3CPVET7.'),
(161, 'Maxpein', 'Zin', 'Del Valle', 'zin@gmail.com', '$2y$10$M.tqhh6y7sL9sWqzLOegfump2DA07M2if5NugB/nv7oQE3Y0AASh2'),
(164, 'markl', 'ambet', 'jak', 'toyou12@gmail.com', '$2y$10$s6KOPVkEcOY6FyskWGYiiOibYfmFxI0CV7jNlzYOmE.36uHb1mdfW'),
(165, 'ff', 'ff', 'dd', 'doe@gmail.com', '$2y$10$kxIN12lEI92YuWM4EF0Gg.m75zVxpgexmpQKFFZuB3QGso1wdGoc2'),
(168, 'dd', 'dd', 'dd', 'hhhha@gmail.com', '$2y$10$MDyYA27DEE5IZzhMGV22zOlQqqxPanszgBsZaX8lXVUCkoGqvBc/K'),
(169, 'dddddddd', 'dddddddddddd', 'ddddddddddddddddddd', 'hh@gmail.com', '$2y$10$i8aq0fv.KuwF9qSDZVwKv.5aw0i6he2.2jFyQLOZW0ilH6JZje9Z2');

-- --------------------------------------------------------

--
-- Table structure for table `criteria`
--

CREATE TABLE `criteria` (
  `criteria_id` int(11) NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `criteria_name` varchar(255) NOT NULL,
  `advanced_text` text NOT NULL,
  `proficient_text` text NOT NULL,
  `needs_improvement_text` text NOT NULL,
  `warning_text` text NOT NULL,
  `weight` int(11) NOT NULL,
  `creation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `criteria`
--

INSERT INTO `criteria` (`criteria_id`, `subject_id`, `criteria_name`, `advanced_text`, `proficient_text`, `needs_improvement_text`, `warning_text`, `weight`, `creation_id`) VALUES
(180, 92, 'Criteria 1', 'eeeee', 'eeee', 'eeeeeeeee', 'eeeeee', 0, 164),
(181, 92, 'Criteria 2', 'eeeeeee', 'eeeeee', 'eeeeee', 'eeeeeeee', 0, 164),
(182, 93, 'Criteria 1', 'rrrrrrrrr', 'rrrrrrrr', 'rrrrrr', 'rrrrrr', 0, 164),
(213, 98, 'hhhhhh', 'hhhhhhh', 'hhhhhh', 'hhhhhh', 'hhh', 5, 91),
(214, 101, 'Criteria 1eee', 'eeeeeee', 'eeeeeeee', 'eeeeeeee', 'eeeeeeeeeeeeeeeeeeeeeeeeeeee', 3, 91),
(215, 101, 'eeeeeee', 'eeeeeeeeeeeee', 'eeeeeeeeeeeee', 'eeeeeeeeeeeee', 'eeeeeeeeeeeeeeeeeee', 233, 91),
(224, 104, 'handsome', 'ww', 'w', 'w', 'w', 1, 150),
(225, 104, 'beauty', 'aa', 'aa', 'aa', 'aa', 2, 150),
(226, 104, 'ggg', 'jjj', 'jdjd', 'ddj', 'cc', 2, 150),
(227, 104, 'hh', 'fff', 'cjc', 'ccj', 'cc', -5, 150),
(228, 104, 'hh', 'ddj', 'ccj', 'c', 'cc', 2, 150),
(230, 105, 'Criteria 1', 'dhcb', 'smike', 'wat', 'back then', 0, 150),
(234, 107, 'Criteria 1', 'djd', 'djd', 'saa', 'ss', 0, 150),
(244, 105, 'captain', 'america', 'is ', 'dead', 'why', 2, 150),
(245, 107, 'mmm', 'cc', 'cc', 'cc', 'cc', 2, 150),
(246, 110, 'gef', 'dd', 'ddddd', 'ddddddd', 'ddddddddd', 0, 91),
(247, 110, 'sad', 'ddd', 'dddd', 'dddddd', 'dddddddd', 0, 91),
(248, 111, 'Organization and Structure', ' Clear, logical flow with well-structured paragraphs and strong transitions.', 'Mostly organized with minor lapses in flow or structure.', 'Lacks clear structure, with some confusing or disorganized sections.', 'Poorly organized with little to no logical flow or coherence.', 25, 150),
(249, 111, 'Relevance', 'All content is highly relevant and directly supports the main topic or argument.', 'Mostly relevant content, with minor off-topic details.', ': Some relevant points, but includes unnecessary or off-topic information.', 'Largely irrelevant content that does not support the main topic.', 25, 150),
(250, 111, 'AI-Generated', 'Predominantly AI-generated content with little to no original work.', 'Heavy use of AI-generated content with limited original contribution.', 'Some reliance on AI-generated content, but still includes significant original input.', 'Minimal AI-generated content, with clear evidence of original thought and creativity.', 25, 150),
(251, 111, 'Plagiarism', 'Predominantly plagiarized content with little to no original work.', 'Some significant plagiarism; original content is overshadowed by copied material.', 'Minor instances of plagiarism; most content is original or properly cited.', 'No instances of plagiarism; all content is original or properly cited.', 25, 150);

-- --------------------------------------------------------

--
-- Table structure for table `essay_questions`
--

CREATE TABLE `essay_questions` (
  `quiz_id` int(11) DEFAULT NULL,
  `question` longtext NOT NULL,
  `min_words` int(11) DEFAULT NULL,
  `max_words` int(11) DEFAULT NULL,
  `time_limit` int(11) DEFAULT NULL,
  `num_quiz` int(11) DEFAULT NULL,
  `points_per_item` int(11) DEFAULT NULL,
  `rubric_id` int(11) DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `file_upload` blob DEFAULT NULL,
  `essay_id` int(11) NOT NULL,
  `essay_total_points` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `identification_questions`
--

CREATE TABLE `identification_questions` (
  `question_id` int(11) NOT NULL,
  `quiz_id` int(11) DEFAULT NULL,
  `question` varchar(150) NOT NULL,
  `correct_answer` varchar(255) NOT NULL,
  `time_limit` int(11) DEFAULT NULL,
  `num_quiz` int(11) DEFAULT NULL,
  `points_per_item` int(11) DEFAULT NULL,
  `identification_total_points` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `multiple_choice_questions`
--

CREATE TABLE `multiple_choice_questions` (
  `question_id` int(11) NOT NULL,
  `quiz_id` int(11) DEFAULT NULL,
  `question` varchar(150) NOT NULL,
  `options` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`options`)),
  `correct_answer` varchar(255) NOT NULL,
  `time_limit` int(11) DEFAULT NULL,
  `num_quiz` int(11) DEFAULT NULL,
  `points_per_item` int(11) DEFAULT NULL,
  `mcq_total_points` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `quiz_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `creation_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `quiz_total_points` int(11) NOT NULL DEFAULT 0,
  `is_active` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `num_criteria` int(11) DEFAULT NULL,
  `creation_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `title`, `num_criteria`, `creation_id`) VALUES
(92, 'rrr', 2, 164),
(93, 'dddddddd', 5, 164),
(94, 'dddddddd', 10, 164),
(95, 'dd', 1, 91),
(96, '33', 2, 91),
(97, '33', 2, 91),
(98, 'math', 3, 91),
(101, 'fffff', 2, 91),
(102, 'Ethics', 4, 91),
(104, 'vanilla secret-2', 5, 150),
(105, 'rose', 2, 150),
(107, 'babyflo', 2, 150),
(110, 'def', 2, 91),
(111, 'Application Development', 4, 150);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academai`
--
ALTER TABLE `academai`
  ADD PRIMARY KEY (`creation_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `criteria`
--
ALTER TABLE `criteria`
  ADD PRIMARY KEY (`criteria_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `fk_creation_id` (`creation_id`);

--
-- Indexes for table `essay_questions`
--
ALTER TABLE `essay_questions`
  ADD PRIMARY KEY (`essay_id`),
  ADD KEY `quiz_id` (`quiz_id`),
  ADD KEY `rubric_id` (`rubric_id`);

--
-- Indexes for table `identification_questions`
--
ALTER TABLE `identification_questions`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `quiz_id` (`quiz_id`);

--
-- Indexes for table `multiple_choice_questions`
--
ALTER TABLE `multiple_choice_questions`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `quiz_id` (`quiz_id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`quiz_id`),
  ADD KEY `creation_id` (`creation_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`),
  ADD KEY `fk_creation_id_subjects` (`creation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academai`
--
ALTER TABLE `academai`
  MODIFY `creation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `criteria`
--
ALTER TABLE `criteria`
  MODIFY `criteria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;

--
-- AUTO_INCREMENT for table `essay_questions`
--
ALTER TABLE `essay_questions`
  MODIFY `essay_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `identification_questions`
--
ALTER TABLE `identification_questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `multiple_choice_questions`
--
ALTER TABLE `multiple_choice_questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `essay_questions`
--
ALTER TABLE `essay_questions`
  ADD CONSTRAINT `essay_questions_ibfk_1` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`quiz_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `essay_questions_ibfk_2` FOREIGN KEY (`rubric_id`) REFERENCES `criteria` (`criteria_id`) ON DELETE SET NULL;

--
-- Constraints for table `identification_questions`
--
ALTER TABLE `identification_questions`
  ADD CONSTRAINT `identification_questions_ibfk_1` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`quiz_id`) ON DELETE CASCADE;

--
-- Constraints for table `multiple_choice_questions`
--
ALTER TABLE `multiple_choice_questions`
  ADD CONSTRAINT `multiple_choice_questions_ibfk_1` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`quiz_id`) ON DELETE CASCADE;

--
-- Constraints for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `quizzes_ibfk_1` FOREIGN KEY (`creation_id`) REFERENCES `academai` (`creation_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
