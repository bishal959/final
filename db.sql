

--
-- Database: `wptest`
--



CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `attendance` (`id`, `user_name`, `subject`, `date`, `status`) VALUES
(26, 'bishal', 'Operating System', '2023-06-17', 'Absent'),
(27, 'sayuj', 'Operating System', '2023-06-17', 'Absent');

-- --------------------------------------------------------


CREATE TABLE `form_data` (
  `id` int(11) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `form_data` (`id`, `status`, `subject`, `user_name`, `date`) VALUES
(33, 'Present', 'algo', '', '2023-05-23'),
(36, 'Present', 'algo', '', '2023-05-23');



CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `sender_id` varchar(11) NOT NULL,
  `message_text` text DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `message` (`id`, `sender_id`, `message_text`, `timestamp`) VALUES
(33, 'john', 'mnvn', '2023-08-14 18:03:45'),
(34, 'john', 'hello this is your daily doswe of internet', '2023-08-14 18:05:49'),
(35, 'john', 'gtre', '2023-08-14 18:06:57'),
(36, 'john', 'rwr', '2023-08-14 18:07:04'),
(37, 'john', 'rwr', '2023-08-14 18:08:59'),
(38, 'john', 'rwr', '2023-08-14 18:09:09'),
(39, 'john', 'dd', '2023-08-14 18:09:11'),
(40, 'john', 'ewrwr', '2023-08-14 18:09:25'),
(41, 'john', 'ewrwr', '2023-08-14 18:10:21'),
(42, 'john', 'ewrwr', '2023-08-14 18:12:31'),
(43, 'john', 'hello this is your daily doswe of internet', '2023-08-14 18:12:56'),
(44, 'john', 'ss', '2023-08-14 18:16:30'),
(45, 'john', 'sss', '2023-08-14 18:16:34');

-- --------------------------------------------------------


CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `subject` varchar(22) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `subject` (`id`, `user_id`, `subject`) VALUES
(1, 33, 'operating system'),
(2, 36, 'script');

-- --------------------------------------------------------



CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `users` (`id`, `user_name`, `password`, `role`) VALUES
(2, 'john', 'abc', 'admin'),
(23, 'bishal', '456', 'user'),
(33, 'bishal2', '456', 'teacher'),
(35, 'sayuj', '789', 'user'),
(36, 'sabin', '852', 'teacher'),
(38, 'sabin tamang', '8520', 'user');


ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_attendance` (`user_name`,`subject`);

ALTER TABLE `form_data`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);




ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `form_data`
--
ALTER TABLE `form_data`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;
