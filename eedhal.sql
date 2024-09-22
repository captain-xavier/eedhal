
--
-- Database: `eedhal`
--

-- --------------------------------------------------------

--
-- Table structure for table `organisation`
--

CREATE TABLE `organisation` (
  `id` int(11) NOT NULL,
  `regno` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `pwdc` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `organisation`
--

INSERT INTO `organisation` (`id`, `regno`, `email`, `password`, `pwdc`) VALUES
(1, 'fdsf5454', 'frvincentxavier2006@gmail.com', '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `orphanage`
--

CREATE TABLE `orphanage` (
  `name` varchar(50) NOT NULL,
  `mobile` char(10) NOT NULL,
  `food` varchar(50) NOT NULL,
  `quality` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `location` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `datetime` datetime NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `orphanage`
--

INSERT INTO `orphanage` (`name`, `mobile`, `food`, `quality`, `quantity`, `location`, `datetime`, `id`) VALUES
('THARUN KARTHICK K', '1234567890', 'jklk', 'aaa', 'aaaa', '1', '2024-09-20 15:34:00', 1),
('Tharun karthick K', '9876543321', 'fff', 'aaa', '50 People', '1', '2024-09-21 15:39:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` char(10) NOT NULL,
  `food` varchar(50) NOT NULL,
  `location` enum('1','2','3') NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`id`, `name`, `mobile`, `food`, `location`, `datetime`) VALUES
(1, 'THARUN KARTHICK K', '1234567890', 'jklk', '1', '2024-09-20 15:44:00');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `quantity` varchar(50) NOT NULL,
  `foodtype` enum('v','n','b') NOT NULL,
  `time` enum('m','a','d') NOT NULL,
  `date` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`quantity`, `foodtype`, `time`, `date`, `id`) VALUES
('50 People', 'b', 'a', '2024-10-03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL,
  `pwdc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `pwdc`) VALUES
(2, 'tharunkarthick@outlook.com', '1234', 1234),
(4, 'frvincentxavier2006@gmail.com', '123', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `organisation`
--
ALTER TABLE `organisation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orphanage`
--
ALTER TABLE `orphanage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `organisation`
--
ALTER TABLE `organisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orphanage`
--
ALTER TABLE `orphanage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
